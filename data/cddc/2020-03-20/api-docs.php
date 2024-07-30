<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cddc',
        'version' => '2020-03-20',
    ],
    'directories' => [
        [
            'id' => 185350,
            'title' => '专有版API',
            'type' => 'directory',
            'children' => [
                'CreateMyBase',
            ],
        ],
        [
            'id' => 185352,
            'title' => '托管版API',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 101761,
                    'title' => '地域',
                    'type' => 'directory',
                    'children' => [
                        'DescribeRegions',
                    ],
                ],
                [
                    'id' => 101764,
                    'title' => '集群管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateDedicatedHostGroup',
                        'DeleteDedicatedHostGroup',
                        'ModifyDedicatedHostGroupAttribute',
                        'DescribeDedicatedHostGroups',
                    ],
                ],
                [
                    'id' => 101769,
                    'title' => '主机管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateDedicatedHost',
                        'DescribeDedicatedHosts',
                        'DescribeDedicatedHostAttribute',
                        'DescribeHostEcsLevelInfo',
                        'DescribeDedicatedHostDisks',
                        'ModifyDedicatedHostAttribute',
                        'ReplaceDedicatedHost',
                        'RestartDedicatedHost',
                        'DescribeHostWebShell',
                        'ModifyDedicatedHostClass',
                        'TagResources',
                        'ListTagResources',
                        'UntagResources',
                    ],
                ],
                [
                    'id' => 101794,
                    'title' => '主机账号管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateDedicatedHostAccount',
                        'DeleteDedicatedHostAccount',
                        'ModifyDedicatedHostPassword',
                        'ModifyDedicatedHostAccount',
                    ],
                ],
                [
                    'id' => 101814,
                    'title' => '实例管理',
                    'type' => 'directory',
                    'children' => [
                        'QueryHostInstanceConsoleInfo',
                        'QueryHostBaseInfoByInstance',
                    ],
                ],
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateMyBase' => [
            'summary' => '创建MyBase专有版主机，如未提供集群信息会自动创建MyBase专有版集群。',
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
                        'description' => '[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupDescription',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '集群名称，未传则为空',
                        'description' => '专属集群的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'testDedicatedGroupName',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'title' => '引擎类型',
                        'description' => '数据库类型，取值：'."\n"
                            .'- **alisql**。'."\n"
                            .'- **tair**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'tair' => 'tair',
                            'alisql' => 'alisql',
                        ],
                        'example' => 'alisql',
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安全组ID',
                        'description' => '安全组ID，可以指定多个安全组，多个安全组以英文逗号（,）分隔，传入格式为sg-t4neld965n89ocvt****,sg-t4neld965n89ocvu****。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sg-t4neld965n89ocvt****,sg-t4neld965n89ocvu****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID，您可以调用[DescribeRegions](~~214103~~)查看地域下的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1a',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-t4ni3mzqqw98vt317****',
                    ],
                ],
                [
                    'name' => 'ECSClassList',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'description' => 'ECS规格信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'sysDiskCapacity' => [
                                    'description' => '系统盘容量，单位为GB。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'minimum' => '40',
                                    'example' => '40',
                                ],
                                'instanceType' => [
                                    'description' => 'ECS规格。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'ecs.c6.large',
                                ],
                                'nodeCount' => [
                                    'description' => 'ECS购买数量。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'example' => '1',
                                ],
                                'sysDiskType' => [
                                    'description' => '系统盘磁盘类型，取值：'."\n"
                                        ."\n"
                                        .'- **cloud_essd**。'."\n"
                                        ."\n"
                                        .'- **cloud_ssd**。'."\n"
                                        ."\n"
                                        .'- **cloud_efficiency**。'."\n"
                                        ."\n"
                                        .'- **cloud**。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cloud_essd',
                                    'enum' => [
                                        'cloud_essd',
                                        'cloud_ssd',
                                        'cloud_efficiency',
                                        'cloud',
                                    ],
                                ],
                                'diskType' => [
                                    'description' => '数据盘类型，取值：'."\n"
                                        .'- **cloud_essd**。'."\n"
                                        ."\n"
                                        .'- **cloud_ssd**。'."\n"
                                        ."\n"
                                        .'- **cloud_efficiency**。'."\n"
                                        ."\n"
                                        .'- **cloud**。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cloud_essd',
                                    'enum' => [
                                        'cloud_essd',
                                        'cloud_ssd',
                                        'cloud_efficiency',
                                        'cloud',
                                    ],
                                ],
                                'diskCapacity' => [
                                    'description' => '数据盘容量。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '50',
                                ],
                                'diskCount' => [
                                    'description' => '挂载数据盘个数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'dataDiskPerformanceLevel' => [
                                    'description' => '数据盘PL等级。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PL1',
                                    'enum' => [
                                        'PL0',
                                        'PL1',
                                        'PL2',
                                        'PL3',
                                    ],
                                ],
                                'systemDiskPerformanceLevel' => [
                                    'description' => '系统盘PL等级。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PL1',
                                    'enum' => [
                                        'PL0',
                                        'PL1',
                                        'PL2',
                                        'PL3',
                                    ],
                                ],
                                'sysDiskAutoSnapshotPolicyId' => [
                                    'description' => '系统盘快照策略。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'sp-bp1i9wclcwpe52th****',
                                ],
                                'sysDiskEncrypted' => [
                                    'description' => '系统盘是否加密，系统盘只有为ESSD云盘时才可以设置。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'sysDiskKMSKeyId' => [
                                    'description' => '系统盘使用的KMS密钥ID，使用ECS默认加密服务时不用传值，系统盘只有为ESSD云盘时才可以设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'b3c210f3-3ffb-480e-9ca2-****',
                                ],
                                'dataDiskAutoSnapshotPolicyId' => [
                                    'description' => '数据盘快照策略。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'sp-bp1i9wclcwpe52th****',
                                ],
                                'dataDiskEncrypted' => [
                                    'description' => '数据盘是否加密。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'dataDiskKMSKeyId' => [
                                    'description' => '数据盘使用的KMS密钥ID，使用ECS默认加密服务时不用传值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'b3c210f3-3ffb-480e-9ca2-****',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"sysDiskCapacity":40,"instanceType":"ecs.d2s.10xlarge","nodeCount":1,"sysDiskType":"cloud_essd"}]',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型，目前仅支持**PrePaid**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'PrePaid',
                        'enum' => [
                            'PrePaid',
                        ],
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '4ed77dd1-ff52-407e-ac58-dc251822****',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动续费，取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '镜像ID',
                        'description' => '自定义镜像ID。'."\n"
                            ."\n"
                            .'> 若您需要使用默认镜像，无需填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'm-8vb11a30rc63x37c****',
                    ],
                ],
                [
                    'name' => 'OsPassword',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '主机登录密码，可以稍后设置。密码须符合如下要求：'."\n"
                            ."\n"
                            .'- 长度为8~30个字符。'."\n"
                            ."\n"
                            .'- 必须至少包含三项：大写字母、小写字母、数字和特殊字符。'."\n"
                            ."\n"
                            .'- 特殊符号`()\\`~!@#$%^&*-_+=|{}[]:;\'<>,.?/`'."\n"
                            ."\n"
                            .'> - 如果需要稍后设置主机登录密码，此参数填写空字符串即可。'."\n"
                            .'> - 如果需要设置主机登录密码，建议您使用HTTPS协议发送请求，避免密码泄露。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test123456',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已有专有版专属集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dhg-6dx5n9gjs96u****',
                    ],
                ],
                [
                    'name' => 'PeriodType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预付费类型，目前仅支持**Monthly**（包月）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Monthly',
                        'default' => 'Monthly',
                        'enum' => [
                            'Monthly',
                            'Weekly',
                        ],
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络VPCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-t4nbtmekgxotv0d3y****',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_key_pair',
                    ],
                ],
                [
                    'name' => 'PasswordInherit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用镜像的默认密码。'."\n"
                            ."\n"
                            .'- **false**（默认值）：不使用'."\n"
                            ."\n"
                            .'- **true**：使用'."\n"
                            ."\n"
                            .'> 若使用镜像的默认密码，**OSPassword**参数无需填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EcsHostName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Windows系统：长度为2～15个字符，允许使用大小写字母、数字。不能仅使用数字。'."\n"
                            .'其他操作系统（Linux等）：长度为2～64个字符，允许使用点号（.）分隔字符成多段，每段允许使用大小写字母、数字，但不能连续使用点号（.）。不能以点号（.）开头或结尾。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LocalHostname',
                    ],
                ],
                [
                    'name' => 'EcsInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。长度为2~128个字符，必须以大小写字母或中文开头，不能以http://和https://开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。默认值为实例的InstanceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'k8snode1',
                    ],
                ],
                [
                    'name' => 'EcsDeploymentSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云服务器部署集ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds-bp1brhwhoqinyjd6****',
                    ],
                ],
                [
                    'name' => 'EcsUniqueSuffix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当创建多台实例时，是否为HostName和InstanceName自动添加有序后缀。有序后缀从001开始递增，最大不能超过999。取值说明：'."\n"
                            ."\n"
                            .'- **true**：添加。'."\n"
                            ."\n"
                            .'- **false**（默认值）：不添加。'."\n"
                            ."\n"
                            .'当HostName或InstanceName按照指定排序格式设置，未设置命名后缀name_suffix，即命名格式为name_prefix[begin_number,bits]时，UniqueSuffix不生效，名称仅按照指定顺序排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'InternetChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络计费类型。取值范围：'."\n"
                            .'PayByBandwidth：按固定带宽计费。'."\n"
                            .'PayByTraffic：按使用流量计费。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'PayByTraffic' => 'PayByTraffic',
                            'PayByBandwidth' => 'PayByBandwidth',
                        ],
                        'example' => 'PayByBandwidth',
                        'default' => 'PayByBandwidth',
                    ],
                ],
                [
                    'name' => 'InternetMaxBandwidthOut',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网出带宽最大值，单位为Mbit/s。取值范围：0~100。'."\n"
                            ."\n"
                            .'默认值：0。设定为大于0时会自动创建公网IP。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建主机时，是否自动支付。'."\n"
                            ."\n"
                            .'- **false**：只生成订单不扣费，需要在【我的订单】页面手动确认支付。'."\n"
                            ."\n"
                            .'- **true**（默认值）：自动支付，请确保支付方式余额充足，否则会生成异常订单，只能作废订单。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'UserDataInBase64',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义数据是否采用Base64格式编码。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户自定义脚本数据，原始数据最多为16KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '主机标签信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '主机的标签键。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或 https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '主机的标签值。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以acs:开头，不能包含http://或 https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 18,
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
                                'example' => '937F6B32-A796-53A0-99C8-F7A9660E****',
                            ],
                            'OrderList' => [
                                'type' => 'object',
                                'properties' => [
                                    'OrderList' => [
                                        'description' => '订单列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'OrderId' => [
                                                    'description' => '订单ID。',
                                                    'type' => 'string',
                                                    'example' => '21767077790****',
                                                ],
                                                'CreateTimestamp' => [
                                                    'description' => '主机创建成功的时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1661498032347',
                                                ],
                                                'ECSInstanceIds' => [
                                                    'description' => '已创建成功的ECS主机ID，多个主机ID以英文逗号（,）分隔。',
                                                    'type' => 'string',
                                                    'example' => '["i-t4n1tandot8j3axw****","i-t4n1tandot8j3axv****"]',
                                                ],
                                                'DedicatedHostGroupName' => [
                                                    'description' => '创建的专有版集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'dhg-7a9********',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'COMMODITY.INVALID_COMPONENT',
                        'errorMessage' => 'Invalid component.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountPassword.Format',
                        'errorMessage' => 'The account password format is invalid.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'No host is available for the requested instance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"937F6B32-A796-53A0-99C8-F7A9660E****\\",\\n  \\"OrderList\\": {\\n    \\"OrderList\\": [\\n      {\\n        \\"OrderId\\": \\"21767077790****\\",\\n        \\"CreateTimestamp\\": 1661498032347,\\n        \\"ECSInstanceIds\\": \\"[\\\\\\"i-t4n1tandot8j3axw****\\\\\\",\\\\\\"i-t4n1tandot8j3axv****\\\\\\"]\\",\\n        \\"DedicatedHostGroupName\\": \\"dhg-7a9********\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateMyBaseResponse>\\n    <RequestId>937F6B32-A796-53A0-99C8-F7A9660E****</RequestId>\\n    <OrderList>\\n        <OrderId>21767077790****</OrderId>\\n        <CreateTimestamp>1661498032347</CreateTimestamp>\\n        <ECSInstanceIds>[\\"i-t4n1tandot8j3axv****\\"]</ECSInstanceIds>\\n        <DedicatedHostGroupName>dhg-7a9********</DedicatedHostGroupName>\\n    </OrderList>\\n</CreateMyBaseResponse>","errorExample":""}]',
            'title' => 'CreateMyBase',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'RDSRegion' => [
                                        'description' => '地域详情信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ZoneId' => [
                                                    'description' => '地域下的可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'ap-southeast-1a',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'ap-southeast-1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"Regions\\": {\\n    \\"RDSRegion\\": [\\n      {\\n        \\"ZoneId\\": \\"ap-southeast-1a\\",\\n        \\"RegionId\\": \\"ap-southeast-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<Regions>\\n    <RDSRegion>\\n        <ZoneId>ap-southeast-1a</ZoneId>\\n        <RegionId>ap-southeast-1</RegionId>\\n    </RDSRegion>\\n</Regions>\\n</DescribeRegionsReponse>","errorExample":""}]',
            'title' => '查看可选的地域和可用区',
            'summary' => '调用DescribeRegions接口查看地域ID。',
            'description' => '关于各个地域对应的ID，请参见[地域信息](~~198326~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDedicatedHostGroup' => [
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
                        'description' => '地域ID。可查看[地域信息](~~198326~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库引擎类型，取值：'."\n"
                            ."\n"
                            .'- **MySQL**'."\n"
                            .'- **SQL Server**'."\n"
                            .'<props="china">'."\n"
                            .'-  **Redis**</props>'."\n"
                            ."\n\n"
                            .'</props>'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'CpuAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => ' 专属集群的CPU超配比。'."\n"
                            ."\n"
                            .'> 取值范围：**100%**~**300%**，默认取值为**200%**，代表所有实例的CPU资源之和可以是实际CPU资源的2倍，充分利用资源。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'MemAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群中每台主机的内存最大使用率。'."\n"
                            ."\n"
                            .'> 取值范围：**0%**~**100%**，默认取值为**100%**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'DiskAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的空间超配比。'."\n"
                            ."\n"
                            .'> 取值范围：**100%**~**300%**，默认取值为**200%**，代表所有实例的空间资源之和可以是实际空间资源的2倍，充分利用资源。该设置对于 SQLServer 无效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'AllocationPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群资源调度的分配策略。取值：'."\n"
                            .'- **Evenly**（默认）：均衡分配，最大化追求更稳定的系统表现，优先从未分配资源或已分配资源较少的主机中分配资源。'."\n"
                            .'- **Intensively**：紧凑分配，最大化追求更充分的资源利用率，优先从创建时间较早且已分配资源较多的主机中分配资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Evenly',
                    ],
                ],
                [
                    'name' => 'VPCId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群归属的专有网络ID，可在专有网络控制台左侧单击**专有网络**查看目标专有网络ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-t4n7v5m6icc0a4314****',
                    ],
                ],
                [
                    'name' => 'HostReplacePolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机故障时系统的处理策略。取值：'."\n"
                            ."\n"
                            .'- **Auto**（默认）：自动替换主机。'."\n"
                            .'- **Manual**：手动替换主机。'."\n"
                            ."\n"
                            .'> 仅创建数据库引擎为**MySQL**的专属集群时，您可以根据实际需求选择主机故障处理策略。其余引擎均请使用**Auto**默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Auto',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成该参数值，用于保证请求的幂等性，防止重复提交请求。该参数值只能包含ASCII字符，且不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ETnLKlblzczshOTUbOCz*******',
                    ],
                ],
                [
                    'name' => 'OpenPermission',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开放专属集群内的主机的OS权限。取值：'."\n"
                            ."\n"
                            .'- **0**：关闭。'."\n"
                            .'- **1**：开放。'."\n"
                            ."\n"
                            .'> 仅创建数据库引擎为**MySQL、SQL Server**的专属集群时，您可以根据实际需求选择主机开放OS权限。其余引擎暂未提供主机开放OS权限功能，该参数取值默认为**关闭**。SQLServer 必须要指定开放权限（1）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupDesc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的名称。长度为1~64个字符，以大小字母或中文开头，可包含数字、下划线（_）或中划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mysqlcluster',
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
                                'example' => 'C6592723-09E1-4248-A78E-12AB00D7A79D',
                            ],
                            'DedicatedHostGroupId' => [
                                'description' => '创建的专属集群ID。',
                                'type' => 'string',
                                'example' => 'dhg-7a9********',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'You are not authorized to perform this action.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ClustersTemplateNotFound',
                        'errorMessage' => 'Key account cluster is not supported for the region.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C6592723-09E1-4248-A78E-12AB00D7A79D\\",\\n  \\"DedicatedHostGroupId\\": \\"dhg-7a9********\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDedicatedHostGroupReponse>\\n<RequestId>C6592723-09E1-4248-A78E-12AB00D7A79D</RequestId>\\n<DedicatedHostGroupId>dhg-7a9********</DedicatedHostGroupId>\\n</CreateDedicatedHostGroupReponse>","errorExample":""}]',
            'title' => '创建专属集群',
            'summary' => '调用CreateDedicatedHostGroup接口创建专属集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDedicatedHostGroup' => [
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
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标专属集群ID。可通过云数据库专属集群控制台的集群列表信息页查看。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dhg-h5i4p331f509****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标专属集群所在地域ID。可查看[地域信息](~~198326~~)获取。',
                        'type' => 'string',
                        'required' => false,
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E1765',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Host.Exist',
                        'errorMessage' => 'There are hosts in usercluster, can\'t delete it.',
                    ],
                    [
                        'errorCode' => 'Custins.Exist',
                        'errorMessage' => 'The cluster contains an instance and cannot be deleted.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDedicatedHostGroup.NotFound',
                        'errorMessage' => 'Specified DedicatedHostGroup does not exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E1765\\"\\n}","type":"json"}]',
            'title' => '删除专属集群',
            'summary' => '调用DeleteDedicatedHostGroup接口删除专属集群。',
        ],
        'ModifyDedicatedHostGroupAttribute' => [
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
                        'description' => '专属集群所在地域ID。可查看[地域信息](~~198326~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群ID。'."\n"
                            ."\n"
                            .'> 您可通过云数据库专属集群控制台集群列表查看目标专属集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dhg-h5i4p331f509****',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupDesc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mysql-cluster',
                    ],
                ],
                [
                    'name' => 'CpuAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的CPU超配比，取值范围：**100%**~**300%**。'."\n"
                            ."\n"
                            .'> 若您修改CPUC超配比为**300%**，代表所有实例的CPU资源之和是实际CPU资源的3倍，最大化使用CPU资源。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'MemAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群中每台主机的内存最大使用率。取值范围：**0%**~**100%**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'DiskAllocationRatio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的空间超配比。取值范围：**100%**~**200%**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'AllocationPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群资源调度的分配策略。取值：'."\n"
                            .'- **Evenly**：均衡分配，最大化追求更稳定的系统表现，优先从未分配资源或已分配资源较少的主机中分配资源。'."\n"
                            .'- **Intensively**：紧凑分配，最大化追求更充分的资源利用率，优先从创建时间较早且已分配资源较多的主机中分配资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Intensively',
                    ],
                ],
                [
                    'name' => 'HostReplacePolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机故障时系统的处理策略。取值：'."\n"
                            ."\n"
                            .'- **Auto**：自动替换主机。'."\n"
                            .'- **Manual**：手动替换主机。'."\n"
                            ."\n"
                            .'> 仅创建数据库引擎为**MySQL**的专属集群时，您可以根据实际需求选择主机故障处理策略。其余引擎均请使用Auto默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Auto',
                    ],
                ],
                [
                    'name' => 'OpenPermission',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开放专属集群内的主机的OS权限。取值：'."\n"
                            ."\n"
                            .'- **0**：关闭'."\n"
                            .'- **1**：开放'."\n"
                            ."\n"
                            .'> 仅创建数据库引擎为**MySQL、SQL Server、PostgreSQL**的专属集群时，您可以根据实际需求选择主机开放OS权限。其余引擎暂未提供主机开放OS权限功能，该参数取值默认为关闭。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22EEDAS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDedicatedHostGroup.NotFound',
                        'errorMessage' => '找不到目标主机组！',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22EEDAS\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedHostGroupAttributeResponse>\\r\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22EEDAS</RequestId>\\r\\n</ModifyDedicatedHostGroupAttributeResponse>","errorExample":""}]',
            'title' => '修改专属集群的配置',
            'summary' => '可修改的配置包括 CPU 超配比、内存使用率、空间超配比、资源分布策略等。',
            'description' => '更多信息，请参见[管理集群](~~182328~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDedicatedHostGroups' => [
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
                        'description' => '地域ID。可查看[地域信息](~~198326~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群ID。您可通过云数据库专属集群控制台集群列表查看目标专属集群ID。'."\n"
                            ."\n"
                            .'   - 该参数为空时，默认返回该地域内所有主机信息。'."\n"
                            .'   - 若传入具体的专属集群ID，则返回该地域该集群内所有主机信息。'."\n"
                            ."\n\n"
                            .' ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dhg-872yt76ann7e****',
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机镜像。取值：'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlEntAlwaysonLicense**：SQL'."\n"
                            ."\n"
                            .' Server集群版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlStdLicense**：SQL'."\n"
                            ."\n"
                            .' Server标准版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlEntLicense**：SQL'."\n"
                            ."\n"
                            .' Server企业版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlWebLicense**：SQL'."\n"
                            ."\n"
                            .' Server Web版'."\n"
                            ."\n"
                            .'- **AliLinux**：其他主机镜像。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliLinux',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据数据库引擎类型过滤主机列表。取值：'."\n"
                            ."\n"
                            .'<li>MySQL</li>'."\n"
                            .'<li>SQL Server</li>'."\n"
                            .'<li>PosgreSQL</li>'."\n"
                            .'<li props="china">Redis</li>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E12SD',
                            ],
                            'DedicatedHostGroups' => [
                                'type' => 'object',
                                'properties' => [
                                    'DedicatedHostGroups' => [
                                        'description' => '主机详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DiskAllocateRation' => [
                                                    'description' => '磁盘分配率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '100',
                                                ],
                                                'DeployType' => [
                                                    'description' => '实例部署方式。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'origin',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '主机创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-05-07T02:00Z',
                                                ],
                                                'DedicatedHostCountGroupByHostType' => [
                                                    'description' => '不同存储类型对应的主机数量。',
                                                    'type' => 'object',
                                                    'example' => '2',
                                                ],
                                                'Text' => [
                                                    'description' => '主机描述。',
                                                    'type' => 'string',
                                                    'example' => 'mysql-host',
                                                ],
                                                'DedicatedHostGroupId' => [
                                                    'description' => '主机所属专属集群ID。',
                                                    'type' => 'string',
                                                    'example' => ' dhg-34639v1jt4y4****',
                                                ],
                                                'DiskUtility' => [
                                                    'description' => '磁盘利用率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0',
                                                ],
                                                'MemUsedAmount' => [
                                                    'description' => '内存使用量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0',
                                                ],
                                                'MemAllocatedAmount' => [
                                                    'description' => '内存分配量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0',
                                                ],
                                                'CpuAllocationRatio' => [
                                                    'description' => '主机CPU超配比。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'MemAllocationRatio' => [
                                                    'description' => '主机内存超配比。'."\n"
                                                        ."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'MemAllocateRation' => [
                                                    'description' => '分配的内存比例。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '9.38',
                                                ],
                                                'MemUtility' => [
                                                    'description' => '内存利用率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0',
                                                ],
                                                'CpuAllocatedAmount' => [
                                                    'description' => 'CPU申请量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '3',
                                                ],
                                                'DedicatedHostGroupDesc' => [
                                                    'description' => '主机所属专属集群名称。',
                                                    'type' => 'string',
                                                    'example' => ' dhg-34639v1jt4y4****',
                                                ],
                                                'CpuAllocateRation' => [
                                                    'description' => 'CPU申请比例',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '9.38',
                                                ],
                                                'InstanceNumber' => [
                                                    'description' => '主机上实例数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'OpenPermission' => [
                                                    'description' => '主机OS权限。取值：'."\n"
                                                        ."\n"
                                                        .'- **0、1**：关闭'."\n"
                                                        ."\n"
                                                        .'- **2、3**（默认值）：开放'."\n"
                                                        ."\n"
                                                        .'> 创建数据库引擎为**MySQL**、**SQL Server**、**PostgreSQL**的专属集群时，您可以根据实际需求选择主机开放OS权限。'."\n",
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'VPCId' => [
                                                    'description' => '主机所属专属集群专有网络ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp1ov7as4yvz4kxei****',
                                                ],
                                                'DiskAllocatedAmount' => [
                                                    'description' => '磁盘分配容量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1024',
                                                ],
                                                'HostNumber' => [
                                                    'description' => '主机数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'DiskUsedAmount' => [
                                                    'description' => '磁盘使用量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1024',
                                                ],
                                                'AllocationPolicy' => [
                                                    'description' => '主机资源分配策略，取值：'."\n"
                                                        .'- **Evenly**：均衡分配，最大化追求更稳定的系统表现，优先从未分配资源或已分配资源较少的主机中分配资源。'."\n"
                                                        .'- **Intensively**：紧凑分配，最大化追求更充分的资源利用率，优先从创建时间较早且已分配资源较多的主机中分配资源。',
                                                    'type' => 'string',
                                                    'example' => 'Evenly',
                                                ],
                                                'Engine' => [
                                                    'description' => '主机数据库引擎类型。',
                                                    'type' => 'string',
                                                    'example' => 'MySQL',
                                                ],
                                                'DiskAllocationRatio' => [
                                                    'description' => '主机空间超配比。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'BastionInstanceId' => [
                                                    'description' => '主机的主实例D。若主机上无主实例，则返回空字符串。',
                                                    'type' => 'string',
                                                    'example' => 'rm-bp15rszyxs4t3****',
                                                ],
                                                'HostReplacePolicy' => [
                                                    'description' => '主机故障处理策略。取值：'."\n"
                                                        ."\n"
                                                        .'- Auto（默认）：自动替换主机。'."\n"
                                                        ."\n"
                                                        .'- Manual：手动替换主机。',
                                                    'type' => 'string',
                                                    'example' => 'Auto',
                                                ],
                                                'ZoneIDList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ZoneIDList' => [
                                                            'description' => '主机可用区列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '主机可用区列表。',
                                                                'type' => 'string',
                                                                'example' => 'cn-hangzhou-f',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Category' => [
                                                    'description' => '主机所属的专属集群系列。取值：'."\n"
                                                        ."\n"
                                                        .'- **Pro**：MyBase专有版集群'."\n"
                                                        ."\n"
                                                        .'- **Standard**：MyBase托管版集群',
                                                    'type' => 'string',
                                                    'example' => 'Pro',
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
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'You are not authorized to perform this action.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E12SD\\",\\n  \\"DedicatedHostGroups\\": {\\n    \\"DedicatedHostGroups\\": [\\n      {\\n        \\"DiskAllocateRation\\": 100,\\n        \\"DeployType\\": \\"origin\\",\\n        \\"CreateTime\\": \\"2021-05-07T02:00Z\\",\\n        \\"DedicatedHostCountGroupByHostType\\": 2,\\n        \\"Text\\": \\"mysql-host\\",\\n        \\"DedicatedHostGroupId\\": \\" dhg-34639v1jt4y4****\\",\\n        \\"DiskUtility\\": 0,\\n        \\"MemUsedAmount\\": 0,\\n        \\"MemAllocatedAmount\\": 0,\\n        \\"CpuAllocationRatio\\": 200,\\n        \\"MemAllocationRatio\\": 100,\\n        \\"MemAllocateRation\\": 9.38,\\n        \\"MemUtility\\": 0,\\n        \\"CpuAllocatedAmount\\": 3,\\n        \\"DedicatedHostGroupDesc\\": \\" dhg-34639v1jt4y4****\\",\\n        \\"CpuAllocateRation\\": 9.38,\\n        \\"InstanceNumber\\": 2,\\n        \\"OpenPermission\\": \\"1\\",\\n        \\"VPCId\\": \\"vpc-bp1ov7as4yvz4kxei****\\",\\n        \\"DiskAllocatedAmount\\": 1024,\\n        \\"HostNumber\\": 2,\\n        \\"DiskUsedAmount\\": 1024,\\n        \\"AllocationPolicy\\": \\"Evenly\\",\\n        \\"Engine\\": \\"MySQL\\",\\n        \\"DiskAllocationRatio\\": 200,\\n        \\"BastionInstanceId\\": \\"rm-bp15rszyxs4t3****\\",\\n        \\"HostReplacePolicy\\": \\"Auto\\",\\n        \\"ZoneIDList\\": {\\n          \\"ZoneIDList\\": [\\n            \\"cn-hangzhou-f\\"\\n          ]\\n        },\\n        \\"Category\\": \\"Pro\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedHostGroupsResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E12SD</RequestId>\\n    <DedicatedHostGroups>\\n        <DiskAllocateRation>100</DiskAllocateRation>\\n        <DeployType>origin</DeployType>\\n        <CreateTime>2021-05-07T02:00Z</CreateTime>\\n        <Text>mysql-host</Text>\\n        <DedicatedHostGroupId> dhg-34639v1jt4y4****</DedicatedHostGroupId>\\n        <DiskUtility>0</DiskUtility>\\n        <MemUsedAmount>0</MemUsedAmount>\\n        <MemAllocatedAmount>0</MemAllocatedAmount>\\n        <CpuAllocationRatio>200</CpuAllocationRatio>\\n        <MemAllocationRatio>100</MemAllocationRatio>\\n        <MemAllocateRation>9.38</MemAllocateRation>\\n        <MemUtility>0</MemUtility>\\n        <CpuAllocatedAmount>3</CpuAllocatedAmount>\\n        <DedicatedHostGroupDesc> dhg-34639v1jt4y4****</DedicatedHostGroupDesc>\\n        <CpuAllocateRation>9.38</CpuAllocateRation>\\n        <InstanceNumber>2</InstanceNumber>\\n        <OpenPermission>1</OpenPermission>\\n        <VPCId>vpc-bp1ov7as4yvz4kxei****</VPCId>\\n        <DiskAllocatedAmount>1024</DiskAllocatedAmount>\\n        <HostNumber>2</HostNumber>\\n        <DiskUsedAmount>1024</DiskUsedAmount>\\n        <AllocationPolicy>Evenly</AllocationPolicy>\\n        <Engine>MySQL</Engine>\\n        <DiskAllocationRatio>200</DiskAllocationRatio>\\n        <BastionInstanceId>rm-bp15rszyxs4t3****</BastionInstanceId>\\n        <HostReplacePolicy>Auto</HostReplacePolicy>\\n        <ZoneIDList>cn-hangzhou-f</ZoneIDList>\\n        <Category>Pro</Category>\\n    </DedicatedHostGroups>\\n</DescribeDedicatedHostGroupsResponse>","errorExample":""}]',
            'title' => '查询专属集群主机组信息',
            'summary' => '查询专有集群主机组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDedicatedHost' => [
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
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'目标集群ID。通过云数据库专属集群控制台**集群列表**查看目标集群ID。'."\n"
                            ."\n"
                            .'> 主机的数据库类型与集群的数据库类型一致。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dhg-6w7q18iwt5jo****',
                    ],
                ],
                [
                    'name' => 'HostClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机的规格。关于不同数据库类型支持的主机规格，详情请参见[主机规格详情](~~206343~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rds.g6.4xlarge',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机的付费类型。取值为**prepaid**（包年包月）。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'prepaid',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定主机的预付费类型。取值：'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'* **Year**：包年。'."\n"
                            .'* **Month**：包月。'."\n"
                            .'* **Week**：包周。'."\n"
                            ."\n"
                            .'</props>'."\n"
                            ."\n"
                            .'<props="intl">'."\n"
                            .'* **Year**：包年。'."\n"
                            .'* **Month**：包月。'."\n"
                            ."\n"
                            .'</props>'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买时长。取值：'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'* 当参数**Period**=**Year**时，**UsedTime**取值为**1**~**5**。'."\n"
                            .'* 当参数**Period**=**Month**时，**UsedTime**取值为**1**~**9**。'."\n"
                            .'* 当参数**Period**=**Week**时，**UsedTime**取值为**1**、**2**、**3**。'."\n"
                            ."\n"
                            .'</props>'."\n"
                            ."\n"
                            .'<props="intl">'."\n"
                            .'* 当参数**Period**=**Year**时，**UsedTime**取值为**1**~**5**。'."\n"
                            .'* 当参数**Period**=**Month**时，**UsedTime**取值为**1**~**9**。'."\n"
                            ."\n"
                            .'</props>'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成该参数值，用于保证请求的幂等性，防止重复提交请求。该参数值只能包含ASCII字符，且不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ETnLKlblzczshOTUbOCzSBZH8****',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动续费功能。取值：'."\n"
                            .'* **true**：开启。'."\n"
                            .'* **false**：不开启。'."\n"
                            ."\n"
                            .'> 不填写默认为**false**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机镜像。取值：'."\n"
                            .'  - **WindowsWithMssqlEntAlwaysonLicense**：SQL Server集群版'."\n"
                            .'  - **WindowsWithMssqlStdLicense**：SQL Server标准版'."\n"
                            .'  - **WindowsWithMssqlEntLicense**：SQL Server企业版'."\n"
                            .'  - **WindowsWithMssqlWebLicense**：SQL Server Web版'."\n"
                            .'  - **AliLinux**：其他主机镜像'."\n"
                            ."\n"
                            .'> 创建SQL Server主机时，需要填写对应版本的主机镜像。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliLinux',
                    ],
                ],
                [
                    'name' => 'OsPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机密码。 仅集群类型为**私有部署集群**时，支持创建主机密码。密码需符合如下要求：'."\n"
                            .'- 长度为8~30个字符。'."\n"
                            .'- 必须至少包含三项：大写字母、小写字母、数字和特殊字符。'."\n"
                            .'- 特殊符号：()\\\\`~!@#$%^&*-_+=|{}\\[\\]:;\'<>,.?/'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test123456',
                    ],
                ],
                [
                    'name' => 'HostStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机磁盘类型，仅针对Tair类型主机生效，当前只支持以下两种类型：'."\n"
                            .'- **cloud_essd**：PL1云盘'."\n"
                            .'- **cloud_essd0**：PL0云盘',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cloud_essd0' => 'cloud_essd0',
                            'cloud_essd' => 'cloud_essd',
                        ],
                        'example' => 'cloud_essd0',
                    ],
                ],
                [
                    'name' => 'HostStorage',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '主机磁盘大小，仅针对Tair类型主机生效，取值范围是（单位GB）：'."\n"
                            .'- 512'."\n"
                            .'- 1024'."\n"
                            .'- 1536'."\n"
                            .'- 2048'."\n"
                            .'- 2560'."\n"
                            .'- 3072'."\n"
                            .'- 3584'."\n"
                            .'- 4096',
                        'type' => 'string',
                        'required' => false,
                        'example' => '512',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所在集群的[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。调用[DescribeRegions](~~214103~~)接口查询可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机的ID，可通过专有网络控制台查看目标虚拟机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-bp133c8ifzxd3iv6q****',
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MyBase 开放版使用，创建开放版集群类型：onACK、onECS',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'onACK',
                    ],
                ],
                [
                    'name' => 'ClusterAlias',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MyBase开放版使用，开放版集群别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-on-ack-cluster',
                    ],
                ],
                [
                    'name' => 'VpcID',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MyBase开放版onECS集群指定VPC ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-xxxxxx',
                    ],
                ],
                [
                    'name' => 'ClusterServices',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => 'MyBase开放版onECS实例关联的服务。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'MyBase开放版onECS实例关联的服务。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '"Orchestrator3.2.6,Promethus2.49.1,Grafana10.2.3"',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MyBaseEcsClass',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'MyBase开放版onECS实例的参数。',
                        'type' => 'object',
                        'properties' => [
                            'ChargeType' => [
                                'description' => '付费类型，取值如下：'."\n"
                                    .'- PrePaid：预付费。'."\n"
                                    .'- PostPaid：后付费。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PrePaid',
                            ],
                            'EcsClassCode' => [
                                'description' => '实例规格。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ecs.g7.large',
                            ],
                            'Amount' => [
                                'description' => '购买数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'Period' => [
                                'description' => '购买on ECS主机的包年包月时长。当参数ChargeType取值为PrePaid时，Period参数必填。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PeriodType' => [
                                'description' => '包年包月时长的单位，默认为Month（月）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Month',
                            ],
                            'SystemDiskSize' => [
                                'description' => '系统盘容量。单位为GB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '40',
                            ],
                            'SystemDiskCategory' => [
                                'description' => '磁盘类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cloud_essd',
                            ],
                            'DataDiskSize' => [
                                'description' => '数据盘大小。单位为GB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '40',
                            ],
                            'DataDiskCategory' => [
                                'description' => '数据盘类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cloud_essd',
                            ],
                            'DataDiskCount' => [
                                'description' => '数据盘数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '2',
                            ],
                            'AutoRenew' => [
                                'description' => '是否自动续费，默认false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'Password' => [
                                'description' => 'ECS主机密码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '***********',
                            ],
                            'KeyPairName' => [
                                'description' => '密钥对名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test****',
                            ],
                            'SecurityGroupIds' => [
                                'description' => '实例所属安全组集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例所属安全组。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'sg-uf64zn0tc9qakm2j****',
                                ],
                                'required' => false,
                            ],
                            'Tags' => [
                                'description' => '主机标签信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '主机标签信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{\\"key1\\":\\"value1\\"}',
                                ],
                                'required' => false,
                            ],
                            'InternetMaxBandwidthOut' => [
                                'description' => '公网出带宽最大值，单位为Mbit/s。'."\n"
                                    ."\n"
                                    .'默认值：0。设定为大于0时会自动创建公网IP。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '100',
                            ],
                            'InternetChargeType' => [
                                'description' => '网络计费类型。取值范围：'."\n"
                                    .'- PayByBandwidth：按固定带宽计费。'."\n"
                                    .'- PayByTraffic：按使用流量计费。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PayByTraffic',
                            ],
                            'DepolymentSetId' => [
                                'description' => '部署集ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '****',
                            ],
                        ],
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
                                'description' => '订单ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '102565235',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C860658E-68A6-46C1-AF6E-3AE7C4D32375',
                            ],
                            'ClusterName' => [
                                'description' => '集群名称。',
                                'type' => 'string',
                                'example' => 'ca-2ze0x527ovq3y****',
                            ],
                            'DedicateHostList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DedicateHostList' => [
                                        'description' => '已创建完成的主机信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DedicatedHostId' => [
                                                    'description' => '已创建完成的主机ID。',
                                                    'type' => 'string',
                                                    'example' => ' ch-bp108dki3wdl6****',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'COMMODITY.INVALID_COMPONENT',
                        'errorMessage' => 'Invalid component.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountPassword.Format',
                        'errorMessage' => 'The account password format is invalid.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'No host is available for the requested instance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 102565235,\\n  \\"RequestId\\": \\"C860658E-68A6-46C1-AF6E-3AE7C4D32375\\",\\n  \\"ClusterName\\": \\"ca-2ze0x527ovq3y****\\",\\n  \\"DedicateHostList\\": {\\n    \\"DedicateHostList\\": [\\n      {\\n        \\"DedicatedHostId\\": \\" ch-bp108dki3wdl6****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDedicatedHostResponse>\\n    <OrderId>102565235</OrderId>\\n    <RequestId>C860658E-68A6-46C1-AF6E-3AE7C4D32375</RequestId>\\n    <DedicateHostList>\\n        <DedicatedHostId> ch-bp108dki3wdl6****</DedicatedHostId>\\n    </DedicateHostList>\\n</CreateDedicatedHostResponse>","errorExample":""}]',
            'title' => '添加专属集群主机',
            'summary' => '调用CreateDedicatedHost接口添加专属集群主机。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDedicatedHosts' => [
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
                        'description' => '[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群ID。您可以登录云数据库专属集群控制台，在**专属集群**列表查看并获取专属集群ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dhg-h5i4p331f509****',
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单号。您可以登录用户中心，在**订单列表**查看并获取订单号。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'HostType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机的存储类型，取值：'."\n"
                            .'- **dhg_local_ssd**：本地SSD盘'."\n"
                            .'- **dhg_cloud_ssd**、**dhg_cloud_essd**：ESSD云盘'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dhg_cloud_ssd',
                    ],
                ],
                [
                    'name' => 'HostStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机状态，取值：'."\n"
                            ."\n"
                            .'- **0**：创建中'."\n"
                            .'- **1**：运行中'."\n"
                            .'- **2**：故障中'."\n"
                            .'- **3**：准备下线'."\n"
                            .'- **4**：维护中'."\n"
                            .'- **5**：已下线'."\n"
                            .'- **6**：重启中'."\n"
                            .'- **7**：锁定中'."\n"
                            ."\n"
                            .'> 当主机出现故障时，主机会下线，下线过程中主机会迁移实例数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AllocationStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机是否可分配实例，取值：'."\n"
                            .'- **Allocatable**：允许实例分配'."\n"
                            .'- **Suspended**：停止实例分配',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Allocatable',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。您可以调用[DescribeRegions](~~214103~~)接口获取可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ap-southeast-1a',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专属集群的主机ID，您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'PageNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '展示总页码数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页展示数目。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询绑定有该标签的主机，包括TagKey和TagValue。单次最多支持传入5组值，格式：{"key1":"value1","key2":"value2"...}。'."\n"
                            ."\n"
                            .'> 按照主机标签过滤主机信息时，不需要填写**DedicatedHostId**参数，否则会按照**DedicatedHostId**过滤主机信息。',
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
                            'TotalRecords' => [
                                'description' => '查询返回主机总数目。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '40',
                            ],
                            'PageSize' => [
                                'description' => '每页展示数目。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22EASER',
                            ],
                            'PageNumbers' => [
                                'description' => '展示总页码数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'DedicatedHostGroupId' => [
                                'description' => '专属集群ID。',
                                'type' => 'string',
                                'example' => 'dhg-6w7q18iwt5jo****',
                            ],
                            'DedicatedHosts' => [
                                'type' => 'object',
                                'properties' => [
                                    'DedicatedHosts' => [
                                        'description' => '主机信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'HostType' => [
                                                    'description' => '主机的存储类型。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'dhg_cloud_ssd',
                                                ],
                                                'HostStorage' => [
                                                    'description' => '主机的存储总量，单位为GB。',
                                                    'type' => 'string',
                                                    'example' => '1234',
                                                ],
                                                'MemoryUsed' => [
                                                    'description' => '内存使用量，单位为GB。',
                                                    'type' => 'string',
                                                    'example' => '24576',
                                                ],
                                                'DedicatedHostGroupId' => [
                                                    'description' => '主机所属专属集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'dhg-6w7q18iwt5jo****',
                                                ],
                                                'AllocationStatus' => [
                                                    'description' => '主机是否可分配实例，取值：'."\n"
                                                        .'- **Allocatable**：允许实例分配'."\n"
                                                        .'- **Suspended**：停止实例分配',
                                                    'type' => 'string',
                                                    'example' => 'Suspended',
                                                ],
                                                'StorageUsed' => [
                                                    'description' => '存储使用量，单位为GB。',
                                                    'type' => 'string',
                                                    'example' => '588800',
                                                ],
                                                'EcsClassCode' => [
                                                    'description' => 'ECS规格代码。更多信息，请参见[ECS实例规格](~~25378~~)。',
                                                    'type' => 'string',
                                                    'example' => 'ecs.r5.16xlarge',
                                                ],
                                                'DedicatedHostId' => [
                                                    'description' => '主机ID。',
                                                    'type' => 'string',
                                                    'example' => 'ch-bp10a5id3boqi****',
                                                ],
                                                'MemAllocationRatio' => [
                                                    'description' => '内存使用率，单位为百分比。',
                                                    'type' => 'string',
                                                    'example' => '90',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '主机的创建时间，格式为**yyyy-MM-ddTHH:mm:ssZ（UTC时间）**。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-16 16:30:19',
                                                ],
                                                'IPAddress' => [
                                                    'description' => '主机的IP地址。',
                                                    'type' => 'string',
                                                    'example' => '192.168.XX.XX',
                                                ],
                                                'HostStatus' => [
                                                    'description' => '主机状态，取值：'."\n"
                                                        ."\n"
                                                        .'- **0**：创建中'."\n"
                                                        .'- **1**：运行中'."\n"
                                                        .'- **2**：故障中'."\n"
                                                        .'- **3**：准备下线'."\n"
                                                        .'- **4**：维护中'."\n"
                                                        .'- **5**：已下线'."\n"
                                                        .'- **6**：重启中'."\n"
                                                        .'- **7**：锁定中'."\n"
                                                        ."\n"
                                                        .'> 当主机出现故障时，主机会下线，主机下线前主机会迁移实例数据到其他主机上。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'HostName' => [
                                                    'description' => '主机名称。',
                                                    'type' => 'string',
                                                    'example' => 'ch-bp15xfnp706tl****',
                                                ],
                                                'HostCPU' => [
                                                    'description' => '主机CPU。',
                                                    'type' => 'string',
                                                    'example' => '16',
                                                ],
                                                'CpuUsed' => [
                                                    'description' => 'CPU使用量，单位为核。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'InstanceNumber' => [
                                                    'description' => '主机上部署的实例数量。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'OpenPermission' => [
                                                    'description' => '主机OS权限开放状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **0**：关闭'."\n"
                                                        ."\n"
                                                        .'- **1**（默认值）：开放',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'DistributionSymbol' => [
                                                    'description' => '主机分布标识。'."\n"
                                                        ."\n"
                                                        .'> 仅主机类型为**Tair**时返回此参数。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'VPCId' => [
                                                    'description' => '主机所属专属集群的专有网络ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp1roz55mrbj3ka1s****',
                                                ],
                                                'HostClass' => [
                                                    'description' => '主机规格。',
                                                    'type' => 'string',
                                                    'example' => 'rds.g6.4xlarge',
                                                ],
                                                'EndTime' => [
                                                    'description' => '主机的到期时间，格式为**yyyy-MM-ddTHH:mm:ssZ（UTC时间）**。',
                                                    'type' => 'string',
                                                    'example' => '2021-10-16 16:30:19',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '主机所在虚拟交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp133c8ifzxd3iv6q****',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '主机所在可用区。',
                                                    'type' => 'string',
                                                    'example' => 'ap-southeast-1a',
                                                ],
                                                'CPUAllocationRatio' => [
                                                    'description' => 'CPU使用率.。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'ImageCategory' => [
                                                    'description' => '主机镜像类型。',
                                                    'type' => 'string',
                                                    'example' => 'ALinux',
                                                ],
                                                'Engine' => [
                                                    'description' => '主机的数据库类型。',
                                                    'type' => 'string',
                                                    'example' => 'mysql',
                                                ],
                                                'DiskAllocationRatio' => [
                                                    'description' => '磁盘使用率，单位为百分比。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'HostMem' => [
                                                    'description' => '主机内存，单位GB。',
                                                    'type' => 'string',
                                                    'example' => '65536',
                                                ],
                                                'BastionInstanceId' => [
                                                    'description' => '关联的堡垒机ID。',
                                                    'type' => 'string',
                                                    'example' => 'bastionhost-cn-i7m2fgw****',
                                                ],
                                                'AccountName' => [
                                                    'description' => '自定义主机账号的名称。'."\n"
                                                        .'* 由小写字母、数字、下划线（_）组成。'."\n"
                                                        .'* 以字母开头，以字母或数字结尾。'."\n"
                                                        .'* 最少含2个字符，最多含16个字符。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'AccountType' => [
                                                    'description' => '主机账号类型，取值：'."\n"
                                                        ."\n"
                                                        .'**Normal**：普通账号'."\n"
                                                        ."\n"
                                                        .'**Admin**：管理员账号',
                                                    'type' => 'string',
                                                    'example' => 'Normal',
                                                ],
                                                'DistributionTag' => [
                                                    'description' => '主机分布标签。',
                                                    'type' => 'string',
                                                    'example' => 't4n9uz07h3r1tmcejtxf:1',
                                                ],
                                                'Category' => [
                                                    'description' => '专属集群类型，取值：'."\n"
                                                        ."\n"
                                                        .'- **Pro**：MyBase专有版'."\n"
                                                        ."\n"
                                                        .'- **Standard**：MyBase托管版'."\n"
                                                        ."\n"
                                                        .'>  仅中国站返回此参数。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'Standard',
                                                ],
                                                'EcsId' => [
                                                    'description' => 'ECS ID。'."\n"
                                                        ."\n"
                                                        .'>  仅中国站且专属集群类型为**MyBase专有版**时返回此参数。'."\n"
                                                        ."\n\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'i-2zec7l031p0jtru3pn7a',
                                                ],
                                                'DiskInfo' => [
                                                    'description' => 'ECS磁盘信息。'."\n"
                                                        ."\n"
                                                        .'>  仅中国站且专属集群类型为**MyBase专有版**时返回此参数。'."\n",
                                                    'type' => 'string',
                                                    'example' => '{\\"SystemDiskSize\\":20,\\"DataDiskCount\\":0,\\"DataDiskSize\\":0,\\"DataDiskCategory\\":[\\"\\"],\\"SystemDiskCategory\\":\\"cloud_essd\\"}',
                                                ],
                                                'ChargeType' => [
                                                    'description' => '付费类型。',
                                                    'type' => 'string',
                                                    'example' => 'PREPAY',
                                                ],
                                                'MssqlSupportVersion' => [
                                                    'description' => 'MyBase SQL Server主机支持的版本号。',
                                                    'type' => 'string',
                                                    'example' => '2012_std_ha,2012_std,2016_std_ha,2016_std,2017_std_ha,2017_std,2019_std_ha,2019_std',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'MaxAutoScaleHostStorage' => [
                                'description' => '本地盘磁盘自动扩展的上限值，单位GB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3661824',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Tag.InvalidTagsParameter',
                        'errorMessage' => 'tags parameter is invalid',
                    ],
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDedicatedHostGroup.NotFound',
                        'errorMessage' => 'Specified DedicatedHostGroup does not exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecords\\": 40,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22EASER\\",\\n  \\"PageNumbers\\": 2,\\n  \\"DedicatedHostGroupId\\": \\"dhg-6w7q18iwt5jo****\\",\\n  \\"DedicatedHosts\\": {\\n    \\"DedicatedHosts\\": [\\n      {\\n        \\"HostType\\": \\"dhg_cloud_ssd\\",\\n        \\"HostStorage\\": \\"1234\\",\\n        \\"MemoryUsed\\": \\"24576\\",\\n        \\"DedicatedHostGroupId\\": \\"dhg-6w7q18iwt5jo****\\",\\n        \\"AllocationStatus\\": \\"Suspended\\",\\n        \\"StorageUsed\\": \\"588800\\",\\n        \\"EcsClassCode\\": \\"ecs.r5.16xlarge\\",\\n        \\"DedicatedHostId\\": \\"ch-bp10a5id3boqi****\\",\\n        \\"MemAllocationRatio\\": \\"90\\",\\n        \\"CreatedTime\\": \\"2020-10-16 16:30:19\\",\\n        \\"IPAddress\\": \\"192.168.XX.XX\\",\\n        \\"HostStatus\\": \\"1\\",\\n        \\"HostName\\": \\"ch-bp15xfnp706tl****\\",\\n        \\"HostCPU\\": \\"16\\",\\n        \\"CpuUsed\\": \\"10\\",\\n        \\"InstanceNumber\\": \\"1\\",\\n        \\"OpenPermission\\": \\"1\\",\\n        \\"DistributionSymbol\\": \\"0\\",\\n        \\"VPCId\\": \\"vpc-bp1roz55mrbj3ka1s****\\",\\n        \\"HostClass\\": \\"rds.g6.4xlarge\\",\\n        \\"EndTime\\": \\"2021-10-16 16:30:19\\",\\n        \\"VSwitchId\\": \\"vsw-bp133c8ifzxd3iv6q****\\",\\n        \\"ZoneId\\": \\"ap-southeast-1a\\",\\n        \\"CPUAllocationRatio\\": \\"10\\",\\n        \\"ImageCategory\\": \\"ALinux\\",\\n        \\"Engine\\": \\"mysql\\",\\n        \\"DiskAllocationRatio\\": \\"10\\",\\n        \\"HostMem\\": \\"65536\\",\\n        \\"BastionInstanceId\\": \\"bastionhost-cn-i7m2fgw****\\",\\n        \\"AccountName\\": \\"test\\",\\n        \\"AccountType\\": \\"Normal\\",\\n        \\"DistributionTag\\": \\"t4n9uz07h3r1tmcejtxf:1\\",\\n        \\"Category\\": \\"Standard\\",\\n        \\"EcsId\\": \\"i-2zec7l031p0jtru3pn7a\\",\\n        \\"DiskInfo\\": \\"{\\\\\\\\\\\\\\"SystemDiskSize\\\\\\\\\\\\\\":20,\\\\\\\\\\\\\\"DataDiskCount\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"DataDiskSize\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"DataDiskCategory\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"SystemDiskCategory\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cloud_essd\\\\\\\\\\\\\\"}\\",\\n        \\"ChargeType\\": \\"PREPAY\\",\\n        \\"MssqlSupportVersion\\": \\"2012_std_ha,2012_std,2016_std_ha,2016_std,2017_std_ha,2017_std,2019_std_ha,2019_std\\"\\n      }\\n    ]\\n  },\\n  \\"MaxAutoScaleHostStorage\\": 3661824\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedHostsResponse>\\n    <TotalRecords>40</TotalRecords>\\n    <PageSize>20</PageSize>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22EASER</RequestId>\\n    <PageNumbers>2</PageNumbers>\\n    <DedicatedHostGroupId>dhg-6w7q18iwt5jo****</DedicatedHostGroupId>\\n    <DedicatedHosts>\\n        <HostType>dhg_cloud_ssd</HostType>\\n        <HostStorage>1234</HostStorage>\\n        <MemoryUsed>24576</MemoryUsed>\\n        <DedicatedHostGroupId>dhg-6w7q18iwt5jo****</DedicatedHostGroupId>\\n        <AllocationStatus>Suspended</AllocationStatus>\\n        <StorageUsed>588800</StorageUsed>\\n        <EcsClassCode>ecs.r5.16xlarge</EcsClassCode>\\n        <DedicatedHostId>ch-bp10a5id3boqi****</DedicatedHostId>\\n        <MemAllocationRatio>90</MemAllocationRatio>\\n        <CreatedTime>2020-10-16 16:30:19</CreatedTime>\\n        <IPAddress>192.168.XX.XX</IPAddress>\\n        <HostStatus>1</HostStatus>\\n        <HostName>ch-bp15xfnp706tl****</HostName>\\n        <HostCPU>16</HostCPU>\\n        <CpuUsed>10</CpuUsed>\\n        <InstanceNumber>1</InstanceNumber>\\n        <OpenPermission>1</OpenPermission>\\n        <DistributionSymbol>0</DistributionSymbol>\\n        <VPCId>vpc-bp1roz55mrbj3ka1s****</VPCId>\\n        <HostClass>rds.g6.4xlarge</HostClass>\\n        <EndTime>2021-10-16 16:30:19</EndTime>\\n        <VSwitchId>vsw-bp133c8ifzxd3iv6q****</VSwitchId>\\n        <ZoneId>ap-southeast-1a</ZoneId>\\n        <CPUAllocationRatio>10</CPUAllocationRatio>\\n        <ImageCategory>ALinux</ImageCategory>\\n        <Engine>mysql</Engine>\\n        <DiskAllocationRatio>10</DiskAllocationRatio>\\n        <HostMem>65536</HostMem>\\n        <BastionInstanceId>bastionhost-cn-i7m2fgw****</BastionInstanceId>\\n        <AccountName>test</AccountName>\\n        <AccountType>Normal</AccountType>\\n        <DistributionTag>t4n9uz07h3r1tmcejtxf:1</DistributionTag>\\n        <Category>Standard</Category>\\n        <EcsId>i-2zec7l031p0jtru3pn7a</EcsId>\\n        <DiskInfo>{\\\\\\"SystemDiskSize\\\\\\":20,\\\\\\"DataDiskCount\\\\\\":0,\\\\\\"DataDiskSize\\\\\\":0,\\\\\\"DataDiskCategory\\\\\\":[\\\\\\"\\\\\\"],\\\\\\"SystemDiskCategory\\\\\\":\\\\\\"cloud_essd\\\\\\"}</DiskInfo>\\n        <ChargeType>PREPAY</ChargeType>\\n    </DedicatedHosts>\\n    <MaxAutoScaleHostStorage>3661824</MaxAutoScaleHostStorage>\\n</DescribeDedicatedHostsResponse>","errorExample":""}]',
            'title' => '查询专属集群的主机信息',
            'summary' => '可以来查询专属集群的主机信息。',
            'description' => '添加主机后，您可以查看主机的详细信息，包括性能监控、CPU总数、内存总量、存储总量等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDedicatedHostAttribute' => [
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
                        'description' => '[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'DedicatedHostGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所属集群的ID。您可以登录云数据库专属集群控制台，在**集群列表**查看并获取专属集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dhg-34639v1jt4y4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostType' => [
                                'description' => '主机的存储类型，取值：'."\n"
                                    ."\n\n"
                                    .'- **dhg_cloud_ssd**、**dhg_cloud_essd**：ESSD云盘'."\n"
                                    ."\n"
                                    .'- **dhg_local_ssd**：本地SSD盘'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'dhg_cloud_ssd',
                            ],
                            'HostStorage' => [
                                'description' => '主机的存储总量，单位为GB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'InstanceNumberROSlave' => [
                                'description' => '主机上只读实例的备节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'AccountType' => [
                                'description' => '账号类型，取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：普通权限账号'."\n"
                                    .'- **Admin**：管理员账号',
                                'type' => 'string',
                                'example' => 'Admin',
                            ],
                            'MemoryUsed' => [
                                'description' => '主机内存使用量，单位为GB。',
                                'type' => 'string',
                                'example' => '24576',
                            ],
                            'DedicatedHostGroupId' => [
                                'description' => '主机所属集群的ID。',
                                'type' => 'string',
                                'example' => 'dhg-34639v1jt4y4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '00A001D6-2630-5CBD-A23C-80BC1BAFDC31',
                            ],
                            'InstanceNumberROMaster' => [
                                'description' => '主机上只读实例的主节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'AllocationStatus' => [
                                'description' => '主机是否可分配实例，取值：'."\n"
                                    ."\n"
                                    .'- **Allocatable**：允许分配实例'."\n"
                                    .'- **Suspended**：停止分配实例',
                                'type' => 'string',
                                'example' => 'Suspended',
                            ],
                            'StorageUsed' => [
                                'description' => '主机的存储使用量，单位为GB。',
                                'type' => 'string',
                                'example' => '588800',
                            ],
                            'EcsClassCode' => [
                                'description' => 'ECS规格代码。',
                                'type' => 'string',
                                'example' => 'ecs.r5.16xlarge',
                            ],
                            'DedicatedHostId' => [
                                'description' => '主机ID。',
                                'type' => 'string',
                                'example' => 'ch-bp10a5id3boqi****',
                            ],
                            'MemAllocationRatio' => [
                                'description' => '内存使用率，单位为百分比。',
                                'type' => 'string',
                                'example' => '90',
                            ],
                            'CreatedTime' => [
                                'description' => '主机创建成功的时间，格式为**yyyy-MM-ddTHH:mm:ssZ（UTC时间）**。',
                                'type' => 'string',
                                'example' => '2021-11-13T07:14:22Z',
                            ],
                            'IPAddress' => [
                                'description' => '主机的IP地址。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX',
                            ],
                            'AutoRenew' => [
                                'description' => '是否开启自动续费功能，取值：'."\n"
                                    .'* **true**：开启'."\n"
                                    .'* **false**（默认值）：不开启'."\n",
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'HostStatus' => [
                                'description' => '主机状态，取值：'."\n"
                                    ."\n"
                                    .'- **0**：创建中'."\n"
                                    .'- **1**：运行中'."\n"
                                    .'- **2**：故障中'."\n"
                                    .'- **3**：准备下线'."\n"
                                    .'- **4**：维护中'."\n"
                                    .'- **5**：已下线'."\n"
                                    .'- **6**：重启中'."\n"
                                    .'- **7**：锁定中'."\n"
                                    ."\n"
                                    .'> 当主机出现故障时，主机要下线，主机下线之前会将该故障主机上的实例进行迁移，从而保证数据的完整性。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'HostName' => [
                                'description' => '主机的名称。',
                                'type' => 'string',
                                'example' => 'ch-8vbj9x74z874o****',
                            ],
                            'HostCPU' => [
                                'description' => '主机的CPU，单位为核。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '16',
                            ],
                            'OpenPermission' => [
                                'description' => '是否开放专属集群内的主机的OS权限，取值：'."\n"
                                    ."\n"
                                    .'- **0**：不可开放状态'."\n"
                                    .'- **1**：开放状态',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'InstanceNumber' => [
                                'description' => '主机上部署实例的个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'CpuUsed' => [
                                'description' => '主机CPU使用量。',
                                'type' => 'string',
                                'example' => '36',
                            ],
                            'VPCId' => [
                                'description' => '专有网络的ID。',
                                'type' => 'string',
                                'example' => 'vpc-wz9vu1jb32wn3sdd6****',
                            ],
                            'HostClass' => [
                                'description' => '主机的规格。',
                                'type' => 'string',
                                'example' => 'mssql.host.c2xlarge',
                            ],
                            'RegionId' => [
                                'description' => '[地域ID](~~198326~~)。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'InstanceNumberMaster' => [
                                'description' => '主机上的主节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'VSwitchId' => [
                                'description' => 'VSwitch ID。',
                                'type' => 'string',
                                'example' => 'vsw-bp1kaugqyrzb58oc1****',
                            ],
                            'InstanceNumberSlave' => [
                                'description' => '主机上的备节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ExpiredTime' => [
                                'description' => '主机到期时间，格式为**yyyy-MM-ddTHH:mm:ssZ（UTC时间）**。',
                                'type' => 'string',
                                'example' => '2022-03-16T16:00:00Z',
                            ],
                            'ZoneId' => [
                                'description' => '可用区ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou-h',
                            ],
                            'CPUAllocationRatio' => [
                                'description' => '专属集群的cpu超配比，单位为百分比，精确到10%。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ImageCategory' => [
                                'description' => '主机镜像。引擎类型为**SQL Server**时返回，取值：'."\n"
                                    ."\n"
                                    .'- **WindowsWithMssqlEntAlwaysonLicense**：SQL Server集群版'."\n"
                                    ."\n"
                                    .'- **WindowsWithMssqlStdLicense**：SQL Server标准版'."\n"
                                    ."\n"
                                    .'- **WindowsWithMssqlEntLicense**：SQL Server企业版'."\n"
                                    ."\n"
                                    .'- **WindowsWithMssqlWebLicense**：SQL Server Web版',
                                'type' => 'string',
                                'example' => 'WindowsWithMssqlStdLicense',
                            ],
                            'DiskAllocationRatio' => [
                                'description' => '专属集群的空间超配比。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'HostMem' => [
                                'description' => '主机的内存，单位为MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2048',
                            ],
                            'AccountName' => [
                                'description' => '主机账号名称。'."\n"
                                    ."\n"
                                    .'- 由小写字母、数字、下划线（_）组成。'."\n"
                                    ."\n"
                                    .'- 以字母开头，以字母或数字结尾。'."\n"
                                    ."\n"
                                    .'- 包含2~16个字符。',
                                'type' => 'string',
                                'example' => 'cdp_system',
                            ],
                            'DistributionTag' => [
                                'description' => '主机分布的标签。',
                                'type' => 'string',
                                'example' => 'tag',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'The user permission does not support the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDedicatedHostGroup.NotFound',
                        'errorMessage' => 'Specified DedicatedHostGroup does not exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostType\\": \\"dhg_cloud_ssd\\",\\n  \\"HostStorage\\": 100,\\n  \\"InstanceNumberROSlave\\": 1,\\n  \\"AccountType\\": \\"Admin\\",\\n  \\"MemoryUsed\\": \\"24576\\",\\n  \\"DedicatedHostGroupId\\": \\"dhg-34639v1jt4y4****\\",\\n  \\"RequestId\\": \\"00A001D6-2630-5CBD-A23C-80BC1BAFDC31\\",\\n  \\"InstanceNumberROMaster\\": 1,\\n  \\"AllocationStatus\\": \\"Suspended\\",\\n  \\"StorageUsed\\": \\"588800\\",\\n  \\"EcsClassCode\\": \\"ecs.r5.16xlarge\\",\\n  \\"DedicatedHostId\\": \\"ch-bp10a5id3boqi****\\",\\n  \\"MemAllocationRatio\\": \\"90\\",\\n  \\"CreatedTime\\": \\"2021-11-13T07:14:22Z\\",\\n  \\"IPAddress\\": \\"192.168.XX.XX\\",\\n  \\"AutoRenew\\": \\"false\\",\\n  \\"HostStatus\\": \\"1\\",\\n  \\"HostName\\": \\"ch-8vbj9x74z874o****\\",\\n  \\"HostCPU\\": 16,\\n  \\"OpenPermission\\": \\"1\\",\\n  \\"InstanceNumber\\": 3,\\n  \\"CpuUsed\\": \\"36\\",\\n  \\"VPCId\\": \\"vpc-wz9vu1jb32wn3sdd6****\\",\\n  \\"HostClass\\": \\"mssql.host.c2xlarge\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"InstanceNumberMaster\\": 4,\\n  \\"VSwitchId\\": \\"vsw-bp1kaugqyrzb58oc1****\\",\\n  \\"InstanceNumberSlave\\": 1,\\n  \\"ExpiredTime\\": \\"2022-03-16T16:00:00Z\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n  \\"CPUAllocationRatio\\": \\"200\\",\\n  \\"ImageCategory\\": \\"WindowsWithMssqlStdLicense\\",\\n  \\"DiskAllocationRatio\\": \\"200\\",\\n  \\"HostMem\\": 2048,\\n  \\"AccountName\\": \\"cdp_system\\",\\n  \\"DistributionTag\\": \\"tag\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedHostAttributeResponse>\\n    <HostType>dhg_cloud_ssd</HostType>\\n    <HostStorage>100</HostStorage>\\n    <InstanceNumberROSlave>1</InstanceNumberROSlave>\\n    <AccountType>Admin</AccountType>\\n    <MemoryUsed>24576</MemoryUsed>\\n    <DedicatedHostGroupId>dhg-34639v1jt4y4****</DedicatedHostGroupId>\\n    <RequestId>00A001D6-2630-5CBD-A23C-80BC1BAFDC31</RequestId>\\n    <InstanceNumberROMaster>1</InstanceNumberROMaster>\\n    <AllocationStatus>Suspended</AllocationStatus>\\n    <StorageUsed>588800</StorageUsed>\\n    <EcsClassCode>ecs.r5.16xlarge</EcsClassCode>\\n    <DedicatedHostId>ch-bp10a5id3boqi****</DedicatedHostId>\\n    <MemAllocationRatio>90</MemAllocationRatio>\\n    <CreatedTime>2021-11-13T07:14:22Z</CreatedTime>\\n    <IPAddress>192.168.XX.XX</IPAddress>\\n    <AutoRenew>false</AutoRenew>\\n    <HostStatus>1</HostStatus>\\n    <HostName>ch-8vbj9x74z874o****</HostName>\\n    <HostCPU>16</HostCPU>\\n    <OpenPermission>1</OpenPermission>\\n    <InstanceNumber>3</InstanceNumber>\\n    <CpuUsed>36</CpuUsed>\\n    <VPCId>vpc-wz9vu1jb32wn3sdd6****</VPCId>\\n    <HostClass>mssql.host.c2xlarge</HostClass>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <InstanceNumberMaster>4</InstanceNumberMaster>\\n    <VSwitchId>vsw-bp1kaugqyrzb58oc1****</VSwitchId>\\n    <InstanceNumberSlave>1</InstanceNumberSlave>\\n    <ExpiredTime>2022-03-16T16:00:00Z</ExpiredTime>\\n    <ZoneId>cn-hangzhou-h</ZoneId>\\n    <CPUAllocationRatio>200</CPUAllocationRatio>\\n    <ImageCategory>WindowsWithMssqlStdLicense</ImageCategory>\\n    <DiskAllocationRatio>200</DiskAllocationRatio>\\n    <HostMem>2048</HostMem>\\n    <AccountName>cdp_system</AccountName>\\n    <DistributionTag>tag</DistributionTag>\\n</DescribeDedicatedHostAttributeResponse>","errorExample":""}]',
            'title' => '查询专属集群某个主机的参数信息',
            'summary' => '调用DescribeDedicatedHostAttribute接口查询专属集群某个主机的参数信息。',
        ],
        'DescribeHostEcsLevelInfo' => [
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
                    'name' => 'DbType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库引擎类型，取值：'."\n"
                            ."\n"
                            .'- **mysql**'."\n"
                            .'- **mssql**'."\n"
                            .'- **pgsql**'."\n"
                            .'- **redis**',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'mysql',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可查看[地域信息](~~198326~~)获取。',
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
                        'description' => '地域下的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ap-southeast-1a',
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例存储类型，取值：'."\n"
                            ."\n"
                            .'- **local_ssd**：SSD云盘'."\n"
                            .'- **cloud_essd**：ESSD PL1云盘'."\n"
                            .'- **cloud_essd2**：ESSD PL2云盘'."\n"
                            .'- **cloud_essd3**：ESSD PL3云盘',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'local_ssd',
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机镜像。取值：'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlEntAlwaysonLicense**：SQL Server集群版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlStdLicense**：SQL Server标准版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlEntLicense**：SQL Server企业版'."\n"
                            ."\n"
                            .'- **WindowsWithMssqlWebLicense**：SQL Server Web版'."\n"
                            ."\n"
                            .'- **AliLinux**：其他主机镜像。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliLinux',
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
                                'example' => '395858E2-2A82-4ED7-BB93-2DB60119EF4C',
                            ],
                            'HostEcsLevelInfos' => [
                                'description' => 'ECS主机信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CddcHostType' => [
                                            'description' => '主机类型 ，取值：'."\n"
                                                ."\n"
                                                .'- **general**: 通用型。'."\n"
                                                .'- **compute**: 计算型。'."\n"
                                                .'- **ram**: 内存型。'."\n"
                                                .'- **dragon**: 弹性裸金属服务器（神龙）。',
                                            'type' => 'string',
                                            'example' => 'ram',
                                        ],
                                        'Items' => [
                                            'description' => '主机规格详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'NetBandWidth' => [
                                                        'description' => '内网带宽，单位为Gbps。'."\n"
                                                            ."\n",
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'example' => '10',
                                                    ],
                                                    'EcsClass' => [
                                                        'description' => '规格族。',
                                                        'type' => 'string',
                                                        'example' => '通用型 g6',
                                                    ],
                                                    'RdsClassCode' => [
                                                        'description' => 'RDS规格。'."\n"
                                                            ."\n",
                                                        'type' => 'string',
                                                        'example' => 'mssql.cluster.host.g2xlarge	',
                                                    ],
                                                    'Cpu' => [
                                                        'description' => '主机CPU。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '24',
                                                    ],
                                                    'CpuFrequency' => [
                                                        'description' => '处理器频率，单位为GHz。',
                                                        'type' => 'string',
                                                        'example' => '2.5 GHz/3.2 GHz',
                                                    ],
                                                    'StorageIops' => [
                                                        'description' => '存储IOPS ，单位为万。'."\n"
                                                            ."\n",
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '5',
                                                    ],
                                                    'CloudStorageBandwidth' => [
                                                        'description' => '云盘带宽，单位为Gbit/s。',
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'example' => '4',
                                                    ],
                                                    'EcsClassCode' => [
                                                        'description' => 'ECS规格。'."\n"
                                                            ."\n",
                                                        'type' => 'string',
                                                        'example' => 'ecs.g6.2xlarge	',
                                                    ],
                                                    'IsCloudDisk' => [
                                                        'description' => '是否为云盘。'."\n"
                                                            ."\n",
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Memory' => [
                                                        'description' => '内存大小，单位为GB。'."\n"
                                                            ."\n",
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '192',
                                                    ],
                                                    'NetPackage' => [
                                                        'description' => '内网收发包，单位为万PPS。'."\n"
                                                            ."\n",
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '150',
                                                    ],
                                                    'CpuVersion' => [
                                                        'description' => '处理器型号。',
                                                        'type' => 'string',
                                                        'example' => 'Intel Xeon(Cascade Lake) Platinum 8269CY	',
                                                    ],
                                                    'LocalStorage' => [
                                                        'description' => '本地存储。'."\n"
                                                            ."\n",
                                                        'type' => 'string',
                                                        'example' => '7',
                                                    ],
                                                    'Description' => [
                                                        'description' => '主机的名称。',
                                                        'type' => 'string',
                                                        'example' => 'testxxx',
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
                        'errorCode' => 'InvalidAction',
                        'errorMessage' => 'The specified action is not valid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'You are not authorized to perform this action.',
                    ],
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"395858E2-2A82-4ED7-BB93-2DB60119EF4C\\",\\n  \\"HostEcsLevelInfos\\": [\\n    {\\n      \\"CddcHostType\\": \\"ram\\",\\n      \\"Items\\": [\\n        {\\n          \\"NetBandWidth\\": 10,\\n          \\"EcsClass\\": \\"通用型 g6\\",\\n          \\"RdsClassCode\\": \\"mssql.cluster.host.g2xlarge\\\\t\\",\\n          \\"Cpu\\": 24,\\n          \\"CpuFrequency\\": \\"2.5 GHz/3.2 GHz\\",\\n          \\"StorageIops\\": 5,\\n          \\"CloudStorageBandwidth\\": 4,\\n          \\"EcsClassCode\\": \\"ecs.g6.2xlarge\\\\t\\",\\n          \\"IsCloudDisk\\": 1,\\n          \\"Memory\\": 192,\\n          \\"NetPackage\\": 150,\\n          \\"CpuVersion\\": \\"Intel Xeon(Cascade Lake) Platinum 8269CY\\\\t\\",\\n          \\"LocalStorage\\": \\"7\\",\\n          \\"Description\\": \\"testxxx\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeHostEcsLevelInfoReponse>\\n<RequestId>395858E2-2A82-4ED7-BB93-2DB60119EF4C</RequestId>\\n<HostEcsLevelInfos>\\n    <CddcHostType>ram</CddcHostType>\\n    <Items>\\n        <Description>testxxx</Description>\\n        <Memory>192</Memory>\\n        <Cpu>24</Cpu>\\n        <NetPackage>150</NetPackage>\\n        <CloudStorageBandwidth>4</CloudStorageBandwidth>\\n        <CpuVersion>Intel Xeon(Cascade Lake) Platinum 8269CY\\t</CpuVersion>\\n        <IsCloudDisk>1</IsCloudDisk>\\n        <NetBandWidth>10</NetBandWidth>\\n        <LocalStorage>7</LocalStorage>\\n        <StorageIops>5</StorageIops>\\n        <RdsClassCode>mssql.cluster.host.g2xlarge\\t</RdsClassCode>\\n        <EcsClassCode>ecs.g6.2xlarge\\t</EcsClassCode>\\n        <CpuFrequency>2.5 GHz/3.2 GHz</CpuFrequency>\\n        <EcsClass>通用型 g6\\t</EcsClass>\\n    </Items>\\n</HostEcsLevelInfos>\\n</DescribeHostEcsLevelInfoReponse>","errorExample":""}]',
            'title' => '查询主机规格详细信息',
            'summary' => '调用DescribeHostEcsLevelInfo查询主机规格详细信息。',
            'description' => '添加主机后，您可以查看主机规格的详细信息，包括CPU、内存、处理器型号、主机类型、主机存储类型等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDedicatedHostDisks' => [
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
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp183v72jr033****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所在的地域ID。您可以登录云数据库专属集群控制台，查看主机所在[地域信息](~~198326~~)。',
                        'type' => 'string',
                        'required' => false,
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
                            'DedicatedHostId' => [
                                'description' => '主机ID。',
                                'type' => 'string',
                                'example' => 'ch-bp183v72jr033****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C6C6CF41-F284-4F63-AB4D-44FACE3BASQW',
                            ],
                            'Disks' => [
                                'description' => '磁盘信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '云盘或本地盘磁盘类型 ，取值：'."\n"
                                                ."\n"
                                                .'- **system**：系统盘'."\n"
                                                ."\n"
                                                .'- **data**： 数据盘'."\n",
                                            'type' => 'string',
                                            'example' => 'data',
                                        ],
                                        'Status' => [
                                            'description' => '云盘状态，取值：'."\n"
                                                ."\n"
                                                .'- **In_use**'."\n"
                                                ."\n"
                                                .'- **Available**'."\n"
                                                ."\n"
                                                .'- **Attaching**'."\n"
                                                ."\n"
                                                .'- **Detaching**'."\n"
                                                ."\n"
                                                .'- **Creating**'."\n"
                                                ."\n"
                                                .'- **ReIniting**'."\n",
                                            'type' => 'string',
                                            'example' => 'In_use',
                                        ],
                                        'PerformanceLevel' => [
                                            'description' => '磁盘性能。 '."\n"
                                                ."\n"
                                                .'> MyBase提供了**ESSD云盘**、**ESSD PL2云盘**、**ESSD PL3云盘**三个性能级别的云盘规格，PL级别越高，云盘性能越好。'."\n",
                                            'type' => 'string',
                                            'example' => 'PL1',
                                        ],
                                        'DiskId' => [
                                            'description' => '云盘或本地盘ID。',
                                            'type' => 'string',
                                            'example' => 'd-bp1dffpog8r2eowd****',
                                        ],
                                        'MaxThroughput' => [
                                            'description' => '磁盘最大吞吐量，单位为MB/S。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '284',
                                        ],
                                        'MaxIOPS' => [
                                            'description' => '磁盘最大IOPS，单位为万。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '18250',
                                        ],
                                        'HasDBInstance' => [
                                            'description' => '是否有实例运行在该磁盘上，取值：'."\n"
                                                .'- **true**：有运行的实例'."\n"
                                                .'- **false**：无运行的实例',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Device' => [
                                            'description' => '云盘或本地盘挂载实例的设备名。',
                                            'type' => 'string',
                                            'example' => '/dev/xvdb',
                                        ],
                                        'Size' => [
                                            'description' => '云盘或本地盘大小，单位为GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '329',
                                        ],
                                        'ZoneId' => [
                                            'description' => '云盘或本地盘所属的可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-h',
                                        ],
                                        'Category' => [
                                            'description' => '主机存储类型，取值：'."\n"
                                                .'- **cloud_ssd**：本地SSD盘'."\n"
                                                .'- **cloud_essd**：ESSD云盘'."\n"
                                                ."\n\n",
                                            'type' => 'string',
                                            'example' => 'cloud_essd',
                                        ],
                                        'DBInstanceId' => [
                                            'description' => '该磁盘上运行的实例ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'rm-bp121zcqr5h8m****',
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
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The user ID has no permission.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'The specified host info is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDedicatedHostGroup.NotFound',
                        'errorMessage' => 'The specified DedicatedHostGroup does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedHostId\\": \\"ch-bp183v72jr033****\\",\\n  \\"RequestId\\": \\"C6C6CF41-F284-4F63-AB4D-44FACE3BASQW\\",\\n  \\"Disks\\": [\\n    {\\n      \\"Type\\": \\"data\\",\\n      \\"Status\\": \\"In_use\\",\\n      \\"PerformanceLevel\\": \\"PL1\\",\\n      \\"DiskId\\": \\"d-bp1dffpog8r2eowd****\\",\\n      \\"MaxThroughput\\": 284,\\n      \\"MaxIOPS\\": 18250,\\n      \\"HasDBInstance\\": true,\\n      \\"Device\\": \\"/dev/xvdb\\",\\n      \\"Size\\": 329,\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"Category\\": \\"cloud_essd\\",\\n      \\"DBInstanceId\\": \\"rm-bp121zcqr5h8m****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedHostDisksResponse>\\n<DedicatedHostId>ch-bp183v72jr033****</DedicatedHostId>\\n<RequestId>C6C6CF41-F284-4F63-AB4D-44FACE3BASQW</RequestId>\\n<Disks>\\n    <Status>In_use</Status>\\n    <HasDBInstance>true</HasDBInstance>\\n    <MaxThroughput/>\\n    <Type>data</Type>\\n    <Category>cloud</Category>\\n    <ZoneId>cn-hangzhou-h</ZoneId>\\n    <DBInstanceId>rm-bp121zcqr5h8m****</DBInstanceId>\\n    <Size>329</Size>\\n    <Device>/dev/xvdb</Device>\\n    <PerformanceLevel>PL1</PerformanceLevel>\\n    <MaxIOPS>18250</MaxIOPS>\\n    <DiskId>d-bp1dffpog8r2eowd****</DiskId>\\n</Disks>\\n</DescribeDedicatedHostDisksResponse>","errorExample":""}]',
            'title' => '查询主机上的磁盘信息',
            'summary' => '调用DescribeDedicatedHostDisks接口查询主机上的磁盘信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDedicatedHostAttribute' => [
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
                        'description' => '主机所在[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'HostName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mysql-host',
                    ],
                ],
                [
                    'name' => 'AllocationStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机是否可分配实例，取值：'."\n"
                            .'- **1**：允许实例分配。'."\n"
                            .'- **0**：停止实例分配。',
                        'type' => 'string',
                        'required' => false,
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ESFS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                    [
                        'errorCode' => 'ParamTypeException',
                        'errorMessage' => 'The parameter\'s type error.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'Specified hostinfo is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ESFS\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedHostAttributeReponse>\\r\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ESFS</RequestId>\\r\\n</ModifyDedicatedHostAttributeReponse>","errorExample":""}]',
            'title' => '设置专属集群的主机是否允许分配实例',
            'summary' => '调用ModifyDedicatedHostAttribute接口设置专属集群的主机是否允许分配实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReplaceDedicatedHost' => [
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
                        'description' => '目标主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取目标主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'FailoverMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例主库的切换方案。取值：'."\n"
                            .'- **MaintainTime**（默认）：在实例维护时间段切换，等待当前主机上的主实例都切换成其他主机的备实例后再重启主机，避免影响业务。'."\n"
                            .'- **Immediate**：立即强制重启主机。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MaintainTime',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DedicatedHostId' => [
                                'description' => '专属集群的主机ID。',
                                'type' => 'string',
                                'example' => ' ch-bp10a5id3boqi****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22EDSD8',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10254125',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDedicatedHostId_NotFound',
                        'errorMessage' => 'specific DedicatedHostId not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedHostId\\": \\" ch-bp10a5id3boqi****\\",\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22EDSD8\\",\\n  \\"TaskId\\": 10254125\\n}","errorExample":""},{"type":"xml","example":"<ReplaceDedicatedHostReponse>\\n<DedicatedHostId> dhg-6w7q18iwt5jo****</DedicatedHostId>\\n<TaskId>10254125</TaskId>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22EDSD8</RequestId>\\n</ReplaceDedicatedHostReponse>","errorExample":""}]',
            'title' => '替换专属集群的主机',
            'summary' => '调用ReplaceDedicatedHost接口替换专属集群的主机。',
            'description' => '当MySQL主机故障策略选择手动替换，且MySQL主机状态为**故障中**时，您可调用该接口替换主机。'."\n"
                ."\n"
                .'> 您可通过调用[DescribeDedicatedHostAttribute](~~213010~~)接口，根据返回参数**HostStatus**的值获取当前主机的状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RestartDedicatedHost' => [
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
                        'description' => '主机所在的[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'FailoverMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主实例的切换方案，取值：'."\n"
                            .'- **MaintainTime**（默认）：在实例维护时间段切换，等待当前主机上的主实例切换到其他主机的备实例后再重启主机，避免影响业务。'."\n"
                            .'- **Immediate**：立即切换，即立即强制重启主机。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MaintainTime',
                    ],
                ],
                [
                    'name' => 'ForceStop',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制关机重启，取值：'."\n"
                            ."\n"
                            .'- true：强制重启。执行断电操作，所有未写入存储设备的缓存数据会丢失，请谨慎选择。'."\n"
                            ."\n"
                            .'- false（默认值）：正常重启。'."\n"
                            ."\n"
                            .'> 该参数仅对Tair主机生效，其余引擎主机重启均为正常重启。',
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
                            'DedicatedHostId' => [
                                'description' => '主机ID。',
                                'type' => 'string',
                                'example' => 'ch-bp10a5id3boqi****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22EDSH',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10254125',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidAction.NotSupport',
                        'errorMessage' => 'The host status does not support the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'Specified hostinfo is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedHostId\\": \\"ch-bp10a5id3boqi****\\",\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22EDSH\\",\\n  \\"TaskId\\": 10254125\\n}","errorExample":""},{"type":"xml","example":"<RestartDedicatedHostReponse>\\n<DedicatedHostId>ch-bp10a5id3boqi****</DedicatedHostId>\\n<TaskId>10254125</TaskId>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22EDSH</RequestId>\\n</RestartDedicatedHostReponse>","errorExample":""}]',
            'title' => '重启专属集群的主机',
            'summary' => '调用RestartDedicatedHost接口重启专属集群的主机。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHostWebShell' => [
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
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
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
                        'description' => '主机所在可用区ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'LoginUrl' => [
                                'description' => 'Webshell登录地址。',
                                'type' => 'string',
                                'example' => 'https://ecs-workbench-disposable.aliyun.com/account/disposable/login/sst/mybase.c7dfa64e9f/m44kih****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ESTG2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The user ID has no permission.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The instance does not support the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'The specified host info is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"LoginUrl\\": \\"https://ecs-workbench-disposable.aliyun.com/account/disposable/login/sst/mybase.c7dfa64e9f/m44kih****\\",\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ESTG2\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeHostWebShellReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ESTG2</RequestId>\\n<LoginUrl>https://ecs-workbench-disposable.aliyun.com/account/disposable/login/sst/mybase.c7dfa64e9f/m44kih****</LoginUrl>\\n</DescribeHostWebShellReponse>","errorExample":""}]',
            'title' => '获取专属集群主机 Webshell 登录地址',
            'summary' => '调用DescribeHostWebShell接口获取专属集群主机Webshell登录地址。',
            'description' => '专属集群MySQL、PostgreSQL类型的数据库引擎支持通过Webshell访问主机。具体详情请参见[通过Webshell访问主机](~~205456~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDedicatedHostClass' => [
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
                        'description' => '[地域ID](~~198326~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp1fgj3kt7fsb****',
                    ],
                ],
                [
                    'name' => 'TargetClassCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机升配的规格编码，详情请参见[主机规格详情](~~206343~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rds.c6.x4large',
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定主机规格的升配时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                            .'>仅当SwitchTimeMode为2时，需要传入SwitchTime参数。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2021-07-13T07:14:22Z',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '选择升配的执行模式，取值：'."\n"
                            .'- **0**（默认）：立刻执行升配。'."\n"
                            ."\n"
                            .'- **2**：在指定时间执行升配。'."\n"
                            ."\n"
                            .'> 若本参数的值为**2**，则必须同时传入**SwitchTime**参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DedicatedHostId' => [
                                'description' => '主机ID。',
                                'type' => 'string',
                                'example' => 'ch-bp1fgj3kt7fsb****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ESD12',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => '10254125',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAction',
                        'errorMessage' => 'The specified action is not valid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedHostId\\": \\"ch-bp1fgj3kt7fsb****\\",\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ESD12\\",\\n  \\"TaskId\\": \\"10254125\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedHostClassReponse>\\n<DedicatedHostId>ch-bp1fgj3kt7fsb****</DedicatedHostId>\\n<TaskId>10254125</TaskId>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ESD12</RequestId>\\n</ModifyDedicatedHostClassReponse>","errorExample":""}]',
            'title' => '升配主机的规格',
            'summary' => '调用ModifyDedicatedHostClass接口升配主机的规格。',
            'description' => '在创建专属集群MyBase主机后，如果当前主机规格配置无法满足您的业务需求，您可随时变更主机的规格，包括主机的CPU、内存等，更多信息请参见[升配主机规格](~~262822~~)。'."\n"
                .'> 主机升配会导致主机重启（主机上运行数据库实例也随之重启），关于重启主机对数据库实例产生影响，详情请参见[重启主机](~~141772~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
            'summary' => '为一个或多个主机绑定标签。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '主机ID，可以设置多个。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '主机ID，可以设置多个。'."\n"
                                .' **N**表示传入第几个主机ID。例如：'."\n"
                                .'- **Resourceid.1**表示传入第一个主机ID。'."\n"
                                .'- **Resourceid.2**表示传入第二个主机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ch-bp1yp3mqggn8****',
                        ],
                        'required' => true,
                        'example' => 'ch-t4n4dcdvu6840****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签的键。'."\n"
                                        ."\n"
                                        .'- **N**表示传入第几个标签的键。例如：'."\n"
                                        ."\n"
                                        .'    - **Tag.1.Key**表示传入第一个标签的键。'."\n"
                                        ."\n"
                                        .'    - **Tag.2.Key**表示传入第二个标签的键。'."\n"
                                        .'- 如果标签的键不存在，则自动创建。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'demokey',
                                ],
                                'Value' => [
                                    'description' => '标签的值。'."\n"
                                        ."\n"
                                        .'- **N**表示传入第几个标签的值。例如：'."\n"
                                        ."\n"
                                        .'    - **Tag.1.Value**表示传入第一个标签的值。'."\n"
                                        ."\n"
                                        .'    - **Tag.2.Value**表示传入第二个标签的值。'."\n"
                                        .'- 如果标签的值不存在，则自动创建。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'demovalue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值固定为DEDICATEDHOST。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEDICATEDHOST',
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
                                'example' => '4B938011-874B-5F54-8B9E-7E2A08B3AA13',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.QuotaExceed',
                        'errorMessage' => 'The Tags parameter number is exceed. Valid is 20.',
                    ],
                    [
                        'errorCode' => 'NoPermission.SystemTag',
                        'errorMessage' => 'The operator is not permission for the system tag',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.%s.Value parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.%s.Key parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The ResourceIds parameter\'s number is exceed , Valid : 50',
                    ],
                    [
                        'errorCode' => 'InvalidTagValue.Malformed',
                        'errorMessage' => 'The specified parameter "Tag.n.Value" is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidDedicatedHostId.NotFound',
                        'errorMessage' => 'The parameter - ResourceIds.N is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter "ResourceType" is not valid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The Tags parameter\'s number is exceed, Valid : 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'The parameter - ResourceIds.N should not be null.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contain duplicate key.',
                    ],
                    [
                        'errorCode' => 'InvalidTagKey.Malformed',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B938011-874B-5F54-8B9E-7E2A08B3AA13\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>4B938011-874B-5F54-8B9E-7E2A08B3AA13</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '为一个或多个主机绑定标签',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
            'summary' => '查询主机和标签的绑定关系。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值固定为DEDICATEDHOST。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEDICATEDHOST',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '主机ID，可以设置多个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '主机ID，可以设置多个。'."\n"
                                ."\n"
                                .'**N**表示窜入第几个主机ID。例如：'."\n"
                                ."\n"
                                .'- **Resourceid.1**表示传入第一个主机ID。'."\n"
                                ."\n"
                                .'- **Resourceid.2**表示传入第二个主机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ch-t4n4dcdvu6840****',
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
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签的键。'."\n"
                                        ."\n"
                                        .'- **N**表示传入第几个标签的键。例如：'."\n"
                                        ."\n"
                                        .'    - **Tag.1.Key**表示传入第一个标签的键。'."\n"
                                        ."\n"
                                        .'    - **Tag.2.Key**表示传入第二个标签的键。'."\n"
                                        ."\n"
                                        .'- 本参数和**ResourceId.N**参数两者中必须传入一项。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'demokey',
                                ],
                                'Value' => [
                                    'description' => '标签的值。'."\n"
                                        ."\n"
                                        .'- **N**表示传入第几个标签的值。例如： '."\n"
                                        ."\n"
                                        .'    - **Tag.1.Value**表示传入第一个标签的值。'."\n"
                                        ."\n"
                                        .'    - **Tag.2.Value**表示传入第二个标签的值。'."\n"
                                        ."\n"
                                        .'- 如果标签的值不存在，则自动创建。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'demovalue',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2853CAA0-D7A2-5CAB-B3A8-BDE2994F320C',
                            ],
                            'TagResources' => [
                                'description' => '主机和标签的信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '主机和标签的信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagValue' => [
                                            'description' => '标签的值。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'demovalue',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。'."\n"
                                                ."\n"
                                                .'返回值固定为ALIYUN::CDDC::DEDICATEDHOST，即阿里云专属集群主机。',
                                            'type' => 'string',
                                            'example' => 'ALIYUN::CDDC::DEDICATEDHOST',
                                        ],
                                        'ResourceId' => [
                                            'description' => '主机ID。',
                                            'type' => 'string',
                                            'example' => 'ch-t4n4dcdvu6840****',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签的键。',
                                            'type' => 'string',
                                            'example' => 'demokey',
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
                        'errorCode' => 'MissingResourceType',
                        'errorMessage' => 'The specified parameter ResourceType is not valid.',
                    ],
                    [
                        'errorCode' => 'MissParameter.TagOrResourceId',
                        'errorMessage' => 'The parameter Tag.n or ResourceId.n is needed.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.%s.Value parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.%s.Key parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The ResourceIds parameter\'s number is exceed , Valid : 50',
                    ],
                    [
                        'errorCode' => 'InvalidTagValue.Malformed',
                        'errorMessage' => 'The specified parameter "Tag.n.Value" is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidDedicatedHostId.NotFound',
                        'errorMessage' => 'The parameter - ResourceIds.N is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter "ResourceType" is not valid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The Tags parameter\'s number is exceed, Valid : 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'The parameter - ResourceIds.N should not be null.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contain duplicate key.',
                    ],
                    [
                        'errorCode' => 'InvalidTagKey.Malformed',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2853CAA0-D7A2-5CAB-B3A8-BDE2994F320C\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"demovalue\\",\\n      \\"ResourceType\\": \\"ALIYUN::CDDC::DEDICATEDHOST\\",\\n      \\"ResourceId\\": \\"ch-t4n4dcdvu6840****\\",\\n      \\"TagKey\\": \\"demokey\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <RequestId>2853CAA0-D7A2-5CAB-B3A8-BDE2994F320C</RequestId>\\n    <TagResources>\\n        <TagValue>demovalue</TagValue>\\n        <ResourceType>ALIYUN::CDDC::DEDICATEDHOST</ResourceType>\\n        <ResourceId>ch-t4n4dcdvu6840****</ResourceId>\\n        <TagKey>demokey</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '调用 ListTagResources 查询主机和标签的绑定关系',
        ],
        'UntagResources' => [
            'summary' => '将主机的标签解绑。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '主机ID，可以设置多个。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '主机ID，可以设置多个。'."\n"
                                ."\n"
                                .'**N**表示窜入第几个主机ID。例如：'."\n"
                                ."\n"
                                .'- **Resourceid.1**表示传入第一个主机ID。'."\n"
                                ."\n"
                                .'- **Resourceid.2**表示传入第二个主机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ch-t4n4dcdvu6840****',
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
                        'description' => '标签的键。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签的键。'."\n"
                                ."\n"
                                .'- **N**表示传入第几个标签的键。例如：'."\n"
                                ."\n"
                                .'    - **Tag.1.Key**表示传入第一个标签的键。'."\n"
                                ."\n"
                                .'    - **Tag.2.Key**表示传入第二个标签的键。'."\n"
                                ."\n"
                                .'- 如果标签的键不存在，则自动创建。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demokey',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解绑主机上的所有标签，取值：'."\n"
                            ."\n"
                            .'- **true**：解绑主机上的所有标签。'."\n"
                            ."\n"
                            .'- **false**：不解绑上主机的所有标签，默认值。'."\n"
                            ."\n"
                            .'> 如果同时设置了TagKey.N和本参数，则本参数不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值固定为DEDICATEDHOST。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEDICATEDHOST',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B74AD197-214C-50F2-BF7D-B13632EE4D75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission.SystemTag',
                        'errorMessage' => 'The operator is not permission for the system tag',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.%s.Value parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.%s.Key parameter - %s is invalid',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The ResourceIds parameter\'s number is exceed , Valid : 50',
                    ],
                    [
                        'errorCode' => 'InvalidTagValue.Malformed',
                        'errorMessage' => 'The specified parameter "Tag.n.Value" is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidDedicatedHostId.NotFound',
                        'errorMessage' => 'The parameter - ResourceIds.N is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter "ResourceType" is not valid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The Tags parameter\'s number is exceed, Valid : 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'The parameter - ResourceIds.N should not be null.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contain duplicate key.',
                    ],
                    [
                        'errorCode' => 'InvalidTagKey.Malformed',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B74AD197-214C-50F2-BF7D-B13632EE4D75\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>B74AD197-214C-50F2-BF7D-B13632EE4D75</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '将主机的标签解绑',
        ],
        'CreateDedicatedHostAccount' => [
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
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义主机账号名称。'."\n"
                            .'* 长度为2~16个字符。'."\n"
                            .'* 以字母开头，以字母或数字结尾。'."\n"
                            .'* 由小写字母、数字、下划线（_）组成。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机账号名的密码。密码要求：'."\n"
                            .'* 长度为6~32位。'."\n"
                            .'* 大写字母、小写字母、数字、特殊字符。'."\n"
                            .'* 特殊字符为：`!@#$%^&*()_+-=`'."\n"
                            ."\n"
                            .'> 您的引擎为SQL Server时，密码要求不能包含账户名（忽略大小写）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testxxxxxx',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'BastionInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关联的堡垒机ID，可以在云数据库专属集群控制台**堡垒机列表**查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bastionhost-cn-xxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机账号类型，取值：'."\n"
                            .'- **Normal**：普通账号。'."\n"
                            .'- **Admin**： 管理员账号。'."\n"
                            ."\n"
                            .'关于主机账号的权限说明，请参见[主机权限说明](~~176240~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Admin',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '由客户端生成该参数值，用于保证请求的幂等性，防止重复提交请求。字符长度不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ETnLKlblzczshOTUbOCz*******',
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E12AS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAccountPassword.Format',
                        'errorMessage' => 'The account password format is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidAction.NotSupport',
                        'errorMessage' => 'The host status does not support the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'The host is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E12AS\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDedicatedHostAccountReponse>\\r\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22E12AS</RequestId>\\r\\n</CreateDedicatedHostAccountReponse>","errorExample":""}]',
            'title' => '创建专用主机帐户',
            'summary' => '调用CreateDedicatedHostAccount接口创建主机账号。',
            'description' => '每个主机只可以拥有一个主机账号，您必须删除之前的主机账号，才可创建新的主机账号，更多信息请参见，[创建主机账号](~~211413~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDedicatedHostAccount' => [
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
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机账号名称。'."\n"
                            ."\n"
                            .'- 由小写字母、数字、下划线组成。'."\n"
                            ."\n"
                            .'- 以字母开头，以字母或数字结尾。'."\n"
                            ."\n"
                            .'- 包含2~16个字符。',
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
                        'description' => '主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => false,
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E12AS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'Specified hostinfo is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountName.NotFound',
                        'errorMessage' => 'Specified account name does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E12AS\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDedicatedHostAccountResponse>\\r\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E12AS</RequestId>\\r\\n</DeleteDedicatedHostAccountResponse>  ","errorExample":""}]',
            'title' => '删除专属主机账号',
            'summary' => '调用DeleteDedicatedHostAccount接口删除主机账号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDedicatedHostPassword' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NewPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新密码。密码要求：'."\n"
                            ."\n"
                            .'- 长度为8~32位。'."\n"
                            ."\n"
                            .'- 须同时包含大写、小写、数字、特殊字符中的3种。'."\n"
                            ."\n"
                            .'- 特殊字符为：`!@#$%^&*()_+-=`'."\n"
                            ."\n"
                            .'> 当您的引擎为SQL Server时，密码要求不能包含账户名（忽略大小写）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test*****',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****	',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DedicatedHostName' => [
                                'description' => '主机名称。',
                                'type' => 'string',
                                'example' => 'test123****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E12AS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance does not exist or is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedHostName\\": \\"test123****\\",\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E12AS\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedHostPasswordReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22E12AS</RequestId>\\n<DedicatedHostName>test123****</DedicatedHostName>\\n</ModifyDedicatedHostPasswordReponse>","errorExample":""}]',
            'title' => '修改专属主机密码',
            'summary' => '调用ModifyDedicatedHostPassword接口修改主机root密码。',
            'description' => '本接口当前仅支持Tair主机。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDedicatedHostAccount' => [
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
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改主机账号的主机ID。可调用[DescribeDedicatedHosts](~~200944~~)获取目标主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp10a5id3boqi****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机账号名称。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test*****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改主机账号的主机所在地域ID。可调用[DescribeDedicatedHostAttribute](~~213010~~)获取。',
                        'type' => 'string',
                        'required' => false,
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidUserId.NotSupport',
                        'errorMessage' => 'The userid have no permission.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'Specified hostinfo is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountName.NotFound',
                        'errorMessage' => 'Specified account name does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedHostAccountReponse>\\r\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\r\\n</ModifyDedicatedHostAccountReponse>","errorExample":""}]',
            'title' => '修改专属集群主机账号',
            'summary' => '调用ModifyDedicatedHostAccount接口修改主机账号和密码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryHostInstanceConsoleInfo' => [
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
                        'description' => '主机所在地域ID。您可以登录云数据库专属集群控制台，查看[地域信息](~~198326~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-qingdao',
                    ],
                ],
                [
                    'name' => 'DedicatedHostId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主机ID。您可以登录云数据库专属集群控制台，在**主机列表**查看并获取主机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ch-bp1fgj3kt7fsb****',
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'HostInstanceConsoleInfos' => [
                                'description' => '实例信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例状态描述。',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'MaxConnIncreaseRatioValue' => [
                                            'description' => '上弹连接数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1300',
                                        ],
                                        'MemSize' => [
                                            'description' => '实例规格内存，单位为GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '16',
                                        ],
                                        'DiskSize' => [
                                            'description' => '实例存储空间，单位为GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '500',
                                        ],
                                        'Ip' => [
                                            'description' => '实例所在主机IP。',
                                            'type' => 'string',
                                            'example' => '172.22.XX.XX',
                                        ],
                                        'Port' => [
                                            'description' => '主机端口。',
                                            'type' => 'string',
                                            'example' => '3443',
                                        ],
                                        'EngineVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '5.8',
                                        ],
                                        'MemoryIncreaseRatioValue' => [
                                            'description' => '上弹内存配置。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '64',
                                        ],
                                        'CpuIncreaseRatioValue' => [
                                            'description' => '上弹CPU配置。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '16',
                                        ],
                                        'DBInstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'rm-bp1m5z8002gyj****',
                                        ],
                                        'Engine' => [
                                            'description' => '数据库类型。',
                                            'type' => 'string',
                                            'example' => 'mysql',
                                        ],
                                        'LevelName' => [
                                            'description' => '实例规格描述。',
                                            'type' => 'string',
                                            'example' => 'mysql.z2.medium.2',
                                        ],
                                        'Role' => [
                                            'description' => '实例角色。',
                                            'type' => 'string',
                                            'example' => 'master',
                                        ],
                                        'DBInstanceDescription' => [
                                            'description' => '实例描述。',
                                            'type' => 'string',
                                            'example' => 'rm-bp1m5z8002gyj****',
                                        ],
                                        'CpuCores' => [
                                            'description' => '实例规格CPU，单位为核。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                        ],
                                        'PerfInfo' => [
                                            'description' => '实例所在主机性能信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PerfIdbPio' => [
                                                    'description' => '实例所在主机物理IO。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '30',
                                                ],
                                                'DiskCurr' => [
                                                    'description' => '实例所在主机磁盘空间，单位为GB。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1000',
                                                ],
                                                'MemRatio' => [
                                                    'description' => '实例所在主机内存大小，单位为GB。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '64',
                                                ],
                                                'CpuRatio' => [
                                                    'description' => '实例所在主机CPU大小，单位为核。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '16',
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
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'You are not authorized to perform this action.',
                    ],
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'HostInfo.NotFound',
                        'errorMessage' => 'The host is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"HostInstanceConsoleInfos\\": [\\n    {\\n      \\"Status\\": \\"RUNNING\\",\\n      \\"MaxConnIncreaseRatioValue\\": 1300,\\n      \\"MemSize\\": 16,\\n      \\"DiskSize\\": 500,\\n      \\"Ip\\": \\"172.22.XX.XX\\",\\n      \\"Port\\": \\"3443\\",\\n      \\"EngineVersion\\": \\"5.8\\",\\n      \\"MemoryIncreaseRatioValue\\": 64,\\n      \\"CpuIncreaseRatioValue\\": 16,\\n      \\"DBInstanceId\\": \\"rm-bp1m5z8002gyj****\\",\\n      \\"Engine\\": \\"mysql\\",\\n      \\"LevelName\\": \\"mysql.z2.medium.2\\",\\n      \\"Role\\": \\"master\\",\\n      \\"DBInstanceDescription\\": \\"rm-bp1m5z8002gyj****\\",\\n      \\"CpuCores\\": 8,\\n      \\"PerfInfo\\": {\\n        \\"PerfIdbPio\\": 30,\\n        \\"DiskCurr\\": 1000,\\n        \\"MemRatio\\": 64,\\n        \\"CpuRatio\\": 16\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryHostInstanceConsoleInfoResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n    <HostInstanceConsoleInfos>\\n        <Status>RUNNING</Status>\\n        <MaxConnIncreaseRatioValue>1300</MaxConnIncreaseRatioValue>\\n        <MemSize>16</MemSize>\\n        <DiskSize>500</DiskSize>\\n        <Ip>172.22.XX.XX</Ip>\\n        <Port>3443</Port>\\n        <EngineVersion>5.8</EngineVersion>\\n        <MemoryIncreaseRatioValue>64</MemoryIncreaseRatioValue>\\n        <CpuIncreaseRatioValue>16</CpuIncreaseRatioValue>\\n        <DBInstanceId>rm-bp1m5z8002gyj****</DBInstanceId>\\n        <Engine>mysql</Engine>\\n        <LevelName>mysql.z2.medium.2</LevelName>\\n        <Role>master</Role>\\n        <DBInstanceDescription>rm-bp1m5z8002gyj****</DBInstanceDescription>\\n        <CpuCores>8</CpuCores>\\n        <PerfInfo>\\n            <PerfIdbPio>30</PerfIdbPio>\\n            <DiskCurr>1000</DiskCurr>\\n            <MemRatio>64</MemRatio>\\n            <CpuRatio>16</CpuRatio>\\n        </PerfInfo>\\n    </HostInstanceConsoleInfos>\\n</QueryHostInstanceConsoleInfoResponse>","errorExample":""}]',
            'title' => '查询主机实例节点列表',
            'summary' => '调用QueryHostInstanceConsoleInfo接口查询主机实例节点列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryHostBaseInfoByInstance' => [
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
                        'description' => '实例所在地域ID。可查看[地域信息](~~198326~~)获取。',
                        'type' => 'string',
                        'required' => false,
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
                        'example' => 'rm-bp15rszyxs4t3****',
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
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E12CV',
                            ],
                            'HostInstanceConsoleInfos' => [
                                'description' => '主机上实例信息概览。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '实例所在主机专有网络ID 。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp1ov7as4yvz4kxei****',
                                        ],
                                        'Status' => [
                                            'description' => '实例状态描述。',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '实例到期时间。',
                                            'type' => 'string',
                                            'example' => '2021.07.20',
                                        ],
                                        'ClusterName' => [
                                            'description' => '实例规格描述。',
                                            'type' => 'string',
                                            'example' => 'rds.ebmr6.26xlarge',
                                        ],
                                        'Ip' => [
                                            'description' => '实例所在主机IP地址。',
                                            'type' => 'string',
                                            'example' => ' 172.22.0.***',
                                        ],
                                        'HostName' => [
                                            'description' => '实例所在主机名称。',
                                            'type' => 'string',
                                            'example' => 'ch-bp1fgj3kt7fsb****',
                                        ],
                                        'Engine' => [
                                            'description' => '数据库类型。',
                                            'type' => 'string',
                                            'example' => 'mysql',
                                        ],
                                        'Role' => [
                                            'description' => '实例角色。',
                                            'type' => 'string',
                                            'example' => 'master',
                                        ],
                                        'Port' => [
                                            'description' => '实例所在主机端口。',
                                            'type' => 'string',
                                            'example' => '3443',
                                        ],
                                        'EngineVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '5.7',
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
                        'errorCode' => 'Permission.NotSupport',
                        'errorMessage' => 'You are not authorized to perform this action.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance does not exist or is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E12CV\\",\\n  \\"HostInstanceConsoleInfos\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1ov7as4yvz4kxei****\\",\\n      \\"Status\\": \\"RUNNING\\",\\n      \\"ExpiredTime\\": \\"2021.07.20\\",\\n      \\"ClusterName\\": \\"rds.ebmr6.26xlarge\\",\\n      \\"Ip\\": \\" 172.22.0.***\\",\\n      \\"HostName\\": \\"ch-bp1fgj3kt7fsb****\\",\\n      \\"Engine\\": \\"mysql\\",\\n      \\"Role\\": \\"master\\",\\n      \\"Port\\": \\"3443\\",\\n      \\"EngineVersion\\": \\"5.7\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryHostBaseInfoByInstanceResponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22E12CV</RequestId>\\n<HostInstanceConsoleInfos>\\n    <Status>RUNNING</Status>\\n    <Role>master</Role>\\n    <EngineVersion>5.7</EngineVersion>\\n    <VpcId>vpc-bp1ov7as4yvz4kxei****</VpcId>\\n    <ExpiredTime>2021.07.20</ExpiredTime>\\n    <Port>3443</Port>\\n    <Ip> 172.22.0.***</Ip>\\n    <ClusterName>rds.ebmr6.26xlarge</ClusterName>\\n    <HostName>ch-bp1fgj3kt7fsb****</HostName>\\n    <Engine>mysql</Engine>\\n</HostInstanceConsoleInfos>\\n<QueryHostBaseInfoByInstanceResponse>","errorExample":""}]',
            'title' => '查看实例所在主机基本信息',
            'summary' => '调用QueryHostBaseInfoByInstance接口查询实例所在主机基本信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cddc.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cddc.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cddc.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cddc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cddc.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cddc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cddc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cddc.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cddc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cddc.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cddc.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cddc.aliyuncs.com',
        ],
    ],
];
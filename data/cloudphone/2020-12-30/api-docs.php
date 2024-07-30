<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cloudphone',
        'version' => '2020-12-30',
    ],
    'directories' => [
        [
            'id' => 124268,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'RunInstances',
                'DeleteInstances',
                'StartInstances',
                'StopInstances',
                'RenewInstances',
                'ResetInstances',
                'RebootInstances',
                'UpdateInstanceAttribute',
                'ListInstances',
                'ListInstanceTypes',
                'ListInstanceVncUrl',
                'ListRegions',
                'ListZones',
            ],
        ],
        [
            'id' => 124282,
            'title' => '镜像',
            'type' => 'directory',
            'children' => [
                'CreateImage',
                'ImportImage',
                'CopyImage',
                'DeleteImages',
                'UpdateImageAttribute',
                'ListImages',
                'ListImageSharePermission',
            ],
        ],
        [
            'id' => 124290,
            'title' => '密钥对',
            'type' => 'directory',
            'children' => [
                'ImportKeyPair',
                'DeleteKeyPairs',
                'ListKeyPairs',
            ],
        ],
        [
            'id' => 124294,
            'title' => '任务',
            'type' => 'directory',
            'children' => [
                'CancelTask',
                'ListTasks',
            ],
        ],
        [
            'id' => 124297,
            'title' => '执行命令',
            'type' => 'directory',
            'children' => [
                'RunCommand',
                'SendFile',
                'InstallApplication',
                'UninstallApplication',
                'FetchFile',
            ],
        ],
        [
            'id' => 164812,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'ListTagResources',
                'UntagResources',
                'ListTagKeys',
                'ListTagValues',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'RunInstances' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。长度为2~128个字符，必须以大小字母或中文开头，不能以`http://`或`https://`开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。默认值为实例的InstanceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的描述。长度为2~256个英文或中文字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloudphone instance',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecp.ce.large',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpm-xxxx',
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全组ID，与ECS使用相同的安全组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sg-xxxxx',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-xxxx',
                    ],
                ],
                [
                    'name' => 'EipBandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'EIP带宽值，取值范围1-200。设置此参数，将自动创建对应带宽的EIP实例，并将EIP实例绑定到云手机实例。实例释放时，此EIP实例会一起释放回收。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Resolution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例选用的分辨率，可通过DescribeInstanceTypes接口查询当前规格支持的分辨率列表，选择合适的分辨率。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1920*1080',
                    ],
                ],
                [
                    'name' => 'Amount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定创建ECS实例的数量。取值范围：1~100'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例密钥对名称。可通过ImportKeyPair接口导入云手机密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'keypair',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的付费方式。取值范围：'."\n"
                            ."\n"
                            .'- PrePaid：包年包月'."\n"
                            .'- PostPaid（默认）：按量付费',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包年包月计费方式的时长单位。取值范围：'."\n"
                            ."\n"
                            .'- Year'."\n"
                            .'- Month（默认）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否要自动续费。当参数InstanceChargeType取值PrePaid时才生效。取值范围：'."\n"
                            ."\n"
                            .'- true：自动续费'."\n"
                            .'- false（默认）：不自动续费',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动支付，默认为true',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期时长，默认1。'."\n"
                            .'- PeriodUnit为Month时，支持1、2、3、6'."\n"
                            .'- PeriodUnit为Year时，支持1、2、3、4、5',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '实例的标签集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '实例的标签键。N的取值范围为1~20。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '实例的标签值。N的取值范围为1~20。',
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
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机私网IP地址。云手机实例设置私网IP地址时，必须从虚拟交换机（VSwitchId）的空闲网段中选择。'."\n"
                            .'您需要注意：'."\n"
                            .'设置PrivateIpAddress后，Amount参数取值必须为1，表示为创建一台指定私网IP的云手机。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.157.224',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'OrderId' => [
                                'description' => '订单号',
                                'type' => 'string',
                                'example' => '9611111323245',
                            ],
                            'TradePrice' => [
                                'description' => '价格',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '133.32',
                            ],
                            'InstanceIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例ID列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例ID列表',
                                            'type' => 'string',
                                            'example' => 'cp-xxxxx',
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
                        'errorCode' => 'QuotaExceed',
                        'errorMessage' => 'Instance quota exceed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"OrderId\\": \\"9611111323245\\",\\n  \\"TradePrice\\": 133.32,\\n  \\"InstanceIds\\": {\\n    \\"InstanceId\\": [\\n      \\"cp-xxxxx\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '批量创建并启动实例',
            'summary' => '批量创建并启动实例。',
            'description' => '准备工作：'."\n"
                ."\n"
                .'- 通过实名认证。更多详情，请参见[账号实名认证相关文档](~~428525~~)。'."\n"
                ."\n"
                .'注意事项：'."\n"
                ."\n"
                .'- 单次最多能创建100台实例。'."\n"
                .'- 接口功能为创建并启动实例。'."\n"
                .'- 当遇到由于库存不足等不可抗因素导致的实例生产失败，实例会被自动回滚释放。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteInstances' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云手机实例ID，N的取值范围：1~100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云手机实例ID，N的取值范围：1~100。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxxxxxx',
                        ],
                        'required' => true,
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制释放运行中（Running）的云手机实例，默认为false。'."\n"
                            ."\n"
                            .'- true：强制释放运行中（Running）的实例。强制释放相当于断电，实例内存以及存储中的临时数据都会被擦除，无法恢复。'."\n"
                            .'- false（默认值）：正常释放实例，此时实例必须处于已停止（Stopped）状态。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '批量删除云手机实例',
            'summary' => '批量删除云手机实例。',
        ],
        'StartInstances' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '实例ID列表。最多可以同时启动100台云手机。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-bp14g2vueqq8aef6fx0c',
                        ],
                        'required' => true,
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '批量启动实例',
            'summary' => '批量启动实例。',
        ],
        'StopInstances' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '实例ID列表，N的取值范围1-100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID列表，N的取值范围1-100。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxx',
                        ],
                        'required' => true,
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制关机。取值范围：'."\n"
                            ."\n"
                            .'- true：强制关机。相当于典型的断电操作，所有未写入存储设备的缓存数据会丢失。'."\n"
                            .'- false：正常关机。'."\n"
                            ."\n"
                            .'默认值：false',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '批量停止实例',
            'summary' => '批量停止实例。',
        ],
        'RenewInstances' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '续费实例列表。列表最大 20 个元素',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要续费的实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxx',
                        ],
                        'required' => true,
                        'example' => 'cp-xxxx',
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期，默认值1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费周期单位，支持'."\n"
                            .'- Year 包年包月，支持年：1, 2, 3, 4, 5'."\n"
                            .'- Month 包年包月，支持月：1, 2, 3, 6'."\n"
                            .'- Hour 按量，支持小时：1'."\n"
                            ."\n"
                            .'默认Month',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动支付，默认true',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '订单ID',
                                'type' => 'string',
                                'example' => '10000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'InstanceIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '续费实例列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cp-xxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"10000\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"InstanceIds\\": {\\n    \\"InstanceId\\": [\\n      \\"cp-xxxx\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<OrderId>10000</OrderId>\\n<InstanceIds>\\n    <InstanceId>[\\"cp-xxxxx\\",\\"cp-xxxxx\\"]</InstanceId>\\n</InstanceIds>","errorExample":""}]',
            'title' => '批量续费云手机实例',
            'summary' => '云手机预付费实例批量续费接口。',
            'description' => '- 批量续费接口',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ResetInstances' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云手机实例ID列表，N取值范围1-100',
                        'type' => 'array',
                        'items' => [
                            'description' => '云手机实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxxxx',
                        ],
                        'required' => true,
                        'example' => 'cp-xxxxxx',
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机镜像ID，若不指定，则按当前实例的镜像进行重置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cpm-xxxxxx',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>","errorExample":""}]',
            'title' => '批量重置实例',
            'summary' => '初始化实例到创建时的初始状态。',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'调用该接口时，您需要注意：'."\n"
                .'- 云手机实例的状态必须为已停止（Stopped）。'."\n"
                .'- 若创建云手机实例的源镜像被删除，则无法初始化。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RebootInstances' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云手机实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云手机实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-uf6dzwc1h1yaovov****',
                        ],
                        'required' => true,
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzou',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制重启。取值范围：'."\n"
                            ."\n"
                            .'- true：强制重启。相当于典型的断电操作，所有未写入存储设备的缓存数据会丢失。'."\n"
                            .'- false：正常重启。'."\n"
                            ."\n"
                            .'默认值：false',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '重启实例',
            'summary' => '重启实例。',
        ],
        'UpdateInstanceAttribute' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-bp67acfmxazb4p***',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myInstanceName',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机密钥名称。为提高实例安全性，强烈建议您使用密钥对的连接方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myKeyPairName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例描述。长度为2~256个英文或中文字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myDescription',
                    ],
                ],
                [
                    'name' => 'VncPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机VNC密码。'."\n"
                            .'密码长度必须是六位字符，必须且仅能包含大写、小写英文字母及阿拉伯数字三种字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cp1234',
                    ],
                ],
                [
                    'name' => 'Resolution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机分辨率，如1920*1080。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1920*1080',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '实例的标签键。N的取值范围为1~20。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '实例的标签值。N的取值范围为1~20。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FDB6C963-9CE8-4B7F-BCA3-845F6BD29AFC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FDB6C963-9CE8-4B7F-BCA3-845F6BD29AFC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FDB6C963-9CE8-4B7F-BCA3-845F6BD29AFC</RequestId>","errorExample":""}]',
            'title' => '修改云手机实例属性',
            'summary' => '修改云手机实例属性。',
            'description' => '调用该接口，可以修改云手机的实例名称、密钥、描述、VNC密码、实例分辨率，其中密钥、分辨率修改需要重启实例后生效。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstances' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所在的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云手机实例ID，N的取值范围：1~100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云手机实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxxxxxxxx',
                        ],
                        'required' => false,
                        'example' => 'cp-xxxxxxxxxx',
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所在的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'phone',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例状态。取值范围：'."\n"
                            .'- Pending：创建中'."\n"
                            .'- Running：运行中'."\n"
                            .'- Starting：启动中'."\n"
                            .'- Stopping：停止中'."\n"
                            .'- Stopped：已停止'."\n"
                            .'- Expired: 已过期',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对名称。必须保持名称唯一性。 长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以 http:// 和 https:// 开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testKeyPairName',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的最大数，取值范围：1~100。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机所在可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'Resolution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机使用的分辨率。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1920*1080',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型，支持预付费和后付费，可选值：'."\n"
                            .'- PrePaid 预付费'."\n"
                            .'- PostPaid 后付费',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecp.ce.large',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cpm-xxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ShowWebRtcToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果中是否返回webRtcToken。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '根据指定的标签筛选实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '实例的标签键。N的取值范围为1~20。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '实例的标签值。N的取值范围为1~20。',
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
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询资源时的筛选条件列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤条件列表',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '查询实例时的筛选键。取值范围：'."\n"
                                        ."\n"
                                        .'- 当该参数取值为ExpiredStartTime时，可以查询指定过期时间点（Filter.N.Value）后创建的资源信息。'."\n"
                                        ."\n"
                                        .'- 当该参数取值为ExpiredEndTime时，可以查询在指定过期时间点（Filter.N.Value）前创建的资源信息。'."\n"
                                        ."\n"
                                        .'- 当该参数取值为CreationStartTime时，可以查询在指定创建时间点（Filter.N.Value）后创建的资源信息。'."\n"
                                        ."\n"
                                        .'- 当该参数取值为CreationEndTime时，可以查询在指定过期时间点（Filter.N.Value）前创建的资源信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ExpiredStartTime',
                                ],
                                'Value' => [
                                    'description' => '查询实例时的筛选值。指定该参数时必须同时指定Filter.N.Key参数，格式为:yyyy-MM-ddTHH:mmZ，采用UTC+0时区。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2023-11-05T00:00Z',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '返回下一页的查询凭证。'."\n",
                                'type' => 'string',
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'description' => '实例总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'MaxResults' => [
                                'description' => '返回的最大数，取值范围：1~100。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Instances' => [
                                'type' => 'object',
                                'properties' => [
                                    'Instance' => [
                                        'description' => '实例列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '实例状态。取值范围：'."\n"
                                                        .'- Pending：创建中'."\n"
                                                        .'- Running：运行中'."\n"
                                                        .'- Starting：启动中'."\n"
                                                        .'- Stopping：停止中'."\n"
                                                        .'- Stopped：已停止',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '镜像创建时间，采用ISO 8601格式。'."\n",
                                                    'type' => 'string',
                                                    'example' => '2021-01-01T01:07Z',
                                                ],
                                                'KeyPairName' => [
                                                    'description' => '实例密钥对名称。',
                                                    'type' => 'string',
                                                    'example' => 'testKeyPairName',
                                                ],
                                                'SecurityGroupId' => [
                                                    'description' => '安全组ID，与ECS使用相同的安全组。',
                                                    'type' => 'string',
                                                    'example' => 'sg-xxxxx',
                                                ],
                                                'AutoRenew' => [
                                                    'description' => '是否自动续费，只对预付费实例生效。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ChargeType' => [
                                                    'description' => '实例付费类型。',
                                                    'type' => 'string',
                                                    'example' => 'PostPaid',
                                                ],
                                                'OsName' => [
                                                    'description' => '操作系统的中文显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Android 9.0',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cp-xxxxxxxxxxx',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '实例规格。',
                                                    'type' => 'string',
                                                    'example' => 'ecp.ce.large',
                                                ],
                                                'RegionId' => [
                                                    'description' => '云手机地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'Description' => [
                                                    'description' => '实例描述。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'testDescription',
                                                ],
                                                'ExpiredTime' => [
                                                    'description' => '预付费实例到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-12-21T22:00Z',
                                                ],
                                                'InstanceName' => [
                                                    'description' => '实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'testInstanceName',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '可用区。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-i',
                                                ],
                                                'Resolution' => [
                                                    'description' => '云手机实例选用的分辨率。',
                                                    'type' => 'string',
                                                    'example' => '1920*1080',
                                                ],
                                                'ImageId' => [
                                                    'description' => '镜像ID。',
                                                    'type' => 'string',
                                                    'example' => 'cpm-xxxxxxxx',
                                                ],
                                                'OsNameEn' => [
                                                    'description' => '操作系统的英文显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Android 9.0',
                                                ],
                                                'VpcAttributes' => [
                                                    'description' => '实例的VPC信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PrivateIpAddress' => [
                                                            'description' => '私网IP',
                                                            'type' => 'string',
                                                            'example' => '192.168.0.85',
                                                        ],
                                                        'VSwitchId' => [
                                                            'description' => '虚拟交换机ID'."\n",
                                                            'type' => 'string',
                                                            'example' => 'vsw-bp1kbwqxxxxx',
                                                        ],
                                                    ],
                                                ],
                                                'EipAddress' => [
                                                    'description' => '实例的弹性公网IP信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InternetChargeType' => [
                                                            'description' => 'EIP付费类型。',
                                                            'type' => 'string',
                                                            'example' => 'PayByTraffic',
                                                        ],
                                                        'IpAddress' => [
                                                            'description' => 'EIP的地址。',
                                                            'type' => 'string',
                                                            'example' => '120.55.XX.XX',
                                                        ],
                                                        'Bandwidth' => [
                                                            'description' => 'EIP带宽值。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2',
                                                        ],
                                                        'AllocationId' => [
                                                            'description' => '云手机实例EIP的ID。',
                                                            'type' => 'string',
                                                            'example' => 'eip-bp1vctqgcoi6i9nxxxxxx',
                                                        ],
                                                    ],
                                                ],
                                                'WebRtcToken' => [
                                                    'description' => 'webRtcToken信息',
                                                    'type' => 'string',
                                                    'example' => 'eDeybrh74h34***',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '实例的标签集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '实例的标签集合。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '实例的标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestKey',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '实例的标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestValue',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 3,\\n  \\"MaxResults\\": 50,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"Status\\": \\"Running\\",\\n        \\"CreationTime\\": \\"2021-01-01T01:07Z\\",\\n        \\"KeyPairName\\": \\"testKeyPairName\\",\\n        \\"SecurityGroupId\\": \\"sg-xxxxx\\",\\n        \\"AutoRenew\\": false,\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"OsName\\": \\"Android 9.0\\",\\n        \\"InstanceId\\": \\"cp-xxxxxxxxxxx\\",\\n        \\"InstanceType\\": \\"ecp.ce.large\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Description\\": \\"testDescription\\",\\n        \\"ExpiredTime\\": \\"2021-12-21T22:00Z\\",\\n        \\"InstanceName\\": \\"testInstanceName\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n        \\"Resolution\\": \\"1920*1080\\",\\n        \\"ImageId\\": \\"cpm-xxxxxxxx\\",\\n        \\"OsNameEn\\": \\"Android 9.0\\",\\n        \\"VpcAttributes\\": {\\n          \\"PrivateIpAddress\\": \\"192.168.0.85\\",\\n          \\"VSwitchId\\": \\"vsw-bp1kbwqxxxxx\\"\\n        },\\n        \\"EipAddress\\": {\\n          \\"InternetChargeType\\": \\"PayByTraffic\\",\\n          \\"IpAddress\\": \\"120.55.XX.XX\\",\\n          \\"Bandwidth\\": 2,\\n          \\"AllocationId\\": \\"eip-bp1vctqgcoi6i9nxxxxxx\\"\\n        },\\n        \\"WebRtcToken\\": \\"eDeybrh74h34***\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"TestKey\\",\\n              \\"Value\\": \\"TestValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListInstancesResponse>\\n    <Instances>\\n        <Instance>\\n            <Status>Running</Status>\\n            <KeyPairName>testKeyPairName</KeyPairName>\\n            <Description>testDescription</Description>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <InstanceId>cp-xxxxxxxxxxx</InstanceId>\\n            <AutoRenew>false</AutoRenew>\\n            <OsName>Android 9.0</OsName>\\n            <SecurityGroupId>sg-xxxxx</SecurityGroupId>\\n            <InstanceName>testInstanceName</InstanceName>\\n            <OsNameEn>Android 9.0</OsNameEn>\\n            <ChargeType>PostPaid</ChargeType>\\n            <ExpiredTime>2021-12-21 22:00:00</ExpiredTime>\\n            <ImageId>cpm-xxxxxxxx</ImageId>\\n            <CreationTime>2021-01-01T01:07:58Z</CreationTime>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <InstanceType>ecp.ce.large</InstanceType>\\n            <Resolution>1920*1080</Resolution>\\n            <VpcAttributes>\\n                <PrivateIpAddress>192.168.0.85</PrivateIpAddress>\\n                <VSwitchId>vsw-bp1kbwqxxxxx</VSwitchId>\\n            </VpcAttributes>\\n            <EipAddress>\\n                <AllocationId>eip-bp1vctqgcoi6i9nxxxxxx</AllocationId>\\n                <Bandwidth>2</Bandwidth>\\n                <IpAddress>120.55.xx.xx</IpAddress>\\n                <InternetChargeType>PayByTraffic</InternetChargeType>\\n            </EipAddress>\\n        </Instance>\\n    </Instances>\\n    <TotalCount>3</TotalCount>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <NextToken>ADBAAdDWBF2****</NextToken>\\n    <MaxResults>50</MaxResults>\\n</ListInstancesResponse>","errorExample":""}]',
            'title' => '获取云手机列表',
            'summary' => '查询云手机列表接口。',
            'description' => '- 此接口只支持NextToken查询方式'."\n"
                .'- 返回结果按照云手机创建时间顺序正序返回'."\n"
                .'- 通过NextToken设置查询凭证（Token），其取值是上一次调用ListInstances返回的NextToken参数值，再通过MaxResults设置单页查询的最大条目数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstanceTypes' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '实例规格名称列表，N的取值范围：1~100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例规格名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecp.ce.xlarge',
                        ],
                        'required' => false,
                        'maxItems' => 11,
                    ],
                ],
                [
                    'name' => 'InstanceTypeFamily',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格族。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecp.ce',
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
                                'example' => '41345CE8-6FE8-505D-BCF8-B9D972C1873F',
                            ],
                            'InstanceTypes' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceType' => [
                                        'description' => '实例规格列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例规格列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'NameEn' => [
                                                    'description' => '规格名称（英文）。',
                                                    'type' => 'string',
                                                    'example' => 'Performance Type',
                                                ],
                                                'DefaultResolution' => [
                                                    'description' => '当前规格默认分辨率。',
                                                    'type' => 'string',
                                                    'example' => '720*1280',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '云手机实例规格。',
                                                    'type' => 'string',
                                                    'example' => 'ecp.ce.xlarge',
                                                ],
                                                'Name' => [
                                                    'description' => '规格名称（中文）。',
                                                    'type' => 'string',
                                                    'example' => '性能型',
                                                ],
                                                'InstanceTypeFamily' => [
                                                    'description' => '云手机实例规格族。',
                                                    'type' => 'string',
                                                    'example' => 'ecp.ce',
                                                ],
                                                'CpuCoreCount' => [
                                                    'description' => '实例规格的vCPU内核数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'MemorySize' => [
                                                    'description' => '实例规格的内存大小，单位GiB。',
                                                    'type' => 'string',
                                                    'example' => '4096',
                                                ],
                                                'Resolutions' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Resolution' => [
                                                            'description' => '当前规格支持的分辨率列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '当前规格支持的分辨率。',
                                                                'type' => 'string',
                                                                'example' => '720*1280',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"41345CE8-6FE8-505D-BCF8-B9D972C1873F\\",\\n  \\"InstanceTypes\\": {\\n    \\"InstanceType\\": [\\n      {\\n        \\"NameEn\\": \\"Performance Type\\",\\n        \\"DefaultResolution\\": \\"720*1280\\",\\n        \\"InstanceType\\": \\"ecp.ce.xlarge\\",\\n        \\"Name\\": \\"性能型\\",\\n        \\"InstanceTypeFamily\\": \\"ecp.ce\\",\\n        \\"CpuCoreCount\\": 2,\\n        \\"MemorySize\\": \\"4096\\",\\n        \\"Resolutions\\": {\\n          \\"Resolution\\": [\\n            \\"720*1280\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取实例规格列表',
            'summary' => '查询云手机规格列表。',
        ],
        'ListInstanceVncUrl' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-xxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VncUrl' => [
                                'description' => 'VNC登录链接。',
                                'type' => 'string',
                                'example' => 'wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3DDvh%252FIA%252BYc73gWO48cBx2gBxUDVzaAnSKr74pq30mzqUYgeUMcB%252FbkNixDxdEA996	',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'WebRtcToken' => [
                                'description' => 'WebRTC登录使用的Token。',
                                'type' => 'string',
                                'example' => 'D3EC1DE8C12E******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VncUrl\\": \\"wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3DDvh%252FIA%252BYc73gWO48cBx2gBxUDVzaAnSKr74pq30mzqUYgeUMcB%252FbkNixDxdEA996\\\\t\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"WebRtcToken\\": \\"D3EC1DE8C12E******\\"\\n}","type":"json"}]',
            'title' => '获取实例VNC登录链接',
            'summary' => '查询一台云手机实例的Web管理终端地址。',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'调用该接口时，您需要注意：'."\n"
                ."\n"
                .'- 管理终端地址的有效期为15秒，调用接口成功后如果15秒内不使用该链接，URL地址自动失效，您需要重新查询。'."\n"
                .'- 单个管理终端链接的持久链接（KeepAlive）时间为60秒，60秒内您管理终端窗口没有任何交互操作时，连接自动断开。'."\n"
                .'- 如果连接中断，每分钟内重新连接的次数不能超过30次。'."\n"
                .'- 您需要在链接https://g.alicdn.com/aliyun/ecs-console-vnc2/0.0.8/index.html?末尾加上vncUrl=****、instanceId=****和password=****，参数之间使用&连接。其中：'."\n"
                .'    - 参数vncUrl：调用接口成功后会返回的VncUrl的值。'."\n"
                .'    - 参数instanceId：您的实例ID。'."\n"
                .'    - （可选）参数password：该实例的远程连接密码，由六位数字或大小写字母组成。使用该参数时，在连接管理终端处您不需要再输入密码。'."\n"
                ."\n"
                .'请求示例如下：'."\n"
                ."\n"
                .'https://g.alicdn.com/aliyun/ecs-console-vnc2/0.0.8/index.html?vncUrl=ws%3A%2F%****&instanceId=cp-wz9hhwq5a6tm****'."\n"
                .'       '."\n"
                .'或者：'."\n"
                ."\n"
                .'https://g.alicdn.com/aliyun/ecs-console-vnc2/0.0.8/index.html?vncUrl=ws%3A%2F%****&instanceId=cp-wz9hhwq5a6tm****&password=****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRegions' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => '当前地域接口域名',
                                                    'type' => 'string',
                                                    'example' => 'cloudphone.cn-hangzhou.aliyuncs.com',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域名称',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"cloudphone.cn-hangzhou.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>cloudphone.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n    </Region>\\n</Regions>","errorExample":""}]',
            'title' => '获取可用地域列表',
            'summary' => '查询云手机售卖地域。',
            'description' => '- 查询云手机售卖地域接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListZones' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Zones' => [
                                'type' => 'object',
                                'properties' => [
                                    'Zone' => [
                                        'description' => '当前地域支持的可用区列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ZoneId' => [
                                                    'description' => '可用区',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-i',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-hangzhou-i\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取指定地域下的所有可用区',
            'summary' => '查询指定地域支持的可用区列表。',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'- 查询指定地域支持的可用区',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateImage' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例所属地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cp-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myCustomImage',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像的描述信息。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImageId' => [
                                'description' => '自定义镜像ID',
                                'type' => 'string',
                                'example' => 'cpm-xxxxxxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'QuotaExceed',
                        'errorMessage' => 'Image quota exceed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ImageId\\": \\"cpm-xxxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<ImageId>cpm-xxxxxxxx</ImageId>","errorExample":""}]',
            'title' => '创建自定义镜像',
            'summary' => '创建一份云手机自定义镜像。',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 创建时使用一台云手机实例做模板，只需要指定实例ID（InstanceId）。该台实例的状态必须为运行中（Running）或者已停止（Stopped）。'."\n"
                .'- 等待镜像状态变为可用（Available）后才能使用镜像资源。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ImportImage' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入至云手机地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入至云手机地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Format',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像格式。取值范围：'."\n"
                            .'- RAW'."\n"
                            .'- QCOW2',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RAW',
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像文件所在的OSS Bucket。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'myOssBucket',
                    ],
                ],
                [
                    'name' => 'OssObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像文件所在的OSS Object的文件名称（key）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'myOssKeyForImage.raw',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myCustomImage',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像的描述信息。长度为2~256个英文或中文字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作系统发行版。取值范围：'."\n"
                            .'- Android 9.0',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Android 9.0',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImageId' => [
                                'description' => '新导入的云手机镜像ID。',
                                'type' => 'string',
                                'example' => 'cpm-xxxxxxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ImageId\\": \\"cpm-xxxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<ImageId>cpm-xxxxxxxx</ImageId>","errorExample":""}]',
            'title' => '导入自定义镜像',
            'summary' => '导入一份您的本地镜像到云手机，作为自定义镜像出现在相应地域中。',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 您必须提前上传镜像文件到对象存储OSS。具体步骤请参见[上传文件](~~31886~~)。'."\n"
                .'- 首次导入镜像时，您必须提前通过访问控制RAM授权访问您的OSS Bucket，[一键授权](https://ram.console.aliyun.com/role/authorization?request=%7B%22Services%22%3A%5B%7B%22Service%22%3A%22CloudPhone%22%2C%22Roles%22%3A%5B%7B%22RoleName%22%3A%22AliyunCloudPhoneDefaultRole%22%2C%22TemplateId%22%3A%22AliyunCloudPhoneDefaultRole%22%7D%5D%7D%5D%2C%22ReturnUrl%22%3A%22https%3A%2F%2Fcloudphone.console.aliyun.com%2F%23%2Finstances%22%7D)。'."\n"
                .'- 导入镜像的地域必须跟镜像文件上传的OSS Bucket的地域相同。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CopyImage' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发起拷贝的源地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发起拷贝的源地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待拷贝的自定义镜像ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpm-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'DestinationRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拷贝至目标地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://和https://开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myCustomImage',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像的描述信息。长度为2~256个英文或中文字符，不能以http://和https://开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImageId' => [
                                'description' => '新复制的云手机镜像ID。',
                                'type' => 'string',
                                'example' => 'cpm-xxxxxxyy',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ImageId\\": \\"cpm-xxxxxxyy\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<ImageId>cpm-xxxxxxyy</ImageId>","errorExample":""}]',
            'title' => '复制自定义镜像',
            'summary' => '将当前地域的自定义镜像拷贝至目标地域。',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 自定义镜像的状态必须为可用（Available）。'."\n"
                .'- 源自定义镜像必须为您账号下的镜像，不能跨账号复制。'."\n"
                .'- 同一个地域下同时只能有一个镜像拷贝任务运行，其余任务需要排队等待上一个任务完成后再依次排队执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteImages' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '镜像ID列表。最大支持100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '镜像ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cpm-xxxxxxxx',
                        ],
                        'required' => true,
                        'example' => 'cpm-xxxxxxxx',
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否执行强制删除镜像。默认值：false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'ImageResponses' => [
                                'type' => 'object',
                                'properties' => [
                                    'ImageResponse' => [
                                        'description' => '镜像删除状态列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Code' => [
                                                    'description' => '删除镜像响应码。',
                                                    'type' => 'string',
                                                    'example' => '200',
                                                ],
                                                'Message' => [
                                                    'description' => '删除镜像响应信息。',
                                                    'type' => 'string',
                                                    'example' => 'Success.',
                                                ],
                                                'ImageId' => [
                                                    'description' => '请求删除的镜像ID。',
                                                    'type' => 'string',
                                                    'example' => 'cpm-xxxxxxxx',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"ImageResponses\\": {\\n    \\"ImageResponse\\": [\\n      {\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"Success.\\",\\n        \\"ImageId\\": \\"cpm-xxxxxxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<ImageResponses>\\n    <ImageResponse>\\n        <Message>Success.</Message>\\n        <ImageId>cpm-xxxxxxxx</ImageId>\\n        <Code>200</Code>\\n    </ImageResponse>\\n</ImageResponses>","errorExample":""}]',
            'title' => '批量删除自定义镜像',
            'summary' => '批量删除自定义镜像。',
            'description' => '## 接口说明'."\n"
                .'调用该接口时，您需要注意：'."\n"
                .'- 已共享给其他用户的镜像，需要您取消所有共享后才能删除。'."\n"
                .'- 正在被其他实例使用的镜像，需要您指定强制删除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateImageAttribute' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AddAccount',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '授权共享镜像的阿里云账号ID列表。列表最多10个元素。',
                        'type' => 'array',
                        'items' => [
                            'description' => '授权共享镜像的阿里云账号ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123456******',
                        ],
                        'required' => false,
                        'example' => '123456******',
                        'maxItems' => 11,
                    ],
                ],
                [
                    'name' => 'RemoveAccount',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '删除镜像共享的阿里云账号ID列表。列表最多10个元素。',
                        'type' => 'array',
                        'items' => [
                            'description' => '删除镜像共享的阿里云账号ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '987654******',
                        ],
                        'required' => false,
                        'example' => '987654******',
                        'maxItems' => 11,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpm-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义镜像的名称。包含2~128个字符。必须以大小字母或中文开头，可包含数字、半角冒号（:）、下划线（_）或者连字符（-）。不能以`http://`和`https://`开头。默认值：空，表示保持原有名称不变。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'newImageName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义镜像的描述信息。能包含2~256个字符。不能以`http://`和`https://`开头。默认值：空，表示保持原有描述信息不变。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'newDescription',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>","errorExample":""}]',
            'title' => '修改自定义镜像信息',
            'summary' => '修改一份自定义镜像的名称和描述信息，以及管理镜像的共享权限。',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 您只能共享自己的自定义镜像给其他阿里云用户。'."\n"
                .'- 每份自定义镜像一次最多共享给10个阿里云账号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListImages' => [
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '镜像ID，N的取值范围：1~100',
                        'type' => 'array',
                        'items' => [
                            'description' => '镜像id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cpm-xxxxxxxx',
                        ],
                        'required' => false,
                        'maxItems' => 100,
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
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testImageName',
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像来源。取值范围：'."\n"
                            .'- system：阿里云提供的公共镜像。'."\n"
                            .'- self：您创建的自定义镜像。'."\n"
                            .'- others：其他阿里云用户共享给您的镜像。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'system',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecp.ce.large',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询某种状态下的镜像。取值范围：'."\n"
                            .'- Waiting：多任务排队中。'."\n"
                            .'- Creating：镜像正在创建中。'."\n"
                            .'- Copying：镜像正在复制中。'."\n"
                            .'- Importing：镜像正在导入中。'."\n"
                            .'- Available（默认）：您可以使用的镜像。'."\n"
                            .'- CreateFailed：创建失败的镜像。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Available',
                        'default' => 'Available',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的最大数，取值范围：1~100。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '返回下一页的查询凭证。',
                                'type' => 'string',
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'description' => '镜像总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'MaxResults' => [
                                'description' => '返回的最大数，取值范围：1~100。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'RegionId' => [
                                'description' => '地域。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'Images' => [
                                'type' => 'object',
                                'properties' => [
                                    'Image' => [
                                        'description' => '镜像列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '镜像状态。',
                                                    'type' => 'string',
                                                    'example' => 'Available',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '镜像创建时间，采用ISO 8601格式。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-01T01:07Z',
                                                ],
                                                'Progress' => [
                                                    'description' => '镜像的制作进度。',
                                                    'type' => 'string',
                                                    'example' => '100%',
                                                ],
                                                'Usage' => [
                                                    'description' => '镜像是否已经运行在云手机实例中。取值范围：'."\n"
                                                        .'- none：镜像处于闲置状态，暂无云手机实例使用。'."\n"
                                                        .'- instance：镜像处于运行状态，有云手机实例使用。',
                                                    'type' => 'string',
                                                    'example' => 'none',
                                                ],
                                                'IsSelfShared' => [
                                                    'description' => '该镜像是否已共享给其他用户。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Description' => [
                                                    'description' => '镜像描述。',
                                                    'type' => 'string',
                                                    'example' => 'testDescription',
                                                ],
                                                'ImageName' => [
                                                    'description' => '镜像的名称。',
                                                    'type' => 'string',
                                                    'example' => 'testImageName',
                                                ],
                                                'OSNameEn' => [
                                                    'description' => '操作系统的英文显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Android 9.0',
                                                ],
                                                'Platform' => [
                                                    'description' => '操作系统发行版。',
                                                    'type' => 'string',
                                                    'example' => 'Android 9.0',
                                                ],
                                                'ImageCategory' => [
                                                    'description' => '镜像类型。',
                                                    'type' => 'string',
                                                    'example' => 'system',
                                                ],
                                                'OSName' => [
                                                    'description' => '操作系统的中文显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Android 9.0',
                                                ],
                                                'ImageId' => [
                                                    'description' => '镜像ID。',
                                                    'type' => 'string',
                                                    'example' => 'cpm-xxxxxxxx',
                                                ],
                                                'OSType' => [
                                                    'description' => '操作系统类型。',
                                                    'type' => 'string',
                                                    'example' => 'android',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 3,\\n  \\"MaxResults\\": 50,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Images\\": {\\n    \\"Image\\": [\\n      {\\n        \\"Status\\": \\"Available\\",\\n        \\"CreationTime\\": \\"2021-01-01T01:07Z\\",\\n        \\"Progress\\": \\"100%\\",\\n        \\"Usage\\": \\"none\\",\\n        \\"IsSelfShared\\": false,\\n        \\"Description\\": \\"testDescription\\",\\n        \\"ImageName\\": \\"testImageName\\",\\n        \\"OSNameEn\\": \\"Android 9.0\\",\\n        \\"Platform\\": \\"Android 9.0\\",\\n        \\"ImageCategory\\": \\"system\\",\\n        \\"OSName\\": \\"Android 9.0\\",\\n        \\"ImageId\\": \\"cpm-xxxxxxxx\\",\\n        \\"OSType\\": \\"android\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询镜像资源',
            'summary' => '查询您可以使用的镜像资源。',
        ],
        'ListImageSharePermission' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新导入的云手机镜像ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cpm-bp1g8jvdu1v073wt9urx',
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
                                'example' => 'F6037E25-FE1F-5423-A4BC-08BE09B81D16',
                            ],
                            'Accounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '用户ID列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户ID列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'AliyunId' => [
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => '1765205448******',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F6037E25-FE1F-5423-A4BC-08BE09B81D16\\",\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"AliyunId\\": \\"1765205448******\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询镜像共享用户列表',
            'summary' => '查询自定义镜像已经共享的用户列表。',
        ],
        'ImportKeyPair' => [
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
            'systemTags' => [],
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
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对名称。必须保持名称唯一性。 长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以 http:// 和 https:// 开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testKeyPairName',
                    ],
                ],
                [
                    'name' => 'PublicKeyBody',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对的公钥内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ABC1234567',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'KeyPairName' => [
                                'description' => '密钥对名称。',
                                'type' => 'string',
                                'example' => 'testKeyPairName',
                            ],
                            'KeyPairFingerPrint' => [
                                'description' => '密钥对的指纹。根据RFC4716定义的公钥指纹格式，采用MD5信息摘要算法。',
                                'type' => 'string',
                                'example' => '89:f0:ba:62:ac:b8:aa:e1:61:5e:fd:81:69:86:6d:6b:f0:c0:5a:**',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"KeyPairName\\": \\"testKeyPairName\\",\\n  \\"KeyPairFingerPrint\\": \\"89:f0:ba:62:ac:b8:aa:e1:61:5e:fd:81:69:86:6d:6b:f0:c0:5a:**\\"\\n}","type":"json"}]',
            'title' => '导入云手机密钥对',
            'summary' => '导入由其他工具产生的RSA密钥对的公钥部分。',
            'description' => '接口说明'."\n"
                .'调用该接口时，您需要注意：'."\n"
                ."\n"
                .'- 您在每个地域的密钥对数最高为500对。'."\n"
                .'- 导入的公钥对需要为ADB生成密钥对的公钥',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteKeyPairs' => [
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
                'operationType' => 'delete',
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
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云手机密钥对名称。取值可以由多个密钥对名称组成一个JSON数组，最多支持100对SSH密钥对，名称之间用半角逗号（,）隔开。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'testKey',
                        ],
                        'required' => true,
                        'example' => '[keyPairName1, keyPairNam2, keyPairName3]',
                        'maxItems' => 101,
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '删除指定的云手机密钥对',
            'summary' => '删除一对或者多对云手机密钥对。',
            'description' => '- 删除云手机密钥对后，您需要注意'."\n"
                .'    - 无法通过ListKeyPairs查询该云手机密钥对。'."\n"
                .'    - 若已有云手机实例绑定了该密钥对：阿里云不再为您保存该密钥对，但是实例可以正常使用该密钥对。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListKeyPairs' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对所在的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对所在的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testKeyPair',
                    ],
                ],
                [
                    'name' => 'KeyPairFingerPrint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对的指纹。根据RFC4716定义的公钥指纹格式，采用MD5信息摘要算法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ABC1234567',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的最大数。取值范围：1~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '返回下一页的查询凭证。',
                                'type' => 'string',
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'description' => 'keypair总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'MaxResults' => [
                                'description' => '返回的最大数。取值范围：1~100。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'KeyPairs' => [
                                'type' => 'object',
                                'properties' => [
                                    'KeyPair' => [
                                        'description' => '返回的keypair列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回的keypair列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreationTime' => [
                                                    'description' => '密钥对的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-03-04T13:35Z',
                                                ],
                                                'KeyPairName' => [
                                                    'description' => '密钥对的名称。',
                                                    'type' => 'string',
                                                    'example' => 'testKeyPairName',
                                                ],
                                                'KeyPairFingerPrint' => [
                                                    'description' => '密钥对的指纹。',
                                                    'type' => 'string',
                                                    'example' => 'ABC1234567',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 5,\\n  \\"MaxResults\\": 100,\\n  \\"KeyPairs\\": {\\n    \\"KeyPair\\": [\\n      {\\n        \\"CreationTime\\": \\"2021-03-04T13:35Z\\",\\n        \\"KeyPairName\\": \\"testKeyPairName\\",\\n        \\"KeyPairFingerPrint\\": \\"ABC1234567\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取云手机密钥对',
            'summary' => '查询一个或多个密钥对。',
            'description' => '您可以调用此接口获取云手机密钥对。',
        ],
        'CancelTask' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 't-bp1hvgwromzv32iq****',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83A</RequestId>","errorExample":""}]',
            'title' => '取消任务',
            'summary' => '取消云手机当前正在执行的任务。',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 若任务已完成，则操作失败并返回错误提示。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTasks' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务ID列表。N的取值范围：1~100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID列表。N的取值范围：1~100。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 't-bp67acfmxazb4p****',
                        ],
                        'required' => false,
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。取值范围：'."\n"
                            .'- Finished：已完成。'."\n"
                            .'- Processing：运行中。'."\n"
                            .'- Failed：失败。'."\n"
                            ."\n"
                            .'默认值：无。'."\n"
                            ."\n"
                            .'> 只支持查询状态为Finished、Processing和Failed的任务，填入其他取值将不会生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Finished',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务操作的接口名称。取值范围：'."\n"
                            .'- Shell：运行shell命令。'."\n"
                            .'- InstallApplication：安装应用。'."\n"
                            .'- UninstallApplication：卸载应用。'."\n"
                            .'- SendFile：上传文件。'."\n"
                            .'- ImportImage：导入镜像。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Shell',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cp-acfmxazb4p***',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '55C15B1C-D507-45F0-B490-69D6E0F113C6',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的最大数。取值范围：1~100'."\n"
                            .'默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '返回下一页查询凭证（token）。',
                                'type' => 'string',
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'description' => '任务总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'MaxResults' => [
                                'description' => '返回的最大数。取值范围：1~200 默认值：50。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'RegionId' => [
                                'description' => '查询地域。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'Tasks' => [
                                'type' => 'object',
                                'properties' => [
                                    'Task' => [
                                        'description' => '任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TaskType' => [
                                                    'description' => '任务类型。',
                                                    'type' => 'string',
                                                    'example' => 'Shell',
                                                ],
                                                'Progress' => [
                                                    'description' => '任务执行进度。',
                                                    'type' => 'string',
                                                    'example' => '100%',
                                                ],
                                                'TaskStatus' => [
                                                    'description' => '任务状态。',
                                                    'type' => 'string',
                                                    'example' => 'Finished',
                                                ],
                                                'ExecuteMsg' => [
                                                    'description' => '任务执行返回内容，最长1024字节。',
                                                    'type' => 'string',
                                                    'example' => 'file1 file2',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '任务创建时间',
                                                    'type' => 'string',
                                                    'example' => '2021-04-15T10:10Z',
                                                ],
                                                'FinishedTime' => [
                                                    'description' => '结束时间',
                                                    'type' => 'string',
                                                    'example' => '2021-04-15T10:10Z',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cp-acfmxazb4p***',
                                                ],
                                                'TaskId' => [
                                                    'description' => '任务ID。',
                                                    'type' => 'string',
                                                    'example' => 't-bp67acfmxazb4p****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 1,\\n  \\"MaxResults\\": 50,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Tasks\\": {\\n    \\"Task\\": [\\n      {\\n        \\"TaskType\\": \\"Shell\\",\\n        \\"Progress\\": \\"100%\\",\\n        \\"TaskStatus\\": \\"Finished\\",\\n        \\"ExecuteMsg\\": \\"file1 file2\\",\\n        \\"CreateTime\\": \\"2021-04-15T10:10Z\\",\\n        \\"FinishedTime\\": \\"2021-04-15T10:10Z\\",\\n        \\"InstanceId\\": \\"cp-acfmxazb4p***\\",\\n        \\"TaskId\\": \\"t-bp67acfmxazb4p****\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取云手机实例任务列表',
            'summary' => '获取云手机实例当前任务列表。',
        ],
        'RunCommand' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待执行命令的实例ID。 <br> N的范围：1~10',
                        'type' => 'array',
                        'items' => [
                            'description' => '云手机实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-acfmxazb4p***',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待执行的命令'."\n"
                            .'<br>'."\n"
                            .'最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ls -al /',
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
                                'example' => '55C15B1C-D507-45F0-B490-69D6E0F113C6',
                            ],
                            'TaskId' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务ID列表。N的取值范围：1~100',
                                            'type' => 'string',
                                            'example' => 't-bp67acfmxazb4p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C15B1C-D507-45F0-B490-69D6E0F113C6\\",\\n  \\"TaskId\\": {\\n    \\"TaskId\\": [\\n      \\"t-bp67acfmxazb4p****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '在云手机中执行命令',
            'summary' => '在云手机中执行命令。',
        ],
        'SendFile' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待执行命令的实例ID。N的范围：1~10。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待执行命令的实例ID。N的范围：1~10。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-acfmxazb4p***',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待发送文件所在的OSS Bucket。'."\n"
                            ."\n"
                            .'> 首次导入apk文件到该OSSBucket前，请添加RAM授权策略，否则会报错NoSetRoletoECSServiceAcount。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloudphone-fvt-cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'OssObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件所在的OSS Object的文件名称（key）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test.txt',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拉取文件所在云手机中的完整路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/sdcard',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID列表。N的取值范围：1~100',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务ID列表。N的取值范围：1~100',
                                            'type' => 'string',
                                            'example' => 't-bp67acfmxazb4p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": {\\n    \\"TaskId\\": [\\n      \\"t-bp67acfmxazb4p****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '推送文件到云手机',
            'summary' => '推送文件到手机。',
        ],
        'InstallApplication' => [
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
            'systemTags' => [],
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待执行命令的实例ID。N的范围：1~10。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待执行命令的实例ID。N的范围：1~10。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-uf65l0q3voetmjazif25',
                        ],
                        'required' => false,
                        'maxItems' => 51,
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
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用文件所在的OSS Bucket。'."\n"
                            ."\n"
                            .'> 首次导入应用文件到该OSSBucket前，请添加RAM授权策略，否则会报错NoSetRoletoECSServiceAcount。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'phoneapplication',
                    ],
                ],
                [
                    'name' => 'OssObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用文件所在的OSS Object的文件名称（key）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test.apk',
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
                                'example' => '55C15B1C-D507-45F0-B490-69D6E0F113C6',
                            ],
                            'TaskId' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 't-bp67acfmxazb4p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C15B1C-D507-45F0-B490-69D6E0F113C6\\",\\n  \\"TaskId\\": {\\n    \\"TaskId\\": [\\n      \\"t-bp67acfmxazb4p****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '安装应用到云手机',
            'summary' => '安装应用到云手机。',
        ],
        'UninstallApplication' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待执行命令的实例ID。N的范围：1~10',
                        'type' => 'array',
                        'items' => [
                            'description' => '待执行命令的实例ID。N的范围：1~10',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-acfmxazb4p***',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待卸载的APP名称'."\n"
                            .'最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.theapp.test',
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
                                'example' => '5D9157CC-96A5-519E-80C0-D7047FF939D3',
                            ],
                            'TaskId' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 't-bp67acfmxazb4p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D9157CC-96A5-519E-80C0-D7047FF939D3\\",\\n  \\"TaskId\\": {\\n    \\"TaskId\\": [\\n      \\"t-bp67acfmxazb4p****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '卸载指定应用',
            'summary' => '卸载应用。',
        ],
        'FetchFile' => [
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
            'systemTags' => [],
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待执行命令的实例ID。N的范围：1~10',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-acfmxazb4p***',
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待发送文件所在的OSS Bucket。'."\n"
                            ."\n"
                            .'> 首次导入apk文件到该OSSBucket前，请添加RAM授权策略，否则会报错NoSetRoletoECSServiceAcount。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloudphone-fvt-cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'OssObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保存到OSS中的名字。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test.txt',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云手机中文件待保存路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/sdcard/test.txt',
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
                                'type' => 'string',
                                'example' => 't-bp67acfmxazb4p****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"t-bp67acfmxazb4p****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '从云手机拉取文件并保存到OSS',
            'summary' => '从云手机拉取文件并保存到OSS。',
        ],
        'TagResources' => [
            'summary' => '为多个云资源统一创建并绑定标签。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
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
                        'description' => '资源类型。取值范围：'."\n"
                            .'- instance：弹性云手机实例',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'instance',
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
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxx',
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
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '为云资源创建并绑定标签',
        ],
        'ListTagResources' => [
            'summary' => '查询多个云资源绑定的标签列表。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
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
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值范围：'."\n"
                            .'- instance：弹性云手机实例',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'instance',
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
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxxx',
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
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
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
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'type' => 'string',
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83A',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'title' => '资源列表',
                                        'description' => '资源列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'title' => '资源类型',
                                                    'description' => '资源类型。取值范围：'."\n"
                                                        .'- instance：弹性云手机实例',
                                                    'type' => 'string',
                                                    'example' => 'instance',
                                                ],
                                                'TagValue' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => 'TestValue',
                                                ],
                                                'ResourceId' => [
                                                    'title' => '资源ID',
                                                    'description' => '资源ID',
                                                    'type' => 'string',
                                                    'example' => 'cp-xxx',
                                                ],
                                                'TagKey' => [
                                                    'title' => '标签键',
                                                    'description' => '标签键',
                                                    'type' => 'string',
                                                    'example' => 'TestKey',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83A\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"instance\\",\\n        \\"TagValue\\": \\"TestValue\\",\\n        \\"ResourceId\\": \\"cp-xxx\\",\\n        \\"TagKey\\": \\"TestKey\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询资源标签列表',
        ],
        'UntagResources' => [
            'summary' => '为多个云资源统一解绑标签。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
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
                        'description' => '资源类型。取值范围：'."\n"
                            .'- instance：弹性云手机实例',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'instance',
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
                        'example' => 'true',
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
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cp-xxx',
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
                            'description' => '标签键。N的取值范围为**1**~**20**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TestKey',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '为云资源统一解绑标签',
        ],
        'ListTagKeys' => [
            'summary' => '查询标签键列表。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
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
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值范围：'."\n"
                            .'- instance：弹性云手机实例',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'instance',
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
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'MaxResults' => [
                                'description' => '单页最大结果数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Keys' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'title' => '资源列表',
                                        'description' => '标签键列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签键列表',
                                            'type' => 'string',
                                            'example' => 'TestKey',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"MaxResults\\": 50,\\n  \\"Keys\\": {\\n    \\"Key\\": [\\n      \\"TestKey\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询标签键列表',
        ],
        'ListTagValues' => [
            'summary' => '查询指定标签键对应的标签值。',
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
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
                        'example' => 'ADBAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值范围：'."\n"
                            .'- instance：弹性云手机实例',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的标签键',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestKey',
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
                                'example' => 'ADBAAdDWBF2****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'MaxResults' => [
                                'description' => '单页返回最大数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Values' => [
                                'type' => 'object',
                                'properties' => [
                                    'Value' => [
                                        'title' => '资源列表',
                                        'description' => '资源列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'TestValue',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"ADBAAdDWBF2****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"MaxResults\\": 50,\\n  \\"Values\\": {\\n    \\"Value\\": [\\n      \\"TestValue\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询指定标签键对应的标签值',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudphone.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudphone.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudphone.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudphone.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudphone.eu-central-1.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PAIElasticDatasetAccelerator',
        'version' => '2022-08-01',
    ],
    'directories' => [
        [
            'id' => 176543,
            'title' => '数据集加速实例',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'DeleteInstance',
                'UpdateInstance',
                'ListInstances',
                'QueryInstanceMetrics',
                'DescribeInstance',
            ],
        ],
        [
            'id' => 176550,
            'title' => '数据集加速槽',
            'type' => 'directory',
            'children' => [
                'CreateSlot',
                'DeleteSlot',
                'StopSlot',
                'UpdateSlot',
                'QuerySlotMetrics',
                'ListSlots',
                'DescribeSlot',
            ],
        ],
        [
            'id' => 176558,
            'title' => '数据集加速端点',
            'type' => 'directory',
            'children' => [
                'CreateEndpoint',
                'DeleteEndpoint',
                'BindEndpoint',
                'UnbindEndpoint',
                'ListEndpoints',
                'DescribeEndpoint',
            ],
        ],
        [
            'id' => 176565,
            'title' => '组件',
            'type' => 'directory',
            'children' => [
                'DescribeComponent',
                'ListComponents',
            ],
        ],
        [
            'id' => 176568,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'CreateTag',
                'DeleteTag',
                'ListTags',
            ],
        ],
        [
            'id' => 176572,
            'title' => '统计信息',
            'type' => 'directory',
            'children' => [
                'QueryStatistic',
            ],
        ],
        [
            'id' => 190126,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ReloadSlot',
                'CreateSlots',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'EndpointStatus' => [
                'title' => '数据集加速槽挂载点的状态。',
                'description' => '数据集加速槽挂载点的状态。',
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'title' => '数据集加速槽挂载点所处状态。 Created：已创建 ResourceAllocating：资源申请中 ResourceAllocated：资源申请完成 Ready：已就绪 Stopping：停止中 Failed：已失败 Stopped：已停止',
                        'description' => '数据集加速槽挂载点所处状态。 '."\n"
                            ."\n"
                            .'- Created：已创建 '."\n"
                            .'- ResourceAllocating：资源申请中 '."\n"
                            .'- ResourceAllocated：资源申请完成 '."\n"
                            .'- Ready：已就绪 '."\n"
                            .'- Stopping：停止中 '."\n"
                            .'- Failed：已失败 '."\n"
                            .'- Stopped：已停止',
                        'type' => 'string',
                        'example' => 'Ready',
                        'enum' => [
                            'Created',
                            'ResourceAllocating',
                            'ResourceAllocated',
                            'Ready',
                            'Stopping',
                            'Failed',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'title' => '数据集加速槽挂载点所处状态对应的状态码/错误码。',
                        'description' => '数据集加速槽挂载点所处状态对应的状态码/错误码。',
                        'type' => 'string',
                        'example' => '200',
                    ],
                    'Message' => [
                        'title' => '数据集加速槽挂载点所处状态附带的信息/错误信息。',
                        'description' => '数据集加速槽挂载点所处状态附带的信息/错误信息。',
                        'type' => 'string',
                        'example' => 'Init Succeed',
                    ],
                    'Detail' => [
                        'title' => '数据集加速端点状态的详细信息。',
                        'description' => '数据集加速端点状态的详细信息。',
                        '$ref' => '#/components/schemas/EndpointStatusDetail',
                    ],
                ],
            ],
            'EndpointStatusDetail' => [
                'title' => '数据集加速端点状态的详细信息。',
                'description' => '数据集加速槽挂载点的状态详细信息。',
                'type' => 'object',
                'properties' => [
                    'IpPortMapping' => [
                        'title' => '数据集加速槽挂载点 (Endpoint) 提供的所有服务的IP-Port映射。 Key为提供服务的数据集加速槽的Uuid；Value为IP-Port信息。',
                        'description' => '数据集加速槽挂载点 (Endpoint) 提供的所有服务的IP-Port映射。 Key为提供服务的数据集加速槽的Uuid；Value为IP-Port信息。',
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IpPort',
                        ],
                        'example' => '{ 	"slot-j6co2fcd": {   	"Ip": "10.0.0.2", 		"Port": 7001 	}, 	"slot-asdgys4d": {   	"Ip": "10.0.0.3", 		"Port": 7002 	} }',
                    ],
                ],
            ],
            'InstanceLifeCycle' => [
                'title' => '数据集加速实例生命周期',
                'description' => '数据集加速实例生命周期',
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'title' => '数据集加速实例生命周期类型',
                        'description' => '数据集加速实例生命周期类型',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'Config' => [
                        'title' => '数据集加速实例生命周期配置',
                        'description' => '数据集加速实例生命周期配置',
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceStatus' => [
                'title' => '数据集加速实例状态。',
                'description' => '数据集加速实例状态。',
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'title' => '数据集加速实例所处状态。状态机参考： Created：初始化 Running：运行中 Stopped：已停止',
                        'description' => '数据集加速实例所处状态。可能值：'."\n"
                            ."\n"
                            .'- Created：初始化 。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Stopped：已停止。',
                        'type' => 'string',
                        'example' => 'Running',
                        'enum' => [
                            'Created',
                            'Running',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'title' => '数据集加速实例所处状态对应的状态码/错误码。',
                        'description' => '数据集加速实例所处状态对应的状态码或错误码。',
                        'type' => 'string',
                        'example' => '200',
                    ],
                    'Message' => [
                        'title' => '数据集加速实例所处状态附带的信息/错误信息。',
                        'description' => '数据集加速实例所处状态附带的信息或错误信息。',
                        'type' => 'string',
                        'example' => 'Init Succeed',
                    ],
                    'UsedCapacity' => [
                        'title' => '数据集加速实例的已被占用的容量。实例下数据加速槽申请的容量均算在被占用范围内。 输入字符串的格式需要满足以下规范：Quantity',
                        'description' => '数据集加速实例的已被占用的容量。实例下数据加速槽申请的容量均算在被占用范围内。输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)。',
                        'type' => 'string',
                        'example' => '20.0G',
                    ],
                    'SlotNum' => [
                        'title' => '数据集加速槽数量',
                        'description' => '数据集加速槽数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                ],
            ],
            'IpPort' => [
                'type' => 'object',
                'properties' => [
                    'Ip' => [
                        'title' => 'IP地址。',
                        'type' => 'string',
                        'example' => '10.0.0.5',
                    ],
                    'Port' => [
                        'title' => '端口号。',
                        'type' => 'string',
                        'example' => '3306',
                    ],
                ],
            ],
            'Metric' => [
                'title' => '监控指标信息。',
                'description' => '指标信息',
                'type' => 'object',
                'properties' => [
                    'Timestamp' => [
                        'title' => '监控指标采集到的时间戳。',
                        'description' => '监控指标采集到的时间戳。',
                        'type' => 'string',
                        'example' => '1655897743',
                    ],
                    'Value' => [
                        'title' => '监控指标的具体值，缺失值会补0。',
                        'description' => '监控指标的具体值，缺失值会补0。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '98.35',
                    ],
                ],
            ],
            'SlotLifeCycle' => [
                'title' => '数据集加速槽生命周期',
                'description' => '数据集加速槽生命周期',
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'title' => '数据集加速槽生命周期类型。 KeepAlive：保持运行，不会被释放 RelativeTime：运行一段时间后释放，单位为秒 AbsoluteTime：运行到该时间点时，将会自动释放 MaximumIdleTime：相对时间间隔，最后一次操作时间和当前时间差超过该间隔，即释放实例，单位为秒',
                        'description' => '数据集加速槽生命周期类型。 '."\n"
                            ."\n"
                            .'- KeepAlive：保持运行，不会被释放 '."\n"
                            .'- RelativeTime：运行一段时间后释放，单位为秒 '."\n"
                            .'- AbsoluteTime：运行到该时间点时，将会自动释放 '."\n"
                            .'- MaximumIdleTime：相对时间间隔，最后一次操作时间和当前时间差超过该间隔，即释放实例，单位为秒',
                        'type' => 'string',
                        'example' => 'KeepAlive',
                        'enum' => [
                            'KeepAlive',
                            'RelativeTime',
                            'AbsoluteTime',
                            'MaximumIdleTime',
                        ],
                    ],
                    'Config' => [
                        'title' => '数据集加速槽生命周期配置，根据类型不同，配置结构也不同。 如果有更加复杂的配置需求，可以解析为Json String。',
                        'description' => '数据集加速槽生命周期配置，根据类型不同，配置结构也不同。 如果有更加复杂的配置需求，可以解析为Json String。',
                        'type' => 'string',
                        'example' => '{}',
                    ],
                ],
            ],
            'SlotStatus' => [
                'title' => '数据集加速槽状态',
                'description' => '数据集加速槽状态',
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'title' => '数据集加速槽所处状态。 Created：已创建 Preparing：正在准备资源 Loading：正在加载数据 Running：正在运行，提供服务 Reloading：正在重新加载数据 Succeed：成功完成 Failed：已失败 Stopping：正在停止 Stopped：已停止',
                        'description' => '数据集加速槽所处状态。 '."\n"
                            ."\n"
                            .'- Created：已创建 '."\n"
                            .'- Preparing：正在准备资源 '."\n"
                            .'- Loading：正在加载数据 '."\n"
                            .'- Running：正在运行，提供服务 '."\n"
                            .'- Reloading：正在重新加载数据 '."\n"
                            .'- Succeed：成功完成 '."\n"
                            .'- Failed：已失败 '."\n"
                            .'- Stopping：正在停止 '."\n"
                            .'- Stopped：已停止',
                        'type' => 'string',
                        'example' => 'Running',
                        'enum' => [
                            'Created',
                            'Preparing',
                            'Loading',
                            'Running',
                            'Succeed',
                            'Failed',
                            'Stopping',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'title' => '数据集加速槽所处状态对应的状态码/错误码。',
                        'description' => '数据集加速槽所处状态对应的状态码/错误码。',
                        'type' => 'string',
                        'example' => '200',
                    ],
                    'Message' => [
                        'title' => '数据集加速槽所处状态附带的信息/错误信息。',
                        'description' => '数据集加速槽所处状态附带的信息/错误信息。',
                        'type' => 'string',
                        'example' => 'Init Succeed',
                    ],
                    'Detail' => [
                        'title' => '数据集加速槽数据加载状态。',
                        'description' => '数据集加速槽数据加载状态。',
                        '$ref' => '#/components/schemas/SlotStatusDetail',
                    ],
                ],
            ],
            'SlotStatusDetail' => [
                'title' => '数据加速槽状态数据详细信息',
                'description' => '数据集加速槽状态数据详细信息',
                'type' => 'object',
                'properties' => [
                    'LoadedFileNum' => [
                        'title' => '数据集加速槽已加载的文件数量。',
                        'description' => '数据集加速槽已加载的文件数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000000',
                    ],
                    'LoadedFileSize' => [
                        'title' => '数据集加速槽已加载的文件大小。 字符串的格式需要满足以下规范：Quantity',
                        'description' => '数据集加速槽已加载的文件大小。 输入字符串的格式需要满足以下规范：Quantity (https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)',
                        'type' => 'string',
                        'example' => '200G',
                    ],
                    'LoadingTimeCost' => [
                        'title' => '数据集加速槽数据加载已花费的时间，单位为 ms（毫秒）。',
                        'description' => '数据集加速槽数据加载已花费的时间，单位为 ms（毫秒）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1800000',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstance' => [
            'summary' => '创建数据集加速实例。',
            'path' => '/api/v1/instances',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '数据集加速实例名称。'."\n"
                                    .'长度限制为64 Unicode 字符。'."\n"
                                    .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'description' => '数据集加速实例名称，格式如下：'."\n"
                                    .'- 长度限制为64个字符。'."\n"
                                    .'- 如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acc_instance_1',
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'title' => '数据集加速实例的描述与解释。'."\n"
                                    .'长度限制为1024 Unicode 字符。',
                                'description' => '数据集加速实例的描述与解释。'."\n"
                                    .'长度限制为1024个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xgboost数据集加速实例',
                                'maxLength' => 1024,
                            ],
                            'Type' => [
                                'title' => '数据集加速实例的类型'."\n"
                                    .'basic：基础版'."\n"
                                    .'enhanced：增强版',
                                'description' => '数据集加速实例的类型，取值如下：'."\n"
                                    .'- basic：基础版。'."\n"
                                    .'- enhanced：增强版。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'basic',
                                'enum' => [
                                    'basic',
                                    'enhanced',
                                    'lj.basic',
                                ],
                            ],
                            'Tags' => [
                                'title' => '用户为数据集加速实例添加的自定义标签。',
                                'description' => '用户为数据集加速实例添加的自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签的键值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的键值。'."\n"
                                                .'长度限制为64个字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'dataset_version',
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'title' => '标签的值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的值。'."\n"
                                                .'长度限制为64个字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'v0.1.0',
                                            'maxLength' => 64,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'PaymentType' => [
                                'title' => '数据集加速实例的付费类型。'."\n"
                                    .'PayAsYouGo：后付费（后付费/按量付费）'."\n"
                                    .'Subscription：预付费（预付费/包年包月）',
                                'description' => '数据集加速实例的付费类型，取值如下：'."\n"
                                    .'- PayAsYouGo：后付费（按量付费）。'."\n"
                                    .'- Subscription：预付费（包年包月）。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PayAsYouGo',
                                'enum' => [
                                    'PayAsYouGo',
                                    'Subscription',
                                ],
                            ],
                            'Capacity' => [
                                'title' => '数据集加速实例的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：Quantity (https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)',
                                'description' => '数据集加速实例的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '30.0G',
                            ],
                            'MaxSlot' => [
                                'title' => '数据集加速实例的最大加速槽个数。',
                                'description' => '数据集加速实例的最大加速槽个数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '20',
                                'default' => '100',
                            ],
                            'MaxEndpoint' => [
                                'title' => '数据集加速实例的最大挂载点个数。',
                                'type' => 'string',
                                'required' => false,
                                'default' => '100',
                                'example' => '20',
                            ],
                            'StorageType' => [
                                'title' => '数据集加速实例的存储类型。',
                                'type' => 'string',
                                'required' => false,
                                'default' => 'OSS',
                                'example' => 'OSS',
                            ],
                            'ProviderType' => [
                                'title' => '数据集加速实例的资源提供者类型。',
                                'type' => 'string',
                                'required' => false,
                                'default' => 'Ecs',
                                'example' => 'Ecs',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'InstanceId' => [
                                'title' => '数据集加速实例Id。',
                                'description' => '数据集加速实例ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'inst-my1tk3jggooi5uwks5',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"InstanceId\\": \\"inst-my1tk3jggooi5uwks5\\"\\n}","type":"json"}]',
            'title' => '创建数据集加速实例',
        ],
        'DeleteInstance' => [
            'summary' => '删除一个数据集加速实例。',
            'path' => '/api/v1/instances/{InstanceId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速实例Id。',
                        'description' => '数据集加速实例ID。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'inst-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '删除数据集加速实例',
            'description' => '调用改接口会首先进行检查，满足以下条件后方可被删除，否则删除失败。'."\n"
                .'- 该Instance下不存在仍处于非终态的Slot。',
        ],
        'UpdateInstance' => [
            'summary' => '更新一个数据集加速实例的信息。',
            'path' => '/api/v1/instances/{InstanceId}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速实例Id。',
                        'description' => '数据集加速实例ID。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'inst-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '数据集加速实例名称。'."\n"
                                    .'长度限制为64 Unicode 字符。'."\n"
                                    .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'description' => '数据集加速实例名称，格式为：'."\n"
                                    .'- 长度限制为64Unicode字符。'."\n"
                                    .'- 如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acc_instance_1',
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'title' => '数据集加速实例的描述与解释。'."\n"
                                    .'长度限制为1024 Unicode 字符。',
                                'description' => '数据集加速实例的描述与解释。'."\n"
                                    .'长度限制为1024Unicode字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xgboost数据集加速实例',
                                'maxLength' => 1024,
                            ],
                            'MaxSlot' => [
                                'title' => '数据集加速实例的最大加速槽个数。',
                                'description' => '数据集加速实例的最大加速槽个数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '20',
                                'default' => '20',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '更新数据集加速实例',
            'description' => '注意此接口为全量更新。',
        ],
        'ListInstances' => [
            'summary' => '获取数据集加速实例信息列表。',
            'path' => '/api/v1/instances',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '实例Id的列表，以逗号分隔。',
                        'description' => '实例ID的列表，多个加速实例ID间，以半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'inst-my1tk3jggooi5uwks5, inst-n69468yvjz8d12as7d, inst-tga4omjrepklkg1onn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '实例名称，支持模糊匹配',
                        'description' => '实例名称，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acc_instance_1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '数据集加速实例的类型，参考：产品规格'."\n"
                            .'basic：基础版'."\n"
                            .'enhanced：增强版',
                        'description' => '数据集加速实例的类型，参考：产品规格，取值如下：'."\n"
                            .'- basic：基础版。'."\n"
                            .'- enhanced：增强版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'basic',
                        'enum' => [
                            'basic',
                            'enhanced',
                        ],
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '数据集加速实例的付费类型。'."\n"
                            .'PayAsYouGo：后付费（后付费/按量付费）'."\n"
                            .'Subscription：预付费（预付费/包年包月）',
                        'description' => '数据集加速实例的付费类型，取值如下：'."\n"
                            .'- PayAsYouGo：后付费（按量付费）。'."\n"
                            .'- Subscription：预付费（包年包月）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PayAsYouGo',
                        'enum' => [
                            'PayAsYouGo',
                            'Subscription',
                        ],
                    ],
                ],
                [
                    'name' => 'Phase',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '数据集加速实例所处状态。状态机参考：状态机'."\n"
                            .'Created：初始化'."\n"
                            .'Running：运行中'."\n"
                            .'Stopped：已停止',
                        'description' => '数据集加速实例所处状态，取值如下：'."\n"
                            .'- Created：初始化。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Stopped：已停止。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                        'enum' => [
                            'Created',
                            'Running',
                            'Stopped',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                        'default' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排列顺序'."\n"
                            .'Desc： 降序排列'."\n"
                            .'Asc： 升序排列',
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                        'default' => 'Desc',
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询第几页数据，最小值1',
                        'description' => '数据集加速实例列表的页码。起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '设置查询的分页大小,最小值为1',
                        'description' => '分页查询时设置的每页显示的数据集加速实例的数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'Instances' => [
                                'title' => '数据集加速实例列表。',
                                'description' => '数据集加速实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '数据集加速实例的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                            'description' => '数据集加速实例的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                            'type' => 'string',
                                            'example' => '276065346797410278',
                                        ],
                                        'OwnerId' => [
                                            'title' => '数据集加速实例资源拥有者的Uid，在阿里云内为主账号Id 。',
                                            'description' => '数据集加速实例资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '1557702098194904',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '数据集加速实例创建的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速实例创建的时间。格式使用 ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '数据集加速实例最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速实例最后更新的时间。格式使用 ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'Uuid' => [
                                            'title' => '数据集加速实例的唯一标识符。',
                                            'description' => '数据集加速实例的唯一标识符。',
                                            'type' => 'string',
                                            'example' => 'inst-my1tk3jggooi5uwks5',
                                        ],
                                        'Name' => [
                                            'title' => '数据集加速实例名称。',
                                            'description' => '数据集加速实例名称。',
                                            'type' => 'string',
                                            'example' => 'acc_instance_1',
                                        ],
                                        'Description' => [
                                            'title' => '数据集加速实例的描述与解释。',
                                            'description' => '数据集加速实例的描述与解释。',
                                            'type' => 'string',
                                            'example' => 'xgboost数据集加速实例',
                                        ],
                                        'Type' => [
                                            'title' => '数据集加速实例的类型'."\n"
                                                .'Basic：基础版'."\n"
                                                .'Advanced：进阶版'."\n"
                                                .'Express：极速版',
                                            'description' => '数据集加速实例的类型，可能值：'."\n"
                                                .'- Basic：基础版。'."\n"
                                                .'- Advanced：进阶版。'."\n"
                                                .'- Express：极速版。',
                                            'type' => 'string',
                                            'example' => 'Basic',
                                        ],
                                        'Tags' => [
                                            'title' => '用户为数据集加速实例添加的自定义标签。',
                                            'description' => '用户为数据集加速实例添加的自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签的键值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'description' => '标签的键值。'."\n"
                                                            .'长度限制为64 Unicode字符。',
                                                        'type' => 'string',
                                                        'example' => 'dataset_version',
                                                        'maxLength' => 64,
                                                    ],
                                                    'Value' => [
                                                        'title' => '标签的值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'description' => '标签的值。'."\n"
                                                            .'长度限制为64 Unicode字符。',
                                                        'type' => 'string',
                                                        'example' => 'v0.1.0',
                                                        'maxLength' => 64,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'PaymentType' => [
                                            'title' => 'PayAsYouGo	数据集加速实例的付费类型。'."\n"
                                                .'PayAsYouGo：后付费（后付费/按量付费）'."\n"
                                                .'Subscription：预付费（预付费/包年包月）',
                                            'description' => '数据集加速实例的付费类型，可能值：'."\n"
                                                .'- PayAsYouGo：后付费（按量付费）。'."\n"
                                                .'- Subscription：预付费（包年包月）。',
                                            'type' => 'string',
                                            'example' => 'PayAsYouGo',
                                            'enum' => [
                                                'PayAsYouGo',
                                                'Subscription',
                                            ],
                                        ],
                                        'Capacity' => [
                                            'title' => '数据集加速实例的最大容量。'."\n"
                                                .'输入字符串的格式需要满足以下规范：Quantity',
                                            'description' => '数据集加速实例的最大容量。'."\n"
                                                .'输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)。',
                                            'type' => 'string',
                                            'example' => '30.0G',
                                        ],
                                        'IoType' => [
                                            'title' => '数据集加速实例的读写类型。',
                                            'description' => '数据集加速实例的读写类型。',
                                            'type' => 'string',
                                            'example' => 'readonly',
                                        ],
                                        'MaxSlot' => [
                                            'title' => '数据集加速实例的最大加速槽个数。',
                                            'description' => '数据集加速实例的最大加速槽个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                            'default' => '20',
                                        ],
                                        'MaxEndpoint' => [
                                            'title' => '数据集加速实例的最大挂载点个数。',
                                            'description' => '数据集加速实例的最大挂载点个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'default' => '100',
                                        ],
                                        'StorageType' => [
                                            'title' => '数据集加速实例的存储类型。',
                                            'description' => '数据集加速实例的存储类型。',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                            'default' => 'OSS',
                                        ],
                                        'ProviderType' => [
                                            'title' => '数据集加速实例的资源提供者类型。',
                                            'description' => '数据集加速实例的资源提供者类型。',
                                            'type' => 'string',
                                            'example' => 'Ecs',
                                            'default' => 'Ecs',
                                        ],
                                        'Status' => [
                                            'title' => '数据集加速实例状态。',
                                            'description' => '数据集加速实例状态。',
                                            '$ref' => '#/components/schemas/InstanceStatus',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素数量总和。',
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"Instances\\": [\\n    {\\n      \\"UserId\\": \\"276065346797410278\\",\\n      \\"OwnerId\\": \\"1557702098194904\\",\\n      \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"Uuid\\": \\"inst-my1tk3jggooi5uwks5\\",\\n      \\"Name\\": \\"acc_instance_1\\",\\n      \\"Description\\": \\"xgboost数据集加速实例\\",\\n      \\"Type\\": \\"Basic\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"dataset_version\\",\\n          \\"Value\\": \\"v0.1.0\\"\\n        }\\n      ],\\n      \\"PaymentType\\": \\"PayAsYouGo\\",\\n      \\"Capacity\\": \\"30.0G\\",\\n      \\"IoType\\": \\"readonly\\",\\n      \\"MaxSlot\\": 20,\\n      \\"MaxEndpoint\\": 0,\\n      \\"StorageType\\": \\"OSS\\",\\n      \\"ProviderType\\": \\"Ecs\\",\\n      \\"Status\\": {\\n        \\"Phase\\": \\"Running\\",\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"Init Succeed\\",\\n        \\"UsedCapacity\\": \\"20.0G\\",\\n        \\"SlotNum\\": 10\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取数据集加速实例列表',
            'description' => '请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
        ],
        'QueryInstanceMetrics' => [
            'summary' => '查询并获取数据集加速实例监控指标信息。',
            'path' => '/api/v1/instances/{InstanceId}/metrics/action/query',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '监控指标所属的数据集加速实例Id。',
                        'description' => '监控指标所属的数据集加速实例ID。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'inst-abcdefgh12****',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '监控指标的标签集，参考 Prometheus Label'."\n"
                            .'每种类型所包含的Labels不同，参考：类型详细信息'."\n"
                            .'仅接受预定义的Label Key，不支持自定义'."\n"
                            .'格式：key-value键值对形式的集合。',
                        'description' => '监控指标的标签集。',
                        'type' => 'object',
                        'required' => false,
                        'example' => 'SlotIDs: xxx',
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监控指标的类型：'."\n"
                            .'StorageUsage：存储使用量'."\n"
                            .'StorageUsageRatio：存储使用率'."\n"
                            .'CachedFileTotal：已缓存文件数量'."\n"
                            .'CachedTaskTotal：已缓存任务数',
                        'description' => '监控指标的类型，取值如下：'."\n"
                            .'- NetworkReceiveBytesPerSecond：每秒网络请求接收量。'."\n"
                            .'- NetworkTransmitBytesPerSecond：每秒网络请求发送量。'."\n"
                            .'- FrontendThroughputBytes：前端服务吞吐。'."\n"
                            .'- FrontendLatencyMicrosecond：前端服务延迟。'."\n"
                            .'- FrontendIops：前端服务读取频率。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NetworkReceiveBytesPerSecond',
                        'enum' => [
                            'NetworkReceiveBytesPerSecond',
                            'NetworkTransmitBytesPerSecond',
                            'FrontendThroughputBytes',
                            'FrontendLatencyMicrosecond',
                            'FrontendIops',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间.默认是1小时前。',
                        'description' => '起始时间，默认是1小时前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间.默认是当前。',
                        'description' => '截止时间，默认是当前时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间间隔。',
                        'description' => '时间间隔，单位为分钟。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5m',
                        'default' => '5m',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'Metrics' => [
                                'title' => '监控指标信息列表。',
                                'description' => '监控指标信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Metric信息详情。',
                                    '$ref' => '#/components/schemas/Metric',
                                ],
                            ],
                            'Period' => [
                                'title' => '时间间隔。',
                                'description' => '时间间隔。',
                                'type' => 'string',
                                'example' => '60s',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"Metrics\\": [\\n    {\\n      \\"Timestamp\\": \\"1655897743\\",\\n      \\"Value\\": 98.35\\n    }\\n  ],\\n  \\"Period\\": \\"60s\\"\\n}","type":"json"}]',
            'title' => '获取数据集加速实例监控指标',
            'description' => '- 请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。'."\n"
                .'- 在查询时，管控层会将InstanceId默认加入到筛选条件中，因此需要监控指标采集时关联到InstanceId上，方可被查询出来。',
        ],
        'DescribeInstance' => [
            'summary' => '获取指定数据集加速实例信息。',
            'path' => '/api/v1/instances/{InstanceId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Instance',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速实例ID。',
                        'description' => '数据集加速实例ID。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'inst-my1tk3jggooi5u****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'UserId' => [
                                'title' => '数据集加速实例的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                'description' => '数据集加速实例的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                'type' => 'string',
                                'example' => '27606534679741****',
                            ],
                            'OwnerId' => [
                                'title' => '数据集加速实例资源拥有者的Uid，在阿里云内为主账号Id 。',
                                'description' => '数据集加速实例资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                'type' => 'string',
                                'example' => '155770209819****',
                            ],
                            'GmtCreateTime' => [
                                'title' => '数据集加速实例创建的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速实例创建的时间。格式使用ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '数据集加速实例最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速实例最后更新的时间。格式使用ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'Uuid' => [
                                'title' => '数据集加速实例的唯一标识符。',
                                'description' => '数据集加速实例的唯一标识符。',
                                'type' => 'string',
                                'example' => 'inst-my1tk3jggooi5u****',
                            ],
                            'Name' => [
                                'title' => '数据集加速实例名称。',
                                'description' => '数据集加速实例名称。',
                                'type' => 'string',
                                'example' => 'acc_instance_1',
                            ],
                            'Description' => [
                                'title' => '数据集加速实例的描述与解释。',
                                'description' => '数据集加速实例的描述与解释。',
                                'type' => 'string',
                                'example' => 'xgboost数据集加速实例',
                            ],
                            'Type' => [
                                'title' => '数据集加速实例的类型'."\n"
                                    .'basic：基础版'."\n"
                                    .'enhanced：增强版',
                                'description' => '数据集加速实例的类型，可能值：'."\n"
                                    .'- basic：基础版。'."\n"
                                    .'- enhanced：增强版。',
                                'type' => 'string',
                                'example' => 'basic',
                            ],
                            'Tags' => [
                                'title' => '用户为数据集加速实例添加的自定义标签。',
                                'description' => '用户为数据集加速实例添加的自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签的键值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的键值。'."\n"
                                                .'长度限制为64Unicode字符。',
                                            'type' => 'string',
                                            'example' => 'dataset_version',
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'title' => '标签的值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的值。'."\n"
                                                .'长度限制为64Unicode字符。',
                                            'type' => 'string',
                                            'example' => 'v0.1.0',
                                            'maxLength' => 64,
                                        ],
                                    ],
                                ],
                            ],
                            'PaymentType' => [
                                'title' => 'PayAsYouGo	数据集加速实例的付费类型。'."\n"
                                    .'PayAsYouGo：后付费（后付费/按量付费）'."\n"
                                    .'Subscription：预付费（预付费/包年包月）',
                                'description' => '数据集加速实例的付费类型，可能值：'."\n"
                                    .'- PayAsYouGo：后付费（按量付费）。'."\n"
                                    .'- Subscription：预付费（包年包月）。',
                                'type' => 'string',
                                'example' => 'PayAsYouGo',
                                'enum' => [
                                    'PayAsYouGo',
                                    'Subscription',
                                ],
                            ],
                            'Capacity' => [
                                'title' => '数据集加速实例的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：Quantity',
                                'description' => '数据集加速实例的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)。',
                                'type' => 'string',
                                'example' => '30.0G',
                            ],
                            'IoType' => [
                                'title' => '数据集加速实例的读写类型。',
                                'description' => '数据集加速实例的读写类型。',
                                'type' => 'string',
                                'example' => 'readonly',
                            ],
                            'MaxSlot' => [
                                'title' => '数据集加速实例的最大加速槽个数。',
                                'description' => '数据集加速实例的最大加速槽个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                                'default' => '100',
                            ],
                            'MaxEndpoint' => [
                                'title' => '数据集加速实例的最大挂载点个数。',
                                'description' => '数据集加速实例的最大挂载点个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'default' => '100',
                            ],
                            'StorageType' => [
                                'title' => '数据集加速实例的存储类型。',
                                'description' => '数据集加速实例的存储类型。',
                                'type' => 'string',
                                'example' => 'OSS',
                                'default' => 'OSS',
                            ],
                            'ProviderType' => [
                                'title' => '数据集加速实例的资源提供者类型。',
                                'description' => '数据集加速实例的资源提供者类型。',
                                'type' => 'string',
                                'example' => 'Ecs',
                                'default' => 'Ecs',
                            ],
                            'Status' => [
                                'title' => '数据集加速实例状态。',
                                'description' => '数据集加速实例状态。',
                                '$ref' => '#/components/schemas/InstanceStatus',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"UserId\\": \\"27606534679741****\\",\\n  \\"OwnerId\\": \\"155770209819****\\",\\n  \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"Uuid\\": \\"inst-my1tk3jggooi5u****\\",\\n  \\"Name\\": \\"acc_instance_1\\",\\n  \\"Description\\": \\"xgboost数据集加速实例\\",\\n  \\"Type\\": \\"basic\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"dataset_version\\",\\n      \\"Value\\": \\"v0.1.0\\"\\n    }\\n  ],\\n  \\"PaymentType\\": \\"PayAsYouGo\\",\\n  \\"Capacity\\": \\"30.0G\\",\\n  \\"IoType\\": \\"readonly\\",\\n  \\"MaxSlot\\": 20,\\n  \\"MaxEndpoint\\": 0,\\n  \\"StorageType\\": \\"OSS\\",\\n  \\"ProviderType\\": \\"Ecs\\",\\n  \\"Status\\": {\\n    \\"Phase\\": \\"Running\\",\\n    \\"Code\\": \\"200\\",\\n    \\"Message\\": \\"Init Succeed\\",\\n    \\"UsedCapacity\\": \\"20.0G\\",\\n    \\"SlotNum\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取数据集加速实例详情',
        ],
        'CreateSlot' => [
            'summary' => '创建并注册一个数据集加速槽。',
            'path' => '/api/v1/slots',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '数据集加速槽所对应的数据集加速实例的唯一标识符。',
                                'description' => '数据集加速槽所对应的数据集加速实例的唯一标识符。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'inst-my1tk3jggooi5uwks5',
                            ],
                            'Name' => [
                                'title' => '数据集加速槽名称。'."\n"
                                    .'长度限制为64 Unicode 字符。',
                                'description' => '数据集加速槽名称。长度限制为64个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'slot_1',
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'title' => '数据集加速槽的描述与解释。'."\n"
                                    .'长度限制为1024 Unicode 字符。',
                                'description' => '数据集加速槽的描述与解释。长度限制为1024个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xgboost数据集加速槽',
                                'maxLength' => 1024,
                            ],
                            'Tags' => [
                                'title' => '用户为数据集加速槽添加的自定义标签。',
                                'description' => '用户为数据集加速槽添加的自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签的键值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的键值。长度限制为64个字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'dataset_version',
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'title' => 'v0.1.0	标签的值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的值。长度限制为 64 字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'v0.1.0',
                                            'maxLength' => 64,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'StorageType' => [
                                'title' => '数据集加速槽的数据存储类型。'."\n"
                                    .'OSS：OSS文件存储'."\n"
                                    .'NAS：NAS文件存储',
                                'description' => '数据集加速槽的数据存储类型，取值如下：'."\n"
                                    .'- OSS：OSS文件存储。'."\n"
                                    .'- NAS：NAS文件存储。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OSS',
                                'enum' => [
                                    'OSS',
                                    'NAS',
                                    'CPFS',
                                ],
                            ],
                            'StorageUri' => [
                                'title' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'description' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'oss://pai-vision-data-hz2.oss-cn-hangzhou-internal.aliyuncs.com/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                            ],
                            'Capacity' => [
                                'title' => '数据集加速槽的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：Quantity',
                                'description' => '数据集加速槽的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/) 。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '30.0G',
                            ],
                            'LifeCycle' => [
                                'title' => '数据集加速槽的生命周期。',
                                'description' => '数据集加速槽的生命周期。',
                                'required' => false,
                                '$ref' => '#/components/schemas/SlotLifeCycle',
                            ],
                            'IoType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Endpoints' => [
                                'title' => '创建数据集加速槽时，同时创建的挂载点列表。',
                                'description' => '创建数据集加速槽时，同时创建的挂载点列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '挂载点的名称。'."\n"
                                                .'长度限制为64 Unicode 字符。'."\n"
                                                .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                            'description' => '挂载点的名称。'."\n"
                                                .'长度限制为64个字符。'."\n"
                                                .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'endpoint-1',
                                        ],
                                        'Type' => [
                                            'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                                .'VPC：端点机器处于VPC网络',
                                            'description' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                                .'VPC：端点机器处于VPC网络。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'VPC',
                                            'enum' => [
                                                'VPC',
                                            ],
                                        ],
                                        'VpcId' => [
                                            'title' => '挂载点使用的专有网络 VPC Id。',
                                            'description' => '挂载点使用的专有网络 VPC ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vpc-j6co2fcdsl1q0gnuc3ym3',
                                        ],
                                        'VswitchId' => [
                                            'title' => '挂载点使用的交换机 Vswitch Id。'."\n"
                                                .'该Vswitch需要属于传入的 VPC。',
                                            'description' => '挂载点使用的交换机vSwitch ID。'."\n"
                                                .'该vSwitch需要属于传入的VPC。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vsw-j6cmr00qjyrft6jo2mg7g',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'EndpointIds' => [
                                'title' => '创建数据集加速槽时，同时挂载的数据集加速槽挂载点Id的列表，以逗号分隔。',
                                'description' => '创建数据集加速槽时，同时挂载的数据集加速槽挂载点ID的列表，多个挂载点ID以半角逗号（,）分隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'end-my1tk3jggooi5uwks5,end-n69468yvjz8d12as7d,end-tga4omjrepklkg1onn',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'SlotId' => [
                                'title' => '数据集加速槽Id。',
                                'description' => '数据集加速槽ID。',
                                'type' => 'string',
                                'example' => 'slot-5zk866779me51jgu3w',
                            ],
                            'EndpointIds' => [
                                'title' => '数据集挂载点Id。',
                                'description' => '数据集挂载点ID。',
                                'type' => 'string',
                                'example' => 'end-5zk866779me51jgu3w,end-5zk866779me51jgu3w',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"SlotId\\": \\"slot-5zk866779me51jgu3w\\",\\n  \\"EndpointIds\\": \\"end-5zk866779me51jgu3w,end-5zk866779me51jgu3w\\"\\n}","type":"json"}]',
            'title' => '创建数据集加速槽',
        ],
        'DeleteSlot' => [
            'summary' => '删除一个数据集加速槽。',
            'path' => '/api/v1/slots/{SlotId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否不等待加速槽停止，强制删除。',
                        'description' => '是否不等待加速槽停止，强制删除。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '删除数据集加速槽',
            'description' => '调用该接口会首先进行检查，满足以下条件后方可被删除，否则删除失败。'."\n"
                .'- 该 Slot 处于终态。',
        ],
        'StopSlot' => [
            'summary' => '停止一个数据集加速槽。',
            'path' => '/api/v1/slots/{SlotId}/action/stop',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '停止数据集加速槽',
            'description' => '- 该接口为异步接口，请求后会直接返回，返回结果代表请求操作是否成功。数据集加速槽的停止状态需要后续由 DescribeSlot 接口具体获取。'."\n"
                .'- 调用StopSlot接口后，无法再恢复或重启，缓存资源将被删除。',
        ],
        'UpdateSlot' => [
            'summary' => '更新一个数据集加速槽的信息。',
            'path' => '/api/v1/slots/{SlotId}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '数据集加速槽名称。'."\n"
                                    .'长度限制为64 Unicode 字符。',
                                'description' => '数据集加速槽名称。'."\n"
                                    .'长度限制为64个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'slot_1',
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'title' => '数据集加速槽的描述与解释。'."\n"
                                    .'长度限制为1024 Unicode 字符。',
                                'description' => '数据集加速槽的描述与解释。'."\n"
                                    .'长度限制为1024个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xgboost数据集加速槽',
                                'maxLength' => 1024,
                            ],
                            'Tags' => [
                                'title' => '用户为数据集加速槽添加的自定义标签。',
                                'description' => '用户为数据集加速槽添加的自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签的键值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的键值。'."\n"
                                                .'长度限制为64个字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'dataset_version',
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'title' => 'v0.1.0	标签的值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的值。'."\n"
                                                .'长度限制为64个字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'v0.1.0',
                                            'maxLength' => 64,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'StorageType' => [
                                'title' => '数据集加速槽的数据存储类型。'."\n"
                                    .'OSS：OSS文件存储'."\n"
                                    .'NAS：NAS文件存储',
                                'description' => '数据集加速槽的数据存储类型，取值如下：'."\n"
                                    .'- OSS：OSS文件存储。'."\n"
                                    .'- NAS：NAS文件存储。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OSS',
                                'enum' => [
                                    'OSS',
                                    'NAS',
                                ],
                            ],
                            'StorageUri' => [
                                'title' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'description' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'oss://pai-vision-data-hz2.oss-cn-hangzhou-internal.aliyuncs.com/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                            ],
                            'Capacity' => [
                                'title' => '数据集加速槽的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：Quantity',
                                'description' => '数据集加速槽的最大容量。'."\n"
                                    .'输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/) 。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '30.0G',
                            ],
                            'LifeCycle' => [
                                'title' => '数据集加速槽的生命周期。',
                                'description' => '数据集加速槽的生命周期。',
                                'required' => false,
                                '$ref' => '#/components/schemas/SlotLifeCycle',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '更新数据集加速槽',
            'description' => '注意接口为全量更新，除了只读字段外，其余字段都更新为传入值。',
        ],
        'QuerySlotMetrics' => [
            'summary' => '查询并获取数据集加速槽监控指标信息。',
            'path' => '/api/v1/slots/{SlotId}/metrics/action/query',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '监控指标所属的数据集加速槽ID。',
                        'description' => '监控指标所属的数据集加速槽ID。如何获取加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-abcdefgh12****',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '监控指标的标签集，参考 Prometheus Label'."\n"
                            .'每种类型所包含的Labels不同，参考：类型详细信息'."\n"
                            .'仅接受预定义的Label Key，不支持自定义'."\n"
                            .'格式：key-value键值对形式的集合。',
                        'description' => '监控指标的标签集。',
                        'type' => 'object',
                        'required' => false,
                        'example' => 'SlotIDs: xxx',
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监控指标的类型：'."\n"
                            .'StorageUsage：存储使用量'."\n"
                            .'StorageUsageRatio：存储使用率'."\n"
                            .'CachedFileTotal：已缓存文件数量'."\n"
                            .'CachedTaskTotal：已缓存任务数',
                        'description' => '监控指标的类型，取值如下：'."\n"
                            .'- NetworkReceiveBytesPerSecond：每秒网络请求接收量。'."\n"
                            .'- NetworkTransmitBytesPerSecond：每秒网络请求发送量。'."\n"
                            .'- FrontendThroughputBytes：前端服务吞吐。'."\n"
                            .'- FrontendLatencyMicrosecond：前端服务延迟。'."\n"
                            .'- FrontendIops：前端服务读取频率。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NetworkReceiveBytesPerSecond',
                        'enum' => [
                            'NetworkTransmitBytesPerSecond',
                            'NetworkReceiveBytesPerSecond',
                            'FrontendThroughputBytes',
                            'FrontendLatencyMicrosecond',
                            'FrontendIops',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间.默认是1小时前。',
                        'description' => '起始时间，默认是1小时前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间.默认是当前。',
                        'description' => '截止时间，默认是当前时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间间隔。',
                        'description' => '时间间隔，单位为分钟。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5m',
                        'default' => '5m',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'Metrics' => [
                                'title' => '监控指标信息列表。',
                                'description' => '监控指标信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Metric信息。',
                                    '$ref' => '#/components/schemas/Metric',
                                ],
                            ],
                            'Period' => [
                                'title' => '时间间隔。',
                                'description' => '时间间隔。',
                                'type' => 'string',
                                'example' => '60s',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"Metrics\\": [\\n    {\\n      \\"Timestamp\\": \\"1655897743\\",\\n      \\"Value\\": 98.35\\n    }\\n  ],\\n  \\"Period\\": \\"60s\\"\\n}","type":"json"}]',
            'title' => '获取加速槽监控指标',
            'description' => '- 请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。'."\n"
                .'- 在查询时，管控层会将SlotId默认加入到筛选条件中，因此需要监控指标采集时关联到SlotId上，方可被查询出来。',
        ],
        'ListSlots' => [
            'summary' => '获取数据集加速槽的信息列表。',
            'path' => '/api/v1/slots',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SlotIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽ID的列表，以逗号分隔。',
                        'description' => '数据集加速槽ID的列表，多个加速槽ID以半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slot-my1tk3jggooi5u****,slot-n69468yvjz8d12****,slot-tga4omjrepklkg****',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '加速槽所对应的数据集加速实例的唯一标识符。',
                        'description' => '加速槽所对应的数据集加速实例的唯一标识符。如何获取加速实例ID，请参见[ListInstances](~~467899~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'inst-my1tk3jggooi5u****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽名称，支持模糊匹配',
                        'description' => '数据集加速槽名称，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acc_instance_slot_1',
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽的数据存储类型。'."\n"
                            .'OSS：OSS文件存储'."\n"
                            .'NAS：NAS文件存储',
                        'description' => '数据集加速槽的数据存储类型，取值如下：'."\n"
                            .'- OSS：OSS文件存储。'."\n"
                            .'- NAS：NAS文件存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
                        'enum' => [
                            'OSS',
                            'NAS',
                        ],
                    ],
                ],
                [
                    'name' => 'Phase',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽所处状态。'."\n"
                            .'Created：已创建'."\n"
                            .'Preparing：正在准备资源'."\n"
                            .'Loading：正在加载数据'."\n"
                            .'Running：正在运行，提供服务'."\n"
                            .'Reloading：正在重新加载数据'."\n"
                            .'Succeed：成功完成'."\n"
                            .'Failed：已失败'."\n"
                            .'Stopping：正在停止'."\n"
                            .'Stopped：已停止',
                        'description' => '数据集加速槽所处状态，取值如下：'."\n"
                            .'- Created：已创建。'."\n"
                            .'- Preparing：正在准备资源。'."\n"
                            .'- Loading：正在加载数据。'."\n"
                            .'- Running：正在运行，提供服务。'."\n"
                            .'- Reloading：正在重新加载数据。'."\n"
                            .'- Succeed：成功完成。'."\n"
                            .'- Failed：已失败。'."\n"
                            .'- Stopping：正在停止。'."\n"
                            .'- Stopped：已停止。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                        'enum' => [
                            'Created',
                            'Preparing',
                            'Loading',
                            'Running',
                            'Succeed',
                            'Failed',
                            'Stopping',
                            'Stopped',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                        'default' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排列顺序'."\n"
                            .'Desc： 降序排列'."\n"
                            .'Asc： 升序排列',
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                        'default' => 'Desc',
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询第几页数据，最小值1',
                        'description' => '加速槽列表的页码。起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '设置查询的分页大小,最小值为1',
                        'description' => '分页查询时设置的每页显示的加速槽数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'EndpointIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '加速槽所对应的数据集加速挂载点的唯一标识符。',
                        'description' => '加速槽所对应的数据集加速挂载点的唯一标识符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'endp-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'StorageUri',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽的数据存储路径（URI）。',
                        'description' => '数据集加速槽的数据存储路径（URI）。',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'Slots' => [
                                'title' => '数据集加速列表',
                                'description' => '数据集加速列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '数据集加速槽的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                            'description' => '数据集加速槽的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                            'type' => 'string',
                                            'example' => '27606534679741****',
                                        ],
                                        'OwnerId' => [
                                            'title' => '数据集加速槽资源拥有者的Uid，在阿里云内为主账号Id 。',
                                            'description' => '数据集加速槽资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '155770209819****',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '数据集加速槽创建的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速槽创建的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '数据集加速槽最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速槽最后更新的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'Uuid' => [
                                            'title' => '数据集加速槽的唯一标识符。',
                                            'description' => '数据集加速槽的唯一标识符。',
                                            'type' => 'string',
                                            'example' => 'slot-5zk866779me51j****',
                                        ],
                                        'InstanceId' => [
                                            'title' => '加速槽所对应的数据集加速实例的唯一标识符。',
                                            'description' => '加速槽所对应的数据集加速实例的唯一标识符。',
                                            'type' => 'string',
                                            'example' => 'inst-my1tk3jggooi5u****',
                                        ],
                                        'Name' => [
                                            'title' => '数据集加速槽名称。',
                                            'description' => '数据集加速槽名称。',
                                            'type' => 'string',
                                            'example' => 'slot_1',
                                        ],
                                        'Description' => [
                                            'title' => '数据集加速槽的描述与解释。',
                                            'description' => '数据集加速槽的描述与解释。',
                                            'type' => 'string',
                                            'example' => 'xgboost数据集加速槽',
                                        ],
                                        'Tags' => [
                                            'title' => '用户为数据集加速槽添加的自定义标签。',
                                            'description' => '用户为数据集加速槽添加的自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签的键值。',
                                                        'description' => '标签的键值。',
                                                        'type' => 'string',
                                                        'example' => 'dataset_version',
                                                    ],
                                                    'Value' => [
                                                        'title' => '标签的值。',
                                                        'description' => '标签的值。',
                                                        'type' => 'string',
                                                        'example' => 'v0.1.0',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'StorageType' => [
                                            'title' => '数据集加速槽的数据存储类型。'."\n"
                                                .'OSS：OSS文件存储'."\n"
                                                .'NAS：NAS文件存储',
                                            'description' => '数据集加速槽的数据存储类型，可能值：'."\n"
                                                .'- OSS：OSS文件存储。'."\n"
                                                .'- NAS：NAS文件存储。',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                            'enum' => [
                                                'OSS',
                                                'NAS',
                                            ],
                                        ],
                                        'StorageUri' => [
                                            'title' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                            'description' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                            'type' => 'string',
                                            'example' => 'oss://examplebucket/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                                        ],
                                        'Capacity' => [
                                            'title' => '数据集加速槽的最大容量。输入字符串的格式需要满足以下规范：Quantity',
                                            'description' => '数据集加速槽的最大容量。输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/)。',
                                            'type' => 'string',
                                            'example' => '30.0G',
                                        ],
                                        'IoType' => [
                                            'title' => '数据集加速槽的读写类型。',
                                            'description' => '数据集加速槽的读写类型。',
                                            'type' => 'string',
                                            'example' => 'readonly',
                                        ],
                                        'LifeCycle' => [
                                            'title' => '数据集加速槽的生命周期。',
                                            'description' => '数据集加速槽的生命周期。',
                                            '$ref' => '#/components/schemas/SlotLifeCycle',
                                        ],
                                        'Status' => [
                                            'title' => '数据集加速槽状态。',
                                            'description' => '数据集加速槽状态。',
                                            '$ref' => '#/components/schemas/SlotStatus',
                                        ],
                                        'Endpoints' => [
                                            'title' => '数据集加速槽关联的端点列表。',
                                            'description' => '数据集加速槽关联的端点列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserId' => [
                                                        'title' => '数据集加速端点的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                                        'description' => '数据集加速端点的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                                        'type' => 'string',
                                                        'example' => '27606534679741****',
                                                    ],
                                                    'OwnerId' => [
                                                        'title' => '数据集加速端点的资源拥有者的Uid，在阿里云内为主账号Id 。',
                                                        'description' => '数据集加速端点的资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                                        'type' => 'string',
                                                        'example' => '155770209819****',
                                                    ],
                                                    'GmtCreateTime' => [
                                                        'title' => '数据集加速端点创建的时间。格式使用 ISO8601(RFC3339)。',
                                                        'description' => '数据集加速端点创建的时间。格式使用ISO8601（RFC3339）。',
                                                        'type' => 'string',
                                                        'example' => '2014-10-02T15:01:23Z',
                                                    ],
                                                    'GmtModifiedTime' => [
                                                        'title' => '数据集加速端点最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                                        'description' => '数据集加速端点最后更新的时间。格式使用ISO8601（RFC3339）。',
                                                        'type' => 'string',
                                                        'example' => '2014-10-02T15:01:23Z',
                                                    ],
                                                    'Uuid' => [
                                                        'title' => '挂载点的唯一标识符。',
                                                        'description' => '挂载点的唯一标识符。',
                                                        'type' => 'string',
                                                        'example' => 'end-ivrq92qhbyrg4j****',
                                                    ],
                                                    'Name' => [
                                                        'title' => '挂载点的名称。',
                                                        'description' => '挂载点的名称。',
                                                        'type' => 'string',
                                                        'example' => 'endpoint-1',
                                                    ],
                                                    'Type' => [
                                                        'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                                            .'VPC：端点机器处于VPC网络',
                                                        'description' => '挂载点的网络类型，可能值：'."\n"
                                                            .'- VPC：挂载点处于VPC网络。'."\n"
                                                            .'- INNER：挂载点处于PAI内部网络中，用于PAI其他产品进行访问。',
                                                        'type' => 'string',
                                                        'example' => 'VPC',
                                                        'enum' => [
                                                            'VPC',
                                                        ],
                                                    ],
                                                    'VpcId' => [
                                                        'title' => '挂载点使用的专有网络 VPC Id。',
                                                        'description' => '挂载点使用的专有网络 VPC ID。',
                                                        'type' => 'string',
                                                        'example' => 'vpc-j6co2fcdsl1q0gnuc****',
                                                    ],
                                                    'VswitchId' => [
                                                        'title' => '挂载点使用的交换机 Vswitch Id。',
                                                        'description' => '挂载点使用的交换机vSwitch ID。',
                                                        'type' => 'string',
                                                        'example' => 'vsw-j6cmr00qjyrft6jo2****',
                                                    ],
                                                    'Status' => [
                                                        'title' => '数据集加速槽挂载点的状态。',
                                                        'description' => '数据集加速槽挂载点的状态。',
                                                        '$ref' => '#/components/schemas/EndpointStatus',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素数量总和。',
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"Slots\\": [\\n    {\\n      \\"UserId\\": \\"27606534679741****\\",\\n      \\"OwnerId\\": \\"155770209819****\\",\\n      \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"Uuid\\": \\"slot-5zk866779me51j****\\",\\n      \\"InstanceId\\": \\"inst-my1tk3jggooi5u****\\",\\n      \\"Name\\": \\"slot_1\\",\\n      \\"Description\\": \\"xgboost数据集加速槽\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"dataset_version\\",\\n          \\"Value\\": \\"v0.1.0\\"\\n        }\\n      ],\\n      \\"StorageType\\": \\"OSS\\",\\n      \\"StorageUri\\": \\"oss://examplebucket/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt\\",\\n      \\"Capacity\\": \\"30.0G\\",\\n      \\"IoType\\": \\"readonly\\",\\n      \\"LifeCycle\\": {\\n        \\"Type\\": \\"Running\\",\\n        \\"Config\\": \\"{}\\"\\n      },\\n      \\"Status\\": {\\n        \\"Phase\\": \\"Running\\",\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"Init Succeed\\",\\n        \\"Detail\\": {\\n          \\"LoadedFileNum\\": 1000000,\\n          \\"LoadedFileSize\\": \\"200G\\",\\n          \\"LoadingTimeCost\\": 1800000\\n        }\\n      },\\n      \\"Endpoints\\": [\\n        {\\n          \\"UserId\\": \\"27606534679741****\\",\\n          \\"OwnerId\\": \\"155770209819****\\",\\n          \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n          \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n          \\"Uuid\\": \\"end-ivrq92qhbyrg4j****\\",\\n          \\"Name\\": \\"endpoint-1\\",\\n          \\"Type\\": \\"VPC\\",\\n          \\"VpcId\\": \\"vpc-j6co2fcdsl1q0gnuc****\\",\\n          \\"VswitchId\\": \\"vsw-j6cmr00qjyrft6jo2****\\",\\n          \\"Status\\": {\\n            \\"Phase\\": \\"Ready\\",\\n            \\"Code\\": \\"200\\",\\n            \\"Message\\": \\"Init Succeed\\",\\n            \\"Detail\\": {\\n              \\"IpPortMapping\\": {\\n                \\"key\\": {\\n                  \\"Ip\\": \\"10.0.0.5\\",\\n                  \\"Port\\": \\"3306\\"\\n                }\\n              }\\n            }\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取数据集加速槽列表',
            'description' => '请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
        ],
        'DescribeSlot' => [
            'summary' => '获取指定数据集加速槽的信息。',
            'path' => '/api/v1/slots/{SlotId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽ID。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5u****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'UserId' => [
                                'title' => '数据集加速槽的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                'description' => '数据集加速槽的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                'type' => 'string',
                                'example' => '27606534679741****',
                            ],
                            'OwnerId' => [
                                'title' => '数据集加速槽资源拥有者的Uid，在阿里云内为主账号Id 。',
                                'description' => '数据集加速槽资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                'type' => 'string',
                                'example' => '155770209819****',
                            ],
                            'GmtCreateTime' => [
                                'title' => '数据集加速槽创建的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速槽创建的时间。格式使用 ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '数据集加速槽最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速槽最后更新的时间。格式使用 ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'Uuid' => [
                                'title' => '数据集加速槽的唯一标识符。',
                                'description' => '数据集加速槽的唯一标识符。',
                                'type' => 'string',
                                'example' => 'slot-5zk866779me51j****',
                            ],
                            'InstanceId' => [
                                'title' => '加速槽所对应的数据集加速实例的唯一标识符。',
                                'description' => '加速槽所对应的数据集加速实例的唯一标识符。',
                                'type' => 'string',
                                'example' => 'inst-my1tk3jggooi5u****',
                            ],
                            'Name' => [
                                'title' => '数据集加速槽名称。',
                                'description' => '数据集加速槽名称。',
                                'type' => 'string',
                                'example' => 'slot_1',
                            ],
                            'Description' => [
                                'title' => '数据集加速槽的描述与解释。',
                                'description' => '数据集加速槽的描述与解释。',
                                'type' => 'string',
                                'example' => 'xgboost数据集加速槽',
                            ],
                            'Tags' => [
                                'title' => '用户为数据集加速槽添加的自定义标签。',
                                'description' => '用户为数据集加速槽添加的自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签的键值。',
                                            'description' => '标签的键值。',
                                            'type' => 'string',
                                            'example' => 'dataset_version',
                                        ],
                                        'Value' => [
                                            'title' => '标签的值。',
                                            'description' => '标签的值。',
                                            'type' => 'string',
                                            'example' => 'v0.1.0',
                                        ],
                                    ],
                                ],
                            ],
                            'StorageType' => [
                                'title' => '数据集加速槽的数据存储类型。'."\n"
                                    .'OSS：OSS文件存储'."\n"
                                    .'NAS：NAS文件存储',
                                'description' => '数据集加速槽的数据存储类型，可能值：'."\n"
                                    .'- OSS：OSS文件存储。'."\n"
                                    .'- NAS：NAS文件存储。',
                                'type' => 'string',
                                'example' => 'OSS',
                                'enum' => [
                                    'OSS',
                                    'NAS',
                                ],
                            ],
                            'StorageUri' => [
                                'title' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'description' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                'type' => 'string',
                                'example' => 'oss://examplebucket/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                            ],
                            'Capacity' => [
                                'title' => '数据集加速槽的最大容量。输入字符串的格式需要满足以下规范：Quantity',
                                'description' => '数据集加速槽的最大容量。输入字符串的格式需要满足以下规范：[Quantity](https://kubernetes.io/zh-cn/docs/reference/kubernetes-api/common-definitions/quantity/) 。',
                                'type' => 'string',
                                'example' => '30.0G',
                            ],
                            'IoType' => [
                                'title' => '数据集加速槽的读写类型。',
                                'description' => '数据集加速槽的读写类型。',
                                'type' => 'string',
                                'example' => 'readonly',
                            ],
                            'LifeCycle' => [
                                'title' => '数据集加速槽的生命周期。',
                                'description' => '数据集加速槽的生命周期。',
                                '$ref' => '#/components/schemas/SlotLifeCycle',
                            ],
                            'Status' => [
                                'title' => '数据集加速槽状态。',
                                'description' => '数据集加速槽状态。',
                                '$ref' => '#/components/schemas/SlotStatus',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"UserId\\": \\"27606534679741****\\",\\n  \\"OwnerId\\": \\"155770209819****\\",\\n  \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"Uuid\\": \\"slot-5zk866779me51j****\\",\\n  \\"InstanceId\\": \\"inst-my1tk3jggooi5u****\\",\\n  \\"Name\\": \\"slot_1\\",\\n  \\"Description\\": \\"xgboost数据集加速槽\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"dataset_version\\",\\n      \\"Value\\": \\"v0.1.0\\"\\n    }\\n  ],\\n  \\"StorageType\\": \\"OSS\\",\\n  \\"StorageUri\\": \\"oss://examplebucket/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt\\",\\n  \\"Capacity\\": \\"30.0G\\",\\n  \\"IoType\\": \\"readonly\\",\\n  \\"LifeCycle\\": {\\n    \\"Type\\": \\"Running\\",\\n    \\"Config\\": \\"{}\\"\\n  },\\n  \\"Status\\": {\\n    \\"Phase\\": \\"Running\\",\\n    \\"Code\\": \\"200\\",\\n    \\"Message\\": \\"Init Succeed\\",\\n    \\"Detail\\": {\\n      \\"LoadedFileNum\\": 1000000,\\n      \\"LoadedFileSize\\": \\"200G\\",\\n      \\"LoadingTimeCost\\": 1800000\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取数据集加速槽详情',
        ],
        'CreateEndpoint' => [
            'summary' => '创建并注册一个数据集加速槽端点。',
            'path' => '/api/v1/endpoints',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '挂载点的名称。'."\n"
                                    .'长度限制为64 Unicode 字符。'."\n"
                                    .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'description' => '挂载点的名称。'."\n"
                                    .'长度限制为64个字符。'."\n"
                                    .'如果传入值为空（包含空字符串），系统会使用Uuid字段的值作为默认名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'endpoint-1',
                            ],
                            'Type' => [
                                'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                    .'VPC：端点机器处于VPC网络',
                                'description' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                    .'- VPC：挂载点处于VPC网络。'."\n"
                                    .'- INNER：挂载点处于PAI内部网络中，用于PAI其他产品进行访问。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VPC',
                                'enum' => [
                                    'VPC',
                                ],
                            ],
                            'VpcId' => [
                                'title' => '挂载点使用的专有网络 VPC Id。',
                                'description' => '挂载点使用的专有网络 VPC ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc-j6co2fcdsl1q0gnuc****',
                            ],
                            'VswitchId' => [
                                'title' => '挂载点使用的交换机 Vswitch Id。'."\n"
                                    .'该Vswitch需要属于传入的 VPC。',
                                'description' => '挂载点使用的交换机vSwitch Id。'."\n"
                                    .'该vSwitch需要属于传入的VPC。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vsw-j6cmr00qjyrft6jo2****',
                            ],
                            'InstanceId' => [
                                'title' => '所属加速实例的ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'inst-ivrq92qhbyrg4jctih',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'EndpointId' => [
                                'title' => '数据集加速端点Id。',
                                'description' => '数据集加速端点ID。',
                                'type' => 'string',
                                'example' => 'end-5zk866779me51j****',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"EndpointId\\": \\"end-5zk866779me51j****\\"\\n}","type":"json"}]',
            'title' => '创建数据集加速端点',
        ],
        'DeleteEndpoint' => [
            'summary' => '删除一个数据集加速槽挂载点。',
            'path' => '/api/v1/endpoints/{EndpointId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽挂载点Id。',
                        'description' => '数据集加速槽挂载点Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'end-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '删除数据集加速端点',
            'description' => '调用该接口后，会删除用户网络打通相关的资源，可能导致用户侧访问缓存服务失败，请在确定无访问后再进行删除。',
        ],
        'BindEndpoint' => [
            'summary' => '将一个挂载点关联到一个数据集加速槽上。',
            'path' => '/api/v1/endpoints/{EndpointId}/slots/{SlotId}',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽挂载点Id。',
                        'description' => '数据集加速槽挂载点ID。如何获取挂载点ID，请参见[ListEndpoints](~~467913~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'end-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '关联数据集加速端点',
        ],
        'UnbindEndpoint' => [
            'summary' => '取消挂载点关联和指定数据集加速槽的关联关系。',
            'path' => '/api/v1/endpoints/{EndpointId}/slots/{SlotId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽挂载点Id。',
                        'description' => '数据集加速槽挂载点ID。如何获取挂载点ID，请参见[ListEndpoints](~~467913~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'end-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '取消关联数据集加速端点',
        ],
        'ListEndpoints' => [
            'summary' => '获取数据集加速槽挂载点的信息列表。',
            'path' => '/api/v1/endpoints',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'EndpointIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽挂载点Id的列表，以逗号分隔。',
                        'description' => '数据集加速槽挂载点ID的列表，多个挂载点ID，以半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'end-my1tk3jggooi5u****,end-n69468yvjz8d12****,end-tga4omjrepklkg****',
                    ],
                ],
                [
                    'name' => 'SlotIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '所属的数据集加速槽Id。',
                        'description' => '所属的数据集加速槽ID。如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slot-my1tk3jggooi5u****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速槽挂载点名称，支持模糊匹配。',
                        'description' => '数据集加速槽挂载点名称，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acc_instance_slot_mount_1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                            .'VPC：端点机器处于VPC网络',
                        'description' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                            ."\n"
                            .'- VPC：挂载点处于VPC网络。'."\n"
                            .'- INNER：挂载点处于PAI内部网络中，用于PAI其他产品进行访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VPC',
                        'enum' => [
                            'VPC',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                        'default' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排列顺序'."\n"
                            .'Desc： 降序排列'."\n"
                            .'Asc： 升序排列',
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                        'default' => 'Desc',
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询第几页数据，最小值1',
                        'description' => '加速端点列表的页码。起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '设置查询的分页大小,最小值为1',
                        'description' => '分页查询时设置的每页显示的加速端点数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '所属加速实例的ID。',
                        'description' => '所属加速实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'inst-ivrq92qhbyrg4jctih',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'Endpoints' => [
                                'title' => '数据集加速端点列表。',
                                'description' => '数据集加速端点列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '数据集加速端点的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                            'description' => '数据集加速端点的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                            'type' => 'string',
                                            'example' => '27606534679741****',
                                        ],
                                        'OwnerId' => [
                                            'title' => '数据集加速端点的资源拥有者的Uid，在阿里云内为主账号Id 。',
                                            'description' => '数据集加速端点的资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '155770209819****',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '数据集加速端点创建的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速端点创建的时间。格式使用 ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '数据集加速端点最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速端点最后更新的时间。格式使用 ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'Uuid' => [
                                            'title' => '挂载点的唯一标识符。',
                                            'description' => '挂载点的唯一标识符。',
                                            'type' => 'string',
                                            'example' => 'end-ivrq92qhbyrg4j****',
                                        ],
                                        'Name' => [
                                            'title' => '挂载点的名称。',
                                            'description' => '挂载点的名称。',
                                            'type' => 'string',
                                            'example' => 'endpoint-1',
                                        ],
                                        'Type' => [
                                            'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                                .'VPC：端点机器处于VPC网络',
                                            'description' => '挂载点的网络类型，可能值：'."\n"
                                                .'- VPC：挂载点处于VPC网络。'."\n"
                                                .'- INNER：挂载点处于PAI内部网络中，用于PAI其他产品进行访问。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                            'enum' => [
                                                'VPC',
                                            ],
                                        ],
                                        'VpcId' => [
                                            'title' => '挂载点使用的专有网络 VPC Id。',
                                            'description' => '挂载点使用的专有网络 VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-j6co2fcdsl1q0gnuc****',
                                        ],
                                        'VswitchId' => [
                                            'title' => '挂载点使用的交换机 Vswitch Id。',
                                            'description' => '挂载点使用的交换机vSwitch ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-j6cmr00qjyrft6jo2****',
                                        ],
                                        'Status' => [
                                            'title' => '数据集加速槽挂载点的状态。',
                                            'description' => '数据集加速槽挂载点的状态。',
                                            '$ref' => '#/components/schemas/EndpointStatus',
                                        ],
                                        'InstanceId' => [
                                            'title' => '所属加速实例的ID。',
                                            'description' => '所属加速实例的ID。',
                                            'type' => 'string',
                                            'example' => 'inst-ivrq92qhbyrg4jctih',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素数量总和。',
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"Endpoints\\": [\\n    {\\n      \\"UserId\\": \\"27606534679741****\\",\\n      \\"OwnerId\\": \\"155770209819****\\",\\n      \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"Uuid\\": \\"end-ivrq92qhbyrg4j****\\",\\n      \\"Name\\": \\"endpoint-1\\",\\n      \\"Type\\": \\"VPC\\",\\n      \\"VpcId\\": \\"vpc-j6co2fcdsl1q0gnuc****\\",\\n      \\"VswitchId\\": \\"vsw-j6cmr00qjyrft6jo2****\\",\\n      \\"Status\\": {\\n        \\"Phase\\": \\"Ready\\",\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"Init Succeed\\",\\n        \\"Detail\\": {\\n          \\"IpPortMapping\\": {\\n            \\"key\\": {\\n              \\"Ip\\": \\"10.0.0.5\\",\\n              \\"Port\\": \\"3306\\"\\n            }\\n          }\\n        }\\n      },\\n      \\"InstanceId\\": \\"inst-ivrq92qhbyrg4jctih\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取数据集加速端点列表',
            'description' => '请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
        ],
        'DescribeEndpoint' => [
            'summary' => '获取指定数据集加速槽挂载点的信息。',
            'path' => '/api/v1/endpoints/{EndpointId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Endpoint',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽挂载点ID。',
                        'description' => '数据集加速槽挂载点ID。如何获取挂载点ID，请参见[ListEndpoints](~~467913~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'end-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'UserId' => [
                                'title' => '数据集加速端点的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                'description' => '数据集加速端点的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                'type' => 'string',
                                'example' => '276065346797410278',
                            ],
                            'OwnerId' => [
                                'title' => '数据集加速端点的资源拥有者的Uid，在阿里云内为主账号Id 。',
                                'description' => '数据集加速端点的资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                'type' => 'string',
                                'example' => '1557702098194904',
                            ],
                            'GmtCreateTime' => [
                                'title' => '数据集加速端点创建的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速端点创建的时间。格式使用 ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '数据集加速端点最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速端点最后更新的时间。格式使用 ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'Uuid' => [
                                'title' => '挂载点的唯一标识符。',
                                'description' => '挂载点的唯一标识符。',
                                'type' => 'string',
                                'example' => 'end-ivrq92qhbyrg4jctih',
                            ],
                            'Name' => [
                                'title' => '挂载点的名称。',
                                'description' => '挂载点的名称。',
                                'type' => 'string',
                                'example' => 'endpoint-1',
                            ],
                            'Type' => [
                                'title' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                    .'VPC：端点机器处于VPC网络',
                                'description' => '挂载点的网络类型，根据网络类型不同，下列中需要传入的参数也有所不同。'."\n"
                                    .'VPC：端点机器处于VPC网络。',
                                'type' => 'string',
                                'example' => 'VPC',
                                'enum' => [
                                    'VPC',
                                ],
                            ],
                            'VpcId' => [
                                'title' => '挂载点使用的专有网络 VPC Id。',
                                'description' => '挂载点使用的专有网络 VPC ID。',
                                'type' => 'string',
                                'example' => 'vpc-j6co2fcdsl1q0gnuc3ym3',
                            ],
                            'VswitchId' => [
                                'title' => '挂载点使用的交换机 Vswitch Id。',
                                'description' => '挂载点使用的交换机vSwitch ID。',
                                'type' => 'string',
                                'example' => 'vsw-j6cmr00qjyrft6jo2mg7g',
                            ],
                            'Status' => [
                                'title' => '数据集加速槽挂载点的状态。',
                                'description' => '数据集加速槽挂载点的状态。',
                                '$ref' => '#/components/schemas/EndpointStatus',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"UserId\\": \\"276065346797410278\\",\\n  \\"OwnerId\\": \\"1557702098194904\\",\\n  \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"Uuid\\": \\"end-ivrq92qhbyrg4jctih\\",\\n  \\"Name\\": \\"endpoint-1\\",\\n  \\"Type\\": \\"VPC\\",\\n  \\"VpcId\\": \\"vpc-j6co2fcdsl1q0gnuc3ym3\\",\\n  \\"VswitchId\\": \\"vsw-j6cmr00qjyrft6jo2mg7g\\",\\n  \\"Status\\": {\\n    \\"Phase\\": \\"Ready\\",\\n    \\"Code\\": \\"200\\",\\n    \\"Message\\": \\"Init Succeed\\",\\n    \\"Detail\\": {\\n      \\"IpPortMapping\\": {\\n        \\"key\\": {\\n          \\"Ip\\": \\"10.0.0.5\\",\\n          \\"Port\\": \\"3306\\"\\n        }\\n      }\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取数据集加速端点详情',
        ],
        'DescribeComponent' => [
            'summary' => '获取指定数据集加速组件的信息。',
            'path' => '/api/v1/components/{ComponentId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Component',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ComponentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速组件ID。',
                        'description' => '数据集加速组件ID。如何获取组件ID，请参见[ListComponents](~~467918~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cmpt-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'RenderTemplate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否对组件模板进行渲染并展示。'."\n"
                            .'如果值为true，则返回中包含模板渲染后的内容。'."\n"
                            .'注：'."\n"
                            .'只支持指定组件列表：'."\n"
                            .'  dataset-accelerator'."\n"
                            .'返回的组件模板内容最大长度为4096，超过最大长度会对模板进行截断。',
                        'description' => '是否对组件模板进行渲染并展示。'."\n"
                            .'如果值为true，则返回中包含模板渲染后的内容。'."\n"
                            .'> 只支持指定组件列表：'."\n"
                            .'  dataset-accelerator'."\n"
                            .'返回的组件模板内容最大长度为4096 Byte，超过最大长度会对模板进行截断。'."\n"
                            .'>',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Values',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '组件模板渲染时使用的参数。',
                        'description' => '组件模板渲染时使用的参数。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'any',
                            'description' => '组件的属性值。',
                            'example' => '{\\"frontEndPort\\":\\"24457\\",\\"endpointId\\":\\"end-mlpo5mrygduwl9lm31\\",\\"frontEndAddr\\":\\"192.168.0.3\\",\\"slotId\\":\\"slot-vas3b1ygg22sxbq972\\",\\"region\\":\\"cn-shanghai\\"}',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'UserId' => [
                                'title' => '数据集加速组件的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                'description' => '数据集加速组件的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                'type' => 'string',
                                'example' => '276065346797410278',
                            ],
                            'OwnerId' => [
                                'title' => '数据集加速组件资源拥有者的Uid，在阿里云内为主账号Id 。',
                                'description' => '数据集加速组件资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                'type' => 'string',
                                'example' => '1557702098194904',
                            ],
                            'GmtCreateTime' => [
                                'title' => '数据集加速组件创建的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速组件创建的时间。格式使用ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '数据集加速组件最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                'description' => '数据集加速组件最后更新的时间。格式使用ISO8601（RFC3339）。',
                                'type' => 'string',
                                'example' => '2014-10-02T15:01:23Z',
                            ],
                            'Uuid' => [
                                'title' => '数据集加速组件的唯一标识符。',
                                'description' => '数据集加速组件的唯一标识符。',
                                'type' => 'string',
                                'example' => 'cmpt-5zk866779me51jgu3w',
                            ],
                            'Name' => [
                                'title' => '数据集加速组件名称。',
                                'description' => '数据集加速组件名称。',
                                'type' => 'string',
                                'example' => 'dataset-accelerator',
                            ],
                            'Version' => [
                                'title' => '数据集加速组件版本。',
                                'description' => '数据集加速组件版本。',
                                'type' => 'string',
                                'example' => 'v1.0.0',
                            ],
                            'Template' => [
                                'title' => '数据集加速组件模板信息。',
                                'description' => '数据集加速组件模板信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'title' => '数据集加速组件模板的类型。'."\n"
                                            .'OSS：从OSS中读取模板Helm包。',
                                        'description' => '数据集加速组件模板的类型。'."\n"
                                            .'OSS：从OSS中读取模板Helm包。',
                                        'type' => 'string',
                                        'example' => 'OSS',
                                        'enum' => [
                                            'OSS',
                                        ],
                                    ],
                                    'Uri' => [
                                        'title' => '数据集加速组件模板的资源标识符，数据类型不同存在不同格式。',
                                        'description' => '数据集加速组件模板的资源标识符，数据类型不同存在不同格式。',
                                        'type' => 'string',
                                        'example' => 'data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                                    ],
                                ],
                            ],
                            'RenderedContent' => [
                                'title' => '渲染后的数据集加速组件部署文件。',
                                'description' => '渲染后的数据集加速组件部署文件。',
                                'type' => 'string',
                                'example' => '---\\n# Source: dataset-accelerator/templates/dataset-accelerator\\napiVersion: data.datasetacc.io/v1\\nkind: DataSetAccelerator\\nmetadata:\\n  name: dataset-accelerator\\nspec:\\n  frontEndAddr: 10.0.0.2\\n  frontEndPort: 7001\\n',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"UserId\\": \\"276065346797410278\\",\\n  \\"OwnerId\\": \\"1557702098194904\\",\\n  \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n  \\"Uuid\\": \\"cmpt-5zk866779me51jgu3w\\",\\n  \\"Name\\": \\"dataset-accelerator\\",\\n  \\"Version\\": \\"v1.0.0\\",\\n  \\"Template\\": {\\n    \\"Type\\": \\"OSS\\",\\n    \\"Uri\\": \\"data/VOCdevkit/VOC2007/ImageSets/Main/val.txt\\"\\n  },\\n  \\"RenderedContent\\": \\"---\\\\\\\\n# Source: dataset-accelerator/templates/dataset-accelerator\\\\\\\\napiVersion: data.datasetacc.io/v1\\\\\\\\nkind: DataSetAccelerator\\\\\\\\nmetadata:\\\\\\\\n  name: dataset-accelerator\\\\\\\\nspec:\\\\\\\\n  frontEndAddr: 10.0.0.2\\\\\\\\n  frontEndPort: 7001\\\\\\\\n\\"\\n}","type":"json"}]',
            'title' => '获取数据集加速组件详情',
        ],
        'ListComponents' => [
            'summary' => '获取数据集加速组件的信息列表。',
            'path' => '/api/v1/components',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Component',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ComponentIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速组件ID的列表，以逗号分隔。',
                        'description' => '数据集加速组件ID的列表，多个组件ID以半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cmpt-my1tk3jggooi5u****,cmpt-n69468yvjz8d12****,cmpt-tga4omjrepklkg****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速组件名称，支持模糊匹配。',
                        'description' => '数据集加速组件名称，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dataset-accelerator',
                    ],
                ],
                [
                    'name' => 'Version',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集加速组件版本。',
                        'description' => '数据集加速组件版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1.0.0',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                        'default' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排列顺序'."\n"
                            .'Desc： 降序排列'."\n"
                            .'Asc： 升序排列',
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                        'default' => 'Desc',
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询第几页数据，最小值1',
                        'description' => '组件列表的页码。起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '设置查询的分页大小,最小值为1',
                        'description' => '分页查询时设置的每页显示的组件数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF1****',
                            ],
                            'Components' => [
                                'title' => '数据集加速槽列表。',
                                'description' => '数据集加速槽列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '数据集加速组件的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                            'description' => '数据集加速组件的创建者的Uid，在阿里云内为RAM用户ID （阿里云账号创建则直接为阿里云账号ID）。',
                                            'type' => 'string',
                                            'example' => '27606534679741****',
                                        ],
                                        'OwnerId' => [
                                            'title' => '数据集加速组件资源拥有者的Uid，在阿里云内为主账号Id 。',
                                            'description' => '数据集加速组件资源拥有者的Uid，在阿里云内为阿里云账号ID 。',
                                            'type' => 'string',
                                            'example' => '155770209819****',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '数据集加速组件创建的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速组件创建的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '数据集加速组件最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '数据集加速组件最后更新的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'Uuid' => [
                                            'title' => '数据集加速组件的唯一标识符。',
                                            'description' => '数据集加速组件的唯一标识符。',
                                            'type' => 'string',
                                            'example' => 'cmpt-5zk866779me51j****',
                                        ],
                                        'Name' => [
                                            'title' => '数据集加速组件名称。',
                                            'description' => '数据集加速组件名称。',
                                            'type' => 'string',
                                            'example' => 'dataset-accelerator',
                                        ],
                                        'Version' => [
                                            'title' => '数据集加速组件版本。',
                                            'description' => '数据集加速组件版本。',
                                            'type' => 'string',
                                            'example' => 'v1.0.0',
                                        ],
                                        'Template' => [
                                            'title' => '数据集加速组件模板信息。',
                                            'description' => '数据集加速组件模板信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '数据集加速组件模板的类型。'."\n"
                                                        .'OSS：从OSS中读取模板Helm包。',
                                                    'description' => '数据集加速组件模板的类型。'."\n"
                                                        .'OSS：从OSS中读取模板Helm包。',
                                                    'type' => 'string',
                                                    'example' => 'OSS',
                                                    'enum' => [
                                                        'OSS',
                                                    ],
                                                ],
                                                'Uri' => [
                                                    'title' => '数据集加速组件模板的资源标识符，数据类型不同存在不同格式。',
                                                    'description' => '数据集加速组件模板的资源标识符，数据类型不同存在不同格式。',
                                                    'type' => 'string',
                                                    'example' => 'data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素数量总和。',
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF1****\\",\\n  \\"Components\\": [\\n    {\\n      \\"UserId\\": \\"27606534679741****\\",\\n      \\"OwnerId\\": \\"155770209819****\\",\\n      \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"Uuid\\": \\"cmpt-5zk866779me51j****\\",\\n      \\"Name\\": \\"dataset-accelerator\\",\\n      \\"Version\\": \\"v1.0.0\\",\\n      \\"Template\\": {\\n        \\"Type\\": \\"OSS\\",\\n        \\"Uri\\": \\"data/VOCdevkit/VOC2007/ImageSets/Main/val.txt\\"\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取数据集加速组件列表',
            'description' => '请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
        ],
        'CreateTag' => [
            'summary' => '针对一个资源，创建一个标签。',
            'path' => '/api/v1/tags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Tag',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'ResourceType' => [
                                'title' => '标签所属的资源的类型。'."\n"
                                    .'Instance：数据集加速实例'."\n"
                                    .'Slot：数据集加速槽',
                                'description' => '标签所属的资源的类型，取值如下：'."\n"
                                    .'- Instance：数据集加速实例。'."\n"
                                    .'- Slot：数据集加速槽。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Instance',
                                'enum' => [
                                    'Instance',
                                    'Slot',
                                ],
                            ],
                            'ResourceId' => [
                                'title' => '标签所属的资源的Id。',
                                'description' => '标签所属的资源的ID。'."\n"
                                    .'- 当ResourceType为Instance时，需要配置为数据集加速实例ID，如何获取加速实例ID，请参见[ListInstances](~~467899~~)。'."\n"
                                    .'- 当ResourceType为Slot时，需要配置为数据集加速槽ID，如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'inst-my1tk3jggooi5uwks',
                            ],
                            'Key' => [
                                'title' => '标签的键值。'."\n"
                                    .'长度限制为 64 Unicode 字符。',
                                'description' => '标签的键值。'."\n"
                                    .'长度限制为64 Unicode字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'dataset_version',
                                'maxLength' => 64,
                            ],
                            'Value' => [
                                'title' => '标签的值。'."\n"
                                    .'长度限制为 64 Unicode 字符。',
                                'description' => '标签的值。'."\n"
                                    .'长度限制为64 Unicode字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'v0.1.0',
                                'maxLength' => 64,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '创建标签',
            'description' => '- 如果针对这个资源已经存在相同键值的标签，则会对标签的值进行覆盖。'."\n"
                .'- 如果未存在键值相同的标签，则创建一个新的标签。',
        ],
        'DeleteTag' => [
            'summary' => '删除一个资源上的一个标签。',
            'path' => '/api/v1/tags',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Tag',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签所属的资源的类型。'."\n"
                            .'Instance：数据集加速实例'."\n"
                            .'Slot：数据集加速槽',
                        'description' => '标签所属的资源的类型，取值如下：'."\n"
                            .'- Instance：数据集加速实例。'."\n"
                            .'- Slot：数据集加速槽。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Instance',
                        'enum' => [
                            'Instance',
                            'Slot',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签所属的资源的Id。',
                        'description' => '标签所属的资源的ID。'."\n"
                            .'- 当ResourceType为Instance时，需要配置为数据集加速实例ID，如何获取加速实例ID，请参见[ListInstances](~~467899~~)。'."\n"
                            .'- 当ResourceType为Slot时，需要配置为数据集加速槽ID，如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'inst-my1tk3jggooi5uwks',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签的键值。',
                        'description' => '标签的键值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dataset_version',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '删除标签',
        ],
        'ListTags' => [
            'summary' => '获取标签列表。',
            'path' => '/api/v1/tags',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Tag',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签所属的资源的类型。'."\n"
                            .'Instance：数据集加速实例'."\n"
                            .'Slot：数据集加速槽',
                        'description' => '标签所属的资源的类型，取值如下：'."\n"
                            .'- Instance：数据集加速实例。'."\n"
                            .'- Slot：数据集加速槽。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance',
                        'enum' => [
                            'Instance',
                            'Slot',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签所属的资源的Id。',
                        'description' => '标签所属的资源的ID。'."\n"
                            .'- 当ResourceType为Instance时，需要配置为数据集加速实例ID，如何获取加速实例ID，请参见[ListInstances](~~467899~~)。'."\n"
                            .'- 当ResourceType为Slot时，需要配置为数据集加速槽ID，如何获取数据集加速槽ID，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'inst-my1tk3jggooi5uwks5',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签的键值。'."\n"
                            .'长度限制为 64 Unicode 字符。',
                        'description' => '标签的键值。'."\n"
                            .'长度限制为64 Unicode字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dataset_version',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签的值。'."\n"
                            .'长度限制为 64 Unicode 字符。',
                        'description' => '标签的值。'."\n"
                            .'长度限制为64 Unicode字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v0.1.0',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                        'default' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '排列顺序'."\n"
                            .'Desc： 降序排列'."\n"
                            .'Asc： 升序排列',
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                        'default' => 'Desc',
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询第几页数据，最小值1',
                        'description' => '标签列表的页码。起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '设置查询的分页大小,最小值为1',
                        'description' => '分页查询时设置的每页显示的标签数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'Tags' => [
                                'title' => '标签列表。',
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '标签的创建者的Uid，在阿里云内为子账号Id （主账号创建则直接为主账号Id）。',
                                            'description' => '标签的创建者的Uid，在阿里云内为RAM用户ID（阿里云账号创建则直接为阿里云账号ID）。',
                                            'type' => 'string',
                                            'example' => '276065346797410278',
                                        ],
                                        'OwnerId' => [
                                            'title' => '标签的资源拥有者的Uid，在阿里云内为主账号Id 。',
                                            'description' => '标签的资源拥有者的Uid，在阿里云内为阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '1557702098194904',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '标签创建的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '标签创建的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '标签最后更新的时间。格式使用 ISO8601(RFC3339)。',
                                            'description' => '标签最后更新的时间。格式使用ISO8601（RFC3339）。',
                                            'type' => 'string',
                                            'example' => '2014-10-02T15:01:23Z',
                                        ],
                                        'ResourceType' => [
                                            'title' => '标签所属的资源的类型。'."\n"
                                                .'Instance：数据集加速实例'."\n"
                                                .'Slot：数据集加速槽',
                                            'description' => '标签所属的资源的类型，可能值：'."\n"
                                                .'- Instance：数据集加速实例。'."\n"
                                                .'- Slot：数据集加速槽。',
                                            'type' => 'string',
                                            'example' => 'Instance',
                                            'enum' => [
                                                'Instance',
                                                'Slot',
                                            ],
                                        ],
                                        'ResourceId' => [
                                            'title' => '标签所属的资源的Id。',
                                            'description' => '标签所属的资源的ID。',
                                            'type' => 'string',
                                            'example' => 'inst-my1tk3jggooi5uwks',
                                        ],
                                        'Key' => [
                                            'title' => '标签的键值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的键值。'."\n"
                                                .'长度限制为64 Unicode字符。',
                                            'type' => 'string',
                                            'example' => 'dataset_version',
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'title' => '标签的值。'."\n"
                                                .'长度限制为 64 Unicode 字符。',
                                            'description' => '标签的值。'."\n"
                                                .'长度限制为64 Unicode字符。',
                                            'type' => 'string',
                                            'example' => 'v0.1.0',
                                            'maxLength' => 64,
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素数量总和。',
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"Tags\\": [\\n    {\\n      \\"UserId\\": \\"276065346797410278\\",\\n      \\"OwnerId\\": \\"1557702098194904\\",\\n      \\"GmtCreateTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"GmtModifiedTime\\": \\"2014-10-02T15:01:23Z\\",\\n      \\"ResourceType\\": \\"Instance\\",\\n      \\"ResourceId\\": \\"inst-my1tk3jggooi5uwks\\",\\n      \\"Key\\": \\"dataset_version\\",\\n      \\"Value\\": \\"v0.1.0\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取标签列表',
            'description' => '请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
        ],
        'QueryStatistic' => [
            'summary' => '查询当前账号下数据集加速相关的统计信息。',
            'path' => '/api/v1/statistics/action/query',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Statistic',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Fields',
                    'in' => 'query',
                    'schema' => [
                        'title' => '需要查询的统计信息类型，以逗号分割。'."\n"
                            .'InstanceTypeCapacity：每个数据集加速实例类别所对应的总容量占比。'."\n"
                            .'InstanceTypeNum：每个数据集加速实例类别的数量。'."\n"
                            .'SlotTypeNum：每个数据集加速槽类别的数量。',
                        'description' => '需要查询的统计信息类型，以半角逗号（,）分隔。'."\n"
                            .'- InstanceCapacityEachType：每个数据集加速实例类别所对应的总容量占比。'."\n"
                            .'- InstanceNumEachType：每个数据集加速实例类别的数量。'."\n"
                            .'- SlotNumEachType：每个数据集加速槽类别的数量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'InstanceCapacityEachType',
                        'default' => 'InstanceCapacityEachType',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间.默认是1小时前。',
                        'description' => '起始时间，默认是1小时前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间.默认是当前。',
                        'description' => '截止时间，默认是当前时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'InstanceCapacityEachType' => [
                                'title' => '每个数据集加速实例类别所对应的总容量占比，Map中的Key包含所有数据集加速实例的类别。',
                                'description' => '每个数据集加速实例类别所对应的总容量占比，Map中的Key包含所有数据集加速实例的类别。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '每个数据集加速实例类别所对应的总容量占比信息。',
                                    'example' => '{\'basic\': {\'Usage\': \'0\', \'Total\': \'10T\'}, \'enhanced\': {\'Usage\': \'0\', \'Total\': \'900G\'}}',
                                ],
                            ],
                            'InstanceNumEachType' => [
                                'title' => '每个数据集加速实例类别的数量，Map中的Key包含所有数据集加速实例的类别。',
                                'description' => '每个数据集加速实例类别的数量，Map中的Key包含所有数据集加速实例的类别。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '每个数据集加速实例类别的数量信息。',
                                    'example' => '{\'basic\': {\'Value\': 1}, \'enhanced\': {\'Value\': 5}}',
                                ],
                            ],
                            'SlotNumEachType' => [
                                'title' => '每个数据集加速槽类别的数量，Map中的Key包含所有数据集加速槽的类别。',
                                'description' => '每个数据集加速槽类别的数量，Map中的Key包含所有数据集加速槽的类别。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'title' => '每个数据集加速槽类别的数量，Map中的Key包含所有数据集加速槽的类别。',
                                    'description' => '每个数据集加速槽类别的数量的信息。',
                                    'type' => 'any',
                                    'example' => '{\'OSS\': {\'Value\': 13}}',
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"InstanceCapacityEachType\\": {\\n    \\"key\\": \\"{\'basic\': {\'Usage\': \'0\', \'Total\': \'10T\'}, \'enhanced\': {\'Usage\': \'0\', \'Total\': \'900G\'}}\\"\\n  },\\n  \\"InstanceNumEachType\\": {\\n    \\"key\\": \\"{\'basic\': {\'Value\': 1}, \'enhanced\': {\'Value\': 5}}\\"\\n  },\\n  \\"SlotNumEachType\\": {\\n    \\"key\\": \\"{\'OSS\': {\'Value\': 13}}\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询统计信息',
        ],
        'ReloadSlot' => [
            'summary' => '重载数据加速槽的数据。',
            'path' => '/api/v1/slots/{SlotId}/action/reload',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据集加速槽Id。',
                        'description' => '数据集加速槽Id。如何获取数据集加速槽Id，请参见[ListSlots](~~467905~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'slot-my1tk3jggooi5uwks5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\"\\n}","type":"json"}]',
            'title' => '重载加速槽',
        ],
        'CreateSlots' => [
            'summary' => '同时创建并注册多个数据集加速槽，并使用相同的一组数据加速槽挂载点。',
            'path' => '/api/v1/batch/slots/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Slot',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'Slots' => [
                                'description' => '数据集加速槽列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据集加速槽',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '数据集加速槽所对应的数据集加速实例的唯一标识符。',
                                            'description' => '数据集加速槽所对应的数据集加速实例的唯一标识符。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'inst-my1tk3jggooi5uwks5',
                                        ],
                                        'Name' => [
                                            'title' => '数据集加速槽名称。'."\n"
                                                .'长度限制为64 Unicode 字符。',
                                            'description' => '数据集加速槽名称。'."\n"
                                                .'长度限制为64 Unicode 字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'slot_1',
                                            'maxLength' => 64,
                                        ],
                                        'Description' => [
                                            'title' => '数据集加速槽的描述与解释。'."\n"
                                                .'长度限制为1024 Unicode 字符。',
                                            'description' => '数据集加速槽的描述与解释。'."\n"
                                                .'长度限制为1024 Unicode 字符。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'xgboost数据集加速槽',
                                            'maxLength' => 1024,
                                        ],
                                        'Tags' => [
                                            'title' => '用户为数据集加速槽添加的自定义标签。',
                                            'description' => '用户为数据集加速槽添加的自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签的键值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'description' => '标签的键值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'dataset_version',
                                                        'maxLength' => 64,
                                                    ],
                                                    'Value' => [
                                                        'title' => 'v0.1.0	标签的值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'description' => 'v0.1.0	标签的值。'."\n"
                                                            .'长度限制为 64 Unicode 字符。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'v0.1.0',
                                                        'maxLength' => 64,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                        'LifeCycle' => [
                                            'title' => '数据集加速槽的生命周期。',
                                            'description' => '数据集加速槽的生命周期。',
                                            'required' => false,
                                            '$ref' => '#/components/schemas/SlotLifeCycle',
                                        ],
                                        'IoType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'StorageType' => [
                                            'title' => '数据集加速槽的数据存储类型。'."\n"
                                                .'OSS：OSS文件存储'."\n"
                                                .'NAS：NAS文件存储',
                                            'description' => '数据集加速槽的数据存储类型。'."\n"
                                                .'OSS：OSS文件存储'."\n"
                                                .'NAS：NAS文件存储',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'OSS',
                                            'enum' => [
                                                'OSS',
                                                'NAS',
                                                'CPFS',
                                            ],
                                        ],
                                        'StorageUri' => [
                                            'title' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                            'description' => '数据集加速槽的数据的资源标识符，数据类型不同存在不同格式。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'oss://pai-vision-data-hz2.oss-cn-hangzhou-internal.aliyuncs.com/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt',
                                        ],
                                        'Capacity' => [
                                            'title' => '数据集加速槽的最大容量。'."\n"
                                                .'输入字符串的格式需要满足以下规范：Quantity',
                                            'description' => '数据集加速槽的最大容量。'."\n"
                                                .'输入字符串的格式需要满足以下规范：Quantity',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '30.0G',
                                        ],
                                        'EndpointIds' => [
                                            'title' => '创建数据集加速槽时，同时挂载的数据集加速槽挂载点Id的列表，以逗号分隔。',
                                            'description' => '创建数据集加速槽时，同时挂载的数据集加速槽挂载点Id的列表，以逗号分隔。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'end-my1tk3jggooi5uwks5,end-n69468yvjz8d12as7d,end-tga4omjrepklkg1onn',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'DryRun' => [
                                'description' => '是否对此次创建请求执行预检。'."\n"
                                    ."\n"
                                    .'预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    ."\n"
                                    .'- true：发送检查请求，不会创建实例。'."\n"
                                    ."\n"
                                    .'- false（默认）：发送正常请求，通过检查后直接创建实例。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                        ],
                        'required' => false,
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
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'A731A84D-55C9-44F7-99BB-E1CF0CF19197',
                            ],
                            'SlotIds' => [
                                'title' => '数据集加速槽Id。',
                                'description' => '数据集加速槽Id。',
                                'type' => 'string',
                                'example' => 'slot-5zk866779me51jgu3w',
                            ],
                            'Summary' => [
                                'description' => '摘要信息',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '摘要信息',
                                    'example' => '{\'SlotsTotalSize\': \'0.0Gi\', \'SlotsTotalNum\': \'1\', \'DataSourceTotalSize\': \'0\'}',
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id。',
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '9C5AEC16-CBD1-5E68-A92C-75D1D346E57F',
                            ],
                            'Code' => [
                                'title' => '语义化错误码。',
                                'description' => '语义化错误码。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Message' => [
                                'title' => '错误消息描述。',
                                'description' => '错误消息描述。',
                                'type' => 'string',
                                'example' => 'Dataset Not Found: 1234',
                            ],
                            'Detail' => [
                                'title' => '错误详细信息。',
                                'description' => '错误详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ErrorCode' => [
                                        'title' => '数字化错误码。',
                                        'description' => '数字化错误码。',
                                        'type' => 'string',
                                        'example' => '5218847334401572965',
                                    ],
                                ],
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A731A84D-55C9-44F7-99BB-E1CF0CF19197\\",\\n  \\"SlotIds\\": \\"slot-5zk866779me51jgu3w\\",\\n  \\"Summary\\": {\\n    \\"key\\": \\"{\'SlotsTotalSize\': \'0.0Gi\', \'SlotsTotalNum\': \'1\', \'DataSourceTotalSize\': \'0\'}\\"\\n  }\\n}","type":"json"}]',
            'title' => '批量创建加速槽',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paidatasetacc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paidatasetacc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paidatasetacc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paidatasetacc.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
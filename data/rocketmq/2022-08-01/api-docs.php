<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'RocketMQ',
        'version' => '2022-08-01',
    ],
    'directories' => [
        [
            'id' => 170260,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'UpdateInstance',
                'ChangeResourceGroup',
                'DeleteInstance',
                'ListInstances',
                'GetInstance',
            ],
        ],
        [
            'id' => 170265,
            'title' => '主题',
            'type' => 'directory',
            'children' => [
                'CreateTopic',
                'UpdateTopic',
                'DeleteTopic',
                'ListTopics',
                'GetTopic',
            ],
        ],
        [
            'id' => 170254,
            'title' => '消费者分组',
            'type' => 'directory',
            'children' => [
                'CreateConsumerGroup',
                'UpdateConsumerGroup',
                'DeleteConsumerGroup',
                'ListConsumerGroups',
                'GetConsumerGroup',
                'ResetConsumeOffset',
                'ListConsumerGroupSubscriptions',
            ],
        ],
        [
            'id' => 189704,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ListTopicSubscriptions',
                'ListRegions',
                'ListConsumerConnections',
                'ListAvailableZones',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateInstance' => [
            'summary' => '创建云消息队列 RocketMQ 版5.x系列实例。',
            'path' => '/instances',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c2c5d1274a8d4317a13bc5b0d4******',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'body参数。',
                        'type' => 'object',
                        'properties' => [
                            'instanceName' => [
                                'title' => '实例名称',
                                'description' => '待创建的实例名称。'."\n"
                                    ."\n"
                                    .'不填写则以实例ID作为实例名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rmq-cn-72u3048uxxx',
                            ],
                            'serviceCode' => [
                                'title' => '服务编码',
                                'description' => '实例所属的服务编码。消息队列RocketMQ版的服务编码为rmq。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rmq',
                                'default' => 'rmq',
                            ],
                            'seriesCode' => [
                                'title' => '系列编码',
                                'description' => '实例的主系列编码。主系列间的具体差异，请参见[产品选型](~~444722~~)。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- standard：标准版'."\n"
                                    .'- ultimate：铂金版'."\n"
                                    .'- professional：专业版'."\n"
                                    ."\n"
                                    .'><notice>实例创建成功后，主系列只支持单向变更，只升不降，变更方向为：标准版 > 专业版 > 铂金版。例如，只支持从标准版变更到专业版，不支持从专业版降为标准版。></notice>',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'standard' => '标准版',
                                    'ultimate' => '铂金版',
                                    'professional' => '专业版',
                                ],
                                'example' => 'standard',
                            ],
                            'subSeriesCode' => [
                                'title' => '子系列编码',
                                'description' => '实例的子系列编码。子系列间具体差异，请参见[产品选型](~~444722~~)。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- cluster_ha：集群高可用版'."\n"
                                    .'- single_node：单节点测试版'."\n"
                                    ."\n"
                                    .'<props="china">- serverless：Serverless实例</props>'."\n"
                                    ."\n"
                                    .'主系列选择ultimate（铂金版）时，子系列只能选择为cluster_ha（集群高可用版）。'."\n"
                                    .'><notice>实例创建成功后，子系列不支持变更。></notice>',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'serverless' => 'Serverless版',
                                    'cluster_ha' => '集群高可用版',
                                    'single_node' => '单节点测试版',
                                ],
                                'example' => 'cluster_ha',
                            ],
                            'paymentType' => [
                                'title' => '付费类型,'."\n"
                                    .'预付费：Subscription'."\n"
                                    .'后付费：PayAsYouGo',
                                'description' => '实例的付费类型。云消息队列 RocketMQ 版支持包年包月和按量付费两种类型。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- PayAsYouGo：按量付费，一种后付费模式，即先使用再付费。'."\n"
                                    .'- Subscription：包年包月，一种预付费模式，即先付费再使用。'."\n"
                                    ."\n"
                                    .'具体信息，请参见[计费方式](~~427234~~)。',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'PayAsYouGo' => '按量付费',
                                    'Subscription' => '包年包月',
                                ],
                                'example' => 'Subscription',
                                'enum' => [
                                    'Subscription',
                                    'PayAsYouGo',
                                ],
                            ],
                            'period' => [
                                'title' => '购买时长，只有预付费支持',
                                'description' => '购买时长。仅当实例付费类型为Subscription（包年包月）时，该参数生效。'."\n"
                                    ."\n"
                                    .'取值范围如下：'."\n"
                                    ."\n"
                                    .'- 按月购买：1、2、3、4、5、6'."\n"
                                    ."\n"
                                    .'- 按年购买：1、2、3',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'periodUnit' => [
                                'title' => '购买时长单位，只有预付费支持'."\n"
                                    .'月：Month'."\n"
                                    .'年：Year',
                                'description' => '购买时长的最小周期单位。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- Month：按月购买'."\n"
                                    .'- Year：按年购买',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'Month' => '按月购买',
                                    'Year' => '按年购买',
                                ],
                                'example' => 'Month',
                                'enum' => [
                                    'Month',
                                    'Year',
                                ],
                            ],
                            'autoRenew' => [
                                'title' => '是否自动续费，只有预付费支持',
                                'description' => '是否自动续费。仅当实例付费类型为Subscription（包年包月）时，该参数生效。'."\n"
                                    ."\n"
                                    .'- true：开启自动续费'."\n"
                                    .'- false：不开启自动续费',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '开启自动续费',
                                    'false' => '不开启自动续费',
                                ],
                                'example' => 'true',
                            ],
                            'autoRenewPeriod' => [
                                'title' => '自动续费周期，只有预付费支持',
                                'description' => '自动续费周期。仅当开启自动续费时该参数有效。单位：月。'."\n"
                                    ."\n"
                                    .'取值范围：'."\n"
                                    ."\n"
                                    .'- 按月续费：1、2、3、6、12',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'remark' => [
                                'title' => '备注信息',
                                'description' => '实例的备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                            'productInfo' => [
                                'title' => '产品信息',
                                'description' => '实例规格信息。',
                                'type' => 'object',
                                'properties' => [
                                    'msgProcessSpec' => [
                                        'title' => '消息收发规格',
                                        'description' => '消息收发计算规格。具体消息收发TPS上限，请参见[实例规格](~~444715~~)。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'rmq.s2.2xlarge',
                                    ],
                                    'sendReceiveRatio' => [
                                        'title' => '消息收发比例',
                                        'description' => '消息发送TPS占整个实例消息收发TPS总量的比例。'."\n"
                                            ."\n"
                                            .'例如，实例的消息收发TPS上限为1000次/秒，若消息发送占比为0.8，则消息发送TPS上限为800次/秒，消息接收TPS上限为200次/秒。'."\n"
                                            ."\n"
                                            .'取值范围：[0，1]，默认值为0.5。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'required' => false,
                                        'example' => '0.5',
                                    ],
                                    'autoScaling' => [
                                        'title' => '是否开启弹性伸缩',
                                        'description' => '是否开启规格外突发弹性能力。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            ."\n"
                                            .'- true：开启弹性能力'."\n"
                                            .'- false：不开启弹性能力'."\n"
                                            ."\n"
                                            .'开启弹性突发能力后，云消息队列 RocketMQ 版允许该实例在一定范围内超过基础规格限制的TPS，且超过基础规格外的部分，需要收取额外的弹性规格费用。具体计费信息，请参见[计算能力费用](~~427237~~)。'."\n"
                                            ."\n\n"
                                            .'> 仅部分规格的实例支持开启弹性突发规格能力，具体支持的实例，请参见[实例规格](~~444715~~)。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'true' => '开启弹性能力',
                                            'false' => '不开启弹性能力',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'messageRetentionTime' => [
                                        'title' => '消息保留时长',
                                        'description' => '消息保存时长。单位：小时。'."\n"
                                            ."\n"
                                            .'取值范围，请参见[使用限制](~~440347~~)>资源配额>消息保存时长的限制值。'."\n"
                                            ."\n"
                                            .'云消息队列 RocketMQ 版的消息存储完全实现Serverless弹性，按照实际存储空间收取费用，您可以通过调整消息保存时长来控制消息的存储容量。更多信息，请参见[存储费用](~~427238~~)。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '72',
                                    ],
                                    'chargeType' => [
                                        'description' => '计费模式。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            ."\n"
                                            .'- provisioned：预留'."\n"
                                            .'- ondemand：弹性',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'provisioned',
                                    ],
                                    'intranetSpec' => [
                                        'description' => '废弃参数，您无需填写。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'xxxx',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'networkInfo' => [
                                'title' => '网络信息',
                                'description' => '网络配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'vpcInfo' => [
                                        'title' => '专有网络信息',
                                        'description' => '专有网络配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'vpcId' => [
                                                'title' => '专有网络ID',
                                                'description' => '待创建实例所关联的专有网络的ID。'."\n"
                                                    ."\n"
                                                    .'> 云消息队列 RocketMQ 版实例创建后，选择的VPC不支持变更。若要修改关联的VPC，您需要先释放已购买的云消息队列 RocketMQ 版实例，再重新购买。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'vpc-wz9qt50xhtj9krb******',
                                            ],
                                            'vSwitchId' => [
                                                'title' => '交换机ID',
                                                'description' => '实例所关联的交换机ID，当有多个交换机时，请以“|“进行拼接。'."\n"
                                                    ."\n"
                                                    .'> 云消息队列 RocketMQ 版实例创建后，选择的交换机不支持变更。若要修改关联的交换机，您需要先释放已购买的云消息队列 RocketMQ 版实例，再重新购买。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'vsw-uf6gwtbn6etadpv*******',
                                            ],
                                            'securityGroupIds' => [
                                                'description' => '安全组ID。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'sg-bp17hpmgz96tvnsdy6so',
                                            ],
                                        ],
                                        'required' => true,
                                    ],
                                    'internetInfo' => [
                                        'title' => '公网信息',
                                        'description' => '公网配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'internetSpec' => [
                                                'title' => '是否开启公网'."\n"
                                                    .'开启：enable'."\n"
                                                    .'关闭：disable',
                                                'description' => '是否开通公网访问。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- enable：开启公网访问'."\n"
                                                    .'- disable：关闭公网访问'."\n"
                                                    ."\n"
                                                    .'实例默认支持VPC访问方式，若开启公网访问，云消息队列 RocketMQ 版会收取公网下行带宽费用。具体计费信息，请参见[公网访问费用](~~427240~~)。',
                                                'type' => 'string',
                                                'required' => true,
                                                'enumValueTitles' => [
                                                    'enable' => '开启公网访问',
                                                    'disable' => '关闭公网访问',
                                                ],
                                                'example' => 'disable',
                                            ],
                                            'flowOutType' => [
                                                'title' => '公网计费类型'."\n"
                                                    .'固定带宽计费：payByBandwidth',
                                                'description' => '公网计费类型。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- payByBandwidth：固定带宽计费。开启公网访问时，设置为该参数取值。'."\n"
                                                    .'- payByTraffic：按流量计费。开启公网访问时，设置为该参数取值。'."\n"
                                                    .'- uninvolved：不涉及。关闭公网访问时，设置为该参数取值。',
                                                'type' => 'string',
                                                'required' => true,
                                                'enumValueTitles' => [
                                                    'payByBandwidth' => '固定带宽计费',
                                                    'payByTraffic' => '按流量计费',
                                                    'uninvolved' => '不涉及',
                                                ],
                                                'example' => 'uninvolved',
                                            ],
                                            'flowOutBandwidth' => [
                                                'title' => '公网带宽规格',
                                                'description' => '公网带宽规格。单位：Mb/s。'."\n"
                                                    ."\n"
                                                    .'只有在公网计费类型为按固定带宽计费的时候才需要填写。'."\n"
                                                    ."\n"
                                                    .'取值范围：[1 - 1000]。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '100',
                                            ],
                                            'ipWhitelist' => [
                                                'title' => '公网IP白名单列表',
                                                'description' => '公网访问IP白名单。仅公网接入点支持配置IP白名单，VPC接入点暂不支持。'."\n"
                                                    ."\n"
                                                    .'- 若不配置IP白名单，则默认放通所有IP地址段通过公网访问云消息队列 RocketMQ 版服务端。'."\n"
                                                    .'- 若配置IP白名单，则仅允许白名单内的IP地址通过公网访问云消息队列 RocketMQ 版服务端。',
                                                'type' => 'array',
                                                'items' => [
                                                    'title' => '公网IP白名单',
                                                    'description' => '公网访问白名单地址段。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '192.168.x.x/24',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => true,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'commodityCode' => [
                                'description' => '商品编码。'."\n"
                                    ."\n"
                                    .'<props="china">- ons_rmqsub_public_cn：包年包月实例</props>'."\n"
                                    ."\n"
                                    .'<props="china">- ons_rmqpost_public_cn：按量付费实例</props>'."\n"
                                    ."\n"
                                    .'<props="china">- ons_rmqsrvlesspost_public_cn ：Serverless实例</props>'."\n"
                                    ."\n"
                                    .'<props="intl">- ons_rmqpost_public_intl：按量付费</props>'."\n"
                                    ."\n"
                                    .'<props="intl">- ons_rmqsub_public_intl：包年包月</props>',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ons_ rmqpost_public_cn',
                            ],
                            'resourceGroupId' => [
                                'title' => '资源组ID',
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rg-aekzy6pist7uuna',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<String>',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回已创建实例的ID。',
                                'type' => 'string',
                                'example' => 'rmq-cn-7e22ody****',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": \\"rmq-cn-7e22ody****\\",\\n  \\"code\\": \\"200\\",\\n  \\"message\\": \\"Success\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '创建实例',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'UpdateInstance' => [
            'summary' => '更新云消息队列 RocketMQ 版实例的基本信息和规格配置。',
            'path' => '/instances/{instanceId}',
            'methods' => [
                'patch',
            ],
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待更新实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体结构。',
                        'type' => 'object',
                        'properties' => [
                            'instanceName' => [
                                'title' => '实例名称',
                                'description' => '更新后的实例名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_instance',
                            ],
                            'remark' => [
                                'title' => '实例备注',
                                'description' => '更新后的实例备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                            'networkInfo' => [
                                'title' => '网络信息',
                                'description' => '更新后的实例网络信息。',
                                'type' => 'object',
                                'properties' => [
                                    'internetInfo' => [
                                        'title' => '公网信息',
                                        'description' => '公网信息，仅当实例开通公网访问功能时，该参数有效。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ipWhitelist' => [
                                                'title' => '公网IP白名单列表',
                                                'description' => '公网访问IP白名单列表。'."\n"
                                                    ."\n"
                                                    .'- 若不配置IP白名单，则默认放通所有IP地址段通过公网访问云消息队列 RocketMQ 版服务端。'."\n"
                                                    .'- 若配置IP白名单，则仅允许白名单内的IP地址通过公网访问云消息队列 RocketMQ 版服务端。',
                                                'type' => 'array',
                                                'items' => [
                                                    'title' => '公网IP白名单',
                                                    'description' => '公网访问IP白名单。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '192.168.x.x/24',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'productInfo' => [
                                'title' => '扩展配置',
                                'description' => '实例的扩展配置。',
                                'type' => 'object',
                                'properties' => [
                                    'sendReceiveRatio' => [
                                        'title' => '消息收发比例',
                                        'description' => '消息发送和接收的比例。'."\n"
                                            ."\n"
                                            .'取值范围：[0.25，1]',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'required' => false,
                                        'example' => '0.5',
                                    ],
                                    'autoScaling' => [
                                        'title' => '自适应弹性伸缩',
                                        'description' => '是否开启规格外突发弹性能力。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- true：开启弹性'."\n"
                                            .'- false：关闭弹性'."\n"
                                            ."\n"
                                            .'开启弹性突发能力后，云消息队列 RocketMQ 版允许该实例在一定范围内超过基础规格限制的TPS，且超过基础规格外的部分，需要收取额外的弹性规格费用。具体计费信息，请参见[计算能力费用](~~427237~~)。'."\n"
                                            ."\n\n"
                                            .'> 仅部分规格的实例支持开启弹性突发规格能力，具体支持的实例，请参见[实例规格](~~444715~~)。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'true' => '开启弹性',
                                            'false' => '关闭弹性',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'messageRetentionTime' => [
                                        'title' => '消息保留时长',
                                        'description' => '消息保存时长。单位：小时。'."\n"
                                            ."\n"
                                            .'取值范围，请参见[使用限制](~~440347~~)>资源配额>消息保存时长的限制值。'."\n"
                                            ."\n"
                                            .'云消息队列 RocketMQ 版的消息存储完全实现Serverless弹性，按照实际存储空间收取费用，您可以通过调整消息保存时长来控制消息的存储容量。更多信息，请参见[存储费用](~~427238~~)。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '72',
                                    ],
                                    'traceOn' => [
                                        'description' => '是否开启消息轨迹功能。'."\n"
                                            .'- true：开启消息轨迹功能'."\n"
                                            .'- false：关闭消息轨迹功能'."\n"
                                            ."\n"
                                            .'<props="intl">该参数暂不生效，不管参数是否开启，实例都默认支持轨迹功能。</props>'."\n"
                                            .'<props="china">该参数仅对Serverless类型的实例生效，若开启消息轨迹功能，会产生相关的消息轨迹费用，具体计费信息，请参见[Serverless计费说明](~~2586280~~)。</props>'."\n"
                                            .'<props="china">对于按量付费和包年包月实例，该参数不生效，即不管参数是否开启，都默认支持消息轨迹功能。</props>',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'false' => '关闭消息轨迹功能',
                                            'true' => '开启消息轨迹功能',
                                        ],
                                        'example' => 'true',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'aclInfo' => [
                                'description' => '访问控制信息。',
                                'type' => 'object',
                                'properties' => [
                                    'aclTypes' => [
                                        'description' => '实例的鉴权类型。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例的鉴权类型。'."\n"
                                                .'- default: 智能身份识别'."\n"
                                                .'- apache_acl: Apache RocketMQ ACL',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'default' => '智能身份识别',
                                                'apache_acl' => 'Apache RocketMQ ACL',
                                            ],
                                            'example' => 'apache_acl',
                                        ],
                                        'required' => false,
                                    ],
                                    'defaultVpcAuthFree' => [
                                        'description' => '是否智能身份识别类型下，VPC接入免密访问'."\n"
                                            .'- true 开启免密访问'."\n"
                                            .'- false 关闭免密访问',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'true' => '开启免密访问',
                                            'false' => '关闭免密访问',
                                        ],
                                        'example' => 'false',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AA87DE09-DA44-52F4-9515-78B1B607****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AA87DE09-DA44-52F4-9515-78B1B607****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '更新实例',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'ChangeResourceGroup' => [
            'summary' => '修改实例所属的资源组。',
            'path' => '/resourceGroup/change',
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
                    'name' => 'resourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源ID，即云消息队列 RocketMQ 版实例的ID。表示需要为哪个实例修改所属的资源组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c2c5d1274a8d4317a13bc5b0d4******',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'该参数固定取值为**instance**，表述资源的类型为实例。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'instance' => '实例',
                        ],
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID，表示需要将指定实例转入到哪个资源组下。'."\n"
                            ."\n"
                            .'您可以通过<props="china">[ListResourceGroups](https://help.aliyun.com/document_detail/158855.html)</props><props="intl">[ListResourceGroups](https://www.alibabacloud.com/help/resource-management/latest/listresourcegroups)</props>接口查询已有资源组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-9gLOoK****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID，每个请求ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Instance.NotFound',
                            ],
                            'message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The instance cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"Instance.NotFound\\",\\n  \\"message\\": \\"The instance cannot be found.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '修改资源组',
        ],
        'DeleteInstance' => [
            'summary' => '删除云消息队列 RocketMQ 版实例。',
            'path' => '/instances/{instanceId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待删除实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody0129',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '048242AA-BADA-5F29-B2CD-ED9FA344467F',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"048242AA-BADA-5F29-B2CD-ED9FA344467F\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '删除实例',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>'."\n"
                ."\n"
                .'- 实例删除后将无法恢复，请慎重操作。'."\n"
                ."\n"
                .'- 本接口用于删除按量付费实例，对于包年包月实例，实例到期后自动释放，无需手动删除。',
        ],
        'ListInstances' => [
            'summary' => '查询指定地域下，所有的云消息队列 RocketMQ 版实例的列表信息。',
            'path' => '/instances',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'filter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '过滤关键字',
                        'description' => '查询的过滤条件，若不输入则查询所有实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页页码',
                        'description' => '分页页码，查询第几页的返回结果。'."\n"
                            ."\n"
                            .'取值范围：1~100000000。'."\n"
                            ."\n"
                            .'若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小，每页最多显示的返回结果数量。'."\n"
                            ."\n"
                            .'取值范围：10~200。'."\n"
                            ."\n"
                            .'若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于200，则系统默认按照参数值为200处理。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '实例所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmx7caj******',
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源标签列表，用于筛选实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"key": "rmq-test", "value": "test"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<MyPage<InstanceDTO>>',
                        'description' => 'Result<MyPage<InstanceDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '84445A20-2B50-5306-A3C0-AF99FC1833C6',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'pageNumber' => [
                                        'title' => '当前页码',
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'pageSize' => [
                                        'title' => '分页大小',
                                        'description' => '分页大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'totalCount' => [
                                        'title' => '总记录数',
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'list' => [
                                        'title' => '分页数据',
                                        'description' => '分页数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'regionId' => [
                                                    'title' => '区域ID',
                                                    'description' => '实例所属的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'instanceId' => [
                                                    'title' => '实例ID',
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'rmq-cn-7e22ody****',
                                                ],
                                                'instanceName' => [
                                                    'title' => '实例名称',
                                                    'description' => '实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'test instance',
                                                ],
                                                'status' => [
                                                    'title' => '实例状态',
                                                    'description' => '实例状态。'."\n"
                                                        ."\n"
                                                        .'参数取值如下：'."\n"
                                                        .'- RELEASED（已释放）'."\n"
                                                        .'- RUNNING（运行中）'."\n"
                                                        .'- STOPPED（已停服）'."\n"
                                                        .'- CHANGING（变更中）'."\n"
                                                        .'- CREATING（创建中）',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'RELEASED' => '已释放',
                                                        'RUNNING' => '运行中',
                                                        'STOPPED' => '已停服',
                                                        'CHANGING' => '变更中',
                                                        'CREATING' => '创建中',
                                                    ],
                                                    'example' => 'RUNNING',
                                                    'enum' => [
                                                        'CREATING',
                                                        'CHANGING',
                                                        'RUNNING',
                                                        'STOPPED',
                                                        'RELEASED',
                                                    ],
                                                ],
                                                'startTime' => [
                                                    'title' => '开服时间',
                                                    'description' => '实例的启动时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 00:00:00',
                                                ],
                                                'expireTime' => [
                                                    'title' => '过期时间',
                                                    'description' => '实例的到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-09-01 00:00:00',
                                                ],
                                                'releaseTime' => [
                                                    'title' => '释放时间',
                                                    'description' => '实例的释放时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-09-07 00:00:00',
                                                ],
                                                'userId' => [
                                                    'title' => '所属人ID',
                                                    'description' => '实例所属的用户ID。',
                                                    'type' => 'string',
                                                    'example' => '6W0xz2uPfiwp****',
                                                ],
                                                'commodityCode' => [
                                                    'title' => '商品编码',
                                                    'description' => '消息队列RocketMQ 5.x系列实例的商品代号，类似于ons_rmqsub_public_cn。',
                                                    'type' => 'string',
                                                    'example' => 'ons_rmqsub_public_cn',
                                                ],
                                                'serviceCode' => [
                                                    'title' => '服务编码',
                                                    'description' => '实例所属的服务编码。消息队列RocketMQ版的服务编码为rmq。',
                                                    'type' => 'string',
                                                    'example' => 'rmq',
                                                ],
                                                'seriesCode' => [
                                                    'title' => '系列编码',
                                                    'description' => '实例的主系列编码。'."\n"
                                                        ."\n"
                                                        .'参数取值如下：'."\n"
                                                        .'- standard：标准版'."\n"
                                                        .'- ultimate：铂金版'."\n"
                                                        .'- professional：专业版',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'standard' => '标准版',
                                                        'ultimate' => '铂金版',
                                                        'professional' => '专业版',
                                                    ],
                                                    'example' => 'standard',
                                                ],
                                                'subSeriesCode' => [
                                                    'title' => '子系列编码',
                                                    'description' => '实例的子系列编码。'."\n"
                                                        ."\n"
                                                        .'参数取值如下：'."\n"
                                                        .'- cluster_ha：集群高可用版'."\n"
                                                        .'- single_node：单节点版',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'cluster_ha' => '集群高可用版',
                                                        'single_node' => '单节点版',
                                                    ],
                                                    'example' => 'cluster_ha',
                                                ],
                                                'paymentType' => [
                                                    'title' => '付费类型',
                                                    'description' => '实例的付费类型。'."\n"
                                                        ."\n"
                                                        .'参数取值如下：'."\n"
                                                        .'- PayAsYouGo：按量付费（后付费）'."\n"
                                                        .'- Subscription：包年包月（预付费）',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'PayAsYouGo' => '按量付费（后付费）',
                                                        'Subscription' => '包年包月（预付费）',
                                                    ],
                                                    'example' => 'Subscription',
                                                    'enum' => [
                                                        'Subscription',
                                                        'PayAsYouGo',
                                                    ],
                                                ],
                                                'remark' => [
                                                    'title' => '备注',
                                                    'description' => '实例的备注信息。',
                                                    'type' => 'string',
                                                    'example' => 'This is remark for instance.',
                                                ],
                                                'topicCount' => [
                                                    'title' => '主题数量',
                                                    'description' => '实例中所创建的主题数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'groupCount' => [
                                                    'title' => '消费组数量',
                                                    'description' => '实例中所创建的消费者分组的数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'createTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '实例的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 00:00:00',
                                                ],
                                                'updateTime' => [
                                                    'title' => '修改时间',
                                                    'description' => '实例的最后修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-02 00:00:00',
                                                ],
                                                'resourceGroupId' => [
                                                    'title' => '资源组ID',
                                                    'description' => '实例所属的资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmx7caj******',
                                                ],
                                                'tags' => [
                                                    'title' => '资源标签列表。',
                                                    'description' => '资源标签列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'title' => '资源标签。',
                                                        'description' => '资源标签。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'key' => [
                                                                'title' => '资源标签key值。',
                                                                'description' => '资源标签key值。',
                                                                'type' => 'string',
                                                                'example' => 'key',
                                                            ],
                                                            'value' => [
                                                                'title' => '资源标签value值。',
                                                                'description' => '资源标签value值。',
                                                                'type' => 'string',
                                                                'example' => 'value',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'productInfo' => [
                                                    'description' => '产品信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'traceOn' => [
                                                            'description' => '是否开启消息轨迹功能。'."\n"
                                                                .'- true：开启消息轨迹功能'."\n"
                                                                .'- false：关闭消息轨迹功能'."\n"
                                                                ."\n"
                                                                .'<props="intl">该参数暂不生效，不管参数是否开启，实例都默认支持轨迹功能。</props>'."\n"
                                                                .'<props="china">该参数仅对Serverless类型的实例生效，若开启消息轨迹功能，会产生相关的消息轨迹费用，具体计费信息，请参见[Serverless计费说明](~~2586280~~)。</props>'."\n"
                                                                ."\n"
                                                                .'<props="china">对于按量付费和包年包月实例，该参数不生效，即不管参数是否开启，都默认支持消息轨迹功能。</props>',
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
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingPageNumber',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter pageNumber is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'PageNumber',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'pageNumber',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"84445A20-2B50-5306-A3C0-AF99FC1833C6\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"pageNumber\\": 1,\\n    \\"pageSize\\": 10,\\n    \\"totalCount\\": 100,\\n    \\"list\\": [\\n      {\\n        \\"regionId\\": \\"cn-hangzhou\\",\\n        \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n        \\"instanceName\\": \\"test instance\\",\\n        \\"status\\": \\"RUNNING\\",\\n        \\"startTime\\": \\"2022-08-01 00:00:00\\",\\n        \\"expireTime\\": \\"2022-09-01 00:00:00\\",\\n        \\"releaseTime\\": \\"2022-09-07 00:00:00\\",\\n        \\"userId\\": \\"6W0xz2uPfiwp****\\",\\n        \\"commodityCode\\": \\"ons_rmqsub_public_cn\\",\\n        \\"serviceCode\\": \\"rmq\\",\\n        \\"seriesCode\\": \\"standard\\",\\n        \\"subSeriesCode\\": \\"cluster_ha\\",\\n        \\"paymentType\\": \\"Subscription\\",\\n        \\"remark\\": \\"This is remark for instance.\\",\\n        \\"topicCount\\": 20,\\n        \\"groupCount\\": 10,\\n        \\"createTime\\": \\"2022-08-01 00:00:00\\",\\n        \\"updateTime\\": \\"2022-08-02 00:00:00\\",\\n        \\"resourceGroupId\\": \\"rg-acfmx7caj******\\",\\n        \\"tags\\": [\\n          {\\n            \\"key\\": \\"key\\",\\n            \\"value\\": \\"value\\"\\n          }\\n        ],\\n        \\"productInfo\\": {\\n          \\"traceOn\\": true\\n        }\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"MissingPageNumber\\",\\n  \\"message\\": \\"Parameter pageNumber is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"PageNumber\\",\\n  \\"dynamicMessage\\": \\"pageNumber\\"\\n}","type":"json"}]',
            'title' => '查询实例列表',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'GetInstance' => [
            'summary' => '获取某个指定实例的详细信息。',
            'path' => '/instances/{instanceId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待查询实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<InstanceDTO>',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '05AB7FBD-F1D3-5D87-BF78-BD782249****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'regionId' => [
                                        'title' => '区域ID',
                                        'description' => '实例所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'instanceId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'rmq-cn-7e22ody****',
                                    ],
                                    'instanceName' => [
                                        'title' => '实例名称',
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'test instance',
                                    ],
                                    'status' => [
                                        'title' => '实例状态',
                                        'description' => '实例状态。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- RELEASED：已释放'."\n"
                                            .'- RUNNING：运行中'."\n"
                                            .'- STOPPED：已停服'."\n"
                                            .'- CHANGING：变更中'."\n"
                                            .'- CREATING：创建中',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'RELEASED' => '已释放',
                                            'RUNNING' => '运行中',
                                            'STOPPED' => '已停服',
                                            'CHANGING' => '变更中',
                                            'CREATING' => '创建中',
                                        ],
                                        'example' => 'RUNNING',
                                        'enum' => [
                                            'CREATING',
                                            'CHANGING',
                                            'RUNNING',
                                            'STOPPED',
                                            'RELEASED',
                                        ],
                                    ],
                                    'startTime' => [
                                        'title' => '开服时间',
                                        'description' => '实例的启动时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 00:00:00',
                                    ],
                                    'expireTime' => [
                                        'title' => '过期时间',
                                        'description' => '实例的到期时间。',
                                        'type' => 'string',
                                        'example' => '2022-09-01 00:00:00',
                                    ],
                                    'releaseTime' => [
                                        'title' => '释放时间',
                                        'description' => '实例的释放时间。',
                                        'type' => 'string',
                                        'example' => '2022-09-07 00:00:00',
                                    ],
                                    'userId' => [
                                        'title' => '所属人ID',
                                        'description' => '实例所属的用户ID。',
                                        'type' => 'string',
                                        'example' => '111111111111111',
                                    ],
                                    'bid' => [
                                        'title' => 'BID',
                                        'description' => '商品的售卖渠道BID。',
                                        'type' => 'string',
                                        'example' => '26842',
                                    ],
                                    'commodityCode' => [
                                        'title' => '商品编码',
                                        'description' => '消息队列RocketMQ 5.x系列实例的商品代号类似于ons_rmqsub_public_cn。',
                                        'type' => 'string',
                                        'example' => 'ons_rmqsub_public_cn',
                                    ],
                                    'serviceCode' => [
                                        'title' => '服务编码',
                                        'description' => '实例所属的服务编码。消息队列RocketMQ版的服务编码为rmq。',
                                        'type' => 'string',
                                        'example' => 'rmq',
                                    ],
                                    'seriesCode' => [
                                        'title' => '系列编码',
                                        'description' => '实例的主系列编码。主系列间的具体差异，请参见[产品选型](~~444722~~)。'."\n"
                                            ."\n"
                                            .' 参数取值如下：'."\n"
                                            .'- standard：标准版'."\n"
                                            .'- ultimate：铂金版'."\n"
                                            .'- professional：专业版',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'standard' => '标准版',
                                            'ultimate' => '铂金版',
                                            'professional' => '专业版',
                                        ],
                                        'example' => 'standard',
                                    ],
                                    'subSeriesCode' => [
                                        'title' => '子系列编码',
                                        'description' => '实例的子系列编码。子系列间的具体差异，请参见[产品选型](~~444722~~)。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- cluster_ha：集群高可用版'."\n"
                                            .'- single_node：单节点版',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'cluster_ha' => '集群高可用版',
                                            'single_node' => '单节点版',
                                        ],
                                        'example' => 'cluster_ha',
                                    ],
                                    'paymentType' => [
                                        'title' => '付费类型',
                                        'description' => '实例的付费类型。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- PayAsYouGo：按量付费（后付费）'."\n"
                                            .'- Subscription：包年包月（预付费）',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'PayAsYouGo' => '按量付费（后付费）',
                                            'Subscription' => '包年包月（预付费）',
                                        ],
                                        'example' => 'Subscription',
                                        'enum' => [
                                            'Subscription',
                                            'PayAsYouGo',
                                        ],
                                    ],
                                    'remark' => [
                                        'title' => '备注',
                                        'description' => '实例的备注信息。',
                                        'type' => 'string',
                                        'example' => 'This is remark for instance.',
                                    ],
                                    'networkInfo' => [
                                        'title' => '网络信息',
                                        'description' => '网络信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'vpcInfo' => [
                                                'title' => '专有网络信息',
                                                'description' => '专有网络信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'vpcId' => [
                                                        'title' => '专有网络ID',
                                                        'description' => '实例所关联的专有网络的ID。',
                                                        'type' => 'string',
                                                        'example' => 'vpc-uf6of9452b2pba82c****',
                                                    ],
                                                    'vSwitchId' => [
                                                        'title' => '交换机ID',
                                                        'description' => '实例所关联的交换机ID。',
                                                        'type' => 'string',
                                                        'deprecated' => true,
                                                        'example' => 'vsw-uf6gwtbn6etadpvz7****',
                                                    ],
                                                    'vSwitches' => [
                                                        'title' => '交换机列表',
                                                        'description' => '交换机列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'vSwitchId' => [
                                                                    'title' => '交换机ID',
                                                                    'description' => '交换机ID',
                                                                    'type' => 'string',
                                                                ],
                                                                'zoneId' => [
                                                                    'title' => '可用区ID',
                                                                    'description' => '可用区ID',
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'securityGroupIds' => [
                                                        'description' => '安全组ID。',
                                                        'type' => 'string',
                                                        'example' => 'sg-hp35r2hc3a3sv8q2sb16',
                                                    ],
                                                ],
                                            ],
                                            'endpoints' => [
                                                'title' => '接入点列表',
                                                'description' => '接入点信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '接入点信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'endpointType' => [
                                                            'title' => '接入点类型',
                                                            'description' => '表示实例的接入点类型。',
                                                            'type' => 'string',
                                                            'enumValueTitles' => [
                                                                'TCP_VPC' => 'VPC接入点',
                                                                'TCP_INTERNET' => '公网接入点',
                                                            ],
                                                            'example' => 'TCP_INTERNET',
                                                            'enum' => [
                                                                'TCP_INTERNET',
                                                                'TCP_VPC',
                                                            ],
                                                        ],
                                                        'endpointUrl' => [
                                                            'title' => '接入点地址',
                                                            'description' => '实例的接入点。',
                                                            'type' => 'string',
                                                            'example' => 'rmq-cn-c4d2tbk****-vpc.cn-hangzhou.rmq.aliyuncs.com:8080',
                                                        ],
                                                        'ipWhitelist' => [
                                                            'description' => '公网访问IP白名单。仅公网接入点支持配置IP白名单，VPC接入点暂不支持。'."\n"
                                                                ."\n"
                                                                .'- 若不配置IP白名单，则默认放通所有IP地址段通过公网访问消息队列RocketMQ版服务端。'."\n"
                                                                .'- 若配置IP白名单，则仅允许白名单内的IP地址通过公网访问消息队列RocketMQ版服务端。'."\n"
                                                                ."\n"
                                                                .'该字段不再推荐使用，请使用internetInfo.ipWhitelist字段。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '公网访问IP白名单。',
                                                                'type' => 'string',
                                                                'example' => '192.168.x.x/24',
                                                            ],
                                                            'example' => '192.168.x.x/24',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'internetInfo' => [
                                                'title' => '公网信息',
                                                'description' => '实例公网信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'internetSpec' => [
                                                        'title' => '是否开通公网',
                                                        'description' => '是否开通公网访问。'."\n"
                                                            ."\n"
                                                            .'参数取值如下：'."\n"
                                                            .'- enable：开启公网访问'."\n"
                                                            .'- disable：关闭公网访问'."\n"
                                                            ."\n"
                                                            .'实例默认支持VPC访问方式，若开启公网访问，消息队列RocketMQ版会收取公网下行带宽费用。具体计费信息，请参见[公网访问费用](~~427240~~)。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'enable' => '开启公网访问',
                                                            'disable' => '关闭公网访问',
                                                        ],
                                                        'example' => 'enable',
                                                    ],
                                                    'flowOutType' => [
                                                        'title' => '公网计费类型',
                                                        'description' => '公网计费类型。'."\n"
                                                            ."\n"
                                                            .'参数取值如下：'."\n"
                                                            .'- payByBandwidth：固定带宽计费，开启公网访问时，设置为该参数值。'."\n"
                                                            .'- uninvolved：不涉及，未开启公网访问时，设置为该参数值。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'payByBandwidth' => '固定带宽计费',
                                                            'uninvolved' => '不涉及',
                                                        ],
                                                        'example' => 'payByBandwidth',
                                                    ],
                                                    'flowOutBandwidth' => [
                                                        'title' => '公网带宽规格',
                                                        'description' => '公网带宽规格。单位：1 Mb/s。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'ipWhitelist' => [
                                                        'title' => '公网IP白名单列表',
                                                        'description' => '公网访问IP白名单列表。'."\n"
                                                            ."\n"
                                                            .'- 若不配置IP白名单，则默认放通所有IP地址段通过公网访问消息队列RocketMQ版服务端。'."\n"
                                                            .'- 若配置IP白名单，则仅允许白名单内的IP地址通过公网访问消息队列RocketMQ版服务端。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'title' => '公网IP白名单',
                                                            'description' => '公网访问IP白名单。',
                                                            'type' => 'string',
                                                            'example' => '192.168.x.x/24',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'accountInfo' => [
                                        'title' => '账号信息',
                                        'description' => '账号信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'username' => [
                                                'title' => '用户名',
                                                'description' => '实例的用户名。使用公网访问时，SDK代码中需要配置实例的用户名和密码，进行身份验证。',
                                                'type' => 'string',
                                                'example' => '6W0xz2uPfiwp****',
                                            ],
                                        ],
                                    ],
                                    'instanceQuotas' => [
                                        'title' => '容量信息',
                                        'description' => '容量信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '容量信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'quotaName' => [
                                                    'title' => '配额名称',
                                                    'description' => '实例的配额名称。'."\n"
                                                        ."\n"
                                                        .'参数取值如下：'."\n"
                                                        ."\n"
                                                        .'- TOPIC_COUNT：实例的Topic创建额度',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'TOPIC_COUNT' => '实例的Topic创建额度',
                                                    ],
                                                    'example' => 'TOPIC_COUNT',
                                                ],
                                                'usedCount' => [
                                                    'title' => '已使用量',
                                                    'description' => '已使用量。单位：个。',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '10',
                                                ],
                                                'freeCount' => [
                                                    'title' => '免费',
                                                    'description' => '免费额度。单位：个。',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '20',
                                                ],
                                                'totalCount' => [
                                                    'title' => '总配额',
                                                    'description' => '总配额。单位：个。',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '100',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'createTime' => [
                                        'title' => '创建时间',
                                        'description' => '实例的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 00:00:00 ',
                                    ],
                                    'updateTime' => [
                                        'title' => '修改时间',
                                        'description' => '实例最后的修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-02 00:00:00 ',
                                    ],
                                    'extConfig' => [
                                        'title' => '扩展配置，不再推荐使用，建议使用产品信息、网络信息中的字段替换',
                                        'description' => '扩展配置。该字段不再推荐使用，请使用productInfo、internetInfo、aclInfo等字段替代。',
                                        'type' => 'object',
                                        'properties' => [
                                            'aclType' => [
                                                'title' => '鉴权类型',
                                                'description' => '实例的鉴权类型。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .' '."\n"
                                                    .'- default：智能身份识别',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'default' => '智能身份识别',
                                                ],
                                                'example' => 'default',
                                                'enum' => [
                                                    'default',
                                                    'aliyun_ram',
                                                    'apache_acl',
                                                ],
                                            ],
                                            'sendReceiveRatio' => [
                                                'title' => '消息收发比例',
                                                'description' => '消息发送和接收的比例。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '0.5',
                                            ],
                                            'autoScaling' => [
                                                'title' => '自适应弹性伸缩',
                                                'description' => '是否开启规格外突发弹性能力。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- true：开启弹性能力'."\n"
                                                    .'- false：不开启弹性能力'."\n"
                                                    ."\n"
                                                    .'仅当supportAutoScaling参数值为enable，即实例支持开启弹性能力，该参数才有效。',
                                                'type' => 'boolean',
                                                'enumValueTitles' => [
                                                    'true' => '开启弹性能力',
                                                    'false' => '不开启弹性能力',
                                                ],
                                                'example' => 'true',
                                            ],
                                            'messageRetentionTime' => [
                                                'title' => '消息保留时长',
                                                'description' => '消息保存时长。单位：小时。'."\n"
                                                    ."\n"
                                                    .'取值范围，请参见[使用限制](~~440347~~)>资源配额>消息保存时长的限制值。'."\n"
                                                    ."\n"
                                                    .'消息队列RocketMQ版的消息存储完全实现Serverless弹性，按照实际存储空间收取费用，您可以通过调整消息保存时长来控制消息的存储容量。更多信息，请参见[存储费用](~~427238~~)。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '72',
                                            ],
                                            'supportAutoScaling' => [
                                                'title' => '是否支持自适应弹性伸缩',
                                                'description' => '实例是否支持开启规格外突发弹性能力。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- true：支持开启弹性能力'."\n"
                                                    .'- false：不支持开启弹性能力'."\n"
                                                    ."\n"
                                                    .'开启弹性突发能力后，消息队列RocketMQ允许该实例在一定范围内超过基础规格限制的TPS，且超过基础规格外的部分，需要收取额外的弹性规格费用。具体计费信息，请参见[计算能力费用](~~427237~~)。'."\n"
                                                    ."\n\n"
                                                    .'> 仅部分规格的实例支持开启弹性突发规格能力，具体支持的实例，请参见[实例规格](~~444715~~)。',
                                                'type' => 'boolean',
                                                'enumValueTitles' => [
                                                    'true' => '支持开启弹性能力',
                                                    'false' => '不支持开启弹性能力',
                                                ],
                                                'example' => 'true',
                                            ],
                                            'internetSpec' => [
                                                'title' => '是否开通公网',
                                                'description' => '是否开通公网访问。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- enable：开通公网访问'."\n"
                                                    .'- disable：关闭公网访问'."\n"
                                                    ."\n"
                                                    .'实例默认支持VPC访问方式，若开启公网访问，消息队列RocketMQ版会收取公网下行带宽费用。具体计费信息，请参见[公网访问费用](~~427240~~)。',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'enable' => '开通公网访问',
                                                    'disable' => '关闭公网访问',
                                                ],
                                                'example' => 'enable',
                                                'enum' => [
                                                    'enable',
                                                    'disable',
                                                ],
                                            ],
                                            'flowOutType' => [
                                                'title' => '公网计费类型',
                                                'description' => '公网计费类型。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- payByTraffic：按流量计费'."\n"
                                                    .'- payByBandwidth：按带宽计费'."\n"
                                                    .'- uninvolved：不涉及',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'payByTraffic' => '按流量计费',
                                                    'payByBandwidth' => '按带宽计费',
                                                    'uninvolved' => '不涉及',
                                                ],
                                                'example' => 'payByBandwidth',
                                                'enum' => [
                                                    'uninvolved',
                                                    'payByTraffic',
                                                    'payByBandwidth',
                                                ],
                                            ],
                                            'flowOutBandwidth' => [
                                                'title' => '公网带宽规格',
                                                'description' => '公网带宽规格。单位：Mb/s。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'msgProcessSpec' => [
                                                'title' => '消息收发计算规格',
                                                'description' => '消息收发计算规格。具体消息收发TPS上限，请参见[实例规格](~~444715~~)。',
                                                'type' => 'string',
                                                'example' => 'rmq.s2.2xlarge',
                                            ],
                                        ],
                                        'deprecated' => true,
                                    ],
                                    'resourceGroupId' => [
                                        'title' => '资源组ID',
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfm3tmjruyribi',
                                    ],
                                    'productInfo' => [
                                        'title' => '产品信息',
                                        'description' => '实例的扩展配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'msgProcessSpec' => [
                                                'title' => '消息收发规格',
                                                'description' => '消息收发计算规格。具体消息收发TPS上限，请参见[实例规格](~~444715~~)。',
                                                'type' => 'string',
                                                'example' => 'rmq.s2.2xlarge',
                                            ],
                                            'sendReceiveRatio' => [
                                                'title' => '消息收发比例',
                                                'description' => '消息发送和接收的比例。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '0.5',
                                            ],
                                            'autoScaling' => [
                                                'title' => '是否开启弹性伸缩',
                                                'description' => '是否开启规格外突发弹性能力。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- true：支持开启弹性能力'."\n"
                                                    .'- false：不支持开启弹性能力'."\n"
                                                    ."\n"
                                                    .'仅当supportAutoScaling参数值为enable，即实例支持开启弹性能力，该参数才有效。',
                                                'type' => 'boolean',
                                                'enumValueTitles' => [
                                                    'true' => '开启弹性能力',
                                                    'false' => '不开启弹性能力',
                                                ],
                                                'example' => 'true',
                                            ],
                                            'messageRetentionTime' => [
                                                'title' => '消息保留时长',
                                                'description' => '消息保存时长。单位：小时。'."\n"
                                                    ."\n"
                                                    .'取值范围，请参见[使用限制](~~440347~~)>资源配额>消息保存时长的限制值。'."\n"
                                                    ."\n"
                                                    .'消息队列RocketMQ版的消息存储完全实现Serverless弹性，按照实际存储空间收取费用，您可以通过调整消息保存时长来控制消息的存储容量。更多信息，请参见[存储费用](~~427238~~)。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '72',
                                            ],
                                            'supportAutoScaling' => [
                                                'title' => '是否支持弹性伸缩',
                                                'description' => '是否支持开启规格外突发弹性能力。'."\n"
                                                    ."\n"
                                                    .'参数取值如下：'."\n"
                                                    .'- true：支持开启弹性能力'."\n"
                                                    .'- false：不支持开启弹性能力'."\n"
                                                    ."\n"
                                                    .'开启弹性突发能力后，消息队列RocketMQ允许该实例在一定范围内超过基础规格限制的TPS，且超过基础规格外的部分，需要收取额外的弹性规格费用。具体计费信息，请参见[计算能力费用](~~427237~~)。'."\n"
                                                    ."\n\n"
                                                    .'> 仅部分规格的实例支持开启弹性突发规格能力，具体支持的实例，请参见[实例规格](~~444715~~)。',
                                                'type' => 'boolean',
                                                'enumValueTitles' => [
                                                    'true' => '支持开启弹性能力',
                                                    'false' => '不支持开启弹性能力',
                                                ],
                                                'example' => 'true',
                                            ],
                                            'traceOn' => [
                                                'description' => '是否开启消息轨迹功能。'."\n"
                                                    .'- true：开启消息轨迹功能'."\n"
                                                    .'- false：关闭消息轨迹功能'."\n"
                                                    ."\n"
                                                    .'<props="intl">该参数暂不生效，不管参数是否开启，实例都默认支持轨迹功能。</props>'."\n"
                                                    .'<props="china">该参数仅对Serverless类型的实例生效，若开启消息轨迹功能，会产生相关的消息轨迹费用，具体计费信息，请参见[Serverless计费说明](~~2586280~~)。</props>'."\n"
                                                    ."\n"
                                                    .'<props="china">对于按量付费和包年包月实例，该参数不生效，即不管参数是否开启，都默认支持消息轨迹功能。</props>',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                    'aclInfo' => [
                                        'title' => '访问控制信息',
                                        'description' => '访问控制信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'aclTypes' => [
                                                'description' => '实例的鉴权类型列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '实例的鉴权类型。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'default' => '智能身份识别',
                                                        'apache_acl' => 'ACL身份识别',
                                                    ],
                                                    'example' => 'default',
                                                ],
                                            ],
                                            'defaultVpcAuthFree' => [
                                                'description' => '内网免身份识别开关。',
                                                'type' => 'boolean',
                                                'enumValueTitles' => [
                                                    'true' => '开启',
                                                    'false' => '关闭',
                                                ],
                                                'example' => 'true',
                                            ],
                                            'aclType' => [
                                                'description' => '实例的鉴权类型。已废弃，推荐使用aclTypes字段',
                                                'type' => 'string',
                                                'deprecated' => true,
                                                'enumValueTitles' => [
                                                    'default' => '智能身份识别',
                                                    'apache_acl' => 'ACL身份识别',
                                                ],
                                                'example' => 'default',
                                            ],
                                        ],
                                    ],
                                    'software' => [
                                        'title' => '实例软件信息',
                                        'description' => '实例软件信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'softwareVersion' => [
                                                'title' => '软件版本',
                                                'description' => '软件版本。',
                                                'type' => 'string',
                                                'example' => '5.0-rmq-20230619-1',
                                            ],
                                            'maintainTime' => [
                                                'title' => '升级时间段',
                                                'description' => '升级时间段。',
                                                'type' => 'string',
                                                'example' => '02:00-06:00',
                                            ],
                                            'upgradeMethod' => [
                                                'title' => '升级方式，auto自动升级，manual手动升级',
                                                'description' => '升级方式。'."\n"
                                                    ."\n"
                                                    .'参数取值如下'."\n"
                                                    ."\n"
                                                    .'- auto：自动升级'."\n"
                                                    .'- manual：手动升级',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'auto' => '自动升级',
                                                    'maunal' => '手动升级',
                                                ],
                                                'example' => 'auto',
                                            ],
                                        ],
                                    ],
                                    'topicCount' => [
                                        'title' => '主题数量',
                                        'description' => '主题数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'groupCount' => [
                                        'title' => '消费组数量',
                                        'description' => '消费组数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'tags' => [
                                        'title' => '资源标签列表。',
                                        'description' => '资源标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '资源标签。',
                                            'description' => '资源标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'key' => [
                                                    'title' => '资源标签key值。',
                                                    'description' => '资源标签key值。',
                                                    'type' => 'string',
                                                    'example' => 'key',
                                                ],
                                                'value' => [
                                                    'title' => '资源标签value值。',
                                                    'description' => '资源标签value值。',
                                                    'type' => 'string',
                                                    'example' => 'value',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"05AB7FBD-F1D3-5D87-BF78-BD782249****\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"regionId\\": \\"cn-hangzhou\\",\\n    \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n    \\"instanceName\\": \\"test instance\\",\\n    \\"status\\": \\"RUNNING\\",\\n    \\"startTime\\": \\"2022-08-01 00:00:00\\",\\n    \\"expireTime\\": \\"2022-09-01 00:00:00\\",\\n    \\"releaseTime\\": \\"2022-09-07 00:00:00\\",\\n    \\"userId\\": \\"111111111111111\\",\\n    \\"bid\\": \\"26842\\",\\n    \\"commodityCode\\": \\"ons_rmqsub_public_cn\\",\\n    \\"serviceCode\\": \\"rmq\\",\\n    \\"seriesCode\\": \\"standard\\",\\n    \\"subSeriesCode\\": \\"cluster_ha\\",\\n    \\"paymentType\\": \\"Subscription\\",\\n    \\"remark\\": \\"This is remark for instance.\\",\\n    \\"networkInfo\\": {\\n      \\"vpcInfo\\": {\\n        \\"vpcId\\": \\"vpc-uf6of9452b2pba82c****\\",\\n        \\"vSwitchId\\": \\"vsw-uf6gwtbn6etadpvz7****\\",\\n        \\"vSwitches\\": [\\n          {\\n            \\"vSwitchId\\": \\"\\",\\n            \\"zoneId\\": \\"\\"\\n          }\\n        ],\\n        \\"securityGroupIds\\": \\"sg-hp35r2hc3a3sv8q2sb16\\"\\n      },\\n      \\"endpoints\\": [\\n        {\\n          \\"endpointType\\": \\"TCP_INTERNET\\",\\n          \\"endpointUrl\\": \\"rmq-cn-c4d2tbk****-vpc.cn-hangzhou.rmq.aliyuncs.com:8080\\",\\n          \\"ipWhitelist\\": [\\n            \\"192.168.x.x/24\\"\\n          ]\\n        }\\n      ],\\n      \\"internetInfo\\": {\\n        \\"internetSpec\\": \\"enable\\",\\n        \\"flowOutType\\": \\"payByBandwidth\\",\\n        \\"flowOutBandwidth\\": 1,\\n        \\"ipWhitelist\\": [\\n          \\"192.168.x.x/24\\"\\n        ]\\n      }\\n    },\\n    \\"accountInfo\\": {\\n      \\"username\\": \\"6W0xz2uPfiwp****\\"\\n    },\\n    \\"instanceQuotas\\": [\\n      {\\n        \\"quotaName\\": \\"TOPIC_COUNT\\",\\n        \\"usedCount\\": 10,\\n        \\"freeCount\\": 20,\\n        \\"totalCount\\": 100\\n      }\\n    ],\\n    \\"createTime\\": \\"2022-08-01 00:00:00 \\",\\n    \\"updateTime\\": \\"2022-08-02 00:00:00 \\",\\n    \\"extConfig\\": {\\n      \\"aclType\\": \\"default\\",\\n      \\"sendReceiveRatio\\": 0.5,\\n      \\"autoScaling\\": true,\\n      \\"messageRetentionTime\\": 72,\\n      \\"supportAutoScaling\\": true,\\n      \\"internetSpec\\": \\"enable\\",\\n      \\"flowOutType\\": \\"payByBandwidth\\",\\n      \\"flowOutBandwidth\\": 10,\\n      \\"msgProcessSpec\\": \\"rmq.s2.2xlarge\\"\\n    },\\n    \\"resourceGroupId\\": \\"rg-acfm3tmjruyribi\\",\\n    \\"productInfo\\": {\\n      \\"msgProcessSpec\\": \\"rmq.s2.2xlarge\\",\\n      \\"sendReceiveRatio\\": 0.5,\\n      \\"autoScaling\\": true,\\n      \\"messageRetentionTime\\": 72,\\n      \\"supportAutoScaling\\": true,\\n      \\"traceOn\\": true\\n    },\\n    \\"aclInfo\\": {\\n      \\"aclTypes\\": [\\n        \\"default\\"\\n      ],\\n      \\"defaultVpcAuthFree\\": true,\\n      \\"aclType\\": \\"default\\"\\n    },\\n    \\"software\\": {\\n      \\"softwareVersion\\": \\"5.0-rmq-20230619-1\\",\\n      \\"maintainTime\\": \\"02:00-06:00\\",\\n      \\"upgradeMethod\\": \\"auto\\"\\n    },\\n    \\"topicCount\\": 10,\\n    \\"groupCount\\": 10,\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"key\\",\\n        \\"value\\": \\"value\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '获取指定实例的详情',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'CreateTopic' => [
            'summary' => '创建云消息队列 RocketMQ 版的主题（Topic）。主题是云消息队列 RocketMQ 版中消息传输和存储的顶层容器，用于标识同一类业务逻辑的消息。在消息收发模型中，生产者将消息发送至主题，消费者通过订阅指定的主题来消费其中的消息。',
            'path' => '/instances/{instanceId}/topics/{topicName}',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待创建主题所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '主题名称',
                        'description' => '待创建主题的名称，用于标识主题，全局唯一。'."\n"
                            ."\n"
                            .'取值规范如下：'."\n"
                            ."\n"
                            .'- 字符限制：支持字母a\\~z或A\\~Z、数字0~9以及下划线（_）、短划线（-）。'."\n"
                            .'- 长度限制：1~60个字符。'."\n"
                            ."\n"
                            .'保留字符限制，请参见[参数限制](~~440347~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'topic_test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '消息类型',
                        'description' => '主题信息。',
                        'type' => 'object',
                        'properties' => [
                            'messageType' => [
                                'title' => '消息类型',
                                'description' => '待创建主题的消息类型。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- TRANSACTION：事务消息'."\n"
                                    .'- FIFO：顺序消息'."\n"
                                    .'- DELAY：定时/延时消息'."\n"
                                    .'- NORMAL：普通消息'."\n"
                                    ."\n"
                                    .'><notice>主题的类型和发送消息的类型必须一致。例如，您创建的主题的类型为顺序消息，则该主题只能用于收发顺序消息，不能收发其他类型的消息。></notice>',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'TRANSACTION' => '事务消息',
                                    'FIFO' => '顺序消息',
                                    'DELAY' => '定时/延时消息',
                                    'NORMAL' => '普通消息',
                                ],
                                'example' => 'NORMAL',
                                'enum' => [
                                    'NORMAL',
                                    'FIFO',
                                    'DELAY',
                                    'TRANSACTION',
                                ],
                            ],
                            'remark' => [
                                'title' => '备注',
                                'description' => '待创建主题的备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Topic.Existed',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The topic already exists.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'TopicName',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'topicName',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"Topic.Existed\\",\\n  \\"message\\": \\"The topic already exists.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"TopicName\\",\\n  \\"dynamicMessage\\": \\"topicName\\"\\n}","type":"json"}]',
            'title' => '创建主题',
        ],
        'UpdateTopic' => [
            'summary' => '更新主题的备注信息。',
            'path' => '/instances/{instanceId}/topics/{topicName}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待更新主题所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '主题名称',
                        'description' => '待更新的主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'topic_test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '',
                        'description' => '请求体结构。',
                        'type' => 'object',
                        'properties' => [
                            'remark' => [
                                'title' => '备注',
                                'description' => '更新后的主题备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Topic.NotFound',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The topic cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'TopicName',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'topicName',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"Topic.NotFound\\",\\n  \\"message\\": \\"The topic cannot be found.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"TopicName\\",\\n  \\"dynamicMessage\\": \\"topicName\\"\\n}","type":"json"}]',
            'title' => '更新主题',
        ],
        'DeleteTopic' => [
            'summary' => '删除指定主题。',
            'path' => '/instances/{instanceId}/topics/{topicName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待删除主题所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '主题名称',
                        'description' => '待删除主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'topic_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Topic.NotFound',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The topic cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'TopicName',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'topicName',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"Topic.NotFound\\",\\n  \\"message\\": \\"The topic cannot be found.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"TopicName\\",\\n  \\"dynamicMessage\\": \\"topicName\\"\\n}","type":"json"}]',
            'title' => '删除主题',
            'description' => '删除主题将导致该主题下的所有发布订阅关系同时被清理，请慎重调用。',
        ],
        'ListTopics' => [
            'summary' => '查询指定实例下的主题列表信息。',
            'path' => '/instances/{instanceId}/topics',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '指定需要获取哪个实例下的主题列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'filter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '查询的过滤条件，若不输入则查询该实例下所有的主题。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'topic_test',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页页码',
                        'description' => '分页页码，查询第几页的返回结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小，每页最多显示的返回结果数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '10',
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'messageTypes',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '主题的消息类型。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要查询实例下哪种类型的主题。若不输入，则查询实例下的所有主题。'."\n"
                                .'参数取值如下：'."\n"
                                .'- TRANSACTION：事务消息'."\n"
                                .'- FIFO：顺序消息'."\n"
                                .'- DELAY：定时/延时消息'."\n"
                                .'- NORMAL：普通消息',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'TRANSACTION' => '事务消息',
                                'FIFO' => '顺序消息',
                                'DELAY' => '定时/延时消息',
                                'NORMAL' => '普通消息',
                            ],
                            'example' => 'NORMAL',
                        ],
                        'required' => false,
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<MyPage<TopicDTO>>',
                        'description' => 'Result<MyPage<TopicDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'pageNumber' => [
                                        'title' => '当前页码',
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'pageSize' => [
                                        'title' => '分页大小',
                                        'description' => '分页大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'totalCount' => [
                                        'title' => '总记录数',
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'list' => [
                                        'title' => '分页数据',
                                        'description' => '分页数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'regionId' => [
                                                    'title' => '区域ID',
                                                    'description' => '实例所属的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'instanceId' => [
                                                    'title' => '实例ID',
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'rmq-cn-7e22ody****',
                                                ],
                                                'topicName' => [
                                                    'title' => 'Topic编码',
                                                    'description' => '主题名称。',
                                                    'type' => 'string',
                                                    'example' => 'topic_test',
                                                ],
                                                'messageType' => [
                                                    'title' => '消息类型,MessageTypeEnum[UNSPECIFIED,NORMAL(普通),FIFO(顺序),DELAY(延迟),TRANSACTION(事务),UNRECOGNIZED(无法识别),code,desc]',
                                                    'description' => '主题的消息类型。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'TRANSACTION' => '事务消息',
                                                        'FIFO' => '顺序消息',
                                                        'DELAY' => '定时/延时消息',
                                                        'NORMAL' => '普通消息',
                                                    ],
                                                    'example' => 'NORMAL',
                                                    'enum' => [
                                                        'NORMAL',
                                                        'FIFO',
                                                        'DELAY',
                                                        'TRANSACTION',
                                                    ],
                                                ],
                                                'status' => [
                                                    'title' => 'Topic状态,TopicStatusEnum[CREATING(创建中),RUNNING(运行中),code,desc]',
                                                    'description' => '主题的状态。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'RUNNING' => '运行中',
                                                        'CREATING' => '创建中',
                                                    ],
                                                    'example' => 'RUNNING',
                                                    'enum' => [
                                                        'CREATING',
                                                        'RUNNING',
                                                    ],
                                                ],
                                                'remark' => [
                                                    'title' => '备注',
                                                    'description' => '主题的备注信息。',
                                                    'type' => 'string',
                                                    'example' => 'This is the remark for test.',
                                                ],
                                                'createTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 20:05:50',
                                                ],
                                                'updateTime' => [
                                                    'title' => '修改时间',
                                                    'description' => '主题的最后修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 20:05:50',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Topic.NotFound',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The topic cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'TopicName',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'topicName',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"pageNumber\\": 1,\\n    \\"pageSize\\": 3,\\n    \\"totalCount\\": 1,\\n    \\"list\\": [\\n      {\\n        \\"regionId\\": \\"cn-hangzhou\\",\\n        \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n        \\"topicName\\": \\"topic_test\\",\\n        \\"messageType\\": \\"NORMAL\\",\\n        \\"status\\": \\"RUNNING\\",\\n        \\"remark\\": \\"This is the remark for test.\\",\\n        \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n        \\"updateTime\\": \\"2022-08-01 20:05:50\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"Topic.NotFound\\",\\n  \\"message\\": \\"The topic cannot be found.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"TopicName\\",\\n  \\"dynamicMessage\\": \\"topicName\\"\\n}","type":"json"}]',
            'title' => '查询主题列表',
        ],
        'GetTopic' => [
            'summary' => '获取某个指定主题的详细信息。',
            'path' => '/instances/{instanceId}/topics/{topicName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待查询主题所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '主题名称',
                        'description' => '待查询主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'topic_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<TopicDTO>',
                        'description' => 'Result<TopicDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'regionId' => [
                                        'title' => '区域ID',
                                        'description' => '实例所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'instanceId' => [
                                        'title' => '实例ID',
                                        'description' => '主题所属实例的ID。',
                                        'type' => 'string',
                                        'example' => 'rmq-cn-7e22ody****',
                                    ],
                                    'topicName' => [
                                        'title' => 'Topic编码',
                                        'description' => '主题名称。',
                                        'type' => 'string',
                                        'example' => 'topic_test',
                                    ],
                                    'messageType' => [
                                        'title' => '消息类型,MessageTypeEnum[UNSPECIFIED,NORMAL(普通),FIFO(顺序),DELAY(延迟),TRANSACTION(事务),UNRECOGNIZED(无法识别),code,desc]',
                                        'description' => '主题的消息类型,。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- TRANSACTION：事务消息'."\n"
                                            .'- FIFO：顺序消息'."\n"
                                            .'- DELAY：定时/延时消息'."\n"
                                            .'- NORMAL：普通消息',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'TRANSACTION' => '事务消息',
                                            'FIFO' => '顺序消息',
                                            'DELAY' => '定时消息/延时消息',
                                            'NORMAL' => '普通消息',
                                        ],
                                        'example' => 'NORMAL',
                                        'enum' => [
                                            'NORMAL',
                                            'FIFO',
                                            'DELAY',
                                            'TRANSACTION',
                                        ],
                                    ],
                                    'status' => [
                                        'title' => '主题状态',
                                        'description' => '主题的状态。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- RUNNING：运行中'."\n"
                                            .'- CREATING：创建中',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'RUNNING' => '运行中',
                                            'CREATING' => '创建中',
                                        ],
                                        'example' => 'RUNNING',
                                        'enum' => [
                                            'CREATING',
                                            'RUNNING',
                                        ],
                                    ],
                                    'remark' => [
                                        'title' => '备注',
                                        'description' => '主题的备注信息。',
                                        'type' => 'string',
                                        'example' => 'This is the remark for test.'."\n",
                                    ],
                                    'createTime' => [
                                        'title' => '创建时间',
                                        'description' => '主题的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 20:05:50',
                                    ],
                                    'updateTime' => [
                                        'title' => '修改时间',
                                        'description' => '主题的最后修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 20:05:50',
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Topic.NotFound',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The topic cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'TopicName',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'topicName',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"regionId\\": \\"cn-hangzhou\\",\\n    \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n    \\"topicName\\": \\"topic_test\\",\\n    \\"messageType\\": \\"NORMAL\\",\\n    \\"status\\": \\"RUNNING\\",\\n    \\"remark\\": \\"This is the remark for test.\\\\n\\",\\n    \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n    \\"updateTime\\": \\"2022-08-01 20:05:50\\"\\n  },\\n  \\"code\\": \\"Topic.NotFound\\",\\n  \\"message\\": \\"The topic cannot be found.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"TopicName\\",\\n  \\"dynamicMessage\\": \\"topicName\\"\\n}","type":"json"}]',
            'title' => '获取指定主题的详情',
        ],
        'CreateConsumerGroup' => [
            'summary' => '创建云消息队列 RocketMQ 版的消费者分组（ConsumerGroup）。消费者分组是云消息队列 RocketMQ 版系统中承载多个消费行为一致的消费者的负载均衡分组。消费者需要通过指定消费者分组订阅相关的主题来实现消息订阅。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待创建的消费者分组所属的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '消费组ID',
                        'description' => '待创建的消费者分组的ID。用于标识消费者分组，全局唯一。'."\n"
                            ."\n"
                            .'取值说明如下：'."\n"
                            ."\n"
                            .'- 字符限制：支持字母a\\~z或A\\~Z、数字0\\~9以及下划线（_）、短划线（-）。'."\n"
                            .'- 长度限制：1~60个字符。'."\n"
                            ."\n"
                            .'保留字符限制，请参见[参数限制](~~440347~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GID_test_groupId',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体对象。',
                        'type' => 'object',
                        'properties' => [
                            'remark' => [
                                'title' => '备注',
                                'description' => '待创建消费者分组的备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                            'deliveryOrderType' => [
                                'title' => '投递顺序性',
                                'description' => '待创建消费者分组的投递顺序性。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- Concurrently：并发投递'."\n"
                                    .'- Orderly：顺序投递',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'Concurrently' => '并发投递',
                                    'Orderly' => '顺序投递',
                                ],
                                'example' => 'Concurrently',
                                'enum' => [
                                    'Orderly',
                                    'Concurrently',
                                ],
                            ],
                            'consumeRetryPolicy' => [
                                'title' => '消费重试策略',
                                'description' => '待创建消费者分组的消费重试策略。更多信息，请参见'."\n"
                                    .'[消费重试](~~440356~~)。',
                                'type' => 'object',
                                'properties' => [
                                    'maxRetryTimes' => [
                                        'title' => '最大重试次数',
                                        'description' => '最大重试次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '16',
                                    ],
                                    'retryPolicy' => [
                                        'title' => '重试策略类型',
                                        'description' => '重试策略类型。更多信息，请参见[消息重试](~~440356~~)。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- FixedRetryPolicy：固定间隔重试'."\n"
                                            .'- DefaultRetryPolicy：阶梯退避重试',
                                        'type' => 'string',
                                        'required' => true,
                                        'enumValueTitles' => [
                                            'FixedRetryPolicy' => '固定间隔重试',
                                            'DefaultRetryPolicy' => '阶梯退避重试',
                                        ],
                                        'example' => 'DefaultRetryPolicy',
                                        'enum' => [
                                            'DefaultRetryPolicy',
                                            'FixedRetryPolicy',
                                        ],
                                    ],
                                    'deadLetterTargetTopic' => [
                                        'description' => '死信Topic。'."\n"
                                            ."\n"
                                            .'消费者出现异常消费某条消息失败，且消息重试后依然未成功，消息将被投递至死信Topic中，以便后续进行业务恢复或回溯。更多信息，请参见[消费重试与死信](~~440356~~)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'DLQ_mqtest',
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidConsumerGroupId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter consumerGroupId is invalid.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'ConsumerGroupId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'consumerGroupId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"InvalidConsumerGroupId\\",\\n  \\"message\\": \\"Parameter consumerGroupId is invalid.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"ConsumerGroupId\\",\\n  \\"dynamicMessage\\": \\"consumerGroupId\\"\\n}","type":"json"}]',
            'title' => '创建消费者分组',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'UpdateConsumerGroup' => [
            'summary' => '更新消费者分组的基础信息和消费重试策略。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待更新消费者分组所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22on9****',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '消费组ID',
                        'description' => '待更新的消费者分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CID-TEST',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。',
                        'type' => 'object',
                        'properties' => [
                            'remark' => [
                                'title' => '备注',
                                'description' => '更新后的消费者分组的备注信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is the remark for test.',
                            ],
                            'deliveryOrderType' => [
                                'title' => '投递顺序性',
                                'description' => '更新后的消费者分组的投递顺序性。'."\n"
                                    ."\n"
                                    .'参数取值如下：'."\n"
                                    .'- Concurrently：并发投递'."\n"
                                    .'- Orderly：顺序投递',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'Concurrently' => '并发投递',
                                    'Orderly' => '顺序投递',
                                ],
                                'example' => 'Concurrently',
                                'enum' => [
                                    'Concurrently',
                                    'Orderly',
                                ],
                            ],
                            'consumeRetryPolicy' => [
                                'title' => '消费重试策略',
                                'description' => '更新后的消费者分组的消费重试策略。更多信息，请参见'."\n"
                                    .'[消费重试](~~440356~~)。',
                                'type' => 'object',
                                'properties' => [
                                    'retryPolicy' => [
                                        'title' => '重试策略类型',
                                        'description' => '重试策略类型。更多信息，请参见[消息重试](~~440356~~)。'."\n"
                                            ."\n"
                                            .'参数取值如下：'."\n"
                                            .'- FixedRetryPolicy：固定间隔重试'."\n"
                                            .'- DefaultRetryPolicy：阶梯退避重试',
                                        'type' => 'string',
                                        'required' => true,
                                        'enumValueTitles' => [
                                            'FixedRetryPolicy' => '固定间隔重试',
                                            'DefaultRetryPolicy' => '阶梯退避重试',
                                        ],
                                        'example' => 'DefaultRetryPolicy',
                                        'enum' => [
                                            'DefaultRetryPolicy',
                                            'FixedRetryPolicy',
                                        ],
                                    ],
                                    'maxRetryTimes' => [
                                        'title' => '最大重试次数',
                                        'description' => '最大重试次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '16',
                                    ],
                                    'deadLetterTargetTopic' => [
                                        'description' => '死信Topic。'."\n"
                                            ."\n"
                                            .'消费者出现异常消费某条消息失败，且消息重试后依然未成功，消息将被投递至死信Topic中，以便后续进行业务恢复或回溯。更多信息，请参见[消费重试与死信](~~440356~~)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'DLQ_mqtest',
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C7F94090-3358-506A-97DC-34BC803C****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidDeliveryOrderType',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter deliveryOrderType is invalid.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'DeliveryOrderType',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'deliveryOrderType',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"C7F94090-3358-506A-97DC-34BC803C****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"InvalidDeliveryOrderType\\",\\n  \\"message\\": \\"Parameter deliveryOrderType is invalid.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"DeliveryOrderType\\",\\n  \\"dynamicMessage\\": \\"deliveryOrderType\\"\\n}","type":"json"}]',
            'title' => '更新消费者分组',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'DeleteConsumerGroup' => [
            'summary' => '删除指定的消费者分组。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待删除的消费者分组所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '消费组ID',
                        'description' => '待删除的消费者分组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CID-TEST',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C7F94090-3358-506A-97DC-34BC803C****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidConsumerGroupId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter consumerGroupId is invalid.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'ConsumerGroupId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'consumerGroupId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"C7F94090-3358-506A-97DC-34BC803C****\\",\\n  \\"success\\": true,\\n  \\"data\\": true,\\n  \\"code\\": \\"InvalidConsumerGroupId\\",\\n  \\"message\\": \\"Parameter consumerGroupId is invalid.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"ConsumerGroupId\\",\\n  \\"dynamicMessage\\": \\"consumerGroupId\\"\\n}","type":"json"}]',
            'title' => '删除消费者分组',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>'."\n"
                ."\n"
                .'删除指定消费者分组后，由该消费者分组标识的消费者客户端将无法消费消息，请慎重调用本接口。',
        ],
        'ListConsumerGroups' => [
            'summary' => '查询指定实例下消费者分组的列表信息。',
            'path' => '/instances/{instanceId}/consumerGroups',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '指定需要获取哪个实例下的消费者分组列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'filter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '查询的过滤条件，若不输入则查询指定实例下所有的消费者分组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CID-TEST',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页页码',
                        'description' => '分页页码，查询第几页的返回结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100000000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小，每页最多显示的返回结果数量。'."\n"
                            ."\n"
                            .'取值范围：[10,100]。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<MyPage<ConsumerGroupDTO>>',
                        'description' => 'Result<MyPage<ConsumerGroupDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5503A460-98ED-5543-92CF-4853DE28****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'pageNumber' => [
                                        'title' => '当前页码',
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'pageSize' => [
                                        'title' => '分页大小',
                                        'description' => '分页大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'totalCount' => [
                                        'title' => '总记录数',
                                        'description' => '返回结果的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'list' => [
                                        'title' => '分页数据',
                                        'description' => '分页数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'regionId' => [
                                                    'title' => '区域ID',
                                                    'description' => '实例所属的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'instanceId' => [
                                                    'title' => '实例ID',
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'rmq-cn-7e22ody****',
                                                ],
                                                'consumerGroupId' => [
                                                    'title' => '消费组ID',
                                                    'description' => '消费者分组ID。',
                                                    'type' => 'string',
                                                    'example' => 'GID-TEST',
                                                ],
                                                'status' => [
                                                    'title' => '消费组状态',
                                                    'description' => '消费者分组的状态。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'RUNNING' => '运行中',
                                                        'CREATING' => '创建中',
                                                    ],
                                                    'example' => 'RUNNING',
                                                    'enum' => [
                                                        'CREATING',
                                                        'RUNNING',
                                                    ],
                                                ],
                                                'remark' => [
                                                    'title' => '备注',
                                                    'description' => '消费者分组的备注信息。',
                                                    'type' => 'string',
                                                    'example' => 'This is the remark for test.',
                                                ],
                                                'createTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '消费者分组的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 20:05:50',
                                                ],
                                                'updateTime' => [
                                                    'title' => '修改时间',
                                                    'description' => '消费者分组的最后更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01 20:05:50',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter InstanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"5503A460-98ED-5543-92CF-4853DE28****\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"pageNumber\\": 1,\\n    \\"pageSize\\": 10,\\n    \\"totalCount\\": 1,\\n    \\"list\\": [\\n      {\\n        \\"regionId\\": \\"cn-hangzhou\\",\\n        \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n        \\"consumerGroupId\\": \\"GID-TEST\\",\\n        \\"status\\": \\"RUNNING\\",\\n        \\"remark\\": \\"This is the remark for test.\\",\\n        \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n        \\"updateTime\\": \\"2022-08-01 20:05:50\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"Parameter InstanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '查询消费者分组列表',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'GetConsumerGroup' => [
            'summary' => '获取某个指定消费者分组的详细信息。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '待查询消费者分组所属的实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-7e22ody****',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '消费组ID',
                        'description' => '待查询消费者分组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CID-TEST',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<ConsumerGroupDTO>',
                        'description' => 'Result<ConsumerGroupDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，每个请求的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C7F94090-3358-506A-97DC-34BC803C****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '执行结果是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'regionId' => [
                                        'title' => '区域ID',
                                        'description' => '实例所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'instanceId' => [
                                        'title' => '实例ID',
                                        'description' => '消费者分组所属的实例的ID。',
                                        'type' => 'string',
                                        'example' => 'rmq-cn-7e22ody****',
                                    ],
                                    'consumerGroupId' => [
                                        'title' => '消费组ID',
                                        'description' => '消费者分组的ID。',
                                        'type' => 'string',
                                        'example' => 'CID-TEST',
                                    ],
                                    'status' => [
                                        'title' => '消费组状态',
                                        'description' => '消费者分组的状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'RUNNING' => '运行中',
                                            'CREATING' => '创建中',
                                        ],
                                        'example' => 'RUNNING',
                                        'enum' => [
                                            'CREATING',
                                            'RUNNING',
                                        ],
                                    ],
                                    'remark' => [
                                        'title' => '备注',
                                        'description' => '消费者分组的备注信息。',
                                        'type' => 'string',
                                        'example' => 'This is the remark for test.',
                                    ],
                                    'createTime' => [
                                        'title' => '创建时间',
                                        'description' => '消费者分组的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 20:05:50',
                                    ],
                                    'updateTime' => [
                                        'title' => '修改时间',
                                        'description' => '消费者分组的最后更新时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-01 20:05:50',
                                    ],
                                    'deliveryOrderType' => [
                                        'title' => '投递顺序性',
                                        'description' => '消费者分组的投递顺序性。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Concurrently' => '并发投递',
                                            'Orderly' => '顺序投递',
                                        ],
                                        'example' => 'Concurrently',
                                        'enum' => [
                                            'Orderly',
                                            'Concurrently',
                                        ],
                                    ],
                                    'consumeRetryPolicy' => [
                                        'title' => '消费重试策略',
                                        'description' => '消费者分组的消费重试策略。更多信息，请参见'."\n"
                                            .'[消费重试](~~440356~~)。',
                                        'type' => 'object',
                                        'properties' => [
                                            'retryPolicy' => [
                                                'title' => '重试策略类型',
                                                'description' => '重试策略类型。',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'FixedRetryPolicy' => '固定间隔重试',
                                                    'DefaultRetryPolicy' => '阶梯退避重试',
                                                ],
                                                'example' => 'DefaultRetryPolicy',
                                                'enum' => [
                                                    'DefaultRetryPolicy',
                                                    'FixedRetryPolicy',
                                                ],
                                            ],
                                            'maxRetryTimes' => [
                                                'title' => '最大重试次数',
                                                'description' => '最大重试次数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '16',
                                            ],
                                            'deadLetterTargetTopic' => [
                                                'description' => '死信Topic。'."\n"
                                                    ."\n"
                                                    .'消费者出现异常消费某条消息失败，且消息重试后依然未成功，消息将被投递至死信Topic中，以便后续进行业务恢复或回溯。更多信息，请参见[消费重试与死信](~~440356~~)。',
                                                'type' => 'string',
                                                'example' => 'DLQ_mqtest',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidConsumerGroupId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter consumerGroupId is invalid.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'ConsumerGroupId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'consumerGroupId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"C7F94090-3358-506A-97DC-34BC803C****\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"regionId\\": \\"cn-hangzhou\\",\\n    \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n    \\"consumerGroupId\\": \\"CID-TEST\\",\\n    \\"status\\": \\"RUNNING\\",\\n    \\"remark\\": \\"This is the remark for test.\\",\\n    \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n    \\"updateTime\\": \\"2022-08-01 20:05:50\\",\\n    \\"deliveryOrderType\\": \\"Concurrently\\",\\n    \\"consumeRetryPolicy\\": {\\n      \\"retryPolicy\\": \\"DefaultRetryPolicy\\",\\n      \\"maxRetryTimes\\": 16,\\n      \\"deadLetterTargetTopic\\": \\"DLQ_mqtest\\"\\n    }\\n  },\\n  \\"code\\": \\"InvalidConsumerGroupId\\",\\n  \\"message\\": \\"Parameter consumerGroupId is invalid.\\",\\n  \\"httpStatusCode\\": 400,\\n  \\"dynamicCode\\": \\"ConsumerGroupId\\",\\n  \\"dynamicMessage\\": \\"consumerGroupId\\"\\n}","type":"json"}]',
            'title' => '获取指定消费者分组详情',
            'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
        ],
        'ResetConsumeOffset' => [
            'summary' => '重置指定消费者分组的消费位点。重置消费位点是指改变订阅者当前的消费位置。当消费者出现故障或者消费错误数据时，您可通过重置消费位点将消费位置回滚到之前的某个位点重新开始消费，您也可以将消费位置移动至最新位点，暂时不处理堆积的消息。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}/consumeOffsets/{topicName}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '云消息队列 RocketMQ 版的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-tl32ue44x0g',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '消费者分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dolphin_status',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '消费者分组订阅的主题名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AMZN_REPORT_TOPIC',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体对象。',
                        'type' => 'object',
                        'properties' => [
                            'resetType' => [
                                'title' => '重置方式,ConsumeOffsetResetTypeEnum[LATEST_OFFSET(最新位点),SPECIFIED_TIME(指定时间),code,desc]',
                                'description' => '重置方式。'."\n"
                                    .'- CLATEST_OFFSET：从最新位点开始消费。'."\n"
                                    ."\n"
                                    .'   Group ID消费指定Topic中的消息时，会跳过当前堆积（未被消费）的所有消息，从重置操作时间后发送的最新消息开始消费。'."\n"
                                    .'- SPECIFIED_TIME：从指定时间的位点开始消费。'."\n"
                                    .'   '."\n"
                                    .'   - 消费者将从重置时间对应的消费位点之后的消息进行消费，不管这些消息是否已被消费过。'."\n"
                                    ."\n"
                                    .'  - 可选时间范围中的起始和终止时间分别是该Topic中储存的最早的和最晚的一条消息的生产时间，不能选择超过可选时间范围的时间点。'."\n"
                                    ."\n"
                                    .'   - 重置到某一时刻对应的消费位点，匹配位点时，服务端会根据自动匹配到该时刻最接近的消费位点。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'SPECIFIED_TIME' => '从指定时间的位点开始消费',
                                    'LATEST_OFFSET' => '从最新位点开始消费',
                                ],
                                'example' => 'LATEST_OFFSET',
                            ],
                            'resetTime' => [
                                'title' => '重置时间',
                                'description' => '指定重置时间。表示消费者将从该时间点对应的消费位点重新开始消费消息。'."\n"
                                    ."\n"
                                    .'仅当resetType（重置方式）选择SPECIFIED_TIME（指定时间）时需要填写该参数。'."\n"
                                    ."\n"
                                    .'格式为YYYY-MM-DD HH:mm:ss，例如：2023-11-23 10:00:00。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-03-22 12:17:08',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Void>',
                        'description' => 'Result<Void>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F9A95891-EAD4-5A2B-8A30-676CD18921AF',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'The instance cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F9A95891-EAD4-5A2B-8A30-676CD18921AF\\",\\n  \\"success\\": true,\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"The instance cannot be found.\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '重置消费位点',
        ],
        'ListConsumerGroupSubscriptions' => [
            'summary' => '查询指定消费者组的订阅关系。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}/subscriptions',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '云消息队列 RocketMQ 版的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-tl32wwz1r05',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '消费者分组ID，表示需要查询哪个消费者分组的订阅关系。'."\n"
                            ."\n"
                            .'若不输入，则查询指定实例下所有的消费者分组的订阅关系。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PRINT_RETRY_CONSUMER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<SubscriptionDTO>>',
                        'description' => 'Result<List<SubscriptionDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5F4D9D5F-625B-59FF-BD4F-DA8284575DB4',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '消费者组订阅关系列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'consumerGroupId' => [
                                            'title' => '消费者组',
                                            'description' => '消费者分组ID。',
                                            'type' => 'string',
                                            'example' => 'CID-TEST',
                                        ],
                                        'topicName' => [
                                            'title' => '订阅主题',
                                            'description' => '指定消费者分组订阅的主题。',
                                            'type' => 'string',
                                            'example' => 'topic_test',
                                        ],
                                        'messageModel' => [
                                            'title' => '消费模式,ConsumptionModelEnum[BROADCASTING(广播模式),CLUSTERING(集群模式),code,desc]',
                                            'description' => '消费者分组的消费模式。'."\n"
                                                .'- BROADCASTING：广播模式'."\n"
                                                .'- CLUSTERING：集群模式',
                                            'type' => 'string',
                                            'example' => 'CLUSTERING',
                                        ],
                                        'subscriptionStatus' => [
                                            'title' => '订阅状态,SubscriptionStatusEnum[ONLINE(在线),OFFLINE(离线),code,desc]',
                                            'description' => '订阅状态。'."\n"
                                                .'- ONLINE：在线。消费者分组下如果有多个消费者，只要有一个消费者在线则显订阅状态为在线。'."\n"
                                                .'- OFFLINE：离线。消费者分组下如果有多个消费者，所有消费者都处于离线时订阅状态才显示离线。',
                                            'type' => 'string',
                                            'example' => 'ONLINE',
                                        ],
                                        'filterExpression' => [
                                            'title' => '过滤表达式',
                                            'description' => '过滤表达式。',
                                            'type' => 'string',
                                            'example' => '*',
                                        ],
                                        'filterExpressionType' => [
                                            'title' => '过滤表达式类型,SubscriptionExpressionTypeEnum[SQL(SQL过滤),TAG(TAG过滤),UNSPECIFIED(FILTER_TYPE_UNSPECIFIED  过滤类型未指定),code,desc]',
                                            'description' => '过滤表达式类型。'."\n"
                                                .'- SQL：SQL过滤'."\n"
                                                .'- TAG：Tag过滤。',
                                            'type' => 'string',
                                            'example' => 'SQL',
                                        ],
                                        'topicCreated' => [
                                            'description' => '是否创建了topic。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'consistency' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"5F4D9D5F-625B-59FF-BD4F-DA8284575DB4\\",\\n  \\"success\\": true,\\n  \\"data\\": [\\n    {\\n      \\"consumerGroupId\\": \\"CID-TEST\\",\\n      \\"topicName\\": \\"topic_test\\",\\n      \\"messageModel\\": \\"CLUSTERING\\",\\n      \\"subscriptionStatus\\": \\"ONLINE\\",\\n      \\"filterExpression\\": \\"*\\",\\n      \\"filterExpressionType\\": \\"SQL\\",\\n      \\"topicCreated\\": true,\\n      \\"consistency\\": true\\n    }\\n  ],\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"InstanceId\\"\\n}","type":"json"}]',
            'title' => '查询消费者组订阅关系列表',
        ],
        'ListTopicSubscriptions' => [
            'summary' => '查询指定主题的订阅关系列表。',
            'path' => '/instances/{instanceId}/topics/{topicName}/subscriptions',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-zpr34udri0w',
                    ],
                ],
                [
                    'name' => 'topicName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '主题名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dev4-HMH_INSURANCE_NOMAL_TOPIC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<SubscriptionDTO>>',
                        'description' => 'Result<List<SubscriptionDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '92A9BE4E-B794-50C8-979C-0456E4D32943',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '主题订阅列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'consumerGroupId' => [
                                            'title' => '消费者组',
                                            'description' => '消费者组',
                                            'type' => 'string',
                                            'example' => 'CID-TEST',
                                        ],
                                        'topicName' => [
                                            'title' => '订阅主题',
                                            'description' => '订阅主题',
                                            'type' => 'string',
                                            'example' => 'topic_test',
                                        ],
                                        'messageModel' => [
                                            'title' => '消费模式,ConsumptionModelEnum[BROADCASTING(广播模式),CLUSTERING(集群模式),code,desc]',
                                            'description' => '消费模式,ConsumptionModelEnum[BROADCASTING(广播模式),CLUSTERING(集群模式),code,desc]',
                                            'type' => 'string',
                                            'example' => 'BROADCASTING',
                                        ],
                                        'subscriptionStatus' => [
                                            'title' => '订阅状态,SubscriptionStatusEnum[ONLINE(在线),OFFLINE(离线),code,desc]',
                                            'description' => '订阅状态,SubscriptionStatusEnum[ONLINE(在线),OFFLINE(离线),code,desc]',
                                            'type' => 'string',
                                            'example' => 'ONLINE',
                                        ],
                                        'filterExpression' => [
                                            'title' => '过滤表达式',
                                            'description' => '过滤表达式',
                                            'type' => 'string',
                                            'example' => '*',
                                        ],
                                        'filterExpressionType' => [
                                            'title' => '过滤表达式类型,SubscriptionExpressionTypeEnum[SQL(SQL过滤),TAG(TAG过滤),UNSPECIFIED(FILTER_TYPE_UNSPECIFIED  过滤类型未指定),code,desc]',
                                            'description' => '过滤表达式类型,SubscriptionExpressionTypeEnum[SQL(SQL过滤),TAG(TAG过滤),UNSPECIFIED(FILTER_TYPE_UNSPECIFIED  过滤类型未指定),code,desc]',
                                            'type' => 'string',
                                            'example' => 'SQL',
                                        ],
                                        'consistency' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'MissingInstanceId',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'The instance cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'Topic',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"92A9BE4E-B794-50C8-979C-0456E4D32943\\",\\n  \\"success\\": true,\\n  \\"data\\": [\\n    {\\n      \\"consumerGroupId\\": \\"CID-TEST\\",\\n      \\"topicName\\": \\"topic_test\\",\\n      \\"messageModel\\": \\"BROADCASTING\\",\\n      \\"subscriptionStatus\\": \\"ONLINE\\",\\n      \\"filterExpression\\": \\"*\\",\\n      \\"filterExpressionType\\": \\"SQL\\",\\n      \\"consistency\\": \\"\\"\\n    }\\n  ],\\n  \\"code\\": \\"MissingInstanceId\\",\\n  \\"message\\": \\"The instance cannot be found.\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"Topic\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '查询主题订阅关系列表',
        ],
        'ListRegions' => [
            'summary' => '查询地域列表。',
            'path' => '/regions',
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
                'operationType' => 'list',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<RegionDTO>>',
                        'description' => 'Result<List<RegionDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0B962390-D84B-5D44-8C11-79DF40299D41',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'regionId' => [
                                            'title' => 'regionId,类似 cn-hangzhou',
                                            'description' => 'regionId,类似 cn-hangzhou',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'regionName' => [
                                            'title' => '中文region，类似杭州',
                                            'description' => '中文region，类似杭州',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'supportRocketmqV5' => [
                                            'title' => '是否开通新服  v5版本',
                                            'description' => '是否开通新服  v5版本',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'supportRocketmqV4' => [
                                            'title' => '是否开通旧服  v4版本',
                                            'description' => '是否开通旧服  v4版本',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'createTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2022-08-01 20:05:50',
                                        ],
                                        'updateTime' => [
                                            'title' => '修改时间',
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2022-08-01 20:05:50',
                                        ],
                                        'tags' => [
                                            'description' => '地域标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '地域标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'tagCode' => [
                                                        'description' => '标签Code。',
                                                        'type' => 'string',
                                                        'example' => 'xx',
                                                    ],
                                                    'tagValue' => [
                                                        'description' => '标签的值。',
                                                        'type' => 'any',
                                                        'example' => 'xx',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'MissingPageNumber',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'ConsumerGroupId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0B962390-D84B-5D44-8C11-79DF40299D41\\",\\n  \\"success\\": true,\\n  \\"data\\": [\\n    {\\n      \\"regionId\\": \\"cn-hangzhou\\",\\n      \\"regionName\\": \\"杭州\\",\\n      \\"supportRocketmqV5\\": true,\\n      \\"supportRocketmqV4\\": true,\\n      \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n      \\"updateTime\\": \\"2022-08-01 20:05:50\\",\\n      \\"tags\\": [\\n        {\\n          \\"tagCode\\": \\"xx\\",\\n          \\"tagValue\\": \\"xx\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"code\\": \\"MissingPageNumber\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"ConsumerGroupId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '查询地域列表',
        ],
        'ListConsumerConnections' => [
            'summary' => '获取指定消费者客户端的连接信息。',
            'path' => '/instances/{instanceId}/consumerGroups/{consumerGroupId}/connections',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rmq-cn-uax32mf9h1f',
                    ],
                ],
                [
                    'name' => 'consumerGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '消费者分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GID_TEST_STOCK_OPEND_GW',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<ConsumerConnectionsDTO>',
                        'description' => 'Result<ConsumerConnectionsDTO>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A3620115-6F1F-5CFB-AA3F-BBD4853B2EC4',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'regionId' => [
                                        'title' => '区域ID',
                                        'description' => '区域ID',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'instanceId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => 'rmq-cn-7e22ody****',
                                    ],
                                    'consumerGroupId' => [
                                        'title' => '主题名称',
                                        'description' => '主题名称',
                                        'type' => 'string',
                                        'example' => 'CID-TEST',
                                    ],
                                    'connections' => [
                                        'title' => '客户端连接列表',
                                        'description' => '客户端连接列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '客户端连接列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'clientId' => [
                                                    'title' => '客户端ID',
                                                    'description' => '客户端ID',
                                                    'type' => 'string',
                                                    'example' => '172.17.135.197@17392#1936705963#551717232#9873695589062458',
                                                ],
                                                'hostname' => [
                                                    'title' => '客户端IP',
                                                    'description' => '客户端IP',
                                                    'type' => 'string',
                                                    'example' => 'vos',
                                                ],
                                                'egressIp' => [
                                                    'title' => '宿主机IP/公网出网IP',
                                                    'description' => '宿主机IP/公网出网IP',
                                                    'type' => 'string',
                                                    'example' => 'xx.xx.xx.xx',
                                                ],
                                                'language' => [
                                                    'title' => '客户端语言',
                                                    'description' => '客户端语言',
                                                    'type' => 'string',
                                                    'example' => 'java',
                                                ],
                                                'version' => [
                                                    'title' => '客户端版本',
                                                    'description' => '客户端版本',
                                                    'type' => 'string',
                                                    'example' => '1.0',
                                                ],
                                                'messageModel' => [
                                                    'title' => '消费模式,ConsumptionModelEnum[BROADCASTING(广播模式),CLUSTERING(集群模式),code,desc]',
                                                    'description' => '消费模式,ConsumptionModelEnum[BROADCASTING(广播模式),CLUSTERING(集群模式),code,desc]',
                                                    'type' => 'string',
                                                    'example' => 'BROADCASTING',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'MissingPageNumber',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'The instance cannot be found.',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'instanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A3620115-6F1F-5CFB-AA3F-BBD4853B2EC4\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"regionId\\": \\"cn-hangzhou\\",\\n    \\"instanceId\\": \\"rmq-cn-7e22ody****\\",\\n    \\"consumerGroupId\\": \\"CID-TEST\\",\\n    \\"connections\\": [\\n      {\\n        \\"clientId\\": \\"172.17.135.197@17392#1936705963#551717232#9873695589062458\\",\\n        \\"hostname\\": \\"vos\\",\\n        \\"egressIp\\": \\"xx.xx.xx.xx\\",\\n        \\"language\\": \\"java\\",\\n        \\"version\\": \\"1.0\\",\\n        \\"messageModel\\": \\"BROADCASTING\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"MissingPageNumber\\",\\n  \\"message\\": \\"The instance cannot be found.\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"instanceId\\"\\n}","type":"json"}]',
            'title' => '获取消费者客户端连接信息',
        ],
        'ListAvailableZones' => [
            'summary' => '查询支持的可用区。',
            'path' => '/zones',
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<ZoneDTO>>',
                        'description' => 'Result<List<ZoneDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'AF9A8B10-C426-530F-A0DD-96320B39****',
                            ],
                            'success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'data' => [
                                'title' => '返回结果',
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'zoneId' => [
                                            'title' => '可用区id',
                                            'description' => '可用区id',
                                            'type' => 'string',
                                            'example' => 'cn-qingdao-b',
                                        ],
                                        'zoneName' => [
                                            'title' => '可用区名称',
                                            'description' => '可用区名称',
                                            'type' => 'string',
                                            'example' => 'ha-cn-t9b30w902vm_qrs',
                                        ],
                                        'createTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2022-08-01 20:05:50',
                                        ],
                                        'updateTime' => [
                                            'title' => '修改时间',
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2022-08-01 20:05:50',
                                        ],
                                    ],
                                ],
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Topic.NotFound',
                            ],
                            'message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Parameter instanceId is mandatory for this action .',
                            ],
                            'httpStatusCode' => [
                                'title' => 'HTTP状态码',
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'dynamicCode' => [
                                'title' => '动态错误码',
                                'description' => '动态错误码',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                            'dynamicMessage' => [
                                'title' => '动态错误信息',
                                'description' => '动态错误信息',
                                'type' => 'string',
                                'example' => 'InstanceId',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AF9A8B10-C426-530F-A0DD-96320B39****\\",\\n  \\"success\\": true,\\n  \\"data\\": [\\n    {\\n      \\"zoneId\\": \\"cn-qingdao-b\\",\\n      \\"zoneName\\": \\"ha-cn-t9b30w902vm_qrs\\",\\n      \\"createTime\\": \\"2022-08-01 20:05:50\\",\\n      \\"updateTime\\": \\"2022-08-01 20:05:50\\"\\n    }\\n  ],\\n  \\"code\\": \\"Topic.NotFound\\",\\n  \\"message\\": \\"Parameter instanceId is mandatory for this action .\\",\\n  \\"httpStatusCode\\": 200,\\n  \\"dynamicCode\\": \\"InstanceId\\",\\n  \\"dynamicMessage\\": \\"InstanceId\\"\\n}","type":"json"}]',
            'title' => '查询支持的可用区',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'rocketmq.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'rocketmq.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'rocketmq.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'rocketmq.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'rocketmq.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'rocketmq.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'rocketmq.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'rocketmq.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'rocketmq.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'rocketmq.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'rocketmq.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'rocketmq.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'rocketmq.cn-guangzhou.aliyuncs.com	',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'rocketmq.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'rocketmq.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'rocketmq.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'rocketmq.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'rocketmq.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'rocketmq.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'rocketmq.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'rocketmq.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'rocketmq.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'rocketmq.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'rocketmq.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'rocketmq.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'rocketmq.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'rocketmq.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'rocketmq.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'rocketmq.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'rocketmq.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'rocketmq.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'rocketmq.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'rocketmq.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'rocketmq.me-central-1.aliyuncs.com',
        ],
    ],
];
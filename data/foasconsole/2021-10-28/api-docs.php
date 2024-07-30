<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'foasconsole',
        'version' => '2021-10-28',
    ],
    'directories' => [
        [
            'id' => 187194,
            'title' => '工作空间',
            'type' => 'directory',
            'children' => [
                'ModifyPrepayInstanceSpec',
                'QueryConvertInstancePrice',
                'QueryCreateInstancePrice',
                'QueryModifyInstancePrice',
                'QueryRenewInstancePrice',
                'DescribeSupportedZones',
                'DescribeSupportedRegions',
                'CreateInstance',
                'RenewInstance',
                'DescribeInstances',
                'DeleteInstance',
                'ConvertInstance',
            ],
        ],
        [
            'id' => 187189,
            'title' => '项目空间',
            'type' => 'directory',
            'children' => [
                'DescribeNamespaces',
                'ModifyPrepayNamespaceSpec',
                'DeleteNamespace',
                'CreateNamespace',
            ],
        ],
        [
            'id' => 187185,
            'title' => '资源标签',
            'type' => 'directory',
            'children' => [
                'ListTagResources',
                'TagResources',
                'TagResources',
                'UntagResources',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ModifyPrepayInstanceSpec' => [
            'summary' => '修改包年包月的flink全托管实例计算资源的规格大小，调整后规格小于当前使用规格将进行缩容操作，调整后规格大于当前使用规格将进行扩容操作。',
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
            'deprecated' => true,
            'systemTags' => [
                'abilityTreeCode' => '103205',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地域id',
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源规格信息。',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => 'CPU数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'MemoryGB' => [
                                'description' => '内存大小。'."\n"
                                    .'> 内存大小必须为CPU数量的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '4',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'HaZoneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaVSwitchIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MemoryGB' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'OrderId' => [
                                'title' => '订单id',
                                'description' => '订单id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '210406354690749',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'foasconsole::2021-10-28::ModifyInstanceSpec',
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"OrderId\\": 210406354690749,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '修改工作空间计算资源',
            'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/subscription)。**',
        ],
        'QueryConvertInstancePrice' => [
            'summary' => '您可以通过本API来查询按量付费实例转包年包月价格。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '104063',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期',
                        'description' => '订购周期，仅支持按年（Year）和月（Month）订购。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期数量',
                        'description' => '订购周期数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsAutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否自动续费',
                        'description' => '是否自动续费',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NamespaceResourceSpecs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '项目空间资源规格。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Namespace' => [
                                    'description' => '项目空间名称。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'lm-test-default',
                                ],
                                'ResourceSpec' => [
                                    'description' => '项目空间资源规格。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Cpu' => [
                                            'description' => 'CPU数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '6',
                                        ],
                                        'MemoryGB' => [
                                            'description' => '内存大小。单位：GB。'."\n"
                                                ."\n"
                                                .'> 内存大小必须为CPU数量大小的4倍。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '24',
                                        ],
                                    ],
                                    'required' => true,
                                ],
                            ],
                            'required' => true,
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PriceInfo' => [
                                'title' => '价格信息，包括价格和优惠规则。',
                                'description' => '价格信息，包括价格和优惠规则。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'title' => '货币单位。',
                                        'description' => '货币单位。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'DiscountAmount' => [
                                        'title' => '折扣',
                                        'description' => '折扣',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '655.2',
                                    ],
                                    'OriginalAmount' => [
                                        'title' => '原价',
                                        'description' => '原价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '4368',
                                    ],
                                    'TradeAmount' => [
                                        'title' => '最终价，为原价减去折扣。',
                                        'description' => '最终价，为原价减去折扣。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '3712.8',
                                    ],
                                    'Code' => [
                                        'title' => '错误码',
                                        'description' => '错误码',
                                        'type' => 'string',
                                        'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                                    ],
                                    'Message' => [
                                        'title' => '错误信息',
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => '存在未支付订单，请先支付或取消原有订单',
                                    ],
                                    'OptionalPromotions' => [
                                        'description' => '优惠券信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PromotionDesc' => [
                                                    'title' => '优惠券描述',
                                                    'description' => '优惠券描述',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                                                ],
                                                'PromotionName' => [
                                                    'title' => '优惠券名称',
                                                    'description' => '优惠券名称',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券',
                                                ],
                                                'PromotionOptionNo' => [
                                                    'title' => '优惠券编号',
                                                    'description' => '优惠券编号',
                                                    'type' => 'string',
                                                    'example' => '500011220010099',
                                                ],
                                                'Selected' => [
                                                    'description' => '是否选用优惠券，取值如下：'."\n"
                                                        ."\n"
                                                        .'- true：选用。'."\n"
                                                        ."\n"
                                                        .'- false：未选用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'title' => '活动规则。',
                                        'description' => '活动规则。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'title' => '活动规则描述。',
                                                    'description' => '活动规则描述。',
                                                    'type' => 'string',
                                                    'example' => '买满1年，立享官网价格8.5折优惠。',
                                                ],
                                                'RuleId' => [
                                                    'title' => '活动ID。',
                                                    'description' => '活动ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '587',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'StandPrice' => [
                                        'title' => '官网折扣价/直销合同折扣价',
                                        'description' => '官网折扣价/直销合同折扣价',
                                        'type' => 'string',
                                    ],
                                    'StandDiscountPrice' => [
                                        'title' => '基于官网折扣的优惠价格',
                                        'description' => '基于官网折扣的优惠价格',
                                        'type' => 'string',
                                    ],
                                    'IsContractActivity' => [
                                        'title' => '是否命中大客优惠',
                                        'description' => '是否命中大客优惠',
                                        'type' => 'boolean',
                                    ],
                                    'DepreciateInfo' => [
                                        'title' => '降价信息',
                                        'description' => '降价信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalStandAmount' => [
                                                'title' => '原始官网价总价',
                                                'description' => '原始官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapStandAmount' => [
                                                'title' => '降价后官网价总价',
                                                'description' => '降价后官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapRate' => [
                                                'title' => '降价比例',
                                                'description' => '降价比例',
                                                'type' => 'string',
                                            ],
                                            'MonthPrice' => [
                                                'title' => '折合月价',
                                                'description' => '折合月价',
                                                'type' => 'string',
                                            ],
                                            'StartTime' => [
                                                'title' => '降价开始时间',
                                                'description' => '降价开始时间',
                                                'type' => 'string',
                                            ],
                                            'IsShow' => [
                                                'title' => '是否展示降价幅度',
                                                'description' => '是否展示降价幅度',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询按量付费转包年包月价格',
        ],
        'QueryCreateInstancePrice' => [
            'summary' => '获取本账号购买工作空间的价格。',
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
                'abilityTreeCode' => '104066',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作空间名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rtc-e2e-test-post',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '付费类型，取值如下：'."\n"
                            ."\n"
                            .'- POST：按量付费。'."\n"
                            .'- PRE：包年包月。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PRE',
                        'enum' => [
                            'PRE',
                            'POST',
                        ],
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作空间所属的可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户的VPC ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-2ze9xoh8qyt1rnxfmfcdi',
                    ],
                ],
                [
                    'name' => 'VSwitchIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '虚拟交换机ID组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsw-uf6kkcjvzyayv5je6t72s',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源规格。',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => 'CPU数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '4',
                            ],
                            'MemoryGB' => [
                                'description' => '内存大小。'."\n"
                                    .'> 内存大小必须为CPU数量的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '16',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订购周期，包年包月实例仅支持按年（Year）和月（Month）订购，按量付费实例选择小时（Hour）。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Month' => 'Month',
                            'Year' => 'Year',
                            'Hour' => 'Hour',
                        ],
                        'example' => 'Month',
                        'enum' => [
                            'Year',
                            'Month',
                            'Day',
                            'Hour',
                        ],
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订购周期数量。'."\n"
                            .'> 当ChargeType配置为PRE时，Duration参数必填。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自动续费。取值：'."\n"
                            ."\n"
                            .'- **true**：自动续费'."\n"
                            .'- **false**：不自动续费（默认）'."\n"
                            ."\n"
                            .'>按量付费时，该参数无效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Storage',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '存储信息。',
                        'type' => 'object',
                        'properties' => [
                            'Oss' => [
                                'description' => 'OSS存储信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'description' => 'OSS的Bucket名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'quicktracing',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UsePromotionCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PromotionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                        'example' => '500041860100636',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ArchitectureType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'HaResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MemoryGB' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                            ],
                            'PriceInfo' => [
                                'title' => '价格信息，包括价格和优惠规则。',
                                'description' => '价格信息，包括价格和优惠规则。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'title' => '货币单位。',
                                        'description' => '货币单位。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'DiscountAmount' => [
                                        'title' => '折扣',
                                        'description' => '折扣',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '655.2',
                                    ],
                                    'OriginalAmount' => [
                                        'title' => '原价',
                                        'description' => '原价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '4368',
                                    ],
                                    'TradeAmount' => [
                                        'title' => '最终价，为原价减去折扣。',
                                        'description' => '最终价，为原价减去折扣。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '3712.8',
                                    ],
                                    'Code' => [
                                        'title' => '错误码',
                                        'description' => '错误码',
                                        'type' => 'string',
                                        'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                                    ],
                                    'Message' => [
                                        'title' => '错误信息',
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => '存在未支付订单，请先支付或取消原有订单',
                                    ],
                                    'OptionalPromotions' => [
                                        'description' => '优惠券组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '优惠券信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PromotionDesc' => [
                                                    'title' => '优惠券描述',
                                                    'description' => '优惠券描述',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                                                ],
                                                'PromotionName' => [
                                                    'title' => '优惠券名称',
                                                    'description' => '优惠券名称',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券',
                                                ],
                                                'PromotionOptionNo' => [
                                                    'title' => '优惠券编号',
                                                    'description' => '优惠券编号',
                                                    'type' => 'string',
                                                    'example' => '500011220010099',
                                                ],
                                                'Selected' => [
                                                    'description' => '是否选中优惠券。取值如下：'."\n"
                                                        .'- true：选中。'."\n"
                                                        .'- false：未选中。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'title' => '活动规则。',
                                        'description' => '活动规则。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '活动规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'title' => '活动规则描述。',
                                                    'description' => '活动规则描述。',
                                                    'type' => 'string',
                                                    'example' => '买满1年，立享官网价格8.5折优惠。',
                                                ],
                                                'RuleId' => [
                                                    'title' => '活动ID。',
                                                    'description' => '活动ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '587',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'StandPrice' => [
                                        'title' => '官网折扣价/直销合同折扣价',
                                        'description' => '官网折扣价/直销合同折扣价',
                                        'type' => 'string',
                                    ],
                                    'StandDiscountPrice' => [
                                        'title' => '基于官网折扣的优惠价格',
                                        'description' => '基于官网折扣的优惠价格',
                                        'type' => 'string',
                                    ],
                                    'IsContractActivity' => [
                                        'title' => '是否命中大客优惠',
                                        'description' => '是否命中大客优惠',
                                        'type' => 'boolean',
                                    ],
                                    'DepreciateInfo' => [
                                        'title' => '降价信息',
                                        'description' => '降价信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalStandAmount' => [
                                                'title' => '原始官网价总价',
                                                'description' => '原始官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapStandAmount' => [
                                                'title' => '降价后官网价总价',
                                                'description' => '降价后官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapRate' => [
                                                'title' => '降价比例',
                                                'description' => '降价比例',
                                                'type' => 'string',
                                            ],
                                            'MonthPrice' => [
                                                'title' => '折合月价',
                                                'description' => '折合月价',
                                                'type' => 'string',
                                            ],
                                            'StartTime' => [
                                                'title' => '降价开始时间',
                                                'description' => '降价开始时间',
                                                'type' => 'string',
                                            ],
                                            'IsShow' => [
                                                'title' => '是否展示降价幅度',
                                                'description' => '是否展示降价幅度',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询工作空间价格',
        ],
        'QueryModifyInstancePrice' => [
            'summary' => '您可以查询实例升降配时的价格。',
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
                'abilityTreeCode' => '104067',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地域id',
                        'description' => '地域id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源规格。',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => '变配后CPU数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '10',
                            ],
                            'MemoryGB' => [
                                'description' => '变配后内存大小。'."\n"
                                    ."\n"
                                    .'>内存大小必须为CPU数量的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '40',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'HaZoneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaVSwitchIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MemoryGB' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PriceInfo' => [
                                'title' => '价格信息，包括价格和优惠规则。',
                                'description' => '价格信息，包括价格和优惠规则。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'title' => '货币单位。',
                                        'description' => '货币单位。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'DiscountAmount' => [
                                        'title' => '折扣',
                                        'description' => '折扣',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '655.2',
                                    ],
                                    'OriginalAmount' => [
                                        'title' => '原价',
                                        'description' => '原价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '4368',
                                    ],
                                    'TradeAmount' => [
                                        'title' => '最终价，为原价减去折扣。',
                                        'description' => '最终价，为原价减去折扣。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '3712.8',
                                    ],
                                    'Code' => [
                                        'title' => '错误码',
                                        'description' => '错误码',
                                        'type' => 'string',
                                        'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                                    ],
                                    'Message' => [
                                        'title' => '错误信息',
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => '存在未支付订单，请先支付或取消原有订单',
                                    ],
                                    'OptionalPromotions' => [
                                        'description' => '优惠券组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '优惠券信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PromotionDesc' => [
                                                    'title' => '优惠券描述',
                                                    'description' => '优惠券描述',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                                                ],
                                                'PromotionName' => [
                                                    'title' => '优惠券名称',
                                                    'description' => '优惠券名称',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券',
                                                ],
                                                'PromotionOptionNo' => [
                                                    'title' => '优惠券编号',
                                                    'description' => '优惠券编号',
                                                    'type' => 'string',
                                                    'example' => '500011220010099',
                                                ],
                                                'Selected' => [
                                                    'description' => '是否选用优惠券。取值如下：'."\n"
                                                        ."\n"
                                                        .'- true：选用。'."\n"
                                                        ."\n"
                                                        .'- false：未选用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'title' => '活动规则。',
                                        'description' => '活动规则组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '活动规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'title' => '活动规则描述。',
                                                    'description' => '活动规则描述。',
                                                    'type' => 'string',
                                                    'example' => '买满1年，立享官网价格8.5折优惠。',
                                                ],
                                                'RuleId' => [
                                                    'title' => '活动ID。',
                                                    'description' => '活动ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '587',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'StandPrice' => [
                                        'title' => '官网折扣价/直销合同折扣价',
                                        'description' => '官网折扣价/直销合同折扣价',
                                        'type' => 'string',
                                    ],
                                    'StandDiscountPrice' => [
                                        'title' => '基于官网折扣的优惠价格',
                                        'description' => '基于官网折扣的优惠价格',
                                        'type' => 'string',
                                    ],
                                    'IsContractActivity' => [
                                        'title' => '是否命中大客优惠',
                                        'description' => '是否命中大客优惠',
                                        'type' => 'boolean',
                                    ],
                                    'DepreciateInfo' => [
                                        'title' => '降价信息',
                                        'description' => '降价信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalStandAmount' => [
                                                'title' => '原始官网价总价',
                                                'description' => '原始官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapStandAmount' => [
                                                'title' => '降价后官网价总价',
                                                'description' => '降价后官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapRate' => [
                                                'title' => '降价比例',
                                                'description' => '降价比例',
                                                'type' => 'string',
                                            ],
                                            'MonthPrice' => [
                                                'title' => '折合月价',
                                                'description' => '折合月价',
                                                'type' => 'string',
                                            ],
                                            'StartTime' => [
                                                'title' => '降价开始时间',
                                                'description' => '降价开始时间',
                                                'type' => 'string',
                                            ],
                                            'IsShow' => [
                                                'title' => '是否展示降价幅度',
                                                'description' => '是否展示降价幅度',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询变配价格',
        ],
        'QueryRenewInstancePrice' => [
            'summary' => '您可以查询续费一个包年包月工作空间的价格。',
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
                'abilityTreeCode' => '104068',
                'abilityTreeNodes' => [
                    'FEATUREscYN6NTL',
                    'FEATUREscTKD5I3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地域id',
                        'description' => '地域id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例id',
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sc_flinkserverless_public_cn-7e22ae5sess',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期数量',
                        'description' => '订购周期数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期',
                        'description' => '订购周期',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Month',
                        'enum' => [
                            'Year',
                            'Month',
                            'Day',
                            'Hour',
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PriceInfo' => [
                                'title' => '价格信息，包括价格和优惠规则。',
                                'description' => '价格信息，包括价格和优惠规则。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'title' => '货币单位。',
                                        'description' => '货币单位。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'DiscountAmount' => [
                                        'title' => '折扣',
                                        'description' => '折扣',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '655.2',
                                    ],
                                    'OriginalAmount' => [
                                        'title' => '原价',
                                        'description' => '原价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '4368',
                                    ],
                                    'TradeAmount' => [
                                        'title' => '最终价，为原价减去折扣。',
                                        'description' => '最终价，为原价减去折扣。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '3712.8',
                                    ],
                                    'Code' => [
                                        'title' => '错误码',
                                        'description' => '错误码',
                                        'type' => 'string',
                                        'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                                    ],
                                    'Message' => [
                                        'title' => '错误信息',
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => '存在未支付订单，请先支付或取消原有订单',
                                    ],
                                    'OptionalPromotions' => [
                                        'description' => '优惠券组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '优惠券信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PromotionDesc' => [
                                                    'title' => '优惠券描述',
                                                    'description' => '优惠券描述',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                                                ],
                                                'PromotionName' => [
                                                    'title' => '优惠券名称',
                                                    'description' => '优惠券名称',
                                                    'type' => 'string',
                                                    'example' => '￥1,391.5 优惠券',
                                                ],
                                                'PromotionOptionNo' => [
                                                    'title' => '优惠券编号',
                                                    'description' => '优惠券编号',
                                                    'type' => 'string',
                                                    'example' => '500011220010099',
                                                ],
                                                'Selected' => [
                                                    'description' => '是否选用优惠券。取值如下：'."\n"
                                                        ."\n"
                                                        .'- true：选用。'."\n"
                                                        ."\n"
                                                        .'- false：未选用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'title' => '活动规则。',
                                        'description' => '活动规则组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '活动规则',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'title' => '活动规则描述。',
                                                    'description' => '活动规则描述。',
                                                    'type' => 'string',
                                                    'example' => '买满1年，立享官网价格8.5折优惠。',
                                                ],
                                                'RuleId' => [
                                                    'title' => '活动ID。',
                                                    'description' => '活动ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '587',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'StandPrice' => [
                                        'title' => '官网折扣价/直销合同折扣价',
                                        'description' => '官网折扣价/直销合同折扣价',
                                        'type' => 'string',
                                    ],
                                    'StandDiscountPrice' => [
                                        'title' => '基于官网折扣的优惠价格',
                                        'description' => '基于官网折扣的优惠价格',
                                        'type' => 'string',
                                    ],
                                    'IsContractActivity' => [
                                        'title' => '是否命中大客优惠',
                                        'description' => '是否命中大客优惠',
                                        'type' => 'boolean',
                                    ],
                                    'DepreciateInfo' => [
                                        'title' => '降价信息',
                                        'description' => '降价信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalStandAmount' => [
                                                'title' => '原始官网价总价',
                                                'description' => '原始官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapStandAmount' => [
                                                'title' => '降价后官网价总价',
                                                'description' => '降价后官网价总价',
                                                'type' => 'string',
                                            ],
                                            'CheapRate' => [
                                                'title' => '降价比例',
                                                'description' => '降价比例',
                                                'type' => 'string',
                                            ],
                                            'MonthPrice' => [
                                                'title' => '折合月价',
                                                'description' => '折合月价',
                                                'type' => 'string',
                                            ],
                                            'StartTime' => [
                                                'title' => '降价开始时间',
                                                'description' => '降价开始时间',
                                                'type' => 'string',
                                            ],
                                            'IsShow' => [
                                                'title' => '是否展示降价幅度',
                                                'description' => '是否展示降价幅度',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询工作空间续费价格',
        ],
        'DescribeSupportedZones' => [
            'summary' => '您可以获取支持购买的可用区信息。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '104071',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'regionId',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ArchitectureType',
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
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '23A9C718-DDAB-1696-B025-18FBC830F7C5',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'description' => '可用区个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageIndex' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页包含的条目数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ZoneIds' => [
                                'description' => '可用区信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-beijing-g',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23A9C718-DDAB-1696-B025-18FBC830F7C5\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 8,\\n  \\"TotalPage\\": 1,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"ZoneIds\\": [\\n    \\"cn-beijing-g\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取Flink全托管支持的可用区',
        ],
        'DescribeSupportedRegions' => [
            'summary' => '您可以获取支持购买的地域信息。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '104070',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B21DC47E-8928-199A-9F32-36D45E4693B4',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'description' => '返回的地域数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageIndex' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页包含的地域数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Regions' => [
                                'description' => '地域信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Region' => [
                                            'title' => 'regionId',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                        'RegionName' => [
                                            'title' => 'region名称',
                                            'description' => '地域名称',
                                            'type' => 'string',
                                            'example' => '华北2（北京）',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B21DC47E-8928-199A-9F32-36D45E4693B4\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 10,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Regions\\": [\\n    {\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"RegionName\\": \\"华北2（北京）\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取Flink全托管支持购买的地域',
        ],
        'CreateInstance' => [
            'summary' => '创建一个包年包月或者按量付费flink全托管工作空间。',
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
                'abilityTreeCode' => '103204',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rtc-e2e-test-pre',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '付费类型，取值如下：'."\n"
                            .'- POST：按量付费'."\n"
                            .'- PRE：包年包月',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PRE',
                        'enum' => [
                            'PRE',
                            'POST',
                        ],
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作空间所属的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing-g',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专有网络VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-2ze9xoh8qyt1rnxfmfcdi',
                    ],
                ],
                [
                    'name' => 'VSwitchIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '虚拟交换机ID组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'vsw-m5esz02px6qxiu28x7c2i',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源规格。'."\n"
                            ."\n"
                            .'> 当ChargeType配置为PRE时，资源规格参数必填。',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => 'CPU数量。'."\n"
                                    .'> - 在包年包月的工作空间下，CPU数量必填。在按量付费的工作空间下，可以不用填写CPU数量。- 创建的目标项目空间的CPU数量要小于工作空间中剩余CPU数量（工作空间购买的总CPU数量减去其他项目空间已分配CPU数量），否则会报错。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '30',
                            ],
                            'MemoryGB' => [
                                'description' => '内存大小。单位为GB。'."\n"
                                    ."\n"
                                    .'> 内存大小必须为CPU数量的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '120',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定预付费实例为包年或包月类型，取值范围如下：'."\n"
                            ."\n"
                            .'- **year**：年'."\n"
                            .'- **month**：月'."\n"
                            ."\n"
                            .'> 若付费类型为PrePaid，该参数为必传参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                        'enum' => [
                            'Year',
                            'Month',
                            'Day',
                            'Hour',
                        ],
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订购周期数量。'."\n"
                            ."\n"
                            .'> 当ChargeType配置为PRE时，Duration参数必填。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自动续费。取值：'."\n"
                            ."\n"
                            .'- **true**：自动续费'."\n"
                            .'- **false**：不自动续费（默认）'."\n"
                            ."\n"
                            .'>按量付费时，该参数无效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Storage',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '存储参数。',
                        'type' => 'object',
                        'properties' => [
                            'Oss' => [
                                'description' => 'OSS存储。',
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'description' => 'OSS的Bucket名称。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'oss-flink-cn-shanghai-260343971602724445',
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UsePromotionCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PromotionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '500043499350689',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ArchitectureType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '优惠券code',
                        'description' => '优惠券code',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'HaZoneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaVSwitchIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HaResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MemoryGB' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MonitorType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'json',
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
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
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
                                'title' => '请求id',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'OrderInfo' => [
                                'title' => '订单信息',
                                'description' => '订单信息。',
                                'type' => 'object',
                                'properties' => [
                                    'OrderId' => [
                                        'title' => '订单id',
                                        'description' => '订单id。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '210406354694567',
                                    ],
                                    'InstanceId' => [
                                        'title' => '实例id',
                                        'description' => '订单实例id。',
                                        'type' => 'string',
                                        'example' => 'f-cn-zvp2q0zik06',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"OrderInfo\\": {\\n    \\"OrderId\\": 210406354694567,\\n    \\"InstanceId\\": \\"f-cn-zvp2q0zik06\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建flink全托管工作空间',
            'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/billing-overview)**',
        ],
        'RenewInstance' => [
            'summary' => '续费一个包年包月flink全托管工作空间。',
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
                'abilityTreeCode' => '103206',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地域id',
                        'description' => '地域id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例id',
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sc_flinkserverless_public_cn-7e22ae5sess',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期数量',
                        'description' => '订购周期数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期',
                        'description' => '订购周期',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Month',
                        'enum' => [
                            'Year',
                            'Month',
                            'Day',
                            'Hour',
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'OrderId' => [
                                'title' => 'orderId',
                                'description' => 'orderId',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '210406354690749',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"OrderId\\": 210406354690749,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '续费flink全托管工作空间',
            'description' => '**请确保在使用该接口前，已充分了解flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/renewal-policy)**',
        ],
        'DescribeInstances' => [
            'summary' => '查询一个或多个flink全托管工作空间的详细信息。',
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
                'abilityTreeCode' => '103207',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数，最大值为100行。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '付款类型',
                        'description' => '付款类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PRE',
                        'enum' => [
                            'PRE',
                            'POST',
                        ],
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '实例的标签集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例标签',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'description' => '标签的值。'."\n"
                                        .'长度限制为 64 Unicode 字符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ys',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ArchitectureType',
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
                                'description' => '总实例数目',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '15',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageIndex' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页属性，每页多少实例',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C8DF2A5B-6FBA-5651-A3D4-960F36640E6B',
                            ],
                            'Success' => [
                                'description' => '是否成功，取值如下：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Instances' => [
                                'description' => '实例组详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceCreateTime' => [
                                            'description' => '实例创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1629879567394',
                                        ],
                                        'ResourceExpiredTime' => [
                                            'title' => '超期时间',
                                            'description' => '超期时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637337600000',
                                        ],
                                        'Region' => [
                                            'description' => '实例所属地区',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                        'ZoneId' => [
                                            'description' => '实例所属的可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-beijing-g',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络id',
                                            'type' => 'string',
                                            'example' => 'vpc-2ze9*******nxfmfcdi',
                                        ],
                                        'VSwitchIds' => [
                                            'description' => '虚拟交换机ID组。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '虚拟交换机ID。',
                                                'type' => 'string',
                                                'example' => 'vsw-2ze6yqnc19*****psjj0j',
                                            ],
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'f-cn-zvp2q0zik06',
                                        ],
                                        'ChargeType' => [
                                            'description' => '付费类型，取值如下：'."\n"
                                                .'- POST：按量付费'."\n"
                                                .'- PRE：包年包月',
                                            'type' => 'string',
                                            'example' => 'PRE',
                                        ],
                                        'InstanceName' => [
                                            'description' => '工作空间名称。',
                                            'type' => 'string',
                                            'example' => 'vvp1',
                                        ],
                                        'Uid' => [
                                            'description' => '实例所属用户ID。',
                                            'type' => 'string',
                                            'example' => '1838996687368452',
                                        ],
                                        'OrderState' => [
                                            'description' => '订单状态，取值如下：'."\n"
                                                .'- NOT_INIT：下单还未部署组件。'."\n"
                                                .'- NORMAL：正常状态。'."\n"
                                                .'- CEASE：过期状态。'."\n"
                                                .'- RELEASE：超期状态。',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'b3690a1655da47',
                                        ],
                                        'Storage' => [
                                            'description' => '存储信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Oss' => [
                                                    'description' => 'OSS存储信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Bucket' => [
                                                            'description' => 'OSS的Bucket名称。',
                                                            'type' => 'string',
                                                            'example' => 'oss_flink',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceSpec' => [
                                            'description' => '资源规格信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Cpu' => [
                                                    'description' => 'CPU数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'MemoryGB' => [
                                                    'description' => '设置的内存数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '40',
                                                ],
                                            ],
                                        ],
                                        'ClusterStatus' => [
                                            'description' => '集群状态，取值如下：'."\n"
                                                .'-  CREATING：创建中。'."\n"
                                                .'-  RUNNING：运行中。'."\n"
                                                .'-  DISABLE：无效。'."\n"
                                                .'-  DELETING：删除中。'."\n"
                                                .'-  DELETED：已删除。',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'Tags' => [
                                            'title' => '资源列表',
                                            'description' => '标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签键',
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                        'example' => 'flink',
                                                    ],
                                                    'Value' => [
                                                        'title' => '标签值',
                                                        'description' => '标签值',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AskClusterId' => [
                                            'type' => 'string',
                                        ],
                                        'ResourceGroupId' => [
                                            'type' => 'string',
                                        ],
                                        'HostAliases' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Ip' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'HostNames' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'string',
                                                        ],
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                            'required' => true,
                                        ],
                                        'ArchitectureType' => [
                                            'type' => 'string',
                                        ],
                                        'Ha' => [
                                            'type' => 'boolean',
                                        ],
                                        'HaZoneId' => [
                                            'type' => 'string',
                                        ],
                                        'HaVSwitchIds' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'HaResourceSpec' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Cpu' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'MemoryGB' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                            ],
                                        ],
                                        'MonitorType' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 15,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"C8DF2A5B-6FBA-5651-A3D4-960F36640E6B\\",\\n  \\"Success\\": true,\\n  \\"Instances\\": [\\n    {\\n      \\"ResourceCreateTime\\": 1629879567394,\\n      \\"ResourceExpiredTime\\": 1637337600000,\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"ZoneId\\": \\"cn-beijing-g\\",\\n      \\"VpcId\\": \\"vpc-2ze9*******nxfmfcdi\\",\\n      \\"VSwitchIds\\": [\\n        \\"vsw-2ze6yqnc19*****psjj0j\\"\\n      ],\\n      \\"InstanceId\\": \\"f-cn-zvp2q0zik06\\",\\n      \\"ChargeType\\": \\"PRE\\",\\n      \\"InstanceName\\": \\"vvp1\\",\\n      \\"Uid\\": \\"1838996687368452\\",\\n      \\"OrderState\\": \\"NORMAL\\",\\n      \\"ResourceId\\": \\"b3690a1655da47\\",\\n      \\"Storage\\": {\\n        \\"Oss\\": {\\n          \\"Bucket\\": \\"oss_flink\\"\\n        }\\n      },\\n      \\"ResourceSpec\\": {\\n        \\"Cpu\\": 10,\\n        \\"MemoryGB\\": 40\\n      },\\n      \\"ClusterStatus\\": \\"RUNNING\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"flink\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"AskClusterId\\": \\"\\",\\n      \\"ResourceGroupId\\": \\"\\",\\n      \\"HostAliases\\": [\\n        {\\n          \\"Ip\\": \\"\\",\\n          \\"HostNames\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"ArchitectureType\\": \\"\\",\\n      \\"Ha\\": true,\\n      \\"HaZoneId\\": \\"\\",\\n      \\"HaVSwitchIds\\": [\\n        \\"\\"\\n      ],\\n      \\"HaResourceSpec\\": {\\n        \\"Cpu\\": 0,\\n        \\"MemoryGB\\": 0\\n      },\\n      \\"MonitorType\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看已购买Flink全托管工作空间',
        ],
        'DeleteInstance' => [
            'summary' => '释放按量付费的flink全托管工作空间。',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '103202',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '释放按量付费Flink全托管工作空间',
            'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/refund-policy)**',
        ],
        'ConvertInstance' => [
            'summary' => '您可以将按量付费的工作空间转换为包年包月的工作空间。',
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
                'abilityTreeCode' => '104041',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期',
                        'description' => '订购周期',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订购周期数量',
                        'description' => '订购周期数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsAutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否自动续费',
                        'description' => '是否自动续费',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NamespaceResourceSpecs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '项目空间资源规格。',
                        'description' => '项目空间资源规格。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Namespace' => [
                                    'title' => 'namespace名称，',
                                    'description' => 'namespace名称。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'ns-1',
                                ],
                                'ResourceSpec' => [
                                    'title' => '资源规格。',
                                    'description' => '资源规格。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Cpu' => [
                                            'title' => 'cpu数量。',
                                            'description' => 'cpu数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '1',
                                        ],
                                        'MemoryGB' => [
                                            'title' => '内存大小。',
                                            'description' => '内存大小。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '4',
                                        ],
                                    ],
                                    'required' => true,
                                ],
                            ],
                            'required' => true,
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
                                'title' => '请求id',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'OrderId' => [
                                'title' => '订单id',
                                'description' => '订单id。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '211473228320700',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"OrderId\\": 211473228320700\\n}","type":"json"}]',
            'title' => '按量付费转包年包月',
            'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/switch-from-pay-as-you-go-to-subscription)。**',
        ],
        'DescribeNamespaces' => [
            'summary' => '您可以调用DescribeNamespaces查询某实例下的项目空间信息。',
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
                'abilityTreeCode' => '103229',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'regionId',
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例id',
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间名称',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'di-590843445844225',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Flink',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页数',
                        'description' => '当前页数',
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
                        'title' => '每页大小',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageIndex' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '设置的每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Namespaces' => [
                                'description' => '项目空间列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '项目空间的信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Namespace' => [
                                            'description' => '项目空间的名称。',
                                            'type' => 'string',
                                            'example' => 'ns-1',
                                        ],
                                        'Status' => [
                                            'description' => '项目空间的状态，取值如下：'."\n"
                                                .'- CREATING：正在创建。'."\n"
                                                .'- DELETING：正在删除。'."\n"
                                                .'- MODIFYING：正在修改资源规格。'."\n"
                                                .'- SUCCESS：上一个操作执行成功。'."\n"
                                                .'- FAILED：上一个操作执行失败。',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1629879567394',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1629879567394',
                                        ],
                                        'ResourceSpec' => [
                                            'description' => '资源规格信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Cpu' => [
                                                    'description' => 'CPU数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'MemoryGB' => [
                                                    'description' => '内存大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '40',
                                                ],
                                            ],
                                        ],
                                        'ResourceUsed' => [
                                            'description' => '已使用的资源。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Cpu' => [
                                                    'description' => '已使用的CPU数量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '2',
                                                ],
                                                'MemoryGB' => [
                                                    'description' => '已使用的内存数量。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '4',
                                                ],
                                                'Cu' => [
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                ],
                                            ],
                                        ],
                                        'Tags' => [
                                            'title' => '资源列表',
                                            'description' => '标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签键',
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                        'example' => 'flink',
                                                    ],
                                                    'Value' => [
                                                        'title' => '标签值',
                                                        'description' => '标签值',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Ha' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 5,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Namespaces\\": [\\n    {\\n      \\"Namespace\\": \\"ns-1\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"GmtCreate\\": 1629879567394,\\n      \\"GmtModified\\": 1629879567394,\\n      \\"ResourceSpec\\": {\\n        \\"Cpu\\": 10,\\n        \\"MemoryGB\\": 40\\n      },\\n      \\"ResourceUsed\\": {\\n        \\"Cpu\\": 2,\\n        \\"MemoryGB\\": 4,\\n        \\"Cu\\": 0\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"flink\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"Ha\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看项目空间详情',
        ],
        'ModifyPrepayNamespaceSpec' => [
            'summary' => '修改包年包月实例下项目空间的规格。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '103228',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'di-593440219799842',
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '项目空间资源详情',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => 'CPU数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'MemoryGB' => [
                                'description' => '内存大小。单位：GB。'."\n"
                                    ."\n"
                                    .'> 内存大小必须为CPU数量大小的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '4',
                            ],
                        ],
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
                                'title' => '请求id',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功，取值如下：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'foasconsole::2021-10-28::ModifyNamespaceSpec',
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '修改项目空间资源',
        ],
        'DeleteNamespace' => [
            'summary' => '删除项目空间。',
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
                'abilityTreeCode' => '103227',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'namespace名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'di-593439443804417',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => '是否成功',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除项目空间',
        ],
        'CreateNamespace' => [
            'summary' => '在flink全托管实例中下创建项目空间。',
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
                'abilityTreeCode' => '103226',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '订单实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-cn-wwo36qj4g06',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'namespace名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'di-593440390152545',
                    ],
                ],
                [
                    'name' => 'ResourceSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源规格。',
                        'type' => 'object',
                        'properties' => [
                            'Cpu' => [
                                'description' => 'CPU数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '30',
                            ],
                            'MemoryGB' => [
                                'description' => '内存大小。单位为GB。'."\n"
                                    ."\n"
                                    .'> 内存数量必须为CPU数量的4倍。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '120',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ha',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
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
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => '是否成功',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建项目空间',
        ],
        'ListTagResources' => [
            'summary' => '您可以调用ListTagResources查询资源标签。您可以通过标签的value查询key值，或者通过key值查询value，也可以获取您在flink全托管工作空间上使用的所有标签信息。',
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
                'abilityTreeCode' => '146254',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '27AE00',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型，固定值vvpinstance。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vvpinstance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '订单实例ID组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'f-cn-7pp2m9w7s06',
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
                            'description' => '标签键值对数组。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0E5D17CE-BD83-5DC9-8CD2-3C40C2F7A135',
                            ],
                            'TagReponseId' => [
                                'description' => 'tag请求ID。',
                                'type' => 'string',
                                'example' => '87AE00',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => '27AE00',
                            ],
                            'TagResources' => [
                                'title' => '资源列表',
                                'description' => '资源绑定的标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签资源组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'title' => '资源类型',
                                            'description' => '资源类型，固定值为vvpinstance。',
                                            'type' => 'string',
                                            'example' => 'vvpinstance',
                                        ],
                                        'TagValue' => [
                                            'title' => '标签值',
                                            'description' => '标签值',
                                            'type' => 'string',
                                            'example' => 'tag',
                                        ],
                                        'ResourceId' => [
                                            'title' => '资源ID',
                                            'description' => '订单实例ID。',
                                            'type' => 'string',
                                            'example' => 'f-cn-tyts',
                                        ],
                                        'TagKey' => [
                                            'title' => '标签键',
                                            'description' => '标签键',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0E5D17CE-BD83-5DC9-8CD2-3C40C2F7A135\\",\\n  \\"TagReponseId\\": \\"87AE00\\",\\n  \\"NextToken\\": \\"27AE00\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"vvpinstance\\",\\n      \\"TagValue\\": \\"tag\\",\\n      \\"ResourceId\\": \\"f-cn-tyts\\",\\n      \\"TagKey\\": \\"test\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看Flink全托管工作空间标签列表',
        ],
        'TagResources' => [
            'summary' => '您可以调用本API创建资源标签。',
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'update',
                'abilityTreeCode' => '146252',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
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
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型，固定值为vvpinstance。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vvpinstance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '订单实例ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'f-cn-7e22rg',
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
                            'description' => '资源标签',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
                            ],
                            'Success' => [
                                'description' => '是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TagResponseId' => [
                                'description' => 'tag请求ID。',
                                'type' => 'string',
                                'example' => '154FT',
                            ],
                            'Message' => [
                                'description' => '请求信息。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"TagResponseId\\": \\"154FT\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
            'title' => '创建资源标签',
        ],
        'UntagResources' => [
            'summary' => '您可以调用UntagResources删除资源标签。',
            'methods' => [
                'post',
                'get',
            ],
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
                'abilityTreeCode' => '146253',
                'abilityTreeNodes' => [
                    'FEATUREscTV6RL6',
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
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型，固定值为vvpinstance。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vvpinstance',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'description' => '是否全部删除资源标签，只针对TagKey为空时有效。默认是false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID，最多50个子项',
                        'description' => '订单实例ID组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'f-cn-tgy67',
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
                        'description' => '标签键组，最多20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                        ],
                        'required' => false,
                        'maxItems' => 21,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F59597FC-CD05-536D-B75B-6F45B8CC8539',
                            ],
                            'Success' => [
                                'description' => '是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TagResponseId' => [
                                'description' => 'tag请求ID。',
                                'type' => 'string',
                                'example' => '154FT',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F59597FC-CD05-536D-B75B-6F45B8CC8539\\",\\n  \\"Success\\": true,\\n  \\"TagResponseId\\": \\"154FT\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
            'title' => '删除资源标签',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'foasconsole.aliyuncs.com',
        ],
    ],
];
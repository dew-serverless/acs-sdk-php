<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ecd',
        'version' => '2023-06-27',
    ],
    'directories' => [
        'DescribeBenefits',
        'GetRedeemCodes',
        'GetRequestToken',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeBenefits' => [
            'summary' => '查询渠道关联的权益规格、权益数量等信息，相关信息可用于渠道权益的发放。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '渠道ID。权益查询的目标渠道。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wuying****',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
                            ],
                            'Benefits' => [
                                'description' => '权益列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '权益列表对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'BenefitId' => [
                                            'description' => '权益ID。不同规格的权益，对应不同的权益ID。',
                                            'type' => 'string',
                                            'example' => '6a79****',
                                        ],
                                        'BenefitType' => [
                                            'description' => '权益类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Desktop.TimePack' => '云电脑时长包',
                                            ],
                                            'example' => 'Desktop.TimePack',
                                        ],
                                        'TotalAmount' => [
                                            'description' => '权益总量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'AvailableAmount' => [
                                            'description' => '权益余量，即可用量，数量随着权益发放而减少。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'SpecInfo' => [
                                            'description' => '权益规格详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CpuCore' => [
                                                    'description' => 'vCPU核数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'AvailableHours' => [
                                                    'description' => '可用时长，单位：小时。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '800',
                                                ],
                                                'MemorySize' => [
                                                    'description' => '内存大小，单位：MB。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8192',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"Benefits\\": [\\n    {\\n      \\"BenefitId\\": \\"6a79****\\",\\n      \\"BenefitType\\": \\"Desktop.TimePack\\",\\n      \\"TotalAmount\\": 100,\\n      \\"AvailableAmount\\": 80,\\n      \\"SpecInfo\\": {\\n        \\"CpuCore\\": 4,\\n        \\"AvailableHours\\": 800,\\n        \\"MemorySize\\": 8192\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询渠道权益',
        ],
        'GetRedeemCodes' => [
            'summary' => '获取权益兑换码。渠道权益，将以兑换码的形式进行发放和流转。生成兑换码后，相应的权益数量将会扣减。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'CodeQuantity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要的兑换码数量，取值范围：1~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BenefitId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '兑换码包含的权益ID，通过[DescribeBenefits](~~2500858~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6a79****'."\n",
                    ],
                ],
                [
                    'name' => 'RequestToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '渠道服务请求凭证，可通过[GetRequestToken](~~2500860~~)获取，每个渠道服务请求凭证使用有效次数：1次。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8789d7271c36979****'."\n",
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
                            ],
                            'RedeemCodes' => [
                                'description' => '兑换码列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '兑换码。',
                                    'type' => 'string',
                                    'example' => '068c8-55a1a-*****',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"RedeemCodes\\": [\\n    \\"068c8-55a1a-*****\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取兑换码',
        ],
        'GetRequestToken' => [
            'summary' => '获取渠道服务请求一次性凭证，该凭证可用于渠道相关接口的鉴权，使用后失效。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '渠道ID。获取渠道服务请求凭证，凭证仅在此渠道下生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wuying****',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
                            ],
                            'RequestToken' => [
                                'description' => '生成的渠道服务请求凭证，每个渠道服务请求凭证使用有效次数：1次。',
                                'type' => 'string',
                                'example' => '8789d7271c36979****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"RequestToken\\": \\"8789d7271c36979****\\"\\n}","type":"json"}]',
            'title' => '获取请求凭证',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'ecd.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ecd.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ecd.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ecd.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ecd.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ecd.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'ecd.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ecd.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'ecd.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ecd.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ecd.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ecd.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ecd.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ecd.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'ecd.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ecd.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ecd.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ecd.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
        ],
    ],
];
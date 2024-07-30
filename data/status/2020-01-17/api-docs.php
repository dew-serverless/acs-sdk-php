<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Status',
        'version' => '2020-01-17',
    ],
    'directories' => [
        'ListEventInProgress',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListEventInProgress' => [
            'summary' => '查询阿里云当前正在发生且未结束的事件。',
            'methods' => [
                'post',
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
            'parameters' => [
                [
                    'name' => 'RegionIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '地域id列表：用于查询指定地域中的当前正在发生的未恢复事件（至少指定一个地域id）',
                        'type' => 'array',
                        'items' => [
                            'description' => '地域id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cn-hangzhou',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '当前发生的事件列表',
                        'description' => '当前发生的事件列表',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '事件id',
                                            'description' => '事件id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '101',
                                        ],
                                        'StartTime' => [
                                            'title' => '事件开始时间',
                                            'description' => '事件开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1680660940017',
                                        ],
                                        'Title' => [
                                            'title' => '事件标题',
                                            'description' => '事件标题',
                                            'type' => 'string',
                                            'example' => '部分地域电信网络访问异常',
                                        ],
                                        'EventUpdates' => [
                                            'title' => '事件进展',
                                            'description' => '事件进展列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '事件进展',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Content' => [
                                                        'title' => '事件进展内容',
                                                        'description' => '事件进展内容',
                                                        'type' => 'string',
                                                        'example' => '尊敬的客户：'."\n"
                                                            ."\n"
                                                            .'      您好！北京时间2023年06月20日 22:39-23:05，阿里云成都地域客户通过电信网络访问中国北方部分地域、阿里云北京地域通过电信网络访问中国西南部分地域时出现网络丢包现象，阿里云工程师初步确认因运营商问题导致，已向运营商报障。经过阿里云工程师紧急处理，网络丢包问题已恢复。非常抱歉给您带来的不便，如您有任何问题，请随时联系我们',
                                                    ],
                                                    'PublishTime' => [
                                                        'title' => '事件进展发布时间',
                                                        'description' => '事件进展发布时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1680660940017',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Impacts' => [
                                            'title' => '事件详细影响面',
                                            'description' => '事件详细影响面列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '事件详细影响面',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Product' => [
                                                        'title' => '云产品id',
                                                        'description' => '云产品',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ProductId' => [
                                                                'description' => '云产品id',
                                                                'type' => 'string',
                                                                'example' => 'ecs',
                                                            ],
                                                            'ProductName' => [
                                                                'description' => '原产品名称',
                                                                'type' => 'string',
                                                                'example' => '云服务器 ECS',
                                                            ],
                                                        ],
                                                    ],
                                                    'Region' => [
                                                        'title' => '地域 id',
                                                        'description' => '地域 id',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'RegionId' => [
                                                                'title' => '地区标识',
                                                                'description' => '地区标识',
                                                                'type' => 'string',
                                                                'example' => 'cn-shanghai'."\n",
                                                            ],
                                                            'RegionName' => [
                                                                'title' => '地区名',
                                                                'description' => '地区名',
                                                                'type' => 'string',
                                                                'example' => '华东2（上海）',
                                                            ],
                                                        ],
                                                    ],
                                                    'StartTime' => [
                                                        'title' => '影响开始时间',
                                                        'description' => '影响开始时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1680660940017',
                                                    ],
                                                    'RecoveryTime' => [
                                                        'title' => '恢复时间',
                                                        'description' => '恢复时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1680660940017',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '56CC5080-39B9-50AD-AEA1-483D9B0F8F24',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 101,\\n      \\"StartTime\\": 1680660940017,\\n      \\"Title\\": \\"部分地域电信网络访问异常\\",\\n      \\"EventUpdates\\": [\\n        {\\n          \\"Content\\": \\"尊敬的客户：\\\\n\\\\n      您好！北京时间2023年06月20日 22:39-23:05，阿里云成都地域客户通过电信网络访问中国北方部分地域、阿里云北京地域通过电信网络访问中国西南部分地域时出现网络丢包现象，阿里云工程师初步确认因运营商问题导致，已向运营商报障。经过阿里云工程师紧急处理，网络丢包问题已恢复。非常抱歉给您带来的不便，如您有任何问题，请随时联系我们\\",\\n          \\"PublishTime\\": 1680660940017\\n        }\\n      ],\\n      \\"Impacts\\": [\\n        {\\n          \\"Product\\": {\\n            \\"ProductId\\": \\"ecs\\",\\n            \\"ProductName\\": \\"云服务器 ECS\\"\\n          },\\n          \\"Region\\": {\\n            \\"RegionId\\": \\"cn-shanghai\\\\n\\",\\n            \\"RegionName\\": \\"华东2（上海）\\"\\n          },\\n          \\"StartTime\\": 1680660940017,\\n          \\"RecoveryTime\\": 1680660940017\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"56CC5080-39B9-50AD-AEA1-483D9B0F8F24\\"\\n}","type":"json"}]',
            'title' => '查询阿里云当前正在发生且未结束的事件',
            'responseParamsDescription' => '如果指定的region中当前没有正在发生的事件，返回参数中的Data字段将返回为空数组，如：{'."\n"
                .'  "RequestId": "B045A94F-2799-5441-8FA5-xxxxx",'."\n"
                .'  "Data": []'."\n"
                .'}',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'status.aliyuncs.com',
        ],
    ],
];
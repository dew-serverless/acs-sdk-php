<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'es-serverless',
        'version' => '2022-08-22',
    ],
    'directories' => [],
    'components' => [
        'schemas' => [
            'DataStreamMapping' => [
                'title' => '数据流索引模板字段设置',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '字段类型',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'caseSensitive' => [
                        'title' => '大小写敏感',
                        'type' => 'boolean',
                    ],
                    'docValues' => [
                        'title' => '是否聚合',
                        'type' => 'boolean',
                    ],
                    'index' => [
                        'title' => '是否索引',
                        'type' => 'boolean',
                    ],
                    'tokenizeOnChars' => [
                        'title' => '识别分隔符列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'key' => [
                        'title' => '字段名',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'properties' => [
                        'title' => '嵌套索引字段',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataStreamMapping',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'es-serverless.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'es-serverless.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'es-serverless.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'es-serverless.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'es-serverless',
        'version' => '2022-08-22',
    ],
    'components' => [
        'schemas' => [
            'DataStreamMapping' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'caseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'docValues' => [
                        'type' => 'boolean',
                    ],
                    'index' => [
                        'type' => 'boolean',
                    ],
                    'tokenizeOnChars' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'properties' => [
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
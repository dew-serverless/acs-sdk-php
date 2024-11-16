<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DataAnalysisGBI',
        'version' => '2024-08-23',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'RunDataAnalysis' => [
            'path' => '/{workspaceId}/gbi/runDataAnalysis',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'specificationType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'generateSqlOnly' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dataanalysisgbi.cn-beijing.aliyuncs.com',
        ],
    ],
];
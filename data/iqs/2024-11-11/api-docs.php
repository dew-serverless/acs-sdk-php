<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'IQS',
        'version' => '2024-11-11',
    ],
    'components' => [
        'schemas' => [
            'AISearchQuery' => [
                'type' => 'object',
                'properties' => [
                    'searchEngine' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'quark',
                            'bing',
                            'baidu',
                            'google',
                        ],
                    ],
                    'searchPlan' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'basic',
                            'advanced',
                        ],
                    ],
                    'query' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cardQuery' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'active',
                            'off',
                        ],
                    ],
                    'page' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'sessionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'card' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeRange' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'OneDay',
                            'OneWeek',
                            'OneMonth',
                            'OneYear',
                            'NoLimit',
                        ],
                    ],
                ],
            ],
            'GenericSearchResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'queryContext' => [
                        '$ref' => '#/components/schemas/QueryContext',
                    ],
                    'pageItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScorePageItem',
                        ],
                    ],
                    'sceneItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SceneItem',
                        ],
                    ],
                    'searchInformation' => [
                        '$ref' => '#/components/schemas/SearchInformation',
                    ],
                    'weiboItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WeiboItem',
                        ],
                    ],
                ],
            ],
            'IncludeImage' => [
                'type' => 'object',
                'properties' => [
                    'imageLink' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'width' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'height' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'QueryContext' => [
                'type' => 'object',
                'properties' => [
                    'originalQuery' => [
                        'type' => 'object',
                        'properties' => [
                            'query' => [
                                'type' => 'string',
                            ],
                            'industry' => [
                                'type' => 'string',
                            ],
                            'page' => [
                                'type' => 'string',
                            ],
                            'timeRange' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'rewrite' => [
                        'type' => 'object',
                        'properties' => [
                            'enabled' => [
                                'type' => 'boolean',
                            ],
                            'timeRange' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SceneItem' => [
                'type' => 'object',
                'properties' => [
                    'detail' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScorePageItem' => [
                'type' => 'object',
                'properties' => [
                    'publishTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'hostLogo' => [
                        'type' => 'string',
                    ],
                    'images' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/IncludeImage',
                            'required' => false,
                        ],
                    ],
                    'mime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cardType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'link' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'siteLabel' => [
                        'type' => 'string',
                    ],
                    'score' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                    ],
                    'hostname' => [
                        'type' => 'string',
                    ],
                    'htmlTitle' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayLink' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'pageMap' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'mainText' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'htmlSnippet' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SearchInformation' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'searchTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'WeiboItem' => [
                'type' => 'object',
                'properties' => [
                    'images' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'publishDisplayTime' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'cardType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'homepageLink' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'link' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'htmlSnippet' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'username' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GenericSearch' => [
            'path' => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericSearch',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'timeRange',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'industry',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AiSearch' => [
            'path' => '/linked-retrieval/linked-retrieval-entry/v3/linkedRetrieval/commands/aiSearch',
            'methods' => [
                'get',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'timeRange',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'industry',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GenericAdvancedSearch' => [
            'path' => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericAdvancedSearch',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'timeRange',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'iqs.cn-zhangjiakou.aliyuncs.com',
        ],
    ],
];
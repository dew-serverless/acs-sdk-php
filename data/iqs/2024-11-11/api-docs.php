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
            'GetIqsUsageResponse' => [
                'type' => 'object',
                'properties' => [
                    'records' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'date' => [
                                    'type' => 'string',
                                ],
                                'billingQps' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'totalCalls' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'valueAddedSummary' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'failedCalls' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'valueAddedAdvanced' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'subAccountId' => [
                                    'type' => 'string',
                                ],
                                'engineType' => [
                                    'type' => 'string',
                                ],
                                'ladderType' => [
                                    'type' => 'string',
                                ],
                                'api' => [
                                    'type' => 'string',
                                ],
                                'successCalls' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'mainAccountId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'GlobalPageItem' => [
                'type' => 'object',
                'properties' => [
                    'snippet' => [
                        'type' => 'string',
                    ],
                    'link' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'GlobalQueryContext' => [
                'type' => 'object',
                'properties' => [
                    'originalQuery' => [
                        'type' => 'object',
                        'properties' => [
                            'query' => [
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
                ],
            ],
            'GlobalSceneItem' => [
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
            'GlobalSearchInformation' => [
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
            'GlobalSearchResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'queryContext' => [
                        '$ref' => '#/components/schemas/GlobalQueryContext',
                    ],
                    'pageItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GlobalPageItem',
                        ],
                    ],
                    'sceneItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GlobalSceneItem',
                        ],
                    ],
                    'searchInformation' => [
                        '$ref' => '#/components/schemas/GlobalSearchInformation',
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
            'RequestContents' => [
                'type' => 'object',
                'properties' => [
                    'summary' => [
                        'type' => 'boolean',
                    ],
                    'rerankScore' => [
                        'type' => 'boolean',
                    ],
                    'markdownText' => [
                        'type' => 'boolean',
                    ],
                    'mainText' => [
                        'type' => 'boolean',
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
                    'snippet' => [
                        'type' => 'string',
                    ],
                    'summary' => [
                        'type' => 'string',
                    ],
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
                    'markdownText' => [
                        'type' => 'string',
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
            'SearchCredits' => [
                'type' => 'object',
                'properties' => [
                    'genericTextSearch' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
            'UnifiedCostCredits' => [
                'type' => 'object',
                'properties' => [
                    'search' => [
                        '$ref' => '#/components/schemas/SearchCredits',
                    ],
                    'valueAdded' => [
                        '$ref' => '#/components/schemas/ValueAddedCredits',
                    ],
                ],
            ],
            'UnifiedOriginalQuery' => [
                'type' => 'object',
                'properties' => [
                    'query' => [
                        'type' => 'string',
                    ],
                    'timeRange' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UnifiedPageItem' => [
                'type' => 'object',
                'properties' => [
                    'snippet' => [
                        'type' => 'string',
                    ],
                    'summary' => [
                        'type' => 'string',
                    ],
                    'hostLogo' => [
                        'type' => 'string',
                    ],
                    'images' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'hostname' => [
                        'type' => 'string',
                    ],
                    'rerankScore' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'publishedTime' => [
                        'type' => 'string',
                    ],
                    'markdownText' => [
                        'type' => 'string',
                    ],
                    'link' => [
                        'type' => 'string',
                    ],
                    'mainText' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UnifiedQueryContext' => [
                'type' => 'object',
                'properties' => [
                    'engineType' => [
                        'type' => 'string',
                    ],
                    'originalQuery' => [
                        '$ref' => '#/components/schemas/UnifiedOriginalQuery',
                    ],
                    'rewrite' => [
                        '$ref' => '#/components/schemas/UnifiedRewrite',
                    ],
                ],
            ],
            'UnifiedRewrite' => [
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
            'UnifiedSceneItem' => [
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
            'UnifiedSearchInformation' => [
                'type' => 'object',
                'properties' => [
                    'searchTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'UnifiedSearchInput' => [
                'type' => 'object',
                'properties' => [
                    'contents' => [
                        '$ref' => '#/components/schemas/RequestContents',
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                    'engineType' => [
                        'type' => 'string',
                        'enum' => [
                            'Generic',
                            'GenericAdvanced',
                        ],
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'timeRange' => [
                        'type' => 'string',
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
            'UnifiedSearchOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'queryContext' => [
                        '$ref' => '#/components/schemas/UnifiedQueryContext',
                    ],
                    'pageItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UnifiedPageItem',
                        ],
                    ],
                    'sceneItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UnifiedSceneItem',
                        ],
                    ],
                    'costCredits' => [
                        '$ref' => '#/components/schemas/UnifiedCostCredits',
                    ],
                    'searchInformation' => [
                        '$ref' => '#/components/schemas/UnifiedSearchInformation',
                    ],
                ],
            ],
            'ValueAddedCredits' => [
                'type' => 'object',
                'properties' => [
                    'summary' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'advanced' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
        'UnifiedSearch' => [
            'path' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/search/unified',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/UnifiedSearchInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
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
                [
                    'name' => 'returnMainText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'returnMarkdownText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'returnSummary',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'enableRerank',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                [
                    'name' => 'industry',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GlobalSearch' => [
            'path' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/search/global',
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
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetIqsUsage' => [
            'path' => '/linked-retrieval/linked-retrieval-admin/v1/iqs/usage',
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
                    'name' => 'startDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'endDate',
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
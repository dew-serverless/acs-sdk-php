<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DianJin',
        'version' => '2024-06-28',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetAppConfig' => [
            'path' => '/{workspaceId}/api/app/config',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateLibrary' => [
            'path' => '/{workspaceId}/api/library/create',
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
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'indexSetting' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'chunkStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'docTreeSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'docTreeSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'enhanceGraph' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enhanceTable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'overlap' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'sentenceSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'sentenceSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'size' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'split' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'modelConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'temperature' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topP' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'promptRoleStyle' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'queryEnhancer' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enableFollowUp' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableMultiQuery' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableOpenQa' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableQueryRewrite' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableSession' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'localKnowledgeId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'withDocumentReference' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'recallStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'documentRankType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'limit' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'textIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ElasticSearch$',
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'indexAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'searchAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'vectorIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ADB$',
                                            ],
                                            'embeddingType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLibraryList' => [
            'path' => '/{workspaceId}/api/library/list',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLibrary' => [
            'path' => '/{workspaceId}/api/library/get',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UploadDocument' => [
            'path' => '/{workspaceId}/api/library/document/upload',
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
                            'data' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fileName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'fileUrl' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDocumentUrl' => [
            'path' => '/{workspaceId}/api/library/document/url',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PreviewDocument' => [
            'path' => '/{workspaceId}/api/library/document/preview',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFilterDocumentList' => [
            'path' => '/{workspaceId}/api/library/filterDocument',
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
                            'and' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'boost' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => false,
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'operator' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'docIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'or' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'boost' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => false,
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'operator' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDocumentList' => [
            'path' => '/{workspaceId}/api/library/listDocument',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDocument' => [
            'path' => '/{workspaceId}/api/library/document/delete',
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
                            'docIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDocument' => [
            'path' => '/{workspaceId}/api/library/document/updateDocument',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'meta' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'title' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePredefinedDocument' => [
            'path' => '/{workspaceId}/api/library/document/createPredefinedDocument',
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
                            'chunks' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'chunkMeta' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'chunkOrder' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'chunkText' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'chunkType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'text',
                                                'table',
                                                'faq',
                                                'graph',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'metadata' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'title' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDocumentChunkList' => [
            'path' => '/{workspaceId}/api/library/getDocumentChunk',
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
                            'chunkIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'orderBy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RecallDocument' => [
            'path' => '/{workspaceId}/api/library/recallDocument',
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
                            'filters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'and' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'boost' => [
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'required' => false,
                                                    ],
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'operator' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'value' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'chunkType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'docIdList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'libraryId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'or' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'boost' => [
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'required' => false,
                                                    ],
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'operator' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'value' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'status' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'rearrangement' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'topK' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetParseResult' => [
            'path' => '/{workspaceId}/api/library/document/getParseResult',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReIndex' => [
            'path' => '/{workspaceId}/api/library/document/reIndex',
            'methods' => [
                'put',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateLibrary' => [
            'path' => '/{workspaceId}/api/library/update',
            'methods' => [
                'put',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'indexSetting' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'chunkStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'docTreeSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'docTreeSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'enhanceGraph' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enhanceTable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'overlap' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'sentenceSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'sentenceSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'size' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'split' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'modelConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'temperature' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topP' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'promptRoleStyle' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'queryEnhancer' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enableFollowUp' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableMultiQuery' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableOpenQa' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableQueryRewrite' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableSession' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'localKnowledgeId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'withDocumentReference' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'recallStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'documentRankType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'limit' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'textIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ElasticSearch$',
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'indexAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'searchAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'vectorIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ADB$',
                                            ],
                                            'embeddingType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteLibrary' => [
            'path' => '/{workspaceId}/api/library/delete',
            'methods' => [
                'delete',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunChatResultGeneration' => [
            'path' => '/{workspaceId}/api/run/chat/generation',
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
                            'inferenceParameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'messages' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'tools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'function' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'description' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'parameters' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'properties' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                        ],
                                                        'type' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'required' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InvokePlugin' => [
            'path' => '/{workspaceId}/api/plugin/invoke',
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
                            'params' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'pluginId' => [
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
            'endpoint' => 'dianjin.cn-beijing.aliyuncs.com',
        ],
    ],
];
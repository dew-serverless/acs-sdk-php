<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'ContactCenterAI',
        'version' => '2024-06-03',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'RunCompletion' => [
            'path' => '/{workspaceId}/ccai/app/{appId}/completion',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
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
                    'name' => 'appId',
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
                            'Stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ModelCode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'TemplateIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'Dialogue' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'SessionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Sentences' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'ChatId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Role' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'enum' => [
                                                        'user',
                                                        'agent',
                                                        'system',
                                                    ],
                                                ],
                                                'Text' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Fields' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Code' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Desc' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'EnumValues' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'EnumValue' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Desc' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ServiceInspection' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SceneIntroduction' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InspectionIntroduction' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InspectionContents' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Title' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'Content' => [
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
            ],
        ],
        'RunCompletionMessage' => [
            'path' => '/{workspaceId}/ccai/app/{appId}/completion_message',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
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
                    'name' => 'appId',
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
                            'Stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ModelCode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'Messages' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Role' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'user',
                                                'assistant',
                                                'system',
                                                'function',
                                            ],
                                        ],
                                        'Content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AnalyzeConversation' => [
            'path' => '/{workspaceId}/ccai/app/{appId}/analyze_conversation',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/octet-stream',
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
                    'name' => 'appId',
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
                            'dialogue' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'sentences' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'role' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'enum' => [
                                                        'user',
                                                        'agent',
                                                        'system',
                                                    ],
                                                ],
                                                'text' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'sessionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'examples' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'output' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'sentences' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'chatId' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'role' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enum' => [
                                                            'user',
                                                            'agent',
                                                            'system',
                                                        ],
                                                    ],
                                                    'text' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'fields' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'code' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'desc' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'enumValues' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'desc' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'enumValue' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'modelCode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'resultTypes' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'summary',
                                        'title',
                                        'fields',
                                        'keywords',
                                        'service_inspection',
                                        'question_solution',
                                    ],
                                ],
                            ],
                            'sceneName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceInspection' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'inspectionContents' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'content' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'title' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'inspectionIntroduction' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'sceneIntroduction' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'contactcenterai.cn-shanghai.aliyuncs.com',
        ],
    ],
];
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
                'application/octet-stream',
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
                            'Dialogue' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
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
                                    'SessionId' => [
                                        'type' => 'string',
                                        'required' => false,
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
                                                    'Desc' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'EnumValue' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'ModelCode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'ServiceInspection' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InspectionContents' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Content' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Title' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'InspectionIntroduction' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SceneIntroduction' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Stream' => [
                                'type' => 'boolean',
                                'required' => false,
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
                'application/octet-stream',
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
                            'Messages' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
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
                                    ],
                                ],
                            ],
                            'ModelCode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'Stream' => [
                                'type' => 'boolean',
                                'required' => false,
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
                            'categoryTags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'tagDesc' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'tagName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
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
                                        'questions_and_answer',
                                        'user_profile',
                                        'category_tag',
                                        'emotion_detection',
                                        'satisfaction',
                                        'actions',
                                        'service_finish',
                                        'label_classification',
                                        'analysis_image',
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
                            'userProfiles' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
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
                            'timeConstraintList' => [
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
        'GetTaskResult' => [
            'path' => '/ccai/app/getTaskResult',
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
                'multipart/form-data',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTask' => [
            'path' => '/{workspaceId}/ccai/app/{appId}/createTask',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                                'required' => false,
                                'properties' => [
                                    'sentences' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'role' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'enum' => [
                                                        'agent',
                                                        'user',
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
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'output' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
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
                                            'required' => true,
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
                                'required' => true,
                                'enum' => [
                                    'tyxmTurbo',
                                    'tyxmPlus',
                                ],
                            ],
                            'resultTypes' => [
                                'type' => 'array',
                                'required' => false,
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
                            'taskType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'audio',
                                    'text',
                                ],
                            ],
                            'templateIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'transcription' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'autoSplit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'clientChannel' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'fileName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'serviceChannel' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'serviceChannelKeywords' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'voiceFileUrl' => [
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
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'contactcenterai.cn-shanghai.aliyuncs.com',
        ],
    ],
];
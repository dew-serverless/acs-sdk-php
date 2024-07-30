<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Chatbot',
        'version' => '2022-04-08',
    ],
    'directories' => [
        [
            'id' => 189601,
            'title' => '文档管理',
            'type' => 'directory',
            'children' => [
                'CreateDoc',
                'DeleteDoc',
                'UpdateDoc',
                'RetryDoc',
                'SearchDoc',
                'DescribeDoc',
            ],
        ],
        [
            'id' => 189608,
            'title' => '类目管理',
            'type' => 'directory',
            'children' => [
                'CreateCategory',
                'DeleteCategory',
                'UpdateCategory',
                'DescribeCategory',
                'ListCategory',
            ],
        ],
        [
            'id' => 167775,
            'title' => '会话管理',
            'type' => 'directory',
            'children' => [
                'ApplyForStreamAccessToken',
                'Feedback',
                'Chat',
                'Associate',
                'BeginSession',
                'Nlu',
            ],
        ],
        [
            'id' => 168180,
            'title' => '全局服务',
            'type' => 'directory',
            'children' => [
                'GetAsyncResult',
            ],
        ],
        [
            'id' => 168037,
            'title' => '机器人管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 168069,
                    'title' => '机器人管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateInstance',
                        'DeleteInstance',
                        'UpdateInstance',
                        'LinkInstanceCategory',
                        'DescribeInstance',
                        'ListInstance',
                    ],
                ],
                [
                    'id' => 168038,
                    'title' => '机器人发布',
                    'type' => 'directory',
                    'children' => [
                        'CreateInstancePublishTask',
                        'CancelInstancePublishTask',
                        'ContinueInstancePublishTask',
                        'GetInstancePublishTaskState',
                    ],
                ],
            ],
        ],
        [
            'id' => 167654,
            'title' => 'FAQ管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 168042,
                    'title' => 'FAQ答案',
                    'type' => 'directory',
                    'children' => [
                        'CreateSolution',
                        'DeleteSolution',
                        'UpdateSolution',
                        'ListSolution',
                    ],
                ],
                [
                    'id' => 168043,
                    'title' => 'FAQ关联问',
                    'type' => 'directory',
                    'children' => [
                        'CreateConnQuestion',
                        'DeleteConnQuestion',
                        'UpdateConnQuestion',
                        'ListConnQuestion',
                    ],
                ],
                [
                    'id' => 168045,
                    'title' => 'FAQ相似问',
                    'type' => 'directory',
                    'children' => [
                        'CreateSimQuestion',
                        'DeleteSimQuestion',
                        'UpdateSimQuestion',
                        'ListSimQuestion',
                    ],
                ],
                [
                    'id' => 168046,
                    'title' => 'FAQ',
                    'type' => 'directory',
                    'children' => [
                        'CreateFaq',
                        'DeleteFaq',
                        'UpdateFaq',
                        'DescribeFaq',
                        'SearchFaq',
                    ],
                ],
            ],
        ],
        [
            'id' => 168050,
            'title' => '对话工厂',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 168103,
                    'title' => '实体管理',
                    'type' => 'directory',
                    'children' => [
                        [
                            'id' => 168104,
                            'title' => '实体',
                            'type' => 'directory',
                            'children' => [
                                'CreateDSEntity',
                                'DeleteDSEntity',
                                'UpdateDSEntity',
                                'DescribeDSEntity',
                                'ListDSEntity',
                            ],
                        ],
                        [
                            'id' => 168105,
                            'title' => '实体成员',
                            'type' => 'directory',
                            'children' => [
                                'CreateDSEntityValue',
                                'DeleteDSEntityValue',
                                'UpdateDSEntityValue',
                                'ListDSEntityValue',
                            ],
                        ],
                    ],
                ],
                [
                    'id' => 168106,
                    'title' => '意图管理',
                    'type' => 'directory',
                    'children' => [
                        [
                            'id' => 168107,
                            'title' => '意图',
                            'type' => 'directory',
                            'children' => [
                                'CreateIntent',
                                'DeleteIntent',
                                'UpdateIntent',
                                'DescribeIntent',
                                'ListIntent',
                            ],
                        ],
                        [
                            'id' => 168108,
                            'title' => '意图话术',
                            'type' => 'directory',
                            'children' => [
                                'CreateUserSay',
                                'DeleteUserSay',
                                'UpdateUserSay',
                                'ListUserSay',
                            ],
                        ],
                        [
                            'id' => 168109,
                            'title' => '高级语义配置（LGF）',
                            'type' => 'directory',
                            'children' => [
                                'CreateLgf',
                                'DeleteLgf',
                                'UpdateLgf',
                                'ListLgf',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'id' => 168068,
            'title' => '视角管理',
            'type' => 'directory',
            'children' => [
                'CreatePerspective',
                'DeletePerspective',
                'UpdatePerspective',
                'DescribePerspective',
                'QueryPerspectives',
            ],
        ],
        [
            'id' => 168054,
            'title' => '发布管理',
            'type' => 'directory',
            'children' => [
                'CreatePublishTask',
                'CancelPublishTask',
                'GetPublishTaskState',
            ],
        ],
        [
            'id' => 168056,
            'title' => '业务空间',
            'type' => 'directory',
            'children' => [
                'GetAgentInfo',
                'ListAgent',
            ],
        ],
        [
            'id' => 169501,
            'title' => '渠道聊天窗',
            'type' => 'directory',
            'children' => [
                'GenerateUserAccessToken',
            ],
        ],
        [
            'id' => 192374,
            'title' => '数据看板',
            'type' => 'directory',
            'children' => [
                'ListTongyiChatHistorys',
                'GetBotSessionData',
            ],
        ],
        [
            'id' => 187838,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'InitIMConnect',
                'ListSaasInfo',
                'ListSaasPermissionGroupInfos',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDoc' => [
            'summary' => '文档新建',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'high',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档类目ID',
                        'description' => '文档类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30000049006',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档标题',
                        'description' => '文档标题',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试标题',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档内容',
                        'description' => '文档内容，与Url二选一',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试内容',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档解析/切分配置'."\n"
                            .'配置项：切分器'."\n"
                            .'KEY：Splitter'."\n"
                            .'值选项：ParagraphSplitter-识别层级'."\n"
                            .'值选项：TreeSplitter-规则层级'."\n"
                            ."\n"
                            .'配置项：文档切块大小'."\n"
                            .'KEY：ChunkSize'."\n"
                            .'VALUE：默认500；范围[200,800]'."\n"
                            ."\n"
                            .'配置项：规则层级'."\n"
                            .'KEY：TreePatterns'."\n"
                            .'VALUE：默认[]'."\n"
                            ."\n"
                            .'配置项：文档标题来源'."\n"
                            .'KEY：TitleSource'."\n"
                            .'值选项：ocrTitle - OCR识别标题【默认】'."\n"
                            .'值选项：docName - 文档名即标题',
                        'description' => '文档解析/切分配置'."\n"
                            .'配置项：切分器'."\n"
                            .'KEY：Splitter'."\n"
                            .'值选项：ParagraphSplitter-识别层级'."\n"
                            .'值选项：TreeSplitter-规则层级'."\n"
                            ."\n"
                            .'配置项：文档切块大小'."\n"
                            .'KEY：ChunkSize'."\n"
                            .'VALUE：默认500；范围[200,800]'."\n"
                            ."\n"
                            .'配置项：规则层级'."\n"
                            .'KEY：TreePatterns'."\n"
                            .'VALUE：默认[]'."\n"
                            ."\n"
                            .'配置项：文档标题来源'."\n"
                            .'KEY：TitleSource'."\n"
                            .'值选项：ocrTitle - OCR识别标题【默认】'."\n"
                            .'值选项：docName - 文档名即标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":""}',
                    ],
                ],
                [
                    'name' => 'Meta',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档随路数据',
                        'description' => '文档随路数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"xxx"}',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '生效开始时间',
                        'description' => '生效开始时间UTC',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25T16:28:36Z'."\n",
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '生效结束时间',
                        'description' => '生效结束时间UTC',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2032-05-25T16:28:36Z'."\n",
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '文档链接URL路径 ',
                        'description' => '文档链接URL路径，与Content二选一，支持txt、pdf、markdown、doc、docx格式（单个文件：最多100页，txt小于200K，pdf小于100M，markdown小于200K，doc小于100M，docx小于100M）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://example.com/example.pdf',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1201',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '07B270A4-61D8-57F6-A609-A3C216CFB872',
                            ],
                            'KnowledgeId' => [
                                'description' => '知识ID'."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30001905617',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '文档新建',
        ],
        'DeleteDoc' => [
            'summary' => '删除文档',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DFB71B34-4188-4EA2-9988-EF3014E75910',
                            ],
                            'KnowledgeId' => [
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30002406051',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '删除文档',
        ],
        'UpdateDoc' => [
            'summary' => '更新文档',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'high',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档ID',
                        'description' => '文档ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档类目ID',
                        'description' => '文档类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '231001028593',
                    ],
                ],
                [
                    'name' => 'DocName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档名称',
                        'description' => '文档名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文档问答模块功能说明文档',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档标题',
                        'description' => '文档标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文档问答功能说明',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档内容',
                        'description' => '文档内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文档内容',
                        'maxLength' => 40000,
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档解析/切分配置'."\n"
                            .'配置项：切分器'."\n"
                            .'KEY：Splitter'."\n"
                            .'值选项：ParagraphSplitter-识别层级【默认】'."\n"
                            .'值选项：TreeSplitter-规则层级'."\n"
                            ."\n"
                            .'配置项：文档切块大小'."\n"
                            .'KEY：ChunkSize'."\n"
                            .'VALUE：默认500；范围[200,800]'."\n"
                            ."\n"
                            .'配置项：规则层级'."\n"
                            .'KEY：TreePatterns'."\n"
                            .'VALUE：默认[]'."\n"
                            ."\n"
                            .'配置项：文档标题来源'."\n"
                            .'KEY：TitleSource'."\n"
                            .'值选项：ocrTitle - OCR识别标题【默认】'."\n"
                            .'值选项：docName - 文档名即标题',
                        'description' => '文档解析/切分配置'."\n"
                            .'配置项：切分器'."\n"
                            .'KEY：Splitter'."\n"
                            .'值选项：paragraphSplitter-识别层级【默认】'."\n"
                            .'值选项：treeSplitter-规则层级'."\n"
                            ."\n"
                            .'配置项：文档切块大小'."\n"
                            .'KEY：ChunkSize'."\n"
                            .'VALUE：默认500；范围[200,800]'."\n"
                            ."\n"
                            .'配置项：规则层级'."\n"
                            .'KEY：TreePatterns'."\n"
                            .'VALUE：默认[]'."\n"
                            ."\n"
                            .'配置项：文档标题来源'."\n"
                            .'KEY：TitleSource'."\n"
                            .'值选项：ocrTitle - OCR识别标题【默认】'."\n"
                            .'值选项：docName - 文档名即标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":""}',
                    ],
                ],
                [
                    'name' => 'Meta',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文档随路数据',
                        'description' => '文档随路数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"xxx"}',
                        'maxLength' => 1000,
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始生效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25T16:28:36Z',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束生效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-11T23:59:59Z',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签ID列表，为空时解除绑定',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1201',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '0F9F136A-1BF6-5CC1-9D57-9717761F03B8',
                            ],
                            'KnowledgeId' => [
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30002406051',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '更新文档',
        ],
        'RetryDoc' => [
            'summary' => '文档重试',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'high',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e2a20f74cd9042558002c0f7dc873739_p_outbound_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6419BA93-D111-5225-8998-13E63E6D3940',
                            ],
                            'KnowledgeId' => [
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30001905617',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '文档重试',
        ],
        'SearchDoc' => [
            'summary' => '搜索文档',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '搜索关键字',
                    ],
                ],
                [
                    'name' => 'CategoryIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '类目ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '类目ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '30000065594',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProcessStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态'."\n"
                            .'-1 排队中'."\n"
                            .'0 成功'."\n"
                            .'1 解析中'."\n"
                            .'2 处理中'."\n"
                            .'3 处理失败',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '编辑状态：'."\n"
                            .'1   未发布'."\n"
                            .'2   已发布'."\n"
                            .'3   已更新未发布',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchScope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索范围 '."\n"
                            .'1  搜索标题'."\n"
                            .'2  搜索内容',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CreateUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建人名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'ModifyUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改人名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '李四',
                    ],
                ],
                [
                    'name' => 'CreateTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'CreateTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'ModifyTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'ModifyTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'StartTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'StartTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-03T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'EndTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '失效开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'EndTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '失效结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分⻚-第⼏⻚',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '标签ID列表',
                        'description' => '标签ID列表，多个标签时，采用“并集”逻辑进行筛选',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1201',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'E3E5C779-A630-45AC-B0F2-A4506A4212F1',
                            ],
                            'PageNumber' => [
                                'description' => '当前⻚码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '141',
                            ],
                            'DocHits' => [
                                'description' => '文档列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'KnowledgeId' => [
                                            'description' => '知识ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30002692007',
                                        ],
                                        'DocName' => [
                                            'description' => '文档名称',
                                            'type' => 'string',
                                            'example' => '文档名称',
                                        ],
                                        'BizCode' => [
                                            'description' => '业务代码',
                                            'type' => 'string',
                                            'example' => 'cn_dytns',
                                        ],
                                        'Meta' => [
                                            'description' => '文档随路数据',
                                            'type' => 'string',
                                            'example' => '{"code":"xxx"}',
                                        ],
                                        'Config' => [
                                            'description' => '文档解析/切分配置'."\n"
                                                .'配置项：切分器'."\n"
                                                .'KEY：Splitter'."\n"
                                                .'值选项：paragraphSplitter-识别层级【默认】'."\n"
                                                .'值选项：treeSplitter-规则层级'."\n"
                                                ."\n"
                                                .'配置项：文档切块大小'."\n"
                                                .'KEY：ChunkSize'."\n"
                                                .'VALUE：默认500；范围[200,800]'."\n"
                                                ."\n"
                                                .'配置项：规则层级'."\n"
                                                .'KEY：TreePatterns'."\n"
                                                .'VALUE：默认[]'."\n"
                                                ."\n"
                                                .'配置项：文档标题来源'."\n"
                                                .'KEY：TitleSource'."\n"
                                                .'值选项：ocrTitle - OCR识别标题【默认】'."\n"
                                                .'值选项：docName - 文档名即标题',
                                            'type' => 'string',
                                            'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":"docName"}',
                                        ],
                                        'Url' => [
                                            'description' => '文档保存OSS地址',
                                            'type' => 'string',
                                            'example' => 'https://doc2bot-bucket-cloud.oss-cn-shanghai.aliyuncs.com/doc2bot/input/文档问答说明书_V1.pdf',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2023-06-25T02:27:42Z',
                                        ],
                                        'ModifyUserName' => [
                                            'description' => '修改人名称',
                                            'type' => 'string',
                                            'example' => '李四',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2023-06-22T03:53:41Z',
                                        ],
                                        'CreateUserName' => [
                                            'description' => '创建人名称',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'CreateUserId' => [
                                            'description' => '创建人ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '111111111',
                                        ],
                                        'ModifyUserId' => [
                                            'description' => '修改人ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '222222222',
                                        ],
                                        'CategoryId' => [
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30000135654',
                                        ],
                                        'ProcessStatus' => [
                                            'description' => '任务处理状态'."\n"
                                                .'-1 排队中'."\n"
                                                .'0 成功'."\n"
                                                .'1 解析中'."\n"
                                                .'2 处理中'."\n"
                                                .'3 处理失败',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ProcessMessage' => [
                                            'description' => '任务处理信息',
                                            'type' => 'string',
                                            'example' => '任务处理成功',
                                        ],
                                        'ProcessCanRetry' => [
                                            'description' => '任务是否可重试'."\n"
                                                .'true：可重试'."\n"
                                                .'false：不可重试',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Status' => [
                                            'description' => '编辑状态： 1 未发布 2 已发布 3 已更新未发布',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EffectStatus' => [
                                            'description' => '知识生效状态，根据StartDate，EndDate计算出来：20-生效中，21-已失效，22-待生效',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'StartDate' => [
                                            'description' => '生效时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2023-02-28T11:40:18Z',
                                        ],
                                        'EndDate' => [
                                            'description' => '失效时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2099-12-31T16:00:00Z',
                                        ],
                                        'DocTags' => [
                                            'description' => '标签详情列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签详情',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagId' => [
                                                        'title' => '标签ID',
                                                        'description' => '标签ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1201',
                                                    ],
                                                    'TagName' => [
                                                        'title' => '标签名称',
                                                        'description' => '标签名称',
                                                        'type' => 'string',
                                                        'example' => '小说',
                                                    ],
                                                    'GroupId' => [
                                                        'title' => '标签组ID',
                                                        'description' => '标签组ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '3610',
                                                    ],
                                                    'GroupName' => [
                                                        'title' => '标签组名称',
                                                        'description' => '标签组名称',
                                                        'type' => 'string',
                                                        'example' => '文章',
                                                    ],
                                                    'DefaultTag' => [
                                                        'title' => '是否默认全部标签',
                                                        'description' => '是否默认全部标签',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '搜索文档',
        ],
        'DescribeDoc' => [
            'summary' => '文档详情',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001979424',
                    ],
                ],
                [
                    'name' => 'ShowDetail',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否展示文档段落详细信息'."\n"
                            .'true：展示'."\n"
                            .'false：忽略（默认）',
                        'description' => '是否展示文档段落详细信息'."\n"
                            .'true：展示'."\n"
                            .'false：忽略（默认）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '7F132693-212A-40A9-8A81-11E7694E478B',
                            ],
                            'KnowledgeId' => [
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30001979424',
                            ],
                            'DocName' => [
                                'description' => '文档名称',
                                'type' => 'string',
                                'example' => '文档名称',
                            ],
                            'Title' => [
                                'description' => '文档标题',
                                'type' => 'string',
                                'example' => '测试标题',
                            ],
                            'BizCode' => [
                                'description' => '业务代码',
                                'type' => 'string',
                                'example' => 'bizcode123',
                            ],
                            'Meta' => [
                                'description' => '文档随路数据',
                                'type' => 'string',
                                'example' => '{"code":"xxx"}',
                            ],
                            'Config' => [
                                'description' => '文档解析/切分配置 配置项：切分器 KEY：Splitter 值选项：paragraphSplitter-识别层级【默认】 值选项：treeSplitter-规则层级'."\n"
                                    ."\n"
                                    .'配置项：文档切块大小 KEY：ChunkSize VALUE：默认500；范围[200,800]'."\n"
                                    ."\n"
                                    .'配置项：规则层级 KEY：TreePatterns VALUE：默认[]'."\n"
                                    ."\n"
                                    .'配置项：文档标题来源 KEY：TitleSource 值选项：ocrTitle - OCR识别标题【默认】 值选项：docName - 文档名即标题',
                                'type' => 'string',
                                'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":"docName"}',
                            ],
                            'Url' => [
                                'description' => '文档保存OSS地址',
                                'type' => 'string',
                                'example' => 'https://doc2bot-bucket-cloud.oss-cn-shanghai.aliyuncs.com/doc2bot/input/文档问答说明书_V1.pdf',
                            ],
                            'ModifyTime' => [
                                'description' => '修改时间',
                                'type' => 'string',
                                'example' => '2020-11-25T08:56:55Z',
                            ],
                            'ModifyUserName' => [
                                'description' => '修改人',
                                'type' => 'string',
                                'example' => '李四',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'CreateUserName' => [
                                'description' => '创建人名称',
                                'type' => 'string',
                                'example' => '张三',
                            ],
                            'CreateUserId' => [
                                'description' => '创建人ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1111111111',
                            ],
                            'ModifyUserId' => [
                                'description' => '修改人ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2222222222',
                            ],
                            'CategoryId' => [
                                'description' => '类目ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30000049006',
                            ],
                            'ProcessStatus' => [
                                'description' => '任务处理状态'."\n"
                                    .'-1 排队中'."\n"
                                    .'0 成功'."\n"
                                    .'1 解析中'."\n"
                                    .'2 处理中'."\n"
                                    .'3 处理失败',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ProcessMessage' => [
                                'description' => '任务处理信息',
                                'type' => 'string',
                                'example' => '任务处理成功',
                            ],
                            'ProcessCanRetry' => [
                                'description' => '任务是否可重试'."\n"
                                    .'true：可重试'."\n"
                                    .'false：不可重试',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Status' => [
                                'description' => '编辑状态：'."\n"
                                    .'1   未发布'."\n"
                                    .'2   已发布'."\n"
                                    .'3   已更新未发布',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'EffectStatus' => [
                                'description' => '生效状态'."\n"
                                    .'根据StartDate, EndDate计算出来'."\n"
                                    .'20  生效中'."\n"
                                    .'21  已失效'."\n"
                                    .'22  待生效',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'StartDate' => [
                                'description' => '生效时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '1979-12-31T16:00:00Z',
                            ],
                            'EndDate' => [
                                'description' => '失效时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '2023-04-27T06:08:54Z',
                            ],
                            'DocInfo' => [
                                'description' => '文档详情',
                                'type' => 'object',
                                'properties' => [
                                    'DocParas' => [
                                        'description' => '文档段落信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '段落对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'ParaNo' => [
                                                    'description' => '段落序号',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ParaLevel' => [
                                                    'description' => '段落层级',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ParaType' => [
                                                    'description' => '段落内容类型'."\n"
                                                        .'text-文本'."\n"
                                                        .'figure-图片'."\n"
                                                        .'table-表格',
                                                    'type' => 'string',
                                                    'example' => 'text',
                                                ],
                                                'ParaText' => [
                                                    'description' => '段落内容【纯文本/图片OCR内容/表格的Markdown表示】',
                                                    'type' => 'string',
                                                    'example' => '内容',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DocTags' => [
                                'description' => '标签详情列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagId' => [
                                            'title' => '标签ID',
                                            'description' => '标签ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1201',
                                        ],
                                        'TagName' => [
                                            'title' => '标签名称',
                                            'description' => '标签名称',
                                            'type' => 'string',
                                            'example' => '小说',
                                        ],
                                        'GroupId' => [
                                            'title' => '标签分组ID',
                                            'description' => '标签分组ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3610',
                                        ],
                                        'GroupName' => [
                                            'title' => '标签分组名称',
                                            'description' => '标签分组名称',
                                            'type' => 'string',
                                            'example' => '文章',
                                        ],
                                        'DefaultTag' => [
                                            'title' => '是否默认为全部标签',
                                            'description' => '是否默认为全部标签',
                                            'type' => 'boolean',
                                            'example' => 'false',
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
            'responseDemo' => '',
            'title' => '文档详情',
        ],
        'CreateCategory' => [
            'summary' => '新建类目。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目名称',
                        'description' => '类目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试1',
                    ],
                ],
                [
                    'name' => 'BizCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '业务代码',
                        'description' => '业务代码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bizcode123',
                    ],
                ],
                [
                    'name' => 'KnowledgeType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识类型，FAQ类目：1，文档类目：3',
                        'description' => '知识类型，FAQ类目：1，文档类目：3，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ParentCategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '父类目ID，默认-1，对应根目录',
                        'description' => '父类目ID，默认-1，对应根目录',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A629A28F-F25E-5572-A679-FA46FB0151D6',
                            ],
                            'Category' => [
                                'title' => '类目信息',
                                'description' => '类目信息',
                                'type' => 'object',
                                'properties' => [
                                    'CategoryId' => [
                                        'title' => '类目ID',
                                        'description' => '类目ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30000049006',
                                    ],
                                    'BizCode' => [
                                        'description' => '业务代码',
                                        'type' => 'string',
                                        'example' => 'bizcode123',
                                    ],
                                    'Name' => [
                                        'description' => '类目名称',
                                        'type' => 'string',
                                        'example' => '类目名称',
                                    ],
                                    'ParentCategoryId' => [
                                        'description' => '父类目ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '-1',
                                    ],
                                    'Status' => [
                                        'description' => '类目状态，-1：已删除未发布状态，0：正常',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '类目-新建',
        ],
        'DeleteCategory' => [
            'summary' => '删除类目， 已发布的类目变成已删除未发布状态，未发布的类目则直接删除。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目ID',
                        'description' => '类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30000049006',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4B3E0DE3-DC57-5BFE-88D4-ADD8ED024F55',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '类目-删除',
        ],
        'UpdateCategory' => [
            'summary' => '编辑类目。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目ID',
                        'description' => '类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '231001028593',
                    ],
                ],
                [
                    'name' => 'BizCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '业务代码',
                        'description' => '业务代码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bizcode123',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目名称',
                        'description' => '类目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '类目名称',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '类目-更新',
        ],
        'DescribeCategory' => [
            'summary' => '查看单个类目信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目ID',
                        'description' => '类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30000049006',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2B0304FD-3804-5C06-9A83-77F5523664AF',
                            ],
                            'Category' => [
                                'title' => '类目信息',
                                'description' => '类目信息',
                                'type' => 'object',
                                'properties' => [
                                    'CategoryId' => [
                                        'title' => '类目ID',
                                        'description' => '类目ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30000049006',
                                    ],
                                    'Name' => [
                                        'description' => '类⽬名称',
                                        'type' => 'string',
                                        'example' => '类目名称',
                                    ],
                                    'ParentCategoryId' => [
                                        'description' => '⽗类⽬id，默认-1，对应根⽬录',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '-1',
                                    ],
                                    'Status' => [
                                        'description' => '类目状态 -1：已删除未发布状态，0：正常',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'BizCode' => [
                                        'description' => '业务代码',
                                        'type' => 'string',
                                        'example' => 'bizcode123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '类目-详情',
        ],
        'ListCategory' => [
            'summary' => '获取类目列表。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'KnowledgeType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识类型,FAQ类目:1,文档类目:3',
                        'description' => '知识类型,FAQ类目:1,文档类目:3，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ParentCategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '父类目ID',
                        'description' => '父类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'Categories' => [
                                'title' => 'list结果',
                                'description' => '类目list结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '类目信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'CategoryId' => [
                                            'title' => '类目ID',
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '231001028593',
                                        ],
                                        'BizCode' => [
                                            'description' => '业务代码',
                                            'type' => 'string',
                                            'example' => 'bizcode123',
                                        ],
                                        'Name' => [
                                            'description' => '类⽬名称',
                                            'type' => 'string',
                                            'example' => '类目名称',
                                        ],
                                        'ParentCategoryId' => [
                                            'description' => '⽗类⽬ID'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '-1',
                                        ],
                                        'Status' => [
                                            'description' => '类目状态，-1：已删除未发布状态，0：正常',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9C5F8186-2D22-433E-9545-606D344F30B5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取类目列表',
        ],
        'ApplyForStreamAccessToken' => [
            'summary' => '获取流式调用的连接信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '736994BD-AA35-4742-88C9-E64BE4BAA14B',
                            ],
                            'AccessToken' => [
                                'description' => '服务的请求Token。',
                                'type' => 'string',
                                'example' => '63ba97b4f18a4a04f715c81e8e643938',
                            ],
                            'ChannelId' => [
                                'description' => '通道ID',
                                'type' => 'string',
                                'example' => 'cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d',
                            ],
                            'StreamSecret' => [
                                'description' => '业务空间的密钥，流式请求加签使用',
                                'type' => 'string',
                                'example' => 'cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '获取流式调用的连接信息',
        ],
        'Feedback' => [
            'summary' => '保存用户对于问答结果的评价。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话窗单次会话标识',
                        'description' => '会话窗单次会话标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '5ca40988-4f99-47ad-ac96-9060d0f81db9',
                    ],
                ],
                [
                    'name' => 'Feedback',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'good-点赞、bad-点踩',
                        'description' => '点赞或点踩'."\n"
                            ."\n"
                            .'枚举值：'."\n"
                            .'good（点赞）'."\n"
                            .'bad（点踩）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'bad' => 'bad',
                            'good' => 'good',
                        ],
                        'example' => 'good',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话Session标识，标识：IM唯一标识会话',
                        'description' => '会话Session标识，标识：IM唯一标识会话',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7c3cec23cc8940bc9db4a318c8f4f0aa',
                    ],
                ],
                [
                    'name' => 'FeedbackContent',
                    'in' => 'query',
                    'schema' => [
                        'title' => '点赞、点踩的内容',
                        'description' => '点赞、点踩的内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这个回答很棒',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '4e5eea71-f326-450c-8849-49515473ef64',
                            ],
                            'Feedback' => [
                                'title' => 'good-点赞、bad-点踩',
                                'description' => '点赞或点踩'."\n"
                                    ."\n"
                                    .'枚举值：'."\n"
                                    .'good（点赞）'."\n"
                                    .'bad（点踩）',
                                'type' => 'string',
                                'example' => 'good',
                            ],
                            'MessageId' => [
                                'title' => '会话窗单次会话标识',
                                'description' => '会话窗单次会话标识',
                                'type' => 'string',
                                'example' => '5ca40988-4f99-47ad-ac96-9060d0f81db9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '问答点赞、点踩',
        ],
        'Chat' => [
            'summary' => '根据机器人唯一标识（机器人ID）与其进行会话，仅适用于智能对话机器人（旧版）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人实例ID。登录云小蜜控制台，机器人详情->会话接口，查看机器人实例信息，可获得该实例ID。',
                        'description' => '机器人唯一标识（机器人ID）。登录云小蜜控制台，机器人详情->会话接口，查看机器人实例信息，可获得该实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人访问者的输入',
                        'description' => '机器人访问者的输入',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '今天天气怎么样？',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。长度限制是64个字符',
                        'description' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。长度限制是64个字符',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9c6ebdc6e66f46ecadab3434314f6959',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '知识库中知识标题的ID。若指定此ID，那么机器人会直接返回指定知识标题的答案',
                        'description' => '知识库中知识标题的ID。若指定此ID，那么机器人会直接返回指定知识标题的答案',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30002406051',
                    ],
                ],
                [
                    'name' => 'SenderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '访问者ID。用于识别当前会话中的用户',
                        'description' => '访问者ID。用于识别当前会话中的用户',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'custumer_123456',
                    ],
                ],
                [
                    'name' => 'SenderNick',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前会话中访问的昵称',
                        'description' => '当前会话中访问的昵称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用户123456',
                    ],
                ],
                [
                    'name' => 'IntentName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '对话流中意图名称。 若指定此名称，机器人会直接进入此意图做问答',
                        'description' => '对话流中意图名称。 若指定此名称，机器人会直接进入此意图做问答',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查天气意图',
                    ],
                ],
                [
                    'name' => 'Perspective',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '视角编码，用于调用同一知识标题下不同视角的答案。如：Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准',
                        'description' => '视角编码数组，用于调用同一知识标题下不同视角的答案。如：Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角编码',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'FZJBY3raWr',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'VendorParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是一个JSON格式的用户自定义参数集，可以传入用户自定义的参数到各对话引擎',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"phone":123456789}',
                    ],
                ],
                [
                    'name' => 'SandBox',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试、正式环境标识，默认为正式环境。'."\n"
                            .'- true：测试环境，仅限测试使用，生产使用有不稳定、QPS限制等风险。'."\n"
                            .'- false：正式环境',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'QuerySegList' => [
                                'title' => 'query的分词结果，可能为空',
                                'description' => 'query的分词结果，可能为空',
                                'type' => 'array',
                                'items' => [
                                    'description' => '问题的分词数组，如'."\n"
                                        .'['."\n"
                                        .'    "查",'."\n"
                                        .'    "天气"'."\n"
                                        .' ]',
                                    'type' => 'string',
                                    'example' => '天气',
                                ],
                            ],
                            'Messages' => [
                                'title' => '消息的列表',
                                'description' => '消息的列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '消息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Knowledge' => [
                                            'title' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象',
                                            'description' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'HitStatement' => [
                                                    'title' => '命中语句',
                                                    'description' => '命中语句',
                                                    'type' => 'string',
                                                    'example' => '公积金',
                                                ],
                                                'Summary' => [
                                                    'title' => '命中问题的简介',
                                                    'description' => '命中问题的简介',
                                                    'type' => 'string',
                                                    'example' => '公积金提取',
                                                ],
                                                'RelatedKnowledges' => [
                                                    'title' => '关联知识列表',
                                                    'description' => '关联知识列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '关联知识',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'KnowledgeId' => [
                                                                'title' => '知识关联知识的ID',
                                                                'description' => '知识关联知识的ID',
                                                                'type' => 'string',
                                                                'example' => '735899',
                                                            ],
                                                            'Title' => [
                                                                'title' => '知识的关联知识的标题',
                                                                'description' => '知识的关联知识的标题',
                                                                'type' => 'string',
                                                                'example' => '公积金查询',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Category' => [
                                                    'title' => '知识类目',
                                                    'description' => '知识类目',
                                                    'type' => 'string',
                                                    'example' => '公积金',
                                                ],
                                                'Title' => [
                                                    'title' => '命中问题的标题',
                                                    'description' => '命中问题的标题',
                                                    'type' => 'string',
                                                    'example' => '公积金提取',
                                                ],
                                                'Content' => [
                                                    'title' => '命中问题的内容',
                                                    'description' => '命中问题的内容',
                                                    'type' => 'string',
                                                    'example' => '公积金提取，请在首页搜索公积金提取，提交办事的表单',
                                                ],
                                                'AnswerSource' => [
                                                    'title' => '区分答案类型。'."\n"
                                                        .'KnowledgeBase:知识库条；',
                                                    'description' => '区分答案类型。'."\n"
                                                        .'KnowledgeBas：知识库；',
                                                    'type' => 'string',
                                                    'example' => 'KnowledgeBase',
                                                ],
                                                'Id' => [
                                                    'title' => '命中问题在知识库中的ID',
                                                    'description' => '命中问题在知识库中的ID',
                                                    'type' => 'string',
                                                    'example' => '735898',
                                                ],
                                                'Score' => [
                                                    'title' => '分数',
                                                    'description' => '分数',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0.998',
                                                ],
                                                'ContentType' => [
                                                    'title' => '纯文本/富文本答案的标示',
                                                    'description' => '纯文本或富文本答案的标识',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'PLAIN_TEXT' => '纯本文',
                                                        'RICH_TEXT' => '富文本',
                                                    ],
                                                    'example' => 'PLAIN_TEXT',
                                                    'enum' => [
                                                        'PLAIN_TEXT：纯本文',
                                                        'RICH_TEXT: 富文本',
                                                        'CARD_TEMPLATE：卡片模版',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Text' => [
                                            'title' => '当AnswerType为Text时，此字段包含机器人返回的Text对象',
                                            'description' => '当AnswerType为Text时，此字段包含机器人返回的Text对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'HitStatement' => [
                                                    'title' => '命中语句',
                                                    'description' => '命中语句',
                                                    'type' => 'string',
                                                    'example' => '查天气',
                                                ],
                                                'DialogName' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回对话单元名称',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回对话单元名称',
                                                    'type' => 'string',
                                                    'example' => '示例_查天气',
                                                ],
                                                'ArticleTitle' => [
                                                    'title' => '当AnswerSource为MACHINE_READ时，此字段返回命中文章标题',
                                                    'description' => '当AnswerSource为MACHINE_READ时，此字段返回命中文章标题',
                                                    'type' => 'string',
                                                    'example' => '备案十一',
                                                ],
                                                'AnswerSource' => [
                                                    'title' => '区分答案类型',
                                                    'description' => '区分答案类型',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'TABLEQA' => '表格问答',
                                                        'COMMANDS' => '系统指令',
                                                        'SENSITIVE_WORD' => ' 全局敏感词',
                                                        'BotFramework' => '对话工厂',
                                                        'MACHINE_READ' => '机器阅读',
                                                        'ChitChat' => '闲聊',
                                                        'NO_ANSWER' => '无答案',
                                                    ],
                                                    'example' => 'BotFramework',
                                                    'enum' => [
                                                        'ChitChat：闲聊',
                                                        'BotFramework：对话工厂',
                                                        'NO_ANSWER：无答案',
                                                        'MACHINE_READ：机器阅读',
                                                        'CardAnswer：卡片答案',
                                                        'SENSITIVE_WORD： 全局敏感词',
                                                        'COMMANDS：系统指令',
                                                        'TABLEQA：表格问答',
                                                    ],
                                                ],
                                                'Slots' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回专有名词列表',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回专有名词列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '槽位信息',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '具体值',
                                                                'type' => 'string',
                                                                'example' => '北京',
                                                            ],
                                                            'Origin' => [
                                                                'description' => '原始值',
                                                                'type' => 'string',
                                                                'example' => '北京',
                                                            ],
                                                            'Name' => [
                                                                'description' => '名称',
                                                                'type' => 'string',
                                                                'example' => '查天气意图.city',
                                                            ],
                                                            'Hit' => [
                                                                'description' => '是否命中',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'NodeName' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回节点名称',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回节点名称',
                                                    'type' => 'string',
                                                    'example' => '示例_查天气.查天气填槽.__city',
                                                ],
                                                'IntentName' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回意图名称',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回意图名称',
                                                    'type' => 'string',
                                                    'example' => '查天气意图',
                                                ],
                                                'MetaData' => [
                                                    'description' => '元数据',
                                                    'type' => 'string',
                                                    'example' => '[[{\\"columnName\\":\\"姓名\\",\\"stringValue\\":\\"王珊珊\\"}]]',
                                                ],
                                                'ExternalFlags' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回透传参数',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回透传参数',
                                                    'type' => 'object',
                                                ],
                                                'Ext' => [
                                                    'title' => '此字段返回透传参数',
                                                    'description' => '此字段返回透传参数',
                                                    'type' => 'object',
                                                    'example' => '{'."\n"
                                                        .'	"MATCHED_INTENT_SOURCE": "",'."\n"
                                                        .'	"INTENT_ID": 724414,'."\n"
                                                        .'	"IntentName": "查天气意图",'."\n"
                                                        .'	"INTENT_DETAIL": "[我想|我要]查天气",'."\n"
                                                        .'	"LGF_EXPRESSION": "[我想|我要]查天气",'."\n"
                                                        .'	"IS_SESSION_FINISHED": false,'."\n"
                                                        .'	"DsScore": 100.0,'."\n"
                                                        .'	"DIALOG_ID": "299034",'."\n"
                                                        .'	"FINISH_LABEL": false,'."\n"
                                                        .'	"MODULE_START": false,'."\n"
                                                        .'	"INTENT_NAME": "查天气意图",'."\n"
                                                        .'	"INTENT_SOURCE": "Lgf",'."\n"
                                                        .'	"DIALOG_NAME": "示例_查天气"'."\n"
                                                        .'}',
                                                ],
                                                'UserDefinedChatTitle' => [
                                                    'title' => '自定义闲聊主题title',
                                                    'description' => '自定义闲聊主题标题',
                                                    'type' => 'string',
                                                    'example' => '问候',
                                                ],
                                                'Content' => [
                                                    'title' => '文本消息的内容',
                                                    'description' => '文本消息的内容',
                                                    'type' => 'string',
                                                    'example' => '请问您要查哪里的天气？',
                                                ],
                                                'NodeId' => [
                                                    'title' => '当AnswerSource为BotFramework时，此字段返回节点Id',
                                                    'description' => '当AnswerSource为BotFramework时，此字段返回节点ID',
                                                    'type' => 'string',
                                                    'example' => '1410-c7a72a78.__city',
                                                ],
                                                'Score' => [
                                                    'title' => '分数',
                                                    'description' => '分数',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '100.0',
                                                ],
                                                'ContentType' => [
                                                    'title' => '纯文本/富文本答案的标示',
                                                    'description' => '纯文本或富文本答案的标识',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'PLAIN_TEXT' => '纯本文',
                                                        'RICH_TEXT' => '富文本',
                                                    ],
                                                    'example' => 'PLAIN_TEXT',
                                                    'enum' => [
                                                        'PLAIN_TEXT：纯本文',
                                                        'RICH_TEXT: 富文本',
                                                        'CARD_TEMPLATE：卡片模版',
                                                    ],
                                                ],
                                                'Commands' => [
                                                    'title' => '指令参数，如转人工指令的转人工技能组',
                                                    'description' => '指令参数，如转人工指令的转人工技能组',
                                                    'type' => 'object',
                                                    'example' => '{'."\n"
                                                        .'	"sysToAgent": "{\\"skillGroup\\":\\"12\\"}"'."\n"
                                                        .'}',
                                                ],
                                                'ResponseType' => [
                                                    'title' => '当AnswerSource=BotFramework，ResponseType=SSML时，表示命中对话工厂交互式填槽；否则字段不存在',
                                                    'description' => '当AnswerSource为BotFramework，ResponseType为SSML时，表示命中对话工厂交互式填槽；否则字段不存在',
                                                    'type' => 'string',
                                                    'example' => 'SSML',
                                                ],
                                            ],
                                        ],
                                        'Recommends' => [
                                            'title' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表',
                                            'description' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'recommend对象',
                                                'type' => 'object',
                                                'properties' => [
                                                    'KnowledgeId' => [
                                                        'title' => '澄清的知识id',
                                                        'description' => '澄清的知识ID',
                                                        'type' => 'string',
                                                        'example' => '4548',
                                                    ],
                                                    'Title' => [
                                                        'title' => '澄清内容，可能是'."\n"
                                                            .'图谱问答的实体、'."\n"
                                                            .'知识问答的知识标题、'."\n"
                                                            .'表格问答的列值',
                                                        'description' => '澄清内容，可能是'."\n"
                                                            .'图谱问答的实体、'."\n"
                                                            .'知识问答的知识标题、'."\n"
                                                            .'表格问答的列值',
                                                        'type' => 'string',
                                                        'example' => '测试纯文本',
                                                    ],
                                                    'AnswerSource' => [
                                                        'title' => '澄清来源的标识',
                                                        'description' => '澄清来源的标识',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'BotFramework' => '对话工厂',
                                                            'Knowledge' => 'FAQ',
                                                        ],
                                                        'example' => 'KNOWLEDGE',
                                                        'enum' => [
                                                            'Knowledge：FAQ标题',
                                                            'BotFramework：对话工厂',
                                                        ],
                                                    ],
                                                    'Score' => [
                                                        'title' => '推荐内容的分数，当AnswerSource为KNOWLEDGE时，此字段有值',
                                                        'description' => '推荐内容的分数，当AnswerSource为KNOWLEDGE时，此字段有值',
                                                        'type' => 'number',
                                                        'format' => 'double',
                                                        'example' => '0.46',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AnswerType' => [
                                            'title' => '本条消息的类型',
                                            'description' => '本条消息的类型',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Recommend' => '澄清或者反问',
                                                'Text' => '文本',
                                                'Knowledge' => '知识库知识直出',
                                            ],
                                            'example' => 'Text',
                                            'enum' => [
                                                'Text：文本',
                                                'Recommend：澄清或者反问',
                                                'Knowledge：知识库知识直出',
                                                'cardAnswer：卡片工坊的卡片答案',
                                            ],
                                        ],
                                        'AnswerSource' => [
                                            'title' => '当AnswerType为Recommend时，此字段表示推荐的答案来源',
                                            'description' => '当AnswerType为Recommend时，此字段表示推荐的答案来源',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                ' INTENT_FAQ_CLARIFY' => 'FAQ和对话工厂混合澄清',
                                                'TABLEQA' => '表格问答',
                                                'KNOWLEDGE' => 'FAQ',
                                                'BotFramework' => '对话工厂',
                                            ],
                                            'example' => 'KNOWLEDGE',
                                            'enum' => [
                                                'KNOWLEDGE：知识问答',
                                                'INTENT_FAQ_CLARIFY：FAQ和对话工厂混合澄清',
                                                'BotFramework：对话工厂澄清',
                                                'TABLEQA：表格问答',
                                            ],
                                        ],
                                        'VoiceTitle' => [
                                            'title' => '当AnswerType为Recommend时，并且问答的机器人为语音机器人，此字段表示列表型答案在语音场景渲染之后的答案内容',
                                            'description' => '语音场景，澄清内容',
                                            'type' => 'string',
                                            'example' => '请问你说的是公积金查询，还是公积金提取',
                                        ],
                                        'Title' => [
                                            'title' => '当AnswerType为Recommend时，此字段表示推荐或者反问的标题话术',
                                            'description' => '在线场景，反问标题',
                                            'type' => 'string',
                                            'example' => '请问您想咨询的是哪个投保年龄区间呢？',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A2315C4B-A872-5DEE-9DAD-D73B194A4AEC',
                            ],
                            'SessionId' => [
                                'title' => '本次会话的ID',
                                'description' => '本次会话的ID',
                                'type' => 'string',
                                'example' => 'a6f216a0685c4c8baa0e8beb6d5ec6db',
                            ],
                            'MessageId' => [
                                'title' => '本条会话应答消息的ID',
                                'description' => '本条会话应答消息的ID',
                                'type' => 'string',
                                'example' => 'A2315C4B-A872-5DEE-9DAD-D73B194A4AEC'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '会话',
            'responseParamsDescription' => '#### Ext字段说明'."\n"
                .'**AnswerSource=BotFramework时：**'."\n"
                ."\n"
                .'| 字段名 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| MATCHED\\_ENTRY_NAME | String | 命中的触发节点名称 |'."\n"
                .'| MATCHED\\_INTENT_SOURCE | String | 命中的触发节点意图来源 |'."\n"
                .'| INTENT_ID | Long | 命中的意图ID |'."\n"
                .'| IntentName | String | 与INTENT_NAME相同 |'."\n"
                .'| INTENT_DETAIL | String | 意图命中的方式细节，主要在INTENT_SOURCE=Similarity或者Lgf的时候有用，当为Similarity时，这个字段的值就是匹配的意图话术，当为Lgf时，这个字段的值就是匹配的Lgf语法 |'."\n"
                .'| IS\\_SESSION_FINISHED | Boolean | 会话是否完结标志 |'."\n"
                .'| DsScore | String | 命中对话流的分数 |'."\n"
                .'| DIALOG_ID | String | 对话流ID |'."\n"
                .'| FINISH_LABEL | Boolean | 回复节点是否被标记为完结节点，由业务定义，常用于业务统计 |'."\n"
                .'| MODULE_START | Boolean | 是否为对话流开启意图节点 |'."\n"
                .'| INTENT_NAME | String | 命中的意图名称 |'."\n"
                .'| INTENT_SOURCE | String | 意图识别命中的来源方法，包括：`Simialrity` - 相似度匹配方法，`Lgf` - LGF语法匹配方法，`Classify` - 有监督模型方法 |'."\n"
                .'| DIALOG_NAME | String | 对话流名称 |'."\n"
                .'| DS_REPORT | Map | 对话流变量配置中，勾选为“输出至报表”的变量key value数据 |'."\n"
                .'| TASK_ID | String | 异步服务返回的任务ID |'."\n"
                ."\n"
                .'#### 响应报文：'."\n"
                .'##### FAQ问答-直出'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "测试",'."\n"
                .'    "富文",'."\n"
                .'    "本"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Knowledge": {'."\n"
                .'        "Score": 100.0,'."\n"
                .'        "Category": "第一个类目",'."\n"
                .'        "ContentType": "RICH_TEXT",'."\n"
                .'        "AnswerSource": "KnowledgeBase",'."\n"
                .'        "Content": "<p>富文本答案啊</p>",'."\n"
                .'        "Summary": "富文本答案啊",'."\n"
                .'        "Title": "测试富文本",'."\n"
                .'        "Id": "4549"'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Knowledge"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "1b8b19de-7e6d-4e45-b7f1-9daca21af8b0",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "1b8b19de-7e6d-4e45-b7f1-9daca21af8b0"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n\n"
                .'##### FAQ问答-澄清'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "文本"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "AnswerSource": "KNOWLEDGE",'."\n"
                .'      "Recommends": ['."\n"
                .'        {'."\n"
                .'          "Score": 46.0,'."\n"
                .'          "Title": "测试纯文本",'."\n"
                .'          "KnowledgeId": "4548"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "AnswerType": "Recommend"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "5af5d5f9-76b1-45e9-8003-fcd07ab9a5e4",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "5af5d5f9-76b1-45e9-8003-fcd07ab9a5e4"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 对话工厂直出'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "查",'."\n"
                .'    "天气"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "Ext": {'."\n"
                .'          "MATCHED_ENTRY_NAME": "intentWithout_city",'."\n"
                .'          "MATCHED_INTENT_SOURCE": "",'."\n"
                .'          "INTENT_ID": 724414,'."\n"
                .'          "BOT_ANSWER_SOURCE": "Lgf",'."\n"
                .'          "IntentName": "查天气意图",'."\n"
                .'          "INTENT_DETAIL": "[我想|我要]查天气",'."\n"
                .'          "LGF_EXPRESSION": "[我想|我要]查天气",'."\n"
                .'          "IS_SESSION_FINISHED": false,'."\n"
                .'          "DsScore": 100.0,'."\n"
                .'          "DIALOG_ID": "299034",'."\n"
                .'          "FINISH_LABEL": false,'."\n"
                .'          "MODULE_START": false,'."\n"
                .'          "INTENT_NAME": "查天气意图",'."\n"
                .'          "INTENT_SOURCE": "Lgf",'."\n"
                .'          "DIALOG_NAME": "示例_查天气"'."\n"
                .'        },'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "NodeName": "示例_查天气.查天气填槽.__city",'."\n"
                .'        "AnswerSource": "BotFramework",'."\n"
                .'        "Slots": ['."\n"
                .'          {'."\n"
                .'            "Origin": "",'."\n"
                .'            "Hit": false,'."\n"
                .'            "Value": "",'."\n"
                .'            "Name": "查天气意图.city"'."\n"
                .'          }'."\n"
                .'        ],'."\n"
                .'        "Score": 100.0,'."\n"
                .'        "DialogName": "示例_查天气",'."\n"
                .'        "IntentName": "查天气意图",'."\n"
                .'        "Content": "请问您要查哪里的天气？",'."\n"
                .'        "NodeId": "1410-c7a72a78.__city",'."\n"
                .'        "ExternalFlags": {'."\n"
                .'          '."\n"
                .'        }'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "dc6757ef-9d03-4255-92ec-d262752a88ed",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "dc6757ef-9d03-4255-92ec-d262752a88ed"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 对话工厂澄清'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "公积金"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "VoiceTitle": "请问你说的是公积金查询，还是公积金提取",'."\n"
                .'      "AnswerSource": "BotFramework",'."\n"
                .'      "Recommends": ['."\n"
                .'        {'."\n"
                .'          "Score": 0.656,'."\n"
                .'          "AnswerSource": "BotFramework",'."\n"
                .'          "Title": "公积金查询",'."\n"
                .'          "KnowledgeId": "735899"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "Score": 0.634,'."\n"
                .'          "AnswerSource": "BotFramework",'."\n"
                .'          "Title": "公积金提取",'."\n"
                .'          "KnowledgeId": "735900"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "AnswerType": "Recommend"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "ab6be8af-cee4-40c3-9919-2ac7461d7d98",'."\n"
                .'  "SessionId": "123",'."\n"
                .'  "MessageId": "ab6be8af-cee4-40c3-9919-2ac7461d7d98"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 意图、FAQ混合澄清'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "公积金"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "VoiceTitle": "请问你说的是公积金查询，还是住房公积金在个人所得税税前扣除的具体规定是什么？",'."\n"
                .'      "AnswerSource": "INTENT_FAQ_CLARIFY",'."\n"
                .'      "Recommends": ['."\n"
                .'        {'."\n"
                .'          "Score": 0.656,'."\n"
                .'          "AnswerSource": "BotFramework",'."\n"
                .'          "Title": "公积金查询",'."\n"
                .'          "KnowledgeId": "735899"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "Score": 0.47410887479782104,'."\n"
                .'          "Category": "税务-12366&680条-税款计算-居民个人取得综合所得-个人所得税专项扣除",'."\n"
                .'          "AnswerSource": "KNOWLEDGE",'."\n"
                .'          "Title": "住房公积金在个人所得税税前扣除的具体规定是什么？",'."\n"
                .'          "KnowledgeId": "7049"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "AnswerType": "Recommend"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "08d6bb1c-5394-4836-8e4a-86c07e7729b1",'."\n"
                .'  "SessionId": "123",'."\n"
                .'  "MessageId": "08d6bb1c-5394-4836-8e4a-86c07e7729b1"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 闲聊'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "你好"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "AnswerSource": "ChitChat",'."\n"
                .'        "HitStatement": "你好",'."\n"
                .'        "Content": "哔~哔~哔~，我来了"'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "8f267d8c-c118-4d6a-9ba1-2a5bdc720fed",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "8f267d8c-c118-4d6a-9ba1-2a5bdc720fed"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 全局敏感词'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "查",'."\n"
                .'    "天气"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "AnswerSource": "SENSITIVE_WORD",'."\n"
                .'        "Content": "您说的这个问题我不能回答您，您可以尝试询问其他问题"'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "961d4187-e2e7-4463-8063-a4c79c912227",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "961d4187-e2e7-4463-8063-a4c79c912227"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 转人工'."\n"
                ."\n"
                .'###### 全局转人工'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "人工"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "AnswerSource": "COMMANDS",'."\n"
                .'        "Content": "正在为您转接人工客服",'."\n"
                .'        "Commands": {'."\n"
                .'          "sysToAgent": "{\\"skillGroup\\":\\"12\\"}"'."\n"
                .'        }'."\n"
                .'      },'."\n"
                .'      "Knowledge": {'."\n"
                .'        '."\n"
                .'      },'."\n"
                .'      "Type": "Text",'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",'."\n"
                .'  "SessionId": "123",'."\n"
                .'  "MessageId": "fbbe0230-af14-4850-8f59-2ff60dfbf773"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'###### 触发对话工厂意图转人工'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "转",'."\n"
                .'    "人工"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "Ext": {'."\n"
                .'          "MATCHED_ENTRY_NAME": "转人工",'."\n"
                .'          "MATCHED_INTENT_SOURCE": "",'."\n"
                .'          "INTENT_ID": 8454,'."\n"
                .'          "BOT_ANSWER_SOURCE": "Similarity",'."\n"
                .'          "intentName": "转人工",'."\n"
                .'          "DsScore": 100.0,'."\n"
                .'          "INTENT_DETAIL": "转人工",'."\n"
                .'          "LGF_EXPRESSION": "转人工",'."\n"
                .'          "IS_SESSION_FINISHED": true,'."\n"
                .'          "dsScore": 100.0,'."\n"
                .'          "DIALOG_ID": "2529",'."\n"
                .'          "FINISH_LABEL": false,'."\n"
                .'          "IntentName": "转人工",'."\n"
                .'          "MODULE_START": true,'."\n"
                .'          "INTENT_NAME": "转人工",'."\n"
                .'          "INTENT_SOURCE": "Similarity",'."\n"
                .'          "DIALOG_NAME": "公积金转人工"'."\n"
                .'        },'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "NodeName": "公积金转人工.回复信息",'."\n"
                .'        "AnswerSource": "BotFramework",'."\n"
                .'        "Score": 100.0,'."\n"
                .'        "DialogName": "公积金转人工",'."\n"
                .'        "IntentName": "转人工",'."\n"
                .'        "Content": "这是转人工的回复",'."\n"
                .'        "Commands": {'."\n"
                .'          "sysToAgent": "{\\"skillGroup\\":\\"8\\",\\"ext\\":\\"123\\"}"'."\n"
                .'        },'."\n"
                .'        "NodeId": "i073y198",'."\n"
                .'        "ExternalFlags": {'."\n"
                .'          '."\n"
                .'        }'."\n"
                .'      },'."\n"
                .'      "Type": "Text",'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",'."\n"
                .'  "SessionId": "123",'."\n"
                .'  "MessageId": "590f0434-030a-4de2-8212-bf1a96e0c687"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 无答案'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "公积金",'."\n"
                .'    "贷款"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "AnswerSource": "NO_ANSWER",'."\n"
                .'        "Content": "我还没有学会这个问题，已经记录会尽快学习为您解答，请尝试询问我其他问题"'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "1ad8733a-7180-4e3b-a969-96f47d774256"'."\n"
                .'}'."\n"
                .'```'."\n"
                .' '."\n"
                .'##### 机器阅读  [非标，依赖开启文档问答能力]'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "QuerySegList":['."\n"
                .'        "项目",'."\n"
                .'        "备案"'."\n"
                .'    ],'."\n"
                .'    "Messages":['."\n"
                .'        {'."\n"
                .'            "Type":"Text",'."\n"
                .'            "AnswerType": "Text",'."\n"
                .'            "Text":{'."\n"
                .'                "AnswerSource":"MACHINE_READ",'."\n"
                .'                "ArticleTitle":"备案十一",'."\n"
                .'                "Content":"四、申请接收:'."\n"
                .'申请方式:网上申请'."\n"
                .'联系电话:0571-87052724、87052837'."\n"
                .'办公地址:无'."\n"
                .'五、办理基本流程:'."\n"
                .'1、项目单位登录浙江政务服务网(http://www.zjzwfw.gov.cn)进行法人用户'."\n"
                .'注册。'."\n"
                .'2、项目单位使用法人用户账号登录浙江政务服务网投资项目在线审批监'."\n"
                .'管平台(http://tzxm.zjzwfw.gov.cn)(以下简称在线平台)。'."\n"
                .'3、项目单位选择在线平台“项目登记”中的“备案类登记”栏目,进入'."\n"
                .'备案系统。'."\n"
                .'4、填报项目备案信息'."\n"
                .'5、提交项目备案信息表,完成项目赋码'."\n"
                .'6、提交声明,完成项目备案'."\n"
                .'流程图:http://zjqlk.oss-cn-hangzhou.aliyuncs.com/c/5/53"'."\n"
                .'            }'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "RequestId":"089abc58-e9ab-4aa8-86a8-70fc9d8cf0fb",'."\n"
                .'    "SessionId":"123",'."\n"
                .'    "MessageId":"089abc58-e9ab-4aa8-86a8-70fc9d8cf0fb"'."\n"
                .'}'."\n"
                .'``` '."\n"
                ."\n"
                .'##### 表格问答直出[非标，依赖开启Tableqa能力]'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "王珊珊",'."\n"
                .'    "的",'."\n"
                .'    "成绩"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "Text": {'."\n"
                .'        "ContentType": "PLAIN_TEXT",'."\n"
                .'        "AnswerSource": "TABLEQA",'."\n"
                .'        "Content": "姓名是王珊珊的成绩是不及格"'."\n"
                .'      },'."\n"
                .'      "AnswerType": "Text"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "c09d1913-dd8d-4a45-b8bd-e45e4fcf872b",'."\n"
                .'  "SessionId": "123",'."\n"
                .'  "MessageId": "c09d1913-dd8d-4a45-b8bd-e45e4fcf872b"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'##### 表格问答反问[非标，依赖开启Tableqa能力]'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "QuerySegList": ['."\n"
                .'    "收益率",'."\n"
                .'    "大于",'."\n"
                .'    "4",'."\n"
                .'    "的",'."\n"
                .'    "产品"'."\n"
                .'  ],'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "AnswerSource": "TABLEQA",'."\n"
                .'      "Title": "请选择投资时间：",'."\n"
                .'      "Recommends": ['."\n"
                .'        {'."\n"
                .'          "Title": "1907"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "Title": "31"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "Title": "365"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "AnswerType": "Recommend"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "abef84e0-8d08-4d80-9dfb-2e958e0833ad",'."\n"
                .'  "SessionId": "1234",'."\n"
                .'  "MessageId": "abef84e0-8d08-4d80-9dfb-2e958e0833ad"'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => '## 常见问答错误'."\n"
                ."\n"
                .'### 第三方服务错误'."\n"
                .'第三方服务错误是由于在FAQ或对话工厂中配置了第三方服务的接口，在问答命中配置的条件或话术时，会调用对应的第三方服务。如果该服务调用错误，则会提示“Third party interface error”，具体协议如下。'."\n"
                ."\n"
                .'**响应参数说明**'."\n"
                ."\n"
                .'| 字段名称  | 字段含义                                                         |'."\n"
                .'| --------- | ------------------------------------------------------------ |'."\n"
                .'| RequestId | 请求ID                                                       |'."\n"
                .'| HostId    | 云小蜜主机ID                                                 |'."\n"
                .'| Code      | 错误码，第三方服务错误的错误码为“Third party interface error” |'."\n"
                .'| Message   | 错误说明                                                     |'."\n"
                ."\n\n"
                .'**响应参数示例**'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "RequestId": "A805905D-B20C-57C9-8793-EAF98FBD8F84",'."\n"
                .'    "HostId": "chatbot.cn-shanghai.aliyuncs.com",'."\n"
                .'    "Code": "Third party interface error",'."\n"
                .'    "Message": "第三方接口错误. HTTP 请求出现 IOException 异常，可能由网络链接超时，服务端未响应或其他配置问题导致, Url 信息: https://example.com/order/create",'."\n"
                .'    "Recommend": "https://next.api.aliyun.com/troubleshoot?q=Third party interface error&product=Chatbot"'."\n"
                .'}'."\n"
                .'```',
        ],
        'Associate' => [
            'summary' => '根据用户query联想知识库中的FAQ。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户表述',
                        'description' => '用户表述',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '公积金提取',
                    ],
                ],
                [
                    'name' => 'Perspective',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '视角编码，用于调用同一知识标题下不同视角的答案。在拼装请求参数时，需要以Perspective={视角编码}的格式传递参数。如：&Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准。目前仅支持一个视角答案的调用。       （公有云）',
                        'description' => '视角编码，用于调用同一知识标题下不同视角的答案。在拼装请求参数时，需要以Perspective={视角编码}的格式传递参数。如：&Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准。目前仅支持一个视角答案的调用',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'FZJBY3raWr',
                        ],
                        'required' => false,
                        'example' => '["qyzzVfyFfa"]',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。',
                        'description' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7c3cec23cc8940bc9db4a318c8f4f0aa',
                    ],
                ],
                [
                    'name' => 'RecommendNum',
                    'in' => 'query',
                    'schema' => [
                        'title' => '推荐问题数量，1-10，当出推荐的时候才生效，返回不大于RecommendN',
                        'description' => '推荐问题数量，1-10，当出推荐的时候才生效，返回小于等于RecommendNum的推荐问题',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '8',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5C20F0D4-9721-178A-8236-3BF990634962',
                            ],
                            'Associate' => [
                                'title' => '联想的列表',
                                'description' => '联想的列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '联想推荐的列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Meta' => [
                                            'title' => '附带信息',
                                            'description' => '附带信息',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Title' => [
                                            'title' => '关联问题的标题',
                                            'description' => '关联问题的标题',
                                            'type' => 'string',
                                            'example' => '公积金提取的政策',
                                        ],
                                    ],
                                ],
                            ],
                            'SessionId' => [
                                'title' => '本次会话的ID',
                                'description' => '本次会话的ID',
                                'type' => 'string',
                                'example' => '1531ded6b3df4afca4be63943f708bb7',
                            ],
                            'MessageId' => [
                                'title' => '本条会话应答消息的ID',
                                'description' => '本条会话应答消息的ID',
                                'type' => 'string',
                                'example' => '5ADF0EBD-7C50-1922-A28B-43215B47CC1A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '会话-联想API',
            'responseParamsDescription' => '### 示例'."\n"
                ."\n"
                .'#### 响应报文'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "MessageId":"1eb47d7a1706429081e90c83c62c2f00",'."\n"
                .'    "SessionId":"93f11165a2a24289a6f869760e8cb3f3",'."\n"
                .'     "Associate":['."\n"
                .'         {'."\n"
                .'             "Meta":"{}",'."\n"
                .'             "Title": "专业及后勤类岗位职业发展方有哪些？"'."\n"
                .'         },'."\n"
                .'         {'."\n"
                .'             "Meta":"{}",'."\n"
                .'             "Title": "专业及后勤类岗位职业发展方有哪些？"'."\n"
                .'         }'."\n"
                .'      ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'BeginSession' => [
            'summary' => '获取欢迎语接口。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '149C7528-C104-1B50-A4F9-0C5907A8AD9D',
                            ],
                            'WelcomeMessage' => [
                                'title' => '欢迎语',
                                'description' => '欢迎语',
                                'type' => 'string',
                                'example' => '智能对话机器人为您服务，请问有什么可以帮您？',
                            ],
                            'SilenceReplyTimeout' => [
                                'description' => '静默超时时间，单位：秒',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Interruptible' => [
                                'description' => '语音播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'AsrMaxEndSilence' => [
                                'description' => 'ASR尾点检测时间，单位：毫秒',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '700',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取欢迎语',
        ],
        'Nlu' => [
            'summary' => '针对用户query，返回机器人有关这个query的语言理解（nlu）结果。当前只支持对话工厂、中控的NLU信息透出，其他引擎后续按需支持。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户表述',
                        'description' => '用户表述',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '北京的天气怎么样',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Messages' => [
                                'title' => '消息的列表',
                                'description' => '消息的列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DialogHubNluInfo' => [
                                            'title' => '对话中控的nlu信息',
                                            'description' => '对话中控的nlu信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'GlobalDictList' => [
                                                    'title' => '全局名词列表',
                                                    'description' => '全局名词列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'StandardWord' => [
                                                                'title' => '名词',
                                                                'description' => '名词',
                                                                'type' => 'string',
                                                                'example' => '天气',
                                                            ],
                                                            'Word' => [
                                                                'title' => '同义词',
                                                                'description' => '同义词',
                                                                'type' => 'string',
                                                                'example' => '天气',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'GlobalSensitiveWordList' => [
                                                    'title' => '全局敏感词列表',
                                                    'description' => '全局敏感词列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'StandardWord' => [
                                                                'title' => '名词',
                                                                'description' => '名词',
                                                                'type' => 'string',
                                                                'example' => '天气',
                                                            ],
                                                            'Word' => [
                                                                'title' => '同义词',
                                                                'description' => '同义词',
                                                                'type' => 'string',
                                                                'example' => '天气',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'DsNluInfo' => [
                                            'title' => '对话工厂的nlu信息',
                                            'description' => '对话工厂的nlu信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'EntityList' => [
                                                    'title' => '实体列表',
                                                    'description' => '实体列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'title' => '实体名称',
                                                                'description' => '实体名称',
                                                                'type' => 'string',
                                                                'example' => '@城市',
                                                            ],
                                                            'Origin' => [
                                                                'title' => '实体原词（实体成员）',
                                                                'description' => '实体原词（实体成员）',
                                                                'type' => 'string',
                                                                'example' => '北京',
                                                            ],
                                                            'Type' => [
                                                                'title' => '实体类型，当前只有text类型',
                                                                'description' => '实体类型，当前只有text类型',
                                                                'type' => 'string',
                                                                'example' => 'text',
                                                            ],
                                                            'Value' => [
                                                                'title' => '实体同义词',
                                                                'description' => '实体同义词',
                                                                'type' => 'string',
                                                                'example' => '首都',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'IntentList' => [
                                                    'title' => '意图列表',
                                                    'description' => '意图列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'IntentId' => [
                                                                'title' => '意图id',
                                                                'description' => '意图ID',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '724387',
                                                            ],
                                                            'MatchDetail' => [
                                                                'title' => '匹配详情（匹配过程）',
                                                                'description' => '匹配详情（匹配过程）',
                                                                'type' => 'string',
                                                                'example' => 'classifierType=Fewshot,from=Fewshot,content=[我要查北京的天气, 帮我查北京的天气, 北京天气怎么样, 北京今天下雨吗, 北京今天多少度]',
                                                            ],
                                                            'MatchType' => [
                                                                'title' => '匹配类型，其枚举值含义如下：  Similarity：query与意图通过意图话术相似度匹配 Lgf：query与意图通过LGF匹配 Classify：query与意图通过模型训练匹配 FewShotLearning：query与意图通过系统内置fewshot模型匹配 BuildIn： query与系统内置意图匹配',
                                                                'description' => '匹配类型，其枚举值含义如下：  Similarity：query与意图通过意图话术相似度匹配 Lgf：query与意图通过LGF匹配 Classify：query与意图通过模型训练匹配 FewShotLearning：query与意图通过系统内置fewshot模型匹配 BuildIn： query与系统内置意图匹配',
                                                                'type' => 'string',
                                                                'example' => 'FewShotLearning',
                                                            ],
                                                            'Name' => [
                                                                'title' => '意图名称',
                                                                'description' => '意图名称',
                                                                'type' => 'string',
                                                                'example' => '查天气意图',
                                                            ],
                                                            'Score' => [
                                                                'title' => '分数',
                                                                'description' => '分数',
                                                                'type' => 'number',
                                                                'format' => 'double',
                                                                'example' => '0.995',
                                                            ],
                                                            'SlotList' => [
                                                                'title' => '命中意图的槽位列表',
                                                                'description' => '命中意图的槽位列表',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Name' => [
                                                                            'title' => '实体名称',
                                                                            'description' => '实体名称',
                                                                            'type' => 'string',
                                                                            'example' => '@城市',
                                                                        ],
                                                                        'Origin' => [
                                                                            'title' => '实体原词（实体成员）',
                                                                            'description' => '实体原词（实体成员）',
                                                                            'type' => 'string',
                                                                            'example' => '北京',
                                                                        ],
                                                                        'Type' => [
                                                                            'title' => '实体类型，当前只有text类型',
                                                                            'description' => '实体类型，当前只有text类型',
                                                                            'type' => 'string',
                                                                            'example' => 'text',
                                                                        ],
                                                                        'Value' => [
                                                                            'title' => '实体同义词',
                                                                            'description' => '实体同义词',
                                                                            'type' => 'string',
                                                                            'example' => '首都',
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
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A6357C1B-1D79-1382-B259-BD9E80751B42',
                            ],
                            'MessageId' => [
                                'title' => '本条语言理解应答消息的ID',
                                'description' => '本条语言理解应答消息的ID',
                                'type' => 'string',
                                'example' => '2828708A-2C7A-1BAE-B810-87DB9DA9C661',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '统一NLU接口',
            'responseParamsDescription' => '### 示例'."\n"
                ."\n"
                .'#### 响应报文'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "Messages": ['."\n"
                .'    {'."\n"
                .'      "DsNluInfo": {'."\n"
                .'        "EntityList": ['."\n"
                .'          {'."\n"
                .'            "Origin": "北京",'."\n"
                .'            "Name": "@城市",'."\n"
                .'            "Type": "text",'."\n"
                .'            "Value": "首都"'."\n"
                .'          }'."\n"
                .'        ],'."\n"
                .'        "IntentList": ['."\n"
                .'          {'."\n"
                .'            "Score": 0.995,'."\n"
                .'            "SlotList": ['."\n"
                .'              {'."\n"
                .'                "Origin": "北京",'."\n"
                .'                "Name": "@城市",'."\n"
                .'                "Type": "text",'."\n"
                .'                "Value": "首都"'."\n"
                .'              }'."\n"
                .'            ],'."\n"
                .'            "MatchType": "FewShotLearning",'."\n"
                .'            "MatchDetail": "classifierType=Fewshot,from=Fewshot,content=[我要查北京的天气, 帮我查北京的天气, 北京天气怎么样, 北京今天下雨吗, 北京今天多少度]",'."\n"
                .'            "Name": "查天气意图",'."\n"
                .'            "IntentId": 724387'."\n"
                .'          }'."\n"
                .'        ]'."\n"
                .'      },'."\n"
                .'      "DialogHubNluInfo": {'."\n"
                .'        "GlobalDictList": ['."\n"
                .'          {'."\n"
                .'            "StandardWord": "天气",'."\n"
                .'            "Word": "天气"'."\n"
                .'          }'."\n"
                .'        ],'."\n"
                .'        "GlobalSensitiveWordList": ['."\n"
                .'          {'."\n"
                .'            "StandardWord": "天气",'."\n"
                .'            "Word": "天气"'."\n"
                .'          }'."\n"
                .'        ]'."\n"
                .'      }'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "5C20F0D4-9721-178A-8236-3BF990634962",'."\n"
                .'  "MessageId": "e7ac691f-b166-4561-bddf-9dd00c8bdce6"'."\n"
                .'}'."\n"
                ."\n"
                .'```',
        ],
        'GetAsyncResult' => [
            'summary' => '获取异步服务执行结果，配合Chat接口使用。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '从Chat接口返回参数中获取TASK_ID',
                        'description' => '异步服务的任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '从Chat接口中获取TASK_ID',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '客户服务执行结果数据',
                                'type' => 'string',
                                'example' => '{"message":"执行完成"}',
                            ],
                            'Status' => [
                                'description' => '执行状态：'."\n"
                                    .'|  字段值   | 含义  |'."\n"
                                    .'|----|----|'."\n"
                                    .'|  Success  | 任务执行成功  |'."\n"
                                    .'| Runninig  | 任务在执行中 |'."\n"
                                    .'| Fail  | 任务执行失败 |',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取异步函数执行结果',
            'description' => '获取异步服务执行结果',
        ],
        'CreateInstance' => [
            'summary' => '创建沙箱环境机器人。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人名称，不超过50字',
                        'description' => '机器人名称，不超过50个字符',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '小蜜机器人',
                    ],
                ],
                [
                    'name' => 'LanguageCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人服务的语言，如zh-cn、en-us，参考 http://www.lingoes.net/zh/translator/langcode.htm   入参全小写，当前只支持 zh-cn、en-us',
                        'description' => '机器人服务的语言，如zh-cn、en-us，默认值为业务空间的默认语言。可选值为业务空间支持的语言',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'zh-cn',
                    ],
                ],
                [
                    'name' => 'Introduction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人备注，不超过50字',
                        'description' => '机器人备注，不超过50字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用于手机app的小蜜机器人',
                    ],
                ],
                [
                    'name' => 'RobotType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人类型',
                        'description' => '机器人类型，默认为scenario_im',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'scenario_callout' => '外呼机器人',
                            'scenario_im' => '在线文本机器人',
                            'scenario_ivr' => '导航机器人',
                        ],
                        'example' => 'scenario_im',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F2E2C40D-AB09-45A1-B5C5-EB9F5C4E4E4A',
                            ],
                            'InstanceId' => [
                                'title' => '机器人唯一标识',
                                'description' => '机器人唯一标识',
                                'type' => 'string',
                                'example' => 'chatbot-cn-mp90s2lrk00050',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '机器人-创建',
        ],
        'DeleteInstance' => [
            'summary' => '删除沙箱和线上的机器人。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Status' => [
                                'title' => '任务状态，可以在GetInstancePublishTaskState API 了解更多的状态',
                                'description' => '任务状态，可以在GetInstancePublishTaskState API 了解更多的状态',
                                'type' => 'string',
                                'example' => 'FE_RUNNING',
                            ],
                            'Response' => [
                                'title' => '任务id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8521',
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务类型',
                                    'type' => 'string',
                                    'example' => 'robot',
                                ],
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2021-09-11T09:26:14Z',
                            ],
                            'CreateUserId' => [
                                'title' => '任务创建人Id',
                                'description' => '任务创建人ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9052',
                            ],
                            'Error' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'Id' => [
                                'title' => '任务id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8521',
                            ],
                            'CreateUserName' => [
                                'title' => '任务创建人',
                                'description' => '任务创建人',
                                'type' => 'string',
                                'example' => 'xuqiang_test',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '机器人-删除',
        ],
        'UpdateInstance' => [
            'summary' => '更新机器人名称，描述。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要修改的机器人名称',
                        'description' => '要修改的机器人名称，最多50个字符',
                        'type' => 'string',
                        'required' => false,
                        'example' => '智能客服-小C',
                    ],
                ],
                [
                    'name' => 'Introduction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要修改的机器人备注',
                        'description' => '要修改的机器人备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用于C端问答的机器人',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C45BFEE4-F657-1332-8B47-2C757B94C972',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '机器人-更新',
        ],
        'LinkInstanceCategory' => [
            'summary' => '机器人绑定知识类目。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人唯一标识',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'CategoryIds',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '知识类目Id',
                        'description' => '绑定到机器人的FAQ类目ID数组',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[\\"30000065789\\"]',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D8C96601-E645-1BD7-99F3-04EADAB84E29',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '机器人-绑定类目',
        ],
        'DescribeInstance' => [
            'summary' => '查询机器人详情。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '907AA5F2-0521-49AB-80AB-1ADEFAB2B901',
                            ],
                            'InstanceId' => [
                                'title' => '机器人唯一标识',
                                'description' => '机器人唯一标识',
                                'type' => 'string',
                                'example' => 'chatbot-cn-mp90s2lrk00050',
                            ],
                            'Name' => [
                                'title' => '机器人名称',
                                'description' => '机器人名称',
                                'type' => 'string',
                                'example' => '智能客服-小C',
                            ],
                            'TimeZone' => [
                                'title' => '机器人的时区，参考《公共-时区码》',
                                'description' => '机器人的时区，参考《公共-时区码》',
                                'type' => 'string',
                                'example' => 'Asia/Chongqing',
                            ],
                            'Introduction' => [
                                'title' => '机器人备注',
                                'description' => '机器人备注',
                                'type' => 'string',
                                'example' => '用于C端问答的机器人',
                            ],
                            'LanguageCode' => [
                                'title' => '机器人服务的语言，如zh-cn、en-us',
                                'description' => '机器人服务的语言，如zh-cn、en-us',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'en-us' => '英文',
                                    'zh-cn' => '中文',
                                ],
                                'example' => 'zh-cn',
                            ],
                            'RobotType' => [
                                'title' => '机器人类型',
                                'description' => '机器人类型',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'scenario_callout' => '外呼机器人',
                                    'scenario_im' => '在线文本机器人',
                                    'scenario_ivr' => '导航机器人',
                                ],
                                'example' => 'scenario_im',
                            ],
                            'Avatar' => [
                                'title' => '机器人头像的URL',
                                'description' => '机器人头像的URL',
                                'type' => 'string',
                                'example' => '/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png',
                            ],
                            'EditStatus' => [
                                'title' => '机器人状态： EDITING(编辑中)、 PUBLISHED(已发布)',
                                'description' => '机器人状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'PUBLISHED' => '已发布',
                                    'EDITING' => '编辑中',
                                ],
                                'example' => 'PUBLISHED',
                            ],
                            'CreateTime' => [
                                'title' => '机器人创建的 UTC 时间',
                                'description' => '机器人创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2021-08-12T16:00:01Z',
                            ],
                            'Categories' => [
                                'title' => '类目列表',
                                'description' => '类目列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CategoryId' => [
                                            'title' => '类目id',
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30000066832',
                                        ],
                                        'Name' => [
                                            'title' => '类目名称',
                                            'description' => '类目名称',
                                            'type' => 'string',
                                            'example' => '杭州市防疫政策',
                                        ],
                                        'ParentCategoryId' => [
                                            'title' => '父类目id，-1表示根目录',
                                            'description' => '父类目ID，-1表示根目录',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '-1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取机器人详情',
            'responseParamsDescription' => '### 示例'."\n"
                .'#### 响应报文：'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'	"Name": "test1",'."\n"
                .'	"LanguageCode": "zh-cn",'."\n"
                .'  "RobotType":"scenario_im",'."\n"
                .'	"Introduction": "客户演示",'."\n"
                .'	"InstanceId": "chatbot-cn-mp90s2lrk00050",'."\n"
                .'	"CreateTime": "2018-09-11T09:26:14Z",'."\n"
                .'	"RequestId": "E7661C58-9CE7-4754-AB98-9BA40EAA7C27",'."\n"
                .'	"Avatar": "//gw.alicdn.com/tfs/TB1N5CwqTtYBeNjy1XdXXXXyVXa-90-97.png",'."\n"
                .'	"TimeZone": "Asia/Chongqing",'."\n"
                .'	"Categories": ['."\n"
                .'	  {'."\n"
                .'		"Name": "测试类目test11",'."\n"
                .'		"ParentCategoryId": -1,'."\n"
                .'		"CategoryId": 1000006427'."\n"
                .'	  }'."\n"
                .'	]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListInstance' => [
            'summary' => '查询机器人列表。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页-第几页，默认1',
                        'description' => '分页-第几页，默认1',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页-页面大小，默认10',
                        'description' => '分页-页面大小，默认10',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RobotType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按机器人类型筛选',
                        'description' => '按机器人类型筛选',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'scenario_callout' => '外呼机器人',
                            'scenario_im' => '在线文本机器人',
                            'scenario_ivr' => '导航机器人',
                        ],
                        'example' => 'scenario_im',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按机器人名称模糊搜索',
                        'description' => '按机器人名称模糊搜索',
                        'type' => 'string',
                        'required' => false,
                        'example' => '售前客服',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Instances' => [
                                'title' => '机器人列表信息',
                                'description' => '机器人列表信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '机器人信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '机器人唯一标识',
                                            'description' => '机器人唯一标识',
                                            'type' => 'string',
                                            'example' => 'chatbot-cn-mp90s2lrk00050',
                                        ],
                                        'Name' => [
                                            'title' => '机器人名称',
                                            'description' => '机器人名称',
                                            'type' => 'string',
                                            'example' => '智能客服-小C',
                                        ],
                                        'Introduction' => [
                                            'title' => '机器人备注',
                                            'description' => '机器人备注',
                                            'type' => 'string',
                                            'example' => '用于C端问答的机器人',
                                        ],
                                        'LanguageCode' => [
                                            'title' => '机器人服务的语言',
                                            'description' => '机器人服务的语言，如 zh-cn、en-us，参考 http://www.lingoes.net/zh/translator/langcode.htm ',
                                            'type' => 'string',
                                            'example' => 'zh-cn',
                                        ],
                                        'RobotType' => [
                                            'title' => '机器人类型',
                                            'description' => '机器人类型',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'scenario_callout' => '外呼机器人',
                                                'scenario_im' => '在线文本机器人',
                                                'scenario_ivr' => '导航机器人',
                                            ],
                                            'example' => 'scenario_im',
                                        ],
                                        'Avatar' => [
                                            'title' => '机器人头像的URL',
                                            'description' => '机器人头像的URL',
                                            'type' => 'string',
                                            'example' => '/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png',
                                        ],
                                        'CreateTime' => [
                                            'title' => '机器人创建的 UTC 时间',
                                            'description' => '机器人创建的 UTC 时间',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '总条数',
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '23',
                            ],
                            'PageSize' => [
                                'title' => '分页-页面大小',
                                'description' => '分页-页面大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'PageNumber' => [
                                'title' => '分页-第几页',
                                'description' => '分页-第几页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '92B81548-42B9-4B34-924B-4E778AEB412B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '机器人-列表',
            'responseParamsDescription' => '### 示例'."\n"
                .'#### 响应报文：'."\n"
                .'```json'."\n"
                .' {'."\n"
                .'  "PageNumber": 1,'."\n"
                .'  "TotalCount": 1,'."\n"
                .'  "PageSize": 10,'."\n"
                .'  "RequestId": "787B6D28-A81E-486F-BC8C-64ADED337B25",'."\n"
                .'  "Instances":['."\n"
                .'      {'."\n"
                .'          "InstanceId":"chatbot-cn-xxxxx",'."\n"
                .'          "Avatar":"/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png",'."\n"
                .'          "LanguageCode":"zh-cn",'."\n"
                .'          "RobotType":"scenario_im",'."\n"
                .'          "Name":"智能客服-小C",'."\n"
                .'          "Introduction":"用于C端问答的机器人",'."\n"
                .'          "CreateTime":"2021-08-12T16:00:01Z"'."\n"
                .'      }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                ."\n"
                .'```',
        ],
        'CreateInstancePublishTask' => [
            'summary' => '将沙箱机器人发布到线上。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人唯一标识',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FE_SUCCESS' => '发布成功',
                                    'FE_ABORTED' => '发布取消',
                                    'FE_WARNING' => '有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_FAILED' => '发布失败',
                                    'FE_RUNNING' => '正在发布中',
                                ],
                                'example' => 'FE_RUNNING',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '发布任务的业务类型',
                                    'type' => 'string',
                                    'example' => 'robot',
                                ],
                            ],
                            'Error' => [
                                'title' => 'job失败信息',
                                'description' => 'job失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误,faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建机器人发布任务',
            'responseParamsDescription' => "\n"
                .'### 示例'."\n"
                .'#### 响应报文：'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "ModifyTime": "2022-04-12T06:30:17Z",'."\n"
                .'    "BizTypeList": ['."\n"
                .'        "robot"'."\n"
                .'    ],'."\n"
                .'    "CreateTime": "2022-04-12T06:30:17Z",'."\n"
                .'    "RequestId": "edba56e5-aac2-49b4-a406-3e4d7e7952dd",'."\n"
                .'    "Response": "4930",'."\n"
                .'    "Id": 4930,'."\n"
                .'    "Status": "FE_RUNNING"'."\n"
                .'}'."\n"
                ."\n"
                .'```',
        ],
        'CancelInstancePublishTask' => [
            'summary' => '在发布机器人的过程中，取消机器人发布任务。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '8521',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FE_SUCCESS' => '发布成功',
                                    'FE_ABORTED' => '发布取消',
                                    'FE_FAILED' => '发布失败',
                                    'FE_RUNNING' => '正在发布中',
                                ],
                                'example' => 'FE_ABORTED',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务列表',
                                    'type' => 'string',
                                    'example' => 'robot',
                                ],
                            ],
                            'Error' => [
                                'title' => 'job失败信息',
                                'description' => 'job失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '取消机器人发布',
            'responseParamsDescription' => '### 示例'."\n"
                .'#### 响应报文：'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "ModifyTime": "2022-04-14T03:43:55Z",'."\n"
                .'    "BizTypeList": ['."\n"
                .'        "robot"'."\n"
                .'    ],'."\n"
                .'    "CreateTime": "2022-04-14T03:43:54Z",'."\n"
                .'    "RequestId": "c2f542c6-f0e3-464c-9aaf-ad6f6eab8140",'."\n"
                .'    "Response": "5088",'."\n"
                .'    "Warnings": {'."\n"
                .'        "category_bind_chitchat": ['."\n"
                .'            "以下类目没有发布到正式环境:第一个闲聊包"'."\n"
                .'        ]'."\n"
                .'    },'."\n"
                .'    "Id": 5088,'."\n"
                .'    "Status": "FE_ABORTED"'."\n"
                .'}'."\n"
                ."\n"
                .'```',
        ],
        'ContinueInstancePublishTask' => [
            'summary' => '机器人发布告警时，忽略告警并继续发布。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '8521',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FE_SUCCESS' => '发布成功',
                                    'FE_ABORTED' => '发布取消',
                                    'FE_WARNING' => '发布警告',
                                    'FE_FAILED' => '发布失败',
                                    'FE_RUNNING' => '正在发布中',
                                ],
                                'example' => 'FE_RUNNING',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务类型',
                                    'type' => 'string',
                                    'example' => 'robot',
                                ],
                            ],
                            'Error' => [
                                'title' => 'job失败信息',
                                'description' => 'job失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                            'Warnings' => [
                                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'	"category_bind_faq": ['."\n"
                                    .'		"以下类目没有发布到正式环境: 项目交付信息汇总"'."\n"
                                    .'	]'."\n"
                                    .'}',
                            ],
                            'Errors' => [
                                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '继续机器人发布',
            'responseParamsDescription' => '### Warnings&Errors 子发布模块枚举：'."\n"
                .'| key值 | 含义 |'."\n"
                .'| --- | --- |'."\n"
                .'| category_bind\\_chitchat | 闲聊绑定关系 |'."\n"
                .'| category_bind\\_faq | faq的绑定关系 |'."\n"
                .'| robot_ds | 对话工厂对话流 |'."\n"
                .'| ds_entity | 对话工厂实体 |'."\n"
                .'| ds_intent | 对话工厂意图 |'."\n"
                ."\n"
                .'### 示例'."\n"
                .'#### 响应报文：'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "ModifyTime": "2022-04-12T06:32:59Z",'."\n"
                .'    "BizTypeList": ['."\n"
                .'        "robot"'."\n"
                .'    ],'."\n"
                .'    "CreateTime": "2022-04-12T06:30:17Z",'."\n"
                .'    "RequestId": "1b6318c2-df76-4117-9c2c-02e22940ff24",'."\n"
                .'    "Response": "4930",'."\n"
                .'    "Warnings": {'."\n"
                .'        "category_bind_faq": ['."\n"
                .'            "以下类目没有发布到正式环境: 项目交付信息汇总"'."\n"
                .'        ]'."\n"
                .'    },'."\n"
                .'    "Id": 4930,'."\n"
                .'    "Status": "FE_RUNNING"'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetInstancePublishTaskState' => [
            'summary' => '查询机器人发布进度。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-cn-mp90s2lrk00050',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '8521',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '任务Id',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FE_SUCCESS' => '发布成功',
                                    'FE_ABORTED' => '发布取消',
                                    'FE_WARNING' => '有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_FAILED' => '发布失败',
                                    'FE_RUNNING' => '正在发布中',
                                ],
                                'example' => 'FE_RUNNING',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '发布任务的业务类型',
                                    'type' => 'string',
                                    'example' => 'robot',
                                ],
                            ],
                            'Error' => [
                                'title' => 'job失败信息',
                                'description' => 'job失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                            'Warnings' => [
                                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "category_bind_faq": ['."\n"
                                    .'        "以下类目没有发布到正式环境：项目交付类目"'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                            'Errors' => [
                                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "robot_ds": ['."\n"
                                    .'        "{\\"dialogName\\":\\"TEST\\",\\"errorMessage\\":[\\"medusa@invocation.error.service.offline@请发布对话流所引用服务后重试！\\"],\\"needRefresh\\":false,\\"success\\":false}"'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '查询机器人发布进度',
            'responseParamsDescription' => "\n"
                .'### Status字段枚举：'."\n"
                .'| 字段名 | 枚举值 | 含义 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| Status | FE_RUNNING | 正在发布中 |'."\n"
                .'| Status | FE_WARNING | 有警告，若需继续，请调用`ContinueInstancePublishTask`接口继续发布 |'."\n"
                .'| Status | FE_SUCCESS | 发布成功 |'."\n"
                .'| Status | FE_FAILED | 发布失败 |'."\n"
                .'| Status | FE_ABORTED | 发布取消 |'."\n"
                ."\n"
                .'### Warnings&Errors 子发布模块枚举：'."\n"
                .'| key值 | 含义 |'."\n"
                .'| --- | --- |'."\n"
                .'| category\\_bind\\_chitchat | 闲聊绑定关系 |'."\n"
                .'| category\\_bind\\_faq | faq的绑定关系 |'."\n"
                .'| robot_ds | 对话工厂对话流 |'."\n"
                .'| ds_entity | 对话工厂实体 |'."\n"
                .'| ds_intent | 对话工厂意图 |'."\n"
                ."\n"
                .'### 示例'."\n"
                .'#### 响应报文：'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "ModifyTime": "2022-04-12T06:30:21Z",'."\n"
                .'    "BizTypeList": ['."\n"
                .'        "robot"'."\n"
                .'    ],'."\n"
                .'    "CreateTime": "2022-04-12T06:30:17Z",'."\n"
                .'    "RequestId": "cddf472f-6ce3-4eef-a969-1e8b16850cb4",'."\n"
                .'    "Response": "4930",'."\n"
                .'    "Warnings": {'."\n"
                .'        "category_bind_faq": ['."\n"
                .'            "以下类目没有发布到正式环境：项目交付类目"'."\n"
                .'        ]'."\n"
                .'    },'."\n"
                .'    "Id": 4930,'."\n"
                .'    "Status": "FE_WARNING"'."\n"
                .'}'."\n"
                .'```',
        ],
        'CreateSolution' => [
            'summary' => '创建知识答案。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'KnowledgeId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '答案内容',
                        'description' => '答案内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '答案内容',
                    ],
                ],
                [
                    'name' => 'ContentType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '答案类型',
                        'description' => '答案类型：0-纯文本，1-富文本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PerspectiveCodes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '视角code列表',
                        'description' => '视角code列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角code',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'm8qAIvUUAIf',
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F55D90C1-31BE-4B2A-AA3F-25EFC36F9419',
                            ],
                            'SolutionId' => [
                                'title' => '答案ID',
                                'description' => '答案ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100001089003',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建FAQ答案',
        ],
        'DeleteSolution' => [
            'summary' => '删除答案。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SolutionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '答案ID',
                        'description' => '答案ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '100001321580',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '删除FAQ答案',
        ],
        'UpdateSolution' => [
            'summary' => '更新答案。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SolutionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '答案ID',
                        'description' => '答案ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '100001333260',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '答案内容',
                        'description' => '答案内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '修改的答案内容',
                    ],
                ],
                [
                    'name' => 'ContentType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '答案类型',
                        'description' => '答案类型：0-纯文本，1-富文本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PerspectiveCodes',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '视角code列表',
                        'description' => '视角code列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角code',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'default',
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8B8F098D-A338-54DD-B19C-24BBBCBD8498',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '更新FAQ答案',
        ],
        'ListSolution' => [
            'summary' => '查询知识的答案列表。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'Solutions' => [
                                'title' => '答案列表',
                                'description' => '答案列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '答案信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SolutionId' => [
                                            'title' => '答案ID',
                                            'description' => '答案ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '496',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-03-29T06:23:53Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-03-29T03:55:04Z',
                                        ],
                                        'Content' => [
                                            'title' => '答案内容',
                                            'description' => '答案内容',
                                            'type' => 'string',
                                            'example' => '答案内容',
                                        ],
                                        'ContentType' => [
                                            'title' => '答案类型(0纯文本，1富文本）',
                                            'description' => '答案类型：0-纯文本，1-富文本',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'PlainText' => [
                                            'title' => '答案纯文本内容',
                                            'description' => '答案纯文本内容',
                                            'type' => 'string',
                                            'example' => '答案内容',
                                        ],
                                        'PerspectiveCodes' => [
                                            'title' => '视角code列表',
                                            'description' => '视角code列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '视角code',
                                                'type' => 'string',
                                                'example' => 'm8qAIvUUAIf',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5B29DB5E-251D-5A73-84B5-A12DF795F231',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取FAQ答案列表',
        ],
        'CreateConnQuestion' => [
            'summary' => '为知识添加关联知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ConnQuestionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30002654628',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '知识ID'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30002174773',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => 'C191B48B-9268-4FB1-A3C2-5143B4A91D0C',
                            ],
                            'OutlineId' => [
                                'title' => '关联关系ID',
                                'description' => '关联关系ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000002123',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建关联问',
        ],
        'DeleteConnQuestion' => [
            'summary' => '删除知识的关联知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OutlineId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联关系ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '877397683',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FC323352-3AD7-59A1-9088-A64470BAFC9D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '删除FAQ关联问',
        ],
        'UpdateConnQuestion' => [
            'summary' => '更新关联关系。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ConnQuestionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '1000000295',
                    ],
                ],
                [
                    'name' => 'OutlineId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联关系ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '877397683',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '004EB5C0-9DEB-53BF-A57A-0407A6D6B3C9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '更新FAQ关联问',
        ],
        'ListConnQuestion' => [
            'summary' => '查询知识的关联问题列表。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '92B81548-42B9-4B34-924B-4E778AEB412B',
                            ],
                            'Outlines' => [
                                'description' => '关联问题列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '关联问信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'OutlineId' => [
                                            'title' => '关联关系ID',
                                            'description' => '关联关系ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '797',
                                        ],
                                        'ConnQuestionId' => [
                                            'title' => '关联知识ID',
                                            'description' => '关联知识ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30001979424',
                                        ],
                                        'Title' => [
                                            'title' => '关联知识题目',
                                            'description' => '关联知识标题',
                                            'type' => 'string',
                                            'example' => '关联问',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-26T10:18:15Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-02-25T02:47:18Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取关联问列表',
        ],
        'CreateSimQuestion' => [
            'summary' => '创建相似问题。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '相似问标题，字数上限-120',
                        'description' => '相似问标题，字数上限：120字',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试相似问标题',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'SimQuestionId' => [
                                'title' => '相似问ID',
                                'description' => '相似问ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000002788',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '16AC1B3C-66E0-438B-BB7C-71B692407B67',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建相似问',
        ],
        'DeleteSimQuestion' => [
            'summary' => '删除相似问题。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'SimQuestionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '相似问ID',
                        'description' => '相似问ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '1000002788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6419BA93-D111-5225-8998-13E63E6D3940',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '删除FAQ相似问',
        ],
        'UpdateSimQuestion' => [
            'summary' => '更新相似问题。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '相似问标题，字数上限-120',
                        'description' => '相似问标题，字数上限：120字',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试相似问标题',
                    ],
                ],
                [
                    'name' => 'SimQuestionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '相似问ID',
                        'description' => '相似问ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '1000002788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DFB71B34-4188-4EA2-9988-EF3014E75910',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '更新FAQ相似问',
        ],
        'ListSimQuestion' => [
            'summary' => '查询知识的相似问题列表。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30002299537',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '15CD94CC-CBEB-4189-806C-A132D1F45D51',
                            ],
                            'SimQuestions' => [
                                'title' => '相似问列表',
                                'description' => '相似问列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '相似问信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SimQuestionId' => [
                                            'title' => '相似问ID',
                                            'description' => '相似问ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30001979424',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-13T03:49:28Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-30T02:08:33Z',
                                        ],
                                        'Title' => [
                                            'title' => '相似问标题',
                                            'description' => '相似问标题',
                                            'type' => 'string',
                                            'example' => '相似问',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取FAQ相似问列表',
        ],
        'CreateFaq' => [
            'summary' => '创建一条知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识的类目ID',
                        'description' => '知识的类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '1000053274',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识标题',
                        'description' => '知识标题，字数上限：120字',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试标题',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生效时间',
                        'description' => '生效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25T16:28:36Z',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '失效时间',
                        'description' => '失效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2030-12-31T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'SolutionContent',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '默认答案内容',
                        'description' => '默认答案内容（如果兜底视角开启，则此项必填）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试答案',
                    ],
                ],
                [
                    'name' => 'SolutionType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '默认答案类型',
                        'description' => '默认答案类型：0-纯文本，1-富文本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'KnowledgeId' => [
                                'title' => '知识ID',
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30001979424',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '28805A7C-D695-548C-A31B-67E52C2C274F',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建FAQ',
        ],
        'DeleteFaq' => [
            'summary' => '删除一条知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID，创建知识该值为空',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '删除FAQ',
        ],
        'UpdateFaq' => [
            'summary' => '编辑一条知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001905617',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识的类目ID',
                        'description' => '知识的类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30000049006',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识标题',
                        'description' => '知识标题',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试标题',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生效时间',
                        'description' => '生效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-27T05:18:20Z',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '失效时间',
                        'description' => '失效时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2030-12-31T16:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '736994BD-AA35-4742-88C9-E64BE4BAA14B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '修改FAQ',
        ],
        'DescribeFaq' => [
            'summary' => '查询知识详情。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识ID',
                        'description' => '知识ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '30001979424',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'KnowledgeResponse',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'KnowledgeId' => [
                                'title' => '知识ID',
                                'description' => '知识ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30001979424',
                            ],
                            'Title' => [
                                'title' => '标题',
                                'description' => '标题',
                                'type' => 'string',
                                'example' => '测试标题',
                            ],
                            'ModifyTime' => [
                                'title' => '修改时间（UTC时间）',
                                'description' => '修改时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '2020-12-02T06:35:50Z',
                            ],
                            'ModifyUserName' => [
                                'title' => '修改人',
                                'description' => '修改人',
                                'type' => 'string',
                                'example' => 'test01',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间（UTC时间）',
                                'description' => '创建时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '2020-11-30T03:03:37Z',
                            ],
                            'CreateUserName' => [
                                'title' => '创建人',
                                'description' => '创建人',
                                'type' => 'string',
                                'example' => 'test01',
                            ],
                            'CategoryId' => [
                                'title' => '类目ID',
                                'description' => '类目ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30000055617',
                            ],
                            'Status' => [
                                'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
                                'description' => '知识状态： -1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'EffectStatus' => [
                                'title' => '知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效',
                                'description' => '知识生效状态，根据StartDate， EndDate计算出来：20-生效中，21-已失效，22-待生效',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'StartDate' => [
                                'title' => '生效时间（UTC时间）',
                                'description' => '生效时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '2022-04-27T07:04:39Z',
                            ],
                            'EndDate' => [
                                'title' => '失效时间（UTC时间）',
                                'description' => '失效时间（UTC 时间）',
                                'type' => 'string',
                                'example' => '2023-04-27T06:08:54Z',
                            ],
                            'SimQuestions' => [
                                'title' => '相似问列表',
                                'description' => '相似问列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '相似问信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SimQuestionId' => [
                                            'title' => '相似问ID',
                                            'description' => '相似问ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10000000581',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-29T03:55:07Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-26T10:24:00Z',
                                        ],
                                        'Title' => [
                                            'title' => '相似问标题',
                                            'description' => '相似问标题',
                                            'type' => 'string',
                                            'example' => '测试相似问标题',
                                        ],
                                    ],
                                ],
                            ],
                            'Solutions' => [
                                'title' => '答案列表',
                                'description' => '答案列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '答案信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SolutionId' => [
                                            'title' => '答案ID',
                                            'description' => '答案ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10000003071',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-29T07:07:13Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-26T10:24:00Z',
                                        ],
                                        'Content' => [
                                            'title' => '答案内容',
                                            'description' => '答案内容',
                                            'type' => 'string',
                                            'example' => '测试答案内容',
                                        ],
                                        'ContentType' => [
                                            'title' => '答案类型(0纯文本，1富文本）',
                                            'description' => '答案类型：0-纯文本，1-富文本',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'PlainText' => [
                                            'title' => '答案纯文本内容',
                                            'description' => '答案纯文本内容',
                                            'type' => 'string',
                                            'example' => '测试答案内容',
                                        ],
                                        'PerspectiveCodes' => [
                                            'title' => '视角code列表',
                                            'description' => '视角code列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '视角code',
                                                'type' => 'string',
                                                'example' => 'default',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Outlines' => [
                                'title' => '关联问列表',
                                'description' => '关联问列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '关联问信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'OutlineId' => [
                                            'title' => '关联关系ID',
                                            'description' => '关联关系ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '797',
                                        ],
                                        'ConnQuestionId' => [
                                            'title' => '关联知识ID',
                                            'description' => '关联知识ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000098002',
                                        ],
                                        'Title' => [
                                            'title' => '关联知识标题',
                                            'description' => '关联知识标题',
                                            'type' => 'string',
                                            'example' => '测试关联问标题',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间(UTC 时间)',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-26T18:12:02Z',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间(UTC 时间)',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-05-26T10:24:00Z',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8AD9FA10-7780-5E12-B701-13C928524F32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取FAQ详情',
        ],
        'SearchFaq' => [
            'summary' => '搜索知识。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '关键字',
                        'description' => '关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '搜索标题',
                    ],
                ],
                [
                    'name' => 'CategoryIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '类目唯一标识',
                        'description' => '类目唯一标识',
                        'type' => 'array',
                        'items' => [
                            'description' => '类目ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '30000065594',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
                        'description' => '知识状态：-1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '未发布',
                            '已发布',
                            '已更新未发布',
                            -1 => '已删除未发布',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchScope',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '搜索范围： 1-搜索标题相似问, 2-搜索答案, 3-搜索全部',
                        'description' => '搜索范围：1-搜索标题相似问，2-搜索答案，3-搜索全部',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '搜索标题和相似问',
                            '搜索答案',
                            '搜索全部',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CreateUserName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建人',
                        'description' => '创建人',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test01',
                    ],
                ],
                [
                    'name' => 'ModifyUserName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '修改人',
                        'description' => '修改人',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test01',
                    ],
                ],
                [
                    'name' => 'CreateTimeBegin',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建开始时间',
                        'description' => '创建开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'CreateTimeEnd',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建结束时间',
                        'description' => '创建结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'ModifyTimeBegin',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '修改开始时间',
                        'description' => '修改开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'ModifyTimeEnd',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '修改结束时间',
                        'description' => '修改结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'StartTimeBegin',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生效开始时间',
                        'description' => '生效开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'StartTimeEnd',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生效结束时间',
                        'description' => '生效结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-03T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'EndTimeBegin',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '失效开始时间',
                        'description' => '失效开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'EndTimeEnd',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '失效结束时间',
                        'description' => '失效结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-02T03:09:30Z',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码 默认1',
                        'description' => '页码默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页数量，默认10，最大50',
                        'description' => '每页数量，默认10，最大100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'result',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'FaqHits' => [
                                'description' => '知识搜索结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '知识信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'KnowledgeId' => [
                                            'title' => '知识ID',
                                            'description' => '知识ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30002145804',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间（UTC时间）',
                                            'description' => '修改时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-04-02T03:09:30Z',
                                        ],
                                        'ModifyUserName' => [
                                            'title' => '修改人',
                                            'description' => '修改人',
                                            'type' => 'string',
                                            'example' => 'test01',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间（UTC时间）',
                                            'description' => '创建时间（UTC 时间）',
                                            'type' => 'string',
                                            'example' => '2022-04-02T03:09:30Z',
                                        ],
                                        'CreateUserName' => [
                                            'title' => '创建人',
                                            'description' => '创建人',
                                            'type' => 'string',
                                            'example' => 'test01',
                                        ],
                                        'CreateUserId' => [
                                            'title' => '创建人ID',
                                            'description' => '创建人ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '18453',
                                        ],
                                        'ModifyUserId' => [
                                            'title' => '修改人ID',
                                            'description' => '修改人ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '18453',
                                        ],
                                        'CategoryId' => [
                                            'title' => '类目ID',
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30000055639',
                                        ],
                                        'Status' => [
                                            'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
                                            'description' => '知识状态：-1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                1 => '未发布',
                                                '已发布',
                                                '已更新未发布',
                                                -1 => '已删除未发布',
                                            ],
                                            'example' => '3',
                                        ],
                                        'EffectStatus' => [
                                            'title' => '知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效',
                                            'description' => '知识生效状态，根据StartDate，EndDate计算出来：20-生效中，21-已失效，22-待生效',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                20 => '生效中',
                                                '已失效',
                                                '待生效',
                                            ],
                                            'example' => '20',
                                        ],
                                        'Title' => [
                                            'title' => '标题',
                                            'description' => '标题',
                                            'type' => 'string',
                                            'example' => '测试标题',
                                        ],
                                        'HitSimilarTitles' => [
                                            'title' => '命中的相似问',
                                            'description' => '命中的相似问题列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '相似问题',
                                                'type' => 'string',
                                                'example' => '测试命中的标题',
                                            ],
                                        ],
                                        'HitSolutions' => [
                                            'title' => '命中的答案',
                                            'description' => '命中的答案列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '命中的答案',
                                                'type' => 'string',
                                                'example' => '测试命中的答案',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'PageNumber' => [
                                'title' => '页码 默认1',
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页数量，默认10，最大500',
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总条数',
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1075',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E45491D5-7E0A-42C6-9B21-91D1066B1475',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => 'FAQ搜索',
        ],
        'CreateDSEntity' => [
            'summary' => '创建实体，特指实体的Meta信息，如：实体名称、实体类型。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                        'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                        'type' => 'string',
                        'required' => true,
                        'example' => '实体名称',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
                        'description' => '实体类型：[synonyms（同义词），regex（正则）]',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'synonyms',
                        'default' => 'synonyms',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<EntityIdResponse>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'adfad2343f1f2r',
                            ],
                            'EntityId' => [
                                'description' => '实体ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '23436345',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntity.OutRange',
                        'errorMessage' => 'The business error Entity is out of range.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.OutRange',
                        'errorMessage' => 'The business error EntityName is out of range.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.Repeat',
                        'errorMessage' => 'BusinessErrorEntityName.Repeat	The business error EntityName is repeat.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.InvalidCharactor',
                        'errorMessage' => 'The business error EntityName contains invalid charactor.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-创建',
        ],
        'DeleteDSEntity' => [
            'summary' => '删除一个实体，会级联删除该实体下所有的实体成员及同义词、正则表达式。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID',
                        'description' => '实体ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<EntityIdResponse>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4dfghf56235asdf452',
                            ],
                            'EntityId' => [
                                'description' => '实体ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-删除',
        ],
        'UpdateDSEntity' => [
            'summary' => '实体meta信息修改，仅支持修改实体名称；实体类型不支持修改。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID',
                        'description' => '实体ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                        'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                        'type' => 'string',
                        'required' => true,
                        'example' => '实体名称',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
                        'description' => '实体类型：[synonyms（同义词），regex（正则）]',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'synonyms',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<EntityIdResponse>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'df23fgh4hyj67hn56',
                            ],
                            'EntityId' => [
                                'description' => '实体ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.OutRange',
                        'errorMessage' => 'The business error EntityName is out of range.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.Repeat',
                        'errorMessage' => 'The business error EntityName is repeat.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityName.InvalidCharactor',
                        'errorMessage' => 'The business error EntityName contains invalid charactor.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-修改',
        ],
        'DescribeDSEntity' => [
            'summary' => '查询指定机器人下指定实体的meta信息，如：实体类型、实体名称、创建时间、修改时间等。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID',
                        'description' => '实体ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数说明',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ad23234dsf234fga',
                            ],
                            'EntityId' => [
                                'title' => '实体ID',
                                'description' => '实体ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                            'EntityName' => [
                                'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                                'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                                'type' => 'string',
                                'example' => '书类型',
                            ],
                            'SysEntityCode' => [
                                'title' => '系统实体code，如@sys.date',
                                'description' => '系统实体code，如sys.date；用户实体时为空',
                                'type' => 'string',
                                'example' => 'sys.date',
                            ],
                            'EntityType' => [
                                'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
                                'description' => '实体类型：[synonyms（同义词），regex（正则）]',
                                'type' => 'string',
                                'example' => 'synonyms',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间（UTC时间）',
                                'type' => 'string',
                                'example' => '2021-08-12T16:00:01Z',
                            ],
                            'ModifyTime' => [
                                'description' => '修改时间（UTC时间）',
                                'type' => 'string',
                                'example' => '2021-08-12T16:00:01Z',
                            ],
                            'CreateUserId' => [
                                'description' => '创建者ID',
                                'type' => 'string',
                                'example' => '123231',
                            ],
                            'CreateUserName' => [
                                'description' => '创建人名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ModifyUserId' => [
                                'description' => '修改人唯一标识',
                                'type' => 'string',
                                'example' => '123231',
                            ],
                            'ModifyUserName' => [
                                'description' => '修改人名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-详情',
            'responseParamsDescription' => '如果是系统实体，SysEntityCode返回系统实体key，例如：@sys.date',
        ],
        'ListDSEntity' => [
            'summary' => '查询指定机器人下的实体列表数据，仅返回每个实体的meta信息，如：实体类型、实体名称、创建时间、修改时间等。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '筛选项，contains匹配，范围：实体名称（未来扩展：实体成员、同义词）',
                        'description' => '筛选项，contains匹配，范围：实体名称（未来扩展：实体成员、同义词）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '实体',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '为空：全量自定义实体（默认）',
                        'description' => '为空：全量自定义实体（默认）',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'regex' => 'regex',
                            'system' => 'system',
                            'synonyms' => 'synonyms',
                        ],
                        'example' => 'synonyms'."\n"
                            .'regex'."\n"
                            .'system',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数量，默认10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ga4h345defgwet2sdf223',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小，默认10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Entities' => [
                                'description' => '实体列表信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体列表信息说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityId' => [
                                            'description' => '实体ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234564567445',
                                        ],
                                        'EntityName' => [
                                            'description' => '实体名称',
                                            'type' => 'string',
                                            'example' => '书实体',
                                        ],
                                        'SysEntityCode' => [
                                            'title' => '系统实体code，如@sys.date',
                                            'description' => '系统实体code，如sys.date；用户实体时为空',
                                            'type' => 'string',
                                            'example' => 'sys_date',
                                        ],
                                        'EntityType' => [
                                            'description' => '实体类型（synonyms | regex | system)',
                                            'type' => 'string',
                                            'example' => 'synonyms',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'CreateUserId' => [
                                            'description' => '创建人ID',
                                            'type' => 'string',
                                            'example' => '123231',
                                        ],
                                        'CreateUserName' => [
                                            'description' => '创建人名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ModifyUserId' => [
                                            'description' => '修改人ID',
                                            'type' => 'string',
                                            'example' => '123231',
                                        ],
                                        'ModifyUserName' => [
                                            'description' => '修改人名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'Ds.IllegalAccess.BotIdNotExists',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-列表',
        ],
        'CreateDSEntityValue' => [
            'summary' => '为指定的某个实体，添加实体成员信息，包含：实体值、对应的同义词列表，同一实体内部的实体值、同义词唯一。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID，修改实体成员时可为空',
                        'description' => '实体ID，修改实体成员时可为空',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实体值（或正则表达式）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '书类型',
                    ],
                ],
                [
                    'name' => 'Synonyms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '同义词列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '同义词值',
                            'type' => 'string',
                            'required' => false,
                            'example' => '书本',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<EntityValueIdResponse>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'g763hg48j3f3',
                            ],
                            'EntityValueId' => [
                                'description' => '实体成员ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2434543453',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体成员-创建',
        ],
        'DeleteDSEntityValue' => [
            'summary' => '删除某个实体的某个成员；若为标准实体，会同步删除其同义词（若有）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID',
                        'description' => '实体ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '345346223452',
                    ],
                ],
                [
                    'name' => 'EntityValueId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体成员ID',
                        'description' => '实体成员ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '3453453452',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'dfdf2t3rfvb45y',
                            ],
                            'EntityValueId' => [
                                'description' => '实体成员ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3453453452',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorEntityValueId.NotExists',
                        'errorMessage' => 'The business error EntityValueId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体-实体成员-删除',
        ],
        'UpdateDSEntityValue' => [
            'summary' => '修改某个实体的某个实体成员，有实体值&同义词、正则表达式两类数据修改。注意：往一个标准实体中添加正则表达式是不被允许的，反之亦然。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体ID，修改实体成员时可为空',
                        'description' => '实体ID，修改实体成员时可为空',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '223423423',
                    ],
                ],
                [
                    'name' => 'EntityValueId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体成员ID，创建实体成员时为空',
                        'description' => '实体成员ID，创建实体成员时为空',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '2342377423',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型为synonyms时，表示实体归一化值；当实体类型为regex时，表示正则表达式文本',
                        'description' => '实体类型为synonyms时，表示实体归一化值；当实体类型为regex时，表示正则表达式文本',
                        'type' => 'string',
                        'required' => true,
                        'example' => '书本类型',
                    ],
                ],
                [
                    'name' => 'Synonyms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '实体同义词',
                        'description' => '同义词列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '实体同义词',
                            'type' => 'string',
                            'required' => false,
                            'example' => '小说',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<EntityValueIdResponse>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'sDag3g43wesf2',
                            ],
                            'EntityValueId' => [
                                'description' => '实体成员ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2342377423',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体成员-修改',
        ],
        'ListDSEntityValue' => [
            'summary' => '查询指定实体的实体成员列表及详情数据，同时支持关键词筛选（contains），筛选范围：实体值、同义词。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实体ID',
                        'description' => '实体ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'EntityValueId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实体成员ID',
                        'description' => '实体成员ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '234',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实体成员名称搜索关键词',
                        'description' => '实体成员名称搜索关键词',
                        'type' => 'string',
                        'required' => false,
                        'example' => '书',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值信息',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => 'n3fg34gbfj8adf2gj923',
                            ],
                            'EntityValues' => [
                                'description' => '实体列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体列表信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityId' => [
                                            'description' => '实体ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '34313785463',
                                        ],
                                        'EntityValueId' => [
                                            'description' => '实体成员ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3467858234534534532',
                                        ],
                                        'Content' => [
                                            'description' => '实体成员名称（实体值或正则表达式）',
                                            'type' => 'string',
                                            'example' => '书类型',
                                        ],
                                        'Synonyms' => [
                                            'description' => '同义词列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '同义词列表说明',
                                                'type' => 'string',
                                                'example' => '小说',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间(UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '当前页，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小，默认10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorEntityId.NotExists',
                        'errorMessage' => 'The business error EntityId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '实体成员-列表',
        ],
        'CreateIntent' => [
            'summary' => '新建意图，主要包含意图的meta信息，如：意图名称、意图别名、意图关联词槽信息；不包含意图话术、LGF。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '意图定义结构体',
                        'description' => '意图定义结构体',
                        'type' => 'object',
                        'properties' => [
                            'IntentName' => [
                                'title' => '意图名称',
                                'description' => '意图名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => '查天气意图',
                            ],
                            'AliasName' => [
                                'title' => '意图别名',
                                'description' => '意图别名',
                                'type' => 'string',
                                'required' => false,
                                'example' => '查天气意图',
                            ],
                            'SlotInfos' => [
                                'title' => '槽位信息',
                                'description' => '槽位信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '滑槽信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SlotId' => [
                                            'description' => '滑槽ID',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'fg452dfg3df23',
                                        ],
                                        'Name' => [
                                            'title' => '槽位名',
                                            'description' => '槽位名',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '天气',
                                        ],
                                        'Value' => [
                                            'title' => '关联的实体名',
                                            'description' => '关联的实体名',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '天气',
                                        ],
                                        'Interactive' => [
                                            'title' => '是否交互式',
                                            'description' => '是否交互式',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                        'Array' => [
                                            'title' => '是否数组',
                                            'description' => '是否数组',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                        'Encrypt' => [
                                            'title' => '是否脱敏',
                                            'description' => '是否脱敏',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '43546474',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'df56gjh5et34g3g3',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntent.OutRange',
                        'errorMessage' => 'The business error Intent is out of range.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorIntentName.OutRange',
                        'errorMessage' => 'The business error IntentName is out of range.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorIntentName.Repeat',
                        'errorMessage' => 'The business error IntentName is repeat.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorIntentName.InvalidCharactor',
                        'errorMessage' => 'The business error IntentName contains invalid charactor.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorIntentEntity.NotExists',
                        'errorMessage' => 'The business error IntentEntity is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-创建',
        ],
        'DeleteIntent' => [
            'summary' => '删除一个意图，会级联删除该意图下所有的意图话术和高级语义配置（LGF）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '意图ID',
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '12345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3464dfg3qwr34tf34',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error Intent is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-删除',
        ],
        'UpdateIntent' => [
            'summary' => '修改意图，主要包含意图的meta信息，如：意图名称、意图别名、意图关联词槽信息；不包含意图话术、LGF。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '意图ID',
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '234234234534',
                    ],
                ],
                [
                    'name' => 'IntentDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '意图定义结构体',
                        'description' => '意图定义结构体',
                        'type' => 'object',
                        'properties' => [
                            'IntentName' => [
                                'title' => '意图名称',
                                'description' => '意图名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => '查天气意图',
                            ],
                            'AliasName' => [
                                'title' => '意图别名',
                                'description' => '意图别名',
                                'type' => 'string',
                                'required' => false,
                                'example' => '查天气意图',
                            ],
                            'SlotInfos' => [
                                'title' => '槽位信息',
                                'description' => '槽位信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '槽位信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SlotId' => [
                                            'description' => '槽位ID',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'dgadf23dfg2f',
                                        ],
                                        'Name' => [
                                            'title' => '槽位名',
                                            'description' => '槽位名',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '天气',
                                        ],
                                        'Value' => [
                                            'title' => '关联的实体名',
                                            'description' => '关联的实体名',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '天气',
                                        ],
                                        'Interactive' => [
                                            'title' => '是否交互式',
                                            'description' => '是否交互式',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                        'Array' => [
                                            'title' => '是否数组',
                                            'description' => '是否数组',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                        'Encrypt' => [
                                            'title' => '是否脱敏',
                                            'description' => '是否脱敏',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '234234234534',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'dfaf23dfas234234234534',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error Intent is not exists.',
                    ],
                    [
                        'errorCode' => 'BusinessErrorIntent.OutRange',
                        'errorMessage' => 'The business error Intent is out of range.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-修改',
        ],
        'DescribeIntent' => [
            'summary' => '返回指定意图的 meta 信息，如：意图类型、意图名称、创建时间、修改时间等。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '意图ID',
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<DsPaasIntentDTO>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => 'a22afaf2adfasf2gr345fga45ada',
                            ],
                            'IntentId' => [
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '84243341',
                            ],
                            'IntentName' => [
                                'description' => '意图名称',
                                'type' => 'string',
                                'example' => '查天气意图',
                            ],
                            'AliasName' => [
                                'description' => '意图别名',
                                'type' => 'string',
                                'example' => '查天气意图',
                            ],
                            'SlotInfos' => [
                                'description' => '意图关联的槽位信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '意图关联的槽位信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'SlotId' => [
                                            'description' => '槽位唯一标识',
                                            'type' => 'string',
                                            'example' => 'aa4d2a343a3ad4afad',
                                        ],
                                        'Name' => [
                                            'description' => '槽位名称',
                                            'type' => 'string',
                                            'example' => '天气',
                                        ],
                                        'Value' => [
                                            'description' => '槽位划词结果',
                                            'type' => 'string',
                                            'example' => '天气',
                                        ],
                                        'Interactive' => [
                                            'description' => '是否交互式填槽，默认为false',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Array' => [
                                            'description' => '是否数组',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Encrypt' => [
                                            'description' => '是否敏感',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'CreateTime' => [
                                'description' => '创建时间（UTC时间）',
                                'type' => 'string',
                                'example' => '2021-08-12T16:00:01Z',
                            ],
                            'ModifyTime' => [
                                'description' => '修改时间（UTC时间）',
                                'type' => 'string',
                                'example' => '2021-08-12T16:00:01Z',
                            ],
                            'CreateUserId' => [
                                'description' => '创建人唯一标识',
                                'type' => 'string',
                                'example' => '123231',
                            ],
                            'CreateUserName' => [
                                'description' => '创建人名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ModifyUserId' => [
                                'description' => '修改人唯一标识',
                                'type' => 'string',
                                'example' => '123231',
                            ],
                            'ModifyUserName' => [
                                'description' => '修改人名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error IntentId is not exists.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '',
            'title' => '意图-详情',
        ],
        'ListIntent' => [
            'summary' => '查询指定机器人下的意图列表数据，仅返回每个意图的 meta 信息，如：意图类型、意图名称、创建时间、修改时间等。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '意图名称',
                        'description' => '意图名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查天气',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页面大小，默认10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<DsIntentPageData>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '23dsfa34r2s2s2sd12',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '当前页，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小，默认10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Intents' => [
                                'description' => '意图列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '意图列表说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'IntentId' => [
                                            'description' => '意图ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234234234234',
                                        ],
                                        'IntentName' => [
                                            'description' => '意图名称',
                                            'type' => 'string',
                                            'example' => '查天气意图',
                                        ],
                                        'AliasName' => [
                                            'description' => '意图别名',
                                            'type' => 'string',
                                            'example' => '查天气意图',
                                        ],
                                        'SlotInfos' => [
                                            'description' => '意图关联的槽位信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '意图关联的槽位信息说明',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SlotId' => [
                                                        'title' => '槽位ID',
                                                        'description' => '槽位ID',
                                                        'type' => 'string',
                                                        'example' => '12134223',
                                                    ],
                                                    'Name' => [
                                                        'title' => '槽位名',
                                                        'description' => '槽位名',
                                                        'type' => 'string',
                                                        'example' => '天气',
                                                    ],
                                                    'Value' => [
                                                        'title' => '槽位值（实体名）',
                                                        'description' => '槽位值（实体名）',
                                                        'type' => 'string',
                                                        'example' => '天气',
                                                    ],
                                                    'Interactive' => [
                                                        'title' => '是否交互式收集',
                                                        'description' => '是否交互式收集',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'Array' => [
                                                        'title' => '是否数组',
                                                        'description' => '是否数组',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'Encrypt' => [
                                                        'title' => '是否敏感',
                                                        'description' => '是否敏感',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'CreateUserId' => [
                                            'description' => '创建人唯一标识',
                                            'type' => 'string',
                                            'example' => '123231',
                                        ],
                                        'CreateUserName' => [
                                            'description' => '创建人名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ModifyUserId' => [
                                            'description' => '修改人唯一标识',
                                            'type' => 'string',
                                            'example' => '123231',
                                        ],
                                        'ModifyUserName' => [
                                            'description' => '修改人名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter InstanceId is not valid!',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '',
            'title' => '意图-列表',
        ],
        'CreateUserSay' => [
            'summary' => '为指定意图添加话术信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'UserSayDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户话术定义信息',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'title' => '意图ID',
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '123232',
                            ],
                            'Content' => [
                                'title' => '用户话术',
                                'description' => '用户话术',
                                'type' => 'string',
                                'required' => true,
                                'example' => '请问明天北京的天气',
                            ],
                            'SlotInfos' => [
                                'title' => '划槽信息',
                                'description' => '划槽信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '滑槽信息说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'SlotId' => [
                                            'title' => '划槽ID',
                                            'description' => '划槽ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'fb34adf2fv43f2',
                                        ],
                                        'StartIndex' => [
                                            'title' => '槽位在意图话术中的起始下标',
                                            'description' => '槽位在意图话术中的起始下标',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '4',
                                        ],
                                        'EndIndex' => [
                                            'title' => '槽位在意图话术中的结束下标（不含）',
                                            'description' => '槽位在意图话术中的结束下标（不含）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '6',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 10,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'UserSayId' => [
                                'description' => '意图-话术唯一ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '46456176856',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8g4n8bnd236fg79',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error Intent is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-话术创建',
        ],
        'DeleteUserSay' => [
            'summary' => '修改意图话术信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '343df2sdf23',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '5564564546',
                    ],
                ],
                [
                    'name' => 'UserSayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '话术ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '4562121234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'UserSayId' => [
                                'description' => '话术ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4562121234',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'dfgdg324gf34t34g34g3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-话术-删除',
        ],
        'UpdateUserSay' => [
            'summary' => '修改意图话术信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'UserSayId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户话术ID',
                        'description' => '用户话术ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '34512323',
                    ],
                ],
                [
                    'name' => 'UserSayDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户话术定义信息',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'title' => '意图ID',
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'maximum' => '9223372036854775807',
                                'exclusiveMaximum' => true,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'example' => '123',
                            ],
                            'Content' => [
                                'title' => '用户话术',
                                'description' => '用户话术',
                                'type' => 'string',
                                'required' => true,
                                'example' => '做核酸了吗您',
                            ],
                            'SlotInfos' => [
                                'title' => '划槽信息',
                                'description' => '划槽信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '滑槽信息说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'SlotId' => [
                                            'title' => '划槽ID',
                                            'description' => '划槽ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '346ffg3q23dv',
                                        ],
                                        'StartIndex' => [
                                            'title' => '槽位在意图话术中的起始下标',
                                            'description' => '槽位在意图话术中的起始下标',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'EndIndex' => [
                                            'title' => '槽位在意图话术中的结束下标（不含）',
                                            'description' => '槽位在意图话术中的结束下标（不含）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '3',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 10,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'UserSayId' => [
                                'description' => '话术ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '34512323',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2356fg3wf34634vdt23wef2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error Intent is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-话术-修改',
        ],
        'ListUserSay' => [
            'summary' => '查询指定意图的话术内容及关联槽位信息，支持关键话术筛选（contains）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '意图ID',
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '232',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '筛选用户话术',
                        'description' => '筛选用户话术',
                        'type' => 'string',
                        'required' => false,
                        'example' => '您做核酸了嘛',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页面大小，默认10，最大值1000',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<DsUserSayPageData>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'fs1fg4512v43572v23',
                            ],
                            'UserSays' => [
                                'description' => '话术列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '话术列表说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'IntentId' => [
                                            'description' => '意图ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '235564564',
                                        ],
                                        'UserSayId' => [
                                            'description' => '话术ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3453452138',
                                        ],
                                        'Content' => [
                                            'description' => '话术内容',
                                            'type' => 'string',
                                            'example' => '您做核酸了嘛',
                                        ],
                                        'SlotInfos' => [
                                            'description' => '关联槽位信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联槽位信息说明',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SlotId' => [
                                                        'title' => '意图槽位ID',
                                                        'description' => '意图槽位ID',
                                                        'type' => 'string',
                                                        'example' => '3456sdfg3tu',
                                                    ],
                                                    'StartIndex' => [
                                                        'title' => '槽位在意图话术中的下标',
                                                        'description' => '槽位在意图话术中的下标',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'EndIndex' => [
                                                        'title' => '槽位在意图话术中的下标',
                                                        'description' => '槽位在意图话术中的下标（不含）',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '4',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '当前页，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小，默认10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-话术-列表',
        ],
        'CreateLgf' => [
            'summary' => '为指定意图创建高级语义配置（LGF）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'LgfDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'LGF定义信息',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'title' => '意图ID',
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '4675678567',
                            ],
                            'RuleText' => [
                                'title' => 'LGF配置',
                                'description' => 'LGF配置',
                                'type' => 'string',
                                'required' => true,
                                'example' => '.{0,10}北京天气',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'LgfId' => [
                                'description' => 'LGF ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123453433453',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'af5fg3sdf457j5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-LGF-创建',
        ],
        'DeleteLgf' => [
            'summary' => '删除指定高级语义配置。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '23242342',
                    ],
                ],
                [
                    'name' => 'LgfId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'lgf Id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '2342424',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'LgfId' => [
                                'description' => 'LGF ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2342424',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'dgw2342424qw42',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-LGF-删除',
        ],
        'UpdateLgf' => [
            'summary' => '为指定意图创建高级语义配置（LGF）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'LgfId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'LGF ID',
                        'description' => 'LGF ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '12121',
                    ],
                ],
                [
                    'name' => 'LgfDefinition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'LGF 信息',
                        'type' => 'object',
                        'properties' => [
                            'IntentId' => [
                                'title' => '意图ID',
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'maximum' => '9223372036854775807',
                                'exclusiveMaximum' => true,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'example' => '23234523522',
                            ],
                            'RuleText' => [
                                'title' => 'LGF配置',
                                'description' => 'LGF配置',
                                'type' => 'string',
                                'required' => true,
                                'example' => '.{0,10}[天气]',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息说明',
                        'type' => 'object',
                        'properties' => [
                            'LgfId' => [
                                'description' => 'LGF唯一标识',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2342556223532',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => '289dfa131adf23wqe2r',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BusinessErrorIntentId.NotExists',
                        'errorMessage' => 'The business error IntentId is not exists.',
                    ],
                    [
                        'errorCode' => '400	BusinessErrorIntentLgfId.NotExists',
                        'errorMessage' => 'The business error IntentLgfId is not exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => 'LGF-修改',
        ],
        'ListLgf' => [
            'summary' => '查询指定意图的高级语义配置（LGF）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机器人ID',
                        'description' => '机器人ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' chatbot-cn-yjzbyrEvqd',
                    ],
                ],
                [
                    'name' => 'IntentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '意图ID',
                        'description' => '意图ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'LgfText',
                    'in' => 'query',
                    'schema' => [
                        'title' => '筛选语义配置内容',
                        'description' => '筛选语义配置内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.{0,5}北京天气',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页，默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页面大小，默认10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<DsLgfPageData>',
                        'description' => '返回值',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '34fg57h2gh5783',
                            ],
                            'Lgfs' => [
                                'description' => 'LGF列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'LGF列表说明',
                                    'type' => 'object',
                                    'properties' => [
                                        'IntentId' => [
                                            'title' => '意图ID',
                                            'description' => '意图ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '256756734345',
                                        ],
                                        'LgfId' => [
                                            'title' => 'LGF ID',
                                            'description' => 'LGF ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'RuleText' => [
                                            'title' => 'LGF规则',
                                            'description' => 'LGF规则',
                                            'type' => 'string',
                                            'example' => '.{0,5}北京天气',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间(UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间',
                                            'description' => '修改时间（UTC时间）',
                                            'type' => 'string',
                                            'example' => '2021-08-12T16:00:01Z',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '当前页，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小，默认10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '意图-LGF-列表',
        ],
        'CreatePerspective' => [
            'summary' => '创建视角。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角名称，长度不超过50字',
                        'description' => '视角名称，长度不超过50字',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '移动端视角',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角描述',
                        'description' => '视角描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用于购物APP的移动端视角',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
                            ],
                            'PerspectiveId' => [
                                'title' => '视角主键（code_id）',
                                'description' => '视角ID',
                                'type' => 'string',
                                'example' => '3001',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '视角-创建',
        ],
        'DeletePerspective' => [
            'summary' => '删除视角。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PerspectiveId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角主键（code_id）',
                        'description' => '视角ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '3001',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
                            ],
                            'Result' => [
                                'title' => '删除视角的结果',
                                'description' => '删除视角的结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '视角-删除',
        ],
        'UpdatePerspective' => [
            'summary' => '更新视角名称和描述。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PerspectiveId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角主键（code_id）',
                        'description' => '视角ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '3001',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角名称',
                        'description' => '视角名称，长度不超过50字',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '客户端视角',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '视角-更新',
        ],
        'DescribePerspective' => [
            'summary' => '查询视角详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PerspectiveId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视角Id',
                        'description' => '视角ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '3001',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
                            ],
                            'Status' => [
                                'title' => '数据状态：3：选中；1：未选中',
                                'description' => '数据状态：3：启用；1：未启用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PerspectiveCode' => [
                                'title' => '视角编码（用于问答api）',
                                'description' => '视角编码（用于问答API）',
                                'type' => 'string',
                                'example' => 'FZJBY3raWr',
                            ],
                            'ModifyTime' => [
                                'title' => '修改时间 UTC时间',
                                'description' => '修改时间 UTC时间',
                                'type' => 'string',
                                'example' => '2021-07-26T07:05:37Z',
                            ],
                            'SelfDefine' => [
                                'title' => '是否自定义',
                                'description' => '是否自定义',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间 UTC时间',
                                'description' => '创建时间 UTC时间',
                                'type' => 'string',
                                'example' => '2021-07-27T07:05:37Z',
                            ],
                            'PerspectiveId' => [
                                'title' => '视角主键（code_id）',
                                'description' => '视角ID',
                                'type' => 'string',
                                'example' => '3001',
                            ],
                            'Name' => [
                                'title' => '视角名称',
                                'description' => '视角名称',
                                'type' => 'string',
                                'example' => '移动端视角',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '视角-详情',
        ],
        'QueryPerspectives' => [
            'summary' => '查询视角列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
                            ],
                            'Perspectives' => [
                                'title' => '视角列表',
                                'description' => '视角列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'title' => '数据状态：3：选中；1：未选中',
                                            'description' => '数据状态：3：启用；1：未启用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间 UTC时间',
                                            'description' => '创建时间 UTC时间',
                                            'type' => 'string',
                                            'example' => '2022-04-12T06:30:17Z',
                                        ],
                                        'PerspectiveId' => [
                                            'title' => '视角主键（code_id）',
                                            'description' => '视角ID',
                                            'type' => 'string',
                                            'example' => '3001',
                                        ],
                                        'SelfDefine' => [
                                            'title' => '是否自定义',
                                            'description' => '是否自定义',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Name' => [
                                            'title' => '视角名称',
                                            'description' => '视角名称',
                                            'type' => 'string',
                                            'example' => '移动端视角',
                                        ],
                                        'PerspectiveCode' => [
                                            'title' => '视角编码（用于问答api）',
                                            'description' => '视角编码（用于问答API）',
                                            'type' => 'string',
                                            'example' => 'FZJBY3raWr',
                                        ],
                                        'ModifyTime' => [
                                            'title' => '修改时间 UTC时间',
                                            'description' => '修改时间 UTC时间',
                                            'type' => 'string',
                                            'example' => '2022-04-29T03:38:54Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '视角-列表',
        ],
        'CreatePublishTask' => [
            'summary' => '创建发布中心的发布任务。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发布任务的业务类型，若发布机器人请使用 CreateInstancePublishTask API',
                        'description' => '发布单元类型，机器人发布请使用 CreateInstancePublishTask API',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'chitchat' => '闲聊库',
                            'service_center' => '全局服务',
                            'faq' => '高频问答/FAQ知识库',
                            'dict' => '全局名词[仅旧版]',
                            'sensitive' => '全局敏感词',
                            'command' => '全局指令',
                            'mrc' => '文档库',
                        ],
                        'example' => 'faq',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'DataIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '业务类型附加信息，当前仅支持BizType为faq的传参，此字段指定faq类目Id列表，表示只发布指定类目下面的faq知识',
                        'description' => '附加发布信息，当前支持：如果BizType是faq，此字段填写类目ID，表示只发布这些类目下面的知识',
                        'type' => 'array',
                        'items' => [
                            'title' => '具体附加发布信息，如faq类目信息'."\n",
                            'description' => 'FAQ类目ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '8521',
                        ],
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '["8521"]',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key，若不指定则请求默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '发布任务Id',
                                'description' => '发布任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                                'description' => '任务状态'."\n"
                                    .'枚举值：'."\n"
                                    ."\n"
                                    .'FE_RUNNING：正在发布中'."\n"
                                    .'FE_SUCCESS：发布成功'."\n"
                                    .'FE_FAILED：发布失败'."\n"
                                    .'FE_ABORTED：发布取消',
                                'type' => 'string',
                                'example' => 'FE_RUNNING',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务类型',
                                    'type' => 'string',
                                    'example' => 'faq',
                                ],
                            ],
                            'Error' => [
                                'title' => '发布任务失败信息',
                                'description' => '任务失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '创建发布任务',
        ],
        'CancelPublishTask' => [
            'summary' => '取消正在发布中的任务。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发布任务Id',
                        'description' => '发布任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '8521',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '发布任务Id',
                                'description' => '发布任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                                'description' => '任务状态'."\n"
                                    .'枚举值：'."\n"
                                    ."\n"
                                    .'FE_RUNNING：正在发布中'."\n"
                                    .'FE_SUCCESS：发布成功'."\n"
                                    .'FE_FAILED：发布失败'."\n"
                                    .'FE_ABORTED：发布取消',
                                'type' => 'string',
                                'example' => 'FE_ABORTED',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务类型',
                                    'type' => 'string',
                                    'example' => 'faq',
                                ],
                            ],
                            'Error' => [
                                'title' => '发布任务失败信息',
                                'description' => '任务失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '取消发布任务',
        ],
        'GetPublishTaskState' => [
            'summary' => '查询发布进度。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发布任务Id',
                        'description' => '发布任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '8521',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
                            ],
                            'Id' => [
                                'title' => '发布任务Id',
                                'description' => '发布任务ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8522',
                            ],
                            'Response' => [
                                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                                'type' => 'string',
                                'example' => '8522',
                            ],
                            'Status' => [
                                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                                'description' => '任务状态'."\n"
                                    .'枚举值：'."\n"
                                    .'- FE_RUNNING：正在发布中'."\n"
                                    .'- FE_SUCCESS：发布成功'."\n"
                                    .'- FE_FAILED：发布失败'."\n"
                                    .'- FE_ABORTED：发布取消',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'FE_RUNNING',
                                'enum' => [
                                    'FE_RUNNING：正在发布中',
                                    'FE_SUCCESS：发布成功',
                                    'FE_FAILED：发布失败',
                                    'FE_ABORTED：发布取消',
                                ],
                            ],
                            'BizTypeList' => [
                                'title' => '业务类型列表',
                                'description' => '业务类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '发布任务的业务类型',
                                    'type' => 'string',
                                    'example' => 'faq',
                                ],
                            ],
                            'Error' => [
                                'title' => '发布任务失败信息',
                                'description' => '任务失败信息',
                                'type' => 'string',
                                'example' => '检查待发布模块是否空闲发生错误，faq',
                            ],
                            'CreateTime' => [
                                'title' => '任务创建的 UTC 时间',
                                'description' => '任务创建的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:17Z',
                            ],
                            'ModifyTime' => [
                                'title' => '任务修改的 UTC 时间',
                                'description' => '任务修改的 UTC 时间',
                                'type' => 'string',
                                'example' => '2022-04-12T06:30:33Z',
                            ],
                            'Errors' => [
                                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "faq": ['."\n"
                                    .'        "答案资源未发布, 资源类型: 全局服务 名称: 动态答案服务"'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                            'Warnings' => [
                                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "faq": ['."\n"
                                    .'        "答案资源未发布, 类型: service 名称: null、答案资源未发布, 类型: service 名称: null"'."\n"
                                    .'    ]'."\n"
                                    .'}'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '查询发布进度',
        ],
        'GetAgentInfo' => [
            'summary' => '获取业务空间ID。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'beebot_bot_public_cn-ca36x8v3n1x',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Parameter.Invalid',
                            ],
                            'Data' => [
                                'description' => '业务空间数据',
                                'type' => 'object',
                                'properties' => [
                                    'AgentName' => [
                                        'description' => '业务空间名称',
                                        'type' => 'string',
                                        'example' => '业务空间_881',
                                    ],
                                    'AgentKey' => [
                                        'description' => '业务空间签名，用于PAAS接口指定业务空间时使用',
                                        'type' => 'string',
                                        'example' => '4e7400028e6f4a7393ed3acf6a7b8927_p_beebot_public',
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
            'responseDemo' => '',
            'title' => '根据实例ID获取业务空间信息',
        ],
        'ListAgent' => [
            'summary' => '获取当前阿里云账号的业务空间列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前⻚码，默认值是1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果中每页显示的记录数量。最大取值100，默认值是10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'AgentName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间名称，按照名称检索',
                        'type' => 'string',
                        'required' => false,
                        'example' => '业务空间_001',
                    ],
                ],
                [
                    'name' => 'GoodsCodes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品code，可按照商品code进行过滤，查询实例信息',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'G_cloudBeeBot_public' => 'G_cloudBeeBot_public',
                        ],
                        'example' => 'G_cloudBeeBot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F55D90C1-31BE-4B2A-AA3F-25EFC36F9419',
                            ],
                            'PageNumber' => [
                                'description' => '当前⻚，默认1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '返回结果中每页显示的记录数量。最大取值100，默认值是10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'Data' => [
                                'description' => '业务空间列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '业务空间数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'AgentId' => [
                                            'description' => '业务空间ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '881',
                                        ],
                                        'AgentKey' => [
                                            'description' => '业务空间签名，用于PAAS接口指定业务空间时使用',
                                            'type' => 'string',
                                            'example' => '4e7400028e6f4a7393ed3acf6a7b8927_p_beebot_public',
                                        ],
                                        'AgentName' => [
                                            'description' => '业务空间名称',
                                            'type' => 'string',
                                            'example' => '业务空间_881',
                                        ],
                                        'InstanceInfos' => [
                                            'description' => '商品实例信息',
                                            'type' => 'object',
                                            'enumValueTitles' => [
                                                'G_cloudBeeBot_public' => 'G_cloudBeeBot_public',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取业务空间列表',
            'responseParamsDescription' => 'InstanceInfos示例。'."\n"
                .'"InstanceInfos": {'."\n"
                .'        "GoodsCode": {'."\n"
                .'          "InstanceId": "xxxxxx"'."\n"
                .'        }'."\n"
                .'      }'."\n"
                .'//GoodsCode参考枚举值',
        ],
        'GenerateUserAccessToken' => [
            'summary' => '用于聊天窗用户免登时，获取Token。通过Token可将用户的企业身份带入机器人。同时支持访客名片的自定义信息的带入。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Nick',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '用户昵称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'ForeignId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '用户在企业内部的用户id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '8882022040000000171',
                    ],
                ],
                [
                    'name' => 'Telephone',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '用户手机号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1381111****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '用户邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a***bcx@gmail.com',
                    ],
                ],
                [
                    'name' => 'ExtraInfo',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '用户需要带入到机器人的额外参数。使用JSON String格式。如果要使用访客名片，请按照以下格式带入：{'."\n"
                            .'    "customerNameCard": ['."\n"
                            .'        {'."\n"
                            .'            "key": "姓名",'."\n"
                            .'            "value": "张三"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "key": "等级",'."\n"
                            .'            "value": "v2"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "key": "联系方式",'."\n"
                            .'            "value": "123"'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}'."\n"
                            ."\n"
                            .'> **访客名片信息会展示在人工工作台上**'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "xx": 123,'."\n"
                            .'    "yy": 22332,'."\n"
                            .'    "customerNameCard": ['."\n"
                            .'        {'."\n"
                            .'            "key": "姓名",'."\n"
                            .'            "value": "张三"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "key": "等级",'."\n"
                            .'            "value": "v2"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "key": "联系方式",'."\n"
                            .'            "value": "123"'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Token有效时间，单位秒。最大不得超过3600s',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '3600',
                        'minimum' => '0',
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'E6988CE6-41CF-1103-9BEC-2B20D26C0B51',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回编码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '异常信息',
                                'type' => 'string',
                                'example' => 'Parameter.Invalid',
                            ],
                            'Data' => [
                                'description' => 'Token值',
                                'type' => 'string',
                                'example' => 'DDEXEDAFWAGASDFWAEFFAWEFAWFWEAFWAFWAEF',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
            'title' => '获取用户登录Token',
        ],
        'ListTongyiChatHistorys' => [
            'summary' => '调用ListTongyiChatHistorys接口获取会话历史明细。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间,时间格式为yyyy-MM-dd HH:mm:ss,⽐如 2024-04-01 00:00:00',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2024-04-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间,时间格式为yyyy-MM-dd HH:mm:ss,⽐如 2024-04-01 08:00:00',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2024-04-01 08:00:00',
                    ],
                ],
                [
                    'name' => 'RobotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器⼈实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'chatbot-cn-7QuUfaqMQe',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据条数,默认30条,最大值为500',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '0',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D0DDFC4C-D66D-4787-9AE4-4D757481EDEE',
                            ],
                            'CostTime' => [
                                'description' => '请求消耗时间',
                                'type' => 'string',
                                'example' => '116',
                            ],
                            'Datas' => [
                                'description' => '数据详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据详情',
                                    'type' => 'object',
                                    'example' => '参考ChatHistoryDTO',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '会话历史明细',
            'responseParamsDescription' => '**ChatHistoryDTO**'."\n"
                .'| 字段名  |类型    | 描述 |'."\n"
                .'| ------------- |------------   | ----- |'."\n"
                .'| QueryTime | String  | 提问时间 |'."\n"
                .'| Question | String  | 提问内容 |'."\n"
                .'| Answer | String  | 答案内容|'."\n"
                .'| AnswerSource | String  | 答案类型 |'."\n"
                .'| SessionId | String  | SessionId |'."\n"
                .'| ChatId | String  | ChatId |'."\n"
                .'| FeedbackType | String  | 用户反馈|'."\n"
                .'| FeedbackLabels | String  | 反馈详情 |'."\n"
                .'| FeedbackUserInfo | String  | 用户反馈说明 |',
        ],
        'GetBotSessionData' => [
            'summary' => '查询机器⼈问答概览指标',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，时间格式为yyyyMMdd，⽐如20240505',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20240505',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，时间格式为yyyyMMdd，⽐如20240605',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20240605',
                    ],
                ],
                [
                    'name' => 'RobotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器⼈实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'chatbot-cn-7QuUfaqMQe',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CostTime' => [
                                'description' => 'API调用耗时，单位毫秒ms。',
                                'type' => 'string',
                                'example' => '116',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '15CD94CC-CBEB-4189-806C-A132D1F45D51',
                            ],
                            'Datas' => [
                                'description' => '数据详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据详情',
                                    'type' => 'object',
                                    'example' => '参考JSON示例',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '机器人接待概况',
            'description' => '仅支持查询T-1（不含当天）的数据',
            'responseParamsDescription' => '**Datas**'."\n"
                .'| 字段名   | 类型  | 描述  |'."\n"
                .'| ------------- |------------   | ----- |'."\n"
                .'| SidCnt   | int      | 接待⼈次 |'."\n"
                .'| ChatCnt   | int      |   对话请求量 |'."\n"
                .'| AvgChatCnt | int   |   平均对话轮次  |'."\n"
                .'|    SolutionSidCnt     |  int       | 解决接待量   |'."\n"
                .'|     NoSolutionRate     |   double     |   未解决率   |'."\n"
                .'|NoAnswerRate| double |⽆答案率|'."\n"
                .'|FeedbackChatCnt |int |点评量 |'."\n"
                .'| FeedbackGoodChatCnt | int |点赞量  |'."\n"
                .'|FeedbackBadChatCnt  | int | 点踩量 |'."\n"
                ."\n"
                .'> Datas数组元素中的各个字段是以String类型返回的，如需转换为数字类型请按需解析',
        ],
        'InitIMConnect' => [
            'summary' => '通过渠道后台配置生成的from值，自定义初始化im连接信息，初始化时支持传递用户鉴权token。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'From',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'B端渠道配置中生成的From值',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8XNBzDucJv',
                    ],
                ],
                [
                    'name' => 'UserAccessToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通过GenerateUserAccessToken接口获取的用户token数据，不填时默认访客接入；',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'QUM4SndaY3VPMjhkQldDZUNOR0ZaTmZ5R3NBY0FKWHJ4OGc4dERZbEJzcjNIKzFiS1RyTjhXRUpBYmVpQlpsakprNDRFVkdxcy9HWVk2RXZvalU3bHhxRkJlc1NBUXZwdHFKOTE2UTNwamQ4b1U4N3dEbmhyRjc4R2hOQStvMnMrYkV2dlVpSHNvWC96SEVNZWRqMjBuMXdjNklpamJzaDNWYllnUldDZGhJPQ==',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'E6988CE6-41CF-1103-9BEC-2B20D26C0B52',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回编码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '异常信息',
                                'type' => 'string',
                                'example' => 'Parameter.Invalid',
                            ],
                            'Data' => [
                                'description' => 'im连接信息',
                                'type' => 'string',
                                'example' => '{     "imDomain": "im.alimebot.com",     "appKey": "WDg2VfNv",     "token": "QUM4SndaY3VPMjhkQldDZUNOR0ZaTmZ5R3NBY0FKWHJ4OGc4dERZbEJzcjNIKzFiS1RyTjhXRUpBYmVpQlpsakprNDRFVkdxcy9HWVk2RXZvalU3bHhxRkJlc1NBUXZwdHFKOTE2UTNwamQ4b1U4N3dEbmhyRjc4R2hOQStvMnMrYkV2dlVpSHNvWC96SEVNZWRqMjBuMXdjNklpamJzaDNWYllnUldDZGhJPQ=="   }',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '初始化im连接',
            'responseParamsDescription' => 'imDomain: im连接域名，'."\n"
                .'appKey:  im认证key，'."\n"
                .'token: im连接token。',
        ],
        'ListSaasInfo' => [
            'summary' => '获取SaaS被集成信息列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
                [
                    'name' => 'SaasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务方用户名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'userTest',
                    ],
                ],
                [
                    'name' => 'SaasGroupCodes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所拥有的saas权限组code，多个用英文逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DS,FAQ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'A629A28F-F25E-5572-A679-FA46FB0151D6',
                            ],
                            'Data' => [
                                'description' => 'SaaS被集成列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SaaS被集成信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => 'SaaS原子化页面唯一标识，可用来关联和查询原子页面的相关信息',
                                            'type' => 'string',
                                            'example' => 'GLOBAL_SERVICE',
                                        ],
                                        'Name' => [
                                            'description' => '原子页面的中文名称',
                                            'type' => 'string',
                                            'example' => '全局服务',
                                        ],
                                        'Url' => [
                                            'description' => '原子页面的链接地址',
                                            'type' => 'string',
                                            'example' => 'https://alime.console.aliyun.com/?productCode=p_beebot_public&switchAgent=1204001&saasCode=Robot&saasToken=06614fdb-c72f-436e-8003-dfe8a2854a15&saasName=123#/robot',
                                        ],
                                        'EnName' => [
                                            'description' => '原子页面的英文名称',
                                            'type' => 'string',
                                            'example' => 'GLOBAL SERVICE',
                                        ],
                                        'ServiceUrl' => [
                                            'description' => 'iframe嵌套SaaS页面链接',
                                            'type' => 'string',
                                            'example' => 'https://pre-alime4service.console.aliyun.com/?productCode=p_beebot_public&switchAgent=1204001&saasCode=Robot&saasToken=06614fdb-c72f-436e-8003-dfe8a2854a15&saasName=123#/robot',
                                        ],
                                    ],
                                ],
                            ],
                            'SaasToken' => [
                                'description' => '云小蜜颁发的SaaS被集成Token',
                                'type' => 'string',
                                'example' => '06614fdb-c72f-436e-8003-dfe8a2854a15',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '获取SaaS被集成信息列表',
        ],
        'ListSaasPermissionGroupInfos' => [
            'summary' => '获取权限被集成信息列表，可通过该列表返回的权限组，给用户授权。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8AD9FA10-7780-5E12-B701-13C928524F32',
                            ],
                            'Data' => [
                                'description' => 'SaaS各集成页面权限列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SaaS各集成页面权限',
                                    'type' => 'object',
                                    'properties' => [
                                        'SaasCode' => [
                                            'description' => 'SaaS原子化页面唯一标识',
                                            'type' => 'string',
                                            'example' => 'FAQ',
                                        ],
                                        'Name' => [
                                            'description' => '原子页面的中文名称',
                                            'type' => 'string',
                                            'example' => '发布中心',
                                        ],
                                        'EnName' => [
                                            'description' => '原子页面的英文名称',
                                            'type' => 'string',
                                            'example' => 'Release Center',
                                        ],
                                        'PgInfos' => [
                                            'description' => 'SaaS权限组列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'SaaS权限组信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PgCode' => [
                                                        'description' => 'SaaS权限组Code',
                                                        'type' => 'string',
                                                        'example' => 'FAQ',
                                                    ],
                                                    'PgName' => [
                                                        'description' => 'SaaS权限组中文名',
                                                        'type' => 'string',
                                                        'example' => 'FAQ管理',
                                                    ],
                                                    'PgEnName' => [
                                                        'description' => 'SaaS权限组英文名',
                                                        'type' => 'string',
                                                        'example' => 'FAQ',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '',
            'title' => '获取权限被集成信息列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'chatbot.cn-shanghai.aliyuncs.com',
        ],
    ],
];
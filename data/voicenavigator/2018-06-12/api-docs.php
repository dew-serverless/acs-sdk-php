<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'VoiceNavigator',
        'version' => '2018-06-12',
    ],
    'directories' => [
        [
            'id' => 77502,
            'title' => '管理配置',
            'type' => 'directory',
            'children' => [
                'ModifyGreetingConfig',
                'ModifySilenceTimeoutConfig',
                'ModifyTTSConfig',
                'ModifyUnrecognizingConfig',
                'DescribeTTSConfig',
                'DescribeExportProgress',
                'AssociateChatbotInstance',
                'AuditTTSVoice',
                'CollectedNumber',
                'ExportStatisticalData',
                'SilenceTimeout',
            ],
        ],
        [
            'id' => 77514,
            'title' => '对话',
            'type' => 'directory',
            'children' => [
                'DescribeConversation',
                'DescribeConversationContext',
                'ListConversationDetails',
                'QueryConversations',
                'DescribeRecording',
                'Dialogue',
                'EndDialogue',
                'SaveRecording',
            ],
        ],
        [
            'id' => 77523,
            'title' => '会话',
            'type' => 'directory',
            'children' => [
                'ListConversations',
                'BeginDialogue',
                'ExportConversationDetails',
            ],
        ],
        [
            'id' => 77527,
            'title' => '调试',
            'type' => 'directory',
            'children' => [
                'DebugBeginDialogue',
                'DebugCollectedNumber',
                'DebugDialogue',
            ],
        ],
        [
            'id' => 77531,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'DeleteInstance',
                'DisableInstance',
                'EnableInstance',
                'ModifyInstance',
                'DescribeNavigationConfig',
                'DescribeInstance',
                'DescribeStatisticalData',
                'ListInstances',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'ListChatbotInstances',
                'CreateDownloadUrl',
                'ListDownloadTasks',
                'GenerateUploadUrl',
                'ModifyAsrConfig',
                'GetAsrConfig',
                'GetRealTimeConcurrency',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ModifyGreetingConfig' => [
            'methods' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'GreetingWords',
                    'in' => 'query',
                    'schema' => [
                        'description' => '欢迎语',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '你好，欢迎使用智能导航。',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chatbotIntent',
                    ],
                ],
                [
                    'name' => 'IntentTrigger',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发意图',
                        'type' => 'string',
                        'required' => false,
                        'example' => '开始',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
            'title' => '修改问候语配置',
            'summary' => '修改问候语配置。',
        ],
        'ModifySilenceTimeoutConfig' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'Prompt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静默超时提示语',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '不好意思，听不见您说什么',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静默超时时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静默超时最大次数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FinalPrompt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最后一次静默提示语',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '再见',
                    ],
                ],
                [
                    'name' => 'FinalAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提示后的动作',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TransferToAgent',
                    ],
                ],
                [
                    'name' => 'FinalActionParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动作参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chatbotIntent',
                    ],
                ],
                [
                    'name' => 'IntentTrigger',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发的意图',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Timeout',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
            'title' => 'ModifySilenceTimeoutConfig',
            'summary' => '修改静默超时配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyTTSConfig' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'Voice',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发音人',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aixia',
                    ],
                ],
                [
                    'name' => 'SpeechRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '声音速率',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音量',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NlsServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'EngineXunfei',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '修改 TTS 配置',
            'summary' => '修改TTS配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyUnrecognizingConfig' => [
            'methods' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'Prompt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拒识提示语',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '我不理解您的意思，请再说一遍',
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拒识最大次数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FinalPrompt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最后一次拒识提示语',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '再见',
                    ],
                ],
                [
                    'name' => 'FinalAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拒识动作',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TransferToAgent',
                    ],
                ],
                [
                    'name' => 'FinalActionParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动作参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
            'title' => '修改拒识配置',
            'summary' => '修改拒识配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTTSConfig' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dc437bba-5a25-4bbc-b4c2-f268864bebb5',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所有者id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1971226538081821',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F132DDBA-66C4-5BD3-BF7E-9642FE877158',
                            ],
                            'Volume' => [
                                'description' => '音量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Voice' => [
                                'description' => '发音人',
                                'type' => 'string',
                                'example' => 'aixia',
                            ],
                            'SpeechRate' => [
                                'description' => '语速',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '-150',
                            ],
                            'NlsServiceType' => [
                                'type' => 'string',
                            ],
                            'AppKey' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineXunfei' => [
                                'type' => 'string',
                            ],
                            'PitchRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F132DDBA-66C4-5BD3-BF7E-9642FE877158\\",\\n  \\"Volume\\": 50,\\n  \\"Voice\\": \\"aixia\\",\\n  \\"SpeechRate\\": -150,\\n  \\"NlsServiceType\\": \\"\\",\\n  \\"AppKey\\": \\"\\",\\n  \\"Engine\\": \\"\\",\\n  \\"EngineXunfei\\": \\"\\",\\n  \\"PitchRate\\": 0\\n}","type":"json"}]',
            'title' => '查询 TTS 配置',
            'summary' => '查询tts 配置。',
        ],
        'DescribeExportProgress' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '868eef14-7515-4856-8a50-5c9a22abdbcc',
                    ],
                ],
                [
                    'name' => 'ExportTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导出任务id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0de8e5ccc2b645039ae6fbda443da73f',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'FINISHED',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'b19af5ce5314ac08108d1b33fe20e15',
                            ],
                            'FileHttpUrl' => [
                                'description' => '文件url',
                                'type' => 'string',
                                'example' => 'http://ssml-test.oss-cn-shanghai.aliyuncs.com/key',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"FINISHED\\",\\n  \\"FileHttpUrl\\": \\"http://ssml-test.oss-cn-shanghai.aliyuncs.com/key\\",\\n  \\"RequestId\\": \\"b19af5ce5314ac08108d1b33fe20e15\\"\\n}","errorExample":""},{"type":"xml","example":"<FileHttpUrl>http://ssml-test.oss-cn-shanghai.aliyuncs.com/key</FileHttpUrl>\\n<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>\\n<Status>FINISHED</Status>","errorExample":""}]',
            'title' => '查询导出任务状态',
            'summary' => '查询导出任务状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AssociateChatbotInstance' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导航实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ],
                ],
                [
                    'name' => 'ChatbotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '小蜜机器人ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'chatbot-720edd02b66a',
                    ],
                ],
                [
                    'name' => 'ChatbotName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '小蜜机器名字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '客服机器人',
                    ],
                ],
                [
                    'name' => 'UnionSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'NluServiceParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'NluServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>","errorExample":""}]',
            'title' => '关联小蜜机器人',
            'summary' => '关联小蜜机器人。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AuditTTSVoice' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导航实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ],
                ],
                [
                    'name' => 'Voice',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发音人',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aixia',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'description' => '试听文本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'SpeechRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '声音速率',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音量',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PitchRate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecretKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccessKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
                            ],
                            'AuditionUrl' => [
                                'description' => '试听URL',
                                'type' => 'string',
                                'example' => 'http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&OSSAccessKeyId=LTAIppQY5rofntVJ&Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\",\\n  \\"AuditionUrl\\": \\"http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&OSSAccessKeyId=LTAIppQY5rofntVJ&Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5100B51E-2C4E-4F3C-8784-92827F501D73</RequestId>\\n<AuditionUrl>http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&amp;OSSAccessKeyId=LTAIppQY5rofntVJ&amp;Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D</AuditionUrl>","errorExample":""}]',
            'title' => '试听 TTS 声音',
            'summary' => '试听TTS声音。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CollectedNumber' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '示例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
                    ],
                ],
                [
                    'name' => 'Number',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1500060224',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所有者id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1426738157626835',
                    ],
                ],
                [
                    'name' => 'AdditionalContext',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => 'ivr播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{\\"duration\\":31340,\\"endTime\\":1638243934786,\\"hangUpDirection\\":\\"ivr\\",\\"startTime\\":1638243903446}',
                            ],
                            'TextResponse' => [
                                'description' => '播报的文本',
                                'type' => 'string',
                                'example' => '收号内容是123',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": false,\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":31340,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1638243934786,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ivr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1638243903446}\\",\\n  \\"TextResponse\\": \\"收号内容是123\\"\\n}","type":"json"}]',
            'title' => '收号',
            'summary' => '收号。',
        ],
        'ExportStatisticalData' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '29b52d70-d9fe-4fe0-8476-8aaacbcfdc84',
                    ],
                ],
                [
                    'name' => 'TimeUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间单元',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Hour',
                    ],
                ],
                [
                    'name' => 'ExportType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导出类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'statistical',
                    ],
                ],
                [
                    'name' => 'BeginTimeLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582266750353',
                    ],
                ],
                [
                    'name' => 'BeginTimeRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件，结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582266750353',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'c62e6789-28a8-41db-941e-171a01d3b3b9',
                            ],
                            'ExportTaskId' => [
                                'description' => '异步导出任务id',
                                'type' => 'string',
                                'example' => '6be5a9f1-406e-424e-a17b-b6fb86ee3cc9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExportTaskId\\": \\"6be5a9f1-406e-424e-a17b-b6fb86ee3cc9\\",\\n  \\"RequestId\\": \\"c62e6789-28a8-41db-941e-171a01d3b3b9\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>c62e6789-28a8-41db-941e-171a01d3b3b9</RequestId>\\n<ExportTaskId>6be5a9f1-406e-424e-a17b-b6fb86ee3cc9</ExportTaskId>","errorExample":""}]',
            'title' => '导出统计数据',
            'summary' => '导出统计数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SilenceTimeout' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
                    ],
                ],
                [
                    'name' => 'InitialContext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话信息上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所有者id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1231639035307976',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'TransferToAgent',
                            ],
                            'Interruptible' => [
                                'description' => '是否打断',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{ "skillGroupId": "ABC"}',
                            ],
                            'TextResponse' => [
                                'description' => '文本信息',
                                'type' => 'string',
                                'example' => '正在为你转接人工坐席',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidConversationId.NotFound',
                        'errorMessage' => 'The specified ConversationId does not exist in our record.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Action\\": \\"TransferToAgent\\",\\n  \\"Interruptible\\": false,\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\",\\n  \\"ActionParams\\": \\"{ \\\\\\"skillGroupId\\\\\\": \\\\\\"ABC\\\\\\"}\\",\\n  \\"TextResponse\\": \\"正在为你转接人工坐席\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>\\n<TextResponse>正在为你转接人工坐席</TextResponse>\\n<ActionParams>{ \\"skillGroupId\\": \\"ABC\\"}</ActionParams>\\n<Interruptible>false</Interruptible>\\n<Action>TransferToAgent</Action>","errorExample":""}]',
            'title' => 'SilenceTimeout',
            'summary' => '静默超时。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeConversation' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5daac920-d6c1-429f-a95f-2a798f5255b5',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '15608cce-36be-43d5-9361-178cbe64127b',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EffectiveAnswerCount' => [
                                'description' => '有效问答数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8',
                            ],
                            'ConversationId' => [
                                'description' => '对话id',
                                'type' => 'string',
                                'example' => '2d5aa451-661f-4f08-b0c4-28eec78decc4',
                            ],
                            'TransferredToAgent' => [
                                'description' => '是否转人工',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1582103299434',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'BeginTime' => [
                                'description' => '开始时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1582103260434',
                            ],
                            'SkillGroupId' => [
                                'description' => '技能组id',
                                'type' => 'string',
                                'example' => 'ABABCBAC',
                            ],
                            'CallingNumber' => [
                                'description' => '呼入号码',
                                'type' => 'string',
                                'example' => '138106*****',
                            ],
                            'UserUtteranceCount' => [
                                'description' => '客户提问数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": 1582103299434,\\n  \\"EffectiveAnswerCount\\": 8,\\n  \\"TransferredToAgent\\": true,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"SkillGroupId\\": \\"ABABCBAC\\",\\n  \\"BeginTime\\": 1582103260434,\\n  \\"ConversationId\\": \\"2d5aa451-661f-4f08-b0c4-28eec78decc4\\",\\n  \\"CallingNumber\\": \\"138106*****\\",\\n  \\"UserUtteranceCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<CallingNumber>13810671937</CallingNumber>\\n<BeginTime>2018-05-02T00:00:00Z</BeginTime>\\n<EndTime>2018-05-02T00:00:30Z</EndTime>\\n<TransferredToAgent>true</TransferredToAgent>\\n<SkillGroupId>AAA</SkillGroupId>\\n<UserUtteranceCount>10</UserUtteranceCount>\\n<EffectiveAnswerCount>8</EffectiveAnswerCount>","errorExample":""}]',
            'title' => '查询对话信息',
            'summary' => '查询对话信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeConversationContext' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '026ca0f4-483b-4252-ae1d-1f15f056f8b9',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '361c8a53-0e29-42f3-8aa7-c7752d010399',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'b19af5ce5314ac08108d1b33fe20e15',
                            ],
                            'ConversationContext' => [
                                'description' => '会话上下文数据',
                                'type' => 'string',
                                'example' => ' {         "CallingNumber": "135815***",         "AdditionalContext": "",         "ConversationId": "361c8a53-0e29-42f3-8aa7-c7752d010399"     }',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidConversationId.NotFound',
                        'errorMessage' => 'The specified ConversationId does not exist in our record.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConversationContext\\": \\" {         \\\\\\"CallingNumber\\\\\\": \\\\\\"135815***\\\\\\",         \\\\\\"AdditionalContext\\\\\\": \\\\\\"\\\\\\",         \\\\\\"ConversationId\\\\\\": \\\\\\"361c8a53-0e29-42f3-8aa7-c7752d010399\\\\\\"     }\\",\\n  \\"RequestId\\": \\"b19af5ce5314ac08108d1b33fe20e15\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>\\n<ConversationContext>\\n    <CallingNumber>135815***</CallingNumber>\\n    <AdditionalContext/>\\n    <ConversationId>361c8a53-0e29-42f3-8aa7-c7752d010399</ConversationId>\\n</ConversationContext>","errorExample":""}]',
            'title' => '查询对话上下文',
            'summary' => '查询会话上下文数据{}。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListConversationDetails' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '82b2eaae-ce5c-45f8-8231-f15b6b27e55c',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a2c26e67-5984-4935-984e-bcee52971993',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'ConversationDetails' => [
                                'description' => '对话列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Action' => [
                                            'description' => '动作',
                                            'type' => 'string',
                                            'example' => 'Dialogue',
                                        ],
                                        'Speaker' => [
                                            'description' => '讲述人 Customer = 客户，Chatbot = 机器人',
                                            'type' => 'string',
                                            'example' => 'Chatbot',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582266750353',
                                        ],
                                        'ConversationId' => [
                                            'description' => '会话id',
                                            'type' => 'string',
                                            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                                        ],
                                        'ActionParams' => [
                                            'description' => '动作参数',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'SequenceId' => [
                                            'description' => '本轮次会话交互的序列号',
                                            'type' => 'string',
                                            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                                        ],
                                        'Utterance' => [
                                            'description' => '用户表述',
                                            'type' => 'string',
                                            'example' => '你好',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidConversationId.NotFound',
                        'errorMessage' => 'The specified ConversationId does not exist in our record.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"ConversationDetails\\": [\\n    {\\n      \\"Action\\": \\"Dialogue\\",\\n      \\"Speaker\\": \\"Chatbot\\",\\n      \\"CreateTime\\": 1582266750353,\\n      \\"ConversationId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"ActionParams\\": \\"{}\\",\\n      \\"SequenceId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"Utterance\\": \\"你好\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<ConversationDetails>\\n    <ConversationId>abcde</ConversationId>\\n    <Speaker>Customer</Speaker>\\n    <Utterance>你好</Utterance>\\n    <Action>Dialogue</Action>\\n    <ActionParams>{}</ActionParams>\\n    <CreateTime>2018-07-02 20:37:40</CreateTime>\\n    <SequenceId>2</SequenceId>\\n</ConversationDetails>","errorExample":""}]',
            'title' => '查看实例下的对话',
            'summary' => '查看实例下的对话。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryConversations' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02811111111',
                    ],
                ],
                [
                    'name' => 'BeginTimeLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围左区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582183381000',
                    ],
                ],
                [
                    'name' => 'BeginTimeRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围右区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582356181000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'PageSize' => [
                                'description' => '每页条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Conversations' => [
                                'description' => '会话列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582183481000',
                                        ],
                                        'EffectiveAnswerCount' => [
                                            'description' => '有效回答数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                        ],
                                        'TransferredToAgent' => [
                                            'description' => '是否转人工',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'BeginTime' => [
                                            'description' => '开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582183381000',
                                        ],
                                        'SkillGroupId' => [
                                            'description' => '技能组',
                                            'type' => 'string',
                                            'example' => 'AAA',
                                        ],
                                        'ConversationId' => [
                                            'description' => '会话ID',
                                            'type' => 'string',
                                            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                                        ],
                                        'CallingNumber' => [
                                            'description' => '主叫号码',
                                            'type' => 'string',
                                            'example' => '02811111111',
                                        ],
                                        'UserUtteranceCount' => [
                                            'description' => '用户回答数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
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
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 100,\\n  \\"Conversations\\": [\\n    {\\n      \\"EndTime\\": 1582183481000,\\n      \\"EffectiveAnswerCount\\": 8,\\n      \\"TransferredToAgent\\": true,\\n      \\"BeginTime\\": 1582183381000,\\n      \\"SkillGroupId\\": \\"AAA\\",\\n      \\"ConversationId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"CallingNumber\\": \\"02811111111\\",\\n      \\"UserUtteranceCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<PageNumber>1</PageNumber>\\n<PageSize>10</PageSize>\\n<TotalCount>100</TotalCount>\\n<Conversations>\\n    <CallingNumber>02811111111</CallingNumber>\\n    <BeginTime>1582183381000</BeginTime>\\n    <EndTime>1582183481000</EndTime>\\n    <TransferredToAgent>true</TransferredToAgent>\\n    <SkillGroupId>AAA</SkillGroupId>\\n    <UserUtteranceCount>10</UserUtteranceCount>\\n    <EffectiveAnswerCount>8</EffectiveAnswerCount>\\n    <ConversationId>af81a389-91f0-4157-8d82-720edd02b66a</ConversationId>\\n</Conversations>","errorExample":""}]',
            'title' => '查询对话记录',
            'summary' => '查询对话记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRecording' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
                    ],
                ],
                [
                    'name' => 'NeedVoiceSliceRecording',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FilePath' => [
                                'description' => '文件下载地址',
                                'type' => 'string',
                                'example' => 'url',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'FileName' => [
                                'description' => '文件名字',
                                'type' => 'string',
                                'example' => '2019080913202222.wav',
                            ],
                            'VoiceSliceRecordingListJson' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidConversationId.NotFound',
                        'errorMessage' => 'The specified ConversationId does not exist in our record.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"FilePath\\": \\"url\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"FileName\\": \\"2019080913202222.wav\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<FilePath>url</FilePath>\\n<FileName>2019080913202222.wav</FileName>","errorExample":""}]',
            'title' => '获取对话录音',
            'summary' => '获取对话录音。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'Dialogue' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '21e0b2a3-168d-4ba7-9009-afc42666eb54',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户表述',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '行吧，那我就不打扰您了，再见。',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10086',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18851708605',
                    ],
                ],
                [
                    'name' => 'AdditionalContext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的阿里云账号id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1426738157626835',
                    ],
                ],
                [
                    'name' => 'Emotion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => 'ivr播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '9DB8BA95-4513-54B9-9C67-A28909CFB4AD',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{\\"duration\\":2420,\\"endTime\\":1651717326805,\\"hangUpDirection\\":\\"client\\",\\"hasLastPlaybackCompleted\\":true,\\"startTime\\":1651717324385}',
                            ],
                            'TextResponse' => [
                                'description' => '播报的文本',
                                'type' => 'string',
                                'example' => '您好，欢迎致电智能助手',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": true,\\n  \\"RequestId\\": \\"9DB8BA95-4513-54B9-9C67-A28909CFB4AD\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":2420,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1651717326805,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"client\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hasLastPlaybackCompleted\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1651717324385}\\",\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\"\\n}","type":"json"}]',
            'title' => '对话接口',
            'summary' => '对话接口。',
        ],
        'EndDialogue' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e48e45dd-e47a-4744-a063-f08cbebb1c5a',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '8fb819b5-d032-48a9-ae5e-cff041b83596',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所有者id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1399572315967217',
                    ],
                ],
                [
                    'name' => 'HangUpParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂断参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"duration\\":40,\\"endTime\\":1645082505345,\\"hangUpDirection\\":\\"ivr\\",\\"hasLastPlaybackCompleted\\":true,\\"startTime\\":1645082505305}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'e48e45dd-e47a-4744-a063-f08cbebb1c5a',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"e48e45dd-e47a-4744-a063-f08cbebb1c5a\\"\\n}","errorExample":""},{"type":"xml","example":"<RequesetId>e48e45dd-e47a-4744-a063-f08cbebb1c5a</RequesetId>","errorExample":""}]',
            'title' => 'EndDialogue',
            'summary' => '结束对话。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SaveRecording' => [
            'methods' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '390515b5-6115-4ccf-83e2-52d5bfaf2ddf',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '录音开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1582267398628',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '录音时长',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e6bef0db439d4048bfcf45322491becf.wav',
                    ],
                ],
                [
                    'name' => 'FilePath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件路径',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'oss://test/record/',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '录音文件类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Source',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属账号id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1971226538081821',
                    ],
                ],
                [
                    'name' => 'VoiceSliceRecordingList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidConversationId.NotFound',
                        'errorMessage' => 'The specified ConversationId does not exist in our record.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>","errorExample":""}]',
            'title' => 'SaveRecording',
            'summary' => '保存录音。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListConversations' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例列表',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '138106*****',
                    ],
                ],
                [
                    'name' => 'Result',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结果',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13788914724',
                    ],
                ],
                [
                    'name' => 'BeginTimeLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围左区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1638288000000',
                    ],
                ],
                [
                    'name' => 'BeginTimeRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围右区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637547875311',
                    ],
                ],
                [
                    'name' => 'IsSandBox',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '是否是沙箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RoundsLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '轮次查询范围左区间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RoundsRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '轮次查询范围右区间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总计个数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'a2c26e67-5984-4935-984e-bcee52971993',
                            ],
                            'PageNumber' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Conversations' => [
                                'description' => '会话列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '会话列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582266750353',
                                        ],
                                        'HasToAgent' => [
                                            'description' => '是否有转人工',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1641625694286',
                                        ],
                                        'SkillGroup' => [
                                            'description' => '技能组',
                                            'type' => 'string',
                                            'example' => 'skg-123',
                                        ],
                                        'ConversationId' => [
                                            'description' => '会话id',
                                            'type' => 'string',
                                            'example' => '82b2eaae-ce5c-45f8-8231-f15b6b27e55c',
                                        ],
                                        'CallingNumber' => [
                                            'description' => '主叫号码',
                                            'type' => 'string',
                                            'example' => '135815884***',
                                        ],
                                        'EndReason' => [
                                            'description' => '挂断原因，有以下枚举：'."\n"
                                                .'     1.正常完结'."\n"
                                                .'     2.拒识后机器人挂机'."\n"
                                                .'     3.静默超时挂机'."\n"
                                                .'     4.拒识后用户挂机'."\n"
                                                .'     5.用户无理由挂机'."\n"
                                                .'     6.命中意图转人工'."\n"
                                                .'     7.拒识转人工'."\n"
                                                .'     8.用户侧无交互'."\n"
                                                .'     9.系统异常中断'."\n"
                                                .'     10.命中意图转IVR'."\n"
                                                .'     11.拒识转IVR',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Rounds' => [
                                            'description' => '轮转次数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'HasLastPlaybackCompleted' => [
                                            'description' => '挂断时最后一句是否播报完成',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SandBox' => [
                                            'description' => '是否沙箱',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CalledNumber' => [
                                            'description' => '被叫号码',
                                            'type' => 'string',
                                            'example' => '12356',
                                        ],
                                        'DsReport' => [
                                            'type' => 'string',
                                        ],
                                        'DsReportTitles' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
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
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"a2c26e67-5984-4935-984e-bcee52971993\\",\\n  \\"PageNumber\\": 1,\\n  \\"Conversations\\": [\\n    {\\n      \\"EndTime\\": 1582266750353,\\n      \\"HasToAgent\\": false,\\n      \\"StartTime\\": 1641625694286,\\n      \\"SkillGroup\\": \\"skg-123\\",\\n      \\"ConversationId\\": \\"82b2eaae-ce5c-45f8-8231-f15b6b27e55c\\",\\n      \\"CallingNumber\\": \\"135815884***\\",\\n      \\"EndReason\\": 1,\\n      \\"Rounds\\": 2,\\n      \\"HasLastPlaybackCompleted\\": true,\\n      \\"SandBox\\": true,\\n      \\"CalledNumber\\": \\"12356\\",\\n      \\"DsReport\\": \\"\\",\\n      \\"DsReportTitles\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询会话列表',
            'summary' => '查询会话列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BeginDialogue' => [
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
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10086',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1358158****',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
                    ],
                ],
                [
                    'name' => 'InitialContext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"channelId\\":\\"fe2559d3-5fc9-4fa5-8314-32b9f762791d\\"}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '4d7db6670b8e41b5adb1f21560ea9272',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所有者id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1231639035307976',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => '是否可打断ivr播报',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{\\"duration\\":31340,\\"endTime\\":1638243934786,\\"hangUpDirection\\":\\"ivr\\",\\"startTime\\":1638243903446}',
                            ],
                            'TextResponse' => [
                                'description' => '文本信息',
                                'type' => 'string',
                                'example' => '您好，欢迎致电智能助手',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": true,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":31340,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1638243934786,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ivr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1638243903446}\\",\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\"\\n}","type":"json"}]',
            'title' => '开启会话',
            'summary' => '开启会话。',
        ],
        'ExportConversationDetails' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '6c01a99f-1b72-4f75-a8bd-3875766bd19d',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13581588**',
                    ],
                ],
                [
                    'name' => 'BeginTimeLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围左区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582266750353',
                    ],
                ],
                [
                    'name' => 'BeginTimeRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期范围右区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640793599000',
                    ],
                ],
                [
                    'name' => 'Options',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '可选参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义参数。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '{\'Option\': [\'betaTestApproved\']}',
                        ],
                        'required' => false,
                        'maxItems' => 99,
                    ],
                ],
                [
                    'name' => 'RoundsLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RoundsRightRange',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Result',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '75BAAB9B-40B2-5FF5-A59A-7BCF8154C6EE',
                            ],
                            'ExportTaskId' => [
                                'description' => '异步导出任务id',
                                'type' => 'string',
                                'example' => '6203fc87271a420c98eab6c2bbc2d856',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75BAAB9B-40B2-5FF5-A59A-7BCF8154C6EE\\",\\n  \\"ExportTaskId\\": \\"6203fc87271a420c98eab6c2bbc2d856\\"\\n}","type":"json"}]',
            'title' => '导出会话详情',
            'summary' => '导出会话详情。',
        ],
        'DebugBeginDialogue' => [
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
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10086',
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '135815*****',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '8a503680-815d-473e-a9b0-e010f47a64d2',
                    ],
                ],
                [
                    'name' => 'InitialContext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '8a503680-815d-473e-a9b0-e010f47a64d2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作指令',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => 'IVR播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'ActionParams' => [
                                'description' => '动作指令参数',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'TextResponse' => [
                                'description' => '播报内容',
                                'type' => 'string',
                                'example' => '您好，欢迎致电智能助手',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
            'title' => '调试环境开启会话',
            'summary' => '调试环境开启会话。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DebugCollectedNumber' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
                    ],
                ],
                [
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
                    ],
                ],
                [
                    'name' => 'Number',
                    'in' => 'query',
                    'schema' => [
                        'description' => '收号内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => 'ivr 播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'TextResponse' => [
                                'description' => '播报的文本内容',
                                'type' => 'string',
                                'example' => '您好，欢迎致电智能助手',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"abb4aa26-3a8e-43dd-82f8-0c3898c9c67f\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
            'title' => '调试环境收号',
            'summary' => '调试环境收号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DebugDialogue' => [
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
                    'name' => 'ConversationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户表述',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
                    ],
                ],
                [
                    'name' => 'AdditionalContext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户表述',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '是的',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Action' => [
                                'description' => '动作',
                                'type' => 'string',
                                'example' => 'Broadcast',
                            ],
                            'Interruptible' => [
                                'description' => 'ivr 播报是否可打断',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
                            ],
                            'ActionParams' => [
                                'description' => '动作参数',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'TextResponse' => [
                                'description' => '播报的内容',
                                'type' => 'string',
                                'example' => '80d11be3-faad-4101-b4b0-59dbea28aaf0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"80d11be3-faad-4101-b4b0-59dbea28aaf0\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"d74d6290-7cbe-4436-b5d7-014ebb0f4060\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
            'title' => '调试环境对话',
            'summary' => '调试环境对话。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateInstance' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '导航实例',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '第一个导航实例',
                    ],
                ],
                [
                    'name' => 'Concurrency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '并发数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'UnionSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'UnionInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'NluServiceParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '9ab43460-c0b9-40e2-8447-48d82c97fc67',
                            ],
                            'InstanceId' => [
                                'description' => '实例id',
                                'type' => 'string',
                                'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidConcurrency.LimitExceeded',
                        'errorMessage' => 'The specified Concurrency exceeds the upper limit.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceName.Duplicated',
                        'errorMessage' => 'The specified InstanceName already exists.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"c28fc549-d88f-4f6e-85ad-a0806e5e39c0\\",\\n  \\"RequestId\\": \\"9ab43460-c0b9-40e2-8447-48d82c97fc67\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<InstanceId>12f407b22cbe4890ac595f09985848d5</InstanceId>","errorExample":""}]',
            'title' => '创建智能导航实例',
            'summary' => '创建智能导航实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteInstance' => [
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d74d6290-7cbe-4436-b5d7-014ebb0f4060\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>","errorExample":""}]',
            'title' => 'DeleteInstance',
            'summary' => '删除导航实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableInstance' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '删除状态',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"true\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
            'title' => '删除智能导航实例',
            'summary' => '删除智能导航实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableInstance' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '结果状态',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '3a530dc0-7cfa-48f6-9539-bf9001e77b16',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"true\\",\\n  \\"RequestId\\": \\"3a530dc0-7cfa-48f6-9539-bf9001e77b16\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3a530dc0-7cfa-48f6-9539-bf9001e77b16</RequestId>","errorExample":""}]',
            'title' => '启用实例',
            'summary' => '启用实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyInstance' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12f407b22cbe4890ac595f09985848d5',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '描述',
                    ],
                ],
                [
                    'name' => 'Concurrency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例最大并发数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidConcurrency.LimitExceeded',
                        'errorMessage' => 'The specified Concurrency exceeds the upper limit.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceName.Duplicated',
                        'errorMessage' => 'The specified InstanceName already exists.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
            'title' => '修改实例',
            'summary' => '修改实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNavigationConfig' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '287289b6-1510-4e64-9224-39b53ad89dd2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'SilenceTimeoutConfig' => [
                                'description' => '静默超时配置',
                                'type' => 'object',
                                'properties' => [
                                    'Timeout' => [
                                        'description' => '静默超时时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'IntentTrigger' => [
                                        'description' => '""',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'FinalPrompt' => [
                                        'description' => '最后一次静默提示语',
                                        'type' => 'string',
                                        'example' => '抱歉，听不到您说话，请您稍后致电',
                                    ],
                                    'SourceType' => [
                                        'description' => '配置源类型',
                                        'type' => 'string',
                                        'example' => 'chatbotIntent',
                                    ],
                                    'FinalAction' => [
                                        'description' => '提示后的动作：TransferToAgent / TransferToIVR / RedirectToPage / HangUp',
                                        'type' => 'string',
                                        'example' => 'HangUp',
                                    ],
                                    'Prompt' => [
                                        'description' => '静默超时提示语',
                                        'type' => 'string',
                                        'example' => '抱歉，我没听到您说话',
                                    ],
                                    'Threshold' => [
                                        'description' => '静默超时最大次数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'FinalActionParams' => [
                                        'description' => '动作参数，如：跳转目标',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                ],
                            ],
                            'GreetingConfig' => [
                                'description' => '问候语配置',
                                'type' => 'object',
                                'properties' => [
                                    'IntentTrigger' => [
                                        'description' => '触发意图',
                                        'type' => 'string',
                                        'example' => '你好',
                                    ],
                                    'GreetingWords' => [
                                        'description' => '问候语',
                                        'type' => 'string',
                                        'example' => '您好，欢迎致电智能导航',
                                    ],
                                    'SourceType' => [
                                        'description' => '配置类型',
                                        'type' => 'string',
                                        'example' => 'chatbotIntent',
                                    ],
                                ],
                            ],
                            'UnrecognizingConfig' => [
                                'description' => 'Unrecognizing对象 | 据识配置',
                                'type' => 'object',
                                'properties' => [
                                    'FinalPrompt' => [
                                        'description' => '最后一次拒识提示语',
                                        'type' => 'string',
                                        'example' => '抱歉，我暂时无法处理您的问题，即将为您转接人工',
                                    ],
                                    'FinalAction' => [
                                        'description' => '拒识动作：TransferToAgent / TransferToIVR / RedirectToPage / HangUp',
                                        'type' => 'string',
                                        'example' => 'TransferToAgent',
                                    ],
                                    'FinalActionParams' => [
                                        'description' => ' 动作参数，如：跳转目标',
                                        'type' => 'string',
                                        'example' => '{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }',
                                    ],
                                    'Threshold' => [
                                        'description' => '拒识最大次数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'Prompt' => [
                                        'description' => '拒识提示语',
                                        'type' => 'string',
                                        'example' => '抱歉，我无法理解您的意思',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"GreetingConfig\\": {\\n    \\"SourceType\\": \\"chatbotIntent\\",\\n    \\"IntentTrigger\\": \\"你好\\",\\n    \\"GreetingWords\\": \\"您好，欢迎致电智能导航\\"\\n  },\\n  \\"UnrecognizingConfig\\": {\\n    \\"FinalAction\\": \\"TransferToAgent\\",\\n    \\"FinalActionParams\\": \\"{ \\\\\\\\\\\\\\"skillGroupId\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"fallbackSkillGroup\\\\\\\\\\\\\\" }\\",\\n    \\"Threshold\\": 3,\\n    \\"Prompt\\": \\"抱歉，我无法理解您的意思\\",\\n    \\"FinalPrompt\\": \\"抱歉，我暂时无法处理您的问题，即将为您转接人工\\"\\n  },\\n  \\"RepeatingConfig\\": {\\n    \\"Utterances\\": [\\n      \\" [         \\\\\\"没听清\\\\\\",         \\\\\\"再说一遍\\\\\\"       ]\\"\\n    ]\\n  },\\n  \\"AskingBackConfig\\": {\\n    \\"NegativeFeedbackPrompt\\": \\"感谢您的来电。请您稍后为我的服务做出评价。\\",\\n    \\"NegativeFeedbackAction\\": \\"TransferToIVR\\",\\n    \\"NegativeFeedbackActionParams\\": \\"{ \\\\\\\\\\\\\\"route\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"satisfaction\\\\\\\\\\\\\\" }\\",\\n    \\"EnableNegativeFeedback\\": true,\\n    \\"Enabled\\": true,\\n    \\"Prompt\\": \\"请问还有什么可以帮您？\\",\\n    \\"NegativeFeedbackUtterances\\": [\\n      \\" [         \\\\\\"没有了\\\\\\",         \\\\\\"不需要了\\\\\\",         \\\\\\"不用了，谢谢\\\\\\"       ],\\"\\n    ]\\n  },\\n  \\"ComplainingConfig\\": {\\n    \\"FinalAction\\": \\"TransferToAgent\\",\\n    \\"Prompt\\": \\"好的，即将为您转接人工处理\\",\\n    \\"FinalActionParams\\": \\"{ \\\\\\\\\\\\\\"skillGroupId\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"fallbackSkillGroup\\\\\\\\\\\\\\" }\\",\\n    \\"Utterances\\": [\\n      \\"[         \\\\\\"投诉\\\\\\",         \\\\\\"转人工\\\\\\",         \\\\\\"有没有人工\\\\\\"       ]\\"\\n    ]\\n  },\\n  \\"SilenceTimeoutConfig\\": {\\n    \\"Timeout\\": 10,\\n    \\"IntentTrigger\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"FinalPrompt\\": \\"抱歉，听不到您说话，请您稍后致电\\",\\n    \\"SourceType\\": \\"chatbotIntent\\",\\n    \\"FinalAction\\": \\"HangUp\\",\\n    \\"Prompt\\": \\"抱歉，我没听到您说话\\",\\n    \\"Threshold\\": 3,\\n    \\"FinalActionParams\\": \\"{}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<GreetingConfig>\\n    <GreetingWords>您好，欢迎致电智能导航</GreetingWords>\\n</GreetingConfig>\\n<UnrecognizingConfig>\\n    <Prompt>抱歉，我无法理解您的意思</Prompt>\\n    <Threshold>3</Threshold>\\n    <FinalPrompt>抱歉，我暂时无法处理您的问题，即将为您转接人工</FinalPrompt>\\n    <FinalAction>TransferToAgent</FinalAction>\\n    <FinalActionParams>{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }</FinalActionParams>\\n</UnrecognizingConfig>\\n<RepeatingConfig>\\n    <Utterances>没听清</Utterances>\\n    <Utterances>再说一遍</Utterances>\\n</RepeatingConfig>\\n<AskingBackConfig>\\n    <Enabled>true</Enabled>\\n    <Prompt>请问还有什么可以帮您？</Prompt>\\n    <EnableNegativeFeedback>true</EnableNegativeFeedback>\\n    <NegativeFeedbackUtterances>没有了</NegativeFeedbackUtterances>\\n    <NegativeFeedbackUtterances>不需要了</NegativeFeedbackUtterances>\\n    <NegativeFeedbackUtterances>不用了，谢谢</NegativeFeedbackUtterances>\\n    <NegativeFeedbackPrompt>感谢您的来电。请您稍后为我的服务做出评价。</NegativeFeedbackPrompt>\\n    <NegativeFeedbackAction>TransferToIVR</NegativeFeedbackAction>\\n    <NegativeFeedbackActionParams> { \\"route\\": \\"satisfaction\\" } </NegativeFeedbackActionParams>\\n</AskingBackConfig>\\n<SilenceTimeoutConfig>\\n    <Prompt>抱歉，我没听到您说话</Prompt>\\n    <Timeout>10</Timeout>\\n    <Threshold>3</Threshold>\\n    <FinalPrompt>抱歉，听不到您说话，请您稍后致电</FinalPrompt>\\n    <FinalAction>HangUp</FinalAction>\\n</SilenceTimeoutConfig>\\n<ComplainingConfig>\\n    <Utterances>投诉</Utterances>\\n    <Utterances>转人工</Utterances>\\n    <Utterances>有没有人工</Utterances>\\n    <Prompt>好的，即将为您转接人工处理</Prompt>\\n    <Action>TransferToAgent</Action>\\n    <ActionParams>{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }</ActionParams>\\n</ComplainingConfig>","errorExample":""}]',
            'title' => '查看实例IVR配置',
            'summary' => '查看实例IVR配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstance' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cd6fc91bc13445c2af7f2e3e31418520',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'Published',
                            ],
                            'ModifyTime' => [
                                'description' => '更新时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1683216000000',
                            ],
                            'Description' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => '导航测试实例描述信息',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '790B5EA3-D251-1666-B1E0-4D1F4B33A592',
                            ],
                            'InstanceId' => [
                                'description' => '实例id',
                                'type' => 'string',
                                'example' => 'cd6fc91bc13445c2af7f2e3e31418520',
                            ],
                            'Concurrency' => [
                                'description' => '实例并发',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'ApplicableOperations' => [
                                'description' => '适用操作列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '适用操作',
                                    'type' => 'string',
                                    'example' => 'Edit',
                                ],
                            ],
                            'ModifyUserName' => [
                                'description' => '更新者',
                                'type' => 'string',
                                'example' => '2508711*******',
                            ],
                            'Name' => [
                                'description' => '实例名称',
                                'type' => 'string',
                                'example' => '导航测试实例',
                            ],
                            'AbilityType' => [
                                'description' => '实例能力类型<br>'."\n"
                                    .'DEFAULT：全能力<br>'."\n"
                                    .'VOICE_ONLY：只关注语音能力，不含对话干预',
                                'type' => 'string',
                                'example' => 'VOICE_ONLY',
                            ],
                            'UnionSource' => [
                                'type' => 'string',
                            ],
                            'UnionInstanceId' => [
                                'type' => 'string',
                            ],
                            'NluServiceParamsJson' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Published\\",\\n  \\"ModifyTime\\": 1683216000000,\\n  \\"Description\\": \\"导航测试实例描述信息\\",\\n  \\"RequestId\\": \\"790B5EA3-D251-1666-B1E0-4D1F4B33A592\\",\\n  \\"InstanceId\\": \\"cd6fc91bc13445c2af7f2e3e31418520\\",\\n  \\"Concurrency\\": 10,\\n  \\"ApplicableOperations\\": [\\n    \\"Edit\\"\\n  ],\\n  \\"ModifyUserName\\": \\"2508711*******\\",\\n  \\"Name\\": \\"导航测试实例\\",\\n  \\"AbilityType\\": \\"VOICE_ONLY\\",\\n  \\"UnionSource\\": \\"\\",\\n  \\"UnionInstanceId\\": \\"\\",\\n  \\"NluServiceParamsJson\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceResponse>\\n    <Status>Published</Status>\\n    <ModifyTime>1683216000000</ModifyTime>\\n    <Description>导航测试实例描述信息</Description>\\n    <RequestId>790B5EA3-D251-1666-B1E0-4D1F4B33A592</RequestId>\\n    <InstanceId>cd6fc91bc13445c2af7f2e3e31418520</InstanceId>\\n    <Concurrency>10</Concurrency>\\n    <ApplicableOperations>Edit</ApplicableOperations>\\n    <ModifyUserName>2508711*******</ModifyUserName>\\n    <Name>导航测试实例</Name>\\n    <AbilityType>VOICE_ONLY</AbilityType>\\n</DescribeInstanceResponse>","errorExample":""}]',
            'title' => '查询实例信息',
            'summary' => '查询实例信息。',
        ],
        'DescribeStatisticalData' => [
            'methods' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
                    ],
                ],
                [
                    'name' => 'TimeUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日期单元',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Day/Hour',
                    ],
                ],
                [
                    'name' => 'BeginTimeLeftRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间左区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582283640000',
                    ],
                ],
                [
                    'name' => 'BeginTimeRightRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间右区间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582298040000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalDialoguePassRate' => [
                                'description' => '总多轮会话通过率',
                                'type' => 'string',
                                'example' => '80.00%',
                            ],
                            'TotalKnowledgeHitRate' => [
                                'description' => '总知识库命中率',
                                'type' => 'string',
                                'example' => '80.00%',
                            ],
                            'TotalResolutionRate' => [
                                'description' => '总解决率',
                                'type' => 'string',
                                'example' => '80.00%',
                            ],
                            'TotalValidAnswerRate' => [
                                'description' => '总有效回答率',
                                'type' => 'string',
                                'example' => '80.00%',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'ResolvedQuestionTotalNum' => [
                                'description' => '解决问题总数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '80',
                            ],
                            'ConversationTotalNum' => [
                                'description' => '总会话数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'StatisticalDataReports' => [
                                'description' => '时间维度统计数据数组',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'KnowledgeHitRate' => [
                                            'description' => '知识库命中率',
                                            'type' => 'string',
                                            'example' => '80.00%',
                                        ],
                                        'ResolvedQuestionNum' => [
                                            'description' => '解决问题数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'ResolutionRate' => [
                                            'description' => '解决率',
                                            'type' => 'string',
                                            'example' => '80.00%',
                                        ],
                                        'StatisticalDate' => [
                                            'description' => '统计日期',
                                            'type' => 'string',
                                            'example' => '19:00:00',
                                        ],
                                        'TotalConversationNum' => [
                                            'description' => '总会话数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'ValidAnswerRate' => [
                                            'description' => '有效回答率',
                                            'type' => 'string',
                                            'example' => '80.0',
                                        ],
                                        'DialoguePassRate' => [
                                            'description' => '多轮会话通过率',
                                            'type' => 'string',
                                            'example' => '80.00%',
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
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceId.NotFound',
                        'errorMessage' => 'The specified InstanceId does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConversationTotalNum\\": 100,\\n  \\"TotalDialoguePassRate\\": \\"80.00%\\",\\n  \\"TotalKnowledgeHitRate\\": \\"80.00%\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"TotalValidAnswerRate\\": \\"80.00%\\",\\n  \\"ResolvedQuestionTotalNum\\": 80,\\n  \\"TotalResolutionRate\\": \\"80.00%\\",\\n  \\"StatisticalDataReports\\": [\\n    {\\n      \\"KnowledgeHitRate\\": \\"80.00%\\",\\n      \\"ResolvedQuestionNum\\": 80,\\n      \\"ResolutionRate\\": \\"80.00%\\",\\n      \\"StatisticalDate\\": \\"19:00:00\\",\\n      \\"TotalConversationNum\\": 100,\\n      \\"ValidAnswerRate\\": \\"80.0\\",\\n      \\"DialoguePassRate\\": \\"80.00%\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<ConversationTotalNum>100</ConversationTotalNum>\\n<ResolvedQuestionTotalNum>80</ResolvedQuestionTotalNum>\\n<TotalKnowledgeHitRate>80.00%</TotalKnowledgeHitRate>\\n<TotalValidAnswerRate>80.00%</TotalValidAnswerRate>\\n<StatisticalDataReports>\\n    <ResolvedQuestionNum>80</ResolvedQuestionNum>\\n    <KnowledgeHitRate>80.00%</KnowledgeHitRate>\\n    <TotalConversationNum>100</TotalConversationNum>\\n    <ValidAnswerRate>80.00%</ValidAnswerRate>\\n    <ResolutionRate>80.00%</ResolutionRate>\\n    <DialoguePassRate>80.00%</DialoguePassRate>\\n    <StatisticalDate>19:00:00</StatisticalDate>\\n</StatisticalDataReports>\\n<TotalDialoguePassRate>80.00%</TotalDialoguePassRate>\\n<TotalResolutionRate>80.00%</TotalResolutionRate>","errorExample":""}]',
            'title' => '查看当前实例的统计数据',
            'summary' => '查看当前实例的统计数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstances' => [
            'methods' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NluServiceTypeListJsonString',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'nlu类型列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[Managed]',
                    ],
                ],
                [
                    'name' => 'UnionSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnionInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIdListJsonString',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Instances' => [
                                'description' => '实例数组',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例数组',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例状态',
                                            'type' => 'string',
                                            'example' => 'Published',
                                        ],
                                        'ModifyUserName' => [
                                            'description' => '操作人',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '测试的实例',
                                        ],
                                        'ApplicableOperations' => [
                                            'description' => '实例可操作列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '实例可操作列表',
                                                'type' => 'string',
                                                'example' => '["Edit", "Publish", "Duplicate", "Delete", "ListHistories"]',
                                            ],
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例id',
                                            'type' => 'string',
                                            'example' => 'dc437bba-5a25-4bbc-b4c2-f268864bebb5',
                                        ],
                                        'Name' => [
                                            'description' => '名字',
                                            'type' => 'string',
                                            'example' => '测试实例',
                                        ],
                                        'Concurrency' => [
                                            'description' => '并发数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582266750353',
                                        ],
                                        'Numbers' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UnionSource' => [
                                            'type' => 'string',
                                        ],
                                        'UnionInstanceId' => [
                                            'type' => 'string',
                                        ],
                                        'NluServiceParamsJson' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'A8AED3C8-F57B-5D71-9A34-4A170287533F',
                            ],
                            'PageNumber' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": \\"Published\\",\\n      \\"ModifyUserName\\": \\"xxx\\",\\n      \\"Description\\": \\"测试的实例\\",\\n      \\"ApplicableOperations\\": [\\n        \\"[\\\\\\"Edit\\\\\\", \\\\\\"Publish\\\\\\", \\\\\\"Duplicate\\\\\\", \\\\\\"Delete\\\\\\", \\\\\\"ListHistories\\\\\\"]\\"\\n      ],\\n      \\"InstanceId\\": \\"dc437bba-5a25-4bbc-b4c2-f268864bebb5\\",\\n      \\"Name\\": \\"测试实例\\",\\n      \\"Concurrency\\": 10,\\n      \\"ModifyTime\\": 1582266750353,\\n      \\"Numbers\\": [\\n        \\"\\"\\n      ],\\n      \\"CreateTime\\": 0,\\n      \\"UnionSource\\": \\"\\",\\n      \\"UnionInstanceId\\": \\"\\",\\n      \\"NluServiceParamsJson\\": \\"\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"A8AED3C8-F57B-5D71-9A34-4A170287533F\\",\\n  \\"PageNumber\\": 2\\n}","type":"json"}]',
            'title' => '分页获取当前租户下智能导航实例列表',
            'summary' => '分页获取当前租户下智能导航实例列表。',
        ],
        'ListChatbotInstances' => [
            'methods' => [
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
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'UnionSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NluServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NluServiceParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总计个数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Bots' => [
                                'description' => '实例信息列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Introduction' => [
                                            'type' => 'string',
                                            'example' => '‘’',
                                        ],
                                        'Avatar' => [
                                            'description' => '机器实例图标',
                                            'type' => 'string',
                                            'example' => 'https://dss0.ali.com/70cFuHS.jpg',
                                        ],
                                        'TimeZone' => [
                                            'description' => '时区',
                                            'type' => 'string',
                                            'example' => 'UTC+8',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '1582266750353',
                                        ],
                                        'LanguageCode' => [
                                            'description' => '语言代码',
                                            'type' => 'string',
                                            'example' => 'zh-cn',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例id',
                                            'type' => 'string',
                                            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                                        ],
                                        'Name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => '测试机器人',
                                        ],
                                    ],
                                ],
                            ],
                            'PageSize' => [
                                'description' => '个数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                            ],
                            'PageNumber' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"Bots\\": [\\n    {\\n      \\"Introduction\\": \\"‘’\\",\\n      \\"Avatar\\": \\"https://dss0.ali.com/70cFuHS.jpg\\",\\n      \\"TimeZone\\": \\"UTC+8\\",\\n      \\"CreateTime\\": \\"1582266750353\\",\\n      \\"LanguageCode\\": \\"zh-cn\\",\\n      \\"InstanceId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"Name\\": \\"测试机器人\\"\\n    }\\n  ],\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<RequestId>da37319b-6c83-4268-9f19-814aed62e401</RequestId>\\n<Bots>\\n    <Avatar>alibaba.com/skjdnvkdsvdk.jpg</Avatar>\\n    <CreateTime>1582270782552</CreateTime>\\n    <Introduction/>\\n    <LanguageCode>zh-cn</LanguageCode>\\n    <Name>测试</Name>\\n    <TimeZone>UTC+8</TimeZone>\\n</Bots>","errorExample":""}]',
            'title' => 'ListChatbotInstances',
            'summary' => '查询实例列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDownloadUrl' => [
            'methods' => [
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
            'parameters' => [
                [
                    'name' => 'DownloadTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '073f092da0a847b9bf76eb88b5931c7a',
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件的ID，您可以使用[ListFiles](~~173942~~)接口查询对应文件的ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '22626c39603744f5a08d4d715315561a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'FileHttpUrl' => [
                                'description' => '文件url',
                                'type' => 'string',
                                'example' => 'http://ssml-test.oss-cn-shanghai.aliyuncs.com/key',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '7401D698-0AAC-5909-B68E-88C68805FFB8',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '信息。',
                                'type' => 'string',
                                'example' => 'get upload tool url success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"FileHttpUrl\\": \\"http://ssml-test.oss-cn-shanghai.aliyuncs.com/key\\",\\n  \\"RequestId\\": \\"7401D698-0AAC-5909-B68E-88C68805FFB8\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"get upload tool url success\\"\\n}","type":"json"}]',
            'title' => '创建下载文件url',
        ],
        'ListDownloadTasks' => [
            'methods' => [
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
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D24E0148-6D40-550E-9471-B2C5A34C3D12',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'DownloadTasks' => [
                                'description' => '下载任务数据',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '页号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页面大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'List' => [
                                        'description' => '下载任务数组',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务数组',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'Expired',
                                                ],
                                                'Title' => [
                                                    'description' => '标题',
                                                    'type' => 'string',
                                                    'example' => '批量高阶内存整理_2022_02_17_10',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '过期时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637119221702',
                                                ],
                                                'TaskId' => [
                                                    'description' => '任务id',
                                                    'type' => 'string',
                                                    'example' => 'cb9aba69-f578-42b2-aa2f-3e5a41947db8',
                                                ],
                                                'DownloadTaskFiles' => [
                                                    'description' => '下载任务文件列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '下载任务文件列表',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Status' => [
                                                                'description' => '状态',
                                                                'type' => 'string',
                                                                'example' => 'Published',
                                                            ],
                                                            'Title' => [
                                                                'description' => '标题',
                                                                'type' => 'string',
                                                                'example' => 'CBU阿里通信反馈-声音延迟',
                                                            ],
                                                            'Progress' => [
                                                                'description' => '下载任务完成进度',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '70',
                                                            ],
                                                            'FileId' => [
                                                                'description' => '文件id',
                                                                'type' => 'string',
                                                                'example' => 'c32bf5675b704dc5b19200a89d2e85f1',
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
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D24E0148-6D40-550E-9471-B2C5A34C3D12\\",\\n  \\"Success\\": true,\\n  \\"DownloadTasks\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 2,\\n    \\"List\\": [\\n      {\\n        \\"Status\\": \\"Expired\\",\\n        \\"Title\\": \\"批量高阶内存整理_2022_02_17_10\\",\\n        \\"ExpireTime\\": 1637119221702,\\n        \\"TaskId\\": \\"cb9aba69-f578-42b2-aa2f-3e5a41947db8\\",\\n        \\"DownloadTaskFiles\\": [\\n          {\\n            \\"Status\\": \\"Published\\",\\n            \\"Title\\": \\"CBU阿里通信反馈-声音延迟\\",\\n            \\"Progress\\": 70,\\n            \\"FileId\\": \\"c32bf5675b704dc5b19200a89d2e85f1\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查看下载任务列表',
        ],
        'GenerateUploadUrl' => [
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
            'parameters' => [
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Environment',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'voicerobot.manager.dto.enums.EnvironmentType',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'CallerUid',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'CallerBid',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'CallerParentId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'CallerIp',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'MfaPresent',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'SecurityTransport',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'ProxyTrustTransportInfo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'ProxyOriginalSecurityTransport',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'ProxyOriginalSourceIp',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'TenantName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'XspaceServicerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'XspaceTenantBuId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse<OssUploadParams>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessId' => [
                                        'type' => 'string',
                                    ],
                                    'Policy' => [
                                        'type' => 'string',
                                    ],
                                    'Signature' => [
                                        'type' => 'string',
                                    ],
                                    'Folder' => [
                                        'type' => 'string',
                                    ],
                                    'Host' => [
                                        'type' => 'string',
                                    ],
                                    'Expire' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Success' => [
                                        'type' => 'boolean',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'ModifyAsrConfig' => [
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
            'parameters' => [
                [
                    'name' => 'EntryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'config_level对应的实体ID',
                        'description' => 'config_level对应的实体ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
                    ],
                ],
                [
                    'name' => 'ConfigLevel',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略级别，包含 0：系统，1:租户，2：实例',
                        'description' => '策略级别，包含 0：系统，1:租户，2：实例',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'AsrVocabularyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '热词ID。请在[ASR热词管理页面](https://aiccs.console.aliyun.com/sentence/vocab?spm=a2c4g.11186623.0.0.7f9bf965IKBpsi)查看ASR热词ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
                    ],
                ],
                [
                    'name' => 'AsrCustomizationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据集id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
                    ],
                ],
                [
                    'name' => 'AsrAcousticModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'asr声学id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
                    ],
                ],
                [
                    'name' => 'AsrClassVocabularyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'asr热词id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ModifyAsrConfigResponse>',
                        'description' => 'RpcResponse<ModifyAsrConfigResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '修改结果',
                                'type' => 'object',
                                'properties' => [
                                    'AffectedRows' => [
                                        'description' => '是否影响行数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Not Found',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AffectedRows\\": 0\\n  },\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"ErrorMsg\\": \\"Not Found\\"\\n}","type":"json"}]',
            'title' => '修改asr配置',
        ],
        'GetAsrConfig' => [
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
            'parameters' => [
                [
                    'name' => 'EntryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'config_level对应的实体ID',
                        'description' => 'config_level对应的实体ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                    ],
                ],
                [
                    'name' => 'ConfigLevel',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略级别，包含 0：系统，1:租户，2：实例',
                        'description' => '策略级别，包含 0：系统，1:租户，2：实例',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetAsrConfigResponse>',
                        'description' => 'RpcResponse<GetAsrConfigResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'AsrVocabularyId' => [
                                        'description' => '热词ID。请在[ASR热词管理页面](https://aiccs.console.aliyun.com/sentence/vocab?spm=a2c4g.11186623.0.0.7f9bf965IKBpsi)查看ASR热词ID。',
                                        'type' => 'string',
                                        'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                                    ],
                                    'AsrCustomizationId' => [
                                        'description' => 'asr数据集id',
                                        'type' => 'string',
                                        'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                                    ],
                                    'AsrAcousticModelId' => [
                                        'description' => 'asracoustic模型id',
                                        'type' => 'string',
                                        'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                                    ],
                                    'AsrClassVocabularyId' => [
                                        'description' => 'asr热词id',
                                        'type' => 'string',
                                        'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Not Found',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AsrVocabularyId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrCustomizationId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrAcousticModelId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrClassVocabularyId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\"\\n  },\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"ErrorMsg\\": \\"Not Found\\"\\n}","type":"json"}]',
            'title' => '查询asr配置',
        ],
        'GetRealTimeConcurrency' => [
            'methods' => [
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c112c168ed664c0a851f9ca72d2f7999',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E6E61E1A-D2DC-5ACF-AED4-A115B6691F98',
                            ],
                            'Timestamp' => [
                                'description' => '查询时间戳',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1661584255029',
                            ],
                            'RealTimeConcurrency' => [
                                'description' => '实时并发数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'MaxConcurrency' => [
                                'description' => '最大并发数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E6E61E1A-D2DC-5ACF-AED4-A115B6691F98\\",\\n  \\"Timestamp\\": 1661584255029,\\n  \\"RealTimeConcurrency\\": 1,\\n  \\"MaxConcurrency\\": 2\\n}","type":"json"}]',
            'summary' => '获取实例的实时并发数',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'voicenavigator.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'voicenavigator.cn-shanghai.aliyuncs.com',
        ],
    ],
];
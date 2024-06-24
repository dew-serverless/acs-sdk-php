<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'VoiceNavigator',
    'version' => '2018-06-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 77502,
      'title' => '管理配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyGreetingConfig',
        1 => 'ModifySilenceTimeoutConfig',
        2 => 'ModifyTTSConfig',
        3 => 'ModifyUnrecognizingConfig',
        4 => 'DescribeTTSConfig',
        5 => 'DescribeExportProgress',
        6 => 'AssociateChatbotInstance',
        7 => 'AuditTTSVoice',
        8 => 'CollectedNumber',
        9 => 'ExportStatisticalData',
        10 => 'SilenceTimeout',
      ),
    ),
    1 => 
    array (
      'id' => 77514,
      'title' => '对话',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeConversation',
        1 => 'DescribeConversationContext',
        2 => 'ListConversationDetails',
        3 => 'QueryConversations',
        4 => 'DescribeRecording',
        5 => 'Dialogue',
        6 => 'EndDialogue',
        7 => 'SaveRecording',
      ),
    ),
    2 => 
    array (
      'id' => 77523,
      'title' => '会话',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListConversations',
        1 => 'BeginDialogue',
        2 => 'ExportConversationDetails',
      ),
    ),
    3 => 
    array (
      'id' => 77527,
      'title' => '调试',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DebugBeginDialogue',
        1 => 'DebugCollectedNumber',
        2 => 'DebugDialogue',
      ),
    ),
    4 => 
    array (
      'id' => 77531,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstance',
        1 => 'DeleteInstance',
        2 => 'DisableInstance',
        3 => 'EnableInstance',
        4 => 'ModifyInstance',
        5 => 'DescribeNavigationConfig',
        6 => 'DescribeInstance',
        7 => 'DescribeStatisticalData',
        8 => 'ListInstances',
      ),
    ),
    5 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListChatbotInstances',
        1 => 'CreateDownloadUrl',
        2 => 'ListDownloadTasks',
        3 => 'GenerateUploadUrl',
        4 => 'ModifyAsrConfig',
        5 => 'GetAsrConfig',
        6 => 'GetRealTimeConcurrency',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'ModifyGreetingConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'GreetingWords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '欢迎语',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你好，欢迎使用智能导航。',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chatbotIntent',
          ),
        ),
        3 => 
        array (
          'name' => 'IntentTrigger',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发意图',
            'type' => 'string',
            'required' => false,
            'example' => '开始',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
      'title' => '修改问候语配置',
      'summary' => '修改问候语配置。',
    ),
    'ModifySilenceTimeoutConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'Prompt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '静默超时提示语',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '不好意思，听不见您说什么',
          ),
        ),
        2 => 
        array (
          'name' => 'Timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '静默超时时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '静默超时最大次数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        4 => 
        array (
          'name' => 'FinalPrompt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最后一次静默提示语',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '再见',
          ),
        ),
        5 => 
        array (
          'name' => 'FinalAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '提示后的动作',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TransferToAgent',
          ),
        ),
        6 => 
        array (
          'name' => 'FinalActionParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动作参数',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chatbotIntent',
          ),
        ),
        8 => 
        array (
          'name' => 'IntentTrigger',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发的意图',
            'type' => 'string',
            'required' => false,
            'example' => 'Timeout',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
      'title' => 'ModifySilenceTimeoutConfig',
      'summary' => '修改静默超时配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyTTSConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'Voice',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发音人',
            'type' => 'string',
            'required' => false,
            'example' => 'aixia',
          ),
        ),
        2 => 
        array (
          'name' => 'SpeechRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '声音速率',
            'type' => 'string',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '音量',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'NlsServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        5 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        7 => 
        array (
          'name' => 'EngineXunfei',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改 TTS 配置',
      'summary' => '修改TTS配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyUnrecognizingConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'Prompt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拒识提示语',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '我不理解您的意思，请再说一遍',
          ),
        ),
        2 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拒识最大次数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'FinalPrompt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最后一次拒识提示语',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '再见',
          ),
        ),
        4 => 
        array (
          'name' => 'FinalAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拒识动作',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TransferToAgent',
          ),
        ),
        5 => 
        array (
          'name' => 'FinalActionParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动作参数',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
      'title' => '修改拒识配置',
      'summary' => '修改拒识配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTTSConfig' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dc437bba-5a25-4bbc-b4c2-f268864bebb5',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所有者id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1971226538081821',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F132DDBA-66C4-5BD3-BF7E-9642FE877158',
              ),
              'Volume' => 
              array (
                'description' => '音量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Voice' => 
              array (
                'description' => '发音人',
                'type' => 'string',
                'example' => 'aixia',
              ),
              'SpeechRate' => 
              array (
                'description' => '语速',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-150',
              ),
              'NlsServiceType' => 
              array (
                'type' => 'string',
              ),
              'AppKey' => 
              array (
                'type' => 'string',
              ),
              'Engine' => 
              array (
                'type' => 'string',
              ),
              'EngineXunfei' => 
              array (
                'type' => 'string',
              ),
              'PitchRate' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F132DDBA-66C4-5BD3-BF7E-9642FE877158\\",\\n  \\"Volume\\": 50,\\n  \\"Voice\\": \\"aixia\\",\\n  \\"SpeechRate\\": -150,\\n  \\"NlsServiceType\\": \\"\\",\\n  \\"AppKey\\": \\"\\",\\n  \\"Engine\\": \\"\\",\\n  \\"EngineXunfei\\": \\"\\",\\n  \\"PitchRate\\": 0\\n}","type":"json"}]',
      'title' => '查询 TTS 配置',
      'summary' => '查询tts 配置。',
    ),
    'DescribeExportProgress' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '868eef14-7515-4856-8a50-5c9a22abdbcc',
          ),
        ),
        1 => 
        array (
          'name' => 'ExportTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导出任务id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0de8e5ccc2b645039ae6fbda443da73f',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态',
                'type' => 'string',
                'example' => 'FINISHED',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'b19af5ce5314ac08108d1b33fe20e15',
              ),
              'FileHttpUrl' => 
              array (
                'description' => '文件url',
                'type' => 'string',
                'example' => 'http://ssml-test.oss-cn-shanghai.aliyuncs.com/key',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"FINISHED\\",\\n  \\"FileHttpUrl\\": \\"http://ssml-test.oss-cn-shanghai.aliyuncs.com/key\\",\\n  \\"RequestId\\": \\"b19af5ce5314ac08108d1b33fe20e15\\"\\n}","errorExample":""},{"type":"xml","example":"<FileHttpUrl>http://ssml-test.oss-cn-shanghai.aliyuncs.com/key</FileHttpUrl>\\n<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>\\n<Status>FINISHED</Status>","errorExample":""}]',
      'title' => '查询导出任务状态',
      'summary' => '查询导出任务状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AssociateChatbotInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导航实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
          ),
        ),
        1 => 
        array (
          'name' => 'ChatbotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '小蜜机器人ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-720edd02b66a',
          ),
        ),
        2 => 
        array (
          'name' => 'ChatbotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '小蜜机器名字',
            'type' => 'string',
            'required' => false,
            'example' => '客服机器人',
          ),
        ),
        3 => 
        array (
          'name' => 'UnionSource',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'NluServiceParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        5 => 
        array (
          'name' => 'NluServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>","errorExample":""}]',
      'title' => '关联小蜜机器人',
      'summary' => '关联小蜜机器人。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AuditTTSVoice' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导航实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
          ),
        ),
        1 => 
        array (
          'name' => 'Voice',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发音人',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'aixia',
          ),
        ),
        2 => 
        array (
          'name' => 'Text',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '试听文本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你好',
          ),
        ),
        3 => 
        array (
          'name' => 'SpeechRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '声音速率',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '音量',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'PitchRate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'SecretKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
              ),
              'AuditionUrl' => 
              array (
                'description' => '试听URL',
                'type' => 'string',
                'example' => 'http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&OSSAccessKeyId=LTAIppQY5rofntVJ&Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\",\\n  \\"AuditionUrl\\": \\"http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&OSSAccessKeyId=LTAIppQY5rofntVJ&Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5100B51E-2C4E-4F3C-8784-92827F501D73</RequestId>\\n<AuditionUrl>http://voicenavigator-cn-shanghai.oss-cn-shanghai.aliyuncs.com/exported_files/2020-02-20/ttsConfig-1582188148528-abd8e407de0a49b381bb591bd91fc073.wav?Expires=1582188208&amp;OSSAccessKeyId=LTAIppQY5rofntVJ&amp;Signature=FaBassElzqGEB0H2TvTKPJsOJHs%3D</AuditionUrl>","errorExample":""}]',
      'title' => '试听 TTS 声音',
      'summary' => '试听TTS声音。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CollectedNumber' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '示例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
          ),
        ),
        2 => 
        array (
          'name' => 'Number',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码',
            'type' => 'string',
            'required' => false,
            'example' => '1500060224',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所有者id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1426738157626835',
          ),
        ),
        4 => 
        array (
          'name' => 'AdditionalContext',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => 'ivr播报是否可打断',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{\\"duration\\":31340,\\"endTime\\":1638243934786,\\"hangUpDirection\\":\\"ivr\\",\\"startTime\\":1638243903446}',
              ),
              'TextResponse' => 
              array (
                'description' => '播报的文本',
                'type' => 'string',
                'example' => '收号内容是123',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": false,\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":31340,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1638243934786,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ivr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1638243903446}\\",\\n  \\"TextResponse\\": \\"收号内容是123\\"\\n}","type":"json"}]',
      'title' => '收号',
      'summary' => '收号。',
    ),
    'ExportStatisticalData' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '29b52d70-d9fe-4fe0-8476-8aaacbcfdc84',
          ),
        ),
        1 => 
        array (
          'name' => 'TimeUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间单元',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Hour',
          ),
        ),
        2 => 
        array (
          'name' => 'ExportType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导出类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'statistical',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTimeLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582266750353',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTimeRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤条件，结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582266750353',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'c62e6789-28a8-41db-941e-171a01d3b3b9',
              ),
              'ExportTaskId' => 
              array (
                'description' => '异步导出任务id',
                'type' => 'string',
                'example' => '6be5a9f1-406e-424e-a17b-b6fb86ee3cc9',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExportTaskId\\": \\"6be5a9f1-406e-424e-a17b-b6fb86ee3cc9\\",\\n  \\"RequestId\\": \\"c62e6789-28a8-41db-941e-171a01d3b3b9\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>c62e6789-28a8-41db-941e-171a01d3b3b9</RequestId>\\n<ExportTaskId>6be5a9f1-406e-424e-a17b-b6fb86ee3cc9</ExportTaskId>","errorExample":""}]',
      'title' => '导出统计数据',
      'summary' => '导出统计数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SilenceTimeout' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0099b75d-60fd-4c63-8541-7fbba0ae6bb0',
          ),
        ),
        2 => 
        array (
          'name' => 'InitialContext',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话信息上下文',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所有者id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1231639035307976',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'TransferToAgent',
              ),
              'Interruptible' => 
              array (
                'description' => '是否打断',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{ "skillGroupId": "ABC"}',
              ),
              'TextResponse' => 
              array (
                'description' => '文本信息',
                'type' => 'string',
                'example' => '正在为你转接人工坐席',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConversationId.NotFound',
            'errorMessage' => 'The specified ConversationId does not exist in our record.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Action\\": \\"TransferToAgent\\",\\n  \\"Interruptible\\": false,\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\",\\n  \\"ActionParams\\": \\"{ \\\\\\"skillGroupId\\\\\\": \\\\\\"ABC\\\\\\"}\\",\\n  \\"TextResponse\\": \\"正在为你转接人工坐席\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>\\n<TextResponse>正在为你转接人工坐席</TextResponse>\\n<ActionParams>{ \\"skillGroupId\\": \\"ABC\\"}</ActionParams>\\n<Interruptible>false</Interruptible>\\n<Action>TransferToAgent</Action>","errorExample":""}]',
      'title' => 'SilenceTimeout',
      'summary' => '静默超时。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConversation' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5daac920-d6c1-429f-a95f-2a798f5255b5',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '15608cce-36be-43d5-9361-178cbe64127b',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EffectiveAnswerCount' => 
              array (
                'description' => '有效问答数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8',
              ),
              'ConversationId' => 
              array (
                'description' => '对话id',
                'type' => 'string',
                'example' => '2d5aa451-661f-4f08-b0c4-28eec78decc4',
              ),
              'TransferredToAgent' => 
              array (
                'description' => '是否转人工',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EndTime' => 
              array (
                'description' => '结束时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1582103299434',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'BeginTime' => 
              array (
                'description' => '开始时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1582103260434',
              ),
              'SkillGroupId' => 
              array (
                'description' => '技能组id',
                'type' => 'string',
                'example' => 'ABABCBAC',
              ),
              'CallingNumber' => 
              array (
                'description' => '呼入号码',
                'type' => 'string',
                'example' => '138106*****',
              ),
              'UserUtteranceCount' => 
              array (
                'description' => '客户提问数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": 1582103299434,\\n  \\"EffectiveAnswerCount\\": 8,\\n  \\"TransferredToAgent\\": true,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"SkillGroupId\\": \\"ABABCBAC\\",\\n  \\"BeginTime\\": 1582103260434,\\n  \\"ConversationId\\": \\"2d5aa451-661f-4f08-b0c4-28eec78decc4\\",\\n  \\"CallingNumber\\": \\"138106*****\\",\\n  \\"UserUtteranceCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<CallingNumber>13810671937</CallingNumber>\\n<BeginTime>2018-05-02T00:00:00Z</BeginTime>\\n<EndTime>2018-05-02T00:00:30Z</EndTime>\\n<TransferredToAgent>true</TransferredToAgent>\\n<SkillGroupId>AAA</SkillGroupId>\\n<UserUtteranceCount>10</UserUtteranceCount>\\n<EffectiveAnswerCount>8</EffectiveAnswerCount>","errorExample":""}]',
      'title' => '查询对话信息',
      'summary' => '查询对话信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConversationContext' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '026ca0f4-483b-4252-ae1d-1f15f056f8b9',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '361c8a53-0e29-42f3-8aa7-c7752d010399',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'b19af5ce5314ac08108d1b33fe20e15',
              ),
              'ConversationContext' => 
              array (
                'description' => '会话上下文数据',
                'type' => 'string',
                'example' => ' {         "CallingNumber": "135815***",         "AdditionalContext": "",         "ConversationId": "361c8a53-0e29-42f3-8aa7-c7752d010399"     }',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConversationId.NotFound',
            'errorMessage' => 'The specified ConversationId does not exist in our record.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConversationContext\\": \\" {         \\\\\\"CallingNumber\\\\\\": \\\\\\"135815***\\\\\\",         \\\\\\"AdditionalContext\\\\\\": \\\\\\"\\\\\\",         \\\\\\"ConversationId\\\\\\": \\\\\\"361c8a53-0e29-42f3-8aa7-c7752d010399\\\\\\"     }\\",\\n  \\"RequestId\\": \\"b19af5ce5314ac08108d1b33fe20e15\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>\\n<ConversationContext>\\n    <CallingNumber>135815***</CallingNumber>\\n    <AdditionalContext/>\\n    <ConversationId>361c8a53-0e29-42f3-8aa7-c7752d010399</ConversationId>\\n</ConversationContext>","errorExample":""}]',
      'title' => '查询对话上下文',
      'summary' => '查询会话上下文数据{}。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListConversationDetails' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '82b2eaae-ce5c-45f8-8231-f15b6b27e55c',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a2c26e67-5984-4935-984e-bcee52971993',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'ConversationDetails' => 
              array (
                'description' => '对话列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Action' => 
                    array (
                      'description' => '动作',
                      'type' => 'string',
                      'example' => 'Dialogue',
                    ),
                    'Speaker' => 
                    array (
                      'description' => '讲述人 Customer = 客户，Chatbot = 机器人',
                      'type' => 'string',
                      'example' => 'Chatbot',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582266750353',
                    ),
                    'ConversationId' => 
                    array (
                      'description' => '会话id',
                      'type' => 'string',
                      'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ),
                    'ActionParams' => 
                    array (
                      'description' => '动作参数',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'SequenceId' => 
                    array (
                      'description' => '本轮次会话交互的序列号',
                      'type' => 'string',
                      'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ),
                    'Utterance' => 
                    array (
                      'description' => '用户表述',
                      'type' => 'string',
                      'example' => '你好',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConversationId.NotFound',
            'errorMessage' => 'The specified ConversationId does not exist in our record.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"ConversationDetails\\": [\\n    {\\n      \\"Action\\": \\"Dialogue\\",\\n      \\"Speaker\\": \\"Chatbot\\",\\n      \\"CreateTime\\": 1582266750353,\\n      \\"ConversationId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"ActionParams\\": \\"{}\\",\\n      \\"SequenceId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"Utterance\\": \\"你好\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<ConversationDetails>\\n    <ConversationId>abcde</ConversationId>\\n    <Speaker>Customer</Speaker>\\n    <Utterance>你好</Utterance>\\n    <Action>Dialogue</Action>\\n    <ActionParams>{}</ActionParams>\\n    <CreateTime>2018-07-02 20:37:40</CreateTime>\\n    <SequenceId>2</SequenceId>\\n</ConversationDetails>","errorExample":""}]',
      'title' => '查看实例下的对话',
      'summary' => '查看实例下的对话。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryConversations' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '02811111111',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTimeLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围左区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582183381000',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTimeRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围右区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582356181000',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageSize' => 
              array (
                'description' => '每页条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Conversations' => 
              array (
                'description' => '会话列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '结束时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582183481000',
                    ),
                    'EffectiveAnswerCount' => 
                    array (
                      'description' => '有效回答数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8',
                    ),
                    'TransferredToAgent' => 
                    array (
                      'description' => '是否转人工',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582183381000',
                    ),
                    'SkillGroupId' => 
                    array (
                      'description' => '技能组',
                      'type' => 'string',
                      'example' => 'AAA',
                    ),
                    'ConversationId' => 
                    array (
                      'description' => '会话ID',
                      'type' => 'string',
                      'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ),
                    'CallingNumber' => 
                    array (
                      'description' => '主叫号码',
                      'type' => 'string',
                      'example' => '02811111111',
                    ),
                    'UserUtteranceCount' => 
                    array (
                      'description' => '用户回答数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 100,\\n  \\"Conversations\\": [\\n    {\\n      \\"EndTime\\": 1582183481000,\\n      \\"EffectiveAnswerCount\\": 8,\\n      \\"TransferredToAgent\\": true,\\n      \\"BeginTime\\": 1582183381000,\\n      \\"SkillGroupId\\": \\"AAA\\",\\n      \\"ConversationId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"CallingNumber\\": \\"02811111111\\",\\n      \\"UserUtteranceCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<PageNumber>1</PageNumber>\\n<PageSize>10</PageSize>\\n<TotalCount>100</TotalCount>\\n<Conversations>\\n    <CallingNumber>02811111111</CallingNumber>\\n    <BeginTime>1582183381000</BeginTime>\\n    <EndTime>1582183481000</EndTime>\\n    <TransferredToAgent>true</TransferredToAgent>\\n    <SkillGroupId>AAA</SkillGroupId>\\n    <UserUtteranceCount>10</UserUtteranceCount>\\n    <EffectiveAnswerCount>8</EffectiveAnswerCount>\\n    <ConversationId>af81a389-91f0-4157-8d82-720edd02b66a</ConversationId>\\n</Conversations>","errorExample":""}]',
      'title' => '查询对话记录',
      'summary' => '查询对话记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRecording' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
          ),
        ),
        2 => 
        array (
          'name' => 'NeedVoiceSliceRecording',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'FilePath' => 
              array (
                'description' => '文件下载地址',
                'type' => 'string',
                'example' => 'url',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'FileName' => 
              array (
                'description' => '文件名字',
                'type' => 'string',
                'example' => '2019080913202222.wav',
              ),
              'VoiceSliceRecordingListJson' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConversationId.NotFound',
            'errorMessage' => 'The specified ConversationId does not exist in our record.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FilePath\\": \\"url\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"FileName\\": \\"2019080913202222.wav\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<FilePath>url</FilePath>\\n<FileName>2019080913202222.wav</FileName>","errorExample":""}]',
      'title' => '获取对话录音',
      'summary' => '获取对话录音。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'Dialogue' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '21e0b2a3-168d-4ba7-9009-afc42666eb54',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
          ),
        ),
        2 => 
        array (
          'name' => 'Utterance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户表述',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '行吧，那我就不打扰您了，再见。',
          ),
        ),
        3 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '10086',
          ),
        ),
        4 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '18851708605',
          ),
        ),
        5 => 
        array (
          'name' => 'AdditionalContext',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话上下文',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的阿里云账号id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1426738157626835',
          ),
        ),
        7 => 
        array (
          'name' => 'Emotion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => 'ivr播报是否可打断',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '9DB8BA95-4513-54B9-9C67-A28909CFB4AD',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{\\"duration\\":2420,\\"endTime\\":1651717326805,\\"hangUpDirection\\":\\"client\\",\\"hasLastPlaybackCompleted\\":true,\\"startTime\\":1651717324385}',
              ),
              'TextResponse' => 
              array (
                'description' => '播报的文本',
                'type' => 'string',
                'example' => '您好，欢迎致电智能助手',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": true,\\n  \\"RequestId\\": \\"9DB8BA95-4513-54B9-9C67-A28909CFB4AD\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":2420,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1651717326805,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"client\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hasLastPlaybackCompleted\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1651717324385}\\",\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\"\\n}","type":"json"}]',
      'title' => '对话接口',
      'summary' => '对话接口。',
    ),
    'EndDialogue' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e48e45dd-e47a-4744-a063-f08cbebb1c5a',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8fb819b5-d032-48a9-ae5e-cff041b83596',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所有者id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1399572315967217',
          ),
        ),
        3 => 
        array (
          'name' => 'HangUpParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂断参数',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"duration\\":40,\\"endTime\\":1645082505345,\\"hangUpDirection\\":\\"ivr\\",\\"hasLastPlaybackCompleted\\":true,\\"startTime\\":1645082505305}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'e48e45dd-e47a-4744-a063-f08cbebb1c5a',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"e48e45dd-e47a-4744-a063-f08cbebb1c5a\\"\\n}","errorExample":""},{"type":"xml","example":"<RequesetId>e48e45dd-e47a-4744-a063-f08cbebb1c5a</RequesetId>","errorExample":""}]',
      'title' => 'EndDialogue',
      'summary' => '结束对话。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveRecording' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '390515b5-6115-4ccf-83e2-52d5bfaf2ddf',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录音开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1582267398628',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录音时长',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e6bef0db439d4048bfcf45322491becf.wav',
          ),
        ),
        5 => 
        array (
          'name' => 'FilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件路径',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'oss://test/record/',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录音文件类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Source',
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属账号id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1971226538081821',
          ),
        ),
        8 => 
        array (
          'name' => 'VoiceSliceRecordingList',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '254EB995-DEDF-48A4-9101-9CA5B72FFBCC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConversationId.NotFound',
            'errorMessage' => 'The specified ConversationId does not exist in our record.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"254EB995-DEDF-48A4-9101-9CA5B72FFBCC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>254EB995-DEDF-48A4-9101-9CA5B72FFBCC</RequestId>","errorExample":""}]',
      'title' => 'SaveRecording',
      'summary' => '保存录音。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListConversations' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '个数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '138106*****',
          ),
        ),
        4 => 
        array (
          'name' => 'Result',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条件',
            'type' => 'string',
            'required' => false,
            'example' => '13788914724',
          ),
        ),
        6 => 
        array (
          'name' => 'BeginTimeLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围左区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1638288000000',
          ),
        ),
        7 => 
        array (
          'name' => 'BeginTimeRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围右区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1637547875311',
          ),
        ),
        8 => 
        array (
          'name' => 'IsSandBox',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '是否是沙箱',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RoundsLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轮次查询范围左区间',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'RoundsRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轮次查询范围右区间',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总计个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '个数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'a2c26e67-5984-4935-984e-bcee52971993',
              ),
              'PageNumber' => 
              array (
                'description' => '页号',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Conversations' => 
              array (
                'description' => '会话列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '会话列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '结束时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582266750353',
                    ),
                    'HasToAgent' => 
                    array (
                      'description' => '是否有转人工',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1641625694286',
                    ),
                    'SkillGroup' => 
                    array (
                      'description' => '技能组',
                      'type' => 'string',
                      'example' => 'skg-123',
                    ),
                    'ConversationId' => 
                    array (
                      'description' => '会话id',
                      'type' => 'string',
                      'example' => '82b2eaae-ce5c-45f8-8231-f15b6b27e55c',
                    ),
                    'CallingNumber' => 
                    array (
                      'description' => '主叫号码',
                      'type' => 'string',
                      'example' => '135815884***',
                    ),
                    'EndReason' => 
                    array (
                      'description' => '挂断原因，有以下枚举：
     1.正常完结
     2.拒识后机器人挂机
     3.静默超时挂机
     4.拒识后用户挂机
     5.用户无理由挂机
     6.命中意图转人工
     7.拒识转人工
     8.用户侧无交互
     9.系统异常中断
     10.命中意图转IVR
     11.拒识转IVR',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Rounds' => 
                    array (
                      'description' => '轮转次数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'HasLastPlaybackCompleted' => 
                    array (
                      'description' => '挂断时最后一句是否播报完成',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'SandBox' => 
                    array (
                      'description' => '是否沙箱',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CalledNumber' => 
                    array (
                      'description' => '被叫号码',
                      'type' => 'string',
                      'example' => '12356',
                    ),
                    'DsReport' => 
                    array (
                      'type' => 'string',
                    ),
                    'DsReportTitles' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"a2c26e67-5984-4935-984e-bcee52971993\\",\\n  \\"PageNumber\\": 1,\\n  \\"Conversations\\": [\\n    {\\n      \\"EndTime\\": 1582266750353,\\n      \\"HasToAgent\\": false,\\n      \\"StartTime\\": 1641625694286,\\n      \\"SkillGroup\\": \\"skg-123\\",\\n      \\"ConversationId\\": \\"82b2eaae-ce5c-45f8-8231-f15b6b27e55c\\",\\n      \\"CallingNumber\\": \\"135815884***\\",\\n      \\"EndReason\\": 1,\\n      \\"Rounds\\": 2,\\n      \\"HasLastPlaybackCompleted\\": true,\\n      \\"SandBox\\": true,\\n      \\"CalledNumber\\": \\"12356\\",\\n      \\"DsReport\\": \\"\\",\\n      \\"DsReportTitles\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询会话列表',
      'summary' => '查询会话列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BeginDialogue' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '10086',
          ),
        ),
        1 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1358158****',
          ),
        ),
        2 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
          ),
        ),
        3 => 
        array (
          'name' => 'InitialContext',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话上下文',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"channelId\\":\\"fe2559d3-5fc9-4fa5-8314-32b9f762791d\\"}',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4d7db6670b8e41b5adb1f21560ea9272',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所有者id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1231639035307976',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => '是否可打断ivr播报',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{\\"duration\\":31340,\\"endTime\\":1638243934786,\\"hangUpDirection\\":\\"ivr\\",\\"startTime\\":1638243903446}',
              ),
              'TextResponse' => 
              array (
                'description' => '文本信息',
                'type' => 'string',
                'example' => '您好，欢迎致电智能助手',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"Interruptible\\": true,\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"ActionParams\\": \\"{\\\\\\\\\\\\\\"duration\\\\\\\\\\\\\\":31340,\\\\\\\\\\\\\\"endTime\\\\\\\\\\\\\\":1638243934786,\\\\\\\\\\\\\\"hangUpDirection\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ivr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1638243903446}\\",\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\"\\n}","type":"json"}]',
      'title' => '开启会话',
      'summary' => '开启会话。',
    ),
    'ExportConversationDetails' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6c01a99f-1b72-4f75-a8bd-3875766bd19d',
          ),
        ),
        1 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码。',
            'type' => 'string',
            'required' => false,
            'example' => '13581588**',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTimeLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围左区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582266750353',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTimeRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始日期范围右区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1640793599000',
          ),
        ),
        4 => 
        array (
          'name' => 'Options',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可选参数',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自定义参数。',
              'type' => 'string',
              'required' => false,
              'example' => '{\'Option\': [\'betaTestApproved\']}',
            ),
            'required' => false,
            'maxItems' => 99,
          ),
        ),
        5 => 
        array (
          'name' => 'RoundsLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'RoundsRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Result',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '75BAAB9B-40B2-5FF5-A59A-7BCF8154C6EE',
              ),
              'ExportTaskId' => 
              array (
                'description' => '异步导出任务id',
                'type' => 'string',
                'example' => '6203fc87271a420c98eab6c2bbc2d856',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75BAAB9B-40B2-5FF5-A59A-7BCF8154C6EE\\",\\n  \\"ExportTaskId\\": \\"6203fc87271a420c98eab6c2bbc2d856\\"\\n}","type":"json"}]',
      'title' => '导出会话详情',
      'summary' => '导出会话详情。',
    ),
    'DebugBeginDialogue' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被叫号码',
            'type' => 'string',
            'required' => false,
            'example' => '10086',
          ),
        ),
        1 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '135815*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8a503680-815d-473e-a9b0-e010f47a64d2',
          ),
        ),
        3 => 
        array (
          'name' => 'InitialContext',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话信息',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8a503680-815d-473e-a9b0-e010f47a64d2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作指令',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => 'IVR播报是否可打断',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'ActionParams' => 
              array (
                'description' => '动作指令参数',
                'type' => 'string',
                'example' => '{}',
              ),
              'TextResponse' => 
              array (
                'description' => '播报内容',
                'type' => 'string',
                'example' => '您好，欢迎致电智能助手',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
      'title' => '调试环境开启会话',
      'summary' => '调试环境开启会话。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DebugCollectedNumber' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
          ),
        ),
        1 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
          ),
        ),
        2 => 
        array (
          'name' => 'Number',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收号内容',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => 'ivr 播报是否可打断',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{}',
              ),
              'TextResponse' => 
              array (
                'description' => '播报的文本内容',
                'type' => 'string',
                'example' => '您好，欢迎致电智能助手',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"您好，欢迎致电智能助手\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"abb4aa26-3a8e-43dd-82f8-0c3898c9c67f\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
      'title' => '调试环境收号',
      'summary' => '调试环境收号。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DebugDialogue' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConversationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户表述',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7cefbff0-8d50-4d6f-b93c-73cee23c1555',
          ),
        ),
        1 => 
        array (
          'name' => 'AdditionalContext',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话上下文',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abb4aa26-3a8e-43dd-82f8-0c3898c9c67f',
          ),
        ),
        3 => 
        array (
          'name' => 'Utterance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户表述',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '是的',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'description' => '动作',
                'type' => 'string',
                'example' => 'Broadcast',
              ),
              'Interruptible' => 
              array (
                'description' => 'ivr 播报是否可打断',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
              ),
              'ActionParams' => 
              array (
                'description' => '动作参数',
                'type' => 'string',
                'example' => '{}',
              ),
              'TextResponse' => 
              array (
                'description' => '播报的内容',
                'type' => 'string',
                'example' => '80d11be3-faad-4101-b4b0-59dbea28aaf0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TextResponse\\": \\"80d11be3-faad-4101-b4b0-59dbea28aaf0\\",\\n  \\"ActionParams\\": \\"{}\\",\\n  \\"Action\\": \\"Broadcast\\",\\n  \\"RequestId\\": \\"d74d6290-7cbe-4436-b5d7-014ebb0f4060\\",\\n  \\"Interruptible\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<TextResponse>您好，欢迎致电智能助手</TextResponse>\\n<Interruptible>false</Interruptible>\\n<Action>Broadcast</Action>","errorExample":""}]',
      'title' => '调试环境对话',
      'summary' => '调试环境对话。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '导航实例',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述',
            'type' => 'string',
            'required' => false,
            'example' => '第一个导航实例',
          ),
        ),
        2 => 
        array (
          'name' => 'Concurrency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '并发数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'UnionSource',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'UnionInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        5 => 
        array (
          'name' => 'NluServiceParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '9ab43460-c0b9-40e2-8447-48d82c97fc67',
              ),
              'InstanceId' => 
              array (
                'description' => '实例id',
                'type' => 'string',
                'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConcurrency.LimitExceeded',
            'errorMessage' => 'The specified Concurrency exceeds the upper limit.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceName.Duplicated',
            'errorMessage' => 'The specified InstanceName already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"c28fc549-d88f-4f6e-85ad-a0806e5e39c0\\",\\n  \\"RequestId\\": \\"9ab43460-c0b9-40e2-8447-48d82c97fc67\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<InstanceId>12f407b22cbe4890ac595f09985848d5</InstanceId>","errorExample":""}]',
      'title' => '创建智能导航实例',
      'summary' => '创建智能导航实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'd74d6290-7cbe-4436-b5d7-014ebb0f4060',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d74d6290-7cbe-4436-b5d7-014ebb0f4060\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>b19af5ce5314ac08108d1b33fe20e15</RequestId>","errorExample":""}]',
      'title' => 'DeleteInstance',
      'summary' => '删除导航实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '删除状态',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"true\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
      'title' => '删除智能导航实例',
      'summary' => '删除智能导航实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '结果状态',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '3a530dc0-7cfa-48f6-9539-bf9001e77b16',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"true\\",\\n  \\"RequestId\\": \\"3a530dc0-7cfa-48f6-9539-bf9001e77b16\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3a530dc0-7cfa-48f6-9539-bf9001e77b16</RequestId>","errorExample":""}]',
      'title' => '启用实例',
      'summary' => '启用实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12f407b22cbe4890ac595f09985848d5',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        3 => 
        array (
          'name' => 'Concurrency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最大并发数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConcurrency.LimitExceeded',
            'errorMessage' => 'The specified Concurrency exceeds the upper limit.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceName.Duplicated',
            'errorMessage' => 'The specified InstanceName already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>","errorExample":""}]',
      'title' => '修改实例',
      'summary' => '修改实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeNavigationConfig' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '287289b6-1510-4e64-9224-39b53ad89dd2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'SilenceTimeoutConfig' => 
              array (
                'description' => '静默超时配置',
                'type' => 'object',
                'properties' => 
                array (
                  'Timeout' => 
                  array (
                    'description' => '静默超时时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'IntentTrigger' => 
                  array (
                    'description' => '""',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'FinalPrompt' => 
                  array (
                    'description' => '最后一次静默提示语',
                    'type' => 'string',
                    'example' => '抱歉，听不到您说话，请您稍后致电',
                  ),
                  'SourceType' => 
                  array (
                    'description' => '配置源类型',
                    'type' => 'string',
                    'example' => 'chatbotIntent',
                  ),
                  'FinalAction' => 
                  array (
                    'description' => '提示后的动作：TransferToAgent / TransferToIVR / RedirectToPage / HangUp',
                    'type' => 'string',
                    'example' => 'HangUp',
                  ),
                  'Prompt' => 
                  array (
                    'description' => '静默超时提示语',
                    'type' => 'string',
                    'example' => '抱歉，我没听到您说话',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '静默超时最大次数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'FinalActionParams' => 
                  array (
                    'description' => '动作参数，如：跳转目标',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                ),
              ),
              'GreetingConfig' => 
              array (
                'description' => '问候语配置',
                'type' => 'object',
                'properties' => 
                array (
                  'IntentTrigger' => 
                  array (
                    'description' => '触发意图',
                    'type' => 'string',
                    'example' => '你好',
                  ),
                  'GreetingWords' => 
                  array (
                    'description' => '问候语',
                    'type' => 'string',
                    'example' => '您好，欢迎致电智能导航',
                  ),
                  'SourceType' => 
                  array (
                    'description' => '配置类型',
                    'type' => 'string',
                    'example' => 'chatbotIntent',
                  ),
                ),
              ),
              'UnrecognizingConfig' => 
              array (
                'description' => 'Unrecognizing对象 | 据识配置',
                'type' => 'object',
                'properties' => 
                array (
                  'FinalPrompt' => 
                  array (
                    'description' => '最后一次拒识提示语',
                    'type' => 'string',
                    'example' => '抱歉，我暂时无法处理您的问题，即将为您转接人工',
                  ),
                  'FinalAction' => 
                  array (
                    'description' => '拒识动作：TransferToAgent / TransferToIVR / RedirectToPage / HangUp',
                    'type' => 'string',
                    'example' => 'TransferToAgent',
                  ),
                  'FinalActionParams' => 
                  array (
                    'description' => ' 动作参数，如：跳转目标',
                    'type' => 'string',
                    'example' => '{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '拒识最大次数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Prompt' => 
                  array (
                    'description' => '拒识提示语',
                    'type' => 'string',
                    'example' => '抱歉，我无法理解您的意思',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"GreetingConfig\\": {\\n    \\"SourceType\\": \\"chatbotIntent\\",\\n    \\"IntentTrigger\\": \\"你好\\",\\n    \\"GreetingWords\\": \\"您好，欢迎致电智能导航\\"\\n  },\\n  \\"UnrecognizingConfig\\": {\\n    \\"FinalAction\\": \\"TransferToAgent\\",\\n    \\"FinalActionParams\\": \\"{ \\\\\\\\\\\\\\"skillGroupId\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"fallbackSkillGroup\\\\\\\\\\\\\\" }\\",\\n    \\"Threshold\\": 3,\\n    \\"Prompt\\": \\"抱歉，我无法理解您的意思\\",\\n    \\"FinalPrompt\\": \\"抱歉，我暂时无法处理您的问题，即将为您转接人工\\"\\n  },\\n  \\"RepeatingConfig\\": {\\n    \\"Utterances\\": [\\n      \\" [         \\\\\\"没听清\\\\\\",         \\\\\\"再说一遍\\\\\\"       ]\\"\\n    ]\\n  },\\n  \\"AskingBackConfig\\": {\\n    \\"NegativeFeedbackPrompt\\": \\"感谢您的来电。请您稍后为我的服务做出评价。\\",\\n    \\"NegativeFeedbackAction\\": \\"TransferToIVR\\",\\n    \\"NegativeFeedbackActionParams\\": \\"{ \\\\\\\\\\\\\\"route\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"satisfaction\\\\\\\\\\\\\\" }\\",\\n    \\"EnableNegativeFeedback\\": true,\\n    \\"Enabled\\": true,\\n    \\"Prompt\\": \\"请问还有什么可以帮您？\\",\\n    \\"NegativeFeedbackUtterances\\": [\\n      \\" [         \\\\\\"没有了\\\\\\",         \\\\\\"不需要了\\\\\\",         \\\\\\"不用了，谢谢\\\\\\"       ],\\"\\n    ]\\n  },\\n  \\"ComplainingConfig\\": {\\n    \\"FinalAction\\": \\"TransferToAgent\\",\\n    \\"Prompt\\": \\"好的，即将为您转接人工处理\\",\\n    \\"FinalActionParams\\": \\"{ \\\\\\\\\\\\\\"skillGroupId\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"fallbackSkillGroup\\\\\\\\\\\\\\" }\\",\\n    \\"Utterances\\": [\\n      \\"[         \\\\\\"投诉\\\\\\",         \\\\\\"转人工\\\\\\",         \\\\\\"有没有人工\\\\\\"       ]\\"\\n    ]\\n  },\\n  \\"SilenceTimeoutConfig\\": {\\n    \\"Timeout\\": 10,\\n    \\"IntentTrigger\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"FinalPrompt\\": \\"抱歉，听不到您说话，请您稍后致电\\",\\n    \\"SourceType\\": \\"chatbotIntent\\",\\n    \\"FinalAction\\": \\"HangUp\\",\\n    \\"Prompt\\": \\"抱歉，我没听到您说话\\",\\n    \\"Threshold\\": 3,\\n    \\"FinalActionParams\\": \\"{}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<GreetingConfig>\\n    <GreetingWords>您好，欢迎致电智能导航</GreetingWords>\\n</GreetingConfig>\\n<UnrecognizingConfig>\\n    <Prompt>抱歉，我无法理解您的意思</Prompt>\\n    <Threshold>3</Threshold>\\n    <FinalPrompt>抱歉，我暂时无法处理您的问题，即将为您转接人工</FinalPrompt>\\n    <FinalAction>TransferToAgent</FinalAction>\\n    <FinalActionParams>{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }</FinalActionParams>\\n</UnrecognizingConfig>\\n<RepeatingConfig>\\n    <Utterances>没听清</Utterances>\\n    <Utterances>再说一遍</Utterances>\\n</RepeatingConfig>\\n<AskingBackConfig>\\n    <Enabled>true</Enabled>\\n    <Prompt>请问还有什么可以帮您？</Prompt>\\n    <EnableNegativeFeedback>true</EnableNegativeFeedback>\\n    <NegativeFeedbackUtterances>没有了</NegativeFeedbackUtterances>\\n    <NegativeFeedbackUtterances>不需要了</NegativeFeedbackUtterances>\\n    <NegativeFeedbackUtterances>不用了，谢谢</NegativeFeedbackUtterances>\\n    <NegativeFeedbackPrompt>感谢您的来电。请您稍后为我的服务做出评价。</NegativeFeedbackPrompt>\\n    <NegativeFeedbackAction>TransferToIVR</NegativeFeedbackAction>\\n    <NegativeFeedbackActionParams> { \\"route\\": \\"satisfaction\\" } </NegativeFeedbackActionParams>\\n</AskingBackConfig>\\n<SilenceTimeoutConfig>\\n    <Prompt>抱歉，我没听到您说话</Prompt>\\n    <Timeout>10</Timeout>\\n    <Threshold>3</Threshold>\\n    <FinalPrompt>抱歉，听不到您说话，请您稍后致电</FinalPrompt>\\n    <FinalAction>HangUp</FinalAction>\\n</SilenceTimeoutConfig>\\n<ComplainingConfig>\\n    <Utterances>投诉</Utterances>\\n    <Utterances>转人工</Utterances>\\n    <Utterances>有没有人工</Utterances>\\n    <Prompt>好的，即将为您转接人工处理</Prompt>\\n    <Action>TransferToAgent</Action>\\n    <ActionParams>{ \\"skillGroupId\\": \\"fallbackSkillGroup\\" }</ActionParams>\\n</ComplainingConfig>","errorExample":""}]',
      'title' => '查看实例IVR配置',
      'summary' => '查看实例IVR配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstance' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cd6fc91bc13445c2af7f2e3e31418520',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态',
                'type' => 'string',
                'example' => 'Published',
              ),
              'ModifyTime' => 
              array (
                'description' => '更新时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1683216000000',
              ),
              'Description' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => '导航测试实例描述信息',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '790B5EA3-D251-1666-B1E0-4D1F4B33A592',
              ),
              'InstanceId' => 
              array (
                'description' => '实例id',
                'type' => 'string',
                'example' => 'cd6fc91bc13445c2af7f2e3e31418520',
              ),
              'Concurrency' => 
              array (
                'description' => '实例并发',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'ApplicableOperations' => 
              array (
                'description' => '适用操作列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '适用操作',
                  'type' => 'string',
                  'example' => 'Edit',
                ),
              ),
              'ModifyUserName' => 
              array (
                'description' => '更新者',
                'type' => 'string',
                'example' => '2508711*******',
              ),
              'Name' => 
              array (
                'description' => '实例名称',
                'type' => 'string',
                'example' => '导航测试实例',
              ),
              'AbilityType' => 
              array (
                'description' => '实例能力类型<br>
DEFAULT：全能力<br>
VOICE_ONLY：只关注语音能力，不含对话干预',
                'type' => 'string',
                'example' => 'VOICE_ONLY',
              ),
              'UnionSource' => 
              array (
                'type' => 'string',
              ),
              'UnionInstanceId' => 
              array (
                'type' => 'string',
              ),
              'NluServiceParamsJson' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Published\\",\\n  \\"ModifyTime\\": 1683216000000,\\n  \\"Description\\": \\"导航测试实例描述信息\\",\\n  \\"RequestId\\": \\"790B5EA3-D251-1666-B1E0-4D1F4B33A592\\",\\n  \\"InstanceId\\": \\"cd6fc91bc13445c2af7f2e3e31418520\\",\\n  \\"Concurrency\\": 10,\\n  \\"ApplicableOperations\\": [\\n    \\"Edit\\"\\n  ],\\n  \\"ModifyUserName\\": \\"2508711*******\\",\\n  \\"Name\\": \\"导航测试实例\\",\\n  \\"AbilityType\\": \\"VOICE_ONLY\\",\\n  \\"UnionSource\\": \\"\\",\\n  \\"UnionInstanceId\\": \\"\\",\\n  \\"NluServiceParamsJson\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceResponse>\\n    <Status>Published</Status>\\n    <ModifyTime>1683216000000</ModifyTime>\\n    <Description>导航测试实例描述信息</Description>\\n    <RequestId>790B5EA3-D251-1666-B1E0-4D1F4B33A592</RequestId>\\n    <InstanceId>cd6fc91bc13445c2af7f2e3e31418520</InstanceId>\\n    <Concurrency>10</Concurrency>\\n    <ApplicableOperations>Edit</ApplicableOperations>\\n    <ModifyUserName>2508711*******</ModifyUserName>\\n    <Name>导航测试实例</Name>\\n    <AbilityType>VOICE_ONLY</AbilityType>\\n</DescribeInstanceResponse>","errorExample":""}]',
      'title' => '查询实例信息',
      'summary' => '查询实例信息。',
    ),
    'DescribeStatisticalData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c28fc549-d88f-4f6e-85ad-a0806e5e39c0',
          ),
        ),
        1 => 
        array (
          'name' => 'TimeUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日期单元',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Day/Hour',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTimeLeftRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间左区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582283640000',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTimeRightRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间右区间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582298040000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalDialoguePassRate' => 
              array (
                'description' => '总多轮会话通过率',
                'type' => 'string',
                'example' => '80.00%',
              ),
              'TotalKnowledgeHitRate' => 
              array (
                'description' => '总知识库命中率',
                'type' => 'string',
                'example' => '80.00%',
              ),
              'TotalResolutionRate' => 
              array (
                'description' => '总解决率',
                'type' => 'string',
                'example' => '80.00%',
              ),
              'TotalValidAnswerRate' => 
              array (
                'description' => '总有效回答率',
                'type' => 'string',
                'example' => '80.00%',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'ResolvedQuestionTotalNum' => 
              array (
                'description' => '解决问题总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '80',
              ),
              'ConversationTotalNum' => 
              array (
                'description' => '总会话数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'StatisticalDataReports' => 
              array (
                'description' => '时间维度统计数据数组',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KnowledgeHitRate' => 
                    array (
                      'description' => '知识库命中率',
                      'type' => 'string',
                      'example' => '80.00%',
                    ),
                    'ResolvedQuestionNum' => 
                    array (
                      'description' => '解决问题数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'ResolutionRate' => 
                    array (
                      'description' => '解决率',
                      'type' => 'string',
                      'example' => '80.00%',
                    ),
                    'StatisticalDate' => 
                    array (
                      'description' => '统计日期',
                      'type' => 'string',
                      'example' => '19:00:00',
                    ),
                    'TotalConversationNum' => 
                    array (
                      'description' => '总会话数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ValidAnswerRate' => 
                    array (
                      'description' => '有效回答率',
                      'type' => 'string',
                      'example' => '80.0',
                    ),
                    'DialoguePassRate' => 
                    array (
                      'description' => '多轮会话通过率',
                      'type' => 'string',
                      'example' => '80.00%',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConversationTotalNum\\": 100,\\n  \\"TotalDialoguePassRate\\": \\"80.00%\\",\\n  \\"TotalKnowledgeHitRate\\": \\"80.00%\\",\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"TotalValidAnswerRate\\": \\"80.00%\\",\\n  \\"ResolvedQuestionTotalNum\\": 80,\\n  \\"TotalResolutionRate\\": \\"80.00%\\",\\n  \\"StatisticalDataReports\\": [\\n    {\\n      \\"KnowledgeHitRate\\": \\"80.00%\\",\\n      \\"ResolvedQuestionNum\\": 80,\\n      \\"ResolutionRate\\": \\"80.00%\\",\\n      \\"StatisticalDate\\": \\"19:00:00\\",\\n      \\"TotalConversationNum\\": 100,\\n      \\"ValidAnswerRate\\": \\"80.0\\",\\n      \\"DialoguePassRate\\": \\"80.00%\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>14C39896-AE6D-4643-9C9A-E0566B2C2DDD</RequestId>\\n<ConversationTotalNum>100</ConversationTotalNum>\\n<ResolvedQuestionTotalNum>80</ResolvedQuestionTotalNum>\\n<TotalKnowledgeHitRate>80.00%</TotalKnowledgeHitRate>\\n<TotalValidAnswerRate>80.00%</TotalValidAnswerRate>\\n<StatisticalDataReports>\\n    <ResolvedQuestionNum>80</ResolvedQuestionNum>\\n    <KnowledgeHitRate>80.00%</KnowledgeHitRate>\\n    <TotalConversationNum>100</TotalConversationNum>\\n    <ValidAnswerRate>80.00%</ValidAnswerRate>\\n    <ResolutionRate>80.00%</ResolutionRate>\\n    <DialoguePassRate>80.00%</DialoguePassRate>\\n    <StatisticalDate>19:00:00</StatisticalDate>\\n</StatisticalDataReports>\\n<TotalDialoguePassRate>80.00%</TotalDialoguePassRate>\\n<TotalResolutionRate>80.00%</TotalResolutionRate>","errorExample":""}]',
      'title' => '查看当前实例的统计数据',
      'summary' => '查看当前实例的统计数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstances' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NluServiceTypeListJsonString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'nlu类型列表',
            'type' => 'string',
            'required' => false,
            'example' => '[Managed]',
          ),
        ),
        3 => 
        array (
          'name' => 'UnionSource',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'UnionInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Number',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceIdListJsonString',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Instances' => 
              array (
                'description' => '实例数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例数组',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态',
                      'type' => 'string',
                      'example' => 'Published',
                    ),
                    'ModifyUserName' => 
                    array (
                      'description' => '操作人',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '测试的实例',
                    ),
                    'ApplicableOperations' => 
                    array (
                      'description' => '实例可操作列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例可操作列表',
                        'type' => 'string',
                        'example' => '["Edit", "Publish", "Duplicate", "Delete", "ListHistories"]',
                      ),
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例id',
                      'type' => 'string',
                      'example' => 'dc437bba-5a25-4bbc-b4c2-f268864bebb5',
                    ),
                    'Name' => 
                    array (
                      'description' => '名字',
                      'type' => 'string',
                      'example' => '测试实例',
                    ),
                    'Concurrency' => 
                    array (
                      'description' => '并发数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582266750353',
                    ),
                    'Numbers' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UnionSource' => 
                    array (
                      'type' => 'string',
                    ),
                    'UnionInstanceId' => 
                    array (
                      'type' => 'string',
                    ),
                    'NluServiceParamsJson' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '个数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'A8AED3C8-F57B-5D71-9A34-4A170287533F',
              ),
              'PageNumber' => 
              array (
                'description' => '页号',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": \\"Published\\",\\n      \\"ModifyUserName\\": \\"xxx\\",\\n      \\"Description\\": \\"测试的实例\\",\\n      \\"ApplicableOperations\\": [\\n        \\"[\\\\\\"Edit\\\\\\", \\\\\\"Publish\\\\\\", \\\\\\"Duplicate\\\\\\", \\\\\\"Delete\\\\\\", \\\\\\"ListHistories\\\\\\"]\\"\\n      ],\\n      \\"InstanceId\\": \\"dc437bba-5a25-4bbc-b4c2-f268864bebb5\\",\\n      \\"Name\\": \\"测试实例\\",\\n      \\"Concurrency\\": 10,\\n      \\"ModifyTime\\": 1582266750353,\\n      \\"Numbers\\": [\\n        \\"\\"\\n      ],\\n      \\"CreateTime\\": 0,\\n      \\"UnionSource\\": \\"\\",\\n      \\"UnionInstanceId\\": \\"\\",\\n      \\"NluServiceParamsJson\\": \\"\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"A8AED3C8-F57B-5D71-9A34-4A170287533F\\",\\n  \\"PageNumber\\": 2\\n}","type":"json"}]',
      'title' => '分页获取当前租户下智能导航实例列表',
      'summary' => '分页获取当前租户下智能导航实例列表。',
    ),
    'ListChatbotInstances' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '个数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'UnionSource',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'NluServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'NluServiceParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总计个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Bots' => 
              array (
                'description' => '实例信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Introduction' => 
                    array (
                      'type' => 'string',
                      'example' => '‘’',
                    ),
                    'Avatar' => 
                    array (
                      'description' => '机器实例图标',
                      'type' => 'string',
                      'example' => 'https://dss0.ali.com/70cFuHS.jpg',
                    ),
                    'TimeZone' => 
                    array (
                      'description' => '时区',
                      'type' => 'string',
                      'example' => 'UTC+8',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1582266750353',
                    ),
                    'LanguageCode' => 
                    array (
                      'description' => '语言代码',
                      'type' => 'string',
                      'example' => 'zh-cn',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例id',
                      'type' => 'string',
                      'example' => 'af81a389-91f0-4157-8d82-720edd02b66a',
                    ),
                    'Name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => '测试机器人',
                    ),
                  ),
                ),
              ),
              'PageSize' => 
              array (
                'description' => '个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
              ),
              'PageNumber' => 
              array (
                'description' => '页号',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"Bots\\": [\\n    {\\n      \\"Introduction\\": \\"‘’\\",\\n      \\"Avatar\\": \\"https://dss0.ali.com/70cFuHS.jpg\\",\\n      \\"TimeZone\\": \\"UTC+8\\",\\n      \\"CreateTime\\": \\"1582266750353\\",\\n      \\"LanguageCode\\": \\"zh-cn\\",\\n      \\"InstanceId\\": \\"af81a389-91f0-4157-8d82-720edd02b66a\\",\\n      \\"Name\\": \\"测试机器人\\"\\n    }\\n  ],\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<RequestId>da37319b-6c83-4268-9f19-814aed62e401</RequestId>\\n<Bots>\\n    <Avatar>alibaba.com/skjdnvkdsvdk.jpg</Avatar>\\n    <CreateTime>1582270782552</CreateTime>\\n    <Introduction/>\\n    <LanguageCode>zh-cn</LanguageCode>\\n    <Name>测试</Name>\\n    <TimeZone>UTC+8</TimeZone>\\n</Bots>","errorExample":""}]',
      'title' => 'ListChatbotInstances',
      'summary' => '查询实例列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDownloadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DownloadTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务id',
            'type' => 'string',
            'required' => true,
            'example' => '073f092da0a847b9bf76eb88b5931c7a',
          ),
        ),
        1 => 
        array (
          'name' => 'FileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件的ID，您可以使用[ListFiles](~~173942~~)接口查询对应文件的ID。

',
            'type' => 'string',
            'required' => true,
            'example' => '22626c39603744f5a08d4d715315561a',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'FileHttpUrl' => 
              array (
                'description' => '文件url',
                'type' => 'string',
                'example' => 'http://ssml-test.oss-cn-shanghai.aliyuncs.com/key',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '7401D698-0AAC-5909-B68E-88C68805FFB8',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '信息。',
                'type' => 'string',
                'example' => 'get upload tool url success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"FileHttpUrl\\": \\"http://ssml-test.oss-cn-shanghai.aliyuncs.com/key\\",\\n  \\"RequestId\\": \\"7401D698-0AAC-5909-B68E-88C68805FFB8\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"get upload tool url success\\"\\n}","type":"json"}]',
      'title' => '创建下载文件url',
    ),
    'ListDownloadTasks' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'D24E0148-6D40-550E-9471-B2C5A34C3D12',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'DownloadTasks' => 
              array (
                'description' => '下载任务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页面大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'List' => 
                  array (
                    'description' => '下载任务数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '任务数组',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'Expired',
                        ),
                        'Title' => 
                        array (
                          'description' => '标题',
                          'type' => 'string',
                          'example' => '批量高阶内存整理_2022_02_17_10',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '过期时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1637119221702',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务id',
                          'type' => 'string',
                          'example' => 'cb9aba69-f578-42b2-aa2f-3e5a41947db8',
                        ),
                        'DownloadTaskFiles' => 
                        array (
                          'description' => '下载任务文件列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '下载任务文件列表',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Status' => 
                              array (
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'Published',
                              ),
                              'Title' => 
                              array (
                                'description' => '标题',
                                'type' => 'string',
                                'example' => 'CBU阿里通信反馈-声音延迟',
                              ),
                              'Progress' => 
                              array (
                                'description' => '下载任务完成进度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '70',
                              ),
                              'FileId' => 
                              array (
                                'description' => '文件id',
                                'type' => 'string',
                                'example' => 'c32bf5675b704dc5b19200a89d2e85f1',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D24E0148-6D40-550E-9471-B2C5A34C3D12\\",\\n  \\"Success\\": true,\\n  \\"DownloadTasks\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 2,\\n    \\"List\\": [\\n      {\\n        \\"Status\\": \\"Expired\\",\\n        \\"Title\\": \\"批量高阶内存整理_2022_02_17_10\\",\\n        \\"ExpireTime\\": 1637119221702,\\n        \\"TaskId\\": \\"cb9aba69-f578-42b2-aa2f-3e5a41947db8\\",\\n        \\"DownloadTaskFiles\\": [\\n          {\\n            \\"Status\\": \\"Published\\",\\n            \\"Title\\": \\"CBU阿里通信反馈-声音延迟\\",\\n            \\"Progress\\": 70,\\n            \\"FileId\\": \\"c32bf5675b704dc5b19200a89d2e85f1\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查看下载任务列表',
    ),
    'GenerateUploadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Key',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'Environment',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'voicerobot.manager.dto.enums.EnvironmentType',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        3 => 
        array (
          'name' => 'RequestId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'CallerUid',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        5 => 
        array (
          'name' => 'CallerBid',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'CallerType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        7 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        8 => 
        array (
          'name' => 'CallerIp',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientIp',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        10 => 
        array (
          'name' => 'MfaPresent',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        11 => 
        array (
          'name' => 'SecurityTransport',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        12 => 
        array (
          'name' => 'ProxyTrustTransportInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        13 => 
        array (
          'name' => 'ProxyOriginalSecurityTransport',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        14 => 
        array (
          'name' => 'ProxyOriginalSourceIp',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        15 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        16 => 
        array (
          'name' => 'InstanceOwnerId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        17 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        18 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        19 => 
        array (
          'name' => 'TenantName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        20 => 
        array (
          'name' => 'UserName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        21 => 
        array (
          'name' => 'XspaceServicerId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        22 => 
        array (
          'name' => 'XspaceTenantBuId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<OssUploadParams>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AccessId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Policy' => 
                  array (
                    'type' => 'string',
                  ),
                  'Signature' => 
                  array (
                    'type' => 'string',
                  ),
                  'Folder' => 
                  array (
                    'type' => 'string',
                  ),
                  'Host' => 
                  array (
                    'type' => 'string',
                  ),
                  'Expire' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Success' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'Message' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ModifyAsrConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'config_level对应的实体ID',
            'description' => 'config_level对应的实体ID',
            'type' => 'string',
            'required' => false,
            'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
          ),
        ),
        1 => 
        array (
          'name' => 'ConfigLevel',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略级别，包含 0：系统，1:租户，2：实例',
            'description' => '策略级别，包含 0：系统，1:租户，2：实例',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'AsrVocabularyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热词ID。请在[ASR热词管理页面](https://aiccs.console.aliyun.com/sentence/vocab?spm=a2c4g.11186623.0.0.7f9bf965IKBpsi)查看ASR热词ID。',
            'type' => 'string',
            'required' => false,
            'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
          ),
        ),
        3 => 
        array (
          'name' => 'AsrCustomizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集id',
            'type' => 'string',
            'required' => false,
            'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
          ),
        ),
        4 => 
        array (
          'name' => 'AsrAcousticModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'asr声学id',
            'type' => 'string',
            'required' => false,
            'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
          ),
        ),
        5 => 
        array (
          'name' => 'AsrClassVocabularyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'asr热词id',
            'type' => 'string',
            'required' => false,
            'example' => '6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<ModifyAsrConfigResponse>',
            'description' => 'RpcResponse<ModifyAsrConfigResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Data' => 
              array (
                'description' => '修改结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AffectedRows' => 
                  array (
                    'description' => '是否影响行数',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'da37319b-6c83-4268-9f19-814aed62e401',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Not Found',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Please try again later. Submit a ticket if the error still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AffectedRows\\": 0\\n  },\\n  \\"RequestId\\": \\"da37319b-6c83-4268-9f19-814aed62e401\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"ErrorMsg\\": \\"Not Found\\"\\n}","type":"json"}]',
      'title' => '修改asr配置',
    ),
    'GetAsrConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'config_level对应的实体ID',
            'description' => 'config_level对应的实体ID',
            'type' => 'string',
            'required' => false,
            'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
          ),
        ),
        1 => 
        array (
          'name' => 'ConfigLevel',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略级别，包含 0：系统，1:租户，2：实例',
            'description' => '策略级别，包含 0：系统，1:租户，2：实例',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<GetAsrConfigResponse>',
            'description' => 'RpcResponse<GetAsrConfigResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AsrVocabularyId' => 
                  array (
                    'description' => '热词ID。请在[ASR热词管理页面](https://aiccs.console.aliyun.com/sentence/vocab?spm=a2c4g.11186623.0.0.7f9bf965IKBpsi)查看ASR热词ID。',
                    'type' => 'string',
                    'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                  ),
                  'AsrCustomizationId' => 
                  array (
                    'description' => 'asr数据集id',
                    'type' => 'string',
                    'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                  ),
                  'AsrAcousticModelId' => 
                  array (
                    'description' => 'asracoustic模型id',
                    'type' => 'string',
                    'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                  ),
                  'AsrClassVocabularyId' => 
                  array (
                    'description' => 'asr热词id',
                    'type' => 'string',
                    'example' => '3b1d3031-8b6e-460a-8640-d330f2ca50b8',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '14C39896-AE6D-4643-9C9A-E0566B2C2DDD',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Not Found',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AsrVocabularyId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrCustomizationId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrAcousticModelId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\",\\n    \\"AsrClassVocabularyId\\": \\"3b1d3031-8b6e-460a-8640-d330f2ca50b8\\"\\n  },\\n  \\"RequestId\\": \\"14C39896-AE6D-4643-9C9A-E0566B2C2DDD\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"ErrorMsg\\": \\"Not Found\\"\\n}","type":"json"}]',
      'title' => '查询asr配置',
    ),
    'GetRealTimeConcurrency' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'c112c168ed664c0a851f9ca72d2f7999',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E6E61E1A-D2DC-5ACF-AED4-A115B6691F98',
              ),
              'Timestamp' => 
              array (
                'description' => '查询时间戳',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1661584255029',
              ),
              'RealTimeConcurrency' => 
              array (
                'description' => '实时并发数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'MaxConcurrency' => 
              array (
                'description' => '最大并发数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E6E61E1A-D2DC-5ACF-AED4-A115B6691F98\\",\\n  \\"Timestamp\\": 1661584255029,\\n  \\"RealTimeConcurrency\\": 1,\\n  \\"MaxConcurrency\\": 2\\n}","type":"json"}]',
      'summary' => '获取实例的实时并发数',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'voicenavigator.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'voicenavigator.cn-shanghai.aliyuncs.com',
    ),
  ),
);
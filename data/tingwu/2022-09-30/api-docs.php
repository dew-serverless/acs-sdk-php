<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'tingwu',
        'version' => '2022-09-30',
    ],
    'directories' => [
        [
            'id' => 172030,
            'title' => '实时会议转写',
            'type' => 'directory',
            'children' => [
                'CreateMeetingTrans',
                'GetMeetingTrans',
                'StopMeetingTrans',
            ],
        ],
        [
            'id' => 172031,
            'title' => '会议音视频文件转写',
            'type' => 'directory',
            'children' => [
                'CreateFileTrans',
                'GetFileTrans',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateMeetingTrans' => [
            'summary' => '创建实时会议。',
            'path' => '/openapi/meeting-trans',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'AppKey' => [
                                'title' => '管控台创建的项目AppKey。',
                                'description' => '管控台创建的项目AppKey。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'JV1sRTisRMi****',
                            ],
                            'MeetingKey' => [
                                'title' => '用户设置的会议标识，在会中查询或会后结束回调时会原样返回。',
                                'description' => '用户设置的会议标识，在会中查询或会后结束回调时会原样返回。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'meeting_123',
                            ],
                            'AudioFormat' => [
                                'title' => '音频编码格式，PCM（无压缩的PCM文件或WAV文件）或OPUS（压缩的OPUS文件）。',
                                'description' => '音频编码格式，PCM（无压缩的PCM文件或WAV文件）或OPUS（压缩的OPUS文件）。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pcm',
                                'enum' => [],
                            ],
                            'AudioPackage' => [
                                'title' => '音频打包方式，基于听悟约定的Protobuf格式封装多路音频流时设置为multi。',
                                'description' => '音频打包方式，基于听悟约定的Protobuf格式封装多路音频流时设置为multi。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'multi',
                            ],
                            'AudioSampleRate' => [
                                'title' => '音频采样率，当前支持：16000。',
                                'description' => '音频采样率，当前支持：16000、8000（仅支持单路中文）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '16000',
                                'enum' => [],
                            ],
                            'AudioBitRate' => [
                                'title' => '会议上传音频采样位数，当前支持：16。',
                                'description' => '会议上传音频采样位数，当前支持：16。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '16',
                                'enum' => [],
                            ],
                            'AudioLanguage' => [
                                'title' => '音频转写使用的语言模型。'."\n"
                                    .'cn：中文。'."\n"
                                    .'en：英文。'."\n"
                                    .'yue：粤语。'."\n"
                                    .'fspk：中英文自由说。'."\n"
                                    .'multi：动态语言切换。',
                                'description' => '音频转写使用的语言模型。'."\n"
                                    .'cn：中文。'."\n"
                                    .'en：英文。'."\n"
                                    .'yue：粤语。'."\n"
                                    .'fspk：中英文自由说。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'cn',
                                'enum' => [],
                            ],
                            'RealtimeResultEnabled' => [
                                'title' => '是否开启会中实时结果返回，默认是true。',
                                'description' => '是否开启会中实时结果返回，默认是true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'RealtimeResultLevel' => [
                                'title' => '开启会中实时结果返回时，设置识别结果返回等级，默认是1。'."\n"
                                    .'0：不返回识别结果。'."\n"
                                    .'1：识别出完整句子时返回识别结果。'."\n"
                                    .'2：识别出中间结果及完整句子时返回识别结果。',
                                'description' => '开启会中实时结果返回时，设置识别结果返回等级，默认是1。'."\n"
                                    .'0：不返回识别结果。'."\n"
                                    .'1：识别出完整句子时返回识别结果。'."\n"
                                    .'2：识别出中间结果及完整句子时返回识别结果。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                                'default' => '1',
                                'enum' => [],
                            ],
                            'RealtimeActiveResultLevel' => [
                                'title' => '开启会中实时结果返回且音频打包方式为multi时，设置发言人识别结果返回等级，默认是1。'."\n"
                                    .'0：不返回识别结果。'."\n"
                                    .'1：识别出完整句子时返回识别结果。'."\n"
                                    .'2：识别出中间结果及完整句子时返回识别结果。',
                                'description' => '开启会中实时结果返回且音频打包方式为multi时，设置发言人识别结果返回等级，默认是1。'."\n"
                                    .'0：不返回识别结果。'."\n"
                                    .'1：识别出完整句子时返回识别结果。'."\n"
                                    .'2：识别出中间结果及完整句子时返回识别结果。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                                'default' => '1',
                                'enum' => [],
                            ],
                            'AudioOutputEnabled' => [
                                'title' => '是否开启mp3格式音频同步转码，默认是false。',
                                'description' => '是否开启mp3格式音频同步转码，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'AudioOutputOssBucket' => [
                                'title' => '开启音频同步转码时，转码音频写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'description' => '开启音频同步转码时，转码音频写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket',
                            ],
                            'AudioOutputOssPath' => [
                                'title' => '开启音频同步转码时，转码音频写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'description' => '开启音频同步转码时，转码音频写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tingwu/dir/filename',
                            ],
                            'MeetingResultEnabled' => [
                                'title' => '是否开启会后智能提取，默认是false。',
                                'description' => '是否开启会后智能提取，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'MeetingResultOssBucket' => [
                                'title' => '开启会后智能提取时，提取结果写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'description' => '开启会后智能提取时，提取结果写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket',
                            ],
                            'MeetingResultOssPath' => [
                                'title' => '开启会后智能提取时，提取结果写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'description' => '开启会后智能提取时，提取结果写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tingwu/dir/filename',
                            ],
                            'DocResultEnabled' => [
                                'title' => '开启会后智能提取时，是否会中识别结果写入，默认是false。',
                                'description' => '开启会后智能提取时，是否会中识别结果写入，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'AudioSegmentsEnabled' => [
                                'title' => '开启会后智能提取时，是否开启有效音频片断检测结果写入，默认是false。',
                                'description' => '开启会后智能提取时，是否开启有效音频片断检测结果写入，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'TranslateResultEnabled' => [
                                'title' => '是否开启会中翻译，默认是false。',
                                'description' => '是否开启会中翻译，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'TranslateLanguages' => [
                                'title' => '翻译目标语言集合，多个语言间用英文逗号","分隔，当前支持cn、en。',
                                'description' => '翻译目标语言集合，多个语言间用英文逗号","分隔，当前支持cn、en。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cn,en',
                            ],
                            'TranslateResultLevel' => [
                                'title' => '单通道识别或多通道mix流识别结果翻译等级。0：不返回翻译结果。 1：识别出完整句子时返回翻译结果。 2：识别出中间结果及完整句子时返回翻译结果。默认是1。',
                                'description' => '单通道识别或多通道mix流识别结果翻译等级。0：不返回翻译结果。1：识别出完整句子时返回翻译结果。2：识别出中间结果及完整句子时返回翻译结果。默认是1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                                'default' => '1',
                            ],
                            'TranslateActiveResultLevel' => [
                                'title' => '多通道Active流识别结果翻译等级。0：不返回翻译结果。 1：识别出完整句子时返回翻译结果。 2：识别出中间结果及完整句子时返回翻译结果。默认是1。',
                                'description' => '多通道Active流识别结果翻译等级。0：不返回翻译结果。 1：识别出完整句子时返回翻译结果。 2：识别出中间结果及完整句子时返回翻译结果。默认是1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                                'default' => '1',
                            ],
                            'RealtimeResultWordsEnabled' => [
                                'title' => '会中识别消息是否包含words信息，默认是true。',
                                'description' => '会中识别消息是否包含words信息，默认是true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'RealtimeResultMeetingInfoEnabled' => [
                                'title' => '会中识别消息结果header中是否包含MeetingKey、MeetingId，默认是false。',
                                'description' => '会中识别消息结果header中是否包含MeetingKey、MeetingId，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'Tags' => [
                                'description' => '系统扩展：标签',
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AsrParams' => [
                                'description' => 'ASR转写的额外参数，如热词vocabulary_id',
                                'type' => 'object',
                                'required' => false,
                                'example' => '{'."\n"
                                    .'  "vocabulary_id": "e2a9a9be3128417fb4d181ebfbe8****"'."\n"
                                    .'}',
                            ],
                            'LabParams' => [
                                'description' => '系统扩展：实验转写参数',
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AbilityParams' => [
                                'description' => '能力扩展',
                                'type' => 'object',
                                'required' => false,
                            ],
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
                                'title' => '请求ID，仅用于联调。',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'title' => '状态码。',
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'title' => '状态说明。',
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'MeetingId' => [
                                        'title' => '会议ID。',
                                        'description' => '会议ID。',
                                        'type' => 'string',
                                        'example' => 'f7de74778d94422283534102dfc0****',
                                    ],
                                    'MeetingJoinUrl' => [
                                        'title' => '会议语音推流地址。',
                                        'description' => '会议语音推流地址。',
                                        'type' => 'string',
                                        'example' => 'wss://tingwu-realtime-cn-beijing.aliyuncs.com/api/ws/v1?mc=****',
                                    ],
                                    'MeetingKey' => [
                                        'title' => '用户创建会议时设置的会议标识。',
                                        'description' => '用户创建会议时设置的会议标识。',
                                        'type' => 'string',
                                        'example' => 'meeting_123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"MeetingId\\": \\"f7de74778d94422283534102dfc0****\\",\\n    \\"MeetingJoinUrl\\": \\"wss://tingwu-realtime-cn-beijing.aliyuncs.com/api/ws/v1?mc=****\\",\\n    \\"MeetingKey\\": \\"meeting_123\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建实时会议',
        ],
        'GetMeetingTrans' => [
            'summary' => '查询实时会议信息。',
            'path' => '/openapi/meeting-trans/{MeetingId}',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'MeetingId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '会议ID。',
                        'description' => '会议ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f7de74778d94422283534102dfc0****',
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
                                'title' => '请求ID，仅用于联调。',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'title' => '状态码。',
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'title' => '状态说明。',
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'MeetingId' => [
                                        'title' => '会议ID。',
                                        'description' => '会议ID。',
                                        'type' => 'string',
                                        'example' => 'f7de74778d94422283534102dfc0****',
                                    ],
                                    'MeetingStatus' => [
                                        'title' => '会议状态。'."\n"
                                            .'NEW：新会议。'."\n"
                                            .'ONGOING：会议转写中。'."\n"
                                            .'PAUSED：会议转写暂停。'."\n"
                                            .'PRE_COMPLETE：会议转写结束后，进行会后智能提取。'."\n"
                                            .'COMPLETED：会议完成。'."\n"
                                            .'FAILED：会议转写结束后，会后智能提取失败。'."\n"
                                            .'INVALID：无效会议。',
                                        'description' => '会议状态。'."\n"
                                            .'NEW：新会议。'."\n"
                                            .'ONGOING：会议转写中。'."\n"
                                            .'PAUSED：会议转写暂停。'."\n"
                                            .'PRE_COMPLETE：会议转写结束后，进行会后智能提取。'."\n"
                                            .'COMPLETED：会议完成。'."\n"
                                            .'FAILED：会议转写结束后，会后智能提取失败。'."\n"
                                            .'INVALID：无效会议。',
                                        'type' => 'string',
                                        'example' => 'COMPLETED',
                                    ],
                                    'MeetingKey' => [
                                        'title' => '用户创建会议时设置的会议标识。',
                                        'description' => '用户创建会议时设置的会议标识。',
                                        'type' => 'string',
                                        'example' => 'meeting_123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"MeetingId\\": \\"f7de74778d94422283534102dfc0****\\",\\n    \\"MeetingStatus\\": \\"COMPLETED\\",\\n    \\"MeetingKey\\": \\"meeting_123\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询实时会议状态',
        ],
        'StopMeetingTrans' => [
            'summary' => '结束实时会议。',
            'path' => '/openapi/meeting-trans/{MeetingId}/stop',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MeetingId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '会议ID。',
                        'description' => '会议ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'meeting_123',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'MeetingRoleNum' => [
                                'title' => '会后进行识别结果角色区分人数，在AudioOutputEnabled=true、MeetingResultEnabled=true且DocResultEnabled=true 时生效，默认是1。'."\n"
                                    .'0：按多人进行角色区分。'."\n"
                                    .'1：按1人进行角色区分，即不区分。'."\n"
                                    .'2：按2人进行角色区分。',
                                'description' => '会后进行识别结果角色区分人数，在AudioOutputEnabled=true、MeetingResultEnabled=true且DocResultEnabled=true 时生效，默认是1。'."\n"
                                    .'0：按多人进行角色区分。'."\n"
                                    .'1：按1人进行角色区分，即不区分。'."\n"
                                    .'2：按2人进行角色区分。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                            ],
                            'OnlyRoleSplitResult' => [
                                'title' => '会后结果中docResult字段是否只存储角色时间戳映射信息，即不带转写文字结果，默认是false。',
                                'description' => '会后结果中docResult字段是否只存储角色时间戳映射信息，即不带转写文字结果，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID，仅用于联调。',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'title' => '状态码。',
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'title' => '状态说明。',
                                'description' => '状态说明。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'MeetingId' => [
                                        'title' => '会议ID。',
                                        'description' => '会议ID。',
                                        'type' => 'string',
                                        'example' => 'f7de74778d94422283534102dfc0****',
                                    ],
                                    'MeetingStatus' => [
                                        'title' => '会议状态。'."\n"
                                            .'NEW：新会议。'."\n"
                                            .'ONGOING：会议转写中。'."\n"
                                            .'PAUSED：会议转写暂停。'."\n"
                                            .'PRE_COMPLETE：会议转写结束后，进行会后智能提取。'."\n"
                                            .'COMPLETED：会议完成。'."\n"
                                            .'FAILED：会议转写结束后，会后智能提取失败。'."\n"
                                            .'INVALID：无效会议。',
                                        'description' => '会议状态。'."\n"
                                            .'NEW：新会议。'."\n"
                                            .'ONGOING：会议转写中。'."\n"
                                            .'PAUSED：会议转写暂停。'."\n"
                                            .'PRE_COMPLETE：会议转写结束后，进行会后智能提取。'."\n"
                                            .'COMPLETED：会议完成。'."\n"
                                            .'FAILED：会议转写结束后，会后智能提取失败。'."\n"
                                            .'INVALID：无效会议。',
                                        'type' => 'string',
                                        'example' => 'PRE_COMPLETE',
                                    ],
                                    'MeetingKey' => [
                                        'title' => '用户创建会议时设置的会议标识。',
                                        'description' => '用户创建会议时设置的会议标识。',
                                        'type' => 'string',
                                        'example' => 'meeting_123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"MeetingId\\": \\"f7de74778d94422283534102dfc0****\\",\\n    \\"MeetingStatus\\": \\"PRE_COMPLETE\\",\\n    \\"MeetingKey\\": \\"meeting_123\\"\\n  }\\n}","type":"json"}]',
            'title' => '结束实时会议',
        ],
        'CreateFileTrans' => [
            'summary' => '创建音视频转写任务。',
            'path' => '/openapi/file-trans',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'AppKey' => [
                                'title' => '管控台创建的项目AppKey。',
                                'description' => '管控台创建的项目AppKey。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'JV1sRTisRMi****',
                            ],
                            'TransKey' => [
                                'title' => '用户设置的任务标识，在任务查询或任务结束回调时会原样返回。',
                                'description' => '用户设置的任务标识，在任务查询或任务结束回调时会原样返回。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'trans_123',
                            ],
                            'AudioOssBucket' => [
                                'title' => '需要转写音频所在的OSS Bucket。',
                                'description' => '需要转写音频所在的OSS Bucket。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket',
                            ],
                            'AudioOssPath' => [
                                'title' => '需要转写音频所在的OSS文件路径或者自定义可下载文件地址（http|https）。如果AudioOssBucket非空，则需要赋值OSS文件路径（/...../*.mp3）；如果AudioOssBucket为空，则需要赋值自定义可下载文件地址（http://……/*.mp3）。',
                                'description' => '需要转写音频所在的OSS文件路径或者自定义可下载文件地址（http|https）。如果AudioOssBucket非空，则需要赋值OSS文件路径（...../*.mp3）；如果AudioOssBucket为空，则需要赋值自定义可下载文件地址（http://……/*.mp3）。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'dir1/dir2/filename'."\n"
                                    .'http://……/*.mp3',
                            ],
                            'AudioLanguage' => [
                                'title' => '音频转写使用的语言模型。'."\n"
                                    .'cn：中文。'."\n"
                                    .'en：英文。'."\n"
                                    .'yue：粤语。'."\n"
                                    .'fspk：中英文自由说。',
                                'description' => '音频转写使用的语言模型。'."\n"
                                    .'cn：中文。'."\n"
                                    .'en：英文。'."\n"
                                    .'yue：粤语。'."\n"
                                    .'fspk：中英文自由说。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'cn',
                                'enum' => [],
                            ],
                            'AudioRoleNum' => [
                                'title' => '是否开启说话人角色区分。注，只对16K及以上采样率生效'."\n"
                                    .'不设置：不使用说话人角色区分。'."\n"
                                    .'0：说话人角色区分结果为不定人数。'."\n"
                                    .'2：说话人角色区分结果为2人。',
                                'description' => '是否开启说话人角色区分。注，只对16K及以上采样率生效。'."\n"
                                    .'不设置：不使用说话人角色区分。'."\n"
                                    .'0：说话人角色区分结果为不定人数。'."\n"
                                    .'2：说话人角色区分结果为2人。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2',
                            ],
                            'AudioOutputEnabled' => [
                                'title' => '是否开启mp3格式音频转码，默认是false。',
                                'description' => '是否开启mp3格式音频转码，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'AudioOutputOssBucket' => [
                                'title' => '开启音频转码时，转码音频写入到的OSS Bucket。',
                                'description' => '开启音频转码时，转码音频写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket',
                            ],
                            'AudioOutputOssPath' => [
                                'title' => '开启音频转码时，转码音频写入到的OSS文件路径。',
                                'description' => '开启音频转码时，转码音频写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tingwu/dir/filename',
                            ],
                            'VideoOutputEnabled' => [
                                'title' => '是否开启mp4格式视频转换，用以将非mp4视频转成mp4格式，默认是false。',
                                'description' => '是否开启视频转码，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'VideoOutputOssBucket' => [
                                'title' => '开启mp4视频转换时，转换后视频写入到的OSS Bucket。',
                                'description' => '开启视频转码时，转码视频写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket',
                            ],
                            'VideoOutputOssPath' => [
                                'title' => '开启mp4视频转换时，转换后视频写入到的OSS 路径。',
                                'description' => '开启视频转码时，转码视频写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tingwu/dir/filename'."\n",
                            ],
                            'TransResultOssBucket' => [
                                'title' => '识别及智能提取结果写入到的OSS Bucket。',
                                'description' => '识别及智能提取结果写入到的OSS Bucket，需要与管控台项目配置的OSS Bucket一致。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'bucket',
                            ],
                            'TransResultOssPath' => [
                                'title' => '识别及智能提取结果写入到的OSS文件路径。'."\n"
                                    .'示例：目录/文件名',
                                'description' => '识别及智能提取结果写入到的OSS文件路径，需要以"tingwu/"为前缀。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'tingwu/dir/filename',
                            ],
                            'AudioSegmentsEnabled' => [
                                'title' => '是否开启有效音频片断检测结果写入，默认是false。',
                                'description' => '是否开启有效音频片断检测结果写入，默认是false。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'Tags' => [
                                'description' => '系统扩展：标签',
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AsrParams' => [
                                'description' => 'ASR转写的额外参数，如热词vocabulary_id',
                                'type' => 'object',
                                'required' => false,
                                'example' => '{'."\n"
                                    .'  "vocabulary_id": "e2a9a9be3128417fb4d181ebfbe8****"'."\n"
                                    .'}',
                            ],
                            'LabParams' => [
                                'description' => '系统扩展：实验转写参数',
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AbilityParams' => [
                                'description' => '能力扩展',
                                'type' => 'object',
                                'required' => false,
                            ],
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
                                'title' => '请求ID，仅用于联调。',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'title' => '状态码。',
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'title' => '状态说明。',
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'TransId' => [
                                        'title' => '任务ID。',
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'f7de74778d94422283534102dfc0****',
                                    ],
                                    'TransKey' => [
                                        'title' => '用户创建任务时设置的任务标识。',
                                        'description' => '用户创建任务时设置的任务标识。',
                                        'type' => 'string',
                                        'example' => 'trans_123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"TransId\\": \\"f7de74778d94422283534102dfc0****\\",\\n    \\"TransKey\\": \\"trans_123\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建文件转写任务',
        ],
        'GetFileTrans' => [
            'summary' => '查询音视频转写任务信息。',
            'path' => '/openapi/file-trans/{TransId}',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TransId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '任务ID。',
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'trans_123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID，仅用于联调。',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'title' => '状态码。',
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'title' => '状态说明。',
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'TransId' => [
                                        'title' => '任务ID。',
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'f7de74778d94422283534102dfc0****',
                                    ],
                                    'TransStatus' => [
                                        'title' => '任务状态。'."\n"
                                            .'ONGOING：任务进行中。'."\n"
                                            .'COMPLETED：任务完成。'."\n"
                                            .'FAILED：任务失败'."\n"
                                            .'INVALID：无效任务。',
                                        'description' => '任务状态。'."\n"
                                            .'ONGOING：任务进行中。'."\n"
                                            .'COMPLETED：任务完成。'."\n"
                                            .'FAILED：任务失败'."\n"
                                            .'INVALID：无效任务。',
                                        'type' => 'string',
                                        'example' => 'ONGOING',
                                    ],
                                    'TransKey' => [
                                        'title' => '用户创建任务时设置的任务标识。',
                                        'description' => '用户创建任务时设置的任务标识。',
                                        'type' => 'string',
                                        'example' => 'trans_123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"TransId\\": \\"f7de74778d94422283534102dfc0****\\",\\n    \\"TransStatus\\": \\"ONGOING\\",\\n    \\"TransKey\\": \\"trans_123\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询文件转写任务状态',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'tingwu.cn-beijing.aliyuncs.com',
        ],
    ],
];
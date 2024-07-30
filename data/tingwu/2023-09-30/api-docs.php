<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'tingwu',
        'version' => '2023-09-30',
    ],
    'directories' => [
        'CreateTask',
        'GetTaskInfo',
        [
            'id' => 187956,
            'title' => '热词',
            'type' => 'directory',
            'children' => [
                'CreateTranscriptionPhrases',
                'GetTranscriptionPhrases',
                'UpdateTranscriptionPhrases',
                'DeleteTranscriptionPhrases',
                'ListTranscriptionPhrases',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateTask' => [
            'summary' => '创建听悟任务，包括创建离线转写任务和实时会议任务。',
            'path' => '/openapi/tingwu/v2/tasks',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型：'."\n"
                            .'- **offline**：表示离线任务，比如离线转写'."\n"
                            .'- **realtime**：表示实时任务，比如创建实时记录',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'offline' => 'offline',
                            'realtime' => 'realtime',
                        ],
                        'example' => 'offline',
                    ],
                ],
                [
                    'name' => 'operation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作项，可选取值：'."\n"
                            ."\n"
                            .'- start：表示任务的创建，也是默认值，通常情况下无须显示设置'."\n"
                            .'- stop：停止实时会议任务，对应的是创建实时会议，在会议结束后设置为stop并触发调用；实时会议场景使用；'."\n"
                            ."\n"
                            .'需要注意：在结束实时记录时，务必设置此参数，且设置为stop。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'stop' => 'stop',
                            'start' => 'start',
                        ],
                        'example' => 'stop',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数body',
                        'description' => '请求参数body',
                        'type' => 'object',
                        'properties' => [
                            'AppKey' => [
                                'description' => '在管控台创建的项目AppKey。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'JV1sRTisRMi****',
                            ],
                            'Input' => [
                                'description' => '创建任务时设置的基本信息参数。注意不同的任务类型所需设置的必选参数并不相同。'."\n"
                                    ."\n"
                                    .'- 当type=offline，也即离线任务时，您必须设置SourceLanguage和FileUrl参数；'."\n"
                                    ."\n"
                                    .'- 当type=realtime，也即实时会议任务时，您必须额外设置SourceLanguage、Format、SampleRate参数；',
                                'type' => 'object',
                                'properties' => [
                                    'SourceLanguage' => [
                                        'title' => '离线转写/实时会议使用的语言模型。'."\n"
                                            .'cn：中文。'."\n"
                                            .'en：英文。'."\n"
                                            .'yue：粤语。'."\n"
                                            .'fspk：中英文自由说。',
                                        'description' => '音频转写使用的语言模型。 支持以下取值：'."\n"
                                            ."\n"
                                            .'- **cn**：中文'."\n"
                                            .'- **en**：英文'."\n"
                                            .'- **fspk**：中英文自由说'."\n"
                                            .'- **ja**：日文'."\n"
                                            .'- **yue**：粤语',
                                        'type' => 'string',
                                        'required' => true,
                                        'enumValueTitles' => [
                                            'ja' => '日语',
                                            'yue' => '粤语',
                                            'fspk' => '中英文自由说',
                                            'en' => '英文',
                                            'cn' => '中文',
                                        ],
                                        'example' => 'cn',
                                    ],
                                    'FileUrl' => [
                                        'title' => '创建离线转写任务时，必须填写的原始音频链接，当前支持http或https形式的链接。',
                                        'description' => '当您创建离线转写任务，设置的原始音视频文件的http(s)链接',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'http://xxx.com/zzz/1.wav',
                                    ],
                                    'TaskKey' => [
                                        'title' => '任务级别的自定义标识，用以区分不同任务，可选。如设置，建议为每一个任务设置不同的标识',
                                        'description' => '用户设置的自定义标识，用以关联本任务。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'task_tingwu_123',
                                    ],
                                    'Format' => [
                                        'title' => '音频流编码格式，支持PCM（无压缩的PCM文件或WAV文件）或OPUS（压缩的OPUS文件）。仅在创建实时会议时必选。',
                                        'description' => '您创建实时会议时，需通过该参数指定音频流数据的编码格式，比如pcm。当前支持以下取值：'."\n"
                                            ."\n"
                                            .'- **pcm**'."\n"
                                            .'- **opus**'."\n"
                                            .'- **aac**'."\n"
                                            .'- **speex**'."\n"
                                            .'- **mp3**',
                                        'type' => 'string',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'mp3' => 'mp3',
                                            'aac' => 'aac',
                                            'speex' => 'speex',
                                            'pcm' => 'pcm',
                                            'opus' => 'opus',
                                        ],
                                        'example' => 'pcm',
                                    ],
                                    'SampleRate' => [
                                        'title' => '音频流采样率，当前支持：16000/8000两种。仅在创建实时会议时必选。',
                                        'description' => '您创建实时会议时，需通过该参数指定音频流数据的采样率。当前支持8000和16000。'."\n"
                                            ."\n"
                                            .'- **8000**：电话客服类场景'."\n"
                                            .'- **16000**：实时会议音频采集场景',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            8000 => '8000',
                                            16000 => '16000',
                                        ],
                                        'example' => '16000',
                                        'enum' => [
                                            '16000',
                                            '8000',
                                        ],
                                    ],
                                    'ProgressiveCallbacksEnabled' => [
                                        'title' => '是否开启回调功能。当需要开启回调功能时，您需要在控制台配置好回调类型和地址，并在创建任务时将该参数置为true。',
                                        'description' => '是否开启回调功能。'."\n"
                                            .'当需要开启回调功能时，您需要在控制台配置好回调类型和地址，并在创建任务时将该参数置为true。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'MultipleStreamsEnabled' => [
                                        'title' => '是否开启多通道音频流识别。当且仅当在实时记录场景下才需考虑设置，默认为false',
                                        'description' => '是否开启多通道音频流识别。当且仅当在实时记录场景下才需考虑设置，默认为false',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'TaskId' => [
                                        'title' => '您创建实时记录时返回的TaskId，通过此Id，您可以结束实时记录。该参数仅在结束实时记录时设置，其他时候请不要设置。',
                                        'description' => '您创建实时记录时返回的TaskId，通过此Id，您可以结束实时记录。该参数仅在结束实时记录时设置，其他时候请不要设置。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '9922c84c087044eda18659c128b56c84',
                                    ],
                                    'OutputPath' => [
                                        'title' => '在控制台配置oss信息后，可以通过配置oss写入地址，将结果直接保存到自定义oss内。',
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Parameters' => [
                                'description' => '创建任务时设置的算法相关参数。您可以按需设置。',
                                'type' => 'object',
                                'properties' => [
                                    'Transcoding' => [
                                        'description' => '音视频或音频流转码转换模块',
                                        'type' => 'object',
                                        'properties' => [
                                            'TargetAudioFormat' => [
                                                'title' => '是否将原始音视频文件或音频流转成mp3格式保存，目前仅支持设置为mp3格式。在创建离线文件转写或实时会议时可选。',
                                                'description' => '是否将原始音视频文件或音频流转成mp3格式保存，目前仅支持设置为mp3格式。在创建离线文件转写或实时会议时可选。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'mp3',
                                                'enum' => [
                                                    'mp3',
                                                ],
                                            ],
                                            'TargetVideoFormat' => [
                                                'title' => '是否将原始视频文件转成mp4格式保存，目前仅支持设置为mp4格式。仅在创建离线文件转写且原始文件为视频格式时设置此参数有意义，通常无须设置。',
                                                'description' => '是否将原始视频文件转成mp4格式保存，目前仅支持设置为mp4格式。仅在创建离线文件转写且原始文件为视频格式时设置此参数有意义，通常无须设置。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'mp4',
                                                'enum' => [
                                                    'mp4',
                                                ],
                                            ],
                                            'VideoThumbnailEnabled' => [
                                                'title' => '是否将原始视频文件抽取视频缩略图并保存。仅在创建离线文件转写且原始文件为视频格式时设置此参数有意义，通常无须设置。',
                                                'description' => '是否将原始视频文件抽取视频缩略图并保存。仅在创建离线文件转写且原始文件为视频格式时设置此参数有意义，通常无须设置。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'enumValueTitles' => [],
                                                'example' => 'false',
                                                'default' => 'false',
                                            ],
                                            'SpectrumEnabled' => [
                                                'title' => '是否将原始音视频文件或音频流生成音频波形图并保存，目前仅支持设置为mp3格式。在创建离线文件转写或实时会议时可选。',
                                                'description' => '是否将原始音视频文件或音频流生成音频波形图并保存，目前仅支持设置为mp3格式。在创建离线文件转写或实时会议时可选。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                                'default' => 'false',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Transcription' => [
                                        'title' => '语音识别功能控制参数',
                                        'description' => '语音转写控制参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AudioEventDetectionEnabled' => [
                                                'title' => '是否在语音转写过程中开启声音事件检测，开启后，会生成声音事件检测的结果，比如Music事件等。',
                                                'description' => '是否在语音转写过程中开启声音事件检测功能，用以判断音频中是否存在比如music等事件。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                                'default' => 'false',
                                            ],
                                            'DiarizationEnabled' => [
                                                'title' => '是否在语音转写过程中开启说话人分离功能',
                                                'description' => '是否开启说话人分离功能',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                                'default' => 'false',
                                            ],
                                            'Diarization' => [
                                                'description' => '说话人分离功能参数',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SpeakerCount' => [
                                                        'title' => '是否开启说话人角色区分。注：只对16K及以上采样率生效。'."\n"
                                                            .'不设置：不使用说话人角色区分。'."\n"
                                                            .'0：说话人角色区分结果为不定人数。'."\n"
                                                            .'2：说话人角色区分结果为2人。',
                                                        'description' => '设置说话人分离参数。'."\n"
                                                            ."\n"
                                                            .'不设置：不使用说话人角色区分。 '."\n"
                                                            ."\n"
                                                            .'0：说话人角色区分结果为不定人数。'."\n"
                                                            ."\n"
                                                            .' 2：说话人角色区分结果为2人。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'enumValueTitles' => [
                                                            '0',
                                                            2 => '2',
                                                        ],
                                                        'example' => '2',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'OutputLevel' => [
                                                'title' => '设置语音识别结果返回等级。1：识别出完整句子时返回识别结果；2：识别出中间结果及完整句子时返回识别结果',
                                                'description' => '设置语音识别结果返回等级。默认值是1。'."\n"
                                                    ."\n"
                                                    .'- **1**：识别出完整句子时返回识别结果；'."\n"
                                                    ."\n"
                                                    .'- **2**：识别出中间结果及完整句子时返回识别结果',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '识别出完整句子时返回识别结果',
                                                    '识别出中间结果及完整句子时返回识别结果',
                                                ],
                                                'example' => '2',
                                                'default' => '1',
                                            ],
                                            'AdditionalStreamOutputLevel' => [
                                                'title' => '设置实时记录场景下活跃说话人对应的语音识别结果返回等级。1：识别出完整句子时返回识别结果；2：识别出中间结果及完整句子时返回识别结果(仅在实时记录场景下且MultipleStreamsEnabled=true时按需设置，离线转写场景无须设置)。',
                                                'description' => '设置实时记录场景下活跃说话人对应的语音识别结果返回等级。'."\n"
                                                    ."\n"
                                                    .'- **1**：识别出完整句子时返回识别结果；'."\n"
                                                    ."\n"
                                                    .'- **2**：识别出中间结果及完整句子时返回识别结果；'."\n"
                                                    ."\n"
                                                    .'仅在实时记录场景下且MultipleStreamsEnabled=true时按需设置，离线转写场景无须设置。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '识别出完整句子时返回识别结果',
                                                    '识别出中间结果及完整句子时返回识别结果',
                                                ],
                                                'example' => '1',
                                                'default' => '1',
                                            ],
                                            'PhraseId' => [
                                                'title' => '热词ID',
                                                'description' => '热词的词表ID',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ce9c2a34b6d847bf92a77d0a196f****',
                                            ],
                                            'Model' => [
                                                'title' => '设置语音转写模型，提升特定领域转写效果。',
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Translation' => [
                                        'title' => '语言翻译功能控制参数',
                                        'description' => '翻译功能控制参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'TargetLanguages' => [
                                                'title' => '添加待设置的目标翻译语言。 支持中文(cn)、英文(en)、日文(ja)。',
                                                'description' => '翻译功能开启时需设置目标语言。支持中英日。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '翻译功能开启时设置的目标语言。 支持以下取值：'."\n"
                                                        ."\n"
                                                        .'- **cn**：中文'."\n"
                                                        .'- **en**：英文'."\n"
                                                        .'- **ja**：日文',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enumValueTitles' => [
                                                        'ja' => '日语',
                                                        'en' => '英语',
                                                        'cn' => '中文',
                                                    ],
                                                    'example' => 'en',
                                                ],
                                                'required' => false,
                                            ],
                                            'OutputLevel' => [
                                                'title' => '设置实时语言翻译识别结果返回等级。1：识别出完整句子时返回识别结果；2：识别出中间结果及完整句子时返回识别结果(仅在实时记录场景下按需设置，离线转写场景无须设置)。',
                                                'description' => '设置实时语言翻译识别结果返回等级。默认值是1。'."\n"
                                                    ."\n"
                                                    .'- **1**：识别出完整句子时返回识别结果；'."\n"
                                                    .'- **2**：识别出中间结果及完整句子时返回识别结果。'."\n"
                                                    ."\n"
                                                    .'仅在实时记录场景下按需设置，离线转写场景无须设置。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '1',
                                                    '2',
                                                ],
                                                'example' => '2',
                                                'default' => '1',
                                            ],
                                            'AdditionalStreamOutputLevel' => [
                                                'title' => '设置实时记录场景下活跃说话人对应的语言翻译识别结果返回等级。1：识别出完整句子时返回识别结果；2：识别出中间结果及完整句子时返回识别结果(仅在实时记录场景下且MultipleStreamsEnabled=true时按需设置，离线转写场景无须设置)。',
                                                'description' => '设置实时记录场景下活跃说话人对应的语言翻译识别结果返回等级。'."\n"
                                                    ."\n"
                                                    .'- **1**：识别出完整句子时返回识别结果；'."\n"
                                                    .'- **2**：识别出中间结果及完整句子时返回识别结果；'."\n"
                                                    ."\n"
                                                    .'仅在实时记录场景下且MultipleStreamsEnabled=true时按需设置，离线转写场景无须设置。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '识别出完整句子时返回识别结果',
                                                    '识别出中间结果及完整句子时返回识别结果',
                                                ],
                                                'example' => '1',
                                                'default' => '1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'TranslationEnabled' => [
                                        'title' => '是否将语音识别内容开启翻译功能。如需翻译，此时设置为true',
                                        'description' => '是否启用翻译功能。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'AutoChaptersEnabled' => [
                                        'title' => '是否启用章节速览功能，开启后会生成章节标题和章节摘要结果。',
                                        'description' => '是否启用章节速览功能，开启后会生成章节标题和章节摘要结果。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                        'default' => 'false',
                                    ],
                                    'MeetingAssistanceEnabled' => [
                                        'title' => '是否启用智能纪要功能，开启后会生成关键词、重点内容、待办等结果(依赖传入的参数类型)。',
                                        'description' => '是否启用智能纪要功能，开启后会生成关键词、重点内容、待办等结果。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'MeetingAssistance' => [
                                        'title' => '智能纪要功能控制参数，支持待办事项、关键词、重点内容的算法处理。 若您启用MeetingAssistanceEnabled但未通过MeetingAssistance设置算法类型，则默认都进行调用和返回。',
                                        'description' => '智能纪要功能控制参数，支持待办事项、关键词、重点内容的算法处理。 若您启用MeetingAssistanceEnabled但未通过MeetingAssistance设置算法类型，则默认都进行调用和返回。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Types' => [
                                                'title' => '开启智能纪要功能时，需传入期望的功能参数类型，支持待办(Actions)、关键信息(KeyInformation)。其中关键信息包含关键词和重点内容(关键句)',
                                                'description' => '开启智能功能时，需传入期望的功能参数类型，支持待办(Actions)、关键信息(KeyInformation)。其中关键信息包含关键词和重点内容(关键句)',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '设置智能纪要功能的算法类型。可设置以下取值：'."\n"
                                                        .'- **Actions**：待办事项'."\n"
                                                        .'- **KeyInformation**：关键信息处理，含关键词、重点内容等',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enumValueTitles' => [
                                                        'Actions' => '待办事项',
                                                        'KeyInformation' => '关键信息(含关键词和重点内容)',
                                                    ],
                                                    'example' => 'Actions',
                                                ],
                                                'required' => false,
                                                'minItems' => 1,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'SummarizationEnabled' => [
                                        'title' => '是否启用摘要功能，开启后会可以生成全文摘要、发言人总结等结果(依赖传入的摘要类型)。',
                                        'description' => '是否启用摘要功能，开启后会可以生成全文摘要、发言人总结等结果',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'Summarization' => [
                                        'title' => '摘要功能控制参数',
                                        'description' => '摘要功能控制参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Types' => [
                                                'title' => '添加待设置的大模型摘要参数，支持全文摘要(Paragraph)、发言人总结摘要(Conversational)。',
                                                'description' => '开启摘要功能时，需传入期望的摘要类型，支持全文摘要(Paragraph)、发言人总结摘要(Conversational)、问答回顾摘要(QuestionsAnswering)。',
                                                'type' => 'array',
                                                'items' => [
                                                    'title' => '',
                                                    'description' => '开启摘要功能时，需传入期望的摘要类型。'."\n"
                                                        .'- **Paragraph**：全文摘要'."\n"
                                                        .'- **Conversational**：发言人总结摘要'."\n"
                                                        .'- **QuestionsAnswering**：问答回顾摘要',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enumValueTitles' => [
                                                        'Conversational' => '发言人总结摘要',
                                                        'QuestionsAnswering' => '问答回顾摘要',
                                                        'Paragraph' => '全文摘要',
                                                    ],
                                                    'example' => 'Paragraph',
                                                ],
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    'Conversational' => '发言人总结摘要',
                                                    'QuestionsAnswering' => '问答回顾',
                                                    'Paragraph' => '全文摘要',
                                                ],
                                                'example' => 'Paragraph',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'PptExtractionEnabled' => [
                                        'title' => '是否启用PPT抽取和PPT总结功能，开启后会对视频文件中的PPT进行画面抽取，并形成对应的总结',
                                        'description' => '是否启用PPT抽取和PPT总结功能，开启后会对视频文件中的PPT进行画面抽取，并形成对应的总结。 该参数建议仅在离线转写且源文件是视频文件时开启。在实时记录场景及离线转写但源文件仅是音频输入场景下无法生成结果。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'TextPolishEnabled' => [
                                        'title' => '是否启用口语书面化，开启后会对音频转写结果进行润色，输出更为规范的文本结果',
                                        'description' => '是否启用口语书面化功能。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                        'default' => 'false',
                                    ],
                                    'CustomPromptEnabled' => [
                                        'title' => '是否启用自定义Prompt，开启后可以输入个性化定制Prompt。',
                                        'description' => '是否启用自定义Prompt功能。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                    ],
                                    'CustomPrompt' => [
                                        'title' => '自定义Prompt的主要参数。',
                                        'description' => '自定义Prompt控制参数对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Contents' => [
                                                'title' => '自定义Prompt的参数列表。',
                                                'description' => '自定义Prompt的参数列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '占位符',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'title' => 'Prompt的自定义名称，用于匹配输出结果。',
                                                            'description' => 'Prompt的自定义名称，用于匹配输出结果。',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => 'summary-demo',
                                                        ],
                                                        'Prompt' => [
                                                            'title' => 'Prompt的自定义内容。',
                                                            'description' => 'Prompt的自定义内容。',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => '总结一下下面的对话内容:{Transcription}',
                                                        ],
                                                        'Model' => [
                                                            'title' => '指定Prompt的模型。',
                                                            'description' => '指定Prompt的模型。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'tingwu-turbo',
                                                        ],
                                                        'TransType' => [
                                                            'title' => '指定{Transcription}标签格式。',
                                                            'description' => '指定{Transcription}标签格式。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'default',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'ExtraParams' => [
                                        'title' => '用以设置某些特殊场景或特殊配置参数，通常情况无须设置。',
                                        'description' => '扩展参数，通常情况无须设置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'NfixEnabled' => [
                                                'title' => '是否启用Nfix。通常情况无须设置。',
                                                'description' => '是否启用nfix，通常情况无须设置。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'true',
                                            ],
                                            'MaxKeywords' => [
                                                'title' => '指定关键词的数量。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'DomainEducationEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'OcrAuxiliaryEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'TranslateLlmSceneEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
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
                                'title' => 'Id of the request',
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务id',
                                        'type' => 'string',
                                        'example' => 'c5394c6ee0fb474899d42215a3925c7e',
                                    ],
                                    'TaskKey' => [
                                        'description' => '用户创建任务时设置的自定义标识。',
                                        'type' => 'string',
                                        'example' => 'task_tingwu_123',
                                    ],
                                    'MeetingJoinUrl' => [
                                        'title' => '实时记录场景下生成的音频流推送地址，您可以在后续实时音频流识别时通过该地址进行',
                                        'description' => '实时记录场景下生成的音频流推送地址，您可以在后续实时音频流识别时通过该地址进行',
                                        'type' => 'string',
                                        'example' => 'wss://tingwu-realtime-cn-beijing.aliyuncs.com/api/ws/v1?mc=****',
                                    ],
                                    'TaskStatus' => [
                                        'title' => '任务状态',
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'example' => 'ONGOING',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"c5394c6ee0fb474899d42215a3925c7e\\",\\n    \\"TaskKey\\": \\"task_tingwu_123\\",\\n    \\"MeetingJoinUrl\\": \\"wss://tingwu-realtime-cn-beijing.aliyuncs.com/api/ws/v1?mc=****\\",\\n    \\"TaskStatus\\": \\"ONGOING\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建听悟任务',
        ],
        'GetTaskInfo' => [
            'summary' => '查询任务状态和任务结果。',
            'path' => '/openapi/tingwu/v2/tasks/{TaskId}',
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
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '创建任务时生成的TaskId',
                        'description' => '创建任务时返回的TaskId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c5394c6ee0fb474899d42215a3925c7e',
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
                                'description' => '请求ID，仅用于联调。',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'c5394c6ee0fb474899d42215a3925c7e',
                                    ],
                                    'TaskKey' => [
                                        'title' => '该任务由用户自定义的TaskKey， 此处原样返回。',
                                        'description' => '用户创建任务时设置的自定义标识。',
                                        'type' => 'string',
                                        'example' => 'task_tingwu_123',
                                    ],
                                    'TaskStatus' => [
                                        'title' => '任务状态',
                                        'description' => '任务状态。 '."\n"
                                            ."\n"
                                            .'- ONGOING：任务进行中。 '."\n"
                                            .'- COMPLETED：任务完成。 '."\n"
                                            .'- FAILED：任务失败 '."\n"
                                            .'- INVALID：无效任务。',
                                        'type' => 'string',
                                        'example' => 'COMPLETED',
                                    ],
                                    'OutputMp3Path' => [
                                        'title' => 'mp3转换结果的url链接',
                                        'description' => 'mp3转换结果的url链接',
                                        'type' => 'string',
                                        'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.mp3?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D',
                                    ],
                                    'OutputMp4Path' => [
                                        'title' => 'mp4转换结果的url链接',
                                        'description' => 'mp4转换结果的url链接',
                                        'type' => 'string',
                                        'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.mp4?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D',
                                    ],
                                    'OutputThumbnailPath' => [
                                        'title' => '视频缩略图的url链接',
                                        'description' => '视频缩略图的url链接',
                                        'type' => 'string',
                                        'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.png?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D',
                                    ],
                                    'OutputSpectrumPath' => [
                                        'title' => '音频波形图的url链接',
                                        'description' => '音频波形图的url链接',
                                        'type' => 'string',
                                        'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.spectrum?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D',
                                    ],
                                    'ErrorCode' => [
                                        'title' => '错误码',
                                        'description' => '错误码',
                                        'type' => 'string',
                                        'example' => 'TSC.AudioFormat',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '错误信息',
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => 'Audio format invalid.',
                                    ],
                                    'Result' => [
                                        'title' => '各类算法处理的结果集合。该结果以http链接的形式返回，用户可基于该链接解析原生结果。',
                                        'description' => '各类算法处理的结果集合。该结果以http链接的形式返回，用户可基于该链接解析原生结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Transcription' => [
                                                'title' => '语音转写对应的结果url链接。',
                                                'description' => '语音转写对应的结果url链接。',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Transcription_20231222101008.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D',
                                            ],
                                            'AutoChapters' => [
                                                'title' => '章节速览功能对应的结果url链接。',
                                                'description' => '章节速览功能对应的结果url链接。',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_AutoChapters_20231222101215.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=NeZHz4XVUmqq8kuuW2js***%3D',
                                            ],
                                            'MeetingAssistance' => [
                                                'title' => '智能纪要对应的结果url链接',
                                                'description' => '智能纪要对应的结果url链接',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_MeetingAssistance_20231222101112.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=anNq72XSJxRYpQoTlprgnl***%3D',
                                            ],
                                            'Summarization' => [
                                                'title' => '大模型摘要对应的结果url链接。',
                                                'description' => '大模型摘要对应的结果url链接。',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Summarization_20231222101215.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5***&amp;Signature=cNhmUfpblutJNCV64Tat3R***%3D',
                                            ],
                                            'Translation' => [
                                                'title' => '文本翻译对应的结果url链接',
                                                'description' => '文本翻译对应的结果url链接',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Translation_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D',
                                            ],
                                            'PptExtraction' => [
                                                'title' => '视频PPT抽取和总结对应的结果url链接',
                                                'description' => '视频PPT抽取和总结对应的结果url链接',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_PptExtraction_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D',
                                            ],
                                            'TextPolish' => [
                                                'title' => '口语书面化对应的结果url链接',
                                                'description' => '口语书面化对应的结果url链接',
                                                'type' => 'string',
                                                'example' => 'http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_TextPolish_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"c5394c6ee0fb474899d42215a3925c7e\\",\\n    \\"TaskKey\\": \\"task_tingwu_123\\",\\n    \\"TaskStatus\\": \\"COMPLETED\\",\\n    \\"OutputMp3Path\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.mp3?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D\\",\\n    \\"OutputMp4Path\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.mp4?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D\\",\\n    \\"OutputThumbnailPath\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.png?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D\\",\\n    \\"OutputSpectrumPath\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_20231222101008.spectrum?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D\\",\\n    \\"ErrorCode\\": \\"TSC.AudioFormat\\",\\n    \\"ErrorMessage\\": \\"Audio format invalid.\\",\\n    \\"Result\\": {\\n      \\"Transcription\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Transcription_20231222101008.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=vubbMkkhkoNwDG5JvaY0VvSs***%3D\\",\\n      \\"AutoChapters\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_AutoChapters_20231222101215.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=NeZHz4XVUmqq8kuuW2js***%3D\\",\\n      \\"MeetingAssistance\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_MeetingAssistance_20231222101112.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5S***&amp;Signature=anNq72XSJxRYpQoTlprgnl***%3D\\",\\n      \\"Summarization\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Summarization_20231222101215.json?Expires=1706064016&amp;OSSAccessKeyId=LTAI4t5***&amp;Signature=cNhmUfpblutJNCV64Tat3R***%3D\\",\\n      \\"Translation\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_Translation_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D\\",\\n      \\"PptExtraction\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_PptExtraction_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D\\",\\n      \\"TextPolish\\": \\"http://xxxx.com/tingwu/output/1738248324/094e964bf0e04e39/094e964bf0e04e39_TextPolish_20231222101215.json?Expires=1706064016&OSSAccessKeyId=LTAI4t5S***&Signature=NeZHz4XVUmqq8kuuW2jsHG***%3D\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询任务状态和任务结果',
        ],
        'CreateTranscriptionPhrases' => [
            'summary' => '创建热词词表。',
            'path' => '/openapi/tingwu/v2/resources/phrases',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数body',
                        'description' => '请求参数body',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '词表名称。',
                                'description' => '词表名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'fruit_phrase',
                                'maxLength' => 50,
                                'minLength' => 1,
                            ],
                            'Description' => [
                                'title' => '词表描述信息。',
                                'description' => '词表描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'custom fruit phrases list',
                                'maxLength' => 250,
                                'minLength' => 1,
                            ],
                            'WordWeights' => [
                                'title' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                'description' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{"苹果":3,"西瓜":3}',
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'title' => '返回对象。',
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'title' => '操作是否成功。',
                                        'description' => '操作是否成功。',
                                        'type' => 'string',
                                        'example' => 'SUCCEEDED',
                                    ],
                                    'PhraseId' => [
                                        'title' => '词表ID。',
                                        'description' => '词表ID。',
                                        'type' => 'string',
                                        'example' => 'a93b91141c0f422fa114af203f8b****',
                                    ],
                                    'ErrorCode' => [
                                        'title' => '错误码。',
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '错误信息。',
                                        'description' => '错误信息。',
                                        'type' => 'string',
                                        'example' => 'success',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"SUCCEEDED\\",\\n    \\"PhraseId\\": \\"a93b91141c0f422fa114af203f8b****\\",\\n    \\"ErrorCode\\": \\"0\\",\\n    \\"ErrorMessage\\": \\"success\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建热词词表',
        ],
        'GetTranscriptionPhrases' => [
            'summary' => '查询热词词表信息。',
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'PhraseId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '词表ID。',
                        'description' => '词表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a93b91141c0f422fa114af203f8b****',
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
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'title' => '操作是否成功。',
                                        'description' => '操作是否成功。',
                                        'type' => 'string',
                                        'example' => 'SUCCEEDED',
                                    ],
                                    'ErrorCode' => [
                                        'title' => '错误码。',
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '错误信息。',
                                        'description' => '错误信息。',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                    'Phrases' => [
                                        'description' => '热词对象，',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhraseId' => [
                                                    'title' => '词表ID。',
                                                    'description' => '词表ID。',
                                                    'type' => 'string',
                                                    'example' => 'a93b91141c0f422fa114af203f8b****',
                                                ],
                                                'Name' => [
                                                    'title' => '词表名称。',
                                                    'description' => '词表名称。',
                                                    'type' => 'string',
                                                    'example' => 'fruit_phrase',
                                                ],
                                                'Description' => [
                                                    'title' => '词表描述信息。',
                                                    'description' => '词表描述信息。',
                                                    'type' => 'string',
                                                    'example' => 'custom fruit phrases list',
                                                ],
                                                'WordWeights' => [
                                                    'title' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                                    'description' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                                    'type' => 'string',
                                                    'example' => '{"苹果":3,"西瓜":3}',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"SUCCEEDED\\",\\n    \\"ErrorCode\\": \\"0\\",\\n    \\"ErrorMessage\\": \\"success\\",\\n    \\"Phrases\\": [\\n      {\\n        \\"PhraseId\\": \\"a93b91141c0f422fa114af203f8b****\\",\\n        \\"Name\\": \\"fruit_phrase\\",\\n        \\"Description\\": \\"custom fruit phrases list\\",\\n        \\"WordWeights\\": \\"{\\\\\\"苹果\\\\\\":3,\\\\\\"西瓜\\\\\\":3}\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询热词词表',
        ],
        'UpdateTranscriptionPhrases' => [
            'summary' => '更新热词词表。',
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'PhraseId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '词表ID。',
                        'description' => '词表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a93b91141c0f422fa114af203f8b****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数body',
                        'description' => '请求参数body',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '词表名称。',
                                'description' => '词表名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'fruit_phrase',
                                'maxLength' => 50,
                                'minLength' => 1,
                            ],
                            'Description' => [
                                'title' => '词表描述信息。',
                                'description' => '词表描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'custom fruit phrases list',
                                'maxLength' => 250,
                                'minLength' => 1,
                            ],
                            'WordWeights' => [
                                'title' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                'description' => '词表里的词和对应的权重，为JSON的Map格式字符串。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{"苹果":3,"西瓜":3}',
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'title' => '操作是否成功。',
                                        'description' => '操作是否成功。',
                                        'type' => 'string',
                                        'example' => 'SUCCEEDED',
                                    ],
                                    'ErrorCode' => [
                                        'title' => '错误码。',
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '错误信息。',
                                        'description' => '错误信息。',
                                        'type' => 'string',
                                        'example' => 'success',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"SUCCEEDED\\",\\n    \\"ErrorCode\\": \\"0\\",\\n    \\"ErrorMessage\\": \\"success\\"\\n  }\\n}","type":"json"}]',
            'title' => '更新热词词表',
        ],
        'DeleteTranscriptionPhrases' => [
            'summary' => '删除词表。',
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'PhraseId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '词表ID。',
                        'description' => '词表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a93b91141c0f422fa114af203f8b****',
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
                            'Status' => [
                                'title' => '操作是否成功。',
                                'description' => '操作是否成功。',
                                'type' => 'string',
                                'example' => 'SUCCEEDED',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"SUCCEEDED\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"ErrorMessage\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '删除热词词表',
        ],
        'ListTranscriptionPhrases' => [
            'summary' => '列举用户所有热词词表信息。',
            'path' => '/openapi/tingwu/v2/resources/phrases',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [],
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
                                'example' => '35124E1C-AE99-5D6C-A52E-BD689D8D****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '状态说明。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'title' => '操作是否成功。',
                                        'description' => '操作是否成功。',
                                        'type' => 'string',
                                        'example' => 'SUCCEEDED',
                                    ],
                                    'ErrorCode' => [
                                        'title' => '错误码。',
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => 'PHS.Exceed',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '错误信息。',
                                        'description' => '错误信息。',
                                        'type' => 'string',
                                        'example' => 'The num of the phrase exceeds the upper limit.',
                                    ],
                                    'Phrases' => [
                                        'description' => '热词对象，',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhraseId' => [
                                                    'title' => '词表ID。',
                                                    'description' => '词表ID。',
                                                    'type' => 'string',
                                                    'example' => 'a93b91141c0f422fa114af203f8b****',
                                                ],
                                                'Name' => [
                                                    'title' => '词表名称。',
                                                    'description' => '词表名称。',
                                                    'type' => 'string',
                                                    'example' => 'fruit_phrase',
                                                ],
                                                'Description' => [
                                                    'title' => '词表描述信息。',
                                                    'description' => '词表描述信息。',
                                                    'type' => 'string',
                                                    'example' => 'custom fruit phrases list',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35124E1C-AE99-5D6C-A52E-BD689D8D****\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"SUCCEEDED\\",\\n    \\"ErrorCode\\": \\"PHS.Exceed\\",\\n    \\"ErrorMessage\\": \\"The num of the phrase exceeds the upper limit.\\",\\n    \\"Phrases\\": [\\n      {\\n        \\"PhraseId\\": \\"a93b91141c0f422fa114af203f8b****\\",\\n        \\"Name\\": \\"fruit_phrase\\",\\n        \\"Description\\": \\"custom fruit phrases list\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '列举热词词表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'tingwu.cn-beijing.aliyuncs.com',
        ],
    ],
];
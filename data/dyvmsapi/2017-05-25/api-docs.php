<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dyvmsapi',
        'version' => '2017-05-25',
    ],
    'directories' => [
        [
            'id' => 141310,
            'title' => '发送语音通知',
            'type' => 'directory',
            'children' => [
                'SingleCallByVoice',
            ],
        ],
        [
            'id' => 141312,
            'title' => '发送语音验证码',
            'type' => 'directory',
            'children' => [
                'SingleCallByTts',
            ],
        ],
        [
            'id' => 141318,
            'title' => '语音通话任务',
            'type' => 'directory',
            'children' => [
                'CreateCallTask',
                'ListCallTask',
                'ExecuteCallTask',
                'ListCallTaskDetail',
            ],
        ],
        [
            'id' => 141314,
            'title' => '虚拟号码',
            'type' => 'directory',
            'children' => [
                'AddVirtualNumberRelation',
                'QueryVirtualNumber',
                'QueryVirtualNumberRelation',
            ],
        ],
        [
            'id' => 141360,
            'title' => '查询语音文件审核状态',
            'type' => 'directory',
            'children' => [
                'QueryVoiceFileAuditInfo',
            ],
        ],
        [
            'id' => 141331,
            'title' => '查询呼叫详情',
            'type' => 'directory',
            'children' => [
                'QueryCallDetailByCallId',
            ],
        ],
        [
            'id' => 141323,
            'title' => '交互式语音通话',
            'type' => 'directory',
            'children' => [
                'IvrCall',
            ],
        ],
        [
            'id' => 141328,
            'title' => '智能语音交互通话',
            'type' => 'directory',
            'children' => [
                'SmartCall',
                'SmartCallOperate',
            ],
        ],
        [
            'id' => 141333,
            'title' => '智能语音机器人',
            'type' => 'directory',
            'children' => [
                'CreateRobotTask',
                'BatchRobotSmartCall',
                'StartRobotTask',
                'StopRobotTask',
                'CancelOrderRobotTask',
                'CancelRobotTask',
                'DeleteRobotTask',
                'QueryRobotv2AllList',
                'QueryRobotTaskList',
                'QueryCallDetailByTaskId',
                'QueryRobotTaskDetail',
                'QueryRobotTaskCallList',
                'QueryRobotInfoList',
                'QueryRobotTaskCallDetail',
                'UploadRobotTaskCalledFile',
            ],
        ],
        [
            'id' => 141349,
            'title' => '400号码',
            'type' => 'directory',
            'children' => [
                'GetHotlineQualificationByOrder',
                'ListHotlineTransferRegisterFile',
                'SubmitHotlineTransferRegister',
                'SetTransferCalleePoolConfig',
                'QueryCallInPoolTransferConfig',
                'QueryCallInTransferRecord',
                'ListHotlineTransferNumber',
                'SendVerification',
            ],
        ],
        [
            'id' => 191750,
            'title' => '5G视频通话（邀约制）',
            'type' => 'directory',
            'children' => [
                'SingleCallByVideo',
                'PlayVideoFile',
                'PauseVideoFile',
                'ResumeVideoFile',
                'QueryVideoPlayProgress',
                'UpgradeVideoFile',
                'DegradeVideoFile',
                'SkipVideoFile',
                'GetCallMediaType',
                'GetTemporaryFileUrl',
            ],
        ],
        [
            'id' => 141358,
            'title' => '获取认证Token',
            'type' => 'directory',
            'children' => [
                'GetToken',
            ],
        ],
        [
            'id' => 166959,
            'title' => '400号码呼转设置',
            'type' => 'directory',
            'children' => [
                'RecoverCallInConfig',
                'StopCallInConfig',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SingleCallByVoice' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送语音通知的外呼号码（被叫显号）。'."\n"
                            ."\n"
                            .'- 如果您使用的外呼号码是公共模式，该参数不填。公共模式详情请参见[公共模式](~~172104~~)。'."\n"
                            .'- 如果您使用的外呼号码是专属模式，请传入您的**真实号码**或**虚拟号码**。'."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)，在**真实号管理**页面查看已购买的**真实号**，在**虚拟号管理**页面查看已创建并绑定真实号的**虚拟号**。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收语音通知的被叫号码。'."\n"
                            ."\n"
                            .'号码格式：'."\n"
                            .'- 手机号码。示例：159****0000。'."\n"
                            .'- 固话号码。示例：0571****5678。'."\n"
                            .'- 国际区号+号码。示例：85200****00。'."\n"
                            .'> - 调用一次接口仅支持添加一个被叫号码。如果有多个被叫号码，可以多次调用。'."\n"
                            .'> - 针对同一个**资质信息+号码用途**，主叫号码拨打每一个被叫号码的频次进行限制：1次/分钟、5次/小时、20次/24小时。 流控规则计时从第一次正常外呼开始，超过这个频率就会触发流控。呼叫成功或失败都会消耗一次流控频率。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '159****0000',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通知文件的语音ID。'."\n"
                            ."\n"
                            .'您登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)在以下页面获取语音ID，该语音通知文件必须已审核通过。'."\n"
                            ."\n"
                            .'- 在**语音消息**>**语音通知**>**语音通知文件**页面获取**语音ID**。'."\n"
                            ."\n"
                            .'- 在**语音文件管理**>**语音通知文件**页面获取**语音ID**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2d4c-4e78-8d2a-afbb06cf****.wav',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通知文件的播放次数。取值范围：**1~3**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通知文件播放的音量。取值范围：**0~100**，默认取值**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件播放的语速。取值范围：**-500~500**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方的ID，最终会通过回执消息将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度限制为1~15个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22596****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回**OK**代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E50FFA85-0B79-4421-A7BD-00B0A271966F',
                            ],
                            'CallId' => [
                                'description' => '此次通话的唯一回执ID。'."\n"
                                    ."\n"
                                    .'可以使用CallId，调用[QueryCallDetailByCallId](~~393529~~)接口查询指定通话详情。',
                                'type' => 'string',
                                'example' => '116004767703^102806****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"E50FFA85-0B79-4421-A7BD-00B0A271966F\\",\\n  \\"CallId\\": \\"116004767703^102806****\\"\\n}","type":"json"}]',
            'title' => '发送语音通知文件类型的语音通知',
            'summary' => '调用接口给单个被叫号码发送语音通知文件类型的语音通知。',
            'description' => '- 请在使用该接口前，已了解语音服务[产品计费](https://help.aliyun.com/zh/vms/product-overview/voice-services-pricing-in-china?spm=a2c4g.11186623.0.0.1c2634a9SvgvjR)。'."\n"
                ."\n"
                .'- 如果语音通知文件中带变量参数，请使用[SingleCallByTts](~~393519~~)接口发送语音通知。'."\n"
                ."\n"
                .'- 如果需要批量发送语音任务，请使用[CreateCallTask](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-createcalltask?spm=a2c4g.11186623.0.0.12771c4esA3Fbv)接口创建语音任务。'."\n"
                ."\n"
                .'- 语音套餐包或语音计费相关，请参见[国内语音服务定价](~~150083~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：1200次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SingleCallByTts' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送语音通知或语音验证码的外呼号码（被叫显号）。'."\n"
                            ."\n"
                            .'- 如果您使用的外呼号码是公共模式，该参数不填。公共模式详情请参见[公共模式](~~172104~~)。'."\n"
                            .'- 如果您使用的外呼号码是专属模式，请传入您的**真实号码**或**虚拟号码**。'."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)，在**真实号管理**页面查看已购买的**真实号**，在**虚拟号管理**页面查看已创建并绑定真实号的**虚拟号**。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收语音通知或语音验证码的被叫号码。'."\n"
                            ."\n"
                            .'号码格式：'."\n"
                            .'- 手机号码。示例：159****0000。'."\n"
                            .'- 固话号码。示例：0571****5678。'."\n"
                            .'- 国际区号+号码。示例：85200****00。'."\n"
                            .'> - 调用一次接口仅支持添加一个被叫号码。如果有多个被叫号码，可以多次调用。'."\n"
                            .'> - 针对同一个**资质信息+号码用途**，主叫号码拨打每一个被叫号码的频次进行限制：1次/分钟、5次/小时、20次/24小时。 流控规则计时从第一次正常外呼开始，超过这个频率就会触发流控。呼叫成功或失败都会消耗一次流控频率。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1590****000',
                    ],
                ],
                [
                    'name' => 'TtsCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本转语音模板或语音验证码模板的模板ID。'."\n"
                            ."\n"
                            .'您登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在以下页面获取模板ID，语音模板必须已通过审核。'."\n"
                            ."\n"
                            .'- 在**语音消息**>**语音验证码**获取**模板ID**。'."\n"
                            .'- 在**语音消息**>**语音通知**页面获取**模板ID**。'."\n"
                            ."\n"
                            .'> 语音模板归属账号和调用该接口的账号需保持一致。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TTS_28726****',
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音模板中的变量参数，JSON格式。'."\n"
                            .'变量规范详情，请参见[模板规范](https://help.aliyun.com/zh/vms/user-guide/voice-template-specification?spm=a2c4g.11186623.0.0.6ebf68529bX2fG)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"AckNum":"123456"}',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件或语音验证的播放次数。取值范围：**1~3**，默认取值**3**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通话的音量。取值范围：**0~100**，默认取值**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通话的语速。取值范围为：**-500~500**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发起请求时预留给调用方的自定义ID，最终会通过回执消息将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度限制为1~15个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '225869*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                            'CallId' => [
                                'description' => '此次通话的唯一回执ID。'."\n"
                                    ."\n"
                                    .'可以使用CallId，调用[QueryCallDetailByCallId](~~393529~~)接口查询呼叫详情。',
                                'type' => 'string',
                                'example' => '116012354148^10281378****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\",\\n  \\"CallId\\": \\"116012354148^10281378****\\"\\n}","type":"json"}]',
            'title' => '发送语音验证码或文本转语音类型的语音通知',
            'summary' => '调用接口给单个被叫号码发送语音验证码、文本转语音类型的语音通知、语音通知文件中带变量参数的语音通知。',
            'description' => '- 如果需要批量发送语音任务，请使用[CreateCallTask](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-createcalltask?spm=a2c4g.11186623.0.0.12771c4esA3Fbv)接口创建语音任务。'."\n"
                ."\n"
                .'- 语音套餐包或语音计费相关，请参见[国内语音服务定价](~~150083~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：1000次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateCallTask' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话的任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '语音通知',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音模板类型。取值：'."\n"
                            ."\n"
                            .'- **VMS\\_VOICE_TTS**：语音通知文本转语音模板。'."\n"
                            ."\n"
                            .'- **VMS\\_VOICE_CODE**：语音通知文件模板。'."\n"
                            ."\n"
                            .'- **VMS_TTS**：语音验证码模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VMS_VOICE_CODE',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板Code。'."\n"
                            ."\n"
                            .'- 如果是语音通知文本转语音模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/textToVoice)**文本转语音模板**页面获取**模板ID**。'."\n"
                            ."\n"
                            .'- 如果是语音通知文件模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/voiceFiles)**语音通知文件**页面获取**语音ID**。'."\n"
                            ."\n"
                            .'- 如果是语音验证码模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/code/list)**语音验证码**页面获取**模板ID**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TTS_2122****',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。'."\n"
                            .'- 如果是语音通知文本转语音模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/textToVoice)**文本转语音模板**页面获取**模板名称**。'."\n"
                            ."\n"
                            .'- 如果是语音通知文件模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/voiceFiles)**语音通知文件**页面获取**语音文件名**。'."\n"
                            ."\n"
                            .'- 如果是语音验证码模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/code/list)**语音验证码**页面获取**模板名称**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '语音通知模板',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码类型。固定取值：**LIST**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LIST',
                        'default' => 'LIST',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码。目前仅支持虚拟号码。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台](https://dyvms.console.aliyun.com/virtual/list)**虚拟号管理**页面获取虚拟号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '05516214****',
                    ],
                ],
                [
                    'name' => 'DataType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码类型。取值：'."\n"
                            ."\n"
                            .'- **LIST**：用半角逗号（,）分隔被叫号码。'."\n"
                            .'- **JSON**：JSON格式带模板参数的被叫号码列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'JSON',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。'."\n"
                            ."\n"
                            .'- 当**DataType**取值为**LIST**时，被叫号码填写的格式为LIST格式。'."\n"
                            .'- 当**DataType**取值为**JSON**时，被叫号码填写的格式为JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' { "paramNames":["name1","name2","key3"], "calleeList":[ { "callee":"1310000****", "params":["zangsan","zhangsan01","zhangsan02"] }, { "callee":"1310000****", "params":["zangsan","zhangsan01","zhangsan02"] } ] }',
                    ],
                ],
                [
                    'name' => 'FireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不可用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StopTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不可用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ScheduleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不可用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '任务ID。使用此任务ID，通过[ExecuteCallTask](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-executecalltask?spm=a2c4g.11186623.0.0.2fb55105AJKYdF)接口执行通话任务。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '18390**',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ED815433-724A-4357-9991-A54AD2FF09FD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Data\\": 0,\\n  \\"RequestId\\": \\"ED815433-724A-4357-9991-A54AD2FF09FD\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateCallTaskResponse>\\n    <Code>200</Code>\\n    <Data>123456</Data>\\n    <RequestId>ED815433-724A-4357-9991-A54AD2FF09FD</RequestId>\\n</CreateCallTaskResponse>","errorExample":""}]',
            'title' => '创建语音通话任务',
            'summary' => '使用虚拟号码给多个被叫号码创建文本转语音任务、语音通知任务和语音验证码任务。',
            'description' => '-  此接口仅支持使用虚拟号码给多个被叫号码创建通话任务。'."\n"
                ."\n"
                .'- [SingleCallByVoice](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvoice?spm=a2c4g.11186623.0.0.dc151c4elLv0sp)或[SingleCallByTts](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbytts?spm=a2c4g.11186623.0.0.2ed01c4eCu7ByW)接口支持使用真实号码或虚拟号码给单个被叫号码发送语音通知或语音验证码，如果需要批量发送，可以多次调用。'."\n"
                ."\n"
                .'- 通话任务创建完成后，请使用[ExecuteCallTask](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-executecalltask?spm=a2c4g.11186623.0.0.4f7f7733uyZpO3)接口执行通话任务。您也可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面执行通话任务。'."\n"
                ."\n"
                .'- 使用此接口创建一次通话任务，最多支持创建1000条语音通知任务。'."\n"
                ."\n\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
        ],
        'ListCallTask' => [
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示的任务个数。默认取值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。'."\n"
                            .'- 如果是语音通知文本转语音模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/textToVoice)**文本转语音模板**页面获取**模板名称**。'."\n"
                            ."\n"
                            .'- 如果是语音通知文件模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/notify/list/voiceFiles)**语音通知文件**页面获取**语音文件名**。'."\n"
                            ."\n"
                            .'- 如果是语音验证码模板，可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/code/list)**语音验证码**页面获取**模板名称**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '身份验证',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。取值：'."\n"
                            ."\n"
                            .'- **INIT**：新建任务，任务未启动。'."\n"
                            .'- **RELEASE**：任务解析中。'."\n"
                            .'- **RUNNING**：任务运行中。'."\n"
                            .'- **STOP**：任务暂停。'."\n"
                            .'- **SYSTEM_STOP**：系统暂停。'."\n"
                            .'- **CANCEL**：任务取消。'."\n"
                            .'- **SYSTEM_CANCEL**：系统取消。'."\n"
                            .'- **DONE**：任务已完成。'."\n"
                            ."\n"
                            .'> 您可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，查看任务状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INIT',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，查看任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '验证码',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。'."\n"
                            ."\n"
                            .'- 通过[CreateCallTask接口](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-createcalltask?spm=a2c4g.11186623.0.0.51c25dac5r5vgj)获取任务ID。'."\n"
                            ."\n"
                            .'- 在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，查看任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18908**',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务模板类型。取值：'."\n"
                            ."\n"
                            .'- **VMS_VOICE_TTS**：语音通知文本转语音模板。'."\n"
                            .'- **VMS_VOICE_CODE**：语音通知文件模板。'."\n"
                            .'- **VMS_TTS**：语音验证码模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VMS_TTS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回200代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'PageSize' => [
                                'description' => '每页显示的任务个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5B0F201F-DCDA-45C2-AA92-1AE177F94991',
                            ],
                            'Total' => [
                                'description' => '任务总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '任务信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- **INIT**：新建任务，任务未启动。'."\n"
                                                .'- **RELEASE**：任务解析中。'."\n"
                                                .'- **RUNNING**：任务运行中。'."\n"
                                                .'- **STOP**：任务暂停。'."\n"
                                                .'- **SYSTEM_STOP**：系统暂停。'."\n"
                                                .'- **CANCEL**：任务取消。'."\n"
                                                .'- **SYSTEM_CANCEL**：系统取消。'."\n"
                                                .'- **DONE**：任务已完成。'."\n"
                                                ."\n"
                                                .'> 您可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，查看任务状态。',
                                            'type' => 'string',
                                            'example' => 'INIT'."\n",
                                        ],
                                        'Data' => [
                                            'description' => '返回的任务状态数据。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'DataType' => [
                                            'description' => '被叫号码类型。'."\n"
                                                ."\n"
                                                .'在[创建通话任务](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-createcalltask?spm=a2c4g.11186623.0.0.c24e3a52pFfNZV)时已选择被叫号码类型。',
                                            'type' => 'string',
                                            'example' => 'LIST',
                                        ],
                                        'TaskName' => [
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => '验证码',
                                        ],
                                        'CompletedCount' => [
                                            'description' => '已完成任务的个数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'TotalCount' => [
                                            'description' => '被叫号码总数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => '身份验证',
                                        ],
                                        'StopTime' => [
                                            'description' => '任务暂停时间。',
                                            'type' => 'string',
                                            'example' => '1614332378000',
                                        ],
                                        'BizType' => [
                                            'description' => '任务模板类型。取值：'."\n"
                                                ."\n"
                                                .'- **VMS_VOICE_TTS**：语音通知文本转语音模版。'."\n"
                                                .'- **VMS_VOICE_CODE**：语音通知文件模版。'."\n"
                                                .'- **VMS_TTS**：语音验证码模版。',
                                            'type' => 'string',
                                            'example' => 'VMS_TTS',
                                        ],
                                        'Resource' => [
                                            'description' => '主叫号码。',
                                            'type' => 'string',
                                            'example' => '0571000****',
                                        ],
                                        'TemplateCode' => [
                                            'description' => '语音模板ID。',
                                            'type' => 'string',
                                            'example' => 'TTS_28292****',
                                        ],
                                        'FireTime' => [
                                            'description' => '定时启动任务。Unix时间戳格式，单位：毫秒。',
                                            'type' => 'string',
                                            'example' => '1614330978000',
                                        ],
                                        'CompleteTime' => [
                                            'description' => '任务完成时间。Unix时间戳格式，单位：毫秒。',
                                            'type' => 'string',
                                            'example' => '1614330986000',
                                        ],
                                        'CompletedRate' => [
                                            'description' => '任务执行进度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '26%',
                                        ],
                                        'Id' => [
                                            'description' => '任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1605***',
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
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"5B0F201F-DCDA-45C2-AA92-1AE177F94991\\",\\n  \\"Total\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": \\"INIT\\\\n\\",\\n      \\"Data\\": \\"1\\",\\n      \\"DataType\\": \\"LIST\\",\\n      \\"TaskName\\": \\"验证码\\",\\n      \\"CompletedCount\\": 2,\\n      \\"TotalCount\\": 6,\\n      \\"TemplateName\\": \\"身份验证\\",\\n      \\"StopTime\\": \\"1614332378000\\",\\n      \\"BizType\\": \\"VMS_TTS\\",\\n      \\"Resource\\": \\"0571000****\\",\\n      \\"TemplateCode\\": \\"TTS_28292****\\",\\n      \\"FireTime\\": \\"1614330978000\\",\\n      \\"CompleteTime\\": \\"1614330986000\\",\\n      \\"CompletedRate\\": 0,\\n      \\"Id\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListCallTaskResponse>\\n    <RequestId>5B0F201F-DCDA-45C2-AA92-1AE177F94991</RequestId>\\n    <PageSize>2</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>20</Total>\\n    <Data>\\n        <Status>DONE</Status>\\n        <FireTime>1614330978000</FireTime>\\n        <Resource>05516214****</Resource>\\n        <BizType>VMS_VOICE_TTS</BizType>\\n        <Data>0fec3add-ef76-4c24-9728-666ababae9d6--alicomTask.xlsx</Data>\\n        <CompletedCount>1</CompletedCount>\\n        <TemplateCode>TTS_21194****</TemplateCode>\\n        <TotalCount>1</TotalCount>\\n        <TaskName>测试任务</TaskName>\\n        <CompletedRate>10000</CompletedRate>\\n        <TemplateName>特服号码测试模板</TemplateName>\\n        <DataType>LIST</DataType>\\n        <Id>1951001</Id>\\n        <CompleteTime>1614330986000</CompleteTime>\\n    </Data>\\n    <Data>\\n        <Status>DONE</Status>\\n        <FireTime>1614159414000</FireTime>\\n        <Resource>05516214****</Resource>\\n        <BizType>VMS_VOICE_TTS</BizType>\\n        <Data>dyvms_51bae600-1e0c-4f65-9fb5-5811fd2226b7.xlsx</Data>\\n        <CompletedCount>2</CompletedCount>\\n        <TemplateCode>TTS_21194****</TemplateCode>\\n        <TotalCount>2</TotalCount>\\n        <TaskName>任务中心</TaskName>\\n        <CompletedRate>10000</CompletedRate>\\n        <TemplateName>特服号码测试模板</TemplateName>\\n        <DataType>FILE</DataType>\\n        <Id>195002</Id>\\n        <CompleteTime>1614159424000</CompleteTime>\\n    </Data>\\n    <Code>200</Code>\\n</ListCallTaskResponse>","errorExample":""}]',
            'title' => '获取通话任务状态列表',
            'summary' => '创建语音通话任务后，可以查看通话任务状态，包括：任务ID、任务当前状态、任务所选的模板信息等。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。'."\n"
                .'### 接口说明'."\n"
                .'您也可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，查看任务状态，并根据需要对任务进行**启动**、**定时启动**、**编辑**、**取消任务**等操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExecuteCallTask' => [
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。通过[CreateCallTask](~~CreateCallTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2256****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务启动状态。取值：'."\n"
                            ."\n"
                            .'- **RUNNING**：立即启动。'."\n"
                            .'- **STOP**：停止任务。'."\n"
                            .'- **CANCEL**：取消任务。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RUNNING',
                    ],
                ],
                [
                    'name' => 'FireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时启动时间。格式为：yyyy-MM-dd HH:mm:ss。'."\n"
                            ."\n\n"
                            .'> 如果此处为空，则不用填写该字段。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-03-09 00:00:00',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '53D0F0Fe-cbbB-De28-6FCd-DdbBcefA46dD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"53D0F0Fe-cbbB-De28-6FCd-DdbBcefA46dD\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecuteCallTaskResponse>\\n    <Code>200</Code>\\n    <Data>true</Data>\\n    <RequestId>53D0F0Fe-cbbB-De28-6FCd-DdbBcefA46dD</RequestId>\\n</ExecuteCallTaskResponse>","errorExample":""}]',
            'title' => '执行语音通话任务',
            'summary' => '执行通话任务。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListCallTaskDetail' => [
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。'."\n"
                            ."\n"
                            .'- 通过[CreateCallTask接口](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-createcalltask?spm=a2c4g.11186623.0.0.4b0a7be3m1G1Kx)获取任务ID。'."\n"
                            ."\n"
                            .'- 在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)任务中心页面获取任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '18908**',
                    ],
                ],
                [
                    'name' => 'CalledNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。取值：'."\n"
                            ."\n"
                            .'- **SUCCESS**：外呼成功。'."\n"
                            .'- **FAIL**：外呼失败。'."\n"
                            .'- **INIT**：未开始外呼。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SUCCESS',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认值为**1**。',
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
                        'description' => '每页显示的任务个数。默认值为**10**。',
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
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D692AC3D-CBA8-417F-BEB9-5B73718922D4',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TotalPage' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页显示的任务个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Total' => [
                                'description' => '被叫号码总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Data' => [
                                'description' => '任务详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- **SUCCESS**：外呼成功。'."\n"
                                                .'- **FAIL**：外呼失败。'."\n"
                                                .'- **INIT**：未外呼。',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'Duration' => [
                                            'description' => '通话时长。单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'CalledNum' => [
                                            'description' => '被叫号码。',
                                            'type' => 'string',
                                            'example' => '1390000****',
                                        ],
                                        'Caller' => [
                                            'description' => '主叫号码。',
                                            'type' => 'string',
                                            'example' => '0571000****',
                                        ],
                                        'Id' => [
                                            'description' => '操作ID。此参数暂时不可用。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '43085***',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D692AC3D-CBA8-417F-BEB9-5B73718922D4\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"TotalPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Total\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"Duration\\": 10,\\n      \\"CalledNum\\": \\"1390000****\\",\\n      \\"Caller\\": \\"0571000****\\",\\n      \\"Id\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListCallTaskDetailResponse>\\n    <RequestId>7C943A5D-E12A-4184-A5F8-CF57B92815E3</RequestId>\\n    <TotalPage>500</TotalPage>\\n    <PageSize>2</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1000</Total>\\n    <Data>\\n        <Status>FAIL</Status>\\n        <Caller>05516214****</Caller>\\n        <Duration>0</Duration>\\n        <CalledNum>1300001****</CalledNum>\\n    </Data>\\n    <Data>\\n        <Status>FAIL</Status>\\n        <Caller>05516214****</Caller>\\n        <Duration>0</Duration>\\n        <CalledNum>1310000****</CalledNum>\\n    </Data>\\n    <Code>OK</Code>\\n</ListCallTaskDetailResponse>","errorExample":""}]',
            'title' => '获取通话任务详情列表',
            'summary' => '执行完通话任务后根据任务ID，查看指定任务详情。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。'."\n"
                .'### 接口说明'."\n"
                .'您还可以在[语音服务控制台](https://dyvms.console.aliyun.com/call/task/list)**任务中心**页面，单击操作栏**任务详情**，查看通话任务详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVirtualNumberRelation' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名称。默认取值：**dyvms**。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dyvms',
                        'default' => 'dyvmsapi',
                    ],
                ],
                [
                    'name' => 'CorpNameList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司名列表。多个公司之间用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '公司1,公司2',
                    ],
                ],
                [
                    'name' => 'NumberList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '真实号码列表。多个号码之间使用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1321111****,1322222****',
                    ],
                ],
                [
                    'name' => 'RouteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由类型。取值：'."\n"
                            ."\n"
                            .'- **0**：归属地优先。'."\n"
                            .'- **1**：随机。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '99999',
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PhoneNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '05516214****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回200代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'description' => '返回关联失败号码列表。'."\n"
                                    ."\n"
                                    .'> 如果全部关联成功，此参数不返回。',
                                'type' => 'string',
                                'example' => '1321111****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'You have not been authorized.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'VirtualNumber.Query.Fail',
                        'errorMessage' => 'Query virtual number fail.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to backend service exception.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"1321111****\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<AddVirtualNumberRelationResponse>\\n<RequestId>B0411112-6CF8-4752-81D1-918A1354AE49</RequestId>\\n<Message>successful</Message>\\n<Data>1321111*****</Data>\\n<Code>200</Code>\\n</AddVirtualNumberRelationResponse>","errorExample":""}]',
            'title' => '批量添加虚拟号码与真实号码绑定关系',
            'summary' => '批量添加虚拟号码与真实号码绑定关系。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：200次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryVirtualNumber' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名称。默认取值：**dyvms**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dyvms',
                        'default' => 'dyvms',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号。',
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
                        'description' => '页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RouteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由类型。取值：'."\n"
                            ."\n"
                            .'- **0**：归属地优先。'."\n"
                            .'- **1**：随机。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。返回200代表请求成功。'."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '查询成功后返回关联号码详情。字段含义：'."\n"
                                    ."\n"
                                    .'- createTime：号码开通时间。'."\n"
                                    .'- qualificationCount：资质数量。'."\n"
                                    .'- cityCount：城市数量。'."\n"
                                    .'- phoneNumCount：虚拟号码数量。'."\n"
                                    .'- remark：标记。'."\n"
                                    .'- phoneNum：虚拟号码。'."\n"
                                    .'- routeType：路由类型。'."\n"
                                    .'- canCancel：能否注销。'."\n"
                                    .'- specCount：供应商数量。'."\n"
                                    .'- status：号码状态。取值：**1**有效；**0**无效；**-1**注销。'."\n"
                                    .'- pageNo：分页号。'."\n"
                                    .'- pageSize：分页大小。'."\n"
                                    .'- total：总数。',
                                'type' => 'string',
                                'example' => '{"data":[{"createTime":"2020-07-15 04:00:00","qualificationCount":0,"cityCount":0,"phoneNumCount":1,"remark":"20200715联通CTD关停","phoneNum":"05516214****","routeType":1,"canCancel":true,"specCount":0,"status":"1"}],"pageSize":1,"total":17,"pageNo":1}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9FF70B74-1B3C-44C1-ACDF-8DF962988F0E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"{\\\\\\"data\\\\\\":[{\\\\\\"createTime\\\\\\":\\\\\\"2020-07-15 04:00:00\\\\\\",\\\\\\"qualificationCount\\\\\\":0,\\\\\\"cityCount\\\\\\":0,\\\\\\"phoneNumCount\\\\\\":1,\\\\\\"remark\\\\\\":\\\\\\"20200715联通CTD关停\\\\\\",\\\\\\"phoneNum\\\\\\":\\\\\\"05516214****\\\\\\",\\\\\\"routeType\\\\\\":1,\\\\\\"canCancel\\\\\\":true,\\\\\\"specCount\\\\\\":0,\\\\\\"status\\\\\\":\\\\\\"1\\\\\\"}],\\\\\\"pageSize\\\\\\":1,\\\\\\"total\\\\\\":17,\\\\\\"pageNo\\\\\\":1}\\",\\n  \\"RequestId\\": \\"9FF70B74-1B3C-44C1-ACDF-8DF962988F0E\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryVirtualNumberResponse>\\n<RequestId>9FF70B74-1B3C-44C1-ACDF-8DF962988F0E</RequestId>\\n<Data>\\n    <data>\\n        <createTime>2020-07-15 04:00:00</createTime>\\n        <qualificationCount>0</qualificationCount>\\n        <cityCount>0</cityCount>\\n        <phoneNumCount>1</phoneNumCount>\\n        <remark>20200715联通CTD关停</remark>\\n        <phoneNum>05516214****</phoneNum>\\n        <routeType>1</routeType>\\n        <canCancel>true</canCancel>\\n        <specCount>0</specCount>\\n        <status>1</status>\\n    </data>\\n    <pageSize>1</pageSize>\\n    <total>17</total>\\n    <pageNo>1</pageNo>\\n</Data>\\n<Code>200</Code>\\n</QueryVirtualNumberResponse>","errorExample":""}]',
            'title' => '查询虚拟号码列表',
            'summary' => '查询虚拟号码列表。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryVirtualNumberRelation' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名称。默认取值：**dyvms**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dyvms',
                        'default' => 'dyvms',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认取值为1。',
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
                        'description' => '每页显示的条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'RouteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由类型。取值：'."\n"
                            ."\n"
                            .'- **0**：归属地优先。'."\n"
                            ."\n"
                            .'- **1**：随机。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。此参数可不填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000000542****',
                    ],
                ],
                [
                    'name' => 'RegionNameCity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '真实号码归属地。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)**真实号管理**页面，查询号码归属地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江/杭州',
                    ],
                ],
                [
                    'name' => 'SpecId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码类型。取值：'."\n"
                            ."\n"
                            .'- **1**：虚商号码。'."\n"
                            .'- **2**：运营商号码。'."\n"
                            .'- **3**：95开头的号码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RelatedNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '真实号码。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)**真实号管理**页面，获取真实号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0213144****',
                    ],
                ],
                [
                    'name' => 'PhoneNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟号码。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台](https://dyvms.console.aliyun.com/virtual/list)**虚拟号管理**页面，获取虚拟号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '05710000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回200代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '虚拟号和真实号绑定后的关系列表。部分字段含义：'."\n"
                                    ."\n"
                                    .'- **relatedNum**：真实号码。'."\n"
                                    .'- **virtualNum**：虚拟号码。'."\n"
                                    .'- **createTime**：号码开通时间。'."\n"
                                    .'- **pageNo**：当前页码。'."\n"
                                    .'- **pagSize**：每页显示的条数。'."\n"
                                    .'- **total**：总数。'."\n"
                                    .'- **regionNameProvince**：号码归属省。'."\n"
                                    .'- **regionNameCity**：号码归属城市。'."\n"
                                    .'- **corpName**：企业名称。',
                                'type' => 'string',
                                'example' => '{"data":[{"regionNameProvince":"湖南","relatedNum":"0734284****","specName":"联通全国","createTime":"2021-07-02 16:04:49","regionNameCity":"衡阳","corpName":"阿里巴巴通信技术(北京)有限公司","virtualNum":"05710000****"},],"pageSize":20,"total":1,"pageNo": 1},}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8FAD5988-B483-48A4-B251-6E8470A67371',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'VirtualNumber.NotOwn',
                        'errorMessage' => 'You can only use your own virtual number.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"{\\\\\\"data\\\\\\":[{\\\\\\"regionNameProvince\\\\\\":\\\\\\"湖南\\\\\\",\\\\\\"relatedNum\\\\\\":\\\\\\"0734284****\\\\\\",\\\\\\"specName\\\\\\":\\\\\\"联通全国\\\\\\",\\\\\\"createTime\\\\\\":\\\\\\"2021-07-02 16:04:49\\\\\\",\\\\\\"regionNameCity\\\\\\":\\\\\\"衡阳\\\\\\",\\\\\\"corpName\\\\\\":\\\\\\"阿里巴巴通信技术(北京)有限公司\\\\\\",\\\\\\"virtualNum\\\\\\":\\\\\\"05710000****\\\\\\"},],\\\\\\"pageSize\\\\\\":20,\\\\\\"total\\\\\\":1,\\\\\\"pageNo\\\\\\": 1},}\\",\\n  \\"RequestId\\": \\"8FAD5988-B483-48A4-B251-6E8470A67371\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryVirtualNumberRelationResponse>\\n<RequestId>8FAD5988-B483-48A4-B251-6E8470A67371</RequestId>\\n<Data>\\n    <data>\\n        <relatedNum>1705559****</relatedNum>\\n        <createTime>2021-03-26 12:34:08</createTime>\\n    </data>\\n    <pageSize>20</pageSize>\\n    <total>1</total>\\n    <pageNo>1</pageNo>\\n</Data>\\n<Code>200</Code>\\n</QueryVirtualNumberRelationResponse>","errorExample":""}]',
            'title' => '查询虚拟号码与真实号码绑定关系列表',
            'summary' => '查询虚拟号码与真实号码绑定后的数据列表，包括绑定真实号的时间，号码创建时间，一个虚拟号下绑定真实号的数量等。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：200次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryVoiceFileAuditInfo' => [
            'summary' => '查询语音文件审核状态。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'VoiceCodes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件ID。'."\n"
                            ."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音文件管理**页面查看**语音ID**。'."\n"
                            ."\n"
                            .'> 每次查询最多支持10个语音文件，以半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8501d2eb-efbb-471f-xxx8-****.wav',
                    ],
                ],
                [
                    'name' => 'BusinessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件类型。取值：'."\n"
                            ."\n"
                            .'- **0**（默认值）：语音通知文件'."\n"
                            .'- **2**：通话放音文件',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                        'enum' => [],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'返回OK代表请求成功。'."\n"
                                    .'其他状态码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VoiceCode' => [
                                            'description' => '语音文件Code。',
                                            'type' => 'string',
                                            'example' => '8501d2eb-efbb-471f-xxx8-****.wav',
                                        ],
                                        'AuditState' => [
                                            'description' => '审核状态。取值：'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_INIT**：审批中'."\n"
                                                .'- **AUDIT_STATE_PASS**：审批通过'."\n"
                                                .'- **AUDIT_STATE_NOT_PASS**：审批不通过'."\n"
                                                .'- **AUDIT_STATE_UPLOADING**：审批已通过文件上传中'."\n"
                                                .'- **AUDIT_STATE_REDOING**：重新处理中'."\n"
                                                .'- **AUDIT_SATE_CANCEL**：取消审批'."\n"
                                                .'- **AUDIT_PAUSE**：暂停审批'."\n"
                                                .'- **AUDIT_ORDER_FINISHED**：工单系统审核完成，等待运营商审核',
                                            'type' => 'string',
                                            'example' => 'AUDIT_STATE_NOT_PASS',
                                        ],
                                        'RejectInfo' => [
                                            'description' => '审核信息。',
                                            'type' => 'string',
                                            'example' => '如电话沟通，该业务暂不支持',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'Message' => [
                                'description' => '状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'Query.Voice.File.Limit',
                        'errorMessage' => 'Voice file query number cannot exceed 10',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"VoiceCode\\": \\"8501d2eb-efbb-471f-xxx8-****.wav\\",\\n      \\"AuditState\\": \\"AUDIT_STATE_NOT_PASS\\",\\n      \\"RejectInfo\\": \\"如电话沟通，该业务暂不支持\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"Message\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '查询语音文件审核状态',
        ],
        'QueryCallDetailByCallId' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话的唯一识别ID。调用外呼接口发起通话后，返回参数中会携带CallId。'."\n"
                            ."\n"
                            .'示例：如果您需要查询语音通知的通话记录，请调用[SingleCallByVoice](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvoice?spm=a2c4g.11186623.0.0.12536717GgylqF)发送语音通知后获取CallId。'."\n"
                            ."\n"
                            .' - 获取的CallId与**QueryDate**必须是同一天。示例：CallId的时间是2022.11.21，**QueryDate**必须也是2022.11.21内的时间。'."\n"
                            .' - 获取的CallId与**ProdId**参数值必须匹配。示例：CallId是在发送语音通知后获取的，那**ProdId**参数需要填写语音通知即**11000000300006**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '116014888060^10281631****',
                    ],
                ],
                [
                    'name' => 'ProdId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品ID。取值：'."\n"
                            .'- **11000000300006**：语音通知。'."\n"
                            .'- **11010000138001**：语音验证码。'."\n"
                            .'- **11000000300005**：语音IVR，向指定号码发起交互式语音通话。'."\n"
                            .'- **11000000300009**：语音SIP。'."\n"
                            .'- **11030000180001**：智能外呼。'."\n"
                            ."\n"
                            .'> 获取的CallId与**ProdId**参数值必须匹配。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '11000000300006',
                    ],
                ],
                [
                    'name' => 'QueryDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话发生的时间。格式为Unix时间戳，单位：毫秒。'."\n"
                            ."\n"
                            .'查询指定时间点之后24小时内的通话记录。'."\n"
                            ."\n"
                            .'例如：您输入2022.11.21 20:00:01（时间戳：1669032001000），系统会查询2022.11.21 20:00:01~2022.11.22 20:00:01时间段内指定callid的呼叫记录。'."\n"
                            ."\n"
                            .'> 获取的CallId与**QueryDate**必须是同一天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1669032001000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回的呼叫详情。JSON格式。以下字段仅供参考，以具体返回详情为准。'."\n"
                                    .'- **caller**：主叫号码。'."\n"
                                    .'- **startDate**：通话开始时间。'."\n"
                                    .'- **stateDesc**：通话状态描述。'."\n"
                                    .'- **duration**：通话时长。单位：秒。**0**：用户未接通。'."\n"
                                    .'- **callerShowNumber**：被叫显号。'."\n"
                                    .'- **gmtCreate**：通话请求的接收时间。'."\n"
                                    .'- **state**：通话状态。通话状态是运营商实时返回的，更多状态信息，请参见[运营商回执错误码](~~55085~~)。'."\n"
                                    .'- **endDate**：通话结束时间。'."\n"
                                    .'- **calleeShowNumber**：被叫显号。'."\n"
                                    .'- **callee**：被叫号码。'."\n"
                                    .'- **aRingTime**：a路响铃开始时间。格式：yyyy-MM-dd HH:mm:ss。'."\n"
                                    .'- **aEndTime**：a路响铃结束时间。格式：yyyy-MM-dd HH:mm:ss。'."\n"
                                    .'- **bRingTime**：b路响铃开始时间。格式：yyyy-MM-dd HH:mm:ss。'."\n"
                                    .'- **bEndTime**：b路响铃结束时间。格式：yyyy-MM-dd HH:mm:ss。',
                                'type' => 'string',
                                'example' => '{"caller":"18767****","startDate":"","stateDesc":"502","duration":0,"callerShowNumber":"05344****","gmtCreate":"2017-11-27 20:09:06","state":"502","endDate":"","calleeShowNumber":"053447****","bRingTime":"2022-01-01 12:02:00"，"bEndTime":"2022-01-01 12:02:28"，"callee":"1373546****"}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{\\\\\\"caller\\\\\\":\\\\\\"18767****\\\\\\",\\\\\\"startDate\\\\\\":\\\\\\"\\\\\\",\\\\\\"stateDesc\\\\\\":\\\\\\"502\\\\\\",\\\\\\"duration\\\\\\":0,\\\\\\"callerShowNumber\\\\\\":\\\\\\"05344****\\\\\\",\\\\\\"gmtCreate\\\\\\":\\\\\\"2017-11-27 20:09:06\\\\\\",\\\\\\"state\\\\\\":\\\\\\"502\\\\\\",\\\\\\"endDate\\\\\\":\\\\\\"\\\\\\",\\\\\\"calleeShowNumber\\\\\\":\\\\\\"053447****\\\\\\",\\\\\\"bRingTime\\\\\\":\\\\\\"2022-01-01 12:02:00\\\\\\"，\\\\\\"bEndTime\\\\\\":\\\\\\"2022-01-01 12:02:28\\\\\\"，\\\\\\"callee\\\\\\":\\\\\\"1373546****\\\\\\"}\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryCallDetailByCallIdResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>{\\"caller\\":\\"18767****\\",\\"startDate\\":\\"\\",\\"stateDesc\\":\\"502\\",\\"duration\\":0,\\"callerShowNumber\\":\\"05344****\\",\\"gmtCreate\\":\\"2017-11-27 20:09:06\\",\\"state\\":\\"502\\",\\"endDate\\":\\"\\",\\"calleeShowNumber\\":\\"053447****\\",\\"bRingTime\\":\\"2022-01-01 12:02:00\\"，\\"bEndTime\\":\\"2022-01-01 12:02:28\\"，\\"callee\\":\\"1373546****\\"}</Data>\\n    <RequestId>A90E4451-FED7-49D2-87C8-00700A8C4D0D</RequestId>\\n</QueryCallDetailByCallIdResponse>","errorExample":""}]',
            'title' => '查询指定通话的呼叫详情',
            'summary' => '查询指定CallID的呼叫详情，包括通话开始时间、通话时长、通话状态、通话结束时间、被叫号码等详情。',
            'description' => '- 此接口可查询语音通知、语音验证码、语音IVR、智能语音交互呼入、智能语音交互、智能外呼机器人的呼叫详情。'."\n"
                .'- 获取的CallId与**QueryDate**必须是同一天。'."\n"
                .'- 获取的CallId与**ProdId**参数值必须匹配。'."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'IvrCall' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码。'."\n"
                            ."\n"
                            .'必须是已购买的号码，单次请求仅支持一个主叫号码。一般号码都有并发数，超过并发数会请求失败。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音号码>真实号管理**页面查看已购买的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。'."\n"
                            ."\n"
                            .'仅支持中国内地号码，单次请求仅支持一个号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1590****000',
                    ],
                ],
                [
                    'name' => 'StartCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '呼叫开始时播放的提示音。'."\n"
                            ."\n"
                            .'- 语音文件：语音ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音文件管理**页面查看**语音ID**。'."\n"
                            .'- 文本转语音模板：模板ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音消息**>**语音通知**>**文本转语音模板**页面查看**模板ID**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TTS_1234****',
                    ],
                ],
                [
                    'name' => 'StartTtsParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本转语音模板内的变量参数，格式为JSON。'."\n"
                            ."\n"
                            .'> 当StartCode为文本转语音模板（TTS）且模板中带变量的情况下，此参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"name":"xxx","code":"123"}',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重复播放次数。取值范围为**1~3**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'ByeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '播放结束时播放的结束提示音。支持以下两种方式：'."\n"
                            ."\n"
                            .'- 语音文件：语音ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音文件管理**页面查看**语音ID**。'."\n"
                            .'- 文本转语音模板：模板ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**国内语音单呼**>**语音通知**>**文本转语音模板**页面查看**模板ID**。'."\n"
                            ."\n"
                            .'> 参数ByeCode的类型需要与参数StartCode一致，即必须同时为语音文件或同时为文本转语音（TTS）模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TTS_1234****',
                    ],
                ],
                [
                    'name' => 'ByeTtsParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本转语音模板中的变量参数。格式为JSON。'."\n"
                            ."\n"
                            .'> 当ByeCode为文本转语音（TTS）模板且模板中带变量的情况下，此参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"name":"xxx","code":"123"}	',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '等待用户按键超时时间。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3000',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PR0210428****',
                    ],
                ],
                [
                    'name' => 'MenuKeyMap',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '按键信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '按键信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '被叫方可按的电话按键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'TtsParams' => [
                                    'description' => '文本转语音模板内的变量参数，格式为JSON。'."\n"
                                        ."\n"
                                        .'> - 当**MenuKeyMap.N.Code**是文本转语音模板（TTS）时，对应的模板变量替换关系。'."\n"
                                        .'> - 当**MenuKeyMap.N.Code**为文本转语音模板（TTS）且模板中带变量的情况下，此参数为必填。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{"name":"xxx","code":"123"}',
                                ],
                                'Code' => [
                                    'description' => '**MenuKeyMap.N.Key**中指定按键对应的提示音。支持以下两种方式：'."\n"
                                        ."\n"
                                        .'- 语音文件：语音ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音文件管理**页面查看**语音ID**。'."\n"
                                        .'- 文本转语音模板：模板ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音消息**>**语音通知**>**文本转语音模板**页面查看**模板ID**。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TTS_1235****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'maxItems' => 15,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](https://help.aliyun.com/zh/vms/developer-reference/api-error-code?spm=a2c4g.11186623.0.0.321526dckd3diO)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                            'CallId' => [
                                'description' => '此次通话的唯一回执ID。'."\n"
                                    ."\n"
                                    .'CallId可以通过[QueryCallDetailByCallId](~~393529~~)接口查询指定通话的呼叫详情。',
                                'type' => 'string',
                                'example' => '116012354148^10281378****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\",\\n  \\"CallId\\": \\"116012354148^10281378****\\"\\n}","type":"json"}]',
            'title' => '向指定号码发起交互式语音通话',
            'summary' => '向指定号码发起交互式语音通话。',
            'description' => '- 提交企业资质，并审核通过。具体操作，请参见[提交企业资质](~~149795~~)。'."\n"
                .'- 购买语音号码。具体操作，请参见[购买号码](~~149794~~)。'."\n"
                ."\n"
                .'- 用户接听电话后会听到一段语音，提示用户按键选择。如果开启了[消息回执](~~112503~~)，语音服务会将客户按键信息返回给调用的业务系统。该接口可用于收集客户的订单确认、问卷调查、满意度调查等信息。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SmartCall' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
                'abilityTreeCode' => '52713',
                'abilityTreeNodes' => [
                    'FEATUREdyvms59DC26',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫显号。必须是已购买的号码。'."\n"
                            ."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音号码**>**真实号管理**页面查看已购买的号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。仅支持中国内地号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1590****0000',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '智能外呼放音文件。'."\n"
                            ."\n"
                            .'支持网络文件、控制台上传的语音文件和TTS三种方式。其中，支持使用多个文件和TTS参数混播，之间用英文逗号（,）分隔。TTS参数的替换值在**VoiceCodeParam**中指定。'."\n"
                            ."\n"
                            .'- 当放音文件为网络文件时：参数**VoiceCode**指定为可被公网访问的语音文件URL。'."\n"
                            .'- 当放音文件为控制台上传的语音文件时：参数**VoiceCode**指定为文件的语音ID。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，选择**语音文件管理**>**智能语音交互放音文件**，单击**详情**查看对应的**语音ID**。'."\n"
                            .'- 当放音文件为TTS时：参数**VoiceCode**指定为变量名称如$name$，需要在**VoiceCodeParam**中设置变量对应的内容。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2d4c-4e78-8d2a-afbb06cf****.wav,$name$',
                    ],
                ],
                [
                    'name' => 'RecordFlag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话过程中是否录音。取值：'."\n"
                            ."\n"
                            .'- **true**：录音。'."\n"
                            .'- **false**：不录音。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '播放用户音频的音量。取值范围：**-4~4**，建议设置为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不支持使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AsrModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASR模型ID。'."\n"
                            ."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**ASR语言模型管理**中查看ASR模型ID。'."\n"
                            ."\n"
                            .'> 调用SmartCall接口时需要指定使用的ASR模型，建议参数AsrModelId和AsrBaseId二者选填其一。'."\n"
                            .'> - 如果仅设置AsrModelId，表示使用指定的ASR模型。'."\n"
                            .'> - 如果仅设置AsrBaseId，表示使用指定的ASR基础模型。'."\n"
                            .'> - 如果二者均未设置，则使用默认的ASR基础模型，即参数AsrBaseId默认为customer_service_8k，表示使用ASR普通话基础模型。'."\n"
                            .'> - 如果二者同时设置，请确认二者是正确对应的。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2070aca1eff146f9a7bc826f1c3d****',
                    ],
                ],
                [
                    'name' => 'PauseTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '停顿时长。用于设置用户停顿多久表示一句话结束。单位：毫秒，取值范围：**300~1200**。'."\n"
                            ."\n"
                            .'> - 如果指定值不在参数范围中，则该参数默认取值为**800**。'."\n"
                            .'> - 该参数首次设置有效，后续设置无效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '800',
                    ],
                ],
                [
                    'name' => 'MuteTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静音时长。用于设置用户多久不说话通话结束。单位：毫秒，取值范围：**1000~20000**。'."\n"
                            ."\n"
                            .'> - 如果指定值不在参数范围中，则该参数默认取值为**10000**。'."\n"
                            .'> - 通话过程中可动态设置，以最后一次设置为准。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10000',
                    ],
                ],
                [
                    'name' => 'ActionCodeBreak',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前返回的媒体文件是否可以被打断。默认取值为**true**，即可被打断。'."\n"
                            ."\n"
                            .'如果为false，即使下一个动作action_break为true，也无法打断当前放音。'."\n"
                            ."\n"
                            .'> action_code_break优先级高于action_break。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。 最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '342268*****',
                    ],
                ],
                [
                    'name' => 'DynamicId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的动态扩展ID。在回调地址中带回，用于客户的开发标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdefgh',
                    ],
                ],
                [
                    'name' => 'EarlyMediaAsr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '早媒体语音识别标识。取值：'."\n"
                            ."\n"
                            .'- **false**（默认）：关闭。'."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'> 设为**true**会记录通话未接听的原因。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'VoiceCodeParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS参数传递字符串，格式为JSON。必须与**VoiceCode**的TTS参数对应。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"name":"喂,你好"}',
                    ],
                ],
                [
                    'name' => 'SessionTimeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大通话时长，超时后自动挂断。单位：秒。'."\n"
                            ."\n"
                            .'> 通话时长最长3600秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'ActionCodeTimeBreak',
                    'in' => 'query',
                    'schema' => [
                        'description' => '基于用户持续说话时长打断。单位：毫秒。'."\n"
                            ."\n"
                            .'如果当前媒体文件ActionCodeBreak为**true**，用户持续说话可以打断当前播放。不设置或者为0，不生效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'TtsStyle',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS变量播放时的声音风格。默认为**xiaoyun**。具体风格，请参见下表**声音风格列表**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xiaoyun',
                    ],
                ],
                [
                    'name' => 'TtsVolume',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS变量播放的音量。取值范围：**0~100**，默认值为**0**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'TtsSpeed',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS变量播放时的声音速度。取值范围：**-200~200**，默认值为**0**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'TtsConf',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否设置TTS声音参数。取值：'."\n"
                            ."\n"
                            .'- **true**：设置。需要通过**TtsStyle**、**TtsVolume**、**TtsSpeed**三个参数来设置声音风格。'."\n"
                            .'- **false**：不设置。不需要设置相关参数，即便设置了也不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AsrBaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASR基础模型。取值：'."\n"
                            ."\n"
                            .'- **customer_service_8k**（默认）：普通话。'."\n"
                            .'- **dialect_customer_service_8k**：重口音。'."\n"
                            ."\n"
                            .'> 调用SmartCall接口时需要指定使用的ASR模型，建议参数AsrModelId和AsrBaseId二者选填其一。'."\n"
                            .'> - 如果仅设置AsrModelId，表示使用指定的ASR模型。'."\n"
                            .'> - 如果仅设置AsrBaseId，表示使用指定的ASR基础模型。'."\n"
                            .'> - 如果二者均未设置，则使用默认的ASR基础模型，即参数AsrBaseId默认为customer_service_8k，表示使用ASR普通话基础模型。'."\n"
                            .'> - 如果二者同时设置，请确认二者是正确对应的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'customer_service_8k',
                    ],
                ],
                [
                    'name' => 'StreamAsr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流式ASR，根据用户说的前几个字智能判断语义。取值：'."\n"
                            ."\n"
                            .'- **0**：关闭。'."\n"
                            .'- **1**：开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BackgroundFileCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户和机器人对话时播放的背景语音文件ID。'."\n"
                            ."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，选择**语音文件管理**>**智能语音交互放音文件**，单击**详情**按钮，查看对应的语音ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2d4c-4e78-8d2a-afbb06cf****.wav',
                    ],
                ],
                [
                    'name' => 'BackgroundVolume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不支持使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4',
                        'minimum' => '-4',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BackgroundSpeed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数暂不支持使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EnableITN',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在后处理中执行ITN。默认为**false**，即不执行。'."\n"
                            ."\n"
                            .'设置为**true**时，中文数字将转为阿拉伯数字输出。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'NoiseThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'CallId' => [
                                'description' => '此次通话的唯一回执ID。'."\n"
                                    ."\n"
                                    .'CallId可以通过[QueryCallDetailByCallId](~~QueryCallDetailByCallId~~)接口查询呼叫详情。',
                                'type' => 'string',
                                'example' => '116012854210^10281427****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"CallId\\": \\"116012854210^10281427****\\"\\n}","errorExample":""},{"type":"xml","example":"<SmartCallResponse>\\n<Message>OK</Message>\\n<RequestId>A90E4451-FED7-49D2-87C8-00700A8C4D0D</RequestId>\\n<CallId>116012854210^10281427****</CallId>\\n<Code>OK</Code>\\n</SmartCallResponse>","errorExample":""}]',
            'title' => '发起智能语音交互通话',
            'summary' => '智能语音交互服务，是一种人机交互技术，它允许用户通过语音与机器进行自然的对话和沟通。',
            'description' => '- SmartCall需要与[智能外呼回调HTTP接口](~~112703~~)联合使用，语音平台发起呼叫后会把转换后的语音文本回传给业务方，业务方把下一步的执行动作返回给语音平台。'."\n"
                .'- 以下字符不可以在智能语音交互SmartCall回调中出现：`@ = : "" $ { } ^ * ￥`。',
            'requestParamsDescription' => '### 声音风格'."\n"
                .'更多声音风格详情，请参见[声音风格列表](https://help.aliyun.com/zh/vms/sound-style)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SmartCallOperate' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话的唯一回执ID。可通过[SmartCall](~~393526~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '116012854210^1028142****',
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'description' => '在智能外呼通话中，指定被叫号码发起的动作。'."\n"
                            ."\n"
                            .'> 当前仅支持参数**parallelBridge**，表示指定动作为被叫号码与呼叫中心坐席桥接。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'parallelBridge',
                    ],
                ],
                [
                    'name' => 'Param',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Param',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '命令执行的结果。取值：'."\n"
                                    .'- **true**：命令执行成功。'."\n"
                                    .'- **false**：命令执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": true,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\"\\n}","errorExample":""},{"type":"xml","example":"<SmartCallOperateResponse>\\r\\n\\t<Code>OK</Code>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>A90E4451-FED7-49D2-87C8-00700A8C4D0D</RequestId>\\r\\n\\t<Status>true</Status>\\r\\n</SmartCallOperateResponse>","errorExample":""}]',
            'title' => '发起智能语音指定动作',
            'summary' => '在智能外呼通话中发起指定动作，仅用于并行转人工、人工坐席可旁听人机对话等场景。',
            'description' => '在智能语音交互呼出通话中，转接呼叫中心坐席时，可以使用本接口指定被叫号码发起指定动作。'."\n"
                ."\n"
                .'> 当前仅支持指定动作为被叫号码与呼叫中心坐席桥接。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。支持中文和英文，不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '任务测试',
                    ],
                ],
                [
                    'name' => 'DialogId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定机器人ID，即话术ID。表示选择哪个机器人话术发起呼叫。'."\n"
                            ."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，选择**智能语音机器人**>**话术管理**查看话术ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1000023****',
                    ],
                ],
                [
                    'name' => 'CorpName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司名称。需和资质管理页面中的**企业名称**完全一致。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里巴巴通信技术（北京）有限公司',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外呼主叫号码。'."\n"
                            ."\n"
                            .'必须是已购买的号码，多个号码使用半角逗号（,）隔开。您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)，在**语音号码**>**真实号管理**页面查看已购买的号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'NumberStatusIdent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用号码状态（早媒体）识别标识。取值：'."\n"
                            ."\n"
                            .'- **false**（默认值）：不启用。'."\n"
                            .'- **true**：启用。'."\n"
                            ."\n"
                            .'> 设为**true**会记录通话未接听的原因。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RetryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动重拨。取值：'."\n"
                            ."\n"
                            .'- **1**：重拨。'."\n"
                            .'- **0**：不重拨。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RecallStateCodes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要重拨的通话状态。多个状态使用半角逗号（,）分隔。取值：'."\n"
                            ."\n"
                            .'- **200010**：关机。'."\n"
                            .'- **200011**：停机。'."\n"
                            .'- **200002**：占线。'."\n"
                            .'- **200012**：呼损。'."\n"
                            .'- **200005**：无法接通。'."\n"
                            .'- **200003**：无应答。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '200010,200011',
                    ],
                ],
                [
                    'name' => 'RecallTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重拨次数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RecallInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重拨间隔。单位：分钟，必须大于1。'."\n"
                            ."\n"
                            .'> 最大间隔为30分钟。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'IsSelfLine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否调用自有线路。取值：'."\n"
                            ."\n"
                            .'- **false**（默认值）：不调用。'."\n"
                            .'- **true**：调用。'."\n"
                            ."\n"
                            .'> 设为**true**不会对主叫号码做校验。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他状态码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人呼叫任务的唯一任务ID。'."\n"
                                    ."\n"
                                    .'任务ID可以通过[QueryRobotTaskDetail](~~393538~~)接口查询任务详情。',
                                'type' => 'string',
                                'example' => '400111****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"400111****\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","type":"json"}]',
            'title' => '发起智能语音机器人外呼任务',
            'summary' => '发起智能语音机器人外呼任务。',
            'description' => '- 智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'- 本接口用于直接使用控制台预设的机器人话术发起机器人外呼任务。在智能语音交互通话中，支持使用控制台预设的机器人话术，或在每轮通话中通过回调接口返回业务方设置的回应方式。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchRobotSmartCall' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫显号，必须是已购买的号码。您可以在[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)查看已购买的号码。'."\n"
                            ."\n"
                            .'支持设置1~100个被叫显号，号码之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '136****0000,138****0000',
                    ],
                ],
                [
                    'name' => 'CorpName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司名称，必须和[资质管理页面](https://dyvms.console.aliyun.com/dyvms.htm#/corp/normal)中的**公司名称**完全一致。'."\n"
                            ."\n"
                            .'> 如果开通了**自有线路**功能，即**isSelfLine**为**true**时，该参数为可选。反之则必须填写公司名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里巴巴通信技术（北京）有限公司	',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。仅支持中国大陆号码。'."\n"
                            ."\n"
                            .'支持设置1~1000个被叫号码，号码之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'DialogId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定机器人ID，即话术ID。表示选择哪个机器人/话术发起呼叫。'."\n"
                            ."\n"
                            .'请在[话术管理页面](https://dyvms.console.aliyun.com/patter/list)中查看**话术ID**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100002970****',
                    ],
                ],
                [
                    'name' => 'EarlyMediaAsr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '早媒体语音识别标识。默认为**false**，即不启用。'."\n"
                            ."\n"
                            .'如果需要启用早媒体语音识别标识，请设置为**true**。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。'."\n"
                            ."\n"
                            .'- 支持中文和英文。'."\n"
                            ."\n"
                            .'- 长度限制为：0~30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '批量外呼任务	',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预设的呼叫时间。Unix时间戳格式，单位为毫秒。'."\n"
                            ."\n"
                            .'> 当参数**ScheduleCall**为**true**时必选。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'ScheduleCall',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否定时呼叫。如果设置为**true**，则必须设置**ScheduleTime**。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS模板的变量值，格式为JSON。'."\n"
                            ."\n"
                            .'必须和具体的号码对应，TtsParam与TtsParamHead变量名称一一对应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"number":"1390000****","params":[“小王”,"小李","小周"]}]',
                    ],
                ],
                [
                    'name' => 'TtsParamHead',
                    'in' => 'query',
                    'schema' => [
                        'description' => '带变量的呼叫任务，格式为JSON。'."\n"
                            ."\n"
                            .'变量名称列表，与TtsParam配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["name1","name2","name3"]',
                    ],
                ],
                [
                    'name' => 'IsSelfLine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否调用自有线路，默认为**false**，即不调用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                            'TaskId' => [
                                'description' => '机器人呼叫任务的唯一任务ID，可以通过此ID调用[QueryCallDetailByTaskId](~~393537~~)接口查询任务详情。',
                                'type' => 'string',
                                'example' => '4001112222',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\",\\n  \\"TaskId\\": \\"4001112222\\"\\n}","type":"json"}]',
            'title' => '批量发起智能语音机器人外呼任务',
            'summary' => '批量发起智能语音机器人外呼任务，一次任务支持设置1~100个号码。',
            'description' => '- 智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'- 在智能语音交互通话中，支持使用控制台预设的机器人话术，或在每轮通话中通过回调接口返回业务方设置的回应方式。'."\n"
                ."\n"
                .'- 此接口用于直接使用控制台预设的机器人话术，发起机器人外呼任务。'."\n"
                ."\n"
                .'### 前提条件'."\n"
                .'- 已实名认证为企业用户，并审核通过了企业资质。'."\n"
                .'- 已在[语音服务控制台](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal)上购买了号码。 '."\n"
                .'- 已在[话术管理页面](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list)添加了话术并通过审核。'."\n"
                ."\n"
                .'> 请确保在使用该接口前，已充分了解语音服务产品的收费方式和[价格](https://www.aliyun.com/price/product#/vms/detail)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。可通过[CreateRobotTask](~~CreateRobotTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '104500****',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时启动时间。格式为yyyy-MM-dd HH:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-14 14:55:23',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<StartRobotTaskResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<Data>true</Data>\\n</StartRobotTaskResponse>","errorExample":""}]',
            'title' => '启动任务或定时启动任务',
            'summary' => '启动智能语音任务或者定时启动智能语音任务。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~CreateRobotTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<StopRobotTaskResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<Data>true</Data>\\n</StopRobotTaskResponse>","errorExample":""}]',
            'title' => '暂停智能语音任务',
            'summary' => '暂停开始执行后的智能语音任务。',
            'description' => '- 智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'- 暂停任务后，您可以调用[StartRobotTask](~~StartRobotTask~~)接口启动任务。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelOrderRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。可以通过[CreateRobotTask](~~393531~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelOrderRobotTaskResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<Data>true</Data>\\n</CancelOrderRobotTaskResponse>","errorExample":""}]',
            'title' => '取消智能语音任务',
            'summary' => '取消还未启动的定时智能语音任务。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~393531~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","type":"json"}]',
            'title' => '终止智能语音任务',
            'summary' => '终止智能语音任务。',
            'description' => '- 智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'- 仅可终止进行中的任务，任务终止后不能再恢复。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRobotTask' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~CreateRobotTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRobotTaskResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<TaskId>4001112222</TaskId>\\n</DeleteRobotTaskResponse>","errorExample":""}]',
            'title' => '删除智能语音任务',
            'summary' => '删除智能语音任务。',
            'description' => '- 智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'- 此接口仅支持删除未开始状态、已完成状态以及被终止的任务。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotv2AllList' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人话术信息。JSON格式。'."\n"
                                    .'- **id**：机器人话术ID。'."\n"
                                    .'- **robotName**：机器人话术名称。'."\n"
                                    .'- **robotType**：机器人话术类型。'."\n",
                                'type' => 'string',
                                'example' => '{"id":100000007****,"robotName":"机器人","robotType":"CUSTOM"}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{\\\\\\"id\\\\\\":100000007****,\\\\\\"robotName\\\\\\":\\\\\\"机器人\\\\\\",\\\\\\"robotType\\\\\\":\\\\\\"CUSTOM\\\\\\"}\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRobotv2AllListResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<Data>{\\"id\\":100000007****,\\"robotName\\":\\"机器人\\",\\"robotType\\":\\"CUSTOM\\"}</Data>\\n</QueryRobotv2AllListResponse>","errorExample":""}]',
            'title' => '获取全部机器人话术模板列表',
            'summary' => '获取全部机器人话术模板列表。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotTaskList' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '任务测试',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。取值：'."\n"
                            .'- **INIT**：未开始。'."\n"
                            .'- **READY**：准备开始。'."\n"
                            .'- **DISPATCH**：解析中。'."\n"
                            .'- **EXCUTING**：执行中。'."\n"
                            .'- **MANUAL_STOP**：手动暂停。'."\n"
                            .'- **SYSTEM_STOP**：系统暂停。'."\n"
                            .'- **ARREARS_STOP**：欠费暂停。'."\n"
                            .'- **CANCEL**：手动终止。'."\n"
                            .'- **SYSTEM_CANCEL**：系统终止。'."\n"
                            .'- **FINISH**：已完成。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXCUTING',
                    ],
                ],
                [
                    'name' => 'Time',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务创建日期。格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-14',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页个数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '智能语音任务列表。JSON格式。取值：'."\n"
                                    .'- **id**：机器人呼叫任务的唯一任务ID。'."\n"
                                    .'- **taskName**：任务名称。'."\n"
                                    .'- **robotId**：指定机器人ID。'."\n"
                                    .'- **robotName**：机器人名称。'."\n"
                                    .'- **status**：任务状态。'."\n"
                                    .'- **scheduleType**：调度类型。**SINGLE**为立即启动，**ORDER**为定时启动。'."\n"
                                    .'- **createTime**：任务创建时间。yyyy.MM.dd HH:mm:ss格式。'."\n"
                                    .'- **completeTime**：任务完成时间。yyyy.MM.dd HH:mm:ss格式。'."\n"
                                    .'- **fireTime**：任务启动时间。yyyy.MM.dd HH:mm:ss格式。'."\n"
                                    .'- **totalCount**：处理通话总数。'."\n"
                                    .'- **finishCount**：完成通话个数。',
                                'type' => 'string',
                                'example' => '[ {"id": 1045001, "taskName": "智能语音任务", "robotId": 1000000075003, "robotName": "机器人", "status": "INIT","scheduleType": "SINGLE", "createTime": "2019.06.14 14:55:23", "completeTime": "2019.06.14 14:55:23", "fireTime": "2019.06.14 14:55:23", "totalCount": 1000, "finishCount": 998} ]',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                            'PageNo' => [
                                'description' => '每页个数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'PageSize' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总任务数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"[ {\\\\\\"id\\\\\\": 1045001, \\\\\\"taskName\\\\\\": \\\\\\"智能语音任务\\\\\\", \\\\\\"robotId\\\\\\": 1000000075003, \\\\\\"robotName\\\\\\": \\\\\\"机器人\\\\\\", \\\\\\"status\\\\\\": \\\\\\"INIT\\\\\\",\\\\\\"scheduleType\\\\\\": \\\\\\"SINGLE\\\\\\", \\\\\\"createTime\\\\\\": \\\\\\"2019.06.14 14:55:23\\\\\\", \\\\\\"completeTime\\\\\\": \\\\\\"2019.06.14 14:55:23\\\\\\", \\\\\\"fireTime\\\\\\": \\\\\\"2019.06.14 14:55:23\\\\\\", \\\\\\"totalCount\\\\\\": 1000, \\\\\\"finishCount\\\\\\": 998} ]\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\",\\n  \\"PageNo\\": \\"1\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"PageSize\\": \\"1\\",\\n  \\"TotalCount\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRobotTaskListResponse>\\n    <Data>[ {\\"id\\": 1045001, \\"taskName\\": \\"智能语音任务\\", \\"robotId\\": 1000000075003, \\"robotName\\": \\"机器人\\", \\"status\\": \\"INIT\\",\\"scheduleType\\": \\"SINGLE\\", \\"createTime\\": \\"2019.06.14 14:55:23\\", \\"completeTime\\": \\"2019.06.14 14:55:23\\", \\"fireTime\\": \\"2019.06.14 14:55:23\\", \\"totalCount\\": 1000, \\"finishCount\\": 998} ]</Data>\\n    <RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n    <PageNo>1</PageNo>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <PageSize>1</PageSize>\\n    <TotalCount>1</TotalCount>\\n</QueryRobotTaskListResponse>","errorExample":""}]',
            'title' => '获取所有任务ID',
            'summary' => '获取所有语音任务信息。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryCallDetailByTaskId' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID，成功下发机器人外呼任务后返回。可以在语音控制台[任务管理](https://dyvms.console.aliyun.com/job/list)中查看，或调用接口**BatchRobotSmartCall**成功后记录返回的参数**TaskId**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4001112222',
                    ],
                ],
                [
                    'name' => 'QueryDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人外呼任务的开始时间。Unix时间戳格式，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2020-10-09 09:02:03',
                    ],
                ],
                [
                    'name' => 'Callee',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。当前仅支持查看一个被叫号码的外呼记录。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人外呼任务的话单详情，JSON格式。参数包括：'."\n"
                                    .'- **startDate**：应答时间。'."\n"
                                    .'- **stateDesc**：挂机原因，有早媒体状态码的情况下，使用早媒体码的原因。'."\n"
                                    .'- **statusCode**：状态码。'."\n"
                                    .'- **endDate**：结束时间。'."\n"
                                    .'- **calleeShowNumber**：主叫号显。'."\n"
                                    .'- **callee**：被叫号码。'."\n"
                                    .'- **duration**：计费时长。'."\n"
                                    .'- **gmtCreate**：创建时间。'."\n"
                                    .'- **hangupDirection**：挂机方向。'."\n"
                                    .'- **tags**：标签。'."\n"
                                    .'- **dialogCount**：对话轮次。'."\n"
                                    .'- **sureCount**：肯定次数。'."\n"
                                    .'- **denyCount**：否定次数。'."\n"
                                    .'- **rejectCount**：拒绝次数。'."\n"
                                    .'- **customCount**：自定义次数。'."\n"
                                    .'- **knowledgeCount**：知识库次数。'."\n"
                                    .'- **recordFile**：录音文件下载地址，URL的过期时间为48小时，请及时下载。'."\n"
                                    .'- **callId**：通话ID。'."\n"
                                    .'- **recordStatus**：录音文件状态。其中：'."\n"
                                    .'    - 1：有录音文件。'."\n"
                                    .'    - 2：没有录音文件。'."\n"
                                    .'- **knowledgeCommonCount**：知识库通用问题字数。'."\n"
                                    .'- **knowledgeBusinessCount**：知识库业务问题字数。'."\n"
                                    .'- **callee**：被叫号码。'."\n"
                                    .'- **dialogDetail**：对话明细，一个JSON数组。其中包括：'."\n"
                                    .'    - **role**：发言对象。'."\n"
                                    .'    - **content**：发言内容。'."\n"
                                    .'    - **time**：发言时间。'."\n"
                                    ."\n"
                                    .'> 返回字段供参考，具体字段以实际返回参数为准。',
                                'type' => 'string',
                                'example' => '{"rejectCount":0,"dialogCount":3,"tags":"","startDate":"2019-03-27 10:34:54","gmtCreate":"2019-03-27 10:34:40","sureCount":0,"state":"200000","recordFile":"http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_115987800002_02c3554f-ea24-422d-b1de-e671f455f21a_record.wav?OSSAccessKeyId=bypFNbGJVk73****&Signature=VWHOX%2FFhvvtSkxfMTw%2F5fdJUQuk%3D&Expires=1554382725","defaultCount":0,"endDate":"2019-03-27 10:35:09","calleeShowNumber":"1390000****","customCount":0,"callId":"1390000****","knowledgeCount":0,"recordStatus":1,"denyCount":0,"duration":16,"knowledgeCommonCount":0,"callee":"1390000****","knowledgeBusinessCount":0,"hangupDirection":1}'."\n",
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D86B61A8-F2EE-4E4C-9F05-08A4676FFD89',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{\\\\\\"rejectCount\\\\\\":0,\\\\\\"dialogCount\\\\\\":3,\\\\\\"tags\\\\\\":\\\\\\"\\\\\\",\\\\\\"startDate\\\\\\":\\\\\\"2019-03-27 10:34:54\\\\\\",\\\\\\"gmtCreate\\\\\\":\\\\\\"2019-03-27 10:34:40\\\\\\",\\\\\\"sureCount\\\\\\":0,\\\\\\"state\\\\\\":\\\\\\"200000\\\\\\",\\\\\\"recordFile\\\\\\":\\\\\\"http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_115987800002_02c3554f-ea24-422d-b1de-e671f455f21a_record.wav?OSSAccessKeyId=bypFNbGJVk73****&Signature=VWHOX%2FFhvvtSkxfMTw%2F5fdJUQuk%3D&Expires=1554382725\\\\\\",\\\\\\"defaultCount\\\\\\":0,\\\\\\"endDate\\\\\\":\\\\\\"2019-03-27 10:35:09\\\\\\",\\\\\\"calleeShowNumber\\\\\\":\\\\\\"1390000****\\\\\\",\\\\\\"customCount\\\\\\":0,\\\\\\"callId\\\\\\":\\\\\\"1390000****\\\\\\",\\\\\\"knowledgeCount\\\\\\":0,\\\\\\"recordStatus\\\\\\":1,\\\\\\"denyCount\\\\\\":0,\\\\\\"duration\\\\\\":16,\\\\\\"knowledgeCommonCount\\\\\\":0,\\\\\\"callee\\\\\\":\\\\\\"1390000****\\\\\\",\\\\\\"knowledgeBusinessCount\\\\\\":0,\\\\\\"hangupDirection\\\\\\":1}\\\\n\\",\\n  \\"RequestId\\": \\"D86B61A8-F2EE-4E4C-9F05-08A4676FFD89\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryCallDetailByTaskIdResponse>\\r\\n \\t<Data>{&quot;rejectCount&quot;:0,&quot;dialogCount&quot;:3,&quot;tags&quot;:1,&quot;startDate&quot;:&quot;2019-03-27 10:34:54&quot;,&quot;gmtCreate&quot;:&quot;2019-03-27 10:34:40&quot;,&quot;sureCount&quot;:0,&quot;state&quot;:&quot;200000&quot;,&quot;recordFile&quot;:&quot;http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_115987800002_02c3554f-ea24-422d-b1de-e671f455f21a_record.wav?OSSAccessKeyId=bypFNbGJVk73****&amp;Signature=VWHOX%2FFhvvtSkxfMTw%2F5fdJUQu****&amp;Expires=1554382725&quot;,&quot;defaultCount&quot;:0,&quot;endDate&quot;:&quot;2019-03-27 10:35:09&quot;,&quot;calleeShowNumber&quot;:&quot;053158552960&quot;,&quot;customCount&quot;:0,&quot;callId&quot;:&quot;115987800002^102789420002&quot;,&quot;dialogDetail&quot;:[{&quot;content&quot;:&quot;我的呼叫测试&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:34:45 CST 2019&quot;,&quot;role&quot;:&quot;robot&quot;},{&quot;content&quot;:&quot;喂，哎，你好&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:35:00 CST 2019&quot;,&quot;role&quot;:&quot;custom&quot;},{&quot;content&quot;:&quot;不好意思，可以慢点再说一遍吗?&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:35:00 CST 2019&quot;,&quot;role&quot;:&quot;robot&quot;},{&quot;content&quot;:&quot;喂&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:35:01 CST 2019&quot;,&quot;role&quot;:&quot;custom&quot;},{&quot;content&quot;:&quot;哦再见&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:35:08 CST 2019&quot;,&quot;role&quot;:&quot;custom&quot;},{&quot;content&quot;:&quot;不好意思，我这边听得不是很清楚，您可以再说一遍吗？&quot;,&quot;startTime&quot;:&quot;Wed Mar 27 10:35:08 CST 2019&quot;,&quot;role&quot;:&quot;robot&quot;}],&quot;knowledgeCount&quot;:0,&quot;recordStatus&quot;:1,&quot;denyCount&quot;:0,&quot;duration&quot;:16,&quot;knowledgeCommonCount&quot;:0,&quot;callee&quot;:&quot;13735460951&quot;,&quot;knowledgeBusinessCount&quot;:0,&quot;hangupDirection&quot;:1}</Data>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>D86B61A8-F2EE-4E4C-9F05-08A4676FFD89</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</QueryCallDetailByTaskIdResponse>","errorExample":""}]',
            'title' => '查看指定机器人外呼任务的话单详情',
            'summary' => '查看指定机器人外呼任务的话单详情。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotTaskDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~CreateRobotTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人任务详情信息。JSON格式。'."\n"
                                    .'- **Id**：机器人呼叫任务的唯一任务ID。'."\n"
                                    .'- **taskName**：任务名称。'."\n"
                                    .'- **robotId**：指定机器人ID。'."\n"
                                    .'- **robotName**：机器人名称。'."\n"
                                    .'- **corpName**：公司名称。'."\n"
                                    .'- **caller**：被叫显号。'."\n"
                                    .'- **numberStatusIdent**：号码状态识别。**true**为识别，**false**为不识别。'."\n"
                                    .'- **status**：任务状态。任务状态取值，请参见[QueryRobotTaskList](~~QueryRobotTaskList~~)中`status`取值。'."\n"
                                    .'- **scheduleType**：调度类型。**SINGLE**为立即启动，**ORDER**为定时启动。'."\n"
                                    .'- **retryType**：是否自动重拨。**1**为重拨，**0**为不重拨。'."\n"
                                    .'- **recallStateCodes**：需要重拨的通话状态。**200010**为关机、**200011**为停机、**200002**为占线、**200012**为呼损、**200005**为无法接通。'."\n"
                                    .'- **recallTimes**：重拨次数。'."\n"
                                    .'- **recallInterval**：重拨间隔。单位：分钟。'."\n"
                                    .'- **createTime**：任务创建时间。yyyy-MM-dd HH:mm:ss格式。'."\n"
                                    .'- **fireTime**: 任务启动时间。yyyy-MM-dd HH:mm:ss格式。'."\n"
                                    .'- **completeTime**: 任务完成时间。yyyy-MM-dd HH:mm:ss格式。'."\n"
                                    .'- **filename**：被叫号码文件名。'."\n"
                                    .'- **ossFilePath**：被叫号码文件地址。',
                                'type' => 'string',
                                'example' => '{"id":1045001,"taskName":"智能语音务","robotId":1000000075003,"robotName":"机器人","corpName":"xx公司 ","caller":"057156xxxx,0571568xxxx", "numberStatusIdent":true,"status":"INIT","scheduleType":"SINGLE", "retryType":1,"recallStateCodes":"200010,200011", "recallTimes":2,"recallInterval":5,"createTime": "2019-06-14 11:04:19","fireTime":"2019-06-14 11:05:23","completeTime": "2019-06-14 18:21:06","called": [{"fileName": "5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi", "ossFilePath": "http://test.cn-hangzhou.oss.aliyun-inc.com/5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi.xlsx"}]}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{\\\\\\"id\\\\\\":1045001,\\\\\\"taskName\\\\\\":\\\\\\"智能语音务\\\\\\",\\\\\\"robotId\\\\\\":1000000075003,\\\\\\"robotName\\\\\\":\\\\\\"机器人\\\\\\",\\\\\\"corpName\\\\\\":\\\\\\"xx公司 \\\\\\",\\\\\\"caller\\\\\\":\\\\\\"057156xxxx,0571568xxxx\\\\\\", \\\\\\"numberStatusIdent\\\\\\":true,\\\\\\"status\\\\\\":\\\\\\"INIT\\\\\\",\\\\\\"scheduleType\\\\\\":\\\\\\"SINGLE\\\\\\", \\\\\\"retryType\\\\\\":1,\\\\\\"recallStateCodes\\\\\\":\\\\\\"200010,200011\\\\\\", \\\\\\"recallTimes\\\\\\":2,\\\\\\"recallInterval\\\\\\":5,\\\\\\"createTime\\\\\\": \\\\\\"2019-06-14 11:04:19\\\\\\",\\\\\\"fireTime\\\\\\":\\\\\\"2019-06-14 11:05:23\\\\\\",\\\\\\"completeTime\\\\\\": \\\\\\"2019-06-14 18:21:06\\\\\\",\\\\\\"called\\\\\\": [{\\\\\\"fileName\\\\\\": \\\\\\"5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi\\\\\\", \\\\\\"ossFilePath\\\\\\": \\\\\\"http://test.cn-hangzhou.oss.aliyun-inc.com/5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi.xlsx\\\\\\"}]}\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRobotTaskDetailResponse>\\n<Data>\\n    <caller>0571568xxxx,0571568xxxx</caller>\\n    <createTime>2019-06-14 11:04:19</createTime>\\n    <status>INIT</status>\\n    <retryType>1</retryType>\\n    <taskName>智能语音务</taskName>\\n    <robotName>机器人</robotName>\\n    <id>1045001</id>\\n    <numberStatusIdent>true</numberStatusIdent>\\n    <scheduleType>SINGLE</scheduleType>\\n    <corpName>xx公司 </corpName>\\n    <recallTimes>2</recallTimes>\\n    <fireTime>2019-06-14 11:05:23</fireTime>\\n    <robotId>1000000075003</robotId>\\n    <called>\\n        <ossFilePath>http://test.cn-hangzhou.oss.aliyun-inc.com/5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi.xlsx</ossFilePath>\\n        <fileName>5102636f-7be6-4a2d-9ac7-755a2e140a50--robotCallApi</fileName>\\n    </called>\\n    <recallInterval>5</recallInterval>\\n    <recallStateCodes>200010,200011</recallStateCodes>\\n    <completeTime>2019-06-14 18:21:06</completeTime>\\n</Data>\\n<Message>OK</Message>\\n<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n<Code>OK</Code>\\n</QueryRobotTaskDetailResponse>\\n","errorExample":""}]',
            'title' => '获取智能语音任务详情',
            'summary' => '获取指定智能语音任务详情。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotTaskCallList' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。',
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
                        'description' => '每页记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~393531~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001****',
                    ],
                ],
                [
                    'name' => 'DurationFrom',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话时长，左边数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'DurationTo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话时长，右边数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'DialogCountFrom',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对话轮次，左边数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'DialogCountTo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对话轮次，右边数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'HangupDirection',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂断方向。取值：'."\n"
                            ."\n"
                            .'- **0**：用户。'."\n"
                            .'- **1**：机器人。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CallResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话结果。取值：'."\n"
                            .'- **200002**：占线。'."\n"
                            .'- **200005**：无法接通。'."\n"
                            .'- **200010**：关机。'."\n"
                            .'- **200011**：停机。'."\n"
                            .'- **200012**：呼损。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200002',
                    ],
                ],
                [
                    'name' => 'Called',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1300****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '智能语音任务通话列表，JSON数组格式。'."\n"
                                    .'- **taskId**：机器人呼叫任务的唯一任务ID。'."\n"
                                    .'- **caller**：主叫号码。'."\n"
                                    .'- **called**：被叫号码。'."\n"
                                    .'- **duration**：通话时长，单位：秒。'."\n"
                                    .'- **label**：标签。'."\n"
                                    .'- **dialogCount**：对话轮次。'."\n"
                                    .'- **callResult**：通话结果。'."\n"
                                    .'- **hangupDirection**：挂断方向。**1**：用户；**0**：机器人。'."\n"
                                    .'- **transferResult**：转接人工状态。**1**：转接成功；**0**：转接失败；**3**：未转人工。'."\n"
                                    .'- **transferNumber**：人工座席号码。'."\n"
                                    .'- **transferFailReson**：转接人工失败原因。'."\n"
                                    .'- **callId**：通话的唯一回执ID。'."\n"
                                    .'- **recallCurTimes**：重试次数。'."\n"
                                    .'- **callStartTime**：通话开始时间。'."\n"
                                    .'- **callEndTime**：通话结束时间。'."\n"
                                    .'- **sureCount**：肯定次数。'."\n"
                                    .'- **denyCount**：否定次数。'."\n"
                                    .'- **rejectCount**：拒绝次数。'."\n"
                                    .'- **customCount**：用户自定义次数。'."\n"
                                    .'- **konwledgeCount**：查询知识库次数。'."\n"
                                    .'- **defaultCount**：默认次数。'."\n"
                                    .'- **knowledgeBusinessCount**：业务问题次数。'."\n"
                                    .'- **knowledgeCommonCount**：通用问题次数。',
                                'type' => 'string',
                                'example' => '[ {"taskId":"1045001", "caller":"0571-889****", "called": "130****0000", "duration":"60", "label":"邀约，有房，无车", "dialogCount":"3", "callResult":"无法接通", "hangupDirection":"1", "transferResult":"3", "transferNumber":"0571-8833****", "transferFailReason":"用户挂断", "callId":"116950320375^10375010****", "recallCurTimes":"2", "callStartTime":"2019.06.14 15:22:23", "callEndTime":"2019.06.14 15:22:55", "sureCount":"2", "denyCount":"2", "rejectCount":"0", "customCount:"0", "knowledgeCount":"0", "defaultCount":"0", "knowledgeBusinessCount":"0", "knowledgeCommonCount":"0"} ]',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"[ {\\\\\\"taskId\\\\\\":\\\\\\"1045001\\\\\\", \\\\\\"caller\\\\\\":\\\\\\"0571-889****\\\\\\", \\\\\\"called\\\\\\": \\\\\\"130****0000\\\\\\", \\\\\\"duration\\\\\\":\\\\\\"60\\\\\\", \\\\\\"label\\\\\\":\\\\\\"邀约，有房，无车\\\\\\", \\\\\\"dialogCount\\\\\\":\\\\\\"3\\\\\\", \\\\\\"callResult\\\\\\":\\\\\\"无法接通\\\\\\", \\\\\\"hangupDirection\\\\\\":\\\\\\"1\\\\\\", \\\\\\"transferResult\\\\\\":\\\\\\"3\\\\\\", \\\\\\"transferNumber\\\\\\":\\\\\\"0571-8833****\\\\\\", \\\\\\"transferFailReason\\\\\\":\\\\\\"用户挂断\\\\\\", \\\\\\"callId\\\\\\":\\\\\\"116950320375^10375010****\\\\\\", \\\\\\"recallCurTimes\\\\\\":\\\\\\"2\\\\\\", \\\\\\"callStartTime\\\\\\":\\\\\\"2019.06.14 15:22:23\\\\\\", \\\\\\"callEndTime\\\\\\":\\\\\\"2019.06.14 15:22:55\\\\\\", \\\\\\"sureCount\\\\\\":\\\\\\"2\\\\\\", \\\\\\"denyCount\\\\\\":\\\\\\"2\\\\\\", \\\\\\"rejectCount\\\\\\":\\\\\\"0\\\\\\", \\\\\\"customCount:\\\\\\"0\\\\\\", \\\\\\"knowledgeCount\\\\\\":\\\\\\"0\\\\\\", \\\\\\"defaultCount\\\\\\":\\\\\\"0\\\\\\", \\\\\\"knowledgeBusinessCount\\\\\\":\\\\\\"0\\\\\\", \\\\\\"knowledgeCommonCount\\\\\\":\\\\\\"0\\\\\\"} ]\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRobotTaskCallListResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>[ { “taskId” : 1045001， “caller” : “0571-889****”, “called” : “130****0000”, “duration” : “60”, “label” : “邀约，有房，无车”, “dialogCount” : “3”, “callResult” : “无法接通”, “hangupDirection” : “1”, “transferResult“ : “3”, “transferNumber” ：0571-8833****, “transferFailReason” ：“用户挂断”, “callId” ：“116950320375^10375010****”, “recallCurTimes” : 2, “callStartTime” : “2019.06.14 15:22:23”, “callEndTime” : “2019.06.14 15:22:55”, “sureCount” : 2, “denyCount” : 2, “rejectCount” : 0, “customCount” : 0, “konwledgeCount” : 0, “defaultCount” : 0, “knowledgeBusinessCount” : 0, “knowledgeCommonCount” : 0 } ]</Data>\\n    <RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n</QueryRobotTaskCallListResponse>","errorExample":""}]',
            'title' => '查询任务内执行条目列表',
            'summary' => '查询指定任务内执行条目列表。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotInfoList' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审核状态，取值：'."\n"
                            .'- **CONFIGURABLE**：可配置。'."\n"
                            .'- **AUDITING**：审核中 。'."\n"
                            .'- **AUDITPASS**：审核通过。'."\n"
                            .'- **AUDITFAIL**：审核失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AUDITING',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人的基本信息，JSON格式。参数如下：'."\n"
                                    .'- **id**：机器人id。'."\n"
                                    .'- **robotName**：机器人名称。'."\n"
                                    .'- **robotType**：机器人类型。'."\n"
                                    .'- **auditStatus**：审核状态。'."\n"
                                    .'- **gmtCreate**：创建时间。'."\n"
                                    .'- **gmtModified**：修改时间。'."\n"
                                    .'- **partnerId**：合作伙伴ID。'."\n"
                                    .'- **asrId**：ASR模型ID。'."\n"
                                    .'- **asrType**：ASR类型，包括**公有**和**私有**。'."\n"
                                    .'- **remark**：备注说明。',
                                'type' => 'string',
                                'example' => '{["id":1000010920004, "gmtModified":"Thu Mar 21 15:38:55 CST 2019", "auditStatus":"AUDITPASS","gmtCreate":"Thu Mar 21 12:00:51 CST 2019","remark":"测试勿删，测试请通过","partnerId":100000022670001,"asrId":"a9a1d69081fd4266ad788346bf5e1b6c","robotType":"CUSTOM","asrType":"1","robotName":"催收场景5--ssml标记2-RVR-副本"},{"id":1000010920003,"gmtModified":"Thu Mar 21 11:51:10 CST 2019","auditStatus":"AUDITPASS","gmtCreate":"Thu Mar 21 11:44:57 CST 2019","remark":"测试勿删，内部测试请通过","partnerId":100000022670001,"asrId":"a9a1d69081fd4266ad788346bf5e1b6c","robotType":"CUSTOM","asrType":"1","robotName":"催收场景5-ssml标记2-RVR"]}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F59AF338-655D-48E8-9471-5EB07692B1CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{[\\\\\\"id\\\\\\":1000010920004, \\\\\\"gmtModified\\\\\\":\\\\\\"Thu Mar 21 15:38:55 CST 2019\\\\\\", \\\\\\"auditStatus\\\\\\":\\\\\\"AUDITPASS\\\\\\",\\\\\\"gmtCreate\\\\\\":\\\\\\"Thu Mar 21 12:00:51 CST 2019\\\\\\",\\\\\\"remark\\\\\\":\\\\\\"测试勿删，测试请通过\\\\\\",\\\\\\"partnerId\\\\\\":100000022670001,\\\\\\"asrId\\\\\\":\\\\\\"a9a1d69081fd4266ad788346bf5e1b6c\\\\\\",\\\\\\"robotType\\\\\\":\\\\\\"CUSTOM\\\\\\",\\\\\\"asrType\\\\\\":\\\\\\"1\\\\\\",\\\\\\"robotName\\\\\\":\\\\\\"催收场景5--ssml标记2-RVR-副本\\\\\\"},{\\\\\\"id\\\\\\":1000010920003,\\\\\\"gmtModified\\\\\\":\\\\\\"Thu Mar 21 11:51:10 CST 2019\\\\\\",\\\\\\"auditStatus\\\\\\":\\\\\\"AUDITPASS\\\\\\",\\\\\\"gmtCreate\\\\\\":\\\\\\"Thu Mar 21 11:44:57 CST 2019\\\\\\",\\\\\\"remark\\\\\\":\\\\\\"测试勿删，内部测试请通过\\\\\\",\\\\\\"partnerId\\\\\\":100000022670001,\\\\\\"asrId\\\\\\":\\\\\\"a9a1d69081fd4266ad788346bf5e1b6c\\\\\\",\\\\\\"robotType\\\\\\":\\\\\\"CUSTOM\\\\\\",\\\\\\"asrType\\\\\\":\\\\\\"1\\\\\\",\\\\\\"robotName\\\\\\":\\\\\\"催收场景5-ssml标记2-RVR\\\\\\"]}\\",\\n  \\"RequestId\\": \\"F59AF338-655D-48E8-9471-5EB07692B1CC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<QueryRobotInfoListResponse>\\r\\n\\t<Data>[{\\"id\\":1000010920004,\\"gmtModified\\":\\"Thu Mar 21 15:38:55 CST 2019\\",\\"auditStatus\\":\\"AUDITPASS\\",\\"gmtCreate\\":\\"Thu Mar 21 12:00:51 CST 2019\\",\\"remark\\":\\"测试勿删，测试请通过\\",\\"partnerId\\":100000022670001,\\"asrId\\":\\"a9a1d69081fd4266ad788346bf5e1b6c\\",\\"robotType\\":\\"CUSTOM\\",\\"asrType\\":\\"1\\",\\"robotName\\":\\"催收场景5-ssml标记2-RVR-副本\\"},{\\"id\\":1000010920003,\\"gmtModified\\":\\"Thu Mar 21 11:51:10 CST 2019\\",\\"auditStatus\\":\\"AUDITPASS\\",\\"gmtCreate\\":\\"Thu Mar 21 11:44:57 CST 2019\\",\\"remark\\":\\"测试勿删，测试请通过\\",\\"partnerId\\":100000022670001,\\"asrId\\":\\"a9a1d69081fd4266ad788346bf5e1b6c\\",\\"robotType\\":\\"CUSTOM\\",\\"asrType\\":\\"1\\",\\"robotName\\":\\"催收场景-ssml标记2-RVR\\"}}]</Data>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>E8EF9B41-C4DC-44D5-A25B-DA9AC7791998</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</QueryRobotInfoListResponse>","errorExample":""}]',
            'title' => '查询智能语音机器人列表',
            'summary' => '查看智能语音机器人列表，获取机器人详细信息。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryRobotTaskCallDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。调用[CreateRobotTask](~~393531~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045001',
                    ],
                ],
                [
                    'name' => 'Callee',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '130****0000',
                    ],
                ],
                [
                    'name' => 'QueryDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询时间，请使用时间戳格式。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1603239801000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '智能语音任务通话详情，JSON格式。'."\n"
                                    .'- **taskId**：机器人呼叫任务的唯一任务ID。'."\n"
                                    .'- **caller**：主叫号码。'."\n"
                                    .'- **called**：被叫号码。'."\n"
                                    .'- **duration**：通话时长。单位：秒。'."\n"
                                    .'- **label**：标签。'."\n"
                                    .'- **dialogCount**：对话轮次。'."\n"
                                    .'- **callResult**：通话结果。'."\n"
                                    .'- **hangupDirection**：挂断方向。**0**：机器人。**1**：用户。'."\n"
                                    .'- **transferResult**：转接人工状态。**1**：转接成功，**0**：转接失败，**3**：未转人工。'."\n"
                                    .'- **transferNumber**：人工座席号码。'."\n"
                                    .'- **transferFailReson**：转接人工失败原因。'."\n"
                                    .'- **callId**：通话的唯一回执ID。组成形成：`taskId+^+bizId`。'."\n"
                                    .'- **recallCurTimes**：重试次数。'."\n"
                                    .'- **callStartTime**：通话开始时间。'."\n"
                                    .'- **callEndTime**：通话结束时间。'."\n"
                                    .'- **sureCount**：肯定次数。'."\n"
                                    .'- **denyCount**：否定次数。'."\n"
                                    .'- **rejectCount**：拒绝次数。'."\n"
                                    .'- **customCount**：自定义次数。'."\n"
                                    .'- **knowledgeCount**：知识库次数。'."\n"
                                    .'- **defaultCount**：默认次数。'."\n"
                                    .'- **knowledgeBusinessCount**：业务问题次数。'."\n"
                                    .'- **knowledgeCommonCount**：通用问题次数。'."\n"
                                    .'- **recordStatus**：录音文件状态。**1**：有录音文件；**2**：没有录音文件。'."\n"
                                    .'- **recordFile**：录音文件下载地址。'."\n"
                                    .'- **dialogDetail**：对话明细，Json数组。**role**：发言对象；**content**：发言内容；**speakTime**：发言时间。'."\n",
                                'type' => 'string',
                                'example' => '{ "taskId" : 1045001, "caller" : "0571-8899****", "called" : "130****0000", "duration" : "60", "label" : "邀约，有房，无车", "dialogCount": "3", "callResult" : "无法接通", "hangupDirection" : "1", "transferResult" : "3", "transferNumber" ：0571-8833****, "transferFailReason" ："用户挂断", "callId" ："116950320375^10375010****", "recallCurTimes" : 2, "callStartTime" : "2019.06.14 15:22:23", "callEndTime" : "2019.06.14 15:22:55", "sureCount" : 2, "denyCount" : 2, "rejectCount" : 0, "customCount" : 0, "knowledgeCount" : 0, "defaultCount" : 0, "knowledgeBusinessCount" : 0, "knowledgeCommonCount" : 0, "recordStatus":1, "recordFile": "http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_117074080001_ccd71132-8256-4eb4-9217-884e1d87c0d4_record.wav?Expires=1562740186&OSSAccessKeyId=bypFNbGJVk7****&Signature=99losPmytVl%2BMH85noZGD******", "dialogDetail": [{"role": "robot","speakTime": "2019-06-19 20:44:17","content":"开场白"}] }',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"{ \\\\\\"taskId\\\\\\" : 1045001, \\\\\\"caller\\\\\\" : \\\\\\"0571-8899****\\\\\\", \\\\\\"called\\\\\\" : \\\\\\"130****0000\\\\\\", \\\\\\"duration\\\\\\" : \\\\\\"60\\\\\\", \\\\\\"label\\\\\\" : \\\\\\"邀约，有房，无车\\\\\\", \\\\\\"dialogCount\\\\\\": \\\\\\"3\\\\\\", \\\\\\"callResult\\\\\\" : \\\\\\"无法接通\\\\\\", \\\\\\"hangupDirection\\\\\\" : \\\\\\"1\\\\\\", \\\\\\"transferResult\\\\\\" : \\\\\\"3\\\\\\", \\\\\\"transferNumber\\\\\\" ：0571-8833****, \\\\\\"transferFailReason\\\\\\" ：\\\\\\"用户挂断\\\\\\", \\\\\\"callId\\\\\\" ：\\\\\\"116950320375^10375010****\\\\\\", \\\\\\"recallCurTimes\\\\\\" : 2, \\\\\\"callStartTime\\\\\\" : \\\\\\"2019.06.14 15:22:23\\\\\\", \\\\\\"callEndTime\\\\\\" : \\\\\\"2019.06.14 15:22:55\\\\\\", \\\\\\"sureCount\\\\\\" : 2, \\\\\\"denyCount\\\\\\" : 2, \\\\\\"rejectCount\\\\\\" : 0, \\\\\\"customCount\\\\\\" : 0, \\\\\\"knowledgeCount\\\\\\" : 0, \\\\\\"defaultCount\\\\\\" : 0, \\\\\\"knowledgeBusinessCount\\\\\\" : 0, \\\\\\"knowledgeCommonCount\\\\\\" : 0, \\\\\\"recordStatus\\\\\\":1, \\\\\\"recordFile\\\\\\": \\\\\\"http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_117074080001_ccd71132-8256-4eb4-9217-884e1d87c0d4_record.wav?Expires=1562740186&OSSAccessKeyId=bypFNbGJVk7****&Signature=99losPmytVl%2BMH85noZGD******\\\\\\", \\\\\\"dialogDetail\\\\\\": [{\\\\\\"role\\\\\\": \\\\\\"robot\\\\\\",\\\\\\"speakTime\\\\\\": \\\\\\"2019-06-19 20:44:17\\\\\\",\\\\\\"content\\\\\\":\\\\\\"开场白\\\\\\"}] }\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRobotTaskCallDetailResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>{ \\"taskId\\" : 1045001, \\"caller\\" : \\"0571-8899****\\", \\"called\\" : \\"130****0000\\", \\"duration\\" : \\"60\\", \\"label\\" : \\"邀约，有房，无车\\", \\"dialogCount\\": \\"3\\", \\"callResult\\" : \\"无法接通\\", \\"hangupDirection\\" : \\"1\\", \\"transferResult\\" : \\"3\\", \\"transferNumber\\" ：0571-8833****, \\"transferFailReason\\" ：\\"用户挂断\\", \\"callId\\" ：\\"116950320375^10375010****\\", \\"recallCurTimes\\" : 2, \\"callStartTime\\" : \\"2019.06.14 15:22:23\\", \\"callEndTime\\" : \\"2019.06.14 15:22:55\\", \\"sureCount\\" : 2, \\"denyCount\\" : 2, \\"rejectCount\\" : 0, \\"customCount\\" : 0, \\"konwledgeCount\\" : 0, \\"defaultCount\\" : 0, \\"knowledgeBusinessCount\\" : 0, \\"knowledgeCommonCount\\" : 0, \\"recordStatus\\":1, \\"recordFile\\": \\"http://alicom-fc-record-biz.cn-hangzhou.oss.aliyun-inc.com/Freeswitch_RU_117074080001_ccd71132-8256-4eb4-9217-884e1d87c0d4_record.wav?Expires=1562740186&amp;OSSAccessKeyId=bypFNbGJVk7****&amp;Signature=99losPmytVl%2BMH85noZGD******\\", \\"dialogDetail\\": [{\\"role\\": \\"robot\\",\\"speakTime\\": \\"2019-06-19 20:44:17\\",\\"content\\":\\"开场白\\"}] }</Data>\\n    <RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n</QueryRobotTaskCallDetailResponse>","errorExample":""}]',
            'title' => '查询智能机器人任务执行详情',
            'summary' => '获取单个执行条目即单个被叫号码的任务明细。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UploadRobotTaskCalledFile' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人呼叫任务的唯一任务ID。可通过[CreateRobotTask](~~CreateRobotTask~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1045****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码。多个号码之间使用半角逗号（,）分隔。'."\n"
                            ."\n"
                            .'> 在创建智能语音机器人任务后，需要分批上传被叫号码，每个任务最多上传30万个号码，可分多次上传完成。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1370****000,1370****111',
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TTS模板的变量值。格式为JSON。TtsParam和TtsParamHead变量名称一一对应。'."\n"
                            ."\n"
                            .'- 如果全部号码携带的参数相同，可将number字段里的值写为**all**，变量值仅需上传一份即可。'."\n"
                            .'- 如果部分号码携带的参数相同，可将number字段里的值写为**all**，其他号码正常输入number值和对应的变量值，系统会优先取号码自带值。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '[{"number":"1370****000","params":["小王","小李","小周"]}]',
                    ],
                ],
                [
                    'name' => 'TtsParamHead',
                    'in' => 'query',
                    'schema' => [
                        'description' => '带变量的呼叫任务。格式为JSON。变量名称列表，和TtsParam配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '["name1","name2","name3"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '机器人呼叫任务的唯一任务ID。'."\n"
                                    ."\n"
                                    .'可通过此ID调用[QueryRobotTaskDetail](~~QueryRobotTaskDetail~~)接口查询任务详情。',
                                'type' => 'string',
                                'example' => '10450****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69D23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": \\"10450****\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69D23\\"\\n}","errorExample":""},{"type":"xml","example":"<UploadRobotTaskCalledFileResponse>\\n\\t<Message>OK</Message>\\n\\t<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69D23</RequestId>\\n\\t<Code>OK</Code>\\n\\t<Data>10450****</Data>\\n</UploadRobotTaskCalledFileResponse>","errorExample":""}]',
            'title' => '上传智能语音的被叫号码',
            'summary' => '上传智能语音任务的被叫号码。',
            'description' => '智能语音机器人功能升级，老功能将于2023.12.31停止服务，新功能请登录[智能联络中心控制台](https://aiccs.console.aliyun.com/overview)，在**智能外呼机器人**页面开通使用。老客户（语音服务已开通该功能的客户）目前可继续使用该功能，为避免给您带来业务损失，请在2023.12.31前完成业务迁移。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetHotlineQualificationByOrder' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单号。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台400资质页面](https://dyvms.console.aliyun.com/qualification/400)查看工单号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '153345012****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他状态码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6086693B-2250-17CE-A41F-06259AB6DB1B',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '资质状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常状态。'."\n"
                                            .'- **OTHER**：不正常状态。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'QualificationId' => [
                                        'description' => '400号码的资质ID。',
                                        'type' => 'string',
                                        'example' => '10000008748****',
                                    ],
                                    'OrderId' => [
                                        'description' => '申请工单号。',
                                        'type' => 'string',
                                        'example' => '15334****',
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
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"6086693B-2250-17CE-A41F-06259AB6DB1B\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"QualificationId\\": \\"10000008748****\\",\\n    \\"OrderId\\": \\"15334****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHotlineQualificationByOrderResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>6086693B-2250-17CE-A41F-06259AB6DB1B</RequestId>\\n    <Data>\\n        <Status>NORMA</Status>\\n        <QualificationId>1478*****</QualificationId>\\n        <OrderId>22456****</OrderId>\\n    </Data>\\n</GetHotlineQualificationByOrderResponse>","errorExample":""}]',
            'title' => '获取400号码资质ID',
            'summary' => '通过资质申请工单号获取400号码的资质ID。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
        ],
        'ListHotlineTransferRegisterFile' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。您可以通过[GetHotlineQualificationByOrder](~~393548~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1000****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。取值范围：**1~10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'exclusiveMaximum' => false,
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'HotlineNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '400号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6086693B-2250-17CE-A41F-06259AB6DB1B',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Values' => [
                                        'description' => '备案文件。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MngOpMail' => [
                                                    'description' => '经办人邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'username@example.com',
                                                ],
                                                'MngOpName' => [
                                                    'description' => '经办人姓名。',
                                                    'type' => 'string',
                                                    'example' => 'A***',
                                                ],
                                                'CorpName' => [
                                                    'description' => '企业名称。',
                                                    'type' => 'string',
                                                    'example' => 'A**',
                                                ],
                                                'Agree' => [
                                                    'description' => '确认承诺书真实性。',
                                                    'type' => 'string',
                                                    'example' => 'true',
                                                ],
                                                'MngOpMobile' => [
                                                    'description' => '经办人手机号。',
                                                    'type' => 'string',
                                                    'example' => '150****0000',
                                                ],
                                                'MngOpIdentityCard' => [
                                                    'description' => '经办人身份证号。',
                                                    'type' => 'string',
                                                    'example' => '5****************9',
                                                ],
                                                'HotlineNumber' => [
                                                    'description' => '400号码。',
                                                    'type' => 'string',
                                                    'example' => '400903****',
                                                ],
                                                'QualificationId' => [
                                                    'description' => '资质ID。',
                                                    'type' => 'string',
                                                    'example' => '10000004933****',
                                                ],
                                                'ResUniqueCode' => [
                                                    'description' => '资源唯一编码。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"6086693B-2250-17CE-A41F-06259AB6DB1B\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"Values\\": [\\n      {\\n        \\"MngOpMail\\": \\"username@example.com\\",\\n        \\"MngOpName\\": \\"A***\\",\\n        \\"CorpName\\": \\"A**\\",\\n        \\"Agree\\": \\"true\\",\\n        \\"MngOpMobile\\": \\"150****0000\\",\\n        \\"MngOpIdentityCard\\": \\"5****************9\\",\\n        \\"HotlineNumber\\": \\"400903****\\",\\n        \\"QualificationId\\": \\"10000004933****\\",\\n        \\"ResUniqueCode\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取号码备案信息',
            'summary' => '通过SubmitHotlineTransferRegister接口提交备案信息后，通过此接口获取号码备案信息。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SubmitHotlineTransferRegister' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TransferPhoneNumberInfos',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '号码备案信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '号码备案信息。',
                            'type' => 'object',
                            'properties' => [
                                'PhoneNumber' => [
                                    'description' => '备案号码。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '1580000****',
                                ],
                                'PhoneNumberOwnerName' => [
                                    'description' => '机主真实姓名或公司名。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'A***',
                                ],
                                'IdentityCard' => [
                                    'description' => '机主身份证号。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '500***',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。您可以通过[GetHotlineQualificationByOrder](~~393548~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10000004933****',
                    ],
                ],
                [
                    'name' => 'OperatorName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人姓名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'A***',
                    ],
                ],
                [
                    'name' => 'OperatorMail',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人邮箱。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'username@example.com',
                    ],
                ],
                [
                    'name' => 'OperatorMailVerifyCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人邮箱验证码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'OperatorMobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人手机号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '158****7230',
                    ],
                ],
                [
                    'name' => 'OperatorMobileVerifyCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人手机验证码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'OperatorIdentityCard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '经办人身份证号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5****************9',
                    ],
                ],
                [
                    'name' => 'Agreement',
                    'in' => 'query',
                    'schema' => [
                        'description' => '确认承诺书真实性。取值：'."\n"
                            ."\n"
                            .'- **true**：真实。'."\n"
                            .'- **false**：不真实。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'HotlineNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '400号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '备案ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2258****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6086693B-2250-17CE-A41F-06259AB6DB1B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'Mobile.Invalid',
                        'errorMessage' => 'The mobile number is invalid.',
                    ],
                    [
                        'errorCode' => 'MobileVerifyCode.Invalid',
                        'errorMessage' => 'The mobile verification code is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": 0,\\n  \\"RequestId\\": \\"6086693B-2250-17CE-A41F-06259AB6DB1B\\"\\n}","type":"json"}]',
            'title' => '提交号码备案',
            'summary' => '您在设置400号码转呼号码前，需要对转呼的号码提交号码备案。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetTransferCalleePoolConfig' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Details',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '呼转号码信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '呼转号码信息。',
                            'type' => 'object',
                            'properties' => [
                                'Caller' => [
                                    'description' => '主叫号码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '150****0000',
                                ],
                                'Called' => [
                                    'description' => '被叫号码。已备案的号码。'."\n"
                                        ."\n"
                                        .'您可以通过[SubmitHotlineTransferRegister](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-submithotlinetransferregister?spm=a2c4g.11186623.0.0.7b784120BH0XPT)接口，提交号码备案。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '151****0000',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '呼转号码。'."\n"
                            ."\n"
                            .'您已在[语音服务控制台真实号码管理页面](https://dyvms.console.aliyun.com/number/list/400)购买的400号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400903****',
                    ],
                ],
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。您可以通过[GetHotlineQualificationByOrder](~~393548~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '190***',
                    ],
                ],
                [
                    'name' => 'CalledRouteMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '呼叫模式。取值：'."\n"
                            ."\n"
                            .'- **roundRobin**：轮询。'."\n"
                            .'- **random**：随机。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'roundRobin',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。'."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '转呼号码配置详情。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7518CE1-B0FF-4C6F-9252-BF80271B2F99',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E7518CE1-B0FF-4C6F-9252-BF80271B2F99\\"\\n}","type":"json"}]',
            'title' => '设置400号码呼转',
            'summary' => '为400号码设置转呼号码。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryCallInPoolTransferConfig' => [
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
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您已购买的400号码。'."\n"
                            ."\n"
                            .'您可以在[语音服务控制台真实号管理](https://dyvms.console.aliyun.com/number/list/400)页面查看400号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400903****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BF47617-7851-48F7-A3A1-2021342A78E2',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1623137002000',
                                    ],
                                    'CalledRouteMode' => [
                                        'description' => '呼叫模式。取值：'."\n"
                                            ."\n"
                                            .'- **roundRobin**：轮询。'."\n"
                                            .'- **random**：随机。',
                                        'type' => 'string',
                                        'example' => 'random',
                                    ],
                                    'TransferTimeout' => [
                                        'description' => '超时时长。',
                                        'type' => 'string',
                                        'example' => '30',
                                    ],
                                    'Details' => [
                                        'description' => '返回结果详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Called' => [
                                                    'description' => '呼转号码。',
                                                    'type' => 'string',
                                                    'example' => '400903****',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"7BF47617-7851-48F7-A3A1-2021342A78E2\\",\\n  \\"Data\\": {\\n    \\"GmtCreate\\": 1623137002000,\\n    \\"CalledRouteMode\\": \\"random\\",\\n    \\"TransferTimeout\\": \\"30\\",\\n    \\"Details\\": [\\n      {\\n        \\"Called\\": \\"400903****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryCallInPoolTransferConfigResponse>\\n<Message>OK</Message>\\n<RequestId>7BF47617-7851-48F7-A3A1-2021342A78E2</RequestId>\\n<Data>\\n    <GmtCreate>1623137002000</GmtCreate>\\n    <CalledRouteMode>random</CalledRouteMode>\\n    <TransferTimeout>30</TransferTimeout>\\n    <Details>\\n        <Called>400****</Called>\\n    </Details>\\n</Data>\\n<Code>OK</Code>\\n</QueryCallInPoolTransferConfigResponse>","errorExample":""}]',
            'title' => '查询400号码呼转配置详情',
            'summary' => '设置400号码转呼后，通过此接口查询400号码呼转配置详情。',
            'description' => '您已通过[SetTransferCalleePoolConfig](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-settransfercalleepoolconfig?spm=a2c4g.11186623.0.0.19b52352fO0GIb)接口设置转呼。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryCallInTransferRecord' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '呼转号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400****',
                    ],
                ],
                [
                    'name' => 'CallInCaller',
                    'in' => 'query',
                    'schema' => [
                        'description' => '呼入主叫。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '150****0000',
                    ],
                ],
                [
                    'name' => 'QueryDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询时间。格式：YYYY-MM-DD hh:mm:ss。'."\n"
                            ."\n"
                            .'> 查询结果为当天的所有的呼转记录。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-06-28 00:00:00',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。取值范围：**1~10**。',
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
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BF47617-7851-48F7-A3A1-2021342A78E2',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'Values' => [
                                        'description' => '呼转记录。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CallInCalled' => [
                                                    'description' => '呼入被叫。',
                                                    'type' => 'string',
                                                    'example' => '150****0000',
                                                ],
                                                'TransferCalled' => [
                                                    'description' => '呼转被叫。',
                                                    'type' => 'string',
                                                    'example' => '151****0000',
                                                ],
                                                'RecordUrl' => [
                                                    'description' => '录音地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/dayuBizVoiceMrg/4238c230-9e74-41be-90b8-2fbe7684****.wav?Expires=1627538265&OSSAccessKeyId=bypFNbGJVk73****&Signature=****mUqkPqIQ%3D',
                                                ],
                                                'TransferCaller' => [
                                                    'description' => '呼转主叫。',
                                                    'type' => 'string',
                                                    'example' => '151****0000',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '呼叫时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2020-10-03 10:21:21',
                                                ],
                                                'CallInCaller' => [
                                                    'description' => '呼入主叫。',
                                                    'type' => 'string',
                                                    'example' => '150****0000',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"7BF47617-7851-48F7-A3A1-2021342A78E2\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 50,\\n    \\"Values\\": [\\n      {\\n        \\"CallInCalled\\": \\"150****0000\\",\\n        \\"TransferCalled\\": \\"151****0000\\",\\n        \\"RecordUrl\\": \\"http://alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/dayuBizVoiceMrg/4238c230-9e74-41be-90b8-2fbe7684****.wav?Expires=1627538265&OSSAccessKeyId=bypFNbGJVk73****&Signature=****mUqkPqIQ%3D\\",\\n        \\"TransferCaller\\": \\"151****0000\\",\\n        \\"GmtCreate\\": 0,\\n        \\"CallInCaller\\": \\"150****0000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryCallInTransferRecordResponse>\\n<Message>OK</Message>\\n<RequestId>7BF47617-7851-48F7-A3A1-2021342A78E2</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <Total>50</Total>\\n    <PageNo>1</PageNo>\\n    <Values>\\n        <GmtCreate>1624865503000</GmtCreate>\\n        <CallInCalled>150****0000</CallInCalled>\\n        <RecordUrl>http://alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/dayuBizVoiceMrg/4238c230-9e74-41be-90b8-2fbe7684eea0.wav?Expires=1627538265&amp;OSSAccessKeyId=bypFNbGJVk73PsLI&amp;Signature=****mUqkPqIQ%3D</RecordUrl>\\n        <TransferCaller>151****0000</TransferCaller>\\n        <TransferCalled>151****0000</TransferCalled>\\n        <CallInCaller>150****0000</CallInCaller>\\n    </Values>\\n</Data>\\n<Code>OK</Code>\\n</QueryCallInTransferRecordResponse>","errorExample":""}]',
            'title' => '查询400号码呼转记录',
            'summary' => '查询呼转记录。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' 无',
        ],
        'ListHotlineTransferNumber' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。您可以通过[GetHotlineQualificationByOrder](~~393548~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '100***',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。默认取值**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。取值范围：**1~10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'exclusiveMaximum' => true,
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'HotlineNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '400号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '400****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6086693B-2250-17CE-A41F-06259AB6DB1B',
                            ],
                            'Data' => [
                                'description' => '备案号码信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Values' => [
                                        'description' => '号码列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhoneNumber' => [
                                                    'description' => '备案号码。',
                                                    'type' => 'string',
                                                    'example' => '1580000****',
                                                ],
                                                'NumberOwnerName' => [
                                                    'description' => '机主真实姓名或公司名。',
                                                    'type' => 'string',
                                                    'example' => 'A***',
                                                ],
                                                'QualificationId' => [
                                                    'description' => '资质ID。',
                                                    'type' => 'string',
                                                    'example' => '100***',
                                                ],
                                                'HotlineNumber' => [
                                                    'description' => '400号码。',
                                                    'type' => 'string',
                                                    'example' => '400****',
                                                ],
                                                'IdentityCard' => [
                                                    'description' => '机主身份证号。',
                                                    'type' => 'string',
                                                    'example' => '500***4119',
                                                ],
                                                'ResUniqueCode' => [
                                                    'description' => '资源Code。',
                                                    'type' => 'string',
                                                    'example' => '1***',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"6086693B-2250-17CE-A41F-06259AB6DB1B\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 1,\\n    \\"Values\\": [\\n      {\\n        \\"PhoneNumber\\": \\"1580000****\\",\\n        \\"NumberOwnerName\\": \\"A***\\",\\n        \\"QualificationId\\": \\"100***\\",\\n        \\"HotlineNumber\\": \\"400****\\",\\n        \\"IdentityCard\\": \\"500***4119\\",\\n        \\"ResUniqueCode\\": \\"1***\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取400号码呼转列表',
            'summary' => '获取备案的呼转号码列表。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SendVerification' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'VerifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信验证码发送类型。固定取值：**SMS**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型。固定取值：**CONTACT**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CONTACT',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信验证码的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '150****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '验证码是否发送成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6086693B-2250-17CE-A41F-06259AB6DB1B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'Mobile.Invalid',
                        'errorMessage' => 'The mobile number is invalid.',
                    ],
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'You have not been authorized.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6086693B-2250-17CE-A41F-06259AB6DB1B\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationResponse>\\n<Message>OK</Message>\\n<RequestId>6086693B-2250-17CE-A41F-06259AB6DB1B</RequestId>\\n<Data>true</Data>\\n<Code>OK</Code>\\n</SendVerificationResponse>","errorExample":""}]',
            'title' => '发送短信验证码',
            'summary' => '发送短信验证码。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：100次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SingleCallByVideo' => [
            'summary' => '调用接口给单个被叫号码发送语音文件通知或视频文件通知。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '216178',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsX55VQQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CalledShowNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送视频通知的外呼号码（被叫显号）。'."\n"
                            ."\n"
                            .'- 如果您使用的外呼号码是公共模式，该参数不填。公共模式详情请参见[公共模式](~~172104~~)。'."\n"
                            .'- 如果您使用的外呼号码是专属模式，请传入您的**真实号码**或**虚拟号码**。'."\n"
                            .'您可以登录[语音服务控制台](https://dyvms.console.aliyun.com/number/list/normal)，在**真实号管理**页面查看已购买的**真实号**，在**虚拟号管理**页面查看已创建并绑定真实号的**虚拟号**。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '0571****5678',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收视频通知的被叫号码。'."\n"
                            ."\n"
                            .'号码格式：'."\n"
                            ."\n"
                            .'- 手机号码。示例：159****0000。'."\n"
                            ."\n"
                            .'- 固话号码。示例：0571****5678。'."\n"
                            ."\n"
                            .'- 国际区号+号码。示例：85200****00。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1590****000',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通知文件的语音ID。'."\n"
                            ."\n"
                            .'您登录[语音服务控制台](https://dyvms.console.aliyun.com/overview/home)在以下页面获取语音ID，该语音通知文件必须已审核通过。'."\n"
                            ."\n"
                            .'- 在**语音消息**>**语音通知**>**语音通知文件**页面获取**语音ID**。'."\n"
                            ."\n"
                            .'- 在**语音文件管理**>**语音通知文件**页面获取**语音ID**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '17d37e58-2a09-419f-9b3d-e7e4b4****dd.wav',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知文件的播放次数。取值范围：**1~3**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知文件播放的音量。取值范围：**0~100**，默认取值**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件播放的语速。取值范围：**-500~500**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发起请求时预留给调用方的自定义ID，最终会通过回执消息将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度限制为1~15个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdefgh',
                    ],
                ],
                [
                    'name' => 'VideoCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '视频文件',
                        'description' => '视频通知文件的ID。'."\n"
                            ."\n"
                            .'您可以在[视频通知文件](https://dyvms.console.aliyun.com/videoFiles/list/notify)页面，查看已审核通过的视频通知文件ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1120213841979436_20240621103****39_.mp4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'a78278ff-26bb-48ec-805c-26a0f4c102***',
                            ],
                            'CallId' => [
                                'description' => '语音通知或视频通知的唯一ID。'."\n"
                                    ."\n"
                                    .'您可以使用此参数，调用[PlayVideoFile](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-playvideofile?spm)接口播放视频等操作。'."\n"
                                    .'您可以[配置回执消息](https://help.aliyun.com/zh/vms/developer-reference/return-receipt-message-description-and-configuration-process?spm)，获取呼叫记录消息、呼叫中间状态消息、录音记录消息等。',
                                'type' => 'string',
                                'example' => '116012354148^10281378****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"a78278ff-26bb-48ec-805c-26a0f4c102***\\",\\n  \\"CallId\\": \\"116012354148^10281378****\\"\\n}","type":"json"}]',
            'title' => '发送视频通知',
            'description' => '- 目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。'."\n"
                ."\n"
                .'- 调用此接口发送视频通知后，还可以在通话中调用[PlayVideoFile](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-playvideofile?spm)接口播放视频、[PauseVideoFile](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-pausevideofile?spm)接口暂停视频、[ResumeVideoFile](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-resumevideofile?spm)接口恢复视频。',
        ],
        'PlayVideoFile' => [
            'summary' => '在语音通话中插播视频文件。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '201522',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsRK85FW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'VideoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频插播文件ID。'."\n"
                            ."\n"
                            .'您可以在[视频插播文件](https://dyvms.console.aliyun.com/videoFiles/list/slot)页面查看审核通过的视频ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1120213841979436_20240620155*****5_.mp4',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收视频播放的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话一ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。'."\n"
                            ."\n"
                            .'> 您可以使用CallId，调用[QueryVideoPlayProgress](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-queryvideoplayprogress?spm)接口查看视频播放进度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012354148^1028137841****',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方的ID，最终会通过回执消息将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度限制为1~15个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '342268*****',
                    ],
                ],
                [
                    'name' => 'OnlyPhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅在手机端播放视频。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            ."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Model' => [
                                'description' => '通话类型。'."\n"
                                    ."\n"
                                    .'- video'."\n"
                                    ."\n"
                                    .'- voice',
                                'type' => 'boolean',
                                'example' => 'video',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回**OK**代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    ."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Model\\": true,\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '插播视频',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'PauseVideoFile' => [
            'summary' => '在语音通话中插播视频文件时，暂停视频播放。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '201533',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsRK85FW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012854210^10281427****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '暂停视频播放的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回结果详情。',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '本次请求是否成功调用成功。取值：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '暂停视频',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'ResumeVideoFile' => [
            'summary' => '在语音通话中暂停视频播放后，恢复视频播放。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '201535',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsRK85FW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100001616500^1000018****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复视频播放的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据详情。',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    ."\n"
                                    .'- true：调用成功。'."\n"
                                    ."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '恢复视频',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'QueryVideoPlayProgress' => [
            'summary' => '在语音通话中插播视频文件后，查询视频播放进度。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '217974',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsL1CC4Y',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116004767703^102806****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询视频播放进度的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '返回结果的提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回结果详情。'."\n"
                                    ."\n"
                                    .'- progress：当前播放时长，单位毫秒  '."\n"
                                    ."\n"
                                    .'- duration：文件总时长'."\n"
                                    ."\n"
                                    .'> 播放进度百分比可以通过progress除以duration获得。',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    ."\n"
                                    .'- true：调用成功。'."\n"
                                    ."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询视频进度',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'UpgradeVideoFile' => [
            'summary' => '从语音通话升级到视频通话。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '217976',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsL1CC4Y',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012354148^10281378****',
                    ],
                ],
                [
                    'name' => 'MediaType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '媒体类型。固定取值：**video**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'video',
                        'default' => 'VIDEO',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方的ID，最终会通过回执消息将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度限制为1~15个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '225869*****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收视频通话的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '视频升级',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'DegradeVideoFile' => [
            'summary' => '从视频通话降级到语音通话。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '217975',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsL1CC4Y',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012354148^1028137841****',
                    ],
                ],
                [
                    'name' => 'MediaType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '媒体类型。固定取值：video。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'video',
                        'default' => 'AUDIO',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '225869*****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收语音通知的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码详见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '视频降级',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'SkipVideoFile' => [
            'summary' => '在播放视频时，可以调用此接口快进视频或后退视频。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '218113',
                'abilityTreeNodes' => [
                    'FEATUREdyvmsL1CC4Y',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012854210^10281427****',
                    ],
                ],
                [
                    'name' => 'SkipTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跳转到对应的时间播放视频，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '04:02:01',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PR0210428****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收视频播放的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '159****0000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": false,\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '快进或后退视频',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'GetCallMediaType' => [
            'summary' => '在通话时获取通话类型。',
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
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话ID。您可以在[SingleCallByVideo](https://help.aliyun.com/zh/vms/developer-reference/api-dyvmsapi-2017-05-25-singlecallbyvideo?spm)接口返回参数中获取CallId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '116012854210^10281427****',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通话中的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1580000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => 'MediaType：媒体类型。'."\n"
                                    ."\n"
                                    .'- audio'."\n"
                                    .'- video'."\n"
                                    .'- Null（切换中不确定）',
                                'type' => 'object',
                                'example' => 'video',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取通话类型',
            'description' => '目前5G视频通话功能处于邀约制阶段，您需要联系运营经理为您开通此功能。',
        ],
        'GetTemporaryFileUrl' => [
            'summary' => '获取视频或语音文件临时URL，方便您立即查看视频或语音文件。',
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
                    'name' => 'VideoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音频或视频ID。'."\n"
                            ."\n"
                            .'您可以在语音服务控制台[语音文件管理](https://dyvms.console.aliyun.com/files/list/voiceFiles)页面或[视频文件管理](https://dyvms.console.aliyun.com/videoFiles/list/slot)页面，查看语音ID或视频ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '45a04670582571eebf9e4531948c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BF47617-7851-48F7-A3A1-2021342A****',
                            ],
                            'Data' => [
                                'description' => '- private String videoFileUrl：播放文件URL'."\n"
                                    .'- private String videoFile：语音或视频文件'."\n"
                                    .'- private Long fileExpireTime：文件过期时间，单位毫秒',
                                'type' => 'object',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"7BF47617-7851-48F7-A3A1-2021342A****\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取文件临时URL',
        ],
        'GetToken' => [
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
                    'name' => 'TokenType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Token类型。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dyvms',
                        'minLength' => 0,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~112502~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Token' => [
                                'description' => 'Token。',
                                'type' => 'string',
                                'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImFjY2Vzc190ZXN0In0.eyJqdGkiOiJUTjhfRzFCaEpETTJ3LWVoeGJZZXRnIiwiaWF0IjoxNjIzMzk0NTI3LCJleHAiOjE2MjMzOTYzMjcsIm5iZi****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB3933-9FE3-4870-BA8E-2BEE91B69DDD',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Token\\": \\"eyJhbGciOiJSUzI1NiIsImtpZCI6ImFjY2Vzc190ZXN0In0.eyJqdGkiOiJUTjhfRzFCaEpETTJ3LWVoeGJZZXRnIiwiaWF0IjoxNjIzMzk0NTI3LCJleHAiOjE2MjMzOTYzMjcsIm5iZi****\\",\\n  \\"RequestId\\": \\"D9CB3933-9FE3-4870-BA8E-2BEE91B69DDD\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetTokenResponse>\\n<Message>OK</Message>\\n<RequestId>D9CB3933-9FE3-4870-BA8E-2BEE91B69DDD</RequestId>\\n<Token>eyJhbGciOiJSUzI1NiIsImtpZCI6ImFjY2Vzc190ZXN0In0.eyJqdGkiOiJUTjhfRzFCaEpETTJ3LWVoeGJZZXRnIiwiaWF0IjoxNjIzMzk0NTI3LCJleHAiOjE2MjMzOTYzMjcsIm5iZiI6MTYyMzM5NDQ2Ny****</Token>\\n<Code>OK</Code>\\n<Success>true</Success>\\n</GetTokenResponse>","errorExample":""}]',
            'title' => '获取认证的Token',
            'summary' => '获取认证的Token。',
            'description' => '### QPS限制'."\n"
                .'单用户调用频率：5次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RecoverCallInConfig' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Number',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要恢复呼入的400号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '400***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainApiResponse<Boolean>',
                        'description' => 'PlainApiResponse<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '恢复是否成功。取值：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'a78278ff-26bb-48ec-805c-26a0f4c102***',
                            ],
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '响应消息。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"a78278ff-26bb-48ec-805c-26a0f4c102***\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"成功\\"\\n}","type":"json"}]',
            'title' => '400呼转号码恢复呼入',
            'summary' => '调用RecoverCallInConfig恢复指定400呼转号码呼入。',
        ],
        'StopCallInConfig' => [
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Number',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要停止呼入的400号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '400***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainApiResponse<Boolean>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '停止呼入是否成功。取值：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'a78278ff-26bb-48ec-805c-26a0f4c102***',
                            ],
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '响应消息。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"a78278ff-26bb-48ec-805c-26a0f4c102***\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"成功\\"\\n}","type":"json"}]',
            'title' => '400呼转号码停止呼入',
            'summary' => '调用StopCallInConfig接口停止指定400呼转号码呼入。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dyvmsapi.aliyuncs.com',
        ],
    ],
];
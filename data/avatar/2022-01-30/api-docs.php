<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'avatar',
        'version' => '2022-01-30',
    ],
    'directories' => [
        [
            'id' => 168937,
            'title' => '数字人实例',
            'type' => 'directory',
            'children' => [
                'StartInstance',
                'StopInstance',
                'QueryRunningInstance',
            ],
        ],
        [
            'id' => 168938,
            'title' => '消息',
            'type' => 'directory',
            'children' => [
                'SendText',
                'SendVaml',
                'SendCommand',
                'SendMessage',
            ],
        ],
        [
            'id' => 170726,
            'title' => '数字人视频合成',
            'type' => 'directory',
            'children' => [
                'SubmitAudioTo3DAvatarVideoTask',
                'SubmitTextTo3DAvatarVideoTask',
                'SubmitTextTo2DAvatarVideoTask',
                'SubmitAudioTo2DAvatarVideoTask',
                'SubmitAvatarVideoTask',
                'GetVideoTaskInfo',
                'CancelVideoTask',
                'QueryVideoTaskInfo',
            ],
        ],
        [
            'id' => 183360,
            'title' => '数字人形象管理',
            'type' => 'directory',
            'children' => [
                'ConfirmAvatar2dTrain',
                'Create2dAvatar',
                'Update2dAvatar',
                'QueryAvatarList',
                'QueryAvatar',
                'DeleteAvatar',
            ],
        ],
        [
            'id' => 186169,
            'title' => '端渲染',
            'type' => 'directory',
            'children' => [
                'ClientUnbindDevice',
                'Render3dAvatar',
                'ClientStart',
                'ClientAuth',
            ],
        ],
        [
            'id' => 178298,
            'title' => '控制台管理',
            'type' => 'directory',
            'children' => [
                'StartTimedResetOperate',
                'CloseTimedResetOperate',
                'QueryTimedResetOperateStatus',
            ],
        ],
        [
            'id' => 178287,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DuplexDecision',
                'LicenseAuth',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'StartInstance' => [
            'summary' => '启动一路数字人视频流实例，通过传入指定的参数，可以启动一路数字人实例，该接口针对播报数字人、互动数字人等这类使用平台默认视频流渠道的数字人实例会返回阿里公有云RTC拉流需要的参数，使用者无需额外开通阿里公有云RTC产品服务，可直接通过阿里云RTC拉流SDK配合该接口返回的Channel参数进行拉流使用。关于阿里公有云RTC拉流SDK接入文档可参考数字人开放平台帮助中心《客户端SDK接入》文档。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'AppId，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的AppId',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ALIPUB5748B17121450',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'User',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '启动该数字人的用户信息（客户自身的用户信息，或者设备号等，如果没有可以直接传递随机数）',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'description' => '客户自身的用户ID，或者设备号等，如果没有可以直接传递一个随机数',
                                'type' => 'string',
                                'required' => false,
                                'example' => '23423',
                            ],
                            'UserName' => [
                                'description' => '与UserId对应的用户名，可空',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试用户',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Channel',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '频道信息，将数字人流媒体推送到指定渠道。目前支持标准RTMP协议。'."\n"
                            ."\n"
                            .'><warning>'."\n"
                            ."\n"
                            .'- 针对使用**咨询播报**（对应官方文档的播报数字人）和**客服助理**（对应官方文档的互动数字人）两个场景，**请勿传此参数**，平台会自动使用阿里云RTC渠道进行推流，同时官方文档中心提供了[拉流端SDK](https://help.aliyun.com/document_detail/479357.html?spm=a2c4g.479356.0.0.170a6d79vSe56q)方便集成。'."\n"
                            .'- 仅针对使用**虚拟主播**（对应官方文档的推流数字人）场景需要传递对应的推流参数信息。'."\n"
                            ."\n"
                            .'></warning>',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '频道类型：'."\n"
                                    .'- RTMP: RTMP推流',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'RTMP' => 'RTMP',
                                ],
                                'example' => 'RTMP',
                            ],
                            'ReqConfig' => [
                                'description' => '频道请求协议体，map类型，'."\n"
                                    ."\n"
                                    .'- RTMP:'."\n"
                                    .'```'."\n"
                                    .'{"url": ""}'."\n"
                                    .'- url: 直播平台RTMP推流地址。'."\n"
                                    .'```'."\n"
                                    .'><warning>针对部分直播平台将推流地址分为url和token，可直接将两部分拼接到一起放入url字段传入即可。推流地址的获取请从对应直播平台获取，部分直播平台不开放三方推流，无法获取RTMP推流地址。></warning>',
                                'type' => 'object',
                                'required' => false,
                                'example' => 'RTMP协议体：'."\n"
                                    .'{'."\n"
                                    .'     "url" : "rtmp的地址"'."\n"
                                    .'}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数字人命令执行请求',
                        'type' => 'object',
                        'properties' => [
                            'AlphaSwitch' => [
                                'description' => '是否需要透明。如果需要透明，设置AlphaSwitch=true，同时拉流端需要接入流媒体拉流端SDK：[数字人流媒体服务AndroidSDK](https://help.aliyun.com/document_detail/479357.html?spm=a2c4g.479358.0.0.65c055280G4RF9)和[数字人流媒体服务WebSDK](https://help.aliyun.com/document_detail/479358.html?spm=a2c4g.479357.0.0.509d66c9WmAwUh)，参考文档实现对应的透明效果（可在文档中搜索“透明”关键字）。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true：透明通道'."\n"
                                    .'false：非透明通道',
                            ],
                            'BackGroundImageUrl' => [
                                'description' => '有效可访问的url背景图片地址，背景图片的宽高比必须要与生成的视频宽高比一致'."\n"
                                    ."\n"
                                    .'- 目前支持jpg，jpeg，png的图片格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => '可访问的公网url地址',
                            ],
                            'Locate' => [
                                'description' => '数字人机位'."\n"
                                    .'- 0: 全身近景机位，默认机位'."\n"
                                    .'- 1: 头部近景机位'."\n"
                                    .'- 2: 全身远景机位'."\n"
                                    .'- 3: 半身近景机位'."\n"
                                    .'- 4: 半身远景机位'."\n"
                                    .'- 5: 左边近景机位'."\n"
                                    .'- 6: 右边近景机位'."\n"
                                    ."\n"
                                    .'具体每个机位的效果预览可以参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html#9c8a96707515k)',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务请求id，最大支持64位字符<notice>可以使用该字段做业务启动数字人的幂等，服务端确保同一个bizId多次调用只会开启一路实例</notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxxx',
                    ],
                ],
                [
                    'name' => 'TextRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '播报内容相关的设置参数',
                        'type' => 'object',
                        'properties' => [
                            'PitchRate' => [
                                'description' => 'TTS播报声音语调，取值范围：-500～500，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'SpeechRate' => [
                                'description' => 'TTS播报声音语速，取值范围：-500～500，不传则使用资产中配置的默认值。'."\n"
                                    ."\n"
                                    .'[-500, 0, 500] 对应的语速倍速区间为 [0.5, 1.0, 2.0]。'."\n"
                                    ."\n"
                                    .'-500表示基准语速的0.5倍速；'."\n"
                                    .'0表示基准语速的1倍速。1倍速是指模型默认输出的合成语速，语速会依据每一个发音人略有不同，大概每秒钟4个字左右；'."\n"
                                    .'500表示基准语速的2倍速；'."\n"
                                    ."\n"
                                    .'计算方法如下：'."\n"
                                    ."\n"
                                    .'0.8倍速（1-1/0.8)/0.002 = -125'."\n"
                                    ."\n"
                                    .'1.2倍速（1-1/1.2)/0.001 = 166',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Voice' => [
                                'description' => 'TTS播报发音人code，从虚拟数字人开放平台-2D资产管理页面获取，不传则使用资产中配置的发音人。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'guijie',
                            ],
                            'Volume' => [
                                'description' => 'TTS播报声音音量，取值范围：0～100，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
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
                            'Code' => [
                                'description' => '返回结果码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '错误信息示例',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RequestId' => [
                                        'description' => '请求ID',
                                        'type' => 'string',
                                        'example' => '4C467B38-3910-447D-87BC-AC049166F216',
                                    ],
                                    'SessionId' => [
                                        'description' => '会话ID。标识这一路数字人实例的唯一id，后续发送播报文本、停止数字人实例都需要传入该ID，如果丢失可以通过“查询运行中的数字人实例”API进行查询。',
                                        'type' => 'string',
                                        'example' => '4f63f9e9788449f9adc88d9438c8dec3',
                                    ],
                                    'Channel' => [
                                        'description' => '频道信息，目前返回互动和播报数字人平台默认视频流AliRTC渠道的频道信息，用于进行客户端拉流使用；'."\n"
                                            .'针对互动和推流数字人使用了三方推流通道的不会返回对应信息， 如RTMP推流。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ChannelId' => [
                                                'description' => '频道ID',
                                                'type' => 'string',
                                                'example' => '108293819',
                                            ],
                                            'Token' => [
                                                'description' => 'AliRTC令牌码。',
                                                'type' => 'string',
                                                'example' => 'e59f61b2482b4d0562ab542da3f824f7',
                                            ],
                                            'Type' => [
                                                'description' => '通道类型',
                                                'type' => 'string',
                                                'example' => '6',
                                            ],
                                            'ExpiredTime' => [
                                                'description' => 'AliRTC通道到期时间',
                                                'type' => 'string',
                                                'example' => '1677112265876',
                                            ],
                                            'Nonce' => [
                                                'description' => 'AliRTC服务器生成的随机字符串。',
                                                'type' => 'string',
                                                'example' => 'CK-9b5c335b9ae75879441ee7b363886418',
                                            ],
                                            'UserId' => [
                                                'description' => 'AliRTC生成的UserId',
                                                'type' => 'string',
                                                'example' => 'userId',
                                            ],
                                            'AppId' => [
                                                'description' => 'AliRTC应用id',
                                                'type' => 'string',
                                                'example' => 'ONEX7E28C7C221854',
                                            ],
                                            'UserInfoInChannel' => [
                                                'description' => '公有云音视频RTC需要的信息',
                                                'type' => 'string',
                                                'example' => '公有云音视频RTC需要的信息',
                                            ],
                                            'Gslb' => [
                                                'description' => 'AliRTC通道地址',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'AliRTC通道地址',
                                                    'type' => 'string',
                                                    'example' => 'https://rgslb.rtc.aliyuncs.com',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Token' => [
                                        'description' => '互动数字人对接需要的鉴权token ,具体可参考互动数字人接入文档',
                                        'type' => 'string',
                                        'example' => '879441ee7b363886418',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"错误信息示例\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\"4C467B38-3910-447D-87BC-AC049166F216\\",\\n    \\"SessionId\\": \\"4f63f9e9788449f9adc88d9438c8dec3\\",\\n    \\"Channel\\": {\\n      \\"ChannelId\\": \\"108293819\\",\\n      \\"Token\\": \\"e59f61b2482b4d0562ab542da3f824f7\\",\\n      \\"Type\\": \\"6\\",\\n      \\"ExpiredTime\\": \\"1677112265876\\",\\n      \\"Nonce\\": \\"CK-9b5c335b9ae75879441ee7b363886418\\",\\n      \\"UserId\\": \\"userId\\",\\n      \\"AppId\\": \\"ONEX7E28C7C221854\\",\\n      \\"UserInfoInChannel\\": \\"公有云音视频RTC需要的信息\\",\\n      \\"Gslb\\": [\\n        \\"https://rgslb.rtc.aliyuncs.com\\"\\n      ]\\n    },\\n    \\"Token\\": \\"879441ee7b363886418\\"\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '启动一个数字人',
            'description' => '二方包引入可参考API概览的信息。',
        ],
        'StopInstance' => [
            'summary' => '关闭一路数字人实例，停止数字人推流。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '234234',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID。通过“启动一个数字人”API的返回值获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9adb569b-f66b-4e92-8b9d-62aa626f8318',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Id of the request',
                                'description' => '响应码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '错误信息示例',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'RequestId' => [
                                        'description' => '请求ID',
                                        'type' => 'string',
                                        'example' => ' 4C467B38-3910-447D-87BC-AC049166F216',
                                    ],
                                    'SessionId' => [
                                        'description' => '会话ID。',
                                        'type' => 'string',
                                        'example' => '6296cc143d2c42899dae6eff19e8ac28',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"错误信息示例\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\" 4C467B38-3910-447D-87BC-AC049166F216\\",\\n    \\"SessionId\\": \\"6296cc143d2c42899dae6eff19e8ac28\\"\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '停止一个数字人',
            'description' => '二方包引入可参考API概览的信息',
        ],
        'QueryRunningInstance' => [
            'summary' => '查询运行中的数字人实例列表，该接口仅返回运行中的实例，已关闭的实例不会返回，最多返回100条，按照时间倒序排列；同时支持查询指定sessionId的实例的运行状态，传入sessionId参数，如果该实例在运行中则会返回，不在运行中或者对应实例不存在，则不会返回信息。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在业务配置详情页的右下角可以看到开发者信息AppId',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ALIPUB5748B17121450',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID，通过“启动一个数字人(StartInstance)”API的返回值获取。'."\n"
                            .'* 传入参数表示查询该SessionID对应的实例的运行状态。'."\n"
                            .'* 不传参数表示查询所有实例的运行状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7'."\n",
                            ],
                            'Code' => [
                                'title' => 'Id of the request',
                                'description' => '返回结果码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'operation success.',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的运行中实例集合',
                                    'type' => 'object',
                                    'properties' => [
                                        'SessionId' => [
                                            'description' => '会话ID',
                                            'type' => 'string',
                                            'example' => '4f63f9e9788449f9adc88d9438c8dec3',
                                        ],
                                        'Channel' => [
                                            'description' => '频道信息（同“启动一个数字人(StartInstance)”API返回的Channel信息）',
                                            'type' => 'object',
                                            'properties' => [
                                                'ChannelId' => [
                                                    'description' => '频道ID',
                                                    'type' => 'string',
                                                    'example' => '108293819',
                                                ],
                                                'Token' => [
                                                    'description' => '令牌码。',
                                                    'type' => 'string',
                                                    'example' => 'e59f61b2482b4d0562ab542da3f824f7',
                                                ],
                                                'Type' => [
                                                    'description' => '通道类型',
                                                    'type' => 'string',
                                                    'example' => '6',
                                                ],
                                                'ExpiredTime' => [
                                                    'description' => '通道到期时间',
                                                    'type' => 'string',
                                                    'example' => '2022-01-04T16:00Z',
                                                ],
                                                'Nonce' => [
                                                    'description' => '服务器生成的随机字符串。',
                                                    'type' => 'string',
                                                    'example' => 'CK-9b5c335b9ae75879441ee7b363886418',
                                                ],
                                                'UserId' => [
                                                    'description' => '音视频RTC生成的UserId',
                                                    'type' => 'string',
                                                    'example' => 'userId',
                                                ],
                                                'AppId' => [
                                                    'description' => '用于RTC的应用id',
                                                    'type' => 'string',
                                                    'example' => 'ONEX7E28C7C221854',
                                                ],
                                                'UserInfoInChannel' => [
                                                    'description' => '公有云音视频RTC需要的信息',
                                                    'type' => 'string',
                                                    'example' => '公有云音视频RTC需要的信息',
                                                ],
                                                'Gslb' => [
                                                    'description' => '通道设置。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '通道设置。',
                                                        'type' => 'string',
                                                        'example' => 'djfls',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'User' => [
                                            'description' => '“启动一个数字人(StartInstance)”API传入的User信息，此处会将对应User返回',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'description' => '用户身份ID（启动一个数字人API传入的User.UserId）',
                                                    'type' => 'string',
                                                    'example' => '23423',
                                                ],
                                                'UserName' => [
                                                    'description' => '用户名（启动一个数字人API传入的User.UserName）',
                                                    'type' => 'string',
                                                    'example' => '测试用户',
                                                ],
                                            ],
                                        ],
                                        'Token' => [
                                            'description' => '互动数字人对接需要的鉴权token ,具体可参考互动数字人接入文档',
                                            'type' => 'string',
                                            'example' => '879441ee7b363886418',
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\\\n\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Data\\": [\\n    {\\n      \\"SessionId\\": \\"4f63f9e9788449f9adc88d9438c8dec3\\",\\n      \\"Channel\\": {\\n        \\"ChannelId\\": \\"108293819\\",\\n        \\"Token\\": \\"e59f61b2482b4d0562ab542da3f824f7\\",\\n        \\"Type\\": \\"6\\",\\n        \\"ExpiredTime\\": \\"2022-01-04T16:00Z\\",\\n        \\"Nonce\\": \\"CK-9b5c335b9ae75879441ee7b363886418\\",\\n        \\"UserId\\": \\"userId\\",\\n        \\"AppId\\": \\"ONEX7E28C7C221854\\",\\n        \\"UserInfoInChannel\\": \\"公有云音视频RTC需要的信息\\",\\n        \\"Gslb\\": [\\n          \\"djfls\\"\\n        ]\\n      },\\n      \\"User\\": {\\n        \\"UserId\\": \\"23423\\",\\n        \\"UserName\\": \\"测试用户\\"\\n      },\\n      \\"Token\\": \\"879441ee7b363886418\\"\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询运行中的数字人实例',
            'description' => '该接口目前仅会返回最近100条运行中的实例（已关闭的不会返回，也不会计入100条，按启动时间倒序排序），超出100条之外的目前暂不支持返回；同时支持查询指定sessionId的实例的运行状态，传入sessionId参数，如果该实例在运行中则会返回，不在运行中或者对应实例不存在，则不会返回信息。（SDK需要升级到1.0.6及以上版本）。',
            'responseParamsDescription' => '针对传入sessionId参数的情况下，如果该接口没有返回对应的Data，则表示该sessionId对应的实例不在运行中，或者sessionId对应的实例不存在',
        ],
        'SendText' => [
            'summary' => '发送一个文本消息给到服务端，数字人播报对应的文本，并渲染视频流给到用户。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID。通过“启动一个数字人”API的返回值获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5615',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'description' => '播报文本的内容，目前支持纯文本和阿里云智能语音合成的SSML标记语言（SSML使用方案请参考[官方文档](https://help.aliyun.com/document_detail/462017.html?spm=openapi-amp.newDocPublishment.0.0.37e9281fRBn9wz)），最大文本长度1000字（不包含标签）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '纯文本：这是一段示例播报纯文本'."\n"
                            .'SSML：SSML使用请参考官方文档'."\n",
                    ],
                ],
                [
                    'name' => 'Interrupt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次播报请求是否打断当前正在播报的内容，默认值为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'UniqueCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '播报请求唯一code，最大支持64位，需要保持唯一，可使用UUID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000001000586737',
                    ],
                ],
                [
                    'name' => 'Feedback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要在数字人进行播报该条消息的时候进行回调通知，默认值false，具体可参考：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=openapi-amp.newDocPublishment.0.0.37e9281fRBn9wz)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'StreamExtension',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '流式播报扩展对象，不是流式播报，不传该对象。用户需要自己切分文本片段（比如说按照标点符号切分），数字人按照提交文本顺序连续的进行播报',
                        'type' => 'object',
                        'properties' => [
                            'IsStream' => [
                                'description' => '是否流式播报',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'Index' => [
                                'description' => '流式播报第几片段',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Position' => [
                                'description' => '片段位置'."\n"
                                    ."\n"
                                    .'1. start - 第一个开始片段'."\n"
                                    .'2. mid - 中间的片段'."\n"
                                    .'3. end - 最后一个结束片段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'start',
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
                                'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0'."\n",
                            ],
                            'Code' => [
                                'description' => '返回处理异常对应code',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '返回处理异常对应描述',
                                'type' => 'string',
                                'example' => 'operation success.'."\n",
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'SessionId' => [
                                        'description' => '会话ID',
                                        'type' => 'string',
                                        'example' => '9929391f61ef9e1c0000000000000006'."\n",
                                    ],
                                    'UniqueCode' => [
                                        'description' => '请求唯一code',
                                        'type' => 'string',
                                        'example' => '0000001000586737',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"operation success.\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SessionId\\": \\"9929391f61ef9e1c0000000000000006\\\\n\\",\\n    \\"UniqueCode\\": \\"0000001000586737\\"\\n  }\\n}","type":"json"}]',
            'title' => '发送普通文本消息',
        ],
        'SendVaml' => [
            'summary' => '发送一个vaml文本消息给到服务端，数字人播报对应的文本，并渲染视频流给到用户。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5615',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID。通过“启动一个数字人”API的返回值获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c'."\n",
                    ],
                ],
                [
                    'name' => 'Vaml',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VAML协议请求，具体参考[官方文档](https://help.aliyun.com/document_detail/444010.html?spm=openapi-amp.newDocPublishment.0.0.37e9281fRBn9wz)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '参考文档'."\n",
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
                                'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0'."\n",
                            ],
                            'Code' => [
                                'description' => '返回处理异常对应code',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '返回处理异常对应描述',
                                'type' => 'string',
                                'example' => 'operation success.'."\n",
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'SessionId' => [
                                        'description' => '会话ID',
                                        'type' => 'string',
                                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c',
                                    ],
                                    'UniqueCode' => [
                                        'description' => '请求唯一code,对应vaml内容中的uniqueCode',
                                        'type' => 'string',
                                        'example' => '0000001000586737',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"operation success.\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SessionId\\": \\"76898bd3b90b4a65b1c078d8824a2e9c\\",\\n    \\"UniqueCode\\": \\"0000001000586737\\"\\n  }\\n}","type":"json"}]',
            'title' => '发送vaml文本消息',
        ],
        'SendCommand' => [
            'summary' => '发送一个指令消息给到服务端，数字人执行对应的指令，并渲染视频流给到用户。目前指令仅支持打断指令。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c'."\n",
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID。通过“启动一个数字人”API的返回值获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5615',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指令code：'."\n"
                            .'- INTERRUPT ：打断当前数字人播报，让数字人停止说话，Content无需传内容'."\n"
                            .'- CHANGE_BACKGROUND ：切换背景，Content需传背景图片URL，具体参数见Content字段定义',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INTERRUPT',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '指令内容，map类型，不同的指令需要不同的参数内容，部分指令不需要指令内容的可以不传改参数。'."\n"
                            .'<details>'."\n"
                            .'<summary>CHANGE_BACKGROUND</summary>'."\n"
                            .'{'."\n"
                            .'    "backGroundImageUrl":"http://xxxxx.png"'."\n"
                            .'}'."\n"
                            .'</details>',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'UniqueCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息请求唯一code，最大支持64位，需要保持唯一，可使用UUID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000001000586737'."\n",
                    ],
                ],
                [
                    'name' => 'Feedback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要在数字人进行执行该条消息的时候进行回调通知，默认值false，具体可参考：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=openapi-amp.newDocPublishment.0.0.37e9281fRBn9wz)。'."\n"
                            .'><notice>当前INTERRUPT指令暂不支持事件回调></notice>',
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
                                'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0'."\n",
                            ],
                            'Code' => [
                                'description' => '返回处理异常对应code',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '返回处理异常对应描述',
                                'type' => 'string',
                                'example' => 'operation success.'."\n",
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'SessionId' => [
                                        'description' => '会话 SessionID',
                                        'type' => 'string',
                                        'example' => '9929391f61ef9e1c0000000000000006'."\n",
                                    ],
                                    'UniqueCode' => [
                                        'description' => '消息请求唯一code',
                                        'type' => 'string',
                                        'example' => '0000001000586737'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"operation success.\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SessionId\\": \\"9929391f61ef9e1c0000000000000006\\\\n\\",\\n    \\"UniqueCode\\": \\"0000001000586737\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => '发送指令消息',
        ],
        'SendMessage' => [
            'summary' => '发送一段播报文本给到服务端，数字人会基于文本做TTS生成、表情动作驱动，并渲染视频流给到用户。（建议使用升级接口：SendText、SendVaml、SendCommand）',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话 SessionID。通过“启动一个数字人”API的返回值获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '76898bd3b90b4a65b1c078d8824a2e9c',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5615',
                    ],
                ],
                [
                    'name' => 'TextRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '播报文本',
                        'type' => 'object',
                        'properties' => [
                            'CommandType' => [
                                'description' => '命令类型'."\n"
                                    .'- START 表示开始播报一段文本'."\n"
                                    .'- HOLDING 表示暂停当前播报'."\n"
                                    .'- RESUME 表示恢复当前播报',
                                'type' => 'string',
                                'required' => false,
                                'example' => '枚举值如下：'."\n"
                                    .'START 表示开始播报一段文本'."\n"
                                    .'HOLDING 表示暂停当前播报'."\n"
                                    .'RESUME 表示恢复当前播报',
                            ],
                            'SpeechText' => [
                                'description' => '播报文本的内容，目前支持纯文本和阿里云智能语音合成的SSML标记语言（SSML使用方案请参考[官方文档](https://help.aliyun.com/document_detail/462017.html)），最大文本长度1000字（不包含标签）',
                                'type' => 'string',
                                'required' => false,
                                'example' => '纯文本：这是一段示例播报纯文本'."\n"
                                    .'SSML：SSML使用请参考官方文档',
                            ],
                            'Id' => [
                                'description' => '对应SpeechText文本的Id，最大支持64位，需要保持唯一，可使用UUID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0000001000586737',
                            ],
                            'interrupt' => [
                                'description' => '播报时是否打断上一次播报内容，默认不打断',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VAMLRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'VAML协议请求对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'VAML请求类型：默认可以不填',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VAML_REQUEST',
                            ],
                            'Vaml' => [
                                'description' => 'VAML协议请求，具体参考[官方文档](https://help.aliyun.com/document_detail/444010.html)',
                                'type' => 'string',
                                'required' => false,
                                'example' => '参考文档',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Feedback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要在数字人进行播报该条消息的时候进行回调通知，默认值false，具体可参考：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'StreamExtension',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '流式播报扩展对象，不是流式播报，不传该对象。用户需要自己切分文本片段（比如说按照标点符号切分），数字人按照提交文本顺序连续的进行播报',
                        'type' => 'object',
                        'properties' => [
                            'IsStream' => [
                                'description' => '是否流式播报',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'Index' => [
                                'description' => '流式播报第几片段',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Position' => [
                                'description' => '片段位置'."\n"
                                    ."\n"
                                    .'- start - 第一个开始片段'."\n"
                                    .'- mid   - 中间的片段 '."\n"
                                    .'- end   - 最后一个结束片段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'start',
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
                            'Code' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'QUERY_ACCOUNT_INFO_ERROR',
                            ],
                            'Message' => [
                                'description' => '接口调用返回的信息。',
                                'type' => 'string',
                                'example' => 'operation success.',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RequestId' => [
                                        'description' => '请求ID',
                                        'type' => 'string',
                                        'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0',
                                    ],
                                    'SessionId' => [
                                        'description' => '会话ID',
                                        'type' => 'string',
                                        'example' => '9929391f61ef9e1c0000000000000006',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"QUERY_ACCOUNT_INFO_ERROR\\",\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\",\\n    \\"SessionId\\": \\"9929391f61ef9e1c0000000000000006\\"\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '发送文本消息',
            'description' => '二方包引入可参考API概览的信息',
        ],
        'SubmitAudioTo3DAvatarVideoTask' => [
            'summary' => '提交根据一段wav音频文件生成3D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用查询和取消任务接口。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'App信息，代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提交的视频合成的任务标题，最长不超过32个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例标题',
                    ],
                ],
                [
                    'name' => 'VideoInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '视频配置',
                        'type' => 'object',
                        'properties' => [
                            'Resolution' => [
                                'description' => '生成的视频分辨率，目前支持：'."\n"
                                    .'- 1：720 * 1280（竖屏）'."\n"
                                    .'- 2：1280 * 720（横屏）'."\n"
                                    .'- 3：1080 * 1920（竖屏）'."\n"
                                    .'- 4：1920 * 1080（横屏）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'IsAlpha' => [
                                'description' => '是否需要透明通道， 默认false'."\n"
                                    ."\n"
                                    .'- true： 开启透明通道，视频格式可通过AlphaFormat指定，支持webm、mov、mp4'."\n"
                                    .'- false：不开启透明通道，视频格式为mp4',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'BackgroundImageUrl' => [
                                'description' => '有效可访问的url背景图片地址，背景图片的分辨率必须要与生成的视频分辨率保持一致'."\n"
                                    .'- 目前支持jpg，jpeg，png的图片格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => '可访问的公网url地址',
                            ],
                            'AlphaFormat' => [
                                'description' => '透明通道格式 ，默认值1'."\n"
                                    ."\n"
                                    .'- 1：webm'."\n"
                                    .'- 2：mov'."\n"
                                    .'- 3：mp4'."\n"
                                    ."\n"
                                    .'><notice>当isAlpha为false时，该字段忽略。mov格式的透明视频文件大小会非常大，不推荐使用，建议使用webm或者mp4。></notice>',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'enum' => [],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AvatarInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数字人相关配置',
                        'type' => 'object',
                        'properties' => [
                            'Locate' => [
                                'description' => '数字人机位'."\n"
                                    .'- 0: 全身近景机位，默认机位'."\n"
                                    .'- 1: 头部近景机位'."\n"
                                    .'- 2: 全身远景机位'."\n"
                                    .'- 3: 半身近景机位'."\n"
                                    .'- 4: 半身远景机位'."\n"
                                    .'- 5: 左边近景机位'."\n"
                                    .'- 6: 右边近景机位'."\n"
                                    ."\n"
                                    .'具体每个机位的效果预览可以参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html#9c8a96707515k)',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Angle' => [
                                'description' => '数字人角度'."\n"
                                    ."\n"
                                    .'- 0: 正面，默认角度'."\n"
                                    .'- 1: 左侧30度'."\n"
                                    .'- 2: 右侧30度'."\n"
                                    ."\n"
                                    .'具体每个角度的效果预览可以参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html#a989eb5075t9y)',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Code' => [
                                'description' => '人物code'."\n"
                                    .'><warning>目前音频合成功能只支持部分人物：Bonnie、Stella、Daisy，以及基于这三个人物新建的数字人。></warning>',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CH_xxxxxxx',
                            ],
                            'IndustryCode' => [
                                'description' => '行业code，默认值：default'."\n"
                                    .'- default - 默认通用'."\n"
                                    .'- kefu - 客服行业'."\n"
                                    .'- live - 直播场景',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音频的地址url，要求音频时长小于30分钟，采样率16K，单声道，单采样点位深16bit',
                        'type' => 'string',
                        'required' => true,
                        'example' => '可访问的公网url地址'."\n",
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次视频合成任务是否需要事件回调，默认false不回调。平台支持在任务开始和任务结束时进行事件回调，具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CallbackParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调时需要透传的一些参数，json格式字符串，callback=false时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExtParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一些扩展参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"xxx": "xxx"}',
                    ],
                ],
                [
                    'name' => 'AudioInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '音频相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'SampleRate' => [
                                'description' => '输出音频采样率（单位: Hz）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [
                                    16000 => '16000',
                                    24000 => '24000',
                                    48000 => '48000',
                                ],
                                'example' => '16000',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10050008',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一个错误消息。',
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务唯一uuid，后续用来查询任务详细请，请务必保存好',
                                        'type' => 'string',
                                        'example' => 'xxxx-xxx-xx-xx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10050008\\",\\n  \\"Message\\": \\"这个一个错误消息。\\",\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxx-xxx-xx-xx\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交3D音频合成视频任务',
            'description' => '提交根据一段wav音频离线生成3D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用[查询视频合成任务详情](https://help.aliyun.com/document_detail/447640.html)接口查询对应的任务的状态，当任务状态为已完成时可以获取到对应视频的下载地址，进行视频下载。在任务状态为未开始情况下，也可以通过TaskUuid调用[取消视频合成任务](https://help.aliyun.com/document_detail/447642.html)接口，取消该任务。'."\n"
                ."\n"
                .'> 参考[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html?spm=a2c4g.446838.0.0.54a96d79OAZR9X)了解完整的3D视频合成接入流程。'."\n"
                ."\n"
                .'><warning>目前音频合成功能只支持部分人物：Bonnie、Stella、Daisy，以及基于这三个人物新建的数字人。></warning>',
        ],
        'SubmitTextTo3DAvatarVideoTask' => [
            'summary' => '提交根据一段文本离线生成3D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用查询和取消任务接口。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'App信息，代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提交的视频合成的任务标题，最长不超过64个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例标题',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'description' => '合成文本，最长不超过1000个字符。支持SSML指定TTS的多音字发音、停顿、特殊读法、数字人动作等，可参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例文本',
                    ],
                ],
                [
                    'name' => 'VideoInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '视频格式',
                        'type' => 'object',
                        'properties' => [
                            'IsAlpha' => [
                                'description' => '是否需要透明通道， 默认false'."\n"
                                    .'- true： 开启透明通道，视频格式可通过AlphaFormat指定，支持webm、mov、mp4'."\n"
                                    .'- false：不开启透明通道，视频格式为mp4',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '透明',
                                    'false' => '不透明',
                                ],
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'AlphaFormat' => [
                                'description' => '透明通道格式 ，默认值1'."\n"
                                    .'- 1：webm  '."\n"
                                    .'- 2：mov'."\n"
                                    .'- 3：mp4'."\n"
                                    ."\n"
                                    .'><notice>当isAlpha为false时，该字段忽略。mov格式的透明视频文件大小会非常大，不推荐使用，建议使用webm或者mp4。></notice>',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [
                                    1 => 'webm',
                                    'mov',
                                    'mp4',
                                ],
                                'example' => '1',
                                'enum' => [],
                            ],
                            'IsSubtitles' => [
                                'description' => '是否需要字幕，默认值：true'."\n"
                                    .'- true： 生成字幕，字幕文件格式为**ass**文件，会作为独立文件提供下载链接进行下载'."\n"
                                    .'- false：不生成字幕'."\n"
                                    ."\n"
                                    .'><warning>该字段已废弃，传入true和false都会生成单独字幕文件，新增SubtitleEmbedded字段可控制是否将字幕合并到视频中。></warning>',
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                                'docRequired' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'SubtitleEmbedded' => [
                                'description' => '是否将字幕合并到视频中，默认值：false'."\n"
                                    .'- true：字幕合并到视频中'."\n"
                                    .'- false：字幕不合并到视频中',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '字幕合并到视频中',
                                    'false' => '字幕不合并到视频中',
                                ],
                                'example' => 'false',
                            ],
                            'Resolution' => [
                                'description' => '生成的视频分辨率，目前支持：'."\n"
                                    .'- 1：720 * 1280（竖屏）'."\n"
                                    .'- 2：1280 * 720（横屏）'."\n"
                                    .'- 3：1080 * 1920（竖屏）'."\n"
                                    .'- 4：1920 * 1080（横屏）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enumValueTitles' => [
                                    1 => '720 * 1280（竖屏）',
                                    '1280 * 720（横屏）',
                                    '1080 * 1920（竖屏）',
                                    '1920 * 1080（横屏）',
                                ],
                                'example' => '1',
                            ],
                            'BackgroundImageUrl' => [
                                'description' => '有效可访问的url背景图片地址，背景图片的分辨率必须要与生成的视频分辨率保持一致'."\n"
                                    .'- 目前支持jpg，jpeg，png的图片格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => '可访问的公网url地址',
                            ],
                            'SubtitleStyle' => [
                                'description' => '字幕样式。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '字体名称，默认值：alibabapuhuiti',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'alibabapuhuiti',
                                    ],
                                    'Color' => [
                                        'description' => '字体颜色，十六进制颜色码RGBA。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '#000000FF',
                                    ],
                                    'OutlineColor' => [
                                        'description' => '描边颜色，十六进制颜色码RGBA。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '#FFFFFF00',
                                    ],
                                    'Y' => [
                                        'description' => '字幕y轴位置，画面顶端坐标为0。默认值，1920x1080：984，1080x1920：1824。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '984',
                                    ],
                                    'Size' => [
                                        'description' => '字体大小，最小值：36，最大值：72，默认值：36。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '36',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AvatarInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数字人相关配置',
                        'type' => 'object',
                        'properties' => [
                            'Locate' => [
                                'description' => '数字人机位'."\n"
                                    .'- 0: 全身近景机位，默认机位'."\n"
                                    .'- 1: 头部近景机位'."\n"
                                    .'- 2: 全身远景机位'."\n"
                                    .'- 3: 半身近景机位'."\n"
                                    .'- 4: 半身远景机位'."\n"
                                    .'- 5: 左边近景机位'."\n"
                                    .'- 6: 右边近景机位'."\n"
                                    ."\n"
                                    .'具体每个机位的效果预览可以参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html#9c8a96707515k)',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Angle' => [
                                'description' => '数字人角度'."\n"
                                    ."\n"
                                    .'- 0: 正面，默认角度'."\n"
                                    .'- 1: 左侧30度'."\n"
                                    .'- 2: 右侧30度'."\n"
                                    ."\n"
                                    .'具体每个角度的效果预览可以参考：[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html#a989eb5075t9y)',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Code' => [
                                'description' => '人物code',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CH_xxxxxxx',
                            ],
                            'IndustryCode' => [
                                'description' => '行业code，默认值：default'."\n"
                                    ."\n"
                                    .'- default - 默认通用'."\n"
                                    .'- kefu - 客服行业'."\n"
                                    .'- live - 直播场景',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AudioInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '音频相关配置，不传则使用资产中配置的默认值。'."\n"
                            .'> 部分阿里云语音合成的音色没有经过效果验证，可能会出现效果上的差异',
                        'type' => 'object',
                        'properties' => [
                            'Voice' => [
                                'description' => 'TTS播报发音人code，从虚拟数字人开放平台-3D资产管理页面获取，不传则使用资产中配置的发音人。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'guijie',
                            ],
                            'SpeechRate' => [
                                'description' => 'TTS播报声音语速，取值范围：-500～500，不传则使用资产中配置的默认值。'."\n"
                                    ."\n"
                                    .'[-500, 0, 500] 对应的语速倍速区间为 [0.5, 1.0, 2.0]。'."\n"
                                    ."\n"
                                    .'-500表示基准语速的0.5倍速；'."\n"
                                    .'0表示基准语速的1倍速。1倍速是指模型默认输出的合成语速，语速会依据每一个发音人略有不同，大概每秒钟4个字左右；'."\n"
                                    .'500表示基准语速的2倍速；'."\n"
                                    ."\n"
                                    .'计算方法如下：'."\n"
                                    ."\n"
                                    .'0.8倍速（1-1/0.8)/0.002 = -125'."\n"
                                    ."\n"
                                    .'1.2倍速（1-1/1.2)/0.001 = 166',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Volume' => [
                                'description' => 'TTS播报声音音量，取值范围：0～100，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'PitchRate' => [
                                'description' => 'TTS播报声音语调，取值范围：-500～500，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'SampleRate' => [
                                'description' => '输出音频采样率（单位: Hz）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [
                                    16000 => '16000',
                                    24000 => '24000',
                                    48000 => '48000',
                                ],
                                'example' => '16000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次视频合成任务是否需要事件回调，默认false不回调。平台支持在任务开始和任务结束时进行事件回调，具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CallbackParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调时需要透传的一些参数，json格式字符串，callback=false时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExtParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一些扩展参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"xxx": "xxx"}',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Success' => [
                                'description' => '是否调用成功',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '502',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务唯一uuid，后续用来查询任务详情，请务必保存好',
                                        'type' => 'string',
                                        'example' => 'xxxxxx-xxxxx-xxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"502\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxxxx-xxxxx-xxxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SubmitTextTo3DAvatarVideoTaskResponse>\\n    <Code>502</Code>\\n    <Message>这是一个错误</Message>\\n    <Success>false</Success>\\n    <Data>\\n        <TaskUuid>xxxxxx-xxxxx-xxxxx</TaskUuid>\\n    </Data>\\n    <RequestId>12314-12313-31231</RequestId>\\n</SubmitTextTo3DAvatarVideoTaskResponse>","errorExample":""}]',
            'title' => '提交3D文本合成视频任务',
            'description' => '提交根据一段文本离线生成3D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用[查询视频合成任务详情](https://help.aliyun.com/document_detail/447640.html)接口查询对应的任务的状态，当任务状态为已完成时可以获取到对应视频的下载地址，进行视频下载。在任务状态为未开始情况下，也可以通过TaskUuid调用[取消视频合成任务](https://help.aliyun.com/document_detail/447642.html)接口，取消该任务。'."\n"
                ."\n"
                .'> 参考[3D数字人视频合成使用指南](https://help.aliyun.com/document_detail/447834.html?spm=a2c4g.446838.0.0.54a96d79OAZR9X)了解完整的3D视频合成接入流程。',
            'responseParamsDescription' => 'TaskUuid是该任务的唯一标识，请务必保存好。',
        ],
        'SubmitTextTo2DAvatarVideoTask' => [
            'summary' => '提交根据一段文本离线生成2D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用查询和取消任务接口。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '开发者应用信息，代表一个业务配置'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提交的视频合成的任务标题，最长不超过64个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例标题',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'description' => '合成文本， 最长不超过1000个字符。支持SSML指定TTS的多音字发音、停顿、特殊读法等，可参考：[2D数字人视频合成使用指南](https://help.aliyun.com/document_detail/448147.html)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例文本',
                    ],
                ],
                [
                    'name' => 'VideoInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '视频配置',
                        'type' => 'object',
                        'properties' => [
                            'IsAlpha' => [
                                'description' => '是否需要透明通道， 默认false'."\n"
                                    .'- true： 开启透明通道，视频格式可通过AlphaFormat指定，支持webm、mov、mp4'."\n"
                                    .'- false：不开启透明通道，视频格式为mp4',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'AlphaFormat' => [
                                'description' => '透明通道格式 ，默认值1'."\n"
                                    .'- 1：webm'."\n"
                                    .'- 2：mov'."\n"
                                    .'- 3：mp4'."\n"
                                    ."\n\n"
                                    .'><notice>当isAlpha为false时，该字段忽略。mov格式的透明视频文件大小会非常大，不推荐使用，建议使用webm或者mp4。></notice>'."\n"
                                    .'><notice>2D真人数字人部分人物不支持透明格式视频，目前平台官方数字人中的博远、柏翰、凡宇、馨馨支持输出透明格式。></notice>',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                                'enum' => [],
                            ],
                            'IsSubtitles' => [
                                'description' => '是否需要字幕，默认值：true'."\n"
                                    ."\n"
                                    .'- true： 生成字幕，字幕文件格式为ass文件，会作为独立文件提供下载链接进行下载'."\n"
                                    .'- false：不生成字幕'."\n"
                                    ."\n"
                                    .'><warning>警告 该字段已废弃，传入true和false都会生成单独字幕文件，新增SubtitleEmbedded字段可控制是否将字幕合并到视频中。></warning>',
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'SubtitleEmbedded' => [
                                'description' => '是否将字幕合并到视频中，默认值：false'."\n"
                                    .'- true：字幕合并到视频中'."\n"
                                    .'- false：字幕不合并到视频中',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'BackgroundImageUrl' => [
                                'description' => '有效可访问的url背景图片地址；'."\n"
                                    .'背景图片的分辨率必须要与生成的视频分辨率保持一致；'."\n"
                                    .'目前支持jpg，jpeg，png的图片格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => '可访问的公网url地址',
                            ],
                            'Resolution' => [
                                'description' => '生成的视频分辨率，不同人物支持不同分辨率：'."\n"
                                    .'- 3：1080 * 1920（竖屏）博远、柏翰、凡宇、馨馨'."\n"
                                    .'- 4：1920 * 1080（横屏）小纯 自定义人物默认与原视频分辨率一致',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [],
                                'example' => '3',
                            ],
                            'SubtitleStyle' => [
                                'description' => '字幕样式。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '字体名称，默认值：alibabapuhuiti',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'alibabapuhuiti',
                                    ],
                                    'Color' => [
                                        'description' => '字体颜色，十六进制颜色码RGBA。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '#000000FF',
                                    ],
                                    'OutlineColor' => [
                                        'description' => '描边颜色，十六进制颜色码RGBA。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '#FFFFFF00',
                                    ],
                                    'Y' => [
                                        'description' => '字幕y轴位置，画面顶端坐标为0。默认值，1920x1080：984，1080x1920：1824。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '984',
                                    ],
                                    'Size' => [
                                        'description' => '字体大小，最小值：36，最大值：72，默认值：36。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '36',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AudioInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '音频相关配置，不传则使用资产中配置的默认值。',
                        'type' => 'object',
                        'properties' => [
                            'Voice' => [
                                'description' => 'TTS播报发音人code，从虚拟数字人开放平台-2D资产管理页面获取，不传则使用资产中配置的发音人。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'guijie',
                            ],
                            'SpeechRate' => [
                                'description' => 'TTS播报声音语速，取值范围：-500～500，不传则使用资产中配置的默认值。'."\n"
                                    ."\n"
                                    .'[-500, 0, 500] 对应的语速倍速区间为 [0.5, 1.0, 2.0]。'."\n"
                                    ."\n"
                                    .'-500表示基准语速的0.5倍速；'."\n"
                                    .'0表示基准语速的1倍速。1倍速是指模型默认输出的合成语速，语速会依据每一个发音人略有不同，大概每秒钟4个字左右；'."\n"
                                    .'500表示基准语速的2倍速；'."\n"
                                    ."\n"
                                    .'计算方法如下：'."\n"
                                    ."\n"
                                    .'0.8倍速（1-1/0.8)/0.002 = -125'."\n"
                                    ."\n"
                                    .'1.2倍速（1-1/1.2)/0.001 = 166',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '500',
                                'minimum' => '-500',
                                'example' => '0',
                            ],
                            'Volume' => [
                                'description' => 'TTS播报声音音量，取值范围：0～100，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '100',
                                'minimum' => '0',
                                'example' => '50',
                            ],
                            'PitchRate' => [
                                'description' => 'TTS播报声音语调，取值范围：-500～500，不传则使用资产中配置的默认值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '500',
                                'minimum' => '-500',
                                'example' => '0',
                            ],
                            'SampleRate' => [
                                'description' => '输出音频采样率（单位: Hz）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [
                                    16000 => '16000',
                                    24000 => '24000',
                                    48000 => '48000',
                                ],
                                'example' => '16000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AvatarInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数字人形象相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '数字人形象code，从虚拟数字人开放平台-2D资产页面获取，不传则使用应用配置的默认形象。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CH_xxxxx',
                            ],
                            'X' => [
                                'description' => '数字人图层相对于画面左上角横轴像素偏移量，原始状态默认为0',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Y' => [
                                'description' => '数字人图层相对于画面左上角纵轴像素偏移量，原始状态默认为0',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Width' => [
                                'description' => '数字人图层宽度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '数字人底板视频为横屏：1920'."\n"
                                    .'数字人底板视频为竖屏：1080',
                            ],
                            'Height' => [
                                'description' => '数字人图层高度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '数字人底板视频为横屏：1080'."\n"
                                    .'数字人底板视频为竖屏：1920',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次视频合成任务是否需要事件回调，默认false不回调。平台支持在任务开始和任务结束时进行事件回调，具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CallbackParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调时需要透传的一些参数，json格式字符串，callback=false时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExtParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一些扩展参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '-10000000',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一次错误消息。',
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务唯一uuid，后续用来查询任务详细请，请务必保存好',
                                        'type' => 'string',
                                        'example' => 'xxxx-xxx-xxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"-10000000\\",\\n  \\"Message\\": \\"这个一次错误消息。\\",\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxx-xxx-xxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交2D文本合成视频任务',
            'description' => '提交根据一段文本离线生成2D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用[查询视频合成任务详情](https://help.aliyun.com/document_detail/447640.html)接口查询对应的任务的状态，当任务状态为已完成时可以获取到对应视频的下载地址，进行视频下载。在任务状态为未开始情况下，也可以通过TaskUuid调用[取消视频合成任务](https://help.aliyun.com/document_detail/447642.html)接口，取消该任务。'."\n"
                ."\n"
                .'> 参考[2D数字人视频合成使用指南](https://help.aliyun.com/document_detail/448147.html?spm=a2c4g.447834.0.0.13666d79MiKZX4)了解完整的2D视频合成接入流程。',
            'responseParamsDescription' => 'TaskUuid是该任务的唯一标识，请务必保存好。',
        ],
        'SubmitAudioTo2DAvatarVideoTask' => [
            'summary' => '提交根据一段wav音频文件生成2D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用查询和取消任务接口。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20516',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'App信息，代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提交的视频合成的任务标题，最长不超过32个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => '常吃的皮蛋一般是由哪一种蛋加工而成的？',
                    ],
                ],
                [
                    'name' => 'VideoInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '视频配置',
                        'type' => 'object',
                        'properties' => [
                            'IsAlpha' => [
                                'description' => '是否需要透明通道， 默认false'."\n"
                                    ."\n"
                                    .'- true： 开启透明通道，视频格式可通过AlphaFormat指定，支持webm、mov、mp4'."\n"
                                    .'- false：不开启透明通道，视频格式为mp4',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'BackgroundImageUrl' => [
                                'description' => '有效可访问的url背景图片地址；'."\n"
                                    .'背景图片的分辨率必须要与生成的视频分辨率保持一致；'."\n"
                                    .'目前支持jpg，jpeg，png的图片格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => '可访问的公网url地址',
                            ],
                            'Resolution' => [
                                'description' => '生成的视频分辨率，不同人物支持不同分辨率：'."\n"
                                    .'- 3：1080 * 1920（竖屏）博远、柏翰、凡宇、馨馨'."\n"
                                    .'- 4：1920 * 1080（横屏）小纯'."\n"
                                    .'自定义人物默认与原视频分辨率一致',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'AlphaFormat' => [
                                'description' => '透明通道格式 ，默认值1'."\n"
                                    ."\n"
                                    .'- 1：webm'."\n"
                                    .'- 2：mov'."\n"
                                    .'- 3：mp4'."\n"
                                    ."\n"
                                    .'><notice>当isAlpha为false时，该字段忽略。mov格式的透明视频文件大小会非常大，不推荐使用，建议使用webm或者mp4。></notice>',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                                'enum' => [],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AvatarInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数字人形象相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '数字人形象code，从虚拟数字人开放平台-2D资产页面获取，不传则使用应用配置的默认形象。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CH_2d_xxxxxxx',
                            ],
                            'X' => [
                                'description' => '数字人图层相对于画面左上角横轴像素偏移量，原始状态默认为0',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Y' => [
                                'description' => '数字人图层相对于画面左上角纵轴像素偏移量，原始状态默认为0',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Width' => [
                                'description' => '数字人图层宽度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '数字人底板视频为横屏：1920'."\n"
                                    .'数字人底板视频为竖屏：1080',
                            ],
                            'Height' => [
                                'description' => '数字人图层高度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '数字人底板视频为横屏：1080'."\n"
                                    .'数字人底板视频为竖屏：1920',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AudioInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '音频相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'SampleRate' => [
                                'description' => '输出音频采样率（单位: Hz）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [
                                    16000 => '16000',
                                    24000 => '24000',
                                    48000 => '48000',
                                ],
                                'example' => '16000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音频的地址url，要求音频时长小于30分钟，采样率16K，单声道，单采样点位深16bit',
                        'type' => 'string',
                        'required' => true,
                        'example' => '可访问的公网url地址',
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次视频合成任务是否需要事件回调，默认false不回调。平台支持在任务开始和任务结束时进行事件回调，具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CallbackParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调时需要透传的一些参数，json格式字符串，callback=false时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExtParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一些扩展参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"xxx": "xxx"}',
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
                                'example' => '4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10050008',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一个错误消息。',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务唯一uuid，后续用来查询任务详细请，请务必保存好',
                                        'type' => 'string',
                                        'example' => 'xxxx-xxx-xx-xx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX\\",\\n  \\"Code\\": \\"10050008\\",\\n  \\"Message\\": \\"这个一个错误消息。\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxx-xxx-xx-xx\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交2D音频合成视频任务',
            'description' => '提交根据一段wav音频离线生成2D数字人视频任务，该接口会立即返回一个TaskUuid作为本次提交任务的唯一id，后续可以根据TaskUuid调用[查询视频合成任务详情](https://help.aliyun.com/document_detail/447640.html)接口查询对应的任务的状态，当任务状态为已完成时可以获取到对应视频的下载地址，进行视频下载。在任务状态为未开始情况下，也可以通过TaskUuid调用[取消视频合成任务](https://help.aliyun.com/document_detail/447642.html)接口，取消该任务。'."\n"
                ."\n"
                .'> 参考[2D数字人视频合成使用指南](https://help.aliyun.com/document_detail/448147.html?spm=a2c4g.447834.0.0.13666d79MiKZX4)了解完整的2D视频合成接入流程。',
        ],
        'SubmitAvatarVideoTask' => [
            'summary' => '提交一个数字人播报视频生成的任务',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'App信息，代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.2527854.0.0.6f124ecfkSTD3w#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '提交的视频合成的任务标题',
                        'type' => 'string',
                        'required' => true,
                        'example' => '这是一个示例标题',
                    ],
                ],
                [
                    'name' => 'VideoParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '合成的视频需要的相关参数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'    "text": "测试",'."\n"
                            .'    "characterCode": "CH_xxxxxx"'."\n"
                            .'  }',
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次视频合成任务是否需要事件回调，默认false不回调。平台支持在任务开始和任务结束时进行事件回调，具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CallbackParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调时需要透传的一些参数，json格式字符串，callback=false时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ExtParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一些扩展参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "xxx": "xxx"'."\n"
                            .'}',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7'."\n",
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10050008'."\n",
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一个错误消息。'."\n",
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务唯一uuid，后续用来查询任务详细请，请务必保存好',
                                        'type' => 'string',
                                        'example' => 'xxxxxx-xxxxx-xxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10050008\\\\n\\",\\n  \\"Message\\": \\"这个一个错误消息。\\\\n\\",\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxxxx-xxxxx-xxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交合成视频任务',
            'description' => '该接口是针对有定制化视频合成样式的需求使用，正常的视频合成任务请直接使用：提交3D文本合成视频任务、提交3D语音合成视频任务、提交2D文本合成视频任务、提交2D语音合成视频任务即可。',
        ],
        'GetVideoTaskInfo' => [
            'summary' => '通过提交任务生成的TaskUuid，查询对应视频合成任务详情。同时支持3D数字人和2D数字人的视频合成任务详情查询。',
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
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从虚拟数字人开放平台中获取的TenantId'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '代表一个业务配置'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务UUID，提交对应视频生成任务时返回的TaskUuid。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxx-xxxx-xxx',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx-xx',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '502',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功'."\n"
                                    .'- false: 调用失败。'."\n"
                                    .'- true：调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用接口结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务UUID',
                                        'type' => 'string',
                                        'example' => 'xxxx-xxx-xx-xx',
                                    ],
                                    'Type' => [
                                        'description' => '任务类型：'."\n"
                                            .'- 1:  3D数字人视频合成。'."\n"
                                            .'- 3:  2D数字人视频合成。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Status' => [
                                        'description' => '任务业务状态：'."\n"
                                            .'- 1: 等待执行'."\n"
                                            .'- 2:  执行中'."\n"
                                            .'- 3:  成功'."\n"
                                            .'- 4：失败'."\n"
                                            .'- 5:  已取消'."\n"
                                            .'- 6:  已过期',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Process' => [
                                        'description' => '任务执行进度，暂不支持',
                                        'type' => 'string',
                                        'example' => '99',
                                    ],
                                    'TaskResult' => [
                                        'description' => '任务结果',
                                        'type' => 'object',
                                        'properties' => [
                                            'VideoUrl' => [
                                                'description' => '视频URL'."\n"
                                                    .'><notice>有效期7天，请尽快下载保存，过期URL将失效></warning>',
                                                'type' => 'string',
                                                'example' => 'xxx/xxxx/xx.mp4',
                                            ],
                                            'SubtitlesUrl' => [
                                                'description' => '字幕URL'."\n"
                                                    .'><notice>有效期7天，请尽快下载保存，过期URL将失效></warning>',
                                                'type' => 'string',
                                                'example' => 'xxx/xxx/xxx.ass',
                                            ],
                                            'WordSubtitlesUrl' => [
                                                'description' => '字粒度的时间戳文件，特定任务支持',
                                                'type' => 'string',
                                                'example' => 'xxx/xxx/xxx.ass',
                                            ],
                                            'FailReason' => [
                                                'description' => '失败原因',
                                                'type' => 'string',
                                                'example' => '这是一个失败原因',
                                            ],
                                            'FailCode' => [
                                                'description' => '失败错误码',
                                                'type' => 'string',
                                                'example' => '20002',
                                            ],
                                            'VideoDuration' => [
                                                'description' => '生成视频时长，单位ms',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '60992',
                                            ],
                                            'AlphaUrl' => [
                                                'description' => 'mp4对应的蒙版视频文件',
                                                'type' => 'string',
                                                'example' => 'xxx/xxx/xxx-alpha.mp4',
                                            ],
                                            'PreviewPic' => [
                                                'description' => '视频首帧预览图',
                                                'type' => 'string',
                                                'example' => 'xxxxx.png',
                                            ],
                                            'AttachmentUrl' => [
                                                'description' => '视频附件地址，特定任务支持',
                                                'type' => 'string',
                                                'example' => 'xxx.ini',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx-xx\\",\\n  \\"Code\\": \\"502\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxx-xxx-xx-xx\\",\\n    \\"Type\\": \\"1\\",\\n    \\"Status\\": \\"1\\",\\n    \\"Process\\": \\"99\\",\\n    \\"TaskResult\\": {\\n      \\"VideoUrl\\": \\"xxx/xxxx/xx.mp4\\",\\n      \\"SubtitlesUrl\\": \\"xxx/xxx/xxx.ass\\",\\n      \\"WordSubtitlesUrl\\": \\"xxx/xxx/xxx.ass\\",\\n      \\"FailReason\\": \\"这是一个失败原因\\",\\n      \\"FailCode\\": \\"20002\\",\\n      \\"VideoDuration\\": 60992,\\n      \\"AlphaUrl\\": \\"xxx/xxx/xxx-alpha.mp4\\",\\n      \\"PreviewPic\\": \\"xxxxx.png\\",\\n      \\"AttachmentUrl\\": \\"xxx.ini\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询视频合成任务详情',
            'description' => '根据在成功提交视频合成任务之后获取到的TaskUuid可以通过该接口查询视频合成任务状态，由于视频合成任务是离线运行，所以任务执行时间不定，可能需要调用方能够定时调用该接口查询任务状态，直到任务状态为已完成（成功或者失败），针对成功的任务接口会返回任务合成详情， 包含视频和字幕的下载地址，失败的任务会返回失败原因。',
        ],
        'CancelVideoTask' => [
            'summary' => '通过提交任务生成的TaskUuid， 取消状态为”等待执行“的任务。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '应用开发者信息，代表一个业务配置'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.447644.0.0.406f66c95dI2Ee#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务UUID，提交对应视频生成任务时返回的TaskUuid。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxx-xxxx-xxxx',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'xxxx-xxxx-xxxx',
                            ],
                            'Code' => [
                                'title' => 'Id of the request',
                                'description' => '返回错误码',
                                'type' => 'string',
                                'example' => '502',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'TaskUuid' => [
                                        'description' => '任务UUID',
                                        'type' => 'string',
                                        'example' => 'xxxx-xxxx-xxxx',
                                    ],
                                    'IsCancel' => [
                                        'description' => '是否取消'."\n"
                                            ."\n"
                                            .'- true：已取消'."\n"
                                            .'- false： 未取消',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'FailReason' => [
                                        'description' => '取消失败原因',
                                        'type' => 'string',
                                        'example' => '这里是取消失败原因',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxxx-xxxx-xxxx\\",\\n  \\"Code\\": \\"502\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TaskUuid\\": \\"xxxx-xxxx-xxxx\\",\\n    \\"IsCancel\\": true,\\n    \\"FailReason\\": \\"这里是取消失败原因\\"\\n  }\\n}","type":"json"}]',
            'title' => '取消视频合成任务',
            'description' => '<warning>该接口只能取消状态为”**等待执行**“的任务，已运行或者已结束的任务不能取消。</warning>'."\n",
        ],
        'QueryVideoTaskInfo' => [
            'summary' => '查询提交的视频合成任务列表，支持分页。支持根据数字人类型、状态、标题进行筛选。已过期和已取消任务不支持查询。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'App',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'App信息，代表一个业务配置',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => 'App ID。在开发者中心-实例管理页面获取对应的appId，[参考文档](https://help.aliyun.com/document_detail/479093.html?spm=a2c4g.2527854.0.0.6f124ecfkSTD3w#6a48daa1ee899)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3d95xx946a',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务UUID，提交对应视频生成任务时返回的TaskUuid。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxx-xxxx-xxx',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要检索的视频任务标题，长度<10字符',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型：'."\n"
                            .'- 1:  3D数字人视频合成。'."\n"
                            .'- 3:  2D数字人视频合成。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'enum' => [
                            '1',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务业务状态，已过期和已取消的任务不支持查询：'."\n"
                            .'- 1: 等待执行'."\n"
                            .'- 2:  执行中'."\n"
                            .'- 3:  成功'."\n"
                            .'- 4：失败'."\n"
                            ."\n"
                            .'不传默认查询全部状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                        'enum' => [
                            '1',
                            '2',
                            '3',
                            '4',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderById',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID排序规则，支持asc-正序（最新数据在后）和desc-倒序（最新数据在前）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                        'default' => 'desc',
                        'enum' => [
                            'desc',
                            'asc',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，页数，从1开始',
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
                        'description' => '分页，每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
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
                                'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0'."\n",
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功'."\n"
                                    .'- false: 调用失败。'."\n"
                                    .'- true：调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '当前页码',
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
                                        'description' => '总记录数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '视频合成任务列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '视频合成任务信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'TaskUuid' => [
                                                    'description' => '任务UUID，提交对应视频生成任务时返回的TaskUuid。',
                                                    'type' => 'string',
                                                    'example' => '789c45a5-2dca-4cd2-8fa7-f70a77e335ad',
                                                ],
                                                'Title' => [
                                                    'description' => '提交的视频合成的任务标题',
                                                    'type' => 'string',
                                                    'example' => '测试',
                                                ],
                                                'Type' => [
                                                    'description' => '任务类型：'."\n"
                                                        .'- 1:  3D数字人视频合成。'."\n"
                                                        .'- 3:  2D数字人视频合成。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Status' => [
                                                    'description' => '任务业务状态：'."\n"
                                                        .'- 1: 等待执行'."\n"
                                                        .'- 2:  执行中'."\n"
                                                        .'- 3:  成功'."\n"
                                                        .'- 4：失败',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'TaskResult' => [
                                                    'description' => '任务结果',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'VideoUrl' => [
                                                            'description' => '视频URL',
                                                            'type' => 'string',
                                                            'example' => 'xxx/xxxx/xx.mp4'."\n",
                                                        ],
                                                        'SubtitlesUrl' => [
                                                            'description' => '字幕URL',
                                                            'type' => 'string',
                                                            'example' => 'xxx/xxx/xxx.ass'."\n",
                                                        ],
                                                        'WordSubtitlesUrl' => [
                                                            'description' => '字粒度的时间戳文件，特定任务支持',
                                                            'type' => 'string',
                                                            'example' => 'xxx/xxx/xxx.ass'."\n",
                                                        ],
                                                        'VideoDuration' => [
                                                            'description' => '生成视频时长，单位ms',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1111',
                                                        ],
                                                        'FailReason' => [
                                                            'description' => '失败原因',
                                                            'type' => 'string',
                                                            'example' => '这是一个失败原因'."\n",
                                                        ],
                                                        'FailCode' => [
                                                            'description' => '失败错误码',
                                                            'type' => 'string',
                                                            'example' => '10001001',
                                                        ],
                                                        'AlphaUrl' => [
                                                            'description' => 'mp4对应的alpha文件',
                                                            'type' => 'string',
                                                            'example' => 'xxx/xxx/xxx-alpha.mp4',
                                                        ],
                                                        'PreviewPic' => [
                                                            'description' => '视频首帧预览图',
                                                            'type' => 'string',
                                                            'example' => 'xxxxx.png',
                                                        ],
                                                        'AttachmentUrl' => [
                                                            'description' => '视频附件地址，特定任务支持',
                                                            'type' => 'string',
                                                            'example' => 'xxx.ini'."\n",
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"TaskUuid\\": \\"789c45a5-2dca-4cd2-8fa7-f70a77e335ad\\",\\n        \\"Title\\": \\"测试\\",\\n        \\"Type\\": 1,\\n        \\"Status\\": 3,\\n        \\"TaskResult\\": {\\n          \\"VideoUrl\\": \\"xxx/xxxx/xx.mp4\\\\n\\",\\n          \\"SubtitlesUrl\\": \\"xxx/xxx/xxx.ass\\\\n\\",\\n          \\"WordSubtitlesUrl\\": \\"xxx/xxx/xxx.ass\\\\n\\",\\n          \\"VideoDuration\\": 1111,\\n          \\"FailReason\\": \\"这是一个失败原因\\\\n\\",\\n          \\"FailCode\\": \\"10001001\\",\\n          \\"AlphaUrl\\": \\"xxx/xxx/xxx-alpha.mp4\\",\\n          \\"PreviewPic\\": \\"xxxxx.png\\",\\n          \\"AttachmentUrl\\": \\"xxx.ini\\\\n\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询视频合成任务列表',
            'description' => '支持根据数字人类型、状态、标题进行筛选。已过期和已取消任务不支持查询。',
        ],
        'ConfirmAvatar2dTrain' => [
            'summary' => '提交2D自定义形象训练任务后，在人工审核通过后，会进入客户确认阶段，该接口用于客户进行确认，确认通过后，将会扣费进入人物训练阶段，拒绝将会人物创建失败流程结束。   '."\n"
                .'ps：该功能默认是不开启的，默认提交人物审核通过后将会直接扣费进行训练，如要开通该功能，请和我们联系',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '形象code',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CH_2d_xxxxxx',
                    ],
                ],
                [
                    'name' => 'Confirm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- ACCEPT --确认通过'."\n"
                            .'- DECLINE --拒绝',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACCEPT',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7'."\n",
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误'."\n",
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"这是一个错误\\\\n\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '确认2D自定义形象训练',
            'description' => '**请确保在使用该接口前，已充分了解2D真人数字人形象定制产品的[收费方式](https://help.aliyun.com/document_detail/457248.html?spm=a2c4g.457231.0.0.315630dajR9fm3#46dd3c2026ey0)和[价格](https://help.aliyun.com/document_detail/457231.html?spm=a2c4g.457248.0.0.293d30dapJ3Dz5)。**'."\n"
                ."\n"
                .'**该接口功能默认不开启**，默认系统将会在后台自动进行2D真人数字人形象的训练，如需开启请联系我们，调用方可以通过[查询数字人资产详情接口](https://help.aliyun.com/document_detail/2384397.html?spm=a2c4g.457231.0.0.482130daNQ3Ocd)获取训练进展，或者通过订阅[数字人平台回调事件](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.2384397.0.0.3ca3783exaQjng)实时监听训练进展。'."\n"
                ."\n"
                .'关于如何拍摄真人视频素材，[请点击此处了解详情](https://aliavatar.yuque.com/org-wiki-aliavatar-fa7ng3/yxc45d/golwgxe41rs67uov)。',
        ],
        'Create2dAvatar' => [
            'summary' => '提交一段真人视频素材生成对应的2D真人数字人形象，该接口会立即返回一个形象code，后续可以根据形象code调用查询、更新、删除人物接口。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '博远',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景',
                    ],
                ],
                [
                    'name' => 'Image',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物缩略图URL。'."\n"
                            ."\n"
                            .'- 如果不传，将会截取视频第一帧作为人物缩略图。'."\n"
                            .'- 如果传，要求分辨率和原视频分辨率保持一致，格式png，大小<10M。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                    ],
                ],
                [
                    'name' => 'Portrait',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物头像URL。'."\n"
                            .'- 要求：尺寸1:1，格式png，大小<10M',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                    ],
                ],
                [
                    'name' => 'Video',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频素材URL，要求：'."\n"
                            ."\n"
                            .'- 格式mov、webm、mp4，针对透明视频格式推荐webm'."\n"
                            .'- 视频时长3-8分钟'."\n"
                            .'- 分辨率1080p'."\n"
                            .'- 大小<10G',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.mov?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                    ],
                ],
                [
                    'name' => 'Transparent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频素材是否是透明'."\n"
                            ."\n"
                            .'- true：透明格式，可支持替换背景'."\n"
                            .'- false：非透明格式，不支持替换背景',
                        'type' => 'boolean',
                        'required' => true,
                        'enumValueTitles' => [
                            'true' => 'true',
                            'false' => 'false',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Orientation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频方向：横竖屏'."\n"
                            ."\n"
                            .'- 1: 竖屏'."\n"
                            .'- 2: 横屏',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'enumValueTitles' => [
                            1 => '1',
                            '2',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次2D形象生成任务成功或失败是否需要事件回调，默认false不回调。具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
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
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A466686-8F3A-55A6-93D8-A0225DC965C0'."\n",
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一次错误消息。',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '形象code',
                                        'type' => 'string',
                                        'example' => 'CH_2d_xxxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A466686-8F3A-55A6-93D8-A0225DC965C0\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"这个一次错误消息。\\",\\n  \\"Success\\": false,\\n  \\"Data\\": {\\n    \\"Code\\": \\"CH_2d_xxxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交2D自定义形象创建任务',
            'description' => '**请确保在使用该接口前，已充分了解2D真人数字人形象定制产品的[收费方式](https://help.aliyun.com/document_detail/457248.html?spm=a2c4g.457231.0.0.315630dajR9fm3#46dd3c2026ey0)和[价格](https://help.aliyun.com/document_detail/457231.html?spm=a2c4g.457248.0.0.293d30dapJ3Dz5)。**'."\n"
                ."\n"
                .'该接口是一个异步任务接口，提交之后，系统将会在后台自动进行2D真人数字人形象的训练，调用方可以通过[查询数字人资产详情接口](https://help.aliyun.com/document_detail/2384397.html?spm=a2c4g.457231.0.0.482130daNQ3Ocd)获取训练进展，或者通过订阅[数字人平台回调事件](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.2384397.0.0.3ca3783exaQjng)实时监听训练进展。'."\n"
                ."\n"
                .'关于如何拍摄真人视频素材，[请点击此处了解详情](https://aliavatar.yuque.com/org-wiki-aliavatar-fa7ng3/yxc45d/golwgxe41rs67uov)。',
        ],
        'Update2dAvatar' => [
            'summary' => '更新2D自定义形象任务，任务创建中不允许修改',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '形象code',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CH_2d_xxxxxx'."\n",
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '博远',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景',
                    ],
                ],
                [
                    'name' => 'Image',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物缩略图。'."\n"
                            ."\n"
                            .'- 如果不传，将会截取视频第一帧作为人物缩略图。'."\n"
                            .'- 如果传，要求分辨率和原视频分辨率保持一致，格式png，大小<10M。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx'."\n",
                    ],
                ],
                [
                    'name' => 'Portrait',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物头像。不传不更新'."\n"
                            ."\n"
                            .'-要求：尺寸1:1，格式png，大小<10M',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx'."\n",
                    ],
                ],
                [
                    'name' => 'Video',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频素材地址。只有创建失败的角色允许更新。要求：'."\n"
                            .'- 格式mov、webm、mp4'."\n"
                            .'- 视频时长3-8分钟'."\n"
                            .'- 分辨率1080p'."\n"
                            .'- 大小<10G',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.mov?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx'."\n",
                    ],
                ],
                [
                    'name' => 'Transparent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频素材是否是透明'."\n"
                            ."\n"
                            .'- true = 是透明格式，未来可支持替换背景'."\n"
                            .'- false = 不是透明格式，不支持替换背景',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Orientation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始视频方向：横竖屏'."\n"
                            ."\n"
                            .'- 1: 竖屏'."\n"
                            .'- 2: 横屏',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次2D形象生成任务成功或失败是否需要事件回调，默认false不回调。具体可参考文档：[数字人回调事件通知](https://help.aliyun.com/document_detail/2261152.html?spm=a2c4g.447644.0.0.406f5876hRJTVU)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7'."\n",
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '形象code',
                                        'type' => 'string',
                                        'example' => 'CH_2d_xxxxxx'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\\\n\\",\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Success\\": false,\\n  \\"Data\\": {\\n    \\"Code\\": \\"CH_2d_xxxxxx\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => '更新2D自定义形象创建任务',
        ],
        'QueryAvatarList' => [
            'summary' => '查询当前账号下的数字人资产。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'ModelType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型类型：'."\n"
                            .'- 2d 只查询2d人物'."\n"
                            .'- 3d 只查询3d人物',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2d',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。默认值为1。',
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
                        'description' => '分页查询时每页的条目数。默认值：10。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Code' => [
                                'description' => '返回错误码',
                                'type' => 'string',
                                'example' => '10050008',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这个一个错误消息。',
                            ],
                            'Success' => [
                                'description' => '调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回实际数据对象',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                    ],
                                    'PageNo' => [
                                        'description' => '当前页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'List' => [
                                        'description' => '人物列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '人物对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'Code' => [
                                                    'description' => '人物code',
                                                    'type' => 'string',
                                                    'example' => 'CH_2d_37AsLhUrBxacjHP0',
                                                ],
                                                'Name' => [
                                                    'description' => '人物名称',
                                                    'type' => 'string',
                                                    'example' => '博远',
                                                ],
                                                'Image' => [
                                                    'description' => '人物缩略图',
                                                    'type' => 'string',
                                                    'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                                                ],
                                                'Portrait' => [
                                                    'description' => '人物头像',
                                                    'type' => 'string',
                                                    'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                                                ],
                                                'Description' => [
                                                    'description' => '人物描述',
                                                    'type' => 'string',
                                                    'example' => '朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景',
                                                ],
                                                'AvatarType' => [
                                                    'description' => '人物类型：'."\n"
                                                        .'- 0 官方人物'."\n"
                                                        .'- 1 定制化人物',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'ModelType' => [
                                                    'description' => '模型类型：'."\n"
                                                        .'- 2d 只查询2d人物'."\n"
                                                        .'- 3d 只查询3d人物',
                                                    'type' => 'string',
                                                    'example' => '2d',
                                                ],
                                                'SupportedResolutions' => [
                                                    'description' => '支持的分辨率',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Offline' => [
                                                            'description' => '离线场景分辨率',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '分辨率',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Width' => [
                                                                        'description' => '宽度，单位为像素（px）',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1080',
                                                                    ],
                                                                    'Height' => [
                                                                        'description' => '高度，单位为像素（px）',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1920',
                                                                    ],
                                                                    'Desc' => [
                                                                        'description' => '分辨率描述',
                                                                        'type' => 'string',
                                                                        'example' => '1080P竖向，分辨率1080*1920',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Online' => [
                                                            'description' => '实时场景分辨率',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '分辨率',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Width' => [
                                                                        'description' => '宽度，单位为像素（px）',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1080',
                                                                    ],
                                                                    'Height' => [
                                                                        'description' => '高度，单位为像素（px）',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1920',
                                                                    ],
                                                                    'Desc' => [
                                                                        'description' => '分辨率描述',
                                                                        'type' => 'string',
                                                                        'example' => '1080P竖向，分辨率1080*1920',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'MakeStatus' => [
                                                    'description' => '2D自定义人物创建制作状态，目前仅针对于2d人物的查询'."\n"
                                                        ."\n"
                                                        .'- 1: 创建中'."\n"
                                                        .'- 2: 创建失败'."\n"
                                                        .'- 3: 创建成功',
                                                    'type' => 'string',
                                                    'example' => '2',
                                                ],
                                                'MakeFailReason' => [
                                                    'description' => '2D自定义人物创建制作失败原因，目前仅针对于2d人物的查询',
                                                    'type' => 'string',
                                                    'example' => '当前视频时长:6(s)，最小支持180(s)',
                                                ],
                                                'MakeStage' => [
                                                    'description' => '2D自定义人物创建制作阶段，目前仅针对于2d人物的查询'."\n"
                                                        ."\n"
                                                        .'- 1、系统检测'."\n"
                                                        .'- 2、人工审核'."\n"
                                                        .'- 3、训练中'."\n"
                                                        .'- 4、创建成功',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'Preview' => [
                                                    'description' => '2D人物预览视频',
                                                    'type' => 'string',
                                                    'example' => 'https://xxx/xx/preview.webm'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Code\\": \\"10050008\\",\\n  \\"Message\\": \\"这个一个错误消息。\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TotalCount\\": 4,\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"Code\\": \\"CH_2d_37AsLhUrBxacjHP0\\",\\n        \\"Name\\": \\"博远\\",\\n        \\"Image\\": \\"https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n        \\"Portrait\\": \\"https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n        \\"Description\\": \\"朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景\\",\\n        \\"AvatarType\\": \\"0\\",\\n        \\"ModelType\\": \\"2d\\",\\n        \\"SupportedResolutions\\": {\\n          \\"Offline\\": [\\n            {\\n              \\"Width\\": 1080,\\n              \\"Height\\": 1920,\\n              \\"Desc\\": \\"1080P竖向，分辨率1080*1920\\"\\n            }\\n          ],\\n          \\"Online\\": [\\n            {\\n              \\"Width\\": 1080,\\n              \\"Height\\": 1920,\\n              \\"Desc\\": \\"1080P竖向，分辨率1080*1920\\"\\n            }\\n          ]\\n        },\\n        \\"MakeStatus\\": \\"2\\",\\n        \\"MakeFailReason\\": \\"当前视频时长:6(s)，最小支持180(s)\\",\\n        \\"MakeStage\\": \\"1\\",\\n        \\"Preview\\": \\"https://xxx/xx/preview.webm\\\\n\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询数字人资产列表',
        ],
        'QueryAvatar' => [
            'summary' => '根据数字人code查询数字人资产详情。',
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
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '在开放平台资产中心处查到的数字人形象code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CH_2d_xxxxxx',
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
                                'example' => '4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX',
                            ],
                            'Code' => [
                                'description' => '返回错误码',
                                'type' => 'string',
                                'example' => '10050008',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '超过可同时生成的视频数上限',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '人物名称',
                                        'type' => 'string',
                                        'example' => '博远',
                                    ],
                                    'Description' => [
                                        'description' => '人物描述',
                                        'type' => 'string',
                                        'example' => '朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景',
                                    ],
                                    'Portrait' => [
                                        'description' => '人物头像',
                                        'type' => 'string',
                                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                                    ],
                                    'Image' => [
                                        'description' => '人物缩略图',
                                        'type' => 'string',
                                        'example' => 'https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
                                    ],
                                    'AllLocateImages' => [
                                        'description' => '针对3D数字人的全分辨率、全机位、全角度的人物缩列图，适用于基于数字人平台PAAS API搭建自己的SAAS平台的客户。JSON格式',
                                        'type' => 'object',
                                        'example' => '{}',
                                    ],
                                    'SupportedResolutions' => [
                                        'description' => '支持的分辨率',
                                        'type' => 'object',
                                        'properties' => [
                                            'Offline' => [
                                                'description' => '离线场景分辨率',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '分辨率',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Width' => [
                                                            'description' => '宽度，单位为像素（px）',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1080',
                                                        ],
                                                        'Height' => [
                                                            'description' => '高度，单位为像素（px）',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1920',
                                                        ],
                                                        'Desc' => [
                                                            'description' => '分辨率描述',
                                                            'type' => 'string',
                                                            'example' => '1080P竖向，分辨率1080*1920'."\n",
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Online' => [
                                                'description' => '实时场景分辨率',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '分辨率',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Width' => [
                                                            'description' => '宽度，单位为像素（px）',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1080',
                                                        ],
                                                        'Height' => [
                                                            'description' => '高度，单位为像素（px）',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1920',
                                                        ],
                                                        'Desc' => [
                                                            'description' => '分辨率描述',
                                                            'type' => 'string',
                                                            'example' => '1080P竖向，分辨率1080*1920',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ModelType' => [
                                        'description' => '模型类型：'."\n"
                                            .'- 2d 只查询2d人物'."\n"
                                            .'- 3d 只查询3d人物',
                                        'type' => 'string',
                                        'example' => '2d',
                                    ],
                                    'AvatarType' => [
                                        'description' => '人物类型：'."\n"
                                            .'- 0 官方人物'."\n"
                                            .'- 1 定制化人物',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'MakeStatus' => [
                                        'description' => '2D自定义人物创建制作状态，目前仅针对于2d人物的查询'."\n"
                                            ."\n"
                                            .'- 1: 创建中'."\n"
                                            .'- 2: 创建失败'."\n"
                                            .'- 3: 创建成功',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'MakeFailReason' => [
                                        'description' => '2D自定义人物创建制作失败原因，目前仅针对于2d人物的查询',
                                        'type' => 'string',
                                        'example' => '当前视频时长:6(s)，最小支持180(s)'."\n",
                                    ],
                                    'MakeStage' => [
                                        'description' => '2D自定义人物创建制作阶段，目前仅针对于2d人物的查询'."\n"
                                            ."\n"
                                            .'- 1、系统检测'."\n"
                                            .'- 2、人工审核'."\n"
                                            .'- 3、训练中'."\n"
                                            .'- 4、创建成功',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Preview' => [
                                        'description' => '2D人物预览视频',
                                        'type' => 'string',
                                        'example' => 'https://xxx/xx/preview.webm',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX\\",\\n  \\"Code\\": \\"10050008\\",\\n  \\"Message\\": \\"超过可同时生成的视频数上限\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Name\\": \\"博远\\",\\n    \\"Description\\": \\"朝气蓬勃，富有感染力，适用于播音、传媒广电、企业宣传等场景\\",\\n    \\"Portrait\\": \\"https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n    \\"Image\\": \\"https://virtual-human-assets.oss-cn-beijing.aliyuncs.com/2d_assets/xxx/xxx/xxx.png?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n    \\"AllLocateImages\\": {},\\n    \\"SupportedResolutions\\": {\\n      \\"Offline\\": [\\n        {\\n          \\"Width\\": 1080,\\n          \\"Height\\": 1920,\\n          \\"Desc\\": \\"1080P竖向，分辨率1080*1920\\\\n\\"\\n        }\\n      ],\\n      \\"Online\\": [\\n        {\\n          \\"Width\\": 1080,\\n          \\"Height\\": 1920,\\n          \\"Desc\\": \\"1080P竖向，分辨率1080*1920\\"\\n        }\\n      ]\\n    },\\n    \\"ModelType\\": \\"2d\\",\\n    \\"AvatarType\\": \\"0\\",\\n    \\"MakeStatus\\": \\"2\\",\\n    \\"MakeFailReason\\": \\"当前视频时长:6(s)，最小支持180(s)\\\\n\\",\\n    \\"MakeStage\\": \\"1\\",\\n    \\"Preview\\": \\"https://xxx/xx/preview.webm\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询数字人资产详情',
        ],
        'DeleteAvatar' => [
            'summary' => '根据形象code删除数字人资产',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '形象code',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CH_2d_xxxxxx',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Code' => [
                                'description' => '返回错误码',
                                'type' => 'string',
                                'example' => '10050008',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误信息',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Code\\": \\"10050008\\",\\n  \\"Message\\": \\"这是一个错误信息\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '删除数字人资产',
        ],
        'ClientUnbindDevice' => [
            'summary' => '使用客户端渲染SDK时，调用该接口进行设备的证书解绑',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsdsf1',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无权限操作',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"无权限操作\\"\\n}","type":"json"}]',
            'title' => '设备解绑端渲染',
        ],
        'Render3dAvatar' => [
            'summary' => '使用客户端渲染SDK时，SDK调用该接口拉取人物的渲染数据',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。客户端SDK通过证书可获得',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App ID。客户端SDK通过证书可获得',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsdsf1',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人物code',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CH_2d_xxxxxx',
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
                                'example' => '4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RenderData' => [
                                        'description' => '人物渲染数据',
                                        'type' => 'string',
                                        'example' => '{"xxxx":"xxxxxxxx"}',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Data\\": {\\n    \\"RenderData\\": \\"{\\\\\\"xxxx\\\\\\":\\\\\\"xxxxxxxx\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
            'title' => '端SDK拉取的人物渲染数据',
        ],
        'ClientStart' => [
            'summary' => '端渲染SDK通过鉴权后，SDK调用该接口开始工作',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。客户端SDK通过证书可获得',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App ID。客户端SDK通过证书可获得',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsdsf1',
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
                                'example' => '4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010002',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '这是一个错误',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'ImToken' => [
                                        'description' => '端SDK开始工作需要连接驱动的token',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10010002\\",\\n  \\"Message\\": \\"这是一个错误\\",\\n  \\"Data\\": {\\n    \\"ImToken\\": \\"xxxxxxxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '客户端SDK开始工作',
        ],
        'ClientAuth' => [
            'summary' => '使用客户端渲染SDK时，SDK调用该接口进行鉴权',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户id。客户端SDK通过证书可获得',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App ID。客户端SDK通过证书可获得',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsdsf1',
                    ],
                ],
                [
                    'name' => 'License',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FqTyXFrIqbIGnb_oqIvszv1wffODnpCDNDvOc6xNXbAhak1AwsfrCo2cSrPFAhHEitOb9VEG',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'largeScreen',
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备详细信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"xxxx":"xxxxxxxxxxx"}',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '10010001',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无权限操作',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"10010001\\",\\n  \\"Message\\": \\"无权限操作\\"\\n}","type":"json"}]',
            'title' => '客户端SDK鉴权',
        ],
        'StartTimedResetOperate' => [
            'summary' => '停复机操作开机接口，提供对指定的数字人停复机实例（来自虚拟数字人开放平台——实例管理页面）进行开机操作，功能等同于点击页面的开机按钮。',
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
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。从虚拟数字人开放平台实例管理页面获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'avatar_operation_public_cn-7pp2****802'."\n",
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                            'Code' => [
                                'description' => '返回结果码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'operation success.',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功'."\n"
                                    .'- false: 调用失败。'."\n"
                                    .'- true：调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例id',
                                        'type' => 'string',
                                        'example' => 'avatar_operation_public_cn-7pp2****802',
                                    ],
                                    'TenantId' => [
                                        'description' => '从虚拟数字人开放平台中获取的TenantId',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'xxxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"avatar_operation_public_cn-7pp2****802\\",\\n    \\"TenantId\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '停复机操作开机接口',
            'description' => '**请确保在使用该接口前，已充分了解虚拟数字人停复机产品的[收费方式和价格](https://help.aliyun.com/document_detail/457248.html#1e716e704bcf5)。**'."\n"
                ."\n"
                .'**本接口只能针对数字人停复机实例进行开机操作，非停复机实例无法操作**。调用该接口返回成功，表示系统成功接收到开机请求，此时该停复机实例状态为开机中，系统正在对该实例执行开机操作中，**开机操作正常情况下需要1-5分钟时间，如果遇到平台资源池不足可能会需要更长时间**。调用该接口之后可以轮询调用[停复机实例开关机状态查询接口](https://help.aliyun.com/document_detail/475509.html)查询开机执行情况，**轮询周期建议3s一次，不可高于1s一次，否则可能会导致触发限流**。'."\n"
                ."\n"
                .'><warning>处于开机中状态的实例是无法使用的，需要等待开机完成，状态变化为开机。同时计费将从开机完成之后开始计费。></warning>',
        ],
        'CloseTimedResetOperate' => [
            'summary' => '停复机操作关机接口，提供对指定的数字人停复机实例（来自虚拟数字人开放平台——实例管理页面）进行关机操作，功能等同于点击页面的关机按钮。',
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
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，从虚拟数字人开放平台实例管理页面获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'avatar_operation_public_cn-7pp2****802'."\n",
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
                                'example' => '4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX',
                            ],
                            'Code' => [
                                'description' => '返回结果码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'operation success.',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功'."\n"
                                    .'- false: 调用失败。'."\n"
                                    .'- true：调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => 'avatar_operation_public_cn-7pp2****802'."\n",
                                    ],
                                    'TenantId' => [
                                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'xxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C8BF3A5-948F-1F89-AACD-D18DEF52D1XX\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"avatar_operation_public_cn-7pp2****802\\\\n\\",\\n    \\"TenantId\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '停复机操作关机接口',
            'description' => '**请确保在使用该接口前，已充分了解虚拟数字人停复机产品的[收费方式和价格](https://help.aliyun.com/document_detail/457248.html#1e716e704bcf5)。**'."\n"
                ."\n"
                .'**本接口只能针对数字人停复机实例进行开机操作，非停复机实例无法操作**。调用该接口返回成功，表示系统成功接收到关机请求，此时该停复机实例状态为关机中，系统正在对该实例执行关机操作中，**关机操作正常情况下在1分钟内完成**。调用该接口之后可以轮询调用[停复机实例开关机状态查询接口](https://help.aliyun.com/document_detail/475509.html)查询关机执行情况，**轮询周期建议3s一次，不可高于1s一次，否则可能会导致触发限流**。'."\n"
                ."\n"
                .'><warning>调用关机接口之后该实例将立即无法使用，同时也将停止计费，如果需要重新使用请在关机完成之后调用开机操作，重新开机使用。></warning>',
        ],
        'QueryTimedResetOperateStatus' => [
            'summary' => '查询停复机操作状态接口，提供查询指定的数字人停复机实例（来自虚拟数字人开放平台——实例管理页面）的开关机状态。',
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
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'avatar_operation_public_cn-7pp2****802',
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
                                'example' => '74d42913-f13c-47ac-a8ac-8610685688eb',
                            ],
                            'Code' => [
                                'description' => '返回结果码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'operation success.',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功'."\n"
                                    .'- false: 调用失败。'."\n"
                                    .'- true：调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例id。',
                                        'type' => 'string',
                                        'example' => 'avatar_operation_public_cn-7pp2****802'."\n",
                                    ],
                                    'StatusStr' => [
                                        'description' => '当前停复机实例开关机状态中文描述',
                                        'type' => 'string',
                                        'example' => '开机',
                                    ],
                                    'TenantId' => [
                                        'description' => '从虚拟数字人开放平台中获取的TenantId'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxx',
                                    ],
                                    'Status' => [
                                        'description' => '当前停复机实例开关机状态枚举值：'."\n"
                                            ."\n"
                                            .'- 10：开机，表示已完成开机，可正常使用'."\n"
                                            .'- 11：开机中，表示正在开机中，不可使用，需等待状态变为开机'."\n"
                                            .'- 20：关机，表示已完成关机，不可使用'."\n"
                                            .'- 21：关机中，表示正在关机中，此时不可使用',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74d42913-f13c-47ac-a8ac-8610685688eb\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"avatar_operation_public_cn-7pp2****802\\\\n\\",\\n    \\"StatusStr\\": \\"开机\\",\\n    \\"TenantId\\": \\"xxxxx\\",\\n    \\"Status\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '停复机实例开关机状态查询接口',
            'description' => '**本接口只能针对数字人停复机实例状态进行查询操作，非停复机实例无法操作。**'."\n"
                .'调用该接口将返回当前停复机实例的开关机状态，具体状态值对应下方的系统返回参数部分。'."\n"
                ."\n"
                .'><warning>该接口调用轮询周期建议3s一次，不可低于1s一次，否则可能会导致触发限流。></warning>',
        ],
        'DuplexDecision' => [
            'summary' => '语音双工决策接口API。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台中获取的TenantId'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => 'xxxxx',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App ID。在业务配置详情页的右下角可以看到开发者信息AppId'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '12131231',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对话的会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'BizRequestId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务请求id，每次请求的唯一id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'DialogStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前通话状态 ；'."\n"
                            ."\n"
                            .'1. “ROBOT_TALK”：即数字人在播报，用户可打断。数字人只要在播报时就传该状态'."\n"
                            .'2. “USER_TALK”：即数字人未播报并且用户在说话，机器人可承接。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ROBOT_TALK',
                    ],
                ],
                [
                    'name' => 'CallTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用时机:'."\n"
                            ."\n"
                            .'1. 0： 句中'."\n"
                            .'2. 1： 句尾',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASR识别的用户说的话对应的文本内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'DialogContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '对话上下文',
                        'type' => 'object',
                        'properties' => [
                            'CurUtteranceIdx' => [
                                'description' => '当前会话轮次。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'Histories' => [
                                'description' => '对话历史（可以取最近的20轮对话）',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对话历史对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'User' => [
                                            'description' => '用户说的话',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '你好',
                                        ],
                                        'Robot' => [
                                            'description' => ' 数字人回复的问答结果',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '你好啊',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InterruptType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '打断类型：不传默认为0'."\n"
                            ."\n"
                            .'1. 0：算法语义打断类型'."\n"
                            .'2. 1：自定义打断词'."\n"
                            .'3. 2：自定义打断词+算法语义打断',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CustomKeywords',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '自定义的打断词列表，词的数目不超过100，每个词的字数不超过10个字，InterruptType为1时，该字段必填'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义的打断词',
                            'type' => 'string',
                            'required' => false,
                            'example' => '闭嘴',
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
                            'Code' => [
                                'description' => '返回结果码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Success' => [
                                'description' => '调用是否成功。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'ActionType' => [
                                        'description' => ' 算法决策出的行为类别，可选项如下：'."\n"
                                            .' INTERRUPT：打断'."\n"
                                            .' NO_ACTION：没有动作行为'."\n"
                                            .' UNDERTAKE：承接',
                                        'type' => 'string',
                                        'example' => 'UNDERTAKE',
                                    ],
                                    'OutputText' => [
                                        'description' => '输出的承接文本',
                                        'type' => 'string',
                                        'example' => '嗯',
                                    ],
                                    'GrabType' => [
                                        'description' => '打断数字人播报后，当前的ASR文本是否需要去请求问答'."\n"
                                            .'- GRAB：触发问答'."\n"
                                            .'- NO_GRAB：不触发问答',
                                        'type' => 'string',
                                        'example' => 'GRAB',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": {\\n    \\"ActionType\\": \\"UNDERTAKE\\",\\n    \\"OutputText\\": \\"嗯\\",\\n    \\"GrabType\\": \\"GRAB\\"\\n  },\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\"\\n}","type":"json"}]',
            'title' => '语音双工决策',
        ],
        'LicenseAuth' => [
            'summary' => '使用端渲染sdk时，使用平台下发的license许可证调用该接口，换取端渲染sdk接入时需要的鉴权token',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户ID，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的TenantId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '9185',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AppId，从虚拟数字人开放平台的对应业务配置的开发者信息中获取的AppId',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsdsf1',
                    ],
                ],
                [
                    'name' => 'License',
                    'in' => 'query',
                    'schema' => [
                        'description' => '后台绑定客户端包名信息后生成的license文件中的内容，可以从实例配置中去下载对应实例的license文件',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FqTyXFrIqbIGnb_oqIvszv1wffODnpCDNDvOc6xNXbAhak1AwsfrCo2cSrPFAhHEitOb9VEG',
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
                                'example' => '13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7'."\n",
                            ],
                            'Code' => [
                                'description' => '返回结果码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'operation success.'."\n",
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Token' => [
                                        'description' => '端渲染sdk对接需要的鉴权token',
                                        'type' => 'string',
                                        'example' => 'vHOgG+IbVrm0QXTzVB/O4GJJLEAWr67gl7NGWowHjioMKIh2yc9PNu21S7t8mjuVo3Z',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13E0445E-CA7F-5DD3-9B0F-D4B39E0180F7\\\\n\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"operation success.\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Token\\": \\"vHOgG+IbVrm0QXTzVB/O4GJJLEAWr67gl7NGWowHjioMKIh2yc9PNu21S7t8mjuVo3Z\\"\\n  }\\n}","type":"json"}]',
            'title' => '客户端license鉴权',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'avatar.cn-zhangjiakou.aliyuncs.com',
        ],
    ],
];
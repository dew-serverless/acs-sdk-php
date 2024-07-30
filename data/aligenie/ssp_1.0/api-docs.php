<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'AliGenie',
        'product' => 'AliGenie',
        'version' => 'ssp_1.0',
    ],
    'directories' => [
        [
            'id' => 171020,
            'title' => '账号绑定及用户授权',
            'type' => 'directory',
            'children' => [
                'AuthLoginWithThirdUserInfo',
                'EcologyOpennessSendVerificationCode',
                'FindUserlistToAuthLoginWithPhoneNumber',
                'AuthLoginWithAligenieUserInfo',
                'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber',
                'AuthLoginWithTaobaoUserInfo',
                'EcologyOpennessAuthenticate',
                'GetAligenieUserInfo',
                'UnbindAligenieUser',
                'QueryUserDeviceListByTmeUserId',
            ],
        ],
        [
            'id' => 170170,
            'title' => '激活绑定',
            'type' => 'directory',
            'children' => [
                'CheckAuthCodeBindForExt',
                'GetCodeEnhance',
                'ScanCodeBind',
            ],
        ],
        [
            'id' => 96289,
            'title' => '用户设备关系',
            'type' => 'directory',
            'children' => [
                'GetUserByDeviceId',
                'ListDeviceByUserId',
                'UnbindDevice',
                'ListDeviceByUserIdAndChanel',
            ],
        ],
        [
            'id' => 96293,
            'title' => '设备信息',
            'type' => 'directory',
            'children' => [
                'GetDeviceIdByIdentity',
                'ListDeviceIdByIdentities',
                'GetDeviceBasicInfo',
                'ListDeviceBasicInfo',
                'GetDeviceStatusInfo',
                'GetDeviceTag',
                'DeviceControl',
                'GetDeviceSetting',
                'GetDeviceStatusDetail',
                'SetDeviceSetting',
            ],
        ],
        [
            'id' => 170173,
            'title' => '功能API',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 170178,
                    'title' => '内容点播',
                    'type' => 'directory',
                    'children' => [
                        'ScgSearch',
                        'AddAndRemoveFavoriteContent',
                        'CreatePlayingList',
                        'GetAlbum',
                        'GetContent',
                        'GetCurrentPlayingItem',
                        'GetCurrentPlayingList',
                        'IndexControlPlayingList',
                        'ListAlbumDetail',
                        'ListCateContent',
                        'ListCateInfo',
                        'ListCommonCateFirstFloor',
                        'ListCommonCateSecondFloor',
                        'ListPlayHistory',
                        'ListRecommendContent',
                        'PlayAndPauseControl',
                        'PlayModeControl',
                        'PreviousAndNextControl',
                        'ProgressControl',
                        'SearchContent',
                        'CloudPlayer',
                        'MobileRecommend',
                    ],
                ],
                [
                    'id' => 170194,
                    'title' => '课程订阅',
                    'type' => 'directory',
                    'children' => [
                        'AddSub',
                        'DeleteSub',
                        'ListAlbumIsAdded',
                        'ListSub',
                        'ListSubAlbum',
                        'ListSubscriptionAlbumCategory',
                        'GetAlbumDetailById',
                    ],
                ],
                [
                    'id' => 170201,
                    'title' => '留言',
                    'type' => 'directory',
                    'children' => [
                        'GetUnreadMessageCount',
                        'ListUserMessage',
                        'ReadMessage',
                        'SendMessage',
                    ],
                ],
                [
                    'id' => 170204,
                    'title' => '闹钟',
                    'type' => 'directory',
                    'children' => [
                        'CreateAlarm',
                        'DeleteAlarms',
                        'GetAlarm',
                        'ListAlarms',
                        'ListMusic',
                        'QueryMusicType',
                        'UpdateAlarm',
                    ],
                ],
                [
                    'id' => 170174,
                    'title' => '定时',
                    'type' => 'directory',
                    'children' => [
                        'CreateScheduleTask',
                        'DeleteScheduleTask',
                        'GetScheduleTask',
                    ],
                ],
                [
                    'id' => 171175,
                    'title' => '天气',
                    'type' => 'directory',
                    'children' => [
                        'GetWeather',
                    ],
                ],
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'LoginStateInfo' => [
                'title' => '登录鉴权结构体',
                'type' => 'object',
                'properties' => [
                    'ThirdUserIdentifier' => [
                        'title' => '三方用户ID',
                        'type' => 'string',
                    ],
                    'ThirdUserType' => [
                        'title' => '三方用户类型',
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'title' => '用户ID',
                        'type' => 'string',
                    ],
                    'SceneCode' => [
                        'title' => '场景码',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'AuthLoginWithThirdUserInfo' => [
            'summary' => '通过三方用户信息进行授权登录。',
            'path' => '/v1.0/ssp/authLoginWithThirdUserInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '场景码，需提前向天猫精灵申请',
                        'description' => '场景码，需要提前向天猫精灵申请',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wechat_ecology_openness',
                    ],
                ],
                [
                    'name' => 'ThirdUserType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '三方用户类型，场景接入申请完成后进行分配',
                        'description' => '三方用户类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'weChatUser',
                    ],
                ],
                [
                    'name' => 'ThirdUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '三方用户唯一标识',
                        'description' => '三方用户标识',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'o5qxy6EItZBasv2VZAf-MGwllHL4',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{}',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                                'default' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'LoginStateAccessToken' => [
                                        'title' => '登录态访问令牌',
                                        'description' => '登录态访问令牌',
                                        'type' => 'string',
                                        'example' => 'bd9ccdb121ee950ddead51e943e081fe',
                                    ],
                                    'ExpiredTimeLong' => [
                                        'title' => '登录态访问令牌过期时间',
                                        'description' => '登录态访问令牌过期时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1659428051452',
                                        'default' => '1659333475811',
                                    ],
                                ],
                            ],
                            'DataObj' => [
                                'title' => '当Code为5140001时，代表登录失败，原因是三方用户未绑定到天猫精灵用户，前端需要根据此错误码走用户手机号授权登录流程，后续流程前端需要将DataObj中SessionId带回服务端。',
                                'description' => '当Code为5140001时，代表登录失败，原因是三方用户未绑定到天猫精灵用户，前端需要根据此错误码走用户手机号授权登录流程，后续流程前端需要将DataObj中SessionId带回服务端。',
                                'type' => 'object',
                                'properties' => [
                                    'SessionId' => [
                                        'title' => '会话id',
                                        'description' => '会话id',
                                        'type' => 'string',
                                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"bd9ccdb121ee950ddead51e943e081fe\\",\\n    \\"ExpiredTimeLong\\": 1659428051452\\n  },\\n  \\"DataObj\\": {\\n    \\"SessionId\\": \\"dbe2eb4458302b9246c6da17fbc95f4b\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AuthLoginWithThirdUserInfoResponse>\\n    <RequestId>73C67BD9-175A-1324-8202-9FAABBB3E6FA</RequestId>\\n    <Code>200</Code>\\n    <Message>OK</Message>\\n    <Success>true</Success>\\n    <Result>\\n        <AccessToken>f6221a258d8cfcb7c82fbf9fff9a164b</AccessToken>\\n        <ExpiredTimeLong>1659428051452</ExpiredTimeLong>\\n    </Result>\\n    <DataObj>\\n        <SessionId>dbe2eb4458302b9246c6da17fbc95f4b</SessionId>\\n    </DataObj>\\n</AuthLoginWithThirdUserInfoResponse>","errorExample":""}]',
            'title' => '通过三方用户信息进行授权登录',
        ],
        'EcologyOpennessSendVerificationCode' => [
            'summary' => '生态开放发送短信验证码',
            'path' => '/v1.0/ssp/ecologyOpennessSendVerificationCode',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话id',
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '手机号码',
                        'description' => '手机号码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '18612345678',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地区编码',
                        'description' => '地区编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '+86',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'ExpireIn' => [
                                        'title' => '有效期（单位：秒）',
                                        'description' => '有效期（单位：秒）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '900',
                                    ],
                                    'RepeatInterval' => [
                                        'title' => '下次可重新发送的时间间隔（单位：秒）',
                                        'description' => '下次可重新发送的时间间隔（单位：秒）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '60',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"ExpireIn\\": 900,\\n    \\"RepeatInterval\\": 60\\n  }\\n}","type":"json"}]',
            'title' => '生态开放发送短信验证码',
        ],
        'FindUserlistToAuthLoginWithPhoneNumber' => [
            'summary' => '通过手机号寻找可授权登录的账号列表',
            'path' => '/v1.0/ssp/findUserlistToAuthLoginWithPhoneNumber',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话id',
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地区编码',
                        'description' => '地区编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '+86',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号码',
                        'description' => '手机号码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '18612345678',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'title' => '短信验证码',
                        'description' => '短信验证码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'UserListToAuthLogin' => [
                                        'title' => '可授权登录的账号列表',
                                        'description' => '可授权登录的账号列表',
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '可授权登录的账号',
                                            'description' => '可授权登录的账号',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserType' => [
                                                    'title' => '用户类型'."\n"
                                                        .'TAOBAO：淘宝用户'."\n"
                                                        .'ALIGENIE：天猫精灵用户',
                                                    'description' => '用户类型'."\n"
                                                        .'TAOBAO：淘宝用户'."\n"
                                                        .'ALIGENIE：天猫精灵用户',
                                                    'type' => 'string',
                                                    'example' => 'ALIGENIE',
                                                ],
                                                'EncryptedUserIdentifier' => [
                                                    'title' => '加密过的用户标识',
                                                    'description' => '加密过的用户标识',
                                                    'type' => 'string',
                                                    'example' => 'KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh',
                                                ],
                                                'Nickname' => [
                                                    'title' => '用户昵称',
                                                    'description' => '用户昵称',
                                                    'type' => 'string',
                                                    'example' => 'XXX',
                                                ],
                                                'Avatar' => [
                                                    'title' => '用户头像',
                                                    'description' => '用户头像',
                                                    'type' => 'string',
                                                    'example' => 'https://xxx',
                                                ],
                                                'FindingType' => [
                                                    'title' => '用户发现类型'."\n"
                                                        ."\n"
                                                        .'淘宝用户固定为：PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；'."\n"
                                                        ."\n"
                                                        .'天猫精灵用户为：'."\n"
                                                        .'PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber作为精灵绑定手机号查询到的；'."\n"
                                                        .'PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；',
                                                    'description' => '用户发现类型'."\n"
                                                        ."\n"
                                                        .'淘宝用户固定为：PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；'."\n"
                                                        ."\n"
                                                        .'天猫精灵用户为：'."\n"
                                                        .'PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber作为精灵绑定手机号查询到的；'."\n"
                                                        .'PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；',
                                                    'type' => 'string',
                                                    'example' => 'PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DataObj' => [
                                'title' => 'Code为5140003时代表调用失败，原因是该手机号未找到可授权登录的账号列表，前端可以让用户确认通过手机号生成精灵账号，也可提示用户先基于手机号注册淘宝账号，后续流程前端需要将DataObj中sessionId带回服务端。',
                                'description' => 'Code为5140003时代表调用失败，原因是该手机号未找到可授权登录的账号列表，前端可以让用户确认通过手机号生成精灵账号，也可提示用户先基于手机号注册淘宝账号，后续流程前端需要将DataObj中sessionId带回服务端。',
                                'type' => 'object',
                                'properties' => [
                                    'SessionId' => [
                                        'title' => '会话id',
                                        'description' => '会话id',
                                        'type' => 'string',
                                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"UserListToAuthLogin\\": [\\n      {\\n        \\"UserType\\": \\"ALIGENIE\\",\\n        \\"EncryptedUserIdentifier\\": \\"KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh\\",\\n        \\"Nickname\\": \\"XXX\\",\\n        \\"Avatar\\": \\"https://xxx\\",\\n        \\"FindingType\\": \\"PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber\\"\\n      }\\n    ]\\n  },\\n  \\"DataObj\\": {\\n    \\"SessionId\\": \\"dbe2eb4458302b9246c6da17fbc95f4b\\"\\n  }\\n}","type":"json"}]',
            'title' => '通过手机号寻找可授权登录的账号列表',
        ],
        'AuthLoginWithAligenieUserInfo' => [
            'summary' => '通过指定精灵账号进行授权登录。',
            'path' => '/v1.0/ssp/authLoginWithAligenieUserInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话id',
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                    ],
                ],
                [
                    'name' => 'EncryptedAligenieUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '加密过的精灵用户标识',
                        'description' => '加密过的精灵用户标识',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'UYugfm/3Nb9q24AyES2rYmC5tIglSoDX3Mbna/vrldcjGPtC8VzFwo+CU5c4CHLjrK7ekskG2WVaevM5Zi9f0w==',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                                'default' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'LoginStateAccessToken' => [
                                        'title' => '登录态访问令牌',
                                        'description' => '登录态访问令牌',
                                        'type' => 'string',
                                        'example' => 'd15aa92de679d0d225aa845268be19ee',
                                    ],
                                    'ExpiredTimeLong' => [
                                        'title' => '登录态访问令牌过期时间（长整型）',
                                        'description' => '登录态访问令牌过期时间（长整型）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1659506854230',
                                        'default' => '1659506854230',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
            'title' => '通过指定精灵账号进行授权登录',
        ],
        'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber' => [
            'summary' => '通过手机号生成精灵账号进行授权登录。',
            'path' => '/v1.0/ssp/authLoginWithAligenieUserInfoGeneratedByPhoneNumber',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话id',
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                                'default' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'LoginStateAccessToken' => [
                                        'title' => '登录态访问令牌',
                                        'description' => '登录态访问令牌',
                                        'type' => 'string',
                                        'example' => 'd15aa92de679d0d225aa845268be19ee',
                                    ],
                                    'ExpiredTimeLong' => [
                                        'title' => '登录态访问令牌过期时间（长整型）',
                                        'description' => '登录态访问令牌过期时间（长整型）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1659506854230',
                                        'default' => '1659506854230',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
            'title' => '通过手机号生成精灵账号进行授权登录',
        ],
        'AuthLoginWithTaobaoUserInfo' => [
            'summary' => '通过指定淘宝账号进行授权登录',
            'path' => '/v1.0/ssp/authLoginWithTaobaoUserInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话id',
                        'description' => '会话id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                    ],
                ],
                [
                    'name' => 'EncryptedTaobaoUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '加密过的淘宝用户标识',
                        'description' => '加密过的淘宝用户标识',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'LoginStateAccessToken' => [
                                        'title' => '登录态访问令牌',
                                        'description' => '登录态访问令牌',
                                        'type' => 'string',
                                        'example' => 'd15aa92de679d0d225aa845268be19ee',
                                    ],
                                    'ExpiredTimeLong' => [
                                        'title' => '登录态访问令牌过期时间（长整型）',
                                        'description' => '登录态访问令牌过期时间（长整型）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1659506854230',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
            'title' => '通过指定淘宝账号进行授权登录',
        ],
        'EcologyOpennessAuthenticate' => [
            'summary' => '使用登录态访问令牌进行鉴权获取三方用户标识和精灵方用户openId',
            'path' => '/v1.0/ssp/ecologyOpennessAuthenticate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LoginStateAccessToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '登录态访问令牌',
                        'description' => '登录态访问令牌',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'd15aa*****ee',
                    ],
                ],
                [
                    'name' => 'EncodeType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PROJECT_ID',
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实体key',
                        'description' => '实体key',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12*****',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73****9-175A-1324-8202-9FAAB*****A',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                                'default' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'UserOpenId' => [
                                        'title' => '精灵用户openId',
                                        'description' => '精灵用户openId',
                                        'type' => 'string',
                                        'example' => 'o****RnNAW/smBNX9By7Zlc3J7iQUXPiUj/6OizU+ifLSzn1vpQL9ZgSp22u7hsxj0UZ2i6urbv9HQ==',
                                    ],
                                    'EncodeType' => [
                                        'title' => '实体类型',
                                        'description' => '实体类型',
                                        'type' => 'string',
                                        'example' => 'PROJECT_ID',
                                    ],
                                    'EncodeKey' => [
                                        'title' => '实体key',
                                        'description' => '实体key',
                                        'type' => 'string',
                                        'example' => '12****7',
                                    ],
                                    'SceneCode' => [
                                        'title' => '场景码',
                                        'description' => '场景码',
                                        'type' => 'string',
                                        'example' => '******',
                                    ],
                                    'ThirdUserType' => [
                                        'title' => '三方用户类型',
                                        'description' => '三方用户类型',
                                        'type' => 'string',
                                        'example' => '******',
                                    ],
                                    'ThirdUserIdentifier' => [
                                        'title' => '三方用户标识',
                                        'description' => '三方用户标识',
                                        'type' => 'string',
                                        'example' => '******',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73****9-175A-1324-8202-9FAAB*****A\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"UserOpenId\\": \\"o****RnNAW/smBNX9By7Zlc3J7iQUXPiUj/6OizU+ifLSzn1vpQL9ZgSp22u7hsxj0UZ2i6urbv9HQ==\\",\\n    \\"EncodeType\\": \\"PROJECT_ID\\",\\n    \\"EncodeKey\\": \\"12****7\\",\\n    \\"SceneCode\\": \\"******\\",\\n    \\"ThirdUserType\\": \\"******\\",\\n    \\"ThirdUserIdentifier\\": \\"******\\"\\n  }\\n}","type":"json"}]',
            'title' => '生态开放鉴权',
            'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。'."\n"
                ."\n"
                .'- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。'."\n"
                ."\n"
                .'- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用返回的http响应状态码为400时代表登录态失效。',
        ],
        'GetAligenieUserInfo' => [
            'summary' => '通过登录态凭证获取三方绑定的精灵账号信息',
            'path' => '/v1.0/ssp/getAligenieUserInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LoginStateAccessToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '登录态访问凭证',
                        'description' => '登录态访问凭证',
                        'type' => 'string',
                        'required' => true,
                        'example' => '99ce8a70c23a94f8569e1a525bef6e85',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                            ],
                            'Result' => [
                                'type' => 'object',
                                'properties' => [
                                    'AligenieNickname' => [
                                        'title' => '精灵用户昵称',
                                        'description' => '精灵用户昵称',
                                        'type' => 'string',
                                        'example' => 'XXX',
                                    ],
                                    'Avatar' => [
                                        'title' => '精灵用户头像地址',
                                        'description' => '精灵用户头像地址',
                                        'type' => 'string',
                                        'example' => 'http://img.alicdn.com/xxx.jpg',
                                    ],
                                    'Deletable' => [
                                        'title' => '是否可注销',
                                        'description' => '是否可注销',
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"AligenieNickname\\": \\"XXX\\",\\n    \\"Avatar\\": \\"http://img.alicdn.com/xxx.jpg\\",\\n    \\"Deletable\\": true\\n  }\\n}","type":"json"}]',
            'title' => '获取三方绑定的精灵账号信息',
            'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。'."\n"
                ."\n"
                .'- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。'."\n"
                ."\n"
                .'- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用返回的http响应状态码为400时代表登录态失效。',
        ],
        'UnbindAligenieUser' => [
            'summary' => '通过登录态凭证解绑三方和精灵账号的关系'."\n",
            'path' => '/v1.0/ssp/unbindAligenieUser',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LoginStateAccessToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '登录态访问凭证',
                        'description' => '登录态访问凭证',
                        'type' => 'string',
                        'required' => true,
                        'example' => '99ce8a70c23a94f8569e1a525bef6e85',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '解除三方和精灵账号的关系',
            'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。'."\n"
                ."\n"
                .'- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。'."\n"
                ."\n"
                .'- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API'."\n"
                .'当API调用返回的http响应状态码为400时代表登录态失效。',
        ],
        'QueryUserDeviceListByTmeUserId' => [
            'summary' => '通过tme用户id获取授权的天猫精灵用户+设备列表，提供给酷狗云推歌使用',
            'path' => '/v1.0/ssp/queryUserDeviceListByTmeUserId',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TmeUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TME用户id',
                        'description' => 'TME用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FDEEDE337BAA780793D72F7F20BEF2F5',
                    ],
                ],
                [
                    'name' => 'Sp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '"KG"：酷狗'."\n"
                            .'"KW"：酷我'."\n"
                            .'"QM"：Q音',
                        'description' => '"KG"：酷狗'."\n"
                            .'"KW"：酷我'."\n"
                            .'"QM"：Q音',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'KG',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
                            ],
                            'Code' => [
                                'title' => '响应码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Success' => [
                                'title' => '调用是否成功标志',
                                'description' => '调用是否成功标志',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Result' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'Sp' => [
                                        'title' => '"KG"：酷狗'."\n"
                                            .'"KW"：酷我'."\n"
                                            .'"QM"：Q音',
                                        'description' => '"KG"：酷狗'."\n"
                                            .'"KW"：酷我'."\n"
                                            .'"QM"：Q音',
                                        'type' => 'string',
                                        'example' => 'KG',
                                    ],
                                    'EncodeType' => [
                                        'title' => '实体类型（三方透传即可）',
                                        'description' => '实体类型（三方透传即可）',
                                        'type' => 'string',
                                        'example' => 'PROJECT_ID',
                                    ],
                                    'EncodeKey' => [
                                        'title' => '实体key（三方透传即可）',
                                        'description' => '实体key（三方透传即可）',
                                        'type' => 'string',
                                        'example' => '12****7',
                                    ],
                                    'AligenieUserInfoList' => [
                                        'title' => '天猫精灵用户列表',
                                        'description' => '天猫精灵用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'OpenUserId' => [
                                                    'title' => '用户id',
                                                    'description' => '用户id',
                                                    'type' => 'string',
                                                    'example' => 'R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==',
                                                ],
                                                'UserNickname' => [
                                                    'title' => '用户昵称',
                                                    'description' => '用户昵称',
                                                    'type' => 'string',
                                                    'example' => 'a***e',
                                                ],
                                                'AuthorizedDeviceList' => [
                                                    'title' => '用户授权的设备列表',
                                                    'description' => '用户授权的设备列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'OpenDeviceId' => [
                                                                'title' => '按照天猫精灵开放平台标准加密的设备id',
                                                                'description' => '设备id',
                                                                'type' => 'string',
                                                                'example' => 'fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=',
                                                            ],
                                                            'DeviceName' => [
                                                                'title' => '设备名称',
                                                                'description' => '设备名称',
                                                                'type' => 'string',
                                                                'example' => 'CC',
                                                            ],
                                                            'Online' => [
                                                                'title' => '设备是否在线',
                                                                'description' => '设备是否在线',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'TmeProductId' => [
                                                                'title' => 'TME产品id',
                                                                'description' => 'TME产品id',
                                                                'type' => 'string',
                                                            ],
                                                            'TmeDeviceId' => [
                                                                'title' => '透出给TME的设备id',
                                                                'description' => '透出给TME的设备id',
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
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"Sp\\": \\"KG\\",\\n    \\"EncodeType\\": \\"PROJECT_ID\\",\\n    \\"EncodeKey\\": \\"12****7\\",\\n    \\"AligenieUserInfoList\\": [\\n      {\\n        \\"OpenUserId\\": \\"R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==\\",\\n        \\"UserNickname\\": \\"a***e\\",\\n        \\"AuthorizedDeviceList\\": [\\n          {\\n            \\"OpenDeviceId\\": \\"fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=\\",\\n            \\"DeviceName\\": \\"CC\\",\\n            \\"Online\\": true,\\n            \\"TmeProductId\\": \\"\\",\\n            \\"TmeDeviceId\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '通过tme用户id获取授权的天猫精灵用户+设备列表',
        ],
        'CheckAuthCodeBindForExt' => [
            'summary' => '轮询激活绑定结果。',
            'path' => '/v1.0/ssp/checkAuthCodeBindForExt',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型，此处填写PROJECT_ID。',
                        'description' => '编码类型，此处填写PROJECT_ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PROJECT_ID',
                        'enum' => [
                            'PROJECT_ID',
                        ],
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                        'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定用户和渠道获取的authCode',
                        'description' => '通过指定用户id获取到的authCode'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aexfgc',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息列表。',
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型：'."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'description' => '用户Id的类型：'."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1***2',
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '详细信息',
                                'description' => '详细信息',
                                'type' => 'object',
                                'properties' => [
                                    'UserOpenInfo' => [
                                        'title' => '用户开放信息',
                                        'description' => '用户开放信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'IdType' => [
                                                'title' => 'USER_ID',
                                                'description' => 'USER_ID',
                                                'type' => 'string',
                                                'example' => 'USER_ID',
                                            ],
                                            'Id' => [
                                                'title' => '对外的用户id',
                                                'description' => '对外的用户id',
                                                'type' => 'string',
                                                'example' => '0963*0158',
                                            ],
                                        ],
                                    ],
                                    'DeviceOpenInfo' => [
                                        'title' => '设备开放信息',
                                        'description' => '设备开放信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'IdType' => [
                                                'title' => 'DEVICE_ID',
                                                'description' => 'DEVICE_ID',
                                                'type' => 'string',
                                                'example' => 'DEVICE_ID',
                                            ],
                                            'Id' => [
                                                'title' => '对外的设备id',
                                                'description' => '对外的设备id',
                                                'type' => 'string',
                                                'example' => 'A963*0158',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"UserOpenInfo\\": {\\n      \\"IdType\\": \\"USER_ID\\",\\n      \\"Id\\": \\"0963*0158\\"\\n    },\\n    \\"DeviceOpenInfo\\": {\\n      \\"IdType\\": \\"DEVICE_ID\\",\\n      \\"Id\\": \\"A963*0158\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '轮询激活绑定结果',
        ],
        'GetCodeEnhance' => [
            'summary' => '获取authCode。',
            'path' => '/v1.0/ssp/getCodeEnhance',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ChannelInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '激活渠道，如微信小程序，三方app等',
                        'description' => '激活渠道，如微信小程序，三方app等',
                        'type' => 'object',
                        'properties' => [
                            'Channel' => [
                                'title' => '激活渠道，如WeChat',
                                'description' => '激活渠道，如WeChat、ThirdApp',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'WeChat、ThirdApp',
                            ],
                            'ExtInfo' => [
                                'title' => '扩展信息',
                                'description' => '扩展信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息列表。',
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '用户Id的类型：'."\n"
                                    .'OPENID：默认的用户ID标识。'."\n"
                                    .'UNIONID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回的详细信息。',
                                'description' => '返回的详细信息。',
                                'type' => 'string',
                                'example' => 'Aexfgc',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"Aexfgc\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获取authCode',
            'description' => '通过指定用户id，获取对应的authCode',
        ],
        'ScanCodeBind' => [
            'summary' => '带屏设备通过扫描二维码完成用户和设备的激活绑定。',
            'path' => '/v1.0/ssp/scanCode',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '129****0946',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '111',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BindReq',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扫描绑定入参',
                        'description' => '扫码绑定入参',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'authCode',
                                'description' => 'authCode',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ASdfre',
                            ],
                            'ClientId' => [
                                'title' => '产品clientId',
                                'description' => '产品clientId',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'RnY8v0W0ZVn58ZrUAOr2RD',
                            ],
                            'ExtInfo' => [
                                'title' => '扩展参数',
                                'description' => '扩展参数',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"key":"value"}',
                            ],
                            'UserId' => [
                                'title' => '精灵用户id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123456',
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '结果信息',
                                'description' => '结果信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回的详细信息。',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'BizType' => [
                                        'title' => '产品分类',
                                        'description' => '产品分类',
                                        'type' => 'string',
                                        'example' => 'AILABS',
                                    ],
                                    'BizGroup' => [
                                        'title' => '产品分组',
                                        'description' => '产品分组',
                                        'type' => 'string',
                                        'example' => 'X1',
                                    ],
                                    'UserOpenId' => [
                                        'title' => 'DAFE****ce3ej=',
                                        'description' => 'DAFE****ce3ej=',
                                        'type' => 'string',
                                        'example' => '用户OpenId',
                                    ],
                                    'DeviceOpenId' => [
                                        'title' => 'A963*0158',
                                        'description' => 'A963*0158',
                                        'type' => 'string',
                                        'example' => '设备OpenId',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '686DF82F-45C4-7DF7-8B67-27B91CFD63A9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"BizType\\": \\"AILABS\\",\\n    \\"BizGroup\\": \\"X1\\",\\n    \\"UserOpenId\\": \\"用户OpenId\\",\\n    \\"DeviceOpenId\\": \\"设备OpenId\\"\\n  },\\n  \\"RequestId\\": \\"686DF82F-45C4-7DF7-8B67-27B91CFD63A9\\"\\n}","type":"json"}]',
            'title' => '通过扫描二维码进行激活绑定',
            'description' => '通过扫描设备上的激活绑定相关的二维码信息进行激活绑定。',
        ],
        'GetUserByDeviceId' => [
            'summary' => '根据设备openID，获取设备绑定用户ID。',
            'path' => '/v1.0/ssp/getUserByDeviceId',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备Id的类型'."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '用户open信息',
                                'description' => '返回的用户信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'UserOpenId' => [
                                        'title' => '用户信息对应的openId',
                                        'description' => '用户信息对应的openId。',
                                        'type' => 'string',
                                        'example' => '0963*0158',
                                    ],
                                    'UserUnionIds' => [
                                        'title' => '组织id及归一id列表',
                                        'description' => '用户的组织ID及UnionID列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '信息列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'OrganizationId' => [
                                                    'title' => '组织id',
                                                    'description' => '组织ID。',
                                                    'type' => 'string',
                                                    'example' => '1**2',
                                                ],
                                                'UserUnionId' => [
                                                    'title' => '组织id对应的归一id',
                                                    'description' => '用户的UnionID。',
                                                    'type' => 'string',
                                                    'example' => '1553*B0C3',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetUserByDeviceId.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"UserOpenId\\": \\"0963*0158\\",\\n    \\"UserUnionIds\\": [\\n      {\\n        \\"OrganizationId\\": \\"1**2\\",\\n        \\"UserUnionId\\": \\"1553*B0C3\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserByDeviceIdResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <UserOpenId>0963*0158</UserOpenId>\\n        <UserUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <UserUnionId>1553*B0C3</UserUnionId>\\n        </UserUnionIds>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetUserByDeviceIdResponse>","errorExample":""}]',
            'title' => '获取设备绑定的用户ID',
        ],
        'ListDeviceByUserId' => [
            'summary' => '根据用户openID，获取绑定的设备ID列表。',
            'path' => '/v1.0/ssp/listDeviceByUserId',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在开放平台申请过组织后才会有',
                                'description' => '用户Id的类型：'."\n"
                                    .' - OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '信息列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceOpenId' => [
                                            'title' => '设备信息对应的openId',
                                            'description' => '设备信息对应的openId。',
                                            'type' => 'string',
                                            'example' => 'A963*0158',
                                        ],
                                        'DeviceUnionIds' => [
                                            'title' => '组织id及归一id列表',
                                            'description' => '设备对应的组织ID及UnionId信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '信息列表',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OrganizationId' => [
                                                        'title' => '组织id',
                                                        'description' => '组织ID。',
                                                        'type' => 'string',
                                                        'example' => '1**2',
                                                    ],
                                                    'DeviceUnionId' => [
                                                        'title' => '组织id对应的归一id',
                                                        'description' => '设备的UnionId。',
                                                        'type' => 'string',
                                                        'example' => '1553*B0C3',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.ListDeviceByUserId.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1**2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceByUserIdResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceOpenId>A963*0158</DeviceOpenId>\\n        <DeviceUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n        </DeviceUnionIds>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceByUserIdResponse>","errorExample":""}]',
            'title' => '获取用户绑定的设备列表',
        ],
        'UnbindDevice' => [
            'summary' => '根据用户open信息和设备open信息进行解除绑定关系。',
            'path' => '/v1.0/ssp/unbindDevice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，该产品所在项目的Project ID。请在天猫精灵AI平台控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备Id的类型'."\n"
                                    .' - OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，即该产品所在项目的Project ID。请在天猫精灵AI平台控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在开放平台申请过组织后才会有',
                                'description' => '用户ID的类型：'."\n"
                                    .' - OPEN_ID：默认的用户ID标识。'."\n"
                                    .' - UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '是否解绑成功',
                                'description' => '设备是否解绑成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.UnbindDevice.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDeviceResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</UnbindDeviceResponse>","errorExample":""}]',
            'title' => '解绑设备',
        ],
        'ListDeviceByUserIdAndChanel' => [
            'summary' => '获取指定渠道的设备列表。',
            'path' => '/v1.0/ssp/listDeviceByUserIdAndChanel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ChannelInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '激活渠道，如微信小程序，三方app等',
                        'description' => '激活渠道，如微信小程序，三方app等',
                        'type' => 'object',
                        'properties' => [
                            'Channel' => [
                                'title' => '激活配网渠道，如WeChat',
                                'description' => '激活配网渠道，如WeChat、ThirdApp',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'WeChat、ThirdApp',
                            ],
                            'ExtInfo' => [
                                'title' => '扩展信息',
                                'description' => '扩展信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息列表。',
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型：'."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'description' => '用户Id的类型：'."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1***2',
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '信息列表',
                                'description' => '信息列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceOpenId' => [
                                            'title' => '设备信息对应的openId。',
                                            'description' => '设备信息对应的openId。',
                                            'type' => 'string',
                                            'example' => 'A963*0158',
                                        ],
                                        'DeviceUnionIds' => [
                                            'title' => '设备信息列表',
                                            'description' => '信息列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OrganizationId' => [
                                                        'title' => '组织ID。',
                                                        'description' => '组织ID。',
                                                        'type' => 'string',
                                                        'example' => '1***2',
                                                    ],
                                                    'DeviceUnionId' => [
                                                        'title' => '设备的UnionId。',
                                                        'description' => '设备的UnionId。',
                                                        'type' => 'string',
                                                        'example' => '1553*B0C3',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'RE***D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1***2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"RE***D\\"\\n}","type":"json"}]',
            'title' => '获取指定渠道的设备列表',
        ],
        'GetDeviceIdByIdentity' => [
            'summary' => '根据设备MAC/SN获取设备ID。',
            'path' => '/v1.0/ssp/getDeviceIdByIdentity',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型，此处填写“PROJECT_ID”',
                        'description' => '编码类型，此处填写**PROJECT_ID**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PROJECT_ID',
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                        'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '129****0946',
                    ],
                ],
                [
                    'name' => 'IdentityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '填写设备认证类型，“MAC”或者“SN”',
                        'description' => '设备认证类型，填写**MAC**或者**SN**或者**CTEI**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MAC',
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证标识，填写MAC地址或者SN的值。',
                        'description' => '认证标识，填写MAC地址或者SN的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b4:xx:xx:xx:65:2b',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
                        'description' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。当IdentityType为**CTEI**时可不传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Mm*****XnZ8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceOpenId' => [
                                        'title' => '设备信息对应的openId',
                                        'description' => '设备对应的openId。',
                                        'type' => 'string',
                                        'example' => 'A963*0158',
                                    ],
                                    'DeviceUnionIds' => [
                                        'title' => '组织id及归一id列表',
                                        'description' => '设备对应的组织ID及UnionId信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '信息列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'OrganizationId' => [
                                                    'title' => '组织id',
                                                    'description' => '组织ID。',
                                                    'type' => 'string',
                                                    'example' => '1**2',
                                                ],
                                                'DeviceUnionId' => [
                                                    'title' => '组织id对应的归一id',
                                                    'description' => '设备的UnionId。',
                                                    'type' => 'string',
                                                    'example' => '1553*B0C3',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID，用于排查问题，如果没有这个参数，可以在responseHeader里进行排查。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7DA****A0726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceIdByIdentity.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DeviceOpenId\\": \\"A963*0158\\",\\n    \\"DeviceUnionIds\\": [\\n      {\\n        \\"OrganizationId\\": \\"1**2\\",\\n        \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0EC7DA****A0726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceIdByIdentityResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceOpenId>A963*0158</DeviceOpenId>\\n        <DeviceUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n        </DeviceUnionIds>\\n    </Result>\\n    <RequestId>0EC7DA****A0726E</RequestId>\\n</GetDeviceIdByIdentityResponse>","errorExample":""}]',
            'title' => '获取设备ID',
        ],
        'ListDeviceIdByIdentities' => [
            'summary' => '批量根据设备MAC/SN获取设备ID。',
            'path' => '/v1.0/ssp/listDeviceIdByIdentities',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型，此处填写“PROJECT_ID”',
                        'description' => '编码类型，此处填写**PROJECT_ID**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PROJECT_ID',
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                        'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '125****0946',
                    ],
                ],
                [
                    'name' => 'IdentityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '填写设备认证类型，“MAC”或者“SN”',
                        'description' => '设备认证类型，填写**MAC**或**SN**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MAC',
                    ],
                ],
                [
                    'name' => 'IdentityIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备的认证标识列表。',
                        'type' => 'array',
                        'items' => [
                            'title' => '认证标识，填写MAC地址或者SN的值。',
                            'description' => '认证标识，填写MAC地址或SN值。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'b4:xx:xx:xx:65:2b',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
                        'description' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Mm*****XnZ8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息列表。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceOpenId' => [
                                            'title' => '设备信息对应的openId',
                                            'description' => '设备对应的openId。',
                                            'type' => 'string',
                                            'example' => 'A963*0158',
                                        ],
                                        'DeviceUnionIds' => [
                                            'title' => '组织id及归一id列表',
                                            'description' => '设备对应的组织ID及UnionId信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OrganizationId' => [
                                                        'title' => '组织id',
                                                        'description' => '组织ID。',
                                                        'type' => 'string',
                                                        'example' => '1**2',
                                                    ],
                                                    'DeviceUnionId' => [
                                                        'title' => '组织id对应的归一id',
                                                        'description' => '设备的UnionId。',
                                                        'type' => 'string',
                                                        'example' => '1553*B0C3',
                                                    ],
                                                ],
                                                'description' => '信息列表',
                                            ],
                                        ],
                                    ],
                                    'description' => '信息列表',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.ListDeviceIdByIdentity.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1**2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceIdByIdentitiesResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <b4:xx:xx:xx:65:2b>\\n            <DeviceOpenId>A963*0158</DeviceOpenId>\\n            <DeviceUnionIds>\\n                <OrganizationId>1**2</OrganizationId>\\n                <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n            </DeviceUnionIds>\\n        </b4:xx:xx:xx:65:2b>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceIdByIdentitiesResponse>","errorExample":""}]',
            'title' => '批量获取设备ID',
        ],
        'GetDeviceBasicInfo' => [
            'summary' => '根据设备ID，获取设备基本信息。',
            'path' => '/v1.0/ssp/getDeviceBasicInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'title' => '设备名称',
                                        'description' => '设备的名称。',
                                        'type' => 'string',
                                        'example' => '我的设备',
                                    ],
                                    'FirmwareVersion' => [
                                        'title' => '固件版本',
                                        'description' => '设备的固件版本。',
                                        'type' => 'string',
                                        'example' => '2.0.3',
                                    ],
                                    'Mac' => [
                                        'title' => '设备MAC地址',
                                        'description' => '设备的MAC地址。',
                                        'type' => 'string',
                                        'example' => 'b4:xx:xx:xx:65:2b',
                                    ],
                                    'Sn' => [
                                        'title' => '设备SN',
                                        'description' => '设备的SN信息。',
                                        'type' => 'string',
                                        'example' => '1200xxx048',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceBasicInfo.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Name\\": \\"我的设备\\",\\n    \\"FirmwareVersion\\": \\"2.0.3\\",\\n    \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n    \\"Sn\\": \\"1200xxx048\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceBasicInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <Name>我的设备</Name>\\n        <FirmwareVersion>2.0.3</FirmwareVersion>\\n        <Mac>b4:xx:xx:xx:65:2b</Mac>\\n        <Sn>1200xxx048</Sn>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceBasicInfoResponse>","errorExample":""}]',
            'title' => '获取设备基本信息',
        ],
        'ListDeviceBasicInfo' => [
            'summary' => '根据设备openID列表，批量获取设备基本信息。',
            'path' => '/v1.0/ssp/listDeviceBasicInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DeviceInfos',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Ids' => [
                                'title' => '设备标识列表（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                    'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'DAFE****ce3ej=',
                                ],
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result，key为deviceOpenId或deviceUnionId，value为对应的设备信息',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '设备名称',
                                            'description' => '设备的名称。',
                                            'type' => 'string',
                                            'example' => '我的设备',
                                        ],
                                        'FirmwareVersion' => [
                                            'title' => '固件版本',
                                            'description' => '设备的固件版本。',
                                            'type' => 'string',
                                            'example' => '2.0.3',
                                        ],
                                        'Mac' => [
                                            'title' => '设备MAC地址',
                                            'description' => '设备的MAC地址。',
                                            'type' => 'string',
                                            'example' => 'b4:xx:xx:xx:65:2b',
                                        ],
                                        'Sn' => [
                                            'title' => '设备SN',
                                            'description' => '设备的SN信息。',
                                            'type' => 'string',
                                            'example' => '1200xx048',
                                        ],
                                    ],
                                    'description' => '返回的设备信息列表。',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.ListDeviceBasicInfo.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": {\\n      \\"Name\\": \\"我的设备\\",\\n      \\"FirmwareVersion\\": \\"2.0.3\\",\\n      \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n      \\"Sn\\": \\"1200xx048\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceBasicInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DAFE****ce3ej=>\\n            <Name>我的设备</Name>\\n            <FirmwareVersion>2.0.3</FirmwareVersion>\\n            <Mac>b4:xx:xx:xx:65:2b</Mac>\\n            <Sn>1200xx048</Sn>\\n        </DAFE****ce3ej=>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceBasicInfoResponse>\\n","errorExample":""}]',
            'title' => '批量查询设备基本信息',
        ],
        'GetDeviceStatusInfo' => [
            'summary' => '根据设备openID，获取设备在线状态。',
            'path' => '/v1.0/ssp/getDeviceStatusInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Online' => [
                                        'title' => '是否在线，0为不在线，1为在线',
                                        'description' => '设备是否在线，0表示不在线，1 表示在线。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceStatusInfo.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Online\\": 1\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceStatusInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <Online>1</Online>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceStatusInfoResponse>","errorExample":""}]',
            'title' => '获取设备状态',
        ],
        'GetDeviceTag' => [
            'summary' => '获取设备的标签信息。',
            'path' => '/v1.0/ssp/getDeviceTag',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写“PROJECT_ID”',
                                'description' => '编码类型，此处填写**PROJECT_ID**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                                'description' => '设备ID的类型：'."\n"
                                    .' - OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据体',
                        'description' => '返回数据列表。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '返回的错误信息',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回result',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceTags' => [
                                        'title' => '设备标签结果',
                                        'description' => '设备的标签信息。',
                                        'type' => 'object',
                                        'example' => '{       "antest1": "antest1",       "antest": "a"     }',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DeviceTags\\": {\\n      \\"antest1\\": \\"antest1\\",\\n      \\"antest\\": \\"a\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceTagResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceTags>\\n            <antest1>antest1</antest1>\\n            <antest>a</antest>\\n        </DeviceTags>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceTagResponse>","errorExample":""}]',
            'title' => '获取设备标签',
        ],
        'DeviceControl' => [
            'summary' => '设备音量等属性值控制。',
            'path' => '/v1.0/ssp/control',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '控制音量入参',
                        'description' => '控制音量入参',
                        'type' => 'object',
                        'properties' => [
                            'Volume' => [
                                'title' => '音量目标值',
                                'description' => '音量目标值',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'Muted' => [
                                'title' => '是否静音',
                                'description' => '是否静音，在设置该字段为true时，需要同时指定音量值为0',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息列表。',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'title' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1*****2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回的详细信息。',
                                'description' => '返回的详细信息。',
                                'type' => 'boolean',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '设备音量等属性值控制',
            'description' => '指定设备修改音量等属性值'."\n",
        ],
        'GetDeviceSetting' => [
            'summary' => '获取设备的用户设置。',
            'path' => '/v1.0/ssp/getDeviceSetting',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Keys',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备设置指定的Key集合，'."\n"
                            .'勿扰模式:nightMode',
                        'description' => '设备设置指定的Key集合，'."\n"
                            .'勿扰模式：nightMode',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息列表。',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12345',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '设备Id的类型'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                                'description' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '122',
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回具体的设备设置信息。',
                                'description' => '返回具体的设备设置信息。',
                                'type' => 'object',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获取设备的用户设置',
        ],
        'GetDeviceStatusDetail' => [
            'summary' => '获取设备状态详情。',
            'path' => '/v1.0/ssp/getDeviceStatusDetail',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Keys',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备设置指定的Key集合，'."\n"
                            .'如播放器:player',
                        'description' => '设备设置指定的Key集合，'."\n"
                            .'播放器：player'."\n"
                            .'设备音量：speaker'."\n"
                            .'设备电量：power',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息列表。',
                        'description' => '设备标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '返回的详细信息。',
                                'description' => '返回的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Player' => [
                                        'title' => '播放器信息',
                                        'description' => '播放器信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'AudioAnchor' => [
                                                'title' => '歌手',
                                                'description' => '歌手',
                                                'type' => 'string',
                                                'example' => '刘德华',
                                            ],
                                            'AudioExt' => [
                                                'title' => '扩展信息',
                                                'description' => '扩展信息',
                                                'type' => 'string',
                                                'example' => '""',
                                            ],
                                            'AudioId' => [
                                                'title' => '歌曲id',
                                                'description' => '歌曲id',
                                                'type' => 'string',
                                                'example' => '123',
                                            ],
                                            'Format' => [
                                                'title' => '歌曲类型(mp3)',
                                                'description' => '歌曲类型(mp3)',
                                                'type' => 'string',
                                                'example' => 'mp3',
                                            ],
                                            'AudioSource' => [
                                                'title' => '歌曲来源(xiami)',
                                                'description' => '歌曲来源(xiami)',
                                                'type' => 'string',
                                                'example' => 'xiami',
                                            ],
                                            'AudioLength' => [
                                                'title' => ' 歌曲长度，秒',
                                                'description' => ' 歌曲长度，秒',
                                                'type' => 'string',
                                                'example' => '253',
                                            ],
                                            'Source' => [
                                                'title' => '播放来源(cloud)',
                                                'description' => '播放来源(cloud)',
                                                'type' => 'string',
                                                'example' => 'cloud',
                                            ],
                                            'AudioUrl' => [
                                                'title' => '歌曲url',
                                                'description' => '歌曲url',
                                                'type' => 'string',
                                                'example' => 'https://xxx',
                                            ],
                                            'AudioName' => [
                                                'title' => '歌曲名称',
                                                'description' => '歌曲名称',
                                                'type' => 'string',
                                            ],
                                            'AudioAlbum' => [
                                                'title' => '歌曲专辑',
                                                'description' => '歌曲专辑',
                                                'type' => 'string',
                                            ],
                                            'Progress' => [
                                                'title' => '播放进度',
                                                'description' => '播放进度',
                                                'type' => 'string',
                                                'example' => '30',
                                            ],
                                            'Timestamp' => [
                                                'title' => '上报时间',
                                                'description' => '上报时间',
                                                'type' => 'string',
                                            ],
                                            'Status' => [
                                                'title' => '播放状态,pause',
                                                'description' => '播放状态,pause',
                                                'type' => 'string',
                                                'example' => 'pause',
                                            ],
                                        ],
                                    ],
                                    'Speaker' => [
                                        'title' => '音量信息',
                                        'description' => '音量信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Volume' => [
                                                'title' => '音量当前值',
                                                'description' => '音量当前值',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Muted' => [
                                                'title' => '是否静音',
                                                'description' => '是否静音',
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                    'Power' => [
                                        'title' => '电量信息',
                                        'description' => '电量信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Quantity' => [
                                                'title' => '电量值',
                                                'description' => '电量值',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                            'Status' => [
                                                'title' => '电源状态',
                                                'description' => '电源状态',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Player\\": {\\n      \\"AudioAnchor\\": \\"刘德华\\",\\n      \\"AudioExt\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"AudioId\\": \\"123\\",\\n      \\"Format\\": \\"mp3\\",\\n      \\"AudioSource\\": \\"xiami\\",\\n      \\"AudioLength\\": \\"253\\",\\n      \\"Source\\": \\"cloud\\",\\n      \\"AudioUrl\\": \\"https://xxx\\",\\n      \\"AudioName\\": \\"\\",\\n      \\"AudioAlbum\\": \\"\\",\\n      \\"Progress\\": \\"30\\",\\n      \\"Timestamp\\": \\"\\",\\n      \\"Status\\": \\"pause\\"\\n    },\\n    \\"Speaker\\": {\\n      \\"Volume\\": 10,\\n      \\"Muted\\": true\\n    },\\n    \\"Power\\": {\\n      \\"Quantity\\": 30,\\n      \\"Status\\": \\"\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获取设备状态详情',
        ],
        'SetDeviceSetting' => [
            'summary' => '修改设备的用户设置。',
            'path' => '/v1.0/ssp/setDeviceSetting',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备设置指定的Key集合，'."\n"
                            .'勿扰模式:nightMode',
                        'description' => '设备设置指定的Key集合，'."\n"
                            .'勿扰模式:nightMode',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nightMode',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '属性值',
                        'description' => '属性值',
                        'type' => 'any',
                        'required' => false,
                        'example' => '{"enable":true}',
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写PROJECT_ID。',
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'description' => '设备Id的类型 ：'."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
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
                            'Message' => [
                                'title' => '调用该接口的返回结果。',
                                'description' => '调用该接口的返回结果。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '返回的错误码，200表示调用成功。',
                                'description' => '返回的错误码，200表示调用成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '设置执行结果',
                                'description' => '设置执行结果',
                                'type' => 'boolean',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '修改设备的用户设置',
        ],
        'ScgSearch' => [
            'summary' => '根据选品池ID查询选品池内容。',
            'path' => '/v1.0/ssp/scgSearch',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TopicId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '选品池ID 可选：MC201132（民族中国风），MC201136（流行音乐），MC201139（甜蜜爱情），MC201133（民谣），MC201137（放松阅读），MC201138（快乐），PA202029（故事），PA202030（儿歌），PA202028（国学历史），PA202032（百科），PA202031（英文儿歌）',
                        'description' => '选品池ID   可选：MC201132（民族中国风），MC201136（流行音乐），MC201139（甜蜜爱情），MC201133（民谣），MC201137（放松阅读），MC201138（快乐），PA202029（故事），PA202030（儿歌），PA202028（国学历史），PA202032（百科），PA202031（英文儿歌）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MC201132',
                    ],
                ],
                [
                    'name' => 'ScgFilter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '查询filter',
                        'description' => '查询filter',
                        'type' => 'object',
                        'properties' => [
                            'SortParam' => [
                                'title' => '排序参数',
                                'description' => '排序参数',
                                'type' => 'object',
                                'properties' => [
                                    'SortKey' => [
                                        'title' => '排序字段',
                                        'description' => '排序字段',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'internal_id',
                                    ],
                                    'SortText' => [
                                        'title' => '排序字段（默认空字符串）',
                                        'description' => '排序字段（默认空字符串）',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '“”',
                                    ],
                                    'SortOrder' => [
                                        'title' => '排序顺序',
                                        'description' => '排序顺序',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ASC',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'UseOffSet' => [
                                'title' => '是否使用pageParam对象分页，offSetParam和pageParam二选一，默认分页模式为pageParam',
                                'description' => '是否使用pageParam对象分页，offSetParam和pageParam二选一，默认分页模式为pageParam',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'OffSetParam' => [
                                'title' => '分页类型',
                                'description' => '分页类型',
                                'type' => 'object',
                                'properties' => [
                                    'Offset' => [
                                        'title' => '跳过的条目数量',
                                        'description' => '跳过的条目数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Limit' => [
                                        'title' => '返回的条目数量',
                                        'description' => '返回的条目数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '20',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'PageParam' => [
                                'title' => '分页类型',
                                'description' => '分页类型',
                                'type' => 'object',
                                'properties' => [
                                    'PageSize' => [
                                        'title' => '每页记录条数',
                                        'description' => '每页记录条数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'PageNum' => [
                                        'title' => '页数',
                                        'description' => '页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'title' => '页数',
                                'description' => '页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Message' => [
                                'title' => '响应信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'PageSize' => [
                                'title' => '每页记录条数',
                                'description' => '每页记录条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Result' => [
                                'title' => '返回的内容数据',
                                'description' => '返回的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的内容数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'Source' => [
                                            'title' => '内容来源',
                                            'description' => '内容来源',
                                            'type' => 'string',
                                            'example' => 'xiami',
                                        ],
                                        'Title' => [
                                            'title' => '内容标题',
                                            'description' => '内容标题',
                                            'type' => 'string',
                                            'example' => '那个人',
                                        ],
                                        'Type' => [
                                            'title' => '内容类型',
                                            'description' => '内容类型',
                                            'type' => 'string',
                                            'example' => 'music',
                                        ],
                                        'Cover' => [
                                            'title' => '内容封面',
                                            'description' => '内容封面',
                                            'type' => 'object',
                                            'properties' => [
                                                'Img' => [
                                                    'title' => '封面图片',
                                                    'description' => '封面图片（Img与Large，Medium，Small可能不会同时出现，会出现只有其中一种的情况）',
                                                    'type' => 'string',
                                                    'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                                                ],
                                                'canResize' => [
                                                    'title' => '是否支持缩放',
                                                    'description' => '是否支持缩放',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Large' => [
                                                    'title' => '大图',
                                                    'description' => '大图',
                                                    'type' => 'string',
                                                    'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                                                ],
                                                'Medium' => [
                                                    'title' => '中图',
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                                                ],
                                                'Small' => [
                                                    'title' => '小图',
                                                    'description' => '小图',
                                                    'type' => 'string',
                                                    'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                                                ],
                                            ],
                                        ],
                                        'Alias' => [
                                            'title' => '别名',
                                            'description' => '别名',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '别名',
                                                'type' => 'string',
                                                'example' => '那个人',
                                            ],
                                        ],
                                        'SupportAudition' => [
                                            'title' => '是否支持试听'."\n",
                                            'description' => '是否支持试听'."\n",
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ContentType' => [
                                            'title' => '内容类型',
                                            'description' => '内容类型',
                                            'type' => 'string',
                                            'example' => 'MUSIC_CONTENT',
                                        ],
                                        'Singers' => [
                                            'title' => '歌手名',
                                            'description' => '歌手名',
                                            'type' => 'string',
                                            'example' => '黎偌天',
                                        ],
                                        'AlbumRawId' => [
                                            'title' => '专辑ID',
                                            'description' => '专辑ID',
                                            'type' => 'string',
                                            'example' => '1795716629',
                                        ],
                                        'Album' => [
                                            'title' => '是否为专辑',
                                            'description' => '是否为专辑',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'AlbumType' => [
                                            'title' => '专辑类型',
                                            'description' => '专辑类型',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'AuthorIds' => [
                                            'title' => '作者ID'."\n",
                                            'description' => '作者ID'."\n",
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '作者ID',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1795716629',
                                            ],
                                        ],
                                        'IsAudition' => [
                                            'title' => '能否试听',
                                            'description' => '能否试听',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'AuthorNames' => [
                                            'title' => '作者姓名',
                                            'description' => '作者姓名',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '作者姓名',
                                                'type' => 'string',
                                                'example' => '"王一鸣Iris", "黎偌天",  "薛晨雨"',
                                            ],
                                        ],
                                        'NeedCharge' => [
                                            'title' => '是否需要收费',
                                            'description' => '是否需要收费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'IsCharge' => [
                                            'title' => '是否收费',
                                            'description' => '是否收费',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'Category' => [
                                            'title' => '类别',
                                            'description' => '类别',
                                            'type' => 'string',
                                            'example' => 'audio',
                                        ],
                                        'RawId' => [
                                            'title' => '三方内容Id',
                                            'description' => '三方内容ID',
                                            'type' => 'string',
                                            'example' => '1795716629',
                                        ],
                                    ],
                                ],
                                'example' => '{"sourceId":0,"copyright":0,"releaseTime":1196438400000,"hotScore":0.9546929544543479,"tppExtendInfo":"{\\"userEvent\\":\\"前台投放\\",\\"scgTopicName\\":\\"inside民族中国风曲风音乐库\\",\\"scgTopicId\\":\\"MC201132\\"}","source":"xiami","title":"题帕三绝","type":"music","x1Pv30d":10307,"valid":10,"cover":{"img":"http://img.xiami.net/qianxun/07d8ec1a38a5462c3afbfac41413b8af/47244c25fcf3a8f67442d02e3127d023-500x432.jpg","canResize":false},"duration":0,"rawId":"1771626071","albumType":0,"alias":["题帕三绝"],"id":268033175,"supportAudition":false,"contentType":"MUSIC_CONTENT","authorIds":[],"singers":"陈力","albumRawId":"1771626071","album":false,"x1PvTotal":14676,"commCateId":80021001,"finished":0,"isAudition":false,"appIds":[],"authorNames":["陈力","王立平","曹雪芹"],"needCharge":false,"isCharge":false,"category":"audio"}',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"Message\\": \\"OK\\",\\n  \\"PageSize\\": 10,\\n  \\"Result\\": [\\n    {\\n      \\"Source\\": \\"xiami\\",\\n      \\"Title\\": \\"那个人\\",\\n      \\"Type\\": \\"music\\",\\n      \\"Cover\\": {\\n        \\"Img\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"canResize\\": false,\\n        \\"Large\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"Medium\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"Small\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\"\\n      },\\n      \\"Alias\\": [\\n        \\"那个人\\"\\n      ],\\n      \\"SupportAudition\\": false,\\n      \\"ContentType\\": \\"MUSIC_CONTENT\\",\\n      \\"Singers\\": \\"黎偌天\\",\\n      \\"AlbumRawId\\": \\"1795716629\\",\\n      \\"Album\\": false,\\n      \\"AlbumType\\": 0,\\n      \\"AuthorIds\\": [\\n        1795716629\\n      ],\\n      \\"IsAudition\\": false,\\n      \\"AuthorNames\\": [\\n        \\"\\\\\\"王一鸣Iris\\\\\\", \\\\\\"黎偌天\\\\\\",  \\\\\\"薛晨雨\\\\\\"\\"\\n      ],\\n      \\"NeedCharge\\": false,\\n      \\"IsCharge\\": \\"false\\",\\n      \\"Category\\": \\"audio\\",\\n      \\"RawId\\": \\"1795716629\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ScgSearchResponse>\\n    <PageNum>1</PageNum>\\n    <Message>OK</Message>\\n    <PageSize>10</PageSize>\\n    <Result>\\n        <Source>xiami</Source>\\n        <Title>那个人</Title>\\n        <Type>music</Type>\\n        <Cover>\\n            <Img>http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg</Img>\\n            <canResize>false</canResize>\\n        </Cover>\\n        <Alias>那个人</Alias>\\n        <SupportAudition>false</SupportAudition>\\n        <ContentType>MUSIC_CONTENT</ContentType>\\n        <Singers>黎偌天</Singers>\\n        <AlbumRawId>1795716629</AlbumRawId>\\n        <Album>false</Album>\\n        <AlbumType>0</AlbumType>\\n        <AuthorIds>1795716629</AuthorIds>\\n        <IsAudition>false</IsAudition>\\n        <AuthorNames>\\"王一鸣Iris\\", \\"黎偌天\\",  \\"薛晨雨\\"</AuthorNames>\\n        <NeedCharge>false</NeedCharge>\\n        <IsCharge>false</IsCharge>\\n        <Category>audio</Category>\\n        <RawId>1795716629</RawId>\\n    </Result>\\n    <RequestId>73C67BD9-175A-1324-8202-9FAABBB3E6FA</RequestId>\\n    <Code>200</Code>\\n</ScgSearchResponse>","errorExample":""}]',
            'title' => '根据选品池ID查询选品池内容',
        ],
        'AddAndRemoveFavoriteContent' => [
            'summary' => '收藏或取消收藏。',
            'path' => '/v1.0/ssp/AddAndRemoveFavoriteContent',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OpenAddAndRemoveFavoriteContentRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'PackageType' => [
                                'description' => '内容类型'."\n"
                                    ."\n"
                                    .'内容：CONTENT；专辑：ALBUM；歌单：COLLECT。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'CONTENT',
                            ],
                            'OpenSourceRawIdPair' => [
                                'description' => '收藏/取消对象',
                                'type' => 'object',
                                'properties' => [
                                    'RawId' => [
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => '2105818057',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'xiami',
                                    ],
                                    'ExtendInfo' => [
                                        'description' => '扩展信息',
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'FavoriteCmd' => [
                                'description' => '操作类型'."\n"
                                    ."\n"
                                    .'收藏：ADD；取消收藏：REMOVE',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ADD',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。` UNION_ID:` 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '121212121',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"121212121\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAndRemoveFavoriteContentResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>121212121</RequestId>\\n    <Success>true</Success>\\n</AddAndRemoveFavoriteContentResponse>","errorExample":""}]',
            'title' => '收藏或取消收藏',
        ],
        'CreatePlayingList' => [
            'summary' => '创建播放列表并播放指定的内容。',
            'path' => '/v1.0/ssp/CreatePlayingList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OpenCreatePlayingListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'PlayFrom' => [
                                'description' => '播放来源,配置播控能力的唯一标识'."\n"
                                    ."\n"
                                    .'可空，默认为default',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                            'ContentType' => [
                                'description' => '播放内容类型'."\n"
                                    ."\n"
                                    .'内容：content；专辑：album；歌单：collect',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'content',
                            ],
                            'ContentList' => [
                                'description' => '播放内容列表'."\n"
                                    ."\n"
                                    .'若是内容，支持多个；若是专辑，只有第一个有效。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '播放对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'RawId' => [
                                            'description' => '三方id'."\n"
                                                ."\n"
                                                .'如果是内容则是内容id；如果是专辑则是专辑id',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '12345',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'xiami',
                                        ],
                                    ],
                                    'required' => true,
                                ],
                                'required' => true,
                            ],
                            'Index' => [
                                'description' => '播放的index'."\n"
                                    ."\n"
                                    .'可空。默认为0，表示从头播放',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'NeedAlbumContinued' => [
                                'description' => '专辑是否续播，比如上次专辑听到第五集，是否继续从第五集开始。默认为true',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PlayMode' => [
                                'description' => '播放模式'."\n"
                                    ."\n"
                                    .'列表循环：Repeat；随机：Shuffle；单曲循环：RepeatOne；顺序播放：Normal。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Repeat',
                            ],
                            'ExtendInfo' => [
                                'description' => '扩展信息',
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME：`apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'`SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'`SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                                'enum' => [],
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。'."\n"
                                    .'`UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenServiceResult<OpenPlayingItem>',
                        'description' => 'OpenServiceResult<OpenPlayingItem>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码',
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RawId' => [
                                        'title' => '三方id',
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'example' => '550144364',
                                    ],
                                    'Source' => [
                                        'title' => '来源',
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'ximalayav2',
                                    ],
                                    'AlbumRawId' => [
                                        'title' => '三方专辑id',
                                        'description' => '三方专辑id',
                                        'type' => 'string',
                                        'example' => '260744',
                                    ],
                                    'AlbumName' => [
                                        'title' => '三方专辑id',
                                        'description' => '三方专辑名称',
                                        'type' => 'string',
                                        'example' => '晚安妈妈睡前故事',
                                    ],
                                    'Liked' => [
                                        'title' => '是否收藏',
                                        'description' => '是否收藏',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Singer' => [
                                        'title' => '作者',
                                        'description' => '作者',
                                        'type' => 'string',
                                        'example' => '晚安妈妈',
                                    ],
                                    'Title' => [
                                        'title' => '标题',
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '足球鞋赛车 晚安妈妈',
                                    ],
                                    'Cover' => [
                                        'title' => '封面图片对象',
                                        'description' => '封面图片对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Mediam' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'PlayMode' => [
                                        'title' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                        'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                        'type' => 'string',
                                        'example' => 'Repeat',
                                    ],
                                    'AudioLength' => [
                                        'title' => '长度',
                                        'description' => '长度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '190',
                                    ],
                                    'Progress' => [
                                        'title' => '歌曲播放进度',
                                        'description' => '歌曲播放进度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'LyricUrl' => [
                                        'title' => '歌词url',
                                        'description' => '歌词url',
                                        'type' => 'string',
                                        'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                                    ],
                                    'Copyright' => [
                                        'title' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                        'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Type' => [
                                        'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                                        'type' => 'string',
                                        'example' => 'story',
                                    ],
                                    'ItemUrl' => [
                                        'description' => '播放url',
                                        'type' => 'string',
                                        'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                                    ],
                                    'DefaultPlayOrder' => [
                                        'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Pos' => [
                                        'description' => '该项在播放列表中的位置',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Copyright\\": 0,\\n    \\"Type\\": \\"story\\",\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <LyricUrl>https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc</LyricUrl>\\n        <Copyright>0</Copyright>\\n        <Type>story</Type>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</CreatePlayingListResponse>","errorExample":""}]',
            'title' => '播放列表创建',
        ],
        'GetAlbum' => [
            'summary' => '按照特定的id获取专辑信息。',
            'path' => '/v1.0/ssp/GetAlbum',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专辑id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12343',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认值song',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'song',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求requestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Alias' => [
                                        'description' => '别名',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '别名',
                                            'type' => 'string',
                                            'example' => '超能狂少在都市',
                                        ],
                                    ],
                                    'Audition' => [
                                        'description' => '是否可试听',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Authors' => [
                                        'description' => '作者信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '作者信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AuthorTypes' => [
                                                    'description' => '作者类型',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '作者类型',
                                                        'type' => 'string',
                                                        'example' => 'ANCHOR',
                                                    ],
                                                ],
                                                'Gender' => [
                                                    'description' => '性别',
                                                    'type' => 'string',
                                                    'example' => 'MALE',
                                                ],
                                                'Id' => [
                                                    'description' => '作者主键id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '13123',
                                                ],
                                                'Online' => [
                                                    'description' => '是否在线',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Source' => [
                                                    'description' => '来源',
                                                    'type' => 'string',
                                                    'example' => 'qignting',
                                                ],
                                                'Title' => [
                                                    'description' => '作者标题',
                                                    'type' => 'string',
                                                    'example' => '超能狂少在都市',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Category' => [
                                        'description' => '根据所属公共类目转换controlType',
                                        'type' => 'string',
                                        'example' => 'audio',
                                    ],
                                    'Charge' => [
                                        'description' => '是否收费',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CommCateId' => [
                                        'description' => '对应的类目id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '80012017',
                                    ],
                                    'Cover' => [
                                        'description' => '专辑封面图片',
                                        'type' => 'object',
                                        'properties' => [
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                        ],
                                    ],
                                    'Description' => [
                                        'description' => '内容描述',
                                        'type' => 'string',
                                        'example' => '内容描述',
                                    ],
                                    'HotScore' => [
                                        'description' => '热度分',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '10',
                                    ],
                                    'Id' => [
                                        'description' => '专辑id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1231231',
                                    ],
                                    'ItemType' => [
                                        'description' => '内容的类型, 音乐 音频 电台 笑话等',
                                        'type' => 'string',
                                        'example' => 'ALBUM',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'qignting',
                                    ],
                                    'Title' => [
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '超能狂少在都市',
                                    ],
                                    'Type' => [
                                        'description' => '根据所属公共类目转换favoriteType',
                                        'type' => 'string',
                                        'example' => 'program',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Finished' => [
                                        'description' => '是否完结',
                                        'type' => 'string',
                                        'example' => 'FINISHED',
                                    ],
                                    'TotalEpisode' => [
                                        'description' => '总集数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'RawId' => [
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'example' => '23242',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Alias\\": [\\n      \\"超能狂少在都市\\"\\n    ],\\n    \\"Audition\\": false,\\n    \\"Authors\\": [\\n      {\\n        \\"AuthorTypes\\": [\\n          \\"ANCHOR\\"\\n        ],\\n        \\"Gender\\": \\"MALE\\",\\n        \\"Id\\": 13123,\\n        \\"Online\\": false,\\n        \\"Source\\": \\"qignting\\",\\n        \\"Title\\": \\"超能狂少在都市\\"\\n      }\\n    ],\\n    \\"Category\\": \\"audio\\",\\n    \\"Charge\\": false,\\n    \\"CommCateId\\": 80012017,\\n    \\"Cover\\": {\\n      \\"CanResize\\": false,\\n      \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n    },\\n    \\"Description\\": \\"内容描述\\",\\n    \\"HotScore\\": 10,\\n    \\"Id\\": 1231231,\\n    \\"ItemType\\": \\"ALBUM\\",\\n    \\"Source\\": \\"qignting\\",\\n    \\"Title\\": \\"超能狂少在都市\\",\\n    \\"Type\\": \\"program\\",\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Finished\\": \\"FINISHED\\",\\n    \\"TotalEpisode\\": 12,\\n    \\"RawId\\": \\"23242\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAlbumResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Gender>MALE</Gender>\\n            <Id>13123</Id>\\n            <Online>false</Online>\\n            <Source>qignting</Source>\\n            <Title>超能狂少在都市</Title>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>1231231</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qignting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <Finished>FINISHED</Finished>\\n        <TotalEpisode>12</TotalEpisode>\\n        <RawId>23242</RawId>\\n    </Result>\\n</GetAlbumResponse>","errorExample":""}]',
            'title' => '按照特定的id获取专辑信息',
        ],
        'GetContent' => [
            'summary' => ' 按照特定的id获取内容信息',
            'path' => '/v1.0/ssp/GetContent',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内容id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123123',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认值song',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'song',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求RequestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Alias' => [
                                        'description' => '别名',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '别名',
                                            'type' => 'string',
                                            'example' => '超能狂少在都市',
                                        ],
                                    ],
                                    'Audition' => [
                                        'description' => '是否可试听',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Authors' => [
                                        'description' => '内容的作者',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内容作者',
                                            'type' => 'object',
                                            'properties' => [
                                                'AuthorTypes' => [
                                                    'description' => '作者类型',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '作者类型',
                                                        'type' => 'string',
                                                        'example' => 'ANCHOR',
                                                    ],
                                                ],
                                                'Gender' => [
                                                    'description' => '性别',
                                                    'type' => 'string',
                                                    'example' => 'MALE',
                                                ],
                                                'Id' => [
                                                    'description' => '作者主键id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123123',
                                                ],
                                                'Online' => [
                                                    'description' => '是否在线',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Source' => [
                                                    'description' => '来源',
                                                    'type' => 'string',
                                                    'example' => 'qingting',
                                                ],
                                                'Title' => [
                                                    'description' => '作者标题',
                                                    'type' => 'string',
                                                    'example' => '播音呆瓜小贼',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Category' => [
                                        'description' => '根据所属公共类目转换controlType',
                                        'type' => 'string',
                                        'example' => 'audio',
                                    ],
                                    'Charge' => [
                                        'description' => '是否收费',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CommCateId' => [
                                        'description' => '对应的类目id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '80012017',
                                    ],
                                    'Cover' => [
                                        'description' => '专辑封面图片',
                                        'type' => 'object',
                                        'properties' => [
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                            ],
                                        ],
                                    ],
                                    'Description' => [
                                        'description' => '内容描述',
                                        'type' => 'string',
                                        'example' => '内容描述',
                                    ],
                                    'HotScore' => [
                                        'description' => '热度分',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '内容描述',
                                    ],
                                    'Id' => [
                                        'description' => '内容id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '13597709',
                                    ],
                                    'ItemType' => [
                                        'description' => '内容的类型, 音乐 音频 电台 笑话等',
                                        'type' => 'string',
                                        'example' => 'ALBUM',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'qingting',
                                    ],
                                    'Title' => [
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '超能狂少在都市',
                                    ],
                                    'Type' => [
                                        'description' => '根据所属公共类目转换favoriteType',
                                        'type' => 'string',
                                        'example' => 'program',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Duration' => [
                                        'description' => '时长信息',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '180',
                                    ],
                                    'AlbumId' => [
                                        'description' => '对应的专辑id',
                                        'type' => 'string',
                                        'example' => '1231',
                                    ],
                                    'Lyric' => [
                                        'description' => '歌词信息',
                                        'type' => 'string',
                                        'example' => 'http://1231.lrc',
                                    ],
                                    'Styles' => [
                                        'description' => '曲风',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '曲风',
                                            'type' => 'string',
                                            'example' => '1312',
                                        ],
                                    ],
                                    'RawId' => [
                                        'description' => '内容的三方id',
                                        'type' => 'string',
                                        'example' => '1231231',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": {\\n    \\"Alias\\": [\\n      \\"超能狂少在都市\\"\\n    ],\\n    \\"Audition\\": false,\\n    \\"Authors\\": [\\n      {\\n        \\"AuthorTypes\\": [\\n          \\"ANCHOR\\"\\n        ],\\n        \\"Gender\\": \\"MALE\\",\\n        \\"Id\\": 123123,\\n        \\"Online\\": false,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Title\\": \\"播音呆瓜小贼\\"\\n      }\\n    ],\\n    \\"Category\\": \\"audio\\",\\n    \\"Charge\\": false,\\n    \\"CommCateId\\": 80012017,\\n    \\"Cover\\": {\\n      \\"CanResize\\": false,\\n      \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n    },\\n    \\"Description\\": \\"内容描述\\",\\n    \\"HotScore\\": 0,\\n    \\"Id\\": 13597709,\\n    \\"ItemType\\": \\"ALBUM\\",\\n    \\"Source\\": \\"qingting\\",\\n    \\"Title\\": \\"超能狂少在都市\\",\\n    \\"Type\\": \\"program\\",\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Duration\\": 180,\\n    \\"AlbumId\\": \\"1231\\",\\n    \\"Lyric\\": \\"http://1231.lrc\\",\\n    \\"Styles\\": [\\n      \\"1312\\"\\n    ],\\n    \\"RawId\\": \\"1231231\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Gender>MALE</Gender>\\n            <Id>123123</Id>\\n            <Online>false</Online>\\n            <Source>qingting</Source>\\n            <Title>播音呆瓜小贼</Title>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <Duration>180</Duration>\\n        <AlbumId>1231</AlbumId>\\n        <Lyric>http://1231.lrc</Lyric>\\n        <Styles>1312</Styles>\\n        <RawId>1231231</RawId>\\n    </Result>\\n</GetContentResponse>","errorExample":""}]',
            'title' => ' 按照特定的id获取内容信息',
        ],
        'GetCurrentPlayingItem' => [
            'summary' => '获取当前播放项。',
            'path' => '/v1.0/ssp/GetCurrentPlayingItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RawId' => [
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'example' => '550144364',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'ximalayav2',
                                    ],
                                    'AlbumRawId' => [
                                        'description' => '三方专辑id',
                                        'type' => 'string',
                                        'example' => '260744',
                                    ],
                                    'AlbumName' => [
                                        'description' => '三方专辑名称',
                                        'type' => 'string',
                                        'example' => '晚安妈妈睡前故事',
                                    ],
                                    'Liked' => [
                                        'description' => '是否收藏',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'Singer' => [
                                        'description' => '作者',
                                        'type' => 'string',
                                        'example' => '晚安妈妈',
                                    ],
                                    'Title' => [
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '足球鞋赛车 晚安妈妈',
                                    ],
                                    'Cover' => [
                                        'description' => '封面图片对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Mediam' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'PlayMode' => [
                                        'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                        'type' => 'string',
                                        'example' => 'Repeat',
                                    ],
                                    'AudioLength' => [
                                        'description' => '长度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '190',
                                    ],
                                    'Progress' => [
                                        'description' => '歌曲播放进度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'LyricUrl' => [
                                        'description' => '歌词url',
                                        'type' => 'string',
                                        'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                                    ],
                                    'Copyright' => [
                                        'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Type' => [
                                        'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                                        'type' => 'string',
                                        'example' => 'story',
                                    ],
                                    'ItemUrl' => [
                                        'description' => '播放url',
                                        'type' => 'string',
                                        'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                                    ],
                                    'DefaultPlayOrder' => [
                                        'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Pos' => [
                                        'description' => '该项在播放列表中的位置',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": \\"false\\",\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Copyright\\": 0,\\n    \\"Type\\": \\"story\\",\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCurrentPlayingItemResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Copyright>0</Copyright>\\n        <Type>story</Type>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</GetCurrentPlayingItemResponse>","errorExample":""}]',
            'title' => '获取当前播放项',
        ],
        'GetCurrentPlayingList' => [
            'summary' => '获取当前播放列表。',
            'path' => '/v1.0/ssp/GetCurrentPlayingList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OpenQueryPlayListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '15',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RawId' => [
                                            'description' => '三方id',
                                            'type' => 'string',
                                            'example' => '550144364',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'string',
                                            'example' => 'ximalayav2',
                                        ],
                                        'AlbumRawId' => [
                                            'description' => '三方专辑id',
                                            'type' => 'string',
                                            'example' => '260744',
                                        ],
                                        'AlbumName' => [
                                            'description' => '三方专辑名称',
                                            'type' => 'string',
                                            'example' => '晚安妈妈睡前故事',
                                        ],
                                        'Liked' => [
                                            'description' => '是否收藏',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Singer' => [
                                            'description' => '作者',
                                            'type' => 'string',
                                            'example' => '晚安妈妈',
                                        ],
                                        'Title' => [
                                            'description' => '标题',
                                            'type' => 'string',
                                            'example' => '足球鞋赛车 晚安妈妈',
                                        ],
                                        'Cover' => [
                                            'description' => '封面图片对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'Img' => [
                                                    'description' => '默认图片',
                                                    'type' => 'string',
                                                    'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                                ],
                                                'Large' => [
                                                    'description' => '大图',
                                                    'type' => 'string',
                                                    'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                                ],
                                                'Mediam' => [
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                                ],
                                                'Medium' => [
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                                ],
                                                'Small' => [
                                                    'description' => '小图',
                                                    'type' => 'string',
                                                    'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                                ],
                                                'CanResize' => [
                                                    'description' => '是否可以使用oss规则裁剪',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'PlayMode' => [
                                            'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'AudioLength' => [
                                            'description' => '长度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '190',
                                        ],
                                        'Progress' => [
                                            'description' => '歌曲播放进度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'LyricUrl' => [
                                            'description' => '歌词url',
                                            'type' => 'string',
                                            'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                                        ],
                                        'Type' => [
                                            'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                                            'type' => 'string',
                                            'example' => 'story',
                                        ],
                                        'Copyright' => [
                                            'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ItemUrl' => [
                                            'description' => '播放url',
                                            'type' => 'string',
                                            'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                                        ],
                                        'DefaultPlayOrder' => [
                                            'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Valid' => [
                                            'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                                            'type' => 'string',
                                            'example' => 'VALID',
                                        ],
                                        'Pos' => [
                                            'description' => '该项在播放列表中的位置',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RawId\\": \\"550144364\\",\\n      \\"Source\\": \\"ximalayav2\\",\\n      \\"AlbumRawId\\": \\"260744\\",\\n      \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n      \\"Liked\\": false,\\n      \\"Singer\\": \\"晚安妈妈\\",\\n      \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n      \\"Cover\\": {\\n        \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"CanResize\\": false\\n      },\\n      \\"PlayMode\\": \\"Normal\\",\\n      \\"AudioLength\\": 190,\\n      \\"Progress\\": 0,\\n      \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n      \\"Type\\": \\"story\\",\\n      \\"Copyright\\": 0,\\n      \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n      \\"DefaultPlayOrder\\": 1,\\n      \\"Valid\\": \\"VALID\\",\\n      \\"Pos\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCurrentPlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Normal</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</GetCurrentPlayingListResponse>","errorExample":""}]',
            'title' => '获取当前播放列表',
        ],
        'IndexControlPlayingList' => [
            'summary' => '播放列表点击播放。',
            'path' => '/v1.0/ssp/IndexControlPlayingList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OpenIndexControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'Index' => [
                                'description' => '需要播放的index',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '0',
                            ],
                            'NeedContentContinued' => [
                                'description' => '内容是否续播。默认是false',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'ExtendInfo' => [
                                'description' => '扩展信息',
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。` UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RawId' => [
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'example' => '550144364',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'ximalayav2',
                                    ],
                                    'AlbumRawId' => [
                                        'description' => '三方专辑id',
                                        'type' => 'string',
                                        'example' => '260744',
                                    ],
                                    'AlbumName' => [
                                        'description' => '三方专辑名称',
                                        'type' => 'string',
                                        'example' => '晚安妈妈睡前故事',
                                    ],
                                    'Liked' => [
                                        'description' => '是否收藏',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Singer' => [
                                        'description' => '作者',
                                        'type' => 'string',
                                        'example' => '晚安妈妈',
                                    ],
                                    'Title' => [
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '足球鞋赛车 晚安妈妈',
                                    ],
                                    'Cover' => [
                                        'description' => '封面图片对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Mediam' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'PlayMode' => [
                                        'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                        'type' => 'string',
                                        'example' => 'Repeat',
                                    ],
                                    'AudioLength' => [
                                        'description' => '长度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '190',
                                    ],
                                    'Progress' => [
                                        'description' => '歌曲播放进度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'LyricUrl' => [
                                        'description' => '歌词url',
                                        'type' => 'string',
                                        'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                                    ],
                                    'Type' => [
                                        'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                                        'type' => 'string',
                                        'example' => 'story',
                                    ],
                                    'Copyright' => [
                                        'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'ItemUrl' => [
                                        'description' => '播放url',
                                        'type' => 'string',
                                        'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                                    ],
                                    'DefaultPlayOrder' => [
                                        'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Pos' => [
                                        'description' => '该项在播放列表中的位置',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Type\\": \\"story\\",\\n    \\"Copyright\\": 0,\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<IndexControlPlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</IndexControlPlayingListResponse>","errorExample":""}]',
            'title' => '播放列表点击播放',
        ],
        'ListAlbumDetail' => [
            'summary' => '获取音乐音频专辑里面的内容列表。',
            'path' => '/v1.0/ssp/ListAlbumDetail',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专辑id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '121321',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPageNum' => [
                                        'description' => '当前页',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'OpenDataItemList' => [
                                        'description' => 'data信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'data信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Alias' => [
                                                    'description' => '别名',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '别名',
                                                        'type' => 'string',
                                                        'example' => '超能狂少在都市',
                                                    ],
                                                ],
                                                'Audition' => [
                                                    'description' => '是否可试听',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Authors' => [
                                                    'description' => '内容的作者',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '内容作者',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'AuthorTypes' => [
                                                                'description' => '作者类型',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '作者类型',
                                                                    'type' => 'string',
                                                                    'example' => 'ANCHOR',
                                                                ],
                                                            ],
                                                            'Gender' => [
                                                                'description' => '性别',
                                                                'type' => 'string',
                                                                'example' => 'MALE',
                                                            ],
                                                            'Id' => [
                                                                'description' => '作者主键id',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '12314',
                                                            ],
                                                            'Online' => [
                                                                'description' => '是否在线',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Source' => [
                                                                'description' => '来源',
                                                                'type' => 'string',
                                                                'example' => 'qingting',
                                                            ],
                                                            'Title' => [
                                                                'description' => '作者标题',
                                                                'type' => 'string',
                                                                'example' => '播音呆瓜小贼',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Category' => [
                                                    'description' => '根据所属公共类目转换controlType',
                                                    'type' => 'string',
                                                    'example' => 'audio',
                                                ],
                                                'Charge' => [
                                                    'description' => '是否收费',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'CommCateId' => [
                                                    'description' => '对应的类目id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '80012017',
                                                ],
                                                'Cover' => [
                                                    'description' => '内容封面图片',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CanResize' => [
                                                            'description' => '是否可以使用oss规则裁剪',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'Img' => [
                                                            'description' => '默认图片',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                        ],
                                                        'Large' => [
                                                            'description' => '大图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                        ],
                                                        'Medium' => [
                                                            'description' => '中图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                        ],
                                                        'Small' => [
                                                            'description' => '小图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                        ],
                                                    ],
                                                ],
                                                'Description' => [
                                                    'description' => '内容描述',
                                                    'type' => 'string',
                                                    'example' => '内容描述',
                                                ],
                                                'Duration' => [
                                                    'description' => '时长',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '180',
                                                ],
                                                'HotScore' => [
                                                    'description' => '热度分',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '10',
                                                ],
                                                'Id' => [
                                                    'description' => '内容id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1231231',
                                                ],
                                                'ItemType' => [
                                                    'description' => '内容的类型, 音乐 音频 电台 笑话等',
                                                    'type' => 'string',
                                                    'example' => 'ALBUM',
                                                ],
                                                'OrderIndex' => [
                                                    'description' => 'orderIndex 顺序',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'Source' => [
                                                    'description' => '来源',
                                                    'type' => 'string',
                                                    'example' => 'qingting',
                                                ],
                                                'Styles' => [
                                                    'description' => '风格',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '风格',
                                                        'type' => 'string',
                                                        'example' => '13131',
                                                    ],
                                                ],
                                                'Title' => [
                                                    'description' => '标题',
                                                    'type' => 'string',
                                                    'example' => '超能狂少在都市',
                                                ],
                                                'Type' => [
                                                    'description' => '根据所属公共类目转换favoriteType',
                                                    'type' => 'string',
                                                    'example' => 'program',
                                                ],
                                                'Valid' => [
                                                    'description' => '是否可播',
                                                    'type' => 'string',
                                                    'example' => 'VALID',
                                                ],
                                                'RawId' => [
                                                    'description' => '三方id',
                                                    'type' => 'string',
                                                    'example' => '12323423',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageSize' => [
                                        'description' => '页记录数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalSize' => [
                                        'description' => '总记录数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21421',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"CurrentPageNum\\": 1,\\n    \\"OpenDataItemList\\": [\\n      {\\n        \\"Alias\\": [\\n          \\"超能狂少在都市\\"\\n        ],\\n        \\"Audition\\": false,\\n        \\"Authors\\": [\\n          {\\n            \\"AuthorTypes\\": [\\n              \\"ANCHOR\\"\\n            ],\\n            \\"Gender\\": \\"MALE\\",\\n            \\"Id\\": 12314,\\n            \\"Online\\": false,\\n            \\"Source\\": \\"qingting\\",\\n            \\"Title\\": \\"播音呆瓜小贼\\"\\n          }\\n        ],\\n        \\"Category\\": \\"audio\\",\\n        \\"Charge\\": false,\\n        \\"CommCateId\\": 80012017,\\n        \\"Cover\\": {\\n          \\"CanResize\\": false,\\n          \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n        },\\n        \\"Description\\": \\"内容描述\\",\\n        \\"Duration\\": 180,\\n        \\"HotScore\\": 10,\\n        \\"Id\\": 1231231,\\n        \\"ItemType\\": \\"ALBUM\\",\\n        \\"OrderIndex\\": 1,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Styles\\": [\\n          \\"13131\\"\\n        ],\\n        \\"Title\\": \\"超能狂少在都市\\",\\n        \\"Type\\": \\"program\\",\\n        \\"Valid\\": \\"VALID\\",\\n        \\"RawId\\": \\"12323423\\"\\n      }\\n    ],\\n    \\"PageSize\\": 10,\\n    \\"TotalSize\\": 21421\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAlbumDetailResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <CurrentPageNum>1</CurrentPageNum>\\n        <OpenDataItemList>\\n            <Alias>超能狂少在都市</Alias>\\n            <Audition>false</Audition>\\n            <Authors>\\n                <AuthorTypes>ANCHOR</AuthorTypes>\\n                <Gender>MALE</Gender>\\n                <Id>12314</Id>\\n                <Online>false</Online>\\n                <Source>qingting</Source>\\n                <Title>播音呆瓜小贼</Title>\\n            </Authors>\\n            <Category>audio</Category>\\n            <Charge>false</Charge>\\n            <CommCateId>80012017</CommCateId>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n                <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n                <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n                <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n            </Cover>\\n            <Description>内容描述</Description>\\n            <Duration>180</Duration>\\n            <HotScore>10</HotScore>\\n            <Id>1231231</Id>\\n            <ItemType>ALBUM</ItemType>\\n            <OrderIndex>1</OrderIndex>\\n            <Source>qingting</Source>\\n            <Styles>13131</Styles>\\n            <Title>超能狂少在都市</Title>\\n            <Type>program</Type>\\n            <Valid>VALID</Valid>\\n            <RawId>12323423</RawId>\\n        </OpenDataItemList>\\n        <PageSize>10</PageSize>\\n        <TotalSize>21421</TotalSize>\\n    </Result>\\n</ListAlbumDetailResponse>","errorExample":""}]',
            'title' => '获取音乐音频专辑里面的内容列表',
        ],
        'ListCateContent' => [
            'summary' => '根据特定的类目,按照指定的排序顺序获取该类目下的内容。',
            'path' => '/v1.0/ssp/ListCateContent',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'CateId' => [
                                'description' => '类目id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '80010',
                            ],
                            'IsAlbum' => [
                                'description' => '是否查询专辑',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'false',
                            ],
                            'SortBy' => [
                                'description' => '排序字段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'hot_score',
                            ],
                            'SortOrder' => [
                                'description' => '排序方式',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DESC',
                                'enum' => [
                                    'ASC',
                                    'DESC',
                                ],
                            ],
                            'PageNum' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '	设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
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
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'sucess',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TotalSize' => [
                                        'description' => '总记录数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12002',
                                    ],
                                    'CurrentPageNum' => [
                                        'description' => '当前页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '页记录书',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'OpenDataItemList' => [
                                        'description' => 'data信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'data信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'id' => [
                                                    'description' => '主键id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '26152778',
                                                ],
                                                'Source' => [
                                                    'description' => '来源',
                                                    'type' => 'string',
                                                    'example' => 'qingting',
                                                ],
                                                'Title' => [
                                                    'description' => '标题',
                                                    'type' => 'string',
                                                    'example' => '超能狂少在都市',
                                                ],
                                                'Authors' => [
                                                    'description' => '作者信息',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '作者信息',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'RawId' => [
                                                                'description' => '三方作者id',
                                                                'type' => 'string',
                                                                'example' => '123123',
                                                            ],
                                                            'Gender' => [
                                                                'description' => '性别',
                                                                'type' => 'string',
                                                                'example' => 'MALE',
                                                            ],
                                                            'AuthorTypes' => [
                                                                'description' => '作者类型',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '作者类型',
                                                                    'type' => 'string',
                                                                    'example' => 'ANCHOR',
                                                                ],
                                                            ],
                                                            'Source' => [
                                                                'description' => '来源',
                                                                'type' => 'string',
                                                                'example' => 'qingting',
                                                            ],
                                                            'Cover' => [
                                                                'description' => '头像图片',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Img' => [
                                                                        'description' => '默认图片',
                                                                        'type' => 'string',
                                                                        'example' => 'https://a.jpg',
                                                                    ],
                                                                    'Large' => [
                                                                        'description' => '大图',
                                                                        'type' => 'string',
                                                                        'example' => 'https://a.jpg',
                                                                    ],
                                                                    'Mediam' => [
                                                                        'description' => '中图（Deprecated）',
                                                                        'type' => 'string',
                                                                        'example' => 'https://a.jpg',
                                                                    ],
                                                                    'Medium' => [
                                                                        'description' => '中图',
                                                                        'type' => 'string',
                                                                        'example' => 'https://a.jpg',
                                                                    ],
                                                                    'Small' => [
                                                                        'description' => '小图',
                                                                        'type' => 'string',
                                                                        'example' => 'https://a.jpg',
                                                                    ],
                                                                    'CanResize' => [
                                                                        'description' => '是否可以使用oss规则裁剪',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                            'Id' => [
                                                                'description' => '作者信息主键id',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '13597709',
                                                            ],
                                                            'Title' => [
                                                                'description' => '作者标题',
                                                                'type' => 'string',
                                                                'example' => '播音呆瓜小贼',
                                                            ],
                                                            'Description' => [
                                                                'description' => '作者描述',
                                                                'type' => 'string',
                                                                'example' => '播音呆瓜小贼',
                                                            ],
                                                            'Online' => [
                                                                'description' => '是否在线',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ItemType' => [
                                                    'description' => ' 内容的类型, 音乐 音频 电台 笑话等',
                                                    'type' => 'string',
                                                    'example' => 'ALBUM',
                                                ],
                                                'Category' => [
                                                    'description' => '根据所属公共类目转换controlType',
                                                    'type' => 'string',
                                                    'example' => 'audio',
                                                ],
                                                'Type' => [
                                                    'description' => '根据所属公共类目转换favoriteType',
                                                    'type' => 'string',
                                                    'example' => 'program',
                                                ],
                                                'HotScore' => [
                                                    'description' => '热度分',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '0',
                                                ],
                                                'Valid' => [
                                                    'description' => ' 是否可播',
                                                    'type' => 'string',
                                                    'example' => 'VALID',
                                                ],
                                                'Cover' => [
                                                    'description' => '专辑封面图片',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Img' => [
                                                            'description' => '默认图片',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                        ],
                                                        'Large' => [
                                                            'description' => '大图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718275.jpg',
                                                        ],
                                                        'Mediam' => [
                                                            'description' => '中图（Deprecated）',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020718275.jpg',
                                                        ],
                                                        'Medium' => [
                                                            'description' => '中图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/20170207175.jpg',
                                                        ],
                                                        'Small' => [
                                                            'description' => '小图',
                                                            'type' => 'string',
                                                            'example' => 'http://pic.qtfm.cn/2017/0207/2017020675.jpg',
                                                        ],
                                                        'canResize' => [
                                                            'description' => '是否可以使用oss规则裁剪',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                    ],
                                                ],
                                                'CommCateId' => [
                                                    'description' => '对应的类目id',
                                                    'type' => 'string',
                                                    'example' => '80012017',
                                                ],
                                                'Alias' => [
                                                    'description' => '别名',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '别名',
                                                        'type' => 'string',
                                                        'example' => '超能狂少在都市',
                                                    ],
                                                ],
                                                'Charge' => [
                                                    'description' => '是否收费',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Audition' => [
                                                    'description' => '是否可试听',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Description' => [
                                                    'description' => '内容描述',
                                                    'type' => 'string',
                                                    'example' => '作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！',
                                                ],
                                                'RawId' => [
                                                    'description' => '专辑三方id',
                                                    'type' => 'string',
                                                    'example' => '206775',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"sucess\\",\\n  \\"Result\\": {\\n    \\"TotalSize\\": 12002,\\n    \\"CurrentPageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"OpenDataItemList\\": [\\n      {\\n        \\"id\\": 26152778,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Title\\": \\"超能狂少在都市\\",\\n        \\"Authors\\": [\\n          {\\n            \\"RawId\\": \\"123123\\",\\n            \\"Gender\\": \\"MALE\\",\\n            \\"AuthorTypes\\": [\\n              \\"ANCHOR\\"\\n            ],\\n            \\"Source\\": \\"qingting\\",\\n            \\"Cover\\": {\\n              \\"Img\\": \\"https://a.jpg\\",\\n              \\"Large\\": \\"https://a.jpg\\",\\n              \\"Mediam\\": \\"https://a.jpg\\",\\n              \\"Medium\\": \\"https://a.jpg\\",\\n              \\"Small\\": \\"https://a.jpg\\",\\n              \\"CanResize\\": false\\n            },\\n            \\"Id\\": 13597709,\\n            \\"Title\\": \\"播音呆瓜小贼\\",\\n            \\"Description\\": \\"播音呆瓜小贼\\",\\n            \\"Online\\": true\\n          }\\n        ],\\n        \\"ItemType\\": \\"ALBUM\\",\\n        \\"Category\\": \\"audio\\",\\n        \\"Type\\": \\"program\\",\\n        \\"HotScore\\": 0,\\n        \\"Valid\\": \\"VALID\\",\\n        \\"Cover\\": {\\n          \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718275.jpg\\",\\n          \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718275.jpg\\",\\n          \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/20170207175.jpg\\",\\n          \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020675.jpg\\",\\n          \\"canResize\\": false\\n        },\\n        \\"CommCateId\\": \\"80012017\\",\\n        \\"Alias\\": [\\n          \\"超能狂少在都市\\"\\n        ],\\n        \\"Charge\\": false,\\n        \\"Audition\\": true,\\n        \\"Description\\": \\"作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！\\",\\n        \\"RawId\\": \\"206775\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCateContentResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Message>sucess</Message>\\n    <Result>\\n        <TotalSize>12002</TotalSize>\\n        <CurrentPageNum>1</CurrentPageNum>\\n        <PageSize>10</PageSize>\\n        <OpenDataItemList>\\n            <id>26152778</id>\\n            <Source>qingting</Source>\\n            <Title>超能狂少在都市</Title>\\n            <Authors>\\n                <RawId>123123</RawId>\\n                <Gender>MALE</Gender>\\n                <AuthorTypes>ANCHOR</AuthorTypes>\\n                <Source>qingting</Source>\\n                <Cover>\\n                    <Img>https://a.jpg</Img>\\n                    <Large>https://a.jpg</Large>\\n                    <Mediam>https://a.jpg</Mediam>\\n                    <Medium>https://a.jpg</Medium>\\n                    <Small>https://a.jpg</Small>\\n                    <CanResize>false</CanResize>\\n                </Cover>\\n                <Id>13597709</Id>\\n                <Title>播音呆瓜小贼</Title>\\n                <Description>播音呆瓜小贼</Description>\\n                <Online>true</Online>\\n            </Authors>\\n            <ItemType>ALBUM</ItemType>\\n            <Category>audio</Category>\\n            <Type>program</Type>\\n            <HotScore>0</HotScore>\\n            <Valid>VALID</Valid>\\n            <Cover>\\n                <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n                <Large>http://pic.qtfm.cn/2017/0207/2017020718275.jpg</Large>\\n                <Mediam>http://pic.qtfm.cn/2017/0207/2017020718275.jpg</Mediam>\\n                <Medium>http://pic.qtfm.cn/2017/0207/20170207175.jpg</Medium>\\n                <Small>http://pic.qtfm.cn/2017/0207/2017020675.jpg</Small>\\n                <canResize>false</canResize>\\n            </Cover>\\n            <CommCateId>80012017</CommCateId>\\n            <Alias>超能狂少在都市</Alias>\\n            <Charge>false</Charge>\\n            <Audition>true</Audition>\\n            <Description>作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！</Description>\\n            <RawId>206775</RawId>\\n        </OpenDataItemList>\\n    </Result>\\n</ListCateContentResponse>","errorExample":""}]',
            'title' => '根据特定的类目,按照指定的排序顺序获取该类目下的内容',
        ],
        'ListCateInfo' => [
            'summary' => '获取类目信息。',
            'path' => '/v1.0/ssp/ListCateInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '默认值song(扩展字段目前仅支持song)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'song',
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
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回参数',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CateId' => [
                                            'description' => '类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80064',
                                        ],
                                        'CateName' => [
                                            'description' => '类目名称',
                                            'type' => 'string',
                                            'example' => '时尚生活',
                                        ],
                                        'ParentCateId' => [
                                            'description' => '父类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求requestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80064,\\n      \\"CateName\\": \\"时尚生活\\",\\n      \\"ParentCateId\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCateInfoResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <CateId>80064</CateId>\\n        <CateName>时尚生活</CateName>\\n        <ParentCateId>0</ParentCateId>\\n    </Result>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n</ListCateInfoResponse>","errorExample":""}]',
            'title' => '获取音乐音频类目列表',
        ],
        'ListCommonCateFirstFloor' => [
            'summary' => '获取音乐或音频的一级类目列表。',
            'path' => '/v1.0/ssp/ListCommonCateFirstFloor',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '默认值song(扩展字段目前仅支持song)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'song',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求requestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CateId' => [
                                            'description' => '类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80012',
                                        ],
                                        'CateName' => [
                                            'description' => '类目名称',
                                            'type' => 'string',
                                            'example' => '有声内容',
                                        ],
                                        'ParentCateId' => [
                                            'description' => '父类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80012,\\n      \\"CateName\\": \\"有声内容\\",\\n      \\"ParentCateId\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCommonCateFirstFloorResponse>\\n    <Code>200</Code>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <CateId>80012</CateId>\\n        <CateName>有声内容</CateName>\\n        <ParentCateId>0</ParentCateId>\\n    </Result>\\n    <Message>success</Message>\\n</ListCommonCateFirstFloorResponse>","errorExample":""}]',
            'title' => '获取音乐或音频的一级类目列表',
        ],
        'ListCommonCateSecondFloor' => [
            'summary' => '获取指定一级类目下面的二级类目列表。',
            'path' => '/v1.0/ssp/ListCommonCateSecondFloor',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ParentCateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父类目id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '80010',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求requestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CateId' => [
                                            'description' => '类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80018009',
                                        ],
                                        'CateName' => [
                                            'description' => '类目名称',
                                            'type' => 'string',
                                            'example' => '儿童笑话',
                                        ],
                                        'ParentCateId' => [
                                            'description' => '父类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80018',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80018009,\\n      \\"CateName\\": \\"儿童笑话\\",\\n      \\"ParentCateId\\": 80018\\n    }\\n  ],\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCommonCateSecondFloorResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Result>\\n        <CateId>80018009</CateId>\\n        <CateName>儿童笑话</CateName>\\n        <ParentCateId>80018</ParentCateId>\\n    </Result>\\n    <Message>success</Message>\\n</ListCommonCateSecondFloorResponse>","errorExample":""}]',
            'title' => '获取指定一级类目下面的二级类目列表',
        ],
        'ListPlayHistory' => [
            'summary' => '获取历史播放接口。',
            'path' => '/v1.0/ssp/ListPlayHistory',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '音乐music，有声书program，故事story，儿歌children_song，电台radio',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'music',
                            ],
                            'PageNum' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Alias' => [
                                            'description' => '别名',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '别名',
                                                'type' => 'string',
                                                'example' => '超能狂少在都市',
                                            ],
                                        ],
                                        'Audition' => [
                                            'description' => '是否可试听',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Authors' => [
                                            'description' => '内容的作者',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内容作者',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AuthorTypes' => [
                                                        'description' => '作者类型',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '作者类型',
                                                            'type' => 'string',
                                                            'example' => 'ANCHOR',
                                                        ],
                                                    ],
                                                    'Cover' => [
                                                        'description' => '头像图片',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CanResize' => [
                                                                'description' => '是否可以使用oss规则裁剪',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Img' => [
                                                                'description' => '默认图片',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Large' => [
                                                                'description' => '大图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Medium' => [
                                                                'description' => '中图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Small' => [
                                                                'description' => '小图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                        ],
                                                    ],
                                                    'Gender' => [
                                                        'description' => '性别',
                                                        'type' => 'string',
                                                        'example' => 'MALE',
                                                    ],
                                                    'RawId' => [
                                                        'description' => '三方作者id',
                                                        'type' => 'string',
                                                        'example' => '123123',
                                                    ],
                                                    'Source' => [
                                                        'description' => '来源',
                                                        'type' => 'string',
                                                        'example' => 'qingting',
                                                    ],
                                                    'Id' => [
                                                        'description' => '作者主键id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '13597709',
                                                    ],
                                                    'Title' => [
                                                        'description' => '作者标题',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Description' => [
                                                        'description' => '作者描述',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Online' => [
                                                        'description' => '是否在线',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Category' => [
                                            'description' => '	'."\n"
                                                .'根据所属公共类目转换controlType',
                                            'type' => 'string',
                                            'example' => 'audio',
                                        ],
                                        'Charge' => [
                                            'description' => '	'."\n"
                                                .'是否收费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'CommCateId' => [
                                            'description' => '对应的类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80012017',
                                        ],
                                        'Cover' => [
                                            'description' => '专辑封面图片',
                                            'type' => 'object',
                                            'properties' => [
                                                'CanResize' => [
                                                    'description' => '是否可以使用oss规则裁剪',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Img' => [
                                                    'description' => '默认图片',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Large' => [
                                                    'description' => '大图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Mediam' => [
                                                    'description' => '中图（Deprecated）',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Medium' => [
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Small' => [
                                                    'description' => '小图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'description' => '内容描述',
                                            'type' => 'string',
                                            'example' => '内容描述',
                                        ],
                                        'HotScore' => [
                                            'description' => '热度分',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '10',
                                        ],
                                        'Id' => [
                                            'description' => '内容id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '13597709',
                                        ],
                                        'ItemType' => [
                                            'description' => '内容的类型, 音乐 音频 电台 笑话等',
                                            'type' => 'string',
                                            'example' => 'ALBUM',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'string',
                                            'example' => 'qingting',
                                        ],
                                        'Type' => [
                                            'description' => '根据所属公共类目转换favoriteType',
                                            'type' => 'string',
                                            'example' => 'program',
                                        ],
                                        'Title' => [
                                            'description' => '标题',
                                            'type' => 'string',
                                            'example' => '超能狂少在都市',
                                        ],
                                        'Valid' => [
                                            'description' => '是否可播',
                                            'type' => 'string',
                                            'example' => 'VALID',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"123123\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": false\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": false,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Valid\\": \\"VALID\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPlayHistoryResponse>\\n    <requestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</requestId>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>123123</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>false</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Type>program</Type>\\n        <Title>超能狂少在都市</Title>\\n        <Valid>VALID</Valid>\\n    </Result>\\n</ListPlayHistoryResponse>","errorExample":""}]',
            'title' => '获取历史播放接口',
        ],
        'ListRecommendContent' => [
            'summary' => '获取每日推荐的音乐或者音频。',
            'path' => '/v1.0/ssp/ListRecommendContent',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '默认值song(扩展字段目前仅支持song)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'song',
                            ],
                            'Count' => [
                                'description' => '推荐数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'code 编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求RequestId',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Alias' => [
                                            'description' => '别名',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '别名',
                                                'type' => 'string',
                                                'example' => '超能狂少在都市',
                                            ],
                                        ],
                                        'Audition' => [
                                            'description' => '是否可试听',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Authors' => [
                                            'description' => '内容的作者',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内容的作者',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AuthorTypes' => [
                                                        'description' => '作者类型',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '作者类型',
                                                            'type' => 'string',
                                                            'example' => 'ANCHOR',
                                                        ],
                                                    ],
                                                    'Cover' => [
                                                        'description' => '头像图片',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CanResize' => [
                                                                'description' => '是否可以使用oss规则裁剪',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Img' => [
                                                                'description' => '默认图片',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Large' => [
                                                                'description' => '大图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Medium' => [
                                                                'description' => '中图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Small' => [
                                                                'description' => '小图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                        ],
                                                    ],
                                                    'Gender' => [
                                                        'description' => '性别',
                                                        'type' => 'string',
                                                        'example' => 'MALE',
                                                    ],
                                                    'RawId' => [
                                                        'description' => '三方作者id',
                                                        'type' => 'string',
                                                        'example' => '12311',
                                                    ],
                                                    'Source' => [
                                                        'description' => '来源',
                                                        'type' => 'string',
                                                        'example' => 'qingting',
                                                    ],
                                                    'Id' => [
                                                        'description' => '作者主键id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '13597709',
                                                    ],
                                                    'Title' => [
                                                        'description' => '作者标题',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Description' => [
                                                        'description' => '作者描述',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Online' => [
                                                        'description' => '是否在线',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Category' => [
                                            'description' => '根据所属公共类目转换controlType',
                                            'type' => 'string',
                                            'example' => 'audio',
                                        ],
                                        'Charge' => [
                                            'description' => '是否收费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'CommCateId' => [
                                            'description' => '对应的类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80012017',
                                        ],
                                        'Cover' => [
                                            'description' => '专辑封面图片',
                                            'type' => 'object',
                                            'properties' => [
                                                'CanResize' => [
                                                    'description' => '	'."\n"
                                                        .'是否可以使用oss规则裁剪',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Img' => [
                                                    'description' => '默认图片',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Large' => [
                                                    'description' => '大图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Mediam' => [
                                                    'description' => '中图（Deprecated）',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Medium' => [
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Small' => [
                                                    'description' => '小图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'description' => '内容描述',
                                            'type' => 'string',
                                            'example' => '内容描述',
                                        ],
                                        'HotScore' => [
                                            'description' => '	'."\n"
                                                .'热度分',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '10',
                                        ],
                                        'Id' => [
                                            'description' => '内容id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '13597709',
                                        ],
                                        'ItemType' => [
                                            'description' => '	'."\n"
                                                .'内容的类型, 音乐 音频 电台 笑话等',
                                            'type' => 'string',
                                            'example' => 'ALBUM',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'string',
                                            'example' => 'qingting',
                                        ],
                                        'Title' => [
                                            'description' => '标题',
                                            'type' => 'string',
                                            'example' => '超能狂少在都市',
                                        ],
                                        'Type' => [
                                            'description' => '根据所属公共类目转换favoriteType',
                                            'type' => 'string',
                                            'example' => 'program',
                                        ],
                                        'Valid' => [
                                            'description' => '是否可播',
                                            'type' => 'string',
                                            'example' => 'VALID',
                                        ],
                                        'RawId' => [
                                            'description' => '三方id',
                                            'type' => 'string',
                                            'example' => '123123',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"12311\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": false\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": false,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Valid\\": \\"VALID\\",\\n      \\"RawId\\": \\"123123\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRecommendContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>12311</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>false</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <RawId>123123</RawId>\\n    </Result>\\n</ListRecommendContentResponse>","errorExample":""}]',
            'title' => '获取每日推荐的音乐或者音频',
        ],
        'PlayAndPauseControl' => [
            'summary' => '播放暂停控制。',
            'path' => '/v1.0/ssp/PlayAndPauseControl',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'OpenPlayAndPauseControlParam',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenPlayAndPauseCommand' => [
                                'description' => '播放：Play；暂停：Pause。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Play',
                                'enum' => [
                                    'Play',
                                    'Pause',
                                ],
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PlayAndPauseControlResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PlayAndPauseControlResponse>","errorExample":""}]',
            'title' => '播放暂停控制',
        ],
        'PlayModeControl' => [
            'summary' => '播放模式切换。',
            'path' => '/v1.0/ssp/PlayModeControl',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'OpenPlayModeControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenPlayMode' => [
                                'description' => '播放模式'."\n"
                                    ."\n"
                                    .'列表循环：Repeat,；随机：Shuffle,；单曲循环：RepeatOne,；普通模式：Normal;',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Normal',
                                'enum' => [
                                    'Repeat',
                                    'Shuffle',
                                    'RepeatOne',
                                    'Normal',
                                ],
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'OpenPlayMode' => [
                                        'description' => '播放模式'."\n"
                                            ."\n"
                                            .'列表循环：Repeat,；随机：Shuffle,；单曲循环：RepeatOne,；普通模式：Normal;',
                                        'type' => 'string',
                                        'example' => 'Normal',
                                        'enum' => [
                                            'Repeat',
                                            'Shuffle',
                                            'RepeatOne',
                                            'Normal',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"OpenPlayMode\\": \\"Normal\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PlayModeControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <openPlayMode>Normal</openPlayMode>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PlayModeControlResponse>","errorExample":""}]',
            'title' => '播放模式切换',
        ],
        'PreviousAndNextControl' => [
            'summary' => '对创建的播放列表中的内容进行上下一首控制。',
            'path' => '/v1.0/ssp/PreviousAndNextControl',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'OpenControlPlayingListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'Cmd' => [
                                'description' => '下一首：NEXT；上一首：PREVIOUS',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'NEXT',
                            ],
                            'IsFromDevice' => [
                                'description' => '是否设备发起，默认false',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'RawId' => [
                                        'description' => '三方id',
                                        'type' => 'string',
                                        'example' => '550144364',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'ximalayav2',
                                    ],
                                    'AlbumRawId' => [
                                        'description' => '三方专辑id',
                                        'type' => 'string',
                                        'example' => '260744',
                                    ],
                                    'AlbumName' => [
                                        'description' => '三方专辑名称',
                                        'type' => 'string',
                                        'example' => '晚安妈妈睡前故事',
                                    ],
                                    'Liked' => [
                                        'description' => '是否收藏',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Singer' => [
                                        'description' => '作者',
                                        'type' => 'string',
                                        'example' => '晚安妈妈',
                                    ],
                                    'Title' => [
                                        'description' => '标题',
                                        'type' => 'string',
                                        'example' => '足球鞋赛车 晚安妈妈',
                                    ],
                                    'Cover' => [
                                        'description' => '封面图片对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'Img' => [
                                                'description' => '默认图片',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Large' => [
                                                'description' => '大图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Mediam' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Medium' => [
                                                'description' => '中图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'Small' => [
                                                'description' => '小图',
                                                'type' => 'string',
                                                'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                                            ],
                                            'CanResize' => [
                                                'description' => '是否可以使用oss规则裁剪',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'PlayMode' => [
                                        'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                                        'type' => 'string',
                                        'example' => 'Repeat',
                                    ],
                                    'AudioLength' => [
                                        'description' => '长度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '190',
                                    ],
                                    'Progress' => [
                                        'description' => '歌曲播放进度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'LyricUrl' => [
                                        'description' => '歌词url',
                                        'type' => 'string',
                                        'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                                    ],
                                    'Type' => [
                                        'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                                        'type' => 'string',
                                        'example' => 'story',
                                    ],
                                    'Copyright' => [
                                        'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'ItemUrl' => [
                                        'description' => '播放url',
                                        'type' => 'string',
                                        'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                                    ],
                                    'DefaultPlayOrder' => [
                                        'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Valid' => [
                                        'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                                        'type' => 'string',
                                        'example' => 'VALID',
                                    ],
                                    'Pos' => [
                                        'description' => '该项在播放列表中的位置',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Type\\": \\"story\\",\\n    \\"Copyright\\": 0,\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PreviousAndNextControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PreviousAndNextControlResponse>","errorExample":""}]',
            'title' => '上下首控制',
        ],
        'ProgressControl' => [
            'summary' => '进度控制。',
            'path' => '/v1.0/ssp/ProgressControl',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'OpenProgressControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'Progress' => [
                                'description' => '歌曲进度。单位秒',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '12',
                            ],
                            'ExtendInfo' => [
                                'description' => '扩展信息',
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'`OPEN_ID`：默认的设备ID标识。` UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
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
                                'description' => '调用返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10002398812',
                            ],
                            'Success' => [
                                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<ProgressControlResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</ProgressControlResponse>","errorExample":""}]',
            'title' => '进度控制',
        ],
        'SearchContent' => [
            'summary' => '按照特定的搜索条件搜索。',
            'path' => '/v1.0/ssp/SearchContent',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'Query' => [
                                'description' => '查询关键字',
                                'type' => 'string',
                                'required' => false,
                                'example' => '周杰伦',
                            ],
                            'Cate' => [
                                'description' => '搜索的范围音乐或者音频'."\n"
                                    .'入参枚举 ：music | program',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'music',
                            ],
                            'SubCate' => [
                                'description' => '当cate 是music时 可以不传subCate  如果传subCate 可以为 ：'."\n"
                                    .'song （歌曲）、 singer（艺人） 、album （专辑）'."\n"
                                    ."\n"
                                    .'当cate是program时 可以不传subCate  '."\n"
                                    .'如果传subCate 可以为 ：'."\n"
                                    .'album （专辑）、audio（节目音频）、radio（电台）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'singer',
                            ],
                            'QueryAlbum' => [
                                'description' => '是否查询专辑',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'PageNum' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeKey' => [
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'EncodeType' => [
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    ."\n"
                                    .'PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'Id' => [
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                            'Code' => [
                                'description' => 'code编码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => 'message信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Alias' => [
                                            'description' => '别名',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '别名',
                                                'type' => 'string',
                                                'example' => '超能狂少在都市',
                                            ],
                                        ],
                                        'Audition' => [
                                            'description' => '是否可试听',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Authors' => [
                                            'description' => '内容的作者',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '作者信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AuthorTypes' => [
                                                        'description' => '作者类型',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '作者类型',
                                                            'type' => 'string',
                                                            'example' => 'ANCHOR',
                                                        ],
                                                    ],
                                                    'Cover' => [
                                                        'description' => '头像图片',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CanResize' => [
                                                                'description' => '是否可以使用oss规则裁剪',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Img' => [
                                                                'description' => '默认图片',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Large' => [
                                                                'description' => '大图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Medium' => [
                                                                'description' => '中图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                            'Small' => [
                                                                'description' => '小图',
                                                                'type' => 'string',
                                                                'example' => 'https://a.jpg',
                                                            ],
                                                        ],
                                                    ],
                                                    'Gender' => [
                                                        'description' => '性别',
                                                        'type' => 'string',
                                                        'example' => 'MALE',
                                                    ],
                                                    'RawId' => [
                                                        'description' => '三方作者id',
                                                        'type' => 'string',
                                                        'example' => '123123',
                                                    ],
                                                    'Source' => [
                                                        'description' => '来源',
                                                        'type' => 'string',
                                                        'example' => 'qingting',
                                                    ],
                                                    'Id' => [
                                                        'description' => '作者主键id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '13597709',
                                                    ],
                                                    'Title' => [
                                                        'description' => '作者标题',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Description' => [
                                                        'description' => '作者描述',
                                                        'type' => 'string',
                                                        'example' => '播音呆瓜小贼',
                                                    ],
                                                    'Online' => [
                                                        'description' => '是否在线',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Category' => [
                                            'description' => '根据所属公共类目转换controlType',
                                            'type' => 'string',
                                            'example' => 'audio',
                                        ],
                                        'Charge' => [
                                            'description' => '是否收费',
                                            'type' => 'boolean',
                                            'example' => 'fasle',
                                        ],
                                        'CommCateId' => [
                                            'description' => '对应的类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80012017',
                                        ],
                                        'Cover' => [
                                            'description' => '专辑封面图片',
                                            'type' => 'object',
                                            'properties' => [
                                                'CanResize' => [
                                                    'description' => '是否可以使用oss规则裁剪',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Img' => [
                                                    'description' => '默认图片',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Large' => [
                                                    'description' => '大图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Mediam' => [
                                                    'description' => '中图（Deprecated）',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Medium' => [
                                                    'description' => '中图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                                'Small' => [
                                                    'description' => '小图',
                                                    'type' => 'string',
                                                    'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'description' => '内容描述',
                                            'type' => 'string',
                                            'example' => '内容描述',
                                        ],
                                        'HotScore' => [
                                            'description' => '热度分',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '10',
                                        ],
                                        'Id' => [
                                            'description' => '内容id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '13597709',
                                        ],
                                        'ItemType' => [
                                            'description' => '内容的类型, 音乐 音频 电台 笑话等',
                                            'type' => 'string',
                                            'example' => 'ALBUM',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'string',
                                            'example' => 'qingting',
                                        ],
                                        'Title' => [
                                            'description' => '标题',
                                            'type' => 'string',
                                            'example' => '超能狂少在都市',
                                        ],
                                        'Type' => [
                                            'description' => '根据所属公共类目转换favoriteType',
                                            'type' => 'string',
                                            'example' => 'program',
                                        ],
                                        'Valid' => [
                                            'description' => '是否可播',
                                            'type' => 'string',
                                            'example' => 'VALID',
                                        ],
                                        'Duration' => [
                                            'description' => '时长信息',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '180',
                                        ],
                                        'AlbumId' => [
                                            'description' => '对应的专辑id',
                                            'type' => 'string',
                                            'example' => '13123',
                                        ],
                                        'Lyric' => [
                                            'description' => '歌词信息',
                                            'type' => 'string',
                                            'example' => 'http://a1231.lrc',
                                        ],
                                        'OrderIndex' => [
                                            'description' => '内容排序值',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Styles' => [
                                            'description' => '曲风',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '曲风',
                                                'type' => 'string',
                                                'example' => '1231',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"123123\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": true\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": true,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Valid\\": \\"VALID\\",\\n      \\"Duration\\": 180,\\n      \\"AlbumId\\": \\"13123\\",\\n      \\"Lyric\\": \\"http://a1231.lrc\\",\\n      \\"OrderIndex\\": \\"1\\",\\n      \\"Styles\\": [\\n        \\"1231\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<SearchContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>123123</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>true</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Valid>VALID</Valid>\\n        <Duration>180</Duration>\\n    </Result>\\n</SearchContentResponse>","errorExample":""}]',
            'title' => '按照特定的搜索条件搜索',
        ],
        'CloudPlayer' => [
            'summary' => '云推歌，提供设备openUuid和天猫精灵openUserId，创建播放列表。',
            'path' => '/v1.0/ssp/cloud/player',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '开放用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码key',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => 'ID 类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '开放ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1234',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID（可为空）',
                                'type' => 'string',
                                'required' => false,
                                'example' => '为空',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码key',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                                'enum' => [],
                            ],
                            'IdType' => [
                                'description' => 'ID类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '开放ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1234',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID（可为空）',
                                'type' => 'string',
                                'required' => false,
                                'example' => '为空',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云推歌来源',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'KG' => '酷狗',
                        ],
                        'example' => 'KG',
                    ],
                ],
                [
                    'name' => 'SongIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '歌曲ID列表【1-200】个歌曲',
                        'type' => 'array',
                        'items' => [
                            'description' => '歌曲id',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123',
                        ],
                        'required' => true,
                        'maxItems' => 200,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'CurPlayIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前播放歌曲的索引。从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PlayMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '播放模式',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Shuffle' => '随机',
                            'RepeatOne' => '单曲循环',
                            'Repeat' => '循环',
                            'Normal' => '顺序',
                        ],
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'SongId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '歌曲id（索引有问题时，根据该ID重新计算索引）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
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
                                'example' => 'B7D82DB0-DD59-5756-AC62-871C9D7DBC36',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回消息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果：true：检验成功false：检验失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7D82DB0-DD59-5756-AC62-871C9D7DBC36\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
            'title' => '云推歌',
            'description' => '同步检验入参后返回，'."\n"
                .'异步创建播放列表。',
            'responseParamsDescription' => '返回值为 true / false，表示创建播放列表是否成功。',
        ],
        'MobileRecommend' => [
            'summary' => '移动项目获取推荐的歌曲，包括每日推荐、热歌和风格歌单。',
            'path' => '/v1.0/ssp/mobile/recommend/music',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户信息- userId',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1414895629783187053',
                            ],
                            'IdType' => [
                                'description' => 'ID 类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => 'ID 值',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，IdType设置为UNION_ID时，该参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '暂无',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息。',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写PROJECT_ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1414895629783187053',
                                'enum' => [],
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的设备ID标识。'."\n"
                                    .'UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '暂无',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求类型：获取每日推荐、热歌，或风格歌单',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'STYLE' => '风格歌单',
                            'DAILY_REC' => '每日推荐',
                            'HOT' => '热歌',
                        ],
                        'example' => 'DAILY_REC',
                    ],
                ],
                [
                    'name' => 'Style',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求类型为 STYLE 时必填。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '钢琴' => '钢琴',
                            '抖音' => '抖音',
                            '欢快' => '欢快',
                            '轻音乐' => '轻音乐',
                            '流行' => '流行',
                            'DJ' => 'DJ',
                        ],
                        'example' => '轻音乐',
                    ],
                ],
                [
                    'name' => 'Count',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推荐结果的数量',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
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
                                'example' => '5C5809B4-F465-52E0-9A8B-61396F9E593B',
                            ],
                            'Code' => [
                                'description' => '调用返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '如果有错误，会输出错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '请求结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务的实际返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Source' => [
                                            'description' => '内容的来源',
                                            'type' => 'string',
                                            'example' => 'KG',
                                        ],
                                        'RawId' => [
                                            'description' => '内容的三方id',
                                            'type' => 'string',
                                            'example' => '550144364',
                                        ],
                                        'Cover' => [
                                            'description' => '专辑封面图片',
                                            'type' => 'string',
                                            'example' => 'http://img4.kuwo.cn/star/albumcover/120/78/77/1688821132.jpg',
                                        ],
                                        'Authors' => [
                                            'description' => '作者信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '作者信息',
                                                'type' => 'string',
                                                'example' => '["周杰伦"]',
                                            ],
                                        ],
                                        'Title' => [
                                            'description' => '内容标题',
                                            'type' => 'string',
                                            'example' => '稻香',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5C5809B4-F465-52E0-9A8B-61396F9E593B\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Source\\": \\"KG\\",\\n      \\"RawId\\": \\"550144364\\",\\n      \\"Cover\\": \\"http://img4.kuwo.cn/star/albumcover/120/78/77/1688821132.jpg\\",\\n      \\"Authors\\": [\\n        \\"[\\\\\\"周杰伦\\\\\\"]\\"\\n      ],\\n      \\"Title\\": \\"稻香\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '移动轻纳管推荐接口',
            'description' => '根据 Type 区分场景（每日推荐、热歌等）即可。',
        ],
        'AddSub' => [
            'summary' => '订阅专辑。',
            'path' => '/v1.0/ssp/addSub',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'AddSubscriptionInfoRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '订阅专辑request',
                        'description' => '订阅专辑request',
                        'type' => 'object',
                        'properties' => [
                            'DeviceId' => [
                                'title' => '设备ID',
                                'type' => 'string',
                                'docRequired' => true,
                                'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                            ],
                            'UserId' => [
                                'title' => '用户ID',
                                'type' => 'string',
                                'docRequired' => true,
                                'example' => '1152893538998276761',
                            ],
                            'ScheduleInfo' => [
                                'title' => '定时信息',
                                'description' => '定时信息',
                                'type' => 'object',
                                'properties' => [
                                    'DaysOfWeek' => [
                                        'title' => '设置按周提醒的具体日期，取值范围为：1~7',
                                        'description' => '设置按周提醒的具体日期，取值范围为：1~7',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'maximum' => '7',
                                            'minimum' => '1',
                                            'example' => '1,3,5,7,6',
                                            'enum' => [
                                                '1',
                                                '2',
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                                '7',
                                            ],
                                        ],
                                        'required' => true,
                                        'docRequired' => true,
                                        'maxItems' => 7,
                                        'minItems' => 1,
                                    ],
                                    'Hour' => [
                                        'title' => '提醒触发的时间时钟数，0~23',
                                        'description' => '提醒触发的时间时钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'maximum' => '23',
                                        'minimum' => '0',
                                        'example' => '1',
                                    ],
                                    'Minute' => [
                                        'title' => '提醒触发的分钟，0~59',
                                        'description' => '触发提醒的时间分钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'maximum' => '59',
                                        'minimum' => '0',
                                        'example' => '23',
                                    ],
                                ],
                                'required' => true,
                                'docRequired' => true,
                            ],
                            'AlbumId' => [
                                'title' => '专辑ID',
                                'description' => '专辑ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '51999575',
                            ],
                            'PlayMode' => [
                                'title' => '播放模式（目前只支持sequence）',
                                'description' => '播放模式（目前只支持sequence）',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'sequence',
                            ],
                            'DailyStudyCnt' => [
                                'title' => '每天学习数量',
                                'description' => '每天学习数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '2',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备信息',
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
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
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码。说明 200表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Result' => [
                                'title' => '结果',
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '订阅专辑记录ID',
                                        'description' => '订阅专辑记录ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '81',
                                    ],
                                    'DeviceId' => [
                                        'title' => '设备ID',
                                        'description' => '设备ID',
                                        'type' => 'string',
                                        'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                                    ],
                                    'UserId' => [
                                        'title' => '用户ID',
                                        'description' => '用户ID',
                                        'type' => 'string',
                                        'example' => '1152893538998276761',
                                    ],
                                    'ScheduleInfo' => [
                                        'title' => '定时信息',
                                        'description' => '定时信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'title' => '提醒触发的周期',
                                                'description' => '提醒触发的周期',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                            ],
                                            'Hour' => [
                                                'title' => '提醒触发的小时',
                                                'description' => '提醒触发的时间时钟数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '12',
                                            ],
                                            'Minute' => [
                                                'title' => '提醒触发的分钟',
                                                'description' => '提醒触发的时间分钟数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '23',
                                            ],
                                        ],
                                    ],
                                    'AlbumId' => [
                                        'title' => '专辑ID',
                                        'description' => '专辑ID',
                                        'type' => 'string',
                                        'example' => '51999575',
                                    ],
                                    'PlayMode' => [
                                        'title' => '播放模式',
                                        'description' => '播放模式',
                                        'type' => 'string',
                                        'example' => 'sequence',
                                    ],
                                    'DailyStudyCnt' => [
                                        'title' => '每天学习数量',
                                        'description' => '每天学习数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B99D27ED-4E12-1414-9FDE-599C57C4B204',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Result\\": {\\n    \\"Id\\": 81,\\n    \\"DeviceId\\": \\"5874DBCCA3038FAA1A70A8060F07F26D\\",\\n    \\"UserId\\": \\"1152893538998276761\\",\\n    \\"ScheduleInfo\\": {\\n      \\"DaysOfWeek\\": [\\n        2\\n      ],\\n      \\"Hour\\": 12,\\n      \\"Minute\\": 23\\n    },\\n    \\"AlbumId\\": \\"51999575\\",\\n    \\"PlayMode\\": \\"sequence\\",\\n    \\"DailyStudyCnt\\": 2\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"B99D27ED-4E12-1414-9FDE-599C57C4B204\\"\\n}","type":"json"}]',
            'title' => '订阅专辑',
        ],
        'DeleteSub' => [
            'summary' => '删除订阅专辑。',
            'path' => '/v1.0/ssp/deleteSub',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'SubId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '订阅专辑记录ID',
                        'description' => '订阅专辑记录ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '81',
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
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'title' => '返回结果',
                                'description' => '返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0AA6C15C-FD61-1E32-9881-480CC6F35A70',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0AA6C15C-FD61-1E32-9881-480CC6F35A70\\"\\n}","type":"json"}]',
            'title' => '删除订阅专辑',
        ],
        'ListAlbumIsAdded' => [
            'summary' => '专辑是否被订阅。',
            'path' => '/v1.0/ssp/listAlbumIsAdded',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AlbumIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '专辑idList',
                        'description' => '专辑idList',
                        'type' => 'array',
                        'items' => [
                            'title' => '专辑ID',
                            'description' => '专辑ID',
                            'type' => 'string',
                            'required' => true,
                            'docRequired' => true,
                            'example' => '51999575',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备信息',
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BCC85E69-5DA6-197E-A8C1-8A1B19CF781B',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AlbumId' => [
                                            'title' => '专辑ID',
                                            'description' => '专辑ID',
                                            'type' => 'string',
                                            'example' => '51999575',
                                        ],
                                        'IsAdded' => [
                                            'title' => '是否被订阅',
                                            'description' => '是否被订阅',
                                            'type' => 'string',
                                            'example' => 'false',
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
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'IdempotentParameterMismatch',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCC85E69-5DA6-197E-A8C1-8A1B19CF781B\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"AlbumId\\": \\"51999575\\",\\n      \\"IsAdded\\": \\"false\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '专辑是否被订阅',
        ],
        'ListSub' => [
            'summary' => '用户已订阅列表。',
            'path' => '/v1.0/ssp/listSub',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页参数',
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'title' => '第几页',
                                'description' => '第几页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页多少条',
                                'description' => '每页多少条',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备信息',
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => 'UNION_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '共计多少数据',
                                        'description' => '共计多少数据',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'TotalPageCount' => [
                                        'title' => '共计多少页',
                                        'description' => '共计多少页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'HasNext' => [
                                        'title' => '是否有下一页',
                                        'description' => '是否有下一页',
                                        'type' => 'boolean',
                                        'default' => 'false',
                                    ],
                                    'DataList' => [
                                        'title' => '订阅列表',
                                        'description' => '订阅列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '订阅记录ID',
                                                    'description' => '订阅记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'DeviceId' => [
                                                    'title' => '设备ID',
                                                    'description' => '设备ID',
                                                    'type' => 'string',
                                                    'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                                                ],
                                                'UserId' => [
                                                    'title' => '用户ID',
                                                    'description' => '用户ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1152893538998276761',
                                                ],
                                                'ScheduleInfo' => [
                                                    'title' => '定时信息',
                                                    'description' => '定时信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DaysOfWeek' => [
                                                            'title' => '触发周期',
                                                            'description' => '触发周期',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'title' => '',
                                                                'description' => '',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '2',
                                                            ],
                                                            'maxItems' => 7,
                                                            'minItems' => 1,
                                                        ],
                                                        'Hour' => [
                                                            'title' => '触发小时',
                                                            'description' => '触发小时',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '12',
                                                        ],
                                                        'Minute' => [
                                                            'title' => '触发分钟',
                                                            'description' => '触发分钟',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '23',
                                                        ],
                                                    ],
                                                ],
                                                'AlbumId' => [
                                                    'title' => '专辑ID',
                                                    'description' => '专辑ID',
                                                    'type' => 'string',
                                                    'example' => '51999575',
                                                ],
                                                'PlayMode' => [
                                                    'title' => '播放模式',
                                                    'description' => '播放模式',
                                                    'type' => 'string',
                                                    'example' => 'sequence',
                                                ],
                                                'DailyStudyCnt' => [
                                                    'title' => '每天学习数量',
                                                    'description' => '每天学习数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'CoverUrl' => [
                                                    'title' => '专辑封面',
                                                    'description' => '专辑封面',
                                                    'type' => 'string',
                                                    'example' => 'https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg',
                                                ],
                                                'Title' => [
                                                    'title' => '专辑标题',
                                                    'description' => '专辑标题',
                                                    'type' => 'string',
                                                    'example' => '小科学家探索',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0D0C09C2-ADC1-198B-964D-24F4FAD967DB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 3,\\n    \\"TotalPageCount\\": 1,\\n    \\"HasNext\\": true,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"DeviceId\\": \\"5874DBCCA3038FAA1A70A8060F07F26D\\",\\n        \\"UserId\\": 1152893538998276700,\\n        \\"ScheduleInfo\\": {\\n          \\"DaysOfWeek\\": [\\n            2\\n          ],\\n          \\"Hour\\": 12,\\n          \\"Minute\\": 23\\n        },\\n        \\"AlbumId\\": \\"51999575\\",\\n        \\"PlayMode\\": \\"sequence\\",\\n        \\"DailyStudyCnt\\": 2,\\n        \\"CoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg\\",\\n        \\"Title\\": \\"小科学家探索\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0D0C09C2-ADC1-198B-964D-24F4FAD967DB\\"\\n}","type":"json"}]',
            'title' => '用户已订阅列表',
        ],
        'ListSubAlbum' => [
            'summary' => '专辑列表。',
            'path' => '/v1.0/ssp/listSubAlbum',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'QuerySubscriptionAlbumRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'request',
                        'description' => 'request',
                        'type' => 'object',
                        'properties' => [
                            'CategoryId' => [
                                'title' => '分类ID',
                                'description' => '分类ID',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '80011',
                            ],
                            'AlbumId' => [
                                'title' => '专辑ID',
                                'description' => '专辑ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4476001',
                            ],
                            'Title' => [
                                'title' => '专辑标题',
                                'description' => '专辑标题',
                                'type' => 'string',
                                'required' => false,
                                'example' => '睡前故事',
                            ],
                            'Page' => [
                                'title' => '分页参数',
                                'description' => '分页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNum' => [
                                        'title' => '第几页',
                                        'description' => '第几页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页多少条',
                                        'description' => '每页多少条',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '10',
                                    ],
                                ],
                                'required' => true,
                                'docRequired' => true,
                            ],
                            'DeviceId' => [
                                'title' => '设备ID',
                                'type' => 'string',
                                'docRequired' => true,
                                'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                            ],
                            'UserId' => [
                                'title' => '用户ID',
                                'type' => 'string',
                                'docRequired' => true,
                                'example' => '1152893538998276761',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备信息',
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '共计多少条',
                                        'description' => '共计多少条',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'TotalPageCount' => [
                                        'title' => '共计多少页',
                                        'description' => '共计多少页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'HasNext' => [
                                        'title' => '是否有下一页',
                                        'description' => '是否有下一页',
                                        'type' => 'boolean',
                                    ],
                                    'DataList' => [
                                        'title' => '专辑List',
                                        'description' => '专辑List',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '记录ID',
                                                    'description' => '记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'CategoryId' => [
                                                    'title' => '专辑分类ID',
                                                    'description' => '专辑分类ID',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '80011',
                                                ],
                                                'AlbumId' => [
                                                    'title' => '专辑ID',
                                                    'description' => '专辑ID',
                                                    'type' => 'string',
                                                    'example' => '4476001',
                                                ],
                                                'Title' => [
                                                    'title' => '专辑标题',
                                                    'description' => '专辑标题',
                                                    'type' => 'string',
                                                    'example' => '睡前故事',
                                                ],
                                                'CoverUrl' => [
                                                    'title' => '专辑封面',
                                                    'description' => '专辑封面',
                                                    'type' => 'string',
                                                    'example' => 'https://ailabs.alibabausercontent.com/images/17825/jknoamc2.jpg',
                                                ],
                                                'ScheduleInfo' => [
                                                    'title' => '定时信息',
                                                    'description' => '定时信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DaysOfWeek' => [
                                                            'title' => '触发周期',
                                                            'description' => '触发周期',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'Hour' => [
                                                            'title' => '触发小时',
                                                            'description' => '触发小时',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '12',
                                                        ],
                                                        'Minute' => [
                                                            'title' => '触发分钟',
                                                            'description' => '触发分钟',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '23',
                                                        ],
                                                        'ScheduleId' => [
                                                            'title' => '定时任务ID',
                                                            'description' => '定时任务ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                        ],
                                                    ],
                                                ],
                                                'TotalEpisode' => [
                                                    'title' => '共多少集',
                                                    'description' => '共多少集',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '23',
                                                ],
                                                'Sequence' => [
                                                    'title' => '排序',
                                                    'description' => '排序',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'IsAdded' => [
                                                    'title' => '是否已订阅',
                                                    'description' => '是否已订阅',
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CB13B8D7-37FB-1B3E-8EB9-65BB413267E1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"TotalCount\\": 3,\\n    \\"TotalPageCount\\": 1,\\n    \\"HasNext\\": true,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"CategoryId\\": 80011,\\n        \\"AlbumId\\": \\"4476001\\",\\n        \\"Title\\": \\"睡前故事\\",\\n        \\"CoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/17825/jknoamc2.jpg\\",\\n        \\"ScheduleInfo\\": {\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"Hour\\": 12,\\n          \\"Minute\\": 23,\\n          \\"ScheduleId\\": 0\\n        },\\n        \\"TotalEpisode\\": 23,\\n        \\"Sequence\\": 1,\\n        \\"IsAdded\\": true\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"CB13B8D7-37FB-1B3E-8EB9-65BB413267E1\\"\\n}","type":"json"}]',
            'title' => '专辑列表',
        ],
        'ListSubscriptionAlbumCategory' => [
            'summary' => '专辑分类。',
            'path' => '/v1.0/ssp/listSubscriptionAlbumCategory',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CategoryName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分类名称',
                        'description' => '分类名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿歌',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '分类List',
                                'description' => '分类List',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CategoryId' => [
                                            'title' => '分类ID',
                                            'description' => '分类ID',
                                            'type' => 'string',
                                            'example' => '80011',
                                        ],
                                        'CategoryName' => [
                                            'title' => '分类名称',
                                            'description' => '分类名称',
                                            'type' => 'string',
                                            'example' => '儿童',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '60E7A523-9766-1D07-87A2-6E587420C59B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'IdempotentParameterMismatch',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CategoryId\\": \\"80011\\",\\n      \\"CategoryName\\": \\"儿童\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"60E7A523-9766-1D07-87A2-6E587420C59B\\"\\n}","type":"json"}]',
            'title' => '专辑分类',
        ],
        'GetAlbumDetailById' => [
            'summary' => '获取专辑信息。',
            'path' => '/v1.0/ssp/getAlbumDetailById',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AlbumId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专辑ID',
                        'description' => '专辑ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '51999575',
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
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '专辑内容',
                                'description' => '专辑内容',
                                'type' => 'object',
                                'properties' => [
                                    'AlbumId' => [
                                        'title' => '专辑ID',
                                        'description' => '专辑ID',
                                        'type' => 'string',
                                        'example' => '51999575',
                                    ],
                                    'AlbumTitle' => [
                                        'title' => '专辑标题',
                                        'description' => '专辑标题',
                                        'type' => 'string',
                                        'example' => '小科学家探索',
                                    ],
                                    'AlbumDescription' => [
                                        'title' => '专辑描述',
                                        'description' => '专辑描述',
                                        'type' => 'string',
                                        'example' => '每次一个百科知识或者故事\\n丰富孩子的视野，拓展眼界和知识面，培养和孩子的探究能力和好奇心\\n\\n',
                                    ],
                                    'AlbumCoverUrl' => [
                                        'title' => '专辑封面',
                                        'description' => '专辑封面',
                                        'type' => 'string',
                                        'example' => 'https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg',
                                    ],
                                    'AlbumContentList' => [
                                        'title' => '专辑内容List',
                                        'description' => '专辑内容List',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '专辑内容ID',
                                                    'description' => '专辑内容ID',
                                                    'type' => 'string',
                                                    'example' => '468009044',
                                                ],
                                                'Title' => [
                                                    'title' => '专辑内容标题',
                                                    'description' => '专辑内容标题',
                                                    'type' => 'string',
                                                    'example' => '001为什么肚子饿时会咕咕叫',
                                                ],
                                                'Duration' => [
                                                    'title' => '专辑内容时长',
                                                    'description' => '专辑内容时长',
                                                    'type' => 'string',
                                                    'example' => '3分24秒',
                                                ],
                                                'OrderIndex' => [
                                                    'title' => '专辑内容排序',
                                                    'description' => '专辑内容排序',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A0B7CACD-485B-14E2-854F-39EACB09E45B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'IdempotentParameterMismatch',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"AlbumId\\": \\"51999575\\",\\n    \\"AlbumTitle\\": \\"小科学家探索\\",\\n    \\"AlbumDescription\\": \\"每次一个百科知识或者故事\\\\\\\\n丰富孩子的视野，拓展眼界和知识面，培养和孩子的探究能力和好奇心\\\\\\\\n\\\\\\\\n\\",\\n    \\"AlbumCoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg\\",\\n    \\"AlbumContentList\\": [\\n      {\\n        \\"Id\\": \\"468009044\\",\\n        \\"Title\\": \\"001为什么肚子饿时会咕咕叫\\",\\n        \\"Duration\\": \\"3分24秒\\",\\n        \\"OrderIndex\\": \\"1000\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"A0B7CACD-485B-14E2-854F-39EACB09E45B\\"\\n}","type":"json"}]',
            'title' => '获取专辑信息',
        ],
        'GetUnreadMessageCount' => [
            'summary' => '查询用户的未读留言条数。',
            'path' => '/v1.0/ssp/getUnreadMessageCount',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
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
                        'description' => '服务返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '用户信息不存在',
                            ],
                            'Code' => [
                                'description' => '服务返回的状态码',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Result' => [
                                'description' => '未读留言条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"用户信息不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": 10\\n}","errorExample":""},{"type":"xml","example":"<GetUnreadMessageCountResponse>\\n    <Message>用户信息不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>10</Result>\\n</GetUnreadMessageCountResponse>","errorExample":""}]',
            'title' => '查询未读留言条数',
        ],
        'ListUserMessage' => [
            'summary' => '查询用户的留言消息列表，基于查询条件开始时间，查询条数返回结果。',
            'path' => '/v1.0/ssp/listUserMessage',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '某个时间点之后',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-07-27 14:06:55.984',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '服务返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '外部userId映射关系不存在',
                            ],
                            'Code' => [
                                'description' => '服务返回的状态码 SUCCESS为成功 否则均为失败',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Result' => [
                                'description' => '用户留言查询结果列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '留言详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '留言id',
                                            'type' => 'string',
                                            'example' => '123456',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '留言发出时间',
                                            'type' => 'string',
                                            'example' => '2022-07-27 14:06:27.000',
                                        ],
                                        'Status' => [
                                            'description' => '留言状态，0为未读，1为已读',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Source' => [
                                            'description' => '消息来源于app/box',
                                            'type' => 'string',
                                            'example' => 'app',
                                        ],
                                        'Type' => [
                                            'description' => '目前只有audio',
                                            'type' => 'string',
                                            'example' => 'audio',
                                        ],
                                        'Content' => [
                                            'description' => '留言文本',
                                            'type' => 'string',
                                            'example' => '哈哈哈',
                                        ],
                                        'Url' => [
                                            'description' => '留言音频链接',
                                            'type' => 'string',
                                            'example' => 'http://xx',
                                        ],
                                        'SourceUuid' => [
                                            'description' => '来源设备ID',
                                            'type' => 'string',
                                            'example' => 'AF188**065EE4B**DD68CE**951D84D4',
                                        ],
                                        'DeviceName' => [
                                            'description' => '设备名称',
                                            'type' => 'string',
                                            'example' => '卧室的小芳',
                                        ],
                                        'Pic' => [
                                            'description' => '设备图片',
                                            'type' => 'string',
                                            'example' => 'http://xx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": [\\n    {\\n      \\"Id\\": \\"123456\\",\\n      \\"GmtCreate\\": \\"2022-07-27 14:06:27.000\\",\\n      \\"Status\\": 0,\\n      \\"Source\\": \\"app\\",\\n      \\"Type\\": \\"audio\\",\\n      \\"Content\\": \\"哈哈哈\\",\\n      \\"Url\\": \\"http://xx\\",\\n      \\"SourceUuid\\": \\"AF188**065EE4B**DD68CE**951D84D4\\",\\n      \\"DeviceName\\": \\"卧室的小芳\\",\\n      \\"Pic\\": \\"http://xx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUserMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>\\n        <Id>123456</Id>\\n        <GmtCreate>2022-07-27 14:06:27.000</GmtCreate>\\n        <Status>0</Status>\\n        <Source>app</Source>\\n        <Type>audio</Type>\\n        <Content>哈哈哈</Content>\\n        <Url>http://xx</Url>\\n        <SourceUuid>AF188**065EE4B**DD68CE**951D84D4</SourceUuid>\\n        <DeviceName>卧室的小芳</DeviceName>\\n        <Pic>http://xx</Pic>\\n    </Result>\\n</ListUserMessageResponse>","errorExample":""}]',
            'title' => '查询用户留言消息列表',
        ],
        'ReadMessage' => [
            'summary' => '将某一条留言设置为已读状态。',
            'path' => '/v1.0/ssp/readMessage',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '	'."\n"
                                    .'用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123L',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '留言id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '服务返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '外部userId映射关系不存在',
                            ],
                            'Code' => [
                                'description' => '服务返回的状态码，只有SUCCESS为成功，否则均为失败',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Result' => [
                                'description' => '已读成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<ReadMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>true</Result>\\n</ReadMessageResponse>","errorExample":""}]',
            'title' => '已读一条留言',
        ],
        'SendMessage' => [
            'summary' => '发送一条留言。',
            'path' => '/v1.0/ssp/sendMessage',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'description' => '留言url',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://xx',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PROJECT_ID',
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123L',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
                                'description' => '	'."\n"
                                    .'用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123L',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '服务返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误信息，存在即发送失败',
                                'type' => 'string',
                                'example' => '外部userId映射关系不存在',
                            ],
                            'Code' => [
                                'description' => '服务返回的状态码，SUCCESS为成功，否则均为失败',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Result' => [
                                'description' => '留言发送结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SendMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>true</Result>\\n</SendMessageResponse>","errorExample":""}]',
            'title' => '发送留言',
        ],
        'CreateAlarm' => [
            'summary' => '创建一个闹钟，支持单次、每周、法定工作日三种类型。',
            'path' => '/v1.0/ssp/createAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'ScheduleInfo' => [
                                'title' => '调度信息',
                                'description' => '调度信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'title' => '调度类型/循环类型',
                                        'description' => '调度类型/循环类型：'."\n"
                                            .'ONCE -> 单次，WEEKLY -> 周循环，STATUTORY_WORKING_DAY ->法定工作日',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'ONCE',
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_WORKING_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'title' => '单次',
                                        'description' => '单次：：循环类型为ONCE时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'Year' => [
                                                'title' => '触发时间：年',
                                                'description' => '触发时间：年',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '2022',
                                            ],
                                            'Month' => [
                                                'title' => '触发时间：月',
                                                'description' => '触发时间：月',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '8',
                                            ],
                                            'Day' => [
                                                'title' => '触发时间：日',
                                                'description' => '触发时间：日',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Weekly' => [
                                        'title' => '周循环',
                                        'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'title' => '周几触发集合',
                                                'description' => '周几触发集合',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '1',
                                                ],
                                                'required' => false,
                                            ],
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'StatutoryWorkingDay' => [
                                        'title' => '法定工作日',
                                        'description' => '法定工作日：循环类型为STATUTORY_WORKING_DAY时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'MusicInfo' => [
                                'title' => '音乐信息',
                                'description' => '铃声信息',
                                'type' => 'object',
                                'properties' => [
                                    'MusicType' => [
                                        'title' => '音乐类别id',
                                        'description' => '铃声类别id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1',
                                    ],
                                    'MusicTypeName' => [
                                        'title' => '音乐类别名称',
                                        'description' => '铃声类别名称',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'xx音乐',
                                    ],
                                    'MusicId' => [
                                        'title' => '音乐id',
                                        'description' => '铃声id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1',
                                    ],
                                    'MusicName' => [
                                        'title' => '音乐名称',
                                        'description' => '铃声名称',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'xx铃声',
                                    ],
                                    'MusicUrl' => [
                                        'title' => '音乐url',
                                        'description' => '铃声url',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'http://xx',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'Volume' => [
                                'title' => '音乐信息',
                                'description' => '铃声音量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '40',
                                'default' => '40',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求结果状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'xx为空',
                            ],
                            'Result' => [
                                'description' => '闹钟id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1234567',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Result\\": 1234567,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAlarmResponse>\\n    <Code>200</Code>\\n    <Message>xx为空</Message>\\n    <Result>1234567</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</CreateAlarmResponse>","errorExample":""}]',
            'title' => '创建闹钟',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'DeleteAlarms' => [
            'summary' => '删除闹钟，可以同时删除多个。',
            'path' => '/v1.0/ssp/deleteAlarms',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlarmIds' => [
                                'title' => '待删除闹钟',
                                'description' => '待删除闹钟',
                                'type' => 'array',
                                'format' => 'int64',
                                'items' => [
                                    'description' => '删除的闹总id集合',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '1234567',
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '闹钟id为空',
                            ],
                            'Result' => [
                                'description' => '删除闹钟是否执行成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"闹钟id为空\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAlarmsResponse>\\n    <Code>200</Code>\\n    <Message>闹钟id为空</Message>\\n    <Result>true</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</DeleteAlarmsResponse>","errorExample":""}]',
            'title' => '批量删除闹钟',
            'responseParamsDescription' => '仅请求返回的状态码为200时为成功，否则均为失败',
        ],
        'GetAlarm' => [
            'summary' => '获取某一个闹钟详细信息。',
            'path' => '/v1.0/ssp/getAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlarmId' => [
                                'description' => '闹钟id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1234567',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'id为空',
                            ],
                            'Result' => [
                                'title' => '模型数据',
                                'description' => '闹钟详情',
                                'type' => 'object',
                                'properties' => [
                                    'AlarmId' => [
                                        'title' => '闹钟id',
                                        'description' => '闹钟id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234567',
                                    ],
                                    'ScheduleTypeDesc' => [
                                        'title' => '循环类型描述',
                                        'description' => '循环类型中文描述',
                                        'type' => 'string',
                                        'example' => '单次',
                                    ],
                                    'TriggerDateDesc' => [
                                        'title' => '触发日期描述（单次）',
                                        'description' => '触发日期描述（单次）',
                                        'type' => 'string',
                                        'example' => '2022-07-29',
                                    ],
                                    'TriggerTimeDesc' => [
                                        'title' => '触发时间描述',
                                        'description' => '触发时间描述',
                                        'type' => 'string',
                                        'example' => '10:00',
                                    ],
                                    'ScheduleInfo' => [
                                        'title' => '调度信息',
                                        'description' => '调度信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'title' => '循环类型',
                                                'description' => '调度类型/循环类型： ONCE -> 单次，WEEKLY -> 周循环，STATUTORYWORKINGDAY ->法定工作日',
                                                'type' => 'string',
                                                'example' => 'ONCE',
                                                'enum' => [
                                                    'ONCE',
                                                    'WEEKLY',
                                                    'STATUTORY_WORKING_DAY',
                                                ],
                                            ],
                                            'Once' => [
                                                'title' => '单次',
                                                'description' => '单次：：循环类型为ONCE时，该属性可用',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Year' => [
                                                        'title' => '触发时间：年',
                                                        'description' => '触发时间：年',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2022',
                                                    ],
                                                    'Month' => [
                                                        'title' => '触发时间：月',
                                                        'description' => '触发时间：月',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '7',
                                                    ],
                                                    'Day' => [
                                                        'title' => '触发时间：日',
                                                        'description' => '触发时间：日',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '29',
                                                    ],
                                                    'Hour' => [
                                                        'title' => '触发时间：时',
                                                        'description' => '触发时间：时',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10',
                                                    ],
                                                    'Minute' => [
                                                        'title' => '触发时间：分',
                                                        'description' => '触发时间：分',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                ],
                                            ],
                                            'StatutoryWorkingDay' => [
                                                'title' => '法定工作日',
                                                'description' => '法定工作日：循环类型为STATUTORYWORKINGDAY时，该属性可用',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Hour' => [
                                                        'title' => '触发时间：时',
                                                        'description' => '触发时间：时',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10',
                                                    ],
                                                    'Minute' => [
                                                        'title' => '触发时间：分',
                                                        'description' => '触发时间：分',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                ],
                                            ],
                                            'Weekly' => [
                                                'title' => '周循环',
                                                'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Hour' => [
                                                        'title' => '触发时间：时',
                                                        'description' => '触发时间：时',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10',
                                                    ],
                                                    'Minute' => [
                                                        'title' => '触发时间：分'."\n",
                                                        'description' => '触发时间：分'."\n",
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'DaysOfWeek' => [
                                                        'title' => '周几触发集合',
                                                        'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '周一',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MusicInfo' => [
                                        'title' => '音乐信息',
                                        'description' => '铃声信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'MusicType' => [
                                                'title' => '音乐类别id',
                                                'description' => '铃声类别id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1',
                                            ],
                                            'MusicTypeName' => [
                                                'title' => '音乐类别名称',
                                                'description' => '铃声类别名称',
                                                'type' => 'string',
                                                'example' => 'xx音乐',
                                            ],
                                            'MusicId' => [
                                                'title' => '音乐id',
                                                'description' => '铃声id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1',
                                            ],
                                            'MusicName' => [
                                                'title' => '音乐名称',
                                                'description' => '铃声名称',
                                                'type' => 'string',
                                                'example' => 'xx铃声',
                                            ],
                                            'MusicUrl' => [
                                                'title' => '音乐url',
                                                'description' => '铃声url',
                                                'type' => 'string',
                                                'example' => 'http://xx',
                                            ],
                                        ],
                                    ],
                                    'Volume' => [
                                        'title' => '音量',
                                        'description' => '铃声音量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '40',
                                    ],
                                    'Status' => [
                                        'title' => '状态 0 正常 1 删除 2 关闭',
                                        'description' => '状态 0 正常 1 删除 2 关闭',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"id为空\\",\\n  \\"Result\\": {\\n    \\"AlarmId\\": 1234567,\\n    \\"UserId\\": 123454321,\\n    \\"Uuid\\": \\"AF18***065EE4BD***68CEFD9***84D4\\",\\n    \\"ScheduleTypeDesc\\": \\"单次\\",\\n    \\"TriggerDateDesc\\": \\"2022-07-29\\",\\n    \\"TriggerTimeDesc\\": \\"10:00\\",\\n    \\"ScheduleInfo\\": {\\n      \\"Type\\": \\"ONCE\\",\\n      \\"Once\\": {\\n        \\"Year\\": 2022,\\n        \\"Month\\": 7,\\n        \\"Day\\": 29,\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0\\n      },\\n      \\"StatutoryWorkingDay\\": {\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0\\n      },\\n      \\"Weekly\\": {\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0,\\n        \\"DaysOfWeek\\": [\\n          1\\n        ]\\n      }\\n    },\\n    \\"MusicInfo\\": {\\n      \\"MusicType\\": 1,\\n      \\"MusicTypeName\\": \\"xx音乐\\",\\n      \\"MusicId\\": 1,\\n      \\"MusicName\\": \\"xx铃声\\",\\n      \\"MusicUrl\\": \\"http://xx\\"\\n    },\\n    \\"Volume\\": 40,\\n    \\"Status\\": 0\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAlarmResponse>\\n    <Code>200</Code>\\n    <Message>id为空</Message>\\n    <Result>\\n        <AlarmId>1234567</AlarmId>\\n        <UserId>123454321</UserId>\\n        <Uuid>AF18***065EE4BD***68CEFD9***84D4</Uuid>\\n        <ScheduleTypeDesc>单次</ScheduleTypeDesc>\\n        <TriggerDateDesc>2022-07-29</TriggerDateDesc>\\n        <TriggerTimeDesc>10:00</TriggerTimeDesc>\\n        <ScheduleInfo>\\n            <Type>ONCE</Type>\\n            <Once>\\n                <Year>2022</Year>\\n                <Month>7</Month>\\n                <Day>29</Day>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n            </Once>\\n            <StatutoryWorkingDay>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n            </StatutoryWorkingDay>\\n            <Weekly>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n                <DaysOfWeek>1</DaysOfWeek>\\n            </Weekly>\\n        </ScheduleInfo>\\n        <MusicInfo>\\n            <MusicType>1</MusicType>\\n            <MusicTypeName>xx音乐</MusicTypeName>\\n            <MusicId>1</MusicId>\\n            <MusicName>xx铃声</MusicName>\\n            <MusicUrl>http://xx</MusicUrl>\\n        </MusicInfo>\\n        <Volume>40</Volume>\\n        <Status>0</Status>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</GetAlarmResponse>","errorExample":""}]',
            'title' => '获取单个闹钟详情',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'ListAlarms' => [
            'summary' => '查询设备某一个用户的闹钟列表，分页查询。',
            'path' => '/v1.0/ssp/listAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页条数',
                                'description' => '每页条数 ：最大值100',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                                'default' => '10',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '设备账号未关联',
                            ],
                            'Result' => [
                                'description' => '闹钟列表结果集合',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '总条数',
                                        'description' => '总条数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageCount' => [
                                        'title' => '总页数',
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页条数',
                                        'description' => '每页条数：最大100，超过100按100处理',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'CurrentPage' => [
                                        'title' => '当前页',
                                        'description' => '当前页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Model' => [
                                        'title' => '闹钟列表',
                                        'description' => '闹钟列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '闹钟详情',
                                            'type' => 'object',
                                            'properties' => [
                                                'AlarmId' => [
                                                    'title' => '闹钟id',
                                                    'description' => '闹钟id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1234567',
                                                ],
                                                'ScheduleTypeDesc' => [
                                                    'title' => '循环类型描述',
                                                    'description' => '循环类型中文描述',
                                                    'type' => 'string',
                                                    'example' => '单次',
                                                ],
                                                'TriggerDateDesc' => [
                                                    'title' => '触发日期描述（单次）',
                                                    'description' => '触发日期描述（单次）',
                                                    'type' => 'string',
                                                    'example' => '2022-07-29',
                                                ],
                                                'TriggerTimeDesc' => [
                                                    'title' => '触发时间描述',
                                                    'description' => '触发时间描述',
                                                    'type' => 'string',
                                                    'example' => '10:00',
                                                ],
                                                'ScheduleInfo' => [
                                                    'title' => '调度信息',
                                                    'description' => '调度信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'title' => '循环类型',
                                                            'description' => '调度类型/循环类型： ONCE -> 单次，WEEKLY -> 周循环，STATUTORYWORKINGDAY ->法定工作日',
                                                            'type' => 'string',
                                                            'example' => 'ONCE',
                                                            'enum' => [
                                                                'ONCE',
                                                                'WEEKLY',
                                                                'STATUTORY_WORKING_DAY',
                                                            ],
                                                        ],
                                                        'Once' => [
                                                            'title' => '单次',
                                                            'description' => '单次：：循环类型为ONCE时，该属性可用',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Year' => [
                                                                    'title' => '触发时间：年',
                                                                    'description' => '触发时间：年',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '2022',
                                                                ],
                                                                'Month' => [
                                                                    'title' => '触发时间：月',
                                                                    'description' => '触发时间：月',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '7',
                                                                ],
                                                                'Day' => [
                                                                    'title' => '触发时间：日',
                                                                    'description' => '触发时间：日',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '29',
                                                                ],
                                                                'Hour' => [
                                                                    'title' => '触发时间：时',
                                                                    'description' => '触发时间：时',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '10',
                                                                ],
                                                                'Minute' => [
                                                                    'title' => '触发时间：分',
                                                                    'description' => '触发时间：分',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '0',
                                                                ],
                                                            ],
                                                        ],
                                                        'Weekly' => [
                                                            'title' => '周循环',
                                                            'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Hour' => [
                                                                    'title' => '触发时间：时',
                                                                    'description' => '触发时间：时',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '10',
                                                                ],
                                                                'Minute' => [
                                                                    'title' => '触发时间：分',
                                                                    'description' => '触发时间：分',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '0',
                                                                ],
                                                                'DaysOfWeek' => [
                                                                    'title' => '周几触发集合',
                                                                    'description' => '周几触发集合',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'StatutoryWorkingDay' => [
                                                            'title' => '法定工作日',
                                                            'description' => '法定工作日：循环类型为STATUTORYWORKINGDAY时，该属性可用',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Hour' => [
                                                                    'title' => '触发时间：时',
                                                                    'description' => '触发时间：时',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '10',
                                                                ],
                                                                'Minute' => [
                                                                    'title' => '触发时间：分',
                                                                    'description' => '触发时间：分',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '0',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'MusicInfo' => [
                                                    'title' => '音乐信息',
                                                    'description' => '音乐信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'MusicType' => [
                                                            'title' => '音乐类别id',
                                                            'description' => '铃声类别id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'MusicTypeName' => [
                                                            'title' => '音乐类别名称',
                                                            'description' => '铃声类别名称',
                                                            'type' => 'string',
                                                            'example' => 'xx音乐',
                                                        ],
                                                        'MusicId' => [
                                                            'title' => '音乐id',
                                                            'description' => '铃声id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'MusicName' => [
                                                            'title' => '音乐名称',
                                                            'description' => '铃声名称',
                                                            'type' => 'string',
                                                            'example' => 'xx铃声',
                                                        ],
                                                        'MusicUrl' => [
                                                            'title' => '音乐url',
                                                            'description' => '音乐url',
                                                            'type' => 'string',
                                                            'example' => 'http://xx',
                                                        ],
                                                    ],
                                                ],
                                                'Volume' => [
                                                    'title' => '音量',
                                                    'description' => '铃声音量，默认40',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '40',
                                                ],
                                                'Status' => [
                                                    'title' => '状态 0 正常 1 删除 2 关闭',
                                                    'description' => '状态 0 正常 1 删除 2 关闭',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"设备账号未关联\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageCount\\": 10,\\n    \\"PageSize\\": 10,\\n    \\"CurrentPage\\": 1,\\n    \\"Model\\": [\\n      {\\n        \\"AlarmId\\": 1234567,\\n        \\"UserId\\": 1234321,\\n        \\"Uuid\\": \\"AF18***065EE4BD***68CEFD9***84D4\\",\\n        \\"ScheduleTypeDesc\\": \\"单次\\",\\n        \\"TriggerDateDesc\\": \\"2022-07-29\\",\\n        \\"TriggerTimeDesc\\": \\"10:00\\",\\n        \\"ScheduleInfo\\": {\\n          \\"Type\\": \\"ONCE\\",\\n          \\"Once\\": {\\n            \\"Year\\": 2022,\\n            \\"Month\\": 7,\\n            \\"Day\\": 29,\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0\\n          },\\n          \\"Weekly\\": {\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0,\\n            \\"DaysOfWeek\\": [\\n              1\\n            ]\\n          },\\n          \\"StatutoryWorkingDay\\": {\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0\\n          }\\n        },\\n        \\"MusicInfo\\": {\\n          \\"MusicType\\": 1,\\n          \\"MusicTypeName\\": \\"xx音乐\\",\\n          \\"MusicId\\": 1,\\n          \\"MusicName\\": \\"xx铃声\\",\\n          \\"MusicUrl\\": \\"http://xx\\"\\n        },\\n        \\"Volume\\": 40,\\n        \\"Status\\": 0\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAlarmsResponse>\\n    <Code>200</Code>\\n    <Message>设备账号未关联</Message>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageCount>10</PageCount>\\n        <PageSize>10</PageSize>\\n        <CurrentPage>1</CurrentPage>\\n        <Model>\\n            <AlarmId>1234567</AlarmId>\\n            <UserId>1234321</UserId>\\n            <Uuid>AF18***065EE4BD***68CEFD9***84D4</Uuid>\\n            <ScheduleTypeDesc>单次</ScheduleTypeDesc>\\n            <TriggerDateDesc>2022-07-29</TriggerDateDesc>\\n            <TriggerTimeDesc>10:00</TriggerTimeDesc>\\n            <ScheduleInfo>\\n                <Type>ONCE</Type>\\n                <Once>\\n                    <Year>2022</Year>\\n                    <Month>7</Month>\\n                    <Day>29</Day>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                </Once>\\n                <Weekly>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                    <DaysOfWeek>1</DaysOfWeek>\\n                </Weekly>\\n                <StatutoryWorkingDay>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                </StatutoryWorkingDay>\\n            </ScheduleInfo>\\n            <MusicInfo>\\n                <MusicType>1</MusicType>\\n                <MusicTypeName>xx音乐</MusicTypeName>\\n                <MusicId>1</MusicId>\\n                <MusicName>xx铃声</MusicName>\\n                <MusicUrl>http://xx</MusicUrl>\\n            </MusicInfo>\\n            <Volume>40</Volume>\\n            <Status>0</Status>\\n        </Model>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</ListAlarmsResponse>","errorExample":""}]',
            'title' => '查询闹钟列表',
            'responseParamsDescription' => '1.仅请求返回的状态码为200时为成功，否则均为失败'."\n"
                .'2.分页返回参数与实际列表数不符合，这里仅为展示',
        ],
        'ListMusic' => [
            'summary' => '基于音乐类型查询该类型下的铃声列表。',
            'path' => '/v1.0/ssp/listMusic',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MusicType' => [
                                'title' => '音乐类别id',
                                'description' => '铃声类别id，由queryMusicType接口返回',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1',
                            ],
                            'MusicTypeName' => [
                                'title' => '音乐类别名称',
                                'description' => '铃声类别名称，由queryMusicType接口返回',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'xx音乐',
                            ],
                            'MusicId' => [
                                'title' => '音乐id',
                                'description' => '铃声id，扩展字段，暂不用传',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'MusicName' => [
                                'title' => '音乐名称',
                                'description' => '铃声名称，扩展字段，暂不用传',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xx铃声',
                            ],
                            'CurrentPage' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页条数',
                                'description' => '每页条数：最大值100',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                                'default' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '音乐类型名称为空',
                            ],
                            'Result' => [
                                'description' => '铃声查询结果集合',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '总条数',
                                        'description' => '总条数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageCount' => [
                                        'title' => '总页数',
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页条数',
                                        'description' => '每页条数:最大值100，超过100按100处理',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'CurrentPage' => [
                                        'title' => '当前页',
                                        'description' => '当前页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Model' => [
                                        'title' => '铃声列表',
                                        'description' => '铃声列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '铃声信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'MusicType' => [
                                                    'title' => '音乐类别id',
                                                    'description' => '铃声类别id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'MusicTypeName' => [
                                                    'title' => '音乐类别名称',
                                                    'description' => '铃声类别名称',
                                                    'type' => 'string',
                                                    'example' => 'xx',
                                                ],
                                                'MusicId' => [
                                                    'title' => '音乐id',
                                                    'description' => '铃声id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'MusicName' => [
                                                    'title' => '音乐名称',
                                                    'description' => '铃声名称',
                                                    'type' => 'string',
                                                    'example' => 'xx',
                                                ],
                                                'MusicUrl' => [
                                                    'title' => '音乐url',
                                                    'description' => '铃声url',
                                                    'type' => 'string',
                                                    'example' => 'http://xx',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"音乐类型名称为空\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageCount\\": 10,\\n    \\"PageSize\\": 10,\\n    \\"CurrentPage\\": 1,\\n    \\"Model\\": [\\n      {\\n        \\"MusicType\\": 1,\\n        \\"MusicTypeName\\": \\"xx\\",\\n        \\"MusicId\\": 1,\\n        \\"MusicName\\": \\"xx\\",\\n        \\"MusicUrl\\": \\"http://xx\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<ListMusicResponse>\\n    <Code>200</Code>\\n    <Message>音乐类型名称为空</Message>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageCount>10</PageCount>\\n        <PageSize>10</PageSize>\\n        <CurrentPage>1</CurrentPage>\\n        <Model>\\n            <MusicType>1</MusicType>\\n            <MusicTypeName>xx</MusicTypeName>\\n            <MusicId>1</MusicId>\\n            <MusicName>xx</MusicName>\\n            <MusicUrl>http://xx</MusicUrl>\\n        </Model>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</ListMusicResponse>","errorExample":""}]',
            'title' => '查询铃声分页列表',
            'responseParamsDescription' => '仅请求返回的状态码为200时为成功，否则均为失败',
        ],
        'QueryMusicType' => [
            'summary' => '获取设备支持的闹钟音乐类型集合。',
            'path' => '/v1.0/ssp/queryMusicType',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '设备账号未关联',
                            ],
                            'Result' => [
                                'description' => '铃声类型列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '铃声类型详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'MusicType' => [
                                            'title' => '铃声类型id',
                                            'description' => '铃声类型id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'MusicTypeName' => [
                                            'title' => 'musicTypeName',
                                            'description' => '铃声类别名称',
                                            'type' => 'string',
                                            'example' => 'xx',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"设备账号未关联\\",\\n  \\"Result\\": [\\n    {\\n      \\"MusicType\\": 1,\\n      \\"MusicTypeName\\": \\"xx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryMusicTypeResponse>\\n    <Code>200</Code>\\n    <Message>设备账号未关联</Message>\\n    <Result>\\n        <MusicType>1</MusicType>\\n        <MusicTypeName>xx</MusicTypeName>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</QueryMusicTypeResponse>","errorExample":""}]',
            'title' => '获取闹钟音乐类型列表',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'UpdateAlarm' => [
            'summary' => '更新闹钟，可以更新触发时间、循环类型、音乐。',
            'path' => '/v1.0/ssp/updateAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'ScheduleInfo' => [
                                'title' => '调度信息',
                                'description' => '调度信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'title' => '调度类型/循环类型',
                                        'description' => '调度类型/循环类型：'."\n"
                                            .'ONCE -> 单次，WEEKLY -> 周循环，STATUTORY_WORKING_DAY ->法定工作日',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'WEEKLY',
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_WORKING_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'title' => '单次',
                                        'description' => '单次：：循环类型为ONCE时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'Year' => [
                                                'title' => '触发时间：年',
                                                'description' => '触发时间：年',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '2022',
                                            ],
                                            'Month' => [
                                                'title' => '触发时间：月',
                                                'description' => '触发时间：月',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '8',
                                            ],
                                            'Day' => [
                                                'title' => '触发时间：日',
                                                'description' => '触发时间：日',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Weekly' => [
                                        'title' => '周循环',
                                        'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'title' => '周几触发集合',
                                                'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '周一',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '1',
                                                ],
                                                'required' => false,
                                            ],
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'StatutoryWorkingDay' => [
                                        'title' => '法定工作日',
                                        'description' => '法定工作日：循环类型为STATUTORY_WORKING_DAY时，该属性可用',
                                        'type' => 'object',
                                        'properties' => [
                                            'Hour' => [
                                                'title' => '触发时间：时',
                                                'description' => '触发时间：时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '10',
                                            ],
                                            'Minute' => [
                                                'title' => '触发时间：分',
                                                'description' => '触发时间：分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '0',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'MusicInfo' => [
                                'title' => '音乐信息',
                                'description' => '铃声信息',
                                'type' => 'object',
                                'properties' => [
                                    'MusicType' => [
                                        'title' => '音乐类别id',
                                        'description' => '铃声类别id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '12',
                                    ],
                                    'MusicTypeName' => [
                                        'title' => '音乐类别名称',
                                        'description' => '铃声类别名称',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'xx音乐',
                                    ],
                                    'MusicId' => [
                                        'title' => '音乐id',
                                        'description' => '铃声id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '2',
                                    ],
                                    'MusicName' => [
                                        'title' => '音乐名称',
                                        'description' => '铃声名称',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'xx铃声',
                                    ],
                                    'MusicUrl' => [
                                        'title' => '音乐url',
                                        'description' => '铃声url',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'http://music-url.mp3',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'AlarmId' => [
                                'title' => '闹钟id',
                                'description' => '闹钟id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1234567',
                            ],
                            'Volume' => [
                                'title' => '音量',
                                'description' => '铃声音量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '40',
                                'default' => '40',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult',
                        'description' => 'AmpResult',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '闹钟服务返回的状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'xx为空',
                            ],
                            'Result' => [
                                'description' => '更新结果是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAlarmResponse>\\n    <Code>200</Code>\\n    <Message>xx为空</Message>\\n    <Result>true</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</UpdateAlarmResponse>","errorExample":""}]',
            'title' => '更新闹钟',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'CreateScheduleTask' => [
            'summary' => '创建定时任务。',
            'path' => '/v1.0/ssp/CreateScheduleTask',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'IdempotentId' => [
                                'title' => '幂等id',
                                'description' => '幂等id',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'title' => '用户id',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'type' => 'string',
                            ],
                            'ScheduleDTO' => [
                                'title' => '调度信息',
                                'description' => '调度信息',
                                'type' => 'object',
                                'properties' => [
                                    'ScheduleType' => [
                                        'title' => '调度类型',
                                        'description' => '调度类型',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'ONCE',
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'title' => '单次调度配置',
                                        'description' => '单次调度配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'Year' => [
                                                'title' => '触发年',
                                                'description' => '触发年',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '2022',
                                            ],
                                            'Month' => [
                                                'title' => '触发月',
                                                'description' => '触发月',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '7',
                                            ],
                                            'Day' => [
                                                'title' => '触发日',
                                                'description' => '触发日',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '26',
                                            ],
                                            'Hour' => [
                                                'title' => '触发时',
                                                'description' => '触发时',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '12',
                                            ],
                                            'Minute' => [
                                                'title' => '触发分',
                                                'description' => '触发分',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '30',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Weekly' => [
                                        'title' => '循环调度配置',
                                        'description' => '循环调度配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'title' => '触发星期，1-7分别代表周一到周日',
                                                'description' => '触发星期，1-7分别代表周一到周日',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '7',
                                                ],
                                                'required' => false,
                                            ],
                                            'Hours' => [
                                                'title' => '触发时',
                                                'description' => '触发时',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '12',
                                                ],
                                                'required' => false,
                                            ],
                                            'Minutes' => [
                                                'title' => '触发分',
                                                'description' => '触发分',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '30',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'StatutoryWorkingDay' => [
                                        'title' => '法定工作日调度配置',
                                        'description' => '法定工作日调度配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'Hours' => [
                                                'title' => '触发时，可多选',
                                                'description' => '触发时，可多选',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '12',
                                                ],
                                                'required' => false,
                                            ],
                                            'Minutes' => [
                                                'title' => '触发分，可多选',
                                                'description' => '触发分，可多选',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '30',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'ScheduleStartTime' => [
                                        'title' => '调度开始时间',
                                        'description' => '调度开始时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1656318855000',
                                    ],
                                    'ScheduleEndTime' => [
                                        'title' => '调度结束时间',
                                        'description' => '调度结束时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1661589255000',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'ActionDTOs' => [
                                'title' => '调度行动参数',
                                'description' => '调度行动参数',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'customAction' => [
                                            'description' => '厂商自定义命令',
                                            'type' => 'object',
                                            'required' => false,
                                            'example' => '{"k1":"v1","k2":{"key":1}}',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方ak',
                                'type' => 'string',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult<Long>',
                        'description' => 'AmpResult<Long>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '调用成功',
                            ],
                            'Result' => [
                                'description' => '创建成功的任务id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1234567',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Result\\": 1234567,\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <Result>1234567</Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</CreateScheduleTaskResponse>","errorExample":""}]',
            'title' => '创建定时任务',
            'description' => '根据单次、每日、法定工作日等定时规则，配置生态inside自定义指令数据的触发任务',
            'responseParamsDescription' => '    仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'DeleteScheduleTask' => [
            'summary' => '删除定时任务。',
            'path' => '/v1.0/ssp/DeleteScheduleTask',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '待删除的调度id',
                                'description' => '待删除的任务id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1234567',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'title' => '用户id',
                                'type' => 'string',
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方ak',
                                'type' => 'string',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult<Boolean>',
                        'description' => 'AmpResult<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '错误码',
                                'description' => '响应码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '调用成功',
                            ],
                            'Result' => [
                                'title' => '删除结果',
                                'description' => '响应结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <Result>true</Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</DeleteScheduleTaskResponse>","errorExample":""}]',
            'title' => '删除定时任务',
            'description' => '根据定时任务id，删除指定定时任务',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'GetScheduleTask' => [
            'summary' => '获取定时任务信息。',
            'path' => '/v1.0/ssp/GetScheduleTask',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '待查询的调度id',
                                'description' => '待查询的任务id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1234567',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'title' => '用户id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方ak',
                                'type' => 'string',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPENID：默认的用户ID标识-UNIONID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGENAME：apk包名，Android应用客户链路的编码类型-SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的SkillID；编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPENID：默认的设备ID标识-UNIONID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGENAME：apk包名，Android应用客户链路的编码类型-SKILLID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的SkillID；编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult<ScheduleOpenResponse>',
                        'description' => 'AmpResult<ScheduleOpenResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '错误码',
                                'description' => '响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '调用成功',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F7E21065-6C21-1158-A2F9-AEFE5CAB7C94',
                            ],
                            'Result' => [
                                'title' => '服务响应出参',
                                'description' => '服务响应出参',
                                'type' => 'object',
                                'properties' => [
                                    'ScheduleId' => [
                                        'title' => '调度id',
                                        'description' => '任务id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234567',
                                    ],
                                    'ScheduleType' => [
                                        'title' => '调度类型',
                                        'description' => '调度类型',
                                        'type' => 'string',
                                        'example' => 'ONCE',
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_DAY',
                                        ],
                                    ],
                                    'Cron' => [
                                        'title' => '触发cron表达式',
                                        'description' => '触发cron表达式',
                                        'type' => 'string',
                                        'example' => '0 10 20 30 6 ? 2022',
                                    ],
                                    'ScheduleStartTime' => [
                                        'description' => '调度有效期-开始时间',
                                        'type' => 'string',
                                        'example' => '1656577473000',
                                    ],
                                    'ScheduleEndTime' => [
                                        'description' => '调度有效期-结束时间',
                                        'type' => 'string',
                                        'example' => '1659169473000',
                                    ],
                                    'ActionTopicList' => [
                                        'description' => '触发行为',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CustomAction' => [
                                                    'description' => '厂商自定义命令',
                                                    'type' => 'object',
                                                    'example' => '{"k1":"v1","k2":{"key":1}}',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"调用成功\\",\\n  \\"RequestId\\": \\"F7E21065-6C21-1158-A2F9-AEFE5CAB7C94\\",\\n  \\"Result\\": {\\n    \\"ScheduleId\\": 1234567,\\n    \\"ScheduleType\\": \\"ONCE\\",\\n    \\"Cron\\": \\"0 10 20 30 6 ? 2022\\",\\n    \\"ScheduleStartTime\\": \\"1656577473000\\",\\n    \\"ScheduleEndTime\\": \\"1659169473000\\",\\n    \\"ActionTopicList\\": [\\n      {\\n        \\"CustomAction\\": {\\n          \\"k1\\": \\"v1\\",\\n          \\"k2\\": {\\n            \\"key\\": 1\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <RequestId>F7E21065-6C21-1158-A2F9-AEFE5CAB7C94</RequestId>\\n    <Result>\\n        <Uuid>362*****8C1</Uuid>\\n        <ScheduleId>1234567</ScheduleId>\\n        <ScheduleType>ONCE</ScheduleType>\\n        <Cron>0 10 20 30 6 ? 2022</Cron>\\n        <ScheduleStartTime>1656577473000</ScheduleStartTime>\\n        <ScheduleEndTime>1659169473000</ScheduleEndTime>\\n        <ActionTopicList/>\\n    </Result>\\n</GetScheduleTaskResponse>","errorExample":""}]',
            'title' => '获取定时任务信息',
            'description' => '根据定时任务id，查询指定定时任务数据详情',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
        'GetWeather' => [
            'summary' => '查询天气。',
            'path' => '/v1.0/ssp/GetWeather',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'title' => '用户id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AccessKeyId' => [
                                'title' => '调用方ak',
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                        'docRequired' => false,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识（userOpenId或userUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AmpResult<WeatherResponse>',
                        'description' => 'AmpResult<WeatherResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '调用成功',
                            ],
                            'Code' => [
                                'title' => 'HttpCode',
                                'description' => 'HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '模型数据',
                                'description' => '模型数据',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentMeteorology' => [
                                        'title' => '当前天气',
                                        'description' => '当前天气',
                                        'type' => 'object',
                                        'properties' => [
                                            'Weather' => [
                                                'title' => '白天天气',
                                                'description' => '白天天气',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Code' => [
                                                        'title' => '天气编号: 形如："000,100"',
                                                        'description' => '天气编号: 形如："000,100"',
                                                        'type' => 'string',
                                                        'example' => '000',
                                                    ],
                                                    'Name' => [
                                                        'title' => '天气名称描述: "晴(000),多云(100)"',
                                                        'description' => '天气名称描述: "晴(000), 多云(100), 阴(101), 雨(200), 小雨(201), 小到中雨(202), 中雨(203), 中到大雨(204), 大雨(205), 大到暴雨(206), 暴雨(207), 大暴雨(209), 特大暴雨(211), 阵雨(212), 雷阵雨(213), 冻雨(214), 雪(300), 雨夹雪(301), 阵雪(302), 小雪(303), 小到中雪(304), 中雪(305), 大雪(307), 暴雪(309), 雾(400), 浮尘(501), 扬沙(502), 沙尘暴(503), 强沙尘暴(504), 大部晴朗(000), 少云(100), 小阵雨(212), 雷电(213), 冰粒(214), 雷阵雨伴有冰雹(215), 小阵雪(302), 冻雾(400), 霾(500), 尘卷风(502), 局部阵雨(212), 雷暴(213), 冰针(214), 冰雹(215), 强阵雨(212)"',
                                                        'type' => 'string',
                                                        'example' => '晴',
                                                    ],
                                                ],
                                            ],
                                            'Temperature' => [
                                                'title' => '温度',
                                                'description' => '温度',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Current' => [
                                                        'title' => '当前温度气温值',
                                                        'description' => '当前温度气温值',
                                                        'type' => 'string',
                                                        'example' => '36',
                                                    ],
                                                    'CurrentDesc' => [
                                                        'title' => '当前温度气温值描述',
                                                        'description' => '当前温度气温值描述',
                                                        'type' => 'string',
                                                        'example' => '36度',
                                                    ],
                                                    'High' => [
                                                        'title' => '气温最高值',
                                                        'description' => '气温最高值',
                                                        'type' => 'string',
                                                        'example' => '37',
                                                    ],
                                                    'HighDesc' => [
                                                        'title' => '气温最高值描述',
                                                        'description' => '气温最高值描述',
                                                        'type' => 'string',
                                                        'example' => '37度',
                                                    ],
                                                    'Low' => [
                                                        'title' => '气温最低值',
                                                        'description' => '气温最低值',
                                                        'type' => 'string',
                                                        'example' => '28',
                                                    ],
                                                    'LowDesc' => [
                                                        'title' => '气温最低值描述',
                                                        'description' => '气温最低值描述',
                                                        'type' => 'string',
                                                        'example' => '28度',
                                                    ],
                                                    'Logical' => [
                                                        'title' => '带有逻辑的温度,逻辑如下:',
                                                        'description' => '带有逻辑的温度,逻辑如下:',
                                                        'type' => 'string',
                                                        'example' => '41',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"CurrentMeteorology\\": {\\n      \\"Weather\\": {\\n        \\"Code\\": \\"000\\",\\n        \\"Name\\": \\"晴\\"\\n      },\\n      \\"Temperature\\": {\\n        \\"Current\\": \\"36\\",\\n        \\"CurrentDesc\\": \\"36度\\",\\n        \\"High\\": \\"37\\",\\n        \\"HighDesc\\": \\"37度\\",\\n        \\"Low\\": \\"28\\",\\n        \\"LowDesc\\": \\"28度\\",\\n        \\"Logical\\": \\"41\\"\\n      }\\n    }\\n  },\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<GetWeatherResponse>\\n    <Message>调用成功</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <CurrentMeteorology>\\n            <Weather>\\n                <Code>000</Code>\\n                <Name>晴</Name>\\n            </Weather>\\n            <Temperature>\\n                <Current>36</Current>\\n                <CurrentDesc>36度</CurrentDesc>\\n                <High>37</High>\\n                <HighDesc>37度</HighDesc>\\n                <Low>28</Low>\\n                <LowDesc>28度</LowDesc>\\n                <Logical>41</Logical>\\n            </Temperature>\\n        </CurrentMeteorology>\\n    </Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</GetWeatherResponse>","errorExample":""}]',
            'title' => '查询天气',
            'description' => '根据系统参数获取到的设备信息，查询设备所在地的天气数据',
            'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'openapi.aligenie.com',
        ],
    ],
];
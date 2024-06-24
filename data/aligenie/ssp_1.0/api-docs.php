<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'AliGenie',
    'product' => 'AliGenie',
    'version' => 'ssp_1.0',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 171020,
      'title' => '账号绑定及用户授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AuthLoginWithThirdUserInfo',
        1 => 'EcologyOpennessSendVerificationCode',
        2 => 'FindUserlistToAuthLoginWithPhoneNumber',
        3 => 'AuthLoginWithAligenieUserInfo',
        4 => 'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber',
        5 => 'AuthLoginWithTaobaoUserInfo',
        6 => 'EcologyOpennessAuthenticate',
        7 => 'GetAligenieUserInfo',
        8 => 'UnbindAligenieUser',
        9 => 'QueryUserDeviceListByTmeUserId',
      ),
    ),
    1 => 
    array (
      'id' => 170170,
      'title' => '激活绑定',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckAuthCodeBindForExt',
        1 => 'GetCodeEnhance',
        2 => 'ScanCodeBind',
      ),
    ),
    2 => 
    array (
      'id' => 96289,
      'title' => '用户设备关系',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetUserByDeviceId',
        1 => 'ListDeviceByUserId',
        2 => 'UnbindDevice',
        3 => 'ListDeviceByUserIdAndChanel',
      ),
    ),
    3 => 
    array (
      'id' => 96293,
      'title' => '设备信息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetDeviceIdByIdentity',
        1 => 'ListDeviceIdByIdentities',
        2 => 'GetDeviceBasicInfo',
        3 => 'ListDeviceBasicInfo',
        4 => 'GetDeviceStatusInfo',
        5 => 'GetDeviceTag',
        6 => 'DeviceControl',
        7 => 'GetDeviceSetting',
        8 => 'GetDeviceStatusDetail',
        9 => 'SetDeviceSetting',
      ),
    ),
    4 => 
    array (
      'id' => 170173,
      'title' => '功能API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 170178,
          'title' => '内容点播',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ScgSearch',
            1 => 'AddAndRemoveFavoriteContent',
            2 => 'CreatePlayingList',
            3 => 'GetAlbum',
            4 => 'GetContent',
            5 => 'GetCurrentPlayingItem',
            6 => 'GetCurrentPlayingList',
            7 => 'IndexControlPlayingList',
            8 => 'ListAlbumDetail',
            9 => 'ListCateContent',
            10 => 'ListCateInfo',
            11 => 'ListCommonCateFirstFloor',
            12 => 'ListCommonCateSecondFloor',
            13 => 'ListPlayHistory',
            14 => 'ListRecommendContent',
            15 => 'PlayAndPauseControl',
            16 => 'PlayModeControl',
            17 => 'PreviousAndNextControl',
            18 => 'ProgressControl',
            19 => 'SearchContent',
            20 => 'CloudPlayer',
            21 => 'MobileRecommend',
          ),
        ),
        1 => 
        array (
          'id' => 170194,
          'title' => '课程订阅',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddSub',
            1 => 'DeleteSub',
            2 => 'ListAlbumIsAdded',
            3 => 'ListSub',
            4 => 'ListSubAlbum',
            5 => 'ListSubscriptionAlbumCategory',
            6 => 'GetAlbumDetailById',
          ),
        ),
        2 => 
        array (
          'id' => 170201,
          'title' => '留言',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetUnreadMessageCount',
            1 => 'ListUserMessage',
            2 => 'ReadMessage',
            3 => 'SendMessage',
          ),
        ),
        3 => 
        array (
          'id' => 170204,
          'title' => '闹钟',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateAlarm',
            1 => 'DeleteAlarms',
            2 => 'GetAlarm',
            3 => 'ListAlarms',
            4 => 'ListMusic',
            5 => 'QueryMusicType',
            6 => 'UpdateAlarm',
          ),
        ),
        4 => 
        array (
          'id' => 170174,
          'title' => '定时',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateScheduleTask',
            1 => 'DeleteScheduleTask',
            2 => 'GetScheduleTask',
          ),
        ),
        5 => 
        array (
          'id' => 171175,
          'title' => '天气',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetWeather',
          ),
        ),
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'LoginStateInfo' => 
      array (
        'title' => '登录鉴权结构体',
        'type' => 'object',
        'properties' => 
        array (
          'ThirdUserIdentifier' => 
          array (
            'title' => '三方用户ID',
            'type' => 'string',
          ),
          'ThirdUserType' => 
          array (
            'title' => '三方用户类型',
            'type' => 'string',
          ),
          'UserId' => 
          array (
            'title' => '用户ID',
            'type' => 'string',
          ),
          'SceneCode' => 
          array (
            'title' => '场景码',
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'AuthLoginWithThirdUserInfo' => 
    array (
      'summary' => '通过三方用户信息进行授权登录。',
      'path' => '/v1.0/ssp/authLoginWithThirdUserInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SceneCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '场景码，需提前向天猫精灵申请',
            'description' => '场景码，需要提前向天猫精灵申请',
            'type' => 'string',
            'required' => true,
            'example' => 'wechat_ecology_openness',
          ),
        ),
        1 => 
        array (
          'name' => 'ThirdUserType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '三方用户类型，场景接入申请完成后进行分配',
            'description' => '三方用户类型',
            'type' => 'string',
            'required' => true,
            'example' => 'weChatUser',
          ),
        ),
        2 => 
        array (
          'name' => 'ThirdUserIdentifier',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '三方用户唯一标识',
            'description' => '三方用户标识',
            'type' => 'string',
            'required' => true,
            'example' => 'o5qxy6EItZBasv2VZAf-MGwllHL4',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'object',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
                'default' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'LoginStateAccessToken' => 
                  array (
                    'title' => '登录态访问令牌',
                    'description' => '登录态访问令牌',
                    'type' => 'string',
                    'example' => 'bd9ccdb121ee950ddead51e943e081fe',
                  ),
                  'ExpiredTimeLong' => 
                  array (
                    'title' => '登录态访问令牌过期时间',
                    'description' => '登录态访问令牌过期时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1659428051452',
                    'default' => '1659333475811',
                  ),
                ),
              ),
              'DataObj' => 
              array (
                'title' => '当Code为5140001时，代表登录失败，原因是三方用户未绑定到天猫精灵用户，前端需要根据此错误码走用户手机号授权登录流程，后续流程前端需要将DataObj中SessionId带回服务端。',
                'description' => '当Code为5140001时，代表登录失败，原因是三方用户未绑定到天猫精灵用户，前端需要根据此错误码走用户手机号授权登录流程，后续流程前端需要将DataObj中SessionId带回服务端。',
                'type' => 'object',
                'properties' => 
                array (
                  'SessionId' => 
                  array (
                    'title' => '会话id',
                    'description' => '会话id',
                    'type' => 'string',
                    'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"bd9ccdb121ee950ddead51e943e081fe\\",\\n    \\"ExpiredTimeLong\\": 1659428051452\\n  },\\n  \\"DataObj\\": {\\n    \\"SessionId\\": \\"dbe2eb4458302b9246c6da17fbc95f4b\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AuthLoginWithThirdUserInfoResponse>\\n    <RequestId>73C67BD9-175A-1324-8202-9FAABBB3E6FA</RequestId>\\n    <Code>200</Code>\\n    <Message>OK</Message>\\n    <Success>true</Success>\\n    <Result>\\n        <AccessToken>f6221a258d8cfcb7c82fbf9fff9a164b</AccessToken>\\n        <ExpiredTimeLong>1659428051452</ExpiredTimeLong>\\n    </Result>\\n    <DataObj>\\n        <SessionId>dbe2eb4458302b9246c6da17fbc95f4b</SessionId>\\n    </DataObj>\\n</AuthLoginWithThirdUserInfoResponse>","errorExample":""}]',
      'title' => '通过三方用户信息进行授权登录',
    ),
    'EcologyOpennessSendVerificationCode' => 
    array (
      'summary' => '生态开放发送短信验证码',
      'path' => '/v1.0/ssp/ecologyOpennessSendVerificationCode',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会话id',
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '手机号码',
            'description' => '手机号码',
            'type' => 'string',
            'required' => true,
            'example' => '18612345678',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地区编码',
            'description' => '地区编码',
            'type' => 'string',
            'required' => true,
            'example' => '+86',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ExpireIn' => 
                  array (
                    'title' => '有效期（单位：秒）',
                    'description' => '有效期（单位：秒）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '900',
                  ),
                  'RepeatInterval' => 
                  array (
                    'title' => '下次可重新发送的时间间隔（单位：秒）',
                    'description' => '下次可重新发送的时间间隔（单位：秒）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"ExpireIn\\": 900,\\n    \\"RepeatInterval\\": 60\\n  }\\n}","type":"json"}]',
      'title' => '生态开放发送短信验证码',
    ),
    'FindUserlistToAuthLoginWithPhoneNumber' => 
    array (
      'summary' => '通过手机号寻找可授权登录的账号列表',
      'path' => '/v1.0/ssp/findUserlistToAuthLoginWithPhoneNumber',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话id',
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地区编码',
            'description' => '地区编码',
            'type' => 'string',
            'required' => true,
            'example' => '+86',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '手机号码',
            'description' => '手机号码',
            'type' => 'string',
            'required' => true,
            'example' => '18612345678',
          ),
        ),
        3 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '短信验证码',
            'description' => '短信验证码',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'UserListToAuthLogin' => 
                  array (
                    'title' => '可授权登录的账号列表',
                    'description' => '可授权登录的账号列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '可授权登录的账号',
                      'description' => '可授权登录的账号',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserType' => 
                        array (
                          'title' => '用户类型
TAOBAO：淘宝用户
ALIGENIE：天猫精灵用户',
                          'description' => '用户类型
TAOBAO：淘宝用户
ALIGENIE：天猫精灵用户',
                          'type' => 'string',
                          'example' => 'ALIGENIE',
                        ),
                        'EncryptedUserIdentifier' => 
                        array (
                          'title' => '加密过的用户标识',
                          'description' => '加密过的用户标识',
                          'type' => 'string',
                          'example' => 'KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh',
                        ),
                        'Nickname' => 
                        array (
                          'title' => '用户昵称',
                          'description' => '用户昵称',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'Avatar' => 
                        array (
                          'title' => '用户头像',
                          'description' => '用户头像',
                          'type' => 'string',
                          'example' => 'https://xxx',
                        ),
                        'FindingType' => 
                        array (
                          'title' => '用户发现类型

淘宝用户固定为：PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；

天猫精灵用户为：
PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber作为精灵绑定手机号查询到的；
PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；',
                          'description' => '用户发现类型

淘宝用户固定为：PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；

天猫精灵用户为：
PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber作为精灵绑定手机号查询到的；
PHONE_NUMBER_BINDING_WITH_TAOBAO：phoneNumber作为淘宝绑定手机号查询到的；',
                          'type' => 'string',
                          'example' => 'PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DataObj' => 
              array (
                'title' => 'Code为5140003时代表调用失败，原因是该手机号未找到可授权登录的账号列表，前端可以让用户确认通过手机号生成精灵账号，也可提示用户先基于手机号注册淘宝账号，后续流程前端需要将DataObj中sessionId带回服务端。',
                'description' => 'Code为5140003时代表调用失败，原因是该手机号未找到可授权登录的账号列表，前端可以让用户确认通过手机号生成精灵账号，也可提示用户先基于手机号注册淘宝账号，后续流程前端需要将DataObj中sessionId带回服务端。',
                'type' => 'object',
                'properties' => 
                array (
                  'SessionId' => 
                  array (
                    'title' => '会话id',
                    'description' => '会话id',
                    'type' => 'string',
                    'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"UserListToAuthLogin\\": [\\n      {\\n        \\"UserType\\": \\"ALIGENIE\\",\\n        \\"EncryptedUserIdentifier\\": \\"KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh\\",\\n        \\"Nickname\\": \\"XXX\\",\\n        \\"Avatar\\": \\"https://xxx\\",\\n        \\"FindingType\\": \\"PHONE_NUMBER_BINDING_WITH_ALIGENIE：phoneNumber\\"\\n      }\\n    ]\\n  },\\n  \\"DataObj\\": {\\n    \\"SessionId\\": \\"dbe2eb4458302b9246c6da17fbc95f4b\\"\\n  }\\n}","type":"json"}]',
      'title' => '通过手机号寻找可授权登录的账号列表',
    ),
    'AuthLoginWithAligenieUserInfo' => 
    array (
      'summary' => '通过指定精灵账号进行授权登录。',
      'path' => '/v1.0/ssp/authLoginWithAligenieUserInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会话id',
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
          ),
        ),
        1 => 
        array (
          'name' => 'EncryptedAligenieUserIdentifier',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '加密过的精灵用户标识',
            'description' => '加密过的精灵用户标识',
            'type' => 'string',
            'required' => true,
            'example' => 'UYugfm/3Nb9q24AyES2rYmC5tIglSoDX3Mbna/vrldcjGPtC8VzFwo+CU5c4CHLjrK7ekskG2WVaevM5Zi9f0w==',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
                'default' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'LoginStateAccessToken' => 
                  array (
                    'title' => '登录态访问令牌',
                    'description' => '登录态访问令牌',
                    'type' => 'string',
                    'example' => 'd15aa92de679d0d225aa845268be19ee',
                  ),
                  'ExpiredTimeLong' => 
                  array (
                    'title' => '登录态访问令牌过期时间（长整型）',
                    'description' => '登录态访问令牌过期时间（长整型）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1659506854230',
                    'default' => '1659506854230',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
      'title' => '通过指定精灵账号进行授权登录',
    ),
    'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber' => 
    array (
      'summary' => '通过手机号生成精灵账号进行授权登录。',
      'path' => '/v1.0/ssp/authLoginWithAligenieUserInfoGeneratedByPhoneNumber',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会话id',
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
                'default' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'LoginStateAccessToken' => 
                  array (
                    'title' => '登录态访问令牌',
                    'description' => '登录态访问令牌',
                    'type' => 'string',
                    'example' => 'd15aa92de679d0d225aa845268be19ee',
                  ),
                  'ExpiredTimeLong' => 
                  array (
                    'title' => '登录态访问令牌过期时间（长整型）',
                    'description' => '登录态访问令牌过期时间（长整型）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1659506854230',
                    'default' => '1659506854230',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
      'title' => '通过手机号生成精灵账号进行授权登录',
    ),
    'AuthLoginWithTaobaoUserInfo' => 
    array (
      'summary' => '通过指定淘宝账号进行授权登录',
      'path' => '/v1.0/ssp/authLoginWithTaobaoUserInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会话id',
            'description' => '会话id',
            'type' => 'string',
            'required' => true,
            'example' => 'dbe2eb4458302b9246c6da17fbc95f4b',
          ),
        ),
        1 => 
        array (
          'name' => 'EncryptedTaobaoUserIdentifier',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '加密过的淘宝用户标识',
            'description' => '加密过的淘宝用户标识',
            'type' => 'string',
            'required' => true,
            'example' => 'KsVgypxAipf+xNECMZV2ONMcheqiIoEGFvgx+T8s1oV6/euTK9+ImYvLVPsSqFDh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'LoginStateAccessToken' => 
                  array (
                    'title' => '登录态访问令牌',
                    'description' => '登录态访问令牌',
                    'type' => 'string',
                    'example' => 'd15aa92de679d0d225aa845268be19ee',
                  ),
                  'ExpiredTimeLong' => 
                  array (
                    'title' => '登录态访问令牌过期时间（长整型）',
                    'description' => '登录态访问令牌过期时间（长整型）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1659506854230',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"LoginStateAccessToken\\": \\"d15aa92de679d0d225aa845268be19ee\\",\\n    \\"ExpiredTimeLong\\": 1659506854230\\n  }\\n}","type":"json"}]',
      'title' => '通过指定淘宝账号进行授权登录',
    ),
    'EcologyOpennessAuthenticate' => 
    array (
      'summary' => '使用登录态访问令牌进行鉴权获取三方用户标识和精灵方用户openId',
      'path' => '/v1.0/ssp/ecologyOpennessAuthenticate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'LoginStateAccessToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '登录态访问令牌',
            'description' => '登录态访问令牌',
            'type' => 'string',
            'required' => true,
            'example' => 'd15aa*****ee',
          ),
        ),
        1 => 
        array (
          'name' => 'EncodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体类型',
            'description' => '实体类型',
            'type' => 'string',
            'required' => true,
            'example' => 'PROJECT_ID',
          ),
        ),
        2 => 
        array (
          'name' => 'EncodeKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体key',
            'description' => '实体key',
            'type' => 'string',
            'required' => true,
            'example' => '12*****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73****9-175A-1324-8202-9FAAB*****A',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
                'default' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'UserOpenId' => 
                  array (
                    'title' => '精灵用户openId',
                    'description' => '精灵用户openId',
                    'type' => 'string',
                    'example' => 'o****RnNAW/smBNX9By7Zlc3J7iQUXPiUj/6OizU+ifLSzn1vpQL9ZgSp22u7hsxj0UZ2i6urbv9HQ==',
                  ),
                  'EncodeType' => 
                  array (
                    'title' => '实体类型',
                    'description' => '实体类型',
                    'type' => 'string',
                    'example' => 'PROJECT_ID',
                  ),
                  'EncodeKey' => 
                  array (
                    'title' => '实体key',
                    'description' => '实体key',
                    'type' => 'string',
                    'example' => '12****7',
                  ),
                  'SceneCode' => 
                  array (
                    'title' => '场景码',
                    'description' => '场景码',
                    'type' => 'string',
                    'example' => '******',
                  ),
                  'ThirdUserType' => 
                  array (
                    'title' => '三方用户类型',
                    'description' => '三方用户类型',
                    'type' => 'string',
                    'example' => '******',
                  ),
                  'ThirdUserIdentifier' => 
                  array (
                    'title' => '三方用户标识',
                    'description' => '三方用户标识',
                    'type' => 'string',
                    'example' => '******',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73****9-175A-1324-8202-9FAAB*****A\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"UserOpenId\\": \\"o****RnNAW/smBNX9By7Zlc3J7iQUXPiUj/6OizU+ifLSzn1vpQL9ZgSp22u7hsxj0UZ2i6urbv9HQ==\\",\\n    \\"EncodeType\\": \\"PROJECT_ID\\",\\n    \\"EncodeKey\\": \\"12****7\\",\\n    \\"SceneCode\\": \\"******\\",\\n    \\"ThirdUserType\\": \\"******\\",\\n    \\"ThirdUserIdentifier\\": \\"******\\"\\n  }\\n}","type":"json"}]',
      'title' => '生态开放鉴权',
      'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。

- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。

- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用返回的http响应状态码为400时代表登录态失效。',
    ),
    'GetAligenieUserInfo' => 
    array (
      'summary' => '通过登录态凭证获取三方绑定的精灵账号信息',
      'path' => '/v1.0/ssp/getAligenieUserInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'LoginStateAccessToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '登录态访问凭证',
            'description' => '登录态访问凭证',
            'type' => 'string',
            'required' => true,
            'example' => '99ce8a70c23a94f8569e1a525bef6e85',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
              ),
              'Result' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AligenieNickname' => 
                  array (
                    'title' => '精灵用户昵称',
                    'description' => '精灵用户昵称',
                    'type' => 'string',
                    'example' => 'XXX',
                  ),
                  'Avatar' => 
                  array (
                    'title' => '精灵用户头像地址',
                    'description' => '精灵用户头像地址',
                    'type' => 'string',
                    'example' => 'http://img.alicdn.com/xxx.jpg',
                  ),
                  'Deletable' => 
                  array (
                    'title' => '是否可注销',
                    'description' => '是否可注销',
                    'type' => 'boolean',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"AligenieNickname\\": \\"XXX\\",\\n    \\"Avatar\\": \\"http://img.alicdn.com/xxx.jpg\\",\\n    \\"Deletable\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取三方绑定的精灵账号信息',
      'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。

- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。

- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用返回的http响应状态码为400时代表登录态失效。',
    ),
    'UnbindAligenieUser' => 
    array (
      'summary' => '通过登录态凭证解绑三方和精灵账号的关系
',
      'path' => '/v1.0/ssp/unbindAligenieUser',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'LoginStateAccessToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '登录态访问凭证',
            'description' => '登录态访问凭证',
            'type' => 'string',
            'required' => true,
            'example' => '99ce8a70c23a94f8569e1a525bef6e85',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '解除三方和精灵账号的关系',
      'description' => '注意：当登录态失效时，接入方需要重新发起授权登录流程获取新的登录态（入口服务API：AuthLoginWithThirdUserInfo）。

- 通过Java-SDK（其它语言SDK请在接入时咨询天猫精灵开发）调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用抛出TeaException，且TeaException.code为InvalidAuthentication时代表登录态失效。

- 通过发送http请求调用携带登录态访问凭证（LoginStateAccessToken）参数的服务API
当API调用返回的http响应状态码为400时代表登录态失效。',
    ),
    'QueryUserDeviceListByTmeUserId' => 
    array (
      'summary' => '通过tme用户id获取授权的天猫精灵用户+设备列表，提供给酷狗云推歌使用',
      'path' => '/v1.0/ssp/queryUserDeviceListByTmeUserId',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
        1 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TmeUserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TME用户id',
            'description' => 'TME用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'FDEEDE337BAA780793D72F7F20BEF2F5',
          ),
        ),
        1 => 
        array (
          'name' => 'Sp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '"KG"：酷狗
"KW"：酷我
"QM"：Q音',
            'description' => '"KG"：酷狗
"KW"：酷我
"QM"：Q音',
            'type' => 'string',
            'required' => true,
            'example' => 'KG',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
              ),
              'Code' => 
              array (
                'title' => '响应码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'title' => '调用是否成功标志',
                'description' => '调用是否成功标志',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'title' => '响应结果',
                'description' => '响应结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Sp' => 
                  array (
                    'title' => '"KG"：酷狗
"KW"：酷我
"QM"：Q音',
                    'description' => '"KG"：酷狗
"KW"：酷我
"QM"：Q音',
                    'type' => 'string',
                    'example' => 'KG',
                  ),
                  'EncodeType' => 
                  array (
                    'title' => '实体类型（三方透传即可）',
                    'description' => '实体类型（三方透传即可）',
                    'type' => 'string',
                    'example' => 'PROJECT_ID',
                  ),
                  'EncodeKey' => 
                  array (
                    'title' => '实体key（三方透传即可）',
                    'description' => '实体key（三方透传即可）',
                    'type' => 'string',
                    'example' => '12****7',
                  ),
                  'AligenieUserInfoList' => 
                  array (
                    'title' => '天猫精灵用户列表',
                    'description' => '天猫精灵用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OpenUserId' => 
                        array (
                          'title' => '用户id',
                          'description' => '用户id',
                          'type' => 'string',
                          'example' => 'R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==',
                        ),
                        'UserNickname' => 
                        array (
                          'title' => '用户昵称',
                          'description' => '用户昵称',
                          'type' => 'string',
                          'example' => 'a***e',
                        ),
                        'AuthorizedDeviceList' => 
                        array (
                          'title' => '用户授权的设备列表',
                          'description' => '用户授权的设备列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'OpenDeviceId' => 
                              array (
                                'title' => '按照天猫精灵开放平台标准加密的设备id',
                                'description' => '设备id',
                                'type' => 'string',
                                'example' => 'fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=',
                              ),
                              'DeviceName' => 
                              array (
                                'title' => '设备名称',
                                'description' => '设备名称',
                                'type' => 'string',
                                'example' => 'CC',
                              ),
                              'Online' => 
                              array (
                                'title' => '设备是否在线',
                                'description' => '设备是否在线',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'TmeProductId' => 
                              array (
                                'title' => 'TME产品id',
                                'description' => 'TME产品id',
                                'type' => 'string',
                              ),
                              'TmeDeviceId' => 
                              array (
                                'title' => '透出给TME的设备id',
                                'description' => '透出给TME的设备id',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"Sp\\": \\"KG\\",\\n    \\"EncodeType\\": \\"PROJECT_ID\\",\\n    \\"EncodeKey\\": \\"12****7\\",\\n    \\"AligenieUserInfoList\\": [\\n      {\\n        \\"OpenUserId\\": \\"R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==\\",\\n        \\"UserNickname\\": \\"a***e\\",\\n        \\"AuthorizedDeviceList\\": [\\n          {\\n            \\"OpenDeviceId\\": \\"fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=\\",\\n            \\"DeviceName\\": \\"CC\\",\\n            \\"Online\\": true,\\n            \\"TmeProductId\\": \\"\\",\\n            \\"TmeDeviceId\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '通过tme用户id获取授权的天猫精灵用户+设备列表',
    ),
    'CheckAuthCodeBindForExt' => 
    array (
      'summary' => '轮询激活绑定结果。',
      'path' => '/v1.0/ssp/checkAuthCodeBindForExt',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EncodeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型，此处填写PROJECT_ID。',
            'description' => '编码类型，此处填写PROJECT_ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'PROJECT_ID',
            'enum' => 
            array (
              0 => 'PROJECT_ID',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'EncodeKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
            'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定用户和渠道获取的authCode',
            'description' => '通过指定用户id获取到的authCode
',
            'type' => 'string',
            'required' => true,
            'example' => 'Aexfgc',
          ),
        ),
        3 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息列表。',
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型：
OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'description' => '用户Id的类型：
OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1***2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '详细信息',
                'description' => '详细信息',
                'type' => 'object',
                'properties' => 
                array (
                  'UserOpenInfo' => 
                  array (
                    'title' => '用户开放信息',
                    'description' => '用户开放信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'IdType' => 
                      array (
                        'title' => 'USER_ID',
                        'description' => 'USER_ID',
                        'type' => 'string',
                        'example' => 'USER_ID',
                      ),
                      'Id' => 
                      array (
                        'title' => '对外的用户id',
                        'description' => '对外的用户id',
                        'type' => 'string',
                        'example' => '0963*0158',
                      ),
                    ),
                  ),
                  'DeviceOpenInfo' => 
                  array (
                    'title' => '设备开放信息',
                    'description' => '设备开放信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'IdType' => 
                      array (
                        'title' => 'DEVICE_ID',
                        'description' => 'DEVICE_ID',
                        'type' => 'string',
                        'example' => 'DEVICE_ID',
                      ),
                      'Id' => 
                      array (
                        'title' => '对外的设备id',
                        'description' => '对外的设备id',
                        'type' => 'string',
                        'example' => 'A963*0158',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"UserOpenInfo\\": {\\n      \\"IdType\\": \\"USER_ID\\",\\n      \\"Id\\": \\"0963*0158\\"\\n    },\\n    \\"DeviceOpenInfo\\": {\\n      \\"IdType\\": \\"DEVICE_ID\\",\\n      \\"Id\\": \\"A963*0158\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '轮询激活绑定结果',
    ),
    'GetCodeEnhance' => 
    array (
      'summary' => '获取authCode。',
      'path' => '/v1.0/ssp/getCodeEnhance',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChannelInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '激活渠道，如微信小程序，三方app等',
            'description' => '激活渠道，如微信小程序，三方app等',
            'type' => 'object',
            'properties' => 
            array (
              'Channel' => 
              array (
                'title' => '激活渠道，如WeChat',
                'description' => '激活渠道，如WeChat、ThirdApp',
                'type' => 'string',
                'required' => true,
                'example' => 'WeChat、ThirdApp',
              ),
              'ExtInfo' => 
              array (
                'title' => '扩展信息',
                'description' => '扩展信息',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息列表。',
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '用户Id的类型：
OPENID：默认的用户ID标识。
UNIONID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回的详细信息。',
                'description' => '返回的详细信息。',
                'type' => 'string',
                'example' => 'Aexfgc',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"Aexfgc\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获取authCode',
      'description' => '通过指定用户id，获取对应的authCode',
    ),
    'ScanCodeBind' => 
    array (
      'summary' => '带屏设备通过扫描二维码完成用户和设备的激活绑定。',
      'path' => '/v1.0/ssp/scanCode',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '129****0946',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '111',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'BindReq',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '扫描绑定入参',
            'description' => '扫码绑定入参',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'authCode',
                'description' => 'authCode',
                'type' => 'string',
                'required' => true,
                'example' => 'ASdfre',
              ),
              'ClientId' => 
              array (
                'title' => '产品clientId',
                'description' => '产品clientId',
                'type' => 'string',
                'required' => true,
                'example' => 'RnY8v0W0ZVn58ZrUAOr2RD',
              ),
              'ExtInfo' => 
              array (
                'title' => '扩展参数',
                'description' => '扩展参数',
                'type' => 'string',
                'required' => false,
                'example' => '{"key":"value"}',
              ),
              'UserId' => 
              array (
                'title' => '精灵用户id',
                'type' => 'string',
                'required' => true,
                'example' => '123456',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '结果信息',
                'description' => '结果信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回的详细信息。',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'BizType' => 
                  array (
                    'title' => '产品分类',
                    'description' => '产品分类',
                    'type' => 'string',
                    'example' => 'AILABS',
                  ),
                  'BizGroup' => 
                  array (
                    'title' => '产品分组',
                    'description' => '产品分组',
                    'type' => 'string',
                    'example' => 'X1',
                  ),
                  'UserOpenId' => 
                  array (
                    'title' => 'DAFE****ce3ej=',
                    'description' => 'DAFE****ce3ej=',
                    'type' => 'string',
                    'example' => '用户OpenId',
                  ),
                  'DeviceOpenId' => 
                  array (
                    'title' => 'A963*0158',
                    'description' => 'A963*0158',
                    'type' => 'string',
                    'example' => '设备OpenId',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '686DF82F-45C4-7DF7-8B67-27B91CFD63A9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"BizType\\": \\"AILABS\\",\\n    \\"BizGroup\\": \\"X1\\",\\n    \\"UserOpenId\\": \\"用户OpenId\\",\\n    \\"DeviceOpenId\\": \\"设备OpenId\\"\\n  },\\n  \\"RequestId\\": \\"686DF82F-45C4-7DF7-8B67-27B91CFD63A9\\"\\n}","type":"json"}]',
      'title' => '通过扫描二维码进行激活绑定',
      'description' => '通过扫描设备上的激活绑定相关的二维码信息进行激活绑定。',
    ),
    'GetUserByDeviceId' => 
    array (
      'summary' => '根据设备openID，获取设备绑定用户ID。',
      'path' => '/v1.0/ssp/getUserByDeviceId',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备Id的类型
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '用户open信息',
                'description' => '返回的用户信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserOpenId' => 
                  array (
                    'title' => '用户信息对应的openId',
                    'description' => '用户信息对应的openId。',
                    'type' => 'string',
                    'example' => '0963*0158',
                  ),
                  'UserUnionIds' => 
                  array (
                    'title' => '组织id及归一id列表',
                    'description' => '用户的组织ID及UnionID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '信息列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OrganizationId' => 
                        array (
                          'title' => '组织id',
                          'description' => '组织ID。',
                          'type' => 'string',
                          'example' => '1**2',
                        ),
                        'UserUnionId' => 
                        array (
                          'title' => '组织id对应的归一id',
                          'description' => '用户的UnionID。',
                          'type' => 'string',
                          'example' => '1553*B0C3',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.GetUserByDeviceId.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"UserOpenId\\": \\"0963*0158\\",\\n    \\"UserUnionIds\\": [\\n      {\\n        \\"OrganizationId\\": \\"1**2\\",\\n        \\"UserUnionId\\": \\"1553*B0C3\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserByDeviceIdResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <UserOpenId>0963*0158</UserOpenId>\\n        <UserUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <UserUnionId>1553*B0C3</UserUnionId>\\n        </UserUnionIds>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetUserByDeviceIdResponse>","errorExample":""}]',
      'title' => '获取设备绑定的用户ID',
    ),
    'ListDeviceByUserId' => 
    array (
      'summary' => '根据用户openID，获取绑定的设备ID列表。',
      'path' => '/v1.0/ssp/listDeviceByUserId',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在开放平台申请过组织后才会有',
                'description' => '用户Id的类型：
 - OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '信息列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceOpenId' => 
                    array (
                      'title' => '设备信息对应的openId',
                      'description' => '设备信息对应的openId。',
                      'type' => 'string',
                      'example' => 'A963*0158',
                    ),
                    'DeviceUnionIds' => 
                    array (
                      'title' => '组织id及归一id列表',
                      'description' => '设备对应的组织ID及UnionId信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '信息列表',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OrganizationId' => 
                          array (
                            'title' => '组织id',
                            'description' => '组织ID。',
                            'type' => 'string',
                            'example' => '1**2',
                          ),
                          'DeviceUnionId' => 
                          array (
                            'title' => '组织id对应的归一id',
                            'description' => '设备的UnionId。',
                            'type' => 'string',
                            'example' => '1553*B0C3',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.ListDeviceByUserId.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1**2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceByUserIdResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceOpenId>A963*0158</DeviceOpenId>\\n        <DeviceUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n        </DeviceUnionIds>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceByUserIdResponse>","errorExample":""}]',
      'title' => '获取用户绑定的设备列表',
    ),
    'UnbindDevice' => 
    array (
      'summary' => '根据用户open信息和设备open信息进行解除绑定关系。',
      'path' => '/v1.0/ssp/unbindDevice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，该产品所在项目的Project ID。请在天猫精灵AI平台控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备Id的类型
 - OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，即该产品所在项目的Project ID。请在天猫精灵AI平台控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在开放平台申请过组织后才会有',
                'description' => '用户ID的类型：
 - OPEN_ID：默认的用户ID标识。
 - UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '是否解绑成功',
                'description' => '设备是否解绑成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.UnbindDevice.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDeviceResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</UnbindDeviceResponse>","errorExample":""}]',
      'title' => '解绑设备',
    ),
    'ListDeviceByUserIdAndChanel' => 
    array (
      'summary' => '获取指定渠道的设备列表。',
      'path' => '/v1.0/ssp/listDeviceByUserIdAndChanel',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChannelInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '激活渠道，如微信小程序，三方app等',
            'description' => '激活渠道，如微信小程序，三方app等',
            'type' => 'object',
            'properties' => 
            array (
              'Channel' => 
              array (
                'title' => '激活配网渠道，如WeChat',
                'description' => '激活配网渠道，如WeChat、ThirdApp',
                'type' => 'string',
                'required' => true,
                'example' => 'WeChat、ThirdApp',
              ),
              'ExtInfo' => 
              array (
                'title' => '扩展信息',
                'description' => '扩展信息',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息列表。',
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型：
OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'description' => '用户Id的类型：
OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '用户标识，填写userOpenId或userUnionId的值。',
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1***2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '信息列表',
                'description' => '信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceOpenId' => 
                    array (
                      'title' => '设备信息对应的openId。',
                      'description' => '设备信息对应的openId。',
                      'type' => 'string',
                      'example' => 'A963*0158',
                    ),
                    'DeviceUnionIds' => 
                    array (
                      'title' => '设备信息列表',
                      'description' => '信息列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OrganizationId' => 
                          array (
                            'title' => '组织ID。',
                            'description' => '组织ID。',
                            'type' => 'string',
                            'example' => '1***2',
                          ),
                          'DeviceUnionId' => 
                          array (
                            'title' => '设备的UnionId。',
                            'description' => '设备的UnionId。',
                            'type' => 'string',
                            'example' => '1553*B0C3',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求Id',
                'type' => 'string',
                'example' => 'RE***D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1***2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"RE***D\\"\\n}","type":"json"}]',
      'title' => '获取指定渠道的设备列表',
    ),
    'GetDeviceIdByIdentity' => 
    array (
      'summary' => '根据设备MAC/SN获取设备ID。',
      'path' => '/v1.0/ssp/getDeviceIdByIdentity',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'EncodeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型，此处填写“PROJECT_ID”',
            'description' => '编码类型，此处填写**PROJECT_ID**。',
            'type' => 'string',
            'required' => true,
            'example' => 'PROJECT_ID',
          ),
        ),
        1 => 
        array (
          'name' => 'EncodeKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
            'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
            'type' => 'string',
            'required' => true,
            'example' => '129****0946',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '填写设备认证类型，“MAC”或者“SN”',
            'description' => '设备认证类型，填写**MAC**或者**SN**或者**CTEI**。',
            'type' => 'string',
            'required' => true,
            'example' => 'MAC',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证标识，填写MAC地址或者SN的值。',
            'description' => '认证标识，填写MAC地址或者SN的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'b4:xx:xx:xx:65:2b',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
            'description' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。当IdentityType为**CTEI**时可不传。',
            'type' => 'string',
            'required' => false,
            'example' => 'Mm*****XnZ8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceOpenId' => 
                  array (
                    'title' => '设备信息对应的openId',
                    'description' => '设备对应的openId。',
                    'type' => 'string',
                    'example' => 'A963*0158',
                  ),
                  'DeviceUnionIds' => 
                  array (
                    'title' => '组织id及归一id列表',
                    'description' => '设备对应的组织ID及UnionId信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '信息列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OrganizationId' => 
                        array (
                          'title' => '组织id',
                          'description' => '组织ID。',
                          'type' => 'string',
                          'example' => '1**2',
                        ),
                        'DeviceUnionId' => 
                        array (
                          'title' => '组织id对应的归一id',
                          'description' => '设备的UnionId。',
                          'type' => 'string',
                          'example' => '1553*B0C3',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID，用于排查问题，如果没有这个参数，可以在responseHeader里进行排查。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7DA****A0726E',
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
            'errorCode' => 'AliGenie.GetDeviceIdByIdentity.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DeviceOpenId\\": \\"A963*0158\\",\\n    \\"DeviceUnionIds\\": [\\n      {\\n        \\"OrganizationId\\": \\"1**2\\",\\n        \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0EC7DA****A0726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceIdByIdentityResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceOpenId>A963*0158</DeviceOpenId>\\n        <DeviceUnionIds>\\n            <OrganizationId>1**2</OrganizationId>\\n            <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n        </DeviceUnionIds>\\n    </Result>\\n    <RequestId>0EC7DA****A0726E</RequestId>\\n</GetDeviceIdByIdentityResponse>","errorExample":""}]',
      'title' => '获取设备ID',
    ),
    'ListDeviceIdByIdentities' => 
    array (
      'summary' => '批量根据设备MAC/SN获取设备ID。',
      'path' => '/v1.0/ssp/listDeviceIdByIdentities',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EncodeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型，此处填写“PROJECT_ID”',
            'description' => '编码类型，此处填写**PROJECT_ID**。',
            'type' => 'string',
            'required' => true,
            'example' => 'PROJECT_ID',
          ),
        ),
        1 => 
        array (
          'name' => 'EncodeKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
            'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
            'type' => 'string',
            'required' => true,
            'example' => '125****0946',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '填写设备认证类型，“MAC”或者“SN”',
            'description' => '设备认证类型，填写**MAC**或**SN**。',
            'type' => 'string',
            'required' => true,
            'example' => 'MAC',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备的认证标识列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '认证标识，填写MAC地址或者SN的值。',
              'description' => '认证标识，填写MAC地址或SN值。',
              'type' => 'string',
              'required' => true,
              'example' => 'b4:xx:xx:xx:65:2b',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
            'description' => '产品唯一标志符productKey，在天猫精灵AI平台中创建产品时，平台颁发的全局唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'Mm*****XnZ8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息列表。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceOpenId' => 
                    array (
                      'title' => '设备信息对应的openId',
                      'description' => '设备对应的openId。',
                      'type' => 'string',
                      'example' => 'A963*0158',
                    ),
                    'DeviceUnionIds' => 
                    array (
                      'title' => '组织id及归一id列表',
                      'description' => '设备对应的组织ID及UnionId信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OrganizationId' => 
                          array (
                            'title' => '组织id',
                            'description' => '组织ID。',
                            'type' => 'string',
                            'example' => '1**2',
                          ),
                          'DeviceUnionId' => 
                          array (
                            'title' => '组织id对应的归一id',
                            'description' => '设备的UnionId。',
                            'type' => 'string',
                            'example' => '1553*B0C3',
                          ),
                        ),
                        'description' => '信息列表',
                      ),
                    ),
                  ),
                  'description' => '信息列表',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.ListDeviceIdByIdentity.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": {\\n      \\"DeviceOpenId\\": \\"A963*0158\\",\\n      \\"DeviceUnionIds\\": [\\n        {\\n          \\"OrganizationId\\": \\"1**2\\",\\n          \\"DeviceUnionId\\": \\"1553*B0C3\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceIdByIdentitiesResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <b4:xx:xx:xx:65:2b>\\n            <DeviceOpenId>A963*0158</DeviceOpenId>\\n            <DeviceUnionIds>\\n                <OrganizationId>1**2</OrganizationId>\\n                <DeviceUnionId>1553*B0C3</DeviceUnionId>\\n            </DeviceUnionIds>\\n        </b4:xx:xx:xx:65:2b>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceIdByIdentitiesResponse>","errorExample":""}]',
      'title' => '批量获取设备ID',
    ),
    'GetDeviceBasicInfo' => 
    array (
      'summary' => '根据设备ID，获取设备基本信息。',
      'path' => '/v1.0/ssp/getDeviceBasicInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备Id的类型 ：
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => '设备名称',
                    'description' => '设备的名称。',
                    'type' => 'string',
                    'example' => '我的设备',
                  ),
                  'FirmwareVersion' => 
                  array (
                    'title' => '固件版本',
                    'description' => '设备的固件版本。',
                    'type' => 'string',
                    'example' => '2.0.3',
                  ),
                  'Mac' => 
                  array (
                    'title' => '设备MAC地址',
                    'description' => '设备的MAC地址。',
                    'type' => 'string',
                    'example' => 'b4:xx:xx:xx:65:2b',
                  ),
                  'Sn' => 
                  array (
                    'title' => '设备SN',
                    'description' => '设备的SN信息。',
                    'type' => 'string',
                    'example' => '1200xxx048',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.GetDeviceBasicInfo.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Name\\": \\"我的设备\\",\\n    \\"FirmwareVersion\\": \\"2.0.3\\",\\n    \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n    \\"Sn\\": \\"1200xxx048\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceBasicInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <Name>我的设备</Name>\\n        <FirmwareVersion>2.0.3</FirmwareVersion>\\n        <Mac>b4:xx:xx:xx:65:2b</Mac>\\n        <Sn>1200xxx048</Sn>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceBasicInfoResponse>","errorExample":""}]',
      'title' => '获取设备基本信息',
    ),
    'ListDeviceBasicInfo' => 
    array (
      'summary' => '根据设备openID列表，批量获取设备基本信息。',
      'path' => '/v1.0/ssp/listDeviceBasicInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceInfos',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备Id的类型 ：
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Ids' => 
              array (
                'title' => '设备标识列表（deviceOpenId或deviceUnionId）',
                'description' => '设备标识信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '设备标识（deviceOpenId或deviceUnionId）',
                  'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'DAFE****ce3ej=',
                ),
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
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
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result，key为deviceOpenId或deviceUnionId，value为对应的设备信息',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '设备名称',
                      'description' => '设备的名称。',
                      'type' => 'string',
                      'example' => '我的设备',
                    ),
                    'FirmwareVersion' => 
                    array (
                      'title' => '固件版本',
                      'description' => '设备的固件版本。',
                      'type' => 'string',
                      'example' => '2.0.3',
                    ),
                    'Mac' => 
                    array (
                      'title' => '设备MAC地址',
                      'description' => '设备的MAC地址。',
                      'type' => 'string',
                      'example' => 'b4:xx:xx:xx:65:2b',
                    ),
                    'Sn' => 
                    array (
                      'title' => '设备SN',
                      'description' => '设备的SN信息。',
                      'type' => 'string',
                      'example' => '1200xx048',
                    ),
                  ),
                  'description' => '返回的设备信息列表。',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.ListDeviceBasicInfo.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": {\\n      \\"Name\\": \\"我的设备\\",\\n      \\"FirmwareVersion\\": \\"2.0.3\\",\\n      \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n      \\"Sn\\": \\"1200xx048\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceBasicInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DAFE****ce3ej=>\\n            <Name>我的设备</Name>\\n            <FirmwareVersion>2.0.3</FirmwareVersion>\\n            <Mac>b4:xx:xx:xx:65:2b</Mac>\\n            <Sn>1200xx048</Sn>\\n        </DAFE****ce3ej=>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</ListDeviceBasicInfoResponse>\\n","errorExample":""}]',
      'title' => '批量查询设备基本信息',
    ),
    'GetDeviceStatusInfo' => 
    array (
      'summary' => '根据设备openID，获取设备在线状态。',
      'path' => '/v1.0/ssp/getDeviceStatusInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备Id的类型 ：
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Online' => 
                  array (
                    'title' => '是否在线，0为不在线，1为在线',
                    'description' => '设备是否在线，0表示不在线，1 表示在线。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.GetDeviceStatusInfo.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Online\\": 1\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceStatusInfoResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <Online>1</Online>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceStatusInfoResponse>","errorExample":""}]',
      'title' => '获取设备状态',
    ),
    'GetDeviceTag' => 
    array (
      'summary' => '获取设备的标签信息。',
      'path' => '/v1.0/ssp/getDeviceTag',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写“PROJECT_ID”',
                'description' => '编码类型，此处填写**PROJECT_ID**。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在开放平台申请过组织后才会有',
                'description' => '设备ID的类型：
 - OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '返回数据列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '返回的错误信息',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回result',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceTags' => 
                  array (
                    'title' => '设备标签结果',
                    'description' => '设备的标签信息。',
                    'type' => 'object',
                    'example' => '{       "antest1": "antest1",       "antest": "a"     }',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DeviceTags\\": {\\n      \\"antest1\\": \\"antest1\\",\\n      \\"antest\\": \\"a\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceTagResponse>\\n    <Message>success</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <DeviceTags>\\n            <antest1>antest1</antest1>\\n            <antest>a</antest>\\n        </DeviceTags>\\n    </Result>\\n    <RequestId>0EC7*726E</RequestId>\\n</GetDeviceTagResponse>","errorExample":""}]',
      'title' => '获取设备标签',
    ),
    'DeviceControl' => 
    array (
      'summary' => '设备音量等属性值控制。',
      'path' => '/v1.0/ssp/control',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ControlRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '控制音量入参',
            'description' => '控制音量入参',
            'type' => 'object',
            'properties' => 
            array (
              'Volume' => 
              array (
                'title' => '音量目标值',
                'description' => '音量目标值',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'Muted' => 
              array (
                'title' => '是否静音',
                'description' => '是否静音，在设置该字段为true时，需要同时指定音量值为0',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息列表。',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'title' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                'description' => '设备的组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1*****2',
              ),
            ),
            'required' => true,
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
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回的详细信息。',
                'description' => '返回的详细信息。',
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '设备音量等属性值控制',
      'description' => '指定设备修改音量等属性值
',
    ),
    'GetDeviceSetting' => 
    array (
      'summary' => '获取设备的用户设置。',
      'path' => '/v1.0/ssp/getDeviceSetting',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
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
          'name' => 'Keys',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备设置指定的Key集合，
勿扰模式:nightMode',
            'description' => '设备设置指定的Key集合，
勿扰模式：nightMode',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息列表。',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'description' => '编码类型对应的值，此处填写天猫精灵AI平台中，该产品ProductKey所在项目的Project ID。',
                'type' => 'string',
                'required' => true,
                'example' => '12345',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '设备Id的类型
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                'description' => '设备标识，配置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '122',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回具体的设备设置信息。',
                'description' => '返回具体的设备设置信息。',
                'type' => 'object',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获取设备的用户设置',
    ),
    'GetDeviceStatusDetail' => 
    array (
      'summary' => '获取设备状态详情。',
      'path' => '/v1.0/ssp/getDeviceStatusDetail',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Keys',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备设置指定的Key集合，
如播放器:player',
            'description' => '设备设置指定的Key集合，
播放器：player
设备音量：speaker
设备电量：power',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息列表。',
            'description' => '设备标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'OPEN_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '返回的详细信息。',
                'description' => '返回的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Player' => 
                  array (
                    'title' => '播放器信息',
                    'description' => '播放器信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AudioAnchor' => 
                      array (
                        'title' => '歌手',
                        'description' => '歌手',
                        'type' => 'string',
                        'example' => '刘德华',
                      ),
                      'AudioExt' => 
                      array (
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'string',
                        'example' => '""',
                      ),
                      'AudioId' => 
                      array (
                        'title' => '歌曲id',
                        'description' => '歌曲id',
                        'type' => 'string',
                        'example' => '123',
                      ),
                      'Format' => 
                      array (
                        'title' => '歌曲类型(mp3)',
                        'description' => '歌曲类型(mp3)',
                        'type' => 'string',
                        'example' => 'mp3',
                      ),
                      'AudioSource' => 
                      array (
                        'title' => '歌曲来源(xiami)',
                        'description' => '歌曲来源(xiami)',
                        'type' => 'string',
                        'example' => 'xiami',
                      ),
                      'AudioLength' => 
                      array (
                        'title' => ' 歌曲长度，秒',
                        'description' => ' 歌曲长度，秒',
                        'type' => 'string',
                        'example' => '253',
                      ),
                      'Source' => 
                      array (
                        'title' => '播放来源(cloud)',
                        'description' => '播放来源(cloud)',
                        'type' => 'string',
                        'example' => 'cloud',
                      ),
                      'AudioUrl' => 
                      array (
                        'title' => '歌曲url',
                        'description' => '歌曲url',
                        'type' => 'string',
                        'example' => 'https://xxx',
                      ),
                      'AudioName' => 
                      array (
                        'title' => '歌曲名称',
                        'description' => '歌曲名称',
                        'type' => 'string',
                      ),
                      'AudioAlbum' => 
                      array (
                        'title' => '歌曲专辑',
                        'description' => '歌曲专辑',
                        'type' => 'string',
                      ),
                      'Progress' => 
                      array (
                        'title' => '播放进度',
                        'description' => '播放进度',
                        'type' => 'string',
                        'example' => '30',
                      ),
                      'Timestamp' => 
                      array (
                        'title' => '上报时间',
                        'description' => '上报时间',
                        'type' => 'string',
                      ),
                      'Status' => 
                      array (
                        'title' => '播放状态,pause',
                        'description' => '播放状态,pause',
                        'type' => 'string',
                        'example' => 'pause',
                      ),
                    ),
                  ),
                  'Speaker' => 
                  array (
                    'title' => '音量信息',
                    'description' => '音量信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Volume' => 
                      array (
                        'title' => '音量当前值',
                        'description' => '音量当前值',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Muted' => 
                      array (
                        'title' => '是否静音',
                        'description' => '是否静音',
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                  'Power' => 
                  array (
                    'title' => '电量信息',
                    'description' => '电量信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Quantity' => 
                      array (
                        'title' => '电量值',
                        'description' => '电量值',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30',
                      ),
                      'Status' => 
                      array (
                        'title' => '电源状态',
                        'description' => '电源状态',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Player\\": {\\n      \\"AudioAnchor\\": \\"刘德华\\",\\n      \\"AudioExt\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"AudioId\\": \\"123\\",\\n      \\"Format\\": \\"mp3\\",\\n      \\"AudioSource\\": \\"xiami\\",\\n      \\"AudioLength\\": \\"253\\",\\n      \\"Source\\": \\"cloud\\",\\n      \\"AudioUrl\\": \\"https://xxx\\",\\n      \\"AudioName\\": \\"\\",\\n      \\"AudioAlbum\\": \\"\\",\\n      \\"Progress\\": \\"30\\",\\n      \\"Timestamp\\": \\"\\",\\n      \\"Status\\": \\"pause\\"\\n    },\\n    \\"Speaker\\": {\\n      \\"Volume\\": 10,\\n      \\"Muted\\": true\\n    },\\n    \\"Power\\": {\\n      \\"Quantity\\": 30,\\n      \\"Status\\": \\"\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获取设备状态详情',
    ),
    'SetDeviceSetting' => 
    array (
      'summary' => '修改设备的用户设置。',
      'path' => '/v1.0/ssp/setDeviceSetting',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Key',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备设置指定的Key集合，
勿扰模式:nightMode',
            'description' => '设备设置指定的Key集合，
勿扰模式:nightMode',
            'type' => 'string',
            'required' => true,
            'example' => 'nightMode',
          ),
        ),
        1 => 
        array (
          'name' => 'Value',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '属性值',
            'description' => '属性值',
            'type' => 'any',
            'required' => false,
            'example' => '{"enable":true}',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写PROJECT_ID。',
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'description' => '设备Id的类型 ：
OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'title' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '调用该接口的返回结果。',
                'description' => '调用该接口的返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '返回的错误码，200表示调用成功。',
                'description' => '返回的错误码，200表示调用成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '设置执行结果',
                'description' => '设置执行结果',
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '修改设备的用户设置',
    ),
    'ScgSearch' => 
    array (
      'summary' => '根据选品池ID查询选品池内容。',
      'path' => '/v1.0/ssp/scgSearch',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '选品池ID 可选：MC201132（民族中国风），MC201136（流行音乐），MC201139（甜蜜爱情），MC201133（民谣），MC201137（放松阅读），MC201138（快乐），PA202029（故事），PA202030（儿歌），PA202028（国学历史），PA202032（百科），PA202031（英文儿歌）',
            'description' => '选品池ID   可选：MC201132（民族中国风），MC201136（流行音乐），MC201139（甜蜜爱情），MC201133（民谣），MC201137（放松阅读），MC201138（快乐），PA202029（故事），PA202030（儿歌），PA202028（国学历史），PA202032（百科），PA202031（英文儿歌）',
            'type' => 'string',
            'required' => true,
            'example' => 'MC201132',
          ),
        ),
        1 => 
        array (
          'name' => 'ScgFilter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '查询filter',
            'description' => '查询filter',
            'type' => 'object',
            'properties' => 
            array (
              'SortParam' => 
              array (
                'title' => '排序参数',
                'description' => '排序参数',
                'type' => 'object',
                'properties' => 
                array (
                  'SortKey' => 
                  array (
                    'title' => '排序字段',
                    'description' => '排序字段',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'internal_id',
                  ),
                  'SortText' => 
                  array (
                    'title' => '排序字段（默认空字符串）',
                    'description' => '排序字段（默认空字符串）',
                    'type' => 'string',
                    'required' => false,
                    'example' => '“”',
                  ),
                  'SortOrder' => 
                  array (
                    'title' => '排序顺序',
                    'description' => '排序顺序',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ASC',
                  ),
                ),
                'required' => true,
              ),
              'UseOffSet' => 
              array (
                'title' => '是否使用pageParam对象分页，offSetParam和pageParam二选一，默认分页模式为pageParam',
                'description' => '是否使用pageParam对象分页，offSetParam和pageParam二选一，默认分页模式为pageParam',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'OffSetParam' => 
              array (
                'title' => '分页类型',
                'description' => '分页类型',
                'type' => 'object',
                'properties' => 
                array (
                  'Offset' => 
                  array (
                    'title' => '跳过的条目数量',
                    'description' => '跳过的条目数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Limit' => 
                  array (
                    'title' => '返回的条目数量',
                    'description' => '返回的条目数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '20',
                  ),
                ),
                'required' => false,
              ),
              'PageParam' => 
              array (
                'title' => '分页类型',
                'description' => '分页类型',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'title' => '每页记录条数',
                    'description' => '每页记录条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'PageNum' => 
                  array (
                    'title' => '页数',
                    'description' => '页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'PageNum' => 
              array (
                'title' => '页数',
                'description' => '页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Message' => 
              array (
                'title' => '响应信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PageSize' => 
              array (
                'title' => '每页记录条数',
                'description' => '每页记录条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Result' => 
              array (
                'title' => '返回的内容数据',
                'description' => '返回的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的内容数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Source' => 
                    array (
                      'title' => '内容来源',
                      'description' => '内容来源',
                      'type' => 'string',
                      'example' => 'xiami',
                    ),
                    'Title' => 
                    array (
                      'title' => '内容标题',
                      'description' => '内容标题',
                      'type' => 'string',
                      'example' => '那个人',
                    ),
                    'Type' => 
                    array (
                      'title' => '内容类型',
                      'description' => '内容类型',
                      'type' => 'string',
                      'example' => 'music',
                    ),
                    'Cover' => 
                    array (
                      'title' => '内容封面',
                      'description' => '内容封面',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Img' => 
                        array (
                          'title' => '封面图片',
                          'description' => '封面图片（Img与Large，Medium，Small可能不会同时出现，会出现只有其中一种的情况）',
                          'type' => 'string',
                          'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                        ),
                        'canResize' => 
                        array (
                          'title' => '是否支持缩放',
                          'description' => '是否支持缩放',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Large' => 
                        array (
                          'title' => '大图',
                          'description' => '大图',
                          'type' => 'string',
                          'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                        ),
                        'Medium' => 
                        array (
                          'title' => '中图',
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                        ),
                        'Small' => 
                        array (
                          'title' => '小图',
                          'description' => '小图',
                          'type' => 'string',
                          'example' => 'http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg',
                        ),
                      ),
                    ),
                    'Alias' => 
                    array (
                      'title' => '别名',
                      'description' => '别名',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '别名',
                        'type' => 'string',
                        'example' => '那个人',
                      ),
                    ),
                    'SupportAudition' => 
                    array (
                      'title' => '是否支持试听
',
                      'description' => '是否支持试听
',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ContentType' => 
                    array (
                      'title' => '内容类型',
                      'description' => '内容类型',
                      'type' => 'string',
                      'example' => 'MUSIC_CONTENT',
                    ),
                    'Singers' => 
                    array (
                      'title' => '歌手名',
                      'description' => '歌手名',
                      'type' => 'string',
                      'example' => '黎偌天',
                    ),
                    'AlbumRawId' => 
                    array (
                      'title' => '专辑ID',
                      'description' => '专辑ID',
                      'type' => 'string',
                      'example' => '1795716629',
                    ),
                    'Album' => 
                    array (
                      'title' => '是否为专辑',
                      'description' => '是否为专辑',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AlbumType' => 
                    array (
                      'title' => '专辑类型',
                      'description' => '专辑类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'AuthorIds' => 
                    array (
                      'title' => '作者ID
',
                      'description' => '作者ID
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '作者ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1795716629',
                      ),
                    ),
                    'IsAudition' => 
                    array (
                      'title' => '能否试听',
                      'description' => '能否试听',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AuthorNames' => 
                    array (
                      'title' => '作者姓名',
                      'description' => '作者姓名',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '作者姓名',
                        'type' => 'string',
                        'example' => '"王一鸣Iris", "黎偌天",  "薛晨雨"',
                      ),
                    ),
                    'NeedCharge' => 
                    array (
                      'title' => '是否需要收费',
                      'description' => '是否需要收费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'IsCharge' => 
                    array (
                      'title' => '是否收费',
                      'description' => '是否收费',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'Category' => 
                    array (
                      'title' => '类别',
                      'description' => '类别',
                      'type' => 'string',
                      'example' => 'audio',
                    ),
                    'RawId' => 
                    array (
                      'title' => '三方内容Id',
                      'description' => '三方内容ID',
                      'type' => 'string',
                      'example' => '1795716629',
                    ),
                  ),
                ),
                'example' => '{"sourceId":0,"copyright":0,"releaseTime":1196438400000,"hotScore":0.9546929544543479,"tppExtendInfo":"{\\"userEvent\\":\\"前台投放\\",\\"scgTopicName\\":\\"inside民族中国风曲风音乐库\\",\\"scgTopicId\\":\\"MC201132\\"}","source":"xiami","title":"题帕三绝","type":"music","x1Pv30d":10307,"valid":10,"cover":{"img":"http://img.xiami.net/qianxun/07d8ec1a38a5462c3afbfac41413b8af/47244c25fcf3a8f67442d02e3127d023-500x432.jpg","canResize":false},"duration":0,"rawId":"1771626071","albumType":0,"alias":["题帕三绝"],"id":268033175,"supportAudition":false,"contentType":"MUSIC_CONTENT","authorIds":[],"singers":"陈力","albumRawId":"1771626071","album":false,"x1PvTotal":14676,"commCateId":80021001,"finished":0,"isAudition":false,"appIds":[],"authorNames":["陈力","王立平","曹雪芹"],"needCharge":false,"isCharge":false,"category":"audio"}',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"Message\\": \\"OK\\",\\n  \\"PageSize\\": 10,\\n  \\"Result\\": [\\n    {\\n      \\"Source\\": \\"xiami\\",\\n      \\"Title\\": \\"那个人\\",\\n      \\"Type\\": \\"music\\",\\n      \\"Cover\\": {\\n        \\"Img\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"canResize\\": false,\\n        \\"Large\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"Medium\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\",\\n        \\"Small\\": \\"http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg\\"\\n      },\\n      \\"Alias\\": [\\n        \\"那个人\\"\\n      ],\\n      \\"SupportAudition\\": false,\\n      \\"ContentType\\": \\"MUSIC_CONTENT\\",\\n      \\"Singers\\": \\"黎偌天\\",\\n      \\"AlbumRawId\\": \\"1795716629\\",\\n      \\"Album\\": false,\\n      \\"AlbumType\\": 0,\\n      \\"AuthorIds\\": [\\n        1795716629\\n      ],\\n      \\"IsAudition\\": false,\\n      \\"AuthorNames\\": [\\n        \\"\\\\\\"王一鸣Iris\\\\\\", \\\\\\"黎偌天\\\\\\",  \\\\\\"薛晨雨\\\\\\"\\"\\n      ],\\n      \\"NeedCharge\\": false,\\n      \\"IsCharge\\": \\"false\\",\\n      \\"Category\\": \\"audio\\",\\n      \\"RawId\\": \\"1795716629\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\",\\n  \\"Code\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ScgSearchResponse>\\n    <PageNum>1</PageNum>\\n    <Message>OK</Message>\\n    <PageSize>10</PageSize>\\n    <Result>\\n        <Source>xiami</Source>\\n        <Title>那个人</Title>\\n        <Type>music</Type>\\n        <Cover>\\n            <Img>http://img.xiami.net/images/album/img59/56/58da2153e3133_2826959_1490690387.jpg</Img>\\n            <canResize>false</canResize>\\n        </Cover>\\n        <Alias>那个人</Alias>\\n        <SupportAudition>false</SupportAudition>\\n        <ContentType>MUSIC_CONTENT</ContentType>\\n        <Singers>黎偌天</Singers>\\n        <AlbumRawId>1795716629</AlbumRawId>\\n        <Album>false</Album>\\n        <AlbumType>0</AlbumType>\\n        <AuthorIds>1795716629</AuthorIds>\\n        <IsAudition>false</IsAudition>\\n        <AuthorNames>\\"王一鸣Iris\\", \\"黎偌天\\",  \\"薛晨雨\\"</AuthorNames>\\n        <NeedCharge>false</NeedCharge>\\n        <IsCharge>false</IsCharge>\\n        <Category>audio</Category>\\n        <RawId>1795716629</RawId>\\n    </Result>\\n    <RequestId>73C67BD9-175A-1324-8202-9FAABBB3E6FA</RequestId>\\n    <Code>200</Code>\\n</ScgSearchResponse>","errorExample":""}]',
      'title' => '根据选品池ID查询选品池内容',
    ),
    'AddAndRemoveFavoriteContent' => 
    array (
      'summary' => '收藏或取消收藏。',
      'path' => '/v1.0/ssp/AddAndRemoveFavoriteContent',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'OpenAddAndRemoveFavoriteContentRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'PackageType' => 
              array (
                'description' => '内容类型

内容：CONTENT；专辑：ALBUM；歌单：COLLECT。',
                'type' => 'string',
                'required' => true,
                'example' => 'CONTENT',
              ),
              'OpenSourceRawIdPair' => 
              array (
                'description' => '收藏/取消对象',
                'type' => 'object',
                'properties' => 
                array (
                  'RawId' => 
                  array (
                    'description' => '三方id',
                    'type' => 'string',
                    'required' => true,
                    'example' => '2105818057',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'xiami',
                  ),
                  'ExtendInfo' => 
                  array (
                    'description' => '扩展信息',
                    'type' => 'object',
                    'required' => false,
                  ),
                ),
                'required' => true,
              ),
              'FavoriteCmd' => 
              array (
                'description' => '操作类型

收藏：ADD；取消收藏：REMOVE',
                'type' => 'string',
                'required' => true,
                'example' => 'ADD',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。` UNION_ID:` 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '121212121',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"121212121\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAndRemoveFavoriteContentResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>121212121</RequestId>\\n    <Success>true</Success>\\n</AddAndRemoveFavoriteContentResponse>","errorExample":""}]',
      'title' => '收藏或取消收藏',
    ),
    'CreatePlayingList' => 
    array (
      'summary' => '创建播放列表并播放指定的内容。',
      'path' => '/v1.0/ssp/CreatePlayingList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'OpenCreatePlayingListRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'PlayFrom' => 
              array (
                'description' => '播放来源,配置播控能力的唯一标识

可空，默认为default',
                'type' => 'string',
                'required' => false,
                'example' => 'default',
              ),
              'ContentType' => 
              array (
                'description' => '播放内容类型

内容：content；专辑：album；歌单：collect',
                'type' => 'string',
                'required' => true,
                'example' => 'content',
              ),
              'ContentList' => 
              array (
                'description' => '播放内容列表

若是内容，支持多个；若是专辑，只有第一个有效。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '播放对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RawId' => 
                    array (
                      'description' => '三方id

如果是内容则是内容id；如果是专辑则是专辑id',
                      'type' => 'string',
                      'required' => true,
                      'example' => '12345',
                    ),
                    'Source' => 
                    array (
                      'description' => '来源',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'xiami',
                    ),
                  ),
                  'required' => true,
                ),
                'required' => true,
              ),
              'Index' => 
              array (
                'description' => '播放的index

可空。默认为0，表示从头播放',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'NeedAlbumContinued' => 
              array (
                'description' => '专辑是否续播，比如上次专辑听到第五集，是否继续从第五集开始。默认为true',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'PlayMode' => 
              array (
                'description' => '播放模式

列表循环：Repeat；随机：Shuffle；单曲循环：RepeatOne；顺序播放：Normal。',
                'type' => 'string',
                'required' => false,
                'example' => 'Repeat',
              ),
              'ExtendInfo' => 
              array (
                'description' => '扩展信息',
                'type' => 'object',
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME：`apk包名，Android应用客户链路的编码类型。
`SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。
编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。
`SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
                'enum' => 
                array (
                ),
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。
`UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'UNION_ID',
                  1 => 'OPEN_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'OpenServiceResult<OpenPlayingItem>',
            'description' => 'OpenServiceResult<OpenPlayingItem>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码',
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RawId' => 
                  array (
                    'title' => '三方id',
                    'description' => '三方id',
                    'type' => 'string',
                    'example' => '550144364',
                  ),
                  'Source' => 
                  array (
                    'title' => '来源',
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'ximalayav2',
                  ),
                  'AlbumRawId' => 
                  array (
                    'title' => '三方专辑id',
                    'description' => '三方专辑id',
                    'type' => 'string',
                    'example' => '260744',
                  ),
                  'AlbumName' => 
                  array (
                    'title' => '三方专辑id',
                    'description' => '三方专辑名称',
                    'type' => 'string',
                    'example' => '晚安妈妈睡前故事',
                  ),
                  'Liked' => 
                  array (
                    'title' => '是否收藏',
                    'description' => '是否收藏',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Singer' => 
                  array (
                    'title' => '作者',
                    'description' => '作者',
                    'type' => 'string',
                    'example' => '晚安妈妈',
                  ),
                  'Title' => 
                  array (
                    'title' => '标题',
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '足球鞋赛车 晚安妈妈',
                  ),
                  'Cover' => 
                  array (
                    'title' => '封面图片对象',
                    'description' => '封面图片对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Mediam' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                    ),
                  ),
                  'PlayMode' => 
                  array (
                    'title' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                    'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                    'type' => 'string',
                    'example' => 'Repeat',
                  ),
                  'AudioLength' => 
                  array (
                    'title' => '长度',
                    'description' => '长度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '190',
                  ),
                  'Progress' => 
                  array (
                    'title' => '歌曲播放进度',
                    'description' => '歌曲播放进度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LyricUrl' => 
                  array (
                    'title' => '歌词url',
                    'description' => '歌词url',
                    'type' => 'string',
                    'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                  ),
                  'Copyright' => 
                  array (
                    'title' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                    'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Type' => 
                  array (
                    'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                    'type' => 'string',
                    'example' => 'story',
                  ),
                  'ItemUrl' => 
                  array (
                    'description' => '播放url',
                    'type' => 'string',
                    'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                  ),
                  'DefaultPlayOrder' => 
                  array (
                    'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Pos' => 
                  array (
                    'description' => '该项在播放列表中的位置',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Copyright\\": 0,\\n    \\"Type\\": \\"story\\",\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <LyricUrl>https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc</LyricUrl>\\n        <Copyright>0</Copyright>\\n        <Type>story</Type>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</CreatePlayingListResponse>","errorExample":""}]',
      'title' => '播放列表创建',
    ),
    'GetAlbum' => 
    array (
      'summary' => '按照特定的id获取专辑信息。',
      'path' => '/v1.0/ssp/GetAlbum',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专辑id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12343',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认值song',
            'type' => 'string',
            'required' => true,
            'example' => 'song',
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
                'description' => '请求requestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Alias' => 
                  array (
                    'description' => '别名',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '别名',
                      'type' => 'string',
                      'example' => '超能狂少在都市',
                    ),
                  ),
                  'Audition' => 
                  array (
                    'description' => '是否可试听',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Authors' => 
                  array (
                    'description' => '作者信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '作者信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AuthorTypes' => 
                        array (
                          'description' => '作者类型',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '作者类型',
                            'type' => 'string',
                            'example' => 'ANCHOR',
                          ),
                        ),
                        'Gender' => 
                        array (
                          'description' => '性别',
                          'type' => 'string',
                          'example' => 'MALE',
                        ),
                        'Id' => 
                        array (
                          'description' => '作者主键id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '13123',
                        ),
                        'Online' => 
                        array (
                          'description' => '是否在线',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Source' => 
                        array (
                          'description' => '来源',
                          'type' => 'string',
                          'example' => 'qignting',
                        ),
                        'Title' => 
                        array (
                          'description' => '作者标题',
                          'type' => 'string',
                          'example' => '超能狂少在都市',
                        ),
                      ),
                    ),
                  ),
                  'Category' => 
                  array (
                    'description' => '根据所属公共类目转换controlType',
                    'type' => 'string',
                    'example' => 'audio',
                  ),
                  'Charge' => 
                  array (
                    'description' => '是否收费',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CommCateId' => 
                  array (
                    'description' => '对应的类目id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '80012017',
                  ),
                  'Cover' => 
                  array (
                    'description' => '专辑封面图片',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '内容描述',
                    'type' => 'string',
                    'example' => '内容描述',
                  ),
                  'HotScore' => 
                  array (
                    'description' => '热度分',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '10',
                  ),
                  'Id' => 
                  array (
                    'description' => '专辑id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1231231',
                  ),
                  'ItemType' => 
                  array (
                    'description' => '内容的类型, 音乐 音频 电台 笑话等',
                    'type' => 'string',
                    'example' => 'ALBUM',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'qignting',
                  ),
                  'Title' => 
                  array (
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '超能狂少在都市',
                  ),
                  'Type' => 
                  array (
                    'description' => '根据所属公共类目转换favoriteType',
                    'type' => 'string',
                    'example' => 'program',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Finished' => 
                  array (
                    'description' => '是否完结',
                    'type' => 'string',
                    'example' => 'FINISHED',
                  ),
                  'TotalEpisode' => 
                  array (
                    'description' => '总集数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'RawId' => 
                  array (
                    'description' => '三方id',
                    'type' => 'string',
                    'example' => '23242',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Alias\\": [\\n      \\"超能狂少在都市\\"\\n    ],\\n    \\"Audition\\": false,\\n    \\"Authors\\": [\\n      {\\n        \\"AuthorTypes\\": [\\n          \\"ANCHOR\\"\\n        ],\\n        \\"Gender\\": \\"MALE\\",\\n        \\"Id\\": 13123,\\n        \\"Online\\": false,\\n        \\"Source\\": \\"qignting\\",\\n        \\"Title\\": \\"超能狂少在都市\\"\\n      }\\n    ],\\n    \\"Category\\": \\"audio\\",\\n    \\"Charge\\": false,\\n    \\"CommCateId\\": 80012017,\\n    \\"Cover\\": {\\n      \\"CanResize\\": false,\\n      \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n    },\\n    \\"Description\\": \\"内容描述\\",\\n    \\"HotScore\\": 10,\\n    \\"Id\\": 1231231,\\n    \\"ItemType\\": \\"ALBUM\\",\\n    \\"Source\\": \\"qignting\\",\\n    \\"Title\\": \\"超能狂少在都市\\",\\n    \\"Type\\": \\"program\\",\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Finished\\": \\"FINISHED\\",\\n    \\"TotalEpisode\\": 12,\\n    \\"RawId\\": \\"23242\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAlbumResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Gender>MALE</Gender>\\n            <Id>13123</Id>\\n            <Online>false</Online>\\n            <Source>qignting</Source>\\n            <Title>超能狂少在都市</Title>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>1231231</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qignting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <Finished>FINISHED</Finished>\\n        <TotalEpisode>12</TotalEpisode>\\n        <RawId>23242</RawId>\\n    </Result>\\n</GetAlbumResponse>","errorExample":""}]',
      'title' => '按照特定的id获取专辑信息',
    ),
    'GetContent' => 
    array (
      'summary' => ' 按照特定的id获取内容信息',
      'path' => '/v1.0/ssp/GetContent',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123123',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认值song',
            'type' => 'string',
            'required' => true,
            'example' => 'song',
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
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求RequestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Alias' => 
                  array (
                    'description' => '别名',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '别名',
                      'type' => 'string',
                      'example' => '超能狂少在都市',
                    ),
                  ),
                  'Audition' => 
                  array (
                    'description' => '是否可试听',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Authors' => 
                  array (
                    'description' => '内容的作者',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内容作者',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AuthorTypes' => 
                        array (
                          'description' => '作者类型',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '作者类型',
                            'type' => 'string',
                            'example' => 'ANCHOR',
                          ),
                        ),
                        'Gender' => 
                        array (
                          'description' => '性别',
                          'type' => 'string',
                          'example' => 'MALE',
                        ),
                        'Id' => 
                        array (
                          'description' => '作者主键id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123123',
                        ),
                        'Online' => 
                        array (
                          'description' => '是否在线',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Source' => 
                        array (
                          'description' => '来源',
                          'type' => 'string',
                          'example' => 'qingting',
                        ),
                        'Title' => 
                        array (
                          'description' => '作者标题',
                          'type' => 'string',
                          'example' => '播音呆瓜小贼',
                        ),
                      ),
                    ),
                  ),
                  'Category' => 
                  array (
                    'description' => '根据所属公共类目转换controlType',
                    'type' => 'string',
                    'example' => 'audio',
                  ),
                  'Charge' => 
                  array (
                    'description' => '是否收费',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CommCateId' => 
                  array (
                    'description' => '对应的类目id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '80012017',
                  ),
                  'Cover' => 
                  array (
                    'description' => '专辑封面图片',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '内容描述',
                    'type' => 'string',
                    'example' => '内容描述',
                  ),
                  'HotScore' => 
                  array (
                    'description' => '热度分',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '内容描述',
                  ),
                  'Id' => 
                  array (
                    'description' => '内容id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '13597709',
                  ),
                  'ItemType' => 
                  array (
                    'description' => '内容的类型, 音乐 音频 电台 笑话等',
                    'type' => 'string',
                    'example' => 'ALBUM',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'qingting',
                  ),
                  'Title' => 
                  array (
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '超能狂少在都市',
                  ),
                  'Type' => 
                  array (
                    'description' => '根据所属公共类目转换favoriteType',
                    'type' => 'string',
                    'example' => 'program',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Duration' => 
                  array (
                    'description' => '时长信息',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '180',
                  ),
                  'AlbumId' => 
                  array (
                    'description' => '对应的专辑id',
                    'type' => 'string',
                    'example' => '1231',
                  ),
                  'Lyric' => 
                  array (
                    'description' => '歌词信息',
                    'type' => 'string',
                    'example' => 'http://1231.lrc',
                  ),
                  'Styles' => 
                  array (
                    'description' => '曲风',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '曲风',
                      'type' => 'string',
                      'example' => '1312',
                    ),
                  ),
                  'RawId' => 
                  array (
                    'description' => '内容的三方id',
                    'type' => 'string',
                    'example' => '1231231',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": {\\n    \\"Alias\\": [\\n      \\"超能狂少在都市\\"\\n    ],\\n    \\"Audition\\": false,\\n    \\"Authors\\": [\\n      {\\n        \\"AuthorTypes\\": [\\n          \\"ANCHOR\\"\\n        ],\\n        \\"Gender\\": \\"MALE\\",\\n        \\"Id\\": 123123,\\n        \\"Online\\": false,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Title\\": \\"播音呆瓜小贼\\"\\n      }\\n    ],\\n    \\"Category\\": \\"audio\\",\\n    \\"Charge\\": false,\\n    \\"CommCateId\\": 80012017,\\n    \\"Cover\\": {\\n      \\"CanResize\\": false,\\n      \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n      \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n    },\\n    \\"Description\\": \\"内容描述\\",\\n    \\"HotScore\\": 0,\\n    \\"Id\\": 13597709,\\n    \\"ItemType\\": \\"ALBUM\\",\\n    \\"Source\\": \\"qingting\\",\\n    \\"Title\\": \\"超能狂少在都市\\",\\n    \\"Type\\": \\"program\\",\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Duration\\": 180,\\n    \\"AlbumId\\": \\"1231\\",\\n    \\"Lyric\\": \\"http://1231.lrc\\",\\n    \\"Styles\\": [\\n      \\"1312\\"\\n    ],\\n    \\"RawId\\": \\"1231231\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Gender>MALE</Gender>\\n            <Id>123123</Id>\\n            <Online>false</Online>\\n            <Source>qingting</Source>\\n            <Title>播音呆瓜小贼</Title>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <Duration>180</Duration>\\n        <AlbumId>1231</AlbumId>\\n        <Lyric>http://1231.lrc</Lyric>\\n        <Styles>1312</Styles>\\n        <RawId>1231231</RawId>\\n    </Result>\\n</GetContentResponse>","errorExample":""}]',
      'title' => ' 按照特定的id获取内容信息',
    ),
    'GetCurrentPlayingItem' => 
    array (
      'summary' => '获取当前播放项。',
      'path' => '/v1.0/ssp/GetCurrentPlayingItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。

',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RawId' => 
                  array (
                    'description' => '三方id',
                    'type' => 'string',
                    'example' => '550144364',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'ximalayav2',
                  ),
                  'AlbumRawId' => 
                  array (
                    'description' => '三方专辑id',
                    'type' => 'string',
                    'example' => '260744',
                  ),
                  'AlbumName' => 
                  array (
                    'description' => '三方专辑名称',
                    'type' => 'string',
                    'example' => '晚安妈妈睡前故事',
                  ),
                  'Liked' => 
                  array (
                    'description' => '是否收藏',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'Singer' => 
                  array (
                    'description' => '作者',
                    'type' => 'string',
                    'example' => '晚安妈妈',
                  ),
                  'Title' => 
                  array (
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '足球鞋赛车 晚安妈妈',
                  ),
                  'Cover' => 
                  array (
                    'description' => '封面图片对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Mediam' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                    ),
                  ),
                  'PlayMode' => 
                  array (
                    'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                    'type' => 'string',
                    'example' => 'Repeat',
                  ),
                  'AudioLength' => 
                  array (
                    'description' => '长度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '190',
                  ),
                  'Progress' => 
                  array (
                    'description' => '歌曲播放进度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LyricUrl' => 
                  array (
                    'description' => '歌词url',
                    'type' => 'string',
                    'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                  ),
                  'Copyright' => 
                  array (
                    'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Type' => 
                  array (
                    'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                    'type' => 'string',
                    'example' => 'story',
                  ),
                  'ItemUrl' => 
                  array (
                    'description' => '播放url',
                    'type' => 'string',
                    'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                  ),
                  'DefaultPlayOrder' => 
                  array (
                    'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Pos' => 
                  array (
                    'description' => '该项在播放列表中的位置',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息

',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": \\"false\\",\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Copyright\\": 0,\\n    \\"Type\\": \\"story\\",\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCurrentPlayingItemResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Copyright>0</Copyright>\\n        <Type>story</Type>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</GetCurrentPlayingItemResponse>","errorExample":""}]',
      'title' => '获取当前播放项',
    ),
    'GetCurrentPlayingList' => 
    array (
      'summary' => '获取当前播放列表。',
      'path' => '/v1.0/ssp/GetCurrentPlayingList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'OpenQueryPlayListRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNum' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '15',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RawId' => 
                    array (
                      'description' => '三方id',
                      'type' => 'string',
                      'example' => '550144364',
                    ),
                    'Source' => 
                    array (
                      'description' => '来源',
                      'type' => 'string',
                      'example' => 'ximalayav2',
                    ),
                    'AlbumRawId' => 
                    array (
                      'description' => '三方专辑id',
                      'type' => 'string',
                      'example' => '260744',
                    ),
                    'AlbumName' => 
                    array (
                      'description' => '三方专辑名称',
                      'type' => 'string',
                      'example' => '晚安妈妈睡前故事',
                    ),
                    'Liked' => 
                    array (
                      'description' => '是否收藏',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Singer' => 
                    array (
                      'description' => '作者',
                      'type' => 'string',
                      'example' => '晚安妈妈',
                    ),
                    'Title' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '足球鞋赛车 晚安妈妈',
                    ),
                    'Cover' => 
                    array (
                      'description' => '封面图片对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Img' => 
                        array (
                          'description' => '默认图片',
                          'type' => 'string',
                          'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                        ),
                        'Large' => 
                        array (
                          'description' => '大图',
                          'type' => 'string',
                          'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                        ),
                        'Mediam' => 
                        array (
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                        ),
                        'Medium' => 
                        array (
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                        ),
                        'Small' => 
                        array (
                          'description' => '小图',
                          'type' => 'string',
                          'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                        ),
                        'CanResize' => 
                        array (
                          'description' => '是否可以使用oss规则裁剪',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'PlayMode' => 
                    array (
                      'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'AudioLength' => 
                    array (
                      'description' => '长度',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '190',
                    ),
                    'Progress' => 
                    array (
                      'description' => '歌曲播放进度',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'LyricUrl' => 
                    array (
                      'description' => '歌词url',
                      'type' => 'string',
                      'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                    ),
                    'Type' => 
                    array (
                      'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                      'type' => 'string',
                      'example' => 'story',
                    ),
                    'Copyright' => 
                    array (
                      'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ItemUrl' => 
                    array (
                      'description' => '播放url',
                      'type' => 'string',
                      'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                    ),
                    'DefaultPlayOrder' => 
                    array (
                      'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Valid' => 
                    array (
                      'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                      'type' => 'string',
                      'example' => 'VALID',
                    ),
                    'Pos' => 
                    array (
                      'description' => '该项在播放列表中的位置',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RawId\\": \\"550144364\\",\\n      \\"Source\\": \\"ximalayav2\\",\\n      \\"AlbumRawId\\": \\"260744\\",\\n      \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n      \\"Liked\\": false,\\n      \\"Singer\\": \\"晚安妈妈\\",\\n      \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n      \\"Cover\\": {\\n        \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n        \\"CanResize\\": false\\n      },\\n      \\"PlayMode\\": \\"Normal\\",\\n      \\"AudioLength\\": 190,\\n      \\"Progress\\": 0,\\n      \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n      \\"Type\\": \\"story\\",\\n      \\"Copyright\\": 0,\\n      \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n      \\"DefaultPlayOrder\\": 1,\\n      \\"Valid\\": \\"VALID\\",\\n      \\"Pos\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCurrentPlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Normal</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</GetCurrentPlayingListResponse>","errorExample":""}]',
      'title' => '获取当前播放列表',
    ),
    'IndexControlPlayingList' => 
    array (
      'summary' => '播放列表点击播放。',
      'path' => '/v1.0/ssp/IndexControlPlayingList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'OpenIndexControlRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'Index' => 
              array (
                'description' => '需要播放的index',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '0',
              ),
              'NeedContentContinued' => 
              array (
                'description' => '内容是否续播。默认是false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'ExtendInfo' => 
              array (
                'description' => '扩展信息',
                'type' => 'object',
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。` UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RawId' => 
                  array (
                    'description' => '三方id',
                    'type' => 'string',
                    'example' => '550144364',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'ximalayav2',
                  ),
                  'AlbumRawId' => 
                  array (
                    'description' => '三方专辑id',
                    'type' => 'string',
                    'example' => '260744',
                  ),
                  'AlbumName' => 
                  array (
                    'description' => '三方专辑名称',
                    'type' => 'string',
                    'example' => '晚安妈妈睡前故事',
                  ),
                  'Liked' => 
                  array (
                    'description' => '是否收藏',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Singer' => 
                  array (
                    'description' => '作者',
                    'type' => 'string',
                    'example' => '晚安妈妈',
                  ),
                  'Title' => 
                  array (
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '足球鞋赛车 晚安妈妈',
                  ),
                  'Cover' => 
                  array (
                    'description' => '封面图片对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Mediam' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                    ),
                  ),
                  'PlayMode' => 
                  array (
                    'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                    'type' => 'string',
                    'example' => 'Repeat',
                  ),
                  'AudioLength' => 
                  array (
                    'description' => '长度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '190',
                  ),
                  'Progress' => 
                  array (
                    'description' => '歌曲播放进度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LyricUrl' => 
                  array (
                    'description' => '歌词url',
                    'type' => 'string',
                    'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                  ),
                  'Type' => 
                  array (
                    'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                    'type' => 'string',
                    'example' => 'story',
                  ),
                  'Copyright' => 
                  array (
                    'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ItemUrl' => 
                  array (
                    'description' => '播放url',
                    'type' => 'string',
                    'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                  ),
                  'DefaultPlayOrder' => 
                  array (
                    'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Pos' => 
                  array (
                    'description' => '该项在播放列表中的位置',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Type\\": \\"story\\",\\n    \\"Copyright\\": 0,\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<IndexControlPlayingListResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</IndexControlPlayingListResponse>","errorExample":""}]',
      'title' => '播放列表点击播放',
    ),
    'ListAlbumDetail' => 
    array (
      'summary' => '获取音乐音频专辑里面的内容列表。',
      'path' => '/v1.0/ssp/ListAlbumDetail',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专辑id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '121321',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPageNum' => 
                  array (
                    'description' => '当前页',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'OpenDataItemList' => 
                  array (
                    'description' => 'data信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'data信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Alias' => 
                        array (
                          'description' => '别名',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '别名',
                            'type' => 'string',
                            'example' => '超能狂少在都市',
                          ),
                        ),
                        'Audition' => 
                        array (
                          'description' => '是否可试听',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Authors' => 
                        array (
                          'description' => '内容的作者',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '内容作者',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'AuthorTypes' => 
                              array (
                                'description' => '作者类型',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '作者类型',
                                  'type' => 'string',
                                  'example' => 'ANCHOR',
                                ),
                              ),
                              'Gender' => 
                              array (
                                'description' => '性别',
                                'type' => 'string',
                                'example' => 'MALE',
                              ),
                              'Id' => 
                              array (
                                'description' => '作者主键id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12314',
                              ),
                              'Online' => 
                              array (
                                'description' => '是否在线',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'Source' => 
                              array (
                                'description' => '来源',
                                'type' => 'string',
                                'example' => 'qingting',
                              ),
                              'Title' => 
                              array (
                                'description' => '作者标题',
                                'type' => 'string',
                                'example' => '播音呆瓜小贼',
                              ),
                            ),
                          ),
                        ),
                        'Category' => 
                        array (
                          'description' => '根据所属公共类目转换controlType',
                          'type' => 'string',
                          'example' => 'audio',
                        ),
                        'Charge' => 
                        array (
                          'description' => '是否收费',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CommCateId' => 
                        array (
                          'description' => '对应的类目id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '80012017',
                        ),
                        'Cover' => 
                        array (
                          'description' => '内容封面图片',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CanResize' => 
                            array (
                              'description' => '是否可以使用oss规则裁剪',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'Img' => 
                            array (
                              'description' => '默认图片',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                            ),
                            'Large' => 
                            array (
                              'description' => '大图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                            ),
                            'Medium' => 
                            array (
                              'description' => '中图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                            ),
                            'Small' => 
                            array (
                              'description' => '小图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                            ),
                          ),
                        ),
                        'Description' => 
                        array (
                          'description' => '内容描述',
                          'type' => 'string',
                          'example' => '内容描述',
                        ),
                        'Duration' => 
                        array (
                          'description' => '时长',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '180',
                        ),
                        'HotScore' => 
                        array (
                          'description' => '热度分',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '10',
                        ),
                        'Id' => 
                        array (
                          'description' => '内容id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1231231',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '内容的类型, 音乐 音频 电台 笑话等',
                          'type' => 'string',
                          'example' => 'ALBUM',
                        ),
                        'OrderIndex' => 
                        array (
                          'description' => 'orderIndex 顺序',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Source' => 
                        array (
                          'description' => '来源',
                          'type' => 'string',
                          'example' => 'qingting',
                        ),
                        'Styles' => 
                        array (
                          'description' => '风格',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '风格',
                            'type' => 'string',
                            'example' => '13131',
                          ),
                        ),
                        'Title' => 
                        array (
                          'description' => '标题',
                          'type' => 'string',
                          'example' => '超能狂少在都市',
                        ),
                        'Type' => 
                        array (
                          'description' => '根据所属公共类目转换favoriteType',
                          'type' => 'string',
                          'example' => 'program',
                        ),
                        'Valid' => 
                        array (
                          'description' => '是否可播',
                          'type' => 'string',
                          'example' => 'VALID',
                        ),
                        'RawId' => 
                        array (
                          'description' => '三方id',
                          'type' => 'string',
                          'example' => '12323423',
                        ),
                      ),
                    ),
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'TotalSize' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '21421',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"CurrentPageNum\\": 1,\\n    \\"OpenDataItemList\\": [\\n      {\\n        \\"Alias\\": [\\n          \\"超能狂少在都市\\"\\n        ],\\n        \\"Audition\\": false,\\n        \\"Authors\\": [\\n          {\\n            \\"AuthorTypes\\": [\\n              \\"ANCHOR\\"\\n            ],\\n            \\"Gender\\": \\"MALE\\",\\n            \\"Id\\": 12314,\\n            \\"Online\\": false,\\n            \\"Source\\": \\"qingting\\",\\n            \\"Title\\": \\"播音呆瓜小贼\\"\\n          }\\n        ],\\n        \\"Category\\": \\"audio\\",\\n        \\"Charge\\": false,\\n        \\"CommCateId\\": 80012017,\\n        \\"Cover\\": {\\n          \\"CanResize\\": false,\\n          \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n        },\\n        \\"Description\\": \\"内容描述\\",\\n        \\"Duration\\": 180,\\n        \\"HotScore\\": 10,\\n        \\"Id\\": 1231231,\\n        \\"ItemType\\": \\"ALBUM\\",\\n        \\"OrderIndex\\": 1,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Styles\\": [\\n          \\"13131\\"\\n        ],\\n        \\"Title\\": \\"超能狂少在都市\\",\\n        \\"Type\\": \\"program\\",\\n        \\"Valid\\": \\"VALID\\",\\n        \\"RawId\\": \\"12323423\\"\\n      }\\n    ],\\n    \\"PageSize\\": 10,\\n    \\"TotalSize\\": 21421\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAlbumDetailResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <CurrentPageNum>1</CurrentPageNum>\\n        <OpenDataItemList>\\n            <Alias>超能狂少在都市</Alias>\\n            <Audition>false</Audition>\\n            <Authors>\\n                <AuthorTypes>ANCHOR</AuthorTypes>\\n                <Gender>MALE</Gender>\\n                <Id>12314</Id>\\n                <Online>false</Online>\\n                <Source>qingting</Source>\\n                <Title>播音呆瓜小贼</Title>\\n            </Authors>\\n            <Category>audio</Category>\\n            <Charge>false</Charge>\\n            <CommCateId>80012017</CommCateId>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n                <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n                <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n                <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n            </Cover>\\n            <Description>内容描述</Description>\\n            <Duration>180</Duration>\\n            <HotScore>10</HotScore>\\n            <Id>1231231</Id>\\n            <ItemType>ALBUM</ItemType>\\n            <OrderIndex>1</OrderIndex>\\n            <Source>qingting</Source>\\n            <Styles>13131</Styles>\\n            <Title>超能狂少在都市</Title>\\n            <Type>program</Type>\\n            <Valid>VALID</Valid>\\n            <RawId>12323423</RawId>\\n        </OpenDataItemList>\\n        <PageSize>10</PageSize>\\n        <TotalSize>21421</TotalSize>\\n    </Result>\\n</ListAlbumDetailResponse>","errorExample":""}]',
      'title' => '获取音乐音频专辑里面的内容列表',
    ),
    'ListCateContent' => 
    array (
      'summary' => '根据特定的类目,按照指定的排序顺序获取该类目下的内容。',
      'path' => '/v1.0/ssp/ListCateContent',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Request',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'CateId' => 
              array (
                'description' => '类目id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '80010',
              ),
              'IsAlbum' => 
              array (
                'description' => '是否查询专辑',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
              'SortBy' => 
              array (
                'description' => '排序字段',
                'type' => 'string',
                'required' => false,
                'example' => 'hot_score',
              ),
              'SortOrder' => 
              array (
                'description' => '排序方式',
                'type' => 'string',
                'required' => true,
                'example' => 'DESC',
                'enum' => 
                array (
                  0 => 'ASC',
                  1 => 'DESC',
                ),
              ),
              'PageNum' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '	设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'sucess',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalSize' => 
                  array (
                    'description' => '总记录数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12002',
                  ),
                  'CurrentPageNum' => 
                  array (
                    'description' => '当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页记录书',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'OpenDataItemList' => 
                  array (
                    'description' => 'data信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'data信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'id' => 
                        array (
                          'description' => '主键id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '26152778',
                        ),
                        'Source' => 
                        array (
                          'description' => '来源',
                          'type' => 'string',
                          'example' => 'qingting',
                        ),
                        'Title' => 
                        array (
                          'description' => '标题',
                          'type' => 'string',
                          'example' => '超能狂少在都市',
                        ),
                        'Authors' => 
                        array (
                          'description' => '作者信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '作者信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RawId' => 
                              array (
                                'description' => '三方作者id',
                                'type' => 'string',
                                'example' => '123123',
                              ),
                              'Gender' => 
                              array (
                                'description' => '性别',
                                'type' => 'string',
                                'example' => 'MALE',
                              ),
                              'AuthorTypes' => 
                              array (
                                'description' => '作者类型',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '作者类型',
                                  'type' => 'string',
                                  'example' => 'ANCHOR',
                                ),
                              ),
                              'Source' => 
                              array (
                                'description' => '来源',
                                'type' => 'string',
                                'example' => 'qingting',
                              ),
                              'Cover' => 
                              array (
                                'description' => '头像图片',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Img' => 
                                  array (
                                    'description' => '默认图片',
                                    'type' => 'string',
                                    'example' => 'https://a.jpg',
                                  ),
                                  'Large' => 
                                  array (
                                    'description' => '大图',
                                    'type' => 'string',
                                    'example' => 'https://a.jpg',
                                  ),
                                  'Mediam' => 
                                  array (
                                    'description' => '中图（Deprecated）',
                                    'type' => 'string',
                                    'example' => 'https://a.jpg',
                                  ),
                                  'Medium' => 
                                  array (
                                    'description' => '中图',
                                    'type' => 'string',
                                    'example' => 'https://a.jpg',
                                  ),
                                  'Small' => 
                                  array (
                                    'description' => '小图',
                                    'type' => 'string',
                                    'example' => 'https://a.jpg',
                                  ),
                                  'CanResize' => 
                                  array (
                                    'description' => '是否可以使用oss规则裁剪',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                ),
                              ),
                              'Id' => 
                              array (
                                'description' => '作者信息主键id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '13597709',
                              ),
                              'Title' => 
                              array (
                                'description' => '作者标题',
                                'type' => 'string',
                                'example' => '播音呆瓜小贼',
                              ),
                              'Description' => 
                              array (
                                'description' => '作者描述',
                                'type' => 'string',
                                'example' => '播音呆瓜小贼',
                              ),
                              'Online' => 
                              array (
                                'description' => '是否在线',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                            ),
                          ),
                        ),
                        'ItemType' => 
                        array (
                          'description' => ' 内容的类型, 音乐 音频 电台 笑话等',
                          'type' => 'string',
                          'example' => 'ALBUM',
                        ),
                        'Category' => 
                        array (
                          'description' => '根据所属公共类目转换controlType',
                          'type' => 'string',
                          'example' => 'audio',
                        ),
                        'Type' => 
                        array (
                          'description' => '根据所属公共类目转换favoriteType',
                          'type' => 'string',
                          'example' => 'program',
                        ),
                        'HotScore' => 
                        array (
                          'description' => '热度分',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0',
                        ),
                        'Valid' => 
                        array (
                          'description' => ' 是否可播',
                          'type' => 'string',
                          'example' => 'VALID',
                        ),
                        'Cover' => 
                        array (
                          'description' => '专辑封面图片',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Img' => 
                            array (
                              'description' => '默认图片',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                            ),
                            'Large' => 
                            array (
                              'description' => '大图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718275.jpg',
                            ),
                            'Mediam' => 
                            array (
                              'description' => '中图（Deprecated）',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020718275.jpg',
                            ),
                            'Medium' => 
                            array (
                              'description' => '中图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/20170207175.jpg',
                            ),
                            'Small' => 
                            array (
                              'description' => '小图',
                              'type' => 'string',
                              'example' => 'http://pic.qtfm.cn/2017/0207/2017020675.jpg',
                            ),
                            'canResize' => 
                            array (
                              'description' => '是否可以使用oss规则裁剪',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                          ),
                        ),
                        'CommCateId' => 
                        array (
                          'description' => '对应的类目id',
                          'type' => 'string',
                          'example' => '80012017',
                        ),
                        'Alias' => 
                        array (
                          'description' => '别名',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '别名',
                            'type' => 'string',
                            'example' => '超能狂少在都市',
                          ),
                        ),
                        'Charge' => 
                        array (
                          'description' => '是否收费',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Audition' => 
                        array (
                          'description' => '是否可试听',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Description' => 
                        array (
                          'description' => '内容描述',
                          'type' => 'string',
                          'example' => '作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！',
                        ),
                        'RawId' => 
                        array (
                          'description' => '专辑三方id',
                          'type' => 'string',
                          'example' => '206775',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"sucess\\",\\n  \\"Result\\": {\\n    \\"TotalSize\\": 12002,\\n    \\"CurrentPageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"OpenDataItemList\\": [\\n      {\\n        \\"id\\": 26152778,\\n        \\"Source\\": \\"qingting\\",\\n        \\"Title\\": \\"超能狂少在都市\\",\\n        \\"Authors\\": [\\n          {\\n            \\"RawId\\": \\"123123\\",\\n            \\"Gender\\": \\"MALE\\",\\n            \\"AuthorTypes\\": [\\n              \\"ANCHOR\\"\\n            ],\\n            \\"Source\\": \\"qingting\\",\\n            \\"Cover\\": {\\n              \\"Img\\": \\"https://a.jpg\\",\\n              \\"Large\\": \\"https://a.jpg\\",\\n              \\"Mediam\\": \\"https://a.jpg\\",\\n              \\"Medium\\": \\"https://a.jpg\\",\\n              \\"Small\\": \\"https://a.jpg\\",\\n              \\"CanResize\\": false\\n            },\\n            \\"Id\\": 13597709,\\n            \\"Title\\": \\"播音呆瓜小贼\\",\\n            \\"Description\\": \\"播音呆瓜小贼\\",\\n            \\"Online\\": true\\n          }\\n        ],\\n        \\"ItemType\\": \\"ALBUM\\",\\n        \\"Category\\": \\"audio\\",\\n        \\"Type\\": \\"program\\",\\n        \\"HotScore\\": 0,\\n        \\"Valid\\": \\"VALID\\",\\n        \\"Cover\\": {\\n          \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n          \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718275.jpg\\",\\n          \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718275.jpg\\",\\n          \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/20170207175.jpg\\",\\n          \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020675.jpg\\",\\n          \\"canResize\\": false\\n        },\\n        \\"CommCateId\\": \\"80012017\\",\\n        \\"Alias\\": [\\n          \\"超能狂少在都市\\"\\n        ],\\n        \\"Charge\\": false,\\n        \\"Audition\\": true,\\n        \\"Description\\": \\"作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！\\",\\n        \\"RawId\\": \\"206775\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCateContentResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Message>sucess</Message>\\n    <Result>\\n        <TotalSize>12002</TotalSize>\\n        <CurrentPageNum>1</CurrentPageNum>\\n        <PageSize>10</PageSize>\\n        <OpenDataItemList>\\n            <id>26152778</id>\\n            <Source>qingting</Source>\\n            <Title>超能狂少在都市</Title>\\n            <Authors>\\n                <RawId>123123</RawId>\\n                <Gender>MALE</Gender>\\n                <AuthorTypes>ANCHOR</AuthorTypes>\\n                <Source>qingting</Source>\\n                <Cover>\\n                    <Img>https://a.jpg</Img>\\n                    <Large>https://a.jpg</Large>\\n                    <Mediam>https://a.jpg</Mediam>\\n                    <Medium>https://a.jpg</Medium>\\n                    <Small>https://a.jpg</Small>\\n                    <CanResize>false</CanResize>\\n                </Cover>\\n                <Id>13597709</Id>\\n                <Title>播音呆瓜小贼</Title>\\n                <Description>播音呆瓜小贼</Description>\\n                <Online>true</Online>\\n            </Authors>\\n            <ItemType>ALBUM</ItemType>\\n            <Category>audio</Category>\\n            <Type>program</Type>\\n            <HotScore>0</HotScore>\\n            <Valid>VALID</Valid>\\n            <Cover>\\n                <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n                <Large>http://pic.qtfm.cn/2017/0207/2017020718275.jpg</Large>\\n                <Mediam>http://pic.qtfm.cn/2017/0207/2017020718275.jpg</Mediam>\\n                <Medium>http://pic.qtfm.cn/2017/0207/20170207175.jpg</Medium>\\n                <Small>http://pic.qtfm.cn/2017/0207/2017020675.jpg</Small>\\n                <canResize>false</canResize>\\n            </Cover>\\n            <CommCateId>80012017</CommCateId>\\n            <Alias>超能狂少在都市</Alias>\\n            <Charge>false</Charge>\\n            <Audition>true</Audition>\\n            <Description>作者：月不醉 简介：啥，假冒你男友？退役兵王回归都市后做了一名小保安，机缘巧合下却被冷艳女总拉去客串男友，从此之后，他与冷艳老总开始纠缠不清···拳打恶一代，脚踩高富帅，哥哥我专治各种不服。面对各类的阴谋阳谋，面对各种黑恶势力，且看哥如何称霸都市，踏上巅峰！</Description>\\n            <RawId>206775</RawId>\\n        </OpenDataItemList>\\n    </Result>\\n</ListCateContentResponse>","errorExample":""}]',
      'title' => '根据特定的类目,按照指定的排序顺序获取该类目下的内容',
    ),
    'ListCateInfo' => 
    array (
      'summary' => '获取类目信息。',
      'path' => '/v1.0/ssp/ListCateInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '默认值song(扩展字段目前仅支持song)',
            'type' => 'string',
            'required' => true,
            'example' => 'song',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回参数',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CateId' => 
                    array (
                      'description' => '类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80064',
                    ),
                    'CateName' => 
                    array (
                      'description' => '类目名称',
                      'type' => 'string',
                      'example' => '时尚生活',
                    ),
                    'ParentCateId' => 
                    array (
                      'description' => '父类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求requestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80064,\\n      \\"CateName\\": \\"时尚生活\\",\\n      \\"ParentCateId\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCateInfoResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <CateId>80064</CateId>\\n        <CateName>时尚生活</CateName>\\n        <ParentCateId>0</ParentCateId>\\n    </Result>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n</ListCateInfoResponse>","errorExample":""}]',
      'title' => '获取音乐音频类目列表',
    ),
    'ListCommonCateFirstFloor' => 
    array (
      'summary' => '获取音乐或音频的一级类目列表。',
      'path' => '/v1.0/ssp/ListCommonCateFirstFloor',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '默认值song(扩展字段目前仅支持song)',
            'type' => 'string',
            'required' => true,
            'example' => 'song',
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
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求requestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CateId' => 
                    array (
                      'description' => '类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80012',
                    ),
                    'CateName' => 
                    array (
                      'description' => '类目名称',
                      'type' => 'string',
                      'example' => '有声内容',
                    ),
                    'ParentCateId' => 
                    array (
                      'description' => '父类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80012,\\n      \\"CateName\\": \\"有声内容\\",\\n      \\"ParentCateId\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCommonCateFirstFloorResponse>\\n    <Code>200</Code>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <CateId>80012</CateId>\\n        <CateName>有声内容</CateName>\\n        <ParentCateId>0</ParentCateId>\\n    </Result>\\n    <Message>success</Message>\\n</ListCommonCateFirstFloorResponse>","errorExample":""}]',
      'title' => '获取音乐或音频的一级类目列表',
    ),
    'ListCommonCateSecondFloor' => 
    array (
      'summary' => '获取指定一级类目下面的二级类目列表。',
      'path' => '/v1.0/ssp/ListCommonCateSecondFloor',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParentCateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父类目id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '80010',
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
                'description' => '请求requestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CateId' => 
                    array (
                      'description' => '类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80018009',
                    ),
                    'CateName' => 
                    array (
                      'description' => '类目名称',
                      'type' => 'string',
                      'example' => '儿童笑话',
                    ),
                    'ParentCateId' => 
                    array (
                      'description' => '父类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80018',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CateId\\": 80018009,\\n      \\"CateName\\": \\"儿童笑话\\",\\n      \\"ParentCateId\\": 80018\\n    }\\n  ],\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCommonCateSecondFloorResponse>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Code>200</Code>\\n    <Result>\\n        <CateId>80018009</CateId>\\n        <CateName>儿童笑话</CateName>\\n        <ParentCateId>80018</ParentCateId>\\n    </Result>\\n    <Message>success</Message>\\n</ListCommonCateSecondFloorResponse>","errorExample":""}]',
      'title' => '获取指定一级类目下面的二级类目列表',
    ),
    'ListPlayHistory' => 
    array (
      'summary' => '获取历史播放接口。',
      'path' => '/v1.0/ssp/ListPlayHistory',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Request',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '音乐music，有声书program，故事story，儿歌children_song，电台radio',
                'type' => 'string',
                'required' => false,
                'example' => 'music',
              ),
              'PageNum' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => true,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => true,
                'example' => '1**2',
              ),
            ),
            'required' => true,
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Alias' => 
                    array (
                      'description' => '别名',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '别名',
                        'type' => 'string',
                        'example' => '超能狂少在都市',
                      ),
                    ),
                    'Audition' => 
                    array (
                      'description' => '是否可试听',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Authors' => 
                    array (
                      'description' => '内容的作者',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内容作者',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AuthorTypes' => 
                          array (
                            'description' => '作者类型',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '作者类型',
                              'type' => 'string',
                              'example' => 'ANCHOR',
                            ),
                          ),
                          'Cover' => 
                          array (
                            'description' => '头像图片',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CanResize' => 
                              array (
                                'description' => '是否可以使用oss规则裁剪',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'Img' => 
                              array (
                                'description' => '默认图片',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Large' => 
                              array (
                                'description' => '大图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Medium' => 
                              array (
                                'description' => '中图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Small' => 
                              array (
                                'description' => '小图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                            ),
                          ),
                          'Gender' => 
                          array (
                            'description' => '性别',
                            'type' => 'string',
                            'example' => 'MALE',
                          ),
                          'RawId' => 
                          array (
                            'description' => '三方作者id',
                            'type' => 'string',
                            'example' => '123123',
                          ),
                          'Source' => 
                          array (
                            'description' => '来源',
                            'type' => 'string',
                            'example' => 'qingting',
                          ),
                          'Id' => 
                          array (
                            'description' => '作者主键id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '13597709',
                          ),
                          'Title' => 
                          array (
                            'description' => '作者标题',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Description' => 
                          array (
                            'description' => '作者描述',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Online' => 
                          array (
                            'description' => '是否在线',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'Category' => 
                    array (
                      'description' => '	
根据所属公共类目转换controlType',
                      'type' => 'string',
                      'example' => 'audio',
                    ),
                    'Charge' => 
                    array (
                      'description' => '	
是否收费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CommCateId' => 
                    array (
                      'description' => '对应的类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80012017',
                    ),
                    'Cover' => 
                    array (
                      'description' => '专辑封面图片',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CanResize' => 
                        array (
                          'description' => '是否可以使用oss规则裁剪',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Img' => 
                        array (
                          'description' => '默认图片',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Large' => 
                        array (
                          'description' => '大图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Mediam' => 
                        array (
                          'description' => '中图（Deprecated）',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Medium' => 
                        array (
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Small' => 
                        array (
                          'description' => '小图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '内容描述',
                      'type' => 'string',
                      'example' => '内容描述',
                    ),
                    'HotScore' => 
                    array (
                      'description' => '热度分',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '10',
                    ),
                    'Id' => 
                    array (
                      'description' => '内容id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '13597709',
                    ),
                    'ItemType' => 
                    array (
                      'description' => '内容的类型, 音乐 音频 电台 笑话等',
                      'type' => 'string',
                      'example' => 'ALBUM',
                    ),
                    'Source' => 
                    array (
                      'description' => '来源',
                      'type' => 'string',
                      'example' => 'qingting',
                    ),
                    'Type' => 
                    array (
                      'description' => '根据所属公共类目转换favoriteType',
                      'type' => 'string',
                      'example' => 'program',
                    ),
                    'Title' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '超能狂少在都市',
                    ),
                    'Valid' => 
                    array (
                      'description' => '是否可播',
                      'type' => 'string',
                      'example' => 'VALID',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"123123\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": false\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": false,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Valid\\": \\"VALID\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPlayHistoryResponse>\\n    <requestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</requestId>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>123123</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>false</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Type>program</Type>\\n        <Title>超能狂少在都市</Title>\\n        <Valid>VALID</Valid>\\n    </Result>\\n</ListPlayHistoryResponse>","errorExample":""}]',
      'title' => '获取历史播放接口',
    ),
    'ListRecommendContent' => 
    array (
      'summary' => '获取每日推荐的音乐或者音频。',
      'path' => '/v1.0/ssp/ListRecommendContent',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Request',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '默认值song(扩展字段目前仅支持song)',
                'type' => 'string',
                'required' => false,
                'example' => 'song',
              ),
              'Count' => 
              array (
                'description' => '推荐数量',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
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
              'Code' => 
              array (
                'description' => 'code 编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求RequestId',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Alias' => 
                    array (
                      'description' => '别名',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '别名',
                        'type' => 'string',
                        'example' => '超能狂少在都市',
                      ),
                    ),
                    'Audition' => 
                    array (
                      'description' => '是否可试听',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Authors' => 
                    array (
                      'description' => '内容的作者',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内容的作者',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AuthorTypes' => 
                          array (
                            'description' => '作者类型',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '作者类型',
                              'type' => 'string',
                              'example' => 'ANCHOR',
                            ),
                          ),
                          'Cover' => 
                          array (
                            'description' => '头像图片',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CanResize' => 
                              array (
                                'description' => '是否可以使用oss规则裁剪',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'Img' => 
                              array (
                                'description' => '默认图片',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Large' => 
                              array (
                                'description' => '大图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Medium' => 
                              array (
                                'description' => '中图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Small' => 
                              array (
                                'description' => '小图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                            ),
                          ),
                          'Gender' => 
                          array (
                            'description' => '性别',
                            'type' => 'string',
                            'example' => 'MALE',
                          ),
                          'RawId' => 
                          array (
                            'description' => '三方作者id',
                            'type' => 'string',
                            'example' => '12311',
                          ),
                          'Source' => 
                          array (
                            'description' => '来源',
                            'type' => 'string',
                            'example' => 'qingting',
                          ),
                          'Id' => 
                          array (
                            'description' => '作者主键id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '13597709',
                          ),
                          'Title' => 
                          array (
                            'description' => '作者标题',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Description' => 
                          array (
                            'description' => '作者描述',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Online' => 
                          array (
                            'description' => '是否在线',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'Category' => 
                    array (
                      'description' => '根据所属公共类目转换controlType',
                      'type' => 'string',
                      'example' => 'audio',
                    ),
                    'Charge' => 
                    array (
                      'description' => '是否收费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CommCateId' => 
                    array (
                      'description' => '对应的类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80012017',
                    ),
                    'Cover' => 
                    array (
                      'description' => '专辑封面图片',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CanResize' => 
                        array (
                          'description' => '	
是否可以使用oss规则裁剪',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Img' => 
                        array (
                          'description' => '默认图片',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Large' => 
                        array (
                          'description' => '大图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Mediam' => 
                        array (
                          'description' => '中图（Deprecated）',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Medium' => 
                        array (
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Small' => 
                        array (
                          'description' => '小图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '内容描述',
                      'type' => 'string',
                      'example' => '内容描述',
                    ),
                    'HotScore' => 
                    array (
                      'description' => '	
热度分',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '10',
                    ),
                    'Id' => 
                    array (
                      'description' => '内容id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '13597709',
                    ),
                    'ItemType' => 
                    array (
                      'description' => '	
内容的类型, 音乐 音频 电台 笑话等',
                      'type' => 'string',
                      'example' => 'ALBUM',
                    ),
                    'Source' => 
                    array (
                      'description' => '来源',
                      'type' => 'string',
                      'example' => 'qingting',
                    ),
                    'Title' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '超能狂少在都市',
                    ),
                    'Type' => 
                    array (
                      'description' => '根据所属公共类目转换favoriteType',
                      'type' => 'string',
                      'example' => 'program',
                    ),
                    'Valid' => 
                    array (
                      'description' => '是否可播',
                      'type' => 'string',
                      'example' => 'VALID',
                    ),
                    'RawId' => 
                    array (
                      'description' => '三方id',
                      'type' => 'string',
                      'example' => '123123',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"12311\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": false\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": false,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Valid\\": \\"VALID\\",\\n      \\"RawId\\": \\"123123\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRecommendContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <RequestId>F12B6147-5925-19E5-A3AD-E1EE1360F34E</RequestId>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>12311</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>false</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <Description>内容描述</Description>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Type>program</Type>\\n        <Valid>VALID</Valid>\\n        <RawId>123123</RawId>\\n    </Result>\\n</ListRecommendContentResponse>","errorExample":""}]',
      'title' => '获取每日推荐的音乐或者音频',
    ),
    'PlayAndPauseControl' => 
    array (
      'summary' => '播放暂停控制。',
      'path' => '/v1.0/ssp/PlayAndPauseControl',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OpenPlayAndPauseControlParam',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenPlayAndPauseCommand' => 
              array (
                'description' => '播放：Play；暂停：Pause。',
                'type' => 'string',
                'required' => true,
                'example' => 'Play',
                'enum' => 
                array (
                  0 => 'Play',
                  1 => 'Pause',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。

',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PlayAndPauseControlResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PlayAndPauseControlResponse>","errorExample":""}]',
      'title' => '播放暂停控制',
    ),
    'PlayModeControl' => 
    array (
      'summary' => '播放模式切换。',
      'path' => '/v1.0/ssp/PlayModeControl',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OpenPlayModeControlRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenPlayMode' => 
              array (
                'description' => '播放模式

列表循环：Repeat,；随机：Shuffle,；单曲循环：RepeatOne,；普通模式：Normal;',
                'type' => 'string',
                'required' => true,
                'example' => 'Normal',
                'enum' => 
                array (
                  0 => 'Repeat',
                  1 => 'Shuffle',
                  2 => 'RepeatOne',
                  3 => 'Normal',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'OpenPlayMode' => 
                  array (
                    'description' => '播放模式

列表循环：Repeat,；随机：Shuffle,；单曲循环：RepeatOne,；普通模式：Normal;',
                    'type' => 'string',
                    'example' => 'Normal',
                    'enum' => 
                    array (
                      0 => 'Repeat',
                      1 => 'Shuffle',
                      2 => 'RepeatOne',
                      3 => 'Normal',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"OpenPlayMode\\": \\"Normal\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PlayModeControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <openPlayMode>Normal</openPlayMode>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PlayModeControlResponse>","errorExample":""}]',
      'title' => '播放模式切换',
    ),
    'PreviousAndNextControl' => 
    array (
      'summary' => '对创建的播放列表中的内容进行上下一首控制。',
      'path' => '/v1.0/ssp/PreviousAndNextControl',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OpenControlPlayingListRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'Cmd' => 
              array (
                'description' => '下一首：NEXT；上一首：PREVIOUS',
                'type' => 'string',
                'required' => true,
                'example' => 'NEXT',
              ),
              'IsFromDevice' => 
              array (
                'description' => '是否设备发起，默认false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'ExtendInfo' => 
              array (
                'type' => 'object',
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。` SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。 `UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RawId' => 
                  array (
                    'description' => '三方id',
                    'type' => 'string',
                    'example' => '550144364',
                  ),
                  'Source' => 
                  array (
                    'description' => '来源',
                    'type' => 'string',
                    'example' => 'ximalayav2',
                  ),
                  'AlbumRawId' => 
                  array (
                    'description' => '三方专辑id',
                    'type' => 'string',
                    'example' => '260744',
                  ),
                  'AlbumName' => 
                  array (
                    'description' => '三方专辑名称',
                    'type' => 'string',
                    'example' => '晚安妈妈睡前故事',
                  ),
                  'Liked' => 
                  array (
                    'description' => '是否收藏',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Singer' => 
                  array (
                    'description' => '作者',
                    'type' => 'string',
                    'example' => '晚安妈妈',
                  ),
                  'Title' => 
                  array (
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '足球鞋赛车 晚安妈妈',
                  ),
                  'Cover' => 
                  array (
                    'description' => '封面图片对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Img' => 
                      array (
                        'description' => '默认图片',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Large' => 
                      array (
                        'description' => '大图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Mediam' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Medium' => 
                      array (
                        'description' => '中图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'Small' => 
                      array (
                        'description' => '小图',
                        'type' => 'string',
                        'example' => 'http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640',
                      ),
                      'CanResize' => 
                      array (
                        'description' => '是否可以使用oss规则裁剪',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                    ),
                  ),
                  'PlayMode' => 
                  array (
                    'description' => '播放模式 (Repeat, Shuffle, RepeatOne, Normal)',
                    'type' => 'string',
                    'example' => 'Repeat',
                  ),
                  'AudioLength' => 
                  array (
                    'description' => '长度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '190',
                  ),
                  'Progress' => 
                  array (
                    'description' => '歌曲播放进度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LyricUrl' => 
                  array (
                    'description' => '歌词url',
                    'type' => 'string',
                    'example' => 'https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc',
                  ),
                  'Type' => 
                  array (
                    'description' => 'type (music\\program\\joke\\news\\children_song\\radio等)',
                    'type' => 'string',
                    'example' => 'story',
                  ),
                  'Copyright' => 
                  array (
                    'description' => '版权字段升级为是否可播：0 可播, 1/2 不可播',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ItemUrl' => 
                  array (
                    'description' => '播放url',
                    'type' => 'string',
                    'example' => 'https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3',
                  ),
                  'DefaultPlayOrder' => 
                  array (
                    'description' => 'package 默认播放顺序 0 顺序，1 倒序',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否可播：VALID(10), UNKNOWN(20), NOT_VALID(30)',
                    'type' => 'string',
                    'example' => 'VALID',
                  ),
                  'Pos' => 
                  array (
                    'description' => '该项在播放列表中的位置',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"RawId\\": \\"550144364\\",\\n    \\"Source\\": \\"ximalayav2\\",\\n    \\"AlbumRawId\\": \\"260744\\",\\n    \\"AlbumName\\": \\"晚安妈妈睡前故事\\",\\n    \\"Liked\\": false,\\n    \\"Singer\\": \\"晚安妈妈\\",\\n    \\"Title\\": \\"足球鞋赛车 晚安妈妈\\",\\n    \\"Cover\\": {\\n      \\"Img\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Large\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Mediam\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Medium\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"Small\\": \\"http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&columns=640&rows=640\\",\\n      \\"CanResize\\": false\\n    },\\n    \\"PlayMode\\": \\"Repeat\\",\\n    \\"AudioLength\\": 190,\\n    \\"Progress\\": 0,\\n    \\"LyricUrl\\": \\"https://aicontent.alibabausercontent.com/lyric/thirdsource/6f4c8408073db134b0d097c122b5a1a1.lrc\\",\\n    \\"Type\\": \\"story\\",\\n    \\"Copyright\\": 0,\\n    \\"ItemUrl\\": \\"https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3\\",\\n    \\"DefaultPlayOrder\\": 1,\\n    \\"Valid\\": \\"VALID\\",\\n    \\"Pos\\": 0\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<PreviousAndNextControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <RawId>550144364</RawId>\\n        <Source>ximalayav2</Source>\\n        <AlbumRawId>260744</AlbumRawId>\\n        <AlbumName>晚安妈妈睡前故事</AlbumName>\\n        <Liked>false</Liked>\\n        <Singer>晚安妈妈</Singer>\\n        <Title>足球鞋赛车 晚安妈妈</Title>\\n        <Cover>\\n            <Img>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Img>\\n            <Large>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Large>\\n            <Mediam>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Mediam>\\n            <Medium>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Medium>\\n            <Small>http://imgopen.xmcdn.com/group58/M06/08/9B/wKgLglzTyTjiOy0oAAcOTv16ohg815.jpg!op_type=3&amp;columns=640&amp;rows=640</Small>\\n            <CanResize>false</CanResize>\\n        </Cover>\\n        <PlayMode>Repeat</PlayMode>\\n        <AudioLength>190</AudioLength>\\n        <Progress>0</Progress>\\n        <Type>story</Type>\\n        <Copyright>0</Copyright>\\n        <ItemUrl>https://openaudio.cos.tx.xmcdn.com/storages/587f-audiofreehighqps/15/CE/GKwRIJIGnb11ABc6SwF59DNb.mp3</ItemUrl>\\n        <DefaultPlayOrder>1</DefaultPlayOrder>\\n        <Valid>VALID</Valid>\\n        <Pos>0</Pos>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</PreviousAndNextControlResponse>","errorExample":""}]',
      'title' => '上下首控制',
    ),
    'ProgressControl' => 
    array (
      'summary' => '进度控制。',
      'path' => '/v1.0/ssp/ProgressControl',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OpenProgressControlRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'Progress' => 
              array (
                'description' => '歌曲进度。单位秒',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '12',
              ),
              'ExtendInfo' => 
              array (
                'description' => '扩展信息',
                'type' => 'object',
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

`OPEN_ID`：默认的用户ID标识。 `UNION_ID`: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

`PACKAGE_NAME`：apk包名，Android应用客户链路的编码类型。 `SKILL_ID`：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是`SKILL_ID`时，其值为应用的Skill ID。 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

`OPEN_ID`：默认的设备ID标识。` UNION_ID`: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ouRjKOX95tn1a0kwb2+Ao6Q1CAxASJUZDWtlk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '10002398812',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，true成功，false失败。失败时请关注Message信息',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"10002398812\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<ProgressControlResponse>\\n    <Code>200</Code>\\n    <Result>true</Result>\\n    <Message>success</Message>\\n    <RequestId>10002398812</RequestId>\\n    <Success>true</Success>\\n</ProgressControlResponse>","errorExample":""}]',
      'title' => '进度控制',
    ),
    'SearchContent' => 
    array (
      'summary' => '按照特定的搜索条件搜索。',
      'path' => '/v1.0/ssp/SearchContent',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Request',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'Query' => 
              array (
                'description' => '查询关键字',
                'type' => 'string',
                'required' => false,
                'example' => '周杰伦',
              ),
              'Cate' => 
              array (
                'description' => '搜索的范围音乐或者音频
入参枚举 ：music | program',
                'type' => 'string',
                'required' => false,
                'example' => 'music',
              ),
              'SubCate' => 
              array (
                'description' => '当cate 是music时 可以不传subCate  如果传subCate 可以为 ：
song （歌曲）、 singer（艺人） 、album （专辑）

当cate是program时 可以不传subCate  
如果传subCate 可以为 ：
album （专辑）、audio（节目音频）、radio（电台）',
                'type' => 'string',
                'required' => false,
                'example' => 'singer',
              ),
              'QueryAlbum' => 
              array (
                'description' => '是否查询专辑',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'PageNum' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值

编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'EncodeType' => 
              array (
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。

PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'Id' => 
              array (
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
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
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
              ),
              'Code' => 
              array (
                'description' => 'code编码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Alias' => 
                    array (
                      'description' => '别名',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '别名',
                        'type' => 'string',
                        'example' => '超能狂少在都市',
                      ),
                    ),
                    'Audition' => 
                    array (
                      'description' => '是否可试听',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Authors' => 
                    array (
                      'description' => '内容的作者',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '作者信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AuthorTypes' => 
                          array (
                            'description' => '作者类型',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '作者类型',
                              'type' => 'string',
                              'example' => 'ANCHOR',
                            ),
                          ),
                          'Cover' => 
                          array (
                            'description' => '头像图片',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CanResize' => 
                              array (
                                'description' => '是否可以使用oss规则裁剪',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'Img' => 
                              array (
                                'description' => '默认图片',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Large' => 
                              array (
                                'description' => '大图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Medium' => 
                              array (
                                'description' => '中图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                              'Small' => 
                              array (
                                'description' => '小图',
                                'type' => 'string',
                                'example' => 'https://a.jpg',
                              ),
                            ),
                          ),
                          'Gender' => 
                          array (
                            'description' => '性别',
                            'type' => 'string',
                            'example' => 'MALE',
                          ),
                          'RawId' => 
                          array (
                            'description' => '三方作者id',
                            'type' => 'string',
                            'example' => '123123',
                          ),
                          'Source' => 
                          array (
                            'description' => '来源',
                            'type' => 'string',
                            'example' => 'qingting',
                          ),
                          'Id' => 
                          array (
                            'description' => '作者主键id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '13597709',
                          ),
                          'Title' => 
                          array (
                            'description' => '作者标题',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Description' => 
                          array (
                            'description' => '作者描述',
                            'type' => 'string',
                            'example' => '播音呆瓜小贼',
                          ),
                          'Online' => 
                          array (
                            'description' => '是否在线',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                        ),
                      ),
                    ),
                    'Category' => 
                    array (
                      'description' => '根据所属公共类目转换controlType',
                      'type' => 'string',
                      'example' => 'audio',
                    ),
                    'Charge' => 
                    array (
                      'description' => '是否收费',
                      'type' => 'boolean',
                      'example' => 'fasle',
                    ),
                    'CommCateId' => 
                    array (
                      'description' => '对应的类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80012017',
                    ),
                    'Cover' => 
                    array (
                      'description' => '专辑封面图片',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CanResize' => 
                        array (
                          'description' => '是否可以使用oss规则裁剪',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Img' => 
                        array (
                          'description' => '默认图片',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Large' => 
                        array (
                          'description' => '大图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Mediam' => 
                        array (
                          'description' => '中图（Deprecated）',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Medium' => 
                        array (
                          'description' => '中图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                        'Small' => 
                        array (
                          'description' => '小图',
                          'type' => 'string',
                          'example' => 'http://pic.qtfm.cn/2017/0207/2017020718285.jpg',
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '内容描述',
                      'type' => 'string',
                      'example' => '内容描述',
                    ),
                    'HotScore' => 
                    array (
                      'description' => '热度分',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '10',
                    ),
                    'Id' => 
                    array (
                      'description' => '内容id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '13597709',
                    ),
                    'ItemType' => 
                    array (
                      'description' => '内容的类型, 音乐 音频 电台 笑话等',
                      'type' => 'string',
                      'example' => 'ALBUM',
                    ),
                    'Source' => 
                    array (
                      'description' => '来源',
                      'type' => 'string',
                      'example' => 'qingting',
                    ),
                    'Title' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '超能狂少在都市',
                    ),
                    'Type' => 
                    array (
                      'description' => '根据所属公共类目转换favoriteType',
                      'type' => 'string',
                      'example' => 'program',
                    ),
                    'Valid' => 
                    array (
                      'description' => '是否可播',
                      'type' => 'string',
                      'example' => 'VALID',
                    ),
                    'Duration' => 
                    array (
                      'description' => '时长信息',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '180',
                    ),
                    'AlbumId' => 
                    array (
                      'description' => '对应的专辑id',
                      'type' => 'string',
                      'example' => '13123',
                    ),
                    'Lyric' => 
                    array (
                      'description' => '歌词信息',
                      'type' => 'string',
                      'example' => 'http://a1231.lrc',
                    ),
                    'OrderIndex' => 
                    array (
                      'description' => '内容排序值',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Styles' => 
                    array (
                      'description' => '曲风',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '曲风',
                        'type' => 'string',
                        'example' => '1231',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Alias\\": [\\n        \\"超能狂少在都市\\"\\n      ],\\n      \\"Audition\\": false,\\n      \\"Authors\\": [\\n        {\\n          \\"AuthorTypes\\": [\\n            \\"ANCHOR\\"\\n          ],\\n          \\"Cover\\": {\\n            \\"CanResize\\": false,\\n            \\"Img\\": \\"https://a.jpg\\",\\n            \\"Large\\": \\"https://a.jpg\\",\\n            \\"Medium\\": \\"https://a.jpg\\",\\n            \\"Small\\": \\"https://a.jpg\\"\\n          },\\n          \\"Gender\\": \\"MALE\\",\\n          \\"RawId\\": \\"123123\\",\\n          \\"Source\\": \\"qingting\\",\\n          \\"Id\\": 13597709,\\n          \\"Title\\": \\"播音呆瓜小贼\\",\\n          \\"Description\\": \\"播音呆瓜小贼\\",\\n          \\"Online\\": true\\n        }\\n      ],\\n      \\"Category\\": \\"audio\\",\\n      \\"Charge\\": true,\\n      \\"CommCateId\\": 80012017,\\n      \\"Cover\\": {\\n        \\"CanResize\\": false,\\n        \\"Img\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Large\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Mediam\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Medium\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\",\\n        \\"Small\\": \\"http://pic.qtfm.cn/2017/0207/2017020718285.jpg\\"\\n      },\\n      \\"Description\\": \\"内容描述\\",\\n      \\"HotScore\\": 10,\\n      \\"Id\\": 13597709,\\n      \\"ItemType\\": \\"ALBUM\\",\\n      \\"Source\\": \\"qingting\\",\\n      \\"Title\\": \\"超能狂少在都市\\",\\n      \\"Type\\": \\"program\\",\\n      \\"Valid\\": \\"VALID\\",\\n      \\"Duration\\": 180,\\n      \\"AlbumId\\": \\"13123\\",\\n      \\"Lyric\\": \\"http://a1231.lrc\\",\\n      \\"OrderIndex\\": \\"1\\",\\n      \\"Styles\\": [\\n        \\"1231\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<SearchContentResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Result>\\n        <Alias>超能狂少在都市</Alias>\\n        <Audition>false</Audition>\\n        <Authors>\\n            <AuthorTypes>ANCHOR</AuthorTypes>\\n            <Cover>\\n                <CanResize>false</CanResize>\\n                <Img>https://a.jpg</Img>\\n                <Large>https://a.jpg</Large>\\n                <Medium>https://a.jpg</Medium>\\n                <Small>https://a.jpg</Small>\\n            </Cover>\\n            <Gender>MALE</Gender>\\n            <RawId>123123</RawId>\\n            <Source>qingting</Source>\\n            <Id>13597709</Id>\\n            <Title>播音呆瓜小贼</Title>\\n            <Description>播音呆瓜小贼</Description>\\n            <Online>true</Online>\\n        </Authors>\\n        <Category>audio</Category>\\n        <Charge>false</Charge>\\n        <CommCateId>80012017</CommCateId>\\n        <Cover>\\n            <CanResize>false</CanResize>\\n            <Img>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Img>\\n            <Large>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Large>\\n            <Mediam>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Mediam>\\n            <Medium>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Medium>\\n            <Small>http://pic.qtfm.cn/2017/0207/2017020718285.jpg</Small>\\n        </Cover>\\n        <HotScore>10</HotScore>\\n        <Id>13597709</Id>\\n        <ItemType>ALBUM</ItemType>\\n        <Source>qingting</Source>\\n        <Title>超能狂少在都市</Title>\\n        <Valid>VALID</Valid>\\n        <Duration>180</Duration>\\n    </Result>\\n</SearchContentResponse>","errorExample":""}]',
      'title' => '按照特定的搜索条件搜索',
    ),
    'CloudPlayer' => 
    array (
      'summary' => '云推歌，提供设备openUuid和天猫精灵openUserId，创建播放列表。',
      'path' => '/v1.0/ssp/cloud/player',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '开放用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码key',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => 'ID 类型',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '开放ID',
                'type' => 'string',
                'required' => true,
                'example' => '1234',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID（可为空）',
                'type' => 'string',
                'required' => false,
                'example' => '为空',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码key',
                'type' => 'string',
                'required' => true,
                'example' => '123',
                'enum' => 
                array (
                ),
              ),
              'IdType' => 
              array (
                'description' => 'ID类型',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'UNION_ID',
                  1 => 'OPEN_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '开放ID',
                'type' => 'string',
                'required' => true,
                'example' => '1234',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID（可为空）',
                'type' => 'string',
                'required' => false,
                'example' => '为空',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云推歌来源',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'KG' => '酷狗',
            ),
            'example' => 'KG',
          ),
        ),
        3 => 
        array (
          'name' => 'SongIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '歌曲ID列表【1-200】个歌曲',
            'type' => 'array',
            'items' => 
            array (
              'description' => '歌曲id',
              'type' => 'string',
              'required' => false,
              'example' => '123',
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'CurPlayIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前播放歌曲的索引。从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PlayMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放模式',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Shuffle' => '随机',
              'RepeatOne' => '单曲循环',
              'Repeat' => '循环',
              'Normal' => '顺序',
            ),
            'example' => 'Normal',
          ),
        ),
        6 => 
        array (
          'name' => 'SongId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '歌曲id（索引有问题时，根据该ID重新计算索引）',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'B7D82DB0-DD59-5756-AC62-871C9D7DBC36',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果：true：检验成功false：检验失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7D82DB0-DD59-5756-AC62-871C9D7DBC36\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
      'title' => '云推歌',
      'description' => '同步检验入参后返回，
异步创建播放列表。',
      'responseParamsDescription' => '返回值为 true / false，表示创建播放列表是否成功。',
    ),
    'MobileRecommend' => 
    array (
      'summary' => '移动项目获取推荐的歌曲，包括每日推荐、热歌和风格歌单。',
      'path' => '/v1.0/ssp/mobile/recommend/music',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户信息- userId',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。',
                'type' => 'string',
                'required' => true,
                'example' => '1414895629783187053',
              ),
              'IdType' => 
              array (
                'description' => 'ID 类型',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => 'ID 值',
                'type' => 'string',
                'required' => true,
                'example' => 'R457Av3qg/OXTwVnFt12z6MwNe0HAS699V6n63OaLdu+VmwvhcNfMzBd+la553wWJhj3kBMjgHq2Y2dyCFoDBg==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，IdType设置为UNION_ID时，该参数必填。',
                'type' => 'string',
                'required' => false,
                'example' => '暂无',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息。',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写PROJECT_ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。',
                'type' => 'string',
                'required' => true,
                'example' => '1414895629783187053',
                'enum' => 
                array (
                ),
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

OPEN_ID：默认的设备ID标识。
UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'UNION_ID',
                  1 => 'OPEN_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '设备标识，填写deviceOpenId或deviceUnionId的值。',
                'type' => 'string',
                'required' => true,
                'example' => 'fjwZiYQdtkaI95fHaLNjYcaOA/mxUPzxxw2J5iBiTBnjUCWKwER4TSHCqkBnNOYvGJ4bRZA9KzBB2naS4r/Am0lSe8ECDAAOcJ9QKLFF6DM=',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
                'type' => 'string',
                'required' => false,
                'example' => '暂无',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'BotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器人ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求类型：获取每日推荐、热歌，或风格歌单',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'STYLE' => '风格歌单',
              'DAILY_REC' => '每日推荐',
              'HOT' => '热歌',
            ),
            'example' => 'DAILY_REC',
          ),
        ),
        4 => 
        array (
          'name' => 'Style',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求类型为 STYLE 时必填。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '钢琴' => '钢琴',
              '抖音' => '抖音',
              '欢快' => '欢快',
              '轻音乐' => '轻音乐',
              '流行' => '流行',
              'DJ' => 'DJ',
            ),
            'example' => '轻音乐',
          ),
        ),
        5 => 
        array (
          'name' => 'Count',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推荐结果的数量',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '5C5809B4-F465-52E0-9A8B-61396F9E593B',
              ),
              'Code' => 
              array (
                'description' => '调用返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '如果有错误，会输出错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '请求结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务的实际返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Source' => 
                    array (
                      'description' => '内容的来源',
                      'type' => 'string',
                      'example' => 'KG',
                    ),
                    'RawId' => 
                    array (
                      'description' => '内容的三方id',
                      'type' => 'string',
                      'example' => '550144364',
                    ),
                    'Cover' => 
                    array (
                      'description' => '专辑封面图片',
                      'type' => 'string',
                      'example' => 'http://img4.kuwo.cn/star/albumcover/120/78/77/1688821132.jpg',
                    ),
                    'Authors' => 
                    array (
                      'description' => '作者信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '作者信息',
                        'type' => 'string',
                        'example' => '["周杰伦"]',
                      ),
                    ),
                    'Title' => 
                    array (
                      'description' => '内容标题',
                      'type' => 'string',
                      'example' => '稻香',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5C5809B4-F465-52E0-9A8B-61396F9E593B\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"Source\\": \\"KG\\",\\n      \\"RawId\\": \\"550144364\\",\\n      \\"Cover\\": \\"http://img4.kuwo.cn/star/albumcover/120/78/77/1688821132.jpg\\",\\n      \\"Authors\\": [\\n        \\"[\\\\\\"周杰伦\\\\\\"]\\"\\n      ],\\n      \\"Title\\": \\"稻香\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '移动轻纳管推荐接口',
      'description' => '根据 Type 区分场景（每日推荐、热歌等）即可。',
    ),
    'AddSub' => 
    array (
      'summary' => '订阅专辑。',
      'path' => '/v1.0/ssp/addSub',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'AddSubscriptionInfoRequest',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '订阅专辑request',
            'description' => '订阅专辑request',
            'type' => 'object',
            'properties' => 
            array (
              'DeviceId' => 
              array (
                'title' => '设备ID',
                'type' => 'string',
                'docRequired' => true,
                'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
              ),
              'UserId' => 
              array (
                'title' => '用户ID',
                'type' => 'string',
                'docRequired' => true,
                'example' => '1152893538998276761',
              ),
              'ScheduleInfo' => 
              array (
                'title' => '定时信息',
                'description' => '定时信息',
                'type' => 'object',
                'properties' => 
                array (
                  'DaysOfWeek' => 
                  array (
                    'title' => '设置按周提醒的具体日期，取值范围为：1~7',
                    'description' => '设置按周提醒的具体日期，取值范围为：1~7',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '7',
                      'minimum' => '1',
                      'example' => '1,3,5,7,6',
                      'enum' => 
                      array (
                        0 => '1',
                        1 => '2',
                        2 => '3',
                        3 => '4',
                        4 => '5',
                        5 => '6',
                        6 => '7',
                      ),
                    ),
                    'required' => true,
                    'docRequired' => true,
                    'maxItems' => 7,
                    'minItems' => 1,
                  ),
                  'Hour' => 
                  array (
                    'title' => '提醒触发的时间时钟数，0~23',
                    'description' => '提醒触发的时间时钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'maximum' => '23',
                    'minimum' => '0',
                    'example' => '1',
                  ),
                  'Minute' => 
                  array (
                    'title' => '提醒触发的分钟，0~59',
                    'description' => '触发提醒的时间分钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'maximum' => '59',
                    'minimum' => '0',
                    'example' => '23',
                  ),
                ),
                'required' => true,
                'docRequired' => true,
              ),
              'AlbumId' => 
              array (
                'title' => '专辑ID',
                'description' => '专辑ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '51999575',
              ),
              'PlayMode' => 
              array (
                'title' => '播放模式（目前只支持sequence）',
                'description' => '播放模式（目前只支持sequence）',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'sequence',
              ),
              'DailyStudyCnt' => 
              array (
                'title' => '每天学习数量',
                'description' => '每天学习数量',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '2',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备信息',
            'description' => '设备信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => '123',
                'enum' => 
                array (
                ),
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => '123',
                'enum' => 
                array (
                ),
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码。说明 200表示成功。',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Result' => 
              array (
                'title' => '结果',
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '订阅专辑记录ID',
                    'description' => '订阅专辑记录ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '81',
                  ),
                  'DeviceId' => 
                  array (
                    'title' => '设备ID',
                    'description' => '设备ID',
                    'type' => 'string',
                    'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                  ),
                  'UserId' => 
                  array (
                    'title' => '用户ID',
                    'description' => '用户ID',
                    'type' => 'string',
                    'example' => '1152893538998276761',
                  ),
                  'ScheduleInfo' => 
                  array (
                    'title' => '定时信息',
                    'description' => '定时信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DaysOfWeek' => 
                      array (
                        'title' => '提醒触发的周期',
                        'description' => '提醒触发的周期',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                      ),
                      'Hour' => 
                      array (
                        'title' => '提醒触发的小时',
                        'description' => '提醒触发的时间时钟数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'Minute' => 
                      array (
                        'title' => '提醒触发的分钟',
                        'description' => '提醒触发的时间分钟数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '23',
                      ),
                    ),
                  ),
                  'AlbumId' => 
                  array (
                    'title' => '专辑ID',
                    'description' => '专辑ID',
                    'type' => 'string',
                    'example' => '51999575',
                  ),
                  'PlayMode' => 
                  array (
                    'title' => '播放模式',
                    'description' => '播放模式',
                    'type' => 'string',
                    'example' => 'sequence',
                  ),
                  'DailyStudyCnt' => 
                  array (
                    'title' => '每天学习数量',
                    'description' => '每天学习数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B99D27ED-4E12-1414-9FDE-599C57C4B204',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Result\\": {\\n    \\"Id\\": 81,\\n    \\"DeviceId\\": \\"5874DBCCA3038FAA1A70A8060F07F26D\\",\\n    \\"UserId\\": \\"1152893538998276761\\",\\n    \\"ScheduleInfo\\": {\\n      \\"DaysOfWeek\\": [\\n        2\\n      ],\\n      \\"Hour\\": 12,\\n      \\"Minute\\": 23\\n    },\\n    \\"AlbumId\\": \\"51999575\\",\\n    \\"PlayMode\\": \\"sequence\\",\\n    \\"DailyStudyCnt\\": 2\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"B99D27ED-4E12-1414-9FDE-599C57C4B204\\"\\n}","type":"json"}]',
      'title' => '订阅专辑',
    ),
    'DeleteSub' => 
    array (
      'summary' => '删除订阅专辑。',
      'path' => '/v1.0/ssp/deleteSub',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'SubId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订阅专辑记录ID',
            'description' => '订阅专辑记录ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '81',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0AA6C15C-FD61-1E32-9881-480CC6F35A70',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"0AA6C15C-FD61-1E32-9881-480CC6F35A70\\"\\n}","type":"json"}]',
      'title' => '删除订阅专辑',
    ),
    'ListAlbumIsAdded' => 
    array (
      'summary' => '专辑是否被订阅。',
      'path' => '/v1.0/ssp/listAlbumIsAdded',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'AlbumIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '专辑idList',
            'description' => '专辑idList',
            'type' => 'array',
            'items' => 
            array (
              'title' => '专辑ID',
              'description' => '专辑ID',
              'type' => 'string',
              'required' => true,
              'docRequired' => true,
              'example' => '51999575',
            ),
            'required' => true,
            'docRequired' => true,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备信息',
            'description' => '设备信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BCC85E69-5DA6-197E-A8C1-8A1B19CF781B',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlbumId' => 
                    array (
                      'title' => '专辑ID',
                      'description' => '专辑ID',
                      'type' => 'string',
                      'example' => '51999575',
                    ),
                    'IsAdded' => 
                    array (
                      'title' => '是否被订阅',
                      'description' => '是否被订阅',
                      'type' => 'string',
                      'example' => 'false',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'IdempotentParameterMismatch',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCC85E69-5DA6-197E-A8C1-8A1B19CF781B\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": [\\n    {\\n      \\"AlbumId\\": \\"51999575\\",\\n      \\"IsAdded\\": \\"false\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '专辑是否被订阅',
    ),
    'ListSub' => 
    array (
      'summary' => '用户已订阅列表。',
      'path' => '/v1.0/ssp/listSub',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Page',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '分页参数',
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNum' => 
              array (
                'title' => '第几页',
                'description' => '第几页',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页多少条',
                'description' => '每页多少条',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '10',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备信息',
            'description' => '设备信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => 'UNION_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '共计多少数据',
                    'description' => '共计多少数据',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'TotalPageCount' => 
                  array (
                    'title' => '共计多少页',
                    'description' => '共计多少页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'HasNext' => 
                  array (
                    'title' => '是否有下一页',
                    'description' => '是否有下一页',
                    'type' => 'boolean',
                    'default' => 'false',
                  ),
                  'DataList' => 
                  array (
                    'title' => '订阅列表',
                    'description' => '订阅列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '订阅记录ID',
                          'description' => '订阅记录ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'DeviceId' => 
                        array (
                          'title' => '设备ID',
                          'description' => '设备ID',
                          'type' => 'string',
                          'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
                        ),
                        'UserId' => 
                        array (
                          'title' => '用户ID',
                          'description' => '用户ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1152893538998276761',
                        ),
                        'ScheduleInfo' => 
                        array (
                          'title' => '定时信息',
                          'description' => '定时信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DaysOfWeek' => 
                            array (
                              'title' => '触发周期',
                              'description' => '触发周期',
                              'type' => 'array',
                              'items' => 
                              array (
                                'title' => '',
                                'description' => '',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                              ),
                              'maxItems' => 7,
                              'minItems' => 1,
                            ),
                            'Hour' => 
                            array (
                              'title' => '触发小时',
                              'description' => '触发小时',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '12',
                            ),
                            'Minute' => 
                            array (
                              'title' => '触发分钟',
                              'description' => '触发分钟',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '23',
                            ),
                          ),
                        ),
                        'AlbumId' => 
                        array (
                          'title' => '专辑ID',
                          'description' => '专辑ID',
                          'type' => 'string',
                          'example' => '51999575',
                        ),
                        'PlayMode' => 
                        array (
                          'title' => '播放模式',
                          'description' => '播放模式',
                          'type' => 'string',
                          'example' => 'sequence',
                        ),
                        'DailyStudyCnt' => 
                        array (
                          'title' => '每天学习数量',
                          'description' => '每天学习数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CoverUrl' => 
                        array (
                          'title' => '专辑封面',
                          'description' => '专辑封面',
                          'type' => 'string',
                          'example' => 'https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg',
                        ),
                        'Title' => 
                        array (
                          'title' => '专辑标题',
                          'description' => '专辑标题',
                          'type' => 'string',
                          'example' => '小科学家探索',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0D0C09C2-ADC1-198B-964D-24F4FAD967DB',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 3,\\n    \\"TotalPageCount\\": 1,\\n    \\"HasNext\\": true,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"DeviceId\\": \\"5874DBCCA3038FAA1A70A8060F07F26D\\",\\n        \\"UserId\\": 1152893538998276700,\\n        \\"ScheduleInfo\\": {\\n          \\"DaysOfWeek\\": [\\n            2\\n          ],\\n          \\"Hour\\": 12,\\n          \\"Minute\\": 23\\n        },\\n        \\"AlbumId\\": \\"51999575\\",\\n        \\"PlayMode\\": \\"sequence\\",\\n        \\"DailyStudyCnt\\": 2,\\n        \\"CoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg\\",\\n        \\"Title\\": \\"小科学家探索\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"0D0C09C2-ADC1-198B-964D-24F4FAD967DB\\"\\n}","type":"json"}]',
      'title' => '用户已订阅列表',
    ),
    'ListSubAlbum' => 
    array (
      'summary' => '专辑列表。',
      'path' => '/v1.0/ssp/listSubAlbum',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'QuerySubscriptionAlbumRequest',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'request',
            'description' => 'request',
            'type' => 'object',
            'properties' => 
            array (
              'CategoryId' => 
              array (
                'title' => '分类ID',
                'description' => '分类ID',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '80011',
              ),
              'AlbumId' => 
              array (
                'title' => '专辑ID',
                'description' => '专辑ID',
                'type' => 'string',
                'required' => false,
                'example' => '4476001',
              ),
              'Title' => 
              array (
                'title' => '专辑标题',
                'description' => '专辑标题',
                'type' => 'string',
                'required' => false,
                'example' => '睡前故事',
              ),
              'Page' => 
              array (
                'title' => '分页参数',
                'description' => '分页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'title' => '第几页',
                    'description' => '第几页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页多少条',
                    'description' => '每页多少条',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '10',
                  ),
                ),
                'required' => true,
                'docRequired' => true,
              ),
              'DeviceId' => 
              array (
                'title' => '设备ID',
                'type' => 'string',
                'docRequired' => true,
                'example' => '5874DBCCA3038FAA1A70A8060F07F26D',
              ),
              'UserId' => 
              array (
                'title' => '用户ID',
                'type' => 'string',
                'docRequired' => true,
                'example' => '1152893538998276761',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备信息',
            'description' => '设备信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '共计多少条',
                    'description' => '共计多少条',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TotalPageCount' => 
                  array (
                    'title' => '共计多少页',
                    'description' => '共计多少页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'HasNext' => 
                  array (
                    'title' => '是否有下一页',
                    'description' => '是否有下一页',
                    'type' => 'boolean',
                  ),
                  'DataList' => 
                  array (
                    'title' => '专辑List',
                    'description' => '专辑List',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '记录ID',
                          'description' => '记录ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CategoryId' => 
                        array (
                          'title' => '专辑分类ID',
                          'description' => '专辑分类ID',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80011',
                        ),
                        'AlbumId' => 
                        array (
                          'title' => '专辑ID',
                          'description' => '专辑ID',
                          'type' => 'string',
                          'example' => '4476001',
                        ),
                        'Title' => 
                        array (
                          'title' => '专辑标题',
                          'description' => '专辑标题',
                          'type' => 'string',
                          'example' => '睡前故事',
                        ),
                        'CoverUrl' => 
                        array (
                          'title' => '专辑封面',
                          'description' => '专辑封面',
                          'type' => 'string',
                          'example' => 'https://ailabs.alibabausercontent.com/images/17825/jknoamc2.jpg',
                        ),
                        'ScheduleInfo' => 
                        array (
                          'title' => '定时信息',
                          'description' => '定时信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DaysOfWeek' => 
                            array (
                              'title' => '触发周期',
                              'description' => '触发周期',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'Hour' => 
                            array (
                              'title' => '触发小时',
                              'description' => '触发小时',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '12',
                            ),
                            'Minute' => 
                            array (
                              'title' => '触发分钟',
                              'description' => '触发分钟',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '23',
                            ),
                            'ScheduleId' => 
                            array (
                              'title' => '定时任务ID',
                              'description' => '定时任务ID',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                          ),
                        ),
                        'TotalEpisode' => 
                        array (
                          'title' => '共多少集',
                          'description' => '共多少集',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '23',
                        ),
                        'Sequence' => 
                        array (
                          'title' => '排序',
                          'description' => '排序',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'IsAdded' => 
                        array (
                          'title' => '是否已订阅',
                          'description' => '是否已订阅',
                          'type' => 'boolean',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CB13B8D7-37FB-1B3E-8EB9-65BB413267E1',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"TotalCount\\": 3,\\n    \\"TotalPageCount\\": 1,\\n    \\"HasNext\\": true,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"CategoryId\\": 80011,\\n        \\"AlbumId\\": \\"4476001\\",\\n        \\"Title\\": \\"睡前故事\\",\\n        \\"CoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/17825/jknoamc2.jpg\\",\\n        \\"ScheduleInfo\\": {\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"Hour\\": 12,\\n          \\"Minute\\": 23,\\n          \\"ScheduleId\\": 0\\n        },\\n        \\"TotalEpisode\\": 23,\\n        \\"Sequence\\": 1,\\n        \\"IsAdded\\": true\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"CB13B8D7-37FB-1B3E-8EB9-65BB413267E1\\"\\n}","type":"json"}]',
      'title' => '专辑列表',
    ),
    'ListSubscriptionAlbumCategory' => 
    array (
      'summary' => '专辑分类。',
      'path' => '/v1.0/ssp/listSubscriptionAlbumCategory',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'CategoryName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分类名称',
            'description' => '分类名称',
            'type' => 'string',
            'required' => false,
            'example' => '儿歌',
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
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '分类List',
                'description' => '分类List',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CategoryId' => 
                    array (
                      'title' => '分类ID',
                      'description' => '分类ID',
                      'type' => 'string',
                      'example' => '80011',
                    ),
                    'CategoryName' => 
                    array (
                      'title' => '分类名称',
                      'description' => '分类名称',
                      'type' => 'string',
                      'example' => '儿童',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '60E7A523-9766-1D07-87A2-6E587420C59B',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'IdempotentParameterMismatch',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CategoryId\\": \\"80011\\",\\n      \\"CategoryName\\": \\"儿童\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"60E7A523-9766-1D07-87A2-6E587420C59B\\"\\n}","type":"json"}]',
      'title' => '专辑分类',
    ),
    'GetAlbumDetailById' => 
    array (
      'summary' => '获取专辑信息。',
      'path' => '/v1.0/ssp/getAlbumDetailById',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'AlbumId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专辑ID',
            'description' => '专辑ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '51999575',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '专辑内容',
                'description' => '专辑内容',
                'type' => 'object',
                'properties' => 
                array (
                  'AlbumId' => 
                  array (
                    'title' => '专辑ID',
                    'description' => '专辑ID',
                    'type' => 'string',
                    'example' => '51999575',
                  ),
                  'AlbumTitle' => 
                  array (
                    'title' => '专辑标题',
                    'description' => '专辑标题',
                    'type' => 'string',
                    'example' => '小科学家探索',
                  ),
                  'AlbumDescription' => 
                  array (
                    'title' => '专辑描述',
                    'description' => '专辑描述',
                    'type' => 'string',
                    'example' => '每次一个百科知识或者故事\\n丰富孩子的视野，拓展眼界和知识面，培养和孩子的探究能力和好奇心\\n\\n',
                  ),
                  'AlbumCoverUrl' => 
                  array (
                    'title' => '专辑封面',
                    'description' => '专辑封面',
                    'type' => 'string',
                    'example' => 'https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg',
                  ),
                  'AlbumContentList' => 
                  array (
                    'title' => '专辑内容List',
                    'description' => '专辑内容List',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '专辑内容ID',
                          'description' => '专辑内容ID',
                          'type' => 'string',
                          'example' => '468009044',
                        ),
                        'Title' => 
                        array (
                          'title' => '专辑内容标题',
                          'description' => '专辑内容标题',
                          'type' => 'string',
                          'example' => '001为什么肚子饿时会咕咕叫',
                        ),
                        'Duration' => 
                        array (
                          'title' => '专辑内容时长',
                          'description' => '专辑内容时长',
                          'type' => 'string',
                          'example' => '3分24秒',
                        ),
                        'OrderIndex' => 
                        array (
                          'title' => '专辑内容排序',
                          'description' => '专辑内容排序',
                          'type' => 'string',
                          'example' => '1000',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A0B7CACD-485B-14E2-854F-39EACB09E45B',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'IdempotentParameterMismatch',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"AlbumId\\": \\"51999575\\",\\n    \\"AlbumTitle\\": \\"小科学家探索\\",\\n    \\"AlbumDescription\\": \\"每次一个百科知识或者故事\\\\\\\\n丰富孩子的视野，拓展眼界和知识面，培养和孩子的探究能力和好奇心\\\\\\\\n\\\\\\\\n\\",\\n    \\"AlbumCoverUrl\\": \\"https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg\\",\\n    \\"AlbumContentList\\": [\\n      {\\n        \\"Id\\": \\"468009044\\",\\n        \\"Title\\": \\"001为什么肚子饿时会咕咕叫\\",\\n        \\"Duration\\": \\"3分24秒\\",\\n        \\"OrderIndex\\": \\"1000\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"A0B7CACD-485B-14E2-854F-39EACB09E45B\\"\\n}","type":"json"}]',
      'title' => '获取专辑信息',
    ),
    'GetUnreadMessageCount' => 
    array (
      'summary' => '查询用户的未读留言条数。',
      'path' => '/v1.0/ssp/getUnreadMessageCount',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '服务返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '用户信息不存在',
              ),
              'Code' => 
              array (
                'description' => '服务返回的状态码',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Result' => 
              array (
                'description' => '未读留言条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"用户信息不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": 10\\n}","errorExample":""},{"type":"xml","example":"<GetUnreadMessageCountResponse>\\n    <Message>用户信息不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>10</Result>\\n</GetUnreadMessageCountResponse>","errorExample":""}]',
      'title' => '查询未读留言条数',
    ),
    'ListUserMessage' => 
    array (
      'summary' => '查询用户的留言消息列表，基于查询条件开始时间，查询条数返回结果。',
      'path' => '/v1.0/ssp/listUserMessage',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BeforeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '某个时间点之后',
            'type' => 'string',
            'required' => false,
            'example' => '2022-07-27 14:06:55.984',
          ),
        ),
        1 => 
        array (
          'name' => 'limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '服务返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '外部userId映射关系不存在',
              ),
              'Code' => 
              array (
                'description' => '服务返回的状态码 SUCCESS为成功 否则均为失败',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Result' => 
              array (
                'description' => '用户留言查询结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '留言详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '留言id',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '留言发出时间',
                      'type' => 'string',
                      'example' => '2022-07-27 14:06:27.000',
                    ),
                    'Status' => 
                    array (
                      'description' => '留言状态，0为未读，1为已读',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Source' => 
                    array (
                      'description' => '消息来源于app/box',
                      'type' => 'string',
                      'example' => 'app',
                    ),
                    'Type' => 
                    array (
                      'description' => '目前只有audio',
                      'type' => 'string',
                      'example' => 'audio',
                    ),
                    'Content' => 
                    array (
                      'description' => '留言文本',
                      'type' => 'string',
                      'example' => '哈哈哈',
                    ),
                    'Url' => 
                    array (
                      'description' => '留言音频链接',
                      'type' => 'string',
                      'example' => 'http://xx',
                    ),
                    'SourceUuid' => 
                    array (
                      'description' => '来源设备ID',
                      'type' => 'string',
                      'example' => 'AF188**065EE4B**DD68CE**951D84D4',
                    ),
                    'DeviceName' => 
                    array (
                      'description' => '设备名称',
                      'type' => 'string',
                      'example' => '卧室的小芳',
                    ),
                    'Pic' => 
                    array (
                      'description' => '设备图片',
                      'type' => 'string',
                      'example' => 'http://xx',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": [\\n    {\\n      \\"Id\\": \\"123456\\",\\n      \\"GmtCreate\\": \\"2022-07-27 14:06:27.000\\",\\n      \\"Status\\": 0,\\n      \\"Source\\": \\"app\\",\\n      \\"Type\\": \\"audio\\",\\n      \\"Content\\": \\"哈哈哈\\",\\n      \\"Url\\": \\"http://xx\\",\\n      \\"SourceUuid\\": \\"AF188**065EE4B**DD68CE**951D84D4\\",\\n      \\"DeviceName\\": \\"卧室的小芳\\",\\n      \\"Pic\\": \\"http://xx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUserMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>\\n        <Id>123456</Id>\\n        <GmtCreate>2022-07-27 14:06:27.000</GmtCreate>\\n        <Status>0</Status>\\n        <Source>app</Source>\\n        <Type>audio</Type>\\n        <Content>哈哈哈</Content>\\n        <Url>http://xx</Url>\\n        <SourceUuid>AF188**065EE4B**DD68CE**951D84D4</SourceUuid>\\n        <DeviceName>卧室的小芳</DeviceName>\\n        <Pic>http://xx</Pic>\\n    </Result>\\n</ListUserMessageResponse>","errorExample":""}]',
      'title' => '查询用户留言消息列表',
    ),
    'ReadMessage' => 
    array (
      'summary' => '将某一条留言设置为已读状态。',
      'path' => '/v1.0/ssp/readMessage',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '	
用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => '123L',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '留言id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '服务返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '外部userId映射关系不存在',
              ),
              'Code' => 
              array (
                'description' => '服务返回的状态码，只有SUCCESS为成功，否则均为失败',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Result' => 
              array (
                'description' => '已读成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<ReadMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>true</Result>\\n</ReadMessageResponse>","errorExample":""}]',
      'title' => '已读一条留言',
    ),
    'SendMessage' => 
    array (
      'summary' => '发送一条留言。',
      'path' => '/v1.0/ssp/sendMessage',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '留言url',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xx',
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGENAME：apk包名，Android应用客户链路的编码类型 - SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PROJECT_ID',
                'enum' => 
                array (
                  0 => 'PROJECT_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的Skill ID； 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '123L',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型 - OPENID：默认的用户ID标识 - UNIONID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'Id' => 
              array (
                'description' => '	
用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => '123L',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '服务返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误信息，存在即发送失败',
                'type' => 'string',
                'example' => '外部userId映射关系不存在',
              ),
              'Code' => 
              array (
                'description' => '服务返回的状态码，SUCCESS为成功，否则均为失败',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Result' => 
              array (
                'description' => '留言发送结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"外部userId映射关系不存在\\",\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SendMessageResponse>\\n    <Message>外部userId映射关系不存在</Message>\\n    <Code>SUCCESS</Code>\\n    <Result>true</Result>\\n</SendMessageResponse>","errorExample":""}]',
      'title' => '发送留言',
    ),
    'CreateAlarm' => 
    array (
      'summary' => '创建一个闹钟，支持单次、每周、法定工作日三种类型。',
      'path' => '/v1.0/ssp/createAlarm',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'ScheduleInfo' => 
              array (
                'title' => '调度信息',
                'description' => '调度信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'title' => '调度类型/循环类型',
                    'description' => '调度类型/循环类型：
ONCE -> 单次，WEEKLY -> 周循环，STATUTORY_WORKING_DAY ->法定工作日',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'ONCE',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'WEEKLY',
                      2 => 'STATUTORY_WORKING_DAY',
                    ),
                  ),
                  'Once' => 
                  array (
                    'title' => '单次',
                    'description' => '单次：：循环类型为ONCE时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Year' => 
                      array (
                        'title' => '触发时间：年',
                        'description' => '触发时间：年',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2022',
                      ),
                      'Month' => 
                      array (
                        'title' => '触发时间：月',
                        'description' => '触发时间：月',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8',
                      ),
                      'Day' => 
                      array (
                        'title' => '触发时间：日',
                        'description' => '触发时间：日',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'Weekly' => 
                  array (
                    'title' => '周循环',
                    'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DaysOfWeek' => 
                      array (
                        'title' => '周几触发集合',
                        'description' => '周几触发集合',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '1',
                        ),
                        'required' => false,
                      ),
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'StatutoryWorkingDay' => 
                  array (
                    'title' => '法定工作日',
                    'description' => '法定工作日：循环类型为STATUTORY_WORKING_DAY时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => true,
              ),
              'MusicInfo' => 
              array (
                'title' => '音乐信息',
                'description' => '铃声信息',
                'type' => 'object',
                'properties' => 
                array (
                  'MusicType' => 
                  array (
                    'title' => '音乐类别id',
                    'description' => '铃声类别id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1',
                  ),
                  'MusicTypeName' => 
                  array (
                    'title' => '音乐类别名称',
                    'description' => '铃声类别名称',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'xx音乐',
                  ),
                  'MusicId' => 
                  array (
                    'title' => '音乐id',
                    'description' => '铃声id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1',
                  ),
                  'MusicName' => 
                  array (
                    'title' => '音乐名称',
                    'description' => '铃声名称',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'xx铃声',
                  ),
                  'MusicUrl' => 
                  array (
                    'title' => '音乐url',
                    'description' => '铃声url',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://xx',
                  ),
                ),
                'required' => true,
              ),
              'Volume' => 
              array (
                'title' => '音乐信息',
                'description' => '铃声音量',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '40',
                'default' => '40',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求结果状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'xx为空',
              ),
              'Result' => 
              array (
                'description' => '闹钟id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234567',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Result\\": 1234567,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAlarmResponse>\\n    <Code>200</Code>\\n    <Message>xx为空</Message>\\n    <Result>1234567</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</CreateAlarmResponse>","errorExample":""}]',
      'title' => '创建闹钟',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'DeleteAlarms' => 
    array (
      'summary' => '删除闹钟，可以同时删除多个。',
      'path' => '/v1.0/ssp/deleteAlarms',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AlarmIds' => 
              array (
                'title' => '待删除闹钟',
                'description' => '待删除闹钟',
                'type' => 'array',
                'format' => 'int64',
                'items' => 
                array (
                  'description' => '删除的闹总id集合',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1234567',
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '闹钟id为空',
              ),
              'Result' => 
              array (
                'description' => '删除闹钟是否执行成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"闹钟id为空\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAlarmsResponse>\\n    <Code>200</Code>\\n    <Message>闹钟id为空</Message>\\n    <Result>true</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</DeleteAlarmsResponse>","errorExample":""}]',
      'title' => '批量删除闹钟',
      'responseParamsDescription' => '仅请求返回的状态码为200时为成功，否则均为失败',
    ),
    'GetAlarm' => 
    array (
      'summary' => '获取某一个闹钟详细信息。',
      'path' => '/v1.0/ssp/getAlarm',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AlarmId' => 
              array (
                'description' => '闹钟id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1234567',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'id为空',
              ),
              'Result' => 
              array (
                'title' => '模型数据',
                'description' => '闹钟详情',
                'type' => 'object',
                'properties' => 
                array (
                  'AlarmId' => 
                  array (
                    'title' => '闹钟id',
                    'description' => '闹钟id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234567',
                  ),
                  'ScheduleTypeDesc' => 
                  array (
                    'title' => '循环类型描述',
                    'description' => '循环类型中文描述',
                    'type' => 'string',
                    'example' => '单次',
                  ),
                  'TriggerDateDesc' => 
                  array (
                    'title' => '触发日期描述（单次）',
                    'description' => '触发日期描述（单次）',
                    'type' => 'string',
                    'example' => '2022-07-29',
                  ),
                  'TriggerTimeDesc' => 
                  array (
                    'title' => '触发时间描述',
                    'description' => '触发时间描述',
                    'type' => 'string',
                    'example' => '10:00',
                  ),
                  'ScheduleInfo' => 
                  array (
                    'title' => '调度信息',
                    'description' => '调度信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Type' => 
                      array (
                        'title' => '循环类型',
                        'description' => '调度类型/循环类型： ONCE -> 单次，WEEKLY -> 周循环，STATUTORYWORKINGDAY ->法定工作日',
                        'type' => 'string',
                        'example' => 'ONCE',
                        'enum' => 
                        array (
                          0 => 'ONCE',
                          1 => 'WEEKLY',
                          2 => 'STATUTORY_WORKING_DAY',
                        ),
                      ),
                      'Once' => 
                      array (
                        'title' => '单次',
                        'description' => '单次：：循环类型为ONCE时，该属性可用',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Year' => 
                          array (
                            'title' => '触发时间：年',
                            'description' => '触发时间：年',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2022',
                          ),
                          'Month' => 
                          array (
                            'title' => '触发时间：月',
                            'description' => '触发时间：月',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '7',
                          ),
                          'Day' => 
                          array (
                            'title' => '触发时间：日',
                            'description' => '触发时间：日',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '29',
                          ),
                          'Hour' => 
                          array (
                            'title' => '触发时间：时',
                            'description' => '触发时间：时',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'Minute' => 
                          array (
                            'title' => '触发时间：分',
                            'description' => '触发时间：分',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                        ),
                      ),
                      'StatutoryWorkingDay' => 
                      array (
                        'title' => '法定工作日',
                        'description' => '法定工作日：循环类型为STATUTORYWORKINGDAY时，该属性可用',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Hour' => 
                          array (
                            'title' => '触发时间：时',
                            'description' => '触发时间：时',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'Minute' => 
                          array (
                            'title' => '触发时间：分',
                            'description' => '触发时间：分',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                        ),
                      ),
                      'Weekly' => 
                      array (
                        'title' => '周循环',
                        'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Hour' => 
                          array (
                            'title' => '触发时间：时',
                            'description' => '触发时间：时',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'Minute' => 
                          array (
                            'title' => '触发时间：分
',
                            'description' => '触发时间：分
',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'DaysOfWeek' => 
                          array (
                            'title' => '周几触发集合',
                            'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '周一',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MusicInfo' => 
                  array (
                    'title' => '音乐信息',
                    'description' => '铃声信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MusicType' => 
                      array (
                        'title' => '音乐类别id',
                        'description' => '铃声类别id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'MusicTypeName' => 
                      array (
                        'title' => '音乐类别名称',
                        'description' => '铃声类别名称',
                        'type' => 'string',
                        'example' => 'xx音乐',
                      ),
                      'MusicId' => 
                      array (
                        'title' => '音乐id',
                        'description' => '铃声id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'MusicName' => 
                      array (
                        'title' => '音乐名称',
                        'description' => '铃声名称',
                        'type' => 'string',
                        'example' => 'xx铃声',
                      ),
                      'MusicUrl' => 
                      array (
                        'title' => '音乐url',
                        'description' => '铃声url',
                        'type' => 'string',
                        'example' => 'http://xx',
                      ),
                    ),
                  ),
                  'Volume' => 
                  array (
                    'title' => '音量',
                    'description' => '铃声音量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '40',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态 0 正常 1 删除 2 关闭',
                    'description' => '状态 0 正常 1 删除 2 关闭',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"id为空\\",\\n  \\"Result\\": {\\n    \\"AlarmId\\": 1234567,\\n    \\"UserId\\": 123454321,\\n    \\"Uuid\\": \\"AF18***065EE4BD***68CEFD9***84D4\\",\\n    \\"ScheduleTypeDesc\\": \\"单次\\",\\n    \\"TriggerDateDesc\\": \\"2022-07-29\\",\\n    \\"TriggerTimeDesc\\": \\"10:00\\",\\n    \\"ScheduleInfo\\": {\\n      \\"Type\\": \\"ONCE\\",\\n      \\"Once\\": {\\n        \\"Year\\": 2022,\\n        \\"Month\\": 7,\\n        \\"Day\\": 29,\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0\\n      },\\n      \\"StatutoryWorkingDay\\": {\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0\\n      },\\n      \\"Weekly\\": {\\n        \\"Hour\\": 10,\\n        \\"Minute\\": 0,\\n        \\"DaysOfWeek\\": [\\n          1\\n        ]\\n      }\\n    },\\n    \\"MusicInfo\\": {\\n      \\"MusicType\\": 1,\\n      \\"MusicTypeName\\": \\"xx音乐\\",\\n      \\"MusicId\\": 1,\\n      \\"MusicName\\": \\"xx铃声\\",\\n      \\"MusicUrl\\": \\"http://xx\\"\\n    },\\n    \\"Volume\\": 40,\\n    \\"Status\\": 0\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAlarmResponse>\\n    <Code>200</Code>\\n    <Message>id为空</Message>\\n    <Result>\\n        <AlarmId>1234567</AlarmId>\\n        <UserId>123454321</UserId>\\n        <Uuid>AF18***065EE4BD***68CEFD9***84D4</Uuid>\\n        <ScheduleTypeDesc>单次</ScheduleTypeDesc>\\n        <TriggerDateDesc>2022-07-29</TriggerDateDesc>\\n        <TriggerTimeDesc>10:00</TriggerTimeDesc>\\n        <ScheduleInfo>\\n            <Type>ONCE</Type>\\n            <Once>\\n                <Year>2022</Year>\\n                <Month>7</Month>\\n                <Day>29</Day>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n            </Once>\\n            <StatutoryWorkingDay>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n            </StatutoryWorkingDay>\\n            <Weekly>\\n                <Hour>10</Hour>\\n                <Minute>0</Minute>\\n                <DaysOfWeek>1</DaysOfWeek>\\n            </Weekly>\\n        </ScheduleInfo>\\n        <MusicInfo>\\n            <MusicType>1</MusicType>\\n            <MusicTypeName>xx音乐</MusicTypeName>\\n            <MusicId>1</MusicId>\\n            <MusicName>xx铃声</MusicName>\\n            <MusicUrl>http://xx</MusicUrl>\\n        </MusicInfo>\\n        <Volume>40</Volume>\\n        <Status>0</Status>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</GetAlarmResponse>","errorExample":""}]',
      'title' => '获取单个闹钟详情',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'ListAlarms' => 
    array (
      'summary' => '查询设备某一个用户的闹钟列表，分页查询。',
      'path' => '/v1.0/ssp/listAlarm',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
                'default' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页条数',
                'description' => '每页条数 ：最大值100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
                'default' => '10',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '设备账号未关联',
              ),
              'Result' => 
              array (
                'description' => '闹钟列表结果集合',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '总条数',
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageCount' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页条数',
                    'description' => '每页条数：最大100，超过100按100处理',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CurrentPage' => 
                  array (
                    'title' => '当前页',
                    'description' => '当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Model' => 
                  array (
                    'title' => '闹钟列表',
                    'description' => '闹钟列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '闹钟详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AlarmId' => 
                        array (
                          'title' => '闹钟id',
                          'description' => '闹钟id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1234567',
                        ),
                        'ScheduleTypeDesc' => 
                        array (
                          'title' => '循环类型描述',
                          'description' => '循环类型中文描述',
                          'type' => 'string',
                          'example' => '单次',
                        ),
                        'TriggerDateDesc' => 
                        array (
                          'title' => '触发日期描述（单次）',
                          'description' => '触发日期描述（单次）',
                          'type' => 'string',
                          'example' => '2022-07-29',
                        ),
                        'TriggerTimeDesc' => 
                        array (
                          'title' => '触发时间描述',
                          'description' => '触发时间描述',
                          'type' => 'string',
                          'example' => '10:00',
                        ),
                        'ScheduleInfo' => 
                        array (
                          'title' => '调度信息',
                          'description' => '调度信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'title' => '循环类型',
                              'description' => '调度类型/循环类型： ONCE -> 单次，WEEKLY -> 周循环，STATUTORYWORKINGDAY ->法定工作日',
                              'type' => 'string',
                              'example' => 'ONCE',
                              'enum' => 
                              array (
                                0 => 'ONCE',
                                1 => 'WEEKLY',
                                2 => 'STATUTORY_WORKING_DAY',
                              ),
                            ),
                            'Once' => 
                            array (
                              'title' => '单次',
                              'description' => '单次：：循环类型为ONCE时，该属性可用',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Year' => 
                                array (
                                  'title' => '触发时间：年',
                                  'description' => '触发时间：年',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '2022',
                                ),
                                'Month' => 
                                array (
                                  'title' => '触发时间：月',
                                  'description' => '触发时间：月',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '7',
                                ),
                                'Day' => 
                                array (
                                  'title' => '触发时间：日',
                                  'description' => '触发时间：日',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '29',
                                ),
                                'Hour' => 
                                array (
                                  'title' => '触发时间：时',
                                  'description' => '触发时间：时',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '10',
                                ),
                                'Minute' => 
                                array (
                                  'title' => '触发时间：分',
                                  'description' => '触发时间：分',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                              ),
                            ),
                            'Weekly' => 
                            array (
                              'title' => '周循环',
                              'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Hour' => 
                                array (
                                  'title' => '触发时间：时',
                                  'description' => '触发时间：时',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '10',
                                ),
                                'Minute' => 
                                array (
                                  'title' => '触发时间：分',
                                  'description' => '触发时间：分',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'DaysOfWeek' => 
                                array (
                                  'title' => '周几触发集合',
                                  'description' => '周几触发集合',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                ),
                              ),
                            ),
                            'StatutoryWorkingDay' => 
                            array (
                              'title' => '法定工作日',
                              'description' => '法定工作日：循环类型为STATUTORYWORKINGDAY时，该属性可用',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Hour' => 
                                array (
                                  'title' => '触发时间：时',
                                  'description' => '触发时间：时',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '10',
                                ),
                                'Minute' => 
                                array (
                                  'title' => '触发时间：分',
                                  'description' => '触发时间：分',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'MusicInfo' => 
                        array (
                          'title' => '音乐信息',
                          'description' => '音乐信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MusicType' => 
                            array (
                              'title' => '音乐类别id',
                              'description' => '铃声类别id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'MusicTypeName' => 
                            array (
                              'title' => '音乐类别名称',
                              'description' => '铃声类别名称',
                              'type' => 'string',
                              'example' => 'xx音乐',
                            ),
                            'MusicId' => 
                            array (
                              'title' => '音乐id',
                              'description' => '铃声id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'MusicName' => 
                            array (
                              'title' => '音乐名称',
                              'description' => '铃声名称',
                              'type' => 'string',
                              'example' => 'xx铃声',
                            ),
                            'MusicUrl' => 
                            array (
                              'title' => '音乐url',
                              'description' => '音乐url',
                              'type' => 'string',
                              'example' => 'http://xx',
                            ),
                          ),
                        ),
                        'Volume' => 
                        array (
                          'title' => '音量',
                          'description' => '铃声音量，默认40',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '40',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态 0 正常 1 删除 2 关闭',
                          'description' => '状态 0 正常 1 删除 2 关闭',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"设备账号未关联\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageCount\\": 10,\\n    \\"PageSize\\": 10,\\n    \\"CurrentPage\\": 1,\\n    \\"Model\\": [\\n      {\\n        \\"AlarmId\\": 1234567,\\n        \\"UserId\\": 1234321,\\n        \\"Uuid\\": \\"AF18***065EE4BD***68CEFD9***84D4\\",\\n        \\"ScheduleTypeDesc\\": \\"单次\\",\\n        \\"TriggerDateDesc\\": \\"2022-07-29\\",\\n        \\"TriggerTimeDesc\\": \\"10:00\\",\\n        \\"ScheduleInfo\\": {\\n          \\"Type\\": \\"ONCE\\",\\n          \\"Once\\": {\\n            \\"Year\\": 2022,\\n            \\"Month\\": 7,\\n            \\"Day\\": 29,\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0\\n          },\\n          \\"Weekly\\": {\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0,\\n            \\"DaysOfWeek\\": [\\n              1\\n            ]\\n          },\\n          \\"StatutoryWorkingDay\\": {\\n            \\"Hour\\": 10,\\n            \\"Minute\\": 0\\n          }\\n        },\\n        \\"MusicInfo\\": {\\n          \\"MusicType\\": 1,\\n          \\"MusicTypeName\\": \\"xx音乐\\",\\n          \\"MusicId\\": 1,\\n          \\"MusicName\\": \\"xx铃声\\",\\n          \\"MusicUrl\\": \\"http://xx\\"\\n        },\\n        \\"Volume\\": 40,\\n        \\"Status\\": 0\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAlarmsResponse>\\n    <Code>200</Code>\\n    <Message>设备账号未关联</Message>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageCount>10</PageCount>\\n        <PageSize>10</PageSize>\\n        <CurrentPage>1</CurrentPage>\\n        <Model>\\n            <AlarmId>1234567</AlarmId>\\n            <UserId>1234321</UserId>\\n            <Uuid>AF18***065EE4BD***68CEFD9***84D4</Uuid>\\n            <ScheduleTypeDesc>单次</ScheduleTypeDesc>\\n            <TriggerDateDesc>2022-07-29</TriggerDateDesc>\\n            <TriggerTimeDesc>10:00</TriggerTimeDesc>\\n            <ScheduleInfo>\\n                <Type>ONCE</Type>\\n                <Once>\\n                    <Year>2022</Year>\\n                    <Month>7</Month>\\n                    <Day>29</Day>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                </Once>\\n                <Weekly>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                    <DaysOfWeek>1</DaysOfWeek>\\n                </Weekly>\\n                <StatutoryWorkingDay>\\n                    <Hour>10</Hour>\\n                    <Minute>0</Minute>\\n                </StatutoryWorkingDay>\\n            </ScheduleInfo>\\n            <MusicInfo>\\n                <MusicType>1</MusicType>\\n                <MusicTypeName>xx音乐</MusicTypeName>\\n                <MusicId>1</MusicId>\\n                <MusicName>xx铃声</MusicName>\\n                <MusicUrl>http://xx</MusicUrl>\\n            </MusicInfo>\\n            <Volume>40</Volume>\\n            <Status>0</Status>\\n        </Model>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</ListAlarmsResponse>","errorExample":""}]',
      'title' => '查询闹钟列表',
      'responseParamsDescription' => '1.仅请求返回的状态码为200时为成功，否则均为失败
2.分页返回参数与实际列表数不符合，这里仅为展示',
    ),
    'ListMusic' => 
    array (
      'summary' => '基于音乐类型查询该类型下的铃声列表。',
      'path' => '/v1.0/ssp/listMusic',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'MusicType' => 
              array (
                'title' => '音乐类别id',
                'description' => '铃声类别id，由queryMusicType接口返回',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'MusicTypeName' => 
              array (
                'title' => '音乐类别名称',
                'description' => '铃声类别名称，由queryMusicType接口返回',
                'type' => 'string',
                'required' => true,
                'example' => 'xx音乐',
              ),
              'MusicId' => 
              array (
                'title' => '音乐id',
                'description' => '铃声id，扩展字段，暂不用传',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'MusicName' => 
              array (
                'title' => '音乐名称',
                'description' => '铃声名称，扩展字段，暂不用传',
                'type' => 'string',
                'required' => false,
                'example' => 'xx铃声',
              ),
              'CurrentPage' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
                'default' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页条数',
                'description' => '每页条数：最大值100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
                'default' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '音乐类型名称为空',
              ),
              'Result' => 
              array (
                'description' => '铃声查询结果集合',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '总条数',
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageCount' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页条数',
                    'description' => '每页条数:最大值100，超过100按100处理',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CurrentPage' => 
                  array (
                    'title' => '当前页',
                    'description' => '当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Model' => 
                  array (
                    'title' => '铃声列表',
                    'description' => '铃声列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '铃声信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MusicType' => 
                        array (
                          'title' => '音乐类别id',
                          'description' => '铃声类别id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'MusicTypeName' => 
                        array (
                          'title' => '音乐类别名称',
                          'description' => '铃声类别名称',
                          'type' => 'string',
                          'example' => 'xx',
                        ),
                        'MusicId' => 
                        array (
                          'title' => '音乐id',
                          'description' => '铃声id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'MusicName' => 
                        array (
                          'title' => '音乐名称',
                          'description' => '铃声名称',
                          'type' => 'string',
                          'example' => 'xx',
                        ),
                        'MusicUrl' => 
                        array (
                          'title' => '音乐url',
                          'description' => '铃声url',
                          'type' => 'string',
                          'example' => 'http://xx',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"音乐类型名称为空\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageCount\\": 10,\\n    \\"PageSize\\": 10,\\n    \\"CurrentPage\\": 1,\\n    \\"Model\\": [\\n      {\\n        \\"MusicType\\": 1,\\n        \\"MusicTypeName\\": \\"xx\\",\\n        \\"MusicId\\": 1,\\n        \\"MusicName\\": \\"xx\\",\\n        \\"MusicUrl\\": \\"http://xx\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<ListMusicResponse>\\n    <Code>200</Code>\\n    <Message>音乐类型名称为空</Message>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageCount>10</PageCount>\\n        <PageSize>10</PageSize>\\n        <CurrentPage>1</CurrentPage>\\n        <Model>\\n            <MusicType>1</MusicType>\\n            <MusicTypeName>xx</MusicTypeName>\\n            <MusicId>1</MusicId>\\n            <MusicName>xx</MusicName>\\n            <MusicUrl>http://xx</MusicUrl>\\n        </Model>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</ListMusicResponse>","errorExample":""}]',
      'title' => '查询铃声分页列表',
      'responseParamsDescription' => '仅请求返回的状态码为200时为成功，否则均为失败',
    ),
    'QueryMusicType' => 
    array (
      'summary' => '获取设备支持的闹钟音乐类型集合。',
      'path' => '/v1.0/ssp/queryMusicType',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
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
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '设备账号未关联',
              ),
              'Result' => 
              array (
                'description' => '铃声类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '铃声类型详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MusicType' => 
                    array (
                      'title' => '铃声类型id',
                      'description' => '铃声类型id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'MusicTypeName' => 
                    array (
                      'title' => 'musicTypeName',
                      'description' => '铃声类别名称',
                      'type' => 'string',
                      'example' => 'xx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"设备账号未关联\\",\\n  \\"Result\\": [\\n    {\\n      \\"MusicType\\": 1,\\n      \\"MusicTypeName\\": \\"xx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryMusicTypeResponse>\\n    <Code>200</Code>\\n    <Message>设备账号未关联</Message>\\n    <Result>\\n        <MusicType>1</MusicType>\\n        <MusicTypeName>xx</MusicTypeName>\\n    </Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</QueryMusicTypeResponse>","errorExample":""}]',
      'title' => '获取闹钟音乐类型列表',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'UpdateAlarm' => 
    array (
      'summary' => '更新闹钟，可以更新触发时间、循环类型、音乐。',
      'path' => '/v1.0/ssp/updateAlarm',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'ScheduleInfo' => 
              array (
                'title' => '调度信息',
                'description' => '调度信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'title' => '调度类型/循环类型',
                    'description' => '调度类型/循环类型：
ONCE -> 单次，WEEKLY -> 周循环，STATUTORY_WORKING_DAY ->法定工作日',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'WEEKLY',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'WEEKLY',
                      2 => 'STATUTORY_WORKING_DAY',
                    ),
                  ),
                  'Once' => 
                  array (
                    'title' => '单次',
                    'description' => '单次：：循环类型为ONCE时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Year' => 
                      array (
                        'title' => '触发时间：年',
                        'description' => '触发时间：年',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2022',
                      ),
                      'Month' => 
                      array (
                        'title' => '触发时间：月',
                        'description' => '触发时间：月',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8',
                      ),
                      'Day' => 
                      array (
                        'title' => '触发时间：日',
                        'description' => '触发时间：日',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'Weekly' => 
                  array (
                    'title' => '周循环',
                    'description' => '周循环：循环类型为WEEKLY时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DaysOfWeek' => 
                      array (
                        'title' => '周几触发集合',
                        'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '周一',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '1',
                        ),
                        'required' => false,
                      ),
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'StatutoryWorkingDay' => 
                  array (
                    'title' => '法定工作日',
                    'description' => '法定工作日：循环类型为STATUTORY_WORKING_DAY时，该属性可用',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hour' => 
                      array (
                        'title' => '触发时间：时',
                        'description' => '触发时间：时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发时间：分',
                        'description' => '触发时间：分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => true,
              ),
              'MusicInfo' => 
              array (
                'title' => '音乐信息',
                'description' => '铃声信息',
                'type' => 'object',
                'properties' => 
                array (
                  'MusicType' => 
                  array (
                    'title' => '音乐类别id',
                    'description' => '铃声类别id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '12',
                  ),
                  'MusicTypeName' => 
                  array (
                    'title' => '音乐类别名称',
                    'description' => '铃声类别名称',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'xx音乐',
                  ),
                  'MusicId' => 
                  array (
                    'title' => '音乐id',
                    'description' => '铃声id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '2',
                  ),
                  'MusicName' => 
                  array (
                    'title' => '音乐名称',
                    'description' => '铃声名称',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'xx铃声',
                  ),
                  'MusicUrl' => 
                  array (
                    'title' => '音乐url',
                    'description' => '铃声url',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://music-url.mp3',
                  ),
                ),
                'required' => true,
              ),
              'AlarmId' => 
              array (
                'title' => '闹钟id',
                'description' => '闹钟id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1234567',
              ),
              'Volume' => 
              array (
                'title' => '音量',
                'description' => '铃声音量',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '40',
                'default' => '40',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'enum' => 
                array (
                  0 => 'OPEN_ID',
                  1 => 'UNION_ID',
                ),
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'PACKAGE_NAME',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult',
            'description' => 'AmpResult',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '闹钟服务返回的状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'xx为空',
              ),
              'Result' => 
              array (
                'description' => '更新结果是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAlarmResponse>\\n    <Code>200</Code>\\n    <Message>xx为空</Message>\\n    <Result>true</Result>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</UpdateAlarmResponse>","errorExample":""}]',
      'title' => '更新闹钟',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'CreateScheduleTask' => 
    array (
      'summary' => '创建定时任务。',
      'path' => '/v1.0/ssp/CreateScheduleTask',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'IdempotentId' => 
              array (
                'title' => '幂等id',
                'description' => '幂等id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
              ),
              'UserId' => 
              array (
                'title' => '用户id',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'type' => 'string',
              ),
              'ScheduleDTO' => 
              array (
                'title' => '调度信息',
                'description' => '调度信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ScheduleType' => 
                  array (
                    'title' => '调度类型',
                    'description' => '调度类型',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'ONCE',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'WEEKLY',
                      2 => 'STATUTORY_DAY',
                    ),
                  ),
                  'Once' => 
                  array (
                    'title' => '单次调度配置',
                    'description' => '单次调度配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Year' => 
                      array (
                        'title' => '触发年',
                        'description' => '触发年',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2022',
                      ),
                      'Month' => 
                      array (
                        'title' => '触发月',
                        'description' => '触发月',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                      ),
                      'Day' => 
                      array (
                        'title' => '触发日',
                        'description' => '触发日',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '26',
                      ),
                      'Hour' => 
                      array (
                        'title' => '触发时',
                        'description' => '触发时',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                      ),
                      'Minute' => 
                      array (
                        'title' => '触发分',
                        'description' => '触发分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                      ),
                    ),
                    'required' => false,
                  ),
                  'Weekly' => 
                  array (
                    'title' => '循环调度配置',
                    'description' => '循环调度配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DaysOfWeek' => 
                      array (
                        'title' => '触发星期，1-7分别代表周一到周日',
                        'description' => '触发星期，1-7分别代表周一到周日',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '7',
                        ),
                        'required' => false,
                      ),
                      'Hours' => 
                      array (
                        'title' => '触发时',
                        'description' => '触发时',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '12',
                        ),
                        'required' => false,
                      ),
                      'Minutes' => 
                      array (
                        'title' => '触发分',
                        'description' => '触发分',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '30',
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'StatutoryWorkingDay' => 
                  array (
                    'title' => '法定工作日调度配置',
                    'description' => '法定工作日调度配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hours' => 
                      array (
                        'title' => '触发时，可多选',
                        'description' => '触发时，可多选',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '12',
                        ),
                        'required' => false,
                      ),
                      'Minutes' => 
                      array (
                        'title' => '触发分，可多选',
                        'description' => '触发分，可多选',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '30',
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'ScheduleStartTime' => 
                  array (
                    'title' => '调度开始时间',
                    'description' => '调度开始时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1656318855000',
                  ),
                  'ScheduleEndTime' => 
                  array (
                    'title' => '调度结束时间',
                    'description' => '调度结束时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1661589255000',
                  ),
                ),
                'required' => true,
              ),
              'ActionDTOs' => 
              array (
                'title' => '调度行动参数',
                'description' => '调度行动参数',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'customAction' => 
                    array (
                      'description' => '厂商自定义命令',
                      'type' => 'object',
                      'required' => false,
                      'example' => '{"k1":"v1","k2":{"key":1}}',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方ak',
                'type' => 'string',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult<Long>',
            'description' => 'AmpResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '调用成功',
              ),
              'Result' => 
              array (
                'description' => '创建成功的任务id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234567',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Result\\": 1234567,\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <Result>1234567</Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</CreateScheduleTaskResponse>","errorExample":""}]',
      'title' => '创建定时任务',
      'description' => '根据单次、每日、法定工作日等定时规则，配置生态inside自定义指令数据的触发任务',
      'responseParamsDescription' => '    仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'DeleteScheduleTask' => 
    array (
      'summary' => '删除定时任务。',
      'path' => '/v1.0/ssp/DeleteScheduleTask',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '待删除的调度id',
                'description' => '待删除的任务id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1234567',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'type' => 'string',
              ),
              'UserId' => 
              array (
                'title' => '用户id',
                'type' => 'string',
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方ak',
                'type' => 'string',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult<Boolean>',
            'description' => 'AmpResult<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '响应码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => '调用成功',
              ),
              'Result' => 
              array (
                'title' => '删除结果',
                'description' => '响应结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <Result>true</Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</DeleteScheduleTaskResponse>","errorExample":""}]',
      'title' => '删除定时任务',
      'description' => '根据定时任务id，删除指定定时任务',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'GetScheduleTask' => 
    array (
      'summary' => '获取定时任务信息。',
      'path' => '/v1.0/ssp/GetScheduleTask',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '待查询的调度id',
                'description' => '待查询的任务id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1234567',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'type' => 'string',
                'required' => false,
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => false,
              ),
              'UserId' => 
              array (
                'title' => '用户id',
                'type' => 'string',
                'required' => false,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方ak',
                'type' => 'string',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPENID：默认的用户ID标识-UNIONID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGENAME：apk包名，Android应用客户链路的编码类型-SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的SkillID；编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPENID：默认的设备ID标识-UNIONID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGENAME：apk包名，Android应用客户链路的编码类型-SKILLID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILLID时，其值为应用的SkillID；编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult<ScheduleOpenResponse>',
            'description' => 'AmpResult<ScheduleOpenResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '响应码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '响应信息',
                'type' => 'string',
                'example' => '调用成功',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F7E21065-6C21-1158-A2F9-AEFE5CAB7C94',
              ),
              'Result' => 
              array (
                'title' => '服务响应出参',
                'description' => '服务响应出参',
                'type' => 'object',
                'properties' => 
                array (
                  'ScheduleId' => 
                  array (
                    'title' => '调度id',
                    'description' => '任务id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234567',
                  ),
                  'ScheduleType' => 
                  array (
                    'title' => '调度类型',
                    'description' => '调度类型',
                    'type' => 'string',
                    'example' => 'ONCE',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'WEEKLY',
                      2 => 'STATUTORY_DAY',
                    ),
                  ),
                  'Cron' => 
                  array (
                    'title' => '触发cron表达式',
                    'description' => '触发cron表达式',
                    'type' => 'string',
                    'example' => '0 10 20 30 6 ? 2022',
                  ),
                  'ScheduleStartTime' => 
                  array (
                    'description' => '调度有效期-开始时间',
                    'type' => 'string',
                    'example' => '1656577473000',
                  ),
                  'ScheduleEndTime' => 
                  array (
                    'description' => '调度有效期-结束时间',
                    'type' => 'string',
                    'example' => '1659169473000',
                  ),
                  'ActionTopicList' => 
                  array (
                    'description' => '触发行为',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CustomAction' => 
                        array (
                          'description' => '厂商自定义命令',
                          'type' => 'object',
                          'example' => '{"k1":"v1","k2":{"key":1}}',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"调用成功\\",\\n  \\"RequestId\\": \\"F7E21065-6C21-1158-A2F9-AEFE5CAB7C94\\",\\n  \\"Result\\": {\\n    \\"ScheduleId\\": 1234567,\\n    \\"ScheduleType\\": \\"ONCE\\",\\n    \\"Cron\\": \\"0 10 20 30 6 ? 2022\\",\\n    \\"ScheduleStartTime\\": \\"1656577473000\\",\\n    \\"ScheduleEndTime\\": \\"1659169473000\\",\\n    \\"ActionTopicList\\": [\\n      {\\n        \\"CustomAction\\": {\\n          \\"k1\\": \\"v1\\",\\n          \\"k2\\": {\\n            \\"key\\": 1\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScheduleTaskResponse>\\n    <Code>200</Code>\\n    <Message>调用成功</Message>\\n    <RequestId>F7E21065-6C21-1158-A2F9-AEFE5CAB7C94</RequestId>\\n    <Result>\\n        <Uuid>362*****8C1</Uuid>\\n        <ScheduleId>1234567</ScheduleId>\\n        <ScheduleType>ONCE</ScheduleType>\\n        <Cron>0 10 20 30 6 ? 2022</Cron>\\n        <ScheduleStartTime>1656577473000</ScheduleStartTime>\\n        <ScheduleEndTime>1659169473000</ScheduleEndTime>\\n        <ActionTopicList/>\\n    </Result>\\n</GetScheduleTaskResponse>","errorExample":""}]',
      'title' => '获取定时任务信息',
      'description' => '根据定时任务id，查询指定定时任务数据详情',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
    'GetWeather' => 
    array (
      'summary' => '查询天气。',
      'path' => '/v1.0/ssp/GetWeather',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参',
            'type' => 'object',
            'properties' => 
            array (
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => false,
              ),
              'UserId' => 
              array (
                'title' => '用户id',
                'type' => 'string',
                'required' => false,
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'type' => 'string',
                'required' => false,
              ),
              'AccessKeyId' => 
              array (
                'title' => '调用方ak',
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户标识信息',
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识（userOpenId或userUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型-OPEN_ID：默认的用户ID标识-UNION_ID:组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '设备标识信息',
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识（deviceOpenId或deviceUnionId）',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型-OPEN_ID：默认的设备ID标识-UNION_ID:组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型-PACKAGE_NAME：apk包名，Android应用客户链路的编码类型-SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的SkillID；编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'AmpResult<WeatherResponse>',
            'description' => 'AmpResult<WeatherResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '调用成功',
              ),
              'Code' => 
              array (
                'title' => 'HttpCode',
                'description' => 'HttpCode',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '模型数据',
                'description' => '模型数据',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentMeteorology' => 
                  array (
                    'title' => '当前天气',
                    'description' => '当前天气',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Weather' => 
                      array (
                        'title' => '白天天气',
                        'description' => '白天天气',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'title' => '天气编号: 形如："000,100"',
                            'description' => '天气编号: 形如："000,100"',
                            'type' => 'string',
                            'example' => '000',
                          ),
                          'Name' => 
                          array (
                            'title' => '天气名称描述: "晴(000),多云(100)"',
                            'description' => '天气名称描述: "晴(000), 多云(100), 阴(101), 雨(200), 小雨(201), 小到中雨(202), 中雨(203), 中到大雨(204), 大雨(205), 大到暴雨(206), 暴雨(207), 大暴雨(209), 特大暴雨(211), 阵雨(212), 雷阵雨(213), 冻雨(214), 雪(300), 雨夹雪(301), 阵雪(302), 小雪(303), 小到中雪(304), 中雪(305), 大雪(307), 暴雪(309), 雾(400), 浮尘(501), 扬沙(502), 沙尘暴(503), 强沙尘暴(504), 大部晴朗(000), 少云(100), 小阵雨(212), 雷电(213), 冰粒(214), 雷阵雨伴有冰雹(215), 小阵雪(302), 冻雾(400), 霾(500), 尘卷风(502), 局部阵雨(212), 雷暴(213), 冰针(214), 冰雹(215), 强阵雨(212)"',
                            'type' => 'string',
                            'example' => '晴',
                          ),
                        ),
                      ),
                      'Temperature' => 
                      array (
                        'title' => '温度',
                        'description' => '温度',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Current' => 
                          array (
                            'title' => '当前温度气温值',
                            'description' => '当前温度气温值',
                            'type' => 'string',
                            'example' => '36',
                          ),
                          'CurrentDesc' => 
                          array (
                            'title' => '当前温度气温值描述',
                            'description' => '当前温度气温值描述',
                            'type' => 'string',
                            'example' => '36度',
                          ),
                          'High' => 
                          array (
                            'title' => '气温最高值',
                            'description' => '气温最高值',
                            'type' => 'string',
                            'example' => '37',
                          ),
                          'HighDesc' => 
                          array (
                            'title' => '气温最高值描述',
                            'description' => '气温最高值描述',
                            'type' => 'string',
                            'example' => '37度',
                          ),
                          'Low' => 
                          array (
                            'title' => '气温最低值',
                            'description' => '气温最低值',
                            'type' => 'string',
                            'example' => '28',
                          ),
                          'LowDesc' => 
                          array (
                            'title' => '气温最低值描述',
                            'description' => '气温最低值描述',
                            'type' => 'string',
                            'example' => '28度',
                          ),
                          'Logical' => 
                          array (
                            'title' => '带有逻辑的温度,逻辑如下:',
                            'description' => '带有逻辑的温度,逻辑如下:',
                            'type' => 'string',
                            'example' => '41',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"调用成功\\",\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"CurrentMeteorology\\": {\\n      \\"Weather\\": {\\n        \\"Code\\": \\"000\\",\\n        \\"Name\\": \\"晴\\"\\n      },\\n      \\"Temperature\\": {\\n        \\"Current\\": \\"36\\",\\n        \\"CurrentDesc\\": \\"36度\\",\\n        \\"High\\": \\"37\\",\\n        \\"HighDesc\\": \\"37度\\",\\n        \\"Low\\": \\"28\\",\\n        \\"LowDesc\\": \\"28度\\",\\n        \\"Logical\\": \\"41\\"\\n      }\\n    }\\n  },\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","errorExample":""},{"type":"xml","example":"<GetWeatherResponse>\\n    <Message>调用成功</Message>\\n    <Code>200</Code>\\n    <Result>\\n        <CurrentMeteorology>\\n            <Weather>\\n                <Code>000</Code>\\n                <Name>晴</Name>\\n            </Weather>\\n            <Temperature>\\n                <Current>36</Current>\\n                <CurrentDesc>36度</CurrentDesc>\\n                <High>37</High>\\n                <HighDesc>37度</HighDesc>\\n                <Low>28</Low>\\n                <LowDesc>28度</LowDesc>\\n                <Logical>41</Logical>\\n            </Temperature>\\n        </CurrentMeteorology>\\n    </Result>\\n    <RequestId>F7E2****B7C94</RequestId>\\n</GetWeatherResponse>","errorExample":""}]',
      'title' => '查询天气',
      'description' => '根据系统参数获取到的设备信息，查询设备所在地的天气数据',
      'responseParamsDescription' => '仅服务返回的状态码为200时为成功，否则均表示失败',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'openapi.aligenie.com',
    ),
  ),
);
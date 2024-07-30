<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'AliGenie',
        'product' => 'AliGenie',
        'version' => 'iap_1.0',
    ],
    'directories' => [
        [
            'id' => 167271,
            'title' => '应用商业化',
            'type' => 'directory',
            'children' => [
                'GetBusAppConfig',
                'AppUseTimeReport',
                'PullCashier',
                'VideoAppReport',
                'GetAccountForApp',
            ],
        ],
        [
            'id' => 95708,
            'title' => '获取手机号',
            'type' => 'directory',
            'children' => [
                'GetPhoneNumber',
            ],
        ],
        [
            'id' => 95710,
            'title' => '日程提醒',
            'type' => 'directory',
            'children' => [
                'CreateReminder',
                'GetReminder',
                'ListReminders',
                'UpdateReminder',
                'DeleteReminder',
            ],
        ],
        [
            'id' => 95716,
            'title' => '应用唤起',
            'type' => 'directory',
            'children' => [
                'WakeUpApp',
            ],
        ],
        [
            'id' => 95719,
            'title' => '消息推送',
            'type' => 'directory',
            'children' => [
                'PushNotifications',
                'SendNotifications',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'CheckThirdRightSendPlan',
                'CallBackThirdRightSendPlan',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetBusAppConfig' => [
            'summary' => '获取应用配置。',
            'path' => '/v1.0/iap/app/config/get',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '业务参数',
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'phone' => [
                                'title' => '手机号',
                                'description' => '手机号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '136****1111',
                            ],
                            'originUuid' => [
                                'title' => '明文uuid',
                                'description' => '明文uuid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '731D5F********DC3B',
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
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识(UserOpenId或UserUnionId)',
                                'description' => '用户标识(UserOpenId或UserUnionId)',
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
                                'example' => 'SKILL_ID',
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
                    'in' => 'query',
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
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => false,
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
                                'required' => false,
                                'example' => 'SKILL_ID',
                                'enum' => [
                                    'SKILL_ID',
                                    'PACKAGE_NAME',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
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
                            'RetCode' => [
                                'title' => '返回的错误码，0表示成功。',
                                'description' => '返回的错误码，0表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '	0',
                            ],
                            'RetMsg' => [
                                'title' => '返回的错误信息，成功则不返回信息。',
                                'description' => '返回的错误信息，成功则不返回信息。',
                                'type' => 'string',
                                'example' => '	请求异常',
                            ],
                            'RetValue' => [
                                'title' => '返回的结果对象',
                                'description' => '配置信息(VIP标、导购条、导购弹窗)',
                                'type' => 'object',
                                'properties' => [
                                    'VipLabel' => [
                                        'title' => 'VIP透标URL',
                                        'description' => 'VIP透标URL',
                                        'type' => 'string',
                                        'example' => 'https://******.com/design/******?imageId=xxxxx',
                                    ],
                                    'ShoppingBar' => [
                                        'title' => '导购条URL',
                                        'description' => '导购条URL',
                                        'type' => 'string',
                                        'example' => 'https://******.com/design/******?imageId=xxxxx',
                                    ],
                                    'ShoppingWindow' => [
                                        'title' => '导购弹窗URL',
                                        'description' => '导购弹窗URL',
                                        'type' => 'string',
                                        'example' => 'https://******.com/design/******?imageId=xxxxx',
                                    ],
                                    'Cashier' => [
                                        'title' => '收银台URL',
                                        'description' => '收银台URL',
                                        'type' => 'string',
                                        'example' => 'https://******.com/*****/******?appId=xxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"\\\\t请求异常\\",\\n  \\"RetValue\\": {\\n    \\"VipLabel\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"ShoppingBar\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"ShoppingWindow\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"Cashier\\": \\"https://******.com/*****/******?appId=xxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取应用配置',
        ],
        'AppUseTimeReport' => [
            'summary' => '用于在天猫精灵设备上上报应用的使用时长。',
            'path' => '/v1.0/iap/vip/use/time/report',
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
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '用户id',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'title' => '设备di',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Action' => [
                                'title' => '操作',
                                'description' => '动作项'."\n"
                                    ."\n"
                                    .'- start表示开始'."\n"
                                    .'- end表示结束',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'start',
                            ],
                            'StepCode' => [
                                'title' => '步进码',
                                'description' => '步进码，开始与结束的动作要唯一匹配。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2',
                            ],
                            'ResourceId' => [
                                'title' => '资源id',
                                'description' => '资源ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'ResourceType' => [
                                'title' => 'resourceType',
                                'description' => '资源类型：'."\n"
                                    ."\n"
                                    .'- 0表示游戏'."\n"
                                    .'- 1表示音频'."\n"
                                    .'- 2表示视频',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'IsPrivilege' => [
                                'title' => '是否会员专享权益：1-是  0-否',
                                'description' => '是否会员专享权益：'."\n"
                                    ."\n"
                                    .'- 1表示是  '."\n"
                                    .'- 0表示否',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'VipType' => [
                                'title' => '会员类型',
                                'description' => '会员类型：'."\n"
                                    ."\n"
                                    .'- 0表示猫精会员'."\n"
                                    .'- 1表示三方自有会员',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'originUuid' => [
                                'description' => '明文uuid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '731D5F********DC3B',
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
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型  '."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
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
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RetCode' => [
                                'description' => '返回的错误码，`0`表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RetMsg' => [
                                'description' => '返回的错误信息，成功则不返回信息。',
                                'type' => 'string',
                                'example' => '请求异常',
                            ],
                            'RetValue' => [
                                'description' => '调用接口的结果'."\n"
                                    ."\n"
                                    .'- true表示成功'."\n"
                                    .'- false表示失败',
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
                        'errorCode' => '500',
                        'errorMessage' => '内部服务错误_xxx',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<AppUseTimeReportResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</AppUseTimeReportResponse>","errorExample":""}]',
            'title' => '上报应用使用时长',
        ],
        'PullCashier' => [
            'summary' => '用户在天猫精灵设备上拉起收银台。',
            'path' => '/v1.0/iap/pull/cashier/',
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
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'originUuid' => [
                                'description' => '明文uuid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '731D5F********DC3B',
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
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
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
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RetCode' => [
                                'title' => '错误吗',
                                'description' => '返回的错误码，`0`表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RetMsg' => [
                                'title' => '错误信息',
                                'description' => '返回的错误信息，成功则不返回信息。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RetValue' => [
                                'description' => '拉取收银台的结果，true表示成功，false表示失败。',
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
                        'errorCode' => '500',
                        'errorMessage' => '内部服务错误_xxx',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求成功\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<PullCashierResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</PullCashierResponse>","errorExample":""}]',
            'title' => '拉起收银台',
        ],
        'VideoAppReport' => [
            'summary' => '用于开发者在与猫精进行会员合作的场景下上报其会员信息。',
            'path' => '/v1.0/iap/vip/use/video/report',
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
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'DeviceId' => [
                                'title' => '设备di',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'isLogin' => [
                                'description' => '会员是否登录。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'isVip' => [
                                'description' => '该账号是否为会员。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'startTime' => [
                                'description' => '会员的开始时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1652337963097',
                            ],
                            'endTime' => [
                                'description' => '会员的结束时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1652337963097',
                            ],
                            'loginNick' => [
                                'description' => '账号的昵称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test',
                            ],
                            'phone' => [
                                'description' => '账户的手机号码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '188*777',
                            ],
                            'pkgName' => [
                                'description' => '应用包名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'com.***.test',
                            ],
                            'originUuid' => [
                                'description' => '明文uuid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '731D5F********DC3B',
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
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型  '."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
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
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RetCode' => [
                                'description' => '返回的错误码，`0`表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RetMsg' => [
                                'description' => '返回的错误信息，成功则不返回信息。',
                                'type' => 'string',
                                'example' => '请求异常',
                            ],
                            'RetValue' => [
                                'description' => '返回的调用结果'."\n"
                                    ."\n"
                                    .'- true表示成功'."\n"
                                    .'- false表示失败',
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
                        'errorCode' => '500',
                        'errorMessage' => '内部服务错误_xxx',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<VideoAppReportResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</VideoAppReportResponse>","errorExample":""}]',
            'title' => '上报三方会员信息',
        ],
        'GetAccountForApp' => [
            'summary' => '用于开发者在依赖于猫精会员的业务场景下获取会员信息。',
            'path' => '/v1.0/iap/vip/account/get',
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'Phone' => [
                                'description' => '授权会员的手机号码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '188*777',
                            ],
                            'originUuid' => [
                                'description' => '明文uuid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '731D5F********DC3B',
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
                        'title' => '用户标识信息',
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID：组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值'."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
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
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '设备标识信息',
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 - SKILL_ID：技能ID，云端链路的编码类型',
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RetCode' => [
                                'title' => '错误码',
                                'description' => '返回的错误码，`0`表示成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RetMsg' => [
                                'title' => '错误信息',
                                'description' => '返回的错误信息，成功则不返回信息。',
                                'type' => 'string',
                                'example' => '请求异常',
                            ],
                            'RetValue' => [
                                'title' => '用户信息',
                                'description' => '返回的结果对象列表。',
                                'type' => 'object',
                                'properties' => [
                                    'IsVip' => [
                                        'title' => '是否VIP',
                                        'description' => '是否为授权会员。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'VipExpireAt' => [
                                        'title' => '若以前开通过会员，返回会员失效时间，若从未开通过会员，此字段为0',
                                        'description' => '毫秒级时间戳'."\n"
                                            ."\n"
                                            .'- 若开通过会员，返回会员失效时间。'."\n"
                                            .'- 若从未开通过会员，返回值固定为`0`。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652340138347',
                                    ],
                                    'StrVipExpire' => [
                                        'title' => '日期格式，到期时间',
                                        'description' => '会员的到期时间。',
                                        'type' => 'string',
                                        'example' => '2022-05-12 15:22:18',
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
                        'errorCode' => '500',
                        'errorMessage' => '内部服务错误_xx',
                    ],
                    [
                        'errorCode' => '10000',
                        'errorMessage' => '猫精用户已更换手机号，请重登',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": {\\n    \\"IsVip\\": true,\\n    \\"VipExpireAt\\": 1652340138347,\\n    \\"StrVipExpire\\": \\"2022-05-12 15:22:18\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountForAppResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>\\n        <IsVip>true</IsVip>\\n        <VipExpireAt>1652340138347</VipExpireAt>\\n        <StrVipExpire>2022-05-12 15:22:18</StrVipExpire>\\n    </RetValue>\\n</GetAccountForAppResponse>","errorExample":""}]',
            'title' => '获取猫精会员信息',
        ],
        'GetPhoneNumber' => [
            'summary' => '获取用户在猫精设备绑定的手机号。需先在猫精技能应用平台进行能力申请，并在设备端得到用户授权。',
            'path' => '/v1.0/iap/profile/phoneNumber',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'UserInfo',
                    'in' => 'query',
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
                                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型 '."\n"
                                    .'- OPEN_ID：默认的用户ID标识'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型',
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
                                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
                                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型',
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
                                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'phoneNumber' => [
                                'title' => '用户手机号',
                                'description' => '用户手机号',
                                'type' => 'string',
                                'example' => '137****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetPhoneNumber.InvalidParameter.UserIdentity',
                        'errorMessage' => 'The user information does not exist.',
                    ],
                    [
                        'errorCode' => 'AliGenie.GetPhoneNumber.BizError',
                        'errorMessage' => 'The user has no phoneNumber.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"phoneNumber\\": \\"137****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetPhoneNumberResponse>\\n    <phoneNumber>137****</phoneNumber>\\n</GetPhoneNumberResponse>","errorExample":""}]',
            'title' => '获取用户猫精设备绑定的手机号',
        ],
        'CreateReminder' => [
            'summary' => '用于在天猫精灵设备上创建提醒。',
            'path' => '/v1.0/iap/reminder/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                        'description' => '该服务请求的入参。',
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'title' => '提醒内容',
                                'description' => '提醒信息的详细内容。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '提醒内容',
                            ],
                            'UserId' => [
                                'title' => '精灵id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12****78',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'BED****AAC',
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20******01',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '该调用是否为调试。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'RecurrenceRule' => [
                                'title' => '提醒调度信息',
                                'description' => '提醒的调度信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Year' => [
                                        'title' => '触发时间的年',
                                        'description' => '触发提醒的时间年份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2021',
                                    ],
                                    'Month' => [
                                        'title' => '触发时间的月',
                                        'description' => '触发提醒的时间月份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Day' => [
                                        'title' => '触发时间的日',
                                        'description' => '触发提醒的时间日期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '25',
                                    ],
                                    'Hour' => [
                                        'title' => '触发时间的时',
                                        'description' => '触发提醒的时间时钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'example' => '12',
                                    ],
                                    'Minute' => [
                                        'title' => '触发时间的分',
                                        'description' => '触发提醒的时间分钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'Second' => [
                                        'title' => '触发时间的秒',
                                        'description' => '触发提醒的时间秒钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'Freq' => [
                                        'title' => '循环类型:支持单次ONCE、每天DAILY、每周WEEKLY、每月MONTHLY',
                                        'description' => '循环类型：'."\n"
                                            ."\n"
                                            .'- ONCE：单次'."\n"
                                            .'- DAILY：每天'."\n"
                                            .'- WEEKLY：每周'."\n"
                                            .'- MONTHLY：每月',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'ONCE',
                                        'enum' => [
                                            'ONCE',
                                            'DAILY',
                                            'WEEKLY',
                                            'MONTHLY',
                                        ],
                                    ],
                                    'StartDateTime' => [
                                        'title' => '开始时间，时间戳毫秒',
                                        'description' => '提醒开始的生效时间，时间戳毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1635134400000',
                                    ],
                                    'EndDateTime' => [
                                        'title' => '结束时间，时间戳毫秒',
                                        'description' => '提醒结束的失效时间，时间戳毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1635134700000',
                                    ],
                                    'DaysOfMonth' => [
                                        'title' => '月循环相关，表示每月的几号的集合,数值范围为1-31',
                                        'description' => '设置按月提醒，即每月几日触发提醒。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置按月提醒的具体日期，取值范围为：1~31。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
                                    'DaysOfWeek' => [
                                        'title' => '周循环相关，表示每周几触发，数值范围为1-7',
                                        'description' => '设置按周提醒，即每周几触发提醒。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
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
                        'description' => '用户标识信息。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型：'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请了组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 '."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型',
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
                                'description' => '编码类型对应的值'."\n"
                                    .'编码类型是SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**配置为**UNION_ID**时，该参数必填。',
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
                        'description' => '设备标识信息。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识 '."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值'."\n"
                                    ."\n"
                                    .'- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
                        'description' => '调用该接口的返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'title' => '服务成功标识',
                                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息的详细描述。',
                                'type' => 'string',
                                'example' => '不能设置过去的时间。',
                            ],
                            'Model' => [
                                'title' => '创建的提醒id',
                                'description' => '创建的提醒ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20****1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"400\\",\\n  \\"ErrorMsg\\": \\"不能设置过去的时间。\\",\\n  \\"Model\\": 0\\n}","errorExample":""},{"type":"xml","example":"<CreateReminderResponse>\\n    <Success>true</Success>\\n</CreateReminderResponse>","errorExample":""}]',
            'title' => '创建提醒',
        ],
        'GetReminder' => [
            'summary' => '用户获取在天猫精灵设备上创建的提醒。',
            'path' => '/v1.0/iap/reminder/get',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务的请求入参。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '提醒的唯一id',
                                'description' => '提醒的唯一ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '20****34',
                            ],
                            'UserId' => [
                                'title' => '精灵id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12****56',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'BED****AAC',
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20****01',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '该调用是否为调试。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
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
                        'title' => '用户标识信息',
                        'description' => '用户的标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID：组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'SKILL_ID',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILLID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
                        'title' => '设备标识信息',
                        'description' => '设备的标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'SKILL_ID',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILLID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
                        'description' => '调用该接口的返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'title' => '服务成功标识',
                                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'ErrorMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息的详细描述。',
                                'type' => 'string',
                                'example' => '参数不合法。',
                            ],
                            'Model' => [
                                'title' => '提醒信息',
                                'description' => '提醒信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RemindResponses' => [
                                        'title' => '提醒信息',
                                        'description' => '调用该接口返回的提醒信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '信息列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RemindId' => [
                                                    'title' => '提醒id',
                                                    'description' => '提醒信息的ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20*****1',
                                                ],
                                                'RepeatCount' => [
                                                    'title' => '重复次数',
                                                    'description' => '重复提醒的次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ActionTopic' => [
                                                    'title' => '执行动作topic',
                                                    'description' => '提醒执行的动作topic。',
                                                    'type' => 'string',
                                                    'example' => '宝宝快去刷牙',
                                                ],
                                                'DayDesc' => [
                                                    'title' => '触发条件描述',
                                                    'description' => '触发提醒的条件描述。',
                                                    'type' => 'string',
                                                    'example' => '每天',
                                                ],
                                                'RemindTime' => [
                                                    'title' => '下次提醒时间',
                                                    'description' => '下次提醒时间。',
                                                    'type' => 'string',
                                                    'example' => '1629850800000',
                                                ],
                                                'Week' => [
                                                    'title' => '触发为周几',
                                                    'description' => '按周触发提醒的日期，即每周几触发提醒。',
                                                    'type' => 'string',
                                                    'example' => '周三',
                                                ],
                                                'RecurrenceRule' => [
                                                    'title' => '调度信息',
                                                    'description' => '调度信息列表，即提醒的详细时间信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Freq' => [
                                                            'title' => '调度类型',
                                                            'description' => '提醒的循环周期。',
                                                            'type' => 'string',
                                                            'example' => 'WEEKLY',
                                                        ],
                                                        'Year' => [
                                                            'title' => '年',
                                                            'description' => '提醒触发的时间年份。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2021',
                                                        ],
                                                        'Month' => [
                                                            'title' => '月',
                                                            'description' => '提醒触发的时间月份。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '8',
                                                        ],
                                                        'Day' => [
                                                            'title' => '天',
                                                            'description' => '提醒触发的时间日期。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '27',
                                                        ],
                                                        'Hour' => [
                                                            'title' => '小时',
                                                            'description' => '提醒触发的时间时钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '18',
                                                        ],
                                                        'Minute' => [
                                                            'title' => '分',
                                                            'description' => '提醒触发的时间分钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Second' => [
                                                            'title' => '秒',
                                                            'description' => '提醒触发的时间秒钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'DaysOfMonth' => [
                                                            'title' => '月的第几天 可用作月循环',
                                                            'description' => '按月提醒的信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '每月的哪天触发提醒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'DaysOfWeek' => [
                                                            'title' => '周循环字段，取值范围：1-7',
                                                            'description' => '按周提醒的信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '每周的周几触发提醒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'StartDateTime' => [
                                                            'title' => '调度开始时间',
                                                            'description' => '提醒生效的开始时间。',
                                                            'type' => 'string',
                                                            'format' => 'int64',
                                                            'example' => '1630054800000',
                                                        ],
                                                        'EndDateTime' => [
                                                            'title' => '调度结束时间',
                                                            'description' => '提醒失效的结束时间。',
                                                            'type' => 'string',
                                                            'format' => 'int64',
                                                            'example' => '1661598000000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数不合法。\\",\\n  \\"Model\\": {\\n    \\"RemindResponses\\": [\\n      {\\n        \\"RemindId\\": 0,\\n        \\"RepeatCount\\": 1,\\n        \\"ActionTopic\\": \\"宝宝快去刷牙\\",\\n        \\"DayDesc\\": \\"每天\\",\\n        \\"RemindTime\\": \\"1629850800000\\",\\n        \\"Week\\": \\"周三\\",\\n        \\"RecurrenceRule\\": {\\n          \\"Freq\\": \\"WEEKLY\\",\\n          \\"Year\\": 2021,\\n          \\"Month\\": 8,\\n          \\"Day\\": 27,\\n          \\"Hour\\": 18,\\n          \\"Minute\\": 0,\\n          \\"Second\\": 0,\\n          \\"DaysOfMonth\\": [\\n            1\\n          ],\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"StartDateTime\\": 1630054800000,\\n          \\"EndDateTime\\": 1661598000000\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetReminderResponse>\\n    <Success>true</Success>\\n    <ErrorCode>400</ErrorCode>\\n    <ErrorMsg>参数不合法。</ErrorMsg>\\n    <Model>\\n        <RemindResponses>\\n            <RepeatCount>1</RepeatCount>\\n            <ActionTopic>宝宝快去刷牙</ActionTopic>\\n            <DayDesc>每天</DayDesc>\\n            <RemindTime>1629850800000</RemindTime>\\n            <Week>周三</Week>\\n            <RecurrenceRule>\\n                <Freq>WEEKLY</Freq>\\n                <Year>2021</Year>\\n                <Month>8</Month>\\n                <Day>27</Day>\\n                <Hour>18</Hour>\\n                <Minute>0</Minute>\\n                <Second>0</Second>\\n                <DaysOfMonth>1</DaysOfMonth>\\n                <DaysOfWeek>1</DaysOfWeek>\\n                <StartDateTime>1630054800000</StartDateTime>\\n                <EndDateTime>1661598000000</EndDateTime>\\n            </RecurrenceRule>\\n        </RemindResponses>\\n    </Model>\\n</GetReminderResponse>","errorExample":""}]',
            'title' => '获取提醒',
        ],
        'ListReminders' => [
            'summary' => '用户批量获取在天猫精灵设备上创建的提醒。',
            'path' => '/v1.0/iap/reminder/list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务的请求入参。',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '精灵id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12****56',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'BED****AAC',
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20****01',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '该调用是否为调试。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
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
                        'title' => '用户标识信息',
                        'description' => '用户的标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型'."\n"
                                    .' - OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILLID时，其值为应用的Skill ID。 '."\n"
                                    .'- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**配置为**UNION_ID**时，该参数必填。',
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
                        'title' => '设备标识信息',
                        'description' => '设备的标识信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型是SKILLID时，其值为应用的Skill ID。 '."\n"
                                    .'- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
                        'description' => '调用该接口的返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'title' => '服务成功标识',
                                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'ErrorMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息的详细描述。',
                                'type' => 'string',
                                'example' => '参数不合法。',
                            ],
                            'Model' => [
                                'title' => '提醒信息',
                                'description' => '提醒信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RemindResponses' => [
                                        'title' => '提醒信息',
                                        'description' => '调用该接口返回的提醒信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '信息列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RemindId' => [
                                                    'title' => '提醒id',
                                                    'description' => '提醒信息的ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20****1',
                                                ],
                                                'RepeatCount' => [
                                                    'title' => '重复次数',
                                                    'description' => '重复提醒的次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ActionTopic' => [
                                                    'title' => '执行动作topic',
                                                    'description' => '提醒执行的动作topic。',
                                                    'type' => 'string',
                                                    'example' => '宝宝快去刷牙',
                                                ],
                                                'DayDesc' => [
                                                    'title' => '触发条件描述',
                                                    'description' => '触发提醒的条件描述。',
                                                    'type' => 'string',
                                                    'example' => '每天',
                                                ],
                                                'RemindTime' => [
                                                    'title' => '下次提醒时间',
                                                    'description' => '下次提醒时间。',
                                                    'type' => 'string',
                                                    'example' => '1629850800000',
                                                ],
                                                'Week' => [
                                                    'title' => '触发为周几',
                                                    'description' => '按周触发提醒的日期，即每周几触发提醒。',
                                                    'type' => 'string',
                                                    'example' => '周三',
                                                ],
                                                'RecurrenceRule' => [
                                                    'title' => '调度信息',
                                                    'description' => '调度信息列表，即提醒的详细时间信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Freq' => [
                                                            'title' => '调度类型',
                                                            'description' => '提醒的循环周期。',
                                                            'type' => 'string',
                                                            'example' => 'WEEKLY',
                                                        ],
                                                        'Year' => [
                                                            'title' => '年',
                                                            'description' => '提醒触发的时间年份。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2021',
                                                        ],
                                                        'Month' => [
                                                            'title' => '月',
                                                            'description' => '提醒触发的时间月份。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '8',
                                                        ],
                                                        'Day' => [
                                                            'title' => '天',
                                                            'description' => '提醒触发的时间日期。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '27',
                                                        ],
                                                        'Hour' => [
                                                            'title' => '小时',
                                                            'description' => '提醒触发的时间时钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '18',
                                                        ],
                                                        'Minute' => [
                                                            'title' => '分',
                                                            'description' => '提醒触发的时间分钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Second' => [
                                                            'title' => '秒',
                                                            'description' => '提醒触发的时间秒钟数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'DaysOfMonth' => [
                                                            'title' => '月的第几天 可用作月循环',
                                                            'description' => '按月提醒的信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '每月的哪天触发提醒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'DaysOfWeek' => [
                                                            'title' => '周循环字段，取值范围：1-7',
                                                            'description' => '按周提醒的信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '每周的周几触发提醒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'StartDateTime' => [
                                                            'title' => '调度开始时间',
                                                            'description' => '提醒生效的开始时间。',
                                                            'type' => 'string',
                                                            'format' => 'int64',
                                                            'example' => '1630054800000',
                                                        ],
                                                        'EndDateTime' => [
                                                            'title' => '调度结束时间',
                                                            'description' => '提醒失效的结束时间。',
                                                            'type' => 'string',
                                                            'format' => 'int64',
                                                            'example' => '1661598000000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数不合法。\\",\\n  \\"Model\\": {\\n    \\"RemindResponses\\": [\\n      {\\n        \\"RemindId\\": 0,\\n        \\"RepeatCount\\": 1,\\n        \\"ActionTopic\\": \\"宝宝快去刷牙\\",\\n        \\"DayDesc\\": \\"每天\\",\\n        \\"RemindTime\\": \\"1629850800000\\",\\n        \\"Week\\": \\"周三\\",\\n        \\"RecurrenceRule\\": {\\n          \\"Freq\\": \\"WEEKLY\\",\\n          \\"Year\\": 2021,\\n          \\"Month\\": 8,\\n          \\"Day\\": 27,\\n          \\"Hour\\": 18,\\n          \\"Minute\\": 0,\\n          \\"Second\\": 0,\\n          \\"DaysOfMonth\\": [\\n            1\\n          ],\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"StartDateTime\\": 1630054800000,\\n          \\"EndDateTime\\": 1661598000000\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRemindersResponse>\\n    <Success>true</Success>\\n    <ErrorCode>400</ErrorCode>\\n    <ErrorMsg>参数不合法。</ErrorMsg>\\n    <Model>\\n        <RemindResponses>\\n            <RepeatCount>1</RepeatCount>\\n            <ActionTopic>宝宝快去刷牙</ActionTopic>\\n            <DayDesc>每天</DayDesc>\\n            <RemindTime>1629850800000</RemindTime>\\n            <Week>周三</Week>\\n            <RecurrenceRule>\\n                <Freq>WEEKLY</Freq>\\n                <Year>2021</Year>\\n                <Month>8</Month>\\n                <Day>27</Day>\\n                <Hour>18</Hour>\\n                <Minute>0</Minute>\\n                <Second>0</Second>\\n                <DaysOfMonth>1</DaysOfMonth>\\n                <DaysOfWeek>1</DaysOfWeek>\\n                <StartDateTime>1630054800000</StartDateTime>\\n                <EndDateTime>1661598000000</EndDateTime>\\n            </RecurrenceRule>\\n        </RemindResponses>\\n    </Model>\\n</ListRemindersResponse>","errorExample":""}]',
            'title' => '获取提醒列表',
        ],
        'UpdateReminder' => [
            'summary' => '用户更新在天猫精灵设备上创建的提醒。',
            'path' => '/v1.0/iap/reminder/update',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                        'description' => '该服务的请求入参。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '提醒id',
                                'description' => '更新的提醒ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '20***34',
                            ],
                            'Content' => [
                                'title' => '提醒内容',
                                'description' => '提醒信息的详细内容。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '更新提醒内容',
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20****01',
                            ],
                            'UserId' => [
                                'title' => '精灵id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '12****56',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'BED****AAC',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '该调用是否为调试。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'RecurrenceRule' => [
                                'title' => '提醒调度信息',
                                'description' => '提醒的调度信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Year' => [
                                        'title' => '触发时间的年',
                                        'description' => '触发提醒的时间年份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2021',
                                    ],
                                    'Month' => [
                                        'title' => '触发时间的月',
                                        'description' => '触发提醒的时间月份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Day' => [
                                        'title' => '触发时间的日',
                                        'description' => '触发提醒的时间日期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '25',
                                    ],
                                    'Hour' => [
                                        'title' => '触发时间的时',
                                        'description' => '触发提醒的时间时钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'example' => '12',
                                    ],
                                    'Minute' => [
                                        'title' => '触发时间的分',
                                        'description' => '触发提醒的时间分钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'Second' => [
                                        'title' => '触发时间的秒',
                                        'description' => '触发提醒的时间秒钟数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'Freq' => [
                                        'title' => '循环类型:支持单次ONCE、每天DAILY、每周WEEKLY、每月MONTHLY',
                                        'description' => '循环类型：'."\n"
                                            ."\n"
                                            .'- ONCE：单次'."\n"
                                            .'- DAILY：每天'."\n"
                                            .'- WEEKLY：每周'."\n"
                                            .'- MONTHLY：每月',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'ONCE',
                                        'enum' => [
                                            'ONCE',
                                            'DAILY',
                                            'WEEKLY',
                                            'MONTHLY',
                                        ],
                                    ],
                                    'StartDateTime' => [
                                        'title' => '开始时间，时间戳，毫秒',
                                        'description' => '提醒开始的生效时间，时间戳毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1635134400000',
                                    ],
                                    'EndDateTime' => [
                                        'title' => '结束时间，时间戳，毫秒',
                                        'description' => '提醒结束的失效时间，时间戳毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'example' => '1635134700000',
                                    ],
                                    'DaysOfMonth' => [
                                        'title' => '月循环相关，表示每月的几号的集合,数值范围为1-31',
                                        'description' => '设置按月提醒，即每月几号触发提醒。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置按月提醒的具体日期，取值范围为：1~31。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
                                    'DaysOfWeek' => [
                                        'title' => '周循环相关，表示每周几触发，数值范围为1-7',
                                        'description' => '设置按周提醒，即每周几触发提醒。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
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
                        'description' => '用户标识信息。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '用户标识（userOpenId或userUnionId）',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型 '."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
                        'description' => '设备标识信息。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'IdType' => [
                                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '设备Id的类型。'."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在猫精技能应用平台申请过组织后才会有该值。',
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
                                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型。',
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
                                'description' => '编码类型对应的值。'."\n"
                                    ."\n"
                                    .'- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。'."\n"
                                    .'- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
                            'Success' => [
                                'title' => '服务成功标识',
                                'description' => '服务成功标识',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'ErrorMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '不能设置过去的时间。',
                            ],
                            'Model' => [
                                'title' => '更新提醒的id',
                                'description' => '更新提醒的id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20****1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"不能设置过去的时间。\\",\\n  \\"Model\\": 0\\n}","errorExample":""},{"type":"xml","example":"<UpdateReminderResponse>\\n    <Success>true</Success>\\n</UpdateReminderResponse>","errorExample":""}]',
            'title' => '更新提醒',
        ],
        'DeleteReminder' => [
            'summary' => '用户删除在天猫精灵设备上创建的提醒。',
            'path' => '/v1.0/iap/reminder/delete',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '提醒的唯一id',
                                'description' => '提醒的唯一id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '20****34',
                            ],
                            'UserId' => [
                                'title' => '精灵id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12****56',
                            ],
                            'DeviceId' => [
                                'title' => '设备id',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'BED****AAC',
                            ],
                            'SubjectId' => [
                                'title' => '应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20****01',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '调试标识',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
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
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识'."\n"
                                    .'- UNION_ID：组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'SKILL_ID',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
                                'description' => '设备Id的类型 '."\n"
                                    .'- OPEN_ID：默认的设备ID标识'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .'- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型'."\n"
                                    .'- SKILL_ID：技能ID，云端链路的编码类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'SKILL_ID',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填',
                                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
                            'Success' => [
                                'title' => '服务成功标识',
                                'description' => '服务成功标识',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'ErrorMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '参数错误。',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数错误。\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReminderResponse>\\n    <Success>true</Success>\\n</DeleteReminderResponse>","errorExample":""}]',
            'title' => '删除提醒',
        ],
        'WakeUpApp' => [
            'summary' => '在带屏音箱上，主动唤起猫精的屏显应用。需先在猫精技能应用平台进行能力申请。',
            'path' => '/v1.0/iap/wakeup',
            'methods' => [
                'put',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务请求入参',
                        'description' => '服务请求入参。',
                        'type' => 'object',
                        'properties' => [
                            'Path' => [
                                'title' => '应用拉起路径，类似在技能应用控制台中填的唤起链接。',
                                'description' => '应用拉起路径，类似在技能应用控制台中填的唤起链接。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '应用拉起路径',
                            ],
                            'SubjectId' => [
                                'title' => '猫精应用id',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2021****001',
                            ],
                            'TargetInfo' => [
                                'title' => '要拉起的目标设备信息。',
                                'description' => '要拉起的目标设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TargetType' => [
                                        'title' => '推送目标类型，获取到对应设备标识时的类型  DEVICE_UNION_ID：设备unionId； DEVICE_OPEN_ID：设备openId',
                                        'description' => '推送目标类型，获取到对应设备标识时的类型：'."\n"
                                            .'- `DEVICE_UNION_ID`：设备unionId'."\n"
                                            .'- `DEVICE_OPEN_ID`：设备openId',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'DEVICE_OPEN_ID',
                                        'enum' => [
                                            'DEVICE_UNION_ID',
                                            'DEVICE_OPEN_ID',
                                        ],
                                    ],
                                    'TargetIdentity' => [
                                        'title' => '推送目标类型对应的标识值',
                                        'description' => '推送目标类型对应的标识值。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => '2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=',
                                    ],
                                    'OrganizationId' => [
                                        'title' => '组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                                        'description' => '组织标识，推送类型是`XX_UNION_XX`时才需要配。当存在多种途径获取猫精设备标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '11',
                                    ],
                                    'EncodeType' => [
                                        'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：  PACKAGE_NAME：apk包名 SKILL_ID：技能id',
                                        'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：'."\n"
                                            .'- PACKAGE_NAME：apk包名 '."\n"
                                            .'- SKILL_ID：技能ID',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'PACKAGE_NAME',
                                        'enum' => [
                                            'PACKAGE_NAME',
                                            'SKILL_ID',
                                        ],
                                    ],
                                    'EncodeKey' => [
                                        'title' => '编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。',
                                        'description' => '编码类型对应的值。'."\n"
                                            .'- 编码类型是SKILLID时，其值为webhook服务中得到的skill ID。'."\n"
                                            .'- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'apk包名',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'title' => '是否调试',
                                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.Device.Offline',
                        'errorMessage' => 'The Target Device is not online.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.GenieAppId',
                        'errorMessage' => 'The AliGenie app does not release.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.Body',
                        'errorMessage' => 'You must specify request body.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetInfo',
                        'errorMessage' => 'You must specify TargetInfo.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.Path',
                        'errorMessage' => 'You must specify Path.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetIdentity',
                        'errorMessage' => 'You must specify TargetIdentity.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.EncodeKey',
                        'errorMessage' => 'You must specify EncodeKey.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.EncodeType',
                        'errorMessage' => 'You must specify EncodeType.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetType',
                        'errorMessage' => 'You must specify TargetType.',
                    ],
                    [
                        'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.OrganizationId',
                        'errorMessage' => 'You must specify OrganizationId.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<WakeUpAppResponse/>","errorExample":""}]',
            'title' => '主动唤起屏显应用',
        ],
        'PushNotifications' => [
            'summary' => '执行天猫精灵的消息推送功能。需先在猫精技能应用平台进行能力申请和消息模板配置。',
            'path' => '/v1.0/iap/notifications',
            'methods' => [
                'put',
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
            'parameters' => [
                [
                    'name' => 'NotificationUnicastRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '消息推送入参对象。',
                        'description' => '消息推送入参对象。',
                        'type' => 'object',
                        'properties' => [
                            'SendTarget' => [
                                'title' => '消息推送的目标信息。',
                                'description' => '消息推送的目标信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TargetType' => [
                                        'title' => '推送的目标类型，获取到对应设备或用户标识时的类型 - DEVICE_UNION_ID：设备unionId - DEVICE_OPEN_ID：设备openId - USER_UNION_ID：用户unionId - USER_OPEN_ID：用户openId',
                                        'description' => '推送的目标类型，获取到对应设备或用户标识时的类型：'."\n"
                                            .'-  ` DEVICE_UNION_ID ` ：设备unionId'."\n"
                                            .'-  ` DEVICE_OPEN_ID ` ：设备openId'."\n"
                                            .'-  ` USER_UNION_ID ` ：用户unionId '."\n"
                                            .'-  ` USER_OPEN_ID ` ：用户openId',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'DEVICE_OPEN_ID',
                                        'enum' => [
                                            'DEVICE_UNION_ID',
                                            'DEVICE_OPEN_ID',
                                            'USER_UNION_ID',
                                            'USER_OPEN_ID',
                                        ],
                                    ],
                                    'TargetIdentity' => [
                                        'title' => '推送目标类型对应的标识值。',
                                        'description' => '推送目标类型对应的标识值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=',
                                    ],
                                ],
                                'required' => true,
                            ],
                            'MessageTemplateId' => [
                                'title' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                                'description' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2iU81*****G9elJ',
                            ],
                            'PlaceHolder' => [
                                'title' => '占位符信息，例如：模板是【你好，{nick}！】这里可以是：{"nick":"小甜甜"}',
                                'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。此外，在占位符参数里我们还可以对填写的应用调起链接增加参数，以支持跳转到指定地址的功能，如：`{"nick":"小甜甜","_URL_SUFFIX_":"xxx"}`。消息弹窗内的跳转地址就是：应用调起链接+`${_URL_SUFFIX_}`，此功能只对配置了调起链接的应用有效',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{"nick":"小甜甜"}',
                                    'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。',
                                ],
                                'example' => '{"nick":"张三"}',
                            ],
                            'EncodeType' => [
                                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型： PACKAGE_NAME：apk包名 SKILL_ID：技能id',
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：'."\n"
                                    .'- PACKAGE_NAME：apk包名'."\n"
                                    .'- SKILL_ID：技能ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'PACKAGE_NAME',
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。',
                                'description' => '编码类型对应的值。'."\n"
                                    .'- 编码类型是SKILL_ID时，其值为webhook服务中得到的skill ID。'."\n"
                                    .'- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'apk包名',
                            ],
                            'OrganizationId' => [
                                'title' => '组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备或用户标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                                'description' => '组织标识，推送类型是`XX_UNION_XX`时才需要配。当存在多种途径获取猫精设备或用户标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TenantInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '身份信息。',
                        'description' => '身份信息。',
                        'type' => 'object',
                        'properties' => [
                            'SubjectId' => [
                                'title' => '猫精应用id，【开发者平台-技能应用】创建应用后得到的应用id',
                                'type' => 'string',
                                'example' => '20*****01',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.PlaceHolder',
                        'errorMessage' => 'The template placeholder information is missing.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.SendTarget',
                        'errorMessage' => 'Failed to identify message target.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.MessageTemplateId',
                        'errorMessage' => 'The template information is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Invalid',
                        'errorMessage' => 'The AliGenie app info is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Status',
                        'errorMessage' => 'The AliGenie app has not been released.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Url',
                        'errorMessage' => 'The AliGenie app awaken url is missing.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.InvalidParameter.DeviceInfo',
                        'errorMessage' => 'Failed to identify device.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.InvalidParameter.UserInfo',
                        'errorMessage' => 'Failed to identify user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<PushNotificationsResponse/>","errorExample":""}]',
            'title' => '消息推送_定制机版',
        ],
        'SendNotifications' => [
            'summary' => '执行天猫精灵的消息推送功能。需先在猫精技能应用平台进行能力申请和消息模板配置。',
            'path' => '/v1.0/iap/general/notifications',
            'methods' => [
                'put',
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
                    'name' => 'NotificationUnicastRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '消息推送入参对象。',
                        'description' => '消息推送入参对象。',
                        'type' => 'object',
                        'properties' => [
                            'SendTarget' => [
                                'title' => '消息推送的目标信息。',
                                'description' => '消息推送的目标信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceId' => [
                                        'title' => '设备id',
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'MessageTemplateId' => [
                                'title' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                                'description' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2iU81*****G9elJ',
                            ],
                            'PlaceHolder' => [
                                'title' => '占位符信息，例如：模板是【你好，{nick}！】这里可以是：{"nick":"小甜甜"}',
                                'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。此外，在占位符参数里我们还可以对填写的应用调起链接增加参数，以支持跳转到指定地址的功能，如：`{"nick":"小甜甜","_URL_SUFFIX_":"xxx"}`。消息弹窗内的跳转地址就是：应用调起链接+`${_URL_SUFFIX_}`，此功能只对配置了调起链接的应用有效',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。',
                                    'example' => '{"nick":"小甜甜"}',
                                ],
                                'example' => '{"nick":"张三"}',
                            ],
                            'IsDebug' => [
                                'title' => '调试标识',
                                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TenantInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '身份信息。',
                        'description' => '身份信息。',
                        'type' => 'object',
                        'properties' => [
                            'SubjectId' => [
                                'title' => '猫精应用标识',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20********01',
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
                                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'description' => '用户Id的类型'."\n"
                                    .' - OPEN_ID：默认的用户ID标识 '."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .' - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 '."\n"
                                    .' - SKILL_ID：技能ID，云端链路的编码类型',
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
                                'description' => '设备Id的类型'."\n"
                                    .' - OPEN_ID：默认的设备ID标识'."\n"
                                    .' - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型'."\n"
                                    .' - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型'."\n"
                                    .' - SKILL_ID：技能ID，云端链路的编码类型',
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
                200 => [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.PlaceHolder',
                        'errorMessage' => 'The template placeholder information is missing.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.SendTarget',
                        'errorMessage' => 'Failed to identify message target.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.MessageTemplateId',
                        'errorMessage' => 'The template information is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.PushNotifications.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Invalid',
                        'errorMessage' => 'The AliGenie app info is invalid.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Status',
                        'errorMessage' => 'The AliGenie app has not been released.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.Application.Url',
                        'errorMessage' => 'The AliGenie app awaken url is missing.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.InvalidParameter.DeviceInfo',
                        'errorMessage' => 'Failed to identify device.',
                    ],
                    [
                        'errorCode' => 'AliGenie.Notifications.InvalidParameter.UserInfo',
                        'errorMessage' => 'Failed to identify user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<SendNotificationsResponse/>","errorExample":""}]',
            'title' => '消息推送_通用版',
        ],
        'CheckThirdRightSendPlan' => [
            'summary' => '商业化移动屏三方app领卡校验。',
            'path' => '/v1.0/iap/business/CheckThirdRightSendPlan',
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
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备类型',
                        'description' => '设备类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ailabs',
                    ],
                ],
                [
                    'name' => 'BizGroup',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备分组',
                        'description' => '设备分组',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc',
                    ],
                ],
                [
                    'name' => 'Sn',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备sn',
                        'description' => '设备sn',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01000019100307010000600',
                    ],
                ],
                [
                    'name' => 'SupplierId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '供应商id',
                        'description' => '供应商id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ExtendInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扩展字段',
                        'description' => '扩展字段',
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
                            'RetCode' => [
                                'title' => '返回code',
                                'description' => '返回code',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RetMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'RetValue' => [
                                'description' => '调用接口的结果',
                                'type' => 'object',
                                'properties' => [
                                    'CardType' => [
                                        'title' => '卡种',
                                        'description' => '卡种',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
                                    ],
                                    'RightsExpiredDate' => [
                                        'title' => '权益失效时间',
                                        'description' => '权益失效时间',
                                        'type' => 'string',
                                        'example' => '"1713262192005"',
                                    ],
                                    'ActivateDate' => [
                                        'title' => '激活时间',
                                        'description' => '激活时间',
                                        'type' => 'string',
                                        'example' => '"1713262192005"',
                                    ],
                                    'ChannelCode' => [
                                        'title' => '渠道code',
                                        'description' => '渠道code',
                                        'type' => 'string',
                                        'example' => 'TB',
                                    ],
                                    'ChannelName' => [
                                        'title' => '渠道名称',
                                        'description' => '渠道名称',
                                        'type' => 'string',
                                        'example' => '淘宝',
                                    ],
                                    'RequestId' => [
                                        'title' => '请求iid',
                                        'description' => '请求iid',
                                        'type' => 'string',
                                        'example' => '908FA068-529C-0C20-8DB5-63B0EF7CFF1F',
                                    ],
                                    'ExtendInfo' => [
                                        'title' => '扩展字段',
                                        'description' => '扩展字段',
                                        'type' => 'object',
                                        'example' => '{}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"系统异常\\",\\n  \\"RetValue\\": {\\n    \\"CardType\\": 0,\\n    \\"RightsExpiredDate\\": \\"\\\\\\"1713262192005\\\\\\"\\",\\n    \\"ActivateDate\\": \\"\\\\\\"1713262192005\\\\\\"\\",\\n    \\"ChannelCode\\": \\"TB\\",\\n    \\"ChannelName\\": \\"淘宝\\",\\n    \\"RequestId\\": \\"908FA068-529C-0C20-8DB5-63B0EF7CFF1F\\",\\n    \\"ExtendInfo\\": {}\\n  }\\n}","type":"json"}]',
            'title' => '三方领取会员校验',
        ],
        'CallBackThirdRightSendPlan' => [
            'summary' => '三方领取回调接口。',
            'path' => '/v1.0/iap/business/CallBackThirdRightSendPlan',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备类型',
                        'description' => '设备类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ailabs',
                    ],
                ],
                [
                    'name' => 'BizGroup',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备分组',
                        'description' => '设备分组',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc',
                    ],
                ],
                [
                    'name' => 'Sn',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备对应的sn',
                        'description' => '设备对应的sn',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01000019100307010000600',
                    ],
                ],
                [
                    'name' => 'SupplierId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '供应商id',
                        'description' => '供应商id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'GenieOpenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '精灵id',
                        'description' => '精灵id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1dsds2FzCXFGVA1ADS',
                    ],
                ],
                [
                    'name' => 'ReceiveStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '领取状态',
                        'description' => '领取状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CardType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
                        'description' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1001',
                    ],
                ],
                [
                    'name' => 'ErrorMsg',
                    'in' => 'query',
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '领取异常',
                    ],
                ],
                [
                    'name' => 'ExtendInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扩展字段',
                        'description' => '扩展字段',
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
                            'RetValue' => [
                                'title' => '返回结果 true/false',
                                'description' => '返回结果 true/false',
                                'type' => 'boolean',
                            ],
                            'RetMsg' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'RetCode' => [
                                'title' => '错误状态码',
                                'description' => '错误状态码',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '908FA068-529C-0C20-8DB5-63B0EF7CFF1F',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetValue\\": true,\\n  \\"RetMsg\\": \\"系统异常\\",\\n  \\"RetCode\\": \\"400\\",\\n  \\"requestId\\": \\"908FA068-529C-0C20-8DB5-63B0EF7CFF1F\\"\\n}","type":"json"}]',
            'title' => '三方领取会员回调',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'openapi.aligenie.com',
        ],
    ],
];
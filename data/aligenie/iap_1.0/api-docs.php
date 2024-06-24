<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'AliGenie',
    'product' => 'AliGenie',
    'version' => 'iap_1.0',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 167271,
      'title' => '应用商业化',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetBusAppConfig',
        1 => 'AppUseTimeReport',
        2 => 'PullCashier',
        3 => 'VideoAppReport',
        4 => 'GetAccountForApp',
      ),
    ),
    1 => 
    array (
      'id' => 95708,
      'title' => '获取手机号',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetPhoneNumber',
      ),
    ),
    2 => 
    array (
      'id' => 95710,
      'title' => '日程提醒',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateReminder',
        1 => 'GetReminder',
        2 => 'ListReminders',
        3 => 'UpdateReminder',
        4 => 'DeleteReminder',
      ),
    ),
    3 => 
    array (
      'id' => 95716,
      'title' => '应用唤起',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'WakeUpApp',
      ),
    ),
    4 => 
    array (
      'id' => 95719,
      'title' => '消息推送',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PushNotifications',
        1 => 'SendNotifications',
      ),
    ),
    5 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckThirdRightSendPlan',
        1 => 'CallBackThirdRightSendPlan',
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
    'GetBusAppConfig' => 
    array (
      'summary' => '获取应用配置。',
      'path' => '/v1.0/iap/app/config/get',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '业务参数',
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'SubjectId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
              ),
              'phone' => 
              array (
                'title' => '手机号',
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '136****1111',
              ),
              'originUuid' => 
              array (
                'title' => '明文uuid',
                'description' => '明文uuid',
                'type' => 'string',
                'required' => false,
                'example' => '731D5F********DC3B',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
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
                'title' => '用户标识(UserOpenId或UserUnionId)',
                'description' => '用户标识(UserOpenId或UserUnionId)',
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
                'example' => 'SKILL_ID',
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
          'in' => 'query',
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
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => false,
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
                'required' => false,
                'example' => 'SKILL_ID',
                'enum' => 
                array (
                  0 => 'SKILL_ID',
                  1 => 'PACKAGE_NAME',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
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
              'RetCode' => 
              array (
                'title' => '返回的错误码，0表示成功。',
                'description' => '返回的错误码，0表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '	0',
              ),
              'RetMsg' => 
              array (
                'title' => '返回的错误信息，成功则不返回信息。',
                'description' => '返回的错误信息，成功则不返回信息。',
                'type' => 'string',
                'example' => '	请求异常',
              ),
              'RetValue' => 
              array (
                'title' => '返回的结果对象',
                'description' => '配置信息(VIP标、导购条、导购弹窗)',
                'type' => 'object',
                'properties' => 
                array (
                  'VipLabel' => 
                  array (
                    'title' => 'VIP透标URL',
                    'description' => 'VIP透标URL',
                    'type' => 'string',
                    'example' => 'https://******.com/design/******?imageId=xxxxx',
                  ),
                  'ShoppingBar' => 
                  array (
                    'title' => '导购条URL',
                    'description' => '导购条URL',
                    'type' => 'string',
                    'example' => 'https://******.com/design/******?imageId=xxxxx',
                  ),
                  'ShoppingWindow' => 
                  array (
                    'title' => '导购弹窗URL',
                    'description' => '导购弹窗URL',
                    'type' => 'string',
                    'example' => 'https://******.com/design/******?imageId=xxxxx',
                  ),
                  'Cashier' => 
                  array (
                    'title' => '收银台URL',
                    'description' => '收银台URL',
                    'type' => 'string',
                    'example' => 'https://******.com/*****/******?appId=xxxxx',
                  ),
                ),
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
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"\\\\t请求异常\\",\\n  \\"RetValue\\": {\\n    \\"VipLabel\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"ShoppingBar\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"ShoppingWindow\\": \\"https://******.com/design/******?imageId=xxxxx\\",\\n    \\"Cashier\\": \\"https://******.com/*****/******?appId=xxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取应用配置',
    ),
    'AppUseTimeReport' => 
    array (
      'summary' => '用于在天猫精灵设备上上报应用的使用时长。',
      'path' => '/v1.0/iap/vip/use/time/report',
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
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '用户id',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'title' => '设备di',
                'type' => 'string',
                'required' => false,
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
              ),
              'Action' => 
              array (
                'title' => '操作',
                'description' => '动作项

- start表示开始
- end表示结束',
                'type' => 'string',
                'required' => true,
                'example' => 'start',
              ),
              'StepCode' => 
              array (
                'title' => '步进码',
                'description' => '步进码，开始与结束的动作要唯一匹配。',
                'type' => 'string',
                'required' => true,
                'example' => '2',
              ),
              'ResourceId' => 
              array (
                'title' => '资源id',
                'description' => '资源ID。',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'ResourceType' => 
              array (
                'title' => 'resourceType',
                'description' => '资源类型：

- 0表示游戏
- 1表示音频
- 2表示视频',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'IsPrivilege' => 
              array (
                'title' => '是否会员专享权益：1-是  0-否',
                'description' => '是否会员专享权益：

- 1表示是  
- 0表示否',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'VipType' => 
              array (
                'title' => '会员类型',
                'description' => '会员类型：

- 0表示猫精会员
- 1表示三方自有会员',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'originUuid' => 
              array (
                'description' => '明文uuid',
                'type' => 'string',
                'required' => false,
                'example' => '731D5F********DC3B',
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
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型  
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
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
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
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
              'RetCode' => 
              array (
                'description' => '返回的错误码，`0`表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RetMsg' => 
              array (
                'description' => '返回的错误信息，成功则不返回信息。',
                'type' => 'string',
                'example' => '请求异常',
              ),
              'RetValue' => 
              array (
                'description' => '调用接口的结果

- true表示成功
- false表示失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => '500',
            'errorMessage' => '内部服务错误_xxx',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<AppUseTimeReportResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</AppUseTimeReportResponse>","errorExample":""}]',
      'title' => '上报应用使用时长',
    ),
    'PullCashier' => 
    array (
      'summary' => '用户在天猫精灵设备上拉起收银台。',
      'path' => '/v1.0/iap/pull/cashier/',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'originUuid' => 
              array (
                'description' => '明文uuid',
                'type' => 'string',
                'required' => false,
                'example' => '731D5F********DC3B',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
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
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型

- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
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
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
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
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
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
              'RetCode' => 
              array (
                'title' => '错误吗',
                'description' => '返回的错误码，`0`表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RetMsg' => 
              array (
                'title' => '错误信息',
                'description' => '返回的错误信息，成功则不返回信息。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RetValue' => 
              array (
                'description' => '拉取收银台的结果，true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => '500',
            'errorMessage' => '内部服务错误_xxx',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求成功\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<PullCashierResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</PullCashierResponse>","errorExample":""}]',
      'title' => '拉起收银台',
    ),
    'VideoAppReport' => 
    array (
      'summary' => '用于开发者在与猫精进行会员合作的场景下上报其会员信息。',
      'path' => '/v1.0/iap/vip/use/video/report',
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
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'DeviceId' => 
              array (
                'title' => '设备di',
                'type' => 'string',
                'required' => false,
              ),
              'isLogin' => 
              array (
                'description' => '会员是否登录。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'isVip' => 
              array (
                'description' => '该账号是否为会员。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'startTime' => 
              array (
                'description' => '会员的开始时间。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1652337963097',
              ),
              'endTime' => 
              array (
                'description' => '会员的结束时间。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1652337963097',
              ),
              'loginNick' => 
              array (
                'description' => '账号的昵称。',
                'type' => 'string',
                'required' => false,
                'example' => 'test',
              ),
              'phone' => 
              array (
                'description' => '账户的手机号码。',
                'type' => 'string',
                'required' => false,
                'example' => '188*777',
              ),
              'pkgName' => 
              array (
                'description' => '应用包名。',
                'type' => 'string',
                'required' => true,
                'example' => 'com.***.test',
              ),
              'originUuid' => 
              array (
                'description' => '明文uuid',
                'type' => 'string',
                'required' => false,
                'example' => '731D5F********DC3B',
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
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型  
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
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
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
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
              'RetCode' => 
              array (
                'description' => '返回的错误码，`0`表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RetMsg' => 
              array (
                'description' => '返回的错误信息，成功则不返回信息。',
                'type' => 'string',
                'example' => '请求异常',
              ),
              'RetValue' => 
              array (
                'description' => '返回的调用结果

- true表示成功
- false表示失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => '500',
            'errorMessage' => '内部服务错误_xxx',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": true\\n}","errorExample":""},{"type":"xml","example":"<VideoAppReportResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>true</RetValue>\\n</VideoAppReportResponse>","errorExample":""}]',
      'title' => '上报三方会员信息',
    ),
    'GetAccountForApp' => 
    array (
      'summary' => '用于开发者在依赖于猫精会员的业务场景下获取会员信息。',
      'path' => '/v1.0/iap/vip/account/get',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'SubjectId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'DeviceId' => 
              array (
                'type' => 'string',
              ),
              'Phone' => 
              array (
                'description' => '授权会员的手机号码。',
                'type' => 'string',
                'required' => false,
                'example' => '188*777',
              ),
              'originUuid' => 
              array (
                'description' => '明文uuid',
                'type' => 'string',
                'required' => false,
                'example' => '731D5F********DC3B',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
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
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID：组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值
- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
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
        2 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
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
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => false,
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
                'description' => '编码类型对应的值

- 编码类型是SKILL_ID时，其值为应用的Skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
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
              'RetCode' => 
              array (
                'title' => '错误码',
                'description' => '返回的错误码，`0`表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RetMsg' => 
              array (
                'title' => '错误信息',
                'description' => '返回的错误信息，成功则不返回信息。',
                'type' => 'string',
                'example' => '请求异常',
              ),
              'RetValue' => 
              array (
                'title' => '用户信息',
                'description' => '返回的结果对象列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsVip' => 
                  array (
                    'title' => '是否VIP',
                    'description' => '是否为授权会员。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'VipExpireAt' => 
                  array (
                    'title' => '若以前开通过会员，返回会员失效时间，若从未开通过会员，此字段为0',
                    'description' => '毫秒级时间戳

- 若开通过会员，返回会员失效时间。
- 若从未开通过会员，返回值固定为`0`。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1652340138347',
                  ),
                  'StrVipExpire' => 
                  array (
                    'title' => '日期格式，到期时间',
                    'description' => '会员的到期时间。',
                    'type' => 'string',
                    'example' => '2022-05-12 15:22:18',
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
            'errorCode' => '500',
            'errorMessage' => '内部服务错误_xx',
          ),
          1 => 
          array (
            'errorCode' => '10000',
            'errorMessage' => '猫精用户已更换手机号，请重登',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"请求异常\\",\\n  \\"RetValue\\": {\\n    \\"IsVip\\": true,\\n    \\"VipExpireAt\\": 1652340138347,\\n    \\"StrVipExpire\\": \\"2022-05-12 15:22:18\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountForAppResponse>\\n    <RetCode>0</RetCode>\\n    <RetValue>\\n        <IsVip>true</IsVip>\\n        <VipExpireAt>1652340138347</VipExpireAt>\\n        <StrVipExpire>2022-05-12 15:22:18</StrVipExpire>\\n    </RetValue>\\n</GetAccountForAppResponse>","errorExample":""}]',
      'title' => '获取猫精会员信息',
    ),
    'GetPhoneNumber' => 
    array (
      'summary' => '获取用户在猫精设备绑定的手机号。需先在猫精技能应用平台进行能力申请，并在设备端得到用户授权。',
      'path' => '/v1.0/iap/profile/phoneNumber',
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
          'AliGenie_Auth_Token' => 
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
          'name' => 'UserInfo',
          'in' => 'query',
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
                'title' => '用户Id的类型  - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型 
- OPEN_ID：默认的用户ID标识
- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型
- SKILL_ID：技能ID，云端链路的编码类型',
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
                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
          'name' => 'DeviceInfo',
          'in' => 'query',
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
                'title' => '设备Id的类型  - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识
- UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型
- SKILL_ID：技能ID，云端链路的编码类型',
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
                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
            'title' => '返回结果',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'phoneNumber' => 
              array (
                'title' => '用户手机号',
                'description' => '用户手机号',
                'type' => 'string',
                'example' => '137****',
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
            'errorCode' => 'AliGenie.GetPhoneNumber.InvalidParameter.UserIdentity',
            'errorMessage' => 'The user information does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AliGenie.GetPhoneNumber.BizError',
            'errorMessage' => 'The user has no phoneNumber.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"phoneNumber\\": \\"137****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetPhoneNumberResponse>\\n    <phoneNumber>137****</phoneNumber>\\n</GetPhoneNumberResponse>","errorExample":""}]',
      'title' => '获取用户猫精设备绑定的手机号',
    ),
    'CreateReminder' => 
    array (
      'summary' => '用于在天猫精灵设备上创建提醒。',
      'path' => '/v1.0/iap/reminder/create',
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
          'AliGenie_Auth_Token' => 
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
            'description' => '该服务请求的入参。',
            'type' => 'object',
            'properties' => 
            array (
              'Content' => 
              array (
                'title' => '提醒内容',
                'description' => '提醒信息的详细内容。',
                'type' => 'string',
                'required' => true,
                'example' => '提醒内容',
              ),
              'UserId' => 
              array (
                'title' => '精灵id',
                'type' => 'string',
                'required' => true,
                'example' => '12****78',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => true,
                'example' => 'BED****AAC',
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
                'example' => '20******01',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '该调用是否为调试。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
              ),
              'RecurrenceRule' => 
              array (
                'title' => '提醒调度信息',
                'description' => '提醒的调度信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Year' => 
                  array (
                    'title' => '触发时间的年',
                    'description' => '触发提醒的时间年份。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2021',
                  ),
                  'Month' => 
                  array (
                    'title' => '触发时间的月',
                    'description' => '触发提醒的时间月份。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Day' => 
                  array (
                    'title' => '触发时间的日',
                    'description' => '触发提醒的时间日期。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '25',
                  ),
                  'Hour' => 
                  array (
                    'title' => '触发时间的时',
                    'description' => '触发提醒的时间时钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'example' => '12',
                  ),
                  'Minute' => 
                  array (
                    'title' => '触发时间的分',
                    'description' => '触发提醒的时间分钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                  ),
                  'Second' => 
                  array (
                    'title' => '触发时间的秒',
                    'description' => '触发提醒的时间秒钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                  ),
                  'Freq' => 
                  array (
                    'title' => '循环类型:支持单次ONCE、每天DAILY、每周WEEKLY、每月MONTHLY',
                    'description' => '循环类型：

- ONCE：单次
- DAILY：每天
- WEEKLY：每周
- MONTHLY：每月',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'ONCE',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'DAILY',
                      2 => 'WEEKLY',
                      3 => 'MONTHLY',
                    ),
                  ),
                  'StartDateTime' => 
                  array (
                    'title' => '开始时间，时间戳毫秒',
                    'description' => '提醒开始的生效时间，时间戳毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1635134400000',
                  ),
                  'EndDateTime' => 
                  array (
                    'title' => '结束时间，时间戳毫秒',
                    'description' => '提醒结束的失效时间，时间戳毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1635134700000',
                  ),
                  'DaysOfMonth' => 
                  array (
                    'title' => '月循环相关，表示每月的几号的集合,数值范围为1-31',
                    'description' => '设置按月提醒，即每月几日触发提醒。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设置按月提醒的具体日期，取值范围为：1~31。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
                  'DaysOfWeek' => 
                  array (
                    'title' => '周循环相关，表示每周几触发，数值范围为1-7',
                    'description' => '设置按周提醒，即每周几触发提醒。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
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
            'description' => '用户标识信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型：
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请了组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 
- SKILL_ID：技能ID，云端链路的编码类型',
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
                'description' => '编码类型对应的值
编码类型是SKILL_ID时，其值为应用的Skill ID。
编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**配置为**UNION_ID**时，该参数必填。',
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
            'description' => '设备标识信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识 
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用开放平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值

- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。
- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
            'description' => '调用该接口的返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '服务成功标识',
                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息的详细描述。',
                'type' => 'string',
                'example' => '不能设置过去的时间。',
              ),
              'Model' => 
              array (
                'title' => '创建的提醒id',
                'description' => '创建的提醒ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20****1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"400\\",\\n  \\"ErrorMsg\\": \\"不能设置过去的时间。\\",\\n  \\"Model\\": 0\\n}","errorExample":""},{"type":"xml","example":"<CreateReminderResponse>\\n    <Success>true</Success>\\n</CreateReminderResponse>","errorExample":""}]',
      'title' => '创建提醒',
    ),
    'GetReminder' => 
    array (
      'summary' => '用户获取在天猫精灵设备上创建的提醒。',
      'path' => '/v1.0/iap/reminder/get',
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
          'AliGenie_Auth_Token' => 
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
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务的请求入参。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '提醒的唯一id',
                'description' => '提醒的唯一ID。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '20****34',
              ),
              'UserId' => 
              array (
                'title' => '精灵id',
                'type' => 'string',
                'required' => true,
                'example' => '12****56',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => true,
                'example' => 'BED****AAC',
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
                'example' => '20****01',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '该调用是否为调试。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
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
            'title' => '用户标识信息',
            'description' => '用户的标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID：组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'SKILL_ID',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值。

- 编码类型是SKILLID时，其值为应用的Skill ID。
- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
            'title' => '设备标识信息',
            'description' => '设备的标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'SKILL_ID',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值。

- 编码类型是SKILLID时，其值为应用的Skill ID。
- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
            'description' => '调用该接口的返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '服务成功标识',
                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息的详细描述。',
                'type' => 'string',
                'example' => '参数不合法。',
              ),
              'Model' => 
              array (
                'title' => '提醒信息',
                'description' => '提醒信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RemindResponses' => 
                  array (
                    'title' => '提醒信息',
                    'description' => '调用该接口返回的提醒信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '信息列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RemindId' => 
                        array (
                          'title' => '提醒id',
                          'description' => '提醒信息的ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20*****1',
                        ),
                        'RepeatCount' => 
                        array (
                          'title' => '重复次数',
                          'description' => '重复提醒的次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ActionTopic' => 
                        array (
                          'title' => '执行动作topic',
                          'description' => '提醒执行的动作topic。',
                          'type' => 'string',
                          'example' => '宝宝快去刷牙',
                        ),
                        'DayDesc' => 
                        array (
                          'title' => '触发条件描述',
                          'description' => '触发提醒的条件描述。',
                          'type' => 'string',
                          'example' => '每天',
                        ),
                        'RemindTime' => 
                        array (
                          'title' => '下次提醒时间',
                          'description' => '下次提醒时间。',
                          'type' => 'string',
                          'example' => '1629850800000',
                        ),
                        'Week' => 
                        array (
                          'title' => '触发为周几',
                          'description' => '按周触发提醒的日期，即每周几触发提醒。',
                          'type' => 'string',
                          'example' => '周三',
                        ),
                        'RecurrenceRule' => 
                        array (
                          'title' => '调度信息',
                          'description' => '调度信息列表，即提醒的详细时间信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Freq' => 
                            array (
                              'title' => '调度类型',
                              'description' => '提醒的循环周期。',
                              'type' => 'string',
                              'example' => 'WEEKLY',
                            ),
                            'Year' => 
                            array (
                              'title' => '年',
                              'description' => '提醒触发的时间年份。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2021',
                            ),
                            'Month' => 
                            array (
                              'title' => '月',
                              'description' => '提醒触发的时间月份。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                            'Day' => 
                            array (
                              'title' => '天',
                              'description' => '提醒触发的时间日期。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '27',
                            ),
                            'Hour' => 
                            array (
                              'title' => '小时',
                              'description' => '提醒触发的时间时钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '18',
                            ),
                            'Minute' => 
                            array (
                              'title' => '分',
                              'description' => '提醒触发的时间分钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Second' => 
                            array (
                              'title' => '秒',
                              'description' => '提醒触发的时间秒钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'DaysOfMonth' => 
                            array (
                              'title' => '月的第几天 可用作月循环',
                              'description' => '按月提醒的信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每月的哪天触发提醒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'DaysOfWeek' => 
                            array (
                              'title' => '周循环字段，取值范围：1-7',
                              'description' => '按周提醒的信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每周的周几触发提醒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'StartDateTime' => 
                            array (
                              'title' => '调度开始时间',
                              'description' => '提醒生效的开始时间。',
                              'type' => 'string',
                              'format' => 'int64',
                              'example' => '1630054800000',
                            ),
                            'EndDateTime' => 
                            array (
                              'title' => '调度结束时间',
                              'description' => '提醒失效的结束时间。',
                              'type' => 'string',
                              'format' => 'int64',
                              'example' => '1661598000000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数不合法。\\",\\n  \\"Model\\": {\\n    \\"RemindResponses\\": [\\n      {\\n        \\"RemindId\\": 0,\\n        \\"RepeatCount\\": 1,\\n        \\"ActionTopic\\": \\"宝宝快去刷牙\\",\\n        \\"DayDesc\\": \\"每天\\",\\n        \\"RemindTime\\": \\"1629850800000\\",\\n        \\"Week\\": \\"周三\\",\\n        \\"RecurrenceRule\\": {\\n          \\"Freq\\": \\"WEEKLY\\",\\n          \\"Year\\": 2021,\\n          \\"Month\\": 8,\\n          \\"Day\\": 27,\\n          \\"Hour\\": 18,\\n          \\"Minute\\": 0,\\n          \\"Second\\": 0,\\n          \\"DaysOfMonth\\": [\\n            1\\n          ],\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"StartDateTime\\": 1630054800000,\\n          \\"EndDateTime\\": 1661598000000\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetReminderResponse>\\n    <Success>true</Success>\\n    <ErrorCode>400</ErrorCode>\\n    <ErrorMsg>参数不合法。</ErrorMsg>\\n    <Model>\\n        <RemindResponses>\\n            <RepeatCount>1</RepeatCount>\\n            <ActionTopic>宝宝快去刷牙</ActionTopic>\\n            <DayDesc>每天</DayDesc>\\n            <RemindTime>1629850800000</RemindTime>\\n            <Week>周三</Week>\\n            <RecurrenceRule>\\n                <Freq>WEEKLY</Freq>\\n                <Year>2021</Year>\\n                <Month>8</Month>\\n                <Day>27</Day>\\n                <Hour>18</Hour>\\n                <Minute>0</Minute>\\n                <Second>0</Second>\\n                <DaysOfMonth>1</DaysOfMonth>\\n                <DaysOfWeek>1</DaysOfWeek>\\n                <StartDateTime>1630054800000</StartDateTime>\\n                <EndDateTime>1661598000000</EndDateTime>\\n            </RecurrenceRule>\\n        </RemindResponses>\\n    </Model>\\n</GetReminderResponse>","errorExample":""}]',
      'title' => '获取提醒',
    ),
    'ListReminders' => 
    array (
      'summary' => '用户批量获取在天猫精灵设备上创建的提醒。',
      'path' => '/v1.0/iap/reminder/list',
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
          'AliGenie_Auth_Token' => 
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
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务的请求入参。',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '精灵id',
                'type' => 'string',
                'required' => true,
                'example' => '12****56',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => true,
                'example' => 'BED****AAC',
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
                'example' => '20****01',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '该调用是否为调试。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
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
            'title' => '用户标识信息',
            'description' => '用户的标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型
 - OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值。

- 编码类型是SKILLID时，其值为应用的Skill ID。 
- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**配置为**UNION_ID**时，该参数必填。',
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
            'title' => '设备标识信息',
            'description' => '设备的标识信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值。

- 编码类型是SKILLID时，其值为应用的Skill ID。 
- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时必填。',
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
            'description' => '调用该接口的返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '服务成功标识',
                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息的详细描述。',
                'type' => 'string',
                'example' => '参数不合法。',
              ),
              'Model' => 
              array (
                'title' => '提醒信息',
                'description' => '提醒信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RemindResponses' => 
                  array (
                    'title' => '提醒信息',
                    'description' => '调用该接口返回的提醒信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '信息列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RemindId' => 
                        array (
                          'title' => '提醒id',
                          'description' => '提醒信息的ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20****1',
                        ),
                        'RepeatCount' => 
                        array (
                          'title' => '重复次数',
                          'description' => '重复提醒的次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ActionTopic' => 
                        array (
                          'title' => '执行动作topic',
                          'description' => '提醒执行的动作topic。',
                          'type' => 'string',
                          'example' => '宝宝快去刷牙',
                        ),
                        'DayDesc' => 
                        array (
                          'title' => '触发条件描述',
                          'description' => '触发提醒的条件描述。',
                          'type' => 'string',
                          'example' => '每天',
                        ),
                        'RemindTime' => 
                        array (
                          'title' => '下次提醒时间',
                          'description' => '下次提醒时间。',
                          'type' => 'string',
                          'example' => '1629850800000',
                        ),
                        'Week' => 
                        array (
                          'title' => '触发为周几',
                          'description' => '按周触发提醒的日期，即每周几触发提醒。',
                          'type' => 'string',
                          'example' => '周三',
                        ),
                        'RecurrenceRule' => 
                        array (
                          'title' => '调度信息',
                          'description' => '调度信息列表，即提醒的详细时间信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Freq' => 
                            array (
                              'title' => '调度类型',
                              'description' => '提醒的循环周期。',
                              'type' => 'string',
                              'example' => 'WEEKLY',
                            ),
                            'Year' => 
                            array (
                              'title' => '年',
                              'description' => '提醒触发的时间年份。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2021',
                            ),
                            'Month' => 
                            array (
                              'title' => '月',
                              'description' => '提醒触发的时间月份。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                            'Day' => 
                            array (
                              'title' => '天',
                              'description' => '提醒触发的时间日期。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '27',
                            ),
                            'Hour' => 
                            array (
                              'title' => '小时',
                              'description' => '提醒触发的时间时钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '18',
                            ),
                            'Minute' => 
                            array (
                              'title' => '分',
                              'description' => '提醒触发的时间分钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Second' => 
                            array (
                              'title' => '秒',
                              'description' => '提醒触发的时间秒钟数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'DaysOfMonth' => 
                            array (
                              'title' => '月的第几天 可用作月循环',
                              'description' => '按月提醒的信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每月的哪天触发提醒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'DaysOfWeek' => 
                            array (
                              'title' => '周循环字段，取值范围：1-7',
                              'description' => '按周提醒的信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每周的周几触发提醒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'StartDateTime' => 
                            array (
                              'title' => '调度开始时间',
                              'description' => '提醒生效的开始时间。',
                              'type' => 'string',
                              'format' => 'int64',
                              'example' => '1630054800000',
                            ),
                            'EndDateTime' => 
                            array (
                              'title' => '调度结束时间',
                              'description' => '提醒失效的结束时间。',
                              'type' => 'string',
                              'format' => 'int64',
                              'example' => '1661598000000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数不合法。\\",\\n  \\"Model\\": {\\n    \\"RemindResponses\\": [\\n      {\\n        \\"RemindId\\": 0,\\n        \\"RepeatCount\\": 1,\\n        \\"ActionTopic\\": \\"宝宝快去刷牙\\",\\n        \\"DayDesc\\": \\"每天\\",\\n        \\"RemindTime\\": \\"1629850800000\\",\\n        \\"Week\\": \\"周三\\",\\n        \\"RecurrenceRule\\": {\\n          \\"Freq\\": \\"WEEKLY\\",\\n          \\"Year\\": 2021,\\n          \\"Month\\": 8,\\n          \\"Day\\": 27,\\n          \\"Hour\\": 18,\\n          \\"Minute\\": 0,\\n          \\"Second\\": 0,\\n          \\"DaysOfMonth\\": [\\n            1\\n          ],\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"StartDateTime\\": 1630054800000,\\n          \\"EndDateTime\\": 1661598000000\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRemindersResponse>\\n    <Success>true</Success>\\n    <ErrorCode>400</ErrorCode>\\n    <ErrorMsg>参数不合法。</ErrorMsg>\\n    <Model>\\n        <RemindResponses>\\n            <RepeatCount>1</RepeatCount>\\n            <ActionTopic>宝宝快去刷牙</ActionTopic>\\n            <DayDesc>每天</DayDesc>\\n            <RemindTime>1629850800000</RemindTime>\\n            <Week>周三</Week>\\n            <RecurrenceRule>\\n                <Freq>WEEKLY</Freq>\\n                <Year>2021</Year>\\n                <Month>8</Month>\\n                <Day>27</Day>\\n                <Hour>18</Hour>\\n                <Minute>0</Minute>\\n                <Second>0</Second>\\n                <DaysOfMonth>1</DaysOfMonth>\\n                <DaysOfWeek>1</DaysOfWeek>\\n                <StartDateTime>1630054800000</StartDateTime>\\n                <EndDateTime>1661598000000</EndDateTime>\\n            </RecurrenceRule>\\n        </RemindResponses>\\n    </Model>\\n</ListRemindersResponse>","errorExample":""}]',
      'title' => '获取提醒列表',
    ),
    'UpdateReminder' => 
    array (
      'summary' => '用户更新在天猫精灵设备上创建的提醒。',
      'path' => '/v1.0/iap/reminder/update',
      'methods' => 
      array (
        0 => 'put',
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
          'AliGenie_Auth_Token' => 
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
            'description' => '该服务的请求入参。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '提醒id',
                'description' => '更新的提醒ID。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '20***34',
              ),
              'Content' => 
              array (
                'title' => '提醒内容',
                'description' => '提醒信息的详细内容。',
                'type' => 'string',
                'required' => true,
                'example' => '更新提醒内容',
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
                'example' => '20****01',
              ),
              'UserId' => 
              array (
                'title' => '精灵id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '12****56',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => true,
                'example' => 'BED****AAC',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '该调用是否为调试。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
              ),
              'RecurrenceRule' => 
              array (
                'title' => '提醒调度信息',
                'description' => '提醒的调度信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Year' => 
                  array (
                    'title' => '触发时间的年',
                    'description' => '触发提醒的时间年份。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2021',
                  ),
                  'Month' => 
                  array (
                    'title' => '触发时间的月',
                    'description' => '触发提醒的时间月份。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Day' => 
                  array (
                    'title' => '触发时间的日',
                    'description' => '触发提醒的时间日期。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '25',
                  ),
                  'Hour' => 
                  array (
                    'title' => '触发时间的时',
                    'description' => '触发提醒的时间时钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'example' => '12',
                  ),
                  'Minute' => 
                  array (
                    'title' => '触发时间的分',
                    'description' => '触发提醒的时间分钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                  ),
                  'Second' => 
                  array (
                    'title' => '触发时间的秒',
                    'description' => '触发提醒的时间秒钟数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                  ),
                  'Freq' => 
                  array (
                    'title' => '循环类型:支持单次ONCE、每天DAILY、每周WEEKLY、每月MONTHLY',
                    'description' => '循环类型：

- ONCE：单次
- DAILY：每天
- WEEKLY：每周
- MONTHLY：每月',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'ONCE',
                    'enum' => 
                    array (
                      0 => 'ONCE',
                      1 => 'DAILY',
                      2 => 'WEEKLY',
                      3 => 'MONTHLY',
                    ),
                  ),
                  'StartDateTime' => 
                  array (
                    'title' => '开始时间，时间戳，毫秒',
                    'description' => '提醒开始的生效时间，时间戳毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1635134400000',
                  ),
                  'EndDateTime' => 
                  array (
                    'title' => '结束时间，时间戳，毫秒',
                    'description' => '提醒结束的失效时间，时间戳毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'example' => '1635134700000',
                  ),
                  'DaysOfMonth' => 
                  array (
                    'title' => '月循环相关，表示每月的几号的集合,数值范围为1-31',
                    'description' => '设置按月提醒，即每月几号触发提醒。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设置按月提醒的具体日期，取值范围为：1~31。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
                  'DaysOfWeek' => 
                  array (
                    'title' => '周循环相关，表示每周几触发，数值范围为1-7',
                    'description' => '设置按周提醒，即每周几触发提醒。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设置按周提醒的具体日期，取值范围为：1~7。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
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
            'description' => '用户标识信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '用户标识（userOpenId或userUnionId）',
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型 - OPEN_ID：默认的用户ID标识 - UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '用户Id的类型 
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，在天猫精灵技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值。

- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。
- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
            'description' => '设备标识信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '设备标识（deviceOpenId或deviceUnionId）',
                'description' => '设备标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'DAFE****ce3ej=',
              ),
              'IdType' => 
              array (
                'title' => '设备Id的类型 - OPEN_ID：默认的设备ID标识 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'description' => '设备Id的类型。
- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，在猫精技能应用平台申请过组织后才会有该值。',
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
                'description' => '编码类型，获取天猫精灵的设备标识的途径有多种，不同途径对应不同的编码类型。
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型。
- SKILL_ID：技能ID，云端链路的编码类型。',
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
                'description' => '编码类型对应的值。

- 编码类型设置为SKILL_ID时，其值为应用的Skill ID。
- 编码类型设置为PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，**IdType**设置为**UNION_ID**时，该参数必填。',
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
              'Success' => 
              array (
                'title' => '服务成功标识',
                'description' => '服务成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '不能设置过去的时间。',
              ),
              'Model' => 
              array (
                'title' => '更新提醒的id',
                'description' => '更新提醒的id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20****1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"不能设置过去的时间。\\",\\n  \\"Model\\": 0\\n}","errorExample":""},{"type":"xml","example":"<UpdateReminderResponse>\\n    <Success>true</Success>\\n</UpdateReminderResponse>","errorExample":""}]',
      'title' => '更新提醒',
    ),
    'DeleteReminder' => 
    array (
      'summary' => '用户删除在天猫精灵设备上创建的提醒。',
      'path' => '/v1.0/iap/reminder/delete',
      'methods' => 
      array (
        0 => 'delete',
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
          'AliGenie_Auth_Token' => 
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
          'in' => 'query',
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
                'title' => '提醒的唯一id',
                'description' => '提醒的唯一id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '20****34',
              ),
              'UserId' => 
              array (
                'title' => '精灵id',
                'type' => 'string',
                'required' => true,
                'example' => '12****56',
              ),
              'DeviceId' => 
              array (
                'title' => '设备id',
                'type' => 'string',
                'required' => true,
                'example' => 'BED****AAC',
              ),
              'SubjectId' => 
              array (
                'title' => '应用id',
                'type' => 'string',
                'required' => true,
                'example' => '20****01',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '调试标识',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
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
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识
- UNION_ID：组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型
- SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'SKILL_ID',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
                'description' => '设备Id的类型 
- OPEN_ID：默认的设备ID标识
- UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型
- PACKAGE_NAME：apk包名，Android应用客户链路的编码类型
- SKILL_ID：技能ID，云端链路的编码类型',
                'type' => 'string',
                'required' => true,
                'example' => 'SKILL_ID',
                'enum' => 
                array (
                  0 => 'PACKAGE_NAME',
                  1 => 'SKILL_ID',
                ),
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，编码类型是SKILL_ID时，其值为应用的Skill ID； 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'description' => '编码类型对应的值，编码类型是`SKILL_ID`时，其值为应用的Skill ID； 编码类型是`PACKAGE_NAME`时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填',
                'description' => '组织ID，如果IdType为`UNION_ID`时必填',
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
              'Success' => 
              array (
                'title' => '服务成功标识',
                'description' => '服务成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '参数错误。',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 400,\\n  \\"ErrorMsg\\": \\"参数错误。\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReminderResponse>\\n    <Success>true</Success>\\n</DeleteReminderResponse>","errorExample":""}]',
      'title' => '删除提醒',
    ),
    'WakeUpApp' => 
    array (
      'summary' => '在带屏音箱上，主动唤起猫精的屏显应用。需先在猫精技能应用平台进行能力申请。',
      'path' => '/v1.0/iap/wakeup',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务请求入参',
            'description' => '服务请求入参。',
            'type' => 'object',
            'properties' => 
            array (
              'Path' => 
              array (
                'title' => '应用拉起路径，类似在技能应用控制台中填的唤起链接。',
                'description' => '应用拉起路径，类似在技能应用控制台中填的唤起链接。',
                'type' => 'string',
                'required' => true,
                'example' => '应用拉起路径',
              ),
              'SubjectId' => 
              array (
                'title' => '猫精应用id',
                'type' => 'string',
                'required' => true,
                'example' => '2021****001',
              ),
              'TargetInfo' => 
              array (
                'title' => '要拉起的目标设备信息。',
                'description' => '要拉起的目标设备信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TargetType' => 
                  array (
                    'title' => '推送目标类型，获取到对应设备标识时的类型  DEVICE_UNION_ID：设备unionId； DEVICE_OPEN_ID：设备openId',
                    'description' => '推送目标类型，获取到对应设备标识时的类型：
- `DEVICE_UNION_ID`：设备unionId
- `DEVICE_OPEN_ID`：设备openId',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'DEVICE_OPEN_ID',
                    'enum' => 
                    array (
                      0 => 'DEVICE_UNION_ID',
                      1 => 'DEVICE_OPEN_ID',
                    ),
                  ),
                  'TargetIdentity' => 
                  array (
                    'title' => '推送目标类型对应的标识值',
                    'description' => '推送目标类型对应的标识值。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=',
                  ),
                  'OrganizationId' => 
                  array (
                    'title' => '组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                    'description' => '组织标识，推送类型是`XX_UNION_XX`时才需要配。当存在多种途径获取猫精设备标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '11',
                  ),
                  'EncodeType' => 
                  array (
                    'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：  PACKAGE_NAME：apk包名 SKILL_ID：技能id',
                    'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：
- PACKAGE_NAME：apk包名 
- SKILL_ID：技能ID',
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
                    'title' => '编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。',
                    'description' => '编码类型对应的值。
- 编码类型是SKILLID时，其值为webhook服务中得到的skill ID。
- 编码类型是PACKAGENAME时，其值为对应客户端App的packageName。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'apk包名',
                  ),
                ),
                'required' => true,
              ),
              'IsDebug' => 
              array (
                'title' => '是否调试',
                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
                'default' => 'false',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.Device.Offline',
            'errorMessage' => 'The Target Device is not online.',
          ),
          1 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.GenieAppId',
            'errorMessage' => 'The AliGenie app does not release.',
          ),
          2 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.Body',
            'errorMessage' => 'You must specify request body.',
          ),
          3 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetInfo',
            'errorMessage' => 'You must specify TargetInfo.',
          ),
          4 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.Path',
            'errorMessage' => 'You must specify Path.',
          ),
          5 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetIdentity',
            'errorMessage' => 'You must specify TargetIdentity.',
          ),
          6 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.EncodeKey',
            'errorMessage' => 'You must specify EncodeKey.',
          ),
          7 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.EncodeType',
            'errorMessage' => 'You must specify EncodeType.',
          ),
          8 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.TargetType',
            'errorMessage' => 'You must specify TargetType.',
          ),
          9 => 
          array (
            'errorCode' => 'AliGenie.WakeUpApp.InvalidParameter.OrganizationId',
            'errorMessage' => 'You must specify OrganizationId.',
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
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<WakeUpAppResponse/>","errorExample":""}]',
      'title' => '主动唤起屏显应用',
    ),
    'PushNotifications' => 
    array (
      'summary' => '执行天猫精灵的消息推送功能。需先在猫精技能应用平台进行能力申请和消息模板配置。',
      'path' => '/v1.0/iap/notifications',
      'methods' => 
      array (
        0 => 'put',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NotificationUnicastRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '消息推送入参对象。',
            'description' => '消息推送入参对象。',
            'type' => 'object',
            'properties' => 
            array (
              'SendTarget' => 
              array (
                'title' => '消息推送的目标信息。',
                'description' => '消息推送的目标信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TargetType' => 
                  array (
                    'title' => '推送的目标类型，获取到对应设备或用户标识时的类型 - DEVICE_UNION_ID：设备unionId - DEVICE_OPEN_ID：设备openId - USER_UNION_ID：用户unionId - USER_OPEN_ID：用户openId',
                    'description' => '推送的目标类型，获取到对应设备或用户标识时的类型：
-  ` DEVICE_UNION_ID ` ：设备unionId
-  ` DEVICE_OPEN_ID ` ：设备openId
-  ` USER_UNION_ID ` ：用户unionId 
-  ` USER_OPEN_ID ` ：用户openId',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'DEVICE_OPEN_ID',
                    'enum' => 
                    array (
                      0 => 'DEVICE_UNION_ID',
                      1 => 'DEVICE_OPEN_ID',
                      2 => 'USER_UNION_ID',
                      3 => 'USER_OPEN_ID',
                    ),
                  ),
                  'TargetIdentity' => 
                  array (
                    'title' => '推送目标类型对应的标识值。',
                    'description' => '推送目标类型对应的标识值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=',
                  ),
                ),
                'required' => true,
              ),
              'MessageTemplateId' => 
              array (
                'title' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                'description' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板ID。',
                'type' => 'string',
                'required' => true,
                'example' => '2iU81*****G9elJ',
              ),
              'PlaceHolder' => 
              array (
                'title' => '占位符信息，例如：模板是【你好，{nick}！】这里可以是：{"nick":"小甜甜"}',
                'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。此外，在占位符参数里我们还可以对填写的应用调起链接增加参数，以支持跳转到指定地址的功能，如：`{"nick":"小甜甜","_URL_SUFFIX_":"xxx"}`。消息弹窗内的跳转地址就是：应用调起链接+`${_URL_SUFFIX_}`，此功能只对配置了调起链接的应用有效',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{"nick":"小甜甜"}',
                  'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。',
                ),
                'example' => '{"nick":"张三"}',
              ),
              'EncodeType' => 
              array (
                'title' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型： PACKAGE_NAME：apk包名 SKILL_ID：技能id',
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：
- PACKAGE_NAME：apk包名
- SKILL_ID：技能ID',
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
                'title' => '编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。',
                'description' => '编码类型对应的值。
- 编码类型是SKILL_ID时，其值为webhook服务中得到的skill ID。
- 编码类型是PACKAGE_NAME时，其值为对应客户端App的packageName。',
                'type' => 'string',
                'required' => true,
                'example' => 'apk包名',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备或用户标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                'description' => '组织标识，推送类型是`XX_UNION_XX`时才需要配。当存在多种途径获取猫精设备或用户标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。',
                'type' => 'string',
                'required' => false,
                'example' => '2',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
                'default' => 'false',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TenantInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '身份信息。',
            'description' => '身份信息。',
            'type' => 'object',
            'properties' => 
            array (
              'SubjectId' => 
              array (
                'title' => '猫精应用id，【开发者平台-技能应用】创建应用后得到的应用id',
                'type' => 'string',
                'example' => '20*****01',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.PlaceHolder',
            'errorMessage' => 'The template placeholder information is missing.',
          ),
          1 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.SendTarget',
            'errorMessage' => 'Failed to identify message target.',
          ),
          2 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.MessageTemplateId',
            'errorMessage' => 'The template information is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Invalid',
            'errorMessage' => 'The AliGenie app info is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Status',
            'errorMessage' => 'The AliGenie app has not been released.',
          ),
          6 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Url',
            'errorMessage' => 'The AliGenie app awaken url is missing.',
          ),
          7 => 
          array (
            'errorCode' => 'AliGenie.Notifications.InvalidParameter.DeviceInfo',
            'errorMessage' => 'Failed to identify device.',
          ),
          8 => 
          array (
            'errorCode' => 'AliGenie.Notifications.InvalidParameter.UserInfo',
            'errorMessage' => 'Failed to identify user.',
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
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<PushNotificationsResponse/>","errorExample":""}]',
      'title' => '消息推送_定制机版',
    ),
    'SendNotifications' => 
    array (
      'summary' => '执行天猫精灵的消息推送功能。需先在猫精技能应用平台进行能力申请和消息模板配置。',
      'path' => '/v1.0/iap/general/notifications',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'NotificationUnicastRequest',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '消息推送入参对象。',
            'description' => '消息推送入参对象。',
            'type' => 'object',
            'properties' => 
            array (
              'SendTarget' => 
              array (
                'title' => '消息推送的目标信息。',
                'description' => '消息推送的目标信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceId' => 
                  array (
                    'title' => '设备id',
                    'type' => 'string',
                    'required' => true,
                  ),
                ),
                'required' => true,
              ),
              'MessageTemplateId' => 
              array (
                'title' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                'description' => '消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。',
                'type' => 'string',
                'required' => true,
                'example' => '2iU81*****G9elJ',
              ),
              'PlaceHolder' => 
              array (
                'title' => '占位符信息，例如：模板是【你好，{nick}！】这里可以是：{"nick":"小甜甜"}',
                'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。此外，在占位符参数里我们还可以对填写的应用调起链接增加参数，以支持跳转到指定地址的功能，如：`{"nick":"小甜甜","_URL_SUFFIX_":"xxx"}`。消息弹窗内的跳转地址就是：应用调起链接+`${_URL_SUFFIX_}`，此功能只对配置了调起链接的应用有效',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => '占位符信息，例如：模板【你好，{nick}！】，此处可以是：{"nick":"小甜甜"}。',
                  'example' => '{"nick":"小甜甜"}',
                ),
                'example' => '{"nick":"张三"}',
              ),
              'IsDebug' => 
              array (
                'title' => '调试标识',
                'description' => '调试标识，当技能应用处于调试阶段时，设置此标识将决定获取技能应用信息时，是编辑态信息还是线上信息。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TenantInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '身份信息。',
            'description' => '身份信息。',
            'type' => 'object',
            'properties' => 
            array (
              'SubjectId' => 
              array (
                'title' => '猫精应用标识',
                'type' => 'string',
                'required' => true,
                'example' => '20********01',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
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
                'description' => '用户Id的类型
 - OPEN_ID：默认的用户ID标识 
- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的用户标识的途径有多种，不同途径对应不同的编码类型
 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型 
 - SKILL_ID：技能ID，云端链路的编码类型',
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
        3 => 
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
                'description' => '设备Id的类型
 - OPEN_ID：默认的设备ID标识
 - UNION_ID: 组织维度的设备ID标识，在猫精技能应用开放平台申请过组织后才会有',
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
                'description' => '编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型
 - PACKAGE_NAME：apk包名，Android应用客户链路的编码类型
 - SKILL_ID：技能ID，云端链路的编码类型',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.PlaceHolder',
            'errorMessage' => 'The template placeholder information is missing.',
          ),
          1 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.SendTarget',
            'errorMessage' => 'Failed to identify message target.',
          ),
          2 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter.MessageTemplateId',
            'errorMessage' => 'The template information is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'AliGenie.PushNotifications.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Invalid',
            'errorMessage' => 'The AliGenie app info is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Status',
            'errorMessage' => 'The AliGenie app has not been released.',
          ),
          6 => 
          array (
            'errorCode' => 'AliGenie.Notifications.Application.Url',
            'errorMessage' => 'The AliGenie app awaken url is missing.',
          ),
          7 => 
          array (
            'errorCode' => 'AliGenie.Notifications.InvalidParameter.DeviceInfo',
            'errorMessage' => 'Failed to identify device.',
          ),
          8 => 
          array (
            'errorCode' => 'AliGenie.Notifications.InvalidParameter.UserInfo',
            'errorMessage' => 'Failed to identify user.',
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
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<SendNotificationsResponse/>","errorExample":""}]',
      'title' => '消息推送_通用版',
    ),
    'CheckThirdRightSendPlan' => 
    array (
      'summary' => '商业化移动屏三方app领卡校验。',
      'path' => '/v1.0/iap/business/CheckThirdRightSendPlan',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备类型',
            'description' => '设备类型',
            'type' => 'string',
            'required' => false,
            'example' => 'ailabs',
          ),
        ),
        1 => 
        array (
          'name' => 'BizGroup',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备分组',
            'description' => '设备分组',
            'type' => 'string',
            'required' => false,
            'example' => 'cc',
          ),
        ),
        2 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备sn',
            'description' => '设备sn',
            'type' => 'string',
            'required' => false,
            'example' => '01000019100307010000600',
          ),
        ),
        3 => 
        array (
          'name' => 'SupplierId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '供应商id',
            'description' => '供应商id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtendInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '扩展字段',
            'description' => '扩展字段',
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
              'RetCode' => 
              array (
                'title' => '返回code',
                'description' => '返回code',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RetMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'RetValue' => 
              array (
                'description' => '调用接口的结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CardType' => 
                  array (
                    'title' => '卡种',
                    'description' => '卡种',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
                  ),
                  'RightsExpiredDate' => 
                  array (
                    'title' => '权益失效时间',
                    'description' => '权益失效时间',
                    'type' => 'string',
                    'example' => '"1713262192005"',
                  ),
                  'ActivateDate' => 
                  array (
                    'title' => '激活时间',
                    'description' => '激活时间',
                    'type' => 'string',
                    'example' => '"1713262192005"',
                  ),
                  'ChannelCode' => 
                  array (
                    'title' => '渠道code',
                    'description' => '渠道code',
                    'type' => 'string',
                    'example' => 'TB',
                  ),
                  'ChannelName' => 
                  array (
                    'title' => '渠道名称',
                    'description' => '渠道名称',
                    'type' => 'string',
                    'example' => '淘宝',
                  ),
                  'RequestId' => 
                  array (
                    'title' => '请求iid',
                    'description' => '请求iid',
                    'type' => 'string',
                    'example' => '908FA068-529C-0C20-8DB5-63B0EF7CFF1F',
                  ),
                  'ExtendInfo' => 
                  array (
                    'title' => '扩展字段',
                    'description' => '扩展字段',
                    'type' => 'object',
                    'example' => '{}',
                  ),
                ),
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
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetCode\\": 0,\\n  \\"RetMsg\\": \\"系统异常\\",\\n  \\"RetValue\\": {\\n    \\"CardType\\": 0,\\n    \\"RightsExpiredDate\\": \\"\\\\\\"1713262192005\\\\\\"\\",\\n    \\"ActivateDate\\": \\"\\\\\\"1713262192005\\\\\\"\\",\\n    \\"ChannelCode\\": \\"TB\\",\\n    \\"ChannelName\\": \\"淘宝\\",\\n    \\"RequestId\\": \\"908FA068-529C-0C20-8DB5-63B0EF7CFF1F\\",\\n    \\"ExtendInfo\\": {}\\n  }\\n}","type":"json"}]',
      'title' => '三方领取会员校验',
    ),
    'CallBackThirdRightSendPlan' => 
    array (
      'summary' => '三方领取回调接口。',
      'path' => '/v1.0/iap/business/CallBackThirdRightSendPlan',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备类型',
            'description' => '设备类型',
            'type' => 'string',
            'required' => false,
            'example' => 'ailabs',
          ),
        ),
        1 => 
        array (
          'name' => 'BizGroup',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备分组',
            'description' => '设备分组',
            'type' => 'string',
            'required' => false,
            'example' => 'cc',
          ),
        ),
        2 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备对应的sn',
            'description' => '设备对应的sn',
            'type' => 'string',
            'required' => false,
            'example' => '01000019100307010000600',
          ),
        ),
        3 => 
        array (
          'name' => 'SupplierId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '供应商id',
            'description' => '供应商id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'GenieOpenId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '精灵id',
            'description' => '精灵id',
            'type' => 'string',
            'required' => false,
            'example' => '1dsds2FzCXFGVA1ADS',
          ),
        ),
        5 => 
        array (
          'name' => 'ReceiveStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '领取状态',
            'description' => '领取状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'CardType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
            'description' => '1001 日卡 1002 月卡 1003 季卡 1004 年卡',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1001',
          ),
        ),
        7 => 
        array (
          'name' => 'ErrorMsg',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '错误信息',
            'description' => '错误信息',
            'type' => 'string',
            'required' => false,
            'example' => '领取异常',
          ),
        ),
        8 => 
        array (
          'name' => 'ExtendInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '扩展字段',
            'description' => '扩展字段',
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
              'RetValue' => 
              array (
                'title' => '返回结果 true/false',
                'description' => '返回结果 true/false',
                'type' => 'boolean',
              ),
              'RetMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '系统异常',
              ),
              'RetCode' => 
              array (
                'title' => '错误状态码',
                'description' => '错误状态码',
                'type' => 'string',
                'example' => '400',
              ),
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '908FA068-529C-0C20-8DB5-63B0EF7CFF1F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RetValue\\": true,\\n  \\"RetMsg\\": \\"系统异常\\",\\n  \\"RetCode\\": \\"400\\",\\n  \\"requestId\\": \\"908FA068-529C-0C20-8DB5-63B0EF7CFF1F\\"\\n}","type":"json"}]',
      'title' => '三方领取会员回调',
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
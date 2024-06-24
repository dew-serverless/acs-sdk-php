<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dm',
    'version' => '2015-11-23',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 60773,
      'title' => '账户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescAccountSummary',
      ),
    ),
    1 => 
    array (
      'id' => 60779,
      'title' => '白名单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddIpfilter',
        1 => 'DeleteIpfilterByEdmId',
      ),
    ),
    2 => 
    array (
      'id' => 60782,
      'title' => 'IP 保护',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateIpProtection',
        1 => 'GetIpProtection',
        2 => 'GetIpfilterList',
      ),
    ),
    3 => 
    array (
      'id' => 60799,
      'title' => '任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryTaskByParam',
      ),
    ),
    4 => 
    array (
      'id' => 60806,
      'title' => '邮件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 60807,
          'title' => '统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SenderStatisticsByTagNameAndBatchID',
            1 => 'SenderStatisticsDetailByParam',
          ),
        ),
        1 => 'GetTrackList',
        2 => 'GetTrackListByMailFromAndTagName',
        3 => 'SingleSendMail',
        4 => 'BatchSendMail',
        5 => 'SendTestByTemplate',
      ),
    ),
    5 => 
    array (
      'id' => 60815,
      'title' => '域名',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDomain',
        1 => 'DeleteDomain',
        2 => 'ModifyPWByDomain',
        3 => 'QueryDomainByParam',
        4 => 'CheckDomain',
        5 => 'DescDomain',
      ),
    ),
    6 => 
    array (
      'id' => 60823,
      'title' => '地址',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMailAddress',
        1 => 'DeleteMailAddress',
        2 => 'ModifyMailAddress',
        3 => 'QueryInvalidAddress',
        4 => 'QueryMailAddressByParam',
        5 => 'ApproveReplyMailAddress',
        6 => 'CheckReplyToMailAddress',
        7 => 'DeleteInvalidAddress',
      ),
    ),
    7 => 
    array (
      'id' => 60837,
      'title' => '收件人',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateReceiver',
        1 => 'DeleteReceiver',
        2 => 'DeleteReceiverDetail',
        3 => 'QueryReceiverByParam',
        4 => 'QueryReceiverDetail',
        5 => 'SaveReceiverDetail',
      ),
    ),
    8 => 
    array (
      'id' => 60844,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTag',
        1 => 'DeleteTag',
        2 => 'ModifyTag',
        3 => 'QueryTagByParam',
      ),
    ),
    9 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUserSuppression',
        1 => 'UpdateUser',
        2 => 'GetUser',
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
    'DescAccountSummary' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
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
              'EnableTimes' => 
              array (
                'description' => '生效时间',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'SmsSign' => 
              array (
                'description' => '已废弃，兼容性原因保留。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'MonthQuota' => 
              array (
                'description' => '月额度',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '60000',
              ),
              'Receivers' => 
              array (
                'description' => '收件人数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'DayuStatus' => 
              array (
                'description' => '大鱼状态（已废弃，兼容性原因保留。）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'DailyQuota' => 
              array (
                'description' => '日额度',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2000',
              ),
              'SmsRecord' => 
              array (
                'description' => '已废弃，兼容性原因保留。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Tags' => 
              array (
                'description' => '标签数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Templates' => 
              array (
                'description' => '模板数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'MailAddresses' => 
              array (
                'description' => '发信地址数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '82B295BB-7E69-491F-9896-ECEAFF09E1A4',
              ),
              'QuotaLevel' => 
              array (
                'description' => '信誉度等级',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'MaxQuotaLevel' => 
              array (
                'description' => '最高等级',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Domains' => 
              array (
                'description' => '域名数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'UserStatus' => 
              array (
                'description' => '用户状态：
1 冻结
2 欠费
4 限制外发
8 逻辑删除',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'SmsTemplates' => 
              array (
                'description' => '已废弃，兼容性原因保留。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RemainFreeQuota' => 
              array (
                'description' => '总免费额度剩余量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1910',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'User.Blacklisted',
            'errorMessage' => 'The specified user is in the blacklist.',
          ),
          1 => 
          array (
            'errorCode' => 'User.RegisterTooMuch',
            'errorMessage' => 'The specified user has registered more than one DirectMail account.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnableTimes\\": 0,\\n  \\"SmsSign\\": 0,\\n  \\"MonthQuota\\": 60000,\\n  \\"Receivers\\": 0,\\n  \\"DayuStatus\\": 0,\\n  \\"DailyQuota\\": 2000,\\n  \\"SmsRecord\\": 0,\\n  \\"Tags\\": 0,\\n  \\"Templates\\": 1,\\n  \\"MailAddresses\\": 0,\\n  \\"RequestId\\": \\"82B295BB-7E69-491F-9896-ECEAFF09E1A4\\",\\n  \\"QuotaLevel\\": 2,\\n  \\"MaxQuotaLevel\\": 10,\\n  \\"Domains\\": 1,\\n  \\"UserStatus\\": 0,\\n  \\"SmsTemplates\\": 0,\\n  \\"RemainFreeQuota\\": 1910\\n}","errorExample":""},{"type":"xml","example":"<DescAccountSummaryResponse>\\r\\n    <DayuStatus>0</DayuStatus>\\r\\n    <SmsRecord>0</SmsRecord>\\r\\n    <SmsSign>0</SmsSign>\\r\\n    <UserStatus>0</UserStatus>\\r\\n    <SmsTemplates>0</SmsTemplates>\\r\\n    <Templates>1</Templates>\\r\\n    <Domains>1</Domains>\\r\\n    <MonthQuota>60000</MonthQuota>\\r\\n    <Tags>0</Tags>\\r\\n    <QuotaLevel>2</QuotaLevel>\\r\\n    <EnableTimes>0</EnableTimes>\\r\\n    <RequestId>82B295BB-7E69-491F-9896-ECEAFF09E1A4</RequestId>\\r\\n    <MaxQuotaLevel>10</MaxQuotaLevel>\\r\\n    <MailAddresses>0</MailAddresses>\\r\\n    <DailyQuota>2000</DailyQuota>\\r\\n    <Receivers>0</Receivers>\\r\\n</DescAccountSummaryResponse>   ","errorExample":""}]',
      'title' => '获取账户信息',
      'summary' => '获取账户信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddIpfilter' => 
    array (
      'summary' => '添加IP白名单。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP地址/IP区间/IP段',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '单个IP格式，如：xxx.xxx.xxx.xxx
IP区间格式，如：xxx.xxx.xxx.xxx-xxx.xxx.xxx.xxx
IP段格式，如：xxx.xxx.xxx.xxx/xxx',
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
                'example' => '0E9282E8-DC08-5445-8FB0-B9F0CA28B249',
              ),
              'IpFilterId' => 
              array (
                'description' => 'ip对应的ID',
                'type' => 'string',
                'example' => '10795',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E9282E8-DC08-5445-8FB0-B9F0CA28B249\\",\\n  \\"IpFilterId\\": \\"10795\\"\\n}","errorExample":""},{"type":"xml","example":"<AddIpfilterResponse>\\n    <RequestId>F814E960-5AEE-5CB1-881B-6F1A3250B55A</RequestId>\\n    <IpFilterId>10795</IpFilterId>\\n</AddIpfilterResponse>","errorExample":""}]',
      'title' => '添加IP白名单',
    ),
    'DeleteIpfilterByEdmId' => 
    array (
      'summary' => '删除IP保护信息。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FromType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '废弃，历史原因兼容',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '1',
            'example' => '废弃，历史原因兼容
',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '记录id',
            'type' => 'string',
            'required' => false,
            'example' => '10120',
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
                'example' => 'E3DFF97B-00CF-5333-8125-3D6819471984',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E3DFF97B-00CF-5333-8125-3D6819471984\\"\\n}","type":"json"}]',
      'title' => '删除IP白名单',
    ),
    'UpdateIpProtection' => 
    array (
      'summary' => '开启或者关闭IP保护功能。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IpProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ip防护开关，打开：1 关闭：0',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
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
                'example' => 'B653A6FC-D1AD-5936-A262-F50994ED2574',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B653A6FC-D1AD-5936-A262-F50994ED2574\\"\\n}","type":"json"}]',
      'title' => '开启或者关闭IP保护功能',
    ),
    'GetIpProtection' => 
    array (
      'summary' => '调用GetIpProtection获取IP防护功能是否开启。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详细记录',
            'type' => 'object',
            'properties' => 
            array (
              'IpProtection' => 
              array (
                'description' => 'ip防护开关，打开：1 关闭：0',
                'type' => 'string',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B30E5A62-2E64-577D-A70E-8C6781D6C975',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"IpProtection\\": \\"0\\",\\n  \\"RequestId\\": \\"B30E5A62-2E64-577D-A70E-8C6781D6C975\\"\\n}","type":"json"}]',
      'title' => '获取IP防护功能是否开启',
    ),
    'GetIpfilterList' => 
    array (
      'summary' => '调用GetIpfilterList获取 IP 筛选器列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
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
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '84DD77C7-A091-5139-9530-2D1F7CCE59E0',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ipfilters' => 
                  array (
                    'description' => '数据记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详细记录',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IpAddress' => 
                        array (
                          'description' => 'IP地址/IP区间/IP段',
                          'type' => 'string',
                          'example' => '单个IP格式，如：xxx.xxx.xxx.xxx
IP区间格式，如：xxx.xxx.xxx.xxx-xxx.xxx.xxx.xxx
IP段格式，如：xxx.xxx.xxx.xxx/xxx',
                        ),
                        'Id' => 
                        array (
                          'description' => '记录Id。

',
                          'type' => 'string',
                          'example' => '10083',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '时间戳',
                          'type' => 'string',
                          'example' => '1653547140',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"84DD77C7-A091-5139-9530-2D1F7CCE59E0\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"data\\": {\\n    \\"ipfilters\\": [\\n      {\\n        \\"IpAddress\\": \\"单个IP格式，如：xxx.xxx.xxx.xxx\\\\nIP区间格式，如：xxx.xxx.xxx.xxx-xxx.xxx.xxx.xxx\\\\nIP段格式，如：xxx.xxx.xxx.xxx/xxx\\",\\n        \\"Id\\": \\"10083\\",\\n        \\"CreateTime\\": \\"1653547140\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取 IP 筛选器列表',
    ),
    'QueryTaskByParam' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小，默认为10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键词，默认所有信息',
            'type' => 'string',
            'required' => false,
            'example' => 'mesh-notification-788717',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态，默认所有状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '0',
            'example' => '0',
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
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'task' => 
                  array (
                    'description' => '返回的结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReceiversName' => 
                        array (
                          'description' => '收件人名称',
                          'type' => 'string',
                          'example' => 'TKP000442-333',
                        ),
                        'TagName' => 
                        array (
                          'description' => '标签',
                          'type' => 'string',
                          'example' => '202201',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '任务状态',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2022-04-18T10:36Z',
                        ),
                        'RequestCount' => 
                        array (
                          'description' => '请求数',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'AddressType' => 
                        array (
                          'description' => '地址类型',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'UtcCreateTime' => 
                        array (
                          'description' => '创建时间的UTC格式',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1569734892',
                        ),
                        'TemplateName' => 
                        array (
                          'description' => '模板名称',
                          'type' => 'string',
                          'example' => 'Short Simple',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务ID',
                          'type' => 'string',
                          'example' => '1054296',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidKeyword.Malformed',
            'errorMessage' => 'The specified keyword is wrongly formed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStatus.Malformed',
            'errorMessage' => 'The specified status is wrongly formed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"PageNumber\\": 3,\\n  \\"TotalCount\\": 15,\\n  \\"data\\": {\\n    \\"task\\": [\\n      {\\n        \\"ReceiversName\\": \\"TKP000442-333\\",\\n        \\"TagName\\": \\"202201\\",\\n        \\"TaskStatus\\": \\"1\\",\\n        \\"CreateTime\\": \\"2022-04-18T10:36Z\\",\\n        \\"RequestCount\\": \\"1\\",\\n        \\"AddressType\\": \\"0\\",\\n        \\"UtcCreateTime\\": 1569734892,\\n        \\"TemplateName\\": \\"Short Simple\\",\\n        \\"TaskId\\": \\"1054296\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询任务',
      'summary' => '查询任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SenderStatisticsByTagNameAndBatchID' => 
    array (
      'summary' => '调用SenderStatisticsByTagNameAndBatchID获取指定条件下的发送数据。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址。不填，代表所有地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-29',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，和起始时间跨度不能超出7天，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-29',
          ),
        ),
        3 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件标签。不填，代表所有标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
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
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'stat' => 
                  array (
                    'description' => '数据记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'unavailablePercent' => 
                        array (
                          'description' => '无效率',
                          'type' => 'string',
                          'example' => '0%',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2021-07-02',
                        ),
                        'succeededPercent' => 
                        array (
                          'description' => '成功率',
                          'type' => 'string',
                          'example' => '100.00%',
                        ),
                        'faildCount' => 
                        array (
                          'description' => '失败数量',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'unavailableCount' => 
                        array (
                          'description' => '无效数量',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'successCount' => 
                        array (
                          'description' => '成功数量',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'requestCount' => 
                        array (
                          'description' => '请求数量',
                          'type' => 'string',
                          'example' => '4',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"data\\": {\\n    \\"stat\\": [\\n      {\\n        \\"unavailablePercent\\": \\"0%\\",\\n        \\"CreateTime\\": \\"2021-07-02\\",\\n        \\"succeededPercent\\": \\"100.00%\\",\\n        \\"faildCount\\": \\"0\\",\\n        \\"unavailableCount\\": \\"0\\",\\n        \\"successCount\\": \\"4\\",\\n        \\"requestCount\\": \\"4\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定条件下的发送数据',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SenderStatisticsDetailByParam' => 
    array (
      'summary' => '调用SenderStatisticsDetailByParam获取发送详情。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址。不填，代表所有地址。

> **AccountName**、**TagName**、**ToAddress**可以都不填写。若填写，只能传递其中一个参数，不能同时传递两个或以上组合的参数。',
            'type' => 'string',
            'required' => false,
            'example' => 's***@example.net',
          ),
        ),
        1 => 
        array (
          'name' => 'ToAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收信地址。不填，代表所有收信地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'b***@example.net',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递结果。不填，代表所有状态。取值：

- 0：成功
- 2：无效地址
- 3：垃圾邮件
- 4：失败',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4',
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，和结束时间跨度不能超出30天，格式yyyy-MM-dd HH:mm',
            'type' => 'string',
            'required' => false,
            'example' => '2021-04-28 00:00',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，和起始时间跨度不能超出30天, 格式yyyy-MM-dd HH:mm。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-04-29 00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件标签。不填，代表所有标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'EmailQuestionnaireHelioscam',
          ),
        ),
        6 => 
        array (
          'name' => 'Length',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定本次请求返回结果数目。范围是1~100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '5',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'NextStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页用，指定本次请求的偏移量。如果还有更多结果，下次请求将该返回值设置到请求中的NextStart',
            'type' => 'string',
            'required' => false,
            'example' => '90f0243616#203#a***@example.net-1658817837#a***@example.net.247475288187',
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
              'NextStart' => 
              array (
                'description' => '分页使用。如果还有更多结果，下次请求将该返回值设置到请求中的NextStart',
                'type' => 'string',
                'example' => '90f0243616#203#a***@example.net-1658817689#a***@example.net.247141122178',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B5AB8EBB-EE64-4BB2-B085-B92CC5DEDC41',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'mailDetail' => 
                  array (
                    'description' => '详细记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '投递状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'LastUpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '2021-04-28T17:11Z',
                        ),
                        'Message' => 
                        array (
                          'description' => '投递详情信息',
                          'type' => 'string',
                          'example' => '250 Send Mail OK',
                        ),
                        'ToAddress' => 
                        array (
                          'description' => '收信地址',
                          'type' => 'string',
                          'example' => 'b***@example.net',
                        ),
                        'UtcLastUpdateTime' => 
                        array (
                          'description' => 'UTC格式的更新时间',
                          'type' => 'string',
                          'example' => '1619601108',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '发信地址',
                          'type' => 'string',
                          'example' => 's***@example.net',
                        ),
                        'Subject' => 
                        array (
                          'description' => '邮件主题',
                          'type' => 'string',
                          'example' => 'test subject',
                        ),
                        'ErrorClassification' => 
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextStart\\": \\"90f0243616#203#a***@example.net-1658817689#a***@example.net.247141122178\\",\\n  \\"RequestId\\": \\"B5AB8EBB-EE64-4BB2-B085-B92CC5DEDC41\\",\\n  \\"data\\": {\\n    \\"mailDetail\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"LastUpdateTime\\": \\"2021-04-28T17:11Z\\",\\n        \\"Message\\": \\"250 Send Mail OK\\",\\n        \\"ToAddress\\": \\"b***@example.net\\",\\n        \\"UtcLastUpdateTime\\": \\"1619601108\\",\\n        \\"AccountName\\": \\"s***@example.net\\",\\n        \\"Subject\\": \\"test subject\\",\\n        \\"ErrorClassification\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B5AB8EBB-EE64-4BB2-B085-B92CC5DEDC41</RequestId>\\n<data>\\n    <mailDetail>\\n        <Status>0</Status>\\n        <UtcLastUpdateTime>1619591119</UtcLastUpdateTime>\\n        <Message>250 Send Mail OK</Message>\\n        <LastUpdateTime>2021-04-28T14:25Z</LastUpdateTime>\\n        <ToAddress>toaddress@test.com</ToAddress>\\n        <AccountName>test@t.test.cn</AccountName>\\n    </mailDetail>\\n    <mailDetail>\\n        <Status>0</Status>\\n        <UtcLastUpdateTime>1619591006</UtcLastUpdateTime>\\n        <Message>250 Send Mail OK</Message>\\n        <LastUpdateTime>2021-04-28T14:23Z</LastUpdateTime>\\n        <ToAddress>toaddress@test.com</ToAddress>\\n        <AccountName>test@t.test.cn</AccountName>\\n    </mailDetail>\\n</data>\\n<NextStart>90f0243616#203#test@t.test.cn-1619588875#toaddress@test.com.17870283448458174277</NextStart>","errorExample":""}]',
      'title' => '获取发送详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTrackList' => 
    array (
      'summary' => '邮件跟踪获取发送数据。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，时间不能早于30日，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-29',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，和起始时间跨度不能超出7天，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-29',
          ),
        ),
        2 => 
        array (
          'name' => 'Total',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）',
          ),
        ),
        3 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第一次查询为0，后续固定为1。1为按照时间正序分页查询。（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'OffsetCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页用，第一次查询不设置，后续查询设置为上一次Response中sOffsetCreateTime值（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）',
          ),
        ),
        6 => 
        array (
          'name' => 'OffsetCreateTimeDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'string',
            'required' => false,
            'example' => '1',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'OffsetCreateTime' => 
              array (
                'description' => '分页用，第一次查询不设置，后续查询设置为上一次Response中sOffsetCreateTime值（本字段已废弃）',
                'type' => 'string',
                'example' => '（本字段已废弃）',
              ),
              'PageNo' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'OffsetCreateTimeDesc' => 
              array (
                'description' => '（本字段已废弃）',
                'type' => 'string',
                'example' => '（本字段已废弃）',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'stat' => 
                  array (
                    'description' => '跟踪数据记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RcptClickRate' => 
                        array (
                          'description' => '点击率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueOpenCount' => 
                        array (
                          'description' => '独立打开数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptClickCount' => 
                        array (
                          'description' => '点击量',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueClickCount' => 
                        array (
                          'description' => '独立点击数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-09-29T13:28Z',
                        ),
                        'RcptUniqueOpenRate' => 
                        array (
                          'description' => '独立打开率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueClickRate' => 
                        array (
                          'description' => '独立点击率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'TotalNumber' => 
                        array (
                          'description' => '总数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptOpenRate' => 
                        array (
                          'description' => '打开率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptOpenCount' => 
                        array (
                          'description' => '打开量',
                          'type' => 'string',
                          'example' => '0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"OffsetCreateTime\\": \\"（本字段已废弃）\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Total\\": 100,\\n  \\"OffsetCreateTimeDesc\\": \\"（本字段已废弃）\\",\\n  \\"data\\": {\\n    \\"stat\\": [\\n      {\\n        \\"RcptClickRate\\": \\"0\\",\\n        \\"RcptUniqueOpenCount\\": \\"0\\",\\n        \\"RcptClickCount\\": \\"0\\",\\n        \\"RcptUniqueClickCount\\": \\"0\\",\\n        \\"CreateTime\\": \\"2019-09-29T13:28Z\\",\\n        \\"RcptUniqueOpenRate\\": \\"0\\",\\n        \\"RcptUniqueClickRate\\": \\"0\\",\\n        \\"TotalNumber\\": \\"0\\",\\n        \\"RcptOpenRate\\": \\"0\\",\\n        \\"RcptOpenCount\\": \\"0\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '邮件跟踪获取发送数据',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTrackListByMailFromAndTagName' => 
    array (
      'summary' => '调用GetTrackListByMailFromAndTagName邮件跟踪获取指定条件下的发送数据。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Total',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '（本字段已废弃）
',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）
',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，时间不能早于30日，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-09-29',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，和起始时间跨度不能超出15天，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-09-29',
          ),
        ),
        3 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第一次查询为0，后续固定为1。1为按照时间正序分页查询。（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）
',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'OffsetCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页用，第一次查询不设置，后续查询设置为上一次Response中sOffsetCreateTime值（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）
',
          ),
        ),
        6 => 
        array (
          'name' => 'OffsetCreateTimeDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '（本字段已废弃）',
            'type' => 'string',
            'required' => false,
            'example' => '（本字段已废弃）
',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址。

> 不填，代表所有地址；若有TagName，此参数不为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'e-service@amegroups.cn',
          ),
        ),
        9 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件标签。不填，代表所有标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'Subscription',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'OffsetCreateTime' => 
              array (
                'description' => '分页用，第一次查询不设置，后续查询设置为上一次Response中sOffsetCreateTime值（本字段已废弃）',
                'type' => 'string',
                'example' => '（本字段已废弃）',
              ),
              'PageNo' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '(本字段已废弃）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'OffsetCreateTimeDesc' => 
              array (
                'description' => '（本字段已废弃）',
                'type' => 'string',
                'example' => '（本字段已废弃）',
              ),
              'TrackList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Stat' => 
                  array (
                    'description' => '跟踪数据记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RcptClickRate' => 
                        array (
                          'description' => '点击率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueOpenCount' => 
                        array (
                          'description' => '独立打开数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptClickCount' => 
                        array (
                          'description' => '点击量',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueClickCount' => 
                        array (
                          'description' => '独立点击数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2022-01-11T10:11Z',
                        ),
                        'RcptUniqueOpenRate' => 
                        array (
                          'description' => '独立打开率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptUniqueClickRate' => 
                        array (
                          'description' => '独立点击率',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'TotalNumber' => 
                        array (
                          'description' => '总数',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptOpenRate' => 
                        array (
                          'description' => '打开率

',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'RcptOpenCount' => 
                        array (
                          'description' => '打开量',
                          'type' => 'string',
                          'example' => '0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"OffsetCreateTime\\": \\"（本字段已废弃）\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 4,\\n  \\"OffsetCreateTimeDesc\\": \\"（本字段已废弃）\\",\\n  \\"TrackList\\": {\\n    \\"Stat\\": [\\n      {\\n        \\"RcptClickRate\\": \\"0\\",\\n        \\"RcptUniqueOpenCount\\": \\"0\\",\\n        \\"RcptClickCount\\": \\"0\\",\\n        \\"RcptUniqueClickCount\\": \\"0\\",\\n        \\"CreateTime\\": \\"2022-01-11T10:11Z\\",\\n        \\"RcptUniqueOpenRate\\": \\"0\\",\\n        \\"RcptUniqueClickRate\\": \\"0\\",\\n        \\"TotalNumber\\": \\"0\\",\\n        \\"RcptOpenRate\\": \\"0\\",\\n        \\"RcptOpenCount\\": \\"0\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '根据发信地址和标签获取邮件跟踪发送数据',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SingleSendMail' => 
    array (
      'summary' => '发送单条邮件。',
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
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理控制台中配置的发信地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test***@example.net',
          ),
        ),
        1 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址类型。取值：

0：为随机账号

1：为发信地址',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在邮件推送控制台创建的标签，用于分类所发送的邮件批次，可以通过标签来查询每批邮件的发送情况，另外如果开启邮件跟踪功能，发信必须使用邮件标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'ReplyToAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用管理控制台中配置好回信地址（状态须验证通过），取值范围是字符串true或者false（不是bool值）。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'ToAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址，多个 email 地址可以用逗号分隔，最多100个地址（支持邮件组）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test1***@example.net',
          ),
        ),
        5 => 
        array (
          'name' => 'Subject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件主题，建议填写。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Subject',
          ),
        ),
        6 => 
        array (
          'name' => 'HtmlBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件 html 正文，限制28K。注意：HtmlBody和TextBody是针对不同类型的邮件内容，两者必须传其一。',
            'type' => 'string',
            'required' => false,
            'example' => 'body',
          ),
        ),
        7 => 
        array (
          'name' => 'TextBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件 text 正文，限制28K。注意：HtmlBody和TextBody是针对不同类型的邮件内容，两者必须传其一。',
            'type' => 'string',
            'required' => false,
            'example' => 'body',
          ),
        ),
        8 => 
        array (
          'name' => 'FromAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信人昵称，长度小于15个字符。

例如：发信人昵称设置为”小红”，发信地址为 test***@example.net，收信人看到的发信地址为“小红”<test***@example.net>。',
            'type' => 'string',
            'required' => false,
            'example' => '小红',
          ),
        ),
        9 => 
        array (
          'name' => 'ReplyAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址',
            'type' => 'string',
            'required' => false,
            'example' => 'test2***@example.net',
          ),
        ),
        10 => 
        array (
          'name' => 'ReplyAddressAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址昵称',
            'type' => 'string',
            'required' => false,
            'example' => '小红',
          ),
        ),
        11 => 
        array (
          'name' => 'ClickTrace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1：为打开数据跟踪功能

0（默认）：为关闭数据跟踪功能。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'UnSubscribeLinkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成的退订链接类型。参照[退订功能生成链接和过滤机制](https://help.aliyun.com/document_detail/2689048.html)文档

disabled: 不生成

default: 采用默认策略：对批量类型的发信地址发给特定域名时会生成退订链接，如带有关键字"gmail", "yahoo",

"google", "aol.com", "hotmail",

"outlook", "ymail.com"等

zh-cn: 生成，给将来埋点到内容准备

en-us: 生成，给将来埋点到内容准备',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        13 => 
        array (
          'name' => 'UnSubscribeFilterLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤级别。参照[退订功能生成链接和过滤机制](https://help.aliyun.com/document_detail/2689048.html)文档

disabled: 不过滤

default: 采用默认策略，批量地址采用发信地址级别过滤

mailfrom: 发信地址级别过滤

mailfrom_domain: 发信域名级别过滤

edm_id: 账号级别过滤',
            'type' => 'string',
            'required' => false,
            'example' => 'mailfrom_domain',
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
              'EnvId' => 
              array (
                'description' => '事件ID',
                'type' => 'string',
                'example' => '600000xxxxxxxxxx642',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2D086F6-xxxx-xxxx-xxxx-006DED011A85',
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
            'errorCode' => 'InvalidMailAddress.NotFound',
            'errorMessage' => 'The specified mail address is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EnvId\\": \\"600000xxxxxxxxxx642\\",\\n  \\"RequestId\\": \\"2D086F6-xxxx-xxxx-xxxx-006DED011A85\\"\\n}","type":"json"}]',
      'title' => '发送单条邮件',
    ),
    'BatchSendMail' => 
    array (
      'summary' => '批量发送邮件。',
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
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预先创建且通过审核的模板名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test1',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理控制台中配置的发信地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'test@example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ReceiversName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预先创建且上传了收件人的收件人列表名称，注意：收信人列表需要在触发任务之后至少10分钟后再删除，否则容易引起发信失败',
            'type' => 'string',
            'required' => true,
            'example' => 'test2',
          ),
        ),
        3 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 0：为随机账号
- 1：为发信地址',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件标签名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test3',
          ),
        ),
        5 => 
        array (
          'name' => 'ReplyAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址',
            'type' => 'string',
            'required' => false,
            'example' => 'test2***@example.net',
          ),
        ),
        6 => 
        array (
          'name' => 'ReplyAddressAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址别称',
            'type' => 'string',
            'required' => false,
            'example' => '小红',
          ),
        ),
        7 => 
        array (
          'name' => 'ClickTrace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 1：为打开数据跟踪功能
- 0（默认）：为关闭数据跟踪功能',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'UnSubscribeLinkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成的退订链接类型。参照[退订功能生成链接和过滤机制](https://help.aliyun.com/document_detail/2689048.html)文档
- disabled: 不生成
- default: 采用默认策略：对批量类型的发信地址发给特定域名时会生成退订链接，如带有关键字"gmail", "yahoo",
"google", "aol.com", "hotmail",
"outlook", "ymail.com"等
- zh-cn: 生成，给将来埋点到内容准备
- en-us: 生成，给将来埋点到内容准备',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        9 => 
        array (
          'name' => 'UnSubscribeFilterLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤级别。参照[退订功能生成链接和过滤机制](https://help.aliyun.com/document_detail/2689048.html)文档
- disabled: 不过滤
- default: 采用默认策略，批量地址采用发信地址级别过滤
- mailfrom: 发信地址级别过滤
- mailfrom_domain: 发信域名级别过滤
- edm_id: 账号级别过滤',
            'type' => 'string',
            'required' => false,
            'example' => 'mailfrom_domain',
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
              'EnvId' => 
              array (
                'description' => '事件ID',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '12D086F6-8F31-4658-84C1-006DED011A85',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EnvId\\": \\"xxx\\",\\n  \\"RequestId\\": \\"12D086F6-8F31-4658-84C1-006DED011A85\\"\\n}","type":"json"}]',
      'title' => '批量发送邮件',
    ),
    'SendTestByTemplate' => 
    array (
      'summary' => '调用SendTestByTemplate发送测试邮件。',
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址，长度限制60',
            'type' => 'string',
            'required' => true,
            'example' => '账号+@+域名',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UserName，长度限制30',
            'type' => 'string',
            'required' => false,
            'example' => '姓名',
          ),
        ),
        3 => 
        array (
          'name' => 'NickName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NickName，长度限制30',
            'type' => 'string',
            'required' => false,
            'example' => '昵称',
          ),
        ),
        4 => 
        array (
          'name' => 'Birthday',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Birthday，长度限制30',
            'type' => 'string',
            'required' => false,
            'example' => '2000/01/01',
          ),
        ),
        5 => 
        array (
          'name' => 'Gender',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Gender，长度限制30',
            'type' => 'string',
            'required' => false,
            'example' => '先生',
          ),
        ),
        6 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Mobile，长度限制30',
            'type' => 'string',
            'required' => false,
            'example' => '1380000****',
          ),
        ),
        7 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收信地址，长度限制60',
            'type' => 'string',
            'required' => true,
            'example' => '账号+@+域名',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详细信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<SendTestByTemplateResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</SendTestByTemplateResponse>","errorExample":""}]',
      'title' => '发送测试邮件',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDomain' => 
    array (
      'summary' => '调用CreateDomain创建域名。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，长度1-50，可以包含数字、大写字母、小写字母、.、-。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abc.com',
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
              'DomainId' => 
              array (
                'description' => '域名ID',
                'type' => 'string',
                'example' => '158910',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B49AD828-25D1-488C-90B7-8853C1944486',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainId\\": \\"158910\\",\\n  \\"RequestId\\": \\"B49AD828-25D1-488C-90B7-8853C1944486\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDomainResponse>\\r\\n    <RequestId>B49AD828-25D1-488C-90B7-8853C1944486</RequestId>\\r\\n    <DomainId>158910</DomainId>\\r\\n</CreateDomainResponse>","errorExample":""}]',
      'title' => '创建域名',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDomain' => 
    array (
      'summary' => '删除域名。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '326***',
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
                'example' => 'E3DFF97B-00CF-5333-8125-3D6819471984',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E3DFF97B-00CF-5333-8125-3D6819471984\\"\\n}","type":"json"}]',
      'title' => '删除域名',
    ),
    'ModifyPWByDomain' => 
    array (
      'summary' => '设置域名的SMTP的密码。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，长度1-50，可以为数字、大写字母、小写字母、.、-。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 长度为10~20位，且必须包含数字、大写字母、小写字母。

- 至少包含2位数字、2位大写字母和2位小写字母，并且数字和字母均不能只由单一字符重复组成。

- 不能与上一次设置密码相同。',
            'type' => 'string',
            'required' => true,
            'example' => 'DM1mail1234',
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
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '02B2A890-CBD8-4806-9BCA-C93190CE7EF6',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"02B2A890-CBD8-4806-9BCA-C93190CE7EF6\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '设置域名的 SMTP 的密码',
    ),
    'QueryDomainByParam' => 
    array (
      'summary' => '调用QueryDomainByParam查询域名列表信息。',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。默认：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量，默认：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，长度1-50，可以包含数字、大写字母、小写字母、.、-。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 0表示正常
- 1表示不正常',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '0',
            'example' => '0',
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
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8C90CCD3-627C-4F87-AD8C-2F03146071EB',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'domain' => 
                  array (
                    'description' => '域名列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainRecord' => 
                        array (
                          'description' => '域名记录',
                          'type' => 'string',
                          'example' => '6bd86901b9fe4618a046',
                        ),
                        'SpfAuthStatus' => 
                        array (
                          'description' => 'spf验证标志，成功：0，失败：1。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'MxAuthStatus' => 
                        array (
                          'description' => 'mx验证标志，成功：0，失败：1。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-09-29T13:28Z',
                        ),
                        'CnameAuthStatus' => 
                        array (
                          'description' => 'track验证',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ConfirmStatus' => 
                        array (
                          'description' => 'cName验证标志，成功：0； 失败：1',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'IcpStatus' => 
                        array (
                          'description' => '备案状态。

- 1表示备案
- 0表示未备案',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'UtcCreateTime' => 
                        array (
                          'description' => '创建时间，UTC格式。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1569734892',
                        ),
                        'DomainStatus' => 
                        array (
                          'description' => '域状态。

- 0：可用，已验证通过
- 1：不可用，验证未通过
- 2：可使用，未做cname，未备案
- 3：可使用，未备案
- 4：可使用，未做cname',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名',
                          'type' => 'string',
                          'example' => 'vmeixme.com',
                        ),
                        'DomainId' => 
                        array (
                          'description' => '域名ID',
                          'type' => 'string',
                          'example' => '158923',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 50,\\n  \\"RequestId\\": \\"8C90CCD3-627C-4F87-AD8C-2F03146071EB\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 2,\\n  \\"data\\": {\\n    \\"domain\\": [\\n      {\\n        \\"DomainRecord\\": \\"6bd86901b9fe4618a046\\",\\n        \\"SpfAuthStatus\\": \\"0\\",\\n        \\"MxAuthStatus\\": \\"0\\",\\n        \\"CreateTime\\": \\"2019-09-29T13:28Z\\",\\n        \\"CnameAuthStatus\\": \\"0\\",\\n        \\"ConfirmStatus\\": \\"0\\",\\n        \\"IcpStatus\\": \\"1\\",\\n        \\"UtcCreateTime\\": 1569734892,\\n        \\"DomainStatus\\": \\"0\\",\\n        \\"DomainName\\": \\"vmeixme.com\\",\\n        \\"DomainId\\": \\"158923\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询域名列表信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDomain' => 
    array (
      'summary' => '调用CheckDomain验证域名。',
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
          'name' => 'DomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '153345',
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
              'DomainStatus' => 
              array (
                'description' => '域状态，说明是否验证成功。

- 0：可用，已验证通过
- 1：不可用，验证未通过
- 2：可使用，未做cname，未备案
- 3：可使用，未备案
- 4：可使用，未做cname',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F0B82E83-A1D9-4FE6-97D2-F4B231F80B02',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainStatus\\": 1,\\n  \\"RequestId\\": \\"F0B82E83-A1D9-4FE6-97D2-F4B231F80B02\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckDomainResponse>\\r\\n    <DomainStatus>1</DomainStatus>\\r\\n    <RequestId>F0B82E83-A1D9-4FE6-97D2-F4B231F80B02</RequestId>\\r\\n</CheckDomainResponse>","errorExample":""}]',
      'title' => '验证域名',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescDomain' => 
    array (
      'summary' => '调用DescDomain配置域名。',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名ID。可以通过QueryDomainByParam获取。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '13464',
          ),
        ),
        1 => 
        array (
          'name' => 'RequireRealTimeDnsRecords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '判断是否要实时dns解析',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
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
              'SpfRecord' => 
              array (
                'description' => 'spf记录',
                'type' => 'string',
                'example' => 'include:spf1.dm.aliyun.com',
              ),
              'CnameConfirmStatus' => 
              array (
                'description' => 'cName验证标志，成功：0，失败：1。',
                'type' => 'string',
                'example' => '0',
              ),
              'DefaultDomain' => 
              array (
                'description' => '默认域名',
                'type' => 'string',
                'example' => '0',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2019-09-29T12:49Z',
              ),
              'CnameRecord' => 
              array (
                'description' => 'CNAME记录',
                'type' => 'string',
                'example' => 'dmtrace',
              ),
              'CnameAuthStatus' => 
              array (
                'description' => 'track验证',
                'type' => 'string',
                'example' => '1',
              ),
              'IcpStatus' => 
              array (
                'description' => '备案状态。**1**表示已备案，**0**表示未备案。',
                'type' => 'string',
                'example' => '1',
              ),
              'DnsTxt' => 
              array (
                'description' => '所有权记录',
                'type' => 'string',
                'example' => '121309ohdsa',
              ),
              'DomainName' => 
              array (
                'description' => '域名',
                'type' => 'string',
                'example' => 'abc.com',
              ),
              'DomainId' => 
              array (
                'description' => '域名ID',
                'type' => 'string',
                'example' => '158910',
              ),
              'DnsSpf' => 
              array (
                'description' => 'spf记录值',
                'type' => 'string',
                'example' => 'v=xxxx',
              ),
              'SpfAuthStatus' => 
              array (
                'description' => 'spf验证标志，成功：0，失败：1。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '51B74264-46B4-43C8-A9A0-6B8E8BC04F34',
              ),
              'MxRecord' => 
              array (
                'description' => 'MX记录',
                'type' => 'string',
                'example' => 'mx01.dm.aliyun.com',
              ),
              'MxAuthStatus' => 
              array (
                'description' => 'mx验证标志，成功：0，失败：1。',
                'type' => 'string',
                'example' => '1',
              ),
              'DnsMx' => 
              array (
                'description' => 'MX记录值',
                'type' => 'string',
                'example' => 'abc-com.xxxx.com',
              ),
              'DomainStatus' => 
              array (
                'description' => '域名状态。说明是否验证成功，取值：

- **0**：可用，已验证通过
- **1**：不可用，验证未通过
- **2**：可使用，未做cname，未备案
- **3**：可使用，未备案
- **4**：可使用，未做cname',
                'type' => 'string',
                'example' => '1',
              ),
              'TlDomainName' => 
              array (
                'description' => '主域名',
                'type' => 'string',
                'example' => 'abc.com',
              ),
              'TracefRecord' => 
              array (
                'description' => 'CNAME记录',
                'type' => 'string',
                'example' => 'tracedm.aliyuncs.com',
              ),
              'DomainType' => 
              array (
                'description' => '域类型',
                'type' => 'string',
                'example' => '0c40d5f125af4e42892a',
              ),
              'SpfRecordV2' => 
              array (
                'description' => 'spf记录，以前spf展示内容需要调用端根据响应中的spfRecord计算得出，新增字段spfRecordV2取代spfRecord， 调用端拿到该字段后可以直接进行展示；',
                'type' => 'string',
                'example' => 'v=spf1 include:spf1.dm.aliyun.com -all',
              ),
              'DkimRR' => 
              array (
                'description' => '用户需要在dns上设置的dkim记录的key',
                'type' => 'string',
                'example' => 'aliyun-cn-hangzhou._domainkey.hangzhou26',
              ),
              'DkimPublicKey' => 
              array (
                'description' => '用户需要在dns上设置的dkim记录的value',
                'type' => 'string',
                'example' => 'v=DKIM1; k=rsa; p=MIGfMA0GCSqGSI...',
              ),
              'DkimAuthStatus' => 
              array (
                'description' => '用户在dns设置的dkim记录是否已经校验通过, 0:通过， 1:未通过',
                'type' => 'string',
                'example' => '0',
              ),
              'HostRecord' => 
              array (
                'description' => '主机记录',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'DmarcRecord' => 
              array (
                'description' => 'DMARC记录值',
                'type' => 'string',
                'example' => 'v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com',
              ),
              'DnsDmarc' => 
              array (
                'description' => '通过公网域名解析到的DMARC记录值',
                'type' => 'string',
                'example' => 'v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com',
              ),
              'DmarcAuthStatus' => 
              array (
                'description' => 'DMARC授权状态',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DmarcHostRecord' => 
              array (
                'description' => 'DMARC主机记录值',
                'type' => 'string',
                'example' => '_dmarc.xxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SpfRecord\\": \\"include:spf1.dm.aliyun.com\\",\\n  \\"CnameConfirmStatus\\": \\"0\\",\\n  \\"DefaultDomain\\": \\"0\\",\\n  \\"CreateTime\\": \\"2019-09-29T12:49Z\\",\\n  \\"CnameRecord\\": \\"dmtrace\\",\\n  \\"CnameAuthStatus\\": \\"1\\",\\n  \\"IcpStatus\\": \\"1\\",\\n  \\"DnsTxt\\": \\"121309ohdsa\\",\\n  \\"DomainName\\": \\"abc.com\\",\\n  \\"DomainId\\": \\"158910\\",\\n  \\"DnsSpf\\": \\"v=xxxx\\",\\n  \\"SpfAuthStatus\\": \\"1\\",\\n  \\"RequestId\\": \\"51B74264-46B4-43C8-A9A0-6B8E8BC04F34\\",\\n  \\"MxRecord\\": \\"mx01.dm.aliyun.com\\",\\n  \\"MxAuthStatus\\": \\"1\\",\\n  \\"DnsMx\\": \\"abc-com.xxxx.com\\",\\n  \\"DomainStatus\\": \\"1\\",\\n  \\"TlDomainName\\": \\"abc.com\\",\\n  \\"TracefRecord\\": \\"tracedm.aliyuncs.com\\",\\n  \\"DomainType\\": \\"0c40d5f125af4e42892a\\",\\n  \\"SpfRecordV2\\": \\"v=spf1 include:spf1.dm.aliyun.com -all\\",\\n  \\"DkimRR\\": \\"aliyun-cn-hangzhou._domainkey.hangzhou26\\",\\n  \\"DkimPublicKey\\": \\"v=DKIM1; k=rsa; p=MIGfMA0GCSqGSI...\\",\\n  \\"DkimAuthStatus\\": \\"0\\",\\n  \\"HostRecord\\": \\"xxx\\",\\n  \\"DmarcRecord\\": \\"v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com\\",\\n  \\"DnsDmarc\\": \\"v=DMARC1;p=none;rua=mailto:dmarc_report@service.aliyun.com\\",\\n  \\"DmarcAuthStatus\\": 1,\\n  \\"DmarcHostRecord\\": \\"_dmarc.xxx\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '配置域名',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMailAddress' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '账号+@+域名',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplyAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址',
            'type' => 'string',
            'required' => false,
            'example' => 'reply@aliyun.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Sendtype',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信类型。取值：

- **batch**：批量邮件
- **trigger**：触发邮件',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'batch',
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
              'MailAddressId' => 
              array (
                'description' => '发信地址ID',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '95A7D497-F8DD-4834-B81E-C1783236E55F',
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
            'errorCode' => 'InvalidMailAddressName.Duplicate',
            'errorMessage' => 'The specified email address already exists. Please change to another one.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist. Please contact your master account to activate the Direct Mail service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MailAddressId\\": \\"xxx\\",\\n  \\"RequestId\\": \\"95A7D497-F8DD-4834-B81E-C1783236E55F\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateMailAddressResponse>\\r\\n    <RequestId>95A7D497-F8DD-4834-B81E-C1783236E55F</RequestId>\\r\\n    <MailAddressId>xxxx</MailAddressId>\\r\\n</CreateMailAddressResponse>","errorExample":""}]',
      'title' => '创建发信地址',
      'summary' => '调用CreateMailAddress创建发信地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMailAddress' => 
    array (
      'summary' => '调用DeleteMailAddress删除发信地址。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MailAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '23457',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteMailAddressResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</DeleteMailAddressResponse>","errorExample":""}]',
      'title' => '删除发信地址',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyMailAddress' => 
    array (
      'summary' => '调用ModifyMailAddress设置发信地址smtp密码。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MailAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1344565',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplyAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回信地址',
            'type' => 'string',
            'required' => false,
            'example' => 'a***@example.net',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 长度为 10~20 位，且必须包含数字、大写字母、小写字母。

- 至少包含 2 位数字、2 位大写字母和 2 位小写字母，并且数字和字母均不能只由单一字符重复组成。

- 不能与上一次设置密码相同。',
            'type' => 'string',
            'required' => false,
            'example' => 'DM1mail1234',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyMailAddressResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</ModifyMailAddressResponse>","errorExample":""}]',
      'title' => '设置发信地址SMTP密码和回信地址',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryInvalidAddress' => 
    array (
      'summary' => '调用QueryInvalidAddress获取无效地址信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，时间不能早于30日，格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-29',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，和起始时间跨度不能超出30天,格式yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-29',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键词。不填，代表所有无效地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'info',
          ),
        ),
        3 => 
        array (
          'name' => 'Length',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次请求数目',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'NextStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求开始位置',
            'type' => 'string',
            'required' => false,
            'example' => '***',
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
              'NextStart' => 
              array (
                'description' => '下次请求开始位置',
                'type' => 'string',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '95A7D497-F8DD-4834-B81E-C1783236E55F',
              ),
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'mailDetail' => 
                  array (
                    'description' => '记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LastUpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '2021-04-28T17:11Z',
                        ),
                        'ToAddress' => 
                        array (
                          'description' => '收信地址状态',
                          'type' => 'string',
                          'example' => 'toaddress@test.com',
                        ),
                        'UtcLastUpdateTime' => 
                        array (
                          'description' => 'UTC格式的更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1619601108',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextStart\\": \\"2\\",\\n  \\"RequestId\\": \\"95A7D497-F8DD-4834-B81E-C1783236E55F\\",\\n  \\"TotalCount\\": 3,\\n  \\"data\\": {\\n    \\"mailDetail\\": [\\n      {\\n        \\"LastUpdateTime\\": \\"2021-04-28T17:11Z\\",\\n        \\"ToAddress\\": \\"toaddress@test.com\\",\\n        \\"UtcLastUpdateTime\\": 1619601108\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取无效地址信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMailAddressByParam' => 
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
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小，默认：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
            'default' => '500',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件地址，长度1-60，支持数字、字母、.、-、@。',
            'type' => 'string',
            'required' => false,
            'example' => '账号+@+域名',
          ),
        ),
        3 => 
        array (
          'name' => 'Sendtype',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮件地址类型。取值：

- batch：批量邮件
- trigger：触发邮件',
            'type' => 'string',
            'required' => false,
            'example' => 'batch',
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
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '95A7D497-F8DD-4834-B81E-C1783236E55F',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'mailAddress' => 
                  array (
                    'description' => '发信地址列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MailAddressId' => 
                        array (
                          'description' => '发信地址ID',
                          'type' => 'string',
                          'example' => '12122',
                        ),
                        'MonthCount' => 
                        array (
                          'description' => '月额度限额',
                          'type' => 'string',
                          'example' => '300000',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '账号状态，冻结：1，正常：0。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-09-29T13:28Z',
                        ),
                        'ReplyStatus' => 
                        array (
                          'description' => '回信地址状态',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'Sendtype' => 
                        array (
                          'description' => '发信类型 batch or trigger',
                          'type' => 'string',
                          'example' => 'batch',
                        ),
                        'MonthReqCount' => 
                        array (
                          'description' => '月额度',
                          'type' => 'string',
                          'example' => '20000',
                        ),
                        'ReplyAddress' => 
                        array (
                          'description' => '回信地址',
                          'type' => 'string',
                          'example' => '112@aliyun.com',
                        ),
                        'DailyReqCount' => 
                        array (
                          'description' => '日额度',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'DailyCount' => 
                        array (
                          'description' => '日额度限额',
                          'type' => 'string',
                          'example' => '10000',
                        ),
                        'DomainStatus' => 
                        array (
                          'description' => '域名状态，0表示正常，1表示异常。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '发信地址',
                          'type' => 'string',
                          'example' => '账户+@+域名',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"95A7D497-F8DD-4834-B81E-C1783236E55F\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 2,\\n  \\"data\\": {\\n    \\"mailAddress\\": [\\n      {\\n        \\"MailAddressId\\": \\"12122\\",\\n        \\"MonthCount\\": \\"300000\\",\\n        \\"AccountStatus\\": \\"0\\",\\n        \\"CreateTime\\": \\"2019-09-29T13:28Z\\",\\n        \\"ReplyStatus\\": \\"0\\",\\n        \\"Sendtype\\": \\"batch\\",\\n        \\"MonthReqCount\\": \\"20000\\",\\n        \\"ReplyAddress\\": \\"112@aliyun.com\\",\\n        \\"DailyReqCount\\": \\"100\\",\\n        \\"DailyCount\\": \\"10000\\",\\n        \\"DomainStatus\\": \\"0\\",\\n        \\"AccountName\\": \\"账户+@+域名\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询发信地址列表',
      'summary' => '调用QueryMailAddressByParam查询发信地址列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApproveReplyMailAddress' => 
    array (
      'summary' => '调用ApproveReplyMailAddress验证回信地址。',
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
          'name' => 'Ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱地址Ticket',
            'type' => 'string',
            'required' => true,
            'example' => 'ticket凭证',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<ApproveReplyMailAddressResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</ApproveReplyMailAddressResponse>","errorExample":""}]',
      'title' => '验证回信地址',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckReplyToMailAddress' => 
    array (
      'summary' => '调用CheckReplyToMailAddress验证回信地址发送邮件。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'MailAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发信地址ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '126545',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckReplyToMailAddressResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</CheckReplyToMailAddressResponse>","errorExample":""}]',
      'title' => '验证回信地址发送邮件',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInvalidAddress' => 
    array (
      'summary' => '从全局无效地址库移除无效地址',
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
          'name' => 'ToAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址',
            'type' => 'string',
            'required' => false,
            'example' => 'test1***@example.net
',
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
                'example' => '2D086F6-xxxx-xxxx-xxxx-006DED011A85',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D086F6-xxxx-xxxx-xxxx-006DED011A85\\"\\n}","type":"json"}]',
      'title' => '删除无效地址',
    ),
    'CreateReceiver' => 
    array (
      'summary' => '调用CreateReceiver创建收件人列表。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReceiversName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xme',
          ),
        ),
        1 => 
        array (
          'name' => 'ReceiversAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表别称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vme',
          ),
        ),
        2 => 
        array (
          'name' => 'Desc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '列表描述',
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
              'ReceiverId' => 
              array (
                'description' => '收件人列表ID',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ReceiverId\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateReceiverResponse>\\r\\n\\t<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n\\t<ReceiverId>xxxx</ReceiverId>\\r\\n</CreateReceiverResponse>","errorExample":""}]',
      'title' => '创建收件人列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteReceiver' => 
    array (
      'summary' => '调用DeleteReceiver删除收件人列表。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReceiverId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件人列表ID',
            'type' => 'string',
            'required' => true,
            'example' => '1453',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReceiverResponse>\\r\\n<RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</DeleteReceiverResponse>","errorExample":""}]',
      'title' => '删除收件人列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteReceiverDetail' => 
    array (
      'summary' => '删除单个收件人。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReceiverId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件人列表ID',
            'type' => 'string',
            'required' => true,
            'example' => '123534',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件地址',
            'type' => 'string',
            'required' => false,
            'example' => '账号+@+域名',
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
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReceiverDetailResponse>\\r\\n    <RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</DeleteReceiverDetailResponse>","errorExample":""}]',
      'title' => '删除单个收件人',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryReceiverByParam' => 
    array (
      'summary' => '调用QueryReceiverByParam查询收件人列表。',
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
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '40',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键词，默认所有信息',
            'type' => 'string',
            'required' => false,
            'example' => 'mesh-notification',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递结果。不填，代表所有状态。取值：

- 0：成功
- 2：无效地址
- 3：垃圾邮件
- 4：失败',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '0',
            'example' => '1',
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
              'NextStart' => 
              array (
                'description' => '分页使用。如果还有更多结果，下次请求将该返回值设置到请求中的NextStart',
                'type' => 'string',
                'example' => '6aec200853#102#1638894326#rdwilbur@verizon.net',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'receiver' => 
                  array (
                    'description' => '收件人列表详细信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReceiversAlias' => 
                        array (
                          'description' => '收件人列表别名',
                          'type' => 'string',
                          'example' => '10***@163.com',
                        ),
                        'ReceiversName' => 
                        array (
                          'description' => '收件人列表名称',
                          'type' => 'string',
                          'example' => 'TKP000442-333',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-09-29T13:28Z',
                        ),
                        'ReceiverId' => 
                        array (
                          'description' => '收件人列表ID',
                          'type' => 'string',
                          'example' => '0c910a7143044b1e116719eb678907b3',
                        ),
                        'UtcCreateTime' => 
                        array (
                          'description' => 'UTC格式的创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1569734892',
                        ),
                        'ReceiversStatus' => 
                        array (
                          'description' => '列表状态。取值：

- 0：正在上传
- 1：上传完成',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'Count' => 
                        array (
                          'description' => '收件人地址总数',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'Desc' => 
                        array (
                          'description' => '描述',
                          'type' => 'string',
                          'example' => '通知',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextStart\\": \\"6aec200853#102#1638894326#rdwilbur@verizon.net\\",\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"TotalCount\\": 15,\\n  \\"data\\": {\\n    \\"receiver\\": [\\n      {\\n        \\"ReceiversAlias\\": \\"10***@163.com\\",\\n        \\"ReceiversName\\": \\"TKP000442-333\\",\\n        \\"CreateTime\\": \\"2019-09-29T13:28Z\\",\\n        \\"ReceiverId\\": \\"0c910a7143044b1e116719eb678907b3\\",\\n        \\"UtcCreateTime\\": 1569734892,\\n        \\"ReceiversStatus\\": \\"0\\",\\n        \\"Count\\": \\"3\\",\\n        \\"Desc\\": \\"通知\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询收件人列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryReceiverDetail' => 
    array (
      'summary' => '调用QueryReceiverDetail查询某个收件人列表详情。',
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
          'name' => 'ReceiverId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件人列表ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1235',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数目，默认：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '40',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件人地址，长度0-50',
            'type' => 'string',
            'required' => false,
            'example' => 'b***@example.net',
          ),
        ),
        3 => 
        array (
          'name' => 'NextStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一条开始位置，默认：0',
            'type' => 'string',
            'required' => false,
            'example' => '0',
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
              'DataSchema' => 
              array (
                'description' => 'Data收件人内容的字段名',
                'type' => 'string',
                'example' => 'UserName,NickName,Gender,Birthday,Mobile',
              ),
              'NextStart' => 
              array (
                'description' => '分页使用。如果还有更多结果，下次请求将该返回值设置到请求中的NextStart',
                'type' => 'string',
                'example' => '90f0243616#401#b68c2af70b9664b2843f90fd3630b1a3-1650779410#xxx@demo.aliyun.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量（废弃字段，历史原因兼容）',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '361',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'detail' => 
                  array (
                    'description' => '详情信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Data' => 
                        array (
                          'description' => '内容',
                          'type' => 'string',
                          'example' => '{\'Domains\': [\'a.example.net\', \'b.example.net\', \'c.example.net\', \'d.example.net\']}',
                        ),
                        'UtcCreateTime' => 
                        array (
                          'description' => 'UTC格式的创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1569734892',
                        ),
                        'Email' => 
                        array (
                          'description' => '收件人地址',
                          'type' => 'string',
                          'example' => 'a***@example.net',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-09-29T13:28Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DataSchema\\": \\"UserName,NickName,Gender,Birthday,Mobile\\",\\n  \\"NextStart\\": \\"90f0243616#401#b68c2af70b9664b2843f90fd3630b1a3-1650779410#xxx@demo.aliyun.com\\",\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"TotalCount\\": 361,\\n  \\"data\\": {\\n    \\"detail\\": [\\n      {\\n        \\"Data\\": \\"{\'Domains\': [\'a.example.net\', \'b.example.net\', \'c.example.net\', \'d.example.net\']}\\",\\n        \\"UtcCreateTime\\": 1569734892,\\n        \\"Email\\": \\"a***@example.net\\",\\n        \\"CreateTime\\": \\"2019-09-29T13:28Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询某个收件人列表详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveReceiverDetail' => 
    array (
      'summary' => '调用SaveReceiverDetail创建单个收件人。',
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
          'name' => 'ReceiverId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收件人列表ID',
            'type' => 'string',
            'required' => true,
            'example' => '34642',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容， 每次限制500条记录',
            'type' => 'string',
            'required' => true,
            'example' => '[{"b":"birthday","e":"xxx@alibaba-inc.com","g":"gender","m":"mobile","n":"nickname","u":"name"}]',
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
              'ErrorCount' => 
              array (
                'description' => '错误次数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '638',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'SuccessCount' => 
              array (
                'description' => '成功数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '274',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Detail' => 
                  array (
                    'description' => '邮件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Email' => 
                        array (
                          'description' => '邮件地址。',
                          'type' => 'string',
                          'example' => 'test@mail.com',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorCount\\": 638,\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"SuccessCount\\": 274,\\n  \\"Data\\": {\\n    \\"Detail\\": [\\n      {\\n        \\"Email\\": \\"test@mail.com\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '创建单个收件人',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTag' => 
    array (
      'summary' => '创建标签。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'TagDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签描述',
            'type' => 'string',
            'required' => false,
            'example' => 'test description',
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
              'TagId' => 
              array (
                'description' => '标签ID',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TagId\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTagResponse>\\r\\n    <RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n    <TagId>xxxx</TagId>\\r\\n</CreateTagResponse>","errorExample":""}]',
      'title' => '创建标签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTag' => 
    array (
      'summary' => '调用DeleteTag删除标签。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTagResponse>   \\r\\n      <RequestId>10A1AD70-E48E-476D-98D9-39BD92193837</RequestId>\\r\\n</DeleteTagResponse>","errorExample":""}]',
      'title' => '删除标签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyTag' => 
    array (
      'summary' => '调用ModifyTag修改标签。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'TagDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签描述',
            'type' => 'string',
            'required' => false,
            'example' => 'test description',
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
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '修改标签',
    ),
    'QueryTagByParam' => 
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
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
            'default' => '500',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称，长度1-50，默认为所有标签。',
            'type' => 'string',
            'required' => false,
            'example' => '1aTag',
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
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'tag' => 
                  array (
                    'description' => '数据记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagName' => 
                        array (
                          'description' => '标签名称',
                          'type' => 'string',
                          'example' => 'hellopal',
                        ),
                        'TagId' => 
                        array (
                          'description' => '标签ID',
                          'type' => 'string',
                          'example' => '52366',
                        ),
                        'TagDescription' => 
                        array (
                          'description' => '标签描述',
                          'type' => 'string',
                          'example' => 'test description',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"PageNumber\\": 5,\\n  \\"TotalCount\\": 2,\\n  \\"data\\": {\\n    \\"tag\\": [\\n      {\\n        \\"TagName\\": \\"hellopal\\",\\n        \\"TagId\\": \\"52366\\",\\n        \\"TagDescription\\": \\"test description\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取标签',
      'summary' => '调用QueryTagByParam获取标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListUserSuppression' => 
    array (
      'summary' => '列出用户手动录入和系统判别的无效地址',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录入开始时间，时间戳，精确到秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1715668852',
          ),
        ),
        1 => 
        array (
          'name' => 'EndCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录入结束时间，时间戳，精确到秒，和开始时间跨度不能超出 7 天',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1715669077',
          ),
        ),
        2 => 
        array (
          'name' => 'StartBounceTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '退信最后一次命中开始时间，时间戳，精确到秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1715668852',
          ),
        ),
        3 => 
        array (
          'name' => 'EndBounceTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '退信最后一次命中结束时间，时间戳，精确到秒，和开始时间跨度不能超出 7 天',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1715669077',
          ),
        ),
        4 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱地址或域名',
            'type' => 'string',
            'required' => false,
            'example' => 'test@example.net或example.net',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1A846D66-5EC7-551B-9687-5BF1963DCFC1',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UserSuppressions' => 
                  array (
                    'description' => '返回的结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'UserSuppressions',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SuppressionId' => 
                        array (
                          'description' => '无效地址编号',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '59511',
                        ),
                        'Address' => 
                        array (
                          'description' => '邮箱地址或域名',
                          'type' => 'string',
                          'example' => 'test@example.net或example.net',
                        ),
                        'LastBounceTime' => 
                        array (
                          'description' => '退信最后一次命中时间，时间戳，精确到秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1715667451',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间，时间戳，精确到秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1715667435',
                        ),
                        'Type' => 
                        array (
                          'description' => '录入来源，无效地址类型',
                          'type' => 'string',
                          'example' => '- system
- user',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"1A846D66-5EC7-551B-9687-5BF1963DCFC1\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 2,\\n  \\"Data\\": {\\n    \\"UserSuppressions\\": [\\n      {\\n        \\"SuppressionId\\": 59511,\\n        \\"Address\\": \\"test@example.net或example.net\\",\\n        \\"LastBounceTime\\": 1715667451,\\n        \\"CreateTime\\": 1715667435,\\n        \\"Type\\": \\"- system\\\\n- user\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列出个人和系统无效地址',
    ),
    'UpdateUser' => 
    array (
      'summary' => '更新用户相关的信息，包括设置等信息。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'User',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EnableEventbridge' => 
              array (
                'description' => '是否启用了EventBridge',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7BC346F6-1092-5852-B6E2-CCE2E5AAE51F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7BC346F6-1092-5852-B6E2-CCE2E5AAE51F\\"\\n}","type":"json"}]',
      'title' => '更新用户信息',
    ),
    'GetUser' => 
    array (
      'summary' => '获取用户相关的信息，包含设置等信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '10A1AD70-E48E-476D-98D9-39BD92193837',
              ),
              'Data' => 
              array (
                'description' => '返回内容',
                'type' => 'object',
                'properties' => 
                array (
                  'EnableEventbridge' => 
                  array (
                    'description' => '是否启用了EventBridge',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10A1AD70-E48E-476D-98D9-39BD92193837\\",\\n  \\"Data\\": {\\n    \\"EnableEventbridge\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取用户信息',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dm.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dm.ap-southeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dm.eu-central-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dm.us-east-1.aliyuncs.com',
    ),
  ),
);
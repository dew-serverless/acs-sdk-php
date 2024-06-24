<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'retailadvqa',
    'version' => '2023-04-17',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 182071,
      'title' => '全域会员OpenApi',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EditMemberBasicInfo',
        1 => 'CalculateMemberLevel',
        2 => 'MemberAccountDetailPageQuery',
        3 => 'SyncMemberBehaviorInfo',
        4 => 'QueryMemberBasicInfo',
        5 => 'MemberPointChange',
        6 => 'SyncCardInfo',
        7 => 'AddMemberBasicInfo',
        8 => 'BatchSaveOrderPop',
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
    'EditMemberBasicInfo' => 
    array (
      'summary' => '会员信息编辑API。',
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
          'name' => 'Body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '商户ID',
                'type' => 'string',
                'required' => true,
                'example' => '1230094',
              ),
              'PlatformType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => 'TAOBAO',
              ),
              'Mobile' => 
              array (
                'description' => '手机号',
                'type' => 'string',
                'required' => true,
                'example' => '***********',
              ),
              'MemberNickName' => 
              array (
                'description' => '会员昵称',
                'type' => 'string',
                'required' => false,
                'example' => 'xxxx',
              ),
              'MemberName' => 
              array (
                'description' => '会员名称。',
                'type' => 'string',
                'required' => false,
                'example' => '杨x',
              ),
              'Birthday' => 
              array (
                'description' => '生日',
                'type' => 'string',
                'required' => false,
                'example' => '2024-06-20',
              ),
              'Country' => 
              array (
                'description' => '国家',
                'type' => 'string',
                'required' => false,
                'example' => '中国',
              ),
              'Province' => 
              array (
                'description' => '省份',
                'type' => 'string',
                'required' => false,
                'example' => '山东省',
              ),
              'City' => 
              array (
                'description' => '城市',
                'type' => 'string',
                'required' => false,
                'example' => '青岛市',
              ),
              'Area' => 
              array (
                'description' => '地区',
                'type' => 'string',
                'required' => false,
                'example' => '小岛区',
              ),
              'Sex' => 
              array (
                'description' => '性别（男、女、未知）',
                'type' => 'string',
                'required' => false,
                'example' => '男',
              ),
              'Email' => 
              array (
                'description' => '邮箱',
                'type' => 'string',
                'required' => false,
                'example' => 'xxx.com',
              ),
              'Avatar' => 
              array (
                'description' => '头像',
                'type' => 'string',
                'required' => false,
                'example' => 'xxx.jpg',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '查询是否成功：
true：成功                              
false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空
',
              ),
              'Message' => 
              array (
                'description' => '消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码

',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '会员信息编辑API',
      'description' => '会员信息编辑',
    ),
    'CalculateMemberLevel' => 
    array (
      'summary' => '会员等级初始化计算。',
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
          'name' => 'Body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CurrentGrade' => 
              array (
                'description' => '会员等级',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'CurrentGradeName' => 
              array (
                'description' => '等级名称',
                'type' => 'string',
                'required' => true,
                'example' => '黄金',
              ),
              'MemberId' => 
              array (
                'description' => '会员ID',
                'type' => 'string',
                'required' => true,
                'example' => '4000006009418358',
              ),
              'OpenMerchantId' => 
              array (
                'description' => '商户ID',
                'type' => 'string',
                'required' => true,
                'example' => '1230094',
              ),
              'PlatformType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => 'TAOBAO',
              ),
              'Score' => 
              array (
                'description' => '积分',
                'type' => 'string',
                'required' => false,
                'example' => '0',
              ),
              'SerialNo' => 
              array (
                'description' => '操作序列号',
                'type' => 'string',
                'required' => true,
                'example' => '0235b7f20a11de9e2bf4c3494b6d998d',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '查询是否成功：
true：成功。                                 
false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码

',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，请求异常时返回。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空
',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Grade' => 
              array (
                'description' => '会员等级',
                'type' => 'string',
                'example' => '1',
              ),
              'OuterMemberId' => 
              array (
                'description' => '外部会员id',
                'type' => 'string',
                'example' => '6062f9067f170700a2e7ef5a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Grade\\": \\"1\\",\\n  \\"OuterMemberId\\": \\"6062f9067f170700a2e7ef5a\\"\\n}","type":"json"}]',
      'title' => '会员等级初始化计算',
    ),
    'MemberAccountDetailPageQuery' => 
    array (
      'summary' => '积分明细查询。',
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
          'name' => 'body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '加密商家ID',
                'type' => 'string',
                'required' => true,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'PlatFormType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => '如：FENGXUAN',
              ),
              'OuterMemberId' => 
              array (
                'description' => '商家会员ID',
                'type' => 'string',
                'required' => true,
                'example' => 'WMS_36606164948078_23218019',
              ),
              'AccountType' => 
              array (
                'description' => '账号类型（20-积分；30-成长值）',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'enumValueTitles' => 
                array (
                  20 => '积分',
                  30 => '成长值',
                ),
                'example' => '20
',
              ),
              'StartTime' => 
              array (
                'description' => '查询起始时间：2011-09-01 00:00:00',
                'type' => 'string',
                'required' => false,
                'example' => '2011-09-01 00:00:00

',
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间：2011-11-30 23:59:59',
                'type' => 'string',
                'required' => false,
                'example' => '2011-09-02 00:00:00

',
              ),
              'Page' => 
              array (
                'description' => '分页页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量，默认10，最大1000',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
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
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => 'TotalCount本次请求条件下的数据总量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5000',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '查询是否成功：
true：成功。                                
false：失败。',
                'type' => 'string',
                'required' => true,
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，请求异常时返回。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空',
              ),
              'Data' => 
              array (
                'description' => '明细列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OpenMerchantId' => 
                    array (
                      'description' => '加密商家ID',
                      'type' => 'string',
                      'example' => '750cff00c3e0996d220ac2861dafdfadsf
',
                    ),
                    'OuterMemberId' => 
                    array (
                      'description' => '商家会员ID',
                      'type' => 'string',
                      'example' => 'MEMBER_fc498a12edd84dafd',
                    ),
                    'AccountType' => 
                    array (
                      'description' => '账号类型（20-积分；30-成长值）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'OperateType' => 
                    array (
                      'description' => '操作类型(1-增加2-减少)',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'DetailValue' => 
                    array (
                      'description' => '积分/成长值变更数值',
                      'type' => 'string',
                      'example' => '20',
                    ),
                    'AccountBalance' => 
                    array (
                      'description' => '变更后积分',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'ChannelCode' => 
                    array (
                      'description' => '渠道Code',
                      'type' => 'string',
                      'example' => '如：alipay',
                    ),
                    'ActivityType' => 
                    array (
                      'description' => '活动类型',
                      'type' => 'string',
                      'required' => true,
                      'example' => '示例值：
订单/活动/抽奖/…',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'required' => true,
                      'example' => '示例值：
2011-09-01 00:00:00',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改日期',
                      'type' => 'string',
                      'required' => true,
                      'example' => '示例值：
2011-09-01 00:00:00',
                    ),
                    'Remark' => 
                    array (
                      'description' => '备注。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '...',
                    ),
                    'Extra' => 
                    array (
                      'description' => '其他',
                      'type' => 'string',
                      'required' => true,
                      'example' => '...',
                    ),
                  ),
                  'required' => true,
                ),
                'required' => false,
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 5000,\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\",\\n  \\"Data\\": [\\n    {\\n      \\"OpenMerchantId\\": \\"750cff00c3e0996d220ac2861dafdfadsf\\\\n\\",\\n      \\"OuterMemberId\\": \\"MEMBER_fc498a12edd84dafd\\",\\n      \\"AccountType\\": 20,\\n      \\"OperateType\\": \\"1\\",\\n      \\"DetailValue\\": \\"20\\",\\n      \\"AccountBalance\\": \\"100\\",\\n      \\"ChannelCode\\": \\"如：alipay\\",\\n      \\"ActivityType\\": \\"示例值：\\\\n订单/活动/抽奖/…\\",\\n      \\"GmtCreate\\": \\"示例值：\\\\n2011-09-01 00:00:00\\",\\n      \\"GmtModified\\": \\"示例值：\\\\n2011-09-01 00:00:00\\",\\n      \\"Remark\\": \\"...\\",\\n      \\"Extra\\": \\"...\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '积分明细查询',
    ),
    'SyncMemberBehaviorInfo' => 
    array (
      'summary' => '保存会员行为信息。',
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
          'name' => 'body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '加密商家ID',
                'type' => 'string',
                'required' => true,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'PlatFormType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => '如：FENGXUAN',
              ),
              'OuterMemberId' => 
              array (
                'description' => '商家会员ID',
                'type' => 'string',
                'required' => true,
                'example' => 'WMS_36606164948078_23218019',
              ),
              'ActionType' => 
              array (
                'description' => '行为类型：（sign-签到medal-勋章questionnaire-问卷）',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'questionnaire' => 'questionnaire',
                  'sign' => 'sign',
                  'medal' => 'medal',
                ),
                'example' => 'sign',
              ),
              'ActionSubType' => 
              array (
                'description' => '行为子类型',
                'type' => 'string',
                'required' => false,
                'example' => '...',
              ),
              'ActionStartDate' => 
              array (
                'description' => '行为产生日期',
                'type' => 'string',
                'required' => false,
                'example' => '2023-01-01 00:00:00',
              ),
              'ActionEndDate' => 
              array (
                'description' => '行为结束日期',
                'type' => 'string',
                'required' => false,
                'example' => '2023-01-01 00:00:00',
              ),
              'ActionResult' => 
              array (
                'description' => '行为结果：ture/false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true
',
              ),
              'ActionDuration' => 
              array (
                'description' => '持续时间：秒',
                'type' => 'string',
                'required' => false,
                'example' => '18',
              ),
              'Extra' => 
              array (
                'description' => '其他',
                'type' => 'string',
                'required' => false,
                'example' => '...',
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
                'description' => '请求id',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '是否成功：
true：成功                              
false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\"\\n}","type":"json"}]',
      'title' => '保存会员行为信息',
    ),
    'QueryMemberBasicInfo' => 
    array (
      'summary' => '查询会员基础信息。',
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
          'name' => 'body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '商家加密品牌 ID',
                'type' => 'string',
                'required' => true,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'PlatFormType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => 'FENGXUAN',
              ),
              'Type' => 
              array (
                'title' => '1-渠道OpenId' . "\0" . '，2-手机号，3-外部会员id',
                'description' => '查询类型，支持使用会员id/手机号/渠道openId查询。枚举值：
1-ChannelOpenId，仅支持ChannelCode为alipay/wechat时，ChannelOpenId
必填，
2-mobile，mobile必填
3-OuterMemberId，OuterMemberId必填',
                'type' => 'string',
                'required' => true,
                'docRequired' => false,
                'enumValueTitles' => 
                array (
                  1 => 'ChannelOpenId',
                  2 => 'Mobile',
                  3 => 'OuterMemberId',
                ),
                'example' => '1',
              ),
              'OuterMemberId' => 
              array (
                'description' => '商家会员ID',
                'type' => 'string',
                'required' => false,
                'example' => 'WMS_36606164948078_23218019',
              ),
              'Mobile' => 
              array (
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '18888889999',
              ),
              'ChannelCode' => 
              array (
                'title' => 'wechat' . "\0" . '-微信，alipay' . "\0" . '-支付宝',
                'description' => '渠道Code',
                'type' => 'string',
                'required' => false,
                'example' => '如：alipay',
              ),
              'ChannelOpenId' => 
              array (
                'description' => '渠道openId',
                'type' => 'string',
                'required' => false,
                'example' => '750cff00c3e099',
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
            'description' => '响应参数',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。true：表示调用成功。                                 false：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，请求异常时返回。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空',
              ),
              'Data' => 
              array (
                'description' => '请求接口返回的数据，会员信息',
                'type' => 'object',
                'properties' => 
                array (
                  'OpenMerchantId' => 
                  array (
                    'description' => '加密商家ID',
                    'type' => 'string',
                    'example' => '750cff00c3e0996d220ac2861dafdfadsf
',
                  ),
                  'OuterMemberId' => 
                  array (
                    'description' => '商家会员ID',
                    'type' => 'string',
                    'example' => 'MEMBER_fc498a12edd84dafd',
                  ),
                  'MemberName' => 
                  array (
                    'description' => '会员名称。',
                    'type' => 'string',
                    'example' => '匿名会员',
                  ),
                  'Mobile' => 
                  array (
                    'description' => '手机号',
                    'type' => 'string',
                    'example' => '13999999999',
                  ),
                  'Sex' => 
                  array (
                    'description' => '性别（男、女）',
                    'type' => 'string',
                    'example' => '男',
                  ),
                  'Birthday' => 
                  array (
                    'description' => '生日',
                    'type' => 'string',
                    'example' => '1992-04-17',
                  ),
                  'Country' => 
                  array (
                    'description' => '国籍',
                    'type' => 'string',
                    'example' => '中国',
                  ),
                  'Province' => 
                  array (
                    'description' => '省份',
                    'type' => 'string',
                    'example' => '浙江',
                  ),
                  'City' => 
                  array (
                    'description' => '城市',
                    'type' => 'string',
                    'example' => '杭州',
                  ),
                  'Email' => 
                  array (
                    'description' => '邮箱',
                    'type' => 'string',
                    'example' => 'xxx@xxx.com',
                  ),
                  'Avatar' => 
                  array (
                    'description' => '头像',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'https://tfs.alipayobjects.com/images/partner/TB1aWA7Xv5GDuNjHvSCXXczuXXa',
                  ),
                  'LevelNum' => 
                  array (
                    'description' => '等级编号',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'LevelName' => 
                  array (
                    'description' => '会员等级',
                    'type' => 'string',
                    'example' => 'VIP0',
                  ),
                  'Points' => 
                  array (
                    'description' => '会员成长值',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'Score' => 
                  array (
                    'description' => '会员积分',
                    'type' => 'string',
                    'example' => '73',
                  ),
                  'Extra' => 
                  array (
                    'description' => '其他',
                    'type' => 'string',
                    'required' => false,
                    'example' => '...',
                  ),
                  'Area' => 
                  array (
                    'description' => '地区',
                    'type' => 'string',
                    'example' => '余杭',
                  ),
                  'MemberNickName' => 
                  array (
                    'description' => '会员昵称',
                    'type' => 'string',
                    'example' => 'aaa',
                  ),
                  'NearExpiredScore' => 
                  array (
                    'description' => '临期积分',
                    'type' => 'string',
                    'example' => '0',
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
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\",\\n  \\"Data\\": {\\n    \\"OpenMerchantId\\": \\"750cff00c3e0996d220ac2861dafdfadsf\\\\n\\",\\n    \\"OuterMemberId\\": \\"MEMBER_fc498a12edd84dafd\\",\\n    \\"MemberName\\": \\"匿名会员\\",\\n    \\"Mobile\\": \\"13999999999\\",\\n    \\"Sex\\": \\"男\\",\\n    \\"Birthday\\": \\"1992-04-17\\",\\n    \\"Country\\": \\"中国\\",\\n    \\"Province\\": \\"浙江\\",\\n    \\"City\\": \\"杭州\\",\\n    \\"Email\\": \\"xxx@xxx.com\\",\\n    \\"Avatar\\": \\"https://tfs.alipayobjects.com/images/partner/TB1aWA7Xv5GDuNjHvSCXXczuXXa\\",\\n    \\"LevelNum\\": \\"1\\",\\n    \\"LevelName\\": \\"VIP0\\",\\n    \\"Points\\": \\"100\\",\\n    \\"Score\\": \\"73\\",\\n    \\"Extra\\": \\"...\\",\\n    \\"Area\\": \\"余杭\\",\\n    \\"MemberNickName\\": \\"aaa\\",\\n    \\"NearExpiredScore\\": \\"0\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询会员基础信息',
    ),
    'MemberPointChange' => 
    array (
      'summary' => '会员积分变更。',
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
          'name' => 'body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '商家加密品牌 ID',
                'type' => 'string',
                'required' => true,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'PlatFormType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => 'FENGXUAN',
              ),
              'OuterMemberId' => 
              array (
                'description' => '商家会员ID',
                'type' => 'string',
                'required' => true,
                'example' => 'WMS_36606164948078_23218019',
              ),
              'Quantity' => 
              array (
                'description' => '积分/成长值变更数值',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'AccountType' => 
              array (
                'description' => '账户类型：20-积分;30-成长值',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  20 => '积分',
                  30 => '成长值',
                ),
                'example' => '20',
              ),
              'OperateType' => 
              array (
                'description' => '变更类型：1-增加，2-扣减',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  1 => '增加',
                  2 => '扣减',
                ),
                'example' => '1',
              ),
              'SerialNo' => 
              array (
                'description' => '操作序列号',
                'type' => 'string',
                'required' => true,
                'example' => '4LJDNJH9JUX48L41',
              ),
              'ChannelCode' => 
              array (
                'description' => '渠道Code',
                'type' => 'string',
                'required' => false,
                'example' => '如：alipay',
              ),
              'Extra' => 
              array (
                'description' => '其他',
                'type' => 'string',
                'required' => false,
                'example' => '""',
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
            'description' => '响应参数',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B2CD5682-12C0-51A7-82FC-1D36091CADAD',
              ),
              'Success' => 
              array (
                'description' => '是否成功：
true：成功                              
false：失败',
                'type' => 'string',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，请求异常时返回。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空
',
              ),
              'AccountBalance' => 
              array (
                'description' => '账户余额。',
                'type' => 'string',
                'example' => '100',
              ),
              'LevelName' => 
              array (
                'description' => '会员等级',
                'type' => 'string',
                'required' => true,
                'example' => '12',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2CD5682-12C0-51A7-82FC-1D36091CADAD\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"AccountBalance\\": \\"100\\",\\n  \\"LevelName\\": \\"12\\"\\n}","type":"json"}]',
      'title' => '会员积分变更',
    ),
    'SyncCardInfo' => 
    array (
      'summary' => '卡券信息同步。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'description' => '商家加密品牌 ID',
                'type' => 'string',
                'required' => false,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'TransferId' => 
              array (
                'description' => '赠送单号',
                'type' => 'string',
                'required' => false,
                'example' => '3eecd2b8a6f946ca',
              ),
              'OrderId' => 
              array (
                'description' => '购买订单号',
                'type' => 'string',
                'required' => false,
                'example' => '223332140970453',
              ),
              'BuyerId' => 
              array (
                'description' => '购买用户ID',
                'type' => 'string',
                'required' => false,
                'example' => '1236437142867408',
              ),
              'Recipient' => 
              array (
                'description' => '收礼人',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => '收礼人ID',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1000030855004',
                  ),
                  'Phone' => 
                  array (
                    'description' => '收礼人手机号',
                    'type' => 'string',
                    'required' => false,
                    'example' => '18899998888',
                  ),
                  'OpenId' => 
                  array (
                    'description' => 'openId',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1179ead68b3833fea61a802ddb1dd3ac',
                  ),
                  'Nickname' => 
                  array (
                    'description' => '收礼人昵称',
                    'type' => 'string',
                    'required' => false,
                    'example' => '大大',
                  ),
                  'HeaderImg' => 
                  array (
                    'description' => '头像',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'https://xxx/1.jpg',
                  ),
                ),
                'required' => false,
              ),
              'Gifters' => 
              array (
                'description' => '赠礼人',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => '赠礼人ID',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1000030820003',
                  ),
                  'Phone' => 
                  array (
                    'description' => '赠礼人手机号',
                    'type' => 'string',
                    'required' => false,
                    'example' => '13277778888',
                  ),
                  'OpenId' => 
                  array (
                    'description' => 'openId',
                    'type' => 'string',
                    'required' => false,
                    'example' => '82ace612cd377134d597e32e91562caf',
                  ),
                  'Nickname' => 
                  array (
                    'description' => '赠礼人昵称',
                    'type' => 'string',
                    'required' => false,
                    'example' => '小小',
                  ),
                  'HeaderImg' => 
                  array (
                    'description' => '头像',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'https://xxx/2.jpg',
                  ),
                ),
                'required' => false,
              ),
              'Status' => 
              array (
                'description' => '状态，1-未领取2-已领取3-已退卡4-已失效',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  1 => '未领取',
                  2 => '已领取',
                  3 => '已退卡',
                  4 => '已失效',
                ),
                'example' => '1',
              ),
              'Theme' => 
              array (
                'description' => '礼品卡名称',
                'type' => 'string',
                'required' => false,
                'example' => '礼品a',
              ),
              'TransferredAt' => 
              array (
                'description' => '赠送时间，格式:yyyy-MM-dd HH:mm:ss',
                'type' => 'string',
                'required' => false,
                'example' => '2023-05-12 00:00:00',
              ),
              'ReceivedAt' => 
              array (
                'description' => '接收时间，格式:yyyy-MM-dd HH:mm:ss',
                'type' => 'string',
                'required' => false,
                'example' => '2023-05-12 00:00:00',
              ),
              'PresentDetail' => 
              array (
                'title' => '商品详情',
                'description' => '商品详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '商品详情信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ItemId' => 
                    array (
                      'title' => '商品ID',
                      'description' => '商品ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '608356956277',
                    ),
                    'Price' => 
                    array (
                      'description' => '商品金额',
                      'type' => 'number',
                      'format' => 'double',
                      'required' => false,
                      'example' => '89.5',
                    ),
                    'Name' => 
                    array (
                      'title' => '商品名称',
                      'description' => '商品名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'A商品',
                    ),
                    'Count' => 
                    array (
                      'description' => '商品数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '0',
                    ),
                    'SkuId' => 
                    array (
                      'title' => 'SKU',
                      'description' => 'SKU',
                      'type' => 'string',
                      'required' => false,
                      'example' => '4747141632519',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'OccurredAt' => 
              array (
                'description' => '系统记录时间，格式:yyyy-MM-dd HH:mm:ss',
                'type' => 'string',
                'required' => false,
                'example' => '2023-05-12 00:00:00',
              ),
              'Extra' => 
              array (
                'description' => '其他',
                'type' => 'string',
                'required' => false,
                'example' => '""',
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
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '查询是否成功：
true：成功                             
false：失败',
                'type' => 'string',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码

',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，请求异常时返回。',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空
',
              ),
              'Message' => 
              array (
                'description' => '消息',
                'type' => 'string',
                'example' => 'success',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": \\"true\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '同步卡券信息',
    ),
    'AddMemberBasicInfo' => 
    array (
      'summary' => '开放平台同步会员基础信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'OpenMerchantId' => 
              array (
                'title' => '开放商家加密ID',
                'description' => '商家加密品牌 ID',
                'type' => 'string',
                'required' => true,
                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
              ),
              'PlatFormType' => 
              array (
                'description' => '平台类型',
                'type' => 'string',
                'required' => true,
                'example' => 'FENGXUAN',
              ),
              'MemberName' => 
              array (
                'title' => '姓名',
                'description' => '会员名称。',
                'type' => 'string',
                'required' => false,
                'example' => '核桃',
              ),
              'MemberNickName' => 
              array (
                'description' => '会员昵称',
                'type' => 'string',
                'required' => false,
                'example' => 'aaa',
              ),
              'Mobile' => 
              array (
                'title' => '手机号',
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '17716699087',
              ),
              'Sex' => 
              array (
                'title' => '性别',
                'description' => '性别',
                'type' => 'string',
                'required' => false,
                'example' => '男/女',
              ),
              'Birthday' => 
              array (
                'title' => '生日',
                'description' => '生日',
                'type' => 'string',
                'required' => false,
                'example' => '2022-09-08',
              ),
              'Country' => 
              array (
                'description' => '国籍',
                'type' => 'string',
                'required' => false,
                'example' => '中国',
              ),
              'Province' => 
              array (
                'title' => '省份',
                'description' => '省份',
                'type' => 'string',
                'required' => false,
                'example' => '浙江省',
              ),
              'City' => 
              array (
                'title' => '城市',
                'description' => '城市',
                'type' => 'string',
                'required' => false,
                'example' => '杭州市',
              ),
              'Area' => 
              array (
                'description' => '地区',
                'type' => 'string',
                'required' => false,
                'example' => '西湖区',
              ),
              'Email' => 
              array (
                'description' => '邮箱',
                'type' => 'string',
                'required' => false,
                'example' => 'xxx@email.com',
              ),
              'Avatar' => 
              array (
                'description' => '头像',
                'type' => 'string',
                'required' => false,
                'example' => 'https://static-legacy.dingtalk.com/media/lALPD1IyQHXWp0LMusy6_186_186.png',
              ),
              'Channels' => 
              array (
                'description' => '渠道',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '渠道对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChannelCode' => 
                    array (
                      'description' => '渠道Code',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'alipay',
                    ),
                    'AppId' => 
                    array (
                      'description' => '应用ID或者小程序ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '4958916073165425157001',
                    ),
                    'ChannelOpenId' => 
                    array (
                      'description' => '渠道openId',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'openId',
                    ),
                    'ChannelUnionId' => 
                    array (
                      'description' => '渠道UnionId',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UnionId',
                    ),
                    'Scene' => 
                    array (
                      'title' => '场景',
                      'description' => '场景',
                      'type' => 'string',
                      'required' => false,
                      'example' => '如:xxx活动',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
                'maxItems' => 100,
              ),
              'GmtCreate' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'string',
                'required' => false,
                'example' => '2023-02-17 00:00:00',
              ),
              'Extra' => 
              array (
                'title' => '其他',
                'description' => '其他',
                'type' => 'string',
                'required' => false,
                'example' => '""',
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
            'description' => '响应参数',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，唯一标示',
                'description' => '请求ID，唯一标示',
                'type' => 'string',
                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218
',
              ),
              'Success' => 
              array (
                'description' => '查询是否成功：
true：成功                              
false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Lydaas.QuickMember.SystemError
',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '系统错误: openMerchantId 不能为空
',
              ),
              'OuterMemberId' => 
              array (
                'title' => '会员id',
                'description' => '会员id',
                'type' => 'string',
                'example' => 'WMS_36606164948078_23218019',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"OuterMemberId\\": \\"WMS_36606164948078_23218019\\"\\n}","type":"json"}]',
      'title' => '同步会员基础信息',
    ),
    'BatchSaveOrderPop' => 
    array (
      'summary' => 'null',
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
          'name' => 'Orders',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '订单列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模型',
              'type' => 'object',
              'properties' => 
              array (
                'ChannelCode' => 
                array (
                  'description' => '渠道编码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'doudian',
                ),
                'ChannelOpenId' => 
                array (
                  'description' => '渠道用户openid',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1699b2b974d444e3aa489f96457ef204',
                ),
                'OpenOrderId' => 
                array (
                  'description' => '订单编号',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testOpenOrderId',
                ),
                'buyerOpenUid' => 
                array (
                  'description' => '买家id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testBuyId',
                ),
                'OpenMerchantId' => 
                array (
                  'description' => '品牌id',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testOpenMerchantId',
                ),
                'PlatformType' => 
                array (
                  'description' => '平台类型',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'DOUDIAN',
                ),
                'OrderPayment' => 
                array (
                  'description' => '支付金额(单位:分)',
                  'type' => 'string',
                  'required' => true,
                  'example' => '10000',
                ),
                'TotalFee' => 
                array (
                  'description' => '订单金额（单位：分）',
                  'type' => 'string',
                  'required' => true,
                  'example' => '10000',
                ),
                'OrderCreateTime' => 
                array (
                  'description' => '下单时间',
                  'type' => 'string',
                  'required' => true,
                  'example' => '2023-12-20 12:12:12',
                ),
                'PayTime' => 
                array (
                  'description' => '支付时间',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2023-12-20 12:12:12
',
                ),
                'EndTime' => 
                array (
                  'description' => '结束时间',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2023-12-20 12:12:12
',
                ),
                'ShopId' => 
                array (
                  'description' => '店铺id',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testShopId',
                ),
                'Status' => 
                array (
                  'description' => '订单状态',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TRADE_FINISHED',
                ),
                'Feature' => 
                array (
                  'description' => '扩展属性',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{\\"扩展属性1\\":\\"featureData1\\",\\"扩展属性2\\":\\"featureData2\\"}',
                ),
                'SubOrderModelList' => 
                array (
                  'description' => '子单信息',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模型',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OpenSubOrderId' => 
                      array (
                        'description' => '子订单编号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSubOrderId',
                      ),
                      'TotalFee' => 
                      array (
                        'description' => '订单金额（单位：分）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10000',
                      ),
                      'OrderPayment' => 
                      array (
                        'description' => '支付金额（单位：分）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10000',
                      ),
                      'ProductAmount' => 
                      array (
                        'description' => '商品数量',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                      ),
                      'ProductId' => 
                      array (
                        'description' => '商品Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testProductld',
                      ),
                      'OutProductId' => 
                      array (
                        'description' => '外部商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testOutProductId',
                      ),
                      'ProductName' => 
                      array (
                        'description' => '商品名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testProductName',
                      ),
                      'Status' => 
                      array (
                        'description' => '子订单状态',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TRADE_FINISHED',
                      ),
                      'RefundStatus' => 
                      array (
                        'description' => '退款状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRefundStatus',
                      ),
                      'Feature' => 
                      array (
                        'description' => '扩展属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"扩展属性1\\":\\"featureData1\\",\\"扩展属性2\\":\\"featureData2\\"}',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => true,
                ),
              ),
              'required' => true,
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Success' => 
              array (
                'description' => '结果 true/false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '请求状态码',
                'type' => 'string',
                'example' => '200/400...',
              ),
              'ErrorCode' => 
              array (
                'description' => '异常码',
                'type' => 'string',
                'example' => 'testErrorCode',
              ),
              'ErrorMessage' => 
              array (
                'description' => '异常信息',
                'type' => 'string',
                'example' => 'testErrorMessage',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": \\"200/400...\\",\\n  \\"ErrorCode\\": \\"testErrorCode\\",\\n  \\"ErrorMessage\\": \\"testErrorMessage\\"\\n}","type":"json"}]',
      'title' => '批量保存订单',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'quicka.cn-shenzhen.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'quicka.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'quicka.cn-shanghai.aliyuncs.com',
    ),
  ),
);
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'retailadvqa',
        'version' => '2023-04-17',
    ],
    'directories' => [
        [
            'id' => 182071,
            'title' => '全域会员OpenApi',
            'type' => 'directory',
            'children' => [
                'EditMemberBasicInfo',
                'CalculateMemberLevel',
                'MemberAccountDetailPageQuery',
                'SyncMemberBehaviorInfo',
                'QueryMemberBasicInfo',
                'MemberPointChange',
                'SyncCardInfo',
                'AddMemberBasicInfo',
                'BatchSaveOrderPop',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EditMemberBasicInfo' => [
            'summary' => '会员信息编辑API。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '商户ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1230094',
                            ],
                            'PlatformType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'TAOBAO',
                            ],
                            'Mobile' => [
                                'description' => '手机号',
                                'type' => 'string',
                                'required' => true,
                                'example' => '***********',
                            ],
                            'MemberNickName' => [
                                'description' => '会员昵称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxxx',
                            ],
                            'MemberName' => [
                                'description' => '会员名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '杨x',
                            ],
                            'Birthday' => [
                                'description' => '生日',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2024-06-20',
                            ],
                            'Country' => [
                                'description' => '国家',
                                'type' => 'string',
                                'required' => false,
                                'example' => '中国',
                            ],
                            'Province' => [
                                'description' => '省份',
                                'type' => 'string',
                                'required' => false,
                                'example' => '山东省',
                            ],
                            'City' => [
                                'description' => '城市',
                                'type' => 'string',
                                'required' => false,
                                'example' => '青岛市',
                            ],
                            'Area' => [
                                'description' => '地区',
                                'type' => 'string',
                                'required' => false,
                                'example' => '小岛区',
                            ],
                            'Sex' => [
                                'description' => '性别（男、女、未知）',
                                'type' => 'string',
                                'required' => false,
                                'example' => '男',
                            ],
                            'Email' => [
                                'description' => '邮箱',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxx.com',
                            ],
                            'Avatar' => [
                                'description' => '头像',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxx.jpg',
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
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '查询是否成功：'."\n"
                                    .'true：成功                              '."\n"
                                    .'false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError',
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空'."\n",
                            ],
                            'Message' => [
                                'description' => '消息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
            'title' => '会员信息编辑API',
            'description' => '会员信息编辑',
        ],
        'CalculateMemberLevel' => [
            'summary' => '会员等级初始化计算。',
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
                    'name' => 'Body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CurrentGrade' => [
                                'description' => '会员等级',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'CurrentGradeName' => [
                                'description' => '等级名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => '黄金',
                            ],
                            'MemberId' => [
                                'description' => '会员ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4000006009418358',
                            ],
                            'OpenMerchantId' => [
                                'description' => '商户ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1230094',
                            ],
                            'PlatformType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'TAOBAO',
                            ],
                            'Score' => [
                                'description' => '积分',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0',
                            ],
                            'SerialNo' => [
                                'description' => '操作序列号',
                                'type' => 'string',
                                'required' => true,
                                'example' => '0235b7f20a11de9e2bf4c3494b6d998d',
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
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '查询是否成功：'."\n"
                                    .'true：成功。                                 '."\n"
                                    .'false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息，请求异常时返回。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空'."\n",
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Grade' => [
                                'description' => '会员等级',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'OuterMemberId' => [
                                'description' => '外部会员id',
                                'type' => 'string',
                                'example' => '6062f9067f170700a2e7ef5a',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Grade\\": \\"1\\",\\n  \\"OuterMemberId\\": \\"6062f9067f170700a2e7ef5a\\"\\n}","type":"json"}]',
            'title' => '会员等级初始化计算',
        ],
        'MemberAccountDetailPageQuery' => [
            'summary' => '积分明细查询。',
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
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '加密商家ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'PlatFormType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => '如：FENGXUAN',
                            ],
                            'OuterMemberId' => [
                                'description' => '商家会员ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'WMS_36606164948078_23218019',
                            ],
                            'AccountType' => [
                                'description' => '账号类型（20-积分；30-成长值）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enumValueTitles' => [
                                    20 => '积分',
                                    30 => '成长值',
                                ],
                                'example' => '20'."\n",
                            ],
                            'StartTime' => [
                                'description' => '查询起始时间：2011-09-01 00:00:00',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2011-09-01 00:00:00'."\n"
                                    ."\n",
                            ],
                            'EndTime' => [
                                'description' => '查询结束时间：2011-11-30 23:59:59',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2011-09-02 00:00:00'."\n"
                                    ."\n",
                            ],
                            'Page' => [
                                'description' => '分页页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量，默认10，最大1000',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
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
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => 'TotalCount本次请求条件下的数据总量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5000',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '查询是否成功：'."\n"
                                    .'true：成功。                                '."\n"
                                    .'false：失败。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError',
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息，请求异常时返回。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空',
                            ],
                            'Data' => [
                                'description' => '明细列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'OpenMerchantId' => [
                                            'description' => '加密商家ID',
                                            'type' => 'string',
                                            'example' => '750cff00c3e0996d220ac2861dafdfadsf'."\n",
                                        ],
                                        'OuterMemberId' => [
                                            'description' => '商家会员ID',
                                            'type' => 'string',
                                            'example' => 'MEMBER_fc498a12edd84dafd',
                                        ],
                                        'AccountType' => [
                                            'description' => '账号类型（20-积分；30-成长值）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'OperateType' => [
                                            'description' => '操作类型(1-增加2-减少)',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'DetailValue' => [
                                            'description' => '积分/成长值变更数值',
                                            'type' => 'string',
                                            'example' => '20',
                                        ],
                                        'AccountBalance' => [
                                            'description' => '变更后积分',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'ChannelCode' => [
                                            'description' => '渠道Code',
                                            'type' => 'string',
                                            'example' => '如：alipay',
                                        ],
                                        'ActivityType' => [
                                            'description' => '活动类型',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '示例值：'."\n"
                                                .'订单/活动/抽奖/…',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '示例值：'."\n"
                                                .'2011-09-01 00:00:00',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改日期',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '示例值：'."\n"
                                                .'2011-09-01 00:00:00',
                                        ],
                                        'Remark' => [
                                            'description' => '备注。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '...',
                                        ],
                                        'Extra' => [
                                            'description' => '其他',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '...',
                                        ],
                                    ],
                                    'required' => true,
                                ],
                                'required' => false,
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 5000,\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\",\\n  \\"Data\\": [\\n    {\\n      \\"OpenMerchantId\\": \\"750cff00c3e0996d220ac2861dafdfadsf\\\\n\\",\\n      \\"OuterMemberId\\": \\"MEMBER_fc498a12edd84dafd\\",\\n      \\"AccountType\\": 20,\\n      \\"OperateType\\": \\"1\\",\\n      \\"DetailValue\\": \\"20\\",\\n      \\"AccountBalance\\": \\"100\\",\\n      \\"ChannelCode\\": \\"如：alipay\\",\\n      \\"ActivityType\\": \\"示例值：\\\\n订单/活动/抽奖/…\\",\\n      \\"GmtCreate\\": \\"示例值：\\\\n2011-09-01 00:00:00\\",\\n      \\"GmtModified\\": \\"示例值：\\\\n2011-09-01 00:00:00\\",\\n      \\"Remark\\": \\"...\\",\\n      \\"Extra\\": \\"...\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '积分明细查询',
        ],
        'SyncMemberBehaviorInfo' => [
            'summary' => '保存会员行为信息。',
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
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '加密商家ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'PlatFormType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => '如：FENGXUAN',
                            ],
                            'OuterMemberId' => [
                                'description' => '商家会员ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'WMS_36606164948078_23218019',
                            ],
                            'ActionType' => [
                                'description' => '行为类型：（sign-签到medal-勋章questionnaire-问卷）',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'questionnaire' => 'questionnaire',
                                    'sign' => 'sign',
                                    'medal' => 'medal',
                                ],
                                'example' => 'sign',
                            ],
                            'ActionSubType' => [
                                'description' => '行为子类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => '...',
                            ],
                            'ActionStartDate' => [
                                'description' => '行为产生日期',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-01-01 00:00:00',
                            ],
                            'ActionEndDate' => [
                                'description' => '行为结束日期',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-01-01 00:00:00',
                            ],
                            'ActionResult' => [
                                'description' => '行为结果：ture/false',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true'."\n",
                            ],
                            'ActionDuration' => [
                                'description' => '持续时间：秒',
                                'type' => 'string',
                                'required' => false,
                                'example' => '18',
                            ],
                            'Extra' => [
                                'description' => '其他',
                                'type' => 'string',
                                'required' => false,
                                'example' => '...',
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
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '是否成功：'."\n"
                                    .'true：成功                              '."\n"
                                    .'false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\"\\n}","type":"json"}]',
            'title' => '保存会员行为信息',
        ],
        'QueryMemberBasicInfo' => [
            'summary' => '查询会员基础信息。',
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
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '商家加密品牌 ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'PlatFormType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'FENGXUAN',
                            ],
                            'Type' => [
                                'title' => '1-渠道OpenId'."\0".'，2-手机号，3-外部会员id',
                                'description' => '查询类型，支持使用会员id/手机号/渠道openId查询。枚举值：'."\n"
                                    .'1-ChannelOpenId，仅支持ChannelCode为alipay/wechat时，ChannelOpenId'."\n"
                                    .'必填，'."\n"
                                    .'2-mobile，mobile必填'."\n"
                                    .'3-OuterMemberId，OuterMemberId必填',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => false,
                                'enumValueTitles' => [
                                    1 => 'ChannelOpenId',
                                    'Mobile',
                                    'OuterMemberId',
                                ],
                                'example' => '1',
                            ],
                            'OuterMemberId' => [
                                'description' => '商家会员ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'WMS_36606164948078_23218019',
                            ],
                            'Mobile' => [
                                'description' => '手机号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '18888889999',
                            ],
                            'ChannelCode' => [
                                'title' => 'wechat'."\0".'-微信，alipay'."\0".'-支付宝',
                                'description' => '渠道Code',
                                'type' => 'string',
                                'required' => false,
                                'example' => '如：alipay',
                            ],
                            'ChannelOpenId' => [
                                'description' => '渠道openId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '750cff00c3e099',
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
                        'description' => '响应参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '是否调用成功。true：表示调用成功。                                 false：表示调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息，请求异常时返回。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空',
                            ],
                            'Data' => [
                                'description' => '请求接口返回的数据，会员信息',
                                'type' => 'object',
                                'properties' => [
                                    'OpenMerchantId' => [
                                        'description' => '加密商家ID',
                                        'type' => 'string',
                                        'example' => '750cff00c3e0996d220ac2861dafdfadsf'."\n",
                                    ],
                                    'OuterMemberId' => [
                                        'description' => '商家会员ID',
                                        'type' => 'string',
                                        'example' => 'MEMBER_fc498a12edd84dafd',
                                    ],
                                    'MemberName' => [
                                        'description' => '会员名称。',
                                        'type' => 'string',
                                        'example' => '匿名会员',
                                    ],
                                    'Mobile' => [
                                        'description' => '手机号',
                                        'type' => 'string',
                                        'example' => '13999999999',
                                    ],
                                    'Sex' => [
                                        'description' => '性别（男、女）',
                                        'type' => 'string',
                                        'example' => '男',
                                    ],
                                    'Birthday' => [
                                        'description' => '生日',
                                        'type' => 'string',
                                        'example' => '1992-04-17',
                                    ],
                                    'Country' => [
                                        'description' => '国籍',
                                        'type' => 'string',
                                        'example' => '中国',
                                    ],
                                    'Province' => [
                                        'description' => '省份',
                                        'type' => 'string',
                                        'example' => '浙江',
                                    ],
                                    'City' => [
                                        'description' => '城市',
                                        'type' => 'string',
                                        'example' => '杭州',
                                    ],
                                    'Email' => [
                                        'description' => '邮箱',
                                        'type' => 'string',
                                        'example' => 'xxx@xxx.com',
                                    ],
                                    'Avatar' => [
                                        'description' => '头像',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'https://tfs.alipayobjects.com/images/partner/TB1aWA7Xv5GDuNjHvSCXXczuXXa',
                                    ],
                                    'LevelNum' => [
                                        'description' => '等级编号',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'LevelName' => [
                                        'description' => '会员等级',
                                        'type' => 'string',
                                        'example' => 'VIP0',
                                    ],
                                    'Points' => [
                                        'description' => '会员成长值',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                    'Score' => [
                                        'description' => '会员积分',
                                        'type' => 'string',
                                        'example' => '73',
                                    ],
                                    'Extra' => [
                                        'description' => '其他',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '...',
                                    ],
                                    'Area' => [
                                        'description' => '地区',
                                        'type' => 'string',
                                        'example' => '余杭',
                                    ],
                                    'MemberNickName' => [
                                        'description' => '会员昵称',
                                        'type' => 'string',
                                        'example' => 'aaa',
                                    ],
                                    'NearExpiredScore' => [
                                        'description' => '临期积分',
                                        'type' => 'string',
                                        'example' => '0',
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
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\",\\n  \\"Data\\": {\\n    \\"OpenMerchantId\\": \\"750cff00c3e0996d220ac2861dafdfadsf\\\\n\\",\\n    \\"OuterMemberId\\": \\"MEMBER_fc498a12edd84dafd\\",\\n    \\"MemberName\\": \\"匿名会员\\",\\n    \\"Mobile\\": \\"13999999999\\",\\n    \\"Sex\\": \\"男\\",\\n    \\"Birthday\\": \\"1992-04-17\\",\\n    \\"Country\\": \\"中国\\",\\n    \\"Province\\": \\"浙江\\",\\n    \\"City\\": \\"杭州\\",\\n    \\"Email\\": \\"xxx@xxx.com\\",\\n    \\"Avatar\\": \\"https://tfs.alipayobjects.com/images/partner/TB1aWA7Xv5GDuNjHvSCXXczuXXa\\",\\n    \\"LevelNum\\": \\"1\\",\\n    \\"LevelName\\": \\"VIP0\\",\\n    \\"Points\\": \\"100\\",\\n    \\"Score\\": \\"73\\",\\n    \\"Extra\\": \\"...\\",\\n    \\"Area\\": \\"余杭\\",\\n    \\"MemberNickName\\": \\"aaa\\",\\n    \\"NearExpiredScore\\": \\"0\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询会员基础信息',
        ],
        'MemberPointChange' => [
            'summary' => '会员积分变更。',
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
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '商家加密品牌 ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'PlatFormType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'FENGXUAN',
                            ],
                            'OuterMemberId' => [
                                'description' => '商家会员ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'WMS_36606164948078_23218019',
                            ],
                            'Quantity' => [
                                'description' => '积分/成长值变更数值',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'AccountType' => [
                                'description' => '账户类型：20-积分;30-成长值',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    20 => '积分',
                                    30 => '成长值',
                                ],
                                'example' => '20',
                            ],
                            'OperateType' => [
                                'description' => '变更类型：1-增加，2-扣减',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    1 => '增加',
                                    '扣减',
                                ],
                                'example' => '1',
                            ],
                            'SerialNo' => [
                                'description' => '操作序列号',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4LJDNJH9JUX48L41',
                            ],
                            'ChannelCode' => [
                                'description' => '渠道Code',
                                'type' => 'string',
                                'required' => false,
                                'example' => '如：alipay',
                            ],
                            'Extra' => [
                                'description' => '其他',
                                'type' => 'string',
                                'required' => false,
                                'example' => '""',
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
                        'description' => '响应参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B2CD5682-12C0-51A7-82FC-1D36091CADAD',
                            ],
                            'Success' => [
                                'description' => '是否成功：'."\n"
                                    .'true：成功                              '."\n"
                                    .'false：失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息，请求异常时返回。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空'."\n",
                            ],
                            'AccountBalance' => [
                                'description' => '账户余额。',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'LevelName' => [
                                'description' => '会员等级',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2CD5682-12C0-51A7-82FC-1D36091CADAD\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"AccountBalance\\": \\"100\\",\\n  \\"LevelName\\": \\"12\\"\\n}","type":"json"}]',
            'title' => '会员积分变更',
        ],
        'SyncCardInfo' => [
            'summary' => '卡券信息同步。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'description' => '商家加密品牌 ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'TransferId' => [
                                'description' => '赠送单号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3eecd2b8a6f946ca',
                            ],
                            'OrderId' => [
                                'description' => '购买订单号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '223332140970453',
                            ],
                            'BuyerId' => [
                                'description' => '购买用户ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1236437142867408',
                            ],
                            'Recipient' => [
                                'description' => '收礼人',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '收礼人ID',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '1000030855004',
                                    ],
                                    'Phone' => [
                                        'description' => '收礼人手机号',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '18899998888',
                                    ],
                                    'OpenId' => [
                                        'description' => 'openId',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '1179ead68b3833fea61a802ddb1dd3ac',
                                    ],
                                    'Nickname' => [
                                        'description' => '收礼人昵称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '大大',
                                    ],
                                    'HeaderImg' => [
                                        'description' => '头像',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'https://xxx/1.jpg',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Gifters' => [
                                'description' => '赠礼人',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '赠礼人ID',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '1000030820003',
                                    ],
                                    'Phone' => [
                                        'description' => '赠礼人手机号',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '13277778888',
                                    ],
                                    'OpenId' => [
                                        'description' => 'openId',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '82ace612cd377134d597e32e91562caf',
                                    ],
                                    'Nickname' => [
                                        'description' => '赠礼人昵称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '小小',
                                    ],
                                    'HeaderImg' => [
                                        'description' => '头像',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'https://xxx/2.jpg',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Status' => [
                                'description' => '状态，1-未领取2-已领取3-已退卡4-已失效',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    1 => '未领取',
                                    '已领取',
                                    '已退卡',
                                    '已失效',
                                ],
                                'example' => '1',
                            ],
                            'Theme' => [
                                'description' => '礼品卡名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '礼品a',
                            ],
                            'TransferredAt' => [
                                'description' => '赠送时间，格式:yyyy-MM-dd HH:mm:ss',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-05-12 00:00:00',
                            ],
                            'ReceivedAt' => [
                                'description' => '接收时间，格式:yyyy-MM-dd HH:mm:ss',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-05-12 00:00:00',
                            ],
                            'PresentDetail' => [
                                'title' => '商品详情',
                                'description' => '商品详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '商品详情信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ItemId' => [
                                            'title' => '商品ID',
                                            'description' => '商品ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '608356956277',
                                        ],
                                        'Price' => [
                                            'description' => '商品金额',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'example' => '89.5',
                                        ],
                                        'Name' => [
                                            'title' => '商品名称',
                                            'description' => '商品名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'A商品',
                                        ],
                                        'Count' => [
                                            'description' => '商品数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                            'example' => '0',
                                        ],
                                        'SkuId' => [
                                            'title' => 'SKU',
                                            'description' => 'SKU',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '4747141632519',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'OccurredAt' => [
                                'description' => '系统记录时间，格式:yyyy-MM-dd HH:mm:ss',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-05-12 00:00:00',
                            ],
                            'Extra' => [
                                'description' => '其他',
                                'type' => 'string',
                                'required' => false,
                                'example' => '""',
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
                                'description' => '请求id，每次请求都是唯一值，便于后续排查问题',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '查询是否成功：'."\n"
                                    .'true：成功                             '."\n"
                                    .'false：失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息，请求异常时返回。',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空'."\n",
                            ],
                            'Message' => [
                                'description' => '消息',
                                'type' => 'string',
                                'example' => 'success',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": \\"true\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '同步卡券信息',
        ],
        'AddMemberBasicInfo' => [
            'summary' => '开放平台同步会员基础信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'OpenMerchantId' => [
                                'title' => '开放商家加密ID',
                                'description' => '商家加密品牌 ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '750cff00c3e0996d220ac2861dafdfadsf',
                            ],
                            'PlatFormType' => [
                                'description' => '平台类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'FENGXUAN',
                            ],
                            'MemberName' => [
                                'title' => '姓名',
                                'description' => '会员名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '核桃',
                            ],
                            'MemberNickName' => [
                                'description' => '会员昵称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'aaa',
                            ],
                            'Mobile' => [
                                'title' => '手机号',
                                'description' => '手机号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '17716699087',
                            ],
                            'Sex' => [
                                'title' => '性别',
                                'description' => '性别',
                                'type' => 'string',
                                'required' => false,
                                'example' => '男/女',
                            ],
                            'Birthday' => [
                                'title' => '生日',
                                'description' => '生日',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-09-08',
                            ],
                            'Country' => [
                                'description' => '国籍',
                                'type' => 'string',
                                'required' => false,
                                'example' => '中国',
                            ],
                            'Province' => [
                                'title' => '省份',
                                'description' => '省份',
                                'type' => 'string',
                                'required' => false,
                                'example' => '浙江省',
                            ],
                            'City' => [
                                'title' => '城市',
                                'description' => '城市',
                                'type' => 'string',
                                'required' => false,
                                'example' => '杭州市',
                            ],
                            'Area' => [
                                'description' => '地区',
                                'type' => 'string',
                                'required' => false,
                                'example' => '西湖区',
                            ],
                            'Email' => [
                                'description' => '邮箱',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxx@email.com',
                            ],
                            'Avatar' => [
                                'description' => '头像',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://static-legacy.dingtalk.com/media/lALPD1IyQHXWp0LMusy6_186_186.png',
                            ],
                            'Channels' => [
                                'description' => '渠道',
                                'type' => 'array',
                                'items' => [
                                    'description' => '渠道对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'ChannelCode' => [
                                            'description' => '渠道Code',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'alipay',
                                        ],
                                        'AppId' => [
                                            'description' => '应用ID或者小程序ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '4958916073165425157001',
                                        ],
                                        'ChannelOpenId' => [
                                            'description' => '渠道openId',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'openId',
                                        ],
                                        'ChannelUnionId' => [
                                            'description' => '渠道UnionId',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'UnionId',
                                        ],
                                        'Scene' => [
                                            'title' => '场景',
                                            'description' => '场景',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '如:xxx活动',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                                'maxItems' => 100,
                            ],
                            'GmtCreate' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-02-17 00:00:00',
                            ],
                            'Extra' => [
                                'title' => '其他',
                                'description' => '其他',
                                'type' => 'string',
                                'required' => false,
                                'example' => '""',
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
                        'description' => '响应参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID，唯一标示',
                                'description' => '请求ID，唯一标示',
                                'type' => 'string',
                                'example' => '1DEFC4F1-AF11-5A3C-93B9-2880768DA218'."\n",
                            ],
                            'Success' => [
                                'description' => '查询是否成功：'."\n"
                                    .'true：成功                              '."\n"
                                    .'false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Lydaas.QuickMember.SystemError'."\n",
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '系统错误: openMerchantId 不能为空'."\n",
                            ],
                            'OuterMemberId' => [
                                'title' => '会员id',
                                'description' => '会员id',
                                'type' => 'string',
                                'example' => 'WMS_36606164948078_23218019',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1DEFC4F1-AF11-5A3C-93B9-2880768DA218\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Lydaas.QuickMember.SystemError\\\\n\\",\\n  \\"ErrorMessage\\": \\"系统错误: openMerchantId 不能为空\\\\n\\",\\n  \\"OuterMemberId\\": \\"WMS_36606164948078_23218019\\"\\n}","type":"json"}]',
            'title' => '同步会员基础信息',
        ],
        'BatchSaveOrderPop' => [
            'summary' => 'null',
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
                    'name' => 'Orders',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '订单列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '模型',
                            'type' => 'object',
                            'properties' => [
                                'ChannelCode' => [
                                    'description' => '渠道编码',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'doudian',
                                ],
                                'ChannelOpenId' => [
                                    'description' => '渠道用户openid',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '1699b2b974d444e3aa489f96457ef204',
                                ],
                                'OpenOrderId' => [
                                    'description' => '订单编号',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'testOpenOrderId',
                                ],
                                'buyerOpenUid' => [
                                    'description' => '买家id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testBuyId',
                                ],
                                'OpenMerchantId' => [
                                    'description' => '品牌id',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'testOpenMerchantId',
                                ],
                                'PlatformType' => [
                                    'description' => '平台类型',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'DOUDIAN',
                                ],
                                'OrderPayment' => [
                                    'description' => '支付金额(单位:分)',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '10000',
                                ],
                                'TotalFee' => [
                                    'description' => '订单金额（单位：分）',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '10000',
                                ],
                                'OrderCreateTime' => [
                                    'description' => '下单时间',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '2023-12-20 12:12:12',
                                ],
                                'PayTime' => [
                                    'description' => '支付时间',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2023-12-20 12:12:12'."\n",
                                ],
                                'EndTime' => [
                                    'description' => '结束时间',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2023-12-20 12:12:12'."\n",
                                ],
                                'ShopId' => [
                                    'description' => '店铺id',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'testShopId',
                                ],
                                'Status' => [
                                    'description' => '订单状态',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'TRADE_FINISHED',
                                ],
                                'Feature' => [
                                    'description' => '扩展属性',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{\\"扩展属性1\\":\\"featureData1\\",\\"扩展属性2\\":\\"featureData2\\"}',
                                ],
                                'SubOrderModelList' => [
                                    'description' => '子单信息',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '模型',
                                        'type' => 'object',
                                        'properties' => [
                                            'OpenSubOrderId' => [
                                                'description' => '子订单编号',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'testSubOrderId',
                                            ],
                                            'TotalFee' => [
                                                'description' => '订单金额（单位：分）',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => '10000',
                                            ],
                                            'OrderPayment' => [
                                                'description' => '支付金额（单位：分）',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => '10000',
                                            ],
                                            'ProductAmount' => [
                                                'description' => '商品数量',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => '1',
                                            ],
                                            'ProductId' => [
                                                'description' => '商品Id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'testProductld',
                                            ],
                                            'OutProductId' => [
                                                'description' => '外部商品id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'testOutProductId',
                                            ],
                                            'ProductName' => [
                                                'description' => '商品名',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'testProductName',
                                            ],
                                            'Status' => [
                                                'description' => '子订单状态',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'TRADE_FINISHED',
                                            ],
                                            'RefundStatus' => [
                                                'description' => '退款状态',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'testRefundStatus',
                                            ],
                                            'Feature' => [
                                                'description' => '扩展属性',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '{\\"扩展属性1\\":\\"featureData1\\",\\"扩展属性2\\":\\"featureData2\\"}',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => true,
                                ],
                            ],
                            'required' => true,
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
                                'example' => 'testRequestId',
                            ],
                            'Success' => [
                                'description' => '结果 true/false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => '请求状态码',
                                'type' => 'string',
                                'example' => '200/400...',
                            ],
                            'ErrorCode' => [
                                'description' => '异常码',
                                'type' => 'string',
                                'example' => 'testErrorCode',
                            ],
                            'ErrorMessage' => [
                                'description' => '异常信息',
                                'type' => 'string',
                                'example' => 'testErrorMessage',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": \\"200/400...\\",\\n  \\"ErrorCode\\": \\"testErrorCode\\",\\n  \\"ErrorMessage\\": \\"testErrorMessage\\"\\n}","type":"json"}]',
            'title' => '批量保存订单',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'quicka.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'quicka.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'quicka.cn-shanghai.aliyuncs.com',
        ],
    ],
];
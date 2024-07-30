<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'companyreg',
        'version' => '2020-03-06',
    ],
    'directories' => [
        [
            'id' => 146792,
            'title' => '计量推送',
            'type' => 'directory',
            'children' => [
                'PutMeasureReadyFlag',
                'PutMeasureData',
                'QueryBagRemaining',
            ],
        ],
        [
            'id' => 146796,
            'title' => 'ESP',
            'type' => 'directory',
            'children' => [
                'ListUserIntentions',
                'ListUserIntentionNotes',
                'ListIntentionNote',
                'ListUserProduceOperateLogs',
                'GetAlipayUrl',
                'DescribePartnerConfig',
                'GenerateUploadFilePolicy',
                'CreateProduceForPartner',
                'ListProduceAuthorization',
                'CloseIntentionForPartner',
                'CreateBusinessOpportunity',
                'ListUserDetailSolutions',
                'ListUserSolutions',
                'OperateProduceForPartner',
                'RejectSolution',
                'RejectUserSolution',
                'QueryPartnerIntentionList',
                'SubmitSolution',
                'ReleaseProduceAuthorization',
                'QueryPartnerProduceList',
                'QueryInstance',
                'QueryUserNeedAuth',
                'BindProduceAuthorization',
                'SubmitIntentionNote',
                'CloseUserIntention',
            ],
        ],
        [
            'id' => 146823,
            'title' => '玄坛',
            'type' => 'directory',
            'children' => [
                'RecordPostBack',
                'QueryAvailableNumbers',
                'StartBackToBackCall',
                'TransferIntentionOwner',
                'TransferProduceOwner',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'PutMeasureReadyFlag' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.bookkeeping',
                    ],
                ],
                [
                    'name' => 'DataType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据维度，包括：'."\n"
                            .'1. 原始 r/raw'."\n"
                            .'2. 小时 h/hour'."\n"
                            .'3. 天 d/day'."\n"
                            .'4. 月 m/month',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期开始时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1634969692175',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期结束时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1634784240000',
                    ],
                ],
                [
                    'name' => 'ReadyFlag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送标记：开始推送-0；完成推送出账-1',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\"\\n}","type":"json"}]',
            'title' => '推送计量标记',
            'summary' => '推送计量标记。',
        ],
        'PutMeasureData' => [
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
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.sp',
                    ],
                ],
                [
                    'name' => 'DataType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1640400574804',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1634019240000',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '推送数据',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D\\"\\n}","type":"json"}]',
            'title' => '推送计量数据',
            'summary' => '推送计量数据。',
        ],
        'QueryBagRemaining' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.hightech',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '资源包剩余量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 0,\\n  \\"RequestId\\": \\"6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D\\"\\n}","type":"json"}]',
            'title' => '查询资源包剩余量',
            'summary' => '查询资源包剩余量。',
        ],
        'ListUserIntentions' => [
            'summary' => '查询用户需求单列表。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.companyreg_cloud',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '37',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页属性，每页显示条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'SortFiled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UpdateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向：-asc：升序-desc：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求BizId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I20210917170147000001',
                    ],
                ],
                [
                    'name' => 'Area',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域',
                        'type' => 'string',
                        'required' => false,
                        'example' => '长沙市',
                    ],
                ],
                [
                    'name' => 'BizTypes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.bookkeeping,esp.bookkeeping_cloud',
                    ],
                ],
                [
                    'name' => 'WithExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页属性，每页显示条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'TotalItemNum' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Data' => [
                                'description' => '需求列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-01-24 15:43:58',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号',
                                            'type' => 'string',
                                            'example' => '18000000000',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-01-24 15:43:58',
                                        ],
                                        'UserId' => [
                                            'description' => '用户uid',
                                            'type' => 'string',
                                            'example' => '1219541161213057',
                                        ],
                                        'ContactName' => [
                                            'description' => '联系人',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'BizId' => [
                                            'description' => '业务ID',
                                            'type' => 'string',
                                            'example' => 'I100000033443',
                                        ],
                                        'Area' => [
                                            'description' => '区域',
                                            'type' => 'string',
                                            'example' => '北京市',
                                        ],
                                        'Reason' => [
                                            'description' => '原因',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.lgo',
                                        ],
                                        'Ext' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPageNum\\": 1,\\n  \\"TotalPageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"TotalItemNum\\": 2,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"UpdateTime\\": 0,\\n      \\"Description\\": \\"无\\",\\n      \\"Mobile\\": \\"18000000000\\",\\n      \\"CreateTime\\": 0,\\n      \\"UserId\\": \\"1219541161213057\\",\\n      \\"ContactName\\": \\"张三\\",\\n      \\"BizId\\": \\"I100000033443\\",\\n      \\"Area\\": \\"北京市\\",\\n      \\"Reason\\": \\"无\\",\\n      \\"BizType\\": \\"esp.lgo\\",\\n      \\"Ext\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询用户需求单列表',
        ],
        'ListUserIntentionNotes' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.beian_assist',
                    ],
                ],
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20210912102942000001',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'description' => '分页页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '5D8BD6E8-28D9-5451-BBA1-3D3DCA6971F6',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'TotalItemNum' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8',
                            ],
                            'PageSize' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Note' => [
                                            'description' => '小记信息',
                                            'type' => 'string',
                                            'example' => '测试',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2022-01-25 10:21:38',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"5D8BD6E8-28D9-5451-BBA1-3D3DCA6971F6\\",\\n  \\"Success\\": true,\\n  \\"TotalItemNum\\": 8,\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"Note\\": \\"测试\\",\\n      \\"CreateTime\\": \\"2022-01-25 10:21:38\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '用户查询需求小记',
            'summary' => '用户查询需求小记。',
        ],
        'ListIntentionNote' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640456765459',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1631635199999',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20210420142416000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页显示条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D',
                            ],
                            'TotalItemNum' => [
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'Data' => [
                                'description' => '小记列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '类型',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Note' => [
                                            'description' => '小记内容',
                                            'type' => 'string',
                                            'example' => '测试',
                                        ],
                                        'Source' => [
                                            'description' => '来源',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2022-01-25 10:21:38',
                                        ],
                                        'IntentionBizId' => [
                                            'description' => '需求ID',
                                            'type' => 'string',
                                            'example' => 'I20210420142416000001',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPageNum\\": 0,\\n  \\"TotalPageNum\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D\\",\\n  \\"TotalItemNum\\": 3,\\n  \\"Data\\": [\\n    {\\n      \\"Type\\": \\"1\\",\\n      \\"Note\\": \\"测试\\",\\n      \\"Source\\": 1,\\n      \\"CreateTime\\": \\"2022-01-25 10:21:38\\",\\n      \\"IntentionBizId\\": \\"I20210420142416000001\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询需求小记',
            'summary' => '查询需求小记。',
        ],
        'ListUserProduceOperateLogs' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.wangwen',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P20210928095324000002',
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
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0DCBE2FF-2DFC-56DC-9A15-BDF27B7FFB1B',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'TotalItemNum' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '23',
                            ],
                            'Data' => [
                                'description' => '操作日志列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OperateTime' => [
                                            'description' => '操作时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1695324000002',
                                        ],
                                        'OperateUserType' => [
                                            'description' => '操作类型',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'BizId' => [
                                            'description' => '交付单ID',
                                            'type' => 'string',
                                            'example' => 'P20210928095324000002',
                                        ],
                                        'OperateName' => [
                                            'description' => '操作人名称',
                                            'type' => 'string',
                                            'example' => '系统',
                                        ],
                                        'BizStatus' => [
                                            'description' => '业务状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'ToBizStatus' => [
                                            'description' => '变更后状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '35',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.wangwen',
                                        ],
                                        'Note' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"0DCBE2FF-2DFC-56DC-9A15-BDF27B7FFB1B\\",\\n  \\"Success\\": true,\\n  \\"TotalItemNum\\": 6,\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 23,\\n  \\"Data\\": [\\n    {\\n      \\"OperateTime\\": 1695324000002,\\n      \\"OperateUserType\\": \\"user\\",\\n      \\"BizId\\": \\"P20210928095324000002\\",\\n      \\"OperateName\\": \\"系统\\",\\n      \\"BizStatus\\": 10,\\n      \\"ToBizStatus\\": 35,\\n      \\"BizType\\": \\"esp.wangwen\\",\\n      \\"Note\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '用户查询交付单操作日志',
            'summary' => '用户查询交付单操作日志。',
        ],
        'GetAlipayUrl' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.beian_assist',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端类型：网页端-web，手机端-app，默认网页端',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'web',
                        'maxLength' => 19,
                        'minLength' => 0,
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单号',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '206129201170307',
                    ],
                ],
                [
                    'name' => 'ReturnUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://nfyt.lzsgtghchy.com:502/sigin/',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '支付链接',
                                'type' => 'string',
                                'example' => 'https://',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"https://\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\"\\n}","type":"json"}]',
            'title' => '获取订单的支付宝支付链接',
            'summary' => '获取订单的支付宝支付链接。',
        ],
        'DescribePartnerConfig' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'PartnerCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务商code',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'jinsan',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.wangwen',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PartnerName' => [
                                'description' => '合作伙伴名称',
                                'type' => 'string',
                                'example' => '北京科技有限公司',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '8179A0B3-A5D3-52F4-8845-F0ABC3CC6783',
                            ],
                            'PartnerCode' => [
                                'description' => '伙伴关系编码',
                                'type' => 'string',
                                'example' => 'jinsan',
                            ],
                            'Contact' => [
                                'description' => '联系方式',
                                'type' => 'string',
                                'example' => '{\\"channels\\":[{\\"level\\":3,\\"type\\":\\"SMS\\",\\"value\\":\\"13817600000\\"}],\\"desc\\":\\"\\",\\"name\\":\\"张三\\",\\"project\\":\\"acs_custom_1140019485546150\\",\\"userId\\":\\"1140019485546150\\"}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PartnerName\\": \\"北京科技有限公司\\",\\n  \\"RequestId\\": \\"8179A0B3-A5D3-52F4-8845-F0ABC3CC6783\\",\\n  \\"PartnerCode\\": \\"jinsan\\",\\n  \\"Contact\\": \\"{\\\\\\\\\\\\\\"channels\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"level\\\\\\\\\\\\\\":3,\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SMS\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"13817600000\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"desc\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"张三\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"project\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"acs_custom_1140019485546150\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"userId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1140019485546150\\\\\\\\\\\\\\"}\\"\\n}","type":"json"}]',
            'title' => '查询服务商配置信息',
            'summary' => '用户查询服务商配置信息。',
        ],
        'GenerateUploadFilePolicy' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'company_apply_business_license',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.isp',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '营业执照.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Signature' => [
                                'description' => '签名',
                                'type' => 'string',
                                'example' => 'jykxhmskIF24sLlxc1GafU/eQMU=',
                            ],
                            'FileUrl' => [
                                'description' => '上传文件的url',
                                'type' => 'string',
                                'example' => 'https://',
                            ],
                            'Host' => [
                                'description' => 'OSS Endpoint。',
                                'type' => 'string',
                                'example' => '//companyapply.oss-cn-zhangjiakou.aliyuncs.com/',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'EB809CAB-82F7-5843-A42F-356770CD4914',
                            ],
                            'ExpireTime' => [
                                'description' => '过期时间',
                                'type' => 'string',
                                'example' => '1638169824405',
                            ],
                            'EncodedPolicy' => [
                                'description' => 'oss上传策略',
                                'type' => 'string',
                                'example' => 'eyJleHBpcmF0aW9uIjoiMjAyMS0xMi0wNlQwNjoxOTowMi40MjdaIiwiY29uZGl0aW9ucyI6W1siZXEiLCIkYnVja2V0IiwibXNlYS1jYWlzaHVpIl1dfQ==',
                            ],
                            'FileDir' => [
                                'description' => '上传文件的路径',
                                'type' => 'string',
                                'example' => 'company_apply_card/company_change_city/1577930895198750/1638170049657',
                            ],
                            'AccessId' => [
                                'description' => 'OSSAccessKeyId',
                                'type' => 'string',
                                'example' => 'hObpgEXoca42qH3V',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The access is denied.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Signature\\": \\"jykxhmskIF24sLlxc1GafU/eQMU=\\",\\n  \\"FileUrl\\": \\"https://\\",\\n  \\"Host\\": \\"//companyapply.oss-cn-zhangjiakou.aliyuncs.com/\\",\\n  \\"RequestId\\": \\"EB809CAB-82F7-5843-A42F-356770CD4914\\",\\n  \\"ExpireTime\\": \\"1638169824405\\",\\n  \\"EncodedPolicy\\": \\"eyJleHBpcmF0aW9uIjoiMjAyMS0xMi0wNlQwNjoxOTowMi40MjdaIiwiY29uZGl0aW9ucyI6W1siZXEiLCIkYnVja2V0IiwibXNlYS1jYWlzaHVpIl1dfQ==\\",\\n  \\"FileDir\\": \\"company_apply_card/company_change_city/1577930895198750/1638170049657\\",\\n  \\"AccessId\\": \\"hObpgEXoca42qH3V\\"\\n}","type":"json"}]',
            'title' => '获取上传文件临时链接',
            'summary' => '获取上传文件临时链接。',
        ],
        'CreateProduceForPartner' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.hightech',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"consultBusiness\\":\\"自助记账咨询\\"}',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付单ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P20210301102840000001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BizId' => [
                                'description' => '交付单ID',
                                'type' => 'string',
                                'example' => 'P20210208152920000001',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The access is denied.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"BizId\\": \\"P20210208152920000001\\",\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '服务商创建交付单',
            'summary' => '服务商创建交付单。',
        ],
        'ListProduceAuthorization' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'P20210709190452000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.bookkeeping_ai',
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
                        'docRequired' => true,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10AAC56B-C512-5860-9A9E-B949431E7174',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'TotalItemNum' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '292',
                            ],
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页的大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '27',
                            ],
                            'Data' => [
                                'description' => '交付单授权记录列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '交付单授权记录',
                                    'type' => 'object',
                                    'properties' => [
                                        'AuthorizedUserId' => [
                                            'description' => '被授权人用户ID',
                                            'type' => 'string',
                                            'example' => '12195411612139999',
                                        ],
                                        'AuthorizedUserName' => [
                                            'description' => '被授权人用户名称',
                                            'type' => 'string',
                                            'example' => 'test@alibaba-inc.com',
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
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10AAC56B-C512-5860-9A9E-B949431E7174\\",\\n  \\"Success\\": true,\\n  \\"TotalItemNum\\": 292,\\n  \\"CurrentPageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 27,\\n  \\"Data\\": [\\n    {\\n      \\"AuthorizedUserId\\": \\"12195411612139999\\",\\n      \\"AuthorizedUserName\\": \\"test@alibaba-inc.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '交付单授权记录列表 ',
            'summary' => '交付单授权记录列表。',
            'description' => '交付单授权记录列表'."\n",
        ],
        'CloseIntentionForPartner' => [
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求单号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20211105230733000001',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关闭原因',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.beian_assist',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '4674B06A-B57F-5922-890C-D23D17C5BD21',
                            ],
                            'Success' => [
                                'description' => '成功状态标识',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'The access is denied.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"4674B06A-B57F-5922-890C-D23D17C5BD21\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"NoPermission\\"\\n}","type":"json"}]',
            'title' => '服务商关闭需求',
            'summary' => '服务商关闭需求。',
        ],
        'CreateBusinessOpportunity' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ContactName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '魏先生',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '18704330000',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '来源',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '官网',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.hightech',
                    ],
                ],
                [
                    'name' => 'VCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '345674',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D',
                            ],
                            'ErrorMessage' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D\\",\\n  \\"ErrorMessage\\": \\"没有权限\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '新建商机',
            'summary' => '新建商机。',
        ],
        'ListUserDetailSolutions' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I20211222161651000001',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.wangwen',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalItemNum' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '15556223433',
                                        ],
                                        'DeliveryOrderBizId' => [
                                            'description' => '交付单ID',
                                            'type' => 'string',
                                            'example' => 'P20211222161651000001',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '15556223433',
                                        ],
                                        'UserId' => [
                                            'description' => '用户UID',
                                            'type' => 'string',
                                            'example' => '1219541161213057',
                                        ],
                                        'BizId' => [
                                            'description' => '业务ID',
                                            'type' => 'string',
                                            'example' => 'S20211222161651000001',
                                        ],
                                        'PartnerCode' => [
                                            'description' => '服务商code',
                                            'type' => 'string',
                                            'example' => 'jinsan',
                                        ],
                                        'ExtInfo' => [
                                            'description' => '扩展信息',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.wangwen',
                                        ],
                                        'IntentionBizId' => [
                                            'description' => '需求ID',
                                            'type' => 'string',
                                            'example' => 'I20211222161651000001',
                                        ],
                                        'Reason' => [
                                            'description' => '原因',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'IntentionAssignBizId' => [
                                            'description' => '派单ID',
                                            'type' => 'string',
                                            'example' => 'A20211222161651000001',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPageNum\\": 5,\\n  \\"TotalPageNum\\": 1,\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalItemNum\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"UpdateTime\\": 15556223433,\\n      \\"DeliveryOrderBizId\\": \\"P20211222161651000001\\",\\n      \\"CreateTime\\": 15556223433,\\n      \\"UserId\\": \\"1219541161213057\\",\\n      \\"BizId\\": \\"S20211222161651000001\\",\\n      \\"PartnerCode\\": \\"jinsan\\",\\n      \\"ExtInfo\\": \\"{}\\",\\n      \\"BizType\\": \\"esp.wangwen\\",\\n      \\"IntentionBizId\\": \\"I20211222161651000001\\",\\n      \\"Reason\\": \\"无\\",\\n      \\"IntentionAssignBizId\\": \\"A20211222161651000001\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '用户查询方案详情',
            'summary' => '用户查询方案详情。',
        ],
        'ListUserSolutions' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I20210924151843000001',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ExistStatus',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '状态列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '状态',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页显示条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'TotalItemNum' => [
                                'description' => '总条目数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '344',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '164454443222',
                                        ],
                                        'DeliveryOrderBizId' => [
                                            'description' => '交付单ID',
                                            'type' => 'string',
                                            'example' => 'P20210924151843000001',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '164454443222',
                                        ],
                                        'UserId' => [
                                            'description' => '用户UID',
                                            'type' => 'string',
                                            'example' => '1219541161213057',
                                        ],
                                        'BizId' => [
                                            'description' => '方案ID',
                                            'type' => 'string',
                                            'example' => 'S20210924151843000001',
                                        ],
                                        'PartnerCode' => [
                                            'description' => '服务商code',
                                            'type' => 'string',
                                            'example' => 'jinsan',
                                        ],
                                        'Reason' => [
                                            'description' => '驳回原因',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'IntentionAssignBizId' => [
                                            'description' => '需求派单ID',
                                            'type' => 'string',
                                            'example' => 'A20210924151843000001',
                                        ],
                                        'IntentionBizId' => [
                                            'description' => '需求ID',
                                            'type' => 'string',
                                            'example' => 'I20210924151843000001',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.logo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPageNum\\": 8,\\n  \\"TotalPageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"TotalItemNum\\": 344,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"UpdateTime\\": 164454443222,\\n      \\"DeliveryOrderBizId\\": \\"P20210924151843000001\\",\\n      \\"CreateTime\\": 164454443222,\\n      \\"UserId\\": \\"1219541161213057\\",\\n      \\"BizId\\": \\"S20210924151843000001\\",\\n      \\"PartnerCode\\": \\"jinsan\\",\\n      \\"Reason\\": \\"无\\",\\n      \\"IntentionAssignBizId\\": \\"A20210924151843000001\\",\\n      \\"IntentionBizId\\": \\"I20210924151843000001\\",\\n      \\"BizType\\": \\"esp.logo\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询方案列表',
            'summary' => '查询方案列表。',
        ],
        'OperateProduceForPartner' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CERT_MATERIAL_SUBMITTED',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'P20210930105636000001',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"beianServiceNumber\\":\\"9969c666-0935-4c5b-8042-926ff546e39f\\"}',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.beian_assist',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D170A4BA-4528-5E07-B8D5-6449C42EC23F',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'Success' => [
                                'description' => '成功状态标识',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"D170A4BA-4528-5E07-B8D5-6449C42EC23F\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '服务商操作交付单',
            'summary' => '服务商操作交付单。',
        ],
        'RejectSolution' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SolutionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'S20200512114050000001',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '驳回原因',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '方案错误',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'ErrorCode' => [
                                'description' => '错误code',
                                'type' => 'string',
                                'example' => 'PARTNER.CONFIG.NOT.FOUND',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"ErrorCode\\": \\"PARTNER.CONFIG.NOT.FOUND\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '驳回方案',
            'summary' => '驳回方案。',
        ],
        'RejectUserSolution' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SolutionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'S20211227151912000001',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '驳回原因',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '不符合',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.companyreg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '717711FB-F887-597B-8121-B77437E89B97',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"717711FB-F887-597B-8121-B77437E89B97\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '用户驳回方案',
            'summary' => '用户驳回方案。',
        ],
        'QueryPartnerIntentionList' => [
            'summary' => '服务商查询需求单列表。',
            'methods' => [
                'get',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I20211117092704000001',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.wangwen',
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
                                'example' => '78E9DC76-7DFD-5975-99B0-4A95E8A92F5D',
                            ],
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '13',
                            ],
                            'PageSize' => [
                                'description' => '每页显示条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'TotalItemNum' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '319',
                            ],
                            'Data' => [
                                'description' => '需求单列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BizId' => [
                                            'description' => '业务ID',
                                            'type' => 'string',
                                            'example' => 'I20211117092704000001',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号',
                                            'type' => 'string',
                                            'example' => '18700000003',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.wangwen',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"78E9DC76-7DFD-5975-99B0-4A95E8A92F5D\\",\\n  \\"CurrentPageNum\\": 2,\\n  \\"TotalPageNum\\": 13,\\n  \\"PageSize\\": 20,\\n  \\"TotalItemNum\\": 319,\\n  \\"Data\\": [\\n    {\\n      \\"BizId\\": \\"I20211117092704000001\\",\\n      \\"Mobile\\": \\"18700000003\\",\\n      \\"BizType\\": \\"esp.wangwen\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '服务商查询需求单列表',
        ],
        'SubmitSolution' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20211223101045000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.wangwen',
                    ],
                ],
                [
                    'name' => 'Solution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{\\"domainCount\\":1,\\"companyArea\\":\\"广东省\\",\\"domain\\":\\"fb-link8.com\\",\\"source\\":\\"官网\\",\\"beianType\\":\\"备案服务-国内\\"}',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户UID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1219541161213057',
                    ],
                ],
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SolutionBizId' => [
                                'description' => '方案ID',
                                'type' => 'string',
                                'example' => 'S20211109140729000001',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0A3CFCF5-E0C0-5C0B-A2ED-03827F16D85F',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'ErrorCode' => [
                                'description' => '错误code',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'ConfirmUrl' => [
                                'description' => '确认链接',
                                'type' => 'string',
                                'example' => 'https://companyreg.console.aliyun.com/#/intention-notarize?Type=119&bizid=I20220114181457000001',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SolutionBizId\\": \\"S20211109140729000001\\",\\n  \\"RequestId\\": \\"0A3CFCF5-E0C0-5C0B-A2ED-03827F16D85F\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"ConfirmUrl\\": \\"https://companyreg.console.aliyun.com/#/intention-notarize?Type=119&bizid=I20220114181457000001\\"\\n}","type":"json"}]',
            'title' => '提交方案',
            'summary' => '提交方案。',
        ],
        'ReleaseProduceAuthorization' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P20211117141528000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.beian_assist',
                    ],
                ],
                [
                    'name' => 'AuthorizedUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '解绑被授权用户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1219541161213000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结果数据',
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '表示是否调用成功。true：调用成功。                                 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"ErrorCode\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '交付单解绑授权 ',
            'summary' => '交付单解绑授权。',
            'description' => '交付单解绑授权',
        ],
        'QueryPartnerProduceList' => [
            'summary' => '服务商查询交付单列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'P20211216204717000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.cdn',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
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
                                'example' => '1A13ABB5-7649-5031-B55C-D2E38F9F189D',
                            ],
                            'CurrentPageNum' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalPageNum' => [
                                'description' => '总页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页显示条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'TotalItemNum' => [
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '34',
                            ],
                            'Data' => [
                                'description' => '交付单列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BizId' => [
                                            'description' => '交付单ID',
                                            'type' => 'string',
                                            'example' => 'P20211216204717000001',
                                        ],
                                        'BizType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'esp.cdn',
                                        ],
                                        'mobile' => [
                                            'description' => '手机号',
                                            'type' => 'string',
                                            'example' => '18600000001',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A13ABB5-7649-5031-B55C-D2E38F9F189D\\",\\n  \\"CurrentPageNum\\": 1,\\n  \\"TotalPageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalItemNum\\": 34,\\n  \\"Data\\": [\\n    {\\n      \\"BizId\\": \\"P20211216204717000001\\",\\n      \\"BizType\\": \\"esp.cdn\\",\\n      \\"mobile\\": \\"18600000001\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '服务商查询交付单列表',
        ],
        'QueryInstance' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.bookkeeping',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'T20210302164856000001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '实例信息',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"{}\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\"\\n}","type":"json"}]',
            'title' => '查询凌霄订单实例',
            'summary' => '查询凌霄订单实例。',
        ],
        'QueryUserNeedAuth' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2C859C36-886C-5BE7-A606-01F38A5374D6',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'NeedAuth' => [
                                'description' => '是否需要认证',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C859C36-886C-5BE7-A606-01F38A5374D6\\",\\n  \\"Success\\": true,\\n  \\"NeedAuth\\": true\\n}","type":"json"}]',
            'title' => '是否需要实名认证',
            'summary' => '是否需要实名认证。',
        ],
        'BindProduceAuthorization' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P20210815211849000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.bookkeeping_ai',
                    ],
                ],
                [
                    'name' => 'AuthorizedUserIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '被授权人id 列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1219541161213057,1219541161213059',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '授权结果',
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'AC492C5D-29D0-5103-9271-2C3A9D99F5CA',
                            ],
                            'ErrorCode' => [
                                'description' => '错误code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '授权用户结果列表',
                                'type' => 'object',
                                'properties' => [
                                    'Message' => [
                                        'description' => '返回信息',
                                        'type' => 'string',
                                        'example' => '以上标红的不为阿里云账号',
                                    ],
                                    'Success' => [
                                        'description' => '是否成功',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'AuthorizedUserList' => [
                                        'description' => '授权用户结果记录列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '授权用户结果记录',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserName' => [
                                                    'description' => '绑定被授权用户名',
                                                    'type' => 'string',
                                                    'example' => 'test@alibaba-inc.com',
                                                ],
                                                'UserId' => [
                                                    'description' => '绑定被授权用户ID',
                                                    'type' => 'string',
                                                    'example' => '1219541161213058',
                                                ],
                                                'AccountValidType' => [
                                                    'description' => '0：未知 1：有效 2：账号不存在',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
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
                        'errorCode' => 'Parameter.Illegal',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"AC492C5D-29D0-5103-9271-2C3A9D99F5CA\\",\\n  \\"ErrorCode\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"Message\\": \\"以上标红的不为阿里云账号\\",\\n    \\"Success\\": false,\\n    \\"AuthorizedUserList\\": [\\n      {\\n        \\"UserName\\": \\"test@alibaba-inc.com\\",\\n        \\"UserId\\": \\"1219541161213058\\",\\n        \\"AccountValidType\\": 2\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '交付单绑定授权（批量）',
            'summary' => '交付单新增授权（批量）。',
            'description' => '交付单新增授权（批量）',
        ],
        'SubmitIntentionNote' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求单号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20210927144823000001',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '小记内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '电话未接通，3天后再次尝试进行沟通',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '668571EF-1E7E-5435-AA65-4ECFFDDA133F',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"668571EF-1E7E-5435-AA65-4ECFFDDA133F\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '提交需求小记',
            'summary' => '提交需求小记。',
        ],
        'CloseUserIntention' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'IntentionBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需求单号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I20201027162033000001',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '用户关闭',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esp.bookkeeping',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'DD5639FF-1240-51DE-9BA8-2075670A1EAC',
                            ],
                            'ErrorCode' => [
                                'description' => '错误code',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'Success' => [
                                'description' => '成功标识',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"DD5639FF-1240-51DE-9BA8-2075670A1EAC\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '用户关闭需求',
            'summary' => '用户关闭需求。',
        ],
        'RecordPostBack' => [
            'summary' => '调用该接口，可将玄坛服务单或需求单的沟通记录回传至玄坛，可在玄坛进行查看，未跟进状态的订单会转为跟进中。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'bizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'esp.zhangsan',
                    ],
                ],
                [
                    'name' => 'bizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务id，需求单或服务单业务id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P111111111111',
                    ],
                ],
                [
                    'name' => 'contactor',
                    'in' => 'query',
                    'schema' => [
                        'description' => '沟通人姓名（中文）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张雯菲',
                    ],
                ],
                [
                    'name' => 'content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '沟通内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '联系客户一次',
                    ],
                ],
                [
                    'name' => 'entityKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实体类型，明确操作的是服务单还是需求单',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'esp_produce ' => 'esp_produce ',
                            'esp_intention' => 'esp_intention',
                        ],
                        'example' => 'esp_produce',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResultDTO<Boolean>',
                        'description' => 'PopResultDTO<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id'."\n",
                                'type' => 'string',
                                'example' => 'B8E5CC4C-7563-19BD-B02F-DFFFD4E51D4A',
                            ],
                            'HttpStatusCode' => [
                                'description' => '访问后返回状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '后端动态错误码',
                                'type' => 'string',
                                'example' => 'PARAMETER.ILLEGAL',
                            ],
                            'DynamicMessage' => [
                                'description' => '后端动态错误码名称',
                                'type' => 'string',
                                'example' => '参数错误',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '参数错误',
                            ],
                            'ErrorCode' => [
                                'description' => '错误code',
                                'type' => 'string',
                                'example' => 'PARAMETER.ILLEGAL',
                            ],
                            'Success' => [
                                'description' => '请求成功与否标识。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Module' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'AllowRetry' => [
                                'description' => '是否允许重试',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ErrorArgs' => [
                                'description' => '参数错误',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误的参数',
                                    'type' => 'any',
                                    'example' => 'entityKey',
                                ],
                            ],
                            'AppName' => [
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'esp-core-aliyun-com',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8E5CC4C-7563-19BD-B02F-DFFFD4E51D4A\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"PARAMETER.ILLEGAL\\",\\n  \\"DynamicMessage\\": \\"参数错误\\",\\n  \\"ErrorMsg\\": \\"参数错误\\",\\n  \\"ErrorCode\\": \\"PARAMETER.ILLEGAL\\",\\n  \\"Success\\": true,\\n  \\"Module\\": true,\\n  \\"AllowRetry\\": false,\\n  \\"ErrorArgs\\": [\\n    \\"entityKey\\"\\n  ],\\n  \\"AppName\\": \\"esp-core-aliyun-com\\"\\n}","type":"json"}]',
            'title' => '沟通记录回传至玄坛',
        ],
        'QueryAvailableNumbers' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型，具体业务类型值联系阿里业务负责人提供',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '找不到服务商配置',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'PARTNER.CONFIG.NOT.FOUND',
                            ],
                            'Success' => [
                                'description' => '成功状态标识',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '可用外呼号码列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '外呼号码',
                                    'type' => 'string',
                                    'example' => '02131584182',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"找不到服务商配置\\",\\n  \\"RequestId\\": \\"6A603AA0-73BA-52B3-AC7D-0F846ECF7A9D\\",\\n  \\"ErrorCode\\": \\"PARTNER.CONFIG.NOT.FOUND\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    \\"02131584182\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询可用的外呼号码',
            'summary' => '查询可用的外呼号码列表。',
        ],
        'StartBackToBackCall' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SkillType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能类型',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'enumValueTitles' => [
                            1 => '需求单',
                            '服务单',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务关联id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20211203180209000001',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码，传客服手机号或座机号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13162828888',
                    ],
                ],
                [
                    'name' => 'CallCenterNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外呼号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02131584184',
                    ],
                ],
                [
                    'name' => 'MobileKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被叫号码key（如果为空，默认呼叫工单主客户号码，如果不空则根据被叫号码key查找相应的被叫号码进行外呼），该字段适合一个工单有多个被叫号码的场景',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mobile1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2174AA97-56FB-50FA-B243-0460B9E4CE0C',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'Success' => [
                                'description' => '成功状态标识',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"2174AA97-56FB-50FA-B243-0460B9E4CE0C\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true,\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '发起双呼',
            'summary' => '发起双呼。',
        ],
        'TransferIntentionOwner' => [
            'summary' => '需求单转派小二。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'esp.wangwen',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P20210709190452000001',
                    ],
                ],
                [
                    'name' => 'PersonId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '小二ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '67842',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '717711FB-F887-597B-8121-B77437E89B97',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'Success' => [
                                'description' => '请求结果',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"717711FB-F887-597B-8121-B77437E89B97\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true,\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '需求单转派小二',
        ],
        'TransferProduceOwner' => [
            'summary' => '服务单转派小二。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'esp.companyreg_cloud',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P20210208152920000001',
                    ],
                ],
                [
                    'name' => 'PersonId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '小二ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '15565',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '没有权限',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'DD5639FF-1240-51DE-9BA8-2075670A1EAC',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'NoPermission',
                            ],
                            'Success' => [
                                'description' => '请求成功与否标识。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ErrorMsg\\": \\"没有权限\\",\\n  \\"RequestId\\": \\"DD5639FF-1240-51DE-9BA8-2075670A1EAC\\",\\n  \\"ErrorCode\\": \\"NoPermission\\",\\n  \\"Success\\": true,\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '服务单转派小二',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'companyreg.aliyuncs.com',
        ],
    ],
];
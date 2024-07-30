<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'linkedmall',
        'version' => '2022-05-31',
    ],
    'directories' => [
        [
            'id' => 182178,
            'title' => '分销商管理',
            'type' => 'directory',
            'children' => [
                'QueryDistributionMall',
                'ListDistributionMall',
                'QueryDistributionBillDetail',
            ],
        ],
        [
            'id' => 182182,
            'title' => '分销商品管理',
            'type' => 'directory',
            'children' => [
                'ListDistributionItem',
                'QueryItemDetail',
                'QueryItemDetailWithDivision',
                'QueryMallCategoryList',
                'QueryItemGuideRetailPrice',
                'ListDistributionItemWithoutCache',
            ],
        ],
        [
            'id' => 182163,
            'title' => '分销交易',
            'type' => 'directory',
            'children' => [
                'RenderDistributionOrder',
                'ApplyCreateDistributionOrder',
                'QueryDistributionTradeStatus',
                'ConfirmDisburse4Distribution',
                'InitApplyRefund4Distribution',
                'ApplyRefund4Distribution',
                'InitModifyRefund4Distribution',
                'ModifyRefund4Distribution',
                'CancelRefund4Distribution',
                'SubmitReturnGoodLogistics4Distribution',
                'QueryRefundApplicationDetail4Distribution',
                'QueryLogistics4Distribution',
                'QueryChildDivisionCodeById',
            ],
        ],
        [
            'id' => 182160,
            'title' => '分销订单',
            'type' => 'directory',
            'children' => [
                'QueryOrderDetail4Distribution',
                'QueryOrderList4Distribution',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'CancelDistributionTrade',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'QueryDistributionMall' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商城id',
                        'description' => '分销商城id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<QueryDistributionMallModel>',
                        'description' => 'PopResponse<QueryDistributionMallModel>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '539E5C68-D8B5-57EC-9D9B-58AFD9E0****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'DistributorId' => [
                                        'title' => '分销商id',
                                        'description' => '分销商id',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'DistributionMallId' => [
                                        'title' => '分销商城id',
                                        'description' => '分销商城id',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'DistributionMallName' => [
                                        'title' => '分销商城名称',
                                        'description' => '分销商城名称',
                                        'type' => 'string',
                                        'example' => '分销商城名称',
                                    ],
                                    'ChannelSupplierId' => [
                                        'title' => '渠道供应商id',
                                        'description' => '渠道供应商id',
                                        'type' => 'string',
                                    ],
                                    'DistributionMallType' => [
                                        'title' => '商城模式',
                                        'description' => '商城模式（SaaS，API）',
                                        'type' => 'string',
                                        'example' => 'SaaS',
                                    ],
                                    'StartDate' => [
                                        'title' => '开始时间',
                                        'description' => '开始时间',
                                        'type' => 'string',
                                        'example' => '2021-12-10 00:00:00',
                                    ],
                                    'EndDate' => [
                                        'title' => '结束时间',
                                        'description' => '结束时间',
                                        'type' => 'string',
                                        'example' => '2022-10-31 23:59:59',
                                    ],
                                    'Status' => [
                                        'title' => '分销商城状态',
                                        'description' => '分销商城状态',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                ],
                            ],
                            'BizViewData' => [
                                'description' => '渠道公共数据',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9D9B-58AFD9E0****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"DistributorId\\": \\"1\\",\\n    \\"DistributionMallId\\": \\"1\\",\\n    \\"DistributionMallName\\": \\"分销商城名称\\",\\n    \\"ChannelSupplierId\\": \\"\\",\\n    \\"DistributionMallType\\": \\"SaaS\\",\\n    \\"StartDate\\": \\"2021-12-10 00:00:00\\",\\n    \\"EndDate\\": \\"2022-10-31 23:59:59\\",\\n    \\"Status\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"BizViewData\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '分销商城查询',
            'summary' => '分销商查询自己拥有的商城信息'."\n"
                .'。',
            'description' => '分销商查询自己拥有的商城信息'."\n",
        ],
        'ListDistributionMall' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商城id',
                        'description' => '分销商城id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionMallName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '商城名称',
                        'description' => '商城名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云图书专营店',
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelSupplierId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '渠道供应商id',
                        'description' => '渠道供应商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '113428528',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-24 15:29:38',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-26 10:29:13',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<ListDistributionMallModel>>',
                        'description' => 'PopResponse<ListDistributionMallModel>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '1718921E-C8D4-55E1-B8D4-114AE537C1B7',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DistributionMallId' => [
                                            'title' => '分销商城id',
                                            'description' => '分销商城id',
                                            'type' => 'string',
                                        ],
                                        'DistributionMallName' => [
                                            'title' => '分销商城名称',
                                            'description' => '分销商城名称',
                                            'type' => 'string',
                                        ],
                                        'ChannelSupplierId' => [
                                            'title' => '渠道供应商id',
                                            'description' => '渠道供应商id',
                                            'type' => 'string',
                                        ],
                                        'DistributionMallType' => [
                                            'title' => '商城模式',
                                            'description' => '商城模式',
                                            'type' => 'string',
                                        ],
                                        'StartDate' => [
                                            'title' => '开始时间',
                                            'description' => '开始时间',
                                            'type' => 'string',
                                        ],
                                        'EndDate' => [
                                            'title' => '结束时间',
                                            'description' => '结束时间',
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'title' => '分销商城状态',
                                            'description' => '分销商城状态',
                                            'type' => 'string',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"1718921E-C8D4-55E1-B8D4-114AE537C1B7\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"\\",\\n      \\"DistributionMallName\\": \\"\\",\\n      \\"ChannelSupplierId\\": \\"\\",\\n      \\"DistributionMallType\\": \\"\\",\\n      \\"StartDate\\": \\"\\",\\n      \\"EndDate\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分销商城列表查询',
            'summary' => '查询自己已经开通的商城列表。',
            'description' => '查询自己已经开通的商城列表',
        ],
        'QueryDistributionBillDetail' => [
            'summary' => '分销账单明细数据查询接口。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BillId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '账单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000007371****',
                    ],
                ],
                [
                    'name' => 'BillPeriod',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '账单期数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-11',
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '75547******9212928',
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分销商城ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122889******114694',
                    ],
                ],
                [
                    'name' => 'DistributionMallName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商城名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州****',
                    ],
                ],
                [
                    'name' => 'BillStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '账单状态',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18******263',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应数据',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => 'Id of the request',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求流水号',
                                'type' => 'string',
                                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
                            ],
                            'SubCode' => [
                                'title' => 'Id of the request',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SubMessage' => [
                                'title' => 'Id of the request',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Success' => [
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => 'Id of the request',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'description' => '账单数据',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'Total' => [
                                        'description' => '账单总个数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '685',
                                    ],
                                    'Data' => [
                                        'description' => '账单明细链接地址列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '账单明细链接地址',
                                            'type' => 'string',
                                            'example' => 'oss://aliyun.com/***/***/billdetail.zip',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 685,\\n    \\"Data\\": [\\n      \\"oss://aliyun.com/***/***/billdetail.zip\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '账单明细查询',
            'description' => '分销账单明细数据查询接口，返回明细数据下载链接地址。',
        ],
        'ListDistributionItem' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城ID',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LmItemId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'LM商品ID',
                        'description' => 'LM商品ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemStatus',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '商品状态',
                        'description' => '商品状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<DistributionItemModel>>',
                        'description' => 'PopResponse<List<ItemOfQueryDistributionItemGroup>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '539E5C68-D8B5-57EC-9D9B-58AFD9E0****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'DistributionMallId' => [
                                            'title' => '分销商城ID',
                                            'description' => '分销商城ID',
                                            'type' => 'string',
                                        ],
                                        'LmItemId' => [
                                            'title' => 'LM商品ID',
                                            'description' => 'LM商品ID',
                                            'type' => 'string',
                                        ],
                                        'ItemId' => [
                                            'title' => '商品Id',
                                            'description' => '商品Id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'ItemIdStr' => [
                                            'title' => 'String类型商品Id，用于解决前端number类型超出长度限制',
                                            'description' => 'String类型商品Id，用于解决前端number类型超出长度限制',
                                            'type' => 'string',
                                        ],
                                        'ItemName' => [
                                            'title' => '商品名称',
                                            'description' => '商品名称',
                                            'type' => 'string',
                                        ],
                                        'CategoryId' => [
                                            'title' => '类目ID',
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CategoryChain' => [
                                            'title' => '类目链，父类目在前，子类目在后，叶子类目最后',
                                            'description' => '类目链，父类目在前，子类目在后，叶子类目最后',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'CategoryId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'Name' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ParentId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'Level' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'Leaf' => [
                                                        'type' => 'boolean',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Category' => [
                                            'title' => '商品在linkedmall平台上的分类：实物商品（entity），猫超卡券（aliComBenifit），电影票（movieTicket）',
                                            'description' => '商品在linkedmall平台上的分类：实物商品（entity），猫超卡券（aliComBenifit），电影票（movieTicket）',
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'title' => 'linkedmall商品状态',
                                            'description' => 'linkedmall商品状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'Quantity' => [
                                            'title' => '商品剩余库存：MIN',
                                            'description' => '商品剩余库存：MIN',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'SimpleQuantity' => [
                                            'type' => 'string',
                                        ],
                                        'HasQuantity' => [
                                            'type' => 'boolean',
                                        ],
                                        'TotalSoldQuantity' => [
                                            'title' => '累计售出数量',
                                            'description' => '累计售出数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'SimpleTotalSoldQuantity' => [
                                            'type' => 'string',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                        ],
                                        'GmtModified' => [
                                            'title' => '最后修改/生效时间',
                                            'description' => '最后修改/生效时间',
                                            'type' => 'string',
                                        ],
                                        'PicUrl' => [
                                            'title' => '图片url',
                                            'description' => '图片url',
                                            'type' => 'string',
                                        ],
                                        'ItemDesc' => [
                                            'title' => '商品描述信息',
                                            'description' => '商品描述信息',
                                            'type' => 'string',
                                        ],
                                        'ReservedPrice' => [
                                            'title' => 'IC划线价',
                                            'description' => 'IC划线价',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'ReservedPriceScope' => [
                                            'type' => 'string',
                                        ],
                                        'PriceCentScope' => [
                                            'type' => 'string',
                                        ],
                                        'IsCanSell' => [
                                            'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                            'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                            'type' => 'boolean',
                                        ],
                                        'Tips' => [
                                            'title' => '对商品不可售的原因描述',
                                            'description' => '对商品不可售的原因描述',
                                            'type' => 'string',
                                        ],
                                        'ItemTitle' => [
                                            'title' => '商品名称',
                                            'description' => '商品名称',
                                            'type' => 'string',
                                        ],
                                        'MainPicUrl' => [
                                            'title' => '主图',
                                            'description' => '主图',
                                            'type' => 'string',
                                        ],
                                        'DescOption' => [
                                            'title' => '商品详情介绍-图片介绍信息',
                                            'description' => '商品详情介绍-图片介绍信息',
                                            'type' => 'string',
                                        ],
                                        'PropertiesJson' => [
                                            'type' => 'string',
                                        ],
                                        'ItemImages' => [
                                            'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                                            'description' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'SkuList' => [
                                            'title' => 'sku列表',
                                            'description' => 'sku列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'LmItemId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ItemId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'SkuId' => [
                                                        'title' => '没有sku的商品，skuId填-1',
                                                        'description' => '没有sku的商品，skuId填-1',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'Quantity' => [
                                                        'title' => '商品剩余库存：MIN',
                                                        'description' => '商品剩余库存：MIN',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'SimpleQuantity' => [
                                                        'type' => 'string',
                                                    ],
                                                    'HasQuantity' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Status' => [
                                                        'title' => '状态',
                                                        'description' => '状态',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'PriceCent' => [
                                                        'title' => '当前售价（分）',
                                                        'description' => '当前售价（分）',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'ReservedPrice' => [
                                                        'title' => 'IC SKU 一口价',
                                                        'description' => 'IC SKU 一口价',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'SkuDesc' => [
                                                        'title' => 'sku描述信息',
                                                        'description' => 'sku描述信息',
                                                        'type' => 'string',
                                                    ],
                                                    'SkuPicUrl' => [
                                                        'title' => 'sku图片',
                                                        'description' => 'sku图片',
                                                        'type' => 'string',
                                                    ],
                                                    'SkuTitle' => [
                                                        'title' => 'sku标题',
                                                        'description' => 'sku标题',
                                                        'type' => 'string',
                                                    ],
                                                    'GmtModified' => [
                                                        'title' => '最后修改/生效时间',
                                                        'description' => '最后修改/生效时间',
                                                        'type' => 'string',
                                                    ],
                                                    'LmAttributeModels' => [
                                                        'title' => 'sku的扩展属性list',
                                                        'description' => 'sku的扩展属性list',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'AttrId' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                ],
                                                                'Value' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Name' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Description' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'DataType' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Restriction' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Category' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                ],
                                                                'ScopeList' => [
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'type' => 'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'CustomizedAttributeMap' => [
                                                        'title' => '客户自定义属性',
                                                        'description' => '客户自定义属性',
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'CanSell' => [
                                                        'type' => 'boolean',
                                                    ],
                                                    'Tips' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SkuPropertiesJson' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SkuProperties' => [
                                                        'title' => '设置基础库/系统扩展属性',
                                                        'description' => '设置基础库/系统扩展属性',
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'ExtInfo' => [
                                                        'title' => '存放买断权益对接模式下：promotionId（权益ID），securityCode（安全码）',
                                                        'description' => '存放买断权益对接模式下：promotionId（权益ID），securityCode（安全码）',
                                                        'type' => 'string',
                                                    ],
                                                    'lmSkuAttributeMap' => [
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LmAttributeModels' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'AttrId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'Value' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Name' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Description' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DataType' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Restriction' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Category' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'ScopeList' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LmAttributeMap' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9D9B-58AFD9E0****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"\\",\\n      \\"LmItemId\\": \\"\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemIdStr\\": \\"\\",\\n      \\"ItemName\\": \\"\\",\\n      \\"CategoryId\\": 0,\\n      \\"CategoryChain\\": [\\n        {\\n          \\"CategoryId\\": 0,\\n          \\"Name\\": \\"\\",\\n          \\"ParentId\\": 0,\\n          \\"Level\\": 0,\\n          \\"Leaf\\": true\\n        }\\n      ],\\n      \\"Category\\": \\"\\",\\n      \\"Status\\": 0,\\n      \\"Quantity\\": 0,\\n      \\"SimpleQuantity\\": \\"\\",\\n      \\"HasQuantity\\": true,\\n      \\"TotalSoldQuantity\\": 0,\\n      \\"SimpleTotalSoldQuantity\\": \\"\\",\\n      \\"GmtCreate\\": \\"\\",\\n      \\"GmtModified\\": \\"\\",\\n      \\"PicUrl\\": \\"\\",\\n      \\"ItemDesc\\": \\"\\",\\n      \\"ReservedPrice\\": 0,\\n      \\"ReservedPriceScope\\": \\"\\",\\n      \\"PriceCentScope\\": \\"\\",\\n      \\"IsCanSell\\": true,\\n      \\"Tips\\": \\"\\",\\n      \\"ItemTitle\\": \\"\\",\\n      \\"MainPicUrl\\": \\"\\",\\n      \\"DescOption\\": \\"\\",\\n      \\"PropertiesJson\\": \\"\\",\\n      \\"ItemImages\\": [\\n        \\"\\"\\n      ],\\n      \\"SkuList\\": [\\n        {\\n          \\"LmItemId\\": \\"\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"Quantity\\": 0,\\n          \\"SimpleQuantity\\": \\"\\",\\n          \\"HasQuantity\\": true,\\n          \\"Status\\": 0,\\n          \\"PriceCent\\": 0,\\n          \\"ReservedPrice\\": 0,\\n          \\"SkuDesc\\": \\"\\",\\n          \\"SkuPicUrl\\": \\"\\",\\n          \\"SkuTitle\\": \\"\\",\\n          \\"GmtModified\\": \\"\\",\\n          \\"LmAttributeModels\\": [\\n            {\\n              \\"AttrId\\": 0,\\n              \\"Value\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Description\\": \\"\\",\\n              \\"DataType\\": \\"\\",\\n              \\"Restriction\\": \\"\\",\\n              \\"Category\\": 0,\\n              \\"ScopeList\\": [\\n                \\"\\"\\n              ]\\n            }\\n          ],\\n          \\"CustomizedAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"CanSell\\": true,\\n          \\"Tips\\": \\"\\",\\n          \\"SkuPropertiesJson\\": \\"\\",\\n          \\"SkuProperties\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"ExtInfo\\": \\"\\",\\n          \\"lmSkuAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          }\\n        }\\n      ],\\n      \\"LmAttributeModels\\": [\\n        {\\n          \\"AttrId\\": 0,\\n          \\"Value\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Description\\": \\"\\",\\n          \\"DataType\\": \\"\\",\\n          \\"Restriction\\": \\"\\",\\n          \\"Category\\": 0,\\n          \\"ScopeList\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"LmAttributeMap\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询商品列表',
            'summary' => '查询分销商商品库内的商品列表。',
            'description' => '查询分销商商品库内的商品列表',
        ],
        'QueryItemDetail' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城ID',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LmItemId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'lm商品ID',
                        'description' => 'lm商品ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<DistributionItemDetailModel>',
                        'description' => 'PopResponse<ItemModel>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'E46C790E-B1F2-51EF-B6F8-B52404B5****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'BizItemGroup [LMALL20210830****] has not the item [65728655****].',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'DistributionMallId' => [
                                        'title' => '分销商城ID',
                                        'description' => '分销商城ID',
                                        'type' => 'string',
                                    ],
                                    'SkuModels' => [
                                        'title' => 'sku list',
                                        'description' => 'sku list',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DistributionMallId' => [
                                                    'title' => '分销商城ID',
                                                    'description' => '分销商城ID',
                                                    'type' => 'string',
                                                ],
                                                'ExtJson' => [
                                                    'title' => '预留扩展字段,JSON-Map结构',
                                                    'description' => '预留扩展字段,JSON-Map结构',
                                                    'type' => 'string',
                                                ],
                                                'LmItemId' => [
                                                    'title' => 'LM商品ID',
                                                    'description' => 'LM商品ID',
                                                    'type' => 'string',
                                                ],
                                                'ItemId' => [
                                                    'title' => 'IC商品ID',
                                                    'description' => 'IC商品ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'SkuId' => [
                                                    'title' => '没有sku的商品，skuId填-1',
                                                    'description' => '没有sku的商品，skuId填-1',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'SkuPvs' => [
                                                    'title' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                    'description' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                    'type' => 'string',
                                                ],
                                                'SkuPicUrl' => [
                                                    'title' => 'Sku图片',
                                                    'description' => 'Sku图片',
                                                    'type' => 'string',
                                                ],
                                                'SkuTitle' => [
                                                    'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                    'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                    'type' => 'string',
                                                ],
                                                'Quantity' => [
                                                    'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                    'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'SimpleQuantity' => [
                                                    'title' => 'SKU模糊化库存',
                                                    'description' => 'SKU模糊化库存',
                                                    'type' => 'string',
                                                ],
                                                'HasQuantity' => [
                                                    'title' => '是否有库存，返回的是库存状态，有或者没有',
                                                    'description' => '是否有库存，返回的是库存状态，有或者没有',
                                                    'type' => 'boolean',
                                                ],
                                                'ReservedPrice' => [
                                                    'title' => 'IC SKU 一口价',
                                                    'description' => 'IC SKU 一口价',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'PriceCent' => [
                                                    'title' => '商品销售价格（分）',
                                                    'description' => '商品销售价格（分）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'Status' => [
                                                    'title' => '商品规格对应的售卖状态',
                                                    'description' => '商品规格对应的售卖状态',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'CustomizedAttributeMap' => [
                                                    'title' => '客户自定义属性',
                                                    'description' => '客户自定义属性',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'LmSkuAttributeMap' => [
                                                    'title' => 'Linkedmall 平台SKU的属性',
                                                    'description' => 'Linkedmall 平台SKU的属性',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'CanNotBeSoldCode' => [
                                                    'title' => '不可售code  可售时为null',
                                                    'description' => '不可售code  可售时为null',
                                                    'type' => 'string',
                                                ],
                                                'CanNotBeSoldMessage' => [
                                                    'title' => '不可售Massage 可售时为null',
                                                    'description' => '不可售Massage 可售时为null',
                                                    'type' => 'string',
                                                ],
                                                'InvoiceType' => [
                                                    'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                                    'description' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SkuPropertys' => [
                                        'title' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                                        'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'Text' => [
                                                    'type' => 'string',
                                                ],
                                                'Values' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'Text' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LmItemId' => [
                                        'title' => 'LM商品ID',
                                        'description' => 'LM商品ID',
                                        'type' => 'string',
                                    ],
                                    'ItemId' => [
                                        'title' => 'IC商品ID',
                                        'description' => '商品ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '65******0310',
                                    ],
                                    'ItemTitle' => [
                                        'title' => '商品名称',
                                        'description' => '商品名称',
                                        'type' => 'string',
                                        'example' => '大自然酸菜(美好生鲜)',
                                    ],
                                    'MainPicUrl' => [
                                        'title' => '主图',
                                        'description' => '主图',
                                        'type' => 'string',
                                    ],
                                    'FirstPicUrl' => [
                                        'title' => 'itemDO.commonItemImageList第一张',
                                        'description' => '商品主图',
                                        'type' => 'string',
                                        'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652f*****.jpg',
                                    ],
                                    'ItemImages' => [
                                        'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                                        'description' => '商品图片列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '商品图片列表',
                                            'type' => 'string',
                                            'example' => '<p><img src=\\"https://img.alicdn.com/imgextra/i2/2207523123246/O1CN01pyEmOb1ZqiNAnQPjQ_!!22075231******.png\\" align=\\"absmiddle\\"></p>',
                                        ],
                                    ],
                                    'DescPath' => [
                                        'title' => '商品详情介绍-图片介绍，URL',
                                        'description' => '商品详情介绍-图片介绍，URL',
                                        'type' => 'string',
                                    ],
                                    'DescOption' => [
                                        'title' => '商品详情介绍-图片介绍信息',
                                        'description' => '商品详情描述',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'MinPrice' => [
                                        'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                        'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'ReservedPrice' => [
                                        'title' => '商品原价，可用于显示划线价',
                                        'description' => '商品原价，可用于显示划线价',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Quantity' => [
                                        'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                        'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'SimpleQuantity' => [
                                        'title' => '模糊化库存',
                                        'description' => '模糊化库存',
                                        'type' => 'string',
                                    ],
                                    'HasQuantity' => [
                                        'title' => '是否有库存，返回的是库存状态，有或者没有',
                                        'description' => '是否有库存，返回的是库存状态，有或者没有',
                                        'type' => 'boolean',
                                    ],
                                    'CategoryId' => [
                                        'title' => '类目ID',
                                        'description' => '最后⼀级的类⽬ID，之后会提供类⽬查询接⼝来获取商品所属类⽬信息',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50011982',
                                    ],
                                    'CategoryIds' => [
                                        'title' => '类目ID，父类目在前，子类目在后',
                                        'description' => '类目ID，父类目在前，子类目在后',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                    ],
                                    'Prov' => [
                                        'title' => '商品所在城市：如杭州',
                                        'description' => '商品所在城市：如杭州',
                                        'type' => 'string',
                                    ],
                                    'City' => [
                                        'title' => '商品所在省份：如浙江',
                                        'description' => '商品所在省份：如浙江',
                                        'type' => 'string',
                                    ],
                                    'Properties' => [
                                        'title' => '产品属性，产品参数，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                                        'description' => '产品参数',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                            'description' => '产品参数',
                                            'example' => '{"key":"value"}',
                                        ],
                                    ],
                                    'Features' => [
                                        'title' => '产品特征，从itemDO.Features转换而来',
                                        'description' => '产品特征，从itemDO.Features转换而来',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'IforestProps' => [
                                        'title' => '宝石路属性，关键属性，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                                        'description' => '商品详情页商品名称下面的三列属性',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '商品详情页商品名称下面的三列属性',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '商品详情页商品名称下面的三列属性',
                                                'example' => '""',
                                            ],
                                        ],
                                    ],
                                    'IsSellerPayPostfee' => [
                                        'title' => '是否包邮',
                                        'description' => '是否包邮',
                                        'type' => 'boolean',
                                    ],
                                    'IsCanSell' => [
                                        'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                        'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                        'type' => 'boolean',
                                    ],
                                    'LmItemCategory' => [
                                        'title' => '商品在linkedmall平台的类型',
                                        'description' => '商品类别',
                                        'type' => 'string',
                                        'example' => 'entity',
                                    ],
                                    'CustomizedAttributeMap' => [
                                        'title' => '客户自定义属性',
                                        'description' => '客户自定义属性',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'LmItemAttributeMap' => [
                                        'title' => 'Linkedmall 平台商品属性',
                                        'description' => 'Linkedmall 平台商品属性',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Current' => [
                                        'title' => '当前时间',
                                        'description' => '当前时间',
                                        'type' => 'string',
                                    ],
                                    'VirtualItemType' => [
                                        'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                        'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                        'type' => 'string',
                                    ],
                                    'ThirdPartyItemId' => [
                                        'title' => '外部商品id (来自第三方的商品)',
                                        'description' => '外部商品id (来自第三方的商品)',
                                        'type' => 'string',
                                    ],
                                    'ThirdPartyName' => [
                                        'title' => '商品来源 (标记第三方商品的来源)',
                                        'description' => '商品来源 (标记第三方商品的来源)',
                                        'type' => 'string',
                                    ],
                                    'VideoUrl' => [
                                        'title' => '视频url',
                                        'description' => '视频链接地址',
                                        'type' => 'string',
                                        'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/video/edf8d848fa80b1cac055c94652******.mp4',
                                    ],
                                    'VideoPicUrl' => [
                                        'title' => '视频封面url',
                                        'description' => '视频头图链接地址',
                                        'type' => 'string',
                                        'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652*****.jpg',
                                    ],
                                    'CanNotBeSoldCode' => [
                                        'title' => '不可售code  可售时为null',
                                        'description' => '不可售code  可售时为null',
                                        'type' => 'string',
                                    ],
                                    'CanNotBeSoldMessage' => [
                                        'title' => '不可售Massage 可售时为null',
                                        'description' => '不可售Massage 可售时为null',
                                        'type' => 'string',
                                    ],
                                    'ItemTotalValue' => [
                                        'title' => '总量库存值',
                                        'description' => '总量库存值',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ItemTotalSimpleValue' => [
                                        'type' => 'string',
                                    ],
                                    'InvoiceType' => [
                                        'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                        'description' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                            'BizViewData' => [
                                'description' => '渠道公共数据',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"E46C790E-B1F2-51EF-B6F8-B52404B5****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"BizItemGroup [LMALL20210830****] has not the item [65728655****].\\",\\n  \\"Model\\": {\\n    \\"DistributionMallId\\": \\"\\",\\n    \\"SkuModels\\": [\\n      {\\n        \\"DistributionMallId\\": \\"\\",\\n        \\"ExtJson\\": \\"\\",\\n        \\"LmItemId\\": \\"\\",\\n        \\"ItemId\\": 0,\\n        \\"SkuId\\": 0,\\n        \\"SkuPvs\\": \\"\\",\\n        \\"SkuPicUrl\\": \\"\\",\\n        \\"SkuTitle\\": \\"\\",\\n        \\"Quantity\\": 0,\\n        \\"SimpleQuantity\\": \\"\\",\\n        \\"HasQuantity\\": true,\\n        \\"ReservedPrice\\": 0,\\n        \\"PriceCent\\": 0,\\n        \\"Status\\": 0,\\n        \\"CustomizedAttributeMap\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"LmSkuAttributeMap\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanNotBeSoldCode\\": \\"\\",\\n        \\"CanNotBeSoldMessage\\": \\"\\",\\n        \\"InvoiceType\\": 0\\n      }\\n    ],\\n    \\"SkuPropertys\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Text\\": \\"\\",\\n        \\"Values\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Text\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"LmItemId\\": \\"\\",\\n    \\"ItemId\\": 0,\\n    \\"ItemTitle\\": \\"大自然酸菜(美好生鲜)\\",\\n    \\"MainPicUrl\\": \\"\\",\\n    \\"FirstPicUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652f*****.jpg\\",\\n    \\"ItemImages\\": [\\n      \\"<p><img src=\\\\\\\\\\\\\\"https://img.alicdn.com/imgextra/i2/2207523123246/O1CN01pyEmOb1ZqiNAnQPjQ_!!22075231******.png\\\\\\\\\\\\\\" align=\\\\\\\\\\\\\\"absmiddle\\\\\\\\\\\\\\"></p>\\"\\n    ],\\n    \\"DescPath\\": \\"\\",\\n    \\"DescOption\\": \\"{}\\",\\n    \\"MinPrice\\": 0,\\n    \\"ReservedPrice\\": 0,\\n    \\"Quantity\\": 0,\\n    \\"SimpleQuantity\\": \\"\\",\\n    \\"HasQuantity\\": true,\\n    \\"CategoryId\\": 50011982,\\n    \\"CategoryIds\\": [\\n      0\\n    ],\\n    \\"Prov\\": \\"\\",\\n    \\"City\\": \\"\\",\\n    \\"Properties\\": {\\n      \\"key\\": [\\n        \\"\\"\\n      ]\\n    },\\n    \\"Features\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"IforestProps\\": [\\n      {\\n        \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n      }\\n    ],\\n    \\"IsSellerPayPostfee\\": true,\\n    \\"IsCanSell\\": true,\\n    \\"LmItemCategory\\": \\"entity\\",\\n    \\"CustomizedAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"LmItemAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Current\\": \\"\\",\\n    \\"VirtualItemType\\": \\"\\",\\n    \\"ThirdPartyItemId\\": \\"\\",\\n    \\"ThirdPartyName\\": \\"\\",\\n    \\"VideoUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/video/edf8d848fa80b1cac055c94652******.mp4\\",\\n    \\"VideoPicUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"CanNotBeSoldCode\\": \\"\\",\\n    \\"CanNotBeSoldMessage\\": \\"\\",\\n    \\"ItemTotalValue\\": 0,\\n    \\"ItemTotalSimpleValue\\": \\"\\",\\n    \\"InvoiceType\\": 0\\n  },\\n  \\"BizViewData\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询商品详情接口',
            'summary' => '查询单个商品的详细信息'."\n"
                .'。',
            'description' => '查询单个商品的详细信息'."\n",
        ],
        'QueryItemDetailWithDivision' => [
            'summary' => '支持根据区域查询商品详细信息接口。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商id',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '75547******9212928',
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城id',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1339d4e******46ea9d126df506af8d2b',
                    ],
                ],
                [
                    'name' => 'LmItemId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'lm商品ID',
                        'description' => 'lm商品ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000035-61936646****',
                    ],
                ],
                [
                    'name' => 'DivisionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '410503006',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18******263',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<DistributionItemDetailModel>',
                        'description' => 'PopResponse<DistributionItemDetailModel>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'BA157565-3358-5D80-9330-************',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '201',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '19',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'DistributionMallId' => [
                                        'title' => '分销商城ID',
                                        'description' => '分销商城ID',
                                        'type' => 'string',
                                        'example' => '122889******114694',
                                    ],
                                    'SkuModels' => [
                                        'title' => 'sku list',
                                        'description' => 'sku list',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DistributionMallId' => [
                                                    'title' => '分销商城ID',
                                                    'description' => '分销商城ID',
                                                    'type' => 'string',
                                                    'example' => '401e6c8****39b05797ac841907ca',
                                                ],
                                                'ExtJson' => [
                                                    'title' => '预留扩展字段,JSON-Map结构',
                                                    'description' => '预留扩展字段,JSON-Map结构',
                                                    'type' => 'string',
                                                    'example' => '{\\"outShopId\\":\\"3163****7\\"}',
                                                ],
                                                'LmItemId' => [
                                                    'title' => 'LM商品ID',
                                                    'description' => 'LM商品ID',
                                                    'type' => 'string',
                                                    'example' => '10026053-67222490****',
                                                ],
                                                'ItemId' => [
                                                    'title' => 'IC商品ID',
                                                    'description' => 'IC商品ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '56090358****',
                                                ],
                                                'SkuId' => [
                                                    'title' => 'skuId(如果一个品没有sku，则构造一个id为-1的sku。数量库里0和-1都是表示没有SKU的商品，DB 中统一使用-1)，如 3428785463017',
                                                    'description' => 'skuId(如果一个品没有sku，则构造一个id为-1的sku。数量库里0和-1都是表示没有SKU的商品，DB 中统一使用-1)，如 3428785463017',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '-1',
                                                ],
                                                'SkuPvs' => [
                                                    'title' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                    'description' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                    'type' => 'string',
                                                    'example' => '1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                ],
                                                'SkuPicUrl' => [
                                                    'title' => 'Sku图片',
                                                    'description' => 'Sku图片',
                                                    'type' => 'string',
                                                    'example' => 'img/12344***.jpg',
                                                ],
                                                'SkuTitle' => [
                                                    'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                    'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                    'type' => 'string',
                                                    'example' => '*****罐头',
                                                ],
                                                'Quantity' => [
                                                    'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                    'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '-1',
                                                ],
                                                'SimpleQuantity' => [
                                                    'title' => 'SKU模糊化库存',
                                                    'description' => 'SKU模糊化库存',
                                                    'type' => 'string',
                                                    'example' => '有货、无货、库存紧张',
                                                ],
                                                'HasQuantity' => [
                                                    'title' => '是否有库存，返回的是库存状态，有或者没有',
                                                    'description' => '是否有库存，返回的是库存状态，有或者没有',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ReservePrice' => [
                                                    'title' => 'IC SKU 一口价',
                                                    'description' => 'IC SKU 一口价',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '788',
                                                ],
                                                'PriceCent' => [
                                                    'title' => '商品销售价格（分）',
                                                    'description' => '商品销售价格（分）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3990',
                                                ],
                                                'SupplierPrice' => [
                                                    'title' => '供货价（分）',
                                                    'description' => '供货价（分）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '9900',
                                                ],
                                                'Status' => [
                                                    'title' => '商品规格对应的售卖状态',
                                                    'description' => '商品规格对应的售卖状态',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'CustomizedAttributeMap' => [
                                                    'title' => '客户自定义属性',
                                                    'description' => '客户自定义属性',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'description' => '自定义属性对',
                                                        'example' => '颜色分类~~白色'."\n"
                                                            .'款式~~圆头',
                                                    ],
                                                ],
                                                'LmSkuAttributeMap' => [
                                                    'title' => 'Linkedmall 平台SKU的属性',
                                                    'description' => 'Linkedmall 平台SKU的属性',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'description' => 'Linkedmall自定义属性对',
                                                        'example' => '颜色分类~~白色'."\n"
                                                            .'款式~~圆头',
                                                    ],
                                                ],
                                                'CanNotBeSoldCode' => [
                                                    'title' => '不可售code  可售时为null',
                                                    'description' => '不可售code  可售时为null',
                                                    'type' => 'string',
                                                    'example' => 'NULL',
                                                ],
                                                'CanNotBeSoldMassage' => [
                                                    'title' => '不可售Massage 可售时为null',
                                                    'description' => '不可售Massage 可售时为null',
                                                    'type' => 'string',
                                                    'example' => 'NULL',
                                                ],
                                                'InvoiceType' => [
                                                    'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                                    'description' => '发票类型',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SkuPropertys' => [
                                        'title' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                                        'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => 'sku属性id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '44042249****',
                                                ],
                                                'Text' => [
                                                    'description' => '属性名',
                                                    'type' => 'string',
                                                    'example' => '162720***',
                                                ],
                                                'Values' => [
                                                    'description' => '属性值集合',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '属性值对',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'description' => '属性值id',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '44042249****',
                                                            ],
                                                            'Text' => [
                                                                'description' => '属性值',
                                                                'type' => 'string',
                                                                'example' => '颜色~~白色',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LmItemId' => [
                                        'title' => 'LM商品ID',
                                        'description' => 'LM商品ID',
                                        'type' => 'string',
                                        'example' => '10000**-630292***',
                                    ],
                                    'ItemId' => [
                                        'title' => 'IC商品ID',
                                        'description' => 'IC商品ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '65******0310',
                                    ],
                                    'ItemTitle' => [
                                        'title' => '商品名称',
                                        'description' => '商品名称',
                                        'type' => 'string',
                                        'example' => '夏季***百搭小白鞋',
                                    ],
                                    'MainPicUrl' => [
                                        'title' => '主图',
                                        'description' => '主图',
                                        'type' => 'string',
                                        'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                    ],
                                    'FirstPicUrl' => [
                                        'title' => 'itemDO.commonItemImageList第一张',
                                        'description' => 'itemDO.commonItemImageList第一张',
                                        'type' => 'string',
                                        'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                    ],
                                    'ItemImages' => [
                                        'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                                        'description' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                            'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                        ],
                                    ],
                                    'DescPath' => [
                                        'title' => '商品详情介绍-图片介绍，URL',
                                        'description' => '商品详情介绍-图片介绍，URL',
                                        'type' => 'string',
                                        'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                                    ],
                                    'DescOption' => [
                                        'title' => '商品详情介绍-图片介绍信息',
                                        'description' => '商品详情介绍-图片介绍信息',
                                        'type' => 'string',
                                        'example' => '<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>',
                                    ],
                                    'MinPrice' => [
                                        'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                        'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3900',
                                    ],
                                    'ReservePrice' => [
                                        'title' => '商品原价，可用于显示划线价',
                                        'description' => '商品原价，可用于显示划线价',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3900',
                                    ],
                                    'Quantity' => [
                                        'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                        'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '-1',
                                    ],
                                    'SimpleQuantity' => [
                                        'title' => '模糊化库存',
                                        'description' => '模糊化库存',
                                        'type' => 'string',
                                        'example' => '有货'."\n"
                                            .'无货'."\n"
                                            .'库存紧张',
                                    ],
                                    'HasQuantity' => [
                                        'title' => '是否有库存，返回的是库存状态，有或者没有',
                                        'description' => '是否有库存，返回的是库存状态，有或者没有',
                                        'type' => 'boolean',
                                    ],
                                    'CategoryId' => [
                                        'title' => '类目ID',
                                        'description' => '类目ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50011****',
                                    ],
                                    'CategoryIds' => [
                                        'title' => '类目ID，父类目在前，子类目在后',
                                        'description' => '类目ID，父类目在前，子类目在后',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '205879***',
                                        ],
                                    ],
                                    'Prov' => [
                                        'title' => '商品所在城市：如杭州',
                                        'description' => '商品所在城市：如杭州',
                                        'type' => 'string',
                                        'example' => '浙江',
                                    ],
                                    'City' => [
                                        'title' => '商品所在省份：如浙江',
                                        'description' => '商品所在省份：如浙江',
                                        'type' => 'string',
                                        'example' => '杭州',
                                    ],
                                    'Properties' => [
                                        'title' => '产品属性，产品参数，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                                        'description' => '产品属性，产品参数，供Detail页面显示使用',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => '颜色分类~~白色'."\n"
                                                    .'款式~~圆头',
                                                'description' => '属性值',
                                            ],
                                            'description' => '属性集合',
                                        ],
                                    ],
                                    'Features' => [
                                        'title' => '产品特征，从itemDO.Features转换而来',
                                        'description' => '产品特征',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '[{\'Enable\': False, \'Name\': \'CLEANUP_SHADOW_IF_FAILED\'}, {\'Enable\': False, \'Name\': \'CLEANUP_RESTORE_SERVER_IF_FAILED\'}, {\'Enable\': True, \'Name\': \'AUTO_ENLARGE_ADD_DISK\'}]',
                                            'description' => '产品特征',
                                        ],
                                    ],
                                    'IforestProps' => [
                                        'title' => '宝石路属性，关键属性，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                                        'description' => '宝石路属性，关键属性，供Detail页面显示使用',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '属性对象',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '属性值',
                                                'example' => '颜色分类~~白色'."\n"
                                                    .'款式~~圆头',
                                            ],
                                        ],
                                    ],
                                    'SellerPayPostfee' => [
                                        'title' => '是否包邮',
                                        'description' => '是否包邮',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CanSell' => [
                                        'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                        'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LmItemCategory' => [
                                        'title' => '商品在linkedmall平台的类型',
                                        'description' => '商品在linkedmall平台的类型',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'aliComBenifit' => '虚拟商品',
                                            'entity' => '实物商品',
                                        ],
                                        'example' => 'entity',
                                    ],
                                    'CustomizedAttributeMap' => [
                                        'title' => '客户自定义属性',
                                        'description' => '客户自定义属性',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'LmItemAttributeMap' => [
                                        'title' => 'Linkedmall 平台商品属性',
                                        'description' => 'Linkedmall 平台商品属性',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Current' => [
                                        'title' => '当前时间',
                                        'description' => '当前时间',
                                        'type' => 'string',
                                        'example' => '2020-01-01 00:00:00',
                                    ],
                                    'VirtualItemType' => [
                                        'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                        'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'fuelCard' => '油卡',
                                            'cardRoll' => '卡券',
                                            'rechageableCard' => '充值卡',
                                        ],
                                        'example' => 'cardRoll',
                                    ],
                                    'UserType' => [
                                        'title' => '卖家类型：可以用于区分商品类型，null或是0-集市卖家，1-天猫卖家，2-1688卖家，4-后端商家，8-1688云电商卖家',
                                        'description' => '卖家类型：可以用于区分商品类型，null或是0-集市卖家，1-天猫卖家，2-1688卖家，4-后端商家，8-1688云电商卖家',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            '集市卖家',
                                            '天猫卖家',
                                            '1688卖家',
                                            4 => '后端商家',
                                            6 => '1688云电商卖家',
                                        ],
                                        'example' => '1',
                                    ],
                                    'SecuredTransactions' => [
                                        'title' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                                        'description' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            '未开通',
                                            '已开通',
                                            '未设置',
                                            '审核中',
                                            '开通失败',
                                        ],
                                        'example' => '1',
                                    ],
                                    'ThirdPartyItemId' => [
                                        'title' => '外部商品id (来自第三方的商品)',
                                        'description' => '外部商品id (来自第三方的商品)',
                                        'type' => 'string',
                                        'example' => '44042249****'."\n",
                                    ],
                                    'ThirdPartyName' => [
                                        'title' => '商品来源 (标记第三方商品的来源)',
                                        'description' => '商品来源 (标记第三方商品的来源)',
                                        'type' => 'string',
                                        'example' => '三方商品来源',
                                    ],
                                    'VideoUrl' => [
                                        'title' => '视频url',
                                        'description' => '视频url',
                                        'type' => 'string',
                                        'example' => 'video/edf8d848fa80b1cac055c94652******.mp4',
                                    ],
                                    'VideoPicUrl' => [
                                        'title' => '视频封面url',
                                        'description' => '视频封面url',
                                        'type' => 'string',
                                        'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                                    ],
                                    'CanNotBeSoldCode' => [
                                        'title' => '不可售code  可售时为null',
                                        'description' => '不可售code  可售时为null',
                                        'type' => 'string',
                                        'example' => 'NULL',
                                    ],
                                    'CanNotBeSoldMassage' => [
                                        'title' => '不可售Massage 可售时为null',
                                        'description' => '不可售Massage 可售时为null',
                                        'type' => 'string',
                                        'example' => 'NULL',
                                    ],
                                    'ItemTotalValue' => [
                                        'title' => '总量库存值',
                                        'description' => '总量库存值',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '-1',
                                    ],
                                    'ItemTotalSimpleValue' => [
                                        'description' => '商品库存',
                                        'type' => 'string',
                                        'example' => '有货',
                                    ],
                                    'InvoiceType' => [
                                        'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                                        'description' => '发票类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            '不提供发票',
                                            '增值税专用发票',
                                            '增值税普通发票',
                                        ],
                                        'example' => '1',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"BA157565-3358-5D80-9330-************\\",\\n  \\"SubCode\\": \\"201\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 19,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"Model\\": {\\n    \\"DistributionMallId\\": \\"122889******114694\\",\\n    \\"SkuModels\\": [\\n      {\\n        \\"DistributionMallId\\": \\"401e6c8****39b05797ac841907ca\\",\\n        \\"ExtJson\\": \\"{\\\\\\\\\\\\\\"outShopId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3163****7\\\\\\\\\\\\\\"}\\",\\n        \\"LmItemId\\": \\"10026053-67222490****\\",\\n        \\"ItemId\\": 0,\\n        \\"SkuId\\": -1,\\n        \\"SkuPvs\\": \\"1627207:28320;5919063:6536025;12304035:75366283;122216431:27772\\",\\n        \\"SkuPicUrl\\": \\"img/12344***.jpg\\",\\n        \\"SkuTitle\\": \\"*****罐头\\",\\n        \\"Quantity\\": -1,\\n        \\"SimpleQuantity\\": \\"有货、无货、库存紧张\\",\\n        \\"HasQuantity\\": true,\\n        \\"ReservePrice\\": 788,\\n        \\"PriceCent\\": 3990,\\n        \\"SupplierPrice\\": 9900,\\n        \\"Status\\": 1,\\n        \\"CustomizedAttributeMap\\": {\\n          \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n        },\\n        \\"LmSkuAttributeMap\\": {\\n          \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n        },\\n        \\"CanNotBeSoldCode\\": \\"NULL\\",\\n        \\"CanNotBeSoldMassage\\": \\"NULL\\",\\n        \\"InvoiceType\\": 0\\n      }\\n    ],\\n    \\"SkuPropertys\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Text\\": \\"162720***\\",\\n        \\"Values\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Text\\": \\"颜色~~白色\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"LmItemId\\": \\"10000**-630292***\\",\\n    \\"ItemId\\": 0,\\n    \\"ItemTitle\\": \\"夏季***百搭小白鞋\\",\\n    \\"MainPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n    \\"FirstPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n    \\"ItemImages\\": [\\n      \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\"\\n    ],\\n    \\"DescPath\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"DescOption\\": \\"<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>\\",\\n    \\"MinPrice\\": 3900,\\n    \\"ReservePrice\\": 3900,\\n    \\"Quantity\\": -1,\\n    \\"SimpleQuantity\\": \\"有货\\\\n无货\\\\n库存紧张\\",\\n    \\"HasQuantity\\": true,\\n    \\"CategoryId\\": 0,\\n    \\"CategoryIds\\": [\\n      0\\n    ],\\n    \\"Prov\\": \\"浙江\\",\\n    \\"City\\": \\"杭州\\",\\n    \\"Properties\\": {\\n      \\"key\\": [\\n        \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n      ]\\n    },\\n    \\"Features\\": {\\n      \\"key\\": \\"[{\'Enable\': False, \'Name\': \'CLEANUP_SHADOW_IF_FAILED\'}, {\'Enable\': False, \'Name\': \'CLEANUP_RESTORE_SERVER_IF_FAILED\'}, {\'Enable\': True, \'Name\': \'AUTO_ENLARGE_ADD_DISK\'}]\\"\\n    },\\n    \\"IforestProps\\": [\\n      {\\n        \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n      }\\n    ],\\n    \\"SellerPayPostfee\\": true,\\n    \\"CanSell\\": true,\\n    \\"LmItemCategory\\": \\"entity\\",\\n    \\"CustomizedAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"LmItemAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Current\\": \\"2020-01-01 00:00:00\\",\\n    \\"VirtualItemType\\": \\"cardRoll\\",\\n    \\"UserType\\": 1,\\n    \\"SecuredTransactions\\": 1,\\n    \\"ThirdPartyItemId\\": \\"44042249****\\\\n\\",\\n    \\"ThirdPartyName\\": \\"三方商品来源\\",\\n    \\"VideoUrl\\": \\"video/edf8d848fa80b1cac055c94652******.mp4\\",\\n    \\"VideoPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"CanNotBeSoldCode\\": \\"NULL\\",\\n    \\"CanNotBeSoldMassage\\": \\"NULL\\",\\n    \\"ItemTotalValue\\": -1,\\n    \\"ItemTotalSimpleValue\\": \\"有货\\",\\n    \\"InvoiceType\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '查询商品详情接口（支持区域库存）',
            'description' => '本接口用在查询商品在某区域下是否可售、是否有库存的场景。',
        ],
        'QueryMallCategoryList' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商id',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '75547******9212928',
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城id',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122889******114694',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类目ID',
                        'description' => '类目ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5001****',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18******263',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<DistributionCategoryModel>>',
                        'description' => '响应数据',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号',
                                'type' => 'string',
                                'example' => '7152F15C-7298-5531-9A76-2ED2C331****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '商品类目信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '商品类目信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'CategoryId' => [
                                            'title' => '后台类目ID',
                                            'description' => '后台类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5001****',
                                        ],
                                        'Name' => [
                                            'title' => '类目名称',
                                            'description' => '类目名称',
                                            'type' => 'string',
                                            'example' => '***电子产品',
                                        ],
                                        'ParentId' => [
                                            'title' => '父类目ID',
                                            'description' => '父类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1041577**',
                                        ],
                                        'Leaf' => [
                                            'title' => '是否是叶子类目',
                                            'description' => '是否是叶子类目',
                                            'type' => 'boolean',
                                            'example' => 'true',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"7152F15C-7298-5531-9A76-2ED2C331****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"CategoryId\\": 0,\\n      \\"Name\\": \\"***电子产品\\",\\n      \\"ParentId\\": 0,\\n      \\"Leaf\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询商品类目信息',
            'summary' => '商品类目查询接口。',
            'description' => '该接口使用在查询分销商城商品类目信息场景。',
            'requestParamsDescription' => '当传入类目ID为0时，表示查询一级类目；当传入类目ID非0时，返回当前类目的下级类目列表。',
        ],
        'QueryItemGuideRetailPrice' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商id',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '75547******9212928',
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城id',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '122889******114694',
                    ],
                ],
                [
                    'name' => 'LmItemIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '商品id',
                        'description' => '商品id集合',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品id',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[\\"10000***-65975997****\\"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18******263',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<DistributionItemPriceDetailModel>>',
                        'description' => 'PopResponse<List<DistributionItemPriceDetailModel>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'E090F1A0-7454-5F36-933C-E6332CE2****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '商品信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'DistributionMallId' => [
                                            'title' => '分销商城ID',
                                            'description' => '分销商城ID',
                                            'type' => 'string',
                                            'example' => '19e690e*****07a29c8',
                                        ],
                                        'LmItemId' => [
                                            'title' => 'LM商品ID',
                                            'description' => 'LM商品ID',
                                            'type' => 'string',
                                            'example' => '1000****-630292****',
                                        ],
                                        'ItemId' => [
                                            'description' => '商品id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '65******0310',
                                        ],
                                        'ItemTitle' => [
                                            'title' => '商品标题',
                                            'description' => '商品标题',
                                            'type' => 'string',
                                            'example' => '****酸菜',
                                        ],
                                        'ReservedPrice' => [
                                            'title' => '商品划线价、原价',
                                            'description' => '商品划线价、原价',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2000',
                                        ],
                                        'ReservedPriceScope' => [
                                            'title' => '商品划线价、原价范围',
                                            'description' => '商品划线价、原价范围',
                                            'type' => 'string',
                                            'example' => '1000~2000',
                                        ],
                                        'GuideRetailPriceScope' => [
                                            'title' => '建议零售价范围',
                                            'description' => '建议零售价范围',
                                            'type' => 'string',
                                            'example' => '1000~2000',
                                        ],
                                        'SkuModels' => [
                                            'title' => '商品规格',
                                            'description' => '商品规格',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '商品规格信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DistributionMallId' => [
                                                        'title' => '分销商城ID',
                                                        'description' => '分销商城ID',
                                                        'type' => 'string',
                                                        'example' => '39cc1****5c7211005187c',
                                                    ],
                                                    'LmItemId' => [
                                                        'title' => 'LM商品ID',
                                                        'description' => 'LM商品ID',
                                                        'type' => 'string',
                                                        'example' => '10***642-6831****869',
                                                    ],
                                                    'ItemId' => [
                                                        'description' => '商品id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '6487****621',
                                                    ],
                                                    'SkuId' => [
                                                        'title' => '规格ID',
                                                        'description' => '规格ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '488****548894',
                                                    ],
                                                    'SkuTitle' => [
                                                        'title' => '规格标题',
                                                        'description' => '规格标题',
                                                        'type' => 'string',
                                                        'example' => '美味****原味2盒',
                                                    ],
                                                    'ReservedPrice' => [
                                                        'title' => '商品划线价、原价',
                                                        'description' => '商品划线价、原价',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '8000',
                                                    ],
                                                    'GuideRetailPrice' => [
                                                        'title' => '建议零售价',
                                                        'description' => '建议零售价',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '7960',
                                                    ],
                                                    'PriceCent' => [
                                                        'title' => '当前售价',
                                                        'description' => '当前售价',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '7960',
                                                    ],
                                                    'Status' => [
                                                        'title' => '状态：1：商品可售卖',
                                                        'description' => '状态：1：商品可售卖',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'enumValueTitles' => [
                                                            1 => '商品可售',
                                                            '商品不可售',
                                                        ],
                                                        'example' => '1',
                                                    ],
                                                    'LowGuideRetailPrice' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LowGuideRetailPriceScope' => [
                                            'type' => 'string',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"E090F1A0-7454-5F36-933C-E6332CE2****\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n      \\"LmItemId\\": \\"1000****-630292****\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemTitle\\": \\"****酸菜\\",\\n      \\"ReservedPrice\\": 2000,\\n      \\"ReservedPriceScope\\": \\"1000~2000\\",\\n      \\"GuideRetailPriceScope\\": \\"1000~2000\\",\\n      \\"SkuModels\\": [\\n        {\\n          \\"DistributionMallId\\": \\"39cc1****5c7211005187c\\",\\n          \\"LmItemId\\": \\"10***642-6831****869\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"SkuTitle\\": \\"美味****原味2盒\\",\\n          \\"ReservedPrice\\": 8000,\\n          \\"GuideRetailPrice\\": 7960,\\n          \\"PriceCent\\": 7960,\\n          \\"Status\\": 1,\\n          \\"LowGuideRetailPrice\\": 0\\n        }\\n      ],\\n      \\"LowGuideRetailPriceScope\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '商品建议售价查询接口',
            'summary' => '商品建议售价查询接口。',
            'description' => '查询指定商品的建议售价。',
            'requestParamsDescription' => '查询指定商品的建议售价，一次查询商品建议不超过20个。',
        ],
        'ListDistributionItemWithoutCache' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商id',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '75547******9212928',
                    ],
                ],
                [
                    'name' => 'DistributionMallId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商商城id',
                        'description' => '分销商商城id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '19e690e*****07a29c8',
                    ],
                ],
                [
                    'name' => 'LmItemId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '商品id',
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000***-6193664*****',
                    ],
                ],
                [
                    'name' => 'ItemStatus',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '商品状态',
                        'description' => '商品状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7521****8332932',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PopResponse<List<DistributionItemModel>>',
                        'description' => 'PopResponse<List<DistributionItemModel>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '5127621C-****-5DCA-9745-2936B31DFD12',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '205',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => '每页显示条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '27303',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '请求结果数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'DistributionMallId' => [
                                            'title' => '分销商城ID',
                                            'description' => '分销商城ID',
                                            'type' => 'string',
                                            'example' => '19e690e*****07a29c8',
                                        ],
                                        'SkuModels' => [
                                            'title' => 'sku list',
                                            'description' => '商品规格列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '商品规格信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DistributionMallId' => [
                                                        'title' => '分销商城ID',
                                                        'description' => '分销商城ID',
                                                        'type' => 'string',
                                                        'example' => '19e690e*****07a29c8',
                                                    ],
                                                    'ExtJson' => [
                                                        'title' => '预留扩展字段,JSON-Map结构',
                                                        'description' => '预留扩展字段,JSON-Map结构',
                                                        'type' => 'string',
                                                        'example' => '{}',
                                                    ],
                                                    'LmItemId' => [
                                                        'title' => 'LM商品ID',
                                                        'description' => 'LM商品ID',
                                                        'type' => 'string',
                                                        'example' => '10000***-6193664*****',
                                                    ],
                                                    'ItemId' => [
                                                        'title' => 'IC商品ID',
                                                        'description' => 'IC商品ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '6193664*****',
                                                    ],
                                                    'SkuId' => [
                                                        'title' => '规格ID',
                                                        'description' => '规格ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '488****548894',
                                                    ],
                                                    'SkuPvs' => [
                                                        'title' => 'Sku对应的属性PV值组合',
                                                        'description' => 'Sku对应的属性PV值组合',
                                                        'type' => 'string',
                                                        'example' => '1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                                                    ],
                                                    'SkuPicUrl' => [
                                                        'title' => 'Sku图片',
                                                        'description' => 'Sku图片',
                                                        'type' => 'string',
                                                        'example' => 'img/12344***.jpg',
                                                    ],
                                                    'SkuTitle' => [
                                                        'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                        'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                                                        'type' => 'string',
                                                        'example' => '美味****原味2盒',
                                                    ],
                                                    'Quantity' => [
                                                        'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                        'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '30000',
                                                    ],
                                                    'SimpleQuantity' => [
                                                        'title' => 'SKU模糊化库存'."\n"
                                                            .'例如：有货、无货、库存紧张',
                                                        'description' => 'SKU模糊化库存'."\n"
                                                            .'例如：有货、无货、库存紧张',
                                                        'type' => 'string',
                                                        'example' => '有货、无货、库存紧张',
                                                    ],
                                                    'HasQuantity' => [
                                                        'title' => '是否有库存，返回的是库存状态，有或者没有',
                                                        'description' => '是否有库存，返回的是库存状态，有或者没有',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'ReservedPrice' => [
                                                        'title' => 'IC SKU 一口价，划线价，商品原价（分）',
                                                        'description' => 'IC SKU 一口价，划线价，商品原价（分）',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '8000',
                                                    ],
                                                    'PriceCent' => [
                                                        'title' => '商品销售价格（分）'."\n"
                                                            .'渠道商供货价格',
                                                        'description' => '商品销售价格（分）'."\n"
                                                            .'渠道商供货价格',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '7960',
                                                    ],
                                                    'SupplierPrice' => [
                                                        'description' => '供货价（分）',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '7960',
                                                    ],
                                                    'Status' => [
                                                        'title' => '商品规格售卖状态'."\n"
                                                            .'1：商品可售卖'."\n"
                                                            .'2：商品不可售卖'."\n"
                                                            .'3：商品价格异常'."\n"
                                                            .'4：商品被删除',
                                                        'description' => '商品规格售卖状态'."\n"
                                                            .'1：商品可售卖'."\n"
                                                            .'2：商品不可售卖'."\n"
                                                            .'3：商品价格异常'."\n"
                                                            .'4：商品被删除',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'CustomizedAttributeMap' => [
                                                        'title' => '规格维度的扩展属性PV'."\n"
                                                            .'（客户自定义属性）',
                                                        'description' => '规格维度的扩展属性PV'."\n"
                                                            .'（客户自定义属性）',
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                            'description' => '客户自定义属性',
                                                        ],
                                                    ],
                                                    'LmSkuAttributeMap' => [
                                                        'title' => '规格维度的扩展属性PV'."\n"
                                                            .'（商家扩展属性或系统扩展属性）',
                                                        'description' => '规格维度的扩展属性PV'."\n"
                                                            .'（商家扩展属性或系统扩展属性）',
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                            'example' => '{'."\n"
                                                                .'        "taxInvoice": "100",'."\n"
                                                                .'        "taxRateCode": "1123"'."\n"
                                                                .'      }',
                                                            'description' => 'Linkedmall 平台SKU的属性',
                                                        ],
                                                    ],
                                                    'IsCanNotBeSoldCode' => [
                                                        'title' => '不可售编码，可售时为空',
                                                        'description' => '不可售编码，可售时为空',
                                                        'type' => 'string',
                                                        'example' => 'CAN_NOT_BE_SOLD',
                                                    ],
                                                    'IsCanNotBeSoldMessage' => [
                                                        'title' => '不可售消息，可售时为空',
                                                        'description' => '不可售消息，可售时为空',
                                                        'type' => 'string',
                                                        'example' => '商品不可售',
                                                    ],
                                                    'InvoiceType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SkuPropertys' => [
                                            'title' => 'Sku属性PV对列表',
                                            'description' => 'Sku属性PV对列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'title' => '规格属性ID',
                                                        'description' => '规格属性ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '44042249****',
                                                    ],
                                                    'Text' => [
                                                        'title' => '属性键P',
                                                        'description' => '属性键P',
                                                        'type' => 'string',
                                                        'example' => '颜色分类',
                                                    ],
                                                    'Values' => [
                                                        'title' => '属性值列表',
                                                        'description' => '属性值列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '属性值对',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Id' => [
                                                                    'title' => '属性值ID',
                                                                    'description' => '属性值ID',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '600***',
                                                                ],
                                                                'Text' => [
                                                                    'title' => '属性值V',
                                                                    'description' => '属性值V',
                                                                    'type' => 'string',
                                                                    'example' => '橙色',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LmItemId' => [
                                            'title' => 'lm商品ID',
                                            'description' => 'lm商品ID',
                                            'type' => 'string',
                                            'example' => '1000****-630292****',
                                        ],
                                        'ItemId' => [
                                            'title' => 'IC商品ID',
                                            'description' => 'IC商品ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '65******0310',
                                        ],
                                        'ItemTitle' => [
                                            'title' => '商品名称',
                                            'description' => '商品名称',
                                            'type' => 'string',
                                            'example' => '美味****原味2盒',
                                        ],
                                        'MainPicUrl' => [
                                            'title' => '主图',
                                            'description' => '主图',
                                            'type' => 'string',
                                            'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                        ],
                                        'FirstPicUrl' => [
                                            'title' => '轮播图第一张图',
                                            'description' => '轮播图第一张图',
                                            'type' => 'string',
                                            'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                        ],
                                        'ItemImages' => [
                                            'title' => '商品图片URL，最多10张，一般是Detail上轮播',
                                            'description' => '商品图片URL，最多10张，一般是Detail上轮播',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '商品图片URL',
                                                'type' => 'string',
                                                'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg'."\n",
                                            ],
                                        ],
                                        'DescPath' => [
                                            'title' => '商品详情介绍-图片介绍，URL',
                                            'description' => '商品详情介绍-图片介绍，URL',
                                            'type' => 'string',
                                            'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                                        ],
                                        'DescOption' => [
                                            'title' => '商品详情介绍-图片介绍信息',
                                            'description' => '商品详情介绍-图片介绍信息',
                                            'type' => 'string',
                                            'example' => '<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>',
                                        ],
                                        'MinPrice' => [
                                            'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                            'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3900',
                                        ],
                                        'ReservedPrice' => [
                                            'title' => '商品原价，可用于显示划线价',
                                            'description' => '商品原价，可用于显示划线价',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2000',
                                        ],
                                        'Quantity' => [
                                            'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。',
                                            'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'SimpleQuantity' => [
                                            'title' => '模糊化库存'."\n"
                                                .'例如：有货、无货、库存紧张',
                                            'description' => '模糊化库存'."\n"
                                                .'例如：有货、无货、库存紧张',
                                            'type' => 'string',
                                            'example' => '有货'."\n"
                                                .'无货'."\n"
                                                .'库存紧张',
                                        ],
                                        'HasQuantity' => [
                                            'title' => '是否有库存，返回的是库存状态，有或者没有',
                                            'description' => '是否有库存，返回的是库存状态，有或者没有',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CategoryId' => [
                                            'title' => '类目ID',
                                            'description' => '类目ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5001****',
                                        ],
                                        'CategoryIds' => [
                                            'title' => '类目ID，父类目在前，子类目在后',
                                            'description' => '类目ID，父类目在前，子类目在后',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '类目唯一标识',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '205879***',
                                            ],
                                        ],
                                        'Prov' => [
                                            'title' => '商品所在省份：如浙江',
                                            'description' => '商品所在省份：如浙江',
                                            'type' => 'string',
                                            'example' => '浙江',
                                        ],
                                        'City' => [
                                            'title' => '商品所在城市：如杭州',
                                            'description' => '商品所在城市：如杭州',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'Properties' => [
                                            'title' => '产品属性或产品参数，供Detail页面显示使用'."\n"
                                                .'例如：'."\n"
                                                .'{颜色分类: ["桔色", "军绿色"]}',
                                            'description' => '产品属性或产品参数，供Detail页面显示使用'."\n"
                                                .'例如：'."\n"
                                                .'{颜色分类: ["桔色", "军绿色"]}',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                    'example' => '颜色分类',
                                                ],
                                                'description' => '产品参数',
                                            ],
                                        ],
                                        'Features' => [
                                            'title' => '商家配置产品特征'."\n"
                                                ."\0".'tax_invoice：税率'."\n"
                                                ."\0".'tax_rate_code：税码，全国统一'."\n"
                                                .'extraPeriod：保质期，用于食品'."\n"
                                                .'food_pro_date：生产日期',
                                            'description' => '商家配置产品特征'."\n"
                                                ."\0".'tax_invoice：税率'."\n"
                                                ."\0".'tax_rate_code：税码，全国统一'."\n"
                                                .'extraPeriod：保质期，用于食品'."\n"
                                                .'food_pro_date：生产日期',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '产品特征',
                                                'example' => '{'."\n"
                                                    .'        "taxInvoice": "100",'."\n"
                                                    .'        "taxRateCode": "1123"'."\n"
                                                    .'      }',
                                            ],
                                        ],
                                        'IforestProps' => [
                                            'title' => '关键属性，供Detail页面显示使用'."\n"
                                                .'例如：'."\n"
                                                .'[{value: "军绿色", key: "颜色分类"}, {value: "桔色", key: "颜色分类"}]',
                                            'description' => '关键属性，供Detail页面显示使用'."\n"
                                                .'例如：'."\n"
                                                .'[{value: "军绿色", key: "颜色分类"}, {value: "桔色", key: "颜色分类"}]',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '属性对象',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => '        {'."\n"
                                                        .'          "value": "黄色",'."\n"
                                                        .'          "key": "颜色分类"'."\n"
                                                        .'        }',
                                                    'description' => '属性对象',
                                                ],
                                            ],
                                        ],
                                        'IsSellerPayPostfee' => [
                                            'title' => '是否包邮',
                                            'description' => '是否包邮',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'IsCanSell' => [
                                            'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0',
                                            'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LmItemCategory' => [
                                            'title' => '商品在linkedmall平台的类型'."\n"
                                                .'entity：实物商品'."\n"
                                                .'aliComBenifit：虚拟商品',
                                            'description' => '商品在linkedmall平台的类型'."\n"
                                                .'entity：实物商品'."\n"
                                                .'aliComBenifit：虚拟商品',
                                            'type' => 'string',
                                            'example' => 'entity',
                                        ],
                                        'CustomizedAttributeMap' => [
                                            'title' => '商品维度的扩展属性PV',
                                            'description' => '商品维度的扩展属性PV',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '客户自定义属性',
                                                'example' => '{}',
                                            ],
                                        ],
                                        'LmItemAttributeMap' => [
                                            'title' => '商品维度的扩展属性PV',
                                            'description' => '商品维度的扩展属性PV',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => 'Linkedmall 平台商品属性',
                                                'example' => '{'."\n"
                                                    .'      "taxInvoice": "100",'."\n"
                                                    .'      "taxRateCode": "1123"'."\n"
                                                    .'}',
                                            ],
                                        ],
                                        'Current' => [
                                            'title' => '当前时间',
                                            'description' => '当前时间',
                                            'type' => 'string',
                                            'example' => '2020-01-01 00:00:00',
                                        ],
                                        'VirtualItemType' => [
                                            'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                            'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                                            'type' => 'string',
                                            'example' => 'cardRoll',
                                        ],
                                        'UserType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'SecuredTransactions' => [
                                            'description' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ThirdPartyItemId' => [
                                            'title' => '外部商品id (来自第三方的商品)',
                                            'description' => '外部商品id (来自第三方的商品)',
                                            'type' => 'string',
                                            'example' => '44042249****'."\n",
                                        ],
                                        'ThirdPartyName' => [
                                            'title' => '商品来源 (标记第三方商品的来源)',
                                            'description' => '商品来源 (标记第三方商品的来源)',
                                            'type' => 'string',
                                            'example' => '三方商品来源',
                                        ],
                                        'VideoUrl' => [
                                            'title' => '视频地址',
                                            'description' => '视频地址',
                                            'type' => 'string',
                                            'example' => 'http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/video/edf8d848fa80b1cac055c94652******.mp4',
                                        ],
                                        'VideoPicUrl' => [
                                            'title' => '视频封面地址',
                                            'description' => '视频封面地址',
                                            'type' => 'string',
                                            'example' => 'http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/pic/edf8d848fa80b1cac055c94652*****.jpg',
                                        ],
                                        'IsCanNotBeSoldCode' => [
                                            'title' => '不可售编码，可售时为空',
                                            'description' => '不可售编码，可售时为空',
                                            'type' => 'string',
                                            'example' => 'CAN_NOT_BE_SOLD',
                                        ],
                                        'IsCanNotBeSoldMessage' => [
                                            'title' => '不可售消息，可售时为空',
                                            'description' => '不可售消息，可售时为空',
                                            'type' => 'string',
                                            'example' => '商品不可售',
                                        ],
                                        'ItemTotalValue' => [
                                            'title' => '总量库存值',
                                            'description' => '总量库存值',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100000',
                                        ],
                                        'ItemTotalSimpleValue' => [
                                            'title' => '总量库存模糊值'."\n"
                                                .'例如：'."\n"
                                                .'有货、无货、库存紧张',
                                            'description' => '总量库存模糊值'."\n"
                                                .'例如：'."\n"
                                                .'有货、无货、库存紧张',
                                            'type' => 'string',
                                            'example' => '有货',
                                        ],
                                        'InvoiceType' => [
                                            'description' => '发票类型',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"5127621C-****-5DCA-9745-2936B31DFD12\\",\\n  \\"SubCode\\": \\"205\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 27303,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n      \\"SkuModels\\": [\\n        {\\n          \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n          \\"ExtJson\\": \\"{}\\",\\n          \\"LmItemId\\": \\"10000***-6193664*****\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"SkuPvs\\": \\"1627207:28320;5919063:6536025;12304035:75366283;122216431:27772\\",\\n          \\"SkuPicUrl\\": \\"img/12344***.jpg\\",\\n          \\"SkuTitle\\": \\"美味****原味2盒\\",\\n          \\"Quantity\\": 30000,\\n          \\"SimpleQuantity\\": \\"有货、无货、库存紧张\\",\\n          \\"HasQuantity\\": true,\\n          \\"ReservedPrice\\": 8000,\\n          \\"PriceCent\\": 7960,\\n          \\"SupplierPrice\\": 7960,\\n          \\"Status\\": 1,\\n          \\"CustomizedAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"LmSkuAttributeMap\\": {\\n            \\"key\\": \\"{\\\\n        \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n        \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n      }\\"\\n          },\\n          \\"IsCanNotBeSoldCode\\": \\"CAN_NOT_BE_SOLD\\",\\n          \\"IsCanNotBeSoldMessage\\": \\"商品不可售\\",\\n          \\"InvoiceType\\": 0\\n        }\\n      ],\\n      \\"SkuPropertys\\": [\\n        {\\n          \\"Id\\": 0,\\n          \\"Text\\": \\"颜色分类\\",\\n          \\"Values\\": [\\n            {\\n              \\"Id\\": 0,\\n              \\"Text\\": \\"橙色\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"LmItemId\\": \\"1000****-630292****\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemTitle\\": \\"美味****原味2盒\\",\\n      \\"MainPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n      \\"FirstPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n      \\"ItemImages\\": [\\n        \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\"\\n      ],\\n      \\"DescPath\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n      \\"DescOption\\": \\"<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>\\",\\n      \\"MinPrice\\": 3900,\\n      \\"ReservedPrice\\": 2000,\\n      \\"Quantity\\": 200,\\n      \\"SimpleQuantity\\": \\"有货\\\\n无货\\\\n库存紧张\\",\\n      \\"HasQuantity\\": true,\\n      \\"CategoryId\\": 0,\\n      \\"CategoryIds\\": [\\n        0\\n      ],\\n      \\"Prov\\": \\"浙江\\",\\n      \\"City\\": \\"杭州\\",\\n      \\"Properties\\": {\\n        \\"key\\": [\\n          \\"颜色分类\\"\\n        ]\\n      },\\n      \\"Features\\": {\\n        \\"key\\": \\"{\\\\n        \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n        \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n      }\\"\\n      },\\n      \\"IforestProps\\": [\\n        {\\n          \\"key\\": \\"        {\\\\n          \\\\\\"value\\\\\\": \\\\\\"黄色\\\\\\",\\\\n          \\\\\\"key\\\\\\": \\\\\\"颜色分类\\\\\\"\\\\n        }\\"\\n        }\\n      ],\\n      \\"IsSellerPayPostfee\\": true,\\n      \\"IsCanSell\\": true,\\n      \\"LmItemCategory\\": \\"entity\\",\\n      \\"CustomizedAttributeMap\\": {\\n        \\"key\\": \\"{}\\"\\n      },\\n      \\"LmItemAttributeMap\\": {\\n        \\"key\\": \\"{\\\\n      \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n      \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n}\\"\\n      },\\n      \\"Current\\": \\"2020-01-01 00:00:00\\",\\n      \\"VirtualItemType\\": \\"cardRoll\\",\\n      \\"UserType\\": 0,\\n      \\"SecuredTransactions\\": 1,\\n      \\"ThirdPartyItemId\\": \\"44042249****\\\\n\\",\\n      \\"ThirdPartyName\\": \\"三方商品来源\\",\\n      \\"VideoUrl\\": \\"http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/video/edf8d848fa80b1cac055c94652******.mp4\\",\\n      \\"VideoPicUrl\\": \\"http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n      \\"IsCanNotBeSoldCode\\": \\"CAN_NOT_BE_SOLD\\",\\n      \\"IsCanNotBeSoldMessage\\": \\"商品不可售\\",\\n      \\"ItemTotalValue\\": 100000,\\n      \\"ItemTotalSimpleValue\\": \\"有货\\",\\n      \\"InvoiceType\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => ' 查询商品列表（无本地缓存）',
            'summary' => '查询无缓存分销商商品库内的商品列表，分销商品信息排序规则为商品的添加时间。',
            'description' => '此接口只适用于管控端。',
        ],
        'RenderDistributionOrder' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ItemInfoLists',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '商品信息',
                        'description' => '商品信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品信息',
                            'type' => 'object',
                            'properties' => [
                                'DistributionMallId' => [
                                    'description' => '分销商城ID',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'LmItemId' => [
                                    'description' => 'LM侧商品Id',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Quantity' => [
                                    'description' => '下单数量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'SkuId' => [
                                    'description' => '商品SkuId',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeliveryAddress',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '收货地址',
                        'description' => '收货地址',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionSupplierId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '渠道供应商ID',
                        'description' => '渠道供应商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BuyerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销真实买家ID',
                        'description' => '分销真实买家ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<DistributionRenderOrderResponse>',
                        'description' => 'PopResponse<List<RenderOrderInfosItem>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'RenderOrderInfos' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ItemInfos' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ItemId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuId' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'DistributionMallId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DistributionSupplierId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DistributorId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionFee' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'Quantity' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                            ],
                                                            'ItemUrl' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemPicUrl' => [
                                                                'type' => 'string',
                                                            ],
                                                            'Price' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'CanSell' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'Message' => [
                                                                'type' => 'string',
                                                            ],
                                                            'VirtualItemType' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemPromInstVOS' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'LmItemId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SkuIds' => [
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'type' => 'integer',
                                                                                'format' => 'int64',
                                                                            ],
                                                                        ],
                                                                        'AvailableItems' => [
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'ItemId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'LmItemId' => [
                                                                                        'type' => 'string',
                                                                                    ],
                                                                                    'SkuId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'LmShopId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'TbSellerId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Number' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int32',
                                                                                    ],
                                                                                    'PriceCent' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Points' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'PointsAmount' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'UserPayFee' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Removed' => [
                                                                                        'type' => 'boolean',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                        'TbSellerId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'InstanceId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'PromotionName' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'PromotionType' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'Level' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'DiscountPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'ThresholdPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'SpecialPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'UseStartTime' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'ExpireTime' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Selected' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                        'CanUse' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                        'Reason' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SubBizCode' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Features' => [
                                                                'type' => 'object',
                                                                'additionalProperties' => [
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                            'ReservePrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'DeliveryInfos' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DisplayName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PostFee' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ServiceType' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'InvoiceInfo' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Desc' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'ExtInfo' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'CanSell' => [
                                                    'type' => 'boolean',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                ],
                                                'ShopPromInstVOS' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'LmItemId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuIds' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                ],
                                                            ],
                                                            'AvailableItems' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ItemId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'LmItemId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SkuId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'LmShopId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'TbSellerId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Number' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                        ],
                                                                        'PriceCent' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Points' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'PointsAmount' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'UserPayFee' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Removed' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'TbSellerId' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'InstanceId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionType' => [
                                                                'type' => 'string',
                                                            ],
                                                            'Level' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DiscountPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ThresholdPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'SpecialPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'UseStartTime' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ExpireTime' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'Selected' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'CanUse' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'Reason' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SubBizCode' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UnsellableRenderOrderInfos' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ItemInfos' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ItemId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuId' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'DistributionMallId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DistributionSupplierId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DistributorId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionFee' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'Quantity' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                            ],
                                                            'ItemUrl' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemPicUrl' => [
                                                                'type' => 'string',
                                                            ],
                                                            'Price' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'CanSell' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'Message' => [
                                                                'type' => 'string',
                                                            ],
                                                            'VirtualItemType' => [
                                                                'type' => 'string',
                                                            ],
                                                            'ItemPromInstVOS' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'LmItemId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SkuIds' => [
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'type' => 'integer',
                                                                                'format' => 'int64',
                                                                            ],
                                                                        ],
                                                                        'AvailableItems' => [
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'ItemId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'LmItemId' => [
                                                                                        'type' => 'string',
                                                                                    ],
                                                                                    'SkuId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'LmShopId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'TbSellerId' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Number' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int32',
                                                                                    ],
                                                                                    'PriceCent' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Points' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'PointsAmount' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'UserPayFee' => [
                                                                                        'type' => 'integer',
                                                                                        'format' => 'int64',
                                                                                    ],
                                                                                    'Removed' => [
                                                                                        'type' => 'boolean',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                        'TbSellerId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'InstanceId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'PromotionName' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'PromotionType' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'Level' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'DiscountPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'ThresholdPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'SpecialPrice' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'UseStartTime' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'ExpireTime' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Selected' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                        'CanUse' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                        'Reason' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SubBizCode' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Features' => [
                                                                'type' => 'object',
                                                                'additionalProperties' => [
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                            'ReservePrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'DeliveryInfos' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DisplayName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PostFee' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ServiceType' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'InvoiceInfo' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Desc' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'ExtInfo' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'CanSell' => [
                                                    'type' => 'boolean',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                ],
                                                'ShopPromInstVOS' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'LmItemId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkuIds' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                ],
                                                            ],
                                                            'AvailableItems' => [
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ItemId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'LmItemId' => [
                                                                            'type' => 'string',
                                                                        ],
                                                                        'SkuId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'LmShopId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'TbSellerId' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Number' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                        ],
                                                                        'PriceCent' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Points' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'PointsAmount' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'UserPayFee' => [
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                        ],
                                                                        'Removed' => [
                                                                            'type' => 'boolean',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'TbSellerId' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'InstanceId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'PromotionType' => [
                                                                'type' => 'string',
                                                            ],
                                                            'Level' => [
                                                                'type' => 'string',
                                                            ],
                                                            'DiscountPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ThresholdPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'SpecialPrice' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'UseStartTime' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'ExpireTime' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                            'Selected' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'CanUse' => [
                                                                'type' => 'boolean',
                                                            ],
                                                            'Reason' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SubBizCode' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AddressInfos' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AddressId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'Receiver' => [
                                                    'type' => 'string',
                                                ],
                                                'ReceiverPhone' => [
                                                    'type' => 'string',
                                                ],
                                                'AddressDetail' => [
                                                    'type' => 'string',
                                                ],
                                                'DivisionCode' => [
                                                    'type' => 'string',
                                                ],
                                                'TownDivisionCode' => [
                                                    'type' => 'string',
                                                ],
                                                'IsDefault' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ExtInfo' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'CanSell' => [
                                        'type' => 'boolean',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"\\",\\n  \\"SubCode\\": \\"\\",\\n  \\"SubMessage\\": \\"\\",\\n  \\"PageSize\\": 0,\\n  \\"PageNumber\\": 0,\\n  \\"TotalCount\\": 0,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"\\",\\n  \\"Message\\": \\"\\",\\n  \\"Model\\": {\\n    \\"RenderOrderInfos\\": [\\n      {\\n        \\"ItemInfos\\": [\\n          {\\n            \\"ItemId\\": \\"\\",\\n            \\"ItemName\\": \\"\\",\\n            \\"SkuName\\": \\"\\",\\n            \\"SkuId\\": 0,\\n            \\"DistributionMallId\\": \\"\\",\\n            \\"DistributionSupplierId\\": \\"\\",\\n            \\"DistributorId\\": \\"\\",\\n            \\"PromotionFee\\": 0,\\n            \\"Quantity\\": 0,\\n            \\"ItemUrl\\": \\"\\",\\n            \\"ItemPicUrl\\": \\"\\",\\n            \\"Price\\": 0,\\n            \\"CanSell\\": true,\\n            \\"Message\\": \\"\\",\\n            \\"VirtualItemType\\": \\"\\",\\n            \\"ItemPromInstVOS\\": [\\n              {\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuIds\\": [\\n                  0\\n                ],\\n                \\"AvailableItems\\": [\\n                  {\\n                    \\"ItemId\\": 0,\\n                    \\"LmItemId\\": \\"\\",\\n                    \\"SkuId\\": 0,\\n                    \\"LmShopId\\": 0,\\n                    \\"TbSellerId\\": 0,\\n                    \\"Number\\": 0,\\n                    \\"PriceCent\\": 0,\\n                    \\"Points\\": 0,\\n                    \\"PointsAmount\\": 0,\\n                    \\"UserPayFee\\": 0,\\n                    \\"Removed\\": true\\n                  }\\n                ],\\n                \\"TbSellerId\\": 0,\\n                \\"InstanceId\\": \\"\\",\\n                \\"PromotionName\\": \\"\\",\\n                \\"PromotionType\\": \\"\\",\\n                \\"Level\\": \\"\\",\\n                \\"DiscountPrice\\": 0,\\n                \\"ThresholdPrice\\": 0,\\n                \\"SpecialPrice\\": 0,\\n                \\"UseStartTime\\": 0,\\n                \\"ExpireTime\\": 0,\\n                \\"Selected\\": true,\\n                \\"CanUse\\": true,\\n                \\"Reason\\": \\"\\",\\n                \\"SubBizCode\\": \\"\\"\\n              }\\n            ],\\n            \\"Features\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"ReservePrice\\": 0\\n          }\\n        ],\\n        \\"DeliveryInfos\\": [\\n          {\\n            \\"Id\\": \\"\\",\\n            \\"DisplayName\\": \\"\\",\\n            \\"PostFee\\": 0,\\n            \\"ServiceType\\": 0\\n          }\\n        ],\\n        \\"InvoiceInfo\\": {\\n          \\"Type\\": \\"\\",\\n          \\"Desc\\": \\"\\"\\n        },\\n        \\"ExtInfo\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanSell\\": true,\\n        \\"Message\\": \\"\\",\\n        \\"ShopPromInstVOS\\": [\\n          {\\n            \\"LmItemId\\": \\"\\",\\n            \\"SkuIds\\": [\\n              0\\n            ],\\n            \\"AvailableItems\\": [\\n              {\\n                \\"ItemId\\": 0,\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuId\\": 0,\\n                \\"LmShopId\\": 0,\\n                \\"TbSellerId\\": 0,\\n                \\"Number\\": 0,\\n                \\"PriceCent\\": 0,\\n                \\"Points\\": 0,\\n                \\"PointsAmount\\": 0,\\n                \\"UserPayFee\\": 0,\\n                \\"Removed\\": true\\n              }\\n            ],\\n            \\"TbSellerId\\": 0,\\n            \\"InstanceId\\": \\"\\",\\n            \\"PromotionName\\": \\"\\",\\n            \\"PromotionType\\": \\"\\",\\n            \\"Level\\": \\"\\",\\n            \\"DiscountPrice\\": 0,\\n            \\"ThresholdPrice\\": 0,\\n            \\"SpecialPrice\\": 0,\\n            \\"UseStartTime\\": 0,\\n            \\"ExpireTime\\": 0,\\n            \\"Selected\\": true,\\n            \\"CanUse\\": true,\\n            \\"Reason\\": \\"\\",\\n            \\"SubBizCode\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"UnsellableRenderOrderInfos\\": [\\n      {\\n        \\"ItemInfos\\": [\\n          {\\n            \\"ItemId\\": \\"\\",\\n            \\"ItemName\\": \\"\\",\\n            \\"SkuName\\": \\"\\",\\n            \\"SkuId\\": 0,\\n            \\"DistributionMallId\\": \\"\\",\\n            \\"DistributionSupplierId\\": \\"\\",\\n            \\"DistributorId\\": \\"\\",\\n            \\"PromotionFee\\": 0,\\n            \\"Quantity\\": 0,\\n            \\"ItemUrl\\": \\"\\",\\n            \\"ItemPicUrl\\": \\"\\",\\n            \\"Price\\": 0,\\n            \\"CanSell\\": true,\\n            \\"Message\\": \\"\\",\\n            \\"VirtualItemType\\": \\"\\",\\n            \\"ItemPromInstVOS\\": [\\n              {\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuIds\\": [\\n                  0\\n                ],\\n                \\"AvailableItems\\": [\\n                  {\\n                    \\"ItemId\\": 0,\\n                    \\"LmItemId\\": \\"\\",\\n                    \\"SkuId\\": 0,\\n                    \\"LmShopId\\": 0,\\n                    \\"TbSellerId\\": 0,\\n                    \\"Number\\": 0,\\n                    \\"PriceCent\\": 0,\\n                    \\"Points\\": 0,\\n                    \\"PointsAmount\\": 0,\\n                    \\"UserPayFee\\": 0,\\n                    \\"Removed\\": true\\n                  }\\n                ],\\n                \\"TbSellerId\\": 0,\\n                \\"InstanceId\\": \\"\\",\\n                \\"PromotionName\\": \\"\\",\\n                \\"PromotionType\\": \\"\\",\\n                \\"Level\\": \\"\\",\\n                \\"DiscountPrice\\": 0,\\n                \\"ThresholdPrice\\": 0,\\n                \\"SpecialPrice\\": 0,\\n                \\"UseStartTime\\": 0,\\n                \\"ExpireTime\\": 0,\\n                \\"Selected\\": true,\\n                \\"CanUse\\": true,\\n                \\"Reason\\": \\"\\",\\n                \\"SubBizCode\\": \\"\\"\\n              }\\n            ],\\n            \\"Features\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"ReservePrice\\": 0\\n          }\\n        ],\\n        \\"DeliveryInfos\\": [\\n          {\\n            \\"Id\\": \\"\\",\\n            \\"DisplayName\\": \\"\\",\\n            \\"PostFee\\": 0,\\n            \\"ServiceType\\": 0\\n          }\\n        ],\\n        \\"InvoiceInfo\\": {\\n          \\"Type\\": \\"\\",\\n          \\"Desc\\": \\"\\"\\n        },\\n        \\"ExtInfo\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanSell\\": true,\\n        \\"Message\\": \\"\\",\\n        \\"ShopPromInstVOS\\": [\\n          {\\n            \\"LmItemId\\": \\"\\",\\n            \\"SkuIds\\": [\\n              0\\n            ],\\n            \\"AvailableItems\\": [\\n              {\\n                \\"ItemId\\": 0,\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuId\\": 0,\\n                \\"LmShopId\\": 0,\\n                \\"TbSellerId\\": 0,\\n                \\"Number\\": 0,\\n                \\"PriceCent\\": 0,\\n                \\"Points\\": 0,\\n                \\"PointsAmount\\": 0,\\n                \\"UserPayFee\\": 0,\\n                \\"Removed\\": true\\n              }\\n            ],\\n            \\"TbSellerId\\": 0,\\n            \\"InstanceId\\": \\"\\",\\n            \\"PromotionName\\": \\"\\",\\n            \\"PromotionType\\": \\"\\",\\n            \\"Level\\": \\"\\",\\n            \\"DiscountPrice\\": 0,\\n            \\"ThresholdPrice\\": 0,\\n            \\"SpecialPrice\\": 0,\\n            \\"UseStartTime\\": 0,\\n            \\"ExpireTime\\": 0,\\n            \\"Selected\\": true,\\n            \\"CanUse\\": true,\\n            \\"Reason\\": \\"\\",\\n            \\"SubBizCode\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"AddressInfos\\": [\\n      {\\n        \\"AddressId\\": 0,\\n        \\"Receiver\\": \\"\\",\\n        \\"ReceiverPhone\\": \\"\\",\\n        \\"AddressDetail\\": \\"\\",\\n        \\"DivisionCode\\": \\"\\",\\n        \\"TownDivisionCode\\": \\"\\",\\n        \\"IsDefault\\": true\\n      }\\n    ],\\n    \\"ExtInfo\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"CanSell\\": true,\\n    \\"Message\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '分销采购订单渲染',
            'summary' => '分销订单渲染。',
            'description' => '分销订单渲染',
            'requestParamsDescription' => '```'."\n"
                .'{ '."\n"
                .'    "divisionCode": "区/县的4级divisionCode(街道/镇的上一级地址)", //该字段通过queryAddress接口获取'."\n"
                .'    "townDivisionCode":"街道/镇的5级divisionCode", //该字段通过queryAddress接口获取'."\n"
                .'    "fullName": "收货人姓名", '."\n"
                .'    "mobile": "收货人电话", '."\n"
                .'    "addressDetail": "收货人地址" '."\n"
                .'}'."\n"
                .'```',
        ],
        'ApplyCreateDistributionOrder' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributionOutTradeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '外部交易号',
                        'description' => '如果传入了外部交易号，则会以其作为请求的幂等键，重复传入相同的外部交易号，会返回重复下单提示。外部交易号会在交易结果通知中透出。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '789***3323',
                    ],
                ],
                [
                    'name' => 'ItemInfoLists',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '商品信息',
                        'description' => '商品信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品信息',
                            'type' => 'object',
                            'properties' => [
                                'DistributionMallId' => [
                                    'description' => '分销商城ID',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '465879694****794d70934',
                                ],
                                'LmItemId' => [
                                    'description' => 'Lm侧商品Id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '100***35-634***598',
                                ],
                                'Quantity' => [
                                    'description' => '下单数量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'SkuId' => [
                                    'description' => 'SKU',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '456***9561',
                                ],
                                'Price' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeliveryAddress',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '收货地址',
                        'description' => '收货地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"divisionCode\\":\\"44***22\\",\\"addressDetail\\":\\"**小区\\",\\"mobile\\":\\"180***0041\\",\\"fullName\\":\\"小**\\",\\"townDivisionCode\\":\\"440***32\\"}',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6331***2131',
                    ],
                ],
                [
                    'name' => 'DistributionSupplierId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '渠道供应商ID',
                        'description' => '渠道供应商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '764***2245',
                    ],
                ],
                [
                    'name' => 'BuyerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销真实买家ID',
                        'description' => '分销真实买家ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'u***01',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12***29',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<String>',
                        'description' => 'PopResponse<String>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => 'B1756669-4A***F-A6E0E8605FEC',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '7152F15C-7298-55****76-2ED2C331',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'string',
                                'example' => 'T213***342',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"B1756669-4A***F-A6E0E8605FEC\\",\\n  \\"RequestId\\": \\"7152F15C-7298-55****76-2ED2C331\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": \\"T213***342\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyCreateDistributionOrderResponse>\\n    <LogsId>B1756669-4A***F-A6E0E8605FEC</LogsId>\\n    <RequestId>7152F15C-7298-55****76-2ED2C331</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>20</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>10</TotalCount>\\n    <Success>true</Success>\\n    <Code>0000</Code>\\n    <Message>SUCCESS</Message>\\n    <Model>T213***342</Model>\\n</ApplyCreateDistributionOrderResponse>","errorExample":""}]',
            'title' => '提交分销采购订单创建请求',
            'summary' => '提交分销订单创建请求。',
            'description' => '异步接口,只是提交创建分销订单申请,需要接收分销订单创建结果通知或者主动调查询分销订单状态接口。',
        ],
        'QueryDistributionTradeStatus' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionSupplierId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '渠道供应商ID',
                        'description' => '渠道供应商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionTradeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销交易号',
                        'description' => '分销交易号',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<String>',
                        'description' => 'PopResponse<String>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": \\"\\"\\n}","type":"json"}]',
            'title' => '查询分销交易状态',
            'summary' => '查询分销交易状态。',
            'description' => '只返回分销交易状态。',
        ],
        'ConfirmDisburse4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DistributionTradeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销交易号',
                        'description' => '分销交易号',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MainDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主分销订单号',
                        'description' => '主分销订单号',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<Void>',
                        'description' => 'PopResponse<Void>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '1718921E-C8D4-55E1-B8D4-114AE537C1B7',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"1718921E-C8D4-55E1-B8D4-114AE537C1B7\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
            'title' => ' 分销采购订单确认收货',
            'summary' => '分销订单确认收货。',
            'description' => '只支持主分销订单确认收货',
        ],
        'InitApplyRefund4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizClaimType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款类型',
                        'description' => '退款类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'GoodsStatus',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '货物状态',
                        'description' => '货物状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<InitApplyRefundData>',
                        'description' => 'PopResponse<InitApplyRefundData>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'SubDistributionOrderId' => [
                                        'title' => '子分销订单号',
                                        'description' => '子分销订单号',
                                        'type' => 'string',
                                    ],
                                    'BizClaimType' => [
                                        'title' => '支持的订单退货方式',
                                        'description' => '支持的订单退货方式',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'MainOrderRefund' => [
                                        'title' => '是否是整单退',
                                        'description' => '是否是整单退',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MaxRefundFeeData' => [
                                        'description' => '本单退款金额区间',
                                        'type' => 'object',
                                        'properties' => [
                                            'MaxRefundFee' => [
                                                'title' => '本单最大可退款金额',
                                                'description' => '本单最大可退款金额',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '100',
                                            ],
                                            'MinRefundFee' => [
                                                'title' => '本单最小可退款金额',
                                                'description' => '本单最小可退款金额',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                        ],
                                    ],
                                    'RefundReasonList' => [
                                        'description' => '退款信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '退款信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'ReasonTextId' => [
                                                    'description' => '退款信息id',
                                                    'type' => 'string',
                                                    'example' => '12323',
                                                ],
                                                'ProofRequired' => [
                                                    'title' => '是否要求上传凭证',
                                                    'description' => '是否要求上传凭证',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ReasonTips' => [
                                                    'description' => '退款信息',
                                                    'type' => 'string',
                                                    'example' => '拍多不想要',
                                                ],
                                                'RefundDescRequired' => [
                                                    'title' => '是否要求留言',
                                                    'description' => '是否要求留言',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"BizClaimType\\": 1,\\n    \\"MainOrderRefund\\": false,\\n    \\"MaxRefundFeeData\\": {\\n      \\"MaxRefundFee\\": 100,\\n      \\"MinRefundFee\\": 10\\n    },\\n    \\"RefundReasonList\\": [\\n      {\\n        \\"ReasonTextId\\": \\"12323\\",\\n        \\"ProofRequired\\": true,\\n        \\"ReasonTips\\": \\"拍多不想要\\",\\n        \\"RefundDescRequired\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '分销采购订单退款申请初始化',
            'summary' => '初始化分销订单退款申请。',
            'description' => '注意：订单“未发货”只能申请“仅退款(BizClaimType=1)”，订单“已发货”只能申请货物状态为“未收到货(GoodsStatus=1)”或“已收到货(GoodsStatus=2)”'."\n"
                ."\n"
                .'逆向申请具体情况如下：  '."\n"
                .'payStatus即指订单状态orderStatus  '."\n"
                .'售中（未确认收货 payStatus 2）  '."\n"
                .'仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  '."\n"
                .'仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  '."\n"
                .'退货退款 货物状态 goodstatus 2已收到货  '."\n"
                .'售后（已确认收货 payStatus 6）  '."\n"
                .'仅退款 goodstatus 2已收到货  '."\n"
                .'退货退款 goodstatus 2已收到货',
        ],
        'ApplyRefund4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7662***125',
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DIS_343***445',
                    ],
                ],
                [
                    'name' => 'BizClaimType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款类型',
                        'description' => '退款类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ApplyRefundFee',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请退款金额',
                        'description' => '申请退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '790',
                    ],
                ],
                [
                    'name' => 'ApplyRefundCount',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退货数量',
                        'description' => '退货数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ApplyReasonTextId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款原因ID',
                        'description' => '退款原因ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '500325',
                    ],
                ],
                [
                    'name' => 'LeaveMessage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '留言',
                        'description' => '留言',
                        'type' => 'string',
                        'required' => false,
                        'example' => '快递滞留 买家申请退款',
                    ],
                ],
                [
                    'name' => 'LeavePictureLists',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '凭证',
                        'description' => '凭证列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '退款凭证',
                            'type' => 'object',
                            'properties' => [
                                'Picture' => [
                                    'description' => '图片地址',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://aliyundoc.com',
                                ],
                                'Desc' => [
                                    'description' => '图片描述',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '商品破损',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GoodsStatus',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '货物状态',
                        'description' => '货物状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '213**761',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<RefundApplicationData>',
                        'description' => 'PopResponse<RefundApplicationData>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '539E5C68-D8B5-57EC-9****8AFD9E0',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'SubDistributionOrderId' => [
                                        'title' => '当前发起逆向的子分销订单号',
                                        'description' => '当前发起逆向的子分销订单号',
                                        'type' => 'string',
                                        'example' => 'DIS_343***445',
                                    ],
                                    'DisputeStatus' => [
                                        'title' => '逆向的状态',
                                        'description' => '逆向的状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeType' => [
                                        'title' => '退款类型',
                                        'description' => '退款类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeId' => [
                                        'title' => '纠纷id',
                                        'description' => '纠纷id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '213***343',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9****8AFD9E0\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"DIS_343***445\\",\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ApplyRefund4DistributionResponse>\\n    <LogsId>1</LogsId>\\n    <RequestId>539E5C68-D8B5-57EC-9****8AFD9E0</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Success>true</Success>\\n    <Code>0000</Code>\\n    <Message>SUCCESS</Message>\\n    <Model>\\n        <SubDistributionOrderId>DIS_343***445</SubDistributionOrderId>\\n        <DisputeStatus>1</DisputeStatus>\\n        <DisputeType>1</DisputeType>\\n    </Model>\\n</ApplyRefund4DistributionResponse>","errorExample":""}]',
            'title' => '分销采购订单退款申请',
            'summary' => '分销订单退款申请。',
            'description' => '基于 initApplyRefund4Distribution接口获取退款申请初始化信息，发起退款或者退货退款申请，该接口不支持退换货。  '."\n"
                ."\n"
                .'注意：  '."\n"
                .'1.如果退款申请被卖家拒绝(通过queryRefundApplicationDetail4Distribution接口查询到disputeStatus为6时)，需要先取消退款申请(通过cancelRefund接口)，再申请下一次  '."\n"
                .'2.正常售中允许申请退款三次，售后允许申请退款两次，如遇超过次数后不能申请退款，需自行联系商家打开线上退款入口（售中和售后的界定边缘为：确认收货）  '."\n"
                .'逆向申请具体情况如下：payStatus即指订单状态orderStatus  '."\n"
                .'售中（未确认收货 payStatus 2）  '."\n"
                .'仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  '."\n"
                .'仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  '."\n"
                .'退货退款 货物状态 goodstatus 2已收到货  '."\n"
                .'售后（已确认收货 payStatus 6）  '."\n"
                .'仅退款 goodstatus 2已收到货  '."\n"
                .'退货退款 goodstatus 2已收到货  '."\n"
                .'上传退款凭证须知：由于部分商家内部小二网络环境较差，请务必使用阿里云的oss服务作为您的图片存储，详细请参考：https://help.aliyun.com/document_detail/194635.htm',
        ],
        'InitModifyRefund4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizClaimType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款类型',
                        'description' => '退款类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DisputeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '纠纷ID',
                        'description' => '纠纷ID，通过查询订单逆向申请详情接口获取',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '14244******33071',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<InitApplyRefundData>',
                        'description' => 'PopResponse<InitApplyRefundData>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'SubDistributionOrderId' => [
                                        'title' => '子分销订单号',
                                        'description' => '子分销订单号',
                                        'type' => 'string',
                                    ],
                                    'BizClaimType' => [
                                        'title' => '支持的订单退货方式',
                                        'description' => '支持的订单退货方式',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'MainOrderRefund' => [
                                        'title' => '是否是整单退',
                                        'description' => '是否是整单退',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MaxRefundFeeData' => [
                                        'description' => '本单可退金额数据',
                                        'type' => 'object',
                                        'properties' => [
                                            'MaxRefundFee' => [
                                                'title' => '本单最大可退款金额',
                                                'description' => '本单最大可退款金额',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'MinRefundFee' => [
                                                'title' => '本单最小可退款金额',
                                                'description' => '本单最小可退款金额',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '100',
                                            ],
                                        ],
                                    ],
                                    'RefundReasonList' => [
                                        'description' => '退款信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '退款信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'ReasonTextId' => [
                                                    'description' => '退款信息id',
                                                    'type' => 'string',
                                                    'example' => '12323',
                                                ],
                                                'ProofRequired' => [
                                                    'title' => '是否要求上传凭证',
                                                    'description' => '是否要求上传凭证',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ReasonTips' => [
                                                    'description' => '退款信息',
                                                    'type' => 'string',
                                                    'example' => '拍多不想要',
                                                ],
                                                'RefundDescRequired' => [
                                                    'title' => '是否要求留言',
                                                    'description' => '是否要求留言',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"BizClaimType\\": 1,\\n    \\"MainOrderRefund\\": false,\\n    \\"MaxRefundFeeData\\": {\\n      \\"MaxRefundFee\\": 10,\\n      \\"MinRefundFee\\": 100\\n    },\\n    \\"RefundReasonList\\": [\\n      {\\n        \\"ReasonTextId\\": \\"12323\\",\\n        \\"ProofRequired\\": true,\\n        \\"ReasonTips\\": \\"拍多不想要\\",\\n        \\"RefundDescRequired\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '分销采购订单退款申请修改初始化',
            'summary' => '分销订单退款申请修改初始化。',
            'description' => '获取订单相关的逆向修改数据，必须在发起退款申请之后调用。  '."\n"
                ."\n"
                .'注意：订单“未发货”只能申请“仅退款(BizClaimType=1)”，订单“已发货”只能申请货物状态为“未收到货(GoodsStatus=1)”或“已收到货(GoodsStatus=2)”  '."\n"
                .'逆向修改申请具体情况如下：payStatus即指订单状态orderStatus  '."\n"
                .'售中（未确认收货 payStatus 2）  '."\n"
                .'仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  '."\n"
                .'仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  '."\n"
                .'退货退款 货物状态 goodstatus 2已收到货  '."\n"
                .'售后（已确认收货 payStatus 6）  '."\n"
                .'仅退款 goodstatus 2已收到货  '."\n"
                .'退货退款 goodstatus 2已收到货  ',
        ],
        'ModifyRefund4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '766***221',
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DIS_153***851',
                    ],
                ],
                [
                    'name' => 'BizClaimType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款类型',
                        'description' => '退款类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ApplyRefundFee',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请退款金额',
                        'description' => '申请退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '790',
                    ],
                ],
                [
                    'name' => 'ApplyRefundCount',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退货数量',
                        'description' => '退货数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ApplyReasonTextId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退款原因ID',
                        'description' => '退款原因ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '500325',
                    ],
                ],
                [
                    'name' => 'LeaveMessage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '留言',
                        'description' => '留言',
                        'type' => 'string',
                        'required' => false,
                        'example' => '快递滞留 买家申请退款',
                    ],
                ],
                [
                    'name' => 'LeavePictureLists',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '凭证',
                        'description' => '凭证列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '退款凭证信息',
                            'type' => 'object',
                            'properties' => [
                                'Desc' => [
                                    'description' => '图片描述',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://aliyundoc.com',
                                ],
                                'Picture' => [
                                    'description' => '图片地址',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '商品破损',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GoodsStatus',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '货物状态',
                        'description' => '货物状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DisputeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '纠纷id',
                        'description' => '纠纷id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '235***343',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '213**112',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<RefundApplicationData>',
                        'description' => 'PopResponse<RefundApplicationData>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '539E5C68-D8B5-57EC-9****8AFD9E0',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'SUCCESS',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'SubDistributionOrderId' => [
                                        'title' => '当前发起逆向的子分销订单号',
                                        'description' => '当前发起逆向的子分销订单号',
                                        'type' => 'string',
                                        'example' => 'DIS_153***851',
                                    ],
                                    'DisputeStatus' => [
                                        'title' => '逆向的状态',
                                        'description' => '逆向的状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'DisputeType' => [
                                        'title' => '退款类型',
                                        'description' => '退款类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeId' => [
                                        'title' => '纠纷id',
                                        'description' => '纠纷id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '235***343',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9****8AFD9E0\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"DIS_153***851\\",\\n    \\"DisputeStatus\\": 5,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifyRefund4DistributionResponse>\\n    <LogsId>1</LogsId>\\n    <RequestId>539E5C68-D8B5-57EC-9****8AFD9E0</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Success>false</Success>\\n    <Code>0000</Code>\\n    <Message>\\"\\"</Message>\\n    <Model>\\n        <SubDistributionOrderId>DIS_153***851</SubDistributionOrderId>\\n        <DisputeStatus>5</DisputeStatus>\\n        <DisputeType>1</DisputeType>\\n    </Model>\\n</ModifyRefund4DistributionResponse>","errorExample":""}]',
            'title' => '分销采购订单退款申请修改',
            'summary' => '分销订单退款申请修改。',
            'description' => '基于 initModifyRefund4Distribution 接口获取退款信息，发起退款或者退货退款修改申请，该接口不支持退换货'."\n"
                ."\n"
                .'注意：  '."\n"
                .'1.退款申请被卖家拒绝(通过queryRefundApplicationDetail4Distribution 接口查询到disputeStatus为6时)后，通过逆向修改申请借款，重新发起退款申请  '."\n"
                .'2.正常售中允许申请退款三次，售后允许申请退款两次，如遇超过次数后不能申请退款，需自行联系商家打开线上退款入口（售中和售后的界定边缘为：确认收货）  '."\n"
                .'逆向修改申请具体情况如下：payStatus即指订单状态orderStatus  '."\n"
                .'售中（未确认收货 payStatus 2）  '."\n"
                .'仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  '."\n"
                .'仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  '."\n"
                .'退货退款 货物状态 goodstatus 2已收到货  '."\n"
                .'售后（已确认收货 payStatus 6）  '."\n"
                .'仅退款 goodstatus 2已收到货  '."\n"
                .'退货退款 goodstatus 2已收到货  '."\n"
                .'上传退款凭证须知：由于部分商家内部小二网络环境较差，请务必使用阿里云的oss服务作为您的图片存储，详细请参考： '."\n"
                .' https://help.aliyun.com/document_detail/194635.htm',
        ],
        'CancelRefund4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisputeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '纠纷ID',
                        'description' => '纠纷ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '14244******33071',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<RefundApplicationData>',
                        'description' => 'PopResponse<RefundApplicationData>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '3B55509D-20AC-5BD5-9A81-D6B7382E****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'SubDistributionOrderId' => [
                                        'title' => '当前发起逆向的子分销订单号',
                                        'description' => '当前发起逆向的子分销订单号',
                                        'type' => 'string',
                                    ],
                                    'DisputeStatus' => [
                                        'title' => '逆向的状态',
                                        'description' => '逆向的状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeType' => [
                                        'title' => '退款类型',
                                        'description' => '退款类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeId' => [
                                        'title' => '纠纷id',
                                        'description' => '纠纷id',
                                        'type' => 'integer',
                                        'format' => 'int64',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"3B55509D-20AC-5BD5-9A81-D6B7382E****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '取消分销采购订单退款申请',
            'summary' => '取消分销订单退款申请。',
            'description' => '如果已经提交了退款申请，商家还未响应时，客户想取消退款申请，可以通过此接口取消。  '."\n"
                .'注意：disputeId字段需要通过查询订单逆向申请详情（queryRefundApplicationDetail4DistributionOrder）接口获取'."\n",
        ],
        'SubmitReturnGoodLogistics4Distribution' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisputeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '纠纷ID',
                        'description' => '纠纷ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '14244******33071',
                    ],
                ],
                [
                    'name' => 'LogisticsNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '物流单号',
                        'description' => '物流单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' SF131*****7061',
                    ],
                ],
                [
                    'name' => 'CpCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '公司代码',
                        'description' => '公司代码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SF',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<Void>',
                        'description' => 'PopResponse<Void>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '79C01D47-3C44-57D9-BC99-1B33F7ED****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '16',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"79C01D47-3C44-57D9-BC99-1B33F7ED****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 16,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
            'title' => ' 提交分销采购订单退货物流信息',
            'summary' => '如果提交了退货申请，通过该接口提交退货的物流信息。',
            'description' => '注意：  '."\n"
                .'1.只有在卖家同意退款(通过queryRefundApplicationDetail4DistributionOrder接口查询到disputeStatus为2时)且需要退回货物时，才能调此接口  '."\n"
                .'2.DisputeId字段需要通过查询订单逆向申请详情（queryRefundApplicationDetail4DistributionOrder）接口获取',
        ],
        'QueryRefundApplicationDetail4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<RefundApplicationDetail>',
                        'description' => 'PopResponse<RefundApplicationDetail>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '64ACF32E-5B78-5DDD-89D0-ACFA0B4BFF38',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'ApplyDisputeDesc' => [
                                        'description' => '当前买家申请退款说明',
                                        'type' => 'string',
                                        'example' => '拍多不想要',
                                    ],
                                    'ApplyReason' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'ReasonTextId' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'ReasonTips' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'BizClaimType' => [
                                        'description' => '退款类型。1 仅退款, 3 退货退款',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeCreateTime' => [
                                        'description' => '逆向发起时间',
                                        'type' => 'string',
                                    ],
                                    'DisputeDesc' => [
                                        'description' => '申请逆向描述',
                                        'type' => 'string',
                                    ],
                                    'DisputeEndTime' => [
                                        'description' => '逆向结束时间',
                                        'type' => 'string',
                                    ],
                                    'DisputeId' => [
                                        'description' => '纠纷ID，通过查询订单逆向申请详情接⼝获取',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '155816643598654055',
                                    ],
                                    'DisputeStatus' => [
                                        'description' => '逆向退款的状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisputeType' => [
                                        'description' => '逆向发生的类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DistributionOrderId' => [
                                        'description' => '对应主分销订单号',
                                        'type' => 'string',
                                        'example' => '123498124',
                                    ],
                                    'RefundFeeData' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MaxRefundFee' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'MinRefundFee' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                        ],
                                    ],
                                    'OrderLogisticsStatus' => [
                                        'description' => ' 当前的订单的物流状态，1，标识未发货',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'RealRefundFee' => [
                                        'description' => '实际买家收到的⾦额',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2900',
                                    ],
                                    'RefundFee' => [
                                        'description' => '退款⾦额(含退平台补贴的⾦额)',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2900',
                                    ],
                                    'RefunderAddress' => [
                                        'description' => '商家退货地址，卖家同意退货后才会显示',
                                        'type' => 'string',
                                    ],
                                    'RefunderName' => [
                                        'description' => '退货收货人，卖家同意退货后才会显示',
                                        'type' => 'string',
                                    ],
                                    'RefunderTel' => [
                                        'description' => '退货联系方式，卖家同意退货后才会显示',
                                        'type' => 'string',
                                    ],
                                    'RefunderZipCode' => [
                                        'description' => '退货地址邮编，卖家同意退货后才会显示',
                                        'type' => 'string',
                                    ],
                                    'ReturnGoodCount' => [
                                        'description' => '退货数量',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'ReturnGoodLogisticsStatus' => [
                                        'description' => '退货物流状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'SellerAgreeMsg' => [
                                        'description' => '卖家同意退货说明,真实的退货地址会在这个字段进⾏返回',
                                        'type' => 'string',
                                        'example' => '同意退款',
                                    ],
                                    'SellerRefuseAgreementMessage' => [
                                        'description' => '卖家拒绝的留⾔说明',
                                        'type' => 'string',
                                        'example' => '商品没问题，买家举证无效',
                                    ],
                                    'SellerRefuseReason' => [
                                        'description' => '卖家拒绝原因',
                                        'type' => 'string',
                                        'example' => '商品没问题，买家举证无效',
                                    ],
                                    'SubDistributionOrderId' => [
                                        'description' => '子分销订单号',
                                        'type' => 'string',
                                        'example' => '12131234',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"64ACF32E-5B78-5DDD-89D0-ACFA0B4BFF38\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"ApplyDisputeDesc\\": \\"拍多不想要\\",\\n    \\"ApplyReason\\": {\\n      \\"ReasonTextId\\": 0,\\n      \\"ReasonTips\\": \\"\\"\\n    },\\n    \\"BizClaimType\\": 1,\\n    \\"DisputeCreateTime\\": \\"\\",\\n    \\"DisputeDesc\\": \\"\\",\\n    \\"DisputeEndTime\\": \\"\\",\\n    \\"DisputeId\\": 155816643598654050,\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 0,\\n    \\"DistributionOrderId\\": \\"123498124\\",\\n    \\"RefundFeeData\\": {\\n      \\"MaxRefundFee\\": 0,\\n      \\"MinRefundFee\\": 0\\n    },\\n    \\"OrderLogisticsStatus\\": 1,\\n    \\"RealRefundFee\\": 2900,\\n    \\"RefundFee\\": 2900,\\n    \\"RefunderAddress\\": \\"\\",\\n    \\"RefunderName\\": \\"\\",\\n    \\"RefunderTel\\": \\"\\",\\n    \\"RefunderZipCode\\": \\"\\",\\n    \\"ReturnGoodCount\\": 1,\\n    \\"ReturnGoodLogisticsStatus\\": 1,\\n    \\"SellerAgreeMsg\\": \\"同意退款\\",\\n    \\"SellerRefuseAgreementMessage\\": \\"商品没问题，买家举证无效\\",\\n    \\"SellerRefuseReason\\": \\"商品没问题，买家举证无效\\",\\n    \\"SubDistributionOrderId\\": \\"12131234\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询分销采购订单退款申请',
            'summary' => '基于子分销订单号查询逆向申请的详情。',
            'description' => '基于子分销订单号查询逆向申请的详情。'."\n"
                ."\n"
                .'注意：一般申请退款成功之后通过此接口确认逆向的状态(disputeStatus)以及纠纷id(disputeId)等  '."\n"
                .'特别说明：退货信息请优先参考sellerAgreeMsg字段，如果该字段为空、null、或者不包含退货地址、手机号等信息时，再参考refunderAddress、refunderName、refunderTel等字段  ',
        ],
        'QueryLogistics4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RequestId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'E090F1A0-7454-5F36-933C-E6332CE2****',
                    ],
                ],
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MainDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主分销订单号',
                        'description' => '主分销订单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123498124',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<DataItem>>',
                        'description' => 'PopResponse<List<DataItem>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'DataProvider' => [
                                            'description' => '数据来源：如：菜鸟裹裹',
                                            'type' => 'string',
                                            'example' => '菜鸟裹裹',
                                        ],
                                        'DataProviderTitle' => [
                                            'description' => '数据来源说明，如：本数据由菜⻦裹裹提供',
                                            'type' => 'string',
                                            'example' => '本数据由菜鸟裹裹提供',
                                        ],
                                        'Goods' => [
                                            'description' => '货物信息列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '货物信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'GoodName' => [
                                                        'description' => '货物名字，不保证有，⼀个主单只有⼀个商品可能没有该值，物流未获取物流'."\n"
                                                            .'公司物流号之前也没有该值',
                                                        'type' => 'string',
                                                        'example' => '货物名称',
                                                    ],
                                                    'ItemId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Quantity' => [
                                                        'description' => '下单数量',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'SkuId' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LogisticsCompanyCode' => [
                                            'description' => '本单物流公司code',
                                            'type' => 'string',
                                            'example' => 'SF',
                                        ],
                                        'LogisticsCompanyName' => [
                                            'description' => '本单物流公司名称',
                                            'type' => 'string',
                                            'example' => '顺丰',
                                        ],
                                        'LogisticsDetailList' => [
                                            'description' => '物流信息列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '物流信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OcurrTimeStr' => [
                                                        'description' => '发生时间',
                                                        'type' => 'string',
                                                        'example' => '2022-02-21 08:23:21',
                                                    ],
                                                    'StanderdDesc' => [
                                                        'description' => '物流信息',
                                                        'type' => 'string',
                                                        'example' => '""',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'MailNo' => [
                                            'description' => '运单号',
                                            'type' => 'string',
                                            'example' => 'SF124142********',
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
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DataProvider\\": \\"菜鸟裹裹\\",\\n      \\"DataProviderTitle\\": \\"本数据由菜鸟裹裹提供\\",\\n      \\"Goods\\": [\\n        {\\n          \\"GoodName\\": \\"货物名称\\",\\n          \\"ItemId\\": \\"\\",\\n          \\"Quantity\\": 1,\\n          \\"SkuId\\": \\"\\"\\n        }\\n      ],\\n      \\"LogisticsCompanyCode\\": \\"SF\\",\\n      \\"LogisticsCompanyName\\": \\"顺丰\\",\\n      \\"LogisticsDetailList\\": [\\n        {\\n          \\"OcurrTimeStr\\": \\"2022-02-21 08:23:21\\",\\n          \\"StanderdDesc\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"MailNo\\": \\"SF124142********\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分销采购订单物流查询',
            'summary' => '分销订单物流查询。',
            'description' => '分销订单物流查询',
        ],
        'QueryChildDivisionCodeById' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'DivisionCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<QueryDivisionResponse>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'type' => 'string',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'DivisionList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParentId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'DivisionCode' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'DivisionName' => [
                                                    'type' => 'string',
                                                ],
                                                'DivisionLevel' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'Pinyin' => [
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'QueryOrderDetail4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MainDistributionOrderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主分销订单号',
                        'description' => '主分销订单号',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<DistributionOrderInfo>',
                        'description' => 'PopResponse<DistributionOrderInfo>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => 'BA157565-3358-5D80-9330-************',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'CreateDate' => [
                                        'description' => '下单时间,格式化(yyyy-MM-dd HH:mm:ss)',
                                        'type' => 'string',
                                    ],
                                    'DistributorId' => [
                                        'description' => '分销商ID',
                                        'type' => 'string',
                                    ],
                                    'LogisticsStatus' => [
                                        'description' => '物流状态(由于此字段为定时从主站同步的,会存在延迟,最⻓可能⼏天才同步)',
                                        'type' => 'string',
                                    ],
                                    'DistributionOrderId' => [
                                        'description' => '分销订单号',
                                        'type' => 'string',
                                    ],
                                    'OrderAmount' => [
                                        'description' => '订单总金额',
                                        'type' => 'string',
                                    ],
                                    'OrderStatus' => [
                                        'description' => '订单状态，6=交易成功',
                                        'type' => 'string',
                                        'example' => '6',
                                    ],
                                    'SubOrderList' => [
                                        'description' => '分销子订单列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '分销子订单',
                                            'type' => 'object',
                                            'properties' => [
                                                'ItemPic' => [
                                                    'description' => '商品图片',
                                                    'type' => 'string',
                                                ],
                                                'ItemPrice' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'FundAmountMoney' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ItemTitle' => [
                                                    'description' => '商品名称',
                                                    'type' => 'string',
                                                    'example' => '芝麻小饼',
                                                ],
                                                'ItemId' => [
                                                    'type' => 'string',
                                                ],
                                                'Number' => [
                                                    'description' => '下单数量',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'OrderStatus' => [
                                                    'description' => '订单状态',
                                                    'type' => 'string',
                                                    'example' => '6',
                                                ],
                                                'LogisticsStatus' => [
                                                    'type' => 'string',
                                                ],
                                                'SkuId' => [
                                                    'description' => '商品SkuId',
                                                    'type' => 'string',
                                                    'example' => '4771634532960',
                                                ],
                                                'SkuName' => [
                                                    'description' => '下单的商品sku显示的名称',
                                                    'type' => 'string',
                                                    'example' => '500g',
                                                ],
                                                'SubDistributionOrderId' => [
                                                    'description' => '子分销订单号',
                                                    'type' => 'string',
                                                ],
                                                'MainDistributionOrderId' => [
                                                    'description' => '主分销订单号',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"BA157565-3358-5D80-9330-************\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"CreateDate\\": \\"\\",\\n    \\"DistributorId\\": \\"\\",\\n    \\"LogisticsStatus\\": \\"\\",\\n    \\"DistributionOrderId\\": \\"\\",\\n    \\"OrderAmount\\": \\"\\",\\n    \\"OrderStatus\\": \\"6\\",\\n    \\"SubOrderList\\": [\\n      {\\n        \\"ItemPic\\": \\"\\",\\n        \\"ItemPrice\\": [\\n          {\\n            \\"FundAmountMoney\\": \\"\\"\\n          }\\n        ],\\n        \\"ItemTitle\\": \\"芝麻小饼\\",\\n        \\"ItemId\\": \\"\\",\\n        \\"Number\\": \\"1\\",\\n        \\"OrderStatus\\": \\"6\\",\\n        \\"LogisticsStatus\\": \\"\\",\\n        \\"SkuId\\": \\"4771634532960\\",\\n        \\"SkuName\\": \\"500g\\",\\n        \\"SubDistributionOrderId\\": \\"\\",\\n        \\"MainDistributionOrderId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询分销采购订单详情',
            'summary' => '查询分销订单详情。',
            'description' => '查询分销订单详情',
        ],
        'QueryOrderList4Distribution' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterOption',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '订单过滤条件',
                        'description' => '订单过滤条件',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页行数',
                        'description' => '每页行数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<List<DistributionOrderInfo>>',
                        'description' => 'PopResponse<List<DistributionOrderInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '1267088B-4695-50DC-97B9-9E4F89D1****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '16',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Model' => [
                                'title' => '请求结果数据',
                                'description' => '请求结果数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateDate' => [
                                            'description' => '下单时间,格式化(yyyy-MM-dd HH:mm:ss)',
                                            'type' => 'string',
                                        ],
                                        'DistributorId' => [
                                            'description' => '分销商ID',
                                            'type' => 'string',
                                        ],
                                        'LogisticsStatus' => [
                                            'description' => '物流状态',
                                            'type' => 'string',
                                        ],
                                        'DistributionOrderId' => [
                                            'description' => '分销订单号',
                                            'type' => 'string',
                                        ],
                                        'OrderAmount' => [
                                            'description' => '订单总金额',
                                            'type' => 'string',
                                        ],
                                        'OrderStatus' => [
                                            'description' => '订单状态，6=交易成功',
                                            'type' => 'string',
                                            'example' => '6',
                                        ],
                                        'SubOrderList' => [
                                            'description' => '子分销订单列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '子分销订单',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ItemPic' => [
                                                        'description' => '商品图片',
                                                        'type' => 'string',
                                                    ],
                                                    'ItemPrice' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'FundAmountMoney' => [
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'ItemTitle' => [
                                                        'description' => '商品名称',
                                                        'type' => 'string',
                                                        'example' => '冰鲜去皮鸭颈',
                                                    ],
                                                    'ItemId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Number' => [
                                                        'description' => '下单数量',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'OrderStatus' => [
                                                        'description' => '订单状态，6=交易成功',
                                                        'type' => 'string',
                                                        'example' => '6',
                                                    ],
                                                    'LogisticsStatus' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SkuId' => [
                                                        'description' => '商品的SkuId',
                                                        'type' => 'string',
                                                        'example' => '4961467806350',
                                                    ],
                                                    'SkuName' => [
                                                        'description' => '下单的商品sku显示的名称',
                                                        'type' => 'string',
                                                        'example' => '500g',
                                                    ],
                                                    'SubDistributionOrderId' => [
                                                        'description' => '子分销订单编号',
                                                        'type' => 'string',
                                                    ],
                                                    'MainDistributionOrderId' => [
                                                        'description' => '主分销订单编号',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"1267088B-4695-50DC-97B9-9E4F89D1****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 16,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"CreateDate\\": \\"\\",\\n      \\"DistributorId\\": \\"\\",\\n      \\"LogisticsStatus\\": \\"\\",\\n      \\"DistributionOrderId\\": \\"\\",\\n      \\"OrderAmount\\": \\"\\",\\n      \\"OrderStatus\\": \\"6\\",\\n      \\"SubOrderList\\": [\\n        {\\n          \\"ItemPic\\": \\"\\",\\n          \\"ItemPrice\\": [\\n            {\\n              \\"FundAmountMoney\\": \\"\\"\\n            }\\n          ],\\n          \\"ItemTitle\\": \\"冰鲜去皮鸭颈\\",\\n          \\"ItemId\\": \\"\\",\\n          \\"Number\\": \\"1\\",\\n          \\"OrderStatus\\": \\"6\\",\\n          \\"LogisticsStatus\\": \\"\\",\\n          \\"SkuId\\": \\"4961467806350\\",\\n          \\"SkuName\\": \\"500g\\",\\n          \\"SubDistributionOrderId\\": \\"\\",\\n          \\"MainDistributionOrderId\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询分销采购订单列表',
            'summary' => '查询分销订单列表。',
            'description' => '查询分销订单列表',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'	"orderStatus":"12=待支付，2=已支付，4=已退款关闭，6=交易成功，8=被淘宝关闭 ",'."\n"
                .'	"logisticsStatus":"  1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单",'."\n"
                .'	"orderList":["主分销订单列表"], //订单号数量上限20个'."\n"
                .'    "filter": "createTime>12323 AND createTime<45454" //过滤条件，目前只支持创单时间, 传单时间的值为unix时间戳, 支持<,>,>=,<=, !=,=, AND,OR'."\n"
                .'}'."\n"
                .'```',
        ],
        'CancelDistributionTrade' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DistributorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DistributionTradeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分销交易号',
                        'description' => '分销交易号，可能包含多笔主单',
                        'type' => 'string',
                        'required' => false,
                        'example' => '15303515*******',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户Id',
                        'description' => '租户Id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResponse<Void>',
                        'description' => 'PopResponse<Void>',
                        'type' => 'object',
                        'properties' => [
                            'LogsId' => [
                                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                                'type' => 'string',
                                'example' => '5127621C-56B0-5DCA-9745-2936B31D****',
                            ],
                            'SubCode' => [
                                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubMessage' => [
                                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                                'type' => 'string',
                                'example' => '1004',
                            ],
                            'PageSize' => [
                                'title' => 'pageSize',
                                'description' => 'pageSize',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '当前页',
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '总数量',
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '19',
                            ],
                            'Success' => [
                                'title' => '本次执行的结果成功与否',
                                'description' => '本次执行的结果成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'title' => '返回的执行结果码， 正确为字符串 0000',
                                'description' => '返回的执行结果码， 正确为字符串 0000',
                                'type' => 'string',
                                'example' => '0000',
                            ],
                            'Message' => [
                                'title' => '错误消息',
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTag.Mismatch',
                        'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
                    ],
                    [
                        'errorCode' => 'InvalidTagCount',
                        'errorMessage' => 'The specified tags are beyond the permitted range.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidInstanceChargeType.NotFound',
                        'errorMessage' => 'The InstanceChargeType does not exist in our records',
                    ],
                    [
                        'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
                        'errorMessage' => 'The specified InternetChargeType is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"5127621C-56B0-5DCA-9745-2936B31D****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 19,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
            'summary' => '取消/关闭分销交易。',
            'description' => '分销域给上游通知成功走退款，分销域未通知交易成功前走取消',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'linkedmall-distributor.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
    ],
];
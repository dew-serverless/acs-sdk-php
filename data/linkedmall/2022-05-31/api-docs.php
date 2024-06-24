<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'linkedmall',
    'version' => '2022-05-31',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 182178,
      'title' => '分销商管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDistributionMall',
        1 => 'ListDistributionMall',
        2 => 'QueryDistributionBillDetail',
      ),
    ),
    1 => 
    array (
      'id' => 182182,
      'title' => '分销商品管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListDistributionItem',
        1 => 'QueryItemDetail',
        2 => 'QueryItemDetailWithDivision',
        3 => 'QueryMallCategoryList',
        4 => 'QueryItemGuideRetailPrice',
        5 => 'ListDistributionItemWithoutCache',
      ),
    ),
    2 => 
    array (
      'id' => 182163,
      'title' => '分销交易',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RenderDistributionOrder',
        1 => 'ApplyCreateDistributionOrder',
        2 => 'QueryDistributionTradeStatus',
        3 => 'ConfirmDisburse4Distribution',
        4 => 'InitApplyRefund4Distribution',
        5 => 'ApplyRefund4Distribution',
        6 => 'InitModifyRefund4Distribution',
        7 => 'ModifyRefund4Distribution',
        8 => 'CancelRefund4Distribution',
        9 => 'SubmitReturnGoodLogistics4Distribution',
        10 => 'QueryRefundApplicationDetail4Distribution',
        11 => 'QueryLogistics4Distribution',
        12 => 'QueryChildDivisionCodeById',
      ),
    ),
    3 => 
    array (
      'id' => 182160,
      'title' => '分销订单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryOrderDetail4Distribution',
        1 => 'QueryOrderList4Distribution',
      ),
    ),
    4 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CancelDistributionTrade',
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
    'QueryDistributionMall' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商城id',
            'description' => '分销商城id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<QueryDistributionMallModel>',
            'description' => 'PopResponse<QueryDistributionMallModel>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '539E5C68-D8B5-57EC-9D9B-58AFD9E0****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'DistributorId' => 
                  array (
                    'title' => '分销商id',
                    'description' => '分销商id',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'DistributionMallId' => 
                  array (
                    'title' => '分销商城id',
                    'description' => '分销商城id',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'DistributionMallName' => 
                  array (
                    'title' => '分销商城名称',
                    'description' => '分销商城名称',
                    'type' => 'string',
                    'example' => '分销商城名称',
                  ),
                  'ChannelSupplierId' => 
                  array (
                    'title' => '渠道供应商id',
                    'description' => '渠道供应商id',
                    'type' => 'string',
                  ),
                  'DistributionMallType' => 
                  array (
                    'title' => '商城模式',
                    'description' => '商城模式（SaaS，API）',
                    'type' => 'string',
                    'example' => 'SaaS',
                  ),
                  'StartDate' => 
                  array (
                    'title' => '开始时间',
                    'description' => '开始时间',
                    'type' => 'string',
                    'example' => '2021-12-10 00:00:00',
                  ),
                  'EndDate' => 
                  array (
                    'title' => '结束时间',
                    'description' => '结束时间',
                    'type' => 'string',
                    'example' => '2022-10-31 23:59:59',
                  ),
                  'Status' => 
                  array (
                    'title' => '分销商城状态',
                    'description' => '分销商城状态',
                    'type' => 'string',
                    'example' => '""',
                  ),
                ),
              ),
              'BizViewData' => 
              array (
                'description' => '渠道公共数据',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9D9B-58AFD9E0****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"DistributorId\\": \\"1\\",\\n    \\"DistributionMallId\\": \\"1\\",\\n    \\"DistributionMallName\\": \\"分销商城名称\\",\\n    \\"ChannelSupplierId\\": \\"\\",\\n    \\"DistributionMallType\\": \\"SaaS\\",\\n    \\"StartDate\\": \\"2021-12-10 00:00:00\\",\\n    \\"EndDate\\": \\"2022-10-31 23:59:59\\",\\n    \\"Status\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"BizViewData\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '分销商城查询',
      'summary' => '分销商查询自己拥有的商城信息
。',
      'description' => '分销商查询自己拥有的商城信息
',
    ),
    'ListDistributionMall' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商城id',
            'description' => '分销商城id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商城名称',
            'description' => '商城名称',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云图书专营店',
          ),
        ),
        2 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ChannelSupplierId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '渠道供应商id',
            'description' => '渠道供应商id',
            'type' => 'string',
            'required' => false,
            'example' => '113428528',
          ),
        ),
        4 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-24 15:29:38',
          ),
        ),
        5 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-26 10:29:13',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<List<ListDistributionMallModel>>',
            'description' => 'PopResponse<ListDistributionMallModel>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '1718921E-C8D4-55E1-B8D4-114AE537C1B7',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DistributionMallId' => 
                    array (
                      'title' => '分销商城id',
                      'description' => '分销商城id',
                      'type' => 'string',
                    ),
                    'DistributionMallName' => 
                    array (
                      'title' => '分销商城名称',
                      'description' => '分销商城名称',
                      'type' => 'string',
                    ),
                    'ChannelSupplierId' => 
                    array (
                      'title' => '渠道供应商id',
                      'description' => '渠道供应商id',
                      'type' => 'string',
                    ),
                    'DistributionMallType' => 
                    array (
                      'title' => '商城模式',
                      'description' => '商城模式',
                      'type' => 'string',
                    ),
                    'StartDate' => 
                    array (
                      'title' => '开始时间',
                      'description' => '开始时间',
                      'type' => 'string',
                    ),
                    'EndDate' => 
                    array (
                      'title' => '结束时间',
                      'description' => '结束时间',
                      'type' => 'string',
                    ),
                    'Status' => 
                    array (
                      'title' => '分销商城状态',
                      'description' => '分销商城状态',
                      'type' => 'string',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"1718921E-C8D4-55E1-B8D4-114AE537C1B7\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"\\",\\n      \\"DistributionMallName\\": \\"\\",\\n      \\"ChannelSupplierId\\": \\"\\",\\n      \\"DistributionMallType\\": \\"\\",\\n      \\"StartDate\\": \\"\\",\\n      \\"EndDate\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分销商城列表查询',
      'summary' => '查询自己已经开通的商城列表。',
      'description' => '查询自己已经开通的商城列表',
    ),
    'QueryDistributionBillDetail' => 
    array (
      'summary' => '分销账单明细数据查询接口。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BillId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账单ID',
            'type' => 'string',
            'required' => false,
            'example' => '10000007371****',
          ),
        ),
        1 => 
        array (
          'name' => 'BillPeriod',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账单期数',
            'type' => 'string',
            'required' => false,
            'example' => '2022-11',
          ),
        ),
        2 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '75547******9212928',
          ),
        ),
        3 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分销商城ID',
            'type' => 'string',
            'required' => false,
            'example' => '122889******114694',
          ),
        ),
        4 => 
        array (
          'name' => 'DistributionMallName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商城名称',
            'type' => 'string',
            'required' => false,
            'example' => '杭州****',
          ),
        ),
        5 => 
        array (
          'name' => 'BillStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账单状态',
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '18******263',
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
            'description' => '响应数据',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => 'Id of the request',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求流水号',
                'type' => 'string',
                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
              ),
              'SubCode' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '200',
              ),
              'SubMessage' => 
              array (
                'title' => 'Id of the request',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Success' => 
              array (
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'Id of the request',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'description' => '账单数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '账单总个数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '685',
                  ),
                  'Data' => 
                  array (
                    'description' => '账单明细链接地址列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '账单明细链接地址',
                      'type' => 'string',
                      'example' => 'oss://aliyun.com/***/***/billdetail.zip',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 685,\\n    \\"Data\\": [\\n      \\"oss://aliyun.com/***/***/billdetail.zip\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '账单明细查询',
      'description' => '分销账单明细数据查询接口，返回明细数据下载链接地址。',
    ),
    'ListDistributionItem' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城ID',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'LmItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'LM商品ID',
            'description' => 'LM商品ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ItemStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品状态',
            'description' => '商品状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID',
            'type' => 'string',
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
            'title' => 'PopResponse<List<DistributionItemModel>>',
            'description' => 'PopResponse<List<ItemOfQueryDistributionItemGroup>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '539E5C68-D8B5-57EC-9D9B-58AFD9E0****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DistributionMallId' => 
                    array (
                      'title' => '分销商城ID',
                      'description' => '分销商城ID',
                      'type' => 'string',
                    ),
                    'LmItemId' => 
                    array (
                      'title' => 'LM商品ID',
                      'description' => 'LM商品ID',
                      'type' => 'string',
                    ),
                    'ItemId' => 
                    array (
                      'title' => '商品Id',
                      'description' => '商品Id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ItemIdStr' => 
                    array (
                      'title' => 'String类型商品Id，用于解决前端number类型超出长度限制',
                      'description' => 'String类型商品Id，用于解决前端number类型超出长度限制',
                      'type' => 'string',
                    ),
                    'ItemName' => 
                    array (
                      'title' => '商品名称',
                      'description' => '商品名称',
                      'type' => 'string',
                    ),
                    'CategoryId' => 
                    array (
                      'title' => '类目ID',
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CategoryChain' => 
                    array (
                      'title' => '类目链，父类目在前，子类目在后，叶子类目最后',
                      'description' => '类目链，父类目在前，子类目在后，叶子类目最后',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CategoryId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Name' => 
                          array (
                            'type' => 'string',
                          ),
                          'ParentId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Level' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'Leaf' => 
                          array (
                            'type' => 'boolean',
                          ),
                        ),
                      ),
                    ),
                    'Category' => 
                    array (
                      'title' => '商品在linkedmall平台上的分类：实物商品（entity），猫超卡券（aliComBenifit），电影票（movieTicket）',
                      'description' => '商品在linkedmall平台上的分类：实物商品（entity），猫超卡券（aliComBenifit），电影票（movieTicket）',
                      'type' => 'string',
                    ),
                    'Status' => 
                    array (
                      'title' => 'linkedmall商品状态',
                      'description' => 'linkedmall商品状态',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '商品剩余库存：MIN',
                      'description' => '商品剩余库存：MIN',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'SimpleQuantity' => 
                    array (
                      'type' => 'string',
                    ),
                    'HasQuantity' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'TotalSoldQuantity' => 
                    array (
                      'title' => '累计售出数量',
                      'description' => '累计售出数量',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'SimpleTotalSoldQuantity' => 
                    array (
                      'type' => 'string',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '最后修改/生效时间',
                      'description' => '最后修改/生效时间',
                      'type' => 'string',
                    ),
                    'PicUrl' => 
                    array (
                      'title' => '图片url',
                      'description' => '图片url',
                      'type' => 'string',
                    ),
                    'ItemDesc' => 
                    array (
                      'title' => '商品描述信息',
                      'description' => '商品描述信息',
                      'type' => 'string',
                    ),
                    'ReservedPrice' => 
                    array (
                      'title' => 'IC划线价',
                      'description' => 'IC划线价',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ReservedPriceScope' => 
                    array (
                      'type' => 'string',
                    ),
                    'PriceCentScope' => 
                    array (
                      'type' => 'string',
                    ),
                    'IsCanSell' => 
                    array (
                      'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                      'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                      'type' => 'boolean',
                    ),
                    'Tips' => 
                    array (
                      'title' => '对商品不可售的原因描述',
                      'description' => '对商品不可售的原因描述',
                      'type' => 'string',
                    ),
                    'ItemTitle' => 
                    array (
                      'title' => '商品名称',
                      'description' => '商品名称',
                      'type' => 'string',
                    ),
                    'MainPicUrl' => 
                    array (
                      'title' => '主图',
                      'description' => '主图',
                      'type' => 'string',
                    ),
                    'DescOption' => 
                    array (
                      'title' => '商品详情介绍-图片介绍信息',
                      'description' => '商品详情介绍-图片介绍信息',
                      'type' => 'string',
                    ),
                    'PropertiesJson' => 
                    array (
                      'type' => 'string',
                    ),
                    'ItemImages' => 
                    array (
                      'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                      'description' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'SkuList' => 
                    array (
                      'title' => 'sku列表',
                      'description' => 'sku列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LmItemId' => 
                          array (
                            'type' => 'string',
                          ),
                          'ItemId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'SkuId' => 
                          array (
                            'title' => '没有sku的商品，skuId填-1',
                            'description' => '没有sku的商品，skuId填-1',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Quantity' => 
                          array (
                            'title' => '商品剩余库存：MIN',
                            'description' => '商品剩余库存：MIN',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'SimpleQuantity' => 
                          array (
                            'type' => 'string',
                          ),
                          'HasQuantity' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'Status' => 
                          array (
                            'title' => '状态',
                            'description' => '状态',
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'PriceCent' => 
                          array (
                            'title' => '当前售价（分）',
                            'description' => '当前售价（分）',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'ReservedPrice' => 
                          array (
                            'title' => 'IC SKU 一口价',
                            'description' => 'IC SKU 一口价',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'SkuDesc' => 
                          array (
                            'title' => 'sku描述信息',
                            'description' => 'sku描述信息',
                            'type' => 'string',
                          ),
                          'SkuPicUrl' => 
                          array (
                            'title' => 'sku图片',
                            'description' => 'sku图片',
                            'type' => 'string',
                          ),
                          'SkuTitle' => 
                          array (
                            'title' => 'sku标题',
                            'description' => 'sku标题',
                            'type' => 'string',
                          ),
                          'GmtModified' => 
                          array (
                            'title' => '最后修改/生效时间',
                            'description' => '最后修改/生效时间',
                            'type' => 'string',
                          ),
                          'LmAttributeModels' => 
                          array (
                            'title' => 'sku的扩展属性list',
                            'description' => 'sku的扩展属性list',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AttrId' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                                'Value' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Name' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Description' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DataType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Restriction' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Category' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'ScopeList' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'CustomizedAttributeMap' => 
                          array (
                            'title' => '客户自定义属性',
                            'description' => '客户自定义属性',
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'CanSell' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'Tips' => 
                          array (
                            'type' => 'string',
                          ),
                          'SkuPropertiesJson' => 
                          array (
                            'type' => 'string',
                          ),
                          'SkuProperties' => 
                          array (
                            'title' => '设置基础库/系统扩展属性',
                            'description' => '设置基础库/系统扩展属性',
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'ExtInfo' => 
                          array (
                            'title' => '存放买断权益对接模式下：promotionId（权益ID），securityCode（安全码）',
                            'description' => '存放买断权益对接模式下：promotionId（权益ID），securityCode（安全码）',
                            'type' => 'string',
                          ),
                          'lmSkuAttributeMap' => 
                          array (
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'LmAttributeModels' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AttrId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Value' => 
                          array (
                            'type' => 'string',
                          ),
                          'Name' => 
                          array (
                            'type' => 'string',
                          ),
                          'Description' => 
                          array (
                            'type' => 'string',
                          ),
                          'DataType' => 
                          array (
                            'type' => 'string',
                          ),
                          'Restriction' => 
                          array (
                            'type' => 'string',
                          ),
                          'Category' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'ScopeList' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'LmAttributeMap' => 
                    array (
                      'type' => 'object',
                      'additionalProperties' => 
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9D9B-58AFD9E0****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"\\",\\n      \\"LmItemId\\": \\"\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemIdStr\\": \\"\\",\\n      \\"ItemName\\": \\"\\",\\n      \\"CategoryId\\": 0,\\n      \\"CategoryChain\\": [\\n        {\\n          \\"CategoryId\\": 0,\\n          \\"Name\\": \\"\\",\\n          \\"ParentId\\": 0,\\n          \\"Level\\": 0,\\n          \\"Leaf\\": true\\n        }\\n      ],\\n      \\"Category\\": \\"\\",\\n      \\"Status\\": 0,\\n      \\"Quantity\\": 0,\\n      \\"SimpleQuantity\\": \\"\\",\\n      \\"HasQuantity\\": true,\\n      \\"TotalSoldQuantity\\": 0,\\n      \\"SimpleTotalSoldQuantity\\": \\"\\",\\n      \\"GmtCreate\\": \\"\\",\\n      \\"GmtModified\\": \\"\\",\\n      \\"PicUrl\\": \\"\\",\\n      \\"ItemDesc\\": \\"\\",\\n      \\"ReservedPrice\\": 0,\\n      \\"ReservedPriceScope\\": \\"\\",\\n      \\"PriceCentScope\\": \\"\\",\\n      \\"IsCanSell\\": true,\\n      \\"Tips\\": \\"\\",\\n      \\"ItemTitle\\": \\"\\",\\n      \\"MainPicUrl\\": \\"\\",\\n      \\"DescOption\\": \\"\\",\\n      \\"PropertiesJson\\": \\"\\",\\n      \\"ItemImages\\": [\\n        \\"\\"\\n      ],\\n      \\"SkuList\\": [\\n        {\\n          \\"LmItemId\\": \\"\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"Quantity\\": 0,\\n          \\"SimpleQuantity\\": \\"\\",\\n          \\"HasQuantity\\": true,\\n          \\"Status\\": 0,\\n          \\"PriceCent\\": 0,\\n          \\"ReservedPrice\\": 0,\\n          \\"SkuDesc\\": \\"\\",\\n          \\"SkuPicUrl\\": \\"\\",\\n          \\"SkuTitle\\": \\"\\",\\n          \\"GmtModified\\": \\"\\",\\n          \\"LmAttributeModels\\": [\\n            {\\n              \\"AttrId\\": 0,\\n              \\"Value\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Description\\": \\"\\",\\n              \\"DataType\\": \\"\\",\\n              \\"Restriction\\": \\"\\",\\n              \\"Category\\": 0,\\n              \\"ScopeList\\": [\\n                \\"\\"\\n              ]\\n            }\\n          ],\\n          \\"CustomizedAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"CanSell\\": true,\\n          \\"Tips\\": \\"\\",\\n          \\"SkuPropertiesJson\\": \\"\\",\\n          \\"SkuProperties\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"ExtInfo\\": \\"\\",\\n          \\"lmSkuAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          }\\n        }\\n      ],\\n      \\"LmAttributeModels\\": [\\n        {\\n          \\"AttrId\\": 0,\\n          \\"Value\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Description\\": \\"\\",\\n          \\"DataType\\": \\"\\",\\n          \\"Restriction\\": \\"\\",\\n          \\"Category\\": 0,\\n          \\"ScopeList\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"LmAttributeMap\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询商品列表',
      'summary' => '查询分销商商品库内的商品列表。',
      'description' => '查询分销商商品库内的商品列表',
    ),
    'QueryItemDetail' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城ID',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'LmItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'lm商品ID',
            'description' => 'lm商品ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID',
            'type' => 'string',
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
            'title' => 'PopResponse<DistributionItemDetailModel>',
            'description' => 'PopResponse<ItemModel>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'E46C790E-B1F2-51EF-B6F8-B52404B5****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'BizItemGroup [LMALL20210830****] has not the item [65728655****].',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'DistributionMallId' => 
                  array (
                    'title' => '分销商城ID',
                    'description' => '分销商城ID',
                    'type' => 'string',
                  ),
                  'SkuModels' => 
                  array (
                    'title' => 'sku list',
                    'description' => 'sku list',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DistributionMallId' => 
                        array (
                          'title' => '分销商城ID',
                          'description' => '分销商城ID',
                          'type' => 'string',
                        ),
                        'ExtJson' => 
                        array (
                          'title' => '预留扩展字段,JSON-Map结构',
                          'description' => '预留扩展字段,JSON-Map结构',
                          'type' => 'string',
                        ),
                        'LmItemId' => 
                        array (
                          'title' => 'LM商品ID',
                          'description' => 'LM商品ID',
                          'type' => 'string',
                        ),
                        'ItemId' => 
                        array (
                          'title' => 'IC商品ID',
                          'description' => 'IC商品ID',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'SkuId' => 
                        array (
                          'title' => '没有sku的商品，skuId填-1',
                          'description' => '没有sku的商品，skuId填-1',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'SkuPvs' => 
                        array (
                          'title' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                          'description' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                          'type' => 'string',
                        ),
                        'SkuPicUrl' => 
                        array (
                          'title' => 'Sku图片',
                          'description' => 'Sku图片',
                          'type' => 'string',
                        ),
                        'SkuTitle' => 
                        array (
                          'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                          'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                          'type' => 'string',
                        ),
                        'Quantity' => 
                        array (
                          'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                          'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'SimpleQuantity' => 
                        array (
                          'title' => 'SKU模糊化库存',
                          'description' => 'SKU模糊化库存',
                          'type' => 'string',
                        ),
                        'HasQuantity' => 
                        array (
                          'title' => '是否有库存，返回的是库存状态，有或者没有',
                          'description' => '是否有库存，返回的是库存状态，有或者没有',
                          'type' => 'boolean',
                        ),
                        'ReservedPrice' => 
                        array (
                          'title' => 'IC SKU 一口价',
                          'description' => 'IC SKU 一口价',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'PriceCent' => 
                        array (
                          'title' => '商品销售价格（分）',
                          'description' => '商品销售价格（分）',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Status' => 
                        array (
                          'title' => '商品规格对应的售卖状态',
                          'description' => '商品规格对应的售卖状态',
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'CustomizedAttributeMap' => 
                        array (
                          'title' => '客户自定义属性',
                          'description' => '客户自定义属性',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'LmSkuAttributeMap' => 
                        array (
                          'title' => 'Linkedmall 平台SKU的属性',
                          'description' => 'Linkedmall 平台SKU的属性',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'CanNotBeSoldCode' => 
                        array (
                          'title' => '不可售code  可售时为null',
                          'description' => '不可售code  可售时为null',
                          'type' => 'string',
                        ),
                        'CanNotBeSoldMessage' => 
                        array (
                          'title' => '不可售Massage 可售时为null',
                          'description' => '不可售Massage 可售时为null',
                          'type' => 'string',
                        ),
                        'InvoiceType' => 
                        array (
                          'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                          'description' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                      ),
                    ),
                  ),
                  'SkuPropertys' => 
                  array (
                    'title' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                    'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Text' => 
                        array (
                          'type' => 'string',
                        ),
                        'Values' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'Text' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'LmItemId' => 
                  array (
                    'title' => 'LM商品ID',
                    'description' => 'LM商品ID',
                    'type' => 'string',
                  ),
                  'ItemId' => 
                  array (
                    'title' => 'IC商品ID',
                    'description' => '商品ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '65******0310',
                  ),
                  'ItemTitle' => 
                  array (
                    'title' => '商品名称',
                    'description' => '商品名称',
                    'type' => 'string',
                    'example' => '大自然酸菜(美好生鲜)',
                  ),
                  'MainPicUrl' => 
                  array (
                    'title' => '主图',
                    'description' => '主图',
                    'type' => 'string',
                  ),
                  'FirstPicUrl' => 
                  array (
                    'title' => 'itemDO.commonItemImageList第一张',
                    'description' => '商品主图',
                    'type' => 'string',
                    'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652f*****.jpg',
                  ),
                  'ItemImages' => 
                  array (
                    'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                    'description' => '商品图片列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '商品图片列表',
                      'type' => 'string',
                      'example' => '<p><img src=\\"https://img.alicdn.com/imgextra/i2/2207523123246/O1CN01pyEmOb1ZqiNAnQPjQ_!!22075231******.png\\" align=\\"absmiddle\\"></p>',
                    ),
                  ),
                  'DescPath' => 
                  array (
                    'title' => '商品详情介绍-图片介绍，URL',
                    'description' => '商品详情介绍-图片介绍，URL',
                    'type' => 'string',
                  ),
                  'DescOption' => 
                  array (
                    'title' => '商品详情介绍-图片介绍信息',
                    'description' => '商品详情描述',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'MinPrice' => 
                  array (
                    'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                    'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'ReservedPrice' => 
                  array (
                    'title' => '商品原价，可用于显示划线价',
                    'description' => '商品原价，可用于显示划线价',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Quantity' => 
                  array (
                    'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                    'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'SimpleQuantity' => 
                  array (
                    'title' => '模糊化库存',
                    'description' => '模糊化库存',
                    'type' => 'string',
                  ),
                  'HasQuantity' => 
                  array (
                    'title' => '是否有库存，返回的是库存状态，有或者没有',
                    'description' => '是否有库存，返回的是库存状态，有或者没有',
                    'type' => 'boolean',
                  ),
                  'CategoryId' => 
                  array (
                    'title' => '类目ID',
                    'description' => '最后⼀级的类⽬ID，之后会提供类⽬查询接⼝来获取商品所属类⽬信息',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50011982',
                  ),
                  'CategoryIds' => 
                  array (
                    'title' => '类目ID，父类目在前，子类目在后',
                    'description' => '类目ID，父类目在前，子类目在后',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                  ),
                  'Prov' => 
                  array (
                    'title' => '商品所在城市：如杭州',
                    'description' => '商品所在城市：如杭州',
                    'type' => 'string',
                  ),
                  'City' => 
                  array (
                    'title' => '商品所在省份：如浙江',
                    'description' => '商品所在省份：如浙江',
                    'type' => 'string',
                  ),
                  'Properties' => 
                  array (
                    'title' => '产品属性，产品参数，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                    'description' => '产品参数',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                      'description' => '产品参数',
                      'example' => '{"key":"value"}',
                    ),
                  ),
                  'Features' => 
                  array (
                    'title' => '产品特征，从itemDO.Features转换而来',
                    'description' => '产品特征，从itemDO.Features转换而来',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'IforestProps' => 
                  array (
                    'title' => '宝石路属性，关键属性，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                    'description' => '商品详情页商品名称下面的三列属性',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '商品详情页商品名称下面的三列属性',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '商品详情页商品名称下面的三列属性',
                        'example' => '""',
                      ),
                    ),
                  ),
                  'IsSellerPayPostfee' => 
                  array (
                    'title' => '是否包邮',
                    'description' => '是否包邮',
                    'type' => 'boolean',
                  ),
                  'IsCanSell' => 
                  array (
                    'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                    'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                    'type' => 'boolean',
                  ),
                  'LmItemCategory' => 
                  array (
                    'title' => '商品在linkedmall平台的类型',
                    'description' => '商品类别',
                    'type' => 'string',
                    'example' => 'entity',
                  ),
                  'CustomizedAttributeMap' => 
                  array (
                    'title' => '客户自定义属性',
                    'description' => '客户自定义属性',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'LmItemAttributeMap' => 
                  array (
                    'title' => 'Linkedmall 平台商品属性',
                    'description' => 'Linkedmall 平台商品属性',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'Current' => 
                  array (
                    'title' => '当前时间',
                    'description' => '当前时间',
                    'type' => 'string',
                  ),
                  'VirtualItemType' => 
                  array (
                    'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                    'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                    'type' => 'string',
                  ),
                  'ThirdPartyItemId' => 
                  array (
                    'title' => '外部商品id (来自第三方的商品)',
                    'description' => '外部商品id (来自第三方的商品)',
                    'type' => 'string',
                  ),
                  'ThirdPartyName' => 
                  array (
                    'title' => '商品来源 (标记第三方商品的来源)',
                    'description' => '商品来源 (标记第三方商品的来源)',
                    'type' => 'string',
                  ),
                  'VideoUrl' => 
                  array (
                    'title' => '视频url',
                    'description' => '视频链接地址',
                    'type' => 'string',
                    'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/video/edf8d848fa80b1cac055c94652******.mp4',
                  ),
                  'VideoPicUrl' => 
                  array (
                    'title' => '视频封面url',
                    'description' => '视频头图链接地址',
                    'type' => 'string',
                    'example' => 'http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652*****.jpg',
                  ),
                  'CanNotBeSoldCode' => 
                  array (
                    'title' => '不可售code  可售时为null',
                    'description' => '不可售code  可售时为null',
                    'type' => 'string',
                  ),
                  'CanNotBeSoldMessage' => 
                  array (
                    'title' => '不可售Massage 可售时为null',
                    'description' => '不可售Massage 可售时为null',
                    'type' => 'string',
                  ),
                  'ItemTotalValue' => 
                  array (
                    'title' => '总量库存值',
                    'description' => '总量库存值',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'ItemTotalSimpleValue' => 
                  array (
                    'type' => 'string',
                  ),
                  'InvoiceType' => 
                  array (
                    'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                    'description' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
              'BizViewData' => 
              array (
                'description' => '渠道公共数据',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"E46C790E-B1F2-51EF-B6F8-B52404B5****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"BizItemGroup [LMALL20210830****] has not the item [65728655****].\\",\\n  \\"Model\\": {\\n    \\"DistributionMallId\\": \\"\\",\\n    \\"SkuModels\\": [\\n      {\\n        \\"DistributionMallId\\": \\"\\",\\n        \\"ExtJson\\": \\"\\",\\n        \\"LmItemId\\": \\"\\",\\n        \\"ItemId\\": 0,\\n        \\"SkuId\\": 0,\\n        \\"SkuPvs\\": \\"\\",\\n        \\"SkuPicUrl\\": \\"\\",\\n        \\"SkuTitle\\": \\"\\",\\n        \\"Quantity\\": 0,\\n        \\"SimpleQuantity\\": \\"\\",\\n        \\"HasQuantity\\": true,\\n        \\"ReservedPrice\\": 0,\\n        \\"PriceCent\\": 0,\\n        \\"Status\\": 0,\\n        \\"CustomizedAttributeMap\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"LmSkuAttributeMap\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanNotBeSoldCode\\": \\"\\",\\n        \\"CanNotBeSoldMessage\\": \\"\\",\\n        \\"InvoiceType\\": 0\\n      }\\n    ],\\n    \\"SkuPropertys\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Text\\": \\"\\",\\n        \\"Values\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Text\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"LmItemId\\": \\"\\",\\n    \\"ItemId\\": 0,\\n    \\"ItemTitle\\": \\"大自然酸菜(美好生鲜)\\",\\n    \\"MainPicUrl\\": \\"\\",\\n    \\"FirstPicUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652f*****.jpg\\",\\n    \\"ItemImages\\": [\\n      \\"<p><img src=\\\\\\\\\\\\\\"https://img.alicdn.com/imgextra/i2/2207523123246/O1CN01pyEmOb1ZqiNAnQPjQ_!!22075231******.png\\\\\\\\\\\\\\" align=\\\\\\\\\\\\\\"absmiddle\\\\\\\\\\\\\\"></p>\\"\\n    ],\\n    \\"DescPath\\": \\"\\",\\n    \\"DescOption\\": \\"{}\\",\\n    \\"MinPrice\\": 0,\\n    \\"ReservedPrice\\": 0,\\n    \\"Quantity\\": 0,\\n    \\"SimpleQuantity\\": \\"\\",\\n    \\"HasQuantity\\": true,\\n    \\"CategoryId\\": 50011982,\\n    \\"CategoryIds\\": [\\n      0\\n    ],\\n    \\"Prov\\": \\"\\",\\n    \\"City\\": \\"\\",\\n    \\"Properties\\": {\\n      \\"key\\": [\\n        \\"\\"\\n      ]\\n    },\\n    \\"Features\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"IforestProps\\": [\\n      {\\n        \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n      }\\n    ],\\n    \\"IsSellerPayPostfee\\": true,\\n    \\"IsCanSell\\": true,\\n    \\"LmItemCategory\\": \\"entity\\",\\n    \\"CustomizedAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"LmItemAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Current\\": \\"\\",\\n    \\"VirtualItemType\\": \\"\\",\\n    \\"ThirdPartyItemId\\": \\"\\",\\n    \\"ThirdPartyName\\": \\"\\",\\n    \\"VideoUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/video/edf8d848fa80b1cac055c94652******.mp4\\",\\n    \\"VideoPicUrl\\": \\"http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"CanNotBeSoldCode\\": \\"\\",\\n    \\"CanNotBeSoldMessage\\": \\"\\",\\n    \\"ItemTotalValue\\": 0,\\n    \\"ItemTotalSimpleValue\\": \\"\\",\\n    \\"InvoiceType\\": 0\\n  },\\n  \\"BizViewData\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询商品详情接口',
      'summary' => '查询单个商品的详细信息
。',
      'description' => '查询单个商品的详细信息
',
    ),
    'QueryItemDetailWithDivision' => 
    array (
      'summary' => '支持根据区域查询商品详细信息接口。',
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
          'AK' => 
          array (
          ),
        ),
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商id',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
            'example' => '75547******9212928',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城id',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
            'example' => '1339d4e******46ea9d126df506af8d2b',
          ),
        ),
        2 => 
        array (
          'name' => 'LmItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'lm商品ID',
            'description' => 'lm商品ID',
            'type' => 'string',
            'required' => false,
            'example' => '10000035-61936646****',
          ),
        ),
        3 => 
        array (
          'name' => 'DivisionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '410503006',
          ),
        ),
        4 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '18******263',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<DistributionItemDetailModel>',
            'description' => 'PopResponse<DistributionItemDetailModel>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'BA157565-3358-5D80-9330-************',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '201',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '19',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'DistributionMallId' => 
                  array (
                    'title' => '分销商城ID',
                    'description' => '分销商城ID',
                    'type' => 'string',
                    'example' => '122889******114694',
                  ),
                  'SkuModels' => 
                  array (
                    'title' => 'sku list',
                    'description' => 'sku list',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DistributionMallId' => 
                        array (
                          'title' => '分销商城ID',
                          'description' => '分销商城ID',
                          'type' => 'string',
                          'example' => '401e6c8****39b05797ac841907ca',
                        ),
                        'ExtJson' => 
                        array (
                          'title' => '预留扩展字段,JSON-Map结构',
                          'description' => '预留扩展字段,JSON-Map结构',
                          'type' => 'string',
                          'example' => '{\\"outShopId\\":\\"3163****7\\"}',
                        ),
                        'LmItemId' => 
                        array (
                          'title' => 'LM商品ID',
                          'description' => 'LM商品ID',
                          'type' => 'string',
                          'example' => '10026053-67222490****',
                        ),
                        'ItemId' => 
                        array (
                          'title' => 'IC商品ID',
                          'description' => 'IC商品ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '56090358****',
                        ),
                        'SkuId' => 
                        array (
                          'title' => 'skuId(如果一个品没有sku，则构造一个id为-1的sku。数量库里0和-1都是表示没有SKU的商品，DB 中统一使用-1)，如 3428785463017',
                          'description' => 'skuId(如果一个品没有sku，则构造一个id为-1的sku。数量库里0和-1都是表示没有SKU的商品，DB 中统一使用-1)，如 3428785463017',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '-1',
                        ),
                        'SkuPvs' => 
                        array (
                          'title' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                          'description' => 'Sku对应的属性PV值组合，如 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                          'type' => 'string',
                          'example' => '1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                        ),
                        'SkuPicUrl' => 
                        array (
                          'title' => 'Sku图片',
                          'description' => 'Sku图片',
                          'type' => 'string',
                          'example' => 'img/12344***.jpg',
                        ),
                        'SkuTitle' => 
                        array (
                          'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                          'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                          'type' => 'string',
                          'example' => '*****罐头',
                        ),
                        'Quantity' => 
                        array (
                          'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                          'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-1',
                        ),
                        'SimpleQuantity' => 
                        array (
                          'title' => 'SKU模糊化库存',
                          'description' => 'SKU模糊化库存',
                          'type' => 'string',
                          'example' => '有货、无货、库存紧张',
                        ),
                        'HasQuantity' => 
                        array (
                          'title' => '是否有库存，返回的是库存状态，有或者没有',
                          'description' => '是否有库存，返回的是库存状态，有或者没有',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ReservePrice' => 
                        array (
                          'title' => 'IC SKU 一口价',
                          'description' => 'IC SKU 一口价',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '788',
                        ),
                        'PriceCent' => 
                        array (
                          'title' => '商品销售价格（分）',
                          'description' => '商品销售价格（分）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3990',
                        ),
                        'SupplierPrice' => 
                        array (
                          'title' => '供货价（分）',
                          'description' => '供货价（分）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9900',
                        ),
                        'Status' => 
                        array (
                          'title' => '商品规格对应的售卖状态',
                          'description' => '商品规格对应的售卖状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CustomizedAttributeMap' => 
                        array (
                          'title' => '客户自定义属性',
                          'description' => '客户自定义属性',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'description' => '自定义属性对',
                            'example' => '颜色分类~~白色
款式~~圆头',
                          ),
                        ),
                        'LmSkuAttributeMap' => 
                        array (
                          'title' => 'Linkedmall 平台SKU的属性',
                          'description' => 'Linkedmall 平台SKU的属性',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'description' => 'Linkedmall自定义属性对',
                            'example' => '颜色分类~~白色
款式~~圆头',
                          ),
                        ),
                        'CanNotBeSoldCode' => 
                        array (
                          'title' => '不可售code  可售时为null',
                          'description' => '不可售code  可售时为null',
                          'type' => 'string',
                          'example' => 'NULL',
                        ),
                        'CanNotBeSoldMassage' => 
                        array (
                          'title' => '不可售Massage 可售时为null',
                          'description' => '不可售Massage 可售时为null',
                          'type' => 'string',
                          'example' => 'NULL',
                        ),
                        'InvoiceType' => 
                        array (
                          'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                          'description' => '发票类型',
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                      ),
                    ),
                  ),
                  'SkuPropertys' => 
                  array (
                    'title' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                    'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => 'sku属性id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '44042249****',
                        ),
                        'Text' => 
                        array (
                          'description' => '属性名',
                          'type' => 'string',
                          'example' => '162720***',
                        ),
                        'Values' => 
                        array (
                          'description' => '属性值集合',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '属性值对',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'description' => '属性值id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '44042249****',
                              ),
                              'Text' => 
                              array (
                                'description' => '属性值',
                                'type' => 'string',
                                'example' => '颜色~~白色',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'LmItemId' => 
                  array (
                    'title' => 'LM商品ID',
                    'description' => 'LM商品ID',
                    'type' => 'string',
                    'example' => '10000**-630292***',
                  ),
                  'ItemId' => 
                  array (
                    'title' => 'IC商品ID',
                    'description' => 'IC商品ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '65******0310',
                  ),
                  'ItemTitle' => 
                  array (
                    'title' => '商品名称',
                    'description' => '商品名称',
                    'type' => 'string',
                    'example' => '夏季***百搭小白鞋',
                  ),
                  'MainPicUrl' => 
                  array (
                    'title' => '主图',
                    'description' => '主图',
                    'type' => 'string',
                    'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                  ),
                  'FirstPicUrl' => 
                  array (
                    'title' => 'itemDO.commonItemImageList第一张',
                    'description' => 'itemDO.commonItemImageList第一张',
                    'type' => 'string',
                    'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                  ),
                  'ItemImages' => 
                  array (
                    'title' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                    'description' => '商品图片URL，最多5张，一般是Detail上轮播，从itemDO.commonItemImageList属性转换而来。对应EPP的silders',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                      'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                    ),
                  ),
                  'DescPath' => 
                  array (
                    'title' => '商品详情介绍-图片介绍，URL',
                    'description' => '商品详情介绍-图片介绍，URL',
                    'type' => 'string',
                    'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                  ),
                  'DescOption' => 
                  array (
                    'title' => '商品详情介绍-图片介绍信息',
                    'description' => '商品详情介绍-图片介绍信息',
                    'type' => 'string',
                    'example' => '<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>',
                  ),
                  'MinPrice' => 
                  array (
                    'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                    'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3900',
                  ),
                  'ReservePrice' => 
                  array (
                    'title' => '商品原价，可用于显示划线价',
                    'description' => '商品原价，可用于显示划线价',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3900',
                  ),
                  'Quantity' => 
                  array (
                    'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                    'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '-1',
                  ),
                  'SimpleQuantity' => 
                  array (
                    'title' => '模糊化库存',
                    'description' => '模糊化库存',
                    'type' => 'string',
                    'example' => '有货
无货
库存紧张',
                  ),
                  'HasQuantity' => 
                  array (
                    'title' => '是否有库存，返回的是库存状态，有或者没有',
                    'description' => '是否有库存，返回的是库存状态，有或者没有',
                    'type' => 'boolean',
                  ),
                  'CategoryId' => 
                  array (
                    'title' => '类目ID',
                    'description' => '类目ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50011****',
                  ),
                  'CategoryIds' => 
                  array (
                    'title' => '类目ID，父类目在前，子类目在后',
                    'description' => '类目ID，父类目在前，子类目在后',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '205879***',
                    ),
                  ),
                  'Prov' => 
                  array (
                    'title' => '商品所在城市：如杭州',
                    'description' => '商品所在城市：如杭州',
                    'type' => 'string',
                    'example' => '浙江',
                  ),
                  'City' => 
                  array (
                    'title' => '商品所在省份：如浙江',
                    'description' => '商品所在省份：如浙江',
                    'type' => 'string',
                    'example' => '杭州',
                  ),
                  'Properties' => 
                  array (
                    'title' => '产品属性，产品参数，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                    'description' => '产品属性，产品参数，供Detail页面显示使用',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                        'example' => '颜色分类~~白色
款式~~圆头',
                        'description' => '属性值',
                      ),
                      'description' => '属性集合',
                    ),
                  ),
                  'Features' => 
                  array (
                    'title' => '产品特征，从itemDO.Features转换而来',
                    'description' => '产品特征',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => '[{\'Enable\': False, \'Name\': \'CLEANUP_SHADOW_IF_FAILED\'}, {\'Enable\': False, \'Name\': \'CLEANUP_RESTORE_SERVER_IF_FAILED\'}, {\'Enable\': True, \'Name\': \'AUTO_ENLARGE_ADD_DISK\'}]',
                      'description' => '产品特征',
                    ),
                  ),
                  'IforestProps' => 
                  array (
                    'title' => '宝石路属性，关键属性，供Detail页面显示使用，从itemDO.itemProperties转换而来',
                    'description' => '宝石路属性，关键属性，供Detail页面显示使用',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '属性对象',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '属性值',
                        'example' => '颜色分类~~白色
款式~~圆头',
                      ),
                    ),
                  ),
                  'SellerPayPostfee' => 
                  array (
                    'title' => '是否包邮',
                    'description' => '是否包邮',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'CanSell' => 
                  array (
                    'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                    'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0;',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LmItemCategory' => 
                  array (
                    'title' => '商品在linkedmall平台的类型',
                    'description' => '商品在linkedmall平台的类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'aliComBenifit' => '虚拟商品',
                      'entity' => '实物商品',
                    ),
                    'example' => 'entity',
                  ),
                  'CustomizedAttributeMap' => 
                  array (
                    'title' => '客户自定义属性',
                    'description' => '客户自定义属性',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'LmItemAttributeMap' => 
                  array (
                    'title' => 'Linkedmall 平台商品属性',
                    'description' => 'Linkedmall 平台商品属性',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'Current' => 
                  array (
                    'title' => '当前时间',
                    'description' => '当前时间',
                    'type' => 'string',
                    'example' => '2020-01-01 00:00:00',
                  ),
                  'VirtualItemType' => 
                  array (
                    'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                    'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'fuelCard' => '油卡',
                      'cardRoll' => '卡券',
                      'rechageableCard' => '充值卡',
                    ),
                    'example' => 'cardRoll',
                  ),
                  'UserType' => 
                  array (
                    'title' => '卖家类型：可以用于区分商品类型，null或是0-集市卖家，1-天猫卖家，2-1688卖家，4-后端商家，8-1688云电商卖家',
                    'description' => '卖家类型：可以用于区分商品类型，null或是0-集市卖家，1-天猫卖家，2-1688卖家，4-后端商家，8-1688云电商卖家',
                    'type' => 'integer',
                    'format' => 'int32',
                    'enumValueTitles' => 
                    array (
                      0 => '集市卖家',
                      1 => '天猫卖家',
                      2 => '1688卖家',
                      4 => '后端商家',
                      6 => '1688云电商卖家',
                    ),
                    'example' => '1',
                  ),
                  'SecuredTransactions' => 
                  array (
                    'title' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                    'description' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                    'type' => 'integer',
                    'format' => 'int32',
                    'enumValueTitles' => 
                    array (
                      0 => '未开通',
                      1 => '已开通',
                      2 => '未设置',
                      3 => '审核中',
                      4 => '开通失败',
                    ),
                    'example' => '1',
                  ),
                  'ThirdPartyItemId' => 
                  array (
                    'title' => '外部商品id (来自第三方的商品)',
                    'description' => '外部商品id (来自第三方的商品)',
                    'type' => 'string',
                    'example' => '44042249****
',
                  ),
                  'ThirdPartyName' => 
                  array (
                    'title' => '商品来源 (标记第三方商品的来源)',
                    'description' => '商品来源 (标记第三方商品的来源)',
                    'type' => 'string',
                    'example' => '三方商品来源',
                  ),
                  'VideoUrl' => 
                  array (
                    'title' => '视频url',
                    'description' => '视频url',
                    'type' => 'string',
                    'example' => 'video/edf8d848fa80b1cac055c94652******.mp4',
                  ),
                  'VideoPicUrl' => 
                  array (
                    'title' => '视频封面url',
                    'description' => '视频封面url',
                    'type' => 'string',
                    'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                  ),
                  'CanNotBeSoldCode' => 
                  array (
                    'title' => '不可售code  可售时为null',
                    'description' => '不可售code  可售时为null',
                    'type' => 'string',
                    'example' => 'NULL',
                  ),
                  'CanNotBeSoldMassage' => 
                  array (
                    'title' => '不可售Massage 可售时为null',
                    'description' => '不可售Massage 可售时为null',
                    'type' => 'string',
                    'example' => 'NULL',
                  ),
                  'ItemTotalValue' => 
                  array (
                    'title' => '总量库存值',
                    'description' => '总量库存值',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '-1',
                  ),
                  'ItemTotalSimpleValue' => 
                  array (
                    'description' => '商品库存',
                    'type' => 'string',
                    'example' => '有货',
                  ),
                  'InvoiceType' => 
                  array (
                    'title' => '发票类型,见 com.aliyun.linkedmall.itemservice.client.enums.BasicItemInvoiceTypeEnum',
                    'description' => '发票类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'enumValueTitles' => 
                    array (
                      0 => '不提供发票',
                      1 => '增值税专用发票',
                      2 => '增值税普通发票',
                    ),
                    'example' => '1',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"BA157565-3358-5D80-9330-************\\",\\n  \\"SubCode\\": \\"201\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 19,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"Model\\": {\\n    \\"DistributionMallId\\": \\"122889******114694\\",\\n    \\"SkuModels\\": [\\n      {\\n        \\"DistributionMallId\\": \\"401e6c8****39b05797ac841907ca\\",\\n        \\"ExtJson\\": \\"{\\\\\\\\\\\\\\"outShopId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3163****7\\\\\\\\\\\\\\"}\\",\\n        \\"LmItemId\\": \\"10026053-67222490****\\",\\n        \\"ItemId\\": 0,\\n        \\"SkuId\\": -1,\\n        \\"SkuPvs\\": \\"1627207:28320;5919063:6536025;12304035:75366283;122216431:27772\\",\\n        \\"SkuPicUrl\\": \\"img/12344***.jpg\\",\\n        \\"SkuTitle\\": \\"*****罐头\\",\\n        \\"Quantity\\": -1,\\n        \\"SimpleQuantity\\": \\"有货、无货、库存紧张\\",\\n        \\"HasQuantity\\": true,\\n        \\"ReservePrice\\": 788,\\n        \\"PriceCent\\": 3990,\\n        \\"SupplierPrice\\": 9900,\\n        \\"Status\\": 1,\\n        \\"CustomizedAttributeMap\\": {\\n          \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n        },\\n        \\"LmSkuAttributeMap\\": {\\n          \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n        },\\n        \\"CanNotBeSoldCode\\": \\"NULL\\",\\n        \\"CanNotBeSoldMassage\\": \\"NULL\\",\\n        \\"InvoiceType\\": 0\\n      }\\n    ],\\n    \\"SkuPropertys\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Text\\": \\"162720***\\",\\n        \\"Values\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Text\\": \\"颜色~~白色\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"LmItemId\\": \\"10000**-630292***\\",\\n    \\"ItemId\\": 0,\\n    \\"ItemTitle\\": \\"夏季***百搭小白鞋\\",\\n    \\"MainPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n    \\"FirstPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n    \\"ItemImages\\": [\\n      \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\"\\n    ],\\n    \\"DescPath\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"DescOption\\": \\"<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>\\",\\n    \\"MinPrice\\": 3900,\\n    \\"ReservePrice\\": 3900,\\n    \\"Quantity\\": -1,\\n    \\"SimpleQuantity\\": \\"有货\\\\n无货\\\\n库存紧张\\",\\n    \\"HasQuantity\\": true,\\n    \\"CategoryId\\": 0,\\n    \\"CategoryIds\\": [\\n      0\\n    ],\\n    \\"Prov\\": \\"浙江\\",\\n    \\"City\\": \\"杭州\\",\\n    \\"Properties\\": {\\n      \\"key\\": [\\n        \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n      ]\\n    },\\n    \\"Features\\": {\\n      \\"key\\": \\"[{\'Enable\': False, \'Name\': \'CLEANUP_SHADOW_IF_FAILED\'}, {\'Enable\': False, \'Name\': \'CLEANUP_RESTORE_SERVER_IF_FAILED\'}, {\'Enable\': True, \'Name\': \'AUTO_ENLARGE_ADD_DISK\'}]\\"\\n    },\\n    \\"IforestProps\\": [\\n      {\\n        \\"key\\": \\"颜色分类~~白色\\\\n款式~~圆头\\"\\n      }\\n    ],\\n    \\"SellerPayPostfee\\": true,\\n    \\"CanSell\\": true,\\n    \\"LmItemCategory\\": \\"entity\\",\\n    \\"CustomizedAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"LmItemAttributeMap\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Current\\": \\"2020-01-01 00:00:00\\",\\n    \\"VirtualItemType\\": \\"cardRoll\\",\\n    \\"UserType\\": 1,\\n    \\"SecuredTransactions\\": 1,\\n    \\"ThirdPartyItemId\\": \\"44042249****\\\\n\\",\\n    \\"ThirdPartyName\\": \\"三方商品来源\\",\\n    \\"VideoUrl\\": \\"video/edf8d848fa80b1cac055c94652******.mp4\\",\\n    \\"VideoPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n    \\"CanNotBeSoldCode\\": \\"NULL\\",\\n    \\"CanNotBeSoldMassage\\": \\"NULL\\",\\n    \\"ItemTotalValue\\": -1,\\n    \\"ItemTotalSimpleValue\\": \\"有货\\",\\n    \\"InvoiceType\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '查询商品详情接口（支持区域库存）',
      'description' => '本接口用在查询商品在某区域下是否可售、是否有库存的场景。',
    ),
    'QueryMallCategoryList' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商id',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
            'example' => '75547******9212928',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城id',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
            'example' => '122889******114694',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目ID',
            'description' => '类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5001****',
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '18******263',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<List<DistributionCategoryModel>>',
            'description' => '响应数据',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号',
                'type' => 'string',
                'example' => '7152F15C-7298-5531-9A76-2ED2C331****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '商品类目信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '商品类目信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CategoryId' => 
                    array (
                      'title' => '后台类目ID',
                      'description' => '后台类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5001****',
                    ),
                    'Name' => 
                    array (
                      'title' => '类目名称',
                      'description' => '类目名称',
                      'type' => 'string',
                      'example' => '***电子产品',
                    ),
                    'ParentId' => 
                    array (
                      'title' => '父类目ID',
                      'description' => '父类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1041577**',
                    ),
                    'Leaf' => 
                    array (
                      'title' => '是否是叶子类目',
                      'description' => '是否是叶子类目',
                      'type' => 'boolean',
                      'example' => 'true',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"7152F15C-7298-5531-9A76-2ED2C331****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"CategoryId\\": 0,\\n      \\"Name\\": \\"***电子产品\\",\\n      \\"ParentId\\": 0,\\n      \\"Leaf\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询商品类目信息',
      'summary' => '商品类目查询接口。',
      'description' => '该接口使用在查询分销商城商品类目信息场景。',
      'requestParamsDescription' => '当传入类目ID为0时，表示查询一级类目；当传入类目ID非0时，返回当前类目的下级类目列表。',
    ),
    'QueryItemGuideRetailPrice' => 
    array (
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
          'AK' => 
          array (
          ),
        ),
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商id',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
            'example' => '75547******9212928',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城id',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
            'example' => '122889******114694',
          ),
        ),
        2 => 
        array (
          'name' => 'LmItemIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '商品id',
            'description' => '商品id集合',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品id',
              'type' => 'string',
              'required' => false,
              'example' => '[\\"10000***-65975997****\\"]',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '18******263',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<List<DistributionItemPriceDetailModel>>',
            'description' => 'PopResponse<List<DistributionItemPriceDetailModel>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'E090F1A0-7454-5F36-933C-E6332CE2****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '200',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '商品信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DistributionMallId' => 
                    array (
                      'title' => '分销商城ID',
                      'description' => '分销商城ID',
                      'type' => 'string',
                      'example' => '19e690e*****07a29c8',
                    ),
                    'LmItemId' => 
                    array (
                      'title' => 'LM商品ID',
                      'description' => 'LM商品ID',
                      'type' => 'string',
                      'example' => '1000****-630292****',
                    ),
                    'ItemId' => 
                    array (
                      'description' => '商品id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '65******0310',
                    ),
                    'ItemTitle' => 
                    array (
                      'title' => '商品标题',
                      'description' => '商品标题',
                      'type' => 'string',
                      'example' => '****酸菜',
                    ),
                    'ReservedPrice' => 
                    array (
                      'title' => '商品划线价、原价',
                      'description' => '商品划线价、原价',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'ReservedPriceScope' => 
                    array (
                      'title' => '商品划线价、原价范围',
                      'description' => '商品划线价、原价范围',
                      'type' => 'string',
                      'example' => '1000~2000',
                    ),
                    'GuideRetailPriceScope' => 
                    array (
                      'title' => '建议零售价范围',
                      'description' => '建议零售价范围',
                      'type' => 'string',
                      'example' => '1000~2000',
                    ),
                    'SkuModels' => 
                    array (
                      'title' => '商品规格',
                      'description' => '商品规格',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '商品规格信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DistributionMallId' => 
                          array (
                            'title' => '分销商城ID',
                            'description' => '分销商城ID',
                            'type' => 'string',
                            'example' => '39cc1****5c7211005187c',
                          ),
                          'LmItemId' => 
                          array (
                            'title' => 'LM商品ID',
                            'description' => 'LM商品ID',
                            'type' => 'string',
                            'example' => '10***642-6831****869',
                          ),
                          'ItemId' => 
                          array (
                            'description' => '商品id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '6487****621',
                          ),
                          'SkuId' => 
                          array (
                            'title' => '规格ID',
                            'description' => '规格ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '488****548894',
                          ),
                          'SkuTitle' => 
                          array (
                            'title' => '规格标题',
                            'description' => '规格标题',
                            'type' => 'string',
                            'example' => '美味****原味2盒',
                          ),
                          'ReservedPrice' => 
                          array (
                            'title' => '商品划线价、原价',
                            'description' => '商品划线价、原价',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '8000',
                          ),
                          'GuideRetailPrice' => 
                          array (
                            'title' => '建议零售价',
                            'description' => '建议零售价',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '7960',
                          ),
                          'PriceCent' => 
                          array (
                            'title' => '当前售价',
                            'description' => '当前售价',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '7960',
                          ),
                          'Status' => 
                          array (
                            'title' => '状态：1：商品可售卖',
                            'description' => '状态：1：商品可售卖',
                            'type' => 'integer',
                            'format' => 'int32',
                            'enumValueTitles' => 
                            array (
                              1 => '商品可售',
                              2 => '商品不可售',
                            ),
                            'example' => '1',
                          ),
                          'LowGuideRetailPrice' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                        ),
                      ),
                    ),
                    'LowGuideRetailPriceScope' => 
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"E090F1A0-7454-5F36-933C-E6332CE2****\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n      \\"LmItemId\\": \\"1000****-630292****\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemTitle\\": \\"****酸菜\\",\\n      \\"ReservedPrice\\": 2000,\\n      \\"ReservedPriceScope\\": \\"1000~2000\\",\\n      \\"GuideRetailPriceScope\\": \\"1000~2000\\",\\n      \\"SkuModels\\": [\\n        {\\n          \\"DistributionMallId\\": \\"39cc1****5c7211005187c\\",\\n          \\"LmItemId\\": \\"10***642-6831****869\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"SkuTitle\\": \\"美味****原味2盒\\",\\n          \\"ReservedPrice\\": 8000,\\n          \\"GuideRetailPrice\\": 7960,\\n          \\"PriceCent\\": 7960,\\n          \\"Status\\": 1,\\n          \\"LowGuideRetailPrice\\": 0\\n        }\\n      ],\\n      \\"LowGuideRetailPriceScope\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '商品建议售价查询接口',
      'summary' => '商品建议售价查询接口。',
      'description' => '查询指定商品的建议售价。',
      'requestParamsDescription' => '查询指定商品的建议售价，一次查询商品建议不超过20个。',
    ),
    'ListDistributionItemWithoutCache' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商id',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
            'example' => '75547******9212928',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionMallId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商商城id',
            'description' => '分销商商城id',
            'type' => 'string',
            'required' => false,
            'example' => '19e690e*****07a29c8',
          ),
        ),
        2 => 
        array (
          'name' => 'LmItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品id',
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => '10000***-6193664*****',
          ),
        ),
        3 => 
        array (
          'name' => 'ItemStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品状态',
            'description' => '商品状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '7521****8332932',
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
            'title' => 'PopResponse<List<DistributionItemModel>>',
            'description' => 'PopResponse<List<DistributionItemModel>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '5127621C-****-5DCA-9745-2936B31DFD12',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '205',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => '每页显示条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '27303',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DistributionMallId' => 
                    array (
                      'title' => '分销商城ID',
                      'description' => '分销商城ID',
                      'type' => 'string',
                      'example' => '19e690e*****07a29c8',
                    ),
                    'SkuModels' => 
                    array (
                      'title' => 'sku list',
                      'description' => '商品规格列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '商品规格信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DistributionMallId' => 
                          array (
                            'title' => '分销商城ID',
                            'description' => '分销商城ID',
                            'type' => 'string',
                            'example' => '19e690e*****07a29c8',
                          ),
                          'ExtJson' => 
                          array (
                            'title' => '预留扩展字段,JSON-Map结构',
                            'description' => '预留扩展字段,JSON-Map结构',
                            'type' => 'string',
                            'example' => '{}',
                          ),
                          'LmItemId' => 
                          array (
                            'title' => 'LM商品ID',
                            'description' => 'LM商品ID',
                            'type' => 'string',
                            'example' => '10000***-6193664*****',
                          ),
                          'ItemId' => 
                          array (
                            'title' => 'IC商品ID',
                            'description' => 'IC商品ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '6193664*****',
                          ),
                          'SkuId' => 
                          array (
                            'title' => '规格ID',
                            'description' => '规格ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '488****548894',
                          ),
                          'SkuPvs' => 
                          array (
                            'title' => 'Sku对应的属性PV值组合',
                            'description' => 'Sku对应的属性PV值组合',
                            'type' => 'string',
                            'example' => '1627207:28320;5919063:6536025;12304035:75366283;122216431:27772',
                          ),
                          'SkuPicUrl' => 
                          array (
                            'title' => 'Sku图片',
                            'description' => 'Sku图片',
                            'type' => 'string',
                            'example' => 'img/12344***.jpg',
                          ),
                          'SkuTitle' => 
                          array (
                            'title' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                            'description' => 'SKU对应的属性显示Title。多个属性组合值之间用斜线分隔。',
                            'type' => 'string',
                            'example' => '美味****原味2盒',
                          ),
                          'Quantity' => 
                          array (
                            'title' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                            'description' => 'SKU库存。如果商品有配送区域库存，且查询接口里指定了配送区域，则返回的是对应区域库存',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '30000',
                          ),
                          'SimpleQuantity' => 
                          array (
                            'title' => 'SKU模糊化库存
例如：有货、无货、库存紧张',
                            'description' => 'SKU模糊化库存
例如：有货、无货、库存紧张',
                            'type' => 'string',
                            'example' => '有货、无货、库存紧张',
                          ),
                          'HasQuantity' => 
                          array (
                            'title' => '是否有库存，返回的是库存状态，有或者没有',
                            'description' => '是否有库存，返回的是库存状态，有或者没有',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'ReservedPrice' => 
                          array (
                            'title' => 'IC SKU 一口价，划线价，商品原价（分）',
                            'description' => 'IC SKU 一口价，划线价，商品原价（分）',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '8000',
                          ),
                          'PriceCent' => 
                          array (
                            'title' => '商品销售价格（分）
渠道商供货价格',
                            'description' => '商品销售价格（分）
渠道商供货价格',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '7960',
                          ),
                          'SupplierPrice' => 
                          array (
                            'description' => '供货价（分）',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '7960',
                          ),
                          'Status' => 
                          array (
                            'title' => '商品规格售卖状态
1：商品可售卖
2：商品不可售卖
3：商品价格异常
4：商品被删除',
                            'description' => '商品规格售卖状态
1：商品可售卖
2：商品不可售卖
3：商品价格异常
4：商品被删除',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'CustomizedAttributeMap' => 
                          array (
                            'title' => '规格维度的扩展属性PV
（客户自定义属性）',
                            'description' => '规格维度的扩展属性PV
（客户自定义属性）',
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                              'description' => '客户自定义属性',
                            ),
                          ),
                          'LmSkuAttributeMap' => 
                          array (
                            'title' => '规格维度的扩展属性PV
（商家扩展属性或系统扩展属性）',
                            'description' => '规格维度的扩展属性PV
（商家扩展属性或系统扩展属性）',
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                              'example' => '{
        "taxInvoice": "100",
        "taxRateCode": "1123"
      }',
                              'description' => 'Linkedmall 平台SKU的属性',
                            ),
                          ),
                          'IsCanNotBeSoldCode' => 
                          array (
                            'title' => '不可售编码，可售时为空',
                            'description' => '不可售编码，可售时为空',
                            'type' => 'string',
                            'example' => 'CAN_NOT_BE_SOLD',
                          ),
                          'IsCanNotBeSoldMessage' => 
                          array (
                            'title' => '不可售消息，可售时为空',
                            'description' => '不可售消息，可售时为空',
                            'type' => 'string',
                            'example' => '商品不可售',
                          ),
                          'InvoiceType' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                        ),
                      ),
                    ),
                    'SkuPropertys' => 
                    array (
                      'title' => 'Sku属性PV对列表',
                      'description' => 'Sku属性PV对列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Sku属性PV对列表，用于渲染页面下单时，选择下单参数',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'title' => '规格属性ID',
                            'description' => '规格属性ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '44042249****',
                          ),
                          'Text' => 
                          array (
                            'title' => '属性键P',
                            'description' => '属性键P',
                            'type' => 'string',
                            'example' => '颜色分类',
                          ),
                          'Values' => 
                          array (
                            'title' => '属性值列表',
                            'description' => '属性值列表',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '属性值对',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Id' => 
                                array (
                                  'title' => '属性值ID',
                                  'description' => '属性值ID',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '600***',
                                ),
                                'Text' => 
                                array (
                                  'title' => '属性值V',
                                  'description' => '属性值V',
                                  'type' => 'string',
                                  'example' => '橙色',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'LmItemId' => 
                    array (
                      'title' => 'lm商品ID',
                      'description' => 'lm商品ID',
                      'type' => 'string',
                      'example' => '1000****-630292****',
                    ),
                    'ItemId' => 
                    array (
                      'title' => 'IC商品ID',
                      'description' => 'IC商品ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '65******0310',
                    ),
                    'ItemTitle' => 
                    array (
                      'title' => '商品名称',
                      'description' => '商品名称',
                      'type' => 'string',
                      'example' => '美味****原味2盒',
                    ),
                    'MainPicUrl' => 
                    array (
                      'title' => '主图',
                      'description' => '主图',
                      'type' => 'string',
                      'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                    ),
                    'FirstPicUrl' => 
                    array (
                      'title' => '轮播图第一张图',
                      'description' => '轮播图第一张图',
                      'type' => 'string',
                      'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                    ),
                    'ItemImages' => 
                    array (
                      'title' => '商品图片URL，最多10张，一般是Detail上轮播',
                      'description' => '商品图片URL，最多10张，一般是Detail上轮播',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '商品图片URL',
                        'type' => 'string',
                        'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg
',
                      ),
                    ),
                    'DescPath' => 
                    array (
                      'title' => '商品详情介绍-图片介绍，URL',
                      'description' => '商品详情介绍-图片介绍，URL',
                      'type' => 'string',
                      'example' => 'pic/edf8d848fa80b1cac055c94652*****.jpg',
                    ),
                    'DescOption' => 
                    array (
                      'title' => '商品详情介绍-图片介绍信息',
                      'description' => '商品详情介绍-图片介绍信息',
                      'type' => 'string',
                      'example' => '<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>',
                    ),
                    'MinPrice' => 
                    array (
                      'title' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                      'description' => '商品最低价格（分）。如果只有一个SKU，则直接为SKU上的销售价（减掉积分抵扣后），一般用在Detail页面，没有选择Sku时，显示的SKU里的最低价（减掉积分抵扣后）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3900',
                    ),
                    'ReservedPrice' => 
                    array (
                      'title' => '商品原价，可用于显示划线价',
                      'description' => '商品原价，可用于显示划线价',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。',
                      'description' => '商品库存，如果只有一个SKU，则直接是SKU上的库存。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'SimpleQuantity' => 
                    array (
                      'title' => '模糊化库存
例如：有货、无货、库存紧张',
                      'description' => '模糊化库存
例如：有货、无货、库存紧张',
                      'type' => 'string',
                      'example' => '有货
无货
库存紧张',
                    ),
                    'HasQuantity' => 
                    array (
                      'title' => '是否有库存，返回的是库存状态，有或者没有',
                      'description' => '是否有库存，返回的是库存状态，有或者没有',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CategoryId' => 
                    array (
                      'title' => '类目ID',
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5001****',
                    ),
                    'CategoryIds' => 
                    array (
                      'title' => '类目ID，父类目在前，子类目在后',
                      'description' => '类目ID，父类目在前，子类目在后',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '类目唯一标识',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '205879***',
                      ),
                    ),
                    'Prov' => 
                    array (
                      'title' => '商品所在省份：如浙江',
                      'description' => '商品所在省份：如浙江',
                      'type' => 'string',
                      'example' => '浙江',
                    ),
                    'City' => 
                    array (
                      'title' => '商品所在城市：如杭州',
                      'description' => '商品所在城市：如杭州',
                      'type' => 'string',
                      'example' => '杭州',
                    ),
                    'Properties' => 
                    array (
                      'title' => '产品属性或产品参数，供Detail页面显示使用
例如：
{颜色分类: ["桔色", "军绿色"]}',
                      'description' => '产品属性或产品参数，供Detail页面显示使用
例如：
{颜色分类: ["桔色", "军绿色"]}',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'string',
                          'example' => '颜色分类',
                        ),
                        'description' => '产品参数',
                      ),
                    ),
                    'Features' => 
                    array (
                      'title' => '商家配置产品特征
' . "\0" . 'tax_invoice：税率
' . "\0" . 'tax_rate_code：税码，全国统一
extraPeriod：保质期，用于食品
food_pro_date：生产日期',
                      'description' => '商家配置产品特征
' . "\0" . 'tax_invoice：税率
' . "\0" . 'tax_rate_code：税码，全国统一
extraPeriod：保质期，用于食品
food_pro_date：生产日期',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '产品特征',
                        'example' => '{
        "taxInvoice": "100",
        "taxRateCode": "1123"
      }',
                      ),
                    ),
                    'IforestProps' => 
                    array (
                      'title' => '关键属性，供Detail页面显示使用
例如：
[{value: "军绿色", key: "颜色分类"}, {value: "桔色", key: "颜色分类"}]',
                      'description' => '关键属性，供Detail页面显示使用
例如：
[{value: "军绿色", key: "颜色分类"}, {value: "桔色", key: "颜色分类"}]',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '属性对象',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'string',
                          'example' => '        {
          "value": "黄色",
          "key": "颜色分类"
        }',
                          'description' => '属性对象',
                        ),
                      ),
                    ),
                    'IsSellerPayPostfee' => 
                    array (
                      'title' => '是否包邮',
                      'description' => '是否包邮',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'IsCanSell' => 
                    array (
                      'title' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0',
                      'description' => '是否可销售，目前追要判断了商品的状态是否正常，同时库存要求大于0',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LmItemCategory' => 
                    array (
                      'title' => '商品在linkedmall平台的类型
entity：实物商品
aliComBenifit：虚拟商品',
                      'description' => '商品在linkedmall平台的类型
entity：实物商品
aliComBenifit：虚拟商品',
                      'type' => 'string',
                      'example' => 'entity',
                    ),
                    'CustomizedAttributeMap' => 
                    array (
                      'title' => '商品维度的扩展属性PV',
                      'description' => '商品维度的扩展属性PV',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '客户自定义属性',
                        'example' => '{}',
                      ),
                    ),
                    'LmItemAttributeMap' => 
                    array (
                      'title' => '商品维度的扩展属性PV',
                      'description' => '商品维度的扩展属性PV',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => 'Linkedmall 平台商品属性',
                        'example' => '{
      "taxInvoice": "100",
      "taxRateCode": "1123"
}',
                      ),
                    ),
                    'Current' => 
                    array (
                      'title' => '当前时间',
                      'description' => '当前时间',
                      'type' => 'string',
                      'example' => '2020-01-01 00:00:00',
                    ),
                    'VirtualItemType' => 
                    array (
                      'title' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                      'description' => '虚拟商品类型,该字段为枚举类型，值为cardRoll（卡券）、rechageableCard（充值卡）、fuelCard（油卡）',
                      'type' => 'string',
                      'example' => 'cardRoll',
                    ),
                    'UserType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'SecuredTransactions' => 
                    array (
                      'description' => '是否开通担保交易 0 未开通，1 已开通，2 未设置, 3 审核中, 4 开通失败',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ThirdPartyItemId' => 
                    array (
                      'title' => '外部商品id (来自第三方的商品)',
                      'description' => '外部商品id (来自第三方的商品)',
                      'type' => 'string',
                      'example' => '44042249****
',
                    ),
                    'ThirdPartyName' => 
                    array (
                      'title' => '商品来源 (标记第三方商品的来源)',
                      'description' => '商品来源 (标记第三方商品的来源)',
                      'type' => 'string',
                      'example' => '三方商品来源',
                    ),
                    'VideoUrl' => 
                    array (
                      'title' => '视频地址',
                      'description' => '视频地址',
                      'type' => 'string',
                      'example' => 'http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/video/edf8d848fa80b1cac055c94652******.mp4',
                    ),
                    'VideoPicUrl' => 
                    array (
                      'title' => '视频封面地址',
                      'description' => '视频封面地址',
                      'type' => 'string',
                      'example' => 'http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/pic/edf8d848fa80b1cac055c94652*****.jpg',
                    ),
                    'IsCanNotBeSoldCode' => 
                    array (
                      'title' => '不可售编码，可售时为空',
                      'description' => '不可售编码，可售时为空',
                      'type' => 'string',
                      'example' => 'CAN_NOT_BE_SOLD',
                    ),
                    'IsCanNotBeSoldMessage' => 
                    array (
                      'title' => '不可售消息，可售时为空',
                      'description' => '不可售消息，可售时为空',
                      'type' => 'string',
                      'example' => '商品不可售',
                    ),
                    'ItemTotalValue' => 
                    array (
                      'title' => '总量库存值',
                      'description' => '总量库存值',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100000',
                    ),
                    'ItemTotalSimpleValue' => 
                    array (
                      'title' => '总量库存模糊值
例如：
有货、无货、库存紧张',
                      'description' => '总量库存模糊值
例如：
有货、无货、库存紧张',
                      'type' => 'string',
                      'example' => '有货',
                    ),
                    'InvoiceType' => 
                    array (
                      'description' => '发票类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"5127621C-****-5DCA-9745-2936B31DFD12\\",\\n  \\"SubCode\\": \\"205\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 27303,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n      \\"SkuModels\\": [\\n        {\\n          \\"DistributionMallId\\": \\"19e690e*****07a29c8\\",\\n          \\"ExtJson\\": \\"{}\\",\\n          \\"LmItemId\\": \\"10000***-6193664*****\\",\\n          \\"ItemId\\": 0,\\n          \\"SkuId\\": 0,\\n          \\"SkuPvs\\": \\"1627207:28320;5919063:6536025;12304035:75366283;122216431:27772\\",\\n          \\"SkuPicUrl\\": \\"img/12344***.jpg\\",\\n          \\"SkuTitle\\": \\"美味****原味2盒\\",\\n          \\"Quantity\\": 30000,\\n          \\"SimpleQuantity\\": \\"有货、无货、库存紧张\\",\\n          \\"HasQuantity\\": true,\\n          \\"ReservedPrice\\": 8000,\\n          \\"PriceCent\\": 7960,\\n          \\"SupplierPrice\\": 7960,\\n          \\"Status\\": 1,\\n          \\"CustomizedAttributeMap\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"LmSkuAttributeMap\\": {\\n            \\"key\\": \\"{\\\\n        \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n        \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n      }\\"\\n          },\\n          \\"IsCanNotBeSoldCode\\": \\"CAN_NOT_BE_SOLD\\",\\n          \\"IsCanNotBeSoldMessage\\": \\"商品不可售\\",\\n          \\"InvoiceType\\": 0\\n        }\\n      ],\\n      \\"SkuPropertys\\": [\\n        {\\n          \\"Id\\": 0,\\n          \\"Text\\": \\"颜色分类\\",\\n          \\"Values\\": [\\n            {\\n              \\"Id\\": 0,\\n              \\"Text\\": \\"橙色\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"LmItemId\\": \\"1000****-630292****\\",\\n      \\"ItemId\\": 0,\\n      \\"ItemTitle\\": \\"美味****原味2盒\\",\\n      \\"MainPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n      \\"FirstPicUrl\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\",\\n      \\"ItemImages\\": [\\n        \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\\\n\\"\\n      ],\\n      \\"DescPath\\": \\"pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n      \\"DescOption\\": \\"<img>pic/edf8d848fa80b1cac055c94652*****.jpg</img>\\",\\n      \\"MinPrice\\": 3900,\\n      \\"ReservedPrice\\": 2000,\\n      \\"Quantity\\": 200,\\n      \\"SimpleQuantity\\": \\"有货\\\\n无货\\\\n库存紧张\\",\\n      \\"HasQuantity\\": true,\\n      \\"CategoryId\\": 0,\\n      \\"CategoryIds\\": [\\n        0\\n      ],\\n      \\"Prov\\": \\"浙江\\",\\n      \\"City\\": \\"杭州\\",\\n      \\"Properties\\": {\\n        \\"key\\": [\\n          \\"颜色分类\\"\\n        ]\\n      },\\n      \\"Features\\": {\\n        \\"key\\": \\"{\\\\n        \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n        \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n      }\\"\\n      },\\n      \\"IforestProps\\": [\\n        {\\n          \\"key\\": \\"        {\\\\n          \\\\\\"value\\\\\\": \\\\\\"黄色\\\\\\",\\\\n          \\\\\\"key\\\\\\": \\\\\\"颜色分类\\\\\\"\\\\n        }\\"\\n        }\\n      ],\\n      \\"IsSellerPayPostfee\\": true,\\n      \\"IsCanSell\\": true,\\n      \\"LmItemCategory\\": \\"entity\\",\\n      \\"CustomizedAttributeMap\\": {\\n        \\"key\\": \\"{}\\"\\n      },\\n      \\"LmItemAttributeMap\\": {\\n        \\"key\\": \\"{\\\\n      \\\\\\"taxInvoice\\\\\\": \\\\\\"100\\\\\\",\\\\n      \\\\\\"taxRateCode\\\\\\": \\\\\\"1123\\\\\\"\\\\n}\\"\\n      },\\n      \\"Current\\": \\"2020-01-01 00:00:00\\",\\n      \\"VirtualItemType\\": \\"cardRoll\\",\\n      \\"UserType\\": 0,\\n      \\"SecuredTransactions\\": 1,\\n      \\"ThirdPartyItemId\\": \\"44042249****\\\\n\\",\\n      \\"ThirdPartyName\\": \\"三方商品来源\\",\\n      \\"VideoUrl\\": \\"http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/video/edf8d848fa80b1cac055c94652******.mp4\\",\\n      \\"VideoPicUrl\\": \\"http://video***.oss-cn-shanghai.aliyuncs.com/vms-test/pic/edf8d848fa80b1cac055c94652*****.jpg\\",\\n      \\"IsCanNotBeSoldCode\\": \\"CAN_NOT_BE_SOLD\\",\\n      \\"IsCanNotBeSoldMessage\\": \\"商品不可售\\",\\n      \\"ItemTotalValue\\": 100000,\\n      \\"ItemTotalSimpleValue\\": \\"有货\\",\\n      \\"InvoiceType\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => ' 查询商品列表（无本地缓存）',
      'summary' => '查询无缓存分销商商品库内的商品列表，分销商品信息排序规则为商品的添加时间。',
      'description' => '此接口只适用于管控端。',
    ),
    'RenderDistributionOrder' => 
    array (
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
          'AK' => 
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
          'name' => 'ItemInfoLists',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '商品信息',
            'description' => '商品信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品信息',
              'type' => 'object',
              'properties' => 
              array (
                'DistributionMallId' => 
                array (
                  'description' => '分销商城ID',
                  'type' => 'string',
                  'required' => false,
                ),
                'LmItemId' => 
                array (
                  'description' => 'LM侧商品Id',
                  'type' => 'string',
                  'required' => false,
                ),
                'Quantity' => 
                array (
                  'description' => '下单数量',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'SkuId' => 
                array (
                  'description' => '商品SkuId',
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeliveryAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '收货地址',
            'description' => '收货地址',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DistributionSupplierId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '渠道供应商ID',
            'description' => '渠道供应商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'BuyerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销真实买家ID',
            'description' => '分销真实买家ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<DistributionRenderOrderResponse>',
            'description' => 'PopResponse<List<RenderOrderInfosItem>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RenderOrderInfos' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemInfos' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ItemId' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemName' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuName' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuId' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'DistributionMallId' => 
                              array (
                                'type' => 'string',
                              ),
                              'DistributionSupplierId' => 
                              array (
                                'type' => 'string',
                              ),
                              'DistributorId' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionFee' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'Quantity' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int32',
                              ),
                              'ItemUrl' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemPicUrl' => 
                              array (
                                'type' => 'string',
                              ),
                              'Price' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'CanSell' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'Message' => 
                              array (
                                'type' => 'string',
                              ),
                              'VirtualItemType' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemPromInstVOS' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'LmItemId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SkuIds' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'integer',
                                        'format' => 'int64',
                                      ),
                                    ),
                                    'AvailableItems' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'ItemId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'LmItemId' => 
                                          array (
                                            'type' => 'string',
                                          ),
                                          'SkuId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'LmShopId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'TbSellerId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Number' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int32',
                                          ),
                                          'PriceCent' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Points' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'PointsAmount' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'UserPayFee' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Removed' => 
                                          array (
                                            'type' => 'boolean',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'TbSellerId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'InstanceId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'PromotionName' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'PromotionType' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Level' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'DiscountPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'ThresholdPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'SpecialPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'UseStartTime' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'ExpireTime' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Selected' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                    'CanUse' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                    'Reason' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SubBizCode' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                ),
                              ),
                              'Features' => 
                              array (
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'ReservePrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                        ),
                        'DeliveryInfos' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'type' => 'string',
                              ),
                              'DisplayName' => 
                              array (
                                'type' => 'string',
                              ),
                              'PostFee' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ServiceType' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                        ),
                        'InvoiceInfo' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'type' => 'string',
                            ),
                            'Desc' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                        'ExtInfo' => 
                        array (
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'CanSell' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'Message' => 
                        array (
                          'type' => 'string',
                        ),
                        'ShopPromInstVOS' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'LmItemId' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuIds' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                              ),
                              'AvailableItems' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ItemId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'LmItemId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SkuId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'LmShopId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'TbSellerId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Number' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                    'PriceCent' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Points' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'PointsAmount' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'UserPayFee' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Removed' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                  ),
                                ),
                              ),
                              'TbSellerId' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'InstanceId' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionName' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionType' => 
                              array (
                                'type' => 'string',
                              ),
                              'Level' => 
                              array (
                                'type' => 'string',
                              ),
                              'DiscountPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ThresholdPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'SpecialPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'UseStartTime' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ExpireTime' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'Selected' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'CanUse' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'Reason' => 
                              array (
                                'type' => 'string',
                              ),
                              'SubBizCode' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'UnsellableRenderOrderInfos' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemInfos' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ItemId' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemName' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuName' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuId' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'DistributionMallId' => 
                              array (
                                'type' => 'string',
                              ),
                              'DistributionSupplierId' => 
                              array (
                                'type' => 'string',
                              ),
                              'DistributorId' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionFee' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'Quantity' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int32',
                              ),
                              'ItemUrl' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemPicUrl' => 
                              array (
                                'type' => 'string',
                              ),
                              'Price' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'CanSell' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'Message' => 
                              array (
                                'type' => 'string',
                              ),
                              'VirtualItemType' => 
                              array (
                                'type' => 'string',
                              ),
                              'ItemPromInstVOS' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'LmItemId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SkuIds' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'integer',
                                        'format' => 'int64',
                                      ),
                                    ),
                                    'AvailableItems' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'ItemId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'LmItemId' => 
                                          array (
                                            'type' => 'string',
                                          ),
                                          'SkuId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'LmShopId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'TbSellerId' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Number' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int32',
                                          ),
                                          'PriceCent' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Points' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'PointsAmount' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'UserPayFee' => 
                                          array (
                                            'type' => 'integer',
                                            'format' => 'int64',
                                          ),
                                          'Removed' => 
                                          array (
                                            'type' => 'boolean',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'TbSellerId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'InstanceId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'PromotionName' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'PromotionType' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Level' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'DiscountPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'ThresholdPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'SpecialPrice' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'UseStartTime' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'ExpireTime' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Selected' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                    'CanUse' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                    'Reason' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SubBizCode' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                ),
                              ),
                              'Features' => 
                              array (
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'ReservePrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                        ),
                        'DeliveryInfos' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'type' => 'string',
                              ),
                              'DisplayName' => 
                              array (
                                'type' => 'string',
                              ),
                              'PostFee' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ServiceType' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                        ),
                        'InvoiceInfo' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'type' => 'string',
                            ),
                            'Desc' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                        'ExtInfo' => 
                        array (
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'CanSell' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'Message' => 
                        array (
                          'type' => 'string',
                        ),
                        'ShopPromInstVOS' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'LmItemId' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkuIds' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                              ),
                              'AvailableItems' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ItemId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'LmItemId' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'SkuId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'LmShopId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'TbSellerId' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Number' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                    'PriceCent' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Points' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'PointsAmount' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'UserPayFee' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int64',
                                    ),
                                    'Removed' => 
                                    array (
                                      'type' => 'boolean',
                                    ),
                                  ),
                                ),
                              ),
                              'TbSellerId' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'InstanceId' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionName' => 
                              array (
                                'type' => 'string',
                              ),
                              'PromotionType' => 
                              array (
                                'type' => 'string',
                              ),
                              'Level' => 
                              array (
                                'type' => 'string',
                              ),
                              'DiscountPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ThresholdPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'SpecialPrice' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'UseStartTime' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'ExpireTime' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                              'Selected' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'CanUse' => 
                              array (
                                'type' => 'boolean',
                              ),
                              'Reason' => 
                              array (
                                'type' => 'string',
                              ),
                              'SubBizCode' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AddressInfos' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AddressId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Receiver' => 
                        array (
                          'type' => 'string',
                        ),
                        'ReceiverPhone' => 
                        array (
                          'type' => 'string',
                        ),
                        'AddressDetail' => 
                        array (
                          'type' => 'string',
                        ),
                        'DivisionCode' => 
                        array (
                          'type' => 'string',
                        ),
                        'TownDivisionCode' => 
                        array (
                          'type' => 'string',
                        ),
                        'IsDefault' => 
                        array (
                          'type' => 'boolean',
                        ),
                      ),
                    ),
                  ),
                  'ExtInfo' => 
                  array (
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'CanSell' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'Message' => 
                  array (
                    'type' => 'string',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"\\",\\n  \\"SubCode\\": \\"\\",\\n  \\"SubMessage\\": \\"\\",\\n  \\"PageSize\\": 0,\\n  \\"PageNumber\\": 0,\\n  \\"TotalCount\\": 0,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"\\",\\n  \\"Message\\": \\"\\",\\n  \\"Model\\": {\\n    \\"RenderOrderInfos\\": [\\n      {\\n        \\"ItemInfos\\": [\\n          {\\n            \\"ItemId\\": \\"\\",\\n            \\"ItemName\\": \\"\\",\\n            \\"SkuName\\": \\"\\",\\n            \\"SkuId\\": 0,\\n            \\"DistributionMallId\\": \\"\\",\\n            \\"DistributionSupplierId\\": \\"\\",\\n            \\"DistributorId\\": \\"\\",\\n            \\"PromotionFee\\": 0,\\n            \\"Quantity\\": 0,\\n            \\"ItemUrl\\": \\"\\",\\n            \\"ItemPicUrl\\": \\"\\",\\n            \\"Price\\": 0,\\n            \\"CanSell\\": true,\\n            \\"Message\\": \\"\\",\\n            \\"VirtualItemType\\": \\"\\",\\n            \\"ItemPromInstVOS\\": [\\n              {\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuIds\\": [\\n                  0\\n                ],\\n                \\"AvailableItems\\": [\\n                  {\\n                    \\"ItemId\\": 0,\\n                    \\"LmItemId\\": \\"\\",\\n                    \\"SkuId\\": 0,\\n                    \\"LmShopId\\": 0,\\n                    \\"TbSellerId\\": 0,\\n                    \\"Number\\": 0,\\n                    \\"PriceCent\\": 0,\\n                    \\"Points\\": 0,\\n                    \\"PointsAmount\\": 0,\\n                    \\"UserPayFee\\": 0,\\n                    \\"Removed\\": true\\n                  }\\n                ],\\n                \\"TbSellerId\\": 0,\\n                \\"InstanceId\\": \\"\\",\\n                \\"PromotionName\\": \\"\\",\\n                \\"PromotionType\\": \\"\\",\\n                \\"Level\\": \\"\\",\\n                \\"DiscountPrice\\": 0,\\n                \\"ThresholdPrice\\": 0,\\n                \\"SpecialPrice\\": 0,\\n                \\"UseStartTime\\": 0,\\n                \\"ExpireTime\\": 0,\\n                \\"Selected\\": true,\\n                \\"CanUse\\": true,\\n                \\"Reason\\": \\"\\",\\n                \\"SubBizCode\\": \\"\\"\\n              }\\n            ],\\n            \\"Features\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"ReservePrice\\": 0\\n          }\\n        ],\\n        \\"DeliveryInfos\\": [\\n          {\\n            \\"Id\\": \\"\\",\\n            \\"DisplayName\\": \\"\\",\\n            \\"PostFee\\": 0,\\n            \\"ServiceType\\": 0\\n          }\\n        ],\\n        \\"InvoiceInfo\\": {\\n          \\"Type\\": \\"\\",\\n          \\"Desc\\": \\"\\"\\n        },\\n        \\"ExtInfo\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanSell\\": true,\\n        \\"Message\\": \\"\\",\\n        \\"ShopPromInstVOS\\": [\\n          {\\n            \\"LmItemId\\": \\"\\",\\n            \\"SkuIds\\": [\\n              0\\n            ],\\n            \\"AvailableItems\\": [\\n              {\\n                \\"ItemId\\": 0,\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuId\\": 0,\\n                \\"LmShopId\\": 0,\\n                \\"TbSellerId\\": 0,\\n                \\"Number\\": 0,\\n                \\"PriceCent\\": 0,\\n                \\"Points\\": 0,\\n                \\"PointsAmount\\": 0,\\n                \\"UserPayFee\\": 0,\\n                \\"Removed\\": true\\n              }\\n            ],\\n            \\"TbSellerId\\": 0,\\n            \\"InstanceId\\": \\"\\",\\n            \\"PromotionName\\": \\"\\",\\n            \\"PromotionType\\": \\"\\",\\n            \\"Level\\": \\"\\",\\n            \\"DiscountPrice\\": 0,\\n            \\"ThresholdPrice\\": 0,\\n            \\"SpecialPrice\\": 0,\\n            \\"UseStartTime\\": 0,\\n            \\"ExpireTime\\": 0,\\n            \\"Selected\\": true,\\n            \\"CanUse\\": true,\\n            \\"Reason\\": \\"\\",\\n            \\"SubBizCode\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"UnsellableRenderOrderInfos\\": [\\n      {\\n        \\"ItemInfos\\": [\\n          {\\n            \\"ItemId\\": \\"\\",\\n            \\"ItemName\\": \\"\\",\\n            \\"SkuName\\": \\"\\",\\n            \\"SkuId\\": 0,\\n            \\"DistributionMallId\\": \\"\\",\\n            \\"DistributionSupplierId\\": \\"\\",\\n            \\"DistributorId\\": \\"\\",\\n            \\"PromotionFee\\": 0,\\n            \\"Quantity\\": 0,\\n            \\"ItemUrl\\": \\"\\",\\n            \\"ItemPicUrl\\": \\"\\",\\n            \\"Price\\": 0,\\n            \\"CanSell\\": true,\\n            \\"Message\\": \\"\\",\\n            \\"VirtualItemType\\": \\"\\",\\n            \\"ItemPromInstVOS\\": [\\n              {\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuIds\\": [\\n                  0\\n                ],\\n                \\"AvailableItems\\": [\\n                  {\\n                    \\"ItemId\\": 0,\\n                    \\"LmItemId\\": \\"\\",\\n                    \\"SkuId\\": 0,\\n                    \\"LmShopId\\": 0,\\n                    \\"TbSellerId\\": 0,\\n                    \\"Number\\": 0,\\n                    \\"PriceCent\\": 0,\\n                    \\"Points\\": 0,\\n                    \\"PointsAmount\\": 0,\\n                    \\"UserPayFee\\": 0,\\n                    \\"Removed\\": true\\n                  }\\n                ],\\n                \\"TbSellerId\\": 0,\\n                \\"InstanceId\\": \\"\\",\\n                \\"PromotionName\\": \\"\\",\\n                \\"PromotionType\\": \\"\\",\\n                \\"Level\\": \\"\\",\\n                \\"DiscountPrice\\": 0,\\n                \\"ThresholdPrice\\": 0,\\n                \\"SpecialPrice\\": 0,\\n                \\"UseStartTime\\": 0,\\n                \\"ExpireTime\\": 0,\\n                \\"Selected\\": true,\\n                \\"CanUse\\": true,\\n                \\"Reason\\": \\"\\",\\n                \\"SubBizCode\\": \\"\\"\\n              }\\n            ],\\n            \\"Features\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"ReservePrice\\": 0\\n          }\\n        ],\\n        \\"DeliveryInfos\\": [\\n          {\\n            \\"Id\\": \\"\\",\\n            \\"DisplayName\\": \\"\\",\\n            \\"PostFee\\": 0,\\n            \\"ServiceType\\": 0\\n          }\\n        ],\\n        \\"InvoiceInfo\\": {\\n          \\"Type\\": \\"\\",\\n          \\"Desc\\": \\"\\"\\n        },\\n        \\"ExtInfo\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CanSell\\": true,\\n        \\"Message\\": \\"\\",\\n        \\"ShopPromInstVOS\\": [\\n          {\\n            \\"LmItemId\\": \\"\\",\\n            \\"SkuIds\\": [\\n              0\\n            ],\\n            \\"AvailableItems\\": [\\n              {\\n                \\"ItemId\\": 0,\\n                \\"LmItemId\\": \\"\\",\\n                \\"SkuId\\": 0,\\n                \\"LmShopId\\": 0,\\n                \\"TbSellerId\\": 0,\\n                \\"Number\\": 0,\\n                \\"PriceCent\\": 0,\\n                \\"Points\\": 0,\\n                \\"PointsAmount\\": 0,\\n                \\"UserPayFee\\": 0,\\n                \\"Removed\\": true\\n              }\\n            ],\\n            \\"TbSellerId\\": 0,\\n            \\"InstanceId\\": \\"\\",\\n            \\"PromotionName\\": \\"\\",\\n            \\"PromotionType\\": \\"\\",\\n            \\"Level\\": \\"\\",\\n            \\"DiscountPrice\\": 0,\\n            \\"ThresholdPrice\\": 0,\\n            \\"SpecialPrice\\": 0,\\n            \\"UseStartTime\\": 0,\\n            \\"ExpireTime\\": 0,\\n            \\"Selected\\": true,\\n            \\"CanUse\\": true,\\n            \\"Reason\\": \\"\\",\\n            \\"SubBizCode\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"AddressInfos\\": [\\n      {\\n        \\"AddressId\\": 0,\\n        \\"Receiver\\": \\"\\",\\n        \\"ReceiverPhone\\": \\"\\",\\n        \\"AddressDetail\\": \\"\\",\\n        \\"DivisionCode\\": \\"\\",\\n        \\"TownDivisionCode\\": \\"\\",\\n        \\"IsDefault\\": true\\n      }\\n    ],\\n    \\"ExtInfo\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"CanSell\\": true,\\n    \\"Message\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '分销采购订单渲染',
      'summary' => '分销订单渲染。',
      'description' => '分销订单渲染',
      'requestParamsDescription' => '```
{ 
    "divisionCode": "区/县的4级divisionCode(街道/镇的上一级地址)", //该字段通过queryAddress接口获取
    "townDivisionCode":"街道/镇的5级divisionCode", //该字段通过queryAddress接口获取
    "fullName": "收货人姓名", 
    "mobile": "收货人电话", 
    "addressDetail": "收货人地址" 
}
```',
    ),
    'ApplyCreateDistributionOrder' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributionOutTradeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '外部交易号',
            'description' => '如果传入了外部交易号，则会以其作为请求的幂等键，重复传入相同的外部交易号，会返回重复下单提示。外部交易号会在交易结果通知中透出。',
            'type' => 'string',
            'required' => false,
            'example' => '789***3323',
          ),
        ),
        1 => 
        array (
          'name' => 'ItemInfoLists',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '商品信息',
            'description' => '商品信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品信息',
              'type' => 'object',
              'properties' => 
              array (
                'DistributionMallId' => 
                array (
                  'description' => '分销商城ID',
                  'type' => 'string',
                  'required' => false,
                  'example' => '465879694****794d70934',
                ),
                'LmItemId' => 
                array (
                  'description' => 'Lm侧商品Id',
                  'type' => 'string',
                  'required' => false,
                  'example' => '100***35-634***598',
                ),
                'Quantity' => 
                array (
                  'description' => '下单数量',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SkuId' => 
                array (
                  'description' => 'SKU',
                  'type' => 'string',
                  'required' => false,
                  'example' => '456***9561',
                ),
                'Price' => 
                array (
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DeliveryAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '收货地址',
            'description' => '收货地址',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"divisionCode\\":\\"44***22\\",\\"addressDetail\\":\\"**小区\\",\\"mobile\\":\\"180***0041\\",\\"fullName\\":\\"小**\\",\\"townDivisionCode\\":\\"440***32\\"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        4 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '6331***2131',
          ),
        ),
        5 => 
        array (
          'name' => 'DistributionSupplierId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '渠道供应商ID',
            'description' => '渠道供应商ID',
            'type' => 'string',
            'required' => false,
            'example' => '764***2245',
          ),
        ),
        6 => 
        array (
          'name' => 'BuyerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销真实买家ID',
            'description' => '分销真实买家ID',
            'type' => 'string',
            'required' => false,
            'example' => 'u***01',
          ),
        ),
        7 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '12***29',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<String>',
            'description' => 'PopResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => 'B1756669-4A***F-A6E0E8605FEC',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '7152F15C-7298-55****76-2ED2C331',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '200',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'string',
                'example' => 'T213***342',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"B1756669-4A***F-A6E0E8605FEC\\",\\n  \\"RequestId\\": \\"7152F15C-7298-55****76-2ED2C331\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": \\"T213***342\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyCreateDistributionOrderResponse>\\n    <LogsId>B1756669-4A***F-A6E0E8605FEC</LogsId>\\n    <RequestId>7152F15C-7298-55****76-2ED2C331</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>20</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>10</TotalCount>\\n    <Success>true</Success>\\n    <Code>0000</Code>\\n    <Message>SUCCESS</Message>\\n    <Model>T213***342</Model>\\n</ApplyCreateDistributionOrderResponse>","errorExample":""}]',
      'title' => '提交分销采购订单创建请求',
      'summary' => '提交分销订单创建请求。',
      'description' => '异步接口,只是提交创建分销订单申请,需要接收分销订单创建结果通知或者主动调查询分销订单状态接口。',
    ),
    'QueryDistributionTradeStatus' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionSupplierId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '渠道供应商ID',
            'description' => '渠道供应商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DistributionTradeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销交易号',
            'description' => '分销交易号',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<String>',
            'description' => 'PopResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'string',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询分销交易状态',
      'summary' => '查询分销交易状态。',
      'description' => '只返回分销交易状态。',
    ),
    'ConfirmDisburse4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionTradeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销交易号',
            'description' => '分销交易号',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'MainDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主分销订单号',
            'description' => '主分销订单号',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<Void>',
            'description' => 'PopResponse<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '1718921E-C8D4-55E1-B8D4-114AE537C1B7',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"1718921E-C8D4-55E1-B8D4-114AE537C1B7\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
      'title' => ' 分销采购订单确认收货',
      'summary' => '分销订单确认收货。',
      'description' => '只支持主分销订单确认收货',
    ),
    'InitApplyRefund4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'BizClaimType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款类型',
            'description' => '退款类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'GoodsStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '货物状态',
            'description' => '货物状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<InitApplyRefundData>',
            'description' => 'PopResponse<InitApplyRefundData>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SubDistributionOrderId' => 
                  array (
                    'title' => '子分销订单号',
                    'description' => '子分销订单号',
                    'type' => 'string',
                  ),
                  'BizClaimType' => 
                  array (
                    'title' => '支持的订单退货方式',
                    'description' => '支持的订单退货方式',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'MainOrderRefund' => 
                  array (
                    'title' => '是否是整单退',
                    'description' => '是否是整单退',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MaxRefundFeeData' => 
                  array (
                    'description' => '本单退款金额区间',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxRefundFee' => 
                      array (
                        'title' => '本单最大可退款金额',
                        'description' => '本单最大可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                      'MinRefundFee' => 
                      array (
                        'title' => '本单最小可退款金额',
                        'description' => '本单最小可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                    ),
                  ),
                  'RefundReasonList' => 
                  array (
                    'description' => '退款信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '退款信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReasonTextId' => 
                        array (
                          'description' => '退款信息id',
                          'type' => 'string',
                          'example' => '12323',
                        ),
                        'ProofRequired' => 
                        array (
                          'title' => '是否要求上传凭证',
                          'description' => '是否要求上传凭证',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ReasonTips' => 
                        array (
                          'description' => '退款信息',
                          'type' => 'string',
                          'example' => '拍多不想要',
                        ),
                        'RefundDescRequired' => 
                        array (
                          'title' => '是否要求留言',
                          'description' => '是否要求留言',
                          'type' => 'boolean',
                          'example' => 'true',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"BizClaimType\\": 1,\\n    \\"MainOrderRefund\\": false,\\n    \\"MaxRefundFeeData\\": {\\n      \\"MaxRefundFee\\": 100,\\n      \\"MinRefundFee\\": 10\\n    },\\n    \\"RefundReasonList\\": [\\n      {\\n        \\"ReasonTextId\\": \\"12323\\",\\n        \\"ProofRequired\\": true,\\n        \\"ReasonTips\\": \\"拍多不想要\\",\\n        \\"RefundDescRequired\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '分销采购订单退款申请初始化',
      'summary' => '初始化分销订单退款申请。',
      'description' => '注意：订单“未发货”只能申请“仅退款(BizClaimType=1)”，订单“已发货”只能申请货物状态为“未收到货(GoodsStatus=1)”或“已收到货(GoodsStatus=2)”

逆向申请具体情况如下：  
payStatus即指订单状态orderStatus  
售中（未确认收货 payStatus 2）  
仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  
仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  
退货退款 货物状态 goodstatus 2已收到货  
售后（已确认收货 payStatus 6）  
仅退款 goodstatus 2已收到货  
退货退款 goodstatus 2已收到货',
    ),
    'ApplyRefund4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '7662***125',
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
            'example' => 'DIS_343***445',
          ),
        ),
        2 => 
        array (
          'name' => 'BizClaimType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款类型',
            'description' => '退款类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplyRefundFee',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '申请退款金额',
            'description' => '申请退款金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '790',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplyRefundCount',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退货数量',
            'description' => '退货数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ApplyReasonTextId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款原因ID',
            'description' => '退款原因ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '500325',
          ),
        ),
        6 => 
        array (
          'name' => 'LeaveMessage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '留言',
            'description' => '留言',
            'type' => 'string',
            'required' => false,
            'example' => '快递滞留 买家申请退款',
          ),
        ),
        7 => 
        array (
          'name' => 'LeavePictureLists',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '凭证',
            'description' => '凭证列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '退款凭证',
              'type' => 'object',
              'properties' => 
              array (
                'Picture' => 
                array (
                  'description' => '图片地址',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://aliyundoc.com',
                ),
                'Desc' => 
                array (
                  'description' => '图片描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => '商品破损',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'GoodsStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '货物状态',
            'description' => '货物状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '213**761',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<RefundApplicationData>',
            'description' => 'PopResponse<RefundApplicationData>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '539E5C68-D8B5-57EC-9****8AFD9E0',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '200',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SubDistributionOrderId' => 
                  array (
                    'title' => '当前发起逆向的子分销订单号',
                    'description' => '当前发起逆向的子分销订单号',
                    'type' => 'string',
                    'example' => 'DIS_343***445',
                  ),
                  'DisputeStatus' => 
                  array (
                    'title' => '逆向的状态',
                    'description' => '逆向的状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeType' => 
                  array (
                    'title' => '退款类型',
                    'description' => '退款类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeId' => 
                  array (
                    'title' => '纠纷id',
                    'description' => '纠纷id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '213***343',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9****8AFD9E0\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"DIS_343***445\\",\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ApplyRefund4DistributionResponse>\\n    <LogsId>1</LogsId>\\n    <RequestId>539E5C68-D8B5-57EC-9****8AFD9E0</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Success>true</Success>\\n    <Code>0000</Code>\\n    <Message>SUCCESS</Message>\\n    <Model>\\n        <SubDistributionOrderId>DIS_343***445</SubDistributionOrderId>\\n        <DisputeStatus>1</DisputeStatus>\\n        <DisputeType>1</DisputeType>\\n    </Model>\\n</ApplyRefund4DistributionResponse>","errorExample":""}]',
      'title' => '分销采购订单退款申请',
      'summary' => '分销订单退款申请。',
      'description' => '基于 initApplyRefund4Distribution接口获取退款申请初始化信息，发起退款或者退货退款申请，该接口不支持退换货。  

注意：  
1.如果退款申请被卖家拒绝(通过queryRefundApplicationDetail4Distribution接口查询到disputeStatus为6时)，需要先取消退款申请(通过cancelRefund接口)，再申请下一次  
2.正常售中允许申请退款三次，售后允许申请退款两次，如遇超过次数后不能申请退款，需自行联系商家打开线上退款入口（售中和售后的界定边缘为：确认收货）  
逆向申请具体情况如下：payStatus即指订单状态orderStatus  
售中（未确认收货 payStatus 2）  
仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  
仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  
退货退款 货物状态 goodstatus 2已收到货  
售后（已确认收货 payStatus 6）  
仅退款 goodstatus 2已收到货  
退货退款 goodstatus 2已收到货  
上传退款凭证须知：由于部分商家内部小二网络环境较差，请务必使用阿里云的oss服务作为您的图片存储，详细请参考：https://help.aliyun.com/document_detail/194635.htm',
    ),
    'InitModifyRefund4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'BizClaimType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款类型',
            'description' => '退款类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DisputeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '纠纷ID',
            'description' => '纠纷ID，通过查询订单逆向申请详情接口获取',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '14244******33071',
          ),
        ),
        4 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<InitApplyRefundData>',
            'description' => 'PopResponse<InitApplyRefundData>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SubDistributionOrderId' => 
                  array (
                    'title' => '子分销订单号',
                    'description' => '子分销订单号',
                    'type' => 'string',
                  ),
                  'BizClaimType' => 
                  array (
                    'title' => '支持的订单退货方式',
                    'description' => '支持的订单退货方式',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'MainOrderRefund' => 
                  array (
                    'title' => '是否是整单退',
                    'description' => '是否是整单退',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MaxRefundFeeData' => 
                  array (
                    'description' => '本单可退金额数据',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxRefundFee' => 
                      array (
                        'title' => '本单最大可退款金额',
                        'description' => '本单最大可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'MinRefundFee' => 
                      array (
                        'title' => '本单最小可退款金额',
                        'description' => '本单最小可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'RefundReasonList' => 
                  array (
                    'description' => '退款信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '退款信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReasonTextId' => 
                        array (
                          'description' => '退款信息id',
                          'type' => 'string',
                          'example' => '12323',
                        ),
                        'ProofRequired' => 
                        array (
                          'title' => '是否要求上传凭证',
                          'description' => '是否要求上传凭证',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ReasonTips' => 
                        array (
                          'description' => '退款信息',
                          'type' => 'string',
                          'example' => '拍多不想要',
                        ),
                        'RefundDescRequired' => 
                        array (
                          'title' => '是否要求留言',
                          'description' => '是否要求留言',
                          'type' => 'boolean',
                          'example' => 'true',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"BizClaimType\\": 1,\\n    \\"MainOrderRefund\\": false,\\n    \\"MaxRefundFeeData\\": {\\n      \\"MaxRefundFee\\": 10,\\n      \\"MinRefundFee\\": 100\\n    },\\n    \\"RefundReasonList\\": [\\n      {\\n        \\"ReasonTextId\\": \\"12323\\",\\n        \\"ProofRequired\\": true,\\n        \\"ReasonTips\\": \\"拍多不想要\\",\\n        \\"RefundDescRequired\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '分销采购订单退款申请修改初始化',
      'summary' => '分销订单退款申请修改初始化。',
      'description' => '获取订单相关的逆向修改数据，必须在发起退款申请之后调用。  

注意：订单“未发货”只能申请“仅退款(BizClaimType=1)”，订单“已发货”只能申请货物状态为“未收到货(GoodsStatus=1)”或“已收到货(GoodsStatus=2)”  
逆向修改申请具体情况如下：payStatus即指订单状态orderStatus  
售中（未确认收货 payStatus 2）  
仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  
仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  
退货退款 货物状态 goodstatus 2已收到货  
售后（已确认收货 payStatus 6）  
仅退款 goodstatus 2已收到货  
退货退款 goodstatus 2已收到货  ',
    ),
    'ModifyRefund4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '766***221',
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
            'example' => 'DIS_153***851',
          ),
        ),
        2 => 
        array (
          'name' => 'BizClaimType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款类型',
            'description' => '退款类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplyRefundFee',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '申请退款金额',
            'description' => '申请退款金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '790',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplyRefundCount',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退货数量',
            'description' => '退货数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ApplyReasonTextId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退款原因ID',
            'description' => '退款原因ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '500325',
          ),
        ),
        6 => 
        array (
          'name' => 'LeaveMessage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '留言',
            'description' => '留言',
            'type' => 'string',
            'required' => false,
            'example' => '快递滞留 买家申请退款',
          ),
        ),
        7 => 
        array (
          'name' => 'LeavePictureLists',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '凭证',
            'description' => '凭证列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '退款凭证信息',
              'type' => 'object',
              'properties' => 
              array (
                'Desc' => 
                array (
                  'description' => '图片描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://aliyundoc.com',
                ),
                'Picture' => 
                array (
                  'description' => '图片地址',
                  'type' => 'string',
                  'required' => false,
                  'example' => '商品破损',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'GoodsStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '货物状态',
            'description' => '货物状态',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'DisputeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '纠纷id',
            'description' => '纠纷id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '235***343',
          ),
        ),
        10 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
            'required' => false,
            'example' => '213**112',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<RefundApplicationData>',
            'description' => 'PopResponse<RefundApplicationData>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '539E5C68-D8B5-57EC-9****8AFD9E0',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '200',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => '""',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SubDistributionOrderId' => 
                  array (
                    'title' => '当前发起逆向的子分销订单号',
                    'description' => '当前发起逆向的子分销订单号',
                    'type' => 'string',
                    'example' => 'DIS_153***851',
                  ),
                  'DisputeStatus' => 
                  array (
                    'title' => '逆向的状态',
                    'description' => '逆向的状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'DisputeType' => 
                  array (
                    'title' => '退款类型',
                    'description' => '退款类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeId' => 
                  array (
                    'title' => '纠纷id',
                    'description' => '纠纷id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '235***343',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"539E5C68-D8B5-57EC-9****8AFD9E0\\",\\n  \\"SubCode\\": \\"200\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"DIS_153***851\\",\\n    \\"DisputeStatus\\": 5,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifyRefund4DistributionResponse>\\n    <LogsId>1</LogsId>\\n    <RequestId>539E5C68-D8B5-57EC-9****8AFD9E0</RequestId>\\n    <SubCode>200</SubCode>\\n    <SubMessage>SUCCESS</SubMessage>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Success>false</Success>\\n    <Code>0000</Code>\\n    <Message>\\"\\"</Message>\\n    <Model>\\n        <SubDistributionOrderId>DIS_153***851</SubDistributionOrderId>\\n        <DisputeStatus>5</DisputeStatus>\\n        <DisputeType>1</DisputeType>\\n    </Model>\\n</ModifyRefund4DistributionResponse>","errorExample":""}]',
      'title' => '分销采购订单退款申请修改',
      'summary' => '分销订单退款申请修改。',
      'description' => '基于 initModifyRefund4Distribution 接口获取退款信息，发起退款或者退货退款修改申请，该接口不支持退换货

注意：  
1.退款申请被卖家拒绝(通过queryRefundApplicationDetail4Distribution 接口查询到disputeStatus为6时)后，通过逆向修改申请借款，重新发起退款申请  
2.正常售中允许申请退款三次，售后允许申请退款两次，如遇超过次数后不能申请退款，需自行联系商家打开线上退款入口（售中和售后的界定边缘为：确认收货）  
逆向修改申请具体情况如下：payStatus即指订单状态orderStatus  
售中（未确认收货 payStatus 2）  
仅退款 物流状态 logisticsStatus 1未发货	货物状态 goodstatus 4未发货  
仅退款 物流状态 logisticsStatus 2已发货	货物状态 goodstatus 1未收到货  
退货退款 货物状态 goodstatus 2已收到货  
售后（已确认收货 payStatus 6）  
仅退款 goodstatus 2已收到货  
退货退款 goodstatus 2已收到货  
上传退款凭证须知：由于部分商家内部小二网络环境较差，请务必使用阿里云的oss服务作为您的图片存储，详细请参考： 
 https://help.aliyun.com/document_detail/194635.htm',
    ),
    'CancelRefund4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DisputeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '纠纷ID',
            'description' => '纠纷ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '14244******33071',
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<RefundApplicationData>',
            'description' => 'PopResponse<RefundApplicationData>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '3B55509D-20AC-5BD5-9A81-D6B7382E****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SubDistributionOrderId' => 
                  array (
                    'title' => '当前发起逆向的子分销订单号',
                    'description' => '当前发起逆向的子分销订单号',
                    'type' => 'string',
                  ),
                  'DisputeStatus' => 
                  array (
                    'title' => '逆向的状态',
                    'description' => '逆向的状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeType' => 
                  array (
                    'title' => '退款类型',
                    'description' => '退款类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeId' => 
                  array (
                    'title' => '纠纷id',
                    'description' => '纠纷id',
                    'type' => 'integer',
                    'format' => 'int64',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"3B55509D-20AC-5BD5-9A81-D6B7382E****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"SubDistributionOrderId\\": \\"\\",\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 1,\\n    \\"DisputeId\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '取消分销采购订单退款申请',
      'summary' => '取消分销订单退款申请。',
      'description' => '如果已经提交了退款申请，商家还未响应时，客户想取消退款申请，可以通过此接口取消。  
注意：disputeId字段需要通过查询订单逆向申请详情（queryRefundApplicationDetail4DistributionOrder）接口获取
',
    ),
    'SubmitReturnGoodLogistics4Distribution' => 
    array (
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DisputeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '纠纷ID',
            'description' => '纠纷ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '14244******33071',
          ),
        ),
        3 => 
        array (
          'name' => 'LogisticsNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '物流单号',
            'description' => '物流单号',
            'type' => 'string',
            'required' => false,
            'example' => ' SF131*****7061',
          ),
        ),
        4 => 
        array (
          'name' => 'CpCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '公司代码',
            'description' => '公司代码',
            'type' => 'string',
            'required' => false,
            'example' => 'SF',
          ),
        ),
        5 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<Void>',
            'description' => 'PopResponse<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '79C01D47-3C44-57D9-BC99-1B33F7ED****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '16',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"79C01D47-3C44-57D9-BC99-1B33F7ED****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 16,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
      'title' => ' 提交分销采购订单退货物流信息',
      'summary' => '如果提交了退货申请，通过该接口提交退货的物流信息。',
      'description' => '注意：  
1.只有在卖家同意退款(通过queryRefundApplicationDetail4DistributionOrder接口查询到disputeStatus为2时)且需要退回货物时，才能调此接口  
2.DisputeId字段需要通过查询订单逆向申请详情（queryRefundApplicationDetail4DistributionOrder）接口获取',
    ),
    'QueryRefundApplicationDetail4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'SubDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<RefundApplicationDetail>',
            'description' => 'PopResponse<RefundApplicationDetail>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '64ACF32E-5B78-5DDD-89D0-ACFA0B4BFF38',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ApplyDisputeDesc' => 
                  array (
                    'description' => '当前买家申请退款说明',
                    'type' => 'string',
                    'example' => '拍多不想要',
                  ),
                  'ApplyReason' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ReasonTextId' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                      ),
                      'ReasonTips' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                  'BizClaimType' => 
                  array (
                    'description' => '退款类型。1 仅退款, 3 退货退款',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeCreateTime' => 
                  array (
                    'description' => '逆向发起时间',
                    'type' => 'string',
                  ),
                  'DisputeDesc' => 
                  array (
                    'description' => '申请逆向描述',
                    'type' => 'string',
                  ),
                  'DisputeEndTime' => 
                  array (
                    'description' => '逆向结束时间',
                    'type' => 'string',
                  ),
                  'DisputeId' => 
                  array (
                    'description' => '纠纷ID，通过查询订单逆向申请详情接⼝获取',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '155816643598654055',
                  ),
                  'DisputeStatus' => 
                  array (
                    'description' => '逆向退款的状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DisputeType' => 
                  array (
                    'description' => '逆向发生的类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DistributionOrderId' => 
                  array (
                    'description' => '对应主分销订单号',
                    'type' => 'string',
                    'example' => '123498124',
                  ),
                  'RefundFeeData' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxRefundFee' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                      ),
                      'MinRefundFee' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                      ),
                    ),
                  ),
                  'OrderLogisticsStatus' => 
                  array (
                    'description' => ' 当前的订单的物流状态，1，标识未发货',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RealRefundFee' => 
                  array (
                    'description' => '实际买家收到的⾦额',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2900',
                  ),
                  'RefundFee' => 
                  array (
                    'description' => '退款⾦额(含退平台补贴的⾦额)',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2900',
                  ),
                  'RefunderAddress' => 
                  array (
                    'description' => '商家退货地址，卖家同意退货后才会显示',
                    'type' => 'string',
                  ),
                  'RefunderName' => 
                  array (
                    'description' => '退货收货人，卖家同意退货后才会显示',
                    'type' => 'string',
                  ),
                  'RefunderTel' => 
                  array (
                    'description' => '退货联系方式，卖家同意退货后才会显示',
                    'type' => 'string',
                  ),
                  'RefunderZipCode' => 
                  array (
                    'description' => '退货地址邮编，卖家同意退货后才会显示',
                    'type' => 'string',
                  ),
                  'ReturnGoodCount' => 
                  array (
                    'description' => '退货数量',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ReturnGoodLogisticsStatus' => 
                  array (
                    'description' => '退货物流状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'SellerAgreeMsg' => 
                  array (
                    'description' => '卖家同意退货说明,真实的退货地址会在这个字段进⾏返回',
                    'type' => 'string',
                    'example' => '同意退款',
                  ),
                  'SellerRefuseAgreementMessage' => 
                  array (
                    'description' => '卖家拒绝的留⾔说明',
                    'type' => 'string',
                    'example' => '商品没问题，买家举证无效',
                  ),
                  'SellerRefuseReason' => 
                  array (
                    'description' => '卖家拒绝原因',
                    'type' => 'string',
                    'example' => '商品没问题，买家举证无效',
                  ),
                  'SubDistributionOrderId' => 
                  array (
                    'description' => '子分销订单号',
                    'type' => 'string',
                    'example' => '12131234',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"64ACF32E-5B78-5DDD-89D0-ACFA0B4BFF38\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"SUCCESS\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"ApplyDisputeDesc\\": \\"拍多不想要\\",\\n    \\"ApplyReason\\": {\\n      \\"ReasonTextId\\": 0,\\n      \\"ReasonTips\\": \\"\\"\\n    },\\n    \\"BizClaimType\\": 1,\\n    \\"DisputeCreateTime\\": \\"\\",\\n    \\"DisputeDesc\\": \\"\\",\\n    \\"DisputeEndTime\\": \\"\\",\\n    \\"DisputeId\\": 155816643598654050,\\n    \\"DisputeStatus\\": 1,\\n    \\"DisputeType\\": 0,\\n    \\"DistributionOrderId\\": \\"123498124\\",\\n    \\"RefundFeeData\\": {\\n      \\"MaxRefundFee\\": 0,\\n      \\"MinRefundFee\\": 0\\n    },\\n    \\"OrderLogisticsStatus\\": 1,\\n    \\"RealRefundFee\\": 2900,\\n    \\"RefundFee\\": 2900,\\n    \\"RefunderAddress\\": \\"\\",\\n    \\"RefunderName\\": \\"\\",\\n    \\"RefunderTel\\": \\"\\",\\n    \\"RefunderZipCode\\": \\"\\",\\n    \\"ReturnGoodCount\\": 1,\\n    \\"ReturnGoodLogisticsStatus\\": 1,\\n    \\"SellerAgreeMsg\\": \\"同意退款\\",\\n    \\"SellerRefuseAgreementMessage\\": \\"商品没问题，买家举证无效\\",\\n    \\"SellerRefuseReason\\": \\"商品没问题，买家举证无效\\",\\n    \\"SubDistributionOrderId\\": \\"12131234\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询分销采购订单退款申请',
      'summary' => '基于子分销订单号查询逆向申请的详情。',
      'description' => '基于子分销订单号查询逆向申请的详情。

注意：一般申请退款成功之后通过此接口确认逆向的状态(disputeStatus)以及纠纷id(disputeId)等  
特别说明：退货信息请优先参考sellerAgreeMsg字段，如果该字段为空、null、或者不包含退货地址、手机号等信息时，再参考refunderAddress、refunderName、refunderTel等字段  ',
    ),
    'QueryLogistics4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'RequestId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '请求ID',
            'description' => '请求ID',
            'type' => 'string',
            'required' => false,
            'example' => 'E090F1A0-7454-5F36-933C-E6332CE2****',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'MainDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主分销订单号',
            'description' => '主分销订单号',
            'type' => 'string',
            'required' => false,
            'example' => '123498124',
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<List<DataItem>>',
            'description' => 'PopResponse<List<DataItem>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'A7BE4356-7F92-533E-A31B-2EBF2D67****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataProvider' => 
                    array (
                      'description' => '数据来源：如：菜鸟裹裹',
                      'type' => 'string',
                      'example' => '菜鸟裹裹',
                    ),
                    'DataProviderTitle' => 
                    array (
                      'description' => '数据来源说明，如：本数据由菜⻦裹裹提供',
                      'type' => 'string',
                      'example' => '本数据由菜鸟裹裹提供',
                    ),
                    'Goods' => 
                    array (
                      'description' => '货物信息列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '货物信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'GoodName' => 
                          array (
                            'description' => '货物名字，不保证有，⼀个主单只有⼀个商品可能没有该值，物流未获取物流
公司物流号之前也没有该值',
                            'type' => 'string',
                            'example' => '货物名称',
                          ),
                          'ItemId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Quantity' => 
                          array (
                            'description' => '下单数量',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'SkuId' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                    'LogisticsCompanyCode' => 
                    array (
                      'description' => '本单物流公司code',
                      'type' => 'string',
                      'example' => 'SF',
                    ),
                    'LogisticsCompanyName' => 
                    array (
                      'description' => '本单物流公司名称',
                      'type' => 'string',
                      'example' => '顺丰',
                    ),
                    'LogisticsDetailList' => 
                    array (
                      'description' => '物流信息列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '物流信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OcurrTimeStr' => 
                          array (
                            'description' => '发生时间',
                            'type' => 'string',
                            'example' => '2022-02-21 08:23:21',
                          ),
                          'StanderdDesc' => 
                          array (
                            'description' => '物流信息',
                            'type' => 'string',
                            'example' => '""',
                          ),
                        ),
                      ),
                    ),
                    'MailNo' => 
                    array (
                      'description' => '运单号',
                      'type' => 'string',
                      'example' => 'SF124142********',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"A7BE4356-7F92-533E-A31B-2EBF2D67****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"DataProvider\\": \\"菜鸟裹裹\\",\\n      \\"DataProviderTitle\\": \\"本数据由菜鸟裹裹提供\\",\\n      \\"Goods\\": [\\n        {\\n          \\"GoodName\\": \\"货物名称\\",\\n          \\"ItemId\\": \\"\\",\\n          \\"Quantity\\": 1,\\n          \\"SkuId\\": \\"\\"\\n        }\\n      ],\\n      \\"LogisticsCompanyCode\\": \\"SF\\",\\n      \\"LogisticsCompanyName\\": \\"顺丰\\",\\n      \\"LogisticsDetailList\\": [\\n        {\\n          \\"OcurrTimeStr\\": \\"2022-02-21 08:23:21\\",\\n          \\"StanderdDesc\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"MailNo\\": \\"SF124142********\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分销采购订单物流查询',
      'summary' => '分销订单物流查询。',
      'description' => '分销订单物流查询',
    ),
    'QueryChildDivisionCodeById' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'DivisionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResponse<QueryDivisionResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'type' => 'string',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'DivisionList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParentId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'DivisionCode' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'DivisionName' => 
                        array (
                          'type' => 'string',
                        ),
                        'DivisionLevel' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Pinyin' => 
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'QueryOrderDetail4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'MainDistributionOrderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主分销订单号',
            'description' => '主分销订单号',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<DistributionOrderInfo>',
            'description' => 'PopResponse<DistributionOrderInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => 'BA157565-3358-5D80-9330-************',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateDate' => 
                  array (
                    'description' => '下单时间,格式化(yyyy-MM-dd HH:mm:ss)',
                    'type' => 'string',
                  ),
                  'DistributorId' => 
                  array (
                    'description' => '分销商ID',
                    'type' => 'string',
                  ),
                  'LogisticsStatus' => 
                  array (
                    'description' => '物流状态(由于此字段为定时从主站同步的,会存在延迟,最⻓可能⼏天才同步)',
                    'type' => 'string',
                  ),
                  'DistributionOrderId' => 
                  array (
                    'description' => '分销订单号',
                    'type' => 'string',
                  ),
                  'OrderAmount' => 
                  array (
                    'description' => '订单总金额',
                    'type' => 'string',
                  ),
                  'OrderStatus' => 
                  array (
                    'description' => '订单状态，6=交易成功',
                    'type' => 'string',
                    'example' => '6',
                  ),
                  'SubOrderList' => 
                  array (
                    'description' => '分销子订单列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分销子订单',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemPic' => 
                        array (
                          'description' => '商品图片',
                          'type' => 'string',
                        ),
                        'ItemPrice' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'FundAmountMoney' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                        'ItemTitle' => 
                        array (
                          'description' => '商品名称',
                          'type' => 'string',
                          'example' => '芝麻小饼',
                        ),
                        'ItemId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Number' => 
                        array (
                          'description' => '下单数量',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'OrderStatus' => 
                        array (
                          'description' => '订单状态',
                          'type' => 'string',
                          'example' => '6',
                        ),
                        'LogisticsStatus' => 
                        array (
                          'type' => 'string',
                        ),
                        'SkuId' => 
                        array (
                          'description' => '商品SkuId',
                          'type' => 'string',
                          'example' => '4771634532960',
                        ),
                        'SkuName' => 
                        array (
                          'description' => '下单的商品sku显示的名称',
                          'type' => 'string',
                          'example' => '500g',
                        ),
                        'SubDistributionOrderId' => 
                        array (
                          'description' => '子分销订单号',
                          'type' => 'string',
                        ),
                        'MainDistributionOrderId' => 
                        array (
                          'description' => '主分销订单号',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"BA157565-3358-5D80-9330-************\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": {\\n    \\"CreateDate\\": \\"\\",\\n    \\"DistributorId\\": \\"\\",\\n    \\"LogisticsStatus\\": \\"\\",\\n    \\"DistributionOrderId\\": \\"\\",\\n    \\"OrderAmount\\": \\"\\",\\n    \\"OrderStatus\\": \\"6\\",\\n    \\"SubOrderList\\": [\\n      {\\n        \\"ItemPic\\": \\"\\",\\n        \\"ItemPrice\\": [\\n          {\\n            \\"FundAmountMoney\\": \\"\\"\\n          }\\n        ],\\n        \\"ItemTitle\\": \\"芝麻小饼\\",\\n        \\"ItemId\\": \\"\\",\\n        \\"Number\\": \\"1\\",\\n        \\"OrderStatus\\": \\"6\\",\\n        \\"LogisticsStatus\\": \\"\\",\\n        \\"SkuId\\": \\"4771634532960\\",\\n        \\"SkuName\\": \\"500g\\",\\n        \\"SubDistributionOrderId\\": \\"\\",\\n        \\"MainDistributionOrderId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询分销采购订单详情',
      'summary' => '查询分销订单详情。',
      'description' => '查询分销订单详情',
    ),
    'QueryOrderList4Distribution' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'FilterOption',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单过滤条件',
            'description' => '订单过滤条件',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页行数',
            'description' => '每页行数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<List<DistributionOrderInfo>>',
            'description' => 'PopResponse<List<DistributionOrderInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '1267088B-4695-50DC-97B9-9E4F89D1****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '16',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Model' => 
              array (
                'title' => '请求结果数据',
                'description' => '请求结果数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateDate' => 
                    array (
                      'description' => '下单时间,格式化(yyyy-MM-dd HH:mm:ss)',
                      'type' => 'string',
                    ),
                    'DistributorId' => 
                    array (
                      'description' => '分销商ID',
                      'type' => 'string',
                    ),
                    'LogisticsStatus' => 
                    array (
                      'description' => '物流状态',
                      'type' => 'string',
                    ),
                    'DistributionOrderId' => 
                    array (
                      'description' => '分销订单号',
                      'type' => 'string',
                    ),
                    'OrderAmount' => 
                    array (
                      'description' => '订单总金额',
                      'type' => 'string',
                    ),
                    'OrderStatus' => 
                    array (
                      'description' => '订单状态，6=交易成功',
                      'type' => 'string',
                      'example' => '6',
                    ),
                    'SubOrderList' => 
                    array (
                      'description' => '子分销订单列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子分销订单',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ItemPic' => 
                          array (
                            'description' => '商品图片',
                            'type' => 'string',
                          ),
                          'ItemPrice' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'FundAmountMoney' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                            ),
                          ),
                          'ItemTitle' => 
                          array (
                            'description' => '商品名称',
                            'type' => 'string',
                            'example' => '冰鲜去皮鸭颈',
                          ),
                          'ItemId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Number' => 
                          array (
                            'description' => '下单数量',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'OrderStatus' => 
                          array (
                            'description' => '订单状态，6=交易成功',
                            'type' => 'string',
                            'example' => '6',
                          ),
                          'LogisticsStatus' => 
                          array (
                            'type' => 'string',
                          ),
                          'SkuId' => 
                          array (
                            'description' => '商品的SkuId',
                            'type' => 'string',
                            'example' => '4961467806350',
                          ),
                          'SkuName' => 
                          array (
                            'description' => '下单的商品sku显示的名称',
                            'type' => 'string',
                            'example' => '500g',
                          ),
                          'SubDistributionOrderId' => 
                          array (
                            'description' => '子分销订单编号',
                            'type' => 'string',
                          ),
                          'MainDistributionOrderId' => 
                          array (
                            'description' => '主分销订单编号',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"\\",\\n  \\"RequestId\\": \\"1267088B-4695-50DC-97B9-9E4F89D1****\\",\\n  \\"SubCode\\": \\"1004\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 16,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Model\\": [\\n    {\\n      \\"CreateDate\\": \\"\\",\\n      \\"DistributorId\\": \\"\\",\\n      \\"LogisticsStatus\\": \\"\\",\\n      \\"DistributionOrderId\\": \\"\\",\\n      \\"OrderAmount\\": \\"\\",\\n      \\"OrderStatus\\": \\"6\\",\\n      \\"SubOrderList\\": [\\n        {\\n          \\"ItemPic\\": \\"\\",\\n          \\"ItemPrice\\": [\\n            {\\n              \\"FundAmountMoney\\": \\"\\"\\n            }\\n          ],\\n          \\"ItemTitle\\": \\"冰鲜去皮鸭颈\\",\\n          \\"ItemId\\": \\"\\",\\n          \\"Number\\": \\"1\\",\\n          \\"OrderStatus\\": \\"6\\",\\n          \\"LogisticsStatus\\": \\"\\",\\n          \\"SkuId\\": \\"4961467806350\\",\\n          \\"SkuName\\": \\"500g\\",\\n          \\"SubDistributionOrderId\\": \\"\\",\\n          \\"MainDistributionOrderId\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询分销采购订单列表',
      'summary' => '查询分销订单列表。',
      'description' => '查询分销订单列表',
      'requestParamsDescription' => '```
{
	"orderStatus":"12=待支付，2=已支付，4=已退款关闭，6=交易成功，8=被淘宝关闭 ",
	"logisticsStatus":"  1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单",
	"orderList":["主分销订单列表"], //订单号数量上限20个
    "filter": "createTime>12323 AND createTime<45454" //过滤条件，目前只支持创单时间, 传单时间的值为unix时间戳, 支持<,>,>=,<=, !=,=, AND,OR
}
```',
    ),
    'CancelDistributionTrade' => 
    array (
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
          'AK' => 
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
          'name' => 'DistributorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'DistributionTradeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分销交易号',
            'description' => '分销交易号，可能包含多笔主单',
            'type' => 'string',
            'required' => false,
            'example' => '15303515*******',
          ),
        ),
        2 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户Id',
            'description' => '租户Id',
            'type' => 'string',
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
            'title' => 'PopResponse<Void>',
            'description' => 'PopResponse<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'LogsId' => 
              array (
                'title' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'description' => '每次请求操作对应的操作日志号，由系统自动生成，返回给租户，可用于排查问题，双方日志中统一透出此标识',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'description' => 'POP请求流水号，建议租户日志中也输出此流水号，双方排查问题方便',
                'type' => 'string',
                'example' => '5127621C-56B0-5DCA-9745-2936B31D****',
              ),
              'SubCode' => 
              array (
                'title' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'description' => '错误子代码。一般用于显示业务类的错误代码，一般建议关注此类错误',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubMessage' => 
              array (
                'title' => '业务处理相关的错误信息，一般建议关注此类错误',
                'description' => '业务处理相关的错误信息，一般建议关注此类错误',
                'type' => 'string',
                'example' => '1004',
              ),
              'PageSize' => 
              array (
                'title' => 'pageSize',
                'description' => 'pageSize',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总数量',
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '19',
              ),
              'Success' => 
              array (
                'title' => '本次执行的结果成功与否',
                'description' => '本次执行的结果成功与否',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '返回的执行结果码， 正确为字符串 0000',
                'description' => '返回的执行结果码， 正确为字符串 0000',
                'type' => 'string',
                'example' => '0000',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
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
            'errorCode' => 'InvalidTag.Mismatch',
            'errorMessage' => 'The specified Tag.n.Key and Tag.n.Value are not match.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagCount',
            'errorMessage' => 'The specified tags are beyond the permitted range.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceChargeType.NotFound',
            'errorMessage' => 'The InstanceChargeType does not exist in our records',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInternetChargeType.ValueNotSupported',
            'errorMessage' => 'The specified InternetChargeType is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogsId\\": \\"1\\",\\n  \\"RequestId\\": \\"5127621C-56B0-5DCA-9745-2936B31D****\\",\\n  \\"SubCode\\": \\"SUCCESS\\",\\n  \\"SubMessage\\": \\"1004\\",\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 19,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0000\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
      'summary' => '取消/关闭分销交易。',
      'description' => '分销域给上游通知成功走退款，分销域未通知交易成功前走取消',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'linkedmall-distributor.cn-zhangjiakou.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'linkedmall.aliyuncs.com',
    ),
  ),
);
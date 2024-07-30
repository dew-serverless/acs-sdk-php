<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'linkedmall',
        'version' => '2023-09-30',
    ],
    'directories' => [
        [
            'id' => 185821,
            'title' => '采购店铺',
            'type' => 'directory',
            'children' => [
                'ListPurchaserShops',
                'GetPurchaserShop',
            ],
        ],
        [
            'id' => 185824,
            'title' => '商品',
            'type' => 'directory',
            'children' => [
                'GetSelectionProduct',
                'ListSelectionProducts',
                'GetSelectionProductSaleInfo',
                'ListSelectionProductSaleInfos',
                'ListSelectionSkuSaleInfos',
                'ListCategories',
            ],
        ],
        [
            'id' => 185829,
            'title' => '采购单',
            'type' => 'directory',
            'children' => [
                'SplitPurchaseOrder',
                'RenderPurchaseOrder',
                'CreatePurchaseOrder',
                'GetPurchaseOrderStatus',
            ],
        ],
        [
            'id' => 185833,
            'title' => '订单',
            'type' => 'directory',
            'children' => [
                'GetOrder',
                'QueryOrders',
                'ListLogisticsOrders',
                'ConfirmDisburse',
            ],
        ],
        [
            'id' => 185838,
            'title' => '售后单',
            'type' => 'directory',
            'children' => [
                'RenderRefundOrder',
                'CreateRefundOrder',
                'CancelRefundOrder',
                'GetRefundOrder',
                'CreateGoodsShippingNotice',
            ],
        ],
        [
            'id' => 185844,
            'title' => '区域编码',
            'type' => 'directory',
            'children' => [
                'QueryChildDivisionCode',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AddressInfo' => [
                'title' => '地址',
                'description' => '收货地址',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '三级地址code（建议必填）',
                        'description' => '四级地址code（区/县级，建议必填）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106',
                    ],
                    'addressDetail' => [
                        'title' => '收货地址详细地址',
                        'description' => '收货地址详细地址(建议以省/市/区县/街道/小区的格式填写完整地址信息)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '陕西省西安市新城区xx街道xxx大厦xx室',
                    ],
                    'receiverPhone' => [
                        'title' => '收货人电话',
                        'description' => '收货人电话',
                        'type' => 'string',
                        'required' => true,
                        'example' => '182***5674',
                    ],
                    'townDivisionCode' => [
                        'title' => '四级地址code（建议必填）',
                        'description' => '五级地址code（乡镇/街道级，必填）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'receiver' => [
                        'title' => '收货人',
                        'description' => '收货人',
                        'type' => 'string',
                        'required' => true,
                        'example' => '任先生',
                    ],
                    'addressId' => [
                        'title' => '地址ID',
                        'description' => '地址ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'ApplyReason' => [
                'title' => '申请理由',
                'description' => '申请退款原因',
                'type' => 'object',
                'properties' => [
                    'reasonTextId' => [
                        'title' => '理由ID',
                        'description' => '理由ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '403769',
                    ],
                    'reasonTips' => [
                        'title' => '理由文本',
                        'description' => '理由文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '不想要了',
                    ],
                ],
            ],
            'Category' => [
                'description' => '类目链',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '类目名称',
                        'description' => '类目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '名称测试',
                    ],
                    'isLeaf' => [
                        'title' => '是否叶子类目',
                        'description' => '是否叶子类目',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                    'level' => [
                        'title' => '层级',
                        'description' => '层级',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                    'categoryId' => [
                        'title' => '类目id',
                        'description' => '类目id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '201792301',
                    ],
                    'parentId' => [
                        'title' => '父类id',
                        'description' => '父类id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'CategoryListQuery' => [
                'title' => '类目查询参数',
                'description' => '类目查询参数',
                'type' => 'object',
                'properties' => [
                    'parentCategoryId' => [
                        'title' => '父类目id',
                        'description' => '父类目id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5200001',
                    ],
                    'categoryIds' => [
                        'title' => '类目id集合',
                        'description' => '类目id集合',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '5200067',
                        ],
                    ],
                ],
            ],
            'CategoryListResult' => [
                'title' => '类目查询结果',
                'description' => '类目',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => '请求id',
                        'description' => '请求id',
                        'type' => 'string',
                    ],
                    'categories' => [
                        'title' => '类目集合',
                        'description' => '类目集合',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Category',
                        ],
                    ],
                ],
            ],
            'ConfirmDisburseCmd' => [
                'title' => '确认收货入参',
                'description' => '确认收货入参',
                'type' => 'object',
                'properties' => [
                    'orderId' => [
                        'title' => '主分销订单号',
                        'description' => '主分销订单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5457',
                    ],
                    'purchaseOrderId' => [
                        'title' => '分销交易号',
                        'description' => '分销交易号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5696',
                    ],
                ],
            ],
            'ConfirmDisburseResult' => [
                'title' => '确认收货结果',
                'description' => '确认收货结果',
                'type' => 'object',
                'properties' => [
                    'result' => [
                        'title' => '确认收货返回结果',
                        'description' => '确认收货返回结果',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'success',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'CooperationShop' => [
                'title' => '合作方店铺',
                'description' => '合作方店铺',
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'title' => '店铺id',
                        'description' => '店铺id',
                        'type' => 'string',
                    ],
                    'cooperationCompanyId' => [
                        'title' => '合作企业id',
                        'description' => '合作企业id',
                        'type' => 'string',
                    ],
                    'cooperationShopId' => [
                        'title' => '合作店铺id',
                        'description' => '合作店铺id',
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateAliPayUrlRequest' => [
                'title' => '入参',
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'title' => '申请的店铺id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                        'minLength' => 1,
                    ],
                ],
            ],
            'CreateAliPayUrlResult' => [
                'type' => 'object',
                'properties' => [
                    'zftWithholdSignUrl' => [
                        'title' => '支付宝代扣签约url',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'accountId' => [
                        'title' => 'LM账号id',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'memberId' => [
                        'title' => 'LM会员id',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DeliveryInfo' => [
                'title' => '履约信息',
                'description' => '履约信息',
                'type' => 'object',
                'properties' => [
                    'postFee' => [
                        'title' => '运费金额',
                        'description' => '运费金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                    'serviceType' => [
                        'title' => 'serviceType',
                        'description' => 'serviceType',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-4',
                    ],
                    'id' => [
                        'title' => '唯一ID',
                        'description' => '唯一ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                    'displayName' => [
                        'title' => '显示名称',
                        'description' => '显示名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '快递 免邮',
                    ],
                ],
            ],
            'DistributionMaxRefundFee' => [
                'title' => '退费金额',
                'description' => '退款费用',
                'type' => 'object',
                'properties' => [
                    'minRefundFee' => [
                        'title' => '本单最小可退款金额',
                        'description' => '本单最小可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                    'maxRefundFee' => [
                        'title' => '本单最大可退款金额',
                        'description' => '本单最大可退款金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'Division' => [
                'title' => '区域信息',
                'description' => 'divisionList',
                'type' => 'object',
                'properties' => [
                    'divisionName' => [
                        'title' => '地址名称',
                        'description' => '地址名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '上海',
                    ],
                    'divisionCode' => [
                        'title' => '地址编码',
                        'description' => '地址编码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '310000',
                    ],
                    'divisionLevel' => [
                        'title' => '地址等级',
                        'description' => '地址等级',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                    'pinyin' => [
                        'title' => '地址拼音',
                        'description' => '地址拼音',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'shang hai',
                    ],
                    'parentId' => [
                        'title' => '父级ID',
                        'description' => '父级ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'DivisionPageResult' => [
                'title' => '区域分页返回',
                'description' => '区域分页返回',
                'type' => 'object',
                'properties' => [
                    'divisionList' => [
                        'title' => '区域集合',
                        'description' => '区域集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/Division',
                        ],
                        'required' => false,
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'DivisionQuery' => [
                'title' => '区域查询',
                'description' => '区域查询',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => 'divisionCode',
                        'description' => 'divisionCode',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'GeneralBill' => [
                'description' => '账单',
                'type' => 'object',
                'properties' => [
                    'totalAmount' => [
                        'required' => false,
                        '$ref' => '#/components/schemas/Money',
                    ],
                    'gmtModified' => [
                        'title' => '账单修改时间',
                        'description' => '账单修改时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billId' => [
                        'title' => '账单id',
                        'description' => '账单id',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'downloadUrl' => [
                        'title' => '明细下载地址',
                        'description' => '明细下载地址',
                        'type' => 'array',
                        'items' => [
                            'title' => '明细下载地址',
                            'description' => '明细下载地址',
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                    'shopName' => [
                        'title' => '店铺名称',
                        'description' => '店铺名称',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'startTime' => [
                        'title' => '账期开始时间',
                        'description' => '账期开始时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'endTime' => [
                        'title' => '账期结束时间',
                        'description' => '账期结束时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'description' => '店铺id',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'gmtCreate' => [
                        'title' => '账单创建时间',
                        'description' => '账单创建时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billPeriod' => [
                        'title' => '账期',
                        'description' => '账期',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GeneralBillPageQuery' => [
                'title' => '账单查询入参',
                'description' => '账单查询入参',
                'type' => 'object',
                'properties' => [
                    'asc' => [
                        'title' => 'asc',
                        'description' => 'asc',
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'pageNumber' => [
                        'title' => 'pageNumber',
                        'description' => 'pageNumber',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'billId' => [
                        'title' => 'billId',
                        'description' => 'billId',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'limit' => [
                        'title' => 'limit',
                        'description' => 'limit',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'start' => [
                        'title' => 'start',
                        'description' => 'start',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'orderBy' => [
                        'title' => 'orderBy',
                        'description' => 'orderBy',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderDirection' => [
                        'title' => 'orderDirection',
                        'description' => 'orderDirection',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'pageSize' => [
                        'title' => 'pageSize',
                        'description' => 'pageSize',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'shopId' => [
                        'title' => 'shopId',
                        'description' => 'shopId',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billPeriod' => [
                        'title' => 'billPeriod',
                        'description' => 'billPeriod',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GeneralBillPageResult' => [
                'title' => '账单查询结果',
                'description' => '账单查询结果',
                'type' => 'object',
                'properties' => [
                    'pageSize' => [
                        'title' => '页大小',
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'total' => [
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '24',
                    ],
                    'pageNumber' => [
                        'title' => '当前页码',
                        'description' => '当前页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'generalBills' => [
                        'title' => '账单集合',
                        'description' => '账单集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/GeneralBill',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'Good' => [
                'description' => '货品集合',
                'type' => 'object',
                'properties' => [
                    'goodName' => [
                        'title' => '货品名称',
                        'description' => '货品名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿童学习桌',
                    ],
                    'productId' => [
                        'title' => '商品ID',
                        'description' => '商品ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6600****6736',
                    ],
                    'quantity' => [
                        'title' => '数量',
                        'description' => '数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'GoodsShippingNoticeCreateCmd' => [
                'title' => '提交物流入参',
                'description' => '提交物流入参',
                'type' => 'object',
                'properties' => [
                    'cpCode' => [
                        'title' => '公司代码',
                        'description' => '公司代码',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'TAOBAO' => '淘宝物流',
                            'YUNDA' => '韵达快递',
                            'ZJS' => '宅急送',
                            'FEDEX' => '联邦快递',
                            'ZTKY' => '中铁物流',
                            'POST' => '中国邮政',
                            'DBKD' => '德邦物流',
                            'EMS' => 'EMS',
                            'JT' => '极兔物流',
                            'QFKD' => '全峰快递',
                            'POSTB' => '邮政快递包裹',
                            'EYB' => 'EMS快递包裹',
                            'STO' => '申通快递',
                            'OTHER' => '其他',
                            'SF' => '顺丰速运',
                            'ZTO' => '中通快递',
                            'YTO' => '圆通快递',
                            'TTKDEX' => '天天快递',
                            'TN' => '特能',
                            'HTKY' => '百世快递',
                            'SHQ' => '华强物流',
                            'ZMKM' => '菜鸟速递',
                        ],
                        'example' => 'SF',
                    ],
                    'logisticsNo' => [
                        'title' => '物流单号',
                        'description' => '物流单号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SF145****4353',
                    ],
                    'disputeId' => [
                        'title' => '纠纷ID',
                        'description' => '纠纷ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6693****4352',
                    ],
                ],
            ],
            'GoodsShippingNoticeCreateResult' => [
                'title' => '提交物流结果',
                'description' => '提交物流结果',
                'type' => 'object',
                'properties' => [
                    'result' => [
                        'title' => '提交物流信息返回结果',
                        'description' => '提交物流信息返回结果',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'success',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'LeavePictureList' => [
                'title' => '图片信息',
                'description' => '凭证',
                'type' => 'object',
                'properties' => [
                    'picture' => [
                        'title' => '图片地址',
                        'description' => '图片地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg',
                    ],
                    'desc' => [
                        'title' => '描述',
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '退款凭证',
                    ],
                ],
            ],
            'LogisticsDetail' => [
                'title' => '物流详情',
                'description' => '物流详情集合',
                'type' => 'object',
                'properties' => [
                    'ocurrTimeStr' => [
                        'title' => '物流发生时间',
                        'description' => '物流发生时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'standerdDesc' => [
                        'title' => '物流描述信息',
                        'description' => '物流描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '已签收',
                    ],
                ],
            ],
            'LogisticsOrderListResult' => [
                'title' => '物流单信息',
                'description' => '物流单信息',
                'type' => 'object',
                'properties' => [
                    'logisticsOrderList' => [
                        'title' => '物流集合',
                        'description' => '物流集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/LogisticsOrderResult',
                        ],
                        'required' => false,
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'LogisticsOrderResult' => [
                'description' => '履约单',
                'type' => 'object',
                'properties' => [
                    'mailNo' => [
                        'title' => '物流单号',
                        'description' => '物流单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SF234***2345',
                    ],
                    'dataProviderTitle' => [
                        'title' => '数据文本',
                        'description' => '数据文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '菜鸟裹裹',
                    ],
                    'logisticsCompanyName' => [
                        'title' => '物流公司名称',
                        'description' => '物流公司名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '顺丰',
                    ],
                    'logisticsDetailList' => [
                        'title' => '物流详情',
                        'description' => '物流详情',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/LogisticsDetail',
                        ],
                        'required' => false,
                    ],
                    'goods' => [
                        'title' => '货品详情',
                        'description' => '货品详情',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/Good',
                        ],
                        'required' => false,
                    ],
                    'dataProvider' => [
                        'title' => '数据来源',
                        'description' => '数据来源',
                        'type' => 'string',
                        'required' => false,
                        'example' => '菜鸟',
                    ],
                    'logisticsCompanyCode' => [
                        'title' => '物流公司代码',
                        'description' => '物流公司代码',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'TAOBAO' => '淘宝物流',
                            'YUNDA' => '韵达快递',
                            'ZJS' => '宅急送',
                            'FEDEX' => '联邦快递',
                            'ZTKY' => '中铁物流',
                            'POST' => '中国邮政',
                            'DBKD' => '德邦物流',
                            'EMS' => 'EMS',
                            'JT' => '极兔物流',
                            'QFKD' => '全峰快递',
                            'POSTB' => '邮政快递包裹',
                            'EYB' => 'EMS快递包裹',
                            'STO' => '申通快递',
                            'OTHER' => '其他',
                            'SF' => '顺丰速运',
                            'ZTO' => '中通快递',
                            'YTO' => '圆通快递',
                            'TTKDEX' => '天天快递',
                            'TN' => '特能',
                            'HTKY' => '百世快递',
                            'SHQ' => '华强物流',
                            'ZMKM' => '菜鸟速递',
                        ],
                        'example' => 'SF',
                    ],
                ],
            ],
            'MemberAccountRequest' => [
                'title' => '会员账号请求',
                'description' => '会员账号请求',
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'title' => '店铺id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'MemberAccountResult' => [
                'type' => 'object',
                'properties' => [
                    'accountNo' => [
                        'title' => '已签约并绑定的支付宝代扣账号（脱敏）',
                        'type' => 'array',
                        'items' => [
                            'title' => '已签约并绑定的支付宝代扣账号（脱敏）',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'yue***@newburn.cn',
                        ],
                        'required' => false,
                        'example' => '"yue***@newburn.cn"',
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'Money' => [
                'description' => '账单金额',
                'type' => 'object',
                'properties' => [
                    'amount' => [
                        'title' => 'amount',
                        'description' => 'amount',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'amountString' => [
                        'title' => 'amountString',
                        'description' => 'amountString',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cent' => [
                        'title' => 'cent',
                        'description' => 'cent',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'amountAsString' => [
                        'title' => 'amountAsString',
                        'description' => 'amountAsString',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'currency' => [
                        'title' => 'currency',
                        'description' => 'currency',
                        'type' => 'object',
                        'properties' => [
                            'symbol' => [
                                'title' => 'symbol',
                                'description' => 'symbol',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'title' => 'displayName',
                                'description' => 'displayName',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'currencyCode' => [
                                'title' => 'currencyCode',
                                'description' => 'currencyCode',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'defaultFractionDigits' => [
                                'title' => 'defaultFractionDigits',
                                'description' => 'defaultFractionDigits',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'numericCode' => [
                                'title' => 'numericCode',
                                'description' => 'numericCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                    'positive' => [
                        'title' => 'positive',
                        'description' => 'positive',
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'currencyCode' => [
                        'title' => 'currencyCode',
                        'description' => 'currencyCode',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OrderLineResult' => [
                'title' => '子单信息',
                'description' => '子订单集合',
                'type' => 'object',
                'properties' => [
                    'productTitle' => [
                        'title' => '商品名称',
                        'description' => '商品名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿童学习桌',
                    ],
                    'number' => [
                        'title' => '数量',
                        'description' => '数量',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                    'skuTitle' => [
                        'title' => 'sku名称',
                        'description' => 'sku名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浅绿色',
                    ],
                    'productId' => [
                        'title' => '商品ID',
                        'description' => '商品ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6600****6736',
                    ],
                    'orderId' => [
                        'title' => '订单id（主订单id）',
                        'description' => '订单id（主订单id）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5457',
                    ],
                    'productPic' => [
                        'title' => '商品图片',
                        'description' => '商品图片',
                        'type' => 'string',
                        'required' => false,
                        'example' => '//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0',
                    ],
                    'orderLineId' => [
                        'title' => '子订单id',
                        'description' => '子订单id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5458',
                    ],
                    'logisticsStatus' => [
                        'title' => '物流状态',
                        'description' => '物流状态',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '未发货>待卖家发货',
                            '已发货>待买家收货',
                            '已收货>确认收货',
                            6 => '部分发货',
                            8 => '未创建物流订单',
                        ],
                        'example' => '1',
                    ],
                    'payFee' => [
                        'title' => '子订单应付金额',
                        'description' => '子订单应付金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                    'skuId' => [
                        'title' => 'skuId',
                        'description' => 'skuId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6600****6737',
                    ],
                    'orderLineStatus' => [
                        'title' => '子订单状态',
                        'description' => '子订单状态',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '待付款',
                            '已付款',
                            4 => '退款成功',
                            6 => '交易成功',
                            8 => '交易关闭',
                        ],
                        'example' => '1',
                    ],
                ],
            ],
            'OrderListResult' => [
                'title' => '订单分页结果',
                'description' => '订单分页结果',
                'type' => 'object',
                'properties' => [
                    'orderList' => [
                        'title' => '订单集合',
                        'description' => '订单集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderResult',
                        ],
                        'required' => false,
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                    'total' => [
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '24',
                    ],
                ],
            ],
            'OrderPageQuery' => [
                'title' => '订单分页查询入参',
                'description' => '订单分页查询入参',
                'type' => 'object',
                'properties' => [
                    'pageSize' => [
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                    'orderIdList' => [
                        'title' => '主单ID集合',
                        'description' => '主单ID集合',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                    'pageNumber' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'purchaseOrderId' => [
                        'title' => '采购单ID',
                        'description' => '采购单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5696',
                    ],
                ],
            ],
            'OrderProductResult' => [
                'title' => '订单商品信息',
                'description' => '商品信息',
                'type' => 'object',
                'properties' => [
                    'productTitle' => [
                        'title' => '商品标题',
                        'description' => '商品标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿童学习桌',
                    ],
                    'features' => [
                        'title' => '商品额外信息',
                        'description' => '商品额外信息',
                        'type' => 'object',
                        'required' => false,
                    ],
                    'skuTitle' => [
                        'title' => 'sku标题',
                        'description' => 'sku标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浅绿色',
                    ],
                    'quantity' => [
                        'title' => '购买数量',
                        'description' => '购买数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'productId' => [
                        'title' => '商品id',
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6600****6736',
                    ],
                    'canSell' => [
                        'title' => '商品是否可售卖',
                        'description' => '商品是否可售卖',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'price' => [
                        'title' => '商品价格(单位：分)',
                        'description' => '商品价格(单位：分)',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                    'productPicUrl' => [
                        'title' => '商品图片链接',
                        'description' => '商品图片链接',
                        'type' => 'string',
                        'required' => false,
                        'example' => '//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PID56****2304',
                    ],
                    'message' => [
                        'title' => '不可售原因',
                        'description' => '不可售原因',
                        'type' => 'string',
                        'required' => false,
                        'example' => '库存为0',
                    ],
                    'skuId' => [
                        'title' => 'SKUID',
                        'description' => 'SKUID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6600****6737',
                    ],
                ],
            ],
            'OrderRenderProductDTO' => [
                'title' => '渲染商品',
                'description' => '商品集合',
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'title' => '购买数量',
                        'description' => '购买数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PID56****2304',
                    ],
                    'productId' => [
                        'title' => '商品ID',
                        'description' => '商品ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6600****6736',
                    ],
                    'skuId' => [
                        'title' => 'skuID',
                        'description' => 'skuID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6600****6737',
                    ],
                ],
            ],
            'OrderRenderResult' => [
                'title' => '采购单渲染返回',
                'description' => '订单不可售列表',
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'title' => '不可售原因',
                        'description' => '不可售原因',
                        'type' => 'string',
                        'required' => false,
                        'example' => '库存为0',
                    ],
                    'deliveryInfoList' => [
                        'title' => '履约信息',
                        'description' => '履约信息',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/DeliveryInfo',
                        ],
                        'required' => false,
                    ],
                    'canSell' => [
                        'title' => '是否可售',
                        'description' => '是否可售',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'productList' => [
                        'title' => '商品集合',
                        'description' => '商品集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderProductResult',
                        ],
                        'required' => false,
                    ],
                    'extInfo' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'OrderResult' => [
                'title' => '订单详情',
                'description' => '主单列表',
                'type' => 'object',
                'properties' => [
                    'orderAmount' => [
                        'title' => '订单金额（分）',
                        'description' => '订单金额（分）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                    'orderLineList' => [
                        'title' => '子订单集合',
                        'description' => '子订单集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderLineResult',
                        ],
                        'required' => false,
                    ],
                    'orderId' => [
                        'title' => '订单id（主订单id）',
                        'description' => '订单id（主订单id）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5457',
                    ],
                    'distributorId' => [
                        'title' => '分销商ID',
                        'description' => '分销商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12****01',
                    ],
                    'orderStatus' => [
                        'title' => '订单状态1=待支付，2=已支付，4=已退款关闭，6=交易成功，8=已关闭',
                        'description' => '订单状态 1=待支付，2=已支付，4=已退款关闭，6=交易成功，8=已关闭',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                    'logisticsStatus' => [
                        'title' => '物流状态 1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单',
                        'description' => '物流状态 1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                    'createDate' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'requestId' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'Product' => [
                'title' => '商品',
                'description' => '商品',
                'type' => 'object',
                'properties' => [
                    'categoryChain' => [
                        'title' => '类目链',
                        'description' => '类目链',
                        'type' => 'array',
                        'items' => [
                            'description' => '类目',
                            'required' => false,
                            '$ref' => '#/components/schemas/Category',
                        ],
                        'required' => false,
                    ],
                    'images' => [
                        'title' => 'images',
                        'description' => 'images',
                        'type' => 'array',
                        'items' => [
                            'description' => '图片链接',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[]',
                        ],
                        'required' => false,
                    ],
                    'quantity' => [
                        'title' => '库存',
                        'description' => '库存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                    'skus' => [
                        'title' => 'skus',
                        'description' => 'skus',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品SKU',
                            'required' => false,
                            '$ref' => '#/components/schemas/Sku',
                        ],
                        'required' => false,
                    ],
                    'productId' => [
                        'title' => '商品id',
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822080',
                    ],
                    'canSell' => [
                        'title' => '商品是否可售，计算值',
                        'description' => '商品是否可售，计算值',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'productSpecs' => [
                        'title' => 'productSpecs',
                        'description' => '商品规格',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品规格',
                            'required' => false,
                            '$ref' => '#/components/schemas/ProductSpec',
                        ],
                        'required' => false,
                    ],
                    'fuzzyQuantity' => [
                        'title' => '模糊库存',
                        'description' => '模糊库存',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '有货' => '有货',
                            '库存紧张' => '库存紧张',
                            '无货' => '无货',
                        ],
                        'example' => '有货',
                    ],
                    'productStatus' => [
                        'title' => '商品状态',
                        'description' => '商品状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Online',
                    ],
                    'taxCode' => [
                        'title' => '税码',
                        'description' => '税码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3040203000000000000',
                    ],
                    'title' => [
                        'title' => '标题',
                        'description' => '标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '发财树',
                    ],
                    'soldQuantity' => [
                        'title' => '销量',
                        'description' => '销量',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100+',
                    ],
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '110000',
                    ],
                    'picUrl' => [
                        'title' => '商品主图',
                        'description' => '商品主图',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg',
                    ],
                    'taxRate' => [
                        'title' => '税率',
                        'description' => '税率',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '600',
                    ],
                    'categoryLeafId' => [
                        'title' => '类目id',
                        'description' => '类目id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '201856501',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'descPath' => [
                        'title' => '商品详情链接',
                        'description' => '商品详情链接',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34',
                    ],
                    'shopId' => [
                        'title' => '渠道店铺id',
                        'description' => '渠道店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21000017',
                    ],
                    'productType' => [
                        'title' => '商品类型',
                        'description' => '商品类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                        'enum' => [
                            'Normal',
                            'Virtual',
                        ],
                    ],
                    'properties' => [
                        'title' => '商品属性',
                        'description' => '商品属性',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品属性',
                            'required' => false,
                            '$ref' => '#/components/schemas/ProductProperty',
                        ],
                        'required' => false,
                    ],
                    'brandName' => [
                        'title' => '品牌名称',
                        'description' => '品牌名称',
                        'type' => 'string',
                        'example' => 'Apple/苹果',
                    ],
                    'extendProperties' => [
                        'title' => '商品扩展属性',
                        'description' => '商品扩展属性',
                        'type' => 'array',
                        'items' => [
                            'description' => '商品扩展属性',
                            '$ref' => '#/components/schemas/ProductExtendProperty',
                        ],
                    ],
                    'lmItemId' => [
                        'title' => 'LM商品id',
                        'description' => 'LM商品id',
                        'type' => 'string',
                        'example' => '21000017-4580902812',
                    ],
                ],
            ],
            'ProductDTO' => [
                'title' => '商品信息',
                'description' => '商品集合',
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'title' => '购买数量',
                        'description' => '购买数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '56****2304',
                    ],
                    'productId' => [
                        'title' => '商品ID',
                        'description' => '商品ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6600****6736',
                    ],
                    'price' => [
                        'title' => '商品价格(单位：分)',
                        'description' => '商品价格(单位：分)',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                    'skuId' => [
                        'title' => 'SKUID',
                        'description' => 'SKUID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6600****6737',
                    ],
                ],
            ],
            'ProductExtendProperty' => [
                'title' => '商品扩展属性',
                'description' => '商品扩展属性',
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'title' => '属性key',
                        'description' => '属性key',
                        'type' => 'string',
                        'example' => 'ss_picture_scene',
                    ],
                    'value' => [
                        'title' => '属性值',
                        'description' => '属性值',
                        'type' => 'string',
                        'example' => '场景图',
                    ],
                ],
            ],
            'ProductPageResult' => [
                'title' => '分页查询商品结果',
                'description' => '分页查询商品结果',
                'type' => 'object',
                'properties' => [
                    'pageSize' => [
                        'title' => '页大小',
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                    'total' => [
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '24',
                    ],
                    'pageNumber' => [
                        'title' => '当前页码',
                        'description' => '当前页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'products' => [
                        'title' => '商品集合',
                        'description' => '商品集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/Product',
                        ],
                        'required' => false,
                    ],
                ],
                'required' => true,
            ],
            'ProductPrice' => [
                'description' => '商品价格',
                'type' => 'object',
                'properties' => [
                    'fundAmountMoney' => [
                        'title' => '应付金额',
                        'description' => '应付金额',
                        'type' => 'string',
                        'required' => false,
                        'example' => '120',
                    ],
                ],
            ],
            'ProductProperty' => [
                'title' => '商品属性',
                'description' => '商品属性',
                'type' => 'object',
                'properties' => [
                    'text' => [
                        'title' => '属性文本',
                        'description' => '属性文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '颜色',
                    ],
                    'values' => [
                        'title' => '属性值集合',
                        'description' => '属性值集合',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '白色',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ProductQuery' => [
                'title' => '商品查询参数',
                'description' => '商品查询参数',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '110000',
                    ],
                    'distributorShopId' => [
                        'title' => '分销店铺id',
                        'description' => '分销店铺id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '22000009',
                    ],
                ],
            ],
            'ProductSaleInfo' => [
                'title' => '商品',
                'description' => '商品',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'quantity' => [
                        'title' => '库存',
                        'description' => '库存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                    'skus' => [
                        'title' => 'sku集合',
                        'description' => 'sku集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/SkuSaleInfo',
                        ],
                        'required' => false,
                    ],
                    'productId' => [
                        'title' => '商品id',
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822080',
                    ],
                    'canSell' => [
                        'title' => '商品是否可售，计算值',
                        'description' => '商品是否可售，计算值',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'fuzzyQuantity' => [
                        'title' => '模糊库存',
                        'description' => '模糊库存',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '有货' => '有货',
                            '库存紧张' => '库存紧张',
                            '无货' => '无货',
                        ],
                        'example' => '有货',
                    ],
                    'productStatus' => [
                        'title' => '商品状态',
                        'description' => '商品状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Online',
                    ],
                    'shopId' => [
                        'title' => '渠道店铺id',
                        'description' => '渠道店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21000017',
                    ],
                    'title' => [
                        'title' => '标题',
                        'description' => '标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '发财树',
                    ],
                    'lmItemId' => [
                        'title' => 'LM商品id',
                        'description' => 'LM商品id',
                        'type' => 'string',
                        'example' => '21000017-4580902812',
                    ],
                ],
            ],
            'ProductSaleInfoListQuery' => [
                'title' => '商品销售信息查询参数',
                'description' => '商品销售信息查询参数',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码（建议为五级乡镇/街道级地址code）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'productIds' => [
                        'title' => '查询商品id集合',
                        'description' => '查询商品id集合',
                        'type' => 'array',
                        'items' => [
                            'title' => '查询商品id集合',
                            'description' => '查询商品id集合',
                            'type' => 'string',
                            'required' => true,
                            'example' => '660460842235822080',
                        ],
                        'required' => true,
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '22000009',
                    ],
                ],
                'required' => true,
            ],
            'ProductSaleInfoListResult' => [
                'title' => '商品销售信息查询结果',
                'description' => '商品销售信息查询结果',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'productSaleInfos' => [
                        'title' => '商品销售信息',
                        'description' => '商品销售信息',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/ProductSaleInfo',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ProductSaleInfoQuery' => [
                'title' => '商品销售信息查询参数',
                'description' => '商品销售信息查询参数',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '110000',
                    ],
                    'distributorShopId' => [
                        'title' => '分销店铺id',
                        'description' => '分销店铺id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '22000009',
                    ],
                ],
            ],
            'ProductSpec' => [
                'title' => '商品规格',
                'description' => '商品规格(销售属性)',
                'type' => 'object',
                'properties' => [
                    'keyId' => [
                        'title' => '规格',
                        'description' => '规格',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                    'key' => [
                        'title' => '规格key名称',
                        'description' => '规格key名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '颜色分类',
                    ],
                    'values' => [
                        'title' => '规则key取值',
                        'description' => '规则key取值',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/ProductSpecValue',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ProductSpecValue' => [
                'title' => '商品规格值',
                'description' => '商品规格值',
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'title' => '规格值',
                        'description' => '规格值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '白色',
                    ],
                    'valueId' => [
                        'title' => '规则值id',
                        'description' => '规则值id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
            ],
            'PurchaseOrderCreateCmd' => [
                'title' => '采购单创建入参',
                'description' => '采购单创建入参',
                'type' => 'object',
                'properties' => [
                    'outerPurchaseOrderId' => [
                        'title' => '分销商业务中的订单ID，分销商自定义',
                        'description' => '分销商业务中的订单ID，分销商自定义。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'outer123456',
                    ],
                    'buyerId' => [
                        'title' => '分销商业务中的用户ID，分销商自定义。',
                        'description' => '分销商业务中的用户ID，分销商自定义(建议不同的买家分配不同的买家ID)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'buyer123456',
                    ],
                    'deliveryAddress' => [
                        'title' => '地址信息',
                        'description' => '地址信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/AddressInfo',
                    ],
                    'productList' => [
                        'title' => '商品集合',
                        'description' => '商品集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/ProductDTO',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                    'extInfo' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderCreateResult' => [
                'title' => '采购单创建返回',
                'description' => '采购单创建返回',
                'type' => 'object',
                'properties' => [
                    'purchaseOrderId' => [
                        'title' => '采购单ID',
                        'description' => '采购单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5696',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'PurchaseOrderRenderQuery' => [
                'title' => '采购单渲染入参',
                'description' => '采购单渲染入参',
                'type' => 'object',
                'properties' => [
                    'buyerId' => [
                        'title' => '分销真实买家ID',
                        'description' => '分销真实买家ID(建议不同的买家分配不同的买家ID)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test1234567',
                    ],
                    'deliveryAddress' => [
                        'title' => '地址信息',
                        'description' => '地址信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/AddressInfo',
                    ],
                    'productList' => [
                        'title' => '商品集合',
                        'description' => '商品集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderRenderProductDTO',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                    'extInfo' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'PurchaseOrderRenderResult' => [
                'title' => '采购单渲染结果',
                'description' => '采购单渲染结果',
                'type' => 'object',
                'properties' => [
                    'addressList' => [
                        'title' => '地址集合',
                        'description' => '地址集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/AddressInfo',
                        ],
                        'required' => false,
                    ],
                    'canSell' => [
                        'title' => '是否可售',
                        'description' => '是否可售',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                    'orderList' => [
                        'title' => '可售主单集合',
                        'description' => '可售主单集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderRenderResult',
                        ],
                        'required' => false,
                    ],
                    'unsellableOrderList' => [
                        'title' => '不可售主单集合',
                        'description' => '不可售主单集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/OrderRenderResult',
                        ],
                        'required' => false,
                    ],
                    'message' => [
                        'title' => '不可售原因',
                        'description' => '不可售原因',
                        'type' => 'string',
                        'required' => false,
                        'example' => '库存为0',
                    ],
                    'extInfo' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderStatusResult' => [
                'title' => '采购单状态',
                'description' => '采购单状态',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'status' => [
                        'title' => '采购单状态',
                        'description' => '采购单状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'RefundFeeData' => [
                'title' => '退费金额信息',
                'description' => '退费区间',
                'type' => 'object',
                'properties' => [
                    'minRefundFee' => [
                        'title' => '最小金额（分）',
                        'description' => '最小金额（分）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                    'maxRefundFee' => [
                        'title' => '最大金额（分）',
                        'description' => '最大金额（分）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'RefundOrderCmd' => [
                'title' => '创建逆向',
                'description' => '创建逆向',
                'type' => 'object',
                'properties' => [
                    'applyRefundCount' => [
                        'title' => '退货数量',
                        'description' => '退货数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'bizClaimType' => [
                        'title' => '退款类型',
                        'description' => '退款类型'."\n"
                            .'1 仅退款 '."\n"
                            .'3 退货退款',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'goodsStatus' => [
                        'title' => '货物状态',
                        'description' => '货物状态'."\n"
                            .'4: 未发货 '."\n"
                            .'1: 未收到货'."\n"
                            .'2: 已收到货',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'leaveMessage' => [
                        'title' => '留言',
                        'description' => '留言',
                        'type' => 'string',
                        'required' => false,
                        'example' => '不想要了',
                    ],
                    'applyReasonTextId' => [
                        'title' => '退款原因ID',
                        'description' => '退款原因ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '47821',
                    ],
                    'applyReasonTips' => [
                        'title' => '退款原因文本',
                        'description' => '退款原因文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '不想要了',
                    ],
                    'applyRefundFee' => [
                        'title' => '申请退款金额（分）',
                        'description' => '申请退款金额（分）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '100',
                    ],
                    'leavePictureLists' => [
                        'title' => '图片集合',
                        'description' => '图片集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/LeavePictureList',
                        ],
                        'required' => false,
                    ],
                    'orderLineId' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6692****5458',
                    ],
                ],
            ],
            'RefundOrderResult' => [
                'title' => '逆向操作结果',
                'description' => '逆向操作结果',
                'type' => 'object',
                'properties' => [
                    'orderLineId' => [
                        'title' => '当前发起逆向的子分销订单号',
                        'description' => '当前发起逆向的子分销订单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5458',
                    ],
                    'disputeId' => [
                        'title' => '纠纷id',
                        'description' => '纠纷id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6693****4352',
                    ],
                    'disputeStatus' => [
                        'title' => '逆向的状态',
                        'description' => '逆向的状态'."\n"
                            .'1-退货待处理'."\n"
                            .'2-待买家退货'."\n"
                            .'3-待商家收货'."\n"
                            .'4-退款关闭'."\n"
                            .'5-退款成功'."\n"
                            .'6-已拒绝退款'."\n"
                            .'17-取消退款中',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'RefundReason' => [
                'title' => '逆向理由',
                'description' => '退款理由',
                'type' => 'object',
                'properties' => [
                    'reasonTextId' => [
                        'title' => '理由文本id',
                        'description' => '理由文本id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47683',
                    ],
                    'proofRequired' => [
                        'title' => '是否要求上传凭证',
                        'description' => '是否要求上传凭证',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'reasonTips' => [
                        'title' => '理由文本',
                        'description' => '理由文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '不想要了',
                    ],
                    'refundDescRequired' => [
                        'title' => '是否要求留言',
                        'description' => '是否要求留言',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'RefundRenderCmd' => [
                'title' => '逆向创建入参',
                'description' => '逆向创建入参',
                'type' => 'object',
                'properties' => [
                    'bizClaimType' => [
                        'title' => '退款类型 1 仅退款，3 退货退款',
                        'description' => '退款类型 1 仅退款，3 退货退款',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'goodsStatus' => [
                        'title' => '货物状态 4: 未发货, 1: 未收到货, 2: 已收到货',
                        'description' => '货物状态 4: 未发货, 1: 未收到货, 2: 已收到货',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '4',
                    ],
                    'orderLineId' => [
                        'title' => '子分销订单ID',
                        'description' => '子分销订单ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6692****5458',
                    ],
                ],
            ],
            'RefundRenderResult' => [
                'title' => '逆向渲染结果',
                'description' => '逆向渲染结果',
                'type' => 'object',
                'properties' => [
                    'maxRefundFeeData' => [
                        'required' => false,
                        '$ref' => '#/components/schemas/DistributionMaxRefundFee',
                    ],
                    'refundReasonList' => [
                        'title' => '逆向理由集合',
                        'description' => '逆向理由集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/RefundReason',
                        ],
                        'required' => false,
                    ],
                    'bizClaimType' => [
                        'title' => '支持的订单退货方式',
                        'description' => '支持的订单退货方式',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'orderLineId' => [
                        'title' => '子分销订单号',
                        'description' => '子分销订单号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5458',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'RefundResult' => [
                'title' => '逆向信息',
                'description' => '逆向信息',
                'type' => 'object',
                'properties' => [
                    'refundFee' => [
                        'title' => '退费金额',
                        'description' => '退费金额',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                    'refundFeeData' => [
                        'title' => '退费区间',
                        'description' => '退费区间',
                        'required' => false,
                        '$ref' => '#/components/schemas/RefundFeeData',
                    ],
                    'applyDisputeDesc' => [
                        'title' => '当前买家申请退款说明',
                        'description' => '当前买家申请退款说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '多拍不想要',
                    ],
                    'refunderTel' => [
                        'title' => '退货联系方式',
                        'description' => '退货联系方式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '182****1334',
                    ],
                    'bizClaimType' => [
                        'title' => '订单退货方式 1， 标识仅退款，3，标识退货退款',
                        'description' => '订单退货方式 '."\n"
                            .'1-标识仅退款'."\n"
                            .'3-标识退货退款',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'disputeDesc' => [
                        'title' => '申请逆向描述',
                        'description' => '申请逆向描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '多拍不想要',
                    ],
                    'sellerRefuseReason' => [
                        'title' => '商家拒绝原因',
                        'description' => '商家拒绝原因',
                        'type' => 'string',
                        'required' => false,
                        'example' => '商品没问题，买家举证无效',
                    ],
                    'orderId' => [
                        'title' => '主单ID',
                        'description' => '主单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5457',
                    ],
                    'refunderName' => [
                        'title' => '退货收货人',
                        'description' => '退货收货人',
                        'type' => 'string',
                        'required' => false,
                        'example' => '赵先生',
                    ],
                    'applyReason' => [
                        'title' => '申请理由',
                        'description' => '申请理由',
                        'required' => false,
                        '$ref' => '#/components/schemas/ApplyReason',
                    ],
                    'refunderAddress' => [
                        'title' => '商家退货地址',
                        'description' => '商家退货地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云云谷',
                    ],
                    'refunderZipCode' => [
                        'title' => '退货地址邮编',
                        'description' => '退货地址邮编',
                        'type' => 'string',
                        'required' => false,
                        'example' => '331001',
                    ],
                    'disputeEndTime' => [
                        'title' => '逆向结束时间',
                        'description' => '逆向结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-15T19:23:59.000+08:00',
                    ],
                    'sellerRefuseAgreementMessage' => [
                        'title' => '卖家拒绝的留言说明',
                        'description' => '卖家拒绝的留言说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '不同意退款',
                    ],
                    'disputeId' => [
                        'title' => '逆向单ID',
                        'description' => '逆向单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6693****4352',
                    ],
                    'disputeStatus' => [
                        'title' => '逆向单状态',
                        'description' => '逆向的状态 '."\n"
                            .'1-退货待处理 '."\n"
                            .'2-待买家退货 '."\n"
                            .'3-待商家收货 '."\n"
                            .'4-退款关闭 '."\n"
                            .'5-退款成功 '."\n"
                            .'6-已拒绝退款 '."\n"
                            .'17-取消退款中',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'returnGoodLogisticsStatus' => [
                        'title' => '退货物流状态',
                        'description' => '退货物流状态'."\n"
                            .'0-未退货'."\n"
                            .'1-等待揽收'."\n"
                            .'2-快件已揽收'."\n"
                            .'3-物流走件中'."\n"
                            .'4-派送中'."\n"
                            .'5-已签收'."\n"
                            .'6-签收失败',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                    'orderLogisticsStatus' => [
                        'title' => '订单物流状态',
                        'description' => '订单物流状态'."\n"
                            .'1-未发货 -> 等待卖家发货'."\n"
                            .'2-已发货 -> 等待买家确认收货'."\n"
                            .'3-已收货 -> 交易成功'."\n"
                            .'6-部分发货中'."\n"
                            .'8-还未创建物流订单',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'disputeCreateTime' => [
                        'title' => '逆向创建时间',
                        'description' => '逆向创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-15T19:23:59.000+08:00',
                    ],
                    'orderLineId' => [
                        'title' => '子订单ID',
                        'description' => '子订单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6692****5458',
                    ],
                    'sellerAgreeMsg' => [
                        'title' => '卖家同意退货说明,真实的退货地址会在这个字段进行返回。',
                        'description' => '卖家同意退货说明,真实的退货地址会在这个字段进行返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '同意退款',
                    ],
                    'requestId' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                ],
            ],
            'Shop' => [
                'title' => '店铺详情',
                'description' => '店铺详情',
                'type' => 'object',
                'properties' => [
                    'endDate' => [
                        'title' => '结束时间',
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'distributorId' => [
                        'title' => '分销商id',
                        'description' => '分销商id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12****09',
                    ],
                    'shopName' => [
                        'title' => '店铺名称',
                        'description' => '店铺名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿童分销店铺',
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'description' => '店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22****09',
                    ],
                    'shopType' => [
                        'title' => '店铺类型',
                        'description' => '店铺类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DistributorQYG',
                    ],
                    'cooperationShops' => [
                        'title' => '合作方店铺',
                        'description' => '合作方店铺',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CooperationShop',
                        ],
                        'required' => false,
                        'example' => '12***01',
                    ],
                    'startDate' => [
                        'title' => '开始时间',
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'status' => [
                        'title' => '店铺状态',
                        'description' => '店铺状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Working',
                    ],
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'example' => '48A34399-A72C-1E23-8388-7E63****E927',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'example' => 'PID56****2304',
                    ],
                ],
            ],
            'ShopCreateRequest' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'title' => '店铺描述',
                        'type' => 'string',
                        'required' => true,
                        'example' => '店铺描述',
                        'maxLength' => 500,
                    ],
                    'shopName' => [
                        'title' => '店铺名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '店铺名称',
                        'maxLength' => 100,
                    ],
                    'afterSaleDingTalkId' => [
                        'title' => '售后钉钉号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12344335',
                    ],
                    'operatorDingTalkId' => [
                        'title' => '运营钉钉号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12344335',
                    ],
                    'preSaleDingTalkId' => [
                        'title' => '售前钉钉号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12344335',
                    ],
                ],
            ],
            'ShopCreateResult' => [
                'type' => 'object',
                'properties' => [
                    'shopStatus' => [
                        'title' => '店铺状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WORKING',
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'ShopPageDataResult' => [
                'title' => '店铺分页结果',
                'description' => '店铺分页结果',
                'type' => 'object',
                'properties' => [
                    'endDate' => [
                        'title' => '结束时间',
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'shopName' => [
                        'title' => '店铺名称',
                        'description' => '店铺名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '儿童座椅分销店铺',
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'description' => '店铺id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22****09',
                    ],
                    'shopType' => [
                        'title' => '店铺类型',
                        'description' => '店铺类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DistributorQYG',
                    ],
                    'cooperationShops' => [
                        'title' => '合作方店铺',
                        'description' => '合作方店铺',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CooperationShop',
                        ],
                        'required' => false,
                        'example' => '12****01',
                    ],
                    'startDate' => [
                        'title' => '开始时间',
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11T12:22:24.000+08:00',
                    ],
                    'status' => [
                        'title' => '店铺状态',
                        'description' => '店铺状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Working',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'example' => 'PID56****2304',
                    ],
                ],
            ],
            'ShopPageResult' => [
                'title' => '店铺分页查询返回',
                'description' => '店铺分页查询返回',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '841471F6-5D61-1331-8C38-2****B55',
                    ],
                    'total' => [
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '24',
                    ],
                    'shopList' => [
                        'title' => '店铺集合',
                        'description' => '店铺集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/ShopPageDataResult',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ShopStatusChangeRequest' => [
                'type' => 'object',
                'properties' => [
                    'shopStatus' => [
                        'title' => '店铺状态',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WORKING',
                    ],
                    'shopId' => [
                        'title' => '店铺id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'ShopStatusChangeResult' => [
                'type' => 'object',
                'properties' => [
                    'operate' => [
                        'title' => '操作是否成功',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'Sku' => [
                'description' => 'SKU列表',
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'title' => '可售库存',
                        'description' => '可售库存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                    'productId' => [
                        'title' => '商品Id',
                        'description' => '商品Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822080',
                    ],
                    'canSell' => [
                        'title' => 'sku是否可售',
                        'description' => 'sku是否可售',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'fuzzyQuantity' => [
                        'title' => '模糊可售库存',
                        'description' => '模糊可售库存',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '有货' => '有货',
                            '库存紧张' => '库存紧张',
                            '无货' => '无货',
                        ],
                        'example' => '有货',
                    ],
                    'skuStatus' => [
                        'title' => 'sku管控状态',
                        'description' => 'sku管控状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Online',
                    ],
                    'skuSpecsCode' => [
                        'title' => 'sku销售规格，辅助前端来筛选',
                        'description' => 'sku销售规格，辅助前端来筛选',
                        'type' => 'string',
                        'required' => false,
                        'example' => '颜色分类:天蓝色',
                    ],
                    'platformPrice' => [
                        'title' => '平台当前售价, 单位分',
                        'description' => '平台当前售价, 单位分',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '999900',
                    ],
                    'title' => [
                        'title' => 'sku标题',
                        'description' => 'sku标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天蓝色',
                    ],
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '110000',
                    ],
                    'picUrl' => [
                        'title' => 'sku图片',
                        'description' => 'sku图片',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png',
                    ],
                    'markPrice' => [
                        'title' => '划线价, 单位分',
                        'description' => '划线价, 单位分',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '999900',
                    ],
                    'skuSpecs' => [
                        'title' => 'sku',
                        'description' => 'sku',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/SkuSpec',
                        ],
                        'required' => false,
                    ],
                    'price' => [
                        'title' => '售价,单位分',
                        'description' => '售价,单位分',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '19800',
                    ],
                    'shopId' => [
                        'title' => '店铺Id',
                        'description' => '店铺Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21000017',
                    ],
                    'skuId' => [
                        'title' => 'skuId',
                        'description' => 'skuId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822081',
                    ],
                    'barcode' => [
                        'title' => '69码',
                        'description' => '69码',
                        'type' => 'string',
                        'example' => '6922454329176',
                    ],
                    'rankValue' => [
                        'title' => 'SKU排序',
                        'description' => 'SKU排序',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3',
                    ],
                ],
            ],
            'SkuQueryParam' => [
                'title' => '查询商品参数',
                'description' => '查询商品参数',
                'type' => 'object',
                'properties' => [
                    'productId' => [
                        'title' => '商品id',
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '660460842235822080',
                    ],
                    'skuId' => [
                        'title' => 'skuid',
                        'description' => 'skuid',
                        'type' => 'string',
                        'required' => true,
                        'example' => '660460842235822081',
                    ],
                ],
            ],
            'SkuSaleInfo' => [
                'title' => 'SKU详细信息',
                'description' => 'SKU详细信息',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'markPrice' => [
                        'title' => '划线价, 单位分',
                        'description' => '划线价, 单位分',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '999900',
                    ],
                    'quantity' => [
                        'title' => '可售库存',
                        'description' => '可售库存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                    'productId' => [
                        'title' => '商品Id',
                        'description' => '商品Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822080',
                    ],
                    'canSell' => [
                        'title' => 'sku是否可售',
                        'description' => 'sku是否可售',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'price' => [
                        'title' => '售价,单位分',
                        'description' => '售价,单位分',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '19800',
                    ],
                    'fuzzyQuantity' => [
                        'title' => '模糊可售库存',
                        'description' => '模糊可售库存',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '有货' => '有货',
                            '库存紧张' => '库存紧张',
                            '无货' => '无货',
                        ],
                        'example' => '有货',
                    ],
                    'skuStatus' => [
                        'title' => 'sku管控状态',
                        'description' => 'sku管控状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Online',
                    ],
                    'shopId' => [
                        'title' => '店铺Id',
                        'description' => '店铺Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21000017',
                    ],
                    'title' => [
                        'title' => 'sku标题',
                        'description' => 'sku标题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天蓝色',
                    ],
                    'skuId' => [
                        'title' => 'skuId',
                        'description' => 'skuId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '660460842235822081',
                    ],
                ],
            ],
            'SkuSaleInfoListQuery' => [
                'title' => 'SKU销售信息查询参数',
                'description' => 'SKU销售信息查询参数',
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'title' => '区域码',
                        'description' => '区域码（建议为五级乡镇/街道级地址 code）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'purchaserId' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '21000017',
                    ],
                    'skuQueryParams' => [
                        'title' => '查询商品参数',
                        'description' => '查询商品参数',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/SkuQueryParam',
                        ],
                        'required' => true,
                    ],
                ],
                'required' => true,
            ],
            'SkuSaleInfoListResult' => [
                'title' => '商品销售信息查询结果',
                'description' => '商品销售信息查询结果',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => '接口请求requestId',
                        'description' => '接口请求requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3239281273464326823',
                    ],
                    'skuSaleInfos' => [
                        'title' => 'sku库存集合',
                        'description' => 'sku库存集合',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/SkuSaleInfo',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'SkuSpec' => [
                'title' => 'sku规格',
                'description' => 'sku规格(销售属性)',
                'type' => 'object',
                'properties' => [
                    'keyId' => [
                        'title' => '规格id',
                        'description' => '规格id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                    'valueId' => [
                        'title' => '规格值id',
                        'description' => '规格值id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                    'value' => [
                        'title' => '规格值',
                        'description' => '规格值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天蓝色',
                    ],
                    'key' => [
                        'title' => '规格键',
                        'description' => '规格键',
                        'type' => 'string',
                        'required' => false,
                        'example' => '颜色分类',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListPurchaserShops' => [
            'summary' => '获取采购方店铺列表。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '请求页码',
                        'description' => '请求页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '每页数量范围',
                        'description' => '每页数量范围',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '店铺列表信息',
                        '$ref' => '#/components/schemas/ShopPageResult',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"total\\": 24,\\n  \\"shopList\\": [\\n    {\\n      \\"endDate\\": \\"2023-09-01 00:00:00\\",\\n      \\"shopName\\": \\"儿童座椅分销店铺\\",\\n      \\"shopId\\": \\"22****09\\",\\n      \\"shopType\\": \\"DistributorQYG\\",\\n      \\"cooperationShops\\": [\\n        {\\n          \\"shopId\\": \\"\\",\\n          \\"cooperationCompanyId\\": \\"\\",\\n          \\"cooperationShopId\\": \\"\\"\\n        }\\n      ],\\n      \\"startDate\\": \\"2023-09-01 00:00:00\\",\\n      \\"status\\": \\"Working\\",\\n      \\"purchaserId\\": \\"PID56****2304\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取采购方店铺列表',
            'description' => '获取采购方店铺列表。',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "AEE64C1D-7FBD-1F10-B8C7-12A854A1D6B4",'."\n"
                .'  "total": 6,'."\n"
                .'  "shopList": ['."\n"
                .'    {'."\n"
                .'      "shopId": "22000019",'."\n"
                .'      "purchaserId": "PID22000019",'."\n"
                .'      "shopName": "店铺名称001",'."\n"
                .'      "cooperationShops": ['."\n"
                .'        {'."\n"
                .'          "shopId": "22000019",'."\n"
                .'          "cooperationCompanyId": "11200003",'."\n"
                .'          "cooperationShopId": "21000026"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "shopType": "DistributorQYG",'."\n"
                .'      "startDate": null,'."\n"
                .'      "endDate": null,'."\n"
                .'      "status": "WORKING"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "22000018",'."\n"
                .'      "purchaserId": "PID22000018",'."\n"
                .'      "shopName": "店铺名称002",'."\n"
                .'      "cooperationShops": [],'."\n"
                .'      "shopType": "DistributorQYG",'."\n"
                .'      "startDate": null,'."\n"
                .'      "endDate": null,'."\n"
                .'      "status": "APPROVED"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "22000017",'."\n"
                .'      "purchaserId": "PID22000017",'."\n"
                .'      "shopName": "分销店铺0817",'."\n"
                .'      "cooperationShops": [],'."\n"
                .'      "shopType": "DistributorQYG",'."\n"
                .'      "startDate": null,'."\n"
                .'      "endDate": null,'."\n"
                .'      "status": "TO_BE_APPROVED"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'GetPurchaserShop' => [
            'summary' => '获取采购方店铺。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops/{purchaserId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'purchaserId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PID22000016',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '店铺详情',
                        'description' => '店铺详情',
                        '$ref' => '#/components/schemas/Shop',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"endDate\\": \\"2024-09-09 00:00:00\\",\\n  \\"distributorId\\": \\"12****09\\",\\n  \\"shopName\\": \\"儿童分销店铺\\",\\n  \\"shopId\\": \\"22****09\\",\\n  \\"shopType\\": \\"DistributorQYG\\",\\n  \\"cooperationShops\\": [\\n    {\\n      \\"shopId\\": \\"\\",\\n      \\"cooperationCompanyId\\": \\"\\",\\n      \\"cooperationShopId\\": \\"\\"\\n    }\\n  ],\\n  \\"startDate\\": \\"2023-09-09 00:00:00\\",\\n  \\"status\\": \\"Working\\",\\n  \\"requestId\\": \\"48A34399-A72C-1E23-8388-7E63****E927\\",\\n  \\"purchaserId\\": \\"PID56****2304\\"\\n}","type":"json"}]',
            'title' => '获取采购方店铺',
            'description' => '获取采购方店铺。',
        ],
        'GetSelectionProduct' => [
            'summary' => '查询选品池商品详情。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'productId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '660460842235822080',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PID22000009',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'divisionCode',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '区域码（建议四级乡镇/街道级地址code）',
                        'description' => '区域码（建议为五级乡镇/街道级地址code）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '商品详情',
                        '$ref' => '#/components/schemas/Product',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"categoryChain\\": [\\n    {\\n      \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n      \\"isLeaf\\": false,\\n      \\"level\\": 2,\\n      \\"categoryId\\": 201792301,\\n      \\"parentId\\": 50016422\\n    }\\n  ],\\n  \\"images\\": [\\n    \\"\\"\\n  ],\\n  \\"quantity\\": -1,\\n  \\"skus\\": [\\n    {\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"skuSpecsCode\\": \\"颜色分类:天蓝色\\",\\n      \\"platformPrice\\": 999900,\\n      \\"title\\": \\"天蓝色\\",\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"picUrl\\": \\"https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png\\",\\n      \\"markPrice\\": 999900,\\n      \\"skuSpecs\\": [\\n        {\\n          \\"keyId\\": 1000,\\n          \\"valueId\\": 1000,\\n          \\"value\\": \\"天蓝色\\",\\n          \\"key\\": \\"颜色分类\\"\\n        }\\n      ],\\n      \\"price\\": 19800,\\n      \\"shopId\\": \\"21000017\\",\\n      \\"skuId\\": \\"660460842235822081\\",\\n      \\"barcode\\": \\"6922454329176\\",\\n      \\"rankValue\\": 3\\n    }\\n  ],\\n  \\"productId\\": \\"660460842235822080\\",\\n  \\"canSell\\": true,\\n  \\"productSpecs\\": [\\n    {\\n      \\"keyId\\": 1000,\\n      \\"key\\": \\"颜色分类\\",\\n      \\"values\\": [\\n        {\\n          \\"value\\": \\"白色\\",\\n          \\"valueId\\": 1000\\n        }\\n      ]\\n    }\\n  ],\\n  \\"fuzzyQuantity\\": \\"100+\\",\\n  \\"productStatus\\": \\"Online\\",\\n  \\"taxCode\\": \\"3040203000000000000\\",\\n  \\"title\\": \\"发财树\\",\\n  \\"soldQuantity\\": \\"100+\\",\\n  \\"divisionCode\\": \\"110000\\",\\n  \\"picUrl\\": \\"https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg\\",\\n  \\"taxRate\\": 600,\\n  \\"categoryLeafId\\": 201856501,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"descPath\\": \\"https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34\\",\\n  \\"shopId\\": \\"21000017\\",\\n  \\"productType\\": \\"Normal\\",\\n  \\"properties\\": [\\n    {\\n      \\"text\\": \\"颜色\\",\\n      \\"values\\": [\\n        \\"白色\\"\\n      ]\\n    }\\n  ],\\n  \\"brandName\\": \\"Apple/苹果\\",\\n  \\"extendProperties\\": [\\n    {\\n      \\"key\\": \\"ss_picture_scene\\",\\n      \\"value\\": \\"场景图\\"\\n    }\\n  ],\\n  \\"lmItemId\\": \\"21000017-4580902812\\"\\n}","type":"json"}]',
            'title' => '查询选品池商品详情',
            'description' => '通过商品id查询选品池商品详情，支持输入区域码查询商品区域库存。',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "productId": "660057403063402509",'."\n"
                .'  "purchaserId": "PID22000009",'."\n"
                .'  "divisionCode": "330106109"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "EA2F57E7-94AF-1C51-B607-47EECC6CCAB2",'."\n"
                .'  "productId": "660057403063402509",'."\n"
                .'  "title": "西安/成都限购测试商品-yh-请勿下单千牛修改同步",'."\n"
                .'  "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",'."\n"
                .'  "descPath": "//itemcdn.tmall.com/desc/icoss!0724961349057!11733929840",'."\n"
                .'  "categoryLeafId": 50022568,'."\n"
                .'  "images": ['."\n"
                .'    "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",'."\n"
                .'    "//img.alicdn.com/imgextra/i1/2214281521988/O1CN011QYYFMQFeubcGuJ_!!2214281521988.jpg"'."\n"
                .'  ],'."\n"
                .'  "properties": ['."\n"
                .'    {'."\n"
                .'      "text": "品牌",'."\n"
                .'      "values": ['."\n"
                .'        "七情（鲜花）"'."\n"
                .'      ]'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "text": "颜色分类",'."\n"
                .'      "values": ['."\n"
                .'        "浅灰色",'."\n"
                .'        "黑色",'."\n"
                .'        "单sku商品why111千牛编辑同步"'."\n"
                .'      ]'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "productSpecs": ['."\n"
                .'    {'."\n"
                .'      "keyId": 0,'."\n"
                .'      "key": "颜色分类",'."\n"
                .'      "values": ['."\n"
                .'        {'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "浅灰色"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "黑色"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "单sku商品why111千牛编辑同步"'."\n"
                .'        }'."\n"
                .'      ]'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "skus": ['."\n"
                .'    {'."\n"
                .'      "shopId": "21000017",'."\n"
                .'      "productId": "660057403063402509",'."\n"
                .'      "skuId": "660057403063402511",'."\n"
                .'      "title": "浅灰色",'."\n"
                .'      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",'."\n"
                .'      "skuSpecs": ['."\n"
                .'        {'."\n"
                .'          "keyId": 0,'."\n"
                .'          "key": "颜色分类",'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "浅灰色"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "skuSpecsCode": "",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": true,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "price": 2,'."\n"
                .'      "markPrice": 777700,'."\n"
                .'      "platformPrice": 777700,'."\n"
                .'      "divisionCode": "330106109"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "21000017",'."\n"
                .'      "productId": "660057403063402509",'."\n"
                .'      "skuId": "660057403063402510",'."\n"
                .'      "title": "单sku商品why111千牛编辑同步",'."\n"
                .'      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",'."\n"
                .'      "skuSpecs": ['."\n"
                .'        {'."\n"
                .'          "keyId": 0,'."\n"
                .'          "key": "颜色分类",'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "单sku商品why111"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "skuSpecsCode": "",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": true,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "price": 1,'."\n"
                .'      "markPrice": 777700,'."\n"
                .'      "platformPrice": 777700,'."\n"
                .'      "divisionCode": "330106109"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "21000017",'."\n"
                .'      "productId": "660057403063402509",'."\n"
                .'      "skuId": "660057403063402512",'."\n"
                .'      "title": "黑色",'."\n"
                .'      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",'."\n"
                .'      "skuSpecs": ['."\n"
                .'        {'."\n"
                .'          "keyId": 0,'."\n"
                .'          "key": "颜色分类",'."\n"
                .'          "valueId": 0,'."\n"
                .'          "value": "黑色"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "skuSpecsCode": "",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": true,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "price": 9,'."\n"
                .'      "markPrice": 777700,'."\n"
                .'      "platformPrice": 777700,'."\n"
                .'      "divisionCode": "330106109"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "canSell": true,'."\n"
                .'  "productType": "Normal",'."\n"
                .'  "productStatus": "Online",'."\n"
                .'  "shopId": "21000017",'."\n"
                .'  "quantity": -1,'."\n"
                .'  "fuzzyQuantity": "有货",'."\n"
                .'  "taxRate": null,'."\n"
                .'  "taxCode": null,'."\n"
                .'  "categoryChain": ['."\n"
                .'    {'."\n"
                .'      "categoryId": 50020808,'."\n"
                .'      "name": "家居饰品",'."\n"
                .'      "parentId": 0,'."\n"
                .'      "level": 0,'."\n"
                .'      "isLeaf": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "categoryId": 50022568,'."\n"
                .'      "name": "其他工艺饰品",'."\n"
                .'      "parentId": 50020808,'."\n"
                .'      "level": 0,'."\n"
                .'      "isLeaf": true'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "soldQuantity": "2",'."\n"
                .'  "divisionCode": "330106109"'."\n"
                .'}',
        ],
        'ListSelectionProducts' => [
            'summary' => '查询选品池商品列表。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '当前页面序号，从1开始',
                        'description' => '当前页面序号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PID22000009',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '商品详情',
                        '$ref' => '#/components/schemas/ProductPageResult',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageSize\\": 10,\\n  \\"total\\": 24,\\n  \\"pageNumber\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"products\\": [\\n    {\\n      \\"categoryChain\\": [\\n        {\\n          \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n          \\"isLeaf\\": false,\\n          \\"level\\": 2,\\n          \\"categoryId\\": 201792301,\\n          \\"parentId\\": 50016422\\n        }\\n      ],\\n      \\"images\\": [\\n        \\"\\"\\n      ],\\n      \\"quantity\\": -1,\\n      \\"skus\\": [\\n        {\\n          \\"quantity\\": -1,\\n          \\"productId\\": \\"660460842235822080\\",\\n          \\"canSell\\": true,\\n          \\"fuzzyQuantity\\": \\"有货\\",\\n          \\"skuStatus\\": \\"Online\\",\\n          \\"skuSpecsCode\\": \\"颜色分类:天蓝色\\",\\n          \\"platformPrice\\": 999900,\\n          \\"title\\": \\"天蓝色\\",\\n          \\"divisionCode\\": \\"110000\\",\\n          \\"picUrl\\": \\"https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png\\",\\n          \\"markPrice\\": 999900,\\n          \\"skuSpecs\\": [\\n            {\\n              \\"keyId\\": 1000,\\n              \\"valueId\\": 1000,\\n              \\"value\\": \\"天蓝色\\",\\n              \\"key\\": \\"颜色分类\\"\\n            }\\n          ],\\n          \\"price\\": 19800,\\n          \\"shopId\\": \\"21000017\\",\\n          \\"skuId\\": \\"660460842235822081\\",\\n          \\"barcode\\": \\"6922454329176\\",\\n          \\"rankValue\\": 3\\n        }\\n      ],\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"productSpecs\\": [\\n        {\\n          \\"keyId\\": 1000,\\n          \\"key\\": \\"颜色分类\\",\\n          \\"values\\": [\\n            {\\n              \\"value\\": \\"白色\\",\\n              \\"valueId\\": 1000\\n            }\\n          ]\\n        }\\n      ],\\n      \\"fuzzyQuantity\\": \\"100+\\",\\n      \\"productStatus\\": \\"Online\\",\\n      \\"taxCode\\": \\"3040203000000000000\\",\\n      \\"title\\": \\"发财树\\",\\n      \\"soldQuantity\\": \\"100+\\",\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"picUrl\\": \\"https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg\\",\\n      \\"taxRate\\": 600,\\n      \\"categoryLeafId\\": 201856501,\\n      \\"requestId\\": \\"3239281273464326823\\",\\n      \\"descPath\\": \\"https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"productType\\": \\"Normal\\",\\n      \\"properties\\": [\\n        {\\n          \\"text\\": \\"颜色\\",\\n          \\"values\\": [\\n            \\"白色\\"\\n          ]\\n        }\\n      ],\\n      \\"brandName\\": \\"Apple/苹果\\",\\n      \\"extendProperties\\": [\\n        {\\n          \\"key\\": \\"ss_picture_scene\\",\\n          \\"value\\": \\"场景图\\"\\n        }\\n      ],\\n      \\"lmItemId\\": \\"21000017-4580902812\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询选品池商品列表',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "pageNumber": 1,'."\n"
                .'  "pageSize": 10,'."\n"
                .'  "purchaserId": "PID22000009"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "87C11800-27D4-1CF7-A544-D006AC4ADAD5",'."\n"
                .'  "total": 48,'."\n"
                .'  "pageNumber": 2,'."\n"
                .'  "pageSize": 20,'."\n"
                .'  "products": ['."\n"
                .'    {'."\n"
                .'      "requestId": null,'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",'."\n"
                .'      "picUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",'."\n"
                .'      "descPath": "//itemcdn.tmall.com/desc/icoss!0724961349057!11733929840",'."\n"
                .'      "categoryLeafId": 50011150,'."\n"
                .'      "images": ['."\n"
                .'        "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",'."\n"
                .'        "//img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png",'."\n"
                .'        "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01E6yC8z1qokFueiOI7_!!2216003305543.jpg",'."\n"
                .'        "//img.alicdn.com/imgextra/i3/2216003305543/O1CN01K3DLfJ1qokF5BPhVJ_!!2216003305543.jpg"'."\n"
                .'      ],'."\n"
                .'      "properties": ['."\n"
                .'        {'."\n"
                .'          "text": "颜色分类",'."\n"
                .'          "values": ['."\n"
                .'            "天蓝色",'."\n"
                .'            "红色",'."\n"
                .'            "黑色"'."\n"
                .'          ]'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "productSpecs": ['."\n"
                .'        {'."\n"
                .'          "keyId": 0,'."\n"
                .'          "key": "颜色分类",'."\n"
                .'          "values": ['."\n"
                .'            {'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "天蓝色"'."\n"
                .'            },'."\n"
                .'            {'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "红色"'."\n"
                .'            },'."\n"
                .'            {'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "黑色"'."\n"
                .'            }'."\n"
                .'          ]'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "skus": ['."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822081",'."\n"
                .'          "title": "天蓝色",'."\n"
                .'          "picUrl": "//img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png",'."\n"
                .'          "skuSpecs": ['."\n"
                .'            {'."\n"
                .'              "keyId": 0,'."\n"
                .'              "key": "颜色分类",'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "天蓝色"'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "skuSpecsCode": "",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": false,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "无货",'."\n"
                .'          "price": 1,'."\n"
                .'          "markPrice": 999900,'."\n"
                .'          "platformPrice": 999900,'."\n"
                .'          "divisionCode": null'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822082",'."\n"
                .'          "title": "红色",'."\n"
                .'          "picUrl": "//img.alicdn.com/imgextra///img.alicdn.com/imgextra/i3/2216003305543/O1CN01EWJ8tO1qokF2BAhv3_!!2216003305543.jpg",'."\n"
                .'          "skuSpecs": ['."\n"
                .'            {'."\n"
                .'              "keyId": 0,'."\n"
                .'              "key": "颜色分类",'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "红色"'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "skuSpecsCode": "",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": true,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "有货",'."\n"
                .'          "price": 2,'."\n"
                .'          "markPrice": 999900,'."\n"
                .'          "platformPrice": 999900,'."\n"
                .'          "divisionCode": null'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822083",'."\n"
                .'          "title": "黑色",'."\n"
                .'          "picUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",'."\n"
                .'          "skuSpecs": ['."\n"
                .'            {'."\n"
                .'              "keyId": 0,'."\n"
                .'              "key": "颜色分类",'."\n"
                .'              "valueId": 0,'."\n"
                .'              "value": "黑色"'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "skuSpecsCode": "",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": false,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "无货",'."\n"
                .'          "price": 1,'."\n"
                .'          "markPrice": 999900,'."\n"
                .'          "platformPrice": 999900,'."\n"
                .'          "divisionCode": null'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "canSell": true,'."\n"
                .'      "productType": "Normal",'."\n"
                .'      "productStatus": "Online",'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "taxRate": null,'."\n"
                .'      "taxCode": null,'."\n"
                .'      "categoryChain": ['."\n"
                .'        {'."\n"
                .'          "categoryId": 50023724,'."\n"
                .'          "name": "其他",'."\n"
                .'          "parentId": 0,'."\n"
                .'          "level": 0,'."\n"
                .'          "isLeaf": false'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "categoryId": 50011150,'."\n"
                .'          "name": "其它",'."\n"
                .'          "parentId": 50023724,'."\n"
                .'          "level": 0,'."\n"
                .'          "isLeaf": true'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "soldQuantity": "0",'."\n"
                .'      "divisionCode": null'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'GetSelectionProductSaleInfo' => [
            'summary' => '查询选品池商品销售信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}/saleInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'productId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '660460842235822080',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '采购方id',
                        'description' => '采购方id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PID22000009',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'divisionCode',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '区域码',
                        'description' => '区域码（建议为五级乡镇/街道级地址code）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330106109',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '商品销售信息',
                        '$ref' => '#/components/schemas/ProductSaleInfo',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"divisionCode\\": \\"110000\\",\\n  \\"quantity\\": 10,\\n  \\"skus\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"markPrice\\": 999900,\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"price\\": 19800,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"天蓝色\\",\\n      \\"skuId\\": \\"660460842235822081\\"\\n    }\\n  ],\\n  \\"productId\\": \\"660460842235822080\\",\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"fuzzyQuantity\\": \\"有货\\",\\n  \\"productStatus\\": \\"Online\\",\\n  \\"shopId\\": \\"21000017\\",\\n  \\"title\\": \\"发财树\\",\\n  \\"lmItemId\\": \\"21000017-4580902812\\"\\n}","type":"json"}]',
            'title' => '查询选品池商品销售信息',
            'description' => '查询选品池商品销售信息：分销商可调用此接口查询商品销售信息，如商品状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参查询商品在该区域是否可售。',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "productId": "660460842235822080",'."\n"
                .'  "purchaserId": "PID22000009",'."\n"
                .'  "divisionCode": "330106109"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "33D4B4FC-E37F-1CB1-A4DD-F953B7F296DB",'."\n"
                .'  "shopId": "21000019",'."\n"
                .'  "divisionCode": "330106109",'."\n"
                .'  "productId": "660460842235822080",'."\n"
                .'  "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",'."\n"
                .'  "skus": ['."\n"
                .'    {'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "divisionCode": "330106109",'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "skuId": "660460842235822081",'."\n"
                .'      "title": "天蓝色",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": false,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "无货",'."\n"
                .'      "price": 1,'."\n"
                .'      "markPrice": 999900'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "divisionCode": "330106109",'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "skuId": "660460842235822082",'."\n"
                .'      "title": "红色",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": true,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "price": 2,'."\n"
                .'      "markPrice": 999900'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "divisionCode": "330106109",'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "skuId": "660460842235822083",'."\n"
                .'      "title": "黑色",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": false,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "无货",'."\n"
                .'      "price": 1,'."\n"
                .'      "markPrice": 999900'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "canSell": true,'."\n"
                .'  "productStatus": "Online",'."\n"
                .'  "quantity": -1,'."\n"
                .'  "fuzzyQuantity": "有货"'."\n"
                .'}',
        ],
        'ListSelectionProductSaleInfos' => [
            'summary' => '批量查询选品池商品销售信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/saleInfo/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '批量查询商品库存参数',
                        'description' => '批量查询商品销售信息参数',
                        'required' => true,
                        '$ref' => '#/components/schemas/ProductSaleInfoListQuery',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '商品销售信息',
                        '$ref' => '#/components/schemas/ProductSaleInfoListResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"productSaleInfos\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"quantity\\": 10,\\n      \\"skus\\": [\\n        {\\n          \\"divisionCode\\": \\"110000\\",\\n          \\"markPrice\\": 999900,\\n          \\"quantity\\": -1,\\n          \\"productId\\": \\"660460842235822080\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 19800,\\n          \\"fuzzyQuantity\\": \\"有货\\",\\n          \\"skuStatus\\": \\"Online\\",\\n          \\"shopId\\": \\"21000017\\",\\n          \\"title\\": \\"天蓝色\\",\\n          \\"skuId\\": \\"660460842235822081\\"\\n        }\\n      ],\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"requestId\\": \\"3239281273464326823\\",\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"productStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"发财树\\",\\n      \\"lmItemId\\": \\"21000017-4580902812\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询选品池商品销售信息',
            'description' => '批量查询选品池商品销售信息：分销商可调用此接口批量查询商品销售信息，如商品状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参批量查询商品在该区域是否可售。',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "purchaserId":"PID22000009", '."\n"
                .'  "divisionCode":"330106109", '."\n"
                .'  "productIds":['."\n"
                .'    "660460842235822080"'."\n"
                .'  ]'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "1556385F-6098-114E-84F8-14B383EF5AA8",'."\n"
                .'  "productSaleInfos": ['."\n"
                .'    {'."\n"
                .'      "requestId": null,'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "divisionCode": "330106109",'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",'."\n"
                .'      "skus": ['."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "divisionCode": "330106109",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822081",'."\n"
                .'          "title": "天蓝色",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": false,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "无货",'."\n"
                .'          "price": 1,'."\n"
                .'          "markPrice": 999900'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "divisionCode": "330106109",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822082",'."\n"
                .'          "title": "红色",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": true,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "有货",'."\n"
                .'          "price": 2,'."\n"
                .'          "markPrice": 999900'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "shopId": "21000019",'."\n"
                .'          "divisionCode": "330106109",'."\n"
                .'          "productId": "660460842235822080",'."\n"
                .'          "skuId": "660460842235822083",'."\n"
                .'          "title": "黑色",'."\n"
                .'          "skuStatus": "Online",'."\n"
                .'          "canSell": false,'."\n"
                .'          "quantity": -1,'."\n"
                .'          "fuzzyQuantity": "无货",'."\n"
                .'          "price": 1,'."\n"
                .'          "markPrice": 999900'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "canSell": true,'."\n"
                .'      "productStatus": "Online",'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'ListSelectionSkuSaleInfos' => [
            'summary' => '批量查询选品池SKU销售信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/skus/saleInfo/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '批量查询SKU库存参数',
                        'description' => '批量查询SKU销售信息参数',
                        'required' => true,
                        '$ref' => '#/components/schemas/SkuSaleInfoListQuery',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => 'SKU销售信息',
                        '$ref' => '#/components/schemas/SkuSaleInfoListResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"skuSaleInfos\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"markPrice\\": 999900,\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"price\\": 19800,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"天蓝色\\",\\n      \\"skuId\\": \\"660460842235822081\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询选品池SKU销售信息',
            'description' => '批量查询选品池SKU销售信息：分销商可调用此接口批量查询SKU销售信息，如SKU状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参批量查询SKU在该区域是否可售',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'    "divisionCode": "330106109",'."\n"
                .'    "purchaserId": "PID22000009",'."\n"
                .'    "skuQueryParams": ['."\n"
                .'      {'."\n"
                .'        "productId": "660460842235822080",'."\n"
                .'        "skuId": "660460842235822082"'."\n"
                .'      }'."\n"
                .'    ]'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "6F3A5B0A-AC2B-1083-A2ED-ACE62BF1C100",'."\n"
                .'  "skuSaleInfos": ['."\n"
                .'    {'."\n"
                .'      "shopId": "21000019",'."\n"
                .'      "divisionCode": "330106109",'."\n"
                .'      "productId": "660460842235822080",'."\n"
                .'      "skuId": "660460842235822082",'."\n"
                .'      "title": "红色",'."\n"
                .'      "skuStatus": "Online",'."\n"
                .'      "canSell": true,'."\n"
                .'      "quantity": -1,'."\n"
                .'      "fuzzyQuantity": "有货",'."\n"
                .'      "price": 2,'."\n"
                .'      "markPrice": 999900'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'ListCategories' => [
            'summary' => '查询类目列表。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/categories/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '类目查询参数',
                        'required' => false,
                        '$ref' => '#/components/schemas/CategoryListQuery',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '类目',
                        '$ref' => '#/components/schemas/CategoryListResult',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"\\",\\n  \\"categories\\": [\\n    {\\n      \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n      \\"isLeaf\\": false,\\n      \\"level\\": 2,\\n      \\"categoryId\\": 201792301,\\n      \\"parentId\\": 50016422\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询类目列表',
            'description' => '根据父类目id查询所有子类目信息，或者根据类目id查询类目信息。'."\n"
                ."\n"
                .'当父类目id(parentCategoryId)为0时，则返回根类目下的一级类目。',
            'requestParamsDescription' => '```'."\n"
                .'// 查询类目(parentCategoryId)下的所有子类目'."\n"
                .'{'."\n"
                .'  "body": {'."\n"
                .'    "parentCategoryId": "50016422"'."\n"
                .'  }'."\n"
                .'}'."\n"
                ."\n"
                .'// 根据入参类目id(categoryIds)批量查询类目'."\n"
                .'{'."\n"
                .'  "body": {'."\n"
                .'    "categoryIds": ['."\n"
                .'      "202007601",'."\n"
                .'      "201792301"'."\n"
                .'    ]'."\n"
                .'  }',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "4D1FC14F-CE54-1A1F-A322-D6DC87D49AFE",'."\n"
                .'  "categories": ['."\n"
                .'    {'."\n"
                .'      "categoryId": 201792301,'."\n"
                .'      "name": "方便面/拉面/挂面/轻食面速食",'."\n"
                .'      "parentId": 50016422,'."\n"
                .'      "level": 2,'."\n"
                .'      "isLeaf": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "categoryId": 202007601,'."\n"
                .'      "name": "方便速食/速冻食品类卡券",'."\n"
                .'      "parentId": 50016422,'."\n"
                .'      "level": 2,'."\n"
                .'      "isLeaf": false'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'SplitPurchaseOrder' => [
            'summary' => '采购单渲染拆单接口，可以依照最终主子单结构方式返回商品列表，分销商接入方可以渲染得到最终的主子单结构，方便后续接收创建采购单成功消息并回填主子单信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/split',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '采购单拆单渲染入参信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '采购单拆单渲染结果返回',
                        '$ref' => '#/components/schemas/PurchaseOrderRenderResult',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"addressList\\": [\\n    {\\n      \\"divisionCode\\": \\"610102\\",\\n      \\"addressDetail\\": \\"陕西省西安市新城区xxx大厦xx室\\",\\n      \\"receiverPhone\\": \\"182***5674\\",\\n      \\"townDivisionCode\\": \\"61010212\\",\\n      \\"receiver\\": \\"任先生\\",\\n      \\"addressId\\": 0\\n    }\\n  ],\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"orderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"unsellableOrderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"message\\": \\"库存为0\\",\\n  \\"extInfo\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '采购单渲染并拆单',
            'description' => '建议在创建采购单之前调用本接口，本接口将返回可售商品信息列表和不可售商品信息列表，其中可售商品信息列表按照最终主子单拆单结构进行呈现。',
        ],
        'RenderPurchaseOrder' => [
            'summary' => '采购单渲染，会返回可售商品和不可售商品，客户可以选择可售商品进行采购单下单。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/render',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '渲染采购单',
                        'description' => '渲染采购单',
                        'required' => true,
                        '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '采购单渲染结果',
                        'required' => false,
                        '$ref' => '#/components/schemas/PurchaseOrderRenderResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"addressList\\": [\\n    {\\n      \\"divisionCode\\": \\"610102\\",\\n      \\"addressDetail\\": \\"陕西省西安市新城区xxx大厦xx室\\",\\n      \\"receiverPhone\\": \\"182***5674\\",\\n      \\"townDivisionCode\\": \\"61010212\\",\\n      \\"receiver\\": \\"任先生\\",\\n      \\"addressId\\": 0\\n    }\\n  ],\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"orderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"unsellableOrderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"message\\": \\"库存为0\\",\\n  \\"extInfo\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '采购单渲染',
            'description' => '采购单渲染，会返回可售商品和不可售商品，客户可以选择可售商品进行采购单下单。',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "deliveryAddress": {'."\n"
                .'    "divisionCode": "610102",'."\n"
                .'    "addressDetail": "陕西省西安市***大厦",'."\n"
                .'    "receiverPhone": "187****1553",'."\n"
                .'    "receiver": "闫先生",'."\n"
                .'    "townDivisionCode": "61010212"'."\n"
                .'  },'."\n"
                .'  "buyerId": "test1234****679",'."\n"
                .'  "productList": ['."\n"
                .'    {'."\n"
                .'      "quantity": 1,'."\n"
                .'      "productId": "6600622091****6736",'."\n"
                .'      "purchaserId": "22000009",'."\n"
                .'      "skuId": "6600622091****6737"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "0928251D-713B-17A1-A2B0-1A57****90B4",'."\n"
                .'  "orderList": ['."\n"
                .'    {'."\n"
                .'      "productList": ['."\n"
                .'        {'."\n"
                .'          "productId": "6600622091****6736",'."\n"
                .'          "productTitle": "儿童学习桌",'."\n"
                .'          "skuTitle": "浅灰色",'."\n"
                .'          "skuId": "6600622091****6737",'."\n"
                .'          "purchaserId": "22***09",'."\n"
                .'          "promotionFee": null,'."\n"
                .'          "quantity": 1,'."\n"
                .'          "productUrl": null,'."\n"
                .'          "productPicUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0DYLWA_!!2216003305543.jpg",'."\n"
                .'          "price": 1,'."\n"
                .'          "canSell": true,'."\n"
                .'          "message": null,'."\n"
                .'          "features": null'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "deliveryInfoList": ['."\n"
                .'        {'."\n"
                .'          "id": "20",'."\n"
                .'          "displayName": "快递 免邮",'."\n"
                .'          "postFee": 0,'."\n"
                .'          "serviceType": -4'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "invoiceInfo": null,'."\n"
                .'      "extInfo": null,'."\n"
                .'      "canSell": true,'."\n"
                .'      "message": null'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "unsellableOrderList": ['."\n"
                .'    {'."\n"
                .'      "productList": [],'."\n"
                .'      "deliveryInfoList": null,'."\n"
                .'      "invoiceInfo": null,'."\n"
                .'      "extInfo": null,'."\n"
                .'      "canSell": false,'."\n"
                .'      "message": null'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "addressList": ['."\n"
                .'    {'."\n"
                .'      "addressId": 0,'."\n"
                .'      "receiver": "闫先生",'."\n"
                .'      "receiverPhone": "187****1553",'."\n"
                .'      "addressDetail": "陕西省西安市***大厦",'."\n"
                .'      "divisionCode": "610102",'."\n"
                .'      "townDivisionCode": "610102002"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "extInfo": null,'."\n"
                .'  "canSell": true,'."\n"
                .'  "message": null'."\n"
                .'}',
        ],
        'CreatePurchaseOrder' => [
            'summary' => '创建采购单，返回采购单号，具体订单创建结果由消息侧通知。订单创建完成之后，客户可以通过订单接口查询采购单下附属的订单信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '创建采购单',
                        'description' => '创建采购单',
                        'required' => true,
                        '$ref' => '#/components/schemas/PurchaseOrderCreateCmd',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '采购单创建结果（返回采购单号）',
                        'required' => false,
                        '$ref' => '#/components/schemas/PurchaseOrderCreateResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"purchaseOrderId\\": \\"6692****5696\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '创建采购单',
            'description' => '创建采购单，返回采购单号，具体订单创建结果由消息侧通知。订单创建完成之后，客户可以通过订单接口查询采购单下附属的订单信息。',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "outerPurchaseOrderId": "outer00****0",'."\n"
                .'  "deliveryAddress": {'."\n"
                .'    "divisionCode": "610102",'."\n"
                .'    "addressDetail": "陕西省西安市***大厦",'."\n"
                .'    "receiverPhone": "187****1553",'."\n"
                .'    "receiver": "闫先生",'."\n"
                .'    "townDivisionCode": "61010212"'."\n"
                .'  },'."\n"
                .'  "buyerId": "yt12345085",'."\n"
                .'  "productList": ['."\n"
                .'    {'."\n"
                .'      "quantity": 1,'."\n"
                .'      "productId": "6600622091****6736",'."\n"
                .'      "purchaserId": "PID2****09",'."\n"
                .'      "skuId": "6600622091****6737"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "48A34399-A72C-1E23-8388-7E63****E927",'."\n"
                .'  "purchaseOrderId": "6696070481****5680"'."\n"
                .'}',
        ],
        'GetPurchaseOrderStatus' => [
            'summary' => '获取采购单状态。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/{purchaseOrderId}/status',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'purchaseOrderId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '采购单ID',
                        'description' => '采购单ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6696070481****5680',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '交易单状态',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '分销单创建中',
                            10 => '采购中',
                            20 => '采购成功，待发货',
                            '采购成功，部分发货',
                            '采购成功，全部发货',
                            30 => '部分采购成功，待发货',
                            '部分采购成功，部分发货',
                            '部分采购成功，全部发货',
                            80 => '交易失败',
                            99 => '交易成功',
                        ],
                        '$ref' => '#/components/schemas/PurchaseOrderStatusResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"status\\": \\"10\\"\\n}","type":"json"}]',
            'title' => '获取采购单状态',
            'description' => '获取交易单状态。',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "AC85D1AE-3015-1024-B17C-D056****3583",'."\n"
                .'  "status": "20"'."\n"
                .'}',
        ],
        'GetOrder' => [
            'summary' => '查询主单详情。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'orderId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '订单id',
                        'description' => '订单id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '669607056****8593',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '订单资源返回',
                        'required' => false,
                        '$ref' => '#/components/schemas/OrderResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderAmount\\": 100,\\n  \\"orderLineList\\": [\\n    {\\n      \\"productTitle\\": \\"儿童学习桌\\",\\n      \\"number\\": \\"1\\",\\n      \\"skuTitle\\": \\"浅绿色\\",\\n      \\"productId\\": \\"6600****6736\\",\\n      \\"orderId\\": \\"6692****5457\\",\\n      \\"productPic\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n      \\"orderLineId\\": \\"6692****5458\\",\\n      \\"logisticsStatus\\": \\"1\\",\\n      \\"payFee\\": 100,\\n      \\"skuId\\": \\"6600****6737\\",\\n      \\"orderLineStatus\\": \\"1\\"\\n    }\\n  ],\\n  \\"orderId\\": \\"6692****5457\\",\\n  \\"distributorId\\": \\"12****01\\",\\n  \\"orderStatus\\": \\"1\\",\\n  \\"logisticsStatus\\": \\"1\\",\\n  \\"createDate\\": \\"2023-09-11T12:22:24.000+08:00\\",\\n  \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n}","type":"json"}]',
            'title' => '获取订单详情',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "createDate": "2023-09-09 10:57:23",'."\n"
                .'  "distributorId": "6599775553****9296",'."\n"
                .'  "logisticsStatus": "1",'."\n"
                .'  "orderId": "6696070566****8593",'."\n"
                .'  "orderAmount": "1",'."\n"
                .'  "orderStatus": "2",'."\n"
                .'  "orderLineList": ['."\n"
                .'    {'."\n"
                .'      "productPic": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0DYLWA_!!2216003305543.jpg",'."\n"
                .'      "productPrice": ['."\n"
                .'        {'."\n"
                .'          "fundAmountMoney": "1"  //订单应付金额'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "productTitle": "儿童学习桌",'."\n"
                .'      "productId": "6600622091****6736",'."\n"
                .'      "number": "1",'."\n"
                .'      "orderLineStatus": "2",'."\n"
                .'      "logisticsStatus": "1",'."\n"
                .'      "skuId": "6600622091****6737",'."\n"
                .'      "skuTitle": "浅灰色",'."\n"
                .'      "orderLineId": "6696070566****8594",'."\n"
                .'      "orderId": "6696070566****8593"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'QueryOrders' => [
            'summary' => '查询订单列表。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/query',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询主单列表',
                        'description' => '查询主单列表',
                        'required' => true,
                        '$ref' => '#/components/schemas/OrderPageQuery',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '订单列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/OrderListResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderList\\": [\\n    {\\n      \\"orderAmount\\": 100,\\n      \\"orderLineList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"number\\": \\"1\\",\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"orderId\\": \\"6692****5457\\",\\n          \\"productPic\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"orderLineId\\": \\"6692****5458\\",\\n          \\"logisticsStatus\\": \\"1\\",\\n          \\"payFee\\": 100,\\n          \\"skuId\\": \\"6600****6737\\",\\n          \\"orderLineStatus\\": \\"1\\"\\n        }\\n      ],\\n      \\"orderId\\": \\"6692****5457\\",\\n      \\"distributorId\\": \\"12****01\\",\\n      \\"orderStatus\\": \\"1\\",\\n      \\"logisticsStatus\\": \\"1\\",\\n      \\"createDate\\": \\"2023-09-11T12:22:24.000+08:00\\",\\n      \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"total\\": 24\\n}","type":"json"}]',
            'title' => '查询订单列表',
            'description' => '查询订单列表',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "pageNumber": 1,'."\n"
                .'  "pageSize": 10,'."\n"
                .'  "orderIdList": ['."\n"
                .'    "6696070566****8593"'."\n"
                .'  ]'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "15BC537F-26F7-1AD0-AC3C-B79****D540",'."\n"
                .'  "total": 10,'."\n"
                .'  "orderList": ['."\n"
                .'    {'."\n"
                .'      "requestId": null,'."\n"
                .'      "createDate": "2023-09-09 10:57:23",'."\n"
                .'      "distributorId": "12****01",'."\n"
                .'      "logisticsStatus": "2",'."\n"
                .'      "orderId": "6696070566****8593",'."\n"
                .'      "orderAmount": "1",'."\n"
                .'      "orderStatus": "2",'."\n"
                .'      "orderLineList": ['."\n"
                .'        {'."\n"
                .'          "productPic": "//img.alicdn.com/imgextra/i4/2216****05543/O1CN01bip3Un1qo****YLWA_!!2216003****43.jpg",'."\n"
                .'          "productPrice": ['."\n"
                .'            {'."\n"
                .'              "fundAmountMoney": "1"'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "productTitle": "儿童学习桌",'."\n"
                .'          "productId": "6600622091****6736",'."\n"
                .'          "number": "1",'."\n"
                .'          "orderLineStatus": "2",'."\n"
                .'          "logisticsStatus": "2",'."\n"
                .'          "skuId": "6600622091****6737",'."\n"
                .'          "skuTitle": "浅灰色",'."\n"
                .'          "orderLineId": "6696070566****8594",'."\n"
                .'          "orderId": "6696070566****8593"'."\n"
                .'        }'."\n"
                .'      ]'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'ListLogisticsOrders' => [
            'summary' => '查询订单物流信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}/logisticsOrders',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'orderId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '订单id',
                        'description' => '订单id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6696070566****8593',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '物流信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/LogisticsOrderListResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"logisticsOrderList\\": [\\n    {\\n      \\"mailNo\\": \\"SF234***2345\\",\\n      \\"dataProviderTitle\\": \\"菜鸟裹裹\\",\\n      \\"logisticsCompanyName\\": \\"顺丰\\",\\n      \\"logisticsDetailList\\": [\\n        {\\n          \\"ocurrTimeStr\\": \\"2023-09-01 00:00:00\\",\\n          \\"standerdDesc\\": \\"已签收\\"\\n        }\\n      ],\\n      \\"goods\\": [\\n        {\\n          \\"goodName\\": \\"儿童学习桌\\",\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"quantity\\": 1\\n        }\\n      ],\\n      \\"dataProvider\\": \\"菜鸟\\",\\n      \\"logisticsCompanyCode\\": \\"SF （OTHER-其他 POST-中国邮政 EMS-EMS EYB-EMS快递包裹 POSTB-邮政快递包裹 STO-申通快递 YTO-圆通快递 YUNDA-韵达快递 ZJS-宅急送 FEDEX-联邦快递 DBKD-德邦物流 SHQ-华强物流 TN-特能 TAOBAO-淘宝物流 ZTO-中通快递 HTKY-百世快递 TTKDEX-天天快递 SF-顺丰速运 ZTKY-中铁物流 QFKD-全峰快递 JT-极兔物流）\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '查询订单物流信息',
            'description' => '查询订单物流信息',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "ED080FA8-F005-10B1-A9AB-CCFD****9149",'."\n"
                .'  "logisticsOrderList": ['."\n"
                .'    {'."\n"
                .'      "dataProvider": "菜鸟裹裹",'."\n"
                .'      "dataProviderTitle": "本数据由菜鸟裹裹提供",'."\n"
                .'      "goods": ['."\n"
                .'        {'."\n"
                .'          "goodName": "儿童学习桌",'."\n"
                .'          "productId": 2384738123****7238,'."\n"
                .'          "quantity": 1'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "logisticsCompanyCode": "SF",'."\n"
                .'      "logisticsCompanyName": "顺丰速运",'."\n"
                .'      "logisticsDetailList": ['."\n"
                .'        {'."\n"
                .'          "ocurrTimeStr": "2023-06-06 14:44:45",'."\n"
                .'          "standerdDesc": "顺丰速运 已收取快件"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "ocurrTimeStr": "2023-06-06 14:44:46",'."\n"
                .'          "standerdDesc": "快件在【加工厂店】完成分拣，准备发往 【沈阳****中转场】"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "ocurrTimeStr": "2023-06-06 18:24:09",'."\n"
                .'          "standerdDesc": "快件到达 【沈阳****中转场】"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "ocurrTimeStr": "2023-06-06 18:28:26",'."\n"
                .'          "standerdDesc": "快件在【沈阳****中转场】完成分拣，准备发往 【西安****中转场】"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "ocurrTimeStr": "2023-06-07 05:40:35",'."\n"
                .'          "standerdDesc": "快件已发车"'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "mailNo": "SF162546****599"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'ConfirmDisburse' => [
            'summary' => '确认收货。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/confirmDisburse',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '确认收货（订单）',
                        'description' => '确认收货入参',
                        'required' => true,
                        '$ref' => '#/components/schemas/ConfirmDisburseCmd',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '确认收货结果',
                        'required' => false,
                        '$ref' => '#/components/schemas/ConfirmDisburseResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": \\"success\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '确认收货',
            'description' => '确认收货',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "orderId": "6696667996****5953"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "FF83DFBE-CBF2-1D73-83A3-5010****C402",'."\n"
                .'  "result": "success"'."\n"
                .'}',
        ],
        'RenderRefundOrder' => [
            'summary' => '售后单渲染。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/commands/render',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '逆向单渲染',
                        'description' => '逆向单渲染',
                        'required' => true,
                        '$ref' => '#/components/schemas/RefundRenderCmd',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '售后单渲染结果',
                        'required' => false,
                        '$ref' => '#/components/schemas/RefundRenderResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"maxRefundFeeData\\": {\\n    \\"minRefundFee\\": 1,\\n    \\"maxRefundFee\\": 100\\n  },\\n  \\"refundReasonList\\": [\\n    {\\n      \\"reasonTextId\\": \\"47683\\",\\n      \\"proofRequired\\": true,\\n      \\"reasonTips\\": \\"不想要了\\",\\n      \\"refundDescRequired\\": true\\n    }\\n  ],\\n  \\"bizClaimType\\": 1,\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '售后单渲染',
            'description' => '售后单渲染',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "bizClaimType": 3,'."\n"
                .'  "goodsStatus": 2,'."\n"
                .'  "orderLineId": "6696070566****8594"'."\n"
                .'}',
            'responseParamsDescription' => '````'."\n"
                .'{'."\n"
                .'  "requestId": "6D7C43A1-2EFC-185E-816E-A8CB****36EB",'."\n"
                .'  "orderLineId": "6696070566****8594",'."\n"
                .'  "bizClaimType": 3,'."\n"
                .'  "mainOrderRefund": false,'."\n"
                .'  "maxRefundFeeData": {'."\n"
                .'    "maxRefundFee": 1,'."\n"
                .'    "minRefundFee": 0'."\n"
                .'  },'."\n"
                .'  "refundReasonList": ['."\n"
                .'    {'."\n"
                .'      "reasonTextId": "402652",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "拍错/多拍/不喜欢",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "reasonTextId": "403883",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "商品成分描述不符",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "reasonTextId": "402641",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "尺寸/规格不符",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "reasonTextId": "402649",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "颜色/款式/包装与商品描述不符",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "reasonTextId": "402645",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "收到商品少件/破损/变形等",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "reasonTextId": "402638",'."\n"
                .'      "proofRequired": false,'."\n"
                .'      "reasonTips": "枯萎/死亡",'."\n"
                .'      "refundDescRequired": false'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
        ],
        'CreateRefundOrder' => [
            'summary' => '创建售后单。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '创建逆向单',
                        'description' => '创建逆向单',
                        'required' => true,
                        '$ref' => '#/components/schemas/RefundOrderCmd',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '售后单资源',
                        'required' => false,
                        '$ref' => '#/components/schemas/RefundOrderResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '创建售后单',
            'description' => '创建售后单',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "4DFA4CBA-AB08-13E2-9E25-0A26****72F2",'."\n"
                .'  "orderLineId": "6696070566****8594",'."\n"
                .'  "disputeStatus": 1,'."\n"
                .'  "disputeId": "6696233432****5024"'."\n"
                .'}',
        ],
        'CancelRefundOrder' => [
            'summary' => '取消售后单。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}/commands/cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'disputeId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '售后单ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '601853367760207872',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '售后单资源',
                        'required' => false,
                        '$ref' => '#/components/schemas/RefundOrderResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '取消售后单',
            'description' => '取消售后单',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "0F5BFCA7-98B9-1D59-80C2-30622***CFB1",'."\n"
                .'  "orderLineId": "66931024438***7746",'."\n"
                .'  "disputeStatus": 1,'."\n"
                .'  "disputeId": "66931163166***4352"'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetRefundOrder' => [
            'summary' => '获取售后单详情。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'disputeId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '售后单id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6696233432****5024',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '售后单结果',
                        'required' => false,
                        '$ref' => '#/components/schemas/RefundResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"refundFee\\": 1,\\n  \\"refundFeeData\\": {\\n    \\"minRefundFee\\": 1,\\n    \\"maxRefundFee\\": 100\\n  },\\n  \\"applyDisputeDesc\\": \\"多拍不想要\\",\\n  \\"refunderTel\\": \\"182****1334\\",\\n  \\"bizClaimType\\": 1,\\n  \\"disputeDesc\\": \\"多拍不想要\\",\\n  \\"sellerRefuseReason\\": \\"商品没问题，买家举证无效\\",\\n  \\"orderId\\": \\"6692****5457\\",\\n  \\"refunderName\\": \\"赵先生\\",\\n  \\"applyReason\\": {\\n    \\"reasonTextId\\": 403769,\\n    \\"reasonTips\\": \\"不想要了\\"\\n  },\\n  \\"refunderAddress\\": \\"阿里云云谷\\",\\n  \\"refunderZipCode\\": \\"331001\\",\\n  \\"disputeEndTime\\": \\"2023-09-02T12:00:00.000Z\\",\\n  \\"sellerRefuseAgreementMessage\\": \\"不同意退款\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"returnGoodLogisticsStatus\\": 0,\\n  \\"orderLogisticsStatus\\": 1,\\n  \\"disputeCreateTime\\": \\"2023-09-02T00:00:00.000Z\\",\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"sellerAgreeMsg\\": \\"同意退款\\",\\n  \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n}","type":"json"}]',
            'title' => '获取售后单详情',
            'description' => '获取售后单详情',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "applyDisputeDesc": null,'."\n"
                .'  "applyReason": {'."\n"
                .'    "reasonTextId": 403883,'."\n"
                .'    "reasonTips": "商品成分描述不符"'."\n"
                .'  },'."\n"
                .'  "bizClaimType": 3,'."\n"
                .'  "disputeCreateTime": "2023-09-09 12:00:35",'."\n"
                .'  "disputeDesc": null,'."\n"
                .'  "disputeEndTime": null,'."\n"
                .'  "disputeId": "6696233432****5024",'."\n"
                .'  "disputeStatus": 3,'."\n"
                .'  "disputeType": 1,'."\n"
                .'  "orderId": "6696070566****8593",'."\n"
                .'  "refundFeeData": {'."\n"
                .'    "maxRefundFee": null,'."\n"
                .'    "minRefundFee": null'."\n"
                .'  },'."\n"
                .'  "orderLogisticsStatus": 2,'."\n"
                .'  "refundFee": 1,'."\n"
                .'  "refunderAddress": null,'."\n"
                .'  "refunderName": null,'."\n"
                .'  "refunderTel": null,'."\n"
                .'  "refunderZipCode": null,'."\n"
                .'  "returnGoodCount": null,'."\n"
                .'  "returnGoodLogisticsStatus": null,'."\n"
                .'  "sellerAgreeMsg": null,'."\n"
                .'  "sellerRefuseAgreementMessage": null,'."\n"
                .'  "sellerRefuseReason": null,'."\n"
                .'  "orderLineId": "6696070566****8594"'."\n"
                .'}',
        ],
        'CreateGoodsShippingNotice' => [
            'summary' => '回填运单信息。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/command/createGoodsShippingNotice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '提交逆向物流信息',
                        'description' => '提交运单信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/GoodsShippingNoticeCreateCmd',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '操作返回结果',
                        'required' => false,
                        '$ref' => '#/components/schemas/GoodsShippingNoticeCreateResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": \\"success\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '回填运单信息',
            'description' => '回填运单信息',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "cpCode": "YUNDA",'."\n"
                .'  "disputeId": "6696233432****5024",'."\n"
                .'  "logisticsNo": "4334027****6583"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "FA53BE49-2740-1AE1-BCBE-3640****5BE5",'."\n"
                .'  "result": "success"'."\n"
                .'}',
        ],
        'QueryChildDivisionCode' => [
            'summary' => '查询子区域编码。',
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/division/commands/queryChildDivisionCode',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询地址divisionCode',
                        'description' => '查询子区域编码',
                        'required' => true,
                        '$ref' => '#/components/schemas/DivisionQuery',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '成功',
                    'schema' => [
                        'description' => '子区域编码',
                        'required' => false,
                        '$ref' => '#/components/schemas/DivisionPageResult',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"divisionList\\": [\\n    {\\n      \\"divisionName\\": \\"上海\\",\\n      \\"divisionCode\\": 310000,\\n      \\"divisionLevel\\": 2,\\n      \\"pinyin\\": \\"shang hai\\",\\n      \\"parentId\\": 1\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
            'title' => '查询子区域编码',
            'description' => '查询子区域编码',
            'requestParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "divisionCode": "1"'."\n"
                .'}',
            'responseParamsDescription' => '```'."\n"
                .'{'."\n"
                .'  "requestId": "85144A43-F418-1094-9A40-B8CE****8F30",'."\n"
                .'  "divisionList": ['."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 310000,'."\n"
                .'      "divisionName": "上海",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "shang hai"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 530000,'."\n"
                .'      "divisionName": "云南省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "yun nan sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 150000,'."\n"
                .'      "divisionName": "内蒙古自治区",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "nei meng gu zi zhi qu"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 110000,'."\n"
                .'      "divisionName": "北京",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "bei jing"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 220000,'."\n"
                .'      "divisionName": "吉林省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "ji lin sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 510000,'."\n"
                .'      "divisionName": "四川省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "si chuan sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 120000,'."\n"
                .'      "divisionName": "天津",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "tian jin"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 640000,'."\n"
                .'      "divisionName": "宁夏回族自治区",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "ning xia hui zu zi zhi qu"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 340000,'."\n"
                .'      "divisionName": "安徽省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "an hui sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 370000,'."\n"
                .'      "divisionName": "山东省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "shan dong sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 140000,'."\n"
                .'      "divisionName": "山西省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "shan xi sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 440000,'."\n"
                .'      "divisionName": "广东省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "guang dong sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 450000,'."\n"
                .'      "divisionName": "广西壮族自治区",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "guang xi zhuang zu zi zhi qu"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 650000,'."\n"
                .'      "divisionName": "新疆维吾尔自治区",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "xin jiang wei wu er zi zhi qu"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 320000,'."\n"
                .'      "divisionName": "江苏省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "jiang su sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 360000,'."\n"
                .'      "divisionName": "江西省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "jiang xi sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 130000,'."\n"
                .'      "divisionName": "河北省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "he bei sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 410000,'."\n"
                .'      "divisionName": "河南省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "he nan sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 330000,'."\n"
                .'      "divisionName": "浙江省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "zhe jiang sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 460000,'."\n"
                .'      "divisionName": "海南省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "hai nan sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 420000,'."\n"
                .'      "divisionName": "湖北省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "hu bei sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 430000,'."\n"
                .'      "divisionName": "湖南省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "hu nan sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 620000,'."\n"
                .'      "divisionName": "甘肃省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "gan su sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 350000,'."\n"
                .'      "divisionName": "福建省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "fu jian sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 540000,'."\n"
                .'      "divisionName": "西藏自治区",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "xi zang zi zhi qu"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 520000,'."\n"
                .'      "divisionName": "贵州省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "gui zhou sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 210000,'."\n"
                .'      "divisionName": "辽宁省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "liao ning sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 500000,'."\n"
                .'      "divisionName": "重庆",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "chong qing"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 610000,'."\n"
                .'      "divisionName": "陕西省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "shan xi sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 630000,'."\n"
                .'      "divisionName": "青海省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "qing hai sheng"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "parentId": 1,'."\n"
                .'      "divisionCode": 230000,'."\n"
                .'      "divisionName": "黑龙江省",'."\n"
                .'      "divisionLevel": 2,'."\n"
                .'      "pinyin": "hei long jiang sheng"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}',
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
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'linkedmall',
    'version' => '2023-09-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 185821,
      'title' => '采购店铺',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPurchaserShops',
        1 => 'GetPurchaserShop',
      ),
    ),
    1 => 
    array (
      'id' => 185824,
      'title' => '商品',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetSelectionProduct',
        1 => 'ListSelectionProducts',
        2 => 'GetSelectionProductSaleInfo',
        3 => 'ListSelectionProductSaleInfos',
        4 => 'ListSelectionSkuSaleInfos',
        5 => 'ListCategories',
      ),
    ),
    2 => 
    array (
      'id' => 185829,
      'title' => '采购单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SplitPurchaseOrder',
        1 => 'RenderPurchaseOrder',
        2 => 'CreatePurchaseOrder',
        3 => 'GetPurchaseOrderStatus',
      ),
    ),
    3 => 
    array (
      'id' => 185833,
      'title' => '订单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetOrder',
        1 => 'QueryOrders',
        2 => 'ListLogisticsOrders',
        3 => 'ConfirmDisburse',
      ),
    ),
    4 => 
    array (
      'id' => 185838,
      'title' => '售后单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RenderRefundOrder',
        1 => 'CreateRefundOrder',
        2 => 'CancelRefundOrder',
        3 => 'GetRefundOrder',
        4 => 'CreateGoodsShippingNotice',
      ),
    ),
    5 => 
    array (
      'id' => 185844,
      'title' => '区域编码',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryChildDivisionCode',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'AddressInfo' => 
      array (
        'title' => '地址',
        'description' => '收货地址',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '三级地址code（建议必填）',
            'description' => '四级地址code（区/县级，建议必填）',
            'type' => 'string',
            'required' => false,
            'example' => '330106',
          ),
          'addressDetail' => 
          array (
            'title' => '收货地址详细地址',
            'description' => '收货地址详细地址(建议以省/市/区县/街道/小区的格式填写完整地址信息)',
            'type' => 'string',
            'required' => true,
            'example' => '陕西省西安市新城区xx街道xxx大厦xx室',
          ),
          'receiverPhone' => 
          array (
            'title' => '收货人电话',
            'description' => '收货人电话',
            'type' => 'string',
            'required' => true,
            'example' => '182***5674',
          ),
          'townDivisionCode' => 
          array (
            'title' => '四级地址code（建议必填）',
            'description' => '五级地址code（乡镇/街道级，必填）',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'receiver' => 
          array (
            'title' => '收货人',
            'description' => '收货人',
            'type' => 'string',
            'required' => true,
            'example' => '任先生',
          ),
          'addressId' => 
          array (
            'title' => '地址ID',
            'description' => '地址ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
      ),
      'ApplyReason' => 
      array (
        'title' => '申请理由',
        'description' => '申请退款原因',
        'type' => 'object',
        'properties' => 
        array (
          'reasonTextId' => 
          array (
            'title' => '理由ID',
            'description' => '理由ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '403769',
          ),
          'reasonTips' => 
          array (
            'title' => '理由文本',
            'description' => '理由文本',
            'type' => 'string',
            'required' => false,
            'example' => '不想要了',
          ),
        ),
      ),
      'Category' => 
      array (
        'description' => '类目链',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '类目名称',
            'description' => '类目名称',
            'type' => 'string',
            'required' => false,
            'example' => '名称测试',
          ),
          'isLeaf' => 
          array (
            'title' => '是否叶子类目',
            'description' => '是否叶子类目',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
          'level' => 
          array (
            'title' => '层级',
            'description' => '层级',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
          'categoryId' => 
          array (
            'title' => '类目id',
            'description' => '类目id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '201792301',
          ),
          'parentId' => 
          array (
            'title' => '父类id',
            'description' => '父类id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
      ),
      'CategoryListQuery' => 
      array (
        'title' => '类目查询参数',
        'description' => '类目查询参数',
        'type' => 'object',
        'properties' => 
        array (
          'parentCategoryId' => 
          array (
            'title' => '父类目id',
            'description' => '父类目id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5200001',
          ),
          'categoryIds' => 
          array (
            'title' => '类目id集合',
            'description' => '类目id集合',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'example' => '5200067',
            ),
          ),
        ),
      ),
      'CategoryListResult' => 
      array (
        'title' => '类目查询结果',
        'description' => '类目',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => '请求id',
            'description' => '请求id',
            'type' => 'string',
          ),
          'categories' => 
          array (
            'title' => '类目集合',
            'description' => '类目集合',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Category',
            ),
          ),
        ),
      ),
      'ConfirmDisburseCmd' => 
      array (
        'title' => '确认收货入参',
        'description' => '确认收货入参',
        'type' => 'object',
        'properties' => 
        array (
          'orderId' => 
          array (
            'title' => '主分销订单号',
            'description' => '主分销订单号',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5457',
          ),
          'purchaseOrderId' => 
          array (
            'title' => '分销交易号',
            'description' => '分销交易号',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5696',
          ),
        ),
      ),
      'ConfirmDisburseResult' => 
      array (
        'title' => '确认收货结果',
        'description' => '确认收货结果',
        'type' => 'object',
        'properties' => 
        array (
          'result' => 
          array (
            'title' => '确认收货返回结果',
            'description' => '确认收货返回结果',
            'type' => 'string',
            'required' => false,
            'example' => 'success',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'CooperationShop' => 
      array (
        'title' => '合作方店铺',
        'description' => '合作方店铺',
        'type' => 'object',
        'properties' => 
        array (
          'shopId' => 
          array (
            'title' => '店铺id',
            'description' => '店铺id',
            'type' => 'string',
          ),
          'cooperationCompanyId' => 
          array (
            'title' => '合作企业id',
            'description' => '合作企业id',
            'type' => 'string',
          ),
          'cooperationShopId' => 
          array (
            'title' => '合作店铺id',
            'description' => '合作店铺id',
            'type' => 'string',
          ),
        ),
      ),
      'CreateAliPayUrlRequest' => 
      array (
        'title' => '入参',
        'type' => 'object',
        'properties' => 
        array (
          'shopId' => 
          array (
            'title' => '申请的店铺id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'minLength' => 1,
          ),
        ),
      ),
      'CreateAliPayUrlResult' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'zftWithholdSignUrl' => 
          array (
            'title' => '支付宝代扣签约url',
            'type' => 'string',
            'required' => false,
          ),
          'accountId' => 
          array (
            'title' => 'LM账号id',
            'type' => 'string',
            'required' => false,
          ),
          'memberId' => 
          array (
            'title' => 'LM会员id',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'DeliveryInfo' => 
      array (
        'title' => '履约信息',
        'description' => '履约信息',
        'type' => 'object',
        'properties' => 
        array (
          'postFee' => 
          array (
            'title' => '运费金额',
            'description' => '运费金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
          'serviceType' => 
          array (
            'title' => 'serviceType',
            'description' => 'serviceType',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-4',
          ),
          'id' => 
          array (
            'title' => '唯一ID',
            'description' => '唯一ID',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
          'displayName' => 
          array (
            'title' => '显示名称',
            'description' => '显示名称',
            'type' => 'string',
            'required' => false,
            'example' => '快递 免邮',
          ),
        ),
      ),
      'DistributionMaxRefundFee' => 
      array (
        'title' => '退费金额',
        'description' => '退款费用',
        'type' => 'object',
        'properties' => 
        array (
          'minRefundFee' => 
          array (
            'title' => '本单最小可退款金额',
            'description' => '本单最小可退款金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
          'maxRefundFee' => 
          array (
            'title' => '本单最大可退款金额',
            'description' => '本单最大可退款金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'Division' => 
      array (
        'title' => '区域信息',
        'description' => 'divisionList',
        'type' => 'object',
        'properties' => 
        array (
          'divisionName' => 
          array (
            'title' => '地址名称',
            'description' => '地址名称',
            'type' => 'string',
            'required' => false,
            'example' => '上海',
          ),
          'divisionCode' => 
          array (
            'title' => '地址编码',
            'description' => '地址编码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '310000',
          ),
          'divisionLevel' => 
          array (
            'title' => '地址等级',
            'description' => '地址等级',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
          'pinyin' => 
          array (
            'title' => '地址拼音',
            'description' => '地址拼音',
            'type' => 'string',
            'required' => false,
            'example' => 'shang hai',
          ),
          'parentId' => 
          array (
            'title' => '父级ID',
            'description' => '父级ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'DivisionPageResult' => 
      array (
        'title' => '区域分页返回',
        'description' => '区域分页返回',
        'type' => 'object',
        'properties' => 
        array (
          'divisionList' => 
          array (
            'title' => '区域集合',
            'description' => '区域集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/Division',
            ),
            'required' => false,
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'DivisionQuery' => 
      array (
        'title' => '区域查询',
        'description' => '区域查询',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => 'divisionCode',
            'description' => 'divisionCode',
            'type' => 'string',
            'required' => true,
            'example' => '1',
            'default' => '1',
          ),
        ),
      ),
      'GeneralBill' => 
      array (
        'description' => '账单',
        'type' => 'object',
        'properties' => 
        array (
          'totalAmount' => 
          array (
            'required' => false,
            '$ref' => '#/components/schemas/Money',
          ),
          'gmtModified' => 
          array (
            'title' => '账单修改时间',
            'description' => '账单修改时间',
            'type' => 'string',
            'required' => false,
          ),
          'billId' => 
          array (
            'title' => '账单id',
            'description' => '账单id',
            'type' => 'string',
            'required' => false,
          ),
          'downloadUrl' => 
          array (
            'title' => '明细下载地址',
            'description' => '明细下载地址',
            'type' => 'array',
            'items' => 
            array (
              'title' => '明细下载地址',
              'description' => '明细下载地址',
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
          'shopName' => 
          array (
            'title' => '店铺名称',
            'description' => '店铺名称',
            'type' => 'string',
            'required' => false,
          ),
          'startTime' => 
          array (
            'title' => '账期开始时间',
            'description' => '账期开始时间',
            'type' => 'string',
            'required' => false,
          ),
          'endTime' => 
          array (
            'title' => '账期结束时间',
            'description' => '账期结束时间',
            'type' => 'string',
            'required' => false,
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'description' => '店铺id',
            'type' => 'string',
            'required' => false,
          ),
          'gmtCreate' => 
          array (
            'title' => '账单创建时间',
            'description' => '账单创建时间',
            'type' => 'string',
            'required' => false,
          ),
          'billPeriod' => 
          array (
            'title' => '账期',
            'description' => '账期',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'GeneralBillPageQuery' => 
      array (
        'title' => '账单查询入参',
        'description' => '账单查询入参',
        'type' => 'object',
        'properties' => 
        array (
          'asc' => 
          array (
            'title' => 'asc',
            'description' => 'asc',
            'type' => 'boolean',
            'required' => false,
          ),
          'pageNumber' => 
          array (
            'title' => 'pageNumber',
            'description' => 'pageNumber',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'billId' => 
          array (
            'title' => 'billId',
            'description' => 'billId',
            'type' => 'string',
            'required' => false,
          ),
          'limit' => 
          array (
            'title' => 'limit',
            'description' => 'limit',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'start' => 
          array (
            'title' => 'start',
            'description' => 'start',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'orderBy' => 
          array (
            'title' => 'orderBy',
            'description' => 'orderBy',
            'type' => 'string',
            'required' => false,
          ),
          'orderDirection' => 
          array (
            'title' => 'orderDirection',
            'description' => 'orderDirection',
            'type' => 'string',
            'required' => false,
          ),
          'pageSize' => 
          array (
            'title' => 'pageSize',
            'description' => 'pageSize',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'shopId' => 
          array (
            'title' => 'shopId',
            'description' => 'shopId',
            'type' => 'string',
            'required' => false,
          ),
          'billPeriod' => 
          array (
            'title' => 'billPeriod',
            'description' => 'billPeriod',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'GeneralBillPageResult' => 
      array (
        'title' => '账单查询结果',
        'description' => '账单查询结果',
        'type' => 'object',
        'properties' => 
        array (
          'pageSize' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'total' => 
          array (
            'title' => '总数量',
            'description' => '总数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '24',
          ),
          'pageNumber' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'generalBills' => 
          array (
            'title' => '账单集合',
            'description' => '账单集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/GeneralBill',
            ),
            'required' => false,
          ),
        ),
      ),
      'Good' => 
      array (
        'description' => '货品集合',
        'type' => 'object',
        'properties' => 
        array (
          'goodName' => 
          array (
            'title' => '货品名称',
            'description' => '货品名称',
            'type' => 'string',
            'required' => false,
            'example' => '儿童学习桌',
          ),
          'productId' => 
          array (
            'title' => '商品ID',
            'description' => '商品ID',
            'type' => 'string',
            'required' => false,
            'example' => '6600****6736',
          ),
          'quantity' => 
          array (
            'title' => '数量',
            'description' => '数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'GoodsShippingNoticeCreateCmd' => 
      array (
        'title' => '提交物流入参',
        'description' => '提交物流入参',
        'type' => 'object',
        'properties' => 
        array (
          'cpCode' => 
          array (
            'title' => '公司代码',
            'description' => '公司代码',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
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
            ),
            'example' => 'SF',
          ),
          'logisticsNo' => 
          array (
            'title' => '物流单号',
            'description' => '物流单号',
            'type' => 'string',
            'required' => true,
            'example' => 'SF145****4353',
          ),
          'disputeId' => 
          array (
            'title' => '纠纷ID',
            'description' => '纠纷ID',
            'type' => 'string',
            'required' => true,
            'example' => '6693****4352',
          ),
        ),
      ),
      'GoodsShippingNoticeCreateResult' => 
      array (
        'title' => '提交物流结果',
        'description' => '提交物流结果',
        'type' => 'object',
        'properties' => 
        array (
          'result' => 
          array (
            'title' => '提交物流信息返回结果',
            'description' => '提交物流信息返回结果',
            'type' => 'string',
            'required' => false,
            'example' => 'success',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'LeavePictureList' => 
      array (
        'title' => '图片信息',
        'description' => '凭证',
        'type' => 'object',
        'properties' => 
        array (
          'picture' => 
          array (
            'title' => '图片地址',
            'description' => '图片地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg',
          ),
          'desc' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => '退款凭证',
          ),
        ),
      ),
      'LogisticsDetail' => 
      array (
        'title' => '物流详情',
        'description' => '物流详情集合',
        'type' => 'object',
        'properties' => 
        array (
          'ocurrTimeStr' => 
          array (
            'title' => '物流发生时间',
            'description' => '物流发生时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'standerdDesc' => 
          array (
            'title' => '物流描述信息',
            'description' => '物流描述信息',
            'type' => 'string',
            'required' => false,
            'example' => '已签收',
          ),
        ),
      ),
      'LogisticsOrderListResult' => 
      array (
        'title' => '物流单信息',
        'description' => '物流单信息',
        'type' => 'object',
        'properties' => 
        array (
          'logisticsOrderList' => 
          array (
            'title' => '物流集合',
            'description' => '物流集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/LogisticsOrderResult',
            ),
            'required' => false,
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'LogisticsOrderResult' => 
      array (
        'description' => '履约单',
        'type' => 'object',
        'properties' => 
        array (
          'mailNo' => 
          array (
            'title' => '物流单号',
            'description' => '物流单号',
            'type' => 'string',
            'required' => false,
            'example' => 'SF234***2345',
          ),
          'dataProviderTitle' => 
          array (
            'title' => '数据文本',
            'description' => '数据文本',
            'type' => 'string',
            'required' => false,
            'example' => '菜鸟裹裹',
          ),
          'logisticsCompanyName' => 
          array (
            'title' => '物流公司名称',
            'description' => '物流公司名称',
            'type' => 'string',
            'required' => false,
            'example' => '顺丰',
          ),
          'logisticsDetailList' => 
          array (
            'title' => '物流详情',
            'description' => '物流详情',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/LogisticsDetail',
            ),
            'required' => false,
          ),
          'goods' => 
          array (
            'title' => '货品详情',
            'description' => '货品详情',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/Good',
            ),
            'required' => false,
          ),
          'dataProvider' => 
          array (
            'title' => '数据来源',
            'description' => '数据来源',
            'type' => 'string',
            'required' => false,
            'example' => '菜鸟',
          ),
          'logisticsCompanyCode' => 
          array (
            'title' => '物流公司代码',
            'description' => '物流公司代码',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
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
            ),
            'example' => 'SF',
          ),
        ),
      ),
      'MemberAccountRequest' => 
      array (
        'title' => '会员账号请求',
        'description' => '会员账号请求',
        'type' => 'object',
        'properties' => 
        array (
          'shopId' => 
          array (
            'title' => '店铺id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
      ),
      'MemberAccountResult' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'accountNo' => 
          array (
            'title' => '已签约并绑定的支付宝代扣账号（脱敏）',
            'type' => 'array',
            'items' => 
            array (
              'title' => '已签约并绑定的支付宝代扣账号（脱敏）',
              'type' => 'string',
              'required' => false,
              'example' => 'yue***@newburn.cn',
            ),
            'required' => false,
            'example' => '"yue***@newburn.cn"',
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'Money' => 
      array (
        'description' => '账单金额',
        'type' => 'object',
        'properties' => 
        array (
          'amount' => 
          array (
            'title' => 'amount',
            'description' => 'amount',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
          'amountString' => 
          array (
            'title' => 'amountString',
            'description' => 'amountString',
            'type' => 'string',
            'required' => false,
          ),
          'cent' => 
          array (
            'title' => 'cent',
            'description' => 'cent',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
          'amountAsString' => 
          array (
            'title' => 'amountAsString',
            'description' => 'amountAsString',
            'type' => 'string',
            'required' => false,
          ),
          'currency' => 
          array (
            'title' => 'currency',
            'description' => 'currency',
            'type' => 'object',
            'properties' => 
            array (
              'symbol' => 
              array (
                'title' => 'symbol',
                'description' => 'symbol',
                'type' => 'string',
                'required' => false,
              ),
              'displayName' => 
              array (
                'title' => 'displayName',
                'description' => 'displayName',
                'type' => 'string',
                'required' => false,
              ),
              'currencyCode' => 
              array (
                'title' => 'currencyCode',
                'description' => 'currencyCode',
                'type' => 'string',
                'required' => false,
              ),
              'defaultFractionDigits' => 
              array (
                'title' => 'defaultFractionDigits',
                'description' => 'defaultFractionDigits',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
              'numericCode' => 
              array (
                'title' => 'numericCode',
                'description' => 'numericCode',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
          'positive' => 
          array (
            'title' => 'positive',
            'description' => 'positive',
            'type' => 'boolean',
            'required' => false,
          ),
          'currencyCode' => 
          array (
            'title' => 'currencyCode',
            'description' => 'currencyCode',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'OrderLineResult' => 
      array (
        'title' => '子单信息',
        'description' => '子订单集合',
        'type' => 'object',
        'properties' => 
        array (
          'productTitle' => 
          array (
            'title' => '商品名称',
            'description' => '商品名称',
            'type' => 'string',
            'required' => false,
            'example' => '儿童学习桌',
          ),
          'number' => 
          array (
            'title' => '数量',
            'description' => '数量',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
          'skuTitle' => 
          array (
            'title' => 'sku名称',
            'description' => 'sku名称',
            'type' => 'string',
            'required' => false,
            'example' => '浅绿色',
          ),
          'productId' => 
          array (
            'title' => '商品ID',
            'description' => '商品ID',
            'type' => 'string',
            'required' => false,
            'example' => '6600****6736',
          ),
          'orderId' => 
          array (
            'title' => '订单id（主订单id）',
            'description' => '订单id（主订单id）',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5457',
          ),
          'productPic' => 
          array (
            'title' => '商品图片',
            'description' => '商品图片',
            'type' => 'string',
            'required' => false,
            'example' => '//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0',
          ),
          'orderLineId' => 
          array (
            'title' => '子订单id',
            'description' => '子订单id',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5458',
          ),
          'logisticsStatus' => 
          array (
            'title' => '物流状态',
            'description' => '物流状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '未发货>待卖家发货',
              2 => '已发货>待买家收货',
              3 => '已收货>确认收货',
              6 => '部分发货',
              8 => '未创建物流订单',
            ),
            'example' => '1',
          ),
          'payFee' => 
          array (
            'title' => '子订单应付金额',
            'description' => '子订单应付金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
          'skuId' => 
          array (
            'title' => 'skuId',
            'description' => 'skuId',
            'type' => 'string',
            'required' => false,
            'example' => '6600****6737',
          ),
          'orderLineStatus' => 
          array (
            'title' => '子订单状态',
            'description' => '子订单状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '待付款',
              2 => '已付款',
              4 => '退款成功',
              6 => '交易成功',
              8 => '交易关闭',
            ),
            'example' => '1',
          ),
        ),
      ),
      'OrderListResult' => 
      array (
        'title' => '订单分页结果',
        'description' => '订单分页结果',
        'type' => 'object',
        'properties' => 
        array (
          'orderList' => 
          array (
            'title' => '订单集合',
            'description' => '订单集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderResult',
            ),
            'required' => false,
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
          'total' => 
          array (
            'title' => '总数量',
            'description' => '总数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '24',
          ),
        ),
      ),
      'OrderPageQuery' => 
      array (
        'title' => '订单分页查询入参',
        'description' => '订单分页查询入参',
        'type' => 'object',
        'properties' => 
        array (
          'pageSize' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
          'orderIdList' => 
          array (
            'title' => '主单ID集合',
            'description' => '主单ID集合',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
          'pageNumber' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'purchaseOrderId' => 
          array (
            'title' => '采购单ID',
            'description' => '采购单ID',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5696',
          ),
        ),
      ),
      'OrderProductResult' => 
      array (
        'title' => '订单商品信息',
        'description' => '商品信息',
        'type' => 'object',
        'properties' => 
        array (
          'productTitle' => 
          array (
            'title' => '商品标题',
            'description' => '商品标题',
            'type' => 'string',
            'required' => false,
            'example' => '儿童学习桌',
          ),
          'features' => 
          array (
            'title' => '商品额外信息',
            'description' => '商品额外信息',
            'type' => 'object',
            'required' => false,
          ),
          'skuTitle' => 
          array (
            'title' => 'sku标题',
            'description' => 'sku标题',
            'type' => 'string',
            'required' => false,
            'example' => '浅绿色',
          ),
          'quantity' => 
          array (
            'title' => '购买数量',
            'description' => '购买数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'productId' => 
          array (
            'title' => '商品id',
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => '6600****6736',
          ),
          'canSell' => 
          array (
            'title' => '商品是否可售卖',
            'description' => '商品是否可售卖',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'price' => 
          array (
            'title' => '商品价格(单位：分)',
            'description' => '商品价格(单位：分)',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
          'productPicUrl' => 
          array (
            'title' => '商品图片链接',
            'description' => '商品图片链接',
            'type' => 'string',
            'required' => false,
            'example' => '//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => false,
            'example' => 'PID56****2304',
          ),
          'message' => 
          array (
            'title' => '不可售原因',
            'description' => '不可售原因',
            'type' => 'string',
            'required' => false,
            'example' => '库存为0',
          ),
          'skuId' => 
          array (
            'title' => 'SKUID',
            'description' => 'SKUID',
            'type' => 'string',
            'required' => false,
            'example' => '6600****6737',
          ),
        ),
      ),
      'OrderRenderProductDTO' => 
      array (
        'title' => '渲染商品',
        'description' => '商品集合',
        'type' => 'object',
        'properties' => 
        array (
          'quantity' => 
          array (
            'title' => '购买数量',
            'description' => '购买数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => 'PID56****2304',
          ),
          'productId' => 
          array (
            'title' => '商品ID',
            'description' => '商品ID',
            'type' => 'string',
            'required' => true,
            'example' => '6600****6736',
          ),
          'skuId' => 
          array (
            'title' => 'skuID',
            'description' => 'skuID',
            'type' => 'string',
            'required' => true,
            'example' => '6600****6737',
          ),
        ),
      ),
      'OrderRenderResult' => 
      array (
        'title' => '采购单渲染返回',
        'description' => '订单不可售列表',
        'type' => 'object',
        'properties' => 
        array (
          'message' => 
          array (
            'title' => '不可售原因',
            'description' => '不可售原因',
            'type' => 'string',
            'required' => false,
            'example' => '库存为0',
          ),
          'deliveryInfoList' => 
          array (
            'title' => '履约信息',
            'description' => '履约信息',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/DeliveryInfo',
            ),
            'required' => false,
          ),
          'canSell' => 
          array (
            'title' => '是否可售',
            'description' => '是否可售',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'productList' => 
          array (
            'title' => '商品集合',
            'description' => '商品集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderProductResult',
            ),
            'required' => false,
          ),
          'extInfo' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'object',
            'required' => false,
          ),
        ),
      ),
      'OrderResult' => 
      array (
        'title' => '订单详情',
        'description' => '主单列表',
        'type' => 'object',
        'properties' => 
        array (
          'orderAmount' => 
          array (
            'title' => '订单金额（分）',
            'description' => '订单金额（分）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
          'orderLineList' => 
          array (
            'title' => '子订单集合',
            'description' => '子订单集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderLineResult',
            ),
            'required' => false,
          ),
          'orderId' => 
          array (
            'title' => '订单id（主订单id）',
            'description' => '订单id（主订单id）',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5457',
          ),
          'distributorId' => 
          array (
            'title' => '分销商ID',
            'description' => '分销商ID',
            'type' => 'string',
            'required' => false,
            'example' => '12****01',
          ),
          'orderStatus' => 
          array (
            'title' => '订单状态1=待支付，2=已支付，4=已退款关闭，6=交易成功，8=已关闭',
            'description' => '订单状态 1=待支付，2=已支付，4=已退款关闭，6=交易成功，8=已关闭',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
          'logisticsStatus' => 
          array (
            'title' => '物流状态 1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单',
            'description' => '物流状态 1=未发货 -> 等待卖家发货 2=已发货 -> 等待买家确认收货 3=已收货 -> 交易成功 4=已经退货 -> 交易失败 5=部分收货 -> 交易成功 6=部分发货中 8=还未创建物流订单',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
          'createDate' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'requestId' => 
          array (
            'title' => '请求ID',
            'description' => '请求ID',
            'type' => 'string',
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'Product' => 
      array (
        'title' => '商品',
        'description' => '商品',
        'type' => 'object',
        'properties' => 
        array (
          'categoryChain' => 
          array (
            'title' => '类目链',
            'description' => '类目链',
            'type' => 'array',
            'items' => 
            array (
              'description' => '类目',
              'required' => false,
              '$ref' => '#/components/schemas/Category',
            ),
            'required' => false,
          ),
          'images' => 
          array (
            'title' => 'images',
            'description' => 'images',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图片链接',
              'type' => 'string',
              'required' => false,
              'example' => '[]',
            ),
            'required' => false,
          ),
          'quantity' => 
          array (
            'title' => '库存',
            'description' => '库存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-1',
          ),
          'skus' => 
          array (
            'title' => 'skus',
            'description' => 'skus',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品SKU',
              'required' => false,
              '$ref' => '#/components/schemas/Sku',
            ),
            'required' => false,
          ),
          'productId' => 
          array (
            'title' => '商品id',
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822080',
          ),
          'canSell' => 
          array (
            'title' => '商品是否可售，计算值',
            'description' => '商品是否可售，计算值',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'productSpecs' => 
          array (
            'title' => 'productSpecs',
            'description' => '商品规格',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品规格',
              'required' => false,
              '$ref' => '#/components/schemas/ProductSpec',
            ),
            'required' => false,
          ),
          'fuzzyQuantity' => 
          array (
            'title' => '模糊库存',
            'description' => '模糊库存',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '有货' => '有货',
              '库存紧张' => '库存紧张',
              '无货' => '无货',
            ),
            'example' => '有货',
          ),
          'productStatus' => 
          array (
            'title' => '商品状态',
            'description' => '商品状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Online',
          ),
          'taxCode' => 
          array (
            'title' => '税码',
            'description' => '税码',
            'type' => 'string',
            'required' => false,
            'example' => '3040203000000000000',
          ),
          'title' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => false,
            'example' => '发财树',
          ),
          'soldQuantity' => 
          array (
            'title' => '销量',
            'description' => '销量',
            'type' => 'string',
            'required' => false,
            'example' => '100+',
          ),
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '110000',
          ),
          'picUrl' => 
          array (
            'title' => '商品主图',
            'description' => '商品主图',
            'type' => 'string',
            'required' => false,
            'example' => 'https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg',
          ),
          'taxRate' => 
          array (
            'title' => '税率',
            'description' => '税率',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
          'categoryLeafId' => 
          array (
            'title' => '类目id',
            'description' => '类目id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '201856501',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'descPath' => 
          array (
            'title' => '商品详情链接',
            'description' => '商品详情链接',
            'type' => 'string',
            'required' => false,
            'example' => 'https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34',
          ),
          'shopId' => 
          array (
            'title' => '渠道店铺id',
            'description' => '渠道店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '21000017',
          ),
          'productType' => 
          array (
            'title' => '商品类型',
            'description' => '商品类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
            'enum' => 
            array (
              0 => 'Normal',
              1 => 'Virtual',
            ),
          ),
          'properties' => 
          array (
            'title' => '商品属性',
            'description' => '商品属性',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品属性',
              'required' => false,
              '$ref' => '#/components/schemas/ProductProperty',
            ),
            'required' => false,
          ),
          'brandName' => 
          array (
            'title' => '品牌名称',
            'description' => '品牌名称',
            'type' => 'string',
            'example' => 'Apple/苹果',
          ),
          'extendProperties' => 
          array (
            'title' => '商品扩展属性',
            'description' => '商品扩展属性',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品扩展属性',
              '$ref' => '#/components/schemas/ProductExtendProperty',
            ),
          ),
          'lmItemId' => 
          array (
            'title' => 'LM商品id',
            'description' => 'LM商品id',
            'type' => 'string',
            'example' => '21000017-4580902812',
          ),
        ),
      ),
      'ProductDTO' => 
      array (
        'title' => '商品信息',
        'description' => '商品集合',
        'type' => 'object',
        'properties' => 
        array (
          'quantity' => 
          array (
            'title' => '购买数量',
            'description' => '购买数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => '56****2304',
          ),
          'productId' => 
          array (
            'title' => '商品ID',
            'description' => '商品ID',
            'type' => 'string',
            'required' => true,
            'example' => '6600****6736',
          ),
          'price' => 
          array (
            'title' => '商品价格(单位：分)',
            'description' => '商品价格(单位：分)',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
          'skuId' => 
          array (
            'title' => 'SKUID',
            'description' => 'SKUID',
            'type' => 'string',
            'required' => true,
            'example' => '6600****6737',
          ),
        ),
      ),
      'ProductExtendProperty' => 
      array (
        'title' => '商品扩展属性',
        'description' => '商品扩展属性',
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => '属性key',
            'description' => '属性key',
            'type' => 'string',
            'example' => 'ss_picture_scene',
          ),
          'value' => 
          array (
            'title' => '属性值',
            'description' => '属性值',
            'type' => 'string',
            'example' => '场景图',
          ),
        ),
      ),
      'ProductPageResult' => 
      array (
        'title' => '分页查询商品结果',
        'description' => '分页查询商品结果',
        'type' => 'object',
        'properties' => 
        array (
          'pageSize' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
          'total' => 
          array (
            'title' => '总数量',
            'description' => '总数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '24',
          ),
          'pageNumber' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'products' => 
          array (
            'title' => '商品集合',
            'description' => '商品集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/Product',
            ),
            'required' => false,
          ),
        ),
        'required' => true,
      ),
      'ProductPrice' => 
      array (
        'description' => '商品价格',
        'type' => 'object',
        'properties' => 
        array (
          'fundAmountMoney' => 
          array (
            'title' => '应付金额',
            'description' => '应付金额',
            'type' => 'string',
            'required' => false,
            'example' => '120',
          ),
        ),
      ),
      'ProductProperty' => 
      array (
        'title' => '商品属性',
        'description' => '商品属性',
        'type' => 'object',
        'properties' => 
        array (
          'text' => 
          array (
            'title' => '属性文本',
            'description' => '属性文本',
            'type' => 'string',
            'required' => false,
            'example' => '颜色',
          ),
          'values' => 
          array (
            'title' => '属性值集合',
            'description' => '属性值集合',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '白色',
            ),
            'required' => false,
          ),
        ),
      ),
      'ProductQuery' => 
      array (
        'title' => '商品查询参数',
        'description' => '商品查询参数',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '110000',
          ),
          'distributorShopId' => 
          array (
            'title' => '分销店铺id',
            'description' => '分销店铺id',
            'type' => 'string',
            'required' => true,
            'example' => '22000009',
          ),
        ),
      ),
      'ProductSaleInfo' => 
      array (
        'title' => '商品',
        'description' => '商品',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'quantity' => 
          array (
            'title' => '库存',
            'description' => '库存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
          'skus' => 
          array (
            'title' => 'sku集合',
            'description' => 'sku集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/SkuSaleInfo',
            ),
            'required' => false,
          ),
          'productId' => 
          array (
            'title' => '商品id',
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822080',
          ),
          'canSell' => 
          array (
            'title' => '商品是否可售，计算值',
            'description' => '商品是否可售，计算值',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'fuzzyQuantity' => 
          array (
            'title' => '模糊库存',
            'description' => '模糊库存',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '有货' => '有货',
              '库存紧张' => '库存紧张',
              '无货' => '无货',
            ),
            'example' => '有货',
          ),
          'productStatus' => 
          array (
            'title' => '商品状态',
            'description' => '商品状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Online',
          ),
          'shopId' => 
          array (
            'title' => '渠道店铺id',
            'description' => '渠道店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '21000017',
          ),
          'title' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => false,
            'example' => '发财树',
          ),
          'lmItemId' => 
          array (
            'title' => 'LM商品id',
            'description' => 'LM商品id',
            'type' => 'string',
            'example' => '21000017-4580902812',
          ),
        ),
      ),
      'ProductSaleInfoListQuery' => 
      array (
        'title' => '商品销售信息查询参数',
        'description' => '商品销售信息查询参数',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码（建议为五级乡镇/街道级地址code）',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'productIds' => 
          array (
            'title' => '查询商品id集合',
            'description' => '查询商品id集合',
            'type' => 'array',
            'items' => 
            array (
              'title' => '查询商品id集合',
              'description' => '查询商品id集合',
              'type' => 'string',
              'required' => true,
              'example' => '660460842235822080',
            ),
            'required' => true,
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => '22000009',
          ),
        ),
        'required' => true,
      ),
      'ProductSaleInfoListResult' => 
      array (
        'title' => '商品销售信息查询结果',
        'description' => '商品销售信息查询结果',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'productSaleInfos' => 
          array (
            'title' => '商品销售信息',
            'description' => '商品销售信息',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/ProductSaleInfo',
            ),
            'required' => false,
          ),
        ),
      ),
      'ProductSaleInfoQuery' => 
      array (
        'title' => '商品销售信息查询参数',
        'description' => '商品销售信息查询参数',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '110000',
          ),
          'distributorShopId' => 
          array (
            'title' => '分销店铺id',
            'description' => '分销店铺id',
            'type' => 'string',
            'required' => true,
            'example' => '22000009',
          ),
        ),
      ),
      'ProductSpec' => 
      array (
        'title' => '商品规格',
        'description' => '商品规格(销售属性)',
        'type' => 'object',
        'properties' => 
        array (
          'keyId' => 
          array (
            'title' => '规格',
            'description' => '规格',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
          'key' => 
          array (
            'title' => '规格key名称',
            'description' => '规格key名称',
            'type' => 'string',
            'required' => false,
            'example' => '颜色分类',
          ),
          'values' => 
          array (
            'title' => '规则key取值',
            'description' => '规则key取值',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/ProductSpecValue',
            ),
            'required' => false,
          ),
        ),
      ),
      'ProductSpecValue' => 
      array (
        'title' => '商品规格值',
        'description' => '商品规格值',
        'type' => 'object',
        'properties' => 
        array (
          'value' => 
          array (
            'title' => '规格值',
            'description' => '规格值',
            'type' => 'string',
            'required' => false,
            'example' => '白色',
          ),
          'valueId' => 
          array (
            'title' => '规则值id',
            'description' => '规则值id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
      ),
      'PurchaseOrderCreateCmd' => 
      array (
        'title' => '采购单创建入参',
        'description' => '采购单创建入参',
        'type' => 'object',
        'properties' => 
        array (
          'outerPurchaseOrderId' => 
          array (
            'title' => '分销商业务中的订单ID，分销商自定义',
            'description' => '分销商业务中的订单ID，分销商自定义。',
            'type' => 'string',
            'required' => true,
            'example' => 'outer123456',
          ),
          'buyerId' => 
          array (
            'title' => '分销商业务中的用户ID，分销商自定义。',
            'description' => '分销商业务中的用户ID，分销商自定义(建议不同的买家分配不同的买家ID)',
            'type' => 'string',
            'required' => true,
            'example' => 'buyer123456',
          ),
          'deliveryAddress' => 
          array (
            'title' => '地址信息',
            'description' => '地址信息',
            'required' => true,
            '$ref' => '#/components/schemas/AddressInfo',
          ),
          'productList' => 
          array (
            'title' => '商品集合',
            'description' => '商品集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/ProductDTO',
            ),
            'required' => true,
            'minItems' => 1,
          ),
          'extInfo' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'object',
            'required' => false,
          ),
        ),
      ),
      'PurchaseOrderCreateResult' => 
      array (
        'title' => '采购单创建返回',
        'description' => '采购单创建返回',
        'type' => 'object',
        'properties' => 
        array (
          'purchaseOrderId' => 
          array (
            'title' => '采购单ID',
            'description' => '采购单ID',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5696',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'PurchaseOrderRenderQuery' => 
      array (
        'title' => '采购单渲染入参',
        'description' => '采购单渲染入参',
        'type' => 'object',
        'properties' => 
        array (
          'buyerId' => 
          array (
            'title' => '分销真实买家ID',
            'description' => '分销真实买家ID(建议不同的买家分配不同的买家ID)',
            'type' => 'string',
            'required' => true,
            'example' => 'test1234567',
          ),
          'deliveryAddress' => 
          array (
            'title' => '地址信息',
            'description' => '地址信息',
            'required' => true,
            '$ref' => '#/components/schemas/AddressInfo',
          ),
          'productList' => 
          array (
            'title' => '商品集合',
            'description' => '商品集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderRenderProductDTO',
            ),
            'required' => true,
            'minItems' => 1,
          ),
          'extInfo' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'object',
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'PurchaseOrderRenderResult' => 
      array (
        'title' => '采购单渲染结果',
        'description' => '采购单渲染结果',
        'type' => 'object',
        'properties' => 
        array (
          'addressList' => 
          array (
            'title' => '地址集合',
            'description' => '地址集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/AddressInfo',
            ),
            'required' => false,
          ),
          'canSell' => 
          array (
            'title' => '是否可售',
            'description' => '是否可售',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
          'orderList' => 
          array (
            'title' => '可售主单集合',
            'description' => '可售主单集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderRenderResult',
            ),
            'required' => false,
          ),
          'unsellableOrderList' => 
          array (
            'title' => '不可售主单集合',
            'description' => '不可售主单集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/OrderRenderResult',
            ),
            'required' => false,
          ),
          'message' => 
          array (
            'title' => '不可售原因',
            'description' => '不可售原因',
            'type' => 'string',
            'required' => false,
            'example' => '库存为0',
          ),
          'extInfo' => 
          array (
            'title' => '扩展信息',
            'description' => '扩展信息',
            'type' => 'object',
            'required' => false,
          ),
        ),
      ),
      'PurchaseOrderStatusResult' => 
      array (
        'title' => '采购单状态',
        'description' => '采购单状态',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'status' => 
          array (
            'title' => '采购单状态',
            'description' => '采购单状态',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'RefundFeeData' => 
      array (
        'title' => '退费金额信息',
        'description' => '退费区间',
        'type' => 'object',
        'properties' => 
        array (
          'minRefundFee' => 
          array (
            'title' => '最小金额（分）',
            'description' => '最小金额（分）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
          'maxRefundFee' => 
          array (
            'title' => '最大金额（分）',
            'description' => '最大金额（分）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'RefundOrderCmd' => 
      array (
        'title' => '创建逆向',
        'description' => '创建逆向',
        'type' => 'object',
        'properties' => 
        array (
          'applyRefundCount' => 
          array (
            'title' => '退货数量',
            'description' => '退货数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'bizClaimType' => 
          array (
            'title' => '退款类型',
            'description' => '退款类型
1 仅退款 
3 退货退款',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'goodsStatus' => 
          array (
            'title' => '货物状态',
            'description' => '货物状态
4: 未发货 
1: 未收到货
2: 已收到货',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'leaveMessage' => 
          array (
            'title' => '留言',
            'description' => '留言',
            'type' => 'string',
            'required' => false,
            'example' => '不想要了',
          ),
          'applyReasonTextId' => 
          array (
            'title' => '退款原因ID',
            'description' => '退款原因ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '47821',
          ),
          'applyReasonTips' => 
          array (
            'title' => '退款原因文本',
            'description' => '退款原因文本',
            'type' => 'string',
            'required' => false,
            'example' => '不想要了',
          ),
          'applyRefundFee' => 
          array (
            'title' => '申请退款金额（分）',
            'description' => '申请退款金额（分）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '100',
          ),
          'leavePictureLists' => 
          array (
            'title' => '图片集合',
            'description' => '图片集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/LeavePictureList',
            ),
            'required' => false,
          ),
          'orderLineId' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => true,
            'example' => '6692****5458',
          ),
        ),
      ),
      'RefundOrderResult' => 
      array (
        'title' => '逆向操作结果',
        'description' => '逆向操作结果',
        'type' => 'object',
        'properties' => 
        array (
          'orderLineId' => 
          array (
            'title' => '当前发起逆向的子分销订单号',
            'description' => '当前发起逆向的子分销订单号',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5458',
          ),
          'disputeId' => 
          array (
            'title' => '纠纷id',
            'description' => '纠纷id',
            'type' => 'string',
            'required' => false,
            'example' => '6693****4352',
          ),
          'disputeStatus' => 
          array (
            'title' => '逆向的状态',
            'description' => '逆向的状态
1-退货待处理
2-待买家退货
3-待商家收货
4-退款关闭
5-退款成功
6-已拒绝退款
17-取消退款中',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'RefundReason' => 
      array (
        'title' => '逆向理由',
        'description' => '退款理由',
        'type' => 'object',
        'properties' => 
        array (
          'reasonTextId' => 
          array (
            'title' => '理由文本id',
            'description' => '理由文本id',
            'type' => 'string',
            'required' => false,
            'example' => '47683',
          ),
          'proofRequired' => 
          array (
            'title' => '是否要求上传凭证',
            'description' => '是否要求上传凭证',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'reasonTips' => 
          array (
            'title' => '理由文本',
            'description' => '理由文本',
            'type' => 'string',
            'required' => false,
            'example' => '不想要了',
          ),
          'refundDescRequired' => 
          array (
            'title' => '是否要求留言',
            'description' => '是否要求留言',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'RefundRenderCmd' => 
      array (
        'title' => '逆向创建入参',
        'description' => '逆向创建入参',
        'type' => 'object',
        'properties' => 
        array (
          'bizClaimType' => 
          array (
            'title' => '退款类型 1 仅退款，3 退货退款',
            'description' => '退款类型 1 仅退款，3 退货退款',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'goodsStatus' => 
          array (
            'title' => '货物状态 4: 未发货, 1: 未收到货, 2: 已收到货',
            'description' => '货物状态 4: 未发货, 1: 未收到货, 2: 已收到货',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '4',
          ),
          'orderLineId' => 
          array (
            'title' => '子分销订单ID',
            'description' => '子分销订单ID',
            'type' => 'string',
            'required' => true,
            'example' => '6692****5458',
          ),
        ),
      ),
      'RefundRenderResult' => 
      array (
        'title' => '逆向渲染结果',
        'description' => '逆向渲染结果',
        'type' => 'object',
        'properties' => 
        array (
          'maxRefundFeeData' => 
          array (
            'required' => false,
            '$ref' => '#/components/schemas/DistributionMaxRefundFee',
          ),
          'refundReasonList' => 
          array (
            'title' => '逆向理由集合',
            'description' => '逆向理由集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/RefundReason',
            ),
            'required' => false,
          ),
          'bizClaimType' => 
          array (
            'title' => '支持的订单退货方式',
            'description' => '支持的订单退货方式',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'orderLineId' => 
          array (
            'title' => '子分销订单号',
            'description' => '子分销订单号',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5458',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'RefundResult' => 
      array (
        'title' => '逆向信息',
        'description' => '逆向信息',
        'type' => 'object',
        'properties' => 
        array (
          'refundFee' => 
          array (
            'title' => '退费金额',
            'description' => '退费金额',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
          'refundFeeData' => 
          array (
            'title' => '退费区间',
            'description' => '退费区间',
            'required' => false,
            '$ref' => '#/components/schemas/RefundFeeData',
          ),
          'applyDisputeDesc' => 
          array (
            'title' => '当前买家申请退款说明',
            'description' => '当前买家申请退款说明',
            'type' => 'string',
            'required' => false,
            'example' => '多拍不想要',
          ),
          'refunderTel' => 
          array (
            'title' => '退货联系方式',
            'description' => '退货联系方式',
            'type' => 'string',
            'required' => false,
            'example' => '182****1334',
          ),
          'bizClaimType' => 
          array (
            'title' => '订单退货方式 1， 标识仅退款，3，标识退货退款',
            'description' => '订单退货方式 
1-标识仅退款
3-标识退货退款',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'disputeDesc' => 
          array (
            'title' => '申请逆向描述',
            'description' => '申请逆向描述',
            'type' => 'string',
            'required' => false,
            'example' => '多拍不想要',
          ),
          'sellerRefuseReason' => 
          array (
            'title' => '商家拒绝原因',
            'description' => '商家拒绝原因',
            'type' => 'string',
            'required' => false,
            'example' => '商品没问题，买家举证无效',
          ),
          'orderId' => 
          array (
            'title' => '主单ID',
            'description' => '主单ID',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5457',
          ),
          'refunderName' => 
          array (
            'title' => '退货收货人',
            'description' => '退货收货人',
            'type' => 'string',
            'required' => false,
            'example' => '赵先生',
          ),
          'applyReason' => 
          array (
            'title' => '申请理由',
            'description' => '申请理由',
            'required' => false,
            '$ref' => '#/components/schemas/ApplyReason',
          ),
          'refunderAddress' => 
          array (
            'title' => '商家退货地址',
            'description' => '商家退货地址',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云云谷',
          ),
          'refunderZipCode' => 
          array (
            'title' => '退货地址邮编',
            'description' => '退货地址邮编',
            'type' => 'string',
            'required' => false,
            'example' => '331001',
          ),
          'disputeEndTime' => 
          array (
            'title' => '逆向结束时间',
            'description' => '逆向结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-15T19:23:59.000+08:00',
          ),
          'sellerRefuseAgreementMessage' => 
          array (
            'title' => '卖家拒绝的留言说明',
            'description' => '卖家拒绝的留言说明',
            'type' => 'string',
            'required' => false,
            'example' => '不同意退款',
          ),
          'disputeId' => 
          array (
            'title' => '逆向单ID',
            'description' => '逆向单ID',
            'type' => 'string',
            'required' => false,
            'example' => '6693****4352',
          ),
          'disputeStatus' => 
          array (
            'title' => '逆向单状态',
            'description' => '逆向的状态 
1-退货待处理 
2-待买家退货 
3-待商家收货 
4-退款关闭 
5-退款成功 
6-已拒绝退款 
17-取消退款中',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'returnGoodLogisticsStatus' => 
          array (
            'title' => '退货物流状态',
            'description' => '退货物流状态
0-未退货
1-等待揽收
2-快件已揽收
3-物流走件中
4-派送中
5-已签收
6-签收失败',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
          'orderLogisticsStatus' => 
          array (
            'title' => '订单物流状态',
            'description' => '订单物流状态
1-未发货 -> 等待卖家发货
2-已发货 -> 等待买家确认收货
3-已收货 -> 交易成功
6-部分发货中
8-还未创建物流订单',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
          'disputeCreateTime' => 
          array (
            'title' => '逆向创建时间',
            'description' => '逆向创建时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-15T19:23:59.000+08:00',
          ),
          'orderLineId' => 
          array (
            'title' => '子订单ID',
            'description' => '子订单ID',
            'type' => 'string',
            'required' => false,
            'example' => '6692****5458',
          ),
          'sellerAgreeMsg' => 
          array (
            'title' => '卖家同意退货说明,真实的退货地址会在这个字段进行返回。',
            'description' => '卖家同意退货说明,真实的退货地址会在这个字段进行返回。',
            'type' => 'string',
            'required' => false,
            'example' => '同意退款',
          ),
          'requestId' => 
          array (
            'title' => '请求ID',
            'description' => '请求ID',
            'type' => 'string',
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
        ),
      ),
      'Shop' => 
      array (
        'title' => '店铺详情',
        'description' => '店铺详情',
        'type' => 'object',
        'properties' => 
        array (
          'endDate' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'distributorId' => 
          array (
            'title' => '分销商id',
            'description' => '分销商id',
            'type' => 'string',
            'required' => false,
            'example' => '12****09',
          ),
          'shopName' => 
          array (
            'title' => '店铺名称',
            'description' => '店铺名称',
            'type' => 'string',
            'required' => false,
            'example' => '儿童分销店铺',
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'description' => '店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '22****09',
          ),
          'shopType' => 
          array (
            'title' => '店铺类型',
            'description' => '店铺类型',
            'type' => 'string',
            'required' => false,
            'example' => 'DistributorQYG',
          ),
          'cooperationShops' => 
          array (
            'title' => '合作方店铺',
            'description' => '合作方店铺',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CooperationShop',
            ),
            'required' => false,
            'example' => '12***01',
          ),
          'startDate' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'status' => 
          array (
            'title' => '店铺状态',
            'description' => '店铺状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Working',
          ),
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'example' => '48A34399-A72C-1E23-8388-7E63****E927',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'example' => 'PID56****2304',
          ),
        ),
      ),
      'ShopCreateRequest' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'description' => 
          array (
            'title' => '店铺描述',
            'type' => 'string',
            'required' => true,
            'example' => '店铺描述',
            'maxLength' => 500,
          ),
          'shopName' => 
          array (
            'title' => '店铺名称',
            'type' => 'string',
            'required' => true,
            'example' => '店铺名称',
            'maxLength' => 100,
          ),
          'afterSaleDingTalkId' => 
          array (
            'title' => '售后钉钉号',
            'type' => 'string',
            'required' => false,
            'example' => '12344335',
          ),
          'operatorDingTalkId' => 
          array (
            'title' => '运营钉钉号',
            'type' => 'string',
            'required' => true,
            'example' => '12344335',
          ),
          'preSaleDingTalkId' => 
          array (
            'title' => '售前钉钉号',
            'type' => 'string',
            'required' => false,
            'example' => '12344335',
          ),
        ),
      ),
      'ShopCreateResult' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'shopStatus' => 
          array (
            'title' => '店铺状态',
            'type' => 'string',
            'required' => false,
            'example' => 'WORKING',
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'ShopPageDataResult' => 
      array (
        'title' => '店铺分页结果',
        'description' => '店铺分页结果',
        'type' => 'object',
        'properties' => 
        array (
          'endDate' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'shopName' => 
          array (
            'title' => '店铺名称',
            'description' => '店铺名称',
            'type' => 'string',
            'required' => false,
            'example' => '儿童座椅分销店铺',
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'description' => '店铺id',
            'type' => 'string',
            'required' => false,
            'example' => '22****09',
          ),
          'shopType' => 
          array (
            'title' => '店铺类型',
            'description' => '店铺类型',
            'type' => 'string',
            'required' => false,
            'example' => 'DistributorQYG',
          ),
          'cooperationShops' => 
          array (
            'title' => '合作方店铺',
            'description' => '合作方店铺',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CooperationShop',
            ),
            'required' => false,
            'example' => '12****01',
          ),
          'startDate' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-11T12:22:24.000+08:00',
          ),
          'status' => 
          array (
            'title' => '店铺状态',
            'description' => '店铺状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Working',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'example' => 'PID56****2304',
          ),
        ),
      ),
      'ShopPageResult' => 
      array (
        'title' => '店铺分页查询返回',
        'description' => '店铺分页查询返回',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '841471F6-5D61-1331-8C38-2****B55',
          ),
          'total' => 
          array (
            'title' => '总数量',
            'description' => '总数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '24',
          ),
          'shopList' => 
          array (
            'title' => '店铺集合',
            'description' => '店铺集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/ShopPageDataResult',
            ),
            'required' => false,
          ),
        ),
      ),
      'ShopStatusChangeRequest' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'shopStatus' => 
          array (
            'title' => '店铺状态',
            'type' => 'string',
            'required' => true,
            'example' => 'WORKING',
          ),
          'shopId' => 
          array (
            'title' => '店铺id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
      ),
      'ShopStatusChangeResult' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'operate' => 
          array (
            'title' => '操作是否成功',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'Sku' => 
      array (
        'description' => 'SKU列表',
        'type' => 'object',
        'properties' => 
        array (
          'quantity' => 
          array (
            'title' => '可售库存',
            'description' => '可售库存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-1',
          ),
          'productId' => 
          array (
            'title' => '商品Id',
            'description' => '商品Id',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822080',
          ),
          'canSell' => 
          array (
            'title' => 'sku是否可售',
            'description' => 'sku是否可售',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'fuzzyQuantity' => 
          array (
            'title' => '模糊可售库存',
            'description' => '模糊可售库存',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '有货' => '有货',
              '库存紧张' => '库存紧张',
              '无货' => '无货',
            ),
            'example' => '有货',
          ),
          'skuStatus' => 
          array (
            'title' => 'sku管控状态',
            'description' => 'sku管控状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Online',
          ),
          'skuSpecsCode' => 
          array (
            'title' => 'sku销售规格，辅助前端来筛选',
            'description' => 'sku销售规格，辅助前端来筛选',
            'type' => 'string',
            'required' => false,
            'example' => '颜色分类:天蓝色',
          ),
          'platformPrice' => 
          array (
            'title' => '平台当前售价, 单位分',
            'description' => '平台当前售价, 单位分',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '999900',
          ),
          'title' => 
          array (
            'title' => 'sku标题',
            'description' => 'sku标题',
            'type' => 'string',
            'required' => false,
            'example' => '天蓝色',
          ),
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '110000',
          ),
          'picUrl' => 
          array (
            'title' => 'sku图片',
            'description' => 'sku图片',
            'type' => 'string',
            'required' => false,
            'example' => 'https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png',
          ),
          'markPrice' => 
          array (
            'title' => '划线价, 单位分',
            'description' => '划线价, 单位分',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '999900',
          ),
          'skuSpecs' => 
          array (
            'title' => 'sku',
            'description' => 'sku',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/SkuSpec',
            ),
            'required' => false,
          ),
          'price' => 
          array (
            'title' => '售价,单位分',
            'description' => '售价,单位分',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '19800',
          ),
          'shopId' => 
          array (
            'title' => '店铺Id',
            'description' => '店铺Id',
            'type' => 'string',
            'required' => false,
            'example' => '21000017',
          ),
          'skuId' => 
          array (
            'title' => 'skuId',
            'description' => 'skuId',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822081',
          ),
          'barcode' => 
          array (
            'title' => '69码',
            'description' => '69码',
            'type' => 'string',
            'example' => '6922454329176',
          ),
          'rankValue' => 
          array (
            'title' => 'SKU排序',
            'description' => 'SKU排序',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
        ),
      ),
      'SkuQueryParam' => 
      array (
        'title' => '查询商品参数',
        'description' => '查询商品参数',
        'type' => 'object',
        'properties' => 
        array (
          'productId' => 
          array (
            'title' => '商品id',
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'example' => '660460842235822080',
          ),
          'skuId' => 
          array (
            'title' => 'skuid',
            'description' => 'skuid',
            'type' => 'string',
            'required' => true,
            'example' => '660460842235822081',
          ),
        ),
      ),
      'SkuSaleInfo' => 
      array (
        'title' => 'SKU详细信息',
        'description' => 'SKU详细信息',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'markPrice' => 
          array (
            'title' => '划线价, 单位分',
            'description' => '划线价, 单位分',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '999900',
          ),
          'quantity' => 
          array (
            'title' => '可售库存',
            'description' => '可售库存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-1',
          ),
          'productId' => 
          array (
            'title' => '商品Id',
            'description' => '商品Id',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822080',
          ),
          'canSell' => 
          array (
            'title' => 'sku是否可售',
            'description' => 'sku是否可售',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'price' => 
          array (
            'title' => '售价,单位分',
            'description' => '售价,单位分',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '19800',
          ),
          'fuzzyQuantity' => 
          array (
            'title' => '模糊可售库存',
            'description' => '模糊可售库存',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '有货' => '有货',
              '库存紧张' => '库存紧张',
              '无货' => '无货',
            ),
            'example' => '有货',
          ),
          'skuStatus' => 
          array (
            'title' => 'sku管控状态',
            'description' => 'sku管控状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Online',
          ),
          'shopId' => 
          array (
            'title' => '店铺Id',
            'description' => '店铺Id',
            'type' => 'string',
            'required' => false,
            'example' => '21000017',
          ),
          'title' => 
          array (
            'title' => 'sku标题',
            'description' => 'sku标题',
            'type' => 'string',
            'required' => false,
            'example' => '天蓝色',
          ),
          'skuId' => 
          array (
            'title' => 'skuId',
            'description' => 'skuId',
            'type' => 'string',
            'required' => false,
            'example' => '660460842235822081',
          ),
        ),
      ),
      'SkuSaleInfoListQuery' => 
      array (
        'title' => 'SKU销售信息查询参数',
        'description' => 'SKU销售信息查询参数',
        'type' => 'object',
        'properties' => 
        array (
          'divisionCode' => 
          array (
            'title' => '区域码',
            'description' => '区域码（建议为五级乡镇/街道级地址 code）',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'purchaserId' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => '21000017',
          ),
          'skuQueryParams' => 
          array (
            'title' => '查询商品参数',
            'description' => '查询商品参数',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/SkuQueryParam',
            ),
            'required' => true,
          ),
        ),
        'required' => true,
      ),
      'SkuSaleInfoListResult' => 
      array (
        'title' => '商品销售信息查询结果',
        'description' => '商品销售信息查询结果',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => '接口请求requestId',
            'description' => '接口请求requestId',
            'type' => 'string',
            'required' => false,
            'example' => '3239281273464326823',
          ),
          'skuSaleInfos' => 
          array (
            'title' => 'sku库存集合',
            'description' => 'sku库存集合',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/SkuSaleInfo',
            ),
            'required' => false,
          ),
        ),
      ),
      'SkuSpec' => 
      array (
        'title' => 'sku规格',
        'description' => 'sku规格(销售属性)',
        'type' => 'object',
        'properties' => 
        array (
          'keyId' => 
          array (
            'title' => '规格id',
            'description' => '规格id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
          'valueId' => 
          array (
            'title' => '规格值id',
            'description' => '规格值id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
          'value' => 
          array (
            'title' => '规格值',
            'description' => '规格值',
            'type' => 'string',
            'required' => false,
            'example' => '天蓝色',
          ),
          'key' => 
          array (
            'title' => '规格键',
            'description' => '规格键',
            'type' => 'string',
            'required' => false,
            'example' => '颜色分类',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'ListPurchaserShops' => 
    array (
      'summary' => '获取采购方店铺列表。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'pageNumber',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '请求页码',
            'description' => '请求页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
          'examples' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '每页数量范围',
            'description' => '每页数量范围',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '10',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '店铺列表信息',
            '$ref' => '#/components/schemas/ShopPageResult',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"total\\": 24,\\n  \\"shopList\\": [\\n    {\\n      \\"endDate\\": \\"2023-09-01 00:00:00\\",\\n      \\"shopName\\": \\"儿童座椅分销店铺\\",\\n      \\"shopId\\": \\"22****09\\",\\n      \\"shopType\\": \\"DistributorQYG\\",\\n      \\"cooperationShops\\": [\\n        {\\n          \\"shopId\\": \\"\\",\\n          \\"cooperationCompanyId\\": \\"\\",\\n          \\"cooperationShopId\\": \\"\\"\\n        }\\n      ],\\n      \\"startDate\\": \\"2023-09-01 00:00:00\\",\\n      \\"status\\": \\"Working\\",\\n      \\"purchaserId\\": \\"PID56****2304\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取采购方店铺列表',
      'description' => '获取采购方店铺列表。',
      'responseParamsDescription' => '```
{
  "requestId": "AEE64C1D-7FBD-1F10-B8C7-12A854A1D6B4",
  "total": 6,
  "shopList": [
    {
      "shopId": "22000019",
      "purchaserId": "PID22000019",
      "shopName": "店铺名称001",
      "cooperationShops": [
        {
          "shopId": "22000019",
          "cooperationCompanyId": "11200003",
          "cooperationShopId": "21000026"
        }
      ],
      "shopType": "DistributorQYG",
      "startDate": null,
      "endDate": null,
      "status": "WORKING"
    },
    {
      "shopId": "22000018",
      "purchaserId": "PID22000018",
      "shopName": "店铺名称002",
      "cooperationShops": [],
      "shopType": "DistributorQYG",
      "startDate": null,
      "endDate": null,
      "status": "APPROVED"
    },
    {
      "shopId": "22000017",
      "purchaserId": "PID22000017",
      "shopName": "分销店铺0817",
      "cooperationShops": [],
      "shopType": "DistributorQYG",
      "startDate": null,
      "endDate": null,
      "status": "TO_BE_APPROVED"
    }
  ]
}',
    ),
    'GetPurchaserShop' => 
    array (
      'summary' => '获取采购方店铺。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops/{purchaserId}',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'purchaserId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => 'PID22000016',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '店铺详情',
            'description' => '店铺详情',
            '$ref' => '#/components/schemas/Shop',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"endDate\\": \\"2024-09-09 00:00:00\\",\\n  \\"distributorId\\": \\"12****09\\",\\n  \\"shopName\\": \\"儿童分销店铺\\",\\n  \\"shopId\\": \\"22****09\\",\\n  \\"shopType\\": \\"DistributorQYG\\",\\n  \\"cooperationShops\\": [\\n    {\\n      \\"shopId\\": \\"\\",\\n      \\"cooperationCompanyId\\": \\"\\",\\n      \\"cooperationShopId\\": \\"\\"\\n    }\\n  ],\\n  \\"startDate\\": \\"2023-09-09 00:00:00\\",\\n  \\"status\\": \\"Working\\",\\n  \\"requestId\\": \\"48A34399-A72C-1E23-8388-7E63****E927\\",\\n  \\"purchaserId\\": \\"PID56****2304\\"\\n}","type":"json"}]',
      'title' => '获取采购方店铺',
      'description' => '获取采购方店铺。',
    ),
    'GetSelectionProduct' => 
    array (
      'summary' => '查询选品池商品详情。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'productId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'example' => '660460842235822080',
          ),
          'examples' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'purchaserId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => 'PID22000009',
          ),
          'examples' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'divisionCode',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '区域码（建议四级乡镇/街道级地址code）',
            'description' => '区域码（建议为五级乡镇/街道级地址code）',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '商品详情',
            '$ref' => '#/components/schemas/Product',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"categoryChain\\": [\\n    {\\n      \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n      \\"isLeaf\\": false,\\n      \\"level\\": 2,\\n      \\"categoryId\\": 201792301,\\n      \\"parentId\\": 50016422\\n    }\\n  ],\\n  \\"images\\": [\\n    \\"\\"\\n  ],\\n  \\"quantity\\": -1,\\n  \\"skus\\": [\\n    {\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"skuSpecsCode\\": \\"颜色分类:天蓝色\\",\\n      \\"platformPrice\\": 999900,\\n      \\"title\\": \\"天蓝色\\",\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"picUrl\\": \\"https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png\\",\\n      \\"markPrice\\": 999900,\\n      \\"skuSpecs\\": [\\n        {\\n          \\"keyId\\": 1000,\\n          \\"valueId\\": 1000,\\n          \\"value\\": \\"天蓝色\\",\\n          \\"key\\": \\"颜色分类\\"\\n        }\\n      ],\\n      \\"price\\": 19800,\\n      \\"shopId\\": \\"21000017\\",\\n      \\"skuId\\": \\"660460842235822081\\",\\n      \\"barcode\\": \\"6922454329176\\",\\n      \\"rankValue\\": 3\\n    }\\n  ],\\n  \\"productId\\": \\"660460842235822080\\",\\n  \\"canSell\\": true,\\n  \\"productSpecs\\": [\\n    {\\n      \\"keyId\\": 1000,\\n      \\"key\\": \\"颜色分类\\",\\n      \\"values\\": [\\n        {\\n          \\"value\\": \\"白色\\",\\n          \\"valueId\\": 1000\\n        }\\n      ]\\n    }\\n  ],\\n  \\"fuzzyQuantity\\": \\"100+\\",\\n  \\"productStatus\\": \\"Online\\",\\n  \\"taxCode\\": \\"3040203000000000000\\",\\n  \\"title\\": \\"发财树\\",\\n  \\"soldQuantity\\": \\"100+\\",\\n  \\"divisionCode\\": \\"110000\\",\\n  \\"picUrl\\": \\"https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg\\",\\n  \\"taxRate\\": 600,\\n  \\"categoryLeafId\\": 201856501,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"descPath\\": \\"https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34\\",\\n  \\"shopId\\": \\"21000017\\",\\n  \\"productType\\": \\"Normal\\",\\n  \\"properties\\": [\\n    {\\n      \\"text\\": \\"颜色\\",\\n      \\"values\\": [\\n        \\"白色\\"\\n      ]\\n    }\\n  ],\\n  \\"brandName\\": \\"Apple/苹果\\",\\n  \\"extendProperties\\": [\\n    {\\n      \\"key\\": \\"ss_picture_scene\\",\\n      \\"value\\": \\"场景图\\"\\n    }\\n  ],\\n  \\"lmItemId\\": \\"21000017-4580902812\\"\\n}","type":"json"}]',
      'title' => '查询选品池商品详情',
      'description' => '通过商品id查询选品池商品详情，支持输入区域码查询商品区域库存。',
      'requestParamsDescription' => '```
{
  "productId": "660057403063402509",
  "purchaserId": "PID22000009",
  "divisionCode": "330106109"
}',
      'responseParamsDescription' => '```
{
  "requestId": "EA2F57E7-94AF-1C51-B607-47EECC6CCAB2",
  "productId": "660057403063402509",
  "title": "西安/成都限购测试商品-yh-请勿下单千牛修改同步",
  "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",
  "descPath": "//itemcdn.tmall.com/desc/icoss!0724961349057!11733929840",
  "categoryLeafId": 50022568,
  "images": [
    "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",
    "//img.alicdn.com/imgextra/i1/2214281521988/O1CN011QYYFMQFeubcGuJ_!!2214281521988.jpg"
  ],
  "properties": [
    {
      "text": "品牌",
      "values": [
        "七情（鲜花）"
      ]
    },
    {
      "text": "颜色分类",
      "values": [
        "浅灰色",
        "黑色",
        "单sku商品why111千牛编辑同步"
      ]
    }
  ],
  "productSpecs": [
    {
      "keyId": 0,
      "key": "颜色分类",
      "values": [
        {
          "valueId": 0,
          "value": "浅灰色"
        },
        {
          "valueId": 0,
          "value": "黑色"
        },
        {
          "valueId": 0,
          "value": "单sku商品why111千牛编辑同步"
        }
      ]
    }
  ],
  "skus": [
    {
      "shopId": "21000017",
      "productId": "660057403063402509",
      "skuId": "660057403063402511",
      "title": "浅灰色",
      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",
      "skuSpecs": [
        {
          "keyId": 0,
          "key": "颜色分类",
          "valueId": 0,
          "value": "浅灰色"
        }
      ],
      "skuSpecsCode": "",
      "skuStatus": "Online",
      "canSell": true,
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "price": 2,
      "markPrice": 777700,
      "platformPrice": 777700,
      "divisionCode": "330106109"
    },
    {
      "shopId": "21000017",
      "productId": "660057403063402509",
      "skuId": "660057403063402510",
      "title": "单sku商品why111千牛编辑同步",
      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",
      "skuSpecs": [
        {
          "keyId": 0,
          "key": "颜色分类",
          "valueId": 0,
          "value": "单sku商品why111"
        }
      ],
      "skuSpecsCode": "",
      "skuStatus": "Online",
      "canSell": true,
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "price": 1,
      "markPrice": 777700,
      "platformPrice": 777700,
      "divisionCode": "330106109"
    },
    {
      "shopId": "21000017",
      "productId": "660057403063402509",
      "skuId": "660057403063402512",
      "title": "黑色",
      "picUrl": "//img.alicdn.com/imgextra/i2/2214281521988/O1CN01mBXX711QYYFAxfNiX_!!2214281521988.jpg",
      "skuSpecs": [
        {
          "keyId": 0,
          "key": "颜色分类",
          "valueId": 0,
          "value": "黑色"
        }
      ],
      "skuSpecsCode": "",
      "skuStatus": "Online",
      "canSell": true,
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "price": 9,
      "markPrice": 777700,
      "platformPrice": 777700,
      "divisionCode": "330106109"
    }
  ],
  "canSell": true,
  "productType": "Normal",
  "productStatus": "Online",
  "shopId": "21000017",
  "quantity": -1,
  "fuzzyQuantity": "有货",
  "taxRate": null,
  "taxCode": null,
  "categoryChain": [
    {
      "categoryId": 50020808,
      "name": "家居饰品",
      "parentId": 0,
      "level": 0,
      "isLeaf": false
    },
    {
      "categoryId": 50022568,
      "name": "其他工艺饰品",
      "parentId": 50020808,
      "level": 0,
      "isLeaf": true
    }
  ],
  "soldQuantity": "2",
  "divisionCode": "330106109"
}',
    ),
    'ListSelectionProducts' => 
    array (
      'summary' => '查询选品池商品列表。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '当前页面序号，从1开始',
            'description' => '当前页面序号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'purchaserId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => 'PID22000009',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '商品详情',
            '$ref' => '#/components/schemas/ProductPageResult',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageSize\\": 10,\\n  \\"total\\": 24,\\n  \\"pageNumber\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"products\\": [\\n    {\\n      \\"categoryChain\\": [\\n        {\\n          \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n          \\"isLeaf\\": false,\\n          \\"level\\": 2,\\n          \\"categoryId\\": 201792301,\\n          \\"parentId\\": 50016422\\n        }\\n      ],\\n      \\"images\\": [\\n        \\"\\"\\n      ],\\n      \\"quantity\\": -1,\\n      \\"skus\\": [\\n        {\\n          \\"quantity\\": -1,\\n          \\"productId\\": \\"660460842235822080\\",\\n          \\"canSell\\": true,\\n          \\"fuzzyQuantity\\": \\"有货\\",\\n          \\"skuStatus\\": \\"Online\\",\\n          \\"skuSpecsCode\\": \\"颜色分类:天蓝色\\",\\n          \\"platformPrice\\": 999900,\\n          \\"title\\": \\"天蓝色\\",\\n          \\"divisionCode\\": \\"110000\\",\\n          \\"picUrl\\": \\"https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png\\",\\n          \\"markPrice\\": 999900,\\n          \\"skuSpecs\\": [\\n            {\\n              \\"keyId\\": 1000,\\n              \\"valueId\\": 1000,\\n              \\"value\\": \\"天蓝色\\",\\n              \\"key\\": \\"颜色分类\\"\\n            }\\n          ],\\n          \\"price\\": 19800,\\n          \\"shopId\\": \\"21000017\\",\\n          \\"skuId\\": \\"660460842235822081\\",\\n          \\"barcode\\": \\"6922454329176\\",\\n          \\"rankValue\\": 3\\n        }\\n      ],\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"productSpecs\\": [\\n        {\\n          \\"keyId\\": 1000,\\n          \\"key\\": \\"颜色分类\\",\\n          \\"values\\": [\\n            {\\n              \\"value\\": \\"白色\\",\\n              \\"valueId\\": 1000\\n            }\\n          ]\\n        }\\n      ],\\n      \\"fuzzyQuantity\\": \\"100+\\",\\n      \\"productStatus\\": \\"Online\\",\\n      \\"taxCode\\": \\"3040203000000000000\\",\\n      \\"title\\": \\"发财树\\",\\n      \\"soldQuantity\\": \\"100+\\",\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"picUrl\\": \\"https://img.alicdn.com/imgextra/i3/2214281521988/O1CN01w4vomR1QYYEx6nyr5_!!2214281521988.jpg\\",\\n      \\"taxRate\\": 600,\\n      \\"categoryLeafId\\": 201856501,\\n      \\"requestId\\": \\"3239281273464326823\\",\\n      \\"descPath\\": \\"https://img.alicdn.com/descpath/O1CN01wciRDp22AEU14435dsf34\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"productType\\": \\"Normal\\",\\n      \\"properties\\": [\\n        {\\n          \\"text\\": \\"颜色\\",\\n          \\"values\\": [\\n            \\"白色\\"\\n          ]\\n        }\\n      ],\\n      \\"brandName\\": \\"Apple/苹果\\",\\n      \\"extendProperties\\": [\\n        {\\n          \\"key\\": \\"ss_picture_scene\\",\\n          \\"value\\": \\"场景图\\"\\n        }\\n      ],\\n      \\"lmItemId\\": \\"21000017-4580902812\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询选品池商品列表',
      'requestParamsDescription' => '```
{
  "pageNumber": 1,
  "pageSize": 10,
  "purchaserId": "PID22000009"
}',
      'responseParamsDescription' => '```
{
  "requestId": "87C11800-27D4-1CF7-A544-D006AC4ADAD5",
  "total": 48,
  "pageNumber": 2,
  "pageSize": 20,
  "products": [
    {
      "requestId": null,
      "productId": "660460842235822080",
      "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",
      "picUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",
      "descPath": "//itemcdn.tmall.com/desc/icoss!0724961349057!11733929840",
      "categoryLeafId": 50011150,
      "images": [
        "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",
        "//img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png",
        "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01E6yC8z1qokFueiOI7_!!2216003305543.jpg",
        "//img.alicdn.com/imgextra/i3/2216003305543/O1CN01K3DLfJ1qokF5BPhVJ_!!2216003305543.jpg"
      ],
      "properties": [
        {
          "text": "颜色分类",
          "values": [
            "天蓝色",
            "红色",
            "黑色"
          ]
        }
      ],
      "productSpecs": [
        {
          "keyId": 0,
          "key": "颜色分类",
          "values": [
            {
              "valueId": 0,
              "value": "天蓝色"
            },
            {
              "valueId": 0,
              "value": "红色"
            },
            {
              "valueId": 0,
              "value": "黑色"
            }
          ]
        }
      ],
      "skus": [
        {
          "shopId": "21000019",
          "productId": "660460842235822080",
          "skuId": "660460842235822081",
          "title": "天蓝色",
          "picUrl": "//img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png",
          "skuSpecs": [
            {
              "keyId": 0,
              "key": "颜色分类",
              "valueId": 0,
              "value": "天蓝色"
            }
          ],
          "skuSpecsCode": "",
          "skuStatus": "Online",
          "canSell": false,
          "quantity": -1,
          "fuzzyQuantity": "无货",
          "price": 1,
          "markPrice": 999900,
          "platformPrice": 999900,
          "divisionCode": null
        },
        {
          "shopId": "21000019",
          "productId": "660460842235822080",
          "skuId": "660460842235822082",
          "title": "红色",
          "picUrl": "//img.alicdn.com/imgextra///img.alicdn.com/imgextra/i3/2216003305543/O1CN01EWJ8tO1qokF2BAhv3_!!2216003305543.jpg",
          "skuSpecs": [
            {
              "keyId": 0,
              "key": "颜色分类",
              "valueId": 0,
              "value": "红色"
            }
          ],
          "skuSpecsCode": "",
          "skuStatus": "Online",
          "canSell": true,
          "quantity": -1,
          "fuzzyQuantity": "有货",
          "price": 2,
          "markPrice": 999900,
          "platformPrice": 999900,
          "divisionCode": null
        },
        {
          "shopId": "21000019",
          "productId": "660460842235822080",
          "skuId": "660460842235822083",
          "title": "黑色",
          "picUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01NtbRbi1qokFAIsvNo_!!2216003305543.jpg",
          "skuSpecs": [
            {
              "keyId": 0,
              "key": "颜色分类",
              "valueId": 0,
              "value": "黑色"
            }
          ],
          "skuSpecsCode": "",
          "skuStatus": "Online",
          "canSell": false,
          "quantity": -1,
          "fuzzyQuantity": "无货",
          "price": 1,
          "markPrice": 999900,
          "platformPrice": 999900,
          "divisionCode": null
        }
      ],
      "canSell": true,
      "productType": "Normal",
      "productStatus": "Online",
      "shopId": "21000019",
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "taxRate": null,
      "taxCode": null,
      "categoryChain": [
        {
          "categoryId": 50023724,
          "name": "其他",
          "parentId": 0,
          "level": 0,
          "isLeaf": false
        },
        {
          "categoryId": 50011150,
          "name": "其它",
          "parentId": 50023724,
          "level": 0,
          "isLeaf": true
        }
      ],
      "soldQuantity": "0",
      "divisionCode": null
    }
  ]
}',
    ),
    'GetSelectionProductSaleInfo' => 
    array (
      'summary' => '查询选品池商品销售信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}/saleInfo',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
          'name' => 'productId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'example' => '660460842235822080',
          ),
          'examples' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'purchaserId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '采购方id',
            'description' => '采购方id',
            'type' => 'string',
            'required' => true,
            'example' => 'PID22000009',
          ),
          'examples' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'divisionCode',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '区域码',
            'description' => '区域码（建议为五级乡镇/街道级地址code）',
            'type' => 'string',
            'required' => false,
            'example' => '330106109',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '商品销售信息',
            '$ref' => '#/components/schemas/ProductSaleInfo',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"divisionCode\\": \\"110000\\",\\n  \\"quantity\\": 10,\\n  \\"skus\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"markPrice\\": 999900,\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"price\\": 19800,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"天蓝色\\",\\n      \\"skuId\\": \\"660460842235822081\\"\\n    }\\n  ],\\n  \\"productId\\": \\"660460842235822080\\",\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"fuzzyQuantity\\": \\"有货\\",\\n  \\"productStatus\\": \\"Online\\",\\n  \\"shopId\\": \\"21000017\\",\\n  \\"title\\": \\"发财树\\",\\n  \\"lmItemId\\": \\"21000017-4580902812\\"\\n}","type":"json"}]',
      'title' => '查询选品池商品销售信息',
      'description' => '查询选品池商品销售信息：分销商可调用此接口查询商品销售信息，如商品状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参查询商品在该区域是否可售。',
      'requestParamsDescription' => '```
{
  "productId": "660460842235822080",
  "purchaserId": "PID22000009",
  "divisionCode": "330106109"
}',
      'responseParamsDescription' => '```
{
  "requestId": "33D4B4FC-E37F-1CB1-A4DD-F953B7F296DB",
  "shopId": "21000019",
  "divisionCode": "330106109",
  "productId": "660460842235822080",
  "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",
  "skus": [
    {
      "shopId": "21000019",
      "divisionCode": "330106109",
      "productId": "660460842235822080",
      "skuId": "660460842235822081",
      "title": "天蓝色",
      "skuStatus": "Online",
      "canSell": false,
      "quantity": -1,
      "fuzzyQuantity": "无货",
      "price": 1,
      "markPrice": 999900
    },
    {
      "shopId": "21000019",
      "divisionCode": "330106109",
      "productId": "660460842235822080",
      "skuId": "660460842235822082",
      "title": "红色",
      "skuStatus": "Online",
      "canSell": true,
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "price": 2,
      "markPrice": 999900
    },
    {
      "shopId": "21000019",
      "divisionCode": "330106109",
      "productId": "660460842235822080",
      "skuId": "660460842235822083",
      "title": "黑色",
      "skuStatus": "Online",
      "canSell": false,
      "quantity": -1,
      "fuzzyQuantity": "无货",
      "price": 1,
      "markPrice": 999900
    }
  ],
  "canSell": true,
  "productStatus": "Online",
  "quantity": -1,
  "fuzzyQuantity": "有货"
}',
    ),
    'ListSelectionProductSaleInfos' => 
    array (
      'summary' => '批量查询选品池商品销售信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/saleInfo/commands/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '批量查询商品库存参数',
            'description' => '批量查询商品销售信息参数',
            'required' => true,
            '$ref' => '#/components/schemas/ProductSaleInfoListQuery',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '商品销售信息',
            '$ref' => '#/components/schemas/ProductSaleInfoListResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"productSaleInfos\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"quantity\\": 10,\\n      \\"skus\\": [\\n        {\\n          \\"divisionCode\\": \\"110000\\",\\n          \\"markPrice\\": 999900,\\n          \\"quantity\\": -1,\\n          \\"productId\\": \\"660460842235822080\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 19800,\\n          \\"fuzzyQuantity\\": \\"有货\\",\\n          \\"skuStatus\\": \\"Online\\",\\n          \\"shopId\\": \\"21000017\\",\\n          \\"title\\": \\"天蓝色\\",\\n          \\"skuId\\": \\"660460842235822081\\"\\n        }\\n      ],\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"requestId\\": \\"3239281273464326823\\",\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"productStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"发财树\\",\\n      \\"lmItemId\\": \\"21000017-4580902812\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询选品池商品销售信息',
      'description' => '批量查询选品池商品销售信息：分销商可调用此接口批量查询商品销售信息，如商品状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参批量查询商品在该区域是否可售。',
      'requestParamsDescription' => '```
{
  "purchaserId":"PID22000009", 
  "divisionCode":"330106109", 
  "productIds":[
    "660460842235822080"
  ]
}',
      'responseParamsDescription' => '```
{
  "requestId": "1556385F-6098-114E-84F8-14B383EF5AA8",
  "productSaleInfos": [
    {
      "requestId": null,
      "shopId": "21000019",
      "divisionCode": "330106109",
      "productId": "660460842235822080",
      "title": "发财树5--我用下小蚁这个商品-qhh 不用你其他商品",
      "skus": [
        {
          "shopId": "21000019",
          "divisionCode": "330106109",
          "productId": "660460842235822080",
          "skuId": "660460842235822081",
          "title": "天蓝色",
          "skuStatus": "Online",
          "canSell": false,
          "quantity": -1,
          "fuzzyQuantity": "无货",
          "price": 1,
          "markPrice": 999900
        },
        {
          "shopId": "21000019",
          "divisionCode": "330106109",
          "productId": "660460842235822080",
          "skuId": "660460842235822082",
          "title": "红色",
          "skuStatus": "Online",
          "canSell": true,
          "quantity": -1,
          "fuzzyQuantity": "有货",
          "price": 2,
          "markPrice": 999900
        },
        {
          "shopId": "21000019",
          "divisionCode": "330106109",
          "productId": "660460842235822080",
          "skuId": "660460842235822083",
          "title": "黑色",
          "skuStatus": "Online",
          "canSell": false,
          "quantity": -1,
          "fuzzyQuantity": "无货",
          "price": 1,
          "markPrice": 999900
        }
      ],
      "canSell": true,
      "productStatus": "Online",
      "quantity": -1,
      "fuzzyQuantity": "有货"
    }
  ]
}',
    ),
    'ListSelectionSkuSaleInfos' => 
    array (
      'summary' => '批量查询选品池SKU销售信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/skus/saleInfo/commands/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '批量查询SKU库存参数',
            'description' => '批量查询SKU销售信息参数',
            'required' => true,
            '$ref' => '#/components/schemas/SkuSaleInfoListQuery',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => 'SKU销售信息',
            '$ref' => '#/components/schemas/SkuSaleInfoListResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"skuSaleInfos\\": [\\n    {\\n      \\"divisionCode\\": \\"110000\\",\\n      \\"markPrice\\": 999900,\\n      \\"quantity\\": -1,\\n      \\"productId\\": \\"660460842235822080\\",\\n      \\"canSell\\": true,\\n      \\"price\\": 19800,\\n      \\"fuzzyQuantity\\": \\"有货\\",\\n      \\"skuStatus\\": \\"Online\\",\\n      \\"shopId\\": \\"21000017\\",\\n      \\"title\\": \\"天蓝色\\",\\n      \\"skuId\\": \\"660460842235822081\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询选品池SKU销售信息',
      'description' => '批量查询选品池SKU销售信息：分销商可调用此接口批量查询SKU销售信息，如SKU状态等；通过divisionCode(建议传入五级地址（乡镇/街道) Code） 入参批量查询SKU在该区域是否可售',
      'requestParamsDescription' => '```
{
    "divisionCode": "330106109",
    "purchaserId": "PID22000009",
    "skuQueryParams": [
      {
        "productId": "660460842235822080",
        "skuId": "660460842235822082"
      }
    ]
}',
      'responseParamsDescription' => '```
{
  "requestId": "6F3A5B0A-AC2B-1083-A2ED-ACE62BF1C100",
  "skuSaleInfos": [
    {
      "shopId": "21000019",
      "divisionCode": "330106109",
      "productId": "660460842235822080",
      "skuId": "660460842235822082",
      "title": "红色",
      "skuStatus": "Online",
      "canSell": true,
      "quantity": -1,
      "fuzzyQuantity": "有货",
      "price": 2,
      "markPrice": 999900
    }
  ]
}',
    ),
    'ListCategories' => 
    array (
      'summary' => '查询类目列表。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/categories/commands/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '类目查询参数',
            'required' => false,
            '$ref' => '#/components/schemas/CategoryListQuery',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '类目',
            '$ref' => '#/components/schemas/CategoryListResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"\\",\\n  \\"categories\\": [\\n    {\\n      \\"name\\": \\"方便面/拉面/挂面/轻食面速食\\",\\n      \\"isLeaf\\": false,\\n      \\"level\\": 2,\\n      \\"categoryId\\": 201792301,\\n      \\"parentId\\": 50016422\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询类目列表',
      'description' => '根据父类目id查询所有子类目信息，或者根据类目id查询类目信息。

当父类目id(parentCategoryId)为0时，则返回根类目下的一级类目。',
      'requestParamsDescription' => '```
// 查询类目(parentCategoryId)下的所有子类目
{
  "body": {
    "parentCategoryId": "50016422"
  }
}

// 根据入参类目id(categoryIds)批量查询类目
{
  "body": {
    "categoryIds": [
      "202007601",
      "201792301"
    ]
  }',
      'responseParamsDescription' => '```
{
  "requestId": "4D1FC14F-CE54-1A1F-A322-D6DC87D49AFE",
  "categories": [
    {
      "categoryId": 201792301,
      "name": "方便面/拉面/挂面/轻食面速食",
      "parentId": 50016422,
      "level": 2,
      "isLeaf": false
    },
    {
      "categoryId": 202007601,
      "name": "方便速食/速冻食品类卡券",
      "parentId": 50016422,
      "level": 2,
      "isLeaf": false
    }
  ]
}',
    ),
    'SplitPurchaseOrder' => 
    array (
      'summary' => '采购单渲染拆单接口，可以依照最终主子单结构方式返回商品列表，分销商接入方可以渲染得到最终的主子单结构，方便后续接收创建采购单成功消息并回填主子单信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/split',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '采购单拆单渲染入参信息',
            'required' => false,
            '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '采购单拆单渲染结果返回',
            '$ref' => '#/components/schemas/PurchaseOrderRenderResult',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"addressList\\": [\\n    {\\n      \\"divisionCode\\": \\"610102\\",\\n      \\"addressDetail\\": \\"陕西省西安市新城区xxx大厦xx室\\",\\n      \\"receiverPhone\\": \\"182***5674\\",\\n      \\"townDivisionCode\\": \\"61010212\\",\\n      \\"receiver\\": \\"任先生\\",\\n      \\"addressId\\": 0\\n    }\\n  ],\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"orderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"unsellableOrderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"message\\": \\"库存为0\\",\\n  \\"extInfo\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '采购单渲染并拆单',
      'description' => '建议在创建采购单之前调用本接口，本接口将返回可售商品信息列表和不可售商品信息列表，其中可售商品信息列表按照最终主子单拆单结构进行呈现。',
    ),
    'RenderPurchaseOrder' => 
    array (
      'summary' => '采购单渲染，会返回可售商品和不可售商品，客户可以选择可售商品进行采购单下单。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/render',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '渲染采购单',
            'description' => '渲染采购单',
            'required' => true,
            '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '采购单渲染结果',
            'required' => false,
            '$ref' => '#/components/schemas/PurchaseOrderRenderResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"addressList\\": [\\n    {\\n      \\"divisionCode\\": \\"610102\\",\\n      \\"addressDetail\\": \\"陕西省西安市新城区xxx大厦xx室\\",\\n      \\"receiverPhone\\": \\"182***5674\\",\\n      \\"townDivisionCode\\": \\"61010212\\",\\n      \\"receiver\\": \\"任先生\\",\\n      \\"addressId\\": 0\\n    }\\n  ],\\n  \\"canSell\\": true,\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"orderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"unsellableOrderList\\": [\\n    {\\n      \\"message\\": \\"库存为0\\",\\n      \\"deliveryInfoList\\": [\\n        {\\n          \\"postFee\\": 0,\\n          \\"serviceType\\": -4,\\n          \\"id\\": \\"20\\",\\n          \\"displayName\\": \\"快递 免邮\\"\\n        }\\n      ],\\n      \\"canSell\\": true,\\n      \\"productList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"features\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"quantity\\": 1,\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"canSell\\": true,\\n          \\"price\\": 100,\\n          \\"productPicUrl\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"purchaserId\\": \\"56****2304\\",\\n          \\"message\\": \\"库存为0\\",\\n          \\"skuId\\": \\"6600****6737\\"\\n        }\\n      ],\\n      \\"extInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"message\\": \\"库存为0\\",\\n  \\"extInfo\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '采购单渲染',
      'description' => '采购单渲染，会返回可售商品和不可售商品，客户可以选择可售商品进行采购单下单。',
      'requestParamsDescription' => '```
{
  "deliveryAddress": {
    "divisionCode": "610102",
    "addressDetail": "陕西省西安市***大厦",
    "receiverPhone": "187****1553",
    "receiver": "闫先生",
    "townDivisionCode": "61010212"
  },
  "buyerId": "test1234****679",
  "productList": [
    {
      "quantity": 1,
      "productId": "6600622091****6736",
      "purchaserId": "22000009",
      "skuId": "6600622091****6737"
    }
  ]
}',
      'responseParamsDescription' => '```
{
  "requestId": "0928251D-713B-17A1-A2B0-1A57****90B4",
  "orderList": [
    {
      "productList": [
        {
          "productId": "6600622091****6736",
          "productTitle": "儿童学习桌",
          "skuTitle": "浅灰色",
          "skuId": "6600622091****6737",
          "purchaserId": "22***09",
          "promotionFee": null,
          "quantity": 1,
          "productUrl": null,
          "productPicUrl": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0DYLWA_!!2216003305543.jpg",
          "price": 1,
          "canSell": true,
          "message": null,
          "features": null
        }
      ],
      "deliveryInfoList": [
        {
          "id": "20",
          "displayName": "快递 免邮",
          "postFee": 0,
          "serviceType": -4
        }
      ],
      "invoiceInfo": null,
      "extInfo": null,
      "canSell": true,
      "message": null
    }
  ],
  "unsellableOrderList": [
    {
      "productList": [],
      "deliveryInfoList": null,
      "invoiceInfo": null,
      "extInfo": null,
      "canSell": false,
      "message": null
    }
  ],
  "addressList": [
    {
      "addressId": 0,
      "receiver": "闫先生",
      "receiverPhone": "187****1553",
      "addressDetail": "陕西省西安市***大厦",
      "divisionCode": "610102",
      "townDivisionCode": "610102002"
    }
  ],
  "extInfo": null,
  "canSell": true,
  "message": null
}',
    ),
    'CreatePurchaseOrder' => 
    array (
      'summary' => '创建采购单，返回采购单号，具体订单创建结果由消息侧通知。订单创建完成之后，客户可以通过订单接口查询采购单下附属的订单信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '创建采购单',
            'description' => '创建采购单',
            'required' => true,
            '$ref' => '#/components/schemas/PurchaseOrderCreateCmd',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '采购单创建结果（返回采购单号）',
            'required' => false,
            '$ref' => '#/components/schemas/PurchaseOrderCreateResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"purchaseOrderId\\": \\"6692****5696\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '创建采购单',
      'description' => '创建采购单，返回采购单号，具体订单创建结果由消息侧通知。订单创建完成之后，客户可以通过订单接口查询采购单下附属的订单信息。',
      'requestParamsDescription' => '```
{
  "outerPurchaseOrderId": "outer00****0",
  "deliveryAddress": {
    "divisionCode": "610102",
    "addressDetail": "陕西省西安市***大厦",
    "receiverPhone": "187****1553",
    "receiver": "闫先生",
    "townDivisionCode": "61010212"
  },
  "buyerId": "yt12345085",
  "productList": [
    {
      "quantity": 1,
      "productId": "6600622091****6736",
      "purchaserId": "PID2****09",
      "skuId": "6600622091****6737"
    }
  ]
}',
      'responseParamsDescription' => '```
{
  "requestId": "48A34399-A72C-1E23-8388-7E63****E927",
  "purchaseOrderId": "6696070481****5680"
}',
    ),
    'GetPurchaseOrderStatus' => 
    array (
      'summary' => '获取采购单状态。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/{purchaseOrderId}/status',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'purchaseOrderId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '采购单ID',
            'description' => '采购单ID',
            'type' => 'string',
            'required' => true,
            'example' => '6696070481****5680',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '交易单状态',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '分销单创建中',
              10 => '采购中',
              20 => '采购成功，待发货',
              21 => '采购成功，部分发货',
              22 => '采购成功，全部发货',
              30 => '部分采购成功，待发货',
              31 => '部分采购成功，部分发货',
              32 => '部分采购成功，全部发货',
              80 => '交易失败',
              99 => '交易成功',
            ),
            '$ref' => '#/components/schemas/PurchaseOrderStatusResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"status\\": \\"10\\"\\n}","type":"json"}]',
      'title' => '获取采购单状态',
      'description' => '获取交易单状态。',
      'responseParamsDescription' => '```
{
  "requestId": "AC85D1AE-3015-1024-B17C-D056****3583",
  "status": "20"
}',
    ),
    'GetOrder' => 
    array (
      'summary' => '查询主单详情。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'orderId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '订单id',
            'description' => '订单id',
            'type' => 'string',
            'required' => true,
            'example' => '669607056****8593',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '订单资源返回',
            'required' => false,
            '$ref' => '#/components/schemas/OrderResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderAmount\\": 100,\\n  \\"orderLineList\\": [\\n    {\\n      \\"productTitle\\": \\"儿童学习桌\\",\\n      \\"number\\": \\"1\\",\\n      \\"skuTitle\\": \\"浅绿色\\",\\n      \\"productId\\": \\"6600****6736\\",\\n      \\"orderId\\": \\"6692****5457\\",\\n      \\"productPic\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n      \\"orderLineId\\": \\"6692****5458\\",\\n      \\"logisticsStatus\\": \\"1\\",\\n      \\"payFee\\": 100,\\n      \\"skuId\\": \\"6600****6737\\",\\n      \\"orderLineStatus\\": \\"1\\"\\n    }\\n  ],\\n  \\"orderId\\": \\"6692****5457\\",\\n  \\"distributorId\\": \\"12****01\\",\\n  \\"orderStatus\\": \\"1\\",\\n  \\"logisticsStatus\\": \\"1\\",\\n  \\"createDate\\": \\"2023-09-11T12:22:24.000+08:00\\",\\n  \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n}","type":"json"}]',
      'title' => '获取订单详情',
      'responseParamsDescription' => '```
{
  "createDate": "2023-09-09 10:57:23",
  "distributorId": "6599775553****9296",
  "logisticsStatus": "1",
  "orderId": "6696070566****8593",
  "orderAmount": "1",
  "orderStatus": "2",
  "orderLineList": [
    {
      "productPic": "//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0DYLWA_!!2216003305543.jpg",
      "productPrice": [
        {
          "fundAmountMoney": "1"  //订单应付金额
        }
      ],
      "productTitle": "儿童学习桌",
      "productId": "6600622091****6736",
      "number": "1",
      "orderLineStatus": "2",
      "logisticsStatus": "1",
      "skuId": "6600622091****6737",
      "skuTitle": "浅灰色",
      "orderLineId": "6696070566****8594",
      "orderId": "6696070566****8593"
    }
  ]
}',
    ),
    'QueryOrders' => 
    array (
      'summary' => '查询订单列表。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/query',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '查询主单列表',
            'description' => '查询主单列表',
            'required' => true,
            '$ref' => '#/components/schemas/OrderPageQuery',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '订单列表',
            'required' => false,
            '$ref' => '#/components/schemas/OrderListResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderList\\": [\\n    {\\n      \\"orderAmount\\": 100,\\n      \\"orderLineList\\": [\\n        {\\n          \\"productTitle\\": \\"儿童学习桌\\",\\n          \\"number\\": \\"1\\",\\n          \\"skuTitle\\": \\"浅绿色\\",\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"orderId\\": \\"6692****5457\\",\\n          \\"productPic\\": \\"//img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0\\",\\n          \\"orderLineId\\": \\"6692****5458\\",\\n          \\"logisticsStatus\\": \\"1\\",\\n          \\"payFee\\": 100,\\n          \\"skuId\\": \\"6600****6737\\",\\n          \\"orderLineStatus\\": \\"1\\"\\n        }\\n      ],\\n      \\"orderId\\": \\"6692****5457\\",\\n      \\"distributorId\\": \\"12****01\\",\\n      \\"orderStatus\\": \\"1\\",\\n      \\"logisticsStatus\\": \\"1\\",\\n      \\"createDate\\": \\"2023-09-11T12:22:24.000+08:00\\",\\n      \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\",\\n  \\"total\\": 24\\n}","type":"json"}]',
      'title' => '查询订单列表',
      'description' => '查询订单列表',
      'requestParamsDescription' => '```
{
  "pageNumber": 1,
  "pageSize": 10,
  "orderIdList": [
    "6696070566****8593"
  ]
}',
      'responseParamsDescription' => '```
{
  "requestId": "15BC537F-26F7-1AD0-AC3C-B79****D540",
  "total": 10,
  "orderList": [
    {
      "requestId": null,
      "createDate": "2023-09-09 10:57:23",
      "distributorId": "12****01",
      "logisticsStatus": "2",
      "orderId": "6696070566****8593",
      "orderAmount": "1",
      "orderStatus": "2",
      "orderLineList": [
        {
          "productPic": "//img.alicdn.com/imgextra/i4/2216****05543/O1CN01bip3Un1qo****YLWA_!!2216003****43.jpg",
          "productPrice": [
            {
              "fundAmountMoney": "1"
            }
          ],
          "productTitle": "儿童学习桌",
          "productId": "6600622091****6736",
          "number": "1",
          "orderLineStatus": "2",
          "logisticsStatus": "2",
          "skuId": "6600622091****6737",
          "skuTitle": "浅灰色",
          "orderLineId": "6696070566****8594",
          "orderId": "6696070566****8593"
        }
      ]
    }
  ]
}',
    ),
    'ListLogisticsOrders' => 
    array (
      'summary' => '查询订单物流信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}/logisticsOrders',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'orderId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '订单id',
            'description' => '订单id',
            'type' => 'string',
            'required' => true,
            'example' => '6696070566****8593',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '物流信息',
            'required' => false,
            '$ref' => '#/components/schemas/LogisticsOrderListResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"logisticsOrderList\\": [\\n    {\\n      \\"mailNo\\": \\"SF234***2345\\",\\n      \\"dataProviderTitle\\": \\"菜鸟裹裹\\",\\n      \\"logisticsCompanyName\\": \\"顺丰\\",\\n      \\"logisticsDetailList\\": [\\n        {\\n          \\"ocurrTimeStr\\": \\"2023-09-01 00:00:00\\",\\n          \\"standerdDesc\\": \\"已签收\\"\\n        }\\n      ],\\n      \\"goods\\": [\\n        {\\n          \\"goodName\\": \\"儿童学习桌\\",\\n          \\"productId\\": \\"6600****6736\\",\\n          \\"quantity\\": 1\\n        }\\n      ],\\n      \\"dataProvider\\": \\"菜鸟\\",\\n      \\"logisticsCompanyCode\\": \\"SF （OTHER-其他 POST-中国邮政 EMS-EMS EYB-EMS快递包裹 POSTB-邮政快递包裹 STO-申通快递 YTO-圆通快递 YUNDA-韵达快递 ZJS-宅急送 FEDEX-联邦快递 DBKD-德邦物流 SHQ-华强物流 TN-特能 TAOBAO-淘宝物流 ZTO-中通快递 HTKY-百世快递 TTKDEX-天天快递 SF-顺丰速运 ZTKY-中铁物流 QFKD-全峰快递 JT-极兔物流）\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '查询订单物流信息',
      'description' => '查询订单物流信息',
      'responseParamsDescription' => '```
{
  "requestId": "ED080FA8-F005-10B1-A9AB-CCFD****9149",
  "logisticsOrderList": [
    {
      "dataProvider": "菜鸟裹裹",
      "dataProviderTitle": "本数据由菜鸟裹裹提供",
      "goods": [
        {
          "goodName": "儿童学习桌",
          "productId": 2384738123****7238,
          "quantity": 1
        }
      ],
      "logisticsCompanyCode": "SF",
      "logisticsCompanyName": "顺丰速运",
      "logisticsDetailList": [
        {
          "ocurrTimeStr": "2023-06-06 14:44:45",
          "standerdDesc": "顺丰速运 已收取快件"
        },
        {
          "ocurrTimeStr": "2023-06-06 14:44:46",
          "standerdDesc": "快件在【加工厂店】完成分拣，准备发往 【沈阳****中转场】"
        },
        {
          "ocurrTimeStr": "2023-06-06 18:24:09",
          "standerdDesc": "快件到达 【沈阳****中转场】"
        },
        {
          "ocurrTimeStr": "2023-06-06 18:28:26",
          "standerdDesc": "快件在【沈阳****中转场】完成分拣，准备发往 【西安****中转场】"
        },
        {
          "ocurrTimeStr": "2023-06-07 05:40:35",
          "standerdDesc": "快件已发车"
        }
      ],
      "mailNo": "SF162546****599"
    }
  ]
}',
    ),
    'ConfirmDisburse' => 
    array (
      'summary' => '确认收货。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/confirmDisburse',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '确认收货（订单）',
            'description' => '确认收货入参',
            'required' => true,
            '$ref' => '#/components/schemas/ConfirmDisburseCmd',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '确认收货结果',
            'required' => false,
            '$ref' => '#/components/schemas/ConfirmDisburseResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": \\"success\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '确认收货',
      'description' => '确认收货',
      'requestParamsDescription' => '```
{
  "orderId": "6696667996****5953"
}',
      'responseParamsDescription' => '```
{
  "requestId": "FF83DFBE-CBF2-1D73-83A3-5010****C402",
  "result": "success"
}',
    ),
    'RenderRefundOrder' => 
    array (
      'summary' => '售后单渲染。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/commands/render',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '逆向单渲染',
            'description' => '逆向单渲染',
            'required' => true,
            '$ref' => '#/components/schemas/RefundRenderCmd',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '售后单渲染结果',
            'required' => false,
            '$ref' => '#/components/schemas/RefundRenderResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"maxRefundFeeData\\": {\\n    \\"minRefundFee\\": 1,\\n    \\"maxRefundFee\\": 100\\n  },\\n  \\"refundReasonList\\": [\\n    {\\n      \\"reasonTextId\\": \\"47683\\",\\n      \\"proofRequired\\": true,\\n      \\"reasonTips\\": \\"不想要了\\",\\n      \\"refundDescRequired\\": true\\n    }\\n  ],\\n  \\"bizClaimType\\": 1,\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '售后单渲染',
      'description' => '售后单渲染',
      'requestParamsDescription' => '```
{
  "bizClaimType": 3,
  "goodsStatus": 2,
  "orderLineId": "6696070566****8594"
}',
      'responseParamsDescription' => '````
{
  "requestId": "6D7C43A1-2EFC-185E-816E-A8CB****36EB",
  "orderLineId": "6696070566****8594",
  "bizClaimType": 3,
  "mainOrderRefund": false,
  "maxRefundFeeData": {
    "maxRefundFee": 1,
    "minRefundFee": 0
  },
  "refundReasonList": [
    {
      "reasonTextId": "402652",
      "proofRequired": false,
      "reasonTips": "拍错/多拍/不喜欢",
      "refundDescRequired": false
    },
    {
      "reasonTextId": "403883",
      "proofRequired": false,
      "reasonTips": "商品成分描述不符",
      "refundDescRequired": false
    },
    {
      "reasonTextId": "402641",
      "proofRequired": false,
      "reasonTips": "尺寸/规格不符",
      "refundDescRequired": false
    },
    {
      "reasonTextId": "402649",
      "proofRequired": false,
      "reasonTips": "颜色/款式/包装与商品描述不符",
      "refundDescRequired": false
    },
    {
      "reasonTextId": "402645",
      "proofRequired": false,
      "reasonTips": "收到商品少件/破损/变形等",
      "refundDescRequired": false
    },
    {
      "reasonTextId": "402638",
      "proofRequired": false,
      "reasonTips": "枯萎/死亡",
      "refundDescRequired": false
    }
  ]
}',
    ),
    'CreateRefundOrder' => 
    array (
      'summary' => '创建售后单。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '创建逆向单',
            'description' => '创建逆向单',
            'required' => true,
            '$ref' => '#/components/schemas/RefundOrderCmd',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '售后单资源',
            'required' => false,
            '$ref' => '#/components/schemas/RefundOrderResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '创建售后单',
      'description' => '创建售后单',
      'responseParamsDescription' => '```
{
  "requestId": "4DFA4CBA-AB08-13E2-9E25-0A26****72F2",
  "orderLineId": "6696070566****8594",
  "disputeStatus": 1,
  "disputeId": "6696233432****5024"
}',
    ),
    'CancelRefundOrder' => 
    array (
      'summary' => '取消售后单。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}/commands/cancel',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'disputeId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '售后单ID',
            'type' => 'string',
            'required' => false,
            'example' => '601853367760207872',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '售后单资源',
            'required' => false,
            '$ref' => '#/components/schemas/RefundOrderResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '取消售后单',
      'description' => '取消售后单',
      'responseParamsDescription' => '```
{
  "requestId": "0F5BFCA7-98B9-1D59-80C2-30622***CFB1",
  "orderLineId": "66931024438***7746",
  "disputeStatus": 1,
  "disputeId": "66931163166***4352"
}
```',
    ),
    'GetRefundOrder' => 
    array (
      'summary' => '获取售后单详情。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'disputeId',
          'in' => 'path',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '售后单id',
            'type' => 'string',
            'required' => false,
            'example' => '6696233432****5024',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '售后单结果',
            'required' => false,
            '$ref' => '#/components/schemas/RefundResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"refundFee\\": 1,\\n  \\"refundFeeData\\": {\\n    \\"minRefundFee\\": 1,\\n    \\"maxRefundFee\\": 100\\n  },\\n  \\"applyDisputeDesc\\": \\"多拍不想要\\",\\n  \\"refunderTel\\": \\"182****1334\\",\\n  \\"bizClaimType\\": 1,\\n  \\"disputeDesc\\": \\"多拍不想要\\",\\n  \\"sellerRefuseReason\\": \\"商品没问题，买家举证无效\\",\\n  \\"orderId\\": \\"6692****5457\\",\\n  \\"refunderName\\": \\"赵先生\\",\\n  \\"applyReason\\": {\\n    \\"reasonTextId\\": 403769,\\n    \\"reasonTips\\": \\"不想要了\\"\\n  },\\n  \\"refunderAddress\\": \\"阿里云云谷\\",\\n  \\"refunderZipCode\\": \\"331001\\",\\n  \\"disputeEndTime\\": \\"2023-09-02T12:00:00.000Z\\",\\n  \\"sellerRefuseAgreementMessage\\": \\"不同意退款\\",\\n  \\"disputeId\\": \\"6693****4352\\",\\n  \\"disputeStatus\\": 1,\\n  \\"returnGoodLogisticsStatus\\": 0,\\n  \\"orderLogisticsStatus\\": 1,\\n  \\"disputeCreateTime\\": \\"2023-09-02T00:00:00.000Z\\",\\n  \\"orderLineId\\": \\"6692****5458\\",\\n  \\"sellerAgreeMsg\\": \\"同意退款\\",\\n  \\"requestId\\": \\"841471F6-5D61-1331-8C38-2****B55\\"\\n}","type":"json"}]',
      'title' => '获取售后单详情',
      'description' => '获取售后单详情',
      'responseParamsDescription' => '```
{
  "applyDisputeDesc": null,
  "applyReason": {
    "reasonTextId": 403883,
    "reasonTips": "商品成分描述不符"
  },
  "bizClaimType": 3,
  "disputeCreateTime": "2023-09-09 12:00:35",
  "disputeDesc": null,
  "disputeEndTime": null,
  "disputeId": "6696233432****5024",
  "disputeStatus": 3,
  "disputeType": 1,
  "orderId": "6696070566****8593",
  "refundFeeData": {
    "maxRefundFee": null,
    "minRefundFee": null
  },
  "orderLogisticsStatus": 2,
  "refundFee": 1,
  "refunderAddress": null,
  "refunderName": null,
  "refunderTel": null,
  "refunderZipCode": null,
  "returnGoodCount": null,
  "returnGoodLogisticsStatus": null,
  "sellerAgreeMsg": null,
  "sellerRefuseAgreementMessage": null,
  "sellerRefuseReason": null,
  "orderLineId": "6696070566****8594"
}',
    ),
    'CreateGoodsShippingNotice' => 
    array (
      'summary' => '回填运单信息。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/command/createGoodsShippingNotice',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '提交逆向物流信息',
            'description' => '提交运单信息',
            'required' => true,
            '$ref' => '#/components/schemas/GoodsShippingNoticeCreateCmd',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '操作返回结果',
            'required' => false,
            '$ref' => '#/components/schemas/GoodsShippingNoticeCreateResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": \\"success\\",\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '回填运单信息',
      'description' => '回填运单信息',
      'requestParamsDescription' => '```
{
  "cpCode": "YUNDA",
  "disputeId": "6696233432****5024",
  "logisticsNo": "4334027****6583"
}',
      'responseParamsDescription' => '```
{
  "requestId": "FA53BE49-2740-1AE1-BCBE-3640****5BE5",
  "result": "success"
}',
    ),
    'QueryChildDivisionCode' => 
    array (
      'summary' => '查询子区域编码。',
      'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/division/commands/queryChildDivisionCode',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '查询地址divisionCode',
            'description' => '查询子区域编码',
            'required' => true,
            '$ref' => '#/components/schemas/DivisionQuery',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'description' => '子区域编码',
            'required' => false,
            '$ref' => '#/components/schemas/DivisionPageResult',
          ),
          'examples' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"divisionList\\": [\\n    {\\n      \\"divisionName\\": \\"上海\\",\\n      \\"divisionCode\\": 310000,\\n      \\"divisionLevel\\": 2,\\n      \\"pinyin\\": \\"shang hai\\",\\n      \\"parentId\\": 1\\n    }\\n  ],\\n  \\"requestId\\": \\"3239281273464326823\\"\\n}","type":"json"}]',
      'title' => '查询子区域编码',
      'description' => '查询子区域编码',
      'requestParamsDescription' => '```
{
  "divisionCode": "1"
}',
      'responseParamsDescription' => '```
{
  "requestId": "85144A43-F418-1094-9A40-B8CE****8F30",
  "divisionList": [
    {
      "parentId": 1,
      "divisionCode": 310000,
      "divisionName": "上海",
      "divisionLevel": 2,
      "pinyin": "shang hai"
    },
    {
      "parentId": 1,
      "divisionCode": 530000,
      "divisionName": "云南省",
      "divisionLevel": 2,
      "pinyin": "yun nan sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 150000,
      "divisionName": "内蒙古自治区",
      "divisionLevel": 2,
      "pinyin": "nei meng gu zi zhi qu"
    },
    {
      "parentId": 1,
      "divisionCode": 110000,
      "divisionName": "北京",
      "divisionLevel": 2,
      "pinyin": "bei jing"
    },
    {
      "parentId": 1,
      "divisionCode": 220000,
      "divisionName": "吉林省",
      "divisionLevel": 2,
      "pinyin": "ji lin sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 510000,
      "divisionName": "四川省",
      "divisionLevel": 2,
      "pinyin": "si chuan sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 120000,
      "divisionName": "天津",
      "divisionLevel": 2,
      "pinyin": "tian jin"
    },
    {
      "parentId": 1,
      "divisionCode": 640000,
      "divisionName": "宁夏回族自治区",
      "divisionLevel": 2,
      "pinyin": "ning xia hui zu zi zhi qu"
    },
    {
      "parentId": 1,
      "divisionCode": 340000,
      "divisionName": "安徽省",
      "divisionLevel": 2,
      "pinyin": "an hui sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 370000,
      "divisionName": "山东省",
      "divisionLevel": 2,
      "pinyin": "shan dong sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 140000,
      "divisionName": "山西省",
      "divisionLevel": 2,
      "pinyin": "shan xi sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 440000,
      "divisionName": "广东省",
      "divisionLevel": 2,
      "pinyin": "guang dong sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 450000,
      "divisionName": "广西壮族自治区",
      "divisionLevel": 2,
      "pinyin": "guang xi zhuang zu zi zhi qu"
    },
    {
      "parentId": 1,
      "divisionCode": 650000,
      "divisionName": "新疆维吾尔自治区",
      "divisionLevel": 2,
      "pinyin": "xin jiang wei wu er zi zhi qu"
    },
    {
      "parentId": 1,
      "divisionCode": 320000,
      "divisionName": "江苏省",
      "divisionLevel": 2,
      "pinyin": "jiang su sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 360000,
      "divisionName": "江西省",
      "divisionLevel": 2,
      "pinyin": "jiang xi sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 130000,
      "divisionName": "河北省",
      "divisionLevel": 2,
      "pinyin": "he bei sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 410000,
      "divisionName": "河南省",
      "divisionLevel": 2,
      "pinyin": "he nan sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 330000,
      "divisionName": "浙江省",
      "divisionLevel": 2,
      "pinyin": "zhe jiang sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 460000,
      "divisionName": "海南省",
      "divisionLevel": 2,
      "pinyin": "hai nan sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 420000,
      "divisionName": "湖北省",
      "divisionLevel": 2,
      "pinyin": "hu bei sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 430000,
      "divisionName": "湖南省",
      "divisionLevel": 2,
      "pinyin": "hu nan sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 620000,
      "divisionName": "甘肃省",
      "divisionLevel": 2,
      "pinyin": "gan su sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 350000,
      "divisionName": "福建省",
      "divisionLevel": 2,
      "pinyin": "fu jian sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 540000,
      "divisionName": "西藏自治区",
      "divisionLevel": 2,
      "pinyin": "xi zang zi zhi qu"
    },
    {
      "parentId": 1,
      "divisionCode": 520000,
      "divisionName": "贵州省",
      "divisionLevel": 2,
      "pinyin": "gui zhou sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 210000,
      "divisionName": "辽宁省",
      "divisionLevel": 2,
      "pinyin": "liao ning sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 500000,
      "divisionName": "重庆",
      "divisionLevel": 2,
      "pinyin": "chong qing"
    },
    {
      "parentId": 1,
      "divisionCode": 610000,
      "divisionName": "陕西省",
      "divisionLevel": 2,
      "pinyin": "shan xi sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 630000,
      "divisionName": "青海省",
      "divisionLevel": 2,
      "pinyin": "qing hai sheng"
    },
    {
      "parentId": 1,
      "divisionCode": 230000,
      "divisionName": "黑龙江省",
      "divisionLevel": 2,
      "pinyin": "hei long jiang sheng"
    }
  ]
}',
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
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Market',
    'version' => '2015-11-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 65815,
      'title' => '商品',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePrice',
        1 => 'DescribeProduct',
        2 => 'DescribeProducts',
      ),
    ),
    1 => 
    array (
      'id' => 65819,
      'title' => '订单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOrder',
        1 => 'DescribeOrder',
      ),
    ),
    2 => 
    array (
      'id' => 65822,
      'title' => '流程',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeProjectMessages',
        1 => 'DescribeProjectNodes',
        2 => 'DescribeProjectOperateLogs',
        3 => 'DescribeCurrentNodeInfo',
        4 => 'FinishCurrentProjectNode',
        5 => 'RollbackCurrentProjectNode',
      ),
    ),
    3 => 
    array (
      'id' => 65829,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeInstance',
        1 => 'DescribeInstances',
        2 => 'AutoRenewInstance',
      ),
    ),
    4 => 
    array (
      'id' => 65832,
      'title' => '项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PauseProject',
        1 => 'DescribeProjectAttachments',
        2 => 'DescribeProjectInfo',
        3 => 'ResumeProject',
      ),
    ),
    5 => 
    array (
      'id' => 65837,
      'title' => '授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeLicense',
        1 => 'ActivateLicense',
      ),
    ),
    6 => 
    array (
      'id' => 65840,
      'title' => '计量',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PushMeteringData',
      ),
    ),
    7 => 
    array (
      'id' => 182754,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CrossAccountVerifyToken',
        1 => 'DescribeDistributionProductsLink',
        2 => 'DescribeDistributionProducts',
      ),
    ),
    8 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeApiMetering',
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
    'DescribePrice' => 
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
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型。取值：

INSTANCE_BUY：商品购买
INSTANCE_RENEW：实例续费
INSTANCE_UPGRADE：实例升级
说明：对于续费类型的询价，需要在 Commodity 中传入 InstanceId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE_BUY',
          ),
        ),
        1 => 
        array (
          'name' => 'Commodity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定的 OrderType，使用对应的配件并序列化。 不同 OrderType 分别对应的 CommodityType 如下所示：

INSTANCE_BUY：InstanceBuyCommodity
INSTANCE_RENEW：InstanceRenewCommodity
INSTANCE_UPGRADE：InstanceUpgradeCommodity
示例中的参数说明如下：

productCode：商品 Code。
skuCode：商品规格 Code。非镜像商品：预付费固定为 prepay，后付费固定为 postpay；镜像商品：按量为ECS，包年包月为Package
components：规格模块。其中版本 package_version 必传，其他模块根据商品的设置来传。
duration：周期数量 1,2,3...。
pricingCycle: 周期单位。Day（日），Month（月），Year（年）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"components":{"package_version":"yuncode12928000016"},"duration":1,"pricingCycle":"YEAR","productCode":"cmgj01**28","quantity":1,"skuCode":"prepay"}',
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
              'ExpressionCode' => 
              array (
                'description' => '限购编码',
                'type' => 'string',
                'example' => 'ORDER.NO_REAL_NAME_AUTHENTICATION',
              ),
              'Cuxiao' => 
              array (
                'description' => '是否有促销',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DiscountPrice' => 
              array (
                'description' => '优惠的价格（原价-实际价格），单位：元',
                'type' => 'number',
                'format' => 'float',
                'example' => '178.20',
              ),
              'Cycle' => 
              array (
                'description' => '周期单位

DAY：日
MONTH：月
YEAR：年',
                'type' => 'string',
                'example' => 'MONTH',
              ),
              'TradePrice' => 
              array (
                'description' => '实际价格，单位：元',
                'type' => 'number',
                'format' => 'float',
                'example' => '19.80',
              ),
              'OriginalPrice' => 
              array (
                'description' => '原价，单位：元',
                'type' => 'number',
                'format' => 'float',
                'example' => '198.00',
              ),
              'Duration' => 
              array (
                'description' => '周期数， 1，2，3...',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Currency' => 
              array (
                'description' => '币种

CNY： 人民币
USD： 美元
JPY：日元',
                'type' => 'string',
                'example' => 'CNY',
              ),
              'ExpressionMessage' => 
              array (
                'description' => '限购描述',
                'type' => 'string',
                'example' => '企业用户才能购买',
              ),
              'InfoTitle' => 
              array (
                'description' => '活动名称',
                'type' => 'string',
                'example' => '新年特惠',
              ),
              'ProductCode' => 
              array (
                'description' => '商品 Code',
                'type' => 'string',
                'example' => 'cmgj01****',
              ),
              'PromotionRules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PromotionRule' => 
                  array (
                    'description' => '优惠信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Title' => 
                        array (
                          'description' => '优惠标题',
                          'type' => 'string',
                          'example' => '展示型首年19.8元',
                        ),
                        'Name' => 
                        array (
                          'description' => '优惠内容',
                          'type' => 'string',
                          'example' => '展示型首年19.8元',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '优惠ID',
                          'type' => 'string',
                          'example' => '102112',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Coupons' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Coupon' => 
                  array (
                    'description' => '优惠券信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CouponOptionCode' => 
                        array (
                          'description' => '优惠券类型',
                          'type' => 'string',
                          'example' => 'ActiveCoupon',
                        ),
                        'CouponOptionNo' => 
                        array (
                          'description' => '优惠券编号',
                          'type' => 'string',
                          'example' => '3874923111',
                        ),
                        'CouponName' => 
                        array (
                          'description' => '优惠券名称',
                          'type' => 'string',
                          'example' => '促销',
                        ),
                        'CouponDesc' => 
                        array (
                          'description' => '优惠券描述',
                          'type' => 'string',
                          'example' => '促销',
                        ),
                        'IsSelected' => 
                        array (
                          'description' => '是否选中',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CanPromFee' => 
                        array (
                          'description' => '可优惠价格',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100.00',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        501 => 
        array (
          0 => 
          array (
            'errorCode' => 'DownstreamError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        502 => 
        array (
          0 => 
          array (
            'errorCode' => 'ReturnNull',
            'errorMessage' => 'No results found.',
          ),
        ),
        999999 => 
        array (
          0 => 
          array (
            'errorCode' => 'IgnoreError',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExpressionCode\\": \\"ORDER.NO_REAL_NAME_AUTHENTICATION\\",\\n  \\"Cuxiao\\": true,\\n  \\"DiscountPrice\\": 178.2,\\n  \\"Cycle\\": \\"MONTH\\",\\n  \\"TradePrice\\": 19.8,\\n  \\"OriginalPrice\\": 198,\\n  \\"Duration\\": 1,\\n  \\"Currency\\": \\"CNY\\",\\n  \\"ExpressionMessage\\": \\"企业用户才能购买\\",\\n  \\"InfoTitle\\": \\"新年特惠\\",\\n  \\"ProductCode\\": \\"cmgj01****\\",\\n  \\"PromotionRules\\": {\\n    \\"PromotionRule\\": [\\n      {\\n        \\"Title\\": \\"展示型首年19.8元\\",\\n        \\"Name\\": \\"展示型首年19.8元\\",\\n        \\"RuleId\\": \\"102112\\"\\n      }\\n    ]\\n  },\\n  \\"Coupons\\": {\\n    \\"Coupon\\": [\\n      {\\n        \\"CouponOptionCode\\": \\"ActiveCoupon\\",\\n        \\"CouponOptionNo\\": \\"3874923111\\",\\n        \\"CouponName\\": \\"促销\\",\\n        \\"CouponDesc\\": \\"促销\\",\\n        \\"IsSelected\\": false,\\n        \\"CanPromFee\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribePriceResponse>\\n    <Cuxiao>false</Cuxiao>\\n    <Cycle>Month</Cycle>\\n    <DiscountPrice>0</DiscountPrice>\\n    <Duration>1</Duration>\\n    <OriginalPrice>0</OriginalPrice>\\n    <ProductCode>cmgj01****</ProductCode>\\n    <TradePrice>0</TradePrice>\\n</DescribePriceResponse>","errorExample":""}]',
      'title' => '查询对应商品的价格信息',
      'summary' => '调用 DescribePrice 查询对应商品的价格信息。',
    ),
    'DescribeProduct' => 
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
          'name' => 'AliUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AliUid',
            'type' => 'string',
            'required' => false,
            'example' => '190********569',
          ),
        ),
        1 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品对应商品码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cmjj01**45',
          ),
        ),
        2 => 
        array (
          'name' => 'QueryDraft',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询商品草稿，通常不需要查询商品草稿，商品草稿适用于在商品正式上架售卖之前查询。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
              'FrontCategoryId' => 
              array (
                'description' => '商品类目 ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '523617212',
              ),
              'Status' => 
              array (
                'description' => '已废弃',
                'type' => 'string',
                'example' => '1',
              ),
              'Type' => 
              array (
                'description' => '商品类型。取值：

* APP：应用类
* DOWNLOAD： 下载类
* MIRROR： 镜像类
* SERVICE： 服务类
* API_SERVICE： api类',
                'type' => 'string',
                'example' => 'MIRROR',
              ),
              'PicUrl' => 
              array (
                'description' => '商品图片 URL',
                'type' => 'string',
                'example' => 'https://oss.aliyuncs.com/photogallery/photo/1930532890589852/6245/495d5f19-03e4-4c2e-9c4e-bef9ab6af1e1.png',
              ),
              'Score' => 
              array (
                'description' => '商品评分',
                'type' => 'number',
                'format' => 'float',
                'example' => '5.0',
              ),
              'UseCount' => 
              array (
                'description' => '使用计数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'GmtModified' => 
              array (
                'description' => '更改时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1578931200000',
              ),
              'SupplierPk' => 
              array (
                'description' => '服务商 UID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1526111111****',
              ),
              'GmtCreated' => 
              array (
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1578931200000',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '6EF60BEC-0242-43AF-BB20-270359FB54A7',
              ),
              'ShortDescription' => 
              array (
                'description' => '商品简介',
                'type' => 'string',
                'example' => '该镜像为LNMP（Ubuntu16.04 64位+Nginx+MySQL5.6+PHP5.3）',
              ),
              'Description' => 
              array (
                'description' => '商品详情描述，支持 HTML。',
                'type' => 'string',
                'example' => '<div>基于阿里云（Ubuntu16.04 64位）系统源码安装，安全、稳定、高效！</div>',
              ),
              'Code' => 
              array (
                'description' => '商品对应商品码',
                'type' => 'string',
                'example' => 'cmjj01**45',
              ),
              'AuditFailMsg' => 
              array (
                'description' => '审核失败原因，QueryDraft = true 时返回。',
                'type' => 'string',
                'example' => '功能验收不通过',
              ),
              'Name' => 
              array (
                'description' => '商品名称',
                'type' => 'string',
                'example' => 'LNMP环境（Ubuntu16.04 Nginx PHP5.3）',
              ),
              'AuditTime' => 
              array (
                'description' => '审核时间，QueryDraft = true 时返回。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1581609600000',
              ),
              'AuditStatus' => 
              array (
                'description' => '审核状态，QueryDraft = true 时返回。
- draft：未提交
- security_ing：安全审核中
- security_fail：安全审核失败
- function_ing：功能审核中
- function_fail：功能审核失败
- info_ing：商品信息审核中
- info_fail：商品信息审核失败
- success：成功
',
                'type' => 'string',
                'example' => 'function_fail',
              ),
              'ShopInfo' => 
              array (
                'description' => '店铺信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'description' => '店铺名称',
                    'type' => 'string',
                    'example' => '**科学公司',
                  ),
                  'Emails' => 
                  array (
                    'description' => '邮箱',
                    'type' => 'string',
                    'example' => '46**41@example.com',
                  ),
                  'Id' => 
                  array (
                    'description' => '店铺 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'WangWangs' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'WangWang' => 
                      array (
                        'description' => '旺旺',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Remark' => 
                            array (
                              'description' => '备注',
                              'type' => 'string',
                              'example' => '123',
                            ),
                            'UserName' => 
                            array (
                              'description' => '旺旺用户名',
                              'type' => 'string',
                              'example' => 'ABC',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Telephones' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Telephone' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '电话',
                          'type' => 'string',
                          'example' => '{1386658****, 1386658****}',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ProductSkus' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ProductSku' => 
                  array (
                    'description' => '商品规格信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Hidden' => 
                        array (
                          'description' => '是否隐藏',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Code' => 
                        array (
                          'description' => '规格码',
                          'type' => 'string',
                          'example' => 'cmjj01****-Package',
                        ),
                        'Constraints' => 
                        array (
                          'description' => '规格模块约束，支持 JSON 格式。',
                          'type' => 'string',
                          'example' => '{\\"img_id\\":{\\"img_version|img_region\\":{\\"V1.7|cn-shenzhen-st3-a01\\":[\\"m-wz9ho4hmos0lpxcldqoq\\"]}}',
                        ),
                        'Name' => 
                        array (
                          'description' => '规格名称',
                          'type' => 'string',
                          'example' => '21',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '付费方式：

* POSTPAY：后付费
* PREPAY：预付费
',
                          'type' => 'string',
                          'example' => 'PREPAY',
                        ),
                        'OrderPeriods' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OrderPeriod' => 
                            array (
                              'description' => '可订购周期',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Name' => 
                                  array (
                                    'description' => '订购周期名称',
                                    'type' => 'string',
                                    'example' => '小时',
                                  ),
                                  'PeriodType' => 
                                  array (
                                    'description' => '预付费时间单位',
                                    'type' => 'string',
                                    'example' => 'HOUR',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Modules' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Module' => 
                            array (
                              'description' => '规格模块信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Code' => 
                                  array (
                                    'description' => '规格模块 Code',
                                    'type' => 'string',
                                    'example' => 'img_id',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '模块名称',
                                    'type' => 'string',
                                    'example' => '镜像ID',
                                  ),
                                  'Id' => 
                                  array (
                                    'description' => '模块 ID',
                                    'type' => 'string',
                                    'example' => '248220',
                                  ),
                                  'Properties' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Property' => 
                                      array (
                                        'description' => '模块可选值',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Key' => 
                                            array (
                                              'description' => '英文名称',
                                              'type' => 'string',
                                              'example' => 'img_id',
                                            ),
                                            'ShowType' => 
                                            array (
                                              'description' => '展示样式类型。取值：
- number： 数字
- string:  字符串
- radio：单选',
                                              'type' => 'string',
                                              'example' => 'number',
                                            ),
                                            'Name' => 
                                            array (
                                              'description' => '中文名称',
                                              'type' => 'string',
                                              'example' => '镜像ID',
                                            ),
                                            'DisplayUnit' => 
                                            array (
                                              'description' => '显示单位',
                                              'type' => 'string',
                                              'example' => '1',
                                            ),
                                            'PropertyValues' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'PropertyValue' => 
                                                array (
                                                  'description' => '属性值',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'DisplayName' => 
                                                      array (
                                                        'description' => '展示名称',
                                                        'type' => 'string',
                                                        'example' => '华北 1_V1.1',
                                                      ),
                                                      'Type' => 
                                                      array (
                                                        'description' => '属性值类型',
                                                        'type' => 'string',
                                                        'example' => 'single_string',
                                                      ),
                                                      'Step' => 
                                                      array (
                                                        'description' => '步进',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                      ),
                                                      'Value' => 
                                                      array (
                                                        'description' => '属性值',
                                                        'type' => 'string',
                                                        'example' => 'm-28e213e7t',
                                                      ),
                                                      'Max' => 
                                                      array (
                                                        'description' => '最大',
                                                        'type' => 'string',
                                                        'example' => '123',
                                                      ),
                                                      'Remark' => 
                                                      array (
                                                        'description' => '备注',
                                                        'type' => 'string',
                                                        'example' => 'abc',
                                                      ),
                                                      'Min' => 
                                                      array (
                                                        'description' => '最小',
                                                        'type' => 'string',
                                                        'example' => '11',
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
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ProductExtras' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ProductExtra' => 
                  array (
                    'description' => '商品附加信息：

* 产品亮点 product_advantage
* 产品截图 product_shot
* 使用指南 product_guide
* 售后支持范围 product_support
* 产品资质 product_aptitude
* 产品说明 product_direction
* 客户案例 product_case
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '扩展项类型：

* HTML
* LIST
* JSON
* SLIDER
* LINK
* IMG
',
                          'type' => 'string',
                          'example' => 'HTML',
                        ),
                        'Key' => 
                        array (
                          'description' => '扩展项英文标识',
                          'type' => 'string',
                          'example' => 'product_advantage',
                        ),
                        'Label' => 
                        array (
                          'description' => '扩展项中文标识',
                          'type' => 'string',
                          'example' => '产品亮点',
                        ),
                        'Order' => 
                        array (
                          'description' => '排序',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Values' => 
                        array (
                          'description' => '扩展项数据值',
                          'type' => 'string',
                          'example' => '\\"1. 基于阿里云（Ubuntu16.04 64位）系统源码安装，安全、稳定、高效！\\"',
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
            'errorCode' => 'DeniedModify',
            'errorMessage' => 'You are not authorized to call the specified API operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FrontCategoryId\\": 523617212,\\n  \\"Status\\": \\"1\\",\\n  \\"Type\\": \\"MIRROR\\",\\n  \\"PicUrl\\": \\"https://oss.aliyuncs.com/photogallery/photo/1930532890589852/6245/495d5f19-03e4-4c2e-9c4e-bef9ab6af1e1.png\\",\\n  \\"Score\\": 5,\\n  \\"UseCount\\": 10,\\n  \\"GmtModified\\": 1578931200000,\\n  \\"SupplierPk\\": 0,\\n  \\"GmtCreated\\": 1578931200000,\\n  \\"RequestId\\": \\"6EF60BEC-0242-43AF-BB20-270359FB54A7\\",\\n  \\"ShortDescription\\": \\"该镜像为LNMP（Ubuntu16.04 64位+Nginx+MySQL5.6+PHP5.3）\\",\\n  \\"Description\\": \\"<div>基于阿里云（Ubuntu16.04 64位）系统源码安装，安全、稳定、高效！</div>\\",\\n  \\"Code\\": \\"cmjj01**45\\",\\n  \\"AuditFailMsg\\": \\"功能验收不通过\\",\\n  \\"Name\\": \\"LNMP环境（Ubuntu16.04 Nginx PHP5.3）\\",\\n  \\"AuditTime\\": 1581609600000,\\n  \\"AuditStatus\\": \\"function_fail\\",\\n  \\"ShopInfo\\": {\\n    \\"Name\\": \\"**科学公司\\",\\n    \\"Emails\\": \\"46**41@example.com\\",\\n    \\"Id\\": 123,\\n    \\"WangWangs\\": {\\n      \\"WangWang\\": [\\n        {\\n          \\"Remark\\": \\"123\\",\\n          \\"UserName\\": \\"ABC\\"\\n        }\\n      ]\\n    },\\n    \\"Telephones\\": {\\n      \\"Telephone\\": [\\n        \\"{1386658****, 1386658****}\\"\\n      ]\\n    }\\n  },\\n  \\"ProductSkus\\": {\\n    \\"ProductSku\\": [\\n      {\\n        \\"Hidden\\": true,\\n        \\"Code\\": \\"cmjj01****-Package\\",\\n        \\"Constraints\\": \\"{\\\\\\\\\\\\\\"img_id\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"img_version|img_region\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"V1.7|cn-shenzhen-st3-a01\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"m-wz9ho4hmos0lpxcldqoq\\\\\\\\\\\\\\"]}}\\",\\n        \\"Name\\": \\"21\\",\\n        \\"ChargeType\\": \\"PREPAY\\",\\n        \\"OrderPeriods\\": {\\n          \\"OrderPeriod\\": [\\n            {\\n              \\"Name\\": \\"小时\\",\\n              \\"PeriodType\\": \\"HOUR\\"\\n            }\\n          ]\\n        },\\n        \\"Modules\\": {\\n          \\"Module\\": [\\n            {\\n              \\"Code\\": \\"img_id\\",\\n              \\"Name\\": \\"镜像ID\\",\\n              \\"Id\\": \\"248220\\",\\n              \\"Properties\\": {\\n                \\"Property\\": [\\n                  {\\n                    \\"Key\\": \\"img_id\\",\\n                    \\"ShowType\\": \\"number\\",\\n                    \\"Name\\": \\"镜像ID\\",\\n                    \\"DisplayUnit\\": \\"1\\",\\n                    \\"PropertyValues\\": {\\n                      \\"PropertyValue\\": [\\n                        {\\n                          \\"DisplayName\\": \\"华北 1_V1.1\\",\\n                          \\"Type\\": \\"single_string\\",\\n                          \\"Step\\": \\"1\\",\\n                          \\"Value\\": \\"m-28e213e7t\\",\\n                          \\"Max\\": \\"123\\",\\n                          \\"Remark\\": \\"abc\\",\\n                          \\"Min\\": \\"11\\"\\n                        }\\n                      ]\\n                    }\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"ProductExtras\\": {\\n    \\"ProductExtra\\": [\\n      {\\n        \\"Type\\": \\"HTML\\",\\n        \\"Key\\": \\"product_advantage\\",\\n        \\"Label\\": \\"产品亮点\\",\\n        \\"Order\\": 0,\\n        \\"Values\\": \\"\\\\\\\\\\\\\\"1. 基于阿里云（Ubuntu16.04 64位）系统源码安装，安全、稳定、高效！\\\\\\\\\\\\\\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeProductResponse>\\n<Description>&lt;p&gt;aaa&lt;/p&gt;</Description>\\n<Type>APP</Type>\\n<PicUrl>https://photogallery.oss.aliyuncs.com/photo/1666562244190862/17909/ce4e8f40-1d3e-465d-b884-f78a432cde81.jpg</PicUrl>\\n<Code>cmgj02****</Code>\\n<ProductExtras>\\n    <ProductExtra>\\n        <Values>\\"aaa\\"</Values>\\n        <Key>product_advantage</Key>\\n        <Type>HTML</Type>\\n        <Order>0</Order>\\n        <Label>产品亮点</Label>\\n    </ProductExtra>\\n    <ProductExtra>\\n        <Values>\\n            <Value>[\\"Windows\\"]</Value>\\n            <Label>适用系统版本</Label>\\n        </Values>\\n        <Values>\\n            <Value>aa</Value>\\n            <Label>版本号</Label>\\n        </Values>\\n        <Values>\\n            <Value>应用软件类</Value>\\n            <Label>交付方式</Label>\\n        </Values>\\n        <Key>product_param</Key>\\n        <Type>LIST</Type>\\n        <Order>15</Order>\\n        <Label>产品参数</Label>\\n    </ProductExtra>\\n</ProductExtras>\\n<Name>V3【回归】服务类-按周期</Name>\\n<ShortDescription>aaa</ShortDescription>\\n<ShopInfo>\\n    <Telephones>\\n        <Telephone>1581016*****</Telephone>\\n    </Telephones>\\n    <Name>****有限公司测试</Name>\\n    <Emails>***.dxz@***.com</Emails>\\n    <WangWangs>\\n        <WangWang>\\n            <UserName>凌鲲</UserName>\\n            <Remark>凌鲲</Remark>\\n        </WangWang>\\n    </WangWangs>\\n    <Id>1597411</Id>\\n</ShopInfo>\\n<ProductSkus>\\n    <ProductSku>\\n        <ChargeType>PREPAY</ChargeType>\\n        <Name>预付费</Name>\\n        <OrderPeriods>\\n            <OrderPeriod>\\n                <Name>一年</Name>\\n                <PeriodType>YEAR</PeriodType>\\n            </OrderPeriod>\\n        </OrderPeriods>\\n        <Modules>\\n            <Module>\\n                <Name>几号数</Name>\\n                <Id>1018040000484633</Id>\\n                <Code>AC</Code>\\n                <Properties>\\n                    <Property>\\n                        <Name>几号数</Name>\\n                        <Key>AC</Key>\\n                        <DisplayUnit>个</DisplayUnit>\\n                        <PropertyValues>\\n                            <PropertyValue>\\n                                <Step>1</Step>\\n                                <Type>range_float</Type>\\n                                <Max>999</Max>\\n                                <Min>1</Min>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Step>1</Step>\\n                                <Type>range_float</Type>\\n                                <Max>999999999999999</Max>\\n                                <Min>999</Min>\\n                            </PropertyValue>\\n                        </PropertyValues>\\n                        <ShowType>number</ShowType>\\n                    </Property>\\n                </Properties>\\n            </Module>\\n            <Module>\\n                <Name>购买个数</Name>\\n                <Id>1018040000484634</Id>\\n                <Code>order_num</Code>\\n                <Properties>\\n                    <Property>\\n                        <Name>购买个数</Name>\\n                        <Key>order_num</Key>\\n                        <DisplayUnit/>\\n                        <PropertyValues>\\n                            <PropertyValue>\\n                                <Step>1</Step>\\n                                <Type>range_float</Type>\\n                                <Max>100</Max>\\n                                <Min>1</Min>\\n                            </PropertyValue>\\n                        </PropertyValues>\\n                        <ShowType>number</ShowType>\\n                    </Property>\\n                </Properties>\\n            </Module>\\n            <Module>\\n                <Name>购买时长</Name>\\n                <Id>1018040000484740</Id>\\n                <Code>ord_time</Code>\\n                <Properties>\\n                    <Property>\\n                        <Name>购买时长</Name>\\n                        <Key>ord_time</Key>\\n                        <DisplayUnit/>\\n                        <PropertyValues>\\n                            <PropertyValue>\\n                                <Value>1:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>1个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>2:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>2个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>3:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>3个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>4:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>4个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>5:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>5个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>6:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>6个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>7:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>7个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>8:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>8个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>9:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>9个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>10:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>10个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>11:Month</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>11个月</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>1:Year</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>1年</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>2:Year</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>2年</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>3:Year</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>3年</DisplayName>\\n                            </PropertyValue>\\n                        </PropertyValues>\\n                        <ShowType>radio</ShowType>\\n                    </Property>\\n                </Properties>\\n            </Module>\\n            <Module>\\n                <Name>套餐配置</Name>\\n                <Id>1018040000484632</Id>\\n                <Code>package_config</Code>\\n                <Properties>\\n                    <Property>\\n                        <Name>套餐配置</Name>\\n                        <Key>package_config</Key>\\n                        <DisplayUnit/>\\n                        <PropertyValues>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100001</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>{\\"frontShow\\":true}</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100002</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>{\\"frontShow\\":true}</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100003</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>{\\"frontShow\\":true}</DisplayName>\\n                            </PropertyValue>\\n                        </PropertyValues>\\n                        <ShowType>string</ShowType>\\n                    </Property>\\n                </Properties>\\n            </Module>\\n            <Module>\\n                <Name>套餐版本</Name>\\n                <Id>1018040000484631</Id>\\n                <Code>package_version</Code>\\n                <Properties>\\n                    <Property>\\n                        <Name>套餐版本</Name>\\n                        <Key>package_version</Key>\\n                        <DisplayUnit/>\\n                        <PropertyValues>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100001</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>月版</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100002</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>年版</DisplayName>\\n                            </PropertyValue>\\n                            <PropertyValue>\\n                                <Value>yuncode2138100003</Value>\\n                                <Type>single_string</Type>\\n                                <DisplayName>年月版</DisplayName>\\n                            </PropertyValue>\\n                        </PropertyValues>\\n                        <ShowType>radio</ShowType>\\n                    </Property>\\n                </Properties>\\n            </Module>\\n        </Modules>\\n        <Constraints>{\\"AC\\":{\\"package_version\\":{\\"yuncode2138100003\\":[{\\"min\\":1,\\"max\\":999999999999999,\\"step\\":1}]}},\\"ord_time\\":{\\"package_version\\":{\\"yuncode2138100001\\":[\\"1:Month\\",\\"2:Month\\",\\"3:Month\\",\\"4:Month\\",\\"5:Month\\",\\"6:Month\\",\\"7:Month\\",\\"8:Month\\",\\"9:Month\\",\\"10:Month\\",\\"11:Month\\"],\\"yuncode2138100002\\":[\\"1:Year\\",\\"2:Year\\",\\"3:Year\\"],\\"yuncode2138100003\\":[\\"1:Month\\",\\"2:Month\\",\\"3:Month\\",\\"4:Month\\",\\"5:Month\\",\\"6:Month\\",\\"7:Month\\",\\"8:Month\\",\\"9:Month\\",\\"10:Month\\",\\"11:Month\\",\\"1:Year\\",\\"2:Year\\",\\"3:Year\\"]}}}</Constraints>\\n        <Hidden>false</Hidden>\\n        <Code>cmgj02****-prepay</Code>\\n    </ProductSku>\\n</ProductSkus>\\n<Score>0</Score>\\n<SupplierPk>152611111****</SupplierPk>\\n<FrontCategoryId>523617212</FrontCategoryId>\\n</DescribeProductResponse>","errorExample":""}]',
      'title' => '用于查询指定商品的详细信息',
      'summary' => '调用 DescribeProduct 用于查询指定商品的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProducts' => 
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
          'name' => 'SearchTerm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索词',
            'type' => 'string',
            'required' => false,
            'example' => '镜像',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示商品数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤条件列表。



',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '搜索标签类别，取值：

* sort：排序方式
* categoryId：类目 ID
* productType：商品类型
* aliyunUid：商品所属服务商的阿里云主账号Uid',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'categoryId',
                ),
                'Value' => 
                array (
                  'description' => '搜索标签取值：


- sort
  - user_count-desc：近180天成交数
  - created_on-desc：创建时间
  - price-desc：价格
  - score-desc：评分

- categoryId 
  - 软件市场  53366009
    + 运行环境  53448001
    - 管理与监控  53690006
    - 建站系统  53616009
    - 应用开发  55530001
    - 数据库       56024006
    - 服务器软件  56014009
    - 网络功能软件 56368007
    - 操作系统  57742013
  - 服务市场  52734001
    - 数据迁移  52738004
    - 环境配置  52746001
    - 故障排查  52740002
    - 安全代维  52732002
    - 定制开发  56082003
    - 培训与认证  57252001
    - 专线接入  57392001
    - 企业服务  56838014
    - 安全服务  57004003
  - 建站市场  52738001
    - 企业展示  52738005
    - 电子商务  52750001
    - 手机网站  52752001
    - 设计  52732003
    - 信息门户  52744002
    - 售后服务  52744003
    - 社区论坛  55586021
    - 移动营销  55514022
    - 模板网站  56598032
    - 网站空间  57342011
  - 云安全市场  56764045
    + 主机安全  56832023
    + 应用安全  56846020
    + 数据安全  56824015
    + 安全管理  56830014
    + 网络安全  56820014
  - 企业应用  56832009
    - 办公管理  56778013
    - 财务管理  56764034
    - 人事管理  56780006
    - 销售管理  56842010
    - 广告营销  56842011
    - 外贸业务  56790007
    - 云通信       57602001
    - 供应链管理  57604001
    - 数据服务  57606001
  - 解决方案  56848023
    - 电商  56848024
    - 金融  56820017
    - 物流  56776025
    - 政务  56842031
    - 多媒体  56784018
    - 物联网  56794026
    - 大数据  56792022
  - API市场  56956004
    - 电子商务  56928004
    - 金融理财  57000002
    - 交通地理  57002002
    - 企业管理  56928005
    - 公共事务  57002003
    - 气象水利  57096001
    - 人工智能  57124001
    - 生活服务  57126001
  - 物联网市场  201194001
    - 集成系统  201196001
    - 智能硬件  201198001
    - 模组  201200001
    - 传感器  201192002
    - 芯片  201202001
    - 物联网应用  201196002
    - 物联服务  201196003
  - 数据智能  201204005
    - 数据分析及展现  201190008
    - 舆情分析  201198004
    - 电商与营销  201202006
    - 人工智能  201204006
    - 气象交通  201214006
    - 金融财务  201208013
- productType:
  - APP：应用类
  - SERVICE：服务类
  - MIRROR：镜像类
  - DOWNLOAD：下载类
  - API_SERVICE：API 类
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '53366009',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
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
                'description' => '请求 ID',
                'type' => 'string',
                'example' => 'A077D99E-0C4D-421E-A5D4-F533F6657817',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示商品数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '符合搜索条件的商品数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '75',
              ),
              'ProductItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ProductItem' => 
                  array (
                    'description' => '商品信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PriceInfo' => 
                        array (
                          'description' => '价格信息。',
                          'type' => 'string',
                          'example' => '{\'DiscountPrice\': 0.0, \'TradePrice\': 15750.0, \'Currency\': \'CNY\', \'OriginalPrice\': 15750.0, \'RuleIds\': {\'RuleId\': []}, \'Coupons\': {\'Coupon\': []}}',
                        ),
                        'DeliveryWay' => 
                        array (
                          'description' => '交付方式',
                          'type' => 'string',
                          'example' => '镜像',
                        ),
                        'ImageUrl' => 
                        array (
                          'description' => '图片 URL',
                          'type' => 'string',
                          'example' => 'https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7549/767d6d07-8366-4822-b84e-61f6ea10d146.png',
                        ),
                        'WarrantyDate' => 
                        array (
                          'description' => '质保时间',
                          'type' => 'string',
                          'example' => '1天',
                        ),
                        'Tags' => 
                        array (
                          'description' => '产品标签',
                          'type' => 'string',
                          'example' => '企业,上云,Windows,Windows server 2012,Apache,Nginx,Windows面板',
                        ),
                        'Score' => 
                        array (
                          'description' => '评分',
                          'type' => 'string',
                          'example' => '5.0',
                        ),
                        'SupplierId' => 
                        array (
                          'description' => '供应商 ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '228399',
                        ),
                        'OperationSystem' => 
                        array (
                          'description' => '交付时间',
                          'type' => 'string',
                          'example' => 'windows',
                        ),
                        'ShortDescription' => 
                        array (
                          'description' => '商品简介',
                          'type' => 'string',
                          'example' => '【定制建站一条龙服务+阿里云独享服务器】由客户经理与设计师提供一对一服务，应用标准化全自动服务流程体系，帮助企业轻松拥有官方网站。该建站产品与<em>ECS</em>下单时同时购买，<em>ECS</em>最低配置1核1G即可。购买须知：请在购买<em>ECS</em>配置安全组时选择HTTP：80端口 ...',
                        ),
                        'DeliveryDate' => 
                        array (
                          'description' => '交付时间',
                          'type' => 'string',
                          'example' => '1天',
                        ),
                        'TargetUrl' => 
                        array (
                          'description' => '详情页URL',
                          'type' => 'string',
                          'example' => '/products/53616009/cmjj02****.html',
                        ),
                        'Code' => 
                        array (
                          'description' => '商品码',
                          'type' => 'string',
                          'example' => 'cmjj02****',
                        ),
                        'CategoryId' => 
                        array (
                          'description' => '类目 ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '53398003',
                        ),
                        'Name' => 
                        array (
                          'description' => '商品名称',
                          'type' => 'string',
                          'example' => 'PHP多版本环境（Windows2012 | phpStudy）',
                        ),
                        'SuggestedPrice' => 
                        array (
                          'description' => '建议价格',
                          'type' => 'string',
                          'example' => '10元/月',
                        ),
                        'SupplierName' => 
                        array (
                          'description' => '供应商名称',
                          'type' => 'string',
                          'example' => '长沙****有限公司',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.CategoryId',
            'errorMessage' => 'The specified CategoryId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.Sort',
            'errorMessage' => 'The specified Sort is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Param',
            'errorMessage' => 'The specified Filter key is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A077D99E-0C4D-421E-A5D4-F533F6657817\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 75,\\n  \\"ProductItems\\": {\\n    \\"ProductItem\\": [\\n      {\\n        \\"PriceInfo\\": \\"{\'DiscountPrice\': 0.0, \'TradePrice\': 15750.0, \'Currency\': \'CNY\', \'OriginalPrice\': 15750.0, \'RuleIds\': {\'RuleId\': []}, \'Coupons\': {\'Coupon\': []}}\\",\\n        \\"DeliveryWay\\": \\"镜像\\",\\n        \\"ImageUrl\\": \\"https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7549/767d6d07-8366-4822-b84e-61f6ea10d146.png\\",\\n        \\"WarrantyDate\\": \\"1天\\",\\n        \\"Tags\\": \\"企业,上云,Windows,Windows server 2012,Apache,Nginx,Windows面板\\",\\n        \\"Score\\": \\"5.0\\",\\n        \\"SupplierId\\": 228399,\\n        \\"OperationSystem\\": \\"windows\\",\\n        \\"ShortDescription\\": \\"【定制建站一条龙服务+阿里云独享服务器】由客户经理与设计师提供一对一服务，应用标准化全自动服务流程体系，帮助企业轻松拥有官方网站。该建站产品与<em>ECS</em>下单时同时购买，<em>ECS</em>最低配置1核1G即可。购买须知：请在购买<em>ECS</em>配置安全组时选择HTTP：80端口 ...\\",\\n        \\"DeliveryDate\\": \\"1天\\",\\n        \\"TargetUrl\\": \\"/products/53616009/cmjj02****.html\\",\\n        \\"Code\\": \\"cmjj02****\\",\\n        \\"CategoryId\\": 53398003,\\n        \\"Name\\": \\"PHP多版本环境（Windows2012 | phpStudy）\\",\\n        \\"SuggestedPrice\\": \\"10元/月\\",\\n        \\"SupplierName\\": \\"长沙****有限公司\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeProductsResponse>\\n<pageNumber>1</pageNumber>\\n<pageSize>10</pageSize>\\n<productItems>\\n    <categoryId>53398003</categoryId>\\n    <code>PHP多版本环境（Windows2012 | phpStudy）</code>\\n    <code1>PHP多版本环境（Windows2012 | phpStudy）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7549/767d6d07-8366-4822-b84e-61f6ea10d146.png</imageUrl>\\n    <operationSystem>Windows2008 R2 企业版 64位</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的phpStudy镜像是一个预安装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。phpStudy是一个PHP环境集成包，支持php5.2到7.0多个版本切换，同时支持Apache,Nginx,IIS ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,上云,Windows,Windows server 2012,Apache,Nginx,Windows面板</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>56014009</categoryId>\\n    <code>Pydio 开源在线文件管理系统（构建企业网盘和云存储系统）</code>\\n    <code1>Pydio 开源在线文件管理系统（构建企业网盘和云存储系统）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7049/47bde5de-8610-439f-a160-1eb34aec5505.png</imageUrl>\\n    <operationSystem>CentOS7.0 64位</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的Pydio镜像是一个预安装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。Pydio是功能强大在线文件管理系统（ECM），用于构建自托管的企业网盘和云存储系统，支持多用户的文档协作、分享、设备同步。 ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,应用开发,Linux,Centos,PHP,LAMP</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>53616009</categoryId>\\n    <code>Joomla! 内容管理系统( WAMP )</code>\\n    <code1>Joomla! 内容管理系统( WAMP )</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/5280/fab724de-da66-4548-9717-1a1d3ac6f887.png</imageUrl>\\n    <operationSystem>Windows2008 64位 标准版</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的Joomla3.7.5预装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。Joomla是全球三大开源内容管理系统之一（CMS），比肩WordPress和Drupal，占据全球5%的建站市场。 ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>开发者,建站,Windows,Windows server 2008,PHP,WAMP,Joomla!</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>53690006</categoryId>\\n    <code>Ubuntu 16.04 64位（含Webmin中文）</code>\\n    <code1>Ubuntu 16.04 64位（含Webmin中文）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/4613/57259fc6-7086-42b8-9619-f688fd3eb310.png</imageUrl>\\n    <score>5.0</score>\\n    <shortDescription>由Websoft9提供Ubuntu 16.04+Webmin1.881（中文）镜像，可以一键安装到&lt;em&gt;ECS&lt;/em&gt;。Webmin是知名的Linux可视化面板管理工具，100%免费开源，可轻松管理文件、配置域名、修改配置文件、备份数据等 ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>站长,上云,Linux,Centos,LAMP,Webmin,Linux面板</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>53616009</categoryId>\\n    <code>云·企业官网尊贵版（ECS）</code>\\n    <code1>云·企业官网尊贵版（ECS）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://photogallery.oss.aliyuncs.com/photo/1984723351411381/22286/727fc507-37b5-4b91-b706-8bbc2a765a88.jpg</imageUrl>\\n    <operationSystem>windows</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>【定制建站一条龙服务+阿里云独享服务器】由客户经理与设计师提供一对一服务，应用标准化全自动服务流程体系，帮助企业轻松拥有官方网站。该建站产品与&lt;em&gt;ECS&lt;/em&gt;下单时同时购买，&lt;em&gt;ECS&lt;/em&gt;最低配置1核1G即可。购买须知：请在购买&lt;em&gt;ECS&lt;/em&gt;配置安全组时选择HTTP：80端口 ...</shortDescription>\\n    <suggestedPrice>998元/月</suggestedPrice>\\n    <supplierId>3587828</supplierId>\\n    <supplierName>**-云市场自营店</supplierName>\\n    <tags>企业,建站</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>56014009</categoryId>\\n    <code>Zurmo 开源CRM系统（LAMP）</code>\\n    <code1>Zurmo 开源CRM系统（LAMP）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7716/6b100770-1f15-43c6-b99f-9b6c53c89e2d.png</imageUrl>\\n    <operationSystem>CentOS7.4 64位</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的Zurmo镜像是一个预安装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。Zurmo是一个开源的客户关系管理系统(CRM)，使用Yii框架、RedBeanPHP和Jquery实现，界面美观，功能全面 ...</shortDescription>\\n    <suggestedPrice>20元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,上云,Linux,Centos,PHP,LAMP,ERP</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>56014009</categoryId>\\n    <code>SuiteCRM，优质开源CRM</code>\\n    <code1>SuiteCRM，优质开源CRM</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7760/0db05f1e-aa8a-490d-b8eb-093c43d93f7d.png</imageUrl>\\n    <operationSystem>CentOS7.3 64位</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的EspoCRM预装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。SuiteCRM是一个国际上屡获殊荣的企业级的、强大的、可定制的，免费的CRM系统。 ...</shortDescription>\\n    <suggestedPrice>20元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,移动营销,Linux,Centos,PHP,LAMP,ERP</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>55528001</categoryId>\\n    <code>Node.JS6 运行环境（Windows2008 | Nginx | Express）</code>\\n    <code1>Node.JS6 运行环境（Windows2008 | Nginx | Express）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://photogallery.oss.aliyuncs.com/photo/1904996544835414/7573/e03da499-c7e9-4784-867f-8789539e6a82.png</imageUrl>\\n    <score>5.0</score>\\n    <shortDescription>Websoft9提供Node.JS镜像，预装了NodeJS 6.14,PM2 2.10,Express框架,Yarn1.7,MySQL5.6,MongoDB4.0,Nginx1.14，任何&lt;em&gt;ECS&lt;/em&gt;用户可以一键获取，用于快速部署Node.JS应用程序。 ...</shortDescription>\\n    <suggestedPrice>0元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,上云,Windows,Windows server 2008,Node.js,Nginx,MySQL</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>56014009</categoryId>\\n    <code>ERPNext 中小企业开源ERP系统（Ubuntu16.04）</code>\\n    <code1>ERPNext 中小企业开源ERP系统（Ubuntu16.04）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/7259/cdee958f-bcfa-4362-ad2f-543e01140e60.png</imageUrl>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的Vtiger CRM预装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。ERPNext是全球化的开源ERP系统，使用Python语言开发，支持70+种语言，拥有150+国家的用户。界面友好，入门简单，包括：财务、采购、销售和库存管理、POS系统、制造管理、资产管理等功能。 ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>企业,上云,Linux,Ubuntu,Python,ERP</tags>\\n</productItems>\\n<productItems>\\n    <categoryId>55530001</categoryId>\\n    <code>Gitlab-CE10.1.0 代码托管系统（Ubuntu16）</code>\\n    <code1>Gitlab-CE10.1.0 代码托管系统（Ubuntu16）</code1>\\n    <deliveryWay>镜像</deliveryWay>\\n    <imageUrl>https://oss.aliyuncs.com/photogallery/photo/1904996544835414/17080/cd8053ae-2666-4716-9e4d-1b754f24fbc2.png</imageUrl>\\n    <operationSystem>Ubuntu16.04 64位</operationSystem>\\n    <score>5.0</score>\\n    <shortDescription>由Websof9提供的Omnibus Gitlab镜像是一个预安装环境，可在&lt;em&gt;ECS&lt;/em&gt;上一键安装。Gitlab是一个开源的Git代码仓库系统，用于构建私有代码托管平台，基于Rails开发，速度快、安全稳定 ...</shortDescription>\\n    <suggestedPrice>10元/月</suggestedPrice>\\n    <supplierId>228399</supplierId>\\n    <supplierName>长沙****有限公司</supplierName>\\n    <tags>开发者,应用开发,Linux,Ubuntu,Ruby,Nginx,PostgreSQL</tags>\\n</productItems>\\n<requestId>5A85CB8D-EF2F-46DA-91E2-8AF75900F1BF</requestId>\\n<totalCount>75</totalCount>\\n</DescribeProductsResponse>","errorExample":""}]',
      'title' => 'DescribeProducts',
      'summary' => '调用 DescribeProducts 拉取符合条件的商品列表及详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateOrder' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型。 取值： 
- INSTANCE_BUY：商品购买 
- INSTANCE_RENEW：实例续费 
- INSTANCE_UPGRADE：实例升级
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE_BUY',
          ),
        ),
        1 => 
        array (
          'name' => 'Commodity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单配件信息。 

可根据指定的 OrderType，使用对应的配件再进行序列化。

不同 OrderType 分别对应的 CommodityType 如下所示： 
* INSTANC_BUY：InstanceBuyCommodity
* INSTANCE_RENEW：InstanceRenewCommodity
* INSTANCE_UPGRADE：InstanceUpgradeCommodity

示例中的 Commodity 参数说明如下：
- 必传参数
  - productCode：商品码
  - skuCode：商品规格码。预付费固定为 prepay，后付费固定为 postpay。
  - duration：周期数量 1，2，3...。
  - pricingCycle：周期单位。Day（日），Month（月），Year（年）。
  - components：规格模块。其中版本 package_version 必传，其他模块根据商品的设置来传。

- 可选参数
  - quantity：订购数量
  - queryPromotion：是否查询优惠
  - couponId：优惠卷 ID
  - properties：订单扩展属性字符串，JSON 的 dict 格式
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'InstanceBuyCommodity示例：{"components":{"package_version":"yuncode1394000000"},"duration":100,"pricingCycle":"Year","productCode":"cmfw019940","properties":{},"quantity":1,"skuCode":"cmfw019940-prepay"}；InstanceRenewCommodity示例：{“components”:{“package_version”:”yuncode1806900001”},”quantity”:1,”duration”:2,”instanceId”:”6227091”,”productCode”:”cmgj024069”,”pricingCycle”:”Month”,”properties”:{},”skuCode”:”cmgj024069-prepay”}；InstanceUpgradeCommodity示例：{“components”:{“package_version”:”yuncode1806900002”},”quantity”:1,”duration”:1,”instanceId”:”6227091”,”productCode”:”cmgj024069”,”pricingCycle”:”Month”,”properties”:{},”skuCode”:”cmgj024069-prepay”} ',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderSouce',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单来源（未启用）',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        3 => 
        array (
          'name' => 'PaymentType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付款方式：
* AUTO：余额自动支付
* HAND：手动支付
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HAND',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。 
由客户端生成该参数值，要保证在不同请求间唯一，最大不值过 64 个 ASCII 字符。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2709c68a-d569-4819-9c5d-1222ed2ee924',
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
              'OrderId' => 
              array (
                'description' => '订单 ID',
                'type' => 'string',
                'example' => '202********0117',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '4ca591b5-bc30-4fa7-aeaa-c4d0ec5d24ed',
              ),
              'InstanceIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例 ID',
                      'type' => 'string',
                      'example' => '5604018',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"202********0117\\",\\n  \\"RequestId\\": \\"4ca591b5-bc30-4fa7-aeaa-c4d0ec5d24ed\\",\\n  \\"InstanceIds\\": {\\n    \\"InstanceId\\": [\\n      \\"5604018\\"\\n    ]\\n  }\\n}","errorExample":"{\\"RequestId\\":\\"004CDE94-C51C-4EBD-8D4A-8874888ECBDB\\",\\"HostId\\":\\"market.aliyuncs.com\\",\\"Code\\":\\"UnknownError\\",\\"Message\\":\\"The request processing has failed due to some unknown error.\\"}\\n"},{"type":"xml","example":"<CreateOrderResponse>\\n<RequestId>4ca591b5-bc30-4fa7-aeaa-c4d0ec5d24ed</RequestId>\\n<InstanceIds>\\n    <InstanceId>5604018</InstanceId>\\n</InstanceIds>\\n<OrderId>202********0117</OrderId>\\n</CreateOrderResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?><Error><RequestId>904A07C3-D30A-4E2C-93B2-DDECAE4B66E8</RequestId><HostId>market.aliyuncs.com</HostId><Code>UnknownError</Code><Message>The request processing has failed due to some unknown error.</Message></Error>\\n"}]',
      'title' => '创建订单',
      'summary' => '调用 CreateOrder 创建订单。',
      'description' => '请确保在使用该接口前，已充分了解云市场产品的收费方式和[价格](https://market.aliyun.com/)。

商业镜像创建订单接口请参考 [CreateInstance](https://help.aliyun.com/document_detail/25499.html)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeOrder' => 
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
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '202*********415',
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
              'ProductName' => 
              array (
                'description' => '订购商品名称',
                'type' => 'string',
                'example' => 'saas服务产品',
              ),
              'SupplierCompanyName' => 
              array (
                'description' => '卖家公司名称',
                'type' => 'string',
                'example' => '**科技股份有限公司',
              ),
              'OriginalPrice' => 
              array (
                'description' => '订单原价（元）',
                'type' => 'number',
                'format' => 'float',
                'example' => '10.0',
              ),
              'AliUid' => 
              array (
                'description' => '阿里云用户唯一标识（aliyunPK）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '190311111111****',
              ),
              'CouponPrice' => 
              array (
                'description' => '已使用代金券金额（元）',
                'type' => 'number',
                'format' => 'float',
                'example' => '0.0',
              ),
              'AccountQuantity' => 
              array (
                'description' => '账号数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'PeriodType' => 
              array (
                'description' => '预付费的时间单位。取值：

- MONTH：单月
- SEASON：季度
- HALFYEAR：半年
- YEAR：一年
- TWOYEARS：两年
- ONCE：单次',
                'type' => 'string',
                'example' => 'MONTH',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '6EF60BEC-0242-43AF-BB20-270359FB54A7',
              ),
              'PayStatus' => 
              array (
                'description' => '付款状态。取值：

- PAID 已支付
- UNPAID 未支付',
                'type' => 'string',
                'example' => 'PAID',
              ),
              'PaymentPrice' => 
              array (
                'description' => '实际支付金额（元）',
                'type' => 'number',
                'format' => 'float',
                'example' => '0.0',
              ),
              'OrderStatus' => 
              array (
                'description' => '订单状态。取值：

- NORMAL 正常
- REFUND 退款
- DELETE 作废',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'ProductSkuCode' => 
              array (
                'description' => '订购商品规格 Code',
                'type' => 'string',
                'example' => 'cmgj02****-prepay',
              ),
              'PaidOn' => 
              array (
                'description' => '付款时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1531191675000',
              ),
              'Components' => 
              array (
                'description' => '订单模块信息。示例中的参数说明如下：

- package_quantity： 使用次数（API 商品特有模块）
- package_version：版本
- ord_time： 时长
- order_num： 数量
- code：模块 Code
- globarKey： 模块 key
- name： 模块名称
- value： 模块值',
                'type' => 'object',
                'example' => '{ "package_quantity": { "code": "package_quantity", "globarKey": "cmapi014302_package_quantity_package_quantity_10000", "name": "10000次", "value": "10000" }, "package_version": { "code": "package_version", "globarKey": "cmapi014302_package_version_package_version_yuncode830200000", "name": "0元／10000次", "value": "yuncode830200000" }, "ord_time": { "code": "ord_time", "globarKey": "cmapi014302_ord_time_ord_time_6:Month", "name": "6个月", "value": "6:Month" }, "order_num": { "code": "order_num", "globarKey": "cmapi014302_order_num_order_num_1", "name": "1", "value": "1" } }',
              ),
              'CreatedOn' => 
              array (
                'description' => '下单时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1531191564000',
              ),
              'OrderType' => 
              array (
                'description' => '订单类型。取值：

- NEW 新购订单
- RENEW 续费订单
- TRIAL 试用订单',
                'type' => 'string',
                'example' => 'NEW',
              ),
              'TotalPrice' => 
              array (
                'description' => '订单应收金额（元）',
                'type' => 'number',
                'format' => 'float',
                'example' => '0.0',
              ),
              'Quantity' => 
              array (
                'description' => '订购数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '202211111111111',
              ),
              'ProductCode' => 
              array (
                'description' => '商品Code',
                'type' => 'string',
                'example' => 'cmgj02****',
              ),
              'SupplierTelephones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Telephone' => 
                  array (
                    'description' => '卖家客服热线',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '卖家客服热线',
                      'type' => 'string',
                      'example' => '{139*****950, 139*****831}',
                    ),
                  ),
                ),
              ),
              'InstanceIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '订单关联业务实例',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单关联业务实例 ID',
                      'type' => 'string',
                      'example' => '{1597985, 1227195}',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ProductName\\": \\"saas服务产品\\",\\n  \\"SupplierCompanyName\\": \\"**科技股份有限公司\\",\\n  \\"OriginalPrice\\": 10,\\n  \\"AliUid\\": 0,\\n  \\"CouponPrice\\": 0,\\n  \\"AccountQuantity\\": 0,\\n  \\"PeriodType\\": \\"MONTH\\",\\n  \\"RequestId\\": \\"6EF60BEC-0242-43AF-BB20-270359FB54A7\\",\\n  \\"PayStatus\\": \\"PAID\\",\\n  \\"PaymentPrice\\": 0,\\n  \\"OrderStatus\\": \\"NORMAL\\",\\n  \\"ProductSkuCode\\": \\"cmgj02****-prepay\\",\\n  \\"PaidOn\\": 1531191675000,\\n  \\"Components\\": {\\n    \\"package_quantity\\": {\\n      \\"code\\": \\"package_quantity\\",\\n      \\"globarKey\\": \\"cmapi014302_package_quantity_package_quantity_10000\\",\\n      \\"name\\": \\"10000次\\",\\n      \\"value\\": \\"10000\\"\\n    },\\n    \\"package_version\\": {\\n      \\"code\\": \\"package_version\\",\\n      \\"globarKey\\": \\"cmapi014302_package_version_package_version_yuncode830200000\\",\\n      \\"name\\": \\"0元／10000次\\",\\n      \\"value\\": \\"yuncode830200000\\"\\n    },\\n    \\"ord_time\\": {\\n      \\"code\\": \\"ord_time\\",\\n      \\"globarKey\\": \\"cmapi014302_ord_time_ord_time_6:Month\\",\\n      \\"name\\": \\"6个月\\",\\n      \\"value\\": \\"6:Month\\"\\n    },\\n    \\"order_num\\": {\\n      \\"code\\": \\"order_num\\",\\n      \\"globarKey\\": \\"cmapi014302_order_num_order_num_1\\",\\n      \\"name\\": \\"1\\",\\n      \\"value\\": \\"1\\"\\n    }\\n  },\\n  \\"CreatedOn\\": 1531191564000,\\n  \\"OrderType\\": \\"NEW\\",\\n  \\"TotalPrice\\": 0,\\n  \\"Quantity\\": 1,\\n  \\"OrderId\\": 202211111111111,\\n  \\"ProductCode\\": \\"cmgj02****\\",\\n  \\"SupplierTelephones\\": {\\n    \\"Telephone\\": [\\n      \\"{139*****950, 139*****831}\\"\\n    ]\\n  },\\n  \\"InstanceIds\\": {\\n    \\"InstanceId\\": [\\n      \\"{1597985, 1227195}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeOrderResponse>\\n    <PaidOn>1531191675000</PaidOn>\\n    <PeriodType>MONTH</PeriodType>\\n    <CouponPrice>0.0</CouponPrice>\\n    <PayStatus>PAID</PayStatus>\\n    <OriginalPrice>10.0</OriginalPrice>\\n    <ProductName>saas服务产品</ProductName>\\n    <RequestId>6EF60BEC-0242-43AF-BB20-270359FB54A7</RequestId>\\n    <ProductCode>cmgj02****</ProductCode>\\n    <SupplierCompanyName>**科技股份有限公司</SupplierCompanyName>\\n    <Quantity>1</Quantity>\\n    <OrderId>202211111111111</OrderId>\\n    <SupplierTelephones>\\n        <Telephone>{139*****950, 139*****831}</Telephone>\\n    </SupplierTelephones>\\n    <Components>{ \\"package_quantity\\": { \\"code\\": \\"package_quantity\\", \\"globarKey\\": \\"cmapi014302_package_quantity_package_quantity_10000\\", \\"name\\": \\"10000次\\", \\"value\\": \\"10000\\" }, \\"package_version\\": { \\"code\\": \\"package_version\\", \\"globarKey\\": \\"cmapi014302_package_version_package_version_yuncode830200000\\", \\"name\\": \\"0元／10000次\\", \\"value\\": \\"yuncode830200000\\" }, \\"ord_time\\": { \\"code\\": \\"ord_time\\", \\"globarKey\\": \\"cmapi014302_ord_time_ord_time_6:Month\\", \\"name\\": \\"6个月\\", \\"value\\": \\"6:Month\\" }, \\"order_num\\": { \\"code\\": \\"order_num\\", \\"globarKey\\": \\"cmapi014302_order_num_order_num_1\\", \\"name\\": \\"1\\", \\"value\\": \\"1\\" } }</Components>\\n    <OrderStatus>NORMAL</OrderStatus>\\n    <OrderType>NEW</OrderType>\\n    <TotalPrice>0.0</TotalPrice>\\n    <ProductSkuCode>cmgj02****-prepay</ProductSkuCode>\\n    <CreatedOn>1531191564000</CreatedOn>\\n    <PaymentPrice>0.0</PaymentPrice>\\n    <InstanceIds>\\n        <InstanceId>{1597985, 1227195}</InstanceId>\\n    </InstanceIds>\\n    <AccountQuantity>0</AccountQuantity>\\n    <AliUid>190311111111****</AliUid>\\n</DescribeOrderResponse>","errorExample":""}]',
      'title' => '用于查询对应订单的详细信息',
      'summary' => '调用 DescribeOrder 用于查询对应订单的详细信息。',
    ),
    'DescribeProjectMessages' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场业务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
          ),
        ),
        1 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页码，每页查询20条。',
            'type' => 'integer',
            'format' => 'int32',
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
                'example' => '00eb4de1-6cff-4f56-833e-7b1e070e398d',
              ),
              'TotalCount' => 
              array (
                'description' => '留言总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '28',
              ),
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GmtCreate' => 
                    array (
                      'description' => '留言时间（Unix时间戳）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1589015560000',
                    ),
                    'Operator' => 
                    array (
                      'description' => '留言人的阿里云UID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '452611111****',
                    ),
                    'OperatorRole' => 
                    array (
                      'description' => '操作人角色，取值：

- System：系统
- Custom：客户
- Provider：服务提供商',
                      'type' => 'string',
                      'example' => 'Provider',
                    ),
                    'Content' => 
                    array (
                      'description' => '留言内容',
                      'type' => 'string',
                      'example' => '尊敬的客户您好，我们已经为您上传了方案，请您查阅，然后尽快将您的意见反馈给我们。',
                    ),
                    'OperatorName' => 
                    array (
                      'description' => '留言人名称',
                      'type' => 'string',
                      'example' => '***科技技术有限公司',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"00eb4de1-6cff-4f56-833e-7b1e070e398d\\",\\n  \\"TotalCount\\": 28,\\n  \\"Success\\": true,\\n  \\"Result\\": [\\n    {\\n      \\"GmtCreate\\": 1589015560000,\\n      \\"Operator\\": 0,\\n      \\"OperatorRole\\": \\"Provider\\",\\n      \\"Content\\": \\"尊敬的客户您好，我们已经为您上传了方案，请您查阅，然后尽快将您的意见反馈给我们。\\",\\n      \\"OperatorName\\": \\"***科技技术有限公司\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeProjectMessagesResponse>\\n    <TotalCount>21</TotalCount>\\n    <RequestId>00eb4de1-6cff-4f56-833e-7b1e070e398d</RequestId>\\n    <Success>true</Success>\\n    <Result>\\n        <Operator>452611111****</Operator>\\n        <OperatorName>***科技技术有限公司</OperatorName>\\n        <GmtCreate>1589015560000</GmtCreate>\\n        <OperatorRole>Provider</OperatorRole>\\n        <Content>尊敬的客户您好，我们已经为您上传了方案，请您查阅，然后尽快将您的意见反馈给我们。</Content>\\n    </Result>\\n</DescribeProjectMessagesResponse>","errorExample":""}]',
      'title' => '获取项目流程留言信息列表',
      'summary' => '调用DescribeProjectMessages获取项目流程留言信息列表。',
    ),
    'DescribeProjectNodes' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '937fee1f-26bb-4b6e-8def-977a6bdaa1e5',
              ),
              'Result' => 
              array (
                'description' => '无',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NextNodeId' => 
                    array (
                      'description' => '下一个流程节点ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8472',
                    ),
                    'StepNo' => 
                    array (
                      'description' => '所属流程节点的序号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'AutoFinishNode' => 
                    array (
                      'description' => '节点超时是否自动完成

',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'FinalStepNo' => 
                    array (
                      'description' => '最终流程节点的序号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'PreviousNodeId' => 
                    array (
                      'description' => '上一个流程节点ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8470',
                    ),
                    'ParentNodeId' => 
                    array (
                      'description' => '父级流程节点ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'GmtExpired' => 
                    array (
                      'description' => '流程节点超时时间（Unix时间戳）

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1588834325000',
                    ),
                    'OperatorRole' => 
                    array (
                      'description' => '流程节点操作人角色，取值：
- System：系统
- Custom：客户
- Provider：服务提供商',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'GmtStart' => 
                    array (
                      'description' => '流程节点开始时间（Unix时间戳）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1588834325000',
                    ),
                    'NodeStatus' => 
                    array (
                      'description' => '节点执行状态，取值：
- NotStart：未开始
- Starting：进行中
- Cancel：已取消
- Finish：已完成',
                      'type' => 'string',
                      'example' => 'Finish',
                    ),
                    'NodeName' => 
                    array (
                      'description' => '节点名称',
                      'type' => 'string',
                      'example' => '分配服务商节点',
                    ),
                    'GmtFinished' => 
                    array (
                      'description' => '流程节点完成时间（Unix时间戳）

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1588834325000',
                    ),
                    'AllowRollbackNode' => 
                    array (
                      'description' => '是否允许执行回滚到上一个流程节点',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'TemplateForm' => 
                    array (
                      'description' => '流程节点表单内容，内容为JSON。

示例代码如下：

```
[
    {
        "fieldKey": "TFD0", //表单key
        "isRequired": true, //是否必填项
        "maxLength": 50, //最大值长度
        "placeHolder": "姓名", //表单值简介
        "stepNum": 0, //排序值（升序）
        "title": "收货人姓名", //表单标题
        "type": "text" //表单类型
    },
    {
        "fieldKey": "TFD1",
        "isRequired": true,
        "maxLength": 50,
        "placeHolder": "手机号码",
        "stepNum": 1,
        "title": "收货人电话",
        "type": "text"
    },
    {
        "fieldKey": "TFD2",
        "isRequired": true,
        "maxLength": 50,
        "placeHolder": "省市区街道门牌号码",
        "stepNum": 2,
        "title": "详细收货地址",
        "type": "textarea"
    }
]

```',
                      'type' => 'string',
                      'example' => '[ {"fieldKey": "TFD0","isRequired": true,"maxLength": 50, "placeHolder": "姓名","stepNum": 0,"title": "收货人姓名","type": "text" },{ "fieldKey": "TFD1","isRequired": true,"maxLength": 50,"placeHolder": "手机号码","stepNum": 1,"title": "收货人电话","type": "text"},{"fieldKey": "TFD2","isRequired": true,"maxLength": 50,"placeHolder": "省市区街道门牌号码","stepNum": 2,"title": "详细收货地址","type": "textarea"}]',
                    ),
                    'NeedAttachment' => 
                    array (
                      'description' => '是否强制要求上传附件',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '流程节点ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8471',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"937fee1f-26bb-4b6e-8def-977a6bdaa1e5\\",\\n  \\"Result\\": [\\n    {\\n      \\"NextNodeId\\": 8472,\\n      \\"StepNo\\": 2,\\n      \\"AutoFinishNode\\": false,\\n      \\"FinalStepNo\\": 4,\\n      \\"PreviousNodeId\\": 8470,\\n      \\"ParentNodeId\\": 0,\\n      \\"GmtExpired\\": 1588834325000,\\n      \\"OperatorRole\\": \\"System\\",\\n      \\"GmtStart\\": 1588834325000,\\n      \\"NodeStatus\\": \\"Finish\\",\\n      \\"NodeName\\": \\"分配服务商节点\\",\\n      \\"GmtFinished\\": 1588834325000,\\n      \\"AllowRollbackNode\\": false,\\n      \\"TemplateForm\\": \\"[ {\\\\\\"fieldKey\\\\\\": \\\\\\"TFD0\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50, \\\\\\"placeHolder\\\\\\": \\\\\\"姓名\\\\\\",\\\\\\"stepNum\\\\\\": 0,\\\\\\"title\\\\\\": \\\\\\"收货人姓名\\\\\\",\\\\\\"type\\\\\\": \\\\\\"text\\\\\\" },{ \\\\\\"fieldKey\\\\\\": \\\\\\"TFD1\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50,\\\\\\"placeHolder\\\\\\": \\\\\\"手机号码\\\\\\",\\\\\\"stepNum\\\\\\": 1,\\\\\\"title\\\\\\": \\\\\\"收货人电话\\\\\\",\\\\\\"type\\\\\\": \\\\\\"text\\\\\\"},{\\\\\\"fieldKey\\\\\\": \\\\\\"TFD2\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50,\\\\\\"placeHolder\\\\\\": \\\\\\"省市区街道门牌号码\\\\\\",\\\\\\"stepNum\\\\\\": 2,\\\\\\"title\\\\\\": \\\\\\"详细收货地址\\\\\\",\\\\\\"type\\\\\\": \\\\\\"textarea\\\\\\"}]\\",\\n      \\"NeedAttachment\\": false,\\n      \\"NodeId\\": 8471\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DescribeProjectNodesResponse>\\n<requestId>937fee1f-26bb-4b6e-8def-977a6bdaa1e5</requestId>\\n<result>\\n    <allowRollbackNode>false</allowRollbackNode>\\n    <autoFinishNode>false</autoFinishNode>\\n    <finalStepNo>4</finalStepNo>\\n    <gmtFinished>1588834325000</gmtFinished>\\n    <gmtStart>1588834325000</gmtStart>\\n    <gmtExpired/>\\n    <needAttachment>false</needAttachment>\\n    <nextNodeId>8471</nextNodeId>\\n    <nodeId>8470</nodeId>\\n    <nodeName>分配服务商节点</nodeName>\\n    <nodeStatus>Finish</nodeStatus>\\n    <operatorRole>System</operatorRole>\\n    <parentNodeId>0</parentNodeId>\\n    <stepNo>1</stepNo>\\n</result>\\n<result>\\n    <allowRollbackNode>false</allowRollbackNode>\\n    <autoFinishNode>false</autoFinishNode>\\n    <finalStepNo>4</finalStepNo>\\n    <gmtFinished>1588834325000</gmtFinished>\\n    <gmtStart>1588834325000</gmtStart>\\n    <gmtExpired/>\\n    <needAttachment>false</needAttachment>\\n    <nextNodeId>8472</nextNodeId>\\n    <nodeId>8471</nodeId>\\n    <nodeName>分单</nodeName>\\n    <nodeStatus>Finish</nodeStatus>\\n    <operatorRole>System</operatorRole>\\n    <parentNodeId>0</parentNodeId>\\n    <previousNodeId>8470</previousNodeId>\\n    <stepNo>2</stepNo>\\n</result>\\n<result>\\n    <allowRollbackNode>false</allowRollbackNode>\\n    <autoFinishNode>false</autoFinishNode>\\n    <finalStepNo>4</finalStepNo>\\n    <gmtExpired>1588920725000</gmtExpired>\\n    <gmtStart>1588834325000</gmtStart>\\n    <gmtFinished/>\\n    <needAttachment>false</needAttachment>\\n    <nextNodeId>8473</nextNodeId>\\n    <nodeId>8472</nodeId>\\n    <nodeName>等待服务开通</nodeName>\\n    <nodeStatus>Starting</nodeStatus>\\n    <operatorRole>Provider</operatorRole>\\n    <parentNodeId>0</parentNodeId>\\n    <previousNodeId>8471</previousNodeId>\\n    <stepNo>3</stepNo>\\n</result>\\n<result>\\n    <allowRollbackNode>true</allowRollbackNode>\\n    <autoFinishNode>true</autoFinishNode>\\n    <finalStepNo>4</finalStepNo>\\n    <gmtExpired/>\\n    <gmtStart/>\\n    <gmtFinished/>\\n    <needAttachment>false</needAttachment>\\n    <nodeId>8473</nodeId>\\n    <nodeName>项目完结确认</nodeName>\\n    <nodeStatus>NotStart</nodeStatus>\\n    <operatorRole>Customer</operatorRole>\\n    <parentNodeId>0</parentNodeId>\\n    <previousNodeId>8472</previousNodeId>\\n    <stepNo>4</stepNo>\\n</result>\\n<success>true</success>\\n</DescribeProjectNodesResponse>","errorExample":""}]',
      'title' => '获取项目流程节点列表',
      'summary' => '调用DescribeProjectNodes获取项目流程节点列表。',
      'description' => '**
**',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProjectOperateLogs' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'e6037e86-657f-4194-bb6a-7b26973aec8d',
              ),
              'Result' => 
              array (
                'description' => '无',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GmtCreate' => 
                    array (
                      'description' => '操作时间（Unix时间戳）

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1587624497000',
                    ),
                    'Operator' => 
                    array (
                      'description' => '操作人阿里云UID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'OperatorRole' => 
                    array (
                      'description' => '操作人角色，取值：
- System：系统
- Custom：客户
- Provider：服务提供商',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'Description' => 
                    array (
                      'description' => '操作内容描述

',
                      'type' => 'string',
                      'example' => '进入分配服务商操作人',
                    ),
                    'OperatorName' => 
                    array (
                      'description' => '操作人名称

',
                      'type' => 'string',
                      'example' => '系统',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"e6037e86-657f-4194-bb6a-7b26973aec8d\\",\\n  \\"Result\\": [\\n    {\\n      \\"GmtCreate\\": 1587624497000,\\n      \\"Operator\\": 0,\\n      \\"OperatorRole\\": \\"System\\",\\n      \\"Description\\": \\"进入分配服务商操作人\\",\\n      \\"OperatorName\\": \\"系统\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DescribeProjectOperateLogsResponse>\\n<requestId>ee69a00f-189b-400f-9fd2-af89749fb50f</requestId>\\n<result>\\n    <description>进入客户地址需求</description>\\n    <gmtCreate>1587624497000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<result>\\n    <description>进入分配服务商操作人</description>\\n    <gmtCreate>1587624497000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<result>\\n    <description>分配服务商操作人已完成</description>\\n    <gmtCreate>1587624497000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<result>\\n    <description>分配服务商节点已完成</description>\\n    <gmtCreate>1587624497000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<result>\\n    <description>进入分配服务商节点</description>\\n    <gmtCreate>1587624496000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<result>\\n    <description>项目开始</description>\\n    <gmtCreate>1587624496000</gmtCreate>\\n    <operator>0</operator>\\n    <operatorName>系统</operatorName>\\n    <operatorRole>System</operatorRole>\\n</result>\\n<success>true</success>\\n</DescribeProjectOperateLogsResponse>","errorExample":""}]',
      'title' => '获取项目流程操作日志',
      'summary' => '调用DescribeProjectOperateLogs获取项目流程操作日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCurrentNodeInfo' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '00eb4de1-6cff-4f56-833e-7b1e070e398d',
              ),
              'Result' => 
              array (
                'description' => '无',
                'type' => 'object',
                'properties' => 
                array (
                  'NextNodeId' => 
                  array (
                    'description' => '下一个流程节点ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '8473',
                  ),
                  'StepNo' => 
                  array (
                    'description' => '所属流程节点的序号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'AutoFinishNode' => 
                  array (
                    'description' => '节点超时是否自动完成',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'FinalStepNo' => 
                  array (
                    'description' => '最终流程节点的序号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'PreviousNodeId' => 
                  array (
                    'description' => '上一个流程节点ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '8471',
                  ),
                  'ParentNodeId' => 
                  array (
                    'description' => '父级流程节点ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'GmtExpired' => 
                  array (
                    'description' => '流程节点超时时间（Unix时间戳）

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1588920725000',
                  ),
                  'OperatorRole' => 
                  array (
                    'description' => '流程节点操作人角色，取值：
- System：系统
- Custom：客户
- Provider：服务提供商',
                    'type' => 'string',
                    'example' => 'Provider',
                  ),
                  'GmtStart' => 
                  array (
                    'description' => '流程节点开始时间（Unix时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1588834325000',
                  ),
                  'NodeStatus' => 
                  array (
                    'description' => '节点执行状态，取值：
- NotStart：未开始
- Starting：进行中
- Cancel：已取消
- Finish：已完成',
                    'type' => 'string',
                    'example' => 'Starting',
                  ),
                  'NodeName' => 
                  array (
                    'description' => '节点名称

',
                    'type' => 'string',
                    'example' => '等待服务开通',
                  ),
                  'GmtFinished' => 
                  array (
                    'description' => '流程节点完成时间（Unix时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1588920725000',
                  ),
                  'AllowRollbackNode' => 
                  array (
                    'description' => '是否允许执行回滚到上一个流程节点',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'TemplateForm' => 
                  array (
                    'description' => '流程节点表单内容，格式为JSON。

示例代码如下：

```
[
    {
        "fieldKey": "TFD0", //表单key
        "isRequired": true, //是否必填项
        "maxLength": 50, //最大值长度
        "placeHolder": "姓名", //表单值简介
        "stepNum": 0, //排序值（升序）
        "title": "收货人姓名", //表单标题
        "type": "text" //表单类型
    },
    {
        "fieldKey": "TFD1",
        "isRequired": true,
        "maxLength": 50,
        "placeHolder": "手机号码",
        "stepNum": 1,
        "title": "收货人电话",
        "type": "text"
    },
    {
        "fieldKey": "TFD2",
        "isRequired": true,
        "maxLength": 50,
        "placeHolder": "省市区街道门牌号码",
        "stepNum": 2,
        "title": "详细收货地址",
        "type": "textarea"
    }
]
```',
                    'type' => 'string',
                    'example' => '[ {"fieldKey": "TFD0","isRequired": true,"maxLength": 50, "placeHolder": "姓名","stepNum": 0,"title": "收货人姓名","type": "text" },{ "fieldKey": "TFD1","isRequired": true,"maxLength": 50,"placeHolder": "手机号码","stepNum": 1,"title": "收货人电话","type": "text"},{"fieldKey": "TFD2","isRequired": true,"maxLength": 50,"placeHolder": "省市区街道门牌号码","stepNum": 2,"title": "详细收货地址","type": "textarea"}]',
                  ),
                  'NeedAttachment' => 
                  array (
                    'description' => '是否强制要求上传附件',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'NodeId' => 
                  array (
                    'description' => '流程节点ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '8472',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"00eb4de1-6cff-4f56-833e-7b1e070e398d\\",\\n  \\"Result\\": {\\n    \\"NextNodeId\\": 8473,\\n    \\"StepNo\\": 3,\\n    \\"AutoFinishNode\\": false,\\n    \\"FinalStepNo\\": 4,\\n    \\"PreviousNodeId\\": 8471,\\n    \\"ParentNodeId\\": 0,\\n    \\"GmtExpired\\": 1588920725000,\\n    \\"OperatorRole\\": \\"Provider\\",\\n    \\"GmtStart\\": 1588834325000,\\n    \\"NodeStatus\\": \\"Starting\\",\\n    \\"NodeName\\": \\"等待服务开通\\",\\n    \\"GmtFinished\\": 1588920725000,\\n    \\"AllowRollbackNode\\": false,\\n    \\"TemplateForm\\": \\"[ {\\\\\\"fieldKey\\\\\\": \\\\\\"TFD0\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50, \\\\\\"placeHolder\\\\\\": \\\\\\"姓名\\\\\\",\\\\\\"stepNum\\\\\\": 0,\\\\\\"title\\\\\\": \\\\\\"收货人姓名\\\\\\",\\\\\\"type\\\\\\": \\\\\\"text\\\\\\" },{ \\\\\\"fieldKey\\\\\\": \\\\\\"TFD1\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50,\\\\\\"placeHolder\\\\\\": \\\\\\"手机号码\\\\\\",\\\\\\"stepNum\\\\\\": 1,\\\\\\"title\\\\\\": \\\\\\"收货人电话\\\\\\",\\\\\\"type\\\\\\": \\\\\\"text\\\\\\"},{\\\\\\"fieldKey\\\\\\": \\\\\\"TFD2\\\\\\",\\\\\\"isRequired\\\\\\": true,\\\\\\"maxLength\\\\\\": 50,\\\\\\"placeHolder\\\\\\": \\\\\\"省市区街道门牌号码\\\\\\",\\\\\\"stepNum\\\\\\": 2,\\\\\\"title\\\\\\": \\\\\\"详细收货地址\\\\\\",\\\\\\"type\\\\\\": \\\\\\"textarea\\\\\\"}]\\",\\n    \\"NeedAttachment\\": false,\\n    \\"NodeId\\": 8472\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DescribeCurrentNodeInfoResponse>\\n<requestId>00eb4de1-6cff-4f56-833e-7b1e070e398d</requestId>\\n<result>\\n    <allowRollbackNode>false</allowRollbackNode>\\n    <autoFinishNode>false</autoFinishNode>\\n    <finalStepNo>4</finalStepNo>\\n    <gmtExpired>1588920725000</gmtExpired>\\n    <gmtStart>1588834325000</gmtStart>\\n    <gmtFinished/>\\n    <needAttachment>false</needAttachment>\\n    <nextNodeId>8473</nextNodeId>\\n    <nodeId>8472</nodeId>\\n    <nodeName>等待服务开通</nodeName>\\n    <nodeStatus>Starting</nodeStatus>\\n    <operatorRole>Provider</operatorRole>\\n    <parentNodeId>0</parentNodeId>\\n    <previousNodeId>8471</previousNodeId>\\n    <stepNo>3</stepNo>\\n</result>\\n<success>true</success>\\n</DescribeCurrentNodeInfoResponse>","errorExample":""}]',
      'title' => '获取当前节点的流程信息',
      'summary' => '调用DescribeCurrentNodeInfo获取当前节点的流程信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FinishCurrentProjectNode' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前流程节点ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1924',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '提交表单内容，格式为JSON。

示例代码如下：

```
{
    "TFD0": "Mr.Go",
    "TFD1": "1330010xxxx",
    "TFD2": "北京市朝阳区望京街道X区Y号"
}
```',
            'type' => 'string',
            'required' => false,
            'example' => '{"TFD0": "Mr.Go","TFD1": "1330010xxxx","TFD2": "北京市朝阳区望京街道X区Y号" }',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息

',
            'type' => 'string',
            'required' => false,
            'example' => '收货地址已提交，请尽快安排发货。',
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
                'example' => 'ee69a00f-189b-400f-9fd2-af89749fb50f',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '成功状态标识',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalOperatorRole',
            'errorMessage' => 'Illegal operator role.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalCurrentNode',
            'errorMessage' => 'Illegal current node.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ee69a00f-189b-400f-9fd2-af89749fb50f\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<FinishCurrentProjectNodeResponse>\\n<RequestId>ee69a00f-189b-400f-9fd2-af89749fb50f</RequestId>\\n<Success>true</Success>\\n<Result>true</Result>\\n</FinishCurrentProjectNodeResponse>","errorExample":""}]',
      'title' => '完成当前流程',
      'summary' => '调用FinishCurrentProjectNode完成当前流程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RollbackCurrentProjectNode' => 
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
      'operationType' => 'readAndWrite',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前操作流程节点ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1925',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '打回原因备注

',
            'type' => 'string',
            'required' => false,
            'example' => '尊敬的顾客您好，您提交的收货地址存在多个匹配结果，请您核对后再重新提交。',
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
                'example' => 'ee69a00f-189b-400f-9fd2-af89749fb50f',
              ),
              'Result' => 
              array (
                'description' => '是否返回成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '成功状态标识',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalOperatorRole',
            'errorMessage' => 'Illegal operator role.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalCurrentNode',
            'errorMessage' => 'Illegal current node.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalProjectStatus',
            'errorMessage' => 'Illegal project status.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ee69a00f-189b-400f-9fd2-af89749fb50f\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<RollbackCurrentProjectNodeResponse>\\n<requestId>ee69a00f-189b-400f-9fd2-af89749fb50f</requestId>\\n<result>true</result>\\n<success>true</success>\\n</RollbackCurrentProjectNodeResponse>","errorExample":""}]',
      'title' => '触发当前流程驳回',
      'summary' => '调用RollbackCurrentProjectNode触发当前流程驳回。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstance' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '155****11',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => 'NEW',
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
              'Status' => 
              array (
                'description' => '业务状态，根据不同商品类型设置不同值：

当ProductType = MIRROR 时
- PRODUCE：生产中
- USING：使用中
- UNUSED：未使用
- EXPIRED：已过期
- CLOSED：已释放

当 ProductType = SERVICE 时
- READYING：未开始
- STARTED：服务中
- CONFIRM：已完成
- EXPIRED：已过期
- CLOSED：已释放

当 ProductType = APP, DOWNLOAD, API_SERVICE, DOCKER 时
- OPENING：开通中
- OPENED：已开通
- EXPIRED：已过期
- CLOSED：已释放',
                'type' => 'string',
                'example' => 'OPENED',
              ),
              'AppJson' => 
              array (
                'description' => '应用信息，示例中的参数说明如下：

- username：用户名
- passowrd：密码
- frontEndUrl：前台地址
- adminUrl：管理地址',
                'type' => 'string',
                'example' => '{"frontEndUrl":"https://****.aliyundoc.com","password":"Sjtv***","adminUrl":"https://****.aliyundoc.com","username":"aliyun***"}',
              ),
              'ProductName' => 
              array (
                'description' => '商品名称',
                'type' => 'string',
                'example' => '***协同办公',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1551111111',
              ),
              'ExtendJson' => 
              array (
                'description' => '扩展信息',
                'type' => 'string',
                'example' => '{"说明": "如有使用问题，请联系..."}',
              ),
              'IsTrial' => 
              array (
                'description' => '是否试用',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BeganOn' => 
              array (
                'description' => '实例开通时间（时间戳）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1570634021000',
              ),
              'ComponentJson' => 
              array (
                'description' => '业务模块

示例中的参数说明如下：

- package_version：版本',
                'type' => 'string',
                'example' => '{"package_version":"yuncode000111"}',
              ),
              'Constraints' => 
              array (
                'description' => '已废弃',
                'type' => 'string',
                'example' => '{}',
              ),
              'ProductType' => 
              array (
                'description' => '商品类型，取值：

- APP：应用类
- SERVIC：服务类
- MIRROR：镜像类
- DOWNLOAD：下载类
- API_SERVICE：API类
- DOCKER：DOCKER类',
                'type' => 'string',
                'example' => 'APP',
              ),
              'HostJson' => 
              array (
                'description' => '主机信息，示例中的参数说明如下：

- username：用户名
- passowrd：密码
- ip：主机 IP
- innerIp：主机内网 IP',
                'type' => 'string',
                'example' => '{"password":"***","ip":"118.31.***.41","innerIp":"118.31.***.41","region":"","username":"***","beianInfo":""}',
              ),
              'ProductSkuCode' => 
              array (
                'description' => '规格Code',
                'type' => 'string',
                'example' => 'cmgj00**11-prepay',
              ),
              'CreatedOn' => 
              array (
                'description' => '创建时间（时间戳）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1570634018000',
              ),
              'EndOn' => 
              array (
                'description' => '到期时间（时间戳）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1602259200000',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '204211111111111',
              ),
              'ProductCode' => 
              array (
                'description' => '商品Code',
                'type' => 'string',
                'example' => 'cmgj00**11',
              ),
              'SupplierName' => 
              array (
                'description' => '服务商名称',
                'type' => 'string',
                'example' => '*****有限公司',
              ),
              'RelationalData' => 
              array (
                'description' => '关联信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ServiceStatus' => 
                  array (
                    'description' => '服务状态

- READYING：未开始
- STARTED： 服务中
- CONFIRM：已完成
- EXPIRED： 已过期
- CLOSED： 已释放',
                    'type' => 'string',
                    'example' => 'STARTED',
                  ),
                ),
              ),
              'Modules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Module' => 
                  array (
                    'description' => '商品模块信息，已废弃。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已废弃',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '已废弃',
                          'type' => 'string',
                          'example' => 'package_config',
                        ),
                        'Name' => 
                        array (
                          'description' => '已废弃',
                          'type' => 'string',
                          'example' => '套餐配置',
                        ),
                        'Id' => 
                        array (
                          'description' => '已废弃',
                          'type' => 'string',
                          'example' => '101*********026',
                        ),
                        'Properties' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Property' => 
                            array (
                              'description' => '已废弃',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '已废弃',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '已废弃',
                                    'type' => 'string',
                                    'example' => '12',
                                  ),
                                  'ShowType' => 
                                  array (
                                    'description' => '已废弃',
                                    'type' => 'string',
                                    'example' => '12',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '已废弃',
                                    'type' => 'string',
                                    'example' => '12',
                                  ),
                                  'DisplayUnit' => 
                                  array (
                                    'description' => '已废弃',
                                    'type' => 'string',
                                    'example' => '12',
                                  ),
                                  'PropertyValues' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'PropertyValue' => 
                                      array (
                                        'description' => '已废弃',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '已废弃',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'DisplayName' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Type' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Step' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Value' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Max' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Remark' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
                                            ),
                                            'Min' => 
                                            array (
                                              'description' => '已废弃',
                                              'type' => 'string',
                                              'example' => '12',
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
                    ),
                  ),
                ),
              ),
              'AutoRenewal' => 
              array (
                'type' => 'string',
              ),
              'ActiveAddress' => 
              array (
                'type' => 'string',
              ),
              'LicenseCode' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"OPENED\\",\\n  \\"AppJson\\": \\"{\\\\\\"frontEndUrl\\\\\\":\\\\\\"https://****.aliyundoc.com\\\\\\",\\\\\\"password\\\\\\":\\\\\\"Sjtv***\\\\\\",\\\\\\"adminUrl\\\\\\":\\\\\\"https://****.aliyundoc.com\\\\\\",\\\\\\"username\\\\\\":\\\\\\"aliyun***\\\\\\"}\\",\\n  \\"ProductName\\": \\"***协同办公\\",\\n  \\"InstanceId\\": 1551111111,\\n  \\"ExtendJson\\": \\"{\\\\\\"说明\\\\\\": \\\\\\"如有使用问题，请联系...\\\\\\"}\\",\\n  \\"IsTrial\\": true,\\n  \\"BeganOn\\": 1570634021000,\\n  \\"ComponentJson\\": \\"{\\\\\\"package_version\\\\\\":\\\\\\"yuncode000111\\\\\\"}\\",\\n  \\"Constraints\\": \\"{}\\",\\n  \\"ProductType\\": \\"APP\\",\\n  \\"HostJson\\": \\"{\\\\\\"password\\\\\\":\\\\\\"***\\\\\\",\\\\\\"ip\\\\\\":\\\\\\"118.31.***.41\\\\\\",\\\\\\"innerIp\\\\\\":\\\\\\"118.31.***.41\\\\\\",\\\\\\"region\\\\\\":\\\\\\"\\\\\\",\\\\\\"username\\\\\\":\\\\\\"***\\\\\\",\\\\\\"beianInfo\\\\\\":\\\\\\"\\\\\\"}\\",\\n  \\"ProductSkuCode\\": \\"cmgj00**11-prepay\\",\\n  \\"CreatedOn\\": 1570634018000,\\n  \\"EndOn\\": 1602259200000,\\n  \\"OrderId\\": 204211111111111,\\n  \\"ProductCode\\": \\"cmgj00**11\\",\\n  \\"SupplierName\\": \\"*****有限公司\\",\\n  \\"RelationalData\\": {\\n    \\"ServiceStatus\\": \\"STARTED\\"\\n  },\\n  \\"Modules\\": {\\n    \\"Module\\": [\\n      {\\n        \\"Code\\": \\"package_config\\",\\n        \\"Name\\": \\"套餐配置\\",\\n        \\"Id\\": \\"101*********026\\",\\n        \\"Properties\\": {\\n          \\"Property\\": [\\n            {\\n              \\"Key\\": \\"12\\",\\n              \\"ShowType\\": \\"12\\",\\n              \\"Name\\": \\"12\\",\\n              \\"DisplayUnit\\": \\"12\\",\\n              \\"PropertyValues\\": {\\n                \\"PropertyValue\\": [\\n                  {\\n                    \\"DisplayName\\": \\"12\\",\\n                    \\"Type\\": \\"12\\",\\n                    \\"Step\\": \\"12\\",\\n                    \\"Value\\": \\"12\\",\\n                    \\"Max\\": \\"12\\",\\n                    \\"Remark\\": \\"12\\",\\n                    \\"Min\\": \\"12\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"AutoRenewal\\": \\"\\",\\n  \\"ActiveAddress\\": \\"\\",\\n  \\"LicenseCode\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceResponse>\\n    <BeganOn>1570634021000</BeganOn>\\n    <ProductCode>cmgj00**11</ProductCode>\\n    <ProductSkuCode>cmgj00**11-prepay</ProductSkuCode>\\n    <OrderId>204605827111111</OrderId>\\n    <InstanceId>15581111</InstanceId>\\n    <EndOn>1602259200000</EndOn>\\n    <Status>OPENED</Status>\\n    <AppJson>{\\"frontEndUrl\\":\\"https://****.aliyundoc.com\\",\\"password\\":\\"Sjtv***\\",\\"adminUrl\\":\\"https://****.aliyundoc.com\\",\\"username\\":\\"aliyun***\\"}</AppJson>\\n    <ProductType>APP</ProductType>\\n    <CreatedOn>1570634018000</CreatedOn>\\n    <RelationalData>\\n        <ServiceStatus>READYING</ServiceStatus>\\n    </RelationalData>\\n    <ProductName>***协同办公</ProductName>\\n    <ComponentJson>{\\"package_version\\":\\"yuncode000111\\"}</ComponentJson>\\n    <SupplierName>阿里巴巴技术有限公司</SupplierName>\\n</DescribeInstanceResponse>","errorExample":""}]',
      'title' => '查询实例信息',
      'summary' => '调用 DescribeInstance 查询实例信息。',
    ),
    'DescribeInstances' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品类型：
APP-应用类
SERVICE-服务类
MIRROR-镜像类
DOWNLOAD-下载类
API_SERVICE-API类
ROS-资源编排类
DOCKER-容器类
IOT-IOT类',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数，每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数，页数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Codes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定商品code, 如有多个，用 , 分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'cmgj000112,cmgj000113',
          ),
        ),
        4 => 
        array (
          'name' => 'ExceptCodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排除商品code，与指定商品code不能同时传， 如有多个，用 , 分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'cmgj000114,cmgj000115',
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
                'example' => '54C22FB9-0CB1-5629-97A8-653FC7990F00',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的实例个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '55',
              ),
              'InstanceItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceItem' => 
                  array (
                    'description' => '实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '业务状态
- 当 ProductType = MIRROR 时
  - PRODUCE：生产中
  - USING：使用中
  - UNUSED：未使用
  - EXPIRED：已过期
  - CLOSED：已释放

- 当 ProductType = SERVICE 时
  - READYING：未开始
  - STARTED：服务中
  - CONFIRM：已完成
  - EXPIRED：已过期
  - CLOSED：已释放

- 当 ProductType = APP, DOWNLOAD, API_SERVICE, DOCKER 时
  - OPENING：开通中
  - OPENED：已开通
  - EXPIRED：已过期
  - CLOSED：已释放',
                          'type' => 'string',
                          'example' => 'OPENED',
                        ),
                        'AppJson' => 
                        array (
                          'description' => '应用信息

示例中的参数说明如下：
- username：用户名
- passowrd：密码
- frontEndUrl：前台地址
- adminUrl：管理地址
- authUrl: 免登地址',
                          'type' => 'string',
                          'example' => '{"frontEndUrl":"https://***.aliyun.com","password":"Sjtv***","adminUrl":"https://***.aiiyun.com","username":"aliyun***"}',
                        ),
                        'ApiJson' => 
                        array (
                          'type' => 'string',
                          'example' => '{}',
                        ),
                        'ProductName' => 
                        array (
                          'description' => '商品名称',
                          'type' => 'string',
                          'example' => '***协同办公',
                        ),
                        'ImageJson' => 
                        array (
                          'description' => '镜像信息',
                          'type' => 'string',
                          'example' => '{}',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1551111111',
                        ),
                        'ExtendJson' => 
                        array (
                          'description' => '扩展信息',
                          'type' => 'string',
                          'example' => '{"说明": "如有使用问题，请联系..."}',
                        ),
                        'BeganOn' => 
                        array (
                          'description' => '开通时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570634021000',
                        ),
                        'ProductType' => 
                        array (
                          'description' => '商品类型，取值：
- APP：应用类
- SERVIC：服务类
- MIRROR：镜像类
- DOWNLOAD：下载类
- API_SERVICE：API类
- DOCKER：DOCKER类',
                          'type' => 'string',
                          'example' => 'APP',
                        ),
                        'HostJson' => 
                        array (
                          'description' => '主机信息

示例中的参数说明如下：
- username：用户名
- passowrd：密码
- ip：主机 IP
- innerIp：主机内网 IP',
                          'type' => 'string',
                          'example' => '{"password":"***","ip":"118.31.***.41","innerIp":"118.31.***.41","region":"","username":"***","beianInfo":""}',
                        ),
                        'ProductSkuCode' => 
                        array (
                          'description' => '规格code',
                          'type' => 'string',
                          'example' => 'cmgj00**11-prepay',
                        ),
                        'CreatedOn' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570634021000',
                        ),
                        'IdaasJson' => 
                        array (
                          'description' => 'idaas信息，已经废弃',
                          'type' => 'string',
                          'example' => '{}',
                        ),
                        'EndOn' => 
                        array (
                          'description' => '结束时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570644021000',
                        ),
                        'OrderId' => 
                        array (
                          'description' => '订单id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '204211111111111',
                        ),
                        'ProductCode' => 
                        array (
                          'description' => '商品code',
                          'type' => 'string',
                          'example' => 'cmgj00**11',
                        ),
                        'SupplierName' => 
                        array (
                          'description' => '服务商名称',
                          'type' => 'string',
                          'example' => '阿里巴巴技术有限公司',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54C22FB9-0CB1-5629-97A8-653FC7990F00\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 55,\\n  \\"InstanceItems\\": {\\n    \\"InstanceItem\\": [\\n      {\\n        \\"Status\\": \\"OPENED\\",\\n        \\"AppJson\\": \\"{\\\\\\"frontEndUrl\\\\\\":\\\\\\"https://***.aliyun.com\\\\\\",\\\\\\"password\\\\\\":\\\\\\"Sjtv***\\\\\\",\\\\\\"adminUrl\\\\\\":\\\\\\"https://***.aiiyun.com\\\\\\",\\\\\\"username\\\\\\":\\\\\\"aliyun***\\\\\\"}\\",\\n        \\"ApiJson\\": \\"{}\\",\\n        \\"ProductName\\": \\"***协同办公\\",\\n        \\"ImageJson\\": \\"{}\\",\\n        \\"InstanceId\\": 1551111111,\\n        \\"ExtendJson\\": \\"{\\\\\\"说明\\\\\\": \\\\\\"如有使用问题，请联系...\\\\\\"}\\",\\n        \\"BeganOn\\": 1570634021000,\\n        \\"ProductType\\": \\"APP\\",\\n        \\"HostJson\\": \\"{\\\\\\"password\\\\\\":\\\\\\"***\\\\\\",\\\\\\"ip\\\\\\":\\\\\\"118.31.***.41\\\\\\",\\\\\\"innerIp\\\\\\":\\\\\\"118.31.***.41\\\\\\",\\\\\\"region\\\\\\":\\\\\\"\\\\\\",\\\\\\"username\\\\\\":\\\\\\"***\\\\\\",\\\\\\"beianInfo\\\\\\":\\\\\\"\\\\\\"}\\",\\n        \\"ProductSkuCode\\": \\"cmgj00**11-prepay\\",\\n        \\"CreatedOn\\": 1570634021000,\\n        \\"IdaasJson\\": \\"{}\\",\\n        \\"EndOn\\": 1570644021000,\\n        \\"OrderId\\": 204211111111111,\\n        \\"ProductCode\\": \\"cmgj00**11\\",\\n        \\"SupplierName\\": \\"阿里巴巴技术有限公司\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询业务列表',
      'summary' => '查询用户已购买的服务列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AutoRenewInstance' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开通open，关闭close，必传',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'OrderBizId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云市场实例id，必传',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AutoRenewCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '周期单位，开通时必传。Day（日），Month（月），Year（年）',
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoRenewDuration',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '续费周期，开通时必传',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ResponseDTO<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'boolean',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'PauseProject' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前操作流程节点ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1922',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注原因

',
            'type' => 'string',
            'required' => false,
            'example' => '等待与仓库确认库存，目前库存显示异常。',
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
                'example' => 'ee69a00f-189b-400f-9fd2-af89749fb50f',
              ),
              'Result' => 
              array (
                'description' => '是否返回成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '成功状态标识',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalOperatorRole',
            'errorMessage' => 'Illegal operator role.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalCurrentNode',
            'errorMessage' => 'Illegal current node.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalProjectStatus',
            'errorMessage' => 'Illegal project status.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ee69a00f-189b-400f-9fd2-af89749fb50f\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<PauseProjectResponse>\\n<requestId>ee69a00f-189b-400f-9fd2-af89749fb50f</requestId>\\n<result>true</result>\\n<success>true</success>\\n</PauseProjectResponse>","errorExample":""}]',
      'title' => '暂停项目',
      'summary' => '调用PauseProject暂停项目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProjectAttachments' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场业务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求标识',
                'type' => 'string',
                'example' => 'e03a9f78-7b40-4fb3-a015-350913e37e3f',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileLinkGmtExpired' => 
                    array (
                      'description' => '文件地址生效截止时间（unix时间戳）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1589334682404',
                    ),
                    'StepNo' => 
                    array (
                      'description' => '流程节点序号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'AttachmentToken' => 
                    array (
                      'description' => '附件MD5',
                      'type' => 'string',
                      'example' => 'Mzc4NDAtODQ3MjY4MzI=',
                    ),
                    'FileName' => 
                    array (
                      'description' => '文件名称',
                      'type' => 'string',
                      'example' => 'f8-test-perview.jpeg',
                    ),
                    'OperatorRole' => 
                    array (
                      'description' => ' 操作人角色',
                      'type' => 'string',
                      'example' => 'Provider',
                    ),
                    'NodeName' => 
                    array (
                      'description' => '节点名称',
                      'type' => 'string',
                      'example' => '等待服务开通',
                    ),
                    'OperatorName' => 
                    array (
                      'description' => '操作人名称',
                      'type' => 'string',
                      'example' => '**科技技术有限公司',
                    ),
                    'FileLink' => 
                    array (
                      'description' => '文件访问地址',
                      'type' => 'string',
                      'example' => 'http://delivery-center.oss-cn-shanghai.aliyuncs.com/6a8****0e2/e0a***f3.jpg?Expires=1589334682&OSSAccessKeyId=wI2r*********&Signature=JWB39pUxs7RCqrcw58qXPEGu6M0%3D',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '附件上传时间（Unix时间戳）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1587968858000',
                    ),
                    'FileSuffix' => 
                    array (
                      'description' => '文件后缀',
                      'type' => 'string',
                      'example' => 'jpg',
                    ),
                    'Operator' => 
                    array (
                      'description' => '操作人阿里云UID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '45261111****',
                    ),
                    'Content' => 
                    array (
                      'description' => '内容文本',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '附件上传的流程节点ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8472',
                    ),
                    'AttachmentType' => 
                    array (
                      'description' => '附件类型',
                      'type' => 'string',
                      'example' => 'File',
                    ),
                    'FileSize' => 
                    array (
                      'description' => '文件大小（byte）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '109124',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"e03a9f78-7b40-4fb3-a015-350913e37e3f\\",\\n  \\"Result\\": [\\n    {\\n      \\"FileLinkGmtExpired\\": 1589334682404,\\n      \\"StepNo\\": 3,\\n      \\"AttachmentToken\\": \\"Mzc4NDAtODQ3MjY4MzI=\\",\\n      \\"FileName\\": \\"f8-test-perview.jpeg\\",\\n      \\"OperatorRole\\": \\"Provider\\",\\n      \\"NodeName\\": \\"等待服务开通\\",\\n      \\"OperatorName\\": \\"**科技技术有限公司\\",\\n      \\"FileLink\\": \\"http://delivery-center.oss-cn-shanghai.aliyuncs.com/6a8****0e2/e0a***f3.jpg?Expires=1589334682&OSSAccessKeyId=wI2r*********&Signature=JWB39pUxs7RCqrcw58qXPEGu6M0%3D\\",\\n      \\"GmtCreate\\": 1587968858000,\\n      \\"FileSuffix\\": \\"jpg\\",\\n      \\"Operator\\": 0,\\n      \\"Content\\": \\"无\\",\\n      \\"NodeId\\": 8472,\\n      \\"AttachmentType\\": \\"File\\",\\n      \\"FileSize\\": 109124\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DescribeProjectAttachmentsResponse>\\n   <requestId>e03a9f78-7b40-4fb3-a015-350913e37e3f</requestId>\\n   <result>\\n      <attachmentToken>Mzc4NDAtODQ3MjY4MzI=</attachmentToken>\\n      <attachmentType>File</attachmentType>\\n      <content />\\n      <fileLink>http://delivery-center.oss-cn-shanghai.aliyuncs.com/6a8****0e2/e0a***f3.jpg?Expires=1589334682&OSSAccessKeyId=wI2r********&Signature=JWB39pUxs7RCqrcw58qXPEGu6M0%3D</fileLink>\\n      <fileLinkGmtExpired>1589334682404</fileLinkGmtExpired>\\n      <fileName>f8-test-perview.jpeg</fileName>\\n      <fileSize>109124</fileSize>\\n      <fileSuffix>jpg</fileSuffix>\\n      <gmtCreate>1587968858000</gmtCreate>\\n      <nodeId>8472</nodeId>\\n      <nodeName>等待服务开通</nodeName>\\n      <operator>45261111****</operator>\\n      <operatorName>**科技技术有限公司</operatorName>\\n      <operatorRole>Provider</operatorRole>\\n      <stepNo>3</stepNo>\\n   </result>\\n   <success>true</success>\\n</DescribeProjectAttachmentsResponse>","errorExample":""}]',
      'title' => '获取项目附件列表',
      'summary' => '调用DescribeProjectAttachments获取项目附件列表。',
    ),
    'DescribeProjectInfo' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场业务实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ee3e1b3b-6c38-4bcf-be40-5a946cfda761',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ProductName' => 
                  array (
                    'description' => '云市场商品名称',
                    'type' => 'string',
                    'example' => '公司宝****记账',
                  ),
                  'ProjectStatus' => 
                  array (
                    'description' => '项目执行状态，取值：

- Starting：进行中
- Cancel：已取消
- Pause：已暂停
- Finish：已完成',
                    'type' => 'string',
                    'example' => 'Starting',
                  ),
                  'CustomerAliUid' => 
                  array (
                    'description' => '用户阿里云UID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '27291111****',
                  ),
                  'TemplateType' => 
                  array (
                    'description' => '项目所属模板类型，取值：

- Public：公共模板
- Private：私有模板',
                    'type' => 'string',
                    'example' => 'Public',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '云市场业务实例ID',
                    'type' => 'string',
                    'example' => '4****89',
                  ),
                  'ProductSkuName' => 
                  array (
                    'description' => '云市场商品规格名称',
                    'type' => 'string',
                    'example' => '小***纳税人',
                  ),
                  'FinalStepNo' => 
                  array (
                    'description' => '最后节点的序号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'CurrentStepNo' => 
                  array (
                    'description' => '当前流程节点',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'GmtExpired' => 
                  array (
                    'description' => '项目超时时间（Unix时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620403200000',
                  ),
                  'GmtFinished' => 
                  array (
                    'description' => '项目完成时间（Unix时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620403200000',
                  ),
                  'ProductSkuCode' => 
                  array (
                    'description' => '云市场商品规格Code',
                    'type' => 'string',
                    'example' => 'yuncode****500001',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '项目创建时间（Unix时间戳）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1588834324000',
                  ),
                  'SupplierAliUid' => 
                  array (
                    'description' => '项目所属厂商UID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '45121111****',
                  ),
                  'FinishType' => 
                  array (
                    'description' => '项目完成方式，取值：

- null：未完成项目默认值
- CustomerConfirm：客户手动确认
- SystemAutoConfirm：因超时系统自动确认',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '项目所属流程模板ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '410',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2059111111111',
                  ),
                  'ProductCode' => 
                  array (
                    'description' => '商品Code',
                    'type' => 'string',
                    'example' => 'cmgj***055',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ee3e1b3b-6c38-4bcf-be40-5a946cfda761\\",\\n  \\"Result\\": {\\n    \\"ProductName\\": \\"公司宝****记账\\",\\n    \\"ProjectStatus\\": \\"Starting\\",\\n    \\"CustomerAliUid\\": 0,\\n    \\"TemplateType\\": \\"Public\\",\\n    \\"InstanceId\\": \\"4****89\\",\\n    \\"ProductSkuName\\": \\"小***纳税人\\",\\n    \\"FinalStepNo\\": 4,\\n    \\"CurrentStepNo\\": 3,\\n    \\"GmtExpired\\": 1620403200000,\\n    \\"GmtFinished\\": 1620403200000,\\n    \\"ProductSkuCode\\": \\"yuncode****500001\\",\\n    \\"GmtCreate\\": 1588834324000,\\n    \\"SupplierAliUid\\": 0,\\n    \\"FinishType\\": \\"null\\",\\n    \\"TemplateId\\": 410,\\n    \\"OrderId\\": 2059111111111,\\n    \\"ProductCode\\": \\"cmgj***055\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeProjectInfoResponse>\\n    <requestId>ee3e1b3b-6c38-4bcf-be40-5a946cfda761</requestId>\\n    <result>\\n        <currentStepNo>3</currentStepNo>\\n        <customerAliUid>27291111****</customerAliUid>\\n        <finalStepNo>4</finalStepNo>\\n        <finishType/>\\n        <gmtCreate>1588834324000</gmtCreate>\\n        <gmtExpired>1620403200000</gmtExpired>\\n        <gmtFinished/>\\n        <instanceId>4****89</instanceId>\\n        <orderId>2059111111111</orderId>\\n        <productCode>cmgj***055</productCode>\\n        <productName>公司宝****记账</productName>\\n        <productSkuCode>yuncode****500001</productSkuCode>\\n        <productSkuName>小***纳税人</productSkuName>\\n        <projectStatus>Starting</projectStatus>\\n        <supplierAliUid>45121111****</supplierAliUid>\\n        <templateId>410</templateId>\\n        <templateType>Public</templateType>\\n    </result>\\n    <success>true</success>\\n</DescribeProjectInfoResponse>","errorExample":""}]',
      'title' => '获取项目信息',
      'summary' => '调用DescribeProjectInfo获取项目信息。',
    ),
    'ResumeProject' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云市场订单实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4****89',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作流程节点ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1922',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注原因

',
            'type' => 'string',
            'required' => false,
            'example' => '仓库库存已补充，可安排发货。',
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
                'example' => 'ee69a00f-189b-400f-9fd2-af89749fb50f',
              ),
              'Result' => 
              array (
                'description' => '是否返回成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '成功状态标识

',
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
            'errorCode' => 'IllegalRequest',
            'errorMessage' => 'Illegal request.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Illegal parameter %s.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalResult',
            'errorMessage' => 'Illegal result.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalPermission',
            'errorMessage' => 'Permission Denied.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalOperatorRole',
            'errorMessage' => 'Illegal operator role.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalCurrentNode',
            'errorMessage' => 'Illegal current node.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalProjectStatus',
            'errorMessage' => 'Illegal project status.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ee69a00f-189b-400f-9fd2-af89749fb50f\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<ResumeProjectResponse>\\n<requestId>ee69a00f-189b-400f-9fd2-af89749fb50f</requestId>\\n<result>true</result>\\n<success>true</success>\\n</ResumeProjectResponse>","errorExample":""}]',
      'title' => '恢复暂停项目',
      'summary' => '调用ResumeProject恢复暂停项目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLicense' => 
    array (
      'summary' => '调用 DescribeLicense 查询授权信息。',
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
          'name' => 'LicenseCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '激活码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxxxxx',
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
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '6EF60BEC-0242-43AF-BB20-270359FB54A7',
              ),
              'License' => 
              array (
                'description' => '激活码对象',
                'type' => 'object',
                'properties' => 
                array (
                  'ActivateTime' => 
                  array (
                    'description' => '激活时间',
                    'type' => 'string',
                    'example' => '2019-05-25 09:00:00',
                  ),
                  'LicenseStatus' => 
                  array (
                    'description' => '激活码状态
- ACTIVATED
- INACTIVATED
- DISCARD
- EXPIRED',
                    'type' => 'string',
                    'example' => 'ACTIVATED',
                  ),
                  'ProductName' => 
                  array (
                    'description' => '商品名称',
                    'type' => 'string',
                    'example' => 'LNMP环境',
                  ),
                  'ExpiredTime' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '2019-06-25 09:00:00',
                  ),
                  'ProductSkuId' => 
                  array (
                    'description' => '商品规格ID',
                    'type' => 'string',
                    'example' => 'cmgj02****-prepay',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2019-05-25 09:00:00',
                  ),
                  'LicenseCode' => 
                  array (
                    'description' => '激活码',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '业务实例ID',
                    'type' => 'string',
                    'example' => '1551111111',
                  ),
                  'SupplierName' => 
                  array (
                    'description' => '供应商名称',
                    'type' => 'string',
                    'example' => '**科技股份有限公司',
                  ),
                  'ProductCode' => 
                  array (
                    'description' => '商品Code',
                    'type' => 'string',
                    'example' => 'cmgj02****',
                  ),
                  'ExtendArray' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LicenseAttribute' => 
                      array (
                        'description' => '扩展对象数组',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Code' => 
                            array (
                              'description' => '对象code',
                              'type' => 'string',
                              'example' => '-',
                            ),
                            'Value' => 
                            array (
                              'description' => '对象值',
                              'type' => 'string',
                              'example' => '-',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ExtendInfo' => 
                  array (
                    'description' => '扩展属性',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AliUid' => 
                      array (
                        'description' => '阿里云UID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '190311111111****',
                      ),
                      'AccountQuantity' => 
                      array (
                        'description' => '账号信息',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '-',
                      ),
                      'Email' => 
                      array (
                        'description' => '邮箱',
                        'type' => 'string',
                        'example' => 'id***@**.com',
                      ),
                      'Mobile' => 
                      array (
                        'description' => '电话',
                        'type' => 'string',
                        'example' => '129****1111',
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
            'errorCode' => 'Auth.SubAccount.Error',
            'errorMessage' => 'The specified AccessKey information does not belong to the RAM user.',
          ),
          1 => 
          array (
            'errorCode' => 'License.Invalid',
            'errorMessage' => 'The specified license is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'License.Expired',
            'errorMessage' => 'The specified license has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'License.Discard',
            'errorMessage' => 'The specified license has been discarded.',
          ),
          4 => 
          array (
            'errorCode' => 'License.NotFound',
            'errorMessage' => 'The specified license does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Auth.ISV.Error',
            'errorMessage' => 'Only ISV accounts are allowed to call the specified API operation.',
          ),
          6 => 
          array (
            'errorCode' => 'Auth.Match',
            'errorMessage' => 'The product to be enabled by the specified license does not belong to the ISV.',
          ),
          7 => 
          array (
            'errorCode' => 'Auth.Authorized',
            'errorMessage' => 'The specified RAM user is not authorized.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6EF60BEC-0242-43AF-BB20-270359FB54A7\\",\\n  \\"License\\": {\\n    \\"ActivateTime\\": \\"2019-05-25 09:00:00\\",\\n    \\"LicenseStatus\\": \\"ACTIVATED\\",\\n    \\"ProductName\\": \\"LNMP环境\\",\\n    \\"ExpiredTime\\": \\"2019-06-25 09:00:00\\",\\n    \\"ProductSkuId\\": \\"cmgj02****-prepay\\",\\n    \\"CreateTime\\": \\"2019-05-25 09:00:00\\",\\n    \\"LicenseCode\\": \\"-\\",\\n    \\"InstanceId\\": \\"1551111111\\",\\n    \\"SupplierName\\": \\"**科技股份有限公司\\",\\n    \\"ProductCode\\": \\"cmgj02****\\",\\n    \\"ExtendArray\\": {\\n      \\"LicenseAttribute\\": [\\n        {\\n          \\"Code\\": \\"-\\",\\n          \\"Value\\": \\"-\\"\\n        }\\n      ]\\n    },\\n    \\"ExtendInfo\\": {\\n      \\"AliUid\\": 0,\\n      \\"AccountQuantity\\": 0,\\n      \\"Email\\": \\"id***@**.com\\",\\n      \\"Mobile\\": \\"129****1111\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLicenseResponse>\\n    <RequestId>6EF60BEC-0242-43AF-BB20-270359FB54A7</RequestId>\\n    <License>\\n        <ActivateTime>2019-05-25 09:00:00</ActivateTime>\\n        <LicenseStatus>ACTIVATED</LicenseStatus>\\n        <ProductName>LNMP环境</ProductName>\\n        <ExpiredTime>2019-06-25 09:00:00</ExpiredTime>\\n        <ProductSkuId>cmgj02****-prepay</ProductSkuId>\\n        <CreateTime>2019-05-25 09:00:00</CreateTime>\\n        <LicenseCode>-</LicenseCode>\\n        <InstanceId>1551111111</InstanceId>\\n        <SupplierName>**科技股份有限公司</SupplierName>\\n        <ProductCode>cmgj02****</ProductCode>\\n        <ExtendArray>\\n            <Code>-</Code>\\n            <Value>-</Value>\\n        </ExtendArray>\\n        <ExtendInfo>\\n            <Email>id***@**.com</Email>\\n            <Mobile>129****1111</Mobile>\\n        </ExtendInfo>\\n    </License>\\n</DescribeLicenseResponse>","errorExample":""}]',
      'title' => '查询授权信息',
    ),
    'ActivateLicense' => 
    array (
      'summary' => '调用 ActivateLicense 激活授权码。',
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
          'name' => 'LicenseCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'APSEDH8TA5CSGK-********_6CNTACBH9EQPOATFXJQL4B2COE7M43VVQ7GUGKAA',
          ),
        ),
        1 => 
        array (
          'name' => 'Identification',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '激活的身份信息，用户的 aliyunUid。',
            'type' => 'string',
            'required' => false,
            'example' => '129****1111',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '6EF60BEC-0242-43AF-BB20-270359FB54A7',
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
            'errorCode' => 'Auth.CallerType',
            'errorMessage' => 'RAM users or STS tokens are not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'License.Invalid',
            'errorMessage' => 'The specified license is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'License.Expired',
            'errorMessage' => 'The specified license has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'License.Discard',
            'errorMessage' => 'The specified license has been discarded.',
          ),
          4 => 
          array (
            'errorCode' => 'License.NotFound',
            'errorMessage' => 'The specified license does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Auth.ISV',
            'errorMessage' => 'Only ISV accounts are allowed to call the specified API operation.',
          ),
          6 => 
          array (
            'errorCode' => 'Auth.Match',
            'errorMessage' => 'The product to be enabled by the specified license does not belong to the ISV.',
          ),
          7 => 
          array (
            'errorCode' => 'Auth.Authorized',
            'errorMessage' => 'The specified RAM user is not authorized.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"6EF60BEC-0242-43AF-BB20-270359FB54A7\\"\\n}","errorExample":""},{"type":"xml","example":"<ActivateLicenseResponse>\\n<RequestId>6EF60BEC-0242-43AF-BB20-270359FB54A7</RequestId>\\n<Success>true</Success>\\n</ActivateLicenseResponse>","errorExample":""}]',
      'title' => '激活授权码',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushMeteringData' => 
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
          'name' => 'Metering',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '示例中的参数说明如下：

- InstanceId：云市场实例ID 。参数类型为String。
- StartTime：计量开始时间。单位秒（格式为Unix时间戳）。参数类型为Long。
- EndTime：计量结束时间。单位秒（格式为Unix时间戳）。参数类型为Long。
- Entities：计量实体对象。参数类型为List<Map>。
    - Key：计量项属性名称。参数类型为String。
        - Frequency：使用次数（次）。
        - Period：使用小时时长（秒）。
    - meteringAssit: 多维度计量项Id。参数类型为String, 在商品发布的后台可以看到这个计费项id。Frequency等计费项有1个或多个都会有这个值，新发布的品推送计量时需要将这个参数传递过来。
           
         注意：请求参数中的时长单位为秒，而计费单位为小时，因此计费时会转换为小时，如推送19:00-20:00的用量1800，计费价格为1元/小时，按小时出账该时段费用为1800 / 3600 x 1 = 0.5元, 费用如为小数，保留两位小数，超过两位舍弃。

        - Storage：使用存储空间（Byte）。

         注意：请求参数中的单位为Byte，而计费单位为MB，因此计费时会转换为MB，如推送19:00-20:00的用量524288，计费价格为1元/MB，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。

        - NetworkOut：上行使用流量（Bit）。

         注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。

        - NetworkIn：下行使用流量（Bit）。

         注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。

        - Character：字符数（个）。
        - DailyActiveUser：日活跃用户数（DAU）。
        - PeriodMin：使用分钟时长（分钟）。
        - VirtualCpu：虚拟CPU核数。
        -Unit: Unit(个)。
        -Memory: Memory(GB)
    - Value：计量数值（取值 >= 0）。参数类型为Integer。

**说明**：
- 如果商品设置为实时出账，StartTime和 EndTime为任意时间宽度均可以，但是EndTime一定要大于StartTime 。
- 如果商品设置为非实时出账（即选择按小时、按天、按月等），StartTime和EndTime 的间隔必须大于5分钟。
- 批量推送计量数据时，“InstanceId”属性必须为同一个商品所产生的实例，目前不支持多个商品的实例同时推送。
- 新支持了多维度的计量能力，即对于上述的Frequency(次)、Period(使用时长)、PeriodMin等这些计费项在发布商品的时候可以支持多个，比如一个商品中可以有多个PeriodMin计费项，每个PeriodMin计费项会生成一个唯一的ID, 用户标识计费项，这个计费项是在发布商品的时候生成的，格式如(cmapi00060317-PeriodMin-3， cmapi00060317-PeriodMin-4)。在推送计量的时候需要将上面的ID传递过来，以便进行相应的计费扣减。新发布品推送的计量数据格式如下所示:
[{"InstanceId":"1000001","StartTime":"100000000","EndTime":"100000010","Entities":[{"Key":"PeriodMin","Value":"96","meteringAssit":"cmapi00060317-PeriodMin-4"}]}]

',
            'type' => 'string',
            'required' => false,
            'example' => '[{"InstanceId":"1000001","StartTime":"100000000","EndTime":"100000010","Entities":[{"Key":"PeriodMin","Value":"96","meteringAssit":"cmapi00060317-PeriodMin-4"}]}]',
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
              'Success' => 
              array (
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => ' 请求ID',
                'type' => 'string',
                'example' => '6EF60BEC-0242-43AF-BB20-270359FB54A7',
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
            'errorCode' => 'Invalid.Parameter.Metering',
            'errorMessage' => 'meteringAssit is empty',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'Service.Flow.Control',
            'errorMessage' => 'The rate throttling threshold has been exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Parameter.Instance',
            'errorMessage' => 'The specified Instance parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Parameter.Metering',
            'errorMessage' => 'The specified Metering parameter is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Metering.Data.Exceeded',
            'errorMessage' => 'The number of metering entities must not exceed 100.',
          ),
          6 => 
          array (
            'errorCode' => 'Permission.Denied',
            'errorMessage' => 'You are not authorized to call the API operation. Contact the API developer to add your account to the API user whitelist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"6EF60BEC-0242-43AF-BB20-270359FB54A7\\"\\n}","errorExample":""},{"type":"xml","example":"<PushMeteringDataResponse>\\n<RequestId>6EF60BEC-0242-43AF-BB20-270359FB54A7</RequestId>\\n<Success>true</Success>\\n</PushMeteringDataResponse>","errorExample":""}]',
      'title' => '推送计量数据',
      'summary' => '调用PushMeteringData推送计量数据。',
      'description' => '- 目前不支持子账号调用该接口。
- 请求参数全部需要URLEncode编码。
- 云市场对每个InstanceId的请求限制为60秒一次，每次请求支持写入的计量数据为100条。
- 不支持跨商品的InstanceId批量推送，批量推送时请确保所有InstanceId来自同一个商品。
- 按小时出账的商品，截止出账时间是下一个小时，计量数据必须按时推送过来。比如推送的计量数据是8:10-08:20, 则必须在9.59之前将计量数据推送过来，否则将不会出账。按天出账规则类似，即第二天必须要把前一天的数据推送过来，否则不会出账。
-注意参数中Metering字段要严格按照文档中的示例来提交，以往发现很多提交过来的不是一个JSON字段，再提交之前可以先用JSON格式化工具检查一下，否则接口调用会失败, 一定要仔细检查。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CrossAccountVerifyToken' => 
    array (
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
      'operationType' => 'readAndWrite',
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
          'name' => 'Token',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '跨账号角色授权成功返回的token',
            'description' => '跨账号角色授权成功返回的token',
            'type' => 'string',
            'required' => false,
            'example' => 'C19D103FEA2D50A584410267CE9FBA56',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ResultDTO<ServiceRoleVerifyTokenDTO>',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '返回结果对象',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => '用户展示名称',
                    'description' => '用户展示名称',
                    'type' => 'string',
                    'example' => 'marketplace_wangxiao_test',
                  ),
                  'Uid' => 
                  array (
                    'title' => '用户阿里云uid',
                    'description' => '用户阿里云uid',
                    'type' => 'string',
                    'example' => '1744526877246715',
                  ),
                  'AuthTime' => 
                  array (
                    'title' => '授权时间',
                    'description' => '授权时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1676974108866',
                  ),
                  'AuthRoles' => 
                  array (
                    'title' => '授权角色',
                    'description' => '授权角色',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '授权角色名称',
                      'type' => 'string',
                      'example' => 'VendorCrossAccountXIAOYUNACCESSSMSRole',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '接口返回成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码，200表示成功',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'C19D103F-EA2D-50A5-8441-0267CE9FBA56',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Result\\": {\\n    \\"Name\\": \\"marketplace_wangxiao_test\\",\\n    \\"Uid\\": \\"1744526877246715\\",\\n    \\"AuthTime\\": 1676974108866,\\n    \\"AuthRoles\\": [\\n      \\"VendorCrossAccountXIAOYUNACCESSSMSRole\\"\\n    ]\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C19D103F-EA2D-50A5-8441-0267CE9FBA56\\"\\n}","type":"json"}]',
      'title' => '查询跨账号角色授权信息',
      'summary' => '查询跨账号角色授权信息，包含授权人阿里云账号UID、名称、授权时间、授权角色名称。',
      'responseParamsDescription' => '返回值中授权人阿里云账号信息Name和Uid字段默认脱敏展示，如需明文展示，请联系云市场运营同学开通。',
    ),
    'DescribeDistributionProductsLink' => 
    array (
      'summary' => '获取推广商品的推广链接。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Codes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '商品code集合,不能为空集合，集合大小最多50条',
            'description' => '商品code集合,不能为空集合，集合大小最多50条',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'cmapi*****',
              'type' => 'string',
              'required' => false,
              'example' => 'cmapi******',
            ),
            'required' => true,
            'docRequired' => true,
            'minItems' => 1,
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
                'example' => '5BD09171-BF4D-18D8-890E-C70C067527BE',
              ),
              'TotalCount' => 
              array (
                'title' => '推广商品总数',
                'description' => '推广商品总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '51',
              ),
              'Success' => 
              array (
                'title' => '成功状态标识',
                'description' => '成功状态标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'description' => '推广商品链接信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Url' => 
                    array (
                      'title' => '商品推广链接',
                      'description' => '商品推广链接,注：示例链接为测试商品链接',
                      'type' => 'string',
                      'example' => 'https://market.aliyun.com/ad/adClick?param=QN%2BgAHA8mY%2BV1vSDtkNqyWG9G5uUX2Q8%2BJrC8wTzBo5YK7tTmm4Zdiz6nmmyLHMC5REAsq2viyeJYjBjVHno1HydPvHrVarNXQTMEzEmR8TRZaG2FsnzpszXKK2cMA69CUmF9qQpHqU%3D',
                    ),
                    'Code' => 
                    array (
                      'title' => '推广商品code',
                      'description' => '推广商品code',
                      'type' => 'string',
                      'example' => 'cmapi000****',
                    ),
                    'Name' => 
                    array (
                      'title' => '推广商品名称',
                      'description' => '推广商品名称',
                      'type' => 'string',
                      'example' => '测试商品',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden!',
            'errorMessage' => 'user is not distributor!',
          ),
          2 => 
          array (
            'errorCode' => 'ProductCodes',
            'errorMessage' => 'productCodes is empty!',
          ),
          3 => 
          array (
            'errorCode' => 'codeSizeError',
            'errorMessage' => 'productCodes size should less than 50!',
          ),
          4 => 
          array (
            'errorCode' => 'CodeError',
            'errorMessage' => 'codes is not correct!',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BD09171-BF4D-18D8-890E-C70C067527BE\\",\\n  \\"TotalCount\\": 51,\\n  \\"Success\\": true,\\n  \\"Result\\": [\\n    {\\n      \\"Url\\": \\"https://market.aliyun.com/ad/adClick?param=QN%2BgAHA8mY%2BV1vSDtkNqyWG9G5uUX2Q8%2BJrC8wTzBo5YK7tTmm4Zdiz6nmmyLHMC5REAsq2viyeJYjBjVHno1HydPvHrVarNXQTMEzEmR8TRZaG2FsnzpszXKK2cMA69CUmF9qQpHqU%3D\\",\\n      \\"Code\\": \\"cmapi000****\\",\\n      \\"Name\\": \\"测试商品\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDistributionProductsLinkResponse>\\n    <RequestId>5BD09171-BF4D-18D8-890E-C70C067527BE</RequestId>\\n    <TotalCount>51</TotalCount>\\n    <Success>true</Success>\\n    <Result>\\n        <Url>https://market.aliyun.com/ad/adClick?param=QN%2BgAHA8mY%2BV1vSDtkNqyWG9G5uUX2Q8%2BJrC8wTzBo5YK7tTmm4Zdiz6nmmyLHMC5REAsq2viyeJYjBjVHno1HydPvHrVarNXQTMEzEmR8TRZaG2FsnzpszXKK2cMA69CUmF9qQpHqU%3D</Url>\\n        <Code>cmapi000****</Code>\\n        <Name>测试商品</Name>\\n    </Result>\\n</DescribeDistributionProductsLinkResponse>","errorExample":""}]',
      'title' => '获取推广商品转化链接',
      'description' => '请使用推广服务商账号调用，非推广服务商调用不成功。',
      'requestParamsDescription' => '推广商品的code数组不能为空，数组大小不能大于50',
    ),
    'DescribeDistributionProducts' => 
    array (
      'summary' => '分页获取推广商品列表及详细信息。',
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
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页-当前页数',
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的推广商品数量',
            'description' => '每页的推广商品数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤条件列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '搜索标签类别，取值：

- code：推广商品Code
- name：推广商品名称
- supplierName：推广服务商名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'supplierName',
                ),
                'Value' => 
                array (
                  'description' => '搜索标签取值：

- code: 测试商品code
- name:测试商品名称
- supplierName:测试供应商家名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cmj0000000',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
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
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '5BD09171-MB74-18D8-890E-C70C067527BE',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的推广商品数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '符合搜索条件的推广商品数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Results' => 
              array (
                'description' => '推广商品信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FirstCategoryName' => 
                    array (
                      'title' => '商品类目，一级类目名称',
                      'description' => '商品类目，一级类目名称',
                      'type' => 'string',
                      'example' => 'API市场',
                    ),
                    'SecondCategoryName' => 
                    array (
                      'title' => '商品类目，二级类目名称',
                      'description' => '商品类目，二级类目名称',
                      'type' => 'string',
                      'example' => '生活服务',
                    ),
                    'Type' => 
                    array (
                      'title' => '商品类型
        APP 应用类
        SERVICE 服务类
        CHENGPIN_SITE 成品网站
        SITE_CUSTOM_SERVICE 定制网站
        SITE_PROMOTION_RUN 网站推广运营
        ENT_APP_SOFT 应用软件
        CLOUD_SERVICE 云服务
        EIF 企信宝
        BASIC_TOOLS 基础工具
        BASIC_SERVICES 基础服务
        JIANZHAN_XITONG 建站系统
        APP_COUPLES 应用伴侣
        MIRRORS_MARKET 镜像市场
        MIRRORS_MARKET_BASIC_ENVIRONMENT 基础环境
        MIRRORS_MARKET_APPLICATION_SOFTWARE 应用软件
        MIRROR 镜像类
        DINGDING 钉钉类
        DOWNLOAD 下载类
        EXTENDED 未知类
        API_SERVICE API类
        ROS 资源编排类
        DOCKER 容器类
        LICENSE 授权码类
        SAAS_WUYING 应用软件-无影应用',
                      'description' => '商品类型
        APP 应用类
        SERVICE 服务类
        CHENGPIN_SITE 成品网站
        SITE_CUSTOM_SERVICE 定制网站
        SITE_PROMOTION_RUN 网站推广运营
        ENT_APP_SOFT 应用软件
        CLOUD_SERVICE 云服务
        EIF 企信宝
        BASIC_TOOLS 基础工具
        BASIC_SERVICES 基础服务
        JIANZHAN_XITONG 建站系统
        APP_COUPLES 应用伴侣
        MIRRORS_MARKET 镜像市场
        MIRRORS_MARKET_BASIC_ENVIRONMENT 基础环境
        MIRRORS_MARKET_APPLICATION_SOFTWARE 应用软件
        MIRROR 镜像类
        DINGDING 钉钉类
        DOWNLOAD 下载类
        EXTENDED 未知类
        API_SERVICE API类
        ROS 资源编排类
        DOCKER 容器类
        LICENSE 授权码类
        SAAS_WUYING 应用软件-无影应用',
                      'type' => 'string',
                      'example' => 'API类',
                    ),
                    'ImageUrl' => 
                    array (
                      'title' => '商品主图url',
                      'description' => '商品主图url',
                      'type' => 'string',
                      'example' => '//photogallery.oss-cn-hangzhou.aliyuncs.com/photo/1744526877246715/09605255-87fd-44d1-8143-96ebc8019d46.jpeg',
                    ),
                    'Code' => 
                    array (
                      'title' => '商品code',
                      'description' => '商品code',
                      'type' => 'string',
                      'example' => 'cmap*****',
                    ),
                    'Name' => 
                    array (
                      'title' => '商品名称',
                      'description' => '商品名称',
                      'type' => 'string',
                      'example' => '手机号码在网状态查询',
                    ),
                    'ShortDescription' => 
                    array (
                      'title' => '商品简介',
                      'description' => '商品简介',
                      'type' => 'string',
                      'example' => '运营商号码状态查询】精准实时空号检测，手机号在网状态查询，返回正常、空号、通话中、在网但不可用、关机、呼叫转移、疑似关机、携号转网、号码错误、停机等多种状态。',
                    ),
                    'Price' => 
                    array (
                      'title' => '商品默认规格价格',
                      'description' => '商品默认规格价格，如100代表100,单位CNY',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'Score' => 
                    array (
                      'title' => '商品用户评分',
                      'description' => '商品用户评分',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'TradeCount' => 
                    array (
                      'title' => '商品近180天成交',
                      'description' => '商品近180天成交',
                      'type' => 'string',
                      'example' => '109',
                    ),
                    'UserCommentCount' => 
                    array (
                      'title' => '商品买家评论数',
                      'description' => '商品买家评论数',
                      'type' => 'string',
                      'example' => '55',
                    ),
                    'SubmissionRadio' => 
                    array (
                      'title' => '商品返佣比例',
                      'description' => '商品返佣比例,如30，代表30%',
                      'type' => 'string',
                      'example' => '30',
                    ),
                    'SupplierName' => 
                    array (
                      'title' => '推广服务商名称',
                      'description' => '推广服务商名称',
                      'type' => 'string',
                      'example' => '深圳市****有限公司',
                    ),
                    'SupplierUId' => 
                    array (
                      'title' => '推广服务商(商品供应商)阿里云UID',
                      'description' => '推广服务商(商品供应商)阿里云UID',
                      'type' => 'string',
                      'example' => '1911534921******',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'user is not distributor!',
          ),
          1 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'An error occurred while processing your request.	',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BD09171-MB74-18D8-890E-C70C067527BE\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 50,\\n  \\"Results\\": [\\n    {\\n      \\"FirstCategoryName\\": \\"API市场\\",\\n      \\"SecondCategoryName\\": \\"生活服务\\",\\n      \\"Type\\": \\"API类\\",\\n      \\"ImageUrl\\": \\"//photogallery.oss-cn-hangzhou.aliyuncs.com/photo/1744526877246715/09605255-87fd-44d1-8143-96ebc8019d46.jpeg\\",\\n      \\"Code\\": \\"cmap*****\\",\\n      \\"Name\\": \\"手机号码在网状态查询\\",\\n      \\"ShortDescription\\": \\"运营商号码状态查询】精准实时空号检测，手机号在网状态查询，返回正常、空号、通话中、在网但不可用、关机、呼叫转移、疑似关机、携号转网、号码错误、停机等多种状态。\\",\\n      \\"Price\\": \\"100\\",\\n      \\"Score\\": \\"5\\",\\n      \\"TradeCount\\": \\"109\\",\\n      \\"UserCommentCount\\": \\"55\\",\\n      \\"SubmissionRadio\\": \\"30\\",\\n      \\"SupplierName\\": \\"深圳市****有限公司\\",\\n      \\"SupplierUId\\": \\"1911534921******\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDistributionProductsResponse>\\n    <RequestId>5BD09171-MB74-18D8-890E-C70C067527BE</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>50</TotalCount>\\n    <Results>\\n        <FirstCategoryName>API市场</FirstCategoryName>\\n        <SecondCategoryName>生活服务</SecondCategoryName>\\n        <Type>API类</Type>\\n        <ImageUrl>//photogallery.oss-cn-hangzhou.aliyuncs.com/photo/1744526877246715/09605255-87fd-44d1-8143-96ebc8019d46.jpeg</ImageUrl>\\n        <Code>cmap*****</Code>\\n        <Name>手机号码在网状态查询</Name>\\n        <ShortDescription>运营商号码状态查询】精准实时空号检测，手机号在网状态查询，返回正常、空号、通话中、在网但不可用、关机、呼叫转移、疑似关机、携号转网、号码错误、停机等多种状态。</ShortDescription>\\n        <Price>100</Price>\\n        <Score>5</Score>\\n        <TradeCount>109</TradeCount>\\n        <UserCommentCount>55</UserCommentCount>\\n        <SubmissionRadio>30</SubmissionRadio>\\n        <SupplierName>深圳市****有限公司</SupplierName>\\n        <SupplierUId>1911534921******</SupplierUId>\\n    </Results>\\n</DescribeDistributionProductsResponse>","errorExample":""}]',
      'title' => '分页获取推广商品列表',
      'description' => '请使用推广服务商账号调用',
      'requestParamsDescription' => 'code为单个查询，name为商品名称，supplierName为商品供应商名称',
    ),
    'DescribeApiMetering' => 
    array (
      'summary' => '获取用户的API余量、总量、使用量等数据。',
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
          'name' => 'productCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => 'cmapi0004****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型，1表示套餐包，2表示资源包',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '62FC432C55A1A63534A6CB34',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '返回值列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '单个对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AliyunPk' => 
                    array (
                      'description' => '阿里云pk',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '102277855749****',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '商品code',
                      'type' => 'string',
                      'example' => 'cmapi0004****',
                    ),
                    'ProductName' => 
                    array (
                      'description' => '商品名称',
                      'type' => 'string',
                      'example' => '身份证实名认证-身份证实名',
                    ),
                    'TotalQuota' => 
                    array (
                      'description' => '余量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '98',
                    ),
                    'TotalUsage' => 
                    array (
                      'description' => '使用量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '220',
                    ),
                    'Unit' => 
                    array (
                      'description' => '单位',
                      'type' => 'string',
                      'example' => '次',
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '结果标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Count' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageSize' => 
              array (
                'description' => '　每页个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'Message' => 
              array (
                'description' => '错误信息描述',
                'type' => 'string',
                'example' => '"成功"',
              ),
              'Version' => 
              array (
                'description' => '版本',
                'type' => 'string',
                'example' => '1.0',
              ),
              'Fatal' => 
              array (
                'description' => 'fatal',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"62FC432C55A1A63534A6CB34\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Result\\": [\\n    {\\n      \\"AliyunPk\\": 0,\\n      \\"ProductCode\\": \\"cmapi0004****\\",\\n      \\"ProductName\\": \\"身份证实名认证-身份证实名\\",\\n      \\"TotalQuota\\": 98,\\n      \\"TotalUsage\\": 220,\\n      \\"Unit\\": \\"次\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"Success\\": true,\\n  \\"Count\\": 100,\\n  \\"PageSize\\": 20,\\n  \\"Message\\": \\"\\\\\\"成功\\\\\\"\\",\\n  \\"Version\\": \\"1.0\\",\\n  \\"Fatal\\": false\\n}","errorExample":""},{"type":"xml","example":"<DescribeApiMeteringResponse>\\n    <RequestId>62FC432C55A1A63534A6CB34</RequestId>\\n    <Code>200</Code>\\n    <Result>\\n        <ProductCode>cmapi0004****</ProductCode>\\n        <ProductName>身份证实名认证-身份证实名</ProductName>\\n        <TotalQuota>98</TotalQuota>\\n        <TotalUsage>220</TotalUsage>\\n        <Unit>次</Unit>\\n    </Result>\\n    <PageNumber>1</PageNumber>\\n    <Success>true</Success>\\n    <Count>100</Count>\\n    <PageSize>20</PageSize>\\n    <Message>\\"成功\\"</Message>\\n    <Version>1.0</Version>\\n    <Fatal>false</Fatal>\\n</DescribeApiMeteringResponse>","errorExample":""}]',
      'title' => 'API余量获取',
      'description' => '### **注意: 该接口支持主账号和Ram子账号获取API余量、总量、使用量信息**',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'market.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'market.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'market.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'market.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'market.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'market.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'market.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'market.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'market.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'market.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'market.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'market.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'market.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'market.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
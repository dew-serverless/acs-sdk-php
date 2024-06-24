<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'foasconsole',
    'version' => '2021-10-28',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 187194,
      'title' => '工作空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyPrepayInstanceSpec',
        1 => 'QueryConvertInstancePrice',
        2 => 'QueryCreateInstancePrice',
        3 => 'QueryModifyInstancePrice',
        4 => 'QueryRenewInstancePrice',
        5 => 'DescribeSupportedZones',
        6 => 'DescribeSupportedRegions',
        7 => 'CreateInstance',
        8 => 'RenewInstance',
        9 => 'DescribeInstances',
        10 => 'DeleteInstance',
        11 => 'ConvertInstance',
      ),
    ),
    1 => 
    array (
      'id' => 187189,
      'title' => '项目空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeNamespaces',
        1 => 'ModifyPrepayNamespaceSpec',
        2 => 'DeleteNamespace',
        3 => 'CreateNamespace',
      ),
    ),
    2 => 
    array (
      'id' => 187185,
      'title' => '资源标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'TagResources',
        3 => 'UntagResources',
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
    'ModifyPrepayInstanceSpec' => 
    array (
      'summary' => '修改包年包月的flink全托管实例计算资源的规格大小，调整后规格小于当前使用规格将进行缩容操作，调整后规格大于当前使用规格将进行扩容操作。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'abilityTreeCode' => '103205',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域id',
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源规格信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => 'CPU数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'MemoryGB' => 
              array (
                'description' => '内存大小。
> 内存大小必须为CPU数量的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '4',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Ha',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'HaZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'HaVSwitchIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'HaResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
              'MemoryGB' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'OrderId' => 
              array (
                'title' => '订单id',
                'description' => '订单id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '210406354690749',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
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
        'substitutions' => 
        array (
          0 => 'foasconsole::2021-10-28::ModifyInstanceSpec',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"OrderId\\": 210406354690749,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '修改工作空间计算资源',
      'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/subscription)。**',
    ),
    'QueryConvertInstancePrice' => 
    array (
      'summary' => '您可以通过本API来查询按量付费实例转包年包月价格。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '104063',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期',
            'description' => '订购周期，仅支持按年（Year）和月（Month）订购。',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期数量',
            'description' => '订购周期数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'IsAutoRenew',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否自动续费',
            'description' => '是否自动续费',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'NamespaceResourceSpecs',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目空间资源规格。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Namespace' => 
                array (
                  'description' => '项目空间名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'lm-test-default',
                ),
                'ResourceSpec' => 
                array (
                  'description' => '项目空间资源规格。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Cpu' => 
                    array (
                      'description' => 'CPU数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '6',
                    ),
                    'MemoryGB' => 
                    array (
                      'description' => '内存大小。单位：GB。

> 内存大小必须为CPU数量大小的4倍。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '24',
                    ),
                  ),
                  'required' => true,
                ),
              ),
              'required' => true,
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
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PriceInfo' => 
              array (
                'title' => '价格信息，包括价格和优惠规则。',
                'description' => '价格信息，包括价格和优惠规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'title' => '货币单位。',
                    'description' => '货币单位。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'DiscountAmount' => 
                  array (
                    'title' => '折扣',
                    'description' => '折扣',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '655.2',
                  ),
                  'OriginalAmount' => 
                  array (
                    'title' => '原价',
                    'description' => '原价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4368',
                  ),
                  'TradeAmount' => 
                  array (
                    'title' => '最终价，为原价减去折扣。',
                    'description' => '最终价，为原价减去折扣。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3712.8',
                  ),
                  'Code' => 
                  array (
                    'title' => '错误码',
                    'description' => '错误码',
                    'type' => 'string',
                    'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => '存在未支付订单，请先支付或取消原有订单',
                  ),
                  'OptionalPromotions' => 
                  array (
                    'description' => '优惠券信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PromotionDesc' => 
                        array (
                          'title' => '优惠券描述',
                          'description' => '优惠券描述',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                        ),
                        'PromotionName' => 
                        array (
                          'title' => '优惠券名称',
                          'description' => '优惠券名称',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券',
                        ),
                        'PromotionOptionNo' => 
                        array (
                          'title' => '优惠券编号',
                          'description' => '优惠券编号',
                          'type' => 'string',
                          'example' => '500011220010099',
                        ),
                        'Selected' => 
                        array (
                          'description' => '是否选用优惠券，取值如下：

- true：选用。

- false：未选用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'Rules' => 
                  array (
                    'title' => '活动规则。',
                    'description' => '活动规则。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'title' => '活动规则描述。',
                          'description' => '活动规则描述。',
                          'type' => 'string',
                          'example' => '买满1年，立享官网价格8.5折优惠。',
                        ),
                        'RuleId' => 
                        array (
                          'title' => '活动ID。',
                          'description' => '活动ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '587',
                        ),
                      ),
                    ),
                  ),
                  'StandPrice' => 
                  array (
                    'title' => '官网折扣价/直销合同折扣价',
                    'description' => '官网折扣价/直销合同折扣价',
                    'type' => 'string',
                  ),
                  'StandDiscountPrice' => 
                  array (
                    'title' => '基于官网折扣的优惠价格',
                    'description' => '基于官网折扣的优惠价格',
                    'type' => 'string',
                  ),
                  'IsContractActivity' => 
                  array (
                    'title' => '是否命中大客优惠',
                    'description' => '是否命中大客优惠',
                    'type' => 'boolean',
                  ),
                  'DepreciateInfo' => 
                  array (
                    'title' => '降价信息',
                    'description' => '降价信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OriginalStandAmount' => 
                      array (
                        'title' => '原始官网价总价',
                        'description' => '原始官网价总价',
                        'type' => 'string',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'title' => '降价后官网价总价',
                        'description' => '降价后官网价总价',
                        'type' => 'string',
                      ),
                      'CheapRate' => 
                      array (
                        'title' => '降价比例',
                        'description' => '降价比例',
                        'type' => 'string',
                      ),
                      'MonthPrice' => 
                      array (
                        'title' => '折合月价',
                        'description' => '折合月价',
                        'type' => 'string',
                      ),
                      'StartTime' => 
                      array (
                        'title' => '降价开始时间',
                        'description' => '降价开始时间',
                        'type' => 'string',
                      ),
                      'IsShow' => 
                      array (
                        'title' => '是否展示降价幅度',
                        'description' => '是否展示降价幅度',
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询按量付费转包年包月价格',
    ),
    'QueryCreateInstancePrice' => 
    array (
      'summary' => '获取本账号购买工作空间的价格。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '104066',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtc-e2e-test-post',
          ),
        ),
        1 => 
        array (
          'name' => 'ChargeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '付费类型，取值如下：

- POST：按量付费。
- PRE：包年包月。',
            'type' => 'string',
            'required' => true,
            'example' => 'PRE',
            'enum' => 
            array (
              0 => 'PRE',
              1 => 'POST',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间所属的可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-2ze9xoh8qyt1rnxfmfcdi',
          ),
        ),
        5 => 
        array (
          'name' => 'VSwitchIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '虚拟交换机ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟交换机ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-uf6kkcjvzyayv5je6t72s',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源规格。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => 'CPU数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '4',
              ),
              'MemoryGB' => 
              array (
                'description' => '内存大小。
> 内存大小必须为CPU数量的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '16',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订购周期，包年包月实例仅支持按年（Year）和月（Month）订购，按量付费实例选择小时（Hour）。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Month' => 'Month',
              'Year' => 'Year',
              'Hour' => 'Hour',
            ),
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Year',
              1 => 'Month',
              2 => 'Day',
              3 => 'Hour',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订购周期数量。
> 当ChargeType配置为PRE时，Duration参数必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否自动续费。取值：

- **true**：自动续费
- **false**：不自动续费（默认）

>按量付费时，该参数无效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'Storage',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '存储信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Oss' => 
              array (
                'description' => 'OSS存储信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => 'OSS的Bucket名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'quicktracing',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'UsePromotionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'PromotionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
            'example' => '500041860100636',
          ),
        ),
        13 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'Ha',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'HaResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
              'MemoryGB' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
              ),
              'PriceInfo' => 
              array (
                'title' => '价格信息，包括价格和优惠规则。',
                'description' => '价格信息，包括价格和优惠规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'title' => '货币单位。',
                    'description' => '货币单位。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'DiscountAmount' => 
                  array (
                    'title' => '折扣',
                    'description' => '折扣',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '655.2',
                  ),
                  'OriginalAmount' => 
                  array (
                    'title' => '原价',
                    'description' => '原价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4368',
                  ),
                  'TradeAmount' => 
                  array (
                    'title' => '最终价，为原价减去折扣。',
                    'description' => '最终价，为原价减去折扣。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3712.8',
                  ),
                  'Code' => 
                  array (
                    'title' => '错误码',
                    'description' => '错误码',
                    'type' => 'string',
                    'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => '存在未支付订单，请先支付或取消原有订单',
                  ),
                  'OptionalPromotions' => 
                  array (
                    'description' => '优惠券组信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '优惠券信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PromotionDesc' => 
                        array (
                          'title' => '优惠券描述',
                          'description' => '优惠券描述',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                        ),
                        'PromotionName' => 
                        array (
                          'title' => '优惠券名称',
                          'description' => '优惠券名称',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券',
                        ),
                        'PromotionOptionNo' => 
                        array (
                          'title' => '优惠券编号',
                          'description' => '优惠券编号',
                          'type' => 'string',
                          'example' => '500011220010099',
                        ),
                        'Selected' => 
                        array (
                          'description' => '是否选中优惠券。取值如下：
- true：选中。
- false：未选中。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'Rules' => 
                  array (
                    'title' => '活动规则。',
                    'description' => '活动规则。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '活动规则。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'title' => '活动规则描述。',
                          'description' => '活动规则描述。',
                          'type' => 'string',
                          'example' => '买满1年，立享官网价格8.5折优惠。',
                        ),
                        'RuleId' => 
                        array (
                          'title' => '活动ID。',
                          'description' => '活动ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '587',
                        ),
                      ),
                    ),
                  ),
                  'StandPrice' => 
                  array (
                    'title' => '官网折扣价/直销合同折扣价',
                    'description' => '官网折扣价/直销合同折扣价',
                    'type' => 'string',
                  ),
                  'StandDiscountPrice' => 
                  array (
                    'title' => '基于官网折扣的优惠价格',
                    'description' => '基于官网折扣的优惠价格',
                    'type' => 'string',
                  ),
                  'IsContractActivity' => 
                  array (
                    'title' => '是否命中大客优惠',
                    'description' => '是否命中大客优惠',
                    'type' => 'boolean',
                  ),
                  'DepreciateInfo' => 
                  array (
                    'title' => '降价信息',
                    'description' => '降价信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OriginalStandAmount' => 
                      array (
                        'title' => '原始官网价总价',
                        'description' => '原始官网价总价',
                        'type' => 'string',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'title' => '降价后官网价总价',
                        'description' => '降价后官网价总价',
                        'type' => 'string',
                      ),
                      'CheapRate' => 
                      array (
                        'title' => '降价比例',
                        'description' => '降价比例',
                        'type' => 'string',
                      ),
                      'MonthPrice' => 
                      array (
                        'title' => '折合月价',
                        'description' => '折合月价',
                        'type' => 'string',
                      ),
                      'StartTime' => 
                      array (
                        'title' => '降价开始时间',
                        'description' => '降价开始时间',
                        'type' => 'string',
                      ),
                      'IsShow' => 
                      array (
                        'title' => '是否展示降价幅度',
                        'description' => '是否展示降价幅度',
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询工作空间价格',
    ),
    'QueryModifyInstancePrice' => 
    array (
      'summary' => '您可以查询实例升降配时的价格。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '104067',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域id',
            'description' => '地域id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源规格。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => '变配后CPU数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '10',
              ),
              'MemoryGB' => 
              array (
                'description' => '变配后内存大小。

>内存大小必须为CPU数量的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '40',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Ha',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'HaZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'HaVSwitchIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'HaResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
              'MemoryGB' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PriceInfo' => 
              array (
                'title' => '价格信息，包括价格和优惠规则。',
                'description' => '价格信息，包括价格和优惠规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'title' => '货币单位。',
                    'description' => '货币单位。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'DiscountAmount' => 
                  array (
                    'title' => '折扣',
                    'description' => '折扣',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '655.2',
                  ),
                  'OriginalAmount' => 
                  array (
                    'title' => '原价',
                    'description' => '原价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4368',
                  ),
                  'TradeAmount' => 
                  array (
                    'title' => '最终价，为原价减去折扣。',
                    'description' => '最终价，为原价减去折扣。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3712.8',
                  ),
                  'Code' => 
                  array (
                    'title' => '错误码',
                    'description' => '错误码',
                    'type' => 'string',
                    'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => '存在未支付订单，请先支付或取消原有订单',
                  ),
                  'OptionalPromotions' => 
                  array (
                    'description' => '优惠券组信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '优惠券信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PromotionDesc' => 
                        array (
                          'title' => '优惠券描述',
                          'description' => '优惠券描述',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                        ),
                        'PromotionName' => 
                        array (
                          'title' => '优惠券名称',
                          'description' => '优惠券名称',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券',
                        ),
                        'PromotionOptionNo' => 
                        array (
                          'title' => '优惠券编号',
                          'description' => '优惠券编号',
                          'type' => 'string',
                          'example' => '500011220010099',
                        ),
                        'Selected' => 
                        array (
                          'description' => '是否选用优惠券。取值如下：

- true：选用。

- false：未选用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'Rules' => 
                  array (
                    'title' => '活动规则。',
                    'description' => '活动规则组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '活动规则。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'title' => '活动规则描述。',
                          'description' => '活动规则描述。',
                          'type' => 'string',
                          'example' => '买满1年，立享官网价格8.5折优惠。',
                        ),
                        'RuleId' => 
                        array (
                          'title' => '活动ID。',
                          'description' => '活动ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '587',
                        ),
                      ),
                    ),
                  ),
                  'StandPrice' => 
                  array (
                    'title' => '官网折扣价/直销合同折扣价',
                    'description' => '官网折扣价/直销合同折扣价',
                    'type' => 'string',
                  ),
                  'StandDiscountPrice' => 
                  array (
                    'title' => '基于官网折扣的优惠价格',
                    'description' => '基于官网折扣的优惠价格',
                    'type' => 'string',
                  ),
                  'IsContractActivity' => 
                  array (
                    'title' => '是否命中大客优惠',
                    'description' => '是否命中大客优惠',
                    'type' => 'boolean',
                  ),
                  'DepreciateInfo' => 
                  array (
                    'title' => '降价信息',
                    'description' => '降价信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OriginalStandAmount' => 
                      array (
                        'title' => '原始官网价总价',
                        'description' => '原始官网价总价',
                        'type' => 'string',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'title' => '降价后官网价总价',
                        'description' => '降价后官网价总价',
                        'type' => 'string',
                      ),
                      'CheapRate' => 
                      array (
                        'title' => '降价比例',
                        'description' => '降价比例',
                        'type' => 'string',
                      ),
                      'MonthPrice' => 
                      array (
                        'title' => '折合月价',
                        'description' => '折合月价',
                        'type' => 'string',
                      ),
                      'StartTime' => 
                      array (
                        'title' => '降价开始时间',
                        'description' => '降价开始时间',
                        'type' => 'string',
                      ),
                      'IsShow' => 
                      array (
                        'title' => '是否展示降价幅度',
                        'description' => '是否展示降价幅度',
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询变配价格',
    ),
    'QueryRenewInstancePrice' => 
    array (
      'summary' => '您可以查询续费一个包年包月工作空间的价格。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '104068',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscYN6NTL',
          1 => 'FEATUREscTKD5I3',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域id',
            'description' => '地域id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'sc_flinkserverless_public_cn-7e22ae5sess',
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期数量',
            'description' => '订购周期数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期',
            'description' => '订购周期',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Year',
              1 => 'Month',
              2 => 'Day',
              3 => 'Hour',
            ),
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PriceInfo' => 
              array (
                'title' => '价格信息，包括价格和优惠规则。',
                'description' => '价格信息，包括价格和优惠规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'title' => '货币单位。',
                    'description' => '货币单位。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'DiscountAmount' => 
                  array (
                    'title' => '折扣',
                    'description' => '折扣',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '655.2',
                  ),
                  'OriginalAmount' => 
                  array (
                    'title' => '原价',
                    'description' => '原价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4368',
                  ),
                  'TradeAmount' => 
                  array (
                    'title' => '最终价，为原价减去折扣。',
                    'description' => '最终价，为原价减去折扣。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3712.8',
                  ),
                  'Code' => 
                  array (
                    'title' => '错误码',
                    'description' => '错误码',
                    'type' => 'string',
                    'example' => 'ORDER.INST_HAS_UNPAID_ORDER',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息',
                    'type' => 'string',
                    'example' => '存在未支付订单，请先支付或取消原有订单',
                  ),
                  'OptionalPromotions' => 
                  array (
                    'description' => '优惠券组信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '优惠券信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PromotionDesc' => 
                        array (
                          'title' => '优惠券描述',
                          'description' => '优惠券描述',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券（有效期至 03/23/2022）',
                        ),
                        'PromotionName' => 
                        array (
                          'title' => '优惠券名称',
                          'description' => '优惠券名称',
                          'type' => 'string',
                          'example' => '￥1,391.5 优惠券',
                        ),
                        'PromotionOptionNo' => 
                        array (
                          'title' => '优惠券编号',
                          'description' => '优惠券编号',
                          'type' => 'string',
                          'example' => '500011220010099',
                        ),
                        'Selected' => 
                        array (
                          'description' => '是否选用优惠券。取值如下：

- true：选用。

- false：未选用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'Rules' => 
                  array (
                    'title' => '活动规则。',
                    'description' => '活动规则组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '活动规则',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'title' => '活动规则描述。',
                          'description' => '活动规则描述。',
                          'type' => 'string',
                          'example' => '买满1年，立享官网价格8.5折优惠。',
                        ),
                        'RuleId' => 
                        array (
                          'title' => '活动ID。',
                          'description' => '活动ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '587',
                        ),
                      ),
                    ),
                  ),
                  'StandPrice' => 
                  array (
                    'title' => '官网折扣价/直销合同折扣价',
                    'description' => '官网折扣价/直销合同折扣价',
                    'type' => 'string',
                  ),
                  'StandDiscountPrice' => 
                  array (
                    'title' => '基于官网折扣的优惠价格',
                    'description' => '基于官网折扣的优惠价格',
                    'type' => 'string',
                  ),
                  'IsContractActivity' => 
                  array (
                    'title' => '是否命中大客优惠',
                    'description' => '是否命中大客优惠',
                    'type' => 'boolean',
                  ),
                  'DepreciateInfo' => 
                  array (
                    'title' => '降价信息',
                    'description' => '降价信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OriginalStandAmount' => 
                      array (
                        'title' => '原始官网价总价',
                        'description' => '原始官网价总价',
                        'type' => 'string',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'title' => '降价后官网价总价',
                        'description' => '降价后官网价总价',
                        'type' => 'string',
                      ),
                      'CheapRate' => 
                      array (
                        'title' => '降价比例',
                        'description' => '降价比例',
                        'type' => 'string',
                      ),
                      'MonthPrice' => 
                      array (
                        'title' => '折合月价',
                        'description' => '折合月价',
                        'type' => 'string',
                      ),
                      'StartTime' => 
                      array (
                        'title' => '降价开始时间',
                        'description' => '降价开始时间',
                        'type' => 'string',
                      ),
                      'IsShow' => 
                      array (
                        'title' => '是否展示降价幅度',
                        'description' => '是否展示降价幅度',
                        'type' => 'boolean',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"PriceInfo\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": 655.2,\\n    \\"OriginalAmount\\": 4368,\\n    \\"TradeAmount\\": 3712.8,\\n    \\"Code\\": \\"ORDER.INST_HAS_UNPAID_ORDER\\",\\n    \\"Message\\": \\"存在未支付订单，请先支付或取消原有订单\\",\\n    \\"OptionalPromotions\\": [\\n      {\\n        \\"PromotionDesc\\": \\"￥1,391.5 优惠券（有效期至 03/23/2022）\\",\\n        \\"PromotionName\\": \\"￥1,391.5 优惠券\\",\\n        \\"PromotionOptionNo\\": \\"500011220010099\\",\\n        \\"Selected\\": true\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Description\\": \\"买满1年，立享官网价格8.5折优惠。\\",\\n        \\"RuleId\\": 587\\n      }\\n    ],\\n    \\"StandPrice\\": \\"\\",\\n    \\"StandDiscountPrice\\": \\"\\",\\n    \\"IsContractActivity\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"OriginalStandAmount\\": \\"\\",\\n      \\"CheapStandAmount\\": \\"\\",\\n      \\"CheapRate\\": \\"\\",\\n      \\"MonthPrice\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"IsShow\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询工作空间续费价格',
    ),
    'DescribeSupportedZones' => 
    array (
      'summary' => '您可以获取支持购买的可用区信息。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '104071',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'regionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '23A9C718-DDAB-1696-B025-18FBC830F7C5',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'description' => '可用区个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageIndex' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的条目数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ZoneIds' => 
              array (
                'description' => '可用区信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区ID。',
                  'type' => 'string',
                  'example' => 'cn-beijing-g',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23A9C718-DDAB-1696-B025-18FBC830F7C5\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 8,\\n  \\"TotalPage\\": 1,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"ZoneIds\\": [\\n    \\"cn-beijing-g\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取Flink全托管支持的可用区',
    ),
    'DescribeSupportedRegions' => 
    array (
      'summary' => '您可以获取支持购买的地域信息。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '104070',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
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
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B21DC47E-8928-199A-9F32-36D45E4693B4',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功，取值如下：

- true：成功
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的地域数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageIndex' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的地域数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Regions' => 
              array (
                'description' => '地域信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Region' => 
                    array (
                      'title' => 'regionId',
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'RegionName' => 
                    array (
                      'title' => 'region名称',
                      'description' => '地域名称',
                      'type' => 'string',
                      'example' => '华北2（北京）',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B21DC47E-8928-199A-9F32-36D45E4693B4\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 10,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Regions\\": [\\n    {\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"RegionName\\": \\"华北2（北京）\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取Flink全托管支持购买的地域',
    ),
    'CreateInstance' => 
    array (
      'summary' => '创建一个包年包月或者按量付费flink全托管工作空间。',
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
        'abilityTreeCode' => '103204',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rtc-e2e-test-pre',
          ),
        ),
        1 => 
        array (
          'name' => 'ChargeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '付费类型，取值如下：
- POST：按量付费
- PRE：包年包月',
            'type' => 'string',
            'required' => true,
            'example' => 'PRE',
            'enum' => 
            array (
              0 => 'PRE',
              1 => 'POST',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing-g',
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '专有网络VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-2ze9xoh8qyt1rnxfmfcdi',
          ),
        ),
        5 => 
        array (
          'name' => 'VSwitchIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '虚拟交换机ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟交换机ID。',
              'type' => 'string',
              'required' => true,
              'example' => 'vsw-m5esz02px6qxiu28x7c2i',
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源规格。

> 当ChargeType配置为PRE时，资源规格参数必填。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => 'CPU数量。
> - 在包年包月的工作空间下，CPU数量必填。在按量付费的工作空间下，可以不用填写CPU数量。- 创建的目标项目空间的CPU数量要小于工作空间中剩余CPU数量（工作空间购买的总CPU数量减去其他项目空间已分配CPU数量），否则会报错。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
              'MemoryGB' => 
              array (
                'description' => '内存大小。单位为GB。

> 内存大小必须为CPU数量的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '120',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或包月类型，取值范围如下：

- **year**：年
- **month**：月

> 若付费类型为PrePaid，该参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Year',
              1 => 'Month',
              2 => 'Day',
              3 => 'Hour',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订购周期数量。

> 当ChargeType配置为PRE时，Duration参数必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否自动续费。取值：

- **true**：自动续费
- **false**：不自动续费（默认）

>按量付费时，该参数无效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'Storage',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '存储参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Oss' => 
              array (
                'description' => 'OSS存储。',
                'type' => 'object',
                'properties' => 
                array (
                  'Bucket' => 
                  array (
                    'description' => 'OSS的Bucket名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'oss-flink-cn-shanghai-260343971602724445',
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        11 => 
        array (
          'name' => 'UsePromotionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'PromotionCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code。',
            'type' => 'string',
            'required' => false,
            'example' => '500043499350689',
          ),
        ),
        13 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '优惠券code',
            'description' => '优惠券code',
            'type' => 'string',
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'Ha',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        17 => 
        array (
          'name' => 'HaZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'HaVSwitchIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'HaResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
              'MemoryGB' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'MonitorType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        21 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
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
                'title' => '请求id',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'OrderInfo' => 
              array (
                'title' => '订单信息',
                'description' => '订单信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'OrderId' => 
                  array (
                    'title' => '订单id',
                    'description' => '订单id。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '210406354694567',
                  ),
                  'InstanceId' => 
                  array (
                    'title' => '实例id',
                    'description' => '订单实例id。',
                    'type' => 'string',
                    'example' => 'f-cn-zvp2q0zik06',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"OrderInfo\\": {\\n    \\"OrderId\\": 210406354694567,\\n    \\"InstanceId\\": \\"f-cn-zvp2q0zik06\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建flink全托管工作空间',
      'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/billing-overview)**',
    ),
    'RenewInstance' => 
    array (
      'summary' => '续费一个包年包月flink全托管工作空间。',
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
        'abilityTreeCode' => '103206',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域id',
            'description' => '地域id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'sc_flinkserverless_public_cn-7e22ae5sess',
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期数量',
            'description' => '订购周期数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期',
            'description' => '订购周期',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Year',
              1 => 'Month',
              2 => 'Day',
              3 => 'Hour',
            ),
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'OrderId' => 
              array (
                'title' => 'orderId',
                'description' => 'orderId',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '210406354690749',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"OrderId\\": 210406354690749,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '续费flink全托管工作空间',
      'description' => '**请确保在使用该接口前，已充分了解flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/renewal-policy)**',
    ),
    'DescribeInstances' => 
    array (
      'summary' => '查询一个或多个flink全托管工作空间的详细信息。',
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
        'abilityTreeCode' => '103207',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数，最大值为100行。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        4 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '付款类型',
            'description' => '付款类型',
            'type' => 'string',
            'required' => false,
            'example' => 'PRE',
            'enum' => 
            array (
              0 => 'PRE',
              1 => 'POST',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '实例的标签集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例标签',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
长度限制为 64 Unicode 字符。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ys',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总实例数目',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageIndex' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页属性，每页多少实例',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C8DF2A5B-6FBA-5651-A3D4-960F36640E6B',
              ),
              'Success' => 
              array (
                'description' => '是否成功，取值如下：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Instances' => 
              array (
                'description' => '实例组详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceCreateTime' => 
                    array (
                      'description' => '实例创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1629879567394',
                    ),
                    'ResourceExpiredTime' => 
                    array (
                      'title' => '超期时间',
                      'description' => '超期时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1637337600000',
                    ),
                    'Region' => 
                    array (
                      'description' => '实例所属地区',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '实例所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing-g',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络id',
                      'type' => 'string',
                      'example' => 'vpc-2ze9*******nxfmfcdi',
                    ),
                    'VSwitchIds' => 
                    array (
                      'description' => '虚拟交换机ID组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'example' => 'vsw-2ze6yqnc19*****psjj0j',
                      ),
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'f-cn-zvp2q0zik06',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费类型，取值如下：
- POST：按量付费
- PRE：包年包月',
                      'type' => 'string',
                      'example' => 'PRE',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '工作空间名称。',
                      'type' => 'string',
                      'example' => 'vvp1',
                    ),
                    'Uid' => 
                    array (
                      'description' => '实例所属用户ID。',
                      'type' => 'string',
                      'example' => '1838996687368452',
                    ),
                    'OrderState' => 
                    array (
                      'description' => '订单状态，取值如下：
- NOT_INIT：下单还未部署组件。
- NORMAL：正常状态。
- CEASE：过期状态。
- RELEASE：超期状态。',
                      'type' => 'string',
                      'example' => 'NORMAL',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'b3690a1655da47',
                    ),
                    'Storage' => 
                    array (
                      'description' => '存储信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Oss' => 
                        array (
                          'description' => 'OSS存储信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Bucket' => 
                            array (
                              'description' => 'OSS的Bucket名称。',
                              'type' => 'string',
                              'example' => 'oss_flink',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'ResourceSpec' => 
                    array (
                      'description' => '资源规格信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cpu' => 
                        array (
                          'description' => 'CPU数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'MemoryGB' => 
                        array (
                          'description' => '设置的内存数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '40',
                        ),
                      ),
                    ),
                    'ClusterStatus' => 
                    array (
                      'description' => '集群状态，取值如下：
-  CREATING：创建中。
-  RUNNING：运行中。
-  DISABLE：无效。
-  DELETING：删除中。
-  DELETED：已删除。',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'Tags' => 
                    array (
                      'title' => '资源列表',
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '标签键',
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'flink',
                          ),
                          'Value' => 
                          array (
                            'title' => '标签值',
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                        ),
                      ),
                    ),
                    'AskClusterId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'type' => 'string',
                    ),
                    'HostAliases' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Ip' => 
                          array (
                            'type' => 'string',
                            'required' => true,
                          ),
                          'HostNames' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                            'required' => true,
                          ),
                        ),
                      ),
                      'required' => true,
                    ),
                    'ArchitectureType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Ha' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'HaZoneId' => 
                    array (
                      'type' => 'string',
                    ),
                    'HaVSwitchIds' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'HaResourceSpec' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cpu' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'MemoryGB' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                      ),
                    ),
                    'MonitorType' => 
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 15,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"C8DF2A5B-6FBA-5651-A3D4-960F36640E6B\\",\\n  \\"Success\\": true,\\n  \\"Instances\\": [\\n    {\\n      \\"ResourceCreateTime\\": 1629879567394,\\n      \\"ResourceExpiredTime\\": 1637337600000,\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"ZoneId\\": \\"cn-beijing-g\\",\\n      \\"VpcId\\": \\"vpc-2ze9*******nxfmfcdi\\",\\n      \\"VSwitchIds\\": [\\n        \\"vsw-2ze6yqnc19*****psjj0j\\"\\n      ],\\n      \\"InstanceId\\": \\"f-cn-zvp2q0zik06\\",\\n      \\"ChargeType\\": \\"PRE\\",\\n      \\"InstanceName\\": \\"vvp1\\",\\n      \\"Uid\\": \\"1838996687368452\\",\\n      \\"OrderState\\": \\"NORMAL\\",\\n      \\"ResourceId\\": \\"b3690a1655da47\\",\\n      \\"Storage\\": {\\n        \\"Oss\\": {\\n          \\"Bucket\\": \\"oss_flink\\"\\n        }\\n      },\\n      \\"ResourceSpec\\": {\\n        \\"Cpu\\": 10,\\n        \\"MemoryGB\\": 40\\n      },\\n      \\"ClusterStatus\\": \\"RUNNING\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"flink\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"AskClusterId\\": \\"\\",\\n      \\"ResourceGroupId\\": \\"\\",\\n      \\"HostAliases\\": [\\n        {\\n          \\"Ip\\": \\"\\",\\n          \\"HostNames\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"ArchitectureType\\": \\"\\",\\n      \\"Ha\\": true,\\n      \\"HaZoneId\\": \\"\\",\\n      \\"HaVSwitchIds\\": [\\n        \\"\\"\\n      ],\\n      \\"HaResourceSpec\\": {\\n        \\"Cpu\\": 0,\\n        \\"MemoryGB\\": 0\\n      },\\n      \\"MonitorType\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看已购买Flink全托管工作空间',
    ),
    'DeleteInstance' => 
    array (
      'summary' => '释放按量付费的flink全托管工作空间。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '103202',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
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
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '释放按量付费Flink全托管工作空间',
      'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/refund-policy)**',
    ),
    'ConvertInstance' => 
    array (
      'summary' => '您可以将按量付费的工作空间转换为包年包月的工作空间。',
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
        'abilityTreeCode' => '104041',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期',
            'description' => '订购周期',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订购周期数量',
            'description' => '订购周期数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'IsAutoRenew',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否自动续费',
            'description' => '是否自动续费',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'NamespaceResourceSpecs',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '项目空间资源规格。',
            'description' => '项目空间资源规格。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Namespace' => 
                array (
                  'title' => 'namespace名称，',
                  'description' => 'namespace名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ns-1',
                ),
                'ResourceSpec' => 
                array (
                  'title' => '资源规格。',
                  'description' => '资源规格。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Cpu' => 
                    array (
                      'title' => 'cpu数量。',
                      'description' => 'cpu数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '1',
                    ),
                    'MemoryGB' => 
                    array (
                      'title' => '内存大小。',
                      'description' => '内存大小。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '4',
                    ),
                  ),
                  'required' => true,
                ),
              ),
              'required' => true,
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
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'OrderId' => 
              array (
                'title' => '订单id',
                'description' => '订单id。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '211473228320700',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"OrderId\\": 211473228320700\\n}","type":"json"}]',
      'title' => '按量付费转包年包月',
      'description' => '**请确保在使用该接口前，已充分了解Flink全托管产品的收费方式和[价格](https://help.aliyun.com/zh/flink/product-overview/switch-from-pay-as-you-go-to-subscription)。**',
    ),
    'DescribeNamespaces' => 
    array (
      'summary' => '您可以调用DescribeNamespaces查询某实例下的项目空间信息。',
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
        'abilityTreeCode' => '103229',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'regionId',
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间名称',
            'description' => '项目空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'di-590843445844225',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Flink',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页数',
            'description' => '当前页数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'Ha',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'type' => 'boolean',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功，取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageIndex' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Namespaces' => 
              array (
                'description' => '项目空间列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '项目空间的信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Namespace' => 
                    array (
                      'description' => '项目空间的名称。',
                      'type' => 'string',
                      'example' => 'ns-1',
                    ),
                    'Status' => 
                    array (
                      'description' => '项目空间的状态，取值如下：
- CREATING：正在创建。
- DELETING：正在删除。
- MODIFYING：正在修改资源规格。
- SUCCESS：上一个操作执行成功。
- FAILED：上一个操作执行失败。',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1629879567394',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1629879567394',
                    ),
                    'ResourceSpec' => 
                    array (
                      'description' => '资源规格信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cpu' => 
                        array (
                          'description' => 'CPU数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'MemoryGB' => 
                        array (
                          'description' => '内存大小。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '40',
                        ),
                      ),
                    ),
                    'ResourceUsed' => 
                    array (
                      'description' => '已使用的资源。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cpu' => 
                        array (
                          'description' => '已使用的CPU数量。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '2',
                        ),
                        'MemoryGB' => 
                        array (
                          'description' => '已使用的内存数量。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '4',
                        ),
                        'Cu' => 
                        array (
                          'type' => 'number',
                          'format' => 'float',
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'title' => '资源列表',
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '标签键',
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'flink',
                          ),
                          'Value' => 
                          array (
                            'title' => '标签值',
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                        ),
                      ),
                    ),
                    'Ha' => 
                    array (
                      'type' => 'boolean',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 5,\\n  \\"TotalPage\\": 2,\\n  \\"PageIndex\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Namespaces\\": [\\n    {\\n      \\"Namespace\\": \\"ns-1\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"GmtCreate\\": 1629879567394,\\n      \\"GmtModified\\": 1629879567394,\\n      \\"ResourceSpec\\": {\\n        \\"Cpu\\": 10,\\n        \\"MemoryGB\\": 40\\n      },\\n      \\"ResourceUsed\\": {\\n        \\"Cpu\\": 2,\\n        \\"MemoryGB\\": 4,\\n        \\"Cu\\": 0\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"flink\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"Ha\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看项目空间详情',
    ),
    'ModifyPrepayNamespaceSpec' => 
    array (
      'summary' => '修改包年包月实例下项目空间的规格。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '103228',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'di-593440219799842',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目空间资源详情',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => 'CPU数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'MemoryGB' => 
              array (
                'description' => '内存大小。单位：GB。

> 内存大小必须为CPU数量大小的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '4',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功，取值如下：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'foasconsole::2021-10-28::ModifyNamespaceSpec',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '修改项目空间资源',
    ),
    'DeleteNamespace' => 
    array (
      'summary' => '删除项目空间。',
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
        'abilityTreeCode' => '103227',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'namespace名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'di-593439443804417',
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
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => '是否成功',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除项目空间',
    ),
    'CreateNamespace' => 
    array (
      'summary' => '在flink全托管实例中下创建项目空间。',
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
        'abilityTreeCode' => '103226',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订单实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-cn-wwo36qj4g06',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'namespace名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'di-593440390152545',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceSpec',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源规格。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => 'CPU数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
              'MemoryGB' => 
              array (
                'description' => '内存大小。单位为GB。

> 内存数量必须为CPU数量的4倍。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '120',
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Ha',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
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
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => '是否成功',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建项目空间',
    ),
    'ListTagResources' => 
    array (
      'summary' => '您可以调用ListTagResources查询资源标签。您可以通过标签的value查询key值，或者通过key值查询value，也可以获取您在flink全托管工作空间上使用的所有标签信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '146254',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => '27AE00',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，固定值vvpinstance。',
            'type' => 'string',
            'required' => true,
            'example' => 'vvpinstance',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '订单实例ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'f-cn-7pp2m9w7s06',
            ),
            'required' => false,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键值对数组。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
                'description' => '是否成功，取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0E5D17CE-BD83-5DC9-8CD2-3C40C2F7A135',
              ),
              'TagReponseId' => 
              array (
                'description' => 'tag请求ID。',
                'type' => 'string',
                'example' => '87AE00',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => '27AE00',
              ),
              'TagResources' => 
              array (
                'title' => '资源列表',
                'description' => '资源绑定的标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签资源组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'title' => '资源类型',
                      'description' => '资源类型，固定值为vvpinstance。',
                      'type' => 'string',
                      'example' => 'vvpinstance',
                    ),
                    'TagValue' => 
                    array (
                      'title' => '标签值',
                      'description' => '标签值',
                      'type' => 'string',
                      'example' => 'tag',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '资源ID',
                      'description' => '订单实例ID。',
                      'type' => 'string',
                      'example' => 'f-cn-tyts',
                    ),
                    'TagKey' => 
                    array (
                      'title' => '标签键',
                      'description' => '标签键',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0E5D17CE-BD83-5DC9-8CD2-3C40C2F7A135\\",\\n  \\"TagReponseId\\": \\"87AE00\\",\\n  \\"NextToken\\": \\"27AE00\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"vvpinstance\\",\\n      \\"TagValue\\": \\"tag\\",\\n      \\"ResourceId\\": \\"f-cn-tyts\\",\\n      \\"TagKey\\": \\"test\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看Flink全托管工作空间标签列表',
    ),
    'TagResources' => 
    array (
      'summary' => '您可以调用本API创建资源标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '146252',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，固定值为vvpinstance。',
            'type' => 'string',
            'required' => true,
            'example' => 'vvpinstance',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '订单实例ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'f-cn-7e22rg',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源标签',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
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
                'example' => '67F33190-946B-1105-B6A1-E2DF0426DD51',
              ),
              'Success' => 
              array (
                'description' => '是否成功，取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TagResponseId' => 
              array (
                'description' => 'tag请求ID。',
                'type' => 'string',
                'example' => '154FT',
              ),
              'Message' => 
              array (
                'description' => '请求信息。',
                'type' => 'string',
                'example' => '""',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67F33190-946B-1105-B6A1-E2DF0426DD51\\",\\n  \\"Success\\": true,\\n  \\"TagResponseId\\": \\"154FT\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '创建资源标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '您可以调用UntagResources删除资源标签。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '146253',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREscTV6RL6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，固定值为vvpinstance。',
            'type' => 'string',
            'required' => true,
            'example' => 'vvpinstance',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
            'description' => '是否全部删除资源标签，只针对TagKey为空时有效。默认是false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID，最多50个子项',
            'description' => '订单实例ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'f-cn-tgy67',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键，最多20个子项',
            'description' => '标签键组，最多20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 21,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F59597FC-CD05-536D-B75B-6F45B8CC8539',
              ),
              'Success' => 
              array (
                'description' => '是否成功，取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TagResponseId' => 
              array (
                'description' => 'tag请求ID。',
                'type' => 'string',
                'example' => '154FT',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '""',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F59597FC-CD05-536D-B75B-6F45B8CC8539\\",\\n  \\"Success\\": true,\\n  \\"TagResponseId\\": \\"154FT\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '删除资源标签',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'foasconsole.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ecd',
    'version' => '2023-06-27',
  ),
  'directories' => 
  array (
    0 => 'DescribeBenefits',
    1 => 'GetRedeemCodes',
    2 => 'GetRequestToken',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'DescribeBenefits' => 
    array (
      'summary' => '查询渠道关联的权益规格、权益数量等信息，相关信息可用于渠道权益的发放。',
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
        0 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '渠道ID。权益查询的目标渠道。',
            'type' => 'string',
            'required' => true,
            'example' => 'wuying****',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
              ),
              'Benefits' => 
              array (
                'description' => '权益列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权益列表对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BenefitId' => 
                    array (
                      'description' => '权益ID。不同规格的权益，对应不同的权益ID。',
                      'type' => 'string',
                      'example' => '6a79****',
                    ),
                    'BenefitType' => 
                    array (
                      'description' => '权益类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Desktop.TimePack' => '云电脑时长包',
                      ),
                      'example' => 'Desktop.TimePack',
                    ),
                    'TotalAmount' => 
                    array (
                      'description' => '权益总量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'AvailableAmount' => 
                    array (
                      'description' => '权益余量，即可用量，数量随着权益发放而减少。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'SpecInfo' => 
                    array (
                      'description' => '权益规格详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CpuCore' => 
                        array (
                          'description' => 'vCPU核数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'AvailableHours' => 
                        array (
                          'description' => '可用时长，单位：小时。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '800',
                        ),
                        'MemorySize' => 
                        array (
                          'description' => '内存大小，单位：MB。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8192',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"Benefits\\": [\\n    {\\n      \\"BenefitId\\": \\"6a79****\\",\\n      \\"BenefitType\\": \\"Desktop.TimePack\\",\\n      \\"TotalAmount\\": 100,\\n      \\"AvailableAmount\\": 80,\\n      \\"SpecInfo\\": {\\n        \\"CpuCore\\": 4,\\n        \\"AvailableHours\\": 800,\\n        \\"MemorySize\\": 8192\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询渠道权益',
    ),
    'GetRedeemCodes' => 
    array (
      'summary' => '获取权益兑换码。渠道权益，将以兑换码的形式进行发放和流转。生成兑换码后，相应的权益数量将会扣减。',
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
        0 => 
        array (
          'name' => 'CodeQuantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要的兑换码数量，取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'BenefitId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '兑换码包含的权益ID，通过[DescribeBenefits](~~2500858~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => '6a79****
',
          ),
        ),
        2 => 
        array (
          'name' => 'RequestToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '渠道服务请求凭证，可通过[GetRequestToken](~~2500860~~)获取，每个渠道服务请求凭证使用有效次数：1次。',
            'type' => 'string',
            'required' => true,
            'example' => '8789d7271c36979****
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
            'title' => 'Schema of Response',
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
              ),
              'RedeemCodes' => 
              array (
                'description' => '兑换码列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '兑换码。',
                  'type' => 'string',
                  'example' => '068c8-55a1a-*****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"RedeemCodes\\": [\\n    \\"068c8-55a1a-*****\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取兑换码',
    ),
    'GetRequestToken' => 
    array (
      'summary' => '获取渠道服务请求一次性凭证，该凭证可用于渠道相关接口的鉴权，使用后失效。',
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
        0 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '渠道ID。获取渠道服务请求凭证，凭证仅在此渠道下生效。',
            'type' => 'string',
            'required' => true,
            'example' => 'wuying****',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25BB1CE-6B47-12DC-9FE6-03726****',
              ),
              'RequestToken' => 
              array (
                'description' => '生成的渠道服务请求凭证，每个渠道服务请求凭证使用有效次数：1次。',
                'type' => 'string',
                'example' => '8789d7271c36979****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BB1CE-6B47-12DC-9FE6-03726****\\",\\n  \\"RequestToken\\": \\"8789d7271c36979****\\"\\n}","type":"json"}]',
      'title' => '获取请求凭证',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'ecd.ap-southeast-7.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ecd.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ecd.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ecd.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ecd.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ecd.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'ecd.cn-nanjing.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ecd.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'ecd.cn-guangzhou.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ecd.cn-chengdu.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ecd.cn-hongkong.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ecd.ap-northeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ecd.ap-southeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ecd.ap-southeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ecd.ap-southeast-6.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ecd.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ecd.eu-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ecd.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
    ),
  ),
);
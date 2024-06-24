<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Cloudauth',
    'version' => '2022-11-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 178446,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EntVerify',
        1 => 'EntElementVerify',
        2 => 'EntRiskQuery',
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
    'EntVerify' => 
    array (
      'summary' => '企业注册信息真实性及经营真实性验证服务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景码。',
            'type' => 'string',
            'required' => false,
            'example' => 'withdraw',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '32198****193000',
          ),
        ),
        2 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '432***421',
          ),
        ),
        3 => 
        array (
          'name' => 'UserAuthorization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获得得用户授权。

- 1：获得授权

- 0：未获得授权',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InfoVerifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业要素核验类型，当前暂不支持。',
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'RiskVerifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业风险核验类型，与InfoVerifyType 至少选一个，目前支持：

- BUSINESS_ANTIFRAUD',
            'type' => 'string',
            'required' => false,
            'example' => 'BUSINESS_ANTIFRAUD',
          ),
        ),
        6 => 
        array (
          'name' => 'RiskModelVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业风险核验模型版本，RiskVerifyType 不为空时必传，目前支持：

- BASIC：基础版',
            'type' => 'string',
            'required' => false,
            'example' => 'BASIC',
          ),
        ),
        7 => 
        array (
          'name' => 'LicenseNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '营业执照号。',
            'type' => 'string',
            'required' => false,
            'example' => '32132***328932',
          ),
        ),
        8 => 
        array (
          'name' => 'EntName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业名称。',
            'type' => 'string',
            'required' => false,
            'example' => '***有限公司',
          ),
        ),
        9 => 
        array (
          'name' => 'LegalPersonName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '法人姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张**',
          ),
        ),
        10 => 
        array (
          'name' => 'LegalPersonCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '法人身份证号。',
            'type' => 'string',
            'required' => false,
            'example' => '370105*****3892',
          ),
        ),
        11 => 
        array (
          'name' => 'LegalPersonMobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '法人手机号。',
            'type' => 'string',
            'required' => false,
            'example' => '1300***53',
          ),
        ),
        12 => 
        array (
          'name' => 'AccountNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收款账户，辅助提升风险评估效果。',
            'type' => 'string',
            'required' => false,
            'example' => '321324***38293',
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
                'example' => '473469C7-A***B-A3DC0DE3C83E',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'RiskVerifyResult' => 
                  array (
                    'description' => '企业风险核验结果',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ModelResults' => 
                      array (
                        'description' => '企业风险核验模型返回结果列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ModelName' => 
                            array (
                              'description' => '模型名称',
                              'type' => 'string',
                              'example' => 'model_1',
                            ),
                            'Result' => 
                            array (
                              'description' => '模型结果',
                              'type' => 'string',
                              'example' => '5',
                            ),
                          ),
                        ),
                      ),
                      'Found' => 
                      array (
                        'description' => '是否查得',
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
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Result\\": {\\n    \\"RiskVerifyResult\\": {\\n      \\"ModelResults\\": [\\n        {\\n          \\"ModelName\\": \\"model_1\\",\\n          \\"Result\\": \\"5\\"\\n        }\\n      ],\\n      \\"Found\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '企业风险核验',
    ),
    'EntElementVerify' => 
    array (
      'summary' => '企业二三四要素认证服务基于权威数据源的工商信息数据，用于校验企业本身身份的真实性，输出企业认证结果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景码。支持字母、数字、下划线的组合，最长32位。',
            'type' => 'string',
            'required' => false,
            'example' => 'withdraw',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '32198****193000',
          ),
        ),
        2 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧用户ID。支持字母和数字的组合，长度最长32位。',
            'type' => 'string',
            'required' => false,
            'example' => '432***421',
          ),
        ),
        3 => 
        array (
          'name' => 'UserAuthorization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获得得用户授权。
- 1：获得授权
- 0：未获得授权',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InfoVerifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业要素核验类型。
- ENT_2META：二要素
- ENT_3META：三要素
- ENT_4META：四要素',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ENT_4META' => '四要素',
              'ENT_2META' => '二要素',
              'ENT_3META' => '三要素',
            ),
            'example' => 'ENT_2META',
          ),
        ),
        5 => 
        array (
          'name' => 'LicenseNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '营业执照号。',
            'type' => 'string',
            'required' => false,
            'example' => '32132***328932',
          ),
        ),
        6 => 
        array (
          'name' => 'EntName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业名称。',
            'type' => 'string',
            'required' => false,
            'example' => '***有限公司',
          ),
        ),
        7 => 
        array (
          'name' => 'LegalPersonName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '法人姓名。三要素、四要素场景必传。',
            'type' => 'string',
            'required' => false,
            'example' => '张**',
          ),
        ),
        8 => 
        array (
          'name' => 'LegalPersonCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '法人身份证号。四要素场景必传。',
            'type' => 'string',
            'required' => false,
            'example' => '370105*****3892',
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
                'example' => '473469C7***B-A3DC0DE3C83E',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：未查得',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '企业经营状态。
- 1：在营（开业）
- 2：迁出
- 3：注销
- 4：吊销
- 5：撤销
- 6：停业
- 0：其他',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'ReasonCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'ReasonDetail' => 
                  array (
                    'type' => 'string',
                  ),
                  'OpenTime' => 
                  array (
                    'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"Status\\": \\"1\\",\\n    \\"ReasonCode\\": \\"\\",\\n    \\"ReasonDetail\\": \\"\\",\\n    \\"OpenTime\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '企业要素核验',
    ),
    'EntRiskQuery' => 
    array (
      'summary' => '查询企业经营异常情况。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义场景code，用于区分业务场景，长度为10位的数字。',
            'type' => 'string',
            'required' => false,
            'example' => '1000000086',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '32198****193000',
          ),
        ),
        2 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您业务中自定义用户ID，用于后续定位排查问题使用',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        3 => 
        array (
          'name' => 'UserAuthorization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获得得用户授权。
1：获得授权
0：未获得授权',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型。
00：企业名称；
01：工商注册号；
02：统一社会信用代码；
03：组织机构代码；',
            'type' => 'string',
            'required' => false,
            'example' => '00',
          ),
        ),
        5 => 
        array (
          'name' => 'ParamValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据ParamType参数类型输入企业名称、工商注册号、统一社会信用代码、组织机构代码其中一种。',
            'type' => 'string',
            'required' => false,
            'example' => '91330106673959****',
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
            'description' => '接口响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260',
              ),
              'Code' => 
              array (
                'description' => '错误码。关于错误码的详情，请参见**[错误码](~~215420~~)**。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求信息的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '查询结果
0：企业经营正常
1：企业经营异常
2：未查得',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '企业经营状态。
- 1：在营（开业）
- 2：迁出
- 3：注销
- 4：吊销
- 5：撤销
- 6：停业
- 0：其他',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'RiskList' => 
                  array (
                    'description' => '异常信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '异常详情信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreditCode' => 
                        array (
                          'description' => '统一社会信用代码',
                          'type' => 'string',
                          'example' => '92500112MA5UHU****',
                        ),
                        'EntName' => 
                        array (
                          'description' => '企业名称。',
                          'type' => 'string',
                          'example' => '杭州****',
                        ),
                        'RegNo' => 
                        array (
                          'description' => '工商注册号',
                          'type' => 'string',
                          'example' => '50011260996****',
                        ),
                        'ListedReason' => 
                        array (
                          'description' => '被列入异常名单原因',
                          'type' => 'string',
                          'example' => '未按照《个体工商户年度报告暂行办法》***',
                        ),
                        'ListedDate' => 
                        array (
                          'description' => '被列入异常名单日期
示例：2023-02-03',
                          'type' => 'string',
                          'example' => '2023-02-03',
                        ),
                        'RemovedReason' => 
                        array (
                          'description' => '被移出异常名单原因',
                          'type' => 'string',
                          'example' => '根据《个体工商户年度报告暂行办法》第十三条的规定******',
                        ),
                        'RemovedDate' => 
                        array (
                          'description' => '被移出异常名单日期
示例：2023-02-03',
                          'type' => 'string',
                          'example' => '2023-02-06',
                        ),
                        'OperationOrg' => 
                        array (
                          'description' => '移入处理机关',
                          'type' => 'string',
                          'example' => '***市场监督***',
                        ),
                        'RemovedOrg' => 
                        array (
                          'description' => '移出处理机关',
                          'type' => 'string',
                          'example' => '***市场监督***',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"Status\\": \\"1\\",\\n    \\"RiskList\\": [\\n      {\\n        \\"CreditCode\\": \\"92500112MA5UHU****\\",\\n        \\"EntName\\": \\"杭州****\\",\\n        \\"RegNo\\": \\"50011260996****\\",\\n        \\"ListedReason\\": \\"未按照《个体工商户年度报告暂行办法》***\\",\\n        \\"ListedDate\\": \\"2023-02-03\\",\\n        \\"RemovedReason\\": \\"根据《个体工商户年度报告暂行办法》第十三条的规定******\\",\\n        \\"RemovedDate\\": \\"2023-02-06\\",\\n        \\"OperationOrg\\": \\"***市场监督***\\",\\n        \\"RemovedOrg\\": \\"***市场监督***\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '企业经营异常状况查询',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
  ),
);
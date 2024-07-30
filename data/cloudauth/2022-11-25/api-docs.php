<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Cloudauth',
        'version' => '2022-11-25',
    ],
    'directories' => [
        [
            'id' => 178446,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'EntVerify',
                'EntElementVerify',
                'EntRiskQuery',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EntVerify' => [
            'summary' => '企业注册信息真实性及经营真实性验证服务。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'withdraw',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32198****193000',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '432***421',
                    ],
                ],
                [
                    'name' => 'UserAuthorization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获得得用户授权。'."\n"
                            ."\n"
                            .'- 1：获得授权'."\n"
                            ."\n"
                            .'- 0：未获得授权',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InfoVerifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业要素核验类型，当前暂不支持。',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RiskVerifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业风险核验类型，与InfoVerifyType 至少选一个，目前支持：'."\n"
                            ."\n"
                            .'- BUSINESS_ANTIFRAUD',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BUSINESS_ANTIFRAUD',
                    ],
                ],
                [
                    'name' => 'RiskModelVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业风险核验模型版本，RiskVerifyType 不为空时必传，目前支持：'."\n"
                            ."\n"
                            .'- BASIC：基础版',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BASIC',
                    ],
                ],
                [
                    'name' => 'LicenseNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '营业执照号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32132***328932',
                    ],
                ],
                [
                    'name' => 'EntName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***有限公司',
                    ],
                ],
                [
                    'name' => 'LegalPersonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '法人姓名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张**',
                    ],
                ],
                [
                    'name' => 'LegalPersonCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '法人身份证号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '370105*****3892',
                    ],
                ],
                [
                    'name' => 'LegalPersonMobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '法人手机号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1300***53',
                    ],
                ],
                [
                    'name' => 'AccountNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '收款账户，辅助提升风险评估效果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '321324***38293',
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
                                'example' => '473469C7-A***B-A3DC0DE3C83E',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                            'Result' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'RiskVerifyResult' => [
                                        'description' => '企业风险核验结果',
                                        'type' => 'object',
                                        'properties' => [
                                            'ModelResults' => [
                                                'description' => '企业风险核验模型返回结果列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ModelName' => [
                                                            'description' => '模型名称',
                                                            'type' => 'string',
                                                            'example' => 'model_1',
                                                        ],
                                                        'Result' => [
                                                            'description' => '模型结果',
                                                            'type' => 'string',
                                                            'example' => '5',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Found' => [
                                                'description' => '是否查得',
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
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Result\\": {\\n    \\"RiskVerifyResult\\": {\\n      \\"ModelResults\\": [\\n        {\\n          \\"ModelName\\": \\"model_1\\",\\n          \\"Result\\": \\"5\\"\\n        }\\n      ],\\n      \\"Found\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '企业风险核验',
        ],
        'EntElementVerify' => [
            'summary' => '企业二三四要素认证服务基于权威数据源的工商信息数据，用于校验企业本身身份的真实性，输出企业认证结果。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景码。支持字母、数字、下划线的组合，最长32位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'withdraw',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32198****193000',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧用户ID。支持字母和数字的组合，长度最长32位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '432***421',
                    ],
                ],
                [
                    'name' => 'UserAuthorization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获得得用户授权。'."\n"
                            .'- 1：获得授权'."\n"
                            .'- 0：未获得授权',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InfoVerifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业要素核验类型。'."\n"
                            .'- ENT_2META：二要素'."\n"
                            .'- ENT_3META：三要素'."\n"
                            .'- ENT_4META：四要素',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ENT_4META' => '四要素',
                            'ENT_2META' => '二要素',
                            'ENT_3META' => '三要素',
                        ],
                        'example' => 'ENT_2META',
                    ],
                ],
                [
                    'name' => 'LicenseNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '营业执照号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32132***328932',
                    ],
                ],
                [
                    'name' => 'EntName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***有限公司',
                    ],
                ],
                [
                    'name' => 'LegalPersonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '法人姓名。三要素、四要素场景必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张**',
                    ],
                ],
                [
                    'name' => 'LegalPersonCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '法人身份证号。四要素场景必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '370105*****3892',
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
                                'example' => '473469C7***B-A3DC0DE3C83E',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：未查得',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Status' => [
                                        'description' => '企业经营状态。'."\n"
                                            .'- 1：在营（开业）'."\n"
                                            .'- 2：迁出'."\n"
                                            .'- 3：注销'."\n"
                                            .'- 4：吊销'."\n"
                                            .'- 5：撤销'."\n"
                                            .'- 6：停业'."\n"
                                            .'- 0：其他',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'ReasonCode' => [
                                        'type' => 'string',
                                    ],
                                    'ReasonDetail' => [
                                        'type' => 'string',
                                    ],
                                    'OpenTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"Status\\": \\"1\\",\\n    \\"ReasonCode\\": \\"\\",\\n    \\"ReasonDetail\\": \\"\\",\\n    \\"OpenTime\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '企业要素核验',
        ],
        'EntRiskQuery' => [
            'summary' => '查询企业经营异常情况。',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义场景code，用于区分业务场景，长度为10位的数字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000000086',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32198****193000',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您业务中自定义用户ID，用于后续定位排查问题使用',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'UserAuthorization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获得得用户授权。'."\n"
                            .'1：获得授权'."\n"
                            .'0：未获得授权',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型。'."\n"
                            .'00：企业名称；'."\n"
                            .'01：工商注册号；'."\n"
                            .'02：统一社会信用代码；'."\n"
                            .'03：组织机构代码；',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00',
                    ],
                ],
                [
                    'name' => 'ParamValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据ParamType参数类型输入企业名称、工商注册号、统一社会信用代码、组织机构代码其中一种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '91330106673959****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '接口响应',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260',
                            ],
                            'Code' => [
                                'description' => '错误码。关于错误码的详情，请参见**[错误码](~~215420~~)**。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求信息的响应消息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '查询结果'."\n"
                                            .'0：企业经营正常'."\n"
                                            .'1：企业经营异常'."\n"
                                            .'2：未查得',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Status' => [
                                        'description' => '企业经营状态。'."\n"
                                            .'- 1：在营（开业）'."\n"
                                            .'- 2：迁出'."\n"
                                            .'- 3：注销'."\n"
                                            .'- 4：吊销'."\n"
                                            .'- 5：撤销'."\n"
                                            .'- 6：停业'."\n"
                                            .'- 0：其他',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'RiskList' => [
                                        'description' => '异常信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '异常详情信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreditCode' => [
                                                    'description' => '统一社会信用代码',
                                                    'type' => 'string',
                                                    'example' => '92500112MA5UHU****',
                                                ],
                                                'EntName' => [
                                                    'description' => '企业名称。',
                                                    'type' => 'string',
                                                    'example' => '杭州****',
                                                ],
                                                'RegNo' => [
                                                    'description' => '工商注册号',
                                                    'type' => 'string',
                                                    'example' => '50011260996****',
                                                ],
                                                'ListedReason' => [
                                                    'description' => '被列入异常名单原因',
                                                    'type' => 'string',
                                                    'example' => '未按照《个体工商户年度报告暂行办法》***',
                                                ],
                                                'ListedDate' => [
                                                    'description' => '被列入异常名单日期'."\n"
                                                        .'示例：2023-02-03',
                                                    'type' => 'string',
                                                    'example' => '2023-02-03',
                                                ],
                                                'RemovedReason' => [
                                                    'description' => '被移出异常名单原因',
                                                    'type' => 'string',
                                                    'example' => '根据《个体工商户年度报告暂行办法》第十三条的规定******',
                                                ],
                                                'RemovedDate' => [
                                                    'description' => '被移出异常名单日期'."\n"
                                                        .'示例：2023-02-03',
                                                    'type' => 'string',
                                                    'example' => '2023-02-06',
                                                ],
                                                'OperationOrg' => [
                                                    'description' => '移入处理机关',
                                                    'type' => 'string',
                                                    'example' => '***市场监督***',
                                                ],
                                                'RemovedOrg' => [
                                                    'description' => '移出处理机关',
                                                    'type' => 'string',
                                                    'example' => '***市场监督***',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"Status\\": \\"1\\",\\n    \\"RiskList\\": [\\n      {\\n        \\"CreditCode\\": \\"92500112MA5UHU****\\",\\n        \\"EntName\\": \\"杭州****\\",\\n        \\"RegNo\\": \\"50011260996****\\",\\n        \\"ListedReason\\": \\"未按照《个体工商户年度报告暂行办法》***\\",\\n        \\"ListedDate\\": \\"2023-02-03\\",\\n        \\"RemovedReason\\": \\"根据《个体工商户年度报告暂行办法》第十三条的规定******\\",\\n        \\"RemovedDate\\": \\"2023-02-06\\",\\n        \\"OperationOrg\\": \\"***市场监督***\\",\\n        \\"RemovedOrg\\": \\"***市场监督***\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '企业经营异常状况查询',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
    ],
];
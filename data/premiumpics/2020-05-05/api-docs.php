<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Premiumpics',
        'version' => '2020-05-05',
    ],
    'directories' => [
        'CreateImageOrder',
        'CreateInventoryLock',
        'DeleteUserCollection',
        'DescribeDownloadImageInfo',
        'DescribeIndustryList',
        'DescribeLogo',
        'DescribeUserProduce',
        'GetLogoFontList',
        'GetProduceInfo',
        'GetTextLogoList',
        'ListDesign',
        'ListLogoSamples',
        'ListUserProduceOperateLogs',
        'ListUserCollections',
        'OperateProduceForUser',
        'QueryBarrelImageList',
        'GetTemplateCategories',
        'QueryConfigurationOrder',
        'CreateConfigurationOrder',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateImageOrder' => [
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
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1更新时间，2创建时间',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'SINGLE',
                        'default' => '',
                        'enum' => [
                            'BUY',
                            'RENEW',
                        ],
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'type',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'A',
                        'default' => '',
                        'enum' => [
                            'SINGLE',
                            'PACKAGE',
                        ],
                    ],
                ],
                [
                    'name' => 'GoodsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0da9332a7e46bf3a3648322cc4cefe55',
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片规格',
                        'type' => 'string',
                        'required' => false,
                        'example' => '专业版',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动支付预付费实例的账单：-true：是-false：否',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                        'enum' => [
                            'true',
                            'false',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf-cn-2r427peet48',
                    ],
                ],
                [
                    'name' => 'BuyerType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买的渠道类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                        'default' => '',
                        'enum' => [
                            'INDIVIDUALY',
                            'ENTERPRICE',
                        ],
                    ],
                ],
                [
                    'name' => 'ContactName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '韩媛媛',
                    ],
                ],
                [
                    'name' => 'ContactNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人电话号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123****6789',
                    ],
                ],
                [
                    'name' => 'Channel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会议码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ascii字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '74aed3df801b1abeea70604eae4c777a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FF882F7C-BF8D-5DCC-9F63-93A5BA36FD9F',
                            ],
                            'ErrorMsg' => [
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => '{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'OrderId' => [
                                'description' => '工单 Id。',
                                'type' => 'string',
                                'example' => '216992253670473',
                            ],
                            'Success' => [
                                'description' => '表示是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FF882F7C-BF8D-5DCC-9F63-93A5BA36FD9F\\",\\n  \\"ErrorMsg\\": \\"{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"OrderId\\": \\"216992253670473\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建图片订单',
            'summary' => '创建图片订单',
        ],
        'CreateInventoryLock' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GoodsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acf5c3c5fa4358ae158263d6b7cce2e9',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'UserId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UserId',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => 'status',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '4A89FD37-CAAB-5B31-A789-D073A5445578',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": true,\\n  \\"RequestId\\": \\"4A89FD37-CAAB-5B31-A789-D073A5445578\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建锁',
            'summary' => '创建锁',
        ],
        'DeleteUserCollection' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UnitId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的用户id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2c5d68e067f84c99b33def98f30d26d4',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.logo',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'userid',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'userid',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => 'status',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'AEA9CED1-57F2-5E33-A86A-427D46E7EBF7',
                            ],
                            'ErrorMsg' => [
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => 'dabukai dabukaidabukaidabukai',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。当您删除规则成功时，该参数为空。当您删除规则失败时，该参数显示错误码。错误码详情，请参见错误中心。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Success' => [
                                'description' => '是否成功回收了指定的实例角色。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": true,\\n  \\"RequestId\\": \\"AEA9CED1-57F2-5E33-A86A-427D46E7EBF7\\",\\n  \\"ErrorMsg\\": \\"dabukai dabukaidabukaidabukai\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除收藏',
            'summary' => '删除收藏',
        ],
        'DescribeDownloadImageInfo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'P20220627101248000001',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片id。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'h5568374035170305',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '基础版',
                    ],
                ],
                [
                    'name' => 'ImageUserBuyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ImageUserBuyId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => 'ImageUserBuyId',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'DownloadType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载类型：-standard（默认值）：通用下载-file：文件下载',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                        'enum' => [
                            'IMAGE',
                            'AUTHORIZATION',
                            'IMAGE_AUTHORIZATION',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'AuthorizationUrl' => [
                                'description' => '授权书下载地址。',
                                'type' => 'string',
                                'example' => 'http',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '047CE3B4-32EE-5AB9-89C8-BCEC23A5B4F4',
                            ],
                            'ErrorMsg' => [
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => 'Success. Request Success.',
                            ],
                            'ImageUrl' => [
                                'description' => '下载地址。',
                                'type' => 'string',
                                'example' => 'dsw-registry-vpc.cn-shenzhen.cr.aliyuncs.com/cloud-dsw-user/users:u1135620889978899-8589-20220922110432',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'sae.errorcode.ServiceDisabled.message',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：true：调用成功。                                 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AuthorizationUrl\\": \\"http\\",\\n  \\"RequestId\\": \\"047CE3B4-32EE-5AB9-89C8-BCEC23A5B4F4\\",\\n  \\"ErrorMsg\\": \\"Success. Request Success.\\",\\n  \\"ImageUrl\\": \\"dsw-registry-vpc.cn-shenzhen.cr.aliyuncs.com/cloud-dsw-user/users:u1135620889978899-8589-20220922110432\\",\\n  \\"ErrorCode\\": \\"sae.errorcode.ServiceDisabled.message\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '描述下载图片信息',
            'summary' => '描述下载图片信息',
        ],
        'DescribeIndustryList' => [
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2653A619-5539-50C3-8120-1594A3B758DD',
                            ],
                            'Data' => [
                                'description' => '结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'IndustryId' => [
                                            'description' => '行业id',
                                            'type' => 'string',
                                            'example' => '21',
                                        ],
                                        'Name' => [
                                            'description' => 'Waba名称',
                                            'type' => 'string',
                                            'example' => '金百丽',
                                        ],
                                        'Description' => [
                                            'description' => '域名描述。',
                                            'type' => 'string',
                                            'example' => '高端海鲜',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2653A619-5539-50C3-8120-1594A3B758DD\\",\\n  \\"Data\\": [\\n    {\\n      \\"IndustryId\\": \\"21\\",\\n      \\"Name\\": \\"金百丽\\",\\n      \\"Description\\": \\"高端海鲜\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '描述行业列表',
            'summary' => '描述行业列表',
        ],
        'DescribeLogo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GoodsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '逻辑库id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a4dbb263d80f4362bbc8305deacf2499',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'userId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'userId',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'FontDescription' => [
                                'description' => '详细描述',
                                'type' => 'string',
                                'example' => 'FontDescription',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0FDB7AA6-CEA2-5948-B930-A01F5266D90E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'BrandName' => [
                                'description' => '品牌名称。',
                                'type' => 'string',
                                'example' => '吕記',
                            ],
                            'NamePath' => [
                                'description' => '镜像路径',
                                'type' => 'string',
                                'example' => 'path'."\n",
                            ],
                            'ColorTwo' => [
                                'description' => '价签位置',
                                'type' => 'string',
                                'example' => '蓝',
                            ],
                            'ColorOne' => [
                                'description' => '付费类型为包年包月时，返回的ivr主键',
                                'type' => 'string',
                                'example' => '绿',
                            ],
                            'ColorDescription' => [
                                'description' => '授权详情描述',
                                'type' => 'string',
                                'example' => '红',
                            ],
                            'ColorThree' => [
                                'description' => '是否开通日志：-true：开通-false：未开通',
                                'type' => 'string',
                                'example' => 'red',
                            ],
                            'Images' => [
                                'description' => '镜像详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像',
                                    'type' => 'string',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FontDescription\\": \\"FontDescription\\",\\n  \\"RequestId\\": \\"0FDB7AA6-CEA2-5948-B930-A01F5266D90E\\",\\n  \\"Success\\": true,\\n  \\"BrandName\\": \\"吕記\\",\\n  \\"NamePath\\": \\"path\\\\n\\",\\n  \\"ColorTwo\\": \\"蓝\\",\\n  \\"ColorOne\\": \\"绿\\",\\n  \\"ColorDescription\\": \\"红\\",\\n  \\"ColorThree\\": \\"red\\",\\n  \\"Images\\": [\\n    \\"[]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '描述logo',
            'summary' => '描述logo',
        ],
        'DescribeUserProduce' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P20220731142346000001',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.logo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '40',
                            ],
                            'EndTime' => [
                                'description' => '免费角色到期时间。',
                                'type' => 'string',
                                'example' => '2022-08-24 10:53:00',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1B0A9A68-5A1A-5179-8591-0463F4686EEB',
                            ],
                            'OrderPrice' => [
                                'description' => '订单原价(单位:分)',
                                'type' => 'string',
                                'example' => '1899.00',
                            ],
                            'StartTime' => [
                                'description' => '生效时间。',
                                'type' => 'string',
                                'example' => '2022-10-16T06:35:00Z',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '111111111111111',
                            ],
                            'BizType' => [
                                'description' => 'BizType',
                                'type' => 'string',
                                'example' => 'esp.logo',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '216992253670473',
                            ],
                            'Success' => [
                                'description' => '操作是否成功。取值：true：成功。false：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'PartnerCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'luokeke',
                            ],
                            'IntentionBizId' => [
                                'description' => '需求ID',
                                'type' => 'string',
                                'example' => 'I20221129122203000001',
                            ],
                            'OrderInstanceId' => [
                                'description' => '预留实例id',
                                'type' => 'string',
                                'example' => 'swcopyright_swRegNormal_public_cn-tl32wr9giwy',
                            ],
                            'UserId' => [
                                'description' => 'UserId',
                                'type' => 'string',
                                'example' => 'UserId',
                            ],
                            'ExtInfo' => [
                                'description' => '扩展信息。',
                                'type' => 'string',
                                'example' => '{\\"designFileUrl\\":\\"https:\\\\/\\\\/oss.smalld.cn\\\\/zip\\\\/svg\\\\/20220519\\\\/3e63365c-f7d9-4fa6-9d38-413262fbf4c7.zip\\"}',
                            ],
                            'ErrorCode' => [
                                'description' => '错误代码。',
                                'type' => 'string',
                                'example' => 'sae.errorcode.ServiceDisabled.message',
                            ],
                            'SolutionBizId' => [
                                'description' => '方案ID',
                                'type' => 'string',
                                'example' => 'S20220624105026000001',
                            ],
                            'BizId' => [
                                'description' => '业务ID',
                                'type' => 'string',
                                'example' => 'P20220713180339000001',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": 40,\\n  \\"EndTime\\": \\"2022-08-24 10:53:00\\",\\n  \\"RequestId\\": \\"1B0A9A68-5A1A-5179-8591-0463F4686EEB\\",\\n  \\"OrderPrice\\": \\"1899.00\\",\\n  \\"StartTime\\": \\"2022-10-16T06:35:00Z\\",\\n  \\"ErrorMsg\\": \\"111111111111111\\",\\n  \\"BizType\\": \\"esp.logo\\",\\n  \\"OrderId\\": \\"216992253670473\\",\\n  \\"Success\\": true,\\n  \\"PartnerCode\\": \\"luokeke\\",\\n  \\"IntentionBizId\\": \\"I20221129122203000001\\",\\n  \\"OrderInstanceId\\": \\"swcopyright_swRegNormal_public_cn-tl32wr9giwy\\",\\n  \\"UserId\\": \\"UserId\\",\\n  \\"ExtInfo\\": \\"{\\\\\\\\\\\\\\"designFileUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https:\\\\\\\\\\\\\\\\/\\\\\\\\\\\\\\\\/oss.smalld.cn\\\\\\\\\\\\\\\\/zip\\\\\\\\\\\\\\\\/svg\\\\\\\\\\\\\\\\/20220519\\\\\\\\\\\\\\\\/3e63365c-f7d9-4fa6-9d38-413262fbf4c7.zip\\\\\\\\\\\\\\"}\\",\\n  \\"ErrorCode\\": \\"sae.errorcode.ServiceDisabled.message\\",\\n  \\"SolutionBizId\\": \\"S20220624105026000001\\",\\n  \\"BizId\\": \\"P20220713180339000001\\"\\n}","type":"json"}]',
            'title' => '描述用户产品',
            'summary' => '描述用户产品',
        ],
        'GetLogoFontList' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'type',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'brand',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8F007088-FD52-596E-8688-D7AE887D8329',
                            ],
                            'Fonts' => [
                                'description' => '返回的fort信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的fort信息列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'FontId' => [
                                            'description' => '字体id',
                                            'type' => 'string',
                                            'example' => 'dfs',
                                        ],
                                        'Name' => [
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'MyFamily',
                                        ],
                                        'Image' => [
                                            'description' => '原图',
                                            'type' => 'string',
                                            'example' => '18622562726',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"8F007088-FD52-596E-8688-D7AE887D8329\\",\\n  \\"Fonts\\": [\\n    {\\n      \\"FontId\\": \\"dfs\\",\\n      \\"Name\\": \\"MyFamily\\",\\n      \\"Image\\": \\"18622562726\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '字体logo列表',
            'summary' => '字体logo列表',
        ],
        'GetProduceInfo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GoodsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94e51c6930d24f0b88f2a4f5066089c7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '55534AD0-F8E2-5114-BB52-72150A499DEB',
                            ],
                            'BizId' => [
                                'description' => '业务ID',
                                'type' => 'string',
                                'example' => 'P20220531100052000001',
                            ],
                            'GoodsId' => [
                                'description' => '商品id',
                                'type' => 'string',
                                'example' => '6c1ccb5f26794d16bb13330fa84c86c7',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEM.ERROR',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55534AD0-F8E2-5114-BB52-72150A499DEB\\",\\n  \\"BizId\\": \\"P20220531100052000001\\",\\n  \\"GoodsId\\": \\"6c1ccb5f26794d16bb13330fa84c86c7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '产品信息',
            'summary' => '产品信息',
        ],
        'GetTextLogoList' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BrandName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '品牌名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '纪贝芬',
                    ],
                ],
                [
                    'name' => 'FontId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dfs',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '88E0B72B-7EA8-5D8F-BDA5-27A01E0539F4',
                            ],
                            'Success' => [
                                'description' => '此次操作是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'LogoVersion' => [
                                'description' => '日志最后修改时间。',
                                'type' => 'string',
                                'example' => '5d6716ceb8cd4370a05e0a0e30f4cb78',
                            ],
                            'Logos' => [
                                'description' => '具体内容，请参见[textlogolist](~~28935~~)。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '具体内容，请参见[textlogolist](~~28935~~)。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GoodsId' => [
                                            'description' => '商品id',
                                            'type' => 'string',
                                            'example' => '812f1855fa8d2b1e31ec2653eebe0702',
                                        ],
                                        'Url' => [
                                            'description' => '可公开访问的地址。',
                                            'type' => 'string',
                                            'example' => 'https://edu.aliyun.com/clouder/gdpr/showResourceAlert?token=fftdXk12sf3dHrp%2BukTT87K%2BDXM%3D',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88E0B72B-7EA8-5D8F-BDA5-27A01E0539F4\\",\\n  \\"Success\\": true,\\n  \\"LogoVersion\\": \\"5d6716ceb8cd4370a05e0a0e30f4cb78\\",\\n  \\"Logos\\": [\\n    {\\n      \\"GoodsId\\": \\"812f1855fa8d2b1e31ec2653eebe0702\\",\\n      \\"Url\\": \\"https://edu.aliyun.com/clouder/gdpr/showResourceAlert?token=fftdXk12sf3dHrp%2BukTT87K%2BDXM%3D\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '文字logo列表',
            'summary' => '文字logo列表',
        ],
        'ListDesign' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DesignType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'business_card',
                    ],
                ],
                [
                    'name' => 'DesignVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询的每页行数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"designFileUrl\\":\\"https:\\\\/\\\\/oss.smalld.cn\\\\/zip\\\\/svg\\\\/20220110\\\\/5990f7b0-5cc3-4f9e-8bda-6be44cd82d9c.zip\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '00F97175-FEAA-5E42-B048-952D32E9B881',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。true：调用成功。                                 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Version' => [
                                'description' => 'API的版本。',
                                'type' => 'string',
                                'example' => '2018-12-12',
                            ],
                            'End' => [
                                'description' => '统计结束时间',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'True',
                            ],
                            'PageNumber' => [
                                'description' => '返回结果分页。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'DesignVersion' => [
                                'description' => '版本',
                                'type' => 'string',
                                'example' => '47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GoodsId' => [
                                            'description' => '预测类目的id',
                                            'type' => 'string',
                                            'example' => 'c87ddbe58afd40ed864d3cab7c8c01b2',
                                        ],
                                        'Templates' => [
                                            'description' => '模板列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '模板列表',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PreviewUrl' => [
                                                        'description' => '正式预览链接 ',
                                                        'type' => 'string',
                                                        'example' => 'https://preview-lyj.aliyuncs.com/preview/36dec4b3530848dc90e128870790fdc4?subSceneIds=219024',
                                                    ],
                                                    'TemplateId' => [
                                                        'description' => '模板ID',
                                                        'type' => 'string',
                                                        'example' => '1320814',
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
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"00F97175-FEAA-5E42-B048-952D32E9B881\\",\\n  \\"Success\\": true,\\n  \\"Version\\": \\"2018-12-12\\",\\n  \\"End\\": 0,\\n  \\"PageNumber\\": 1,\\n  \\"DesignVersion\\": \\"47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6\\",\\n  \\"Data\\": [\\n    {\\n      \\"GoodsId\\": \\"c87ddbe58afd40ed864d3cab7c8c01b2\\",\\n      \\"Templates\\": [\\n        {\\n          \\"PreviewUrl\\": \\"https://preview-lyj.aliyuncs.com/preview/36dec4b3530848dc90e128870790fdc4?subSceneIds=219024\\",\\n          \\"TemplateId\\": \\"1320814\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '设计列表',
            'summary' => '设计列表',
        ],
        'ListLogoSamples' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GoodsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e2a520fd3efd46fcb8e2e112b158b246',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'UserId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UserId',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求结果，取值如下：true：请求成功。                                 false：请求失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '526B029B-2A59-5A71-9C22-B01926D80B14',
                            ],
                            'Images' => [
                                'description' => '图片',
                                'type' => 'array',
                                'items' => [
                                    'description' => '图片',
                                    'type' => 'string',
                                    'example' => '[\\"https://ocm-prd.oss-cn-shanghai.aliyuncs.com/20220607/y7nml82a9dj.png\\"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"526B029B-2A59-5A71-9C22-B01926D80B14\\",\\n  \\"Images\\": [\\n    \\"[\\\\\\\\\\\\\\"https://ocm-prd.oss-cn-shanghai.aliyuncs.com/20220607/y7nml82a9dj.png\\\\\\\\\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
            'title' => 'logo示例列表',
            'summary' => 'logo示例列表',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.logo',
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
                        'example' => 'P20220428100535000001',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名列表的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3',
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
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'root',
                        'type' => 'object',
                        'properties' => [
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'DA789D6E-875B-5473-B374-ABA909970BAB',
                            ],
                            'PageSize' => [
                                'description' => '返回分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalPageNum' => [
                                'description' => '总计页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OperateTime' => [
                                            'description' => '操作时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662531548',
                                        ],
                                        'OperateUserType' => [
                                            'description' => 'OperateUserType',
                                            'type' => 'string',
                                            'example' => 'OperateUserType',
                                        ],
                                        'BizId' => [
                                            'description' => '业务ID',
                                            'type' => 'string',
                                            'example' => 'P20220722103530000001',
                                        ],
                                        'OperateName' => [
                                            'description' => '操作人名称',
                                            'type' => 'string',
                                            'example' => 'StopOperationScriptInvocation',
                                        ],
                                        'BizType' => [
                                            'description' => 'BizType',
                                            'type' => 'string',
                                            'example' => 'esp.logo',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalItemNum' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNum\\": 2,\\n  \\"RequestId\\": \\"DA789D6E-875B-5473-B374-ABA909970BAB\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 3,\\n  \\"Data\\": [\\n    {\\n      \\"OperateTime\\": 1662531548,\\n      \\"OperateUserType\\": \\"OperateUserType\\",\\n      \\"BizId\\": \\"P20220722103530000001\\",\\n      \\"OperateName\\": \\"StopOperationScriptInvocation\\",\\n      \\"BizType\\": \\"esp.logo\\"\\n    }\\n  ],\\n  \\"TotalItemNum\\": 1,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询服务单操作日志',
            'summary' => '查询服务单操作日志',
        ],
        'ListUserCollections' => [
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
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.logo',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '5000',
                        'minimum' => '0',
                        'example' => '21',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '根',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '5AF6352F-7F3E-1325-B717-314BDC5A1311',
                            ],
                            'PageSize' => [
                                'description' => '每页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageNumber' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'error',
                            ],
                            'Data' => [
                                'description' => '信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内容',
                                    'type' => 'object',
                                    'properties' => [
                                        'UnitId' => [
                                            'description' => 'id',
                                            'type' => 'string',
                                            'example' => 'cd6c189cc87842afb5985fa1712dc797',
                                        ],
                                        'Image' => [
                                            'description' => '图片',
                                            'type' => 'string',
                                            'example' => 'https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&type=png',
                                        ],
                                        'UnitName' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'logo名称',
                                        ],
                                        'extend' => [
                                            'description' => '扩展信息',
                                            'type' => 'string',
                                            'example' => '{"cudId":"P20221026203254000001","from":"cud"}',
                                        ],
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 20,\\n  \\"RequestId\\": \\"5AF6352F-7F3E-1325-B717-314BDC5A1311\\",\\n  \\"PageSize\\": 2,\\n  \\"PageNumber\\": 3,\\n  \\"ErrorMsg\\": \\"error\\",\\n  \\"Data\\": [\\n    {\\n      \\"UnitId\\": \\"cd6c189cc87842afb5985fa1712dc797\\",\\n      \\"Image\\": \\"https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&type=png\\",\\n      \\"UnitName\\": \\"logo名称\\",\\n      \\"extend\\": \\"{\\\\\\"cudId\\\\\\":\\\\\\"P20221026203254000001\\\\\\",\\\\\\"from\\\\\\":\\\\\\"cud\\\\\\"}\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"123\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListUserCollectionsResponse>\\n    <TotalCount>20</TotalCount>\\n    <RequestId>5AF6352F-7F3E-1325-B717-314BDC5A1311</RequestId>\\n    <PageSize>2</PageSize>\\n    <PageNumber>3</PageNumber>\\n    <ErrorMsg>error</ErrorMsg>\\n    <Data>\\n        <UnitId>cd6c189cc87842afb5985fa1712dc797</UnitId>\\n        <Image>https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&amp;type=png</Image>\\n        <UnitName>logo名称</UnitName>\\n        <extend>{\\"cudId\\":\\"P20221026203254000001\\",\\"from\\":\\"cud\\"}</extend>\\n    </Data>\\n    <ErrorCode>123</ErrorCode>\\n    <Success>true</Success>\\n</ListUserCollectionsResponse>","errorExample":""}]',
            'title' => '收藏列表',
            'summary' => '收藏列表',
            'description' => '无',
            'responseParamsDescription' => '无',
            'extraInfo' => '无',
        ],
        'OperateProduceForUser' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'esp.logo',
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
                        'example' => 'P20221110021200000001',
                    ],
                ],
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定操作的类型：-improve：迁移-replace：替换',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'USER_CONFIRM',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"downloadType\\":\\"normalLogo\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '根',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'CDCCC923-5BA8-5D38-9B0F-66516448716F',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '获取数据失败，无法显示应用列表',
                            ],
                            'ErrorCode' => [
                                'description' => '错误代码。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CDCCC923-5BA8-5D38-9B0F-66516448716F\\",\\n  \\"ErrorMsg\\": \\"获取数据失败，无法显示应用列表\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '操作服务单',
            'summary' => '操作服务单',
        ],
        'QueryBarrelImageList' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Barrel',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Barrel',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'caipin',
                    ],
                ],
                [
                    'name' => 'StartId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询范围起始位置',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '110941',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '根',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0FDB7AA6-CEA2-5948-B930-A01F5266D90E',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Images' => [
                                'description' => '图片',
                                'type' => 'array',
                                'items' => [
                                    'description' => '图片',
                                    'type' => 'object',
                                    'properties' => [
                                        'Buy' => [
                                            'description' => '是否在阿里云购买了商品券。',
                                            'type' => 'boolean',
                                            'example' => '购买',
                                        ],
                                        'MidImage' => [
                                            'description' => '镜像地址',
                                            'type' => 'string',
                                            'example' => '中图',
                                        ],
                                        'BigImage' => [
                                            'description' => '原图大小',
                                            'type' => 'string',
                                            'example' => '大图',
                                        ],
                                        'SmallImage' => [
                                            'description' => '原图url',
                                            'type' => 'string',
                                            'example' => '小图',
                                        ],
                                        'Specifications' => [
                                            'description' => '规格名称。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '镜像规格详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Price' => [
                                                        'description' => '原价。',
                                                        'type' => 'string',
                                                        'example' => '300',
                                                    ],
                                                    'Width' => [
                                                        'description' => '图片宽度。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Height' => [
                                                        'description' => '图片高度',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '100',
                                                    ],
                                                    'Name' => [
                                                        'description' => '名称',
                                                        'type' => 'string',
                                                        'example' => 'authId',
                                                    ],
                                                    'ImageId' => [
                                                        'description' => 'ID',
                                                        'type' => 'string',
                                                        'example' => 'h4604360275725312',
                                                    ],
                                                    'Id' => [
                                                        'description' => '任务ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '55222',
                                                    ],
                                                    'Suffix' => [
                                                        'description' => '前缀列表的主键id。',
                                                        'type' => 'string',
                                                        'example' => 'jpg',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Title' => [
                                            'description' => '线下网关镜像名字的i18n key。可能值：'."\n"
                                                ."\n"
                                                .'- sgw.file.ova.title：云存储性能型文件网关 vSphere（v6.0及以上）镜像。'."\n"
                                                ."\n"
                                                .'- sgw.file.vhd.title：云存储性能型文件网关HyperV镜像。'."\n"
                                                ."\n"
                                                .'- sgw.file.kvm.title：云存储性能型文件网关KVM镜像。',
                                            'type' => 'string',
                                            'example' => '背部按摩10',
                                        ],
                                        'Tag' => [
                                            'description' => '镜像tag',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像id',
                                            'type' => 'string',
                                            'example' => 'h4548620964041728',
                                        ],
                                    ],
                                ],
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Success. Request Success.',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'HasNext' => [
                                'description' => '是否有下一页',
                                'type' => 'boolean',
                                'example' => 'False',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'NextId' => [
                                'description' => '下一页标识',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '51003',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FDB7AA6-CEA2-5948-B930-A01F5266D90E\\",\\n  \\"PageSize\\": 10,\\n  \\"Images\\": [\\n    {\\n      \\"Buy\\": true,\\n      \\"MidImage\\": \\"中图\\",\\n      \\"BigImage\\": \\"大图\\",\\n      \\"SmallImage\\": \\"小图\\",\\n      \\"Specifications\\": [\\n        {\\n          \\"Price\\": \\"300\\",\\n          \\"Width\\": 1,\\n          \\"Height\\": 100,\\n          \\"Name\\": \\"authId\\",\\n          \\"ImageId\\": \\"h4604360275725312\\",\\n          \\"Id\\": 55222,\\n          \\"Suffix\\": \\"jpg\\"\\n        }\\n      ],\\n      \\"Title\\": \\"背部按摩10\\",\\n      \\"Tag\\": \\"v1\\",\\n      \\"ImageId\\": \\"h4548620964041728\\"\\n    }\\n  ],\\n  \\"ErrorMsg\\": \\"Success. Request Success.\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"HasNext\\": true,\\n  \\"Success\\": true,\\n  \\"NextId\\": 51003\\n}","type":"json"}]',
            'title' => '查询图片列表',
            'summary' => '查询图片列表',
        ],
        'GetTemplateCategories' => [
            'summary' => '模板标签',
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
            'parameters' => [
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父类目id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => 'pc-2ze6x04o5eu444ceg',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCU的状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'True',
                        'maxLength' => 64,
                        'minLength' => 3,
                    ],
                ],
                [
                    'name' => 'Recursive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否递归查询模板类型，默认为false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'AllowRetry' => [
                                'title' => 'allowRetry',
                                'description' => 'allowRetry',
                                'type' => 'boolean',
                                'example' => 'False',
                            ],
                            'ErrorMsg' => [
                                'title' => 'errorMsg',
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => '{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}',
                            ],
                            'ErrorCode' => [
                                'title' => 'errorCode',
                                'description' => 'errorCode',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Module' => [
                                'title' => 'module',
                                'description' => 'module',
                                'type' => 'object',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'AppName' => [
                                'title' => 'appName',
                                'description' => 'appName',
                                'type' => 'string',
                                'example' => 'ronghe',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'AF0F836D-5E0C-5701-BD55-3DA4C4F29021',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AllowRetry\\": true,\\n  \\"ErrorMsg\\": \\"{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}\\",\\n  \\"ErrorCode\\": \\"200\\",\\n  \\"Module\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Success\\": true,\\n  \\"AppName\\": \\"ronghe\\",\\n  \\"RequestId\\": \\"AF0F836D-5E0C-5701-BD55-3DA4C4F29021\\"\\n}","type":"json"}]',
            'title' => '模板标签',
        ],
        'QueryConfigurationOrder' => [
            'summary' => '查询配置订单',
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
            'parameters' => [
                [
                    'name' => 'PopAction',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'popAction',
                        'description' => 'popAction',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'QuerySmsPackageSummary',
                    ],
                ],
                [
                    'name' => 'AliyunKp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'aliyunKp',
                        'description' => 'aliyunKp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserBid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userBid',
                        'description' => 'userBid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserSecurityToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userSecurityToken',
                        'description' => 'userSecurityToken',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'StsTokenCallerBid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerBid',
                        'description' => 'stsTokenCallerBid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserMfaPresent',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userMfaPresent',
                        'description' => 'userMfaPresent',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerSecurityTransport',
                        'description' => 'callerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserCallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerParentId',
                        'description' => 'userCallerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'OriginalRequest',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'originalRequest',
                        'description' => 'originalRequest',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ProxyCallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyCallerSecurityTransport',
                        'description' => 'proxyCallerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ProxyCallerIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyCallerIp',
                        'description' => 'proxyCallerIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'description' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1991B495-FB2A-5693-A79F-37245D48E293',
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'description' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acl',
                    ],
                ],
                [
                    'name' => 'UserCallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerSecurityTransport',
                        'description' => 'userCallerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'configurationId',
                        'description' => 'configurationId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => 'fbb8b6a3a2f55b816056841e4b85f801',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'lang',
                        'description' => 'lang',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'StsTokenCallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerUid',
                        'description' => 'stsTokenCallerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'description' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1157703270994901',
                    ],
                ],
                [
                    'name' => 'UserClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userClientIp',
                        'description' => 'userClientIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ProxyTrustTransportInfo',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyTrustTransportInfo',
                        'description' => 'proxyTrustTransportInfo',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserCallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerType',
                        'description' => 'userCallerType',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'MfaPresent',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'mfaPresent',
                        'description' => 'mfaPresent',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AliyunKpLong',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'aliyunKpLong',
                        'description' => 'aliyunKpLong',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'clientIp',
                        'description' => 'clientIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.198.219.249',
                    ],
                ],
                [
                    'name' => 'UserKp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userKp',
                        'description' => 'userKp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Bid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'bid',
                        'description' => 'bid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '26842',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '1991B495-FB2A-5693-A79F-37245D48E293',
                            ],
                            'ErrorMsg' => [
                                'title' => 'errorMsg',
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => 'Not Found',
                            ],
                            'Data' => [
                                'title' => 'module',
                                'description' => 'module',
                                'type' => 'string',
                                'example' => '[]',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '0',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SYSTEM.ERROR',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1991B495-FB2A-5693-A79F-37245D48E293\\",\\n  \\"ErrorMsg\\": \\"Not Found\\",\\n  \\"Data\\": \\"[]\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询配置订单',
        ],
        'CreateConfigurationOrder' => [
            'summary' => '创建配置订单',
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
            'parameters' => [
                [
                    'name' => 'PopAction',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'popAction',
                        'description' => 'popAction',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'QuerySmsBaseScreen',
                    ],
                ],
                [
                    'name' => 'AliyunKp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'aliyunKp',
                        'description' => 'aliyunKp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserBid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userBid',
                        'description' => 'userBid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserSecurityToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userSecurityToken',
                        'description' => 'userSecurityToken',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'StsTokenCallerBid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerBid',
                        'description' => 'stsTokenCallerBid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserMfaPresent',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userMfaPresent',
                        'description' => 'userMfaPresent',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerSecurityTransport',
                        'description' => 'callerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserCallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerParentId',
                        'description' => 'userCallerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'OriginalRequest',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'originalRequest',
                        'description' => 'originalRequest',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ProxyCallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyCallerSecurityTransport',
                        'description' => 'proxyCallerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ProxyCallerIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyCallerIp',
                        'description' => 'proxyCallerIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'description' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22DEBAC0-C46E-52C1-87F8-0378AE238063',
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'description' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acl',
                    ],
                ],
                [
                    'name' => 'UserCallerSecurityTransport',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerSecurityTransport',
                        'description' => 'userCallerSecurityTransport',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'lang',
                        'description' => 'lang',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'StsTokenCallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerUid',
                        'description' => 'stsTokenCallerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'description' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1703411985821693',
                    ],
                ],
                [
                    'name' => 'UserClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userClientIp',
                        'description' => 'userClientIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'SystemCall',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'systemCall',
                        'description' => 'systemCall',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ProxyTrustTransportInfo',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'proxyTrustTransportInfo',
                        'description' => 'proxyTrustTransportInfo',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'UserCallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userCallerType',
                        'description' => 'userCallerType',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'PackageId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'packageId',
                        'description' => 'packageId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1008349',
                    ],
                ],
                [
                    'name' => 'MfaPresent',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'mfaPresent',
                        'description' => 'mfaPresent',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AliyunKpLong',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'aliyunKpLong',
                        'description' => 'aliyunKpLong',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'clientIp',
                        'description' => 'clientIp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.104.16.254:51166',
                    ],
                ],
                [
                    'name' => 'UserKp',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userKp',
                        'description' => 'userKp',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Bid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'bid',
                        'description' => 'bid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '26888',
                    ],
                ],
                [
                    'name' => 'Items',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'items',
                        'description' => 'items',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\'Backup\': []}',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'userAccessKeyId',
                        'description' => 'userAccessKeyId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'B4736F94-D0E5-5D26-A5C4-1988CA68AFC9',
                            ],
                            'ErrorMsg' => [
                                'title' => 'errorMsg',
                                'description' => 'errorMsg',
                                'type' => 'string',
                                'example' => 'Not Found',
                            ],
                            'Data' => [
                                'title' => 'module',
                                'description' => 'module',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[]',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ABILITY.NOT.FOUND',
                        'errorMessage' => 'The operation is successful.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SYSTEM.ERROR',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4736F94-D0E5-5D26-A5C4-1988CA68AFC9\\",\\n  \\"ErrorMsg\\": \\"Not Found\\",\\n  \\"Data\\": 0,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建配置订单',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'premiumpics.aliyuncs.com',
        ],
    ],
];
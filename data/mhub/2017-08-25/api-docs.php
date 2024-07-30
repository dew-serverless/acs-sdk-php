<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Mhub',
        'version' => '2017-08-25',
    ],
    'directories' => [
        [
            'id' => 190727,
            'title' => '服务开通相关',
            'type' => 'directory',
            'children' => [
                'OpenEmasService',
            ],
        ],
        [
            'id' => 190718,
            'title' => '应用相关',
            'type' => 'directory',
            'children' => [
                'CreateApp',
                'DeleteApp',
                'ModifyApp',
                'ListApps',
                'QueryAppInfo',
                'DescribeDashboard',
                'QueryAppSecurityInfo',
            ],
        ],
        [
            'id' => 190721,
            'title' => '项目相关',
            'type' => 'directory',
            'children' => [
                'CreateProduct',
                'DeleteProduct',
                'ModifyProduct',
                'ListProducts',
                'QueryProductInfo',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'OpenEmasService' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '开通服务的订单号。',
                                'type' => 'string',
                                'example' => '20671870151****',
                            ],
                            'RequestId' => [
                                'description' => '开通请求的ID。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20671870151****\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '开通EMAS服务',
            'summary' => '开通EMAS服务。只有开通服务后，才能进行产品使用。',
            'description' => '开通EMAS服务操作仅限阿里云主账号使用；子账号无法使用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateApp' => [
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
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定创建应用所属的空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。该参数长度不超过26个字符，并且不能用_以外的特殊字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '我的应用',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型。取值范围如下：'."\n"
                            .'    '."\n"
                            .'    1：iOS'."\n"
                            .'    2：Android'."\n"
                            .'    8：魔笔网页端'."\n"
                            .'    9：魔笔移动端',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BundleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS应用ID。创建iOS应用时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.test.ios',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android 应用包名。创建Android应用时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.test.android',
                    ],
                ],
                [
                    'name' => 'EncodedIcon',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片 base64 字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '图片 base64 字符串',
                    ],
                ],
                [
                    'name' => 'IndustryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用所属的行业ID，取值范围如下：'."\n"
                            .'    '."\n"
                            .'     * 0. 社交'."\n"
                            .'     * 1. 摄影与摄像'."\n"
                            .'     * 2. 效率'."\n"
                            .'     * 3. 生活'."\n"
                            .'     * 4. 美食佳饮'."\n"
                            .'     * 5. 工具'."\n"
                            .'     * 6. 娱乐'."\n"
                            .'     * 7. 游戏'."\n"
                            .'     * 8. 儿童'."\n"
                            .'     * 9. 教育'."\n"
                            .'     * 10. 报刊杂志'."\n"
                            .'     * 11. 健康健美'."\n"
                            .'     * 12. 旅游'."\n"
                            .'     * 13. 音乐'."\n"
                            .'     * 14. 体育'."\n"
                            .'     * 15. 商务'."\n"
                            .'     * 16. 新闻'."\n"
                            .'     * 17. 财务'."\n"
                            .'     * 18. 参考'."\n"
                            .'     * 19. 导航'."\n"
                            .'     * 20. 医疗'."\n"
                            .'     * 21. 图书'."\n"
                            .'     * 22. 天气'."\n"
                            .'     * 23. 智能物联网',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识，用于识别一个请求。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929****',
                            ],
                            'AppInfo' => [
                                'description' => '应用基本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '应用类型，取值范围如下：'."\n"
                                            .'    '."\n"
                                            .'    1：iOS'."\n"
                                            .'    2：Android'."\n"
                                            .'    8：魔笔网页端'."\n"
                                            .'    9：魔笔移动端',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                                        'type' => 'string',
                                        'example' => '123456',
                                    ],
                                    'Description' => [
                                        'description' => '应用描述信息。',
                                        'type' => 'string',
                                        'example' => '应用描述信息',
                                    ],
                                    'PackageName' => [
                                        'description' => 'Android 应用包名。',
                                        'type' => 'string',
                                        'example' => 'com.test.android',
                                    ],
                                    'CreateTime' => [
                                        'description' => '应用创建UTC时间。',
                                        'type' => 'string',
                                        'example' => '2020-12-16T06:25:52Z',
                                    ],
                                    'ProductId' => [
                                        'description' => '应用所属空间ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '123456',
                                    ],
                                    'BundleId' => [
                                        'description' => 'iOS应用ID。',
                                        'type' => 'string',
                                        'example' => 'com.test.ios',
                                    ],
                                    'Name' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => '我的应用',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '应用修改UTC时间。',
                                        'type' => 'string',
                                        'example' => '2020-12-16T06:25:52Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929****\\",\\n  \\"AppInfo\\": {\\n    \\"Type\\": 1,\\n    \\"AppKey\\": \\"123456\\",\\n    \\"Description\\": \\"应用描述信息\\",\\n    \\"PackageName\\": \\"com.test.android\\",\\n    \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"ProductId\\": 123456,\\n    \\"BundleId\\": \\"com.test.ios\\",\\n    \\"Name\\": \\"我的应用\\",\\n    \\"ModifyTime\\": \\"2020-12-16T06:25:52Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAppResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929****</RequestId>\\n    <AppInfo>\\n        <Type>1</Type>\\n        <AppKey>123456</AppKey>\\n        <Description>应用描述信息</Description>\\n        <PackageName>com.test.android</PackageName>\\n        <CreateTime>2020-12-16T06:25:52Z</CreateTime>\\n        <ProductId>123456</ProductId>\\n        <BundleId>com.test.ios</BundleId>\\n        <Name>我的应用</Name>\\n        <ModifyTime>2020-12-16T06:25:52Z</ModifyTime>\\n    </AppInfo>\\n</CreateAppResponse>","errorExample":""}]',
            'title' => '创建应用',
            'summary' => '调用此接口在指定空间内创建一个新应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteApp' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识，用于识别一个请求。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAppResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</DeleteAppResponse>","errorExample":""}]',
            'title' => '删除应用',
            'summary' => '此接口用于删除应用。应用删除后不可恢复，如果删除已经对外发布的应用，可能会影响正常业务。删除前请确保已知晓此风险。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyApp' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '我的应用',
                    ],
                ],
                [
                    'name' => 'BundleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS应用ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.test.ios',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Android 应用包名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.test.android',
                    ],
                ],
                [
                    'name' => 'EncodedIcon',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片 base64 字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '图片 base64 字符串',
                    ],
                ],
                [
                    'name' => 'IndustryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业ID，取值范围如下：  '."\n"
                            .'   '."\n"
                            .'     * 0. 社交'."\n"
                            .'     * 1. 摄影与摄像'."\n"
                            .'     * 2. 效率'."\n"
                            .'     * 3. 生活'."\n"
                            .'     * 4. 美食佳饮'."\n"
                            .'     * 5. 工具'."\n"
                            .'     * 6. 娱乐'."\n"
                            .'     * 7. 游戏'."\n"
                            .'     * 8. 儿童'."\n"
                            .'     * 9. 教育'."\n"
                            .'     * 10. 报刊杂志'."\n"
                            .'     * 11. 健康健美'."\n"
                            .'     * 12. 旅游'."\n"
                            .'     * 13. 音乐'."\n"
                            .'     * 14. 体育'."\n"
                            .'     * 15. 商务'."\n"
                            .'     * 16. 新闻'."\n"
                            .'     * 17. 财务'."\n"
                            .'     * 18. 参考'."\n"
                            .'     * 19. 导航'."\n"
                            .'     * 20. 医疗'."\n"
                            .'     * 21. 图书'."\n"
                            .'     * 22. 天气'."\n"
                            .'     * 23. 智能物联网',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识，用于识别一个请求。'."\n",
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '修改应用信息',
            'summary' => '此接口用于修改应用信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApps' => [
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
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => ' 页码，默认值：1。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 每页的应用数量，默认值：20。'."\n"
                            .'- 取值范围为：1-100。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                        'default' => '100',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型，取值如下：'."\n"
                            .'    '."\n"
                            .'    1 ：iOS'."\n"
                            .'    2 ：Android'."\n"
                            .'    8 ：魔笔网页端'."\n"
                            .'    9 ：魔笔移动端',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '2',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UbsmsStatus' => [
                                'description' => '当前账号状态，取值如下：'."\n"
                                    .'- enabled：开通状态'."\n"
                                    .'- disabled：禁用状态'."\n"
                                    .'- inDebt：停机24小时以内（含24小时）'."\n"
                                    .'-  inDebt24h：停机24小时以上',
                                'type' => 'string',
                                'example' => 'enabled',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一标识，用于识别一个请求。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                            'Total' => [
                                'description' => '应用总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'AppInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppInfo' => [
                                        'description' => '应用的详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '应用类型，取值范围如下：'."\n"
                                                        .'    '."\n"
                                                        .'    1 ：iOS'."\n"
                                                        .'    2 ：Android'."\n"
                                                        .'    8 ：魔笔网页端'."\n"
                                                        .'    9 ：魔笔移动端',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'IndustryId' => [
                                                    'description' => '行业ID，取值范围如下：  '."\n"
                                                        .'   '."\n"
                                                        .'     * 0. 社交'."\n"
                                                        .'     * 1. 摄影与摄像'."\n"
                                                        .'     * 2. 效率'."\n"
                                                        .'     * 3. 生活'."\n"
                                                        .'     * 4. 美食佳饮'."\n"
                                                        .'     * 5. 工具'."\n"
                                                        .'     * 6. 娱乐'."\n"
                                                        .'     * 7. 游戏'."\n"
                                                        .'     * 8. 儿童'."\n"
                                                        .'     * 9. 教育'."\n"
                                                        .'     * 10. 报刊杂志'."\n"
                                                        .'     * 11. 健康健美'."\n"
                                                        .'     * 12. 旅游'."\n"
                                                        .'     * 13. 音乐'."\n"
                                                        .'     * 14. 体育'."\n"
                                                        .'     * 15. 商务'."\n"
                                                        .'     * 16. 新闻'."\n"
                                                        .'     * 17. 财务'."\n"
                                                        .'     * 18. 参考'."\n"
                                                        .'     * 19. 导航'."\n"
                                                        .'     * 20. 医疗'."\n"
                                                        .'     * 21. 图书'."\n"
                                                        .'     * 22. 天气'."\n"
                                                        .'     * 23. 智能物联网',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'AppKey' => [
                                                    'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                                                    'type' => 'string',
                                                    'example' => '123456',
                                                ],
                                                'PackageName' => [
                                                    'description' => 'Android 应用包名。',
                                                    'type' => 'string',
                                                    'example' => 'com.test.android',
                                                ],
                                                'EncodedIcon' => [
                                                    'description' => '图片 base64 字符串。',
                                                    'type' => 'string',
                                                    'example' => '图片 base64 字符串',
                                                ],
                                                'Name' => [
                                                    'description' => '应用名。',
                                                    'type' => 'string',
                                                    'example' => '我的应用',
                                                ],
                                                'BundleId' => [
                                                    'description' => 'iOS应用ID。创建iOS应用时必填。',
                                                    'type' => 'string',
                                                    'example' => 'com.test.ios',
                                                ],
                                                'Readonly' => [
                                                    'description' => '是否为只读应用。仅特殊场景使用。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UbsmsStatus\\": \\"enabled\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"Total\\": 10,\\n  \\"AppInfos\\": {\\n    \\"AppInfo\\": [\\n      {\\n        \\"Type\\": 1,\\n        \\"IndustryId\\": 1,\\n        \\"AppKey\\": \\"123456\\",\\n        \\"PackageName\\": \\"com.test.android\\",\\n        \\"EncodedIcon\\": \\"图片 base64 字符串\\",\\n        \\"Name\\": \\"我的应用\\",\\n        \\"BundleId\\": \\"com.test.ios\\",\\n        \\"Readonly\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询指定工作空间下应用列表',
            'summary' => '此ListApps接口用于查询指定工作空间下的应用列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryAppInfo' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定应用的AppKey，用于唯一标识应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '查询请求的ID。'."\n",
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                            'AppInfo' => [
                                'description' => '应用的基本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '应用状态，取值说明：'."\n"
                                            ."\n"
                                            .'0： 正常 '."\n"
                                            ."\n"
                                            .'-1：普通删除 '."\n"
                                            ."\n"
                                            .'-2：彻底删除。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Type' => [
                                        'description' => '应用类型，取值说明：'."\n"
                                            ."\n"
                                            .'1：iOS'."\n"
                                            ."\n"
                                            .'2：Android'."\n"
                                            ."\n"
                                            .'8：魔笔网页端'."\n"
                                            ."\n"
                                            .'9：魔笔移动端'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'CertDevelopExpiration' => [
                                        'description' => '推送开发者证书过期时间。UTC格式表达。',
                                        'type' => 'string',
                                        'example' => '2020-12-16T06:25:52Z',
                                    ],
                                    'IndustryId' => [
                                        'description' => '行业ID，取值说明：  '."\n"
                                            .'   '."\n"
                                            .'- 0：社交'."\n"
                                            .'- 1：摄影与摄像'."\n"
                                            .'- 2：效率'."\n"
                                            .'- 3：生活'."\n"
                                            .'- 4：美食佳饮'."\n"
                                            .'- 5：工具'."\n"
                                            .'- 6：娱乐'."\n"
                                            .'- 7：游戏'."\n"
                                            .'- 8：儿童'."\n"
                                            .'- 9：教育'."\n"
                                            .'- 10：报刊杂志'."\n"
                                            .'- 11：健康健美'."\n"
                                            .'- 12：旅游'."\n"
                                            .'- 13：音乐'."\n"
                                            .'- 14：体育'."\n"
                                            .'- 15：商务'."\n"
                                            .'- 16：新闻'."\n"
                                            .'- 17：财务'."\n"
                                            .'- 18：参考'."\n"
                                            .'- 19：导航'."\n"
                                            .'- 20：医疗'."\n"
                                            .'- 21：图书'."\n"
                                            .'- 22：天气'."\n"
                                            .'- 23：智能物联网',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PackageName' => [
                                        'description' => 'Android应用的包名。',
                                        'type' => 'string',
                                        'example' => 'com.test.android',
                                    ],
                                    'CreateTime' => [
                                        'description' => '应用创建时间。UTC格式表达。',
                                        'type' => 'string',
                                        'example' => '2020-12-16T06:25:52Z',
                                    ],
                                    'Readonly' => [
                                        'description' => '标识应用是否为只读状态。'."\n"
                                            ."\n"
                                            .'> 该字段用于特定场景，如无需要可忽略。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'AppName' => [
                                        'description' => '应用的名称。',
                                        'type' => 'string',
                                        'example' => '我的应用',
                                    ],
                                    'CertProductExpiration' => [
                                        'description' => '推送生产证书过期时间。UTC格式表达。',
                                        'type' => 'string',
                                        'example' => '2020-12-16T06:25:52Z',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用的AppKey，用于唯一标识应用。',
                                        'type' => 'string',
                                        'example' => '123456',
                                    ],
                                    'CertDevelopAvail' => [
                                        'description' => '标识推送配置开发者推送证书是否可用。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'EncodedIcon' => [
                                        'description' => 'icon图片的base64字符串。',
                                        'type' => 'string',
                                        'example' => 'icon图片base64字符串',
                                    ],
                                    'ProductId' => [
                                        'description' => '应用所属工作空间的ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234',
                                    ],
                                    'BundleId' => [
                                        'description' => 'iOS应用的BundleId。',
                                        'type' => 'string',
                                        'example' => 'com.test.ios',
                                    ],
                                    'CertProductAvail' => [
                                        'description' => '推送配置生产推送证书是否可用。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"AppInfo\\": {\\n    \\"Status\\": 0,\\n    \\"Type\\": 1,\\n    \\"CertDevelopExpiration\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"IndustryId\\": 1,\\n    \\"PackageName\\": \\"com.test.android\\",\\n    \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"Readonly\\": false,\\n    \\"AppName\\": \\"我的应用\\",\\n    \\"CertProductExpiration\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"AppKey\\": \\"123456\\",\\n    \\"CertDevelopAvail\\": false,\\n    \\"EncodedIcon\\": \\"icon图片base64字符串\\",\\n    \\"ProductId\\": 1234,\\n    \\"BundleId\\": \\"com.test.ios\\",\\n    \\"CertProductAvail\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询应用详情',
            'summary' => '调用QueryAppInfo查询应用详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDashboard' => [
            'summary' => '获取应用在各服务下的看板信息',
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
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mqc',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定应用的appkey，唯一标识应用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '29201799',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型，取值如下：1：ios2：android8：魔笔网页端9：魔笔移动端',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本，默认为最新版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4.8',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '无用字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' deprecated',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，精确到毫秒的unix时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1681369984564',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1681985390256',
                    ],
                ],
                [
                    'name' => 'ProxyAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅serviceName为 apm 时生效，子查询：查询app版本、查询性能监控概览，查询崩溃概览',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'queryAppVersions' => 'queryAppVersions',
                            'queryApmInfo' => 'queryApmInfo',
                            'queryCrashInfo' => 'queryCrashInfo',
                        ],
                        'example' => 'queryAppVersions',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识，用于识别一个请求。',
                                'type' => 'string',
                                'example' => '4CC30A8F-787C-55CA-87A6-7D1BED56067E',
                            ],
                            'Model' => [
                                'description' => '返回结果',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'	"success":true,'."\n"
                                    .'	"model":{'."\n"
                                    .'		"perfMonthCount":0,'."\n"
                                    .'		"compatibilityMonthCount":0,'."\n"
                                    .'		"perfLastMonthCount":0,'."\n"
                                    .'		"compatibilityLastMonthCount":0,'."\n"
                                    .'		"automationMonthCount":0,'."\n"
                                    .'		"automationLastMonthCount":0'."\n"
                                    .'	}'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4CC30A8F-787C-55CA-87A6-7D1BED56067E\\",\\n  \\"Model\\": \\"{\\\\n\\\\t\\\\\\"success\\\\\\":true,\\\\n\\\\t\\\\\\"model\\\\\\":{\\\\n\\\\t\\\\t\\\\\\"perfMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"compatibilityMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"perfLastMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"compatibilityLastMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"automationMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"automationLastMonthCount\\\\\\":0\\\\n\\\\t}\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取应用在各服务下的看板信息。',
        ],
        'QueryAppSecurityInfo' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定应用的AppKey，唯一标识应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '查询请求的ID。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                            'AppSecurityInfo' => [
                                'description' => '应用的安全信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppSecret' => [
                                        'description' => '应用的AppSecret，用于在接口请求时进行签名鉴权等。',
                                        'type' => 'string',
                                        'example' => 'abc123abc123',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用的AppKey，唯一标识应用。',
                                        'type' => 'string',
                                        'example' => '123456',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"AppSecurityInfo\\": {\\n    \\"AppSecret\\": \\"abc123abc123\\",\\n    \\"AppKey\\": \\"123456\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询应用秘钥信息',
            'summary' => '查询指定应用的AppSecret。AppSecret为秘钥信息，用于接口请求权限校验。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateProduct' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置项目的名称。取值范围：1～30字符，字符类型：包含中文、英文大小写、数字、下划线（_）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '我的项目名称',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '简要描述项目的用途。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ProductId' => [
                                'description' => '项目的ID，唯一标识项目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123456',
                            ],
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ProductId\\": 123456,\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProductResponse>\\n    <ProductId>123456</ProductId>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</CreateProductResponse>","errorExample":""}]',
            'title' => '创建工作空间',
            'summary' => '创建工作空间。工作空间是应用的分组，用于管理一组相关应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteProduct' => [
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
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待删除的项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '删除失败错误码。',
                                'type' => 'string',
                                'example' => 'PRODUCT_NOT_ALONE',
                            ],
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"PRODUCT_NOT_ALONE\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除工作空间',
            'summary' => '调用DeleteProduct删除工作空间。',
            'description' => '# 前提条件'."\n"
                ."\n"
                .'已删除工作空间下属应用，即工作空间为空。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyProduct' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称。取值范围：1～30字符，字符类型：包含中文、英文大小写、数字、下划线（_）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '我的工作空间',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目的简要描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求唯一标识，用于识别一个请求。'."\n",
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProductResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</ModifyProductResponse>","errorExample":""}]',
            'title' => '修改工作空间',
            'summary' => '此接口用于修改工作空间基本信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProducts' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 每页可显示的项目的个数。'."\n"
                            .'- 取值范围为：1-100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Simple',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置是否为简化查询。'."\n"
                            ."\n"
                            .'- true：简化查询。不返回encodedIcon和Platforms两个字段。'."\n"
                            .'- false：非简化查询。返回全部字段。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '输入关键字，按项目名称模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '我的项目',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UbsmsStatus' => [
                                'description' => '当前账号状态，返回值说明如下：'."\n"
                                    .'    '."\n"
                                    .'- enabled：开通状态'."\n"
                                    .'- disabled：禁用状态'."\n"
                                    .'- inDebt：停机24小时以内（含24小时）'."\n"
                                    .'- inDebt24h：停机24小时以上',
                                'type' => 'string',
                                'example' => 'enabled',
                            ],
                            'RequestId' => [
                                'description' => '请求的ID。'."\n",
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                            'Total' => [
                                'description' => '查询结果总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ProductInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'ProductInfo' => [
                                        'description' => '项目的概要信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'IndustryId' => [
                                                    'description' => '行业ID，返回值说明如下：  '."\n"
                                                        .'   '."\n"
                                                        .'- 0：社交'."\n"
                                                        .'- 1：摄影与摄像'."\n"
                                                        .'- 2：效率'."\n"
                                                        .'- 3：生活'."\n"
                                                        .'- 4：美食佳饮'."\n"
                                                        .'- 5：工具'."\n"
                                                        .'- 6：娱乐'."\n"
                                                        .'- 7：游戏'."\n"
                                                        .'- 8：儿童'."\n"
                                                        .'- 9：教育'."\n"
                                                        .'- 10：报刊杂志'."\n"
                                                        .'- 11：健康健美'."\n"
                                                        .'- 12：旅游'."\n"
                                                        .'- 13：音乐'."\n"
                                                        .'- 14：体育'."\n"
                                                        .'- 15：商务'."\n"
                                                        .'- 16：新闻'."\n"
                                                        .'- 17：财务'."\n"
                                                        .'- 18：参考'."\n"
                                                        .'- 19：导航'."\n"
                                                        .'- 20：医疗'."\n"
                                                        .'- 21：图书'."\n"
                                                        .'- 22：天气'."\n"
                                                        .'- 23：智能物联网',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Platforms' => [
                                                    'description' => '项目下属应用的平台，包含Android和iOS两种类型。',
                                                    'type' => 'string',
                                                    'example' => 'iOS',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '项目的创建时间。UTC格式表达。',
                                                    'type' => 'string',
                                                    'example' => '2020-12-16T06:25:52Z',
                                                ],
                                                'EncodedIcon' => [
                                                    'description' => 'icon图片的base64字符串。',
                                                    'type' => 'string',
                                                    'example' => '图片 base64',
                                                ],
                                                'ProductId' => [
                                                    'description' => '项目的ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1234',
                                                ],
                                                'Name' => [
                                                    'description' => '项目的名称。',
                                                    'type' => 'string',
                                                    'example' => '我的项目',
                                                ],
                                                'Readonly' => [
                                                    'description' => '标识项目是否为只读状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Description' => [
                                                    'description' => '简要描述项目信息。',
                                                    'type' => 'string',
                                                    'example' => 'xxxx',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UbsmsStatus\\": \\"enabled\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"Total\\": 10,\\n  \\"ProductInfos\\": {\\n    \\"ProductInfo\\": [\\n      {\\n        \\"IndustryId\\": 1,\\n        \\"Platforms\\": \\"iOS\\",\\n        \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n        \\"EncodedIcon\\": \\"图片 base64\\",\\n        \\"ProductId\\": 1234,\\n        \\"Name\\": \\"我的项目\\",\\n        \\"Readonly\\": false,\\n        \\"Description\\": \\"xxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListProductsResponse>\\n    <UbsmsStatus>enabled</UbsmsStatus>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n    <Total>10</Total>\\n    <ProductInfos>\\n        <IndustryId>1</IndustryId>\\n        <Platforms>iOS</Platforms>\\n        <CreateTime>2020-12-16T06:25:52Z</CreateTime>\\n        <EncodedIcon>图片 base64</EncodedIcon>\\n        <ProductId>1234</ProductId>\\n        <Name>我的项目</Name>\\n        <Readonly>false</Readonly>\\n        <Description>xxxx</Description>\\n    </ProductInfos>\\n</ListProductsResponse>","errorExample":""}]',
            'title' => '获取产品列表',
            'summary' => '调用ListProducts查询工作空间列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryProductInfo' => [
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
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '查询请求的ID。'."\n",
                                'type' => 'string',
                                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
                            ],
                            'ProductInfo' => [
                                'description' => '项目的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EncodedIcon' => [
                                        'description' => 'icon图片的base64字符串。',
                                        'type' => 'string',
                                        'example' => 'icon图片base64字符串',
                                    ],
                                    'IndustryId' => [
                                        'description' => '  * 0. 社交'."\n"
                                            .'     * 1. 摄影与摄像'."\n"
                                            .'     * 2. 效率'."\n"
                                            .'     * 3. 生活'."\n"
                                            .'     * 4. 美食佳饮'."\n"
                                            .'     * 5. 工具'."\n"
                                            .'     * 6. 娱乐'."\n"
                                            .'     * 7. 游戏'."\n"
                                            .'     * 8. 儿童'."\n"
                                            .'     * 9. 教育'."\n"
                                            .'     * 10. 报刊杂志'."\n"
                                            .'     * 11. 健康健美'."\n"
                                            .'     * 12. 旅游'."\n"
                                            .'     * 13. 音乐'."\n"
                                            .'     * 14. 体育'."\n"
                                            .'     * 15. 商务'."\n"
                                            .'     * 16. 新闻'."\n"
                                            .'     * 17. 财务'."\n"
                                            .'     * 18. 参考'."\n"
                                            .'     * 19. 导航'."\n"
                                            .'     * 20. 医疗'."\n"
                                            .'     * 21. 图书'."\n"
                                            .'     * 22. 天气'."\n"
                                            .'     * 23. 智能物联网 ',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Name' => [
                                        'description' => '项目的名称。',
                                        'type' => 'string',
                                        'example' => '我的项目',
                                    ],
                                    'Readonly' => [
                                        'description' => '标识项目是否只读。'."\n"
                                            ."\n"
                                            .'> 该字段用于特定场景，如无需要可忽略。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'IconName' => [
                                        'description' => 'icon图片的名称。',
                                        'type' => 'string',
                                        'example' => 'icon图片名称',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"ProductInfo\\": {\\n    \\"EncodedIcon\\": \\"icon图片base64字符串\\",\\n    \\"IndustryId\\": 1,\\n    \\"Name\\": \\"我的项目\\",\\n    \\"Readonly\\": false,\\n    \\"IconName\\": \\"icon图片名称\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryProductInfoResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n    <ProductInfo>\\n        <EncodedIcon>icon图片base64字符串</EncodedIcon>\\n        <IndustryId>1</IndustryId>\\n        <Name>我的项目</Name>\\n        <Readonly>false</Readonly>\\n        <IconName>icon图片名称</IconName>\\n    </ProductInfo>\\n</QueryProductInfoResponse>","errorExample":""}]',
            'title' => '查询工作空间详细信息',
            'summary' => '查询工作空间的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'mhub.cn-shanghai.aliyuncs.com',
        ],
    ],
];
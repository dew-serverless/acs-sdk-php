<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'nlp-automl',
        'version' => '2019-07-01',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AddMTInterveneWord',
                'GetPredictDoc',
                'PredictMTModelByDoc',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddMTInterveneWord' => [
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
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SourceText',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原文',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'TargetText',
                    'in' => 'query',
                    'schema' => [
                        'description' => '译文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PackageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '词包id',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                        'default' => 'mt_automl',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码：200：表示成功。'."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。错误码对应的错误信息。',
                                'type' => 'string',
                                'example' => 'parameterError',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '46E6B40D-2B6C-571B-AC41-86207DE288A5',
                            ],
                            'WordId' => [
                                'description' => '新增成功的词id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"parameterError\\",\\n  \\"RequestId\\": \\"46E6B40D-2B6C-571B-AC41-86207DE288A5\\",\\n  \\"WordId\\": 1\\n}","type":"json"}]',
            'title' => '增加干预数据',
            'summary' => '把待干预的原文和译文添加到ProjectId和PackageId对应的dataSet上。',
            'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
        ],
        'GetPredictDoc' => [
            'methods' => [
                'head',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DocId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code',
                        'type' => 'string',
                        'required' => false,
                        'example' => '空',
                        'default' => 'mt_automl',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '0:初始化 1:处理中 2:处理成功 3:处理失败',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                            'ResultContent' => [
                                'description' => '预测结果，文件流形式',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'XLIFFInfo' => [
                                'description' => 'xliff信息，文件流形式',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": 2,\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"ResultContent\\": \\"xxx\\",\\n  \\"XLIFFInfo\\": \\"xxx\\"\\n}","type":"json"}]',
            'title' => '获取文档预测结果',
            'summary' => '根据调用PredictMTModelByDoc返回的docId，调用该接口，返回预测后的结果。',
            'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
        ],
        'PredictMTModelByDoc' => [
            'methods' => [
                'head',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件数据内容，文件内容需进过base64编码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[base64 encode content]',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'docx',
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型id',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'NeedXLIFF',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要xliff信息',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ModelVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DocId' => [
                                'description' => '文档id',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DocId\\": \\"1\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\"\\n}","type":"json"}]',
            'title' => '提交文档预测任务',
            'summary' => '上传文档内容，指定模型进行预测。',
            'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'nlp-automl.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
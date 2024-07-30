<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'alimt',
        'version' => '2018-10-12',
    ],
    'directories' => [
        [
            'id' => 87656,
            'title' => '文本翻译',
            'type' => 'directory',
            'children' => [
                'TranslateGeneral',
                'Translate',
                'TranslateECommerce',
                'GetBatchTranslate',
                'CreateAsyncTranslate',
                'GetAsyncTranslate',
                'GetDetectLanguage',
            ],
        ],
        [
            'id' => 87669,
            'title' => '多模态翻译',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 184530,
                    'title' => '图片翻译',
                    'type' => 'directory',
                    'children' => [
                        'TranslateImage',
                        'TranslateImageBatch',
                        'GetTranslateImageBatchResult',
                    ],
                ],
                [
                    'id' => 184531,
                    'title' => '文档翻译',
                    'type' => 'directory',
                    'children' => [
                        'CreateDocTranslateTask',
                        'GetDocTranslateTask',
                    ],
                ],
                'TranslateCertificate',
            ],
        ],
        [
            'id' => 87651,
            'title' => '跨境电商语言工具',
            'type' => 'directory',
            'children' => [
                'GetImageTranslate',
                'CreateImageTranslateTask',
                'GetImageTranslateTask',
                'GetImageDiagnose',
                'GetTitleDiagnose',
                'GetTitleGenerate',
                'GetTitleIntelligence',
            ],
        ],
        [
            'id' => 87654,
            'title' => '管理',
            'type' => 'directory',
            'children' => [
                'OpenAlimtService',
                'GetTranslateReport',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'TranslateGeneral' => [
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
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FormatType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译文本的格式，html（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、text（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '译文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要翻译的内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通用版本默认是：general',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'general',
                        'default' => 'general',
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'context信息',
                        'description' => '上下文信息，可选填',
                        'type' => 'string',
                        'required' => false,
                        'example' => '早上我在家里吃了面包',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                            'Data' => [
                                'description' => '翻译结果',
                                'type' => 'object',
                                'properties' => [
                                    'Translated' => [
                                        'description' => '翻译后的结果',
                                        'type' => 'string',
                                        'example' => 'Hello',
                                    ],
                                    'WordCount' => [
                                        'description' => '总单词数',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'DetectedLanguage' => [
                                        'description' => '源语言传入auto时，语种识别后的源语言代码',
                                        'type' => 'string',
                                        'example' => 'zh',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => '10001',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10002',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10003',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10004',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10005',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10006',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10007',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10008',
                        'errorMessage' => 'The specified string is too long.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"Hello\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateGeneralResponse>\\n    <RequestId>14E447CA-B93B-4526-ACD7-42AE13CC2AF6</RequestId>\\n    <Data>\\n        <Translated>Hello</Translated>\\n    </Data>\\n    <Code>200</Code>\\n</TranslateGeneralResponse>","errorExample":""}]',
            'title' => '机器翻译通用版调用',
            'summary' => '通用翻译接口调用说明。',
            'description' => '注意事项'."\n"
                .'1、QPS限制50，如有扩展需求，请与我们联系。钉钉群号：23369411'."\n"
                .'<props="intl">2、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格</ph></props>'."\n"
                .'<props="china">2、字符长度上限是5000字符，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</ph></props>'."\n"
                .'<props="china">3、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格</ph></props>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '<props="china">公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)</ph></props>',
            'extraInfo' => ' ',
        ],
        'Translate' => [
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
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FormatType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '译文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待翻译内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)，金融（finance）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'title',
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'query',
                    'schema' => [
                        'title' => '新增context',
                        'description' => '上下文信息，可选填',
                        'type' => 'string',
                        'required' => false,
                        'example' => '早上我在家里吃了面包',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Translated' => [
                                        'description' => '翻译结果',
                                        'type' => 'string',
                                        'example' => 'Hello',
                                    ],
                                    'WordCount' => [
                                        'description' => '总单词数',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'DetectedLanguage' => [
                                        'description' => '源语言传入auto时，语种识别后的源语言代码',
                                        'type' => 'string',
                                        'example' => 'zh',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => '10001',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10002',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10003',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10004',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10005',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10006',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10007',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10008',
                        'errorMessage' => 'The specified string is too long.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"Hello\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>success</Message>\\n<RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n<Data>\\n    <Translated>Hello</Translated>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '机器翻译专业版调用',
            'summary' => '调用机器翻译专业版获取翻译结果。',
            'description' => '注意事项'."\n"
                .'1、QPS限制50，如有扩展需求，请与我们联系。钉钉群号：23369411'."\n"
                .'<props="intl">2、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格</ph></props>'."\n"
                .'<props="china">2、字符长度上限是5000字符，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</ph></props>'."\n"
                .'<props="china">3、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格</ph></props>',
            'requestParamsDescription' => '###  场景说明'."\n"
                .'我们在针对不同场景，都有不同的引擎，每个引擎都是特别优化过的，可以通过scene参数控制（场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)） ，金融（finance）'."\n"
                ."\n"
                .'商品标题：运用阿里电商标题数据，单独训练出来的，翻译标题特别好'."\n"
                ."\n"
                .'商品详描：运用阿里商品详描数据，单独训练出来，专门翻译商品详描比较好'."\n"
                ."\n"
                .'商品沟通：在电商买卖家沟通场景下，翻译效果会很好'."\n"
                ."\n"
                .'医疗：是针对医疗文献、术语、药品单独训练出来的引擎，在这个场景下翻译效果会很好'."\n"
                ."\n"
                .'社交：面向口语化的翻译，在这个场景下翻译结果会比较好'."\n"
                ."\n"
                .'金融：面向金融领域的翻译',
            'responseParamsDescription' => ' <props="china">公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)</ph></props>',
            'extraInfo' => ' ',
        ],
        'TranslateECommerce' => [
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
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => true,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FormatType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'html' => 'html',
                            'text' => 'text',
                        ],
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待翻译内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Hello',
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)，金融（finance）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'medical' => 'medical',
                            'social' => 'social',
                            'description' => 'description',
                            'communication' => 'communication',
                            'title' => 'title',
                            'finance' => 'finance',
                        ],
                        'example' => 'social',
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'context信息',
                        'description' => 'context信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'context信息',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，200 表示正常'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求错误信息，如果正确则空',
                                'type' => 'string',
                                'example' => 'An error occurred while translating.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一串，方便后期排查定位问题',
                                'type' => 'string',
                                'example' => 'CC93BB5C-EAB5-579B-AA44-F61528F48FF8',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Translated' => [
                                        'description' => '翻译结果',
                                        'type' => 'string',
                                        'example' => '你好',
                                    ],
                                    'WordCount' => [
                                        'description' => '原文的字符数',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'DetectedLanguage' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => '10001',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10002',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10003',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10004',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10005',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10006',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10007',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10008',
                        'errorMessage' => 'The specified string is too long.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'alimt::2018-10-12::Translate',
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"An error occurred while translating.\\",\\n  \\"RequestId\\": \\"CC93BB5C-EAB5-579B-AA44-F61528F48FF8\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"你好\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '机器翻译电商版调用',
            'summary' => '调用机器翻译专业版获取翻译结果。',
            'description' => '1、字符长度限制5000，调用接口QPS限制50；如有扩展需求，请与我们联系钉钉群号：23369411'."\n"
                ."\n"
                .'2、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格',
        ],
        'GetBatchTranslate' => [
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
                    'name' => 'FormatType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译文本的格式，html（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、text（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'text	',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '译文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 专业版本支持的场景：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social）'."\n"
                            ."\n"
                            .'- 通用版本支持的场景：general',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'general',
                    ],
                ],
                [
                    'name' => 'ApiType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 版本类型，必须选择一个版本'."\n"
                            ."\n"
                            .'- 通用版本：translate_standard'."\n"
                            ."\n"
                            .'- 专业版本：translate_ecommerce',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'translate_standard',
                    ],
                ],
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'json 数据格式'."\n"
                            ."\n"
                            .'key：唯一的标记id，用于翻译结果拿到对应的id，对应上原文'."\n"
                            ."\n"
                            .'value：待翻译的内容'."\n"
                            ."\n"
                            .'具体格式如下：'."\n"
                            .'`'."\n"
                            .'{'."\n"
                            .'  "11": "hello boy",'."\n"
                            .'  "12": "go home",'."\n"
                            .'  "13": "we can"'."\n"
                            .'}'."\n"
                            .'`'."\n"
                            ."\n"
                            .'> 待翻译的条数不能超过50'."\n"
                            .'> 单条翻译字符数不能超过1000字符'."\n"
                            .'> 总字符数不能超过8000字符'."\n"
                            .'>key不会计入翻译的字符'."\n"
                            .'>待翻译的内容中，标点、空格、html标签均会计入字符',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"11":"hello boy","12":"go home","13":"we can"}',
                        'isFileTransferUrl' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一id，用于后续排查问题使用',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                            'TranslatedList' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果，json格式'."\n"
                                        ."\n"
                                        .'code：单条翻译的状态码'."\n"
                                        ."\n"
                                        .'wordCount：原文的字符数'."\n"
                                        ."\n"
                                        .'detectedLanguage：源语言传入auto时，语种识别后的源语言代码'."\n"
                                        ."\n"
                                        .'index：入参时候的key，唯一id，用于对应到原文'."\n"
                                        ."\n"
                                        .'translated：翻译结果',
                                    'type' => 'object',
                                    'example' => '['."\n"
                                        .'      {'."\n"
                                        .'            "code": "200",'."\n"
                                        .'            "wordCount": "9",'."\n"
                                        .'            "detectedLanguage": "en"'."\n"
                                        .'            "index": "11",'."\n"
                                        .'            "translated": "你好男孩"'."\n"
                                        .'      },'."\n"
                                        .'      {'."\n"
                                        .'            "code": "200",'."\n"
                                        .'            "wordCount": "7",'."\n"
                                        .'            "detectedLanguage": "en"'."\n"
                                        .'            "index": "12",'."\n"
                                        .'            "translated": "回家"'."\n"
                                        .'      },'."\n"
                                        .'      {'."\n"
                                        .'            "code": "200",'."\n"
                                        .'            "wordCount": "6",'."\n"
                                        .'            "detectedLanguage": "en"'."\n"
                                        .'            "index": "13",'."\n"
                                        .'            "translated": "我们可以"'."\n"
                                        .'      }'."\n"
                                        .']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubNotPermission',
                        'errorMessage' => 'The sub account is not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'System.UnknownError',
                        'errorMessage' => 'An unknown system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"TranslatedList\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Message>success</Message>\\n<RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n<TranslatedList>[{\\"code\\":\\"200\\",\\"wordCount\\":\\"9\\",\\"index\\":\\"11\\",\\"translated\\":\\"你好男孩\\"},{\\"code\\":\\"200\\",\\"wordCount\\":\\"7\\",\\"index\\":\\"12\\",\\"translated\\":\\"回家\\"},{\\"code\\":\\"200\\",\\"wordCount\\":\\"6\\",\\"index\\":\\"13\\",\\"translated\\":\\"我们可以\\"}]</TranslatedList>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '机器批量翻译调用指南',
            'summary' => '机器批量翻译，支持多段文本进行翻译。',
            'description' => '1、调用接口QPS限制50，如有扩展需求，请与我们联系钉钉群号：23369411'."\n"
                .'<props="china">2、批量翻译单条字符长度上限是1000字符，一次最多可翻译50条，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</props>'."\n"
                .'<props="china">3、请确保在使用该接口前，已充分了解通用版和专业版翻译产品的收费方式和价格</props>'."\n"
                .'<props="china">4、批量翻译接口参考阿里云OpenAPI开发者门户[调试](https://next.api.aliyun.com/api/alimt/2018-10-12/GetBatchTranslate)调用</props>'."\n"
                .'<props="intl">2、批量翻译单条字符长度上限是1000字符，一次最多可翻译50条，请确保在使用该接口前，已充分了解通用版和专业版翻译产品的收费方式和价格</props>'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAsyncTranslate' => [
            'summary' => '机器异步翻译创建任务接口，支持100万以下字符翻译。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标语言，语言code参考',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要翻译的内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Opinion: We have finally gotten some relief at the pump. But it may not last long',
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '场景，支持：通用（general）、商品标题（title）、商品详情（description）、买卖家沟通（message）、医疗（medical）、社交（social）、科技（tech）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'general',
                    ],
                ],
                [
                    'name' => 'FormatType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'ApiType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 版本类型，必须选择一个版本'."\n"
                            ."\n"
                            .'- 通用版本：translate_standard'."\n"
                            ."\n"
                            .'- 专业版本：translate_ecommerce',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'translate_standard',
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
                                'description' => '请求的唯一id，用于后续排查问题使用',
                                'type' => 'string',
                                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'JobId' => [
                                        'description' => '异步任务ID。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => '98bbb007-71bb-448b-bab0-2695ce8f8599',
                                    ],
                                    'Status' => [
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'ready',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => '10001',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                103 => [
                    [
                        'errorCode' => '10003',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10004',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10005',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10006',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10007',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10008',
                        'errorMessage' => 'The specified string is too long.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => 'You have not activated this service.',
                    ],
                    [
                        'errorCode' => '10013',
                        'errorMessage' => 'You have not activated the account service or the account service has overdue bills.',
                    ],
                    [
                        'errorCode' => '10021',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => '10026',
                        'errorMessage' => 'Failed to translate the certificate. Please check the parameters.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => 'The RAM user is not authorized to perform this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10025',
                        'errorMessage' => 'The specified task does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => '10002',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => '10011',
                        'errorMessage' => 'An error occurred while invoking the RAM user service.',
                    ],
                    [
                        'errorCode' => '10012',
                        'errorMessage' => 'An error occurred while calling the translation service.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"JobId\\": \\"98bbb007-71bb-448b-bab0-2695ce8f8599\\",\\n    \\"Status\\": \\"ready\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建文本异步翻译任务',
            'description' => '1、机器异步翻译字符长度上限是100万字符  2、文本异步翻译创建接口参考阿里云OpenAPI开发者门户调试调用',
            'responseParamsDescription' => '示例'."\n"
                .'正常返回示例'."\n"
                ."\n"
                .'JSON格式'."\n"
                ."\n"
                .'{'."\n"
                .'  "RequestId": "3AD51F66-4829-1E47-93F7-03BE3C0428F3",'."\n"
                .' "Data": {'."\n"
                .'    "Status": "ready",'."\n"
                .'    "JobId": "2ff1e8b1-3842-4f1a-9bba-b8eea6b9720b"'."\n"
                .'  },'."\n"
                .'  "Code": "200"'."\n"
                .'}',
        ],
        'GetAsyncTranslate' => [
            'summary' => '获取文本异步翻译任务内容。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步任务ID。您调用CreateAsyncTranslate创建异步任务返回的JobId',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '77056ab7-7be1-4c2a-91a1-f20f63894048',
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
                                'description' => '请求的唯一id，用于后续排查问题使用',
                                'type' => 'string',
                                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'Data' => [
                                'description' => '数据内容',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'example' => 'ready',
                                    ],
                                    'TranslatedText' => [
                                        'description' => '翻译内容',
                                        'type' => 'string',
                                        'example' => 'hello',
                                    ],
                                    'WordCount' => [
                                        'description' => '原文的字符数',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'DetectedLanguage' => [
                                        'description' => '源语言传入auto时，语种识别后的源语言代码',
                                        'type' => 'string',
                                        'example' => 'zh',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                109 => [
                    [
                        'errorCode' => 'System.SubNotPermission',
                        'errorMessage' => 'The sub account is not authorized to perform the operation.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'Parameter.SourceLangError',
                        'errorMessage' => 'Source languages are not supported.',
                    ],
                    [
                        'errorCode' => 'Parameter.TargetLangError',
                        'errorMessage' => 'Target languages are not supported.',
                    ],
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"ready\\",\\n    \\"TranslatedText\\": \\"hello\\",\\n    \\"WordCount\\": \\"2\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取文本异步翻译任务',
            'description' => '通过jobID获取对应的异步任务翻译内容',
        ],
        'GetDetectLanguage' => [
            'summary' => '语种识别API说明文档。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SourceText',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待识别的语种',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '你好',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DetectedLanguage' => [
                                'description' => '识别成功的语种',
                                'type' => 'string',
                                'example' => 'zh',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0C5EC1EC-1A06-4D60-97E6-4D41350945E4',
                            ],
                            'LanguageProbabilities' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => '10001',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10002',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10003',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10004',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10005',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10006',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10007',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10008',
                        'errorMessage' => 'The specified string is too long.',
                    ],
                ],
                [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'Internal.Error',
                        'errorMessage' => 'The internal service connection timeout, please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DetectedLanguage\\": \\"zh\\",\\n  \\"RequestId\\": \\"0C5EC1EC-1A06-4D60-97E6-4D41350945E4\\",\\n  \\"LanguageProbabilities\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDetectLanguageResponse>\\n    <RequestId>0C5EC1EC-1A06-4D60-97E6-4D41350945E4</RequestId>\\n    <DetectedLanguage>zh</DetectedLanguage>\\n</GetDetectLanguageResponse>","errorExample":""}]',
            'title' => '语种识别',
            'description' => '1、字符长度限制5000，调用接口QPS限制50；如有扩展需求，请与我们联系，钉钉群号：23369411'."\n"
                ."\n"
                .'2、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)',
            'extraInfo' => ' ',
        ],
        'TranslateImage' => [
            'summary' => '将图片上的文字从一种语言翻译成另一种语言，并输出一张尽可能忠于原图的新图片。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原图 URL，跟 Base64 不能同时为空，优先取 Base64。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://example.com/example.jpg',
                    ],
                ],
                [
                    'name' => 'ImageBase64',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原图 Base64，跟 URL 不能同时为空，优先取 Base64。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4...H/9k=',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '源语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)，必填（请忽略表格中“是否必填”中的“否”）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)，必填（请忽略表格中“是否必填”中的“否”）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Field',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译领域， 可选值如下。'."\n"
                            .'- `general`: 通用图片翻译'."\n"
                            .'- `e-commerce`: 电商领域图片翻译'."\n"
                            ."\n"
                            .'默认及未识别领域均按通用图片翻译处理。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'general',
                    ],
                ],
                [
                    'name' => 'Ext',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '扩展信息, JSON String 格式，里面可以包含的字段如下。'."\n"
                            .'- `needEditorData`: 取值为字符串 `true`/`false`，默认为`false`，是否需要在结果中返回图片翻译译后编辑器数据，仅用于[自行接入图片翻译译后编辑器](https://help.aliyun.com/document_detail/2507676.html)时，获取数据使用'."\n"
                            .'- `ignoreEntityRecognize`：取值为字符串 `true`/`false`，默认为 `false`，电商领域图片翻译会自动判断文字是否在图片中的商品主体上，如果在，则略过翻译；使用本字段来控制是否进行上述判断，本字段对通用图片翻译无效',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"needEditorData": "false", "ignoreEntityRecognize": "true"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求标识',
                                'type' => 'string',
                                'example' => 'D774D33D-F1CB-5A2C-A787-E0A2179239CE',
                            ],
                            'Code' => [
                                'description' => '请求结果状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'Error Message',
                            ],
                            'Data' => [
                                'description' => '图片翻译结果结构体',
                                'type' => 'object',
                                'properties' => [
                                    'InPaintingUrl' => [
                                        'description' => '图片译后编辑器背景图',
                                        'type' => 'string',
                                        'example' => 'https://example.com/example.jpg',
                                    ],
                                    'TemplateJson' => [
                                        'description' => '图片译后编辑器模版数据',
                                        'type' => 'string',
                                        'example' => 'Editor Template Json String',
                                    ],
                                    'FinalImageUrl' => [
                                        'description' => '最终翻译结果图片 URL',
                                        'type' => 'string',
                                        'example' => 'https://example.com/example.jpg',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Parameter.SourceLangError',
                        'errorMessage' => 'Source languages are not supported.',
                    ],
                    [
                        'errorCode' => 'Parameter.TargetLangError',
                        'errorMessage' => 'Target languages are not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                    [
                        'errorCode' => 'Parameter.ImageUrlError',
                        'errorMessage' => 'Failed to obtain the image from the URL.',
                    ],
                    [
                        'errorCode' => 'Parameter.ImageSizeError',
                        'errorMessage' => 'Image size should be within 15px to 8192px.',
                    ],
                    [
                        'errorCode' => 'Parameter.ImageFormatError',
                        'errorMessage' => 'The image format is not supported.',
                    ],
                    [
                        'errorCode' => 'Parameter.ImageFileSizeError',
                        'errorMessage' => 'The image file size should be within 10 MB.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'ImageTranslate.TranslationError',
                        'errorMessage' => 'Image translation error.',
                    ],
                    [
                        'errorCode' => 'ImageTranslate.FusionError',
                        'errorMessage' => 'Image fusion error.',
                    ],
                    [
                        'errorCode' => 'ImageTranslate.EraseError',
                        'errorMessage' => 'Image erasing error.',
                    ],
                    [
                        'errorCode' => 'ImageTranslate.TextTranslationError',
                        'errorMessage' => 'Text translation error.',
                    ],
                    [
                        'errorCode' => 'ImageTranslate.TextToParagraphError',
                        'errorMessage' => 'Text to paragraph error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D774D33D-F1CB-5A2C-A787-E0A2179239CE\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Error Message\\",\\n  \\"Data\\": {\\n    \\"InPaintingUrl\\": \\"https://example.com/example.jpg\\",\\n    \\"TemplateJson\\": \\"Editor Template Json String\\",\\n    \\"FinalImageUrl\\": \\"https://example.com/example.jpg\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateImageResponse>\\n    <code>200</code>\\n    <data>\\n        <finalImageUrl>https://example.com/example.jpg</finalImageUrl>\\n    </data>\\n    <requestId>D774D33D-F1CB-5A2C-A787-E0A2179239CE</requestId>\\n</TranslateImageResponse>","errorExample":""}]',
            'title' => '图片翻译',
            'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。'."\n"
                ."\n"
                .'该接口适用于**通用图片翻译**和**电商图片翻译**。'."\n"
                .'如需调用证件翻译，请参考[证件翻译调用指南](https://help.aliyun.com/document_detail/2505939.html)。'."\n"
                ."\n"
                .'**图片限制**'."\n"
                ."\n"
                .'- 文件大小限制：10M'."\n"
                .'- 像素限制：长宽比 < 10：1'."\n"
                .'- 支持的格式：jpg, jpeg, png, bmp, gif（仅翻译第一帧）, webp'."\n"
                ."\n"
                .'> 仅支持通过POST方式调用',
        ],
        'TranslateImageBatch' => [
            'summary' => '异步将一批图片上的文字从一种语言翻译成另一种语言，并分别输出新的图片。',
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
                    'name' => 'ImageUrls',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原图 URL，多张图片使用半角逗号进行分割；单次请求 URL 总数不能超过 20，且相同的 URL 只会被处理一次',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://example.com/1.jpg,https://example.com/2.jpg,https://example.com/3.jpg',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '源语种，支持的语种及对应的代码请参考[语言code](https://help.aliyun.com/document_detail/163584.html)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标语种，支持的语种及对应的代码请参考[语言code](https://help.aliyun.com/document_detail/163584.html)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Ext',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '扩展信息, JSON String 格式，里面可以包含的字段如下。'."\n"
                            .'- `needEditorData`：取值为字符串 `true`/`false`，默认为`false`，是否需要在结果中返回图片翻译译后编辑器数据，仅用于[自行接入图片翻译译后编辑器](https://help.aliyun.com/document_detail/2507676.html)时，获取数据使用'."\n"
                            .'- `ignoreEntityRecognize`：取值为字符串 `true`/`false`，默认为 `false`，电商领域图片翻译会自动判断文字是否在图片中的商品主体上，如果在，则略过翻译；使用本字段来控制是否进行上述判断，本字段对通用图片翻译无效',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"needEditorData": "false", "ignoreEntityRecognize": "true"}',
                    ],
                ],
                [
                    'name' => 'CustomTaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义任务 ID，用于防止短时间误操作重复请求；3 分钟内，相同自定义任务 ID 的请求只会被处理一次',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_awesome_task_1',
                    ],
                ],
                [
                    'name' => 'Field',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译领域， 可选值如下。'."\n"
                            .'- `general`：通用图片翻译'."\n"
                            .'- `e-commerce`：电商领域图片翻译'."\n"
                            ."\n"
                            .'默认及未识别领域均按通用图片翻译处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'general',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求结果结构',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求标识',
                                'type' => 'string',
                                'example' => 'D774D33D-F1CB-5A2C-A787-E0A2179239CE',
                            ],
                            'Message' => [
                                'description' => '请求信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Code' => [
                                'description' => '请求结果状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '数据内容',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务 ID，用于后续获取翻译结果',
                                        'type' => 'string',
                                        'example' => 'EEA28E6D-4828-5031-BD8C-8FF1B3216842',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                110 => [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D774D33D-F1CB-5A2C-A787-E0A2179239CE\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"EEA28E6D-4828-5031-BD8C-8FF1B3216842\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateImageBatchResponse>\\n    <RequestId>D774D33D-F1CB-5A2C-A787-E0A2179239CE</RequestId>\\n    <Message>OK</Message>\\n    <Code>200</Code>\\n    <Data>\\n        <TaskId>EEA28E6D-4828-5031-BD8C-8FF1B3216842</TaskId>\\n    </Data>\\n</TranslateImageBatchResponse>","errorExample":""}]',
            'title' => '图片异步批量翻译',
            'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。'."\n"
                ."\n"
                .'该接口适用于**通用图片翻译**和**电商图片翻译**；如需调用证件翻译，请参考[证件翻译调用指南](https://help.aliyun.com/document_detail/163527.html)。'."\n"
                ."\n"
                .'**图片限制**'."\n"
                ."\n"
                .'- 文件大小限制：10MB'."\n"
                .'- 像素限制：长宽比 < 10:1'."\n"
                .'- 支持的格式：jpg, jpeg, png, bmp, gif（仅翻译第一帧）, webp',
        ],
        'GetTranslateImageBatchResult' => [
            'summary' => '获取图片异步批量翻译的结果。',
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
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '调用图片异步批量翻译接口获得的任务 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EEA28E6D-4828-5031-BD8C-8FF1B3216842',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求结果结构',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求结果状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求标识',
                                'type' => 'string',
                                'example' => 'DACD263C-C068-5116-83EC-117245AA35CF',
                            ],
                            'Data' => [
                                'description' => '数据内容',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '翻译结果，当改批量翻译任务没有执行完毕时，该字段为空数组',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '单张图片的翻译结果',
                                            'type' => 'object',
                                            'properties' => [
                                                'InPaintingUrl' => [
                                                    'description' => '单张图片的译后编辑器背景图',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/example.jpg',
                                                ],
                                                'FinalImageUrl' => [
                                                    'description' => '单张图片的翻译结果图 URL',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/example.jpg',
                                                ],
                                                'TemplateJson' => [
                                                    'description' => '单张图片的译后编辑器模版数据',
                                                    'type' => 'string',
                                                    'example' => '{"TemplateJson": "Editor Template Json String	"}',
                                                ],
                                                'SourceImageUrl' => [
                                                    'description' => '单张图片的原图 URL',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/example.jpg',
                                                ],
                                                'Code' => [
                                                    'description' => '单张图片的翻译状态码',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'Message' => [
                                                    'description' => '单张图片的翻译信息',
                                                    'type' => 'string',
                                                    'example' => 'OK',
                                                ],
                                                'Success' => [
                                                    'description' => '单张图片是否翻译成功标识',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Status' => [
                                        'description' => '标识当前任务的运行状态，可能的值及含义如下：'."\n"
                                            ."\n"
                                            .'- `created`：批量翻译任务创建成功，等待运行'."\n"
                                            .'- `running`：批量翻译任务正在运行中'."\n"
                                            .'- `finished`：批量翻译任务运行结束，图片均已翻译完毕，此时 `Result` 字段会包含每张图片的翻译结果'."\n"
                                            .'- `invalid`：传入的任务 ID 非法，或者任务的翻译结果已经过期被清理',
                                        'type' => 'string',
                                        'example' => 'finished',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                110 => [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"DACD263C-C068-5116-83EC-117245AA35CF\\",\\n  \\"Data\\": {\\n    \\"Result\\": [\\n      {\\n        \\"InPaintingUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"FinalImageUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"TemplateJson\\": \\"{\\\\\\"TemplateJson\\\\\\": \\\\\\"Editor Template Json String\\\\t\\\\\\"}\\",\\n        \\"SourceImageUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"Code\\": 200,\\n        \\"Message\\": \\"OK\\",\\n        \\"Success\\": true\\n      }\\n    ],\\n    \\"Status\\": \\"finished\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTranslateImageBatchResultResponse>\\n    <Code>200</Code>\\n    <Message>OK</Message>\\n    <RequestId>DACD263C-C068-5116-83EC-117245AA35CF</RequestId>\\n    <Data>\\n        <Result>\\n            <InPaintingUrl>https://example.com/example.jpg</InPaintingUrl>\\n            <FinalImageUrl>https://example.com/example.jpg</FinalImageUrl>\\n            <TemplateJson>{\\"TemplateJson\\": \\"Editor Template Json String\\t\\"}</TemplateJson>\\n            <SourceImageUrl>https://example.com/example.jpg</SourceImageUrl>\\n            <Code>200</Code>\\n            <Message>OK</Message>\\n            <Success>true</Success>\\n        </Result>\\n        <Status>finished</Status>\\n    </Data>\\n</GetTranslateImageBatchResultResponse>","errorExample":""}]',
            'title' => '图片异步批量翻译结果获取',
            'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。'."\n"
                ."\n"
                .'图片异步批量翻译的结果，翻译完毕后，会保存 1 小时，过期后会被清理，请及时获取结果。',
        ],
        'CreateDocTranslateTask' => [
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原文语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'FileUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文档URL。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://fileUrl',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '场景，支持：通用（general）、商品标题（title）、商品详情（description）、买卖家沟通（message）、医疗（medical）、社交（social）、科技（tech）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'general',
                        'default' => 'general',
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译结果回调URL，服务器会向回调地址发起post请求'."\n"
                            ."\n"
                            .'请求body'."\n"
                            ."\n"
                            .'raw json'."\n"
                            ."\n"
                            .'- 参数名  说明'."\n"
                            ."\n"
                            .'- task_id  任务id'."\n"
                            ."\n"
                            .'- status     状态'."\n"
                            ."\n"
                            .'- errCode   错误码'."\n"
                            ."\n"
                            .'- errMsg    错误信息'."\n"
                            ."\n"
                            .'- translateFileUrl   文件下载地址，过期时间1小时'."\n"
                            ."\n"
                            .'IP白名单'."\n"
                            ."\n"
                            .'59.82.61.52'."\n"
                            ."\n"
                            .'203.119.241.30'."\n"
                            ."\n"
                            .'203.119.241.98'."\n"
                            ."\n"
                            .'59.82.84.90'."\n"
                            ."\n"
                            .'203.119.241.56'."\n"
                            ."\n"
                            .'59.82.61.75'."\n"
                            ."\n"
                            .'回调服务示例：该服务用于回调方式获取翻译结果'."\n"
                            ."\n"
                            .'```'."\n"
                            .'import com.alibaba.fastjson.JSON;'."\n"
                            ."\n"
                            .'import com.alibaba.fastjson.JSONObject;'."\n"
                            ."\n"
                            .'import org.springframework.web.bind.annotation.RequestBody;'."\n"
                            ."\n"
                            .'import org.springframework.web.bind.annotation.RequestMapping;'."\n"
                            ."\n"
                            .'import org.springframework.web.bind.annotation.RequestMethod;'."\n"
                            ."\n"
                            .'import org.springframework.web.bind.annotation.RestController;'."\n"
                            ."\n"
                            .'@RestController'."\n"
                            ."\n"
                            .'public class CallbackController {'."\n"
                            ."\n"
                            .'    @RequestMapping(value = "callback", method = RequestMethod.POST)'."\n"
                            ."\n"
                            .'    public void callback(@RequestBody String body) {'."\n"
                            ."\n"
                            .'        try {'."\n"
                            ."\n"
                            .'            JSONObject result = JSON.parseObject(body);'."\n"
                            ."\n"
                            .'            if (200 != result.getInteger("errCode")) {'."\n"
                            ."\n"
                            .'                System.out.println("fail " + result.getString("erMsg"));'."\n"
                            ."\n"
                            .'                return;'."\n"
                            ."\n"
                            .'            }'."\n"
                            ."\n"
                            .'            System.out.println("task_id:" + result.getString("task_id"));'."\n"
                            ."\n"
                            .'            System.out.println("status:" + result.getString("status"));'."\n"
                            ."\n"
                            .'            System.out.println("translateFileUrl:" + result.getString("translateFileUrl"));'."\n"
                            ."\n"
                            .'        } catch (Exception e) {'."\n"
                            ."\n"
                            .'            e.printStackTrace();'."\n"
                            ."\n"
                            .'        }'."\n"
                            ."\n"
                            .'    }'."\n"
                            ."\n"
                            .'}'."\n"
                            .'```',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'http://callbackUrl',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '提供幂等能力，3分钟内，相同的值只会生效一次。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'token',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '任务状态。',
                                'type' => 'string',
                                'example' => 'ready',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D3920BC3-A395-4CAD-9E84-7C39EB07507B',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => '0586df512c8b4bb382d7d9a6a01b5854',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                109 => [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => '10021',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => '10022',
                        'errorMessage' => 'The parameter fileUrl is invalid.',
                    ],
                    [
                        'errorCode' => '10023',
                        'errorMessage' => 'The parameter fileUrl is not accessible.',
                    ],
                    [
                        'errorCode' => '10024',
                        'errorMessage' => 'The parameter callbackUrl is invalid.',
                    ],
                    [
                        'errorCode' => '10030',
                        'errorMessage' => 'The file size exceeds the limit.',
                    ],
                    [
                        'errorCode' => '10031',
                        'errorMessage' => 'The specified file type is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus',
                        'errorMessage' => 'The Machine Translation service has not been activated.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '10029',
                        'errorMessage' => 'The number of calls per day exceeds the limit.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'REQUESTS.OVER.LIMIT',
                        'errorMessage' => 'The request is too frequent, please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ready\\",\\n  \\"RequestId\\": \\"D3920BC3-A395-4CAD-9E84-7C39EB07507B\\",\\n  \\"TaskId\\": \\"0586df512c8b4bb382d7d9a6a01b5854\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDocTranslateTaskResponse>\\n    <requestId>D3920BC3-A395-4CAD-9E84-7C39EB07507B</requestId>\\n    <taskId>0586df512c8b4bb382d7d9a6a01b5854</taskId>\\n    <status>ready</status>\\n</CreateDocTranslateTaskResponse>","errorExample":""}]',
            'title' => '创建文档翻译任务',
            'summary' => '创建文档翻译任务。',
            'description' => '> 仅支持通过POST方式调用',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDocTranslateTask' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0586df512c8b4bb382d7d9a6a01b5854',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '任务状态。',
                                'type' => 'string',
                                'example' => 'translated',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '12952E92-FDF3-4D3C-88E3-242D72BA7150',
                            ],
                            'TranslateFileUrl' => [
                                'description' => '翻译后的文件下载地址。',
                                'type' => 'string',
                                'example' => 'http://translateFileUrl',
                            ],
                            'TranslateErrorCode' => [
                                'description' => '任务错误码。',
                                'type' => 'string',
                                'example' => 'Error',
                            ],
                            'PageCount' => [
                                'description' => '文档页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => '0586df512c8b4bb382d7d9a6a01b5854',
                            ],
                            'TranslateErrorMessage' => [
                                'description' => '任务错误信息。',
                                'type' => 'string',
                                'example' => 'Fail to get the page number of document.',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                109 => [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => '10021',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus',
                        'errorMessage' => 'The Machine Translation service has not been activated.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => '10025',
                        'errorMessage' => 'The specified task does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"translated\\",\\n  \\"RequestId\\": \\"12952E92-FDF3-4D3C-88E3-242D72BA7150\\",\\n  \\"TranslateFileUrl\\": \\"http://translateFileUrl\\",\\n  \\"TranslateErrorCode\\": \\"Error\\",\\n  \\"PageCount\\": 20,\\n  \\"TaskId\\": \\"0586df512c8b4bb382d7d9a6a01b5854\\",\\n  \\"TranslateErrorMessage\\": \\"Fail to get the page number of document.\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDocTranslateTaskResponse>\\n    <Status>translated</Status>\\n    <TranslateErrorMessage>Fail to get the page number of document.</TranslateErrorMessage>\\n    <TaskId>0586df512c8b4bb382d7d9a6a01b5854</TaskId>\\n    <RequestId>12952E92-FDF3-4D3C-88E3-242D72BA7150</RequestId>\\n    <PageCount>20</PageCount>\\n    <TranslateFileUrl>http://translateFileUrl</TranslateFileUrl>\\n    <TranslateErrorCode>Error</TranslateErrorCode>\\n</GetDocTranslateTaskResponse>","errorExample":""}]',
            'title' => '查询文档翻译任务',
            'summary' => '查询文档翻译任务。',
            'description' => '请确保在使用该接口前，已充分了解文档翻译产品的收费方式和价格'."\n"
                .'> 仅支持通过GET方式调用',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TranslateCertificate' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原图语言',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '译文语言',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'oss文件地址：一个可以不用赋权就能访问的HTTP地址',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://imageurl',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'CertificateType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译的证件类型：身份证(idcard)，驾驶证(driving_license)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'driving_license',
                    ],
                ],
                [
                    'name' => 'ResultType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '翻译结果类型：文本（text），图片（image），不传值默认：text',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '6640DE48-201C-4110-AE87-FB8FA34412B9',
                            ],
                            'Data' => [
                                'description' => '翻译结果',
                                'type' => 'object',
                                'properties' => [
                                    'TranslatedValues' => [
                                        'description' => '译文结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyTranslation' => [
                                                    'description' => 'key对应的译文',
                                                    'type' => 'string',
                                                    'example' => 'name',
                                                ],
                                                'Key' => [
                                                    'description' => '证件内容标题，如身份证中的姓名，性别',
                                                    'type' => 'string',
                                                    'example' => '姓名',
                                                ],
                                                'Value' => [
                                                    'description' => '原文',
                                                    'type' => 'string',
                                                    'example' => '庄严',
                                                ],
                                                'ValueTranslation' => [
                                                    'description' => '译文',
                                                    'type' => 'string',
                                                    'example' => 'Solemn',
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
                400 => [
                    [
                        'errorCode' => '10026',
                        'errorMessage' => 'Failed to translate the certificate. Please check the parameters.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
                        'errorMessage' => 'The service has not been activated.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6640DE48-201C-4110-AE87-FB8FA34412B9\\",\\n  \\"Data\\": {\\n    \\"TranslatedValues\\": [\\n      {\\n        \\"KeyTranslation\\": \\"name\\",\\n        \\"Key\\": \\"姓名\\",\\n        \\"Value\\": \\"庄严\\",\\n        \\"ValueTranslation\\": \\"Solemn\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateCertificateResponse>\\n    <RequestId>BA8DAAE0-1985-4B19-86BA-97C1753FCF3A</RequestId>\\n    <Data>\\n        <TranslatedValues>\\n            <ValueTranslation>Huang Jia</ValueTranslation>\\n            <KeyTranslation>name</KeyTranslation>\\n            <Value>黄佳</Value>\\n            <Key>姓名</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05</ValueTranslation>\\n            <KeyTranslation>effective start date</KeyTranslation>\\n            <Value>2019-07-05</Value>\\n            <Key>有效起始日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>331021190</ValueTranslation>\\n            <KeyTranslation>certificate number</KeyTranslation>\\n            <Value>331021190</Value>\\n            <Key>证号</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>1999-11-04</ValueTranslation>\\n            <KeyTranslation>date of birth</KeyTranslation>\\n            <Value>1999-11-04</Value>\\n            <Key>出生日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>No. 3 Damaiyu Street, Yuhuan county, Zhejiang province</ValueTranslation>\\n            <KeyTranslation>address</KeyTranslation>\\n            <Value>浙江省玉环县大麦屿街道3号</Value>\\n            <Key>住址</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Fujian Ningde, traffic police division, public security bureau</ValueTranslation>\\n            <KeyTranslation>license issuing unit</KeyTranslation>\\n            <Value>福建省宁德市公安局交通警察支队</Value>\\n            <Key>发证单位</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Chinese</ValueTranslation>\\n            <KeyTranslation>nationality</KeyTranslation>\\n            <Value>中国</Value>\\n            <Key>国籍</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05</ValueTranslation>\\n            <KeyTranslation>date of first issue</KeyTranslation>\\n            <Value>2019-07-05</Value>\\n            <Key>初次领证日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>C1</ValueTranslation>\\n            <KeyTranslation>class</KeyTranslation>\\n            <Value>C1</Value>\\n            <Key>准驾车型</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Women\'s</ValueTranslation>\\n            <KeyTranslation>sex</KeyTranslation>\\n            <Value>女</Value>\\n            <Key>性别</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05至2025-07-05</ValueTranslation>\\n            <KeyTranslation>validity period</KeyTranslation>\\n            <Value>2019-07-05至2025-07-05</Value>\\n            <Key>有效期限</Key>\\n        </TranslatedValues>\\n    </Data>\\n</TranslateCertificateResponse>","errorExample":""}]',
            'title' => '证件翻译',
            'summary' => '进行证件翻译。',
            'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。'."\n"
                ."\n"
                .'该接口适用于**证件翻译**。 如需调用通用图片翻译和电商图片翻译，请参考[图片翻译调用指南](https://help.aliyun.com/document_detail/2505940.html)。'."\n"
                ."\n\n"
                ."\n"
                .'**图片限制**'."\n"
                .'文件大小限制：4M'."\n"
                .'支持的格式：jpg, jpeg, png'."\n"
                ."\n"
                .'接口QPS限制：40'."\n"
                ."\n"
                .'> 仅支持通过POST方式调用',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetImageTranslate' => [
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
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要翻译的图片链接',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://xxxxxxx.oss-cn-shenzhen.aliyuncs.com/xxxxxx.jpg',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片中的文字语种，<props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>'."\n"
                            .'<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片中文字翻译后的语种，<props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>'."\n"
                            .'<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 以下JSON内容格式，不关注的都可以不用传递，都是可选参数'."\n"
                            ."\n"
                            .'- JSON 格式内容：'."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'  "have_ocr": "false",'."\n"
                            .'  "without_text":"true",'."\n"
                            .'  "have_psd": "false",'."\n"
                            .'  "ignore_entity": "false"'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            .'- have_ocr 通过true/false 控制是否返回ocr结果，true：需要，false：不需要'."\n"
                            .'- without_text 控制是否需要擦除图片中的文字，true：需要，false：不需要'."\n"
                            .'- have_psd 用于图片编辑器，psd数据渲染编辑器'."\n"
                            .'- ignore_entity 是否忽略实体识别，true：忽略实体识别，false：不忽略',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"have_ocr": "false", "without_text":"true", "have_psd": "false", "ignore_entity": "false"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，200 表示正常',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误的时候，返回的错误信息',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一串',
                                'type' => 'string',
                                'example' => 'A41F6E25-8520-4AF0-90EF-AF7E32840108',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '翻译后的图片链接',
                                        'type' => 'string',
                                        'example' => 'https://ae01.alicdn.com/kf/xxxxx.jpeg',
                                    ],
                                    'Orc' => [
                                        'description' => 'orc 识别后的内容',
                                        'type' => 'string',
                                        'example' => '{"text":"P翼-至草款","width":750,"wordNum":10}',
                                    ],
                                    'PictureEditor' => [
                                        'description' => '用于图片编辑器渲染的psd数据',
                                        'type' => 'string',
                                        'example' => '{"text":"P翼-至草款","width":750,"wordNum":10}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"A41F6E25-8520-4AF0-90EF-AF7E32840108\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"https://ae01.alicdn.com/kf/xxxxx.jpeg\\",\\n    \\"Orc\\": \\"{\\\\\\"text\\\\\\":\\\\\\"P翼-至草款\\\\\\",\\\\\\"width\\\\\\":750,\\\\\\"wordNum\\\\\\":10}\\",\\n    \\"PictureEditor\\": \\"{\\\\\\"text\\\\\\":\\\\\\"P翼-至草款\\\\\\",\\\\\\"width\\\\\\":750,\\\\\\"wordNum\\\\\\":10}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>ok</Message>\\n<RequestId>A41F6E25-8520-4AF0-90EF-AF7E32840108</RequestId>\\n<Data>\\n    <PictureEditor>{\\"text\\":\\"P翼-至草款\\",\\"width\\":750,\\"wordNum\\":10}</PictureEditor>\\n    <Orc>{\\"text\\":\\"P翼-至草款\\",\\"width\\":750,\\"wordNum\\":10}</Orc>\\n    <Url>https://ae01.alicdn.com/kf/xxxxx.jpeg</Url>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '商品图片智能翻译',
            'summary' => '包含文字识别、文本翻译、文字回填等能力。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。><notice>'."\n"
                .'替代接口为[图片翻译](https://help.aliyun.com/zh/machine-translation/developer-reference/api-alimt-2018-10-12-translateimage?spm=a2c4g.11186623.0.0.625a288aSx2On0)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateImageTranslateTask' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UrlList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片翻译链接，多张图片通过英文逗号分隔，图片数量不能超过20张',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://xxx,http://yyy',
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片原始语种',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TargetLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片翻译目标语种',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 以下JSON内容格式，不关注的都可以不用传递，都是可选参数'."\n"
                            .'- 样例JSON格式内容：'."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'  "have_ocr": "false",'."\n"
                            .'  "without_text": "false",'."\n"
                            .'  "have_psd": "true",'."\n"
                            .'  "ignore_entity": "false"'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            .'- `have_ocr`，控制是否返回 OCR 结果，true：需要，false：不需要'."\n"
                            .'- `without_text`，控制是否需要擦除图片中的文字，true：需要，false：不需要'."\n"
                            .'- `have_psd`，控制是否返回图片编辑器数据，渲染编辑器，true：需要，false：不需要'."\n"
                            .'- `ignore_entity`，是否忽略实体识别，true：忽略，false：不忽略',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"have_ocr":"false","without_text":"false","have_psd":"true","ignore_entity":"false"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '提供幂等能力，3分钟内，相同的值只会生效一次',
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
                            'Code' => [
                                'description' => '状态码，200 表示正常'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误的时候，返回的错误信息'."\n",
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一串'."\n",
                                'type' => 'string',
                                'example' => 'A41F6E25-8520-4AF0-90EF-AF7E32840108',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '异步图片翻译返回的任务ID，后面根据这个ID获取翻译结果',
                                        'type' => 'string',
                                        'example' => 'A41F6E25-8520-4AF0-90EF-111111',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                110 => [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"A41F6E25-8520-4AF0-90EF-AF7E32840108\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"A41F6E25-8520-4AF0-90EF-111111\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>ok</Message>\\n<RequestId>A41F6E25-8520-4AF0-90EF-AF7E32840108</RequestId>\\n<Data>\\n    <TaskId>A41F6E25-8520-4AF0-90EF-111111</TaskId>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '创建异步图片翻译调用指南',
            'summary' => '创建异步图片翻译，图片翻译包含文字识别、文本翻译、文字回填等能力。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetImageTranslateTask' => [
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
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步图片翻译任务Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，200 表示正常'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误的时候，返回的错误信息'."\n",
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一串'."\n",
                                'type' => 'string',
                                'example' => 'xxxxxxx',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'ImageData' => [
                                        'description' => '- 图片翻译结构化数据'."\n"
                                            ."\n"
                                            .'```'."\n"
                                            .'['."\n"
                                            .'  {'."\n"
                                            .'    "errorCode": "200",'."\n"
                                            .'    "sourceUrl": "https://img.alicdn.com/imgextra/i3/2838892713/O1CN01AJHAFq1Vub9eKog8t_!!2838892713.jpg",'."\n"
                                            .'    "success": true,'."\n"
                                            .'    "topRequestId": "of8hp0d9ne81",'."\n"
                                            .'    "url": "https://ae01.alicdn.com/kf/H86dc34f146e1488aa55a0435ebd1775cu.jpeg"'."\n"
                                            .'  },'."\n"
                                            .'  {'."\n"
                                            .'    "errorCode": "200",'."\n"
                                            .'    "sourceUrl": "https://img.alicdn.com/imgextra/i2/2838892713/O1CN01Ko5Mxu1Vub9Y85K6p_!!2838892713.jpg",'."\n"
                                            .'    "success": true,'."\n"
                                            .'    "topRequestId": "of8hp0d9ne81",'."\n"
                                            .'    "url": "https://ae01.alicdn.com/kf/H1cc74cbdfc554b278dfaa8b2ede33f48D.jpeg"'."\n"
                                            .'  }'."\n"
                                            .']'."\n"
                                            .'```'."\n"
                                            ."\n"
                                            .'- sourceURL 原始图片地址'."\n"
                                            .'- URL翻译后的图片地址',
                                        'type' => 'string',
                                        'example' => '[{xxxxxx}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                110 => [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"xxxxxxx\\",\\n  \\"Data\\": {\\n    \\"ImageData\\": \\"[{xxxxxx}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取异步图片翻译结果',
            'summary' => '通过任务ID获取异步图片翻译结果。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetImageDiagnose' => [
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
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片链接',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://xxxxx.oss-cn-shenzhen.aliyuncs.com/jd/41209/xxxxx.jpg',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 格式内容：{'."\n"
                            .'  "product_id": "1",'."\n"
                            .'  "platform": "ae"'."\n"
                            .'}'."\n"
                            .'- product_id  商品id'."\n"
                            .'- platform 商品所属平台，支持ae/icbu/lazada',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{   "product_id": "1",   "platform": "ae" }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，正常请求返回200',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误的时候返回错误信息',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一串',
                                'type' => 'string',
                                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
                            ],
                            'Data' => [
                                'description' => '返回的结果',
                                'type' => 'object',
                                'properties' => [
                                    'Language' => [
                                        'description' => '图片中的文字识别后的语种',
                                        'type' => 'string',
                                        'example' => 'zh',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"Language\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <Language>zh</Language>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '图片诊断',
            'summary' => '能够识别图片中的文字的语种。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTitleDiagnose' => [
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
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标题内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Amroe Japan Comic Theme Uzumaki Naruto Namikaze Minato 3D Visual Cartoon 7 Color USB Touch',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标题文字的语种，<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props><props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品标题所属平台，支持ae/icbu/lazada',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ae',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '类目id，如没有类目数据则传入0',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 可选字段'."\n"
                            ."\n"
                            .'- 格式内容：{'."\n"
                            .'  "product_id": "1",'."\n"
                            .'  "platform": "ae"'."\n"
                            .'}'."\n"
                            .'- product_id  商品id'."\n"
                            .'- platform 商品所属平台，支持ae/icbu/lazada',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{   "product_id": "1",   "platform": "ae" }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，正常请求返回200',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '状态信息',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
                            ],
                            'Data' => [
                                'description' => '返回具体内容',
                                'type' => 'object',
                                'properties' => [
                                    'DuplicateWords' => [
                                        'description' => '重复单词（包括单复数）',
                                        'type' => 'string',
                                        'example' => 'hi',
                                    ],
                                    'ContainCoreClasses' => [
                                        'description' => '是否包含类目主词',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'WordCount' => [
                                        'description' => '总单词数',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'LanguageQualityScore' => [
                                        'description' => '语言质量分',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'AllUppercaseWords' => [
                                        'description' => '全部大写的单词',
                                        'type' => 'string',
                                        'example' => 'Boy',
                                    ],
                                    'OverLengthLimit' => [
                                        'description' => '长度限制',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                    'DisableWords' => [
                                        'description' => '敏感词',
                                        'type' => 'string',
                                        'example' => 'baba',
                                    ],
                                    'NoFirstUppercaseList' => [
                                        'description' => '首字母未大写单词',
                                        'type' => 'string',
                                        'example' => 'no',
                                    ],
                                    'TotalScore' => [
                                        'description' => '总分数',
                                        'type' => 'string',
                                        'example' => '3',
                                    ],
                                    'WordSpelledCorrectError' => [
                                        'description' => '拼写错误单词',
                                        'type' => 'string',
                                        'example' => 'ahk',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"DuplicateWords\\": \\"hi\\",\\n    \\"ContainCoreClasses\\": \\"true\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"LanguageQualityScore\\": \\"2\\",\\n    \\"AllUppercaseWords\\": \\"Boy\\",\\n    \\"OverLengthLimit\\": \\"100\\",\\n    \\"DisableWords\\": \\"baba\\",\\n    \\"NoFirstUppercaseList\\": \\"no\\",\\n    \\"TotalScore\\": \\"3\\",\\n    \\"WordSpelledCorrectError\\": \\"ahk\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <NoFirstUppercaseList>no</NoFirstUppercaseList>\\n    <ContainCoreClasses>true</ContainCoreClasses>\\n    <DisableWords>baba</DisableWords>\\n    <WordCount>10</WordCount>\\n    <OverLengthLimit>100</OverLengthLimit>\\n    <TotalScore>3</TotalScore>\\n    <DuplicateWords>hi</DuplicateWords>\\n    <WordSpelledCorrectError>ahk</WordSpelledCorrectError>\\n    <AllUppercaseWords>Boy</AllUppercaseWords>\\n    <LanguageQualityScore>2</LanguageQualityScore>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '标题诊断调用指南',
            'summary' => '通过商品标题质量诊断服务，产出可视化的标题质量分，便于卖家对现有的商品标题质量有实际体感。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTitleGenerate' => [
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
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标题内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10pcs 80ml Kitchen Disposable',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标题语种，<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html)</props><props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品标题所属平台，支持ae/icbu',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ae',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '类目ID，如没有类目数据则传入0',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127896018',
                    ],
                ],
                [
                    'name' => 'HotWords',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热词',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None,Plastic',
                    ],
                ],
                [
                    'name' => 'Attributes',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品属性，请如示例传入JSON数据'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{2:"None",10:"Plastic"}',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- 格式内容：{'."\n"
                            .'  "product_id": "1",'."\n"
                            .'  "platform": "ae"'."\n"
                            .'}'."\n"
                            .'- product_id  商品id'."\n"
                            .'- platform 商品所属平台',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{   "product_id": "1",   "platform": "ae" }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，正常返回200',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误的时候，返回错误信息',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一串',
                                'type' => 'string',
                                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
                            ],
                            'Data' => [
                                'description' => '返回内容',
                                'type' => 'object',
                                'properties' => [
                                    'Titles' => [
                                        'description' => '优化后的标题内容',
                                        'type' => 'string',
                                        'example' => '10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"Titles\\": \\"10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <Titles>10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container</Titles>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '标题优化调用指南',
            'summary' => '基于电商大数据，自动优化商品标题。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTitleIntelligence' => [
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
                    'name' => 'Platform',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品所在平台 ae、icbu、lazada',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ae',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '扩展信息，json数据格式，可选字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"product_id":"1212"}',
                    ],
                ],
                [
                    'name' => 'CatLevelThreeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '三级类目Id，如没有类目数据则传入0',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '99999999999',
                        'minimum' => '0',
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'CatLevelTwoId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '二级类目Id，如没有类目数据则传入0',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '99999999999',
                        'minimum' => '0',
                        'example' => '222',
                    ],
                ],
                [
                    'name' => 'Keywords',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关键词，多个词英文逗号分隔比如：hello,apple',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'hello,apple',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码，200 表示正常',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '如果有错误，会输出错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一串，方便后期排查定位问题',
                                'type' => 'string',
                                'example' => 'D70487B4-8891-4D24-BB64-8788E53671FB',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Titles' => [
                                        'description' => '自动生成的标题信息',
                                        'type' => 'string',
                                        'example' => 'Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                101 => [
                    [
                        'errorCode' => 'System.RequestTimeOut',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.Error',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.UrlDecodingError',
                        'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.ParameterError',
                        'errorMessage' => 'Some required parameters are missing.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageNotSupported',
                        'errorMessage' => 'The specified language pair is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.LanguageDetectError',
                        'errorMessage' => 'An error occurred while detecting the language.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateError',
                        'errorMessage' => 'An error occurred while translating.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.StringTooLong',
                        'errorMessage' => 'The maximum length of the specified string is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.subNotPermission',
                        'errorMessage' => 'The sub-account is not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivated',
                        'errorMessage' => 'The account has not activated the service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.SubServiceFailed',
                        'errorMessage' => 'Sub-account service failed.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.TranslateServiceCallFailed',
                        'errorMessage' => 'Failed to call the translation service.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'System.AccountNotActivatedOrInArrears',
                        'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => 'System.unknownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D70487B4-8891-4D24-BB64-8788E53671FB\\",\\n  \\"Data\\": {\\n    \\"Titles\\": \\"Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D70487B4-8891-4D24-BB64-8788E53671FB</RequestId>\\n<Message>success</Message>\\n<Data>\\n    <Titles>Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower</Titles>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '标题智能生成调用指南',
            'summary' => '通过类目、平台、关键词，自动生成商品标题。',
            'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'OpenAlimtService' => [
            'summary' => '商品服务开通。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 机器翻译 alimt'."\n"
                            ."\n"
                            .'- 定制化翻译服务 type = automl'."\n"
                            ."\n"
                            .'- 证件翻译 type=ct'."\n"
                            ."\n"
                            .'- 文档翻译 type=dt'."\n"
                            ."\n"
                            .'- 语种识别type=id'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '123456',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxxx-xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ORDER.OPEND',
                        'errorMessage' => 'You have already open the service. Go to the console to start using it',
                    ],
                    [
                        'errorCode' => 'PRICEING.PLAN.RESULT.NOT.FOUND',
                        'errorMessage' => 'The order is not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"123456\\",\\n  \\"RequestId\\": \\"xxxx-xxxxx\\"\\n}","errorExample":""}]',
            'title' => '商品服务开通',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTranslateReport' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-03-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-03-01 23:59:59',
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API名称'."\n"
                            ."\n"
                            .'- 机器翻译通用版：translate_standard'."\n"
                            .'- 机器翻译专业版：translate_ecommerce'."\n"
                            .'- 语种识别：predict_detect'."\n"
                            .'- 通用图片翻译：it_general'."\n"
                            .'- 电商图片翻译：it_ecommerce'."\n"
                            .'- 文档翻译：dt_page'."\n"
                            .'- 身份证翻译：ct_idcard'."\n"
                            .'- 驾照翻译：ct_driving',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'translate_standard',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hour或者day',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回内容',
                                'type' => 'string',
                                'example' => '{"result":[{"time":"2021-10-21 00:00:00","total":100}]}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                109 => [
                    [
                        'errorCode' => '10009',
                        'errorMessage' => '子账号没有权限',
                    ],
                ],
                [
                    [
                        'errorCode' => '10010',
                        'errorMessage' => '账号没有开通服务',
                    ],
                ],
                [
                    [
                        'errorCode' => '10011',
                        'errorMessage' => '子账号服务失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10012',
                        'errorMessage' => '翻译服务调用失败',
                    ],
                ],
                [
                    [
                        'errorCode' => '10013',
                        'errorMessage' => '账号服务没有开通或者欠费',
                    ],
                ],
                199 => [
                    [
                        'errorCode' => '19999',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{\\\\\\"result\\\\\\":[{\\\\\\"time\\\\\\":\\\\\\"2021-10-21 00:00:00\\\\\\",\\\\\\"total\\\\\\":100}]}\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTranslateReportResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Data>{\\"result\\":[{\\"time\\":\\"2021-10-21 00:00:00\\",\\"total\\":100}]}</Data>\\n    <RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n</GetTranslateReportResponse>","errorExample":""}]',
            'title' => '获取调用接口报表',
            'summary' => '根据API名及开始结束时间获取API调用报表，并根据传入的group按照天或者小时聚合计算后返回。',
            'description' => '请确保在使用该接口前，已充分了解机器翻译产品的收费方式和[价格](https://help.aliyun.com/document_detail/457279.html)',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'mt.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'mt.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'mt.aliyuncs.com',
        ],
    ],
];
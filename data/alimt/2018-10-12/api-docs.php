<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'alimt',
    'version' => '2018-10-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 87656,
      'title' => '文本翻译',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TranslateGeneral',
        1 => 'Translate',
        2 => 'TranslateECommerce',
        3 => 'GetBatchTranslate',
        4 => 'CreateAsyncTranslate',
        5 => 'GetAsyncTranslate',
        6 => 'GetDetectLanguage',
      ),
    ),
    1 => 
    array (
      'id' => 87669,
      'title' => '多模态翻译',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 184530,
          'title' => '图片翻译',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'TranslateImage',
            1 => 'TranslateImageBatch',
            2 => 'GetTranslateImageBatchResult',
          ),
        ),
        1 => 
        array (
          'id' => 184531,
          'title' => '文档翻译',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateDocTranslateTask',
            1 => 'GetDocTranslateTask',
          ),
        ),
        2 => 'TranslateCertificate',
      ),
    ),
    2 => 
    array (
      'id' => 87651,
      'title' => '跨境电商语言工具',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetImageTranslate',
        1 => 'CreateImageTranslateTask',
        2 => 'GetImageTranslateTask',
        3 => 'GetImageDiagnose',
        4 => 'GetTitleDiagnose',
        5 => 'GetTitleGenerate',
        6 => 'GetTitleIntelligence',
      ),
    ),
    3 => 
    array (
      'id' => 87654,
      'title' => '管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenAlimtService',
        1 => 'GetTranslateReport',
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
    'TranslateGeneral' => 
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FormatType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译文本的格式，html（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、text（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'text',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '译文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要翻译的内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你好',
          ),
        ),
        4 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通用版本默认是：general',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'general',
            'default' => 'general',
          ),
        ),
        5 => 
        array (
          'name' => 'Context',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'context信息',
            'description' => '上下文信息，可选填',
            'type' => 'string',
            'required' => false,
            'example' => '早上我在家里吃了面包',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
              'Data' => 
              array (
                'description' => '翻译结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Translated' => 
                  array (
                    'description' => '翻译后的结果',
                    'type' => 'string',
                    'example' => 'Hello',
                  ),
                  'WordCount' => 
                  array (
                    'description' => '总单词数',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'DetectedLanguage' => 
                  array (
                    'description' => '源语言传入auto时，语种识别后的源语言代码',
                    'type' => 'string',
                    'example' => 'zh',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => '10004',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => '10006',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => '10007',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => '10008',
            'errorMessage' => 'The specified string is too long.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"Hello\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateGeneralResponse>\\n    <RequestId>14E447CA-B93B-4526-ACD7-42AE13CC2AF6</RequestId>\\n    <Data>\\n        <Translated>Hello</Translated>\\n    </Data>\\n    <Code>200</Code>\\n</TranslateGeneralResponse>","errorExample":""}]',
      'title' => '机器翻译通用版调用',
      'summary' => '通用翻译接口调用说明。',
      'description' => '注意事项
1、QPS限制50，如有扩展需求，请与我们联系。钉钉群号：23369411
<props="intl">2、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格</ph></props>
<props="china">2、字符长度上限是5000字符，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</ph></props>
<props="china">3、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格</ph></props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '<props="china">公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)</ph></props>',
      'extraInfo' => ' ',
    ),
    'Translate' => 
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FormatType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'text',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '译文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言，<props="china">[参考语言code](https://help.aliyun.com/document_detail/215387.html)</ph></props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/machine-translation/latest/machine-translation-language-code-list)</ph></props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待翻译内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你好',
          ),
        ),
        4 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)，金融（finance）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'title',
          ),
        ),
        5 => 
        array (
          'name' => 'Context',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '新增context',
            'description' => '上下文信息，可选填',
            'type' => 'string',
            'required' => false,
            'example' => '早上我在家里吃了面包',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Translated' => 
                  array (
                    'description' => '翻译结果',
                    'type' => 'string',
                    'example' => 'Hello',
                  ),
                  'WordCount' => 
                  array (
                    'description' => '总单词数',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'DetectedLanguage' => 
                  array (
                    'description' => '源语言传入auto时，语种识别后的源语言代码',
                    'type' => 'string',
                    'example' => 'zh',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => '10004',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => '10006',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => '10007',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => '10008',
            'errorMessage' => 'The specified string is too long.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"Hello\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>success</Message>\\n<RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n<Data>\\n    <Translated>Hello</Translated>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '机器翻译专业版调用',
      'summary' => '调用机器翻译专业版获取翻译结果。',
      'description' => '注意事项
1、QPS限制50，如有扩展需求，请与我们联系。钉钉群号：23369411
<props="intl">2、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格</ph></props>
<props="china">2、字符长度上限是5000字符，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</ph></props>
<props="china">3、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格</ph></props>',
      'requestParamsDescription' => '###  场景说明
我们在针对不同场景，都有不同的引擎，每个引擎都是特别优化过的，可以通过scene参数控制（场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)） ，金融（finance）

商品标题：运用阿里电商标题数据，单独训练出来的，翻译标题特别好

商品详描：运用阿里商品详描数据，单独训练出来，专门翻译商品详描比较好

商品沟通：在电商买卖家沟通场景下，翻译效果会很好

医疗：是针对医疗文献、术语、药品单独训练出来的引擎，在这个场景下翻译效果会很好

社交：面向口语化的翻译，在这个场景下翻译结果会比较好

金融：面向金融领域的翻译',
      'responseParamsDescription' => ' <props="china">公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)</ph></props>',
      'extraInfo' => ' ',
    ),
    'TranslateECommerce' => 
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FormatType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'html' => 'html',
              'text' => 'text',
            ),
            'example' => 'text',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待翻译内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Hello',
          ),
        ),
        4 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '场景可选取值：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social)，金融（finance）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'medical' => 'medical',
              'social' => 'social',
              'description' => 'description',
              'communication' => 'communication',
              'title' => 'title',
              'finance' => 'finance',
            ),
            'example' => 'social',
          ),
        ),
        5 => 
        array (
          'name' => 'Context',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'context信息',
            'description' => 'context信息',
            'type' => 'string',
            'required' => false,
            'example' => 'context信息',
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
              'Code' => 
              array (
                'description' => '状态码，200 表示正常
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求错误信息，如果正确则空',
                'type' => 'string',
                'example' => 'An error occurred while translating.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一串，方便后期排查定位问题',
                'type' => 'string',
                'example' => 'CC93BB5C-EAB5-579B-AA44-F61528F48FF8',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Translated' => 
                  array (
                    'description' => '翻译结果',
                    'type' => 'string',
                    'example' => '你好',
                  ),
                  'WordCount' => 
                  array (
                    'description' => '原文的字符数',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'DetectedLanguage' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => '10004',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => '10006',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => '10007',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => '10008',
            'errorMessage' => 'The specified string is too long.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'alimt::2018-10-12::Translate',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"An error occurred while translating.\\",\\n  \\"RequestId\\": \\"CC93BB5C-EAB5-579B-AA44-F61528F48FF8\\",\\n  \\"Data\\": {\\n    \\"Translated\\": \\"你好\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"DetectedLanguage\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '机器翻译电商版调用',
      'summary' => '调用机器翻译专业版获取翻译结果。',
      'description' => '1、字符长度限制5000，调用接口QPS限制50；如有扩展需求，请与我们联系钉钉群号：23369411

2、请确保在使用该接口前，已充分了解专业版翻译产品的收费方式和价格',
    ),
    'GetBatchTranslate' => 
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
          'name' => 'FormatType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译文本的格式，html（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、text（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'text	',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '译文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言<props="china">[参考语言code](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.2.8.53746614hvrF2G)</props><props="intl">[参考语言code](https://www.alibabacloud.com/help/zh/doc-detail/158269.html)</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 专业版本支持的场景：商品标题（title），商品描述（description），商品沟通（communication），医疗（medical），社交（social）

- 通用版本支持的场景：general',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'general',
          ),
        ),
        4 => 
        array (
          'name' => 'ApiType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 版本类型，必须选择一个版本

- 通用版本：translate_standard

- 专业版本：translate_ecommerce',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'translate_standard',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'json 数据格式

key：唯一的标记id，用于翻译结果拿到对应的id，对应上原文

value：待翻译的内容

具体格式如下：
`
{
  "11": "hello boy",
  "12": "go home",
  "13": "we can"
}
`

> 待翻译的条数不能超过50
> 单条翻译字符数不能超过1000字符
> 总字符数不能超过8000字符
>key不会计入翻译的字符
>待翻译的内容中，标点、空格、html标签均会计入字符',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"11":"hello boy","12":"go home","13":"we can"}',
            'isFileTransferUrl' => false,
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求的唯一id，用于后续排查问题使用',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
              'TranslatedList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果，json格式

code：单条翻译的状态码

wordCount：原文的字符数

detectedLanguage：源语言传入auto时，语种识别后的源语言代码

index：入参时候的key，唯一id，用于对应到原文

translated：翻译结果',
                  'type' => 'object',
                  'example' => '[
      {
            "code": "200",
            "wordCount": "9",
            "detectedLanguage": "en"
            "index": "11",
            "translated": "你好男孩"
      },
      {
            "code": "200",
            "wordCount": "7",
            "detectedLanguage": "en"
            "index": "12",
            "translated": "回家"
      },
      {
            "code": "200",
            "wordCount": "6",
            "detectedLanguage": "en"
            "index": "13",
            "translated": "我们可以"
      }
]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubNotPermission',
            'errorMessage' => 'The sub account is not authorized to perform the operation.',
          ),
          1 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'System.UnknownError',
            'errorMessage' => 'An unknown system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"TranslatedList\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Message>success</Message>\\n<RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n<TranslatedList>[{\\"code\\":\\"200\\",\\"wordCount\\":\\"9\\",\\"index\\":\\"11\\",\\"translated\\":\\"你好男孩\\"},{\\"code\\":\\"200\\",\\"wordCount\\":\\"7\\",\\"index\\":\\"12\\",\\"translated\\":\\"回家\\"},{\\"code\\":\\"200\\",\\"wordCount\\":\\"6\\",\\"index\\":\\"13\\",\\"translated\\":\\"我们可以\\"}]</TranslatedList>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '机器批量翻译调用指南',
      'summary' => '机器批量翻译，支持多段文本进行翻译。',
      'description' => '1、调用接口QPS限制50，如有扩展需求，请与我们联系钉钉群号：23369411
<props="china">2、批量翻译单条字符长度上限是1000字符，一次最多可翻译50条，若超出上限，可以保存成文件，使用[文档翻译](https://help.aliyun.com/document_detail/164151.html)</props>
<props="china">3、请确保在使用该接口前，已充分了解通用版和专业版翻译产品的收费方式和价格</props>
<props="china">4、批量翻译接口参考阿里云OpenAPI开发者门户[调试](https://next.api.aliyun.com/api/alimt/2018-10-12/GetBatchTranslate)调用</props>
<props="intl">2、批量翻译单条字符长度上限是1000字符，一次最多可翻译50条，请确保在使用该接口前，已充分了解通用版和专业版翻译产品的收费方式和价格</props>
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAsyncTranslate' => 
    array (
      'summary' => '机器异步翻译创建任务接口，支持100万以下字符翻译。',
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
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标语言，语言code参考',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要翻译的内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Opinion: We have finally gotten some relief at the pump. But it may not last long',
          ),
        ),
        3 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '场景，支持：通用（general）、商品标题（title）、商品详情（description）、买卖家沟通（message）、医疗（medical）、社交（social）、科技（tech）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'general',
          ),
        ),
        4 => 
        array (
          'name' => 'FormatType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译文本的格式，**html**（ 网页格式。设置此参数将对待翻译文本以及翻译后文本按照html格式进行处理）、**text**（文本格式。设置此参数将对传入待翻译文本以及翻译后结果不做文本格式处理，统一按纯文本格式处理。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'text',
          ),
        ),
        5 => 
        array (
          'name' => 'ApiType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 版本类型，必须选择一个版本

- 通用版本：translate_standard

- 专业版本：translate_ecommerce',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'translate_standard',
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
                'description' => '请求的唯一id，用于后续排查问题使用',
                'type' => 'string',
                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '异步任务ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '98bbb007-71bb-448b-bab0-2695ce8f8599',
                  ),
                  'Status' => 
                  array (
                    'description' => '任务状态',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'ready',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => '10004',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => '10006',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => '10007',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => '10008',
            'errorMessage' => 'The specified string is too long.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => 'You have not activated this service.',
          ),
          1 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => 'You have not activated the account service or the account service has overdue bills.',
          ),
          2 => 
          array (
            'errorCode' => '10021',
            'errorMessage' => 'The parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => '10026',
            'errorMessage' => 'Failed to translate the certificate. Please check the parameters.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => 'The RAM user is not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => '10025',
            'errorMessage' => 'The specified task does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => 'A system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => 'An error occurred while invoking the RAM user service.',
          ),
          2 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => 'An error occurred while calling the translation service.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"JobId\\": \\"98bbb007-71bb-448b-bab0-2695ce8f8599\\",\\n    \\"Status\\": \\"ready\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建文本异步翻译任务',
      'description' => '1、机器异步翻译字符长度上限是100万字符  2、文本异步翻译创建接口参考阿里云OpenAPI开发者门户调试调用',
      'responseParamsDescription' => '示例
正常返回示例

JSON格式

{
  "RequestId": "3AD51F66-4829-1E47-93F7-03BE3C0428F3",
 "Data": {
    "Status": "ready",
    "JobId": "2ff1e8b1-3842-4f1a-9bba-b8eea6b9720b"
  },
  "Code": "200"
}',
    ),
    'GetAsyncTranslate' => 
    array (
      'summary' => '获取文本异步翻译任务内容。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '异步任务ID。您调用CreateAsyncTranslate创建异步任务返回的JobId',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '77056ab7-7be1-4c2a-91a1-f20f63894048',
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
                'description' => '请求的唯一id，用于后续排查问题使用',
                'type' => 'string',
                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'ok',
              ),
              'Data' => 
              array (
                'description' => '数据内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '任务状态',
                    'type' => 'string',
                    'example' => 'ready',
                  ),
                  'TranslatedText' => 
                  array (
                    'description' => '翻译内容',
                    'type' => 'string',
                    'example' => 'hello',
                  ),
                  'WordCount' => 
                  array (
                    'description' => '原文的字符数',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'DetectedLanguage' => 
                  array (
                    'description' => '源语言传入auto时，语种识别后的源语言代码',
                    'type' => 'string',
                    'example' => 'zh',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubNotPermission',
            'errorMessage' => 'The sub account is not authorized to perform the operation.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Parameter.SourceLangError',
            'errorMessage' => 'Source languages are not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'Parameter.TargetLangError',
            'errorMessage' => 'Target languages are not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
          3 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
          4 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
          6 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
          2 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
          3 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
          4 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
          5 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
          6 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"ready\\",\\n    \\"TranslatedText\\": \\"hello\\",\\n    \\"WordCount\\": \\"2\\",\\n    \\"DetectedLanguage\\": \\"zh\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取文本异步翻译任务',
      'description' => '通过jobID获取对应的异步任务翻译内容',
    ),
    'GetDetectLanguage' => 
    array (
      'summary' => '语种识别API说明文档。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceText',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待识别的语种',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你好',
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
              'DetectedLanguage' => 
              array (
                'description' => '识别成功的语种',
                'type' => 'string',
                'example' => 'zh',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0C5EC1EC-1A06-4D60-97E6-4D41350945E4',
              ),
              'LanguageProbabilities' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => '10001',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => '10002',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => '10003',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => '10004',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => '10005',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => '10006',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => '10007',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => '10008',
            'errorMessage' => 'The specified string is too long.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.Error',
            'errorMessage' => 'The internal service connection timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DetectedLanguage\\": \\"zh\\",\\n  \\"RequestId\\": \\"0C5EC1EC-1A06-4D60-97E6-4D41350945E4\\",\\n  \\"LanguageProbabilities\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDetectLanguageResponse>\\n    <RequestId>0C5EC1EC-1A06-4D60-97E6-4D41350945E4</RequestId>\\n    <DetectedLanguage>zh</DetectedLanguage>\\n</GetDetectLanguageResponse>","errorExample":""}]',
      'title' => '语种识别',
      'description' => '1、字符长度限制5000，调用接口QPS限制50；如有扩展需求，请与我们联系，钉钉群号：23369411

2、请确保在使用该接口前，已充分了解通用版翻译产品的收费方式和价格',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '公共请求参数参见[《RPC 调用机制》公共请求参数组装方案](https://help.aliyun.com/document_detail/315526.html?spm=a2c4g.158244.0.0.34b627b5qv5gmt#sectiondiv-qq5-utu-r7a)',
      'extraInfo' => ' ',
    ),
    'TranslateImage' => 
    array (
      'summary' => '将图片上的文字从一种语言翻译成另一种语言，并输出一张尽可能忠于原图的新图片。',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原图 URL，跟 Base64 不能同时为空，优先取 Base64。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://example.com/example.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原图 Base64，跟 URL 不能同时为空，优先取 Base64。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4...H/9k=',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)，必填（请忽略表格中“是否必填”中的“否”）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标语种，支持的[语种参考](https://help.aliyun.com/document_detail/163584.html)，必填（请忽略表格中“是否必填”中的“否”）',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        4 => 
        array (
          'name' => 'Field',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译领域， 可选值如下。
- `general`: 通用图片翻译
- `e-commerce`: 电商领域图片翻译

默认及未识别领域均按通用图片翻译处理。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'general',
          ),
        ),
        5 => 
        array (
          'name' => 'Ext',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展信息, JSON String 格式，里面可以包含的字段如下。
- `needEditorData`: 取值为字符串 `true`/`false`，默认为`false`，是否需要在结果中返回图片翻译译后编辑器数据，仅用于[自行接入图片翻译译后编辑器](https://help.aliyun.com/document_detail/2507676.html)时，获取数据使用
- `ignoreEntityRecognize`：取值为字符串 `true`/`false`，默认为 `false`，电商领域图片翻译会自动判断文字是否在图片中的商品主体上，如果在，则略过翻译；使用本字段来控制是否进行上述判断，本字段对通用图片翻译无效',
            'type' => 'string',
            'required' => false,
            'example' => '{"needEditorData": "false", "ignoreEntityRecognize": "true"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求标识',
                'type' => 'string',
                'example' => 'D774D33D-F1CB-5A2C-A787-E0A2179239CE',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求错误信息',
                'type' => 'string',
                'example' => 'Error Message',
              ),
              'Data' => 
              array (
                'description' => '图片翻译结果结构体',
                'type' => 'object',
                'properties' => 
                array (
                  'InPaintingUrl' => 
                  array (
                    'description' => '图片译后编辑器背景图',
                    'type' => 'string',
                    'example' => 'https://example.com/example.jpg',
                  ),
                  'TemplateJson' => 
                  array (
                    'description' => '图片译后编辑器模版数据',
                    'type' => 'string',
                    'example' => 'Editor Template Json String',
                  ),
                  'FinalImageUrl' => 
                  array (
                    'description' => '最终翻译结果图片 URL',
                    'type' => 'string',
                    'example' => 'https://example.com/example.jpg',
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
            'errorCode' => 'Parameter.SourceLangError',
            'errorMessage' => 'Source languages are not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'Parameter.TargetLangError',
            'errorMessage' => 'Target languages are not supported.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
          1 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
          1 => 
          array (
            'errorCode' => 'Parameter.ImageUrlError',
            'errorMessage' => 'Failed to obtain the image from the URL.',
          ),
          2 => 
          array (
            'errorCode' => 'Parameter.ImageSizeError',
            'errorMessage' => 'Image size should be within 15px to 8192px.',
          ),
          3 => 
          array (
            'errorCode' => 'Parameter.ImageFormatError',
            'errorMessage' => 'The image format is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'Parameter.ImageFileSizeError',
            'errorMessage' => 'The image file size should be within 10 MB.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'ImageTranslate.TranslationError',
            'errorMessage' => 'Image translation error.',
          ),
          2 => 
          array (
            'errorCode' => 'ImageTranslate.FusionError',
            'errorMessage' => 'Image fusion error.',
          ),
          3 => 
          array (
            'errorCode' => 'ImageTranslate.EraseError',
            'errorMessage' => 'Image erasing error.',
          ),
          4 => 
          array (
            'errorCode' => 'ImageTranslate.TextTranslationError',
            'errorMessage' => 'Text translation error.',
          ),
          5 => 
          array (
            'errorCode' => 'ImageTranslate.TextToParagraphError',
            'errorMessage' => 'Text to paragraph error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D774D33D-F1CB-5A2C-A787-E0A2179239CE\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Error Message\\",\\n  \\"Data\\": {\\n    \\"InPaintingUrl\\": \\"https://example.com/example.jpg\\",\\n    \\"TemplateJson\\": \\"Editor Template Json String\\",\\n    \\"FinalImageUrl\\": \\"https://example.com/example.jpg\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateImageResponse>\\n    <code>200</code>\\n    <data>\\n        <finalImageUrl>https://example.com/example.jpg</finalImageUrl>\\n    </data>\\n    <requestId>D774D33D-F1CB-5A2C-A787-E0A2179239CE</requestId>\\n</TranslateImageResponse>","errorExample":""}]',
      'title' => '图片翻译',
      'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。

该接口适用于**通用图片翻译**和**电商图片翻译**。
如需调用证件翻译，请参考[证件翻译调用指南](https://help.aliyun.com/document_detail/2505939.html)。

**图片限制**

- 文件大小限制：10M
- 像素限制：长宽比 < 10：1
- 支持的格式：jpg, jpeg, png, bmp, gif（仅翻译第一帧）, webp

> 仅支持通过POST方式调用',
    ),
    'TranslateImageBatch' => 
    array (
      'summary' => '异步将一批图片上的文字从一种语言翻译成另一种语言，并分别输出新的图片。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrls',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原图 URL，多张图片使用半角逗号进行分割；单次请求 URL 总数不能超过 20，且相同的 URL 只会被处理一次',
            'type' => 'string',
            'required' => true,
            'example' => 'https://example.com/1.jpg,https://example.com/2.jpg,https://example.com/3.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源语种，支持的语种及对应的代码请参考[语言code](https://help.aliyun.com/document_detail/163584.html)',
            'type' => 'string',
            'required' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标语种，支持的语种及对应的代码请参考[语言code](https://help.aliyun.com/document_detail/163584.html)',
            'type' => 'string',
            'required' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'Ext',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展信息, JSON String 格式，里面可以包含的字段如下。
- `needEditorData`：取值为字符串 `true`/`false`，默认为`false`，是否需要在结果中返回图片翻译译后编辑器数据，仅用于[自行接入图片翻译译后编辑器](https://help.aliyun.com/document_detail/2507676.html)时，获取数据使用
- `ignoreEntityRecognize`：取值为字符串 `true`/`false`，默认为 `false`，电商领域图片翻译会自动判断文字是否在图片中的商品主体上，如果在，则略过翻译；使用本字段来控制是否进行上述判断，本字段对通用图片翻译无效',
            'type' => 'string',
            'required' => false,
            'example' => '{"needEditorData": "false", "ignoreEntityRecognize": "true"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义任务 ID，用于防止短时间误操作重复请求；3 分钟内，相同自定义任务 ID 的请求只会被处理一次',
            'type' => 'string',
            'required' => false,
            'example' => 'my_awesome_task_1',
          ),
        ),
        5 => 
        array (
          'name' => 'Field',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译领域， 可选值如下。
- `general`：通用图片翻译
- `e-commerce`：电商领域图片翻译

默认及未识别领域均按通用图片翻译处理。',
            'type' => 'string',
            'required' => false,
            'example' => 'general',
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
            'description' => '请求结果结构',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求标识',
                'type' => 'string',
                'example' => 'D774D33D-F1CB-5A2C-A787-E0A2179239CE',
              ),
              'Message' => 
              array (
                'description' => '请求信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '请求结果状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '数据内容',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务 ID，用于后续获取翻译结果',
                    'type' => 'string',
                    'example' => 'EEA28E6D-4828-5031-BD8C-8FF1B3216842',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D774D33D-F1CB-5A2C-A787-E0A2179239CE\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"EEA28E6D-4828-5031-BD8C-8FF1B3216842\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateImageBatchResponse>\\n    <RequestId>D774D33D-F1CB-5A2C-A787-E0A2179239CE</RequestId>\\n    <Message>OK</Message>\\n    <Code>200</Code>\\n    <Data>\\n        <TaskId>EEA28E6D-4828-5031-BD8C-8FF1B3216842</TaskId>\\n    </Data>\\n</TranslateImageBatchResponse>","errorExample":""}]',
      'title' => '图片异步批量翻译',
      'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。

该接口适用于**通用图片翻译**和**电商图片翻译**；如需调用证件翻译，请参考[证件翻译调用指南](https://help.aliyun.com/document_detail/163527.html)。

**图片限制**

- 文件大小限制：10MB
- 像素限制：长宽比 < 10:1
- 支持的格式：jpg, jpeg, png, bmp, gif（仅翻译第一帧）, webp',
    ),
    'GetTranslateImageBatchResult' => 
    array (
      'summary' => '获取图片异步批量翻译的结果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '调用图片异步批量翻译接口获得的任务 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'EEA28E6D-4828-5031-BD8C-8FF1B3216842',
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
            'description' => '请求结果结构',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求结果状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求标识',
                'type' => 'string',
                'example' => 'DACD263C-C068-5116-83EC-117245AA35CF',
              ),
              'Data' => 
              array (
                'description' => '数据内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '翻译结果，当改批量翻译任务没有执行完毕时，该字段为空数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '单张图片的翻译结果',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InPaintingUrl' => 
                        array (
                          'description' => '单张图片的译后编辑器背景图',
                          'type' => 'string',
                          'example' => 'https://example.com/example.jpg',
                        ),
                        'FinalImageUrl' => 
                        array (
                          'description' => '单张图片的翻译结果图 URL',
                          'type' => 'string',
                          'example' => 'https://example.com/example.jpg',
                        ),
                        'TemplateJson' => 
                        array (
                          'description' => '单张图片的译后编辑器模版数据',
                          'type' => 'string',
                          'example' => '{"TemplateJson": "Editor Template Json String	"}',
                        ),
                        'SourceImageUrl' => 
                        array (
                          'description' => '单张图片的原图 URL',
                          'type' => 'string',
                          'example' => 'https://example.com/example.jpg',
                        ),
                        'Code' => 
                        array (
                          'description' => '单张图片的翻译状态码',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '200',
                        ),
                        'Message' => 
                        array (
                          'description' => '单张图片的翻译信息',
                          'type' => 'string',
                          'example' => 'OK',
                        ),
                        'Success' => 
                        array (
                          'description' => '单张图片是否翻译成功标识',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'Status' => 
                  array (
                    'description' => '标识当前任务的运行状态，可能的值及含义如下：

- `created`：批量翻译任务创建成功，等待运行
- `running`：批量翻译任务正在运行中
- `finished`：批量翻译任务运行结束，图片均已翻译完毕，此时 `Result` 字段会包含每张图片的翻译结果
- `invalid`：传入的任务 ID 非法，或者任务的翻译结果已经过期被清理',
                    'type' => 'string',
                    'example' => 'finished',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"DACD263C-C068-5116-83EC-117245AA35CF\\",\\n  \\"Data\\": {\\n    \\"Result\\": [\\n      {\\n        \\"InPaintingUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"FinalImageUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"TemplateJson\\": \\"{\\\\\\"TemplateJson\\\\\\": \\\\\\"Editor Template Json String\\\\t\\\\\\"}\\",\\n        \\"SourceImageUrl\\": \\"https://example.com/example.jpg\\",\\n        \\"Code\\": 200,\\n        \\"Message\\": \\"OK\\",\\n        \\"Success\\": true\\n      }\\n    ],\\n    \\"Status\\": \\"finished\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTranslateImageBatchResultResponse>\\n    <Code>200</Code>\\n    <Message>OK</Message>\\n    <RequestId>DACD263C-C068-5116-83EC-117245AA35CF</RequestId>\\n    <Data>\\n        <Result>\\n            <InPaintingUrl>https://example.com/example.jpg</InPaintingUrl>\\n            <FinalImageUrl>https://example.com/example.jpg</FinalImageUrl>\\n            <TemplateJson>{\\"TemplateJson\\": \\"Editor Template Json String\\t\\"}</TemplateJson>\\n            <SourceImageUrl>https://example.com/example.jpg</SourceImageUrl>\\n            <Code>200</Code>\\n            <Message>OK</Message>\\n            <Success>true</Success>\\n        </Result>\\n        <Status>finished</Status>\\n    </Data>\\n</GetTranslateImageBatchResultResponse>","errorExample":""}]',
      'title' => '图片异步批量翻译结果获取',
      'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。

图片异步批量翻译的结果，翻译完毕后，会保存 1 小时，过期后会被清理，请及时获取结果。',
    ),
    'CreateDocTranslateTask' => 
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
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原文语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标语言，[语言code参考](https://help.aliyun.com/document_detail/158269.html?spm=a2c4g.11186623.6.542.7da22b9fayuNoj)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文档URL。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://fileUrl',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '场景，支持：通用（general）、商品标题（title）、商品详情（description）、买卖家沟通（message）、医疗（medical）、社交（social）、科技（tech）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'general',
            'default' => 'general',
          ),
        ),
        4 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译结果回调URL，服务器会向回调地址发起post请求

请求body

raw json

- 参数名  说明

- task_id  任务id

- status     状态

- errCode   错误码

- errMsg    错误信息

- translateFileUrl   文件下载地址，过期时间1小时

IP白名单

59.82.61.52

203.119.241.30

203.119.241.98

59.82.84.90

203.119.241.56

59.82.61.75

回调服务示例：该服务用于回调方式获取翻译结果

```
import com.alibaba.fastjson.JSON;

import com.alibaba.fastjson.JSONObject;

import org.springframework.web.bind.annotation.RequestBody;

import org.springframework.web.bind.annotation.RequestMapping;

import org.springframework.web.bind.annotation.RequestMethod;

import org.springframework.web.bind.annotation.RestController;

@RestController

public class CallbackController {

    @RequestMapping(value = "callback", method = RequestMethod.POST)

    public void callback(@RequestBody String body) {

        try {

            JSONObject result = JSON.parseObject(body);

            if (200 != result.getInteger("errCode")) {

                System.out.println("fail " + result.getString("erMsg"));

                return;

            }

            System.out.println("task_id:" + result.getString("task_id"));

            System.out.println("status:" + result.getString("status"));

            System.out.println("translateFileUrl:" + result.getString("translateFileUrl"));

        } catch (Exception e) {

            e.printStackTrace();

        }

    }

}
```',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'http://callbackUrl',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '提供幂等能力，3分钟内，相同的值只会生效一次。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'token',
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
                'description' => '任务状态。',
                'type' => 'string',
                'example' => 'ready',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D3920BC3-A395-4CAD-9E84-7C39EB07507B',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '0586df512c8b4bb382d7d9a6a01b5854',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => '10021',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => '10022',
            'errorMessage' => 'The parameter fileUrl is invalid.',
          ),
          2 => 
          array (
            'errorCode' => '10023',
            'errorMessage' => 'The parameter fileUrl is not accessible.',
          ),
          3 => 
          array (
            'errorCode' => '10024',
            'errorMessage' => 'The parameter callbackUrl is invalid.',
          ),
          4 => 
          array (
            'errorCode' => '10030',
            'errorMessage' => 'The file size exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => '10031',
            'errorMessage' => 'The specified file type is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAccountStatus',
            'errorMessage' => 'The Machine Translation service has not been activated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '10029',
            'errorMessage' => 'The number of calls per day exceeds the limit.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'REQUESTS.OVER.LIMIT',
            'errorMessage' => 'The request is too frequent, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ready\\",\\n  \\"RequestId\\": \\"D3920BC3-A395-4CAD-9E84-7C39EB07507B\\",\\n  \\"TaskId\\": \\"0586df512c8b4bb382d7d9a6a01b5854\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDocTranslateTaskResponse>\\n    <requestId>D3920BC3-A395-4CAD-9E84-7C39EB07507B</requestId>\\n    <taskId>0586df512c8b4bb382d7d9a6a01b5854</taskId>\\n    <status>ready</status>\\n</CreateDocTranslateTaskResponse>","errorExample":""}]',
      'title' => '创建文档翻译任务',
      'summary' => '创建文档翻译任务。',
      'description' => '> 仅支持通过POST方式调用',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDocTranslateTask' => 
    array (
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0586df512c8b4bb382d7d9a6a01b5854',
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
                'description' => '任务状态。',
                'type' => 'string',
                'example' => 'translated',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '12952E92-FDF3-4D3C-88E3-242D72BA7150',
              ),
              'TranslateFileUrl' => 
              array (
                'description' => '翻译后的文件下载地址。',
                'type' => 'string',
                'example' => 'http://translateFileUrl',
              ),
              'TranslateErrorCode' => 
              array (
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'Error',
              ),
              'PageCount' => 
              array (
                'description' => '文档页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '0586df512c8b4bb382d7d9a6a01b5854',
              ),
              'TranslateErrorMessage' => 
              array (
                'description' => '任务错误信息。',
                'type' => 'string',
                'example' => 'Fail to get the page number of document.',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => '10021',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus',
            'errorMessage' => 'The Machine Translation service has not been activated.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => '10025',
            'errorMessage' => 'The specified task does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"translated\\",\\n  \\"RequestId\\": \\"12952E92-FDF3-4D3C-88E3-242D72BA7150\\",\\n  \\"TranslateFileUrl\\": \\"http://translateFileUrl\\",\\n  \\"TranslateErrorCode\\": \\"Error\\",\\n  \\"PageCount\\": 20,\\n  \\"TaskId\\": \\"0586df512c8b4bb382d7d9a6a01b5854\\",\\n  \\"TranslateErrorMessage\\": \\"Fail to get the page number of document.\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDocTranslateTaskResponse>\\n    <Status>translated</Status>\\n    <TranslateErrorMessage>Fail to get the page number of document.</TranslateErrorMessage>\\n    <TaskId>0586df512c8b4bb382d7d9a6a01b5854</TaskId>\\n    <RequestId>12952E92-FDF3-4D3C-88E3-242D72BA7150</RequestId>\\n    <PageCount>20</PageCount>\\n    <TranslateFileUrl>http://translateFileUrl</TranslateFileUrl>\\n    <TranslateErrorCode>Error</TranslateErrorCode>\\n</GetDocTranslateTaskResponse>","errorExample":""}]',
      'title' => '查询文档翻译任务',
      'summary' => '查询文档翻译任务。',
      'description' => '请确保在使用该接口前，已充分了解文档翻译产品的收费方式和价格
> 仅支持通过GET方式调用',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TranslateCertificate' => 
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原图语言',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '译文语言',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'oss文件地址：一个可以不用赋权就能访问的HTTP地址',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://imageurl',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'CertificateType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译的证件类型：身份证(idcard)，驾驶证(driving_license)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'driving_license',
          ),
        ),
        4 => 
        array (
          'name' => 'ResultType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '翻译结果类型：文本（text），图片（image），不传值默认：text',
            'type' => 'string',
            'required' => false,
            'example' => 'text',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => '6640DE48-201C-4110-AE87-FB8FA34412B9',
              ),
              'Data' => 
              array (
                'description' => '翻译结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TranslatedValues' => 
                  array (
                    'description' => '译文结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'KeyTranslation' => 
                        array (
                          'description' => 'key对应的译文',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'Key' => 
                        array (
                          'description' => '证件内容标题，如身份证中的姓名，性别',
                          'type' => 'string',
                          'example' => '姓名',
                        ),
                        'Value' => 
                        array (
                          'description' => '原文',
                          'type' => 'string',
                          'example' => '庄严',
                        ),
                        'ValueTranslation' => 
                        array (
                          'description' => '译文',
                          'type' => 'string',
                          'example' => 'Solemn',
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
            'errorCode' => '10026',
            'errorMessage' => 'Failed to translate the certificate. Please check the parameters.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
            'errorMessage' => 'The service has not been activated.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6640DE48-201C-4110-AE87-FB8FA34412B9\\",\\n  \\"Data\\": {\\n    \\"TranslatedValues\\": [\\n      {\\n        \\"KeyTranslation\\": \\"name\\",\\n        \\"Key\\": \\"姓名\\",\\n        \\"Value\\": \\"庄严\\",\\n        \\"ValueTranslation\\": \\"Solemn\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TranslateCertificateResponse>\\n    <RequestId>BA8DAAE0-1985-4B19-86BA-97C1753FCF3A</RequestId>\\n    <Data>\\n        <TranslatedValues>\\n            <ValueTranslation>Huang Jia</ValueTranslation>\\n            <KeyTranslation>name</KeyTranslation>\\n            <Value>黄佳</Value>\\n            <Key>姓名</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05</ValueTranslation>\\n            <KeyTranslation>effective start date</KeyTranslation>\\n            <Value>2019-07-05</Value>\\n            <Key>有效起始日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>331021190</ValueTranslation>\\n            <KeyTranslation>certificate number</KeyTranslation>\\n            <Value>331021190</Value>\\n            <Key>证号</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>1999-11-04</ValueTranslation>\\n            <KeyTranslation>date of birth</KeyTranslation>\\n            <Value>1999-11-04</Value>\\n            <Key>出生日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>No. 3 Damaiyu Street, Yuhuan county, Zhejiang province</ValueTranslation>\\n            <KeyTranslation>address</KeyTranslation>\\n            <Value>浙江省玉环县大麦屿街道3号</Value>\\n            <Key>住址</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Fujian Ningde, traffic police division, public security bureau</ValueTranslation>\\n            <KeyTranslation>license issuing unit</KeyTranslation>\\n            <Value>福建省宁德市公安局交通警察支队</Value>\\n            <Key>发证单位</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Chinese</ValueTranslation>\\n            <KeyTranslation>nationality</KeyTranslation>\\n            <Value>中国</Value>\\n            <Key>国籍</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05</ValueTranslation>\\n            <KeyTranslation>date of first issue</KeyTranslation>\\n            <Value>2019-07-05</Value>\\n            <Key>初次领证日期</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>C1</ValueTranslation>\\n            <KeyTranslation>class</KeyTranslation>\\n            <Value>C1</Value>\\n            <Key>准驾车型</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>Women\'s</ValueTranslation>\\n            <KeyTranslation>sex</KeyTranslation>\\n            <Value>女</Value>\\n            <Key>性别</Key>\\n        </TranslatedValues>\\n        <TranslatedValues>\\n            <ValueTranslation>2019-07-05至2025-07-05</ValueTranslation>\\n            <KeyTranslation>validity period</KeyTranslation>\\n            <Value>2019-07-05至2025-07-05</Value>\\n            <Key>有效期限</Key>\\n        </TranslatedValues>\\n    </Data>\\n</TranslateCertificateResponse>","errorExample":""}]',
      'title' => '证件翻译',
      'summary' => '进行证件翻译。',
      'description' => '请确保在使用该接口前，已充分了解图片翻译产品的[收费方式和价格](https://help.aliyun.com/document_detail/163332.html)。

该接口适用于**证件翻译**。 如需调用通用图片翻译和电商图片翻译，请参考[图片翻译调用指南](https://help.aliyun.com/document_detail/2505940.html)。



**图片限制**
文件大小限制：4M
支持的格式：jpg, jpeg, png

接口QPS限制：40

> 仅支持通过POST方式调用',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetImageTranslate' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要翻译的图片链接',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://xxxxxxx.oss-cn-shenzhen.aliyuncs.com/xxxxxx.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片中的文字语种，<props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>
<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片中文字翻译后的语种，<props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>
<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 以下JSON内容格式，不关注的都可以不用传递，都是可选参数

- JSON 格式内容：
```
{
  "have_ocr": "false",
  "without_text":"true",
  "have_psd": "false",
  "ignore_entity": "false"
}
```
- have_ocr 通过true/false 控制是否返回ocr结果，true：需要，false：不需要
- without_text 控制是否需要擦除图片中的文字，true：需要，false：不需要
- have_psd 用于图片编辑器，psd数据渲染编辑器
- ignore_entity 是否忽略实体识别，true：忽略实体识别，false：不忽略',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"have_ocr": "false", "without_text":"true", "have_psd": "false", "ignore_entity": "false"}',
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
              'Code' => 
              array (
                'description' => '状态码，200 表示正常',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误的时候，返回的错误信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求的唯一串',
                'type' => 'string',
                'example' => 'A41F6E25-8520-4AF0-90EF-AF7E32840108',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '翻译后的图片链接',
                    'type' => 'string',
                    'example' => 'https://ae01.alicdn.com/kf/xxxxx.jpeg',
                  ),
                  'Orc' => 
                  array (
                    'description' => 'orc 识别后的内容',
                    'type' => 'string',
                    'example' => '{"text":"P翼-至草款","width":750,"wordNum":10}',
                  ),
                  'PictureEditor' => 
                  array (
                    'description' => '用于图片编辑器渲染的psd数据',
                    'type' => 'string',
                    'example' => '{"text":"P翼-至草款","width":750,"wordNum":10}',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"A41F6E25-8520-4AF0-90EF-AF7E32840108\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"https://ae01.alicdn.com/kf/xxxxx.jpeg\\",\\n    \\"Orc\\": \\"{\\\\\\"text\\\\\\":\\\\\\"P翼-至草款\\\\\\",\\\\\\"width\\\\\\":750,\\\\\\"wordNum\\\\\\":10}\\",\\n    \\"PictureEditor\\": \\"{\\\\\\"text\\\\\\":\\\\\\"P翼-至草款\\\\\\",\\\\\\"width\\\\\\":750,\\\\\\"wordNum\\\\\\":10}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>ok</Message>\\n<RequestId>A41F6E25-8520-4AF0-90EF-AF7E32840108</RequestId>\\n<Data>\\n    <PictureEditor>{\\"text\\":\\"P翼-至草款\\",\\"width\\":750,\\"wordNum\\":10}</PictureEditor>\\n    <Orc>{\\"text\\":\\"P翼-至草款\\",\\"width\\":750,\\"wordNum\\":10}</Orc>\\n    <Url>https://ae01.alicdn.com/kf/xxxxx.jpeg</Url>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '商品图片智能翻译',
      'summary' => '包含文字识别、文本翻译、文字回填等能力。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。><notice>
替代接口为[图片翻译](https://help.aliyun.com/zh/machine-translation/developer-reference/api-alimt-2018-10-12-translateimage?spm=a2c4g.11186623.0.0.625a288aSx2On0)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateImageTranslateTask' => 
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
          'name' => 'UrlList',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片翻译链接，多张图片通过英文逗号分隔，图片数量不能超过20张',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://xxx,http://yyy',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片原始语种',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片翻译目标语种',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 以下JSON内容格式，不关注的都可以不用传递，都是可选参数
- 样例JSON格式内容：
```
{
  "have_ocr": "false",
  "without_text": "false",
  "have_psd": "true",
  "ignore_entity": "false"
}
```
- `have_ocr`，控制是否返回 OCR 结果，true：需要，false：不需要
- `without_text`，控制是否需要擦除图片中的文字，true：需要，false：不需要
- `have_psd`，控制是否返回图片编辑器数据，渲染编辑器，true：需要，false：不需要
- `ignore_entity`，是否忽略实体识别，true：忽略，false：不忽略',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"have_ocr":"false","without_text":"false","have_psd":"true","ignore_entity":"false"}',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '提供幂等能力，3分钟内，相同的值只会生效一次',
            'type' => 'string',
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
              'Code' => 
              array (
                'description' => '状态码，200 表示正常
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误的时候，返回的错误信息
',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求的唯一串
',
                'type' => 'string',
                'example' => 'A41F6E25-8520-4AF0-90EF-AF7E32840108',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容
',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '异步图片翻译返回的任务ID，后面根据这个ID获取翻译结果',
                    'type' => 'string',
                    'example' => 'A41F6E25-8520-4AF0-90EF-111111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"A41F6E25-8520-4AF0-90EF-AF7E32840108\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"A41F6E25-8520-4AF0-90EF-111111\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>ok</Message>\\n<RequestId>A41F6E25-8520-4AF0-90EF-AF7E32840108</RequestId>\\n<Data>\\n    <TaskId>A41F6E25-8520-4AF0-90EF-111111</TaskId>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '创建异步图片翻译调用指南',
      'summary' => '创建异步图片翻译，图片翻译包含文字识别、文本翻译、文字回填等能力。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetImageTranslateTask' => 
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
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '异步图片翻译任务Id',
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
              'Code' => 
              array (
                'description' => '状态码，200 表示正常
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误的时候，返回的错误信息
',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求的唯一串
',
                'type' => 'string',
                'example' => 'xxxxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容
',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageData' => 
                  array (
                    'description' => '- 图片翻译结构化数据

```
[
  {
    "errorCode": "200",
    "sourceUrl": "https://img.alicdn.com/imgextra/i3/2838892713/O1CN01AJHAFq1Vub9eKog8t_!!2838892713.jpg",
    "success": true,
    "topRequestId": "of8hp0d9ne81",
    "url": "https://ae01.alicdn.com/kf/H86dc34f146e1488aa55a0435ebd1775cu.jpeg"
  },
  {
    "errorCode": "200",
    "sourceUrl": "https://img.alicdn.com/imgextra/i2/2838892713/O1CN01Ko5Mxu1Vub9Y85K6p_!!2838892713.jpg",
    "success": true,
    "topRequestId": "of8hp0d9ne81",
    "url": "https://ae01.alicdn.com/kf/H1cc74cbdfc554b278dfaa8b2ede33f48D.jpeg"
  }
]
```

- sourceURL 原始图片地址
- URL翻译后的图片地址',
                    'type' => 'string',
                    'example' => '[{xxxxxx}]',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"xxxxxxx\\",\\n  \\"Data\\": {\\n    \\"ImageData\\": \\"[{xxxxxx}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取异步图片翻译结果',
      'summary' => '通过任务ID获取异步图片翻译结果。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetImageDiagnose' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片链接',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://xxxxx.oss-cn-shenzhen.aliyuncs.com/jd/41209/xxxxx.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 格式内容：{
  "product_id": "1",
  "platform": "ae"
}
- product_id  商品id
- platform 商品所属平台，支持ae/icbu/lazada',
            'type' => 'string',
            'required' => false,
            'example' => '{   "product_id": "1",   "platform": "ae" }',
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
              'Code' => 
              array (
                'description' => '状态码，正常请求返回200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误的时候返回错误信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一串',
                'type' => 'string',
                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
              ),
              'Data' => 
              array (
                'description' => '返回的结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Language' => 
                  array (
                    'description' => '图片中的文字识别后的语种',
                    'type' => 'string',
                    'example' => 'zh',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"Language\\": \\"zh\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <Language>zh</Language>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '图片诊断',
      'summary' => '能够识别图片中的文字的语种。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTitleDiagnose' => 
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
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标题内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Amroe Japan Comic Theme Uzumaki Naruto Namikaze Minato 3D Visual Cartoon 7 Color USB Touch',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标题文字的语种，<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html?spm=a2c4g.11186623.6.543.106340eblV3QUo)</props><props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Platform',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品标题所属平台，支持ae/icbu/lazada',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ae',
          ),
        ),
        3 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类目id，如没有类目数据则传入0',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 可选字段

- 格式内容：{
  "product_id": "1",
  "platform": "ae"
}
- product_id  商品id
- platform 商品所属平台，支持ae/icbu/lazada',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{   "product_id": "1",   "platform": "ae" }',
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
              'Code' => 
              array (
                'description' => '状态码，正常请求返回200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '状态信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
              ),
              'Data' => 
              array (
                'description' => '返回具体内容',
                'type' => 'object',
                'properties' => 
                array (
                  'DuplicateWords' => 
                  array (
                    'description' => '重复单词（包括单复数）',
                    'type' => 'string',
                    'example' => 'hi',
                  ),
                  'ContainCoreClasses' => 
                  array (
                    'description' => '是否包含类目主词',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'WordCount' => 
                  array (
                    'description' => '总单词数',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'LanguageQualityScore' => 
                  array (
                    'description' => '语言质量分',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'AllUppercaseWords' => 
                  array (
                    'description' => '全部大写的单词',
                    'type' => 'string',
                    'example' => 'Boy',
                  ),
                  'OverLengthLimit' => 
                  array (
                    'description' => '长度限制',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'DisableWords' => 
                  array (
                    'description' => '敏感词',
                    'type' => 'string',
                    'example' => 'baba',
                  ),
                  'NoFirstUppercaseList' => 
                  array (
                    'description' => '首字母未大写单词',
                    'type' => 'string',
                    'example' => 'no',
                  ),
                  'TotalScore' => 
                  array (
                    'description' => '总分数',
                    'type' => 'string',
                    'example' => '3',
                  ),
                  'WordSpelledCorrectError' => 
                  array (
                    'description' => '拼写错误单词',
                    'type' => 'string',
                    'example' => 'ahk',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"DuplicateWords\\": \\"hi\\",\\n    \\"ContainCoreClasses\\": \\"true\\",\\n    \\"WordCount\\": \\"10\\",\\n    \\"LanguageQualityScore\\": \\"2\\",\\n    \\"AllUppercaseWords\\": \\"Boy\\",\\n    \\"OverLengthLimit\\": \\"100\\",\\n    \\"DisableWords\\": \\"baba\\",\\n    \\"NoFirstUppercaseList\\": \\"no\\",\\n    \\"TotalScore\\": \\"3\\",\\n    \\"WordSpelledCorrectError\\": \\"ahk\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <NoFirstUppercaseList>no</NoFirstUppercaseList>\\n    <ContainCoreClasses>true</ContainCoreClasses>\\n    <DisableWords>baba</DisableWords>\\n    <WordCount>10</WordCount>\\n    <OverLengthLimit>100</OverLengthLimit>\\n    <TotalScore>3</TotalScore>\\n    <DuplicateWords>hi</DuplicateWords>\\n    <WordSpelledCorrectError>ahk</WordSpelledCorrectError>\\n    <AllUppercaseWords>Boy</AllUppercaseWords>\\n    <LanguageQualityScore>2</LanguageQualityScore>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '标题诊断调用指南',
      'summary' => '通过商品标题质量诊断服务，产出可视化的标题质量分，便于卖家对现有的商品标题质量有实际体感。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTitleGenerate' => 
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
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标题内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10pcs 80ml Kitchen Disposable',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标题语种，<props="china">[语向支持以及语言代码](https://help.aliyun.com/document_detail/182310.html)</props><props="intl">[语向支持以及语言代码](https://www.alibabacloud.com/help/zh/doc-detail/182310.html)</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Platform',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品标题所属平台，支持ae/icbu',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ae',
          ),
        ),
        3 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类目ID，如没有类目数据则传入0',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '127896018',
          ),
        ),
        4 => 
        array (
          'name' => 'HotWords',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热词',
            'type' => 'string',
            'required' => false,
            'example' => 'None,Plastic',
          ),
        ),
        5 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品属性，请如示例传入JSON数据
',
            'type' => 'string',
            'required' => false,
            'example' => '{2:"None",10:"Plastic"}',
          ),
        ),
        6 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 格式内容：{
  "product_id": "1",
  "platform": "ae"
}
- product_id  商品id
- platform 商品所属平台',
            'type' => 'string',
            'required' => false,
            'example' => '{   "product_id": "1",   "platform": "ae" }',
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
              'Code' => 
              array (
                'description' => '状态码，正常返回200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误的时候，返回错误信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一串',
                'type' => 'string',
                'example' => 'DC2DCCC9-C3DF-4F59-8D8E-78185729F16D',
              ),
              'Data' => 
              array (
                'description' => '返回内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Titles' => 
                  array (
                    'description' => '优化后的标题内容',
                    'type' => 'string',
                    'example' => '10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"DC2DCCC9-C3DF-4F59-8D8E-78185729F16D\\",\\n  \\"Data\\": {\\n    \\"Titles\\": \\"10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC2DCCC9-C3DF-4F59-8D8E-78185729F16D</RequestId>\\n<Message>ok</Message>\\n<Data>\\n    <Titles>10pcs 80ml Kitchen Disposable Plastic Sauce Cup Pot Chutney Container</Titles>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '标题优化调用指南',
      'summary' => '基于电商大数据，自动优化商品标题。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTitleIntelligence' => 
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
          'name' => 'Platform',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品所在平台 ae、icbu、lazada',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ae',
          ),
        ),
        1 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展信息，json数据格式，可选字段',
            'type' => 'string',
            'required' => false,
            'example' => '{"product_id":"1212"}',
          ),
        ),
        2 => 
        array (
          'name' => 'CatLevelThreeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '三级类目Id，如没有类目数据则传入0',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '99999999999',
            'minimum' => '0',
            'example' => '111',
          ),
        ),
        3 => 
        array (
          'name' => 'CatLevelTwoId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二级类目Id，如没有类目数据则传入0',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '99999999999',
            'minimum' => '0',
            'example' => '222',
          ),
        ),
        4 => 
        array (
          'name' => 'Keywords',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键词，多个词英文逗号分隔比如：hello,apple',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hello,apple',
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
              'Code' => 
              array (
                'description' => '状态码，200 表示正常',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '如果有错误，会输出错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一串，方便后期排查定位问题',
                'type' => 'string',
                'example' => 'D70487B4-8891-4D24-BB64-8788E53671FB',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Titles' => 
                  array (
                    'description' => '自动生成的标题信息',
                    'type' => 'string',
                    'example' => 'Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        101 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.RequestTimeOut',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.Error',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.UrlDecodingError',
            'errorMessage' => 'An error occurred while decoding the URL. Verify that the specified URL is encoded.',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'Some required parameters are missing.',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageNotSupported',
            'errorMessage' => 'The specified language pair is not supported.',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.LanguageDetectError',
            'errorMessage' => 'An error occurred while detecting the language.',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateError',
            'errorMessage' => 'An error occurred while translating.',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.StringTooLong',
            'errorMessage' => 'The maximum length of the specified string is exceeded.',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.subNotPermission',
            'errorMessage' => 'The sub-account is not authorized to perform the operation.',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivated',
            'errorMessage' => 'The account has not activated the service.',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.SubServiceFailed',
            'errorMessage' => 'Sub-account service failed.',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.TranslateServiceCallFailed',
            'errorMessage' => 'Failed to call the translation service.',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.AccountNotActivatedOrInArrears',
            'errorMessage' => 'The service is not activated or the account has an outstanding balance.',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.unknownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D70487B4-8891-4D24-BB64-8788E53671FB\\",\\n  \\"Data\\": {\\n    \\"Titles\\": \\"Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D70487B4-8891-4D24-BB64-8788E53671FB</RequestId>\\n<Message>success</Message>\\n<Data>\\n    <Titles>Custom Hello Kitty PVC Cartoon Apple for Home Garden Complete Apple Bath Shower</Titles>\\n</Data>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '标题智能生成调用指南',
      'summary' => '通过类目、平台、关键词，自动生成商品标题。',
      'description' => '><notice>该接口已计划下线，不建议继续调用。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OpenAlimtService' => 
    array (
      'summary' => '商品服务开通。',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 机器翻译 alimt

- 定制化翻译服务 type = automl

- 证件翻译 type=ct

- 文档翻译 type=dt

- 语种识别type=id
',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
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
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '123456',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'xxxx-xxxxx',
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
            'errorCode' => 'ORDER.OPEND',
            'errorMessage' => 'You have already open the service. Go to the console to start using it',
          ),
          1 => 
          array (
            'errorCode' => 'PRICEING.PLAN.RESULT.NOT.FOUND',
            'errorMessage' => 'The order is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"123456\\",\\n  \\"RequestId\\": \\"xxxx-xxxxx\\"\\n}","errorExample":""}]',
      'title' => '商品服务开通',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTranslateReport' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-03-01 00:00:00',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-03-01 23:59:59',
          ),
        ),
        2 => 
        array (
          'name' => 'ApiName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API名称

- 机器翻译通用版：translate_standard
- 机器翻译专业版：translate_ecommerce
- 语种识别：predict_detect
- 通用图片翻译：it_general
- 电商图片翻译：it_ecommerce
- 文档翻译：dt_page
- 身份证翻译：ct_idcard
- 驾照翻译：ct_driving',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'translate_standard',
          ),
        ),
        3 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hour或者day',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回内容',
                'type' => 'string',
                'example' => '{"result":[{"time":"2021-10-21 00:00:00","total":100}]}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        109 => 
        array (
          0 => 
          array (
            'errorCode' => '10009',
            'errorMessage' => '子账号没有权限',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'errorCode' => '10010',
            'errorMessage' => '账号没有开通服务',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'errorCode' => '10011',
            'errorMessage' => '子账号服务失败',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'errorCode' => '10012',
            'errorMessage' => '翻译服务调用失败',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'errorCode' => '10013',
            'errorMessage' => '账号服务没有开通或者欠费',
          ),
        ),
        199 => 
        array (
          0 => 
          array (
            'errorCode' => '19999',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{\\\\\\"result\\\\\\":[{\\\\\\"time\\\\\\":\\\\\\"2021-10-21 00:00:00\\\\\\",\\\\\\"total\\\\\\":100}]}\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTranslateReportResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <Data>{\\"result\\":[{\\"time\\":\\"2021-10-21 00:00:00\\",\\"total\\":100}]}</Data>\\n    <RequestId>86D18195-D89C-4C8C-9DC4-5FCE789CE6D5</RequestId>\\n</GetTranslateReportResponse>","errorExample":""}]',
      'title' => '获取调用接口报表',
      'summary' => '根据API名及开始结束时间获取API调用报表，并根据传入的group按照天或者小时聚合计算后返回。',
      'description' => '请确保在使用该接口前，已充分了解机器翻译产品的收费方式和[价格](https://help.aliyun.com/document_detail/457279.html)',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'mt.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'mt.ap-southeast-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'mt.aliyuncs.com',
    ),
  ),
);
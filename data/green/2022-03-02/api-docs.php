<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Green',
    'version' => '2022-03-02',
  ),
  'directories' => 
  array (
    0 => 'TextModeration',
    1 => 'TextModerationPlus',
    2 => 'ImageModeration',
    3 => 'ImageAsyncModeration',
    4 => 'DescribeImageModerationResult',
    5 => 'VoiceModeration',
    6 => 'VoiceModerationResult',
    7 => 'VoiceModerationCancel',
    8 => 'VideoModeration',
    9 => 'VideoModerationResult',
    10 => 'VideoModerationCancel',
    11 => 'FileModeration',
    12 => 'DescribeFileModerationResult',
    13 => 
    array (
      'id' => 188835,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeImageResultExt',
        1 => 'UrlAsyncModeration',
        2 => 'DescribeUrlModerationResult',
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
    'TextModeration' => 
    array (
      'summary' => '采用动态策略和模型强化变异对抗性，提供多种业务场景的审核服务，识别出多种违规风险',
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
        'operationType' => 'get',
        'abilityTreeCode' => '128601',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang8G4HBD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务类型，包括：
nickname_detection：用户昵称
chat_detection：聊天互动
comment_detection：动态评论
pgc_detection：教学物料PGC',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'pgc_detection' => 'PGC通用物料检测',
              'nickname_detection' => '用户昵称检测',
              'comment_multilingual_pro' => '国际业务多语言检测',
              'chat_detection' => '私聊互动内容检测',
              'ad_compliance_detection' => '广告法合规检测',
              'comment_detection' => '公聊评论内容检测',
              'ai_art_detection' => 'AIGC类文字检测',
            ),
            'example' => 'nickname_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集。JSON字符串格式，关于每个字符串的描述',
            'type' => 'string',
            'required' => false,
            'example' => '{"content":"地图还是黑的"}',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****',
              ),
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求消息的响应消息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '审核结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'labels' => 
                  array (
                    'description' => '标签，多个用英文逗号分隔。包括：
ad：广告
profanity：辱骂
contraband：违禁品
sexual_content：色情
violence：暴恐
nonsense：灌水
spam：垃圾信息
negative_content：不良场景
cyberbullying：网络暴力
C_customized：用户库命中',
                    'type' => 'string',
                    'example' => 'porn',
                  ),
                  'reason' => 
                  array (
                    'description' => '原因定位的JSON字符串，包含以下字段：
riskTips：细分标签
riskWords：命中风险词
adNums：命中广告号
customizedWords：命中用户词
customizedLibs：命中用户词库名',
                    'type' => 'string',
                    'example' => '{\\"riskTips\\":\\"色情_低俗词\\",\\"riskWords\\":\\"色情服务\\"}',
                  ),
                  'accountId' => 
                  array (
                    'description' => '客户入参传入的accountId',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'deviceId' => 
                  array (
                    'description' => '客户入参传入的deviceId',
                    'type' => 'string',
                    'example' => 'xxxxxx',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"labels\\": \\"porn\\",\\n    \\"reason\\": \\"{\\\\\\\\\\\\\\"riskTips\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"色情_低俗词\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"riskWords\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"色情服务\\\\\\\\\\\\\\"}\\",\\n    \\"accountId\\": \\"123456\\",\\n    \\"deviceId\\": \\"xxxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '文本审核增强版',
      'description' => '请确保在使用该接口前，已充分了解文本审核增强版产品的[收费方式和价格](https://help.aliyun.com/document_detail/464388.html?#section-itm-m2s-ugq)。',
    ),
    'TextModerationPlus' => 
    array (
      'summary' => '文本审核增强版升级PLUS服务，面向大语言模型的输入指令和生成文字分别提供审核服务，特定的模型输入指令支持检索标准回答，同时开放审核标签的开启和关闭功能。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '207632',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwangXYAQ5C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'llm_response_moderation' => '大语言模型生成文字检测',
              'llm_query_moderation' => '大语言模型输入文字检测',
            ),
            'example' => 'llm_query_moderation',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集。JSON字符串格式',
            'type' => 'string',
            'required' => false,
            'example' => '{
        "content": "测试内容"
    }',
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
                'example' => 'AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '审核结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Label' => 
                        array (
                          'description' => '标签',
                          'type' => 'string',
                          'example' => 'porn',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '置信分值，0到100分，保留到小数点后2位。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '81.22',
                        ),
                        'RiskWords' => 
                        array (
                          'description' => '命中风险关键词',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'CustomizedHit' => 
                        array (
                          'description' => '自定义关键词命中',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'LibName' => 
                              array (
                                'description' => '库名称',
                                'type' => 'string',
                                'example' => '测试词库',
                              ),
                              'KeyWords' => 
                              array (
                                'description' => '命中的关键词，逗号分隔',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Advice' => 
                  array (
                    'description' => '建议',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '代答内容',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Answer' => 
                        array (
                          'description' => '回答',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'HitLabel' => 
                        array (
                          'type' => 'string',
                        ),
                        'HitLibName' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'Score' => 
                  array (
                    'description' => '分数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Result\\": [\\n      {\\n        \\"Label\\": \\"porn\\",\\n        \\"Confidence\\": 81.22,\\n        \\"RiskWords\\": \\"XXX\\",\\n        \\"CustomizedHit\\": [\\n          {\\n            \\"LibName\\": \\"测试词库\\",\\n            \\"KeyWords\\": \\"xxx\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"Advice\\": [\\n      {\\n        \\"Answer\\": \\"XXX\\",\\n        \\"HitLabel\\": \\"\\",\\n        \\"HitLibName\\": \\"\\"\\n      }\\n    ],\\n    \\"Score\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '文本审核Plus版',
      'description' => '请确保在使用该接口前，已充分了解文本审核增强PLUS版产品的[收费方式和价格](https://help.aliyun.com/document_detail/2671445.html?#section-6od-32j-99n)。',
    ),
    'ImageModeration' => 
    array (
      'summary' => '图片审核增强版API用于识别图像中是否有违反网络内容传播相关规定、影响平台内容秩序、影响用户体验的内容或元素，支持90+的内容风险标签和100+的风险管控项。通过内容安全的图片审核增强版，您可以根据业务所处的行业场景规范或平台内容治理规则，基于API返回的丰富的风险标签和置信分，对具体图片内容制定进一步的审核或治理措施。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '142557',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang78REFZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片审核增强版支持的检测类型。取值：
- baselineCheck：通用基线检测
- baselineCheck_pro：通用基线检测_专业版
- baselineCheck_cb：通用基线检测_海外版
- tonalityImprove：内容治理检测
- aigcCheck：AIGC图片检测
- profilePhotoCheck：头像图片检测
- advertisingCheck：营销素材检测
- liveStreamCheck：视频/直播截图检测',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'liveStreamCheck' => '视频\\直播截图检测',
              'baselineCheck' => '通用基线检测',
              'aigcCheck' => 'AIGC图片检测',
              'baselineCheck_pro' => '通用基线检测_专业版',
              'advertisingCheck' => '营销素材检测',
              'baselineCheck_cb' => '通用基线检测_出海版',
              'tonalityImprove' => '内容治理检测',
              'profilePhotoCheck' => '头像图片检测',
            ),
            'example' => 'baselineCheck',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内容检测对象的相关参数集。JSON字符串格式。

- imageUrl：待检测对象的URL，必填。

- dataId：检测对象对应的数据ID，可选。',
            'type' => 'string',
            'required' => false,
            'example' => '{"imageUrl":"https://img.alicdn.com/tfs/TB1U4r9AeH2gK0jSZJnXXaT1FXa-2880-480.png","dataId":"img1234567"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Body返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6CF2815C-C8C7-4A01-B52E-FF6E24F53492',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '本次请求的响应消息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '图片内容检测后的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DataId' => 
                  array (
                    'description' => '检测对象对应的数据ID。

> 如果在检测请求参数中传入了dataId，则此处返回对应的dataId。',
                    'type' => 'string',
                    'example' => 'fb5ffab1-993b-449f-b8d6-b97d5e3331f2',
                  ),
                  'Result' => 
                  array (
                    'description' => '图片检测的风险标签、置信分等参数结果，数组结构。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Label' => 
                        array (
                          'description' => '图片内容检测运算后返回的标签。同一张图片可能会检出多个标签和分值。',
                          'type' => 'string',
                          'example' => 'violent_explosion',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '置信分值，0到100分，保留到小数点后2位。部分标签无置信分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '81.22',
                        ),
                      ),
                    ),
                  ),
                  'Ext' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Recognition' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Classification' => 
                            array (
                              'type' => 'string',
                            ),
                            'Confidence' => 
                            array (
                              'type' => 'number',
                              'format' => 'float',
                            ),
                          ),
                        ),
                      ),
                      'OcrResult' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Text' => 
                            array (
                              'type' => 'string',
                            ),
                            'Location' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'X' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'Y' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'W' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'H' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'TextInImage' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OcrResult' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Text' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Location' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'X' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                    'Y' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                    'H' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                    'W' => 
                                    array (
                                      'type' => 'integer',
                                      'format' => 'int32',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'RiskWord' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'CustomText' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'LibId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'LibName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'KeyWords' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'CustomImage' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'LibId' => 
                            array (
                              'type' => 'string',
                            ),
                            'ImageId' => 
                            array (
                              'type' => 'string',
                            ),
                            'LibName' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                      'PublicFigure' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FigureName' => 
                            array (
                              'type' => 'string',
                            ),
                            'FigureId' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                      'LogoData' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Location' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'X' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'Y' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'W' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'H' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                              ),
                            ),
                            'Logo' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Label' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                  'Name' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                  'Confidence' => 
                                  array (
                                    'type' => 'number',
                                    'format' => 'float',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-C8C7-4A01-B52E-FF6E24F53492\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DataId\\": \\"fb5ffab1-993b-449f-b8d6-b97d5e3331f2\\",\\n    \\"Result\\": [\\n      {\\n        \\"Label\\": \\"violent_explosion\\",\\n        \\"Confidence\\": 81.22\\n      }\\n    ],\\n    \\"Ext\\": {\\n      \\"Recognition\\": [\\n        {\\n          \\"Classification\\": \\"\\",\\n          \\"Confidence\\": 0\\n        }\\n      ],\\n      \\"OcrResult\\": [\\n        {\\n          \\"Text\\": \\"\\",\\n          \\"Location\\": {\\n            \\"X\\": 0,\\n            \\"Y\\": 0,\\n            \\"W\\": 0,\\n            \\"H\\": 0\\n          }\\n        }\\n      ],\\n      \\"TextInImage\\": {\\n        \\"OcrResult\\": [\\n          {\\n            \\"Text\\": \\"\\",\\n            \\"Location\\": {\\n              \\"X\\": 0,\\n              \\"Y\\": 0,\\n              \\"H\\": 0,\\n              \\"W\\": 0\\n            }\\n          }\\n        ],\\n        \\"RiskWord\\": [\\n          \\"\\"\\n        ],\\n        \\"CustomText\\": [\\n          {\\n            \\"LibId\\": \\"\\",\\n            \\"LibName\\": \\"\\",\\n            \\"KeyWords\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"CustomImage\\": [\\n        {\\n          \\"LibId\\": \\"\\",\\n          \\"ImageId\\": \\"\\",\\n          \\"LibName\\": \\"\\"\\n        }\\n      ],\\n      \\"PublicFigure\\": [\\n        {\\n          \\"FigureName\\": \\"\\",\\n          \\"FigureId\\": \\"\\"\\n        }\\n      ],\\n      \\"LogoData\\": [\\n        {\\n          \\"Location\\": {\\n            \\"X\\": 0,\\n            \\"Y\\": 0,\\n            \\"W\\": 0,\\n            \\"H\\": 0\\n          },\\n          \\"Logo\\": [\\n            {\\n              \\"Label\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '图片审核增强版',
      'description' => '**请确保在使用该接口前，已充分了解图片审核增强版产品的[收费方式](~~467826~~)和[价格](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag)。**',
      'requestParamsDescription' => '业务参数的请求示例：
```JSON
{
    "service": "baselineCheck",
    "serviceParameters": 
    {
        "imageUrl": "https://img.alicdn.com/tfs/TB1U4r9AeH2gK0jSZJnXXaT1FXa-2880-480.png",
        "dataId": "img1234567"
    }
}
```',
      'responseParamsDescription' => '返回参数示例
```
{
    "Msg": "OK",
    "Code": 200,
    "Data": {
        "dataId": "img1234567",
        "result": [
            {
                "label": "pornographic_adultContent",
                "confidence": 81
            },
            {
                "label": "sexual_partialNudity",
                "confidence": 98
            },
            {
                "label": "violent_explosion",
                "confidence": 70
            },
            {
                "label": "violent_explosion_lib",
                "confidence": 81
            }
        ]
    },
    "RequestId": "ABCD1234-1234-1234-1234-1234XYZ"
}
```',
      'extraInfo' => '无',
    ),
    'ImageAsyncModeration' => 
    array (
      'summary' => '图片异步检测接口，异步检测任务不会实时返回检测结果，您需要通过callback或者轮询的方式获取检测结果。检测结果最长保留3天。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '197491',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang78REFZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片检测增强版支持的检测服务。取值：
- baselineCheck：通用基线检测
- baselineCheck_pro：通用基线检测_专业版
- baselineCheck_cb：通用基线检测_海外版
- tonalityImprove：内容治理检测
- aigcCheck：AIGC图片检测
- profilePhotoCheck：头像图片检测
- advertisingCheck：营销素材检测
- liveStreamCheck：视频\\直播截图检测',
            'type' => 'string',
            'required' => false,
            'example' => 'baselineCheck',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容检测对象的相关参数集。JSON字符串格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"imageUrl":"https://img.alicdn.com/tfs/TB1U4r9AeH2gK0jSZJnXXaT1FXa-2880-480.png","dataId":"img123****"}',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '4A926AE2-4C96-573F-824F-0532960799F8',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '本次请求的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '图片异步检测后的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ReqId' => 
                  array (
                    'description' => '图片异步审核增强版API返回的reqId字段，可用此字段查询检测结果。',
                    'type' => 'string',
                    'example' => 'A07B3DB9-D762-5C56-95B1-8EC55CF176D2',
                  ),
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => 'fb5ffab1-993b-449f-b8d6-b97d5e3331f2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A926AE2-4C96-573F-824F-0532960799F8\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ReqId\\": \\"A07B3DB9-D762-5C56-95B1-8EC55CF176D2\\",\\n    \\"DataId\\": \\"fb5ffab1-993b-449f-b8d6-b97d5e3331f2\\"\\n  }\\n}","type":"json"}]',
      'title' => '图片异步检测',
      'description' => '- 图片支持以下格式：PNG、JPG、JPEG、BMP、WEBP、TIFF、ICO、HEIC、SVG。

 - 图片大小限制在10MB以内，像素建议大于200*200（px），像素过低会影响内容安全检测算法的效果。

- 图片下载时间限制为3秒内，如果下载时间超过3秒，返回下载超时。',
      'responseParamsDescription' => '以下为接口返回code的含义说明。

| **Code** | **说明** |
| --- | --- |
| 200 | 请求正常。 |
| 400 | 请求参数为空。 |
| 401 | 请求参数错误。 |
| 402 | 请求参数长度不符合接口规定，请检查并修改。 |
| 403 | 请求超过QPS限制，请检查并调整并发。 |
| 408 | 该账号无权限调用该接口，可能是账号未开通或者已欠费，或者调用账号未被授权访问。 |
| 500 | 系统异常。 |',
    ),
    'DescribeImageModerationResult' => 
    array (
      'summary' => '获取图片审核增强版审核任务结果。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '198839',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwangLRLIH6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReqId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片异步审核增强版API返回的ReqId字段',
            'type' => 'string',
            'required' => false,
            'example' => 'B0963D30-BAB4-562F-9ED0-7A23AEC51C7C',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '2881AD4F-638B-52A3-BA20-F74C5B1CEAE3',
              ),
              'Code' => 
              array (
                'description' => '错误码，和HTTP状态码一致。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '本次请求的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '图片内容检测后的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => '2a5389eb-4ff8-4584-ac99-644e2a539aa1',
                  ),
                  'Result' => 
                  array (
                    'description' => '图片检测的风险标签、置信分等参数结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Label' => 
                        array (
                          'description' => '图片内容检测运算后返回的标签。',
                          'type' => 'string',
                          'example' => 'violent_explosion',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '置信分值，0到100分，保留到小数点后2位。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '81.22',
                        ),
                      ),
                    ),
                  ),
                  'FrameNum' => 
                  array (
                    'description' => '结果帧数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Frame' => 
                  array (
                    'description' => '图片截帧信息。',
                    'type' => 'string',
                    'example' => '[{"result":[{"confidence":81.22,"label":"violent_explosion"}]}]',
                  ),
                  'ReqId' => 
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2881AD4F-638B-52A3-BA20-F74C5B1CEAE3\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"DataId\\": \\"2a5389eb-4ff8-4584-ac99-644e2a539aa1\\",\\n    \\"Result\\": [\\n      {\\n        \\"Label\\": \\"violent_explosion\\",\\n        \\"Confidence\\": 81.22\\n      }\\n    ],\\n    \\"FrameNum\\": 1,\\n    \\"Frame\\": \\"[{\\\\\\"result\\\\\\":[{\\\\\\"confidence\\\\\\":81.22,\\\\\\"label\\\\\\":\\\\\\"violent_explosion\\\\\\"}]}]\\",\\n    \\"ReqId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询图片异步检测结果',
      'description' => '- 计费信息：该接口不计费。
- QPS限流：本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => '以下为接口返回code的含义说明，系统仅对code返回为200的请求计量计费，其他code不会计费。

| **Code** | **说明** |
| --- | --- |
| 200 | 请求正常。 |
| 280 | 检测中。 |
| 400 | 请求参数为空。 |
| 401 | 请求参数错误。 |
| 402 | 请求参数长度不符合接口规定，请检查并修改。 |
| 403 | 请求超过QPS限制，请检查并调整并发。 |
| 404 | 传入的图片下载遇到错误，请检查或重试。 |
| 405 | 传入的图片下载超时，可能是因为图片无法访问，请检查调整后重试。 |
| 406 | 传入的图片过大，请检查调整图片大小后再重试。 |
| 407 | 传入的图片格式暂不支持，请检查调整后重试。 |
| 408 | 该账号无权限调用该接口，可能是账号未开通或者已欠费，或者调用账号未被授权访问。 |
| 409 | 传入的reqId不存在，可能是查询间隔过快，或者已经超过30天有效期。 |
| 500 | 系统异常。 |',
    ),
    'VoiceModeration' => 
    array (
      'summary' => '提交语音审核增强版检测任务。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '162159',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang6QCU1H',
          1 => 'FEATURElvwangPAXR7J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '语音审核ServiceCode',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'audio_media_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集，JSON字符串格式。

url：必填，待检测对象的URL，请确保该URL能通过公网访问到。
dataId：选填，检测对象对应的数据ID。
更多信息，请参见ServiceParameter。',
            'type' => 'string',
            'required' => false,
            'example' => '{"url": "http://aliyundoc.com/test.flv", "dataId": "data1234"}',
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
                'example' => 'AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****',
              ),
              'Code' => 
              array (
                'description' => '错误代码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Data' => 
              array (
                'description' => '返回任务信息数据结构',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务Id',
                    'type' => 'string',
                    'example' => 'xxxxx-xxxxx',
                  ),
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => 'data1234',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"xxxxx-xxxxx\\",\\n    \\"DataId\\": \\"data1234\\"\\n  }\\n}","type":"json"}]',
      'title' => '语音审核增强版任务提交',
    ),
    'VoiceModerationResult' => 
    array (
      'summary' => '语音审核增强版检测结果获取接口。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '162180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang6QCU1H',
          1 => 'FEATURElvwangPAXR7J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务类型，包括：
nickname_detection：用户昵称
待定',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nickname_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网关向后端服务发送API请求的参数描述。

更多信息，请参见[ServiceParameter](~~43988~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '暂无',
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
                'example' => '2881AD4F-638B-52A3-BA20-F74C5B1CEAE3',
              ),
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求消息的响应消息。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '任务URL',
                    'type' => 'string',
                    'example' => '暂无',
                  ),
                  'LiveId' => 
                  array (
                    'description' => '直播的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'liveId',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'kw24ihd0WGkdi5nniVZM@qOj-1x5Ibb',
                  ),
                  'SliceDetails' => 
                  array (
                    'description' => '分段结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分段结果条目',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StartTime' => 
                        array (
                          'description' => '分段开始时间(秒)',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '分段结束时间(秒)',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'StartTimestamp' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'EndTimestamp' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Url' => 
                        array (
                          'description' => '分段语音文件临时地址',
                          'type' => 'string',
                          'example' => '暂无',
                        ),
                        'Text' => 
                        array (
                          'description' => '分段语音转写文本',
                          'type' => 'string',
                          'example' => '今天天气真不错',
                        ),
                        'Labels' => 
                        array (
                          'description' => '命中违规标签',
                          'type' => 'string',
                          'example' => 'sexual_sounds',
                        ),
                        'Score' => 
                        array (
                          'description' => '风险分数，默认范围 0-99',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '87.01',
                        ),
                        'Extend' => 
                        array (
                          'description' => '扩展字段',
                          'type' => 'string',
                          'example' => '{\\"riskWords\\":\\"色情服务\\","adNums":"\\","riskTips":"涉政_人物，涉政_红歌"}',
                        ),
                        'RiskTips' => 
                        array (
                          'description' => '命中风险详情',
                          'type' => 'string',
                          'example' => '涉政_人物',
                        ),
                        'RiskWords' => 
                        array (
                          'description' => '命中风险关键词',
                          'type' => 'string',
                          'example' => '色情服务',
                        ),
                        'OriginAlgoResult' => 
                        array (
                          'description' => '保留字段',
                          'type' => 'object',
                        ),
                      ),
                    ),
                  ),
                  'DataId' => 
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2881AD4F-638B-52A3-BA20-F74C5B1CEAE3\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"暂无\\",\\n    \\"LiveId\\": \\"liveId\\",\\n    \\"TaskId\\": \\"kw24ihd0WGkdi5nniVZM@qOj-1x5Ibb\\",\\n    \\"SliceDetails\\": [\\n      {\\n        \\"StartTime\\": 0,\\n        \\"EndTime\\": 10,\\n        \\"StartTimestamp\\": 0,\\n        \\"EndTimestamp\\": 0,\\n        \\"Url\\": \\"暂无\\",\\n        \\"Text\\": \\"今天天气真不错\\",\\n        \\"Labels\\": \\"sexual_sounds\\",\\n        \\"Score\\": 87.01,\\n        \\"Extend\\": \\"{\\\\\\\\\\\\\\"riskWords\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"色情服务\\\\\\\\\\\\\\",\\\\\\"adNums\\\\\\":\\\\\\"\\\\\\\\\\\\\\",\\\\\\"riskTips\\\\\\":\\\\\\"涉政_人物，涉政_红歌\\\\\\"}\\",\\n        \\"RiskTips\\": \\"涉政_人物\\",\\n        \\"RiskWords\\": \\"色情服务\\",\\n        \\"OriginAlgoResult\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ],\\n    \\"DataId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询语音审核结果',
    ),
    'VoiceModerationCancel' => 
    array (
      'summary' => '语音审核增强版取消任务接口。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '164076',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang6QCU1H',
          1 => 'FEATURElvwangPAXR7J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务类型，包括：
nickname_detection：用户昵称
待定',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nickname_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待取消任务TaskId',
            'type' => 'string',
            'required' => false,
            'example' => '{
        "taskId": "xxxxx-xxxx"
    }',
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
                'example' => '4A926AE2-4C96-573F-824F-0532960799F8',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求消息的响应消息。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A926AE2-4C96-573F-824F-0532960799F8\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
      'title' => '取消语音流审核任务',
    ),
    'VideoModeration' => 
    array (
      'summary' => '内容安全视频审核增强版，帮助您检测视频文件中的风险或违规内容。本接口为检测任务提交接口。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '187556',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang53TCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视频审核ServiceCode',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'liveStreamDetection' => '视频直播流审核',
              'videoDetection' => '视频文件审核',
              'liveStreamDetection_cb' => '视频直播流审核_海外版',
              'videoDetection_cb' => '视频文件审核_海外版',
            ),
            'example' => 'videoDetection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集，JSON字符串格式。
- url：必填，待检测对象的URL，请确保该URL能通过公网访问到。
- dataId：选填，检测对象对应的数据ID。

更多信息，请参见[ServiceParameter](https://help.aliyun.com/document_detail/2505810.html)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"url": "https://talesofai.oss-cn-shanghai.aliyuncs.com/xxx.mp4", "dataId": "data1234"}',
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
                'example' => 'AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****',
              ),
              'Message' => 
              array (
                'description' => '请求消息的响应消息。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'xxxxx-xxxxx',
                  ),
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => 'data1234',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"xxxxx-xxxxx\\",\\n    \\"DataId\\": \\"data1234\\"\\n  }\\n}","type":"json"}]',
      'title' => '视频审核增强版任务提交',
      'description' => '请确保在使用该接口前，已[开通内容安全增强版](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn)服务，并充分了解视频审核增强版产品的[收费方式](https://help.aliyun.com/document_detail/2505807.html)和[价格](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag)。',
    ),
    'VideoModerationResult' => 
    array (
      'summary' => '获取视频审核增强版审核任务结果。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '187919',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang53TCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视频审核ServiceCode',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'liveStreamDetection' => '视频直播流审核',
              'videoDetection' => '视频文件审核',
              'liveStreamDetection_cb' => '视频直播流审核_海外版',
              'videoDetection_cb' => '视频文件审核_海外版',
            ),
            'example' => 'videoDetection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集。taskId，即要查询的检测任务的taskId，每次支持输入一个taskId。',
            'type' => 'string',
            'required' => false,
            'example' => '{"taskId":"au_f_8PoWiZKoLbczp5HRn69VdT-1y8@U5"}',
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
                'example' => '6CF2815C-C8C7-4A01-B52E-FF6E24F53492',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success finished',
              ),
              'Data' => 
              array (
                'description' => '审核结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'description' => '直播的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'liveId',
                  ),
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => 'product_content-2055763',
                  ),
                  'AudioResult' => 
                  array (
                    'description' => '视频语音审核分段结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SliceDetails' => 
                      array (
                        'description' => '语音分段列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '分段详情',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'StartTime' => 
                            array (
                              'description' => '分段开始时间(秒)',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'EndTime' => 
                            array (
                              'description' => '分段结束时间(秒)',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '30',
                            ),
                            'StartTimestamp' => 
                            array (
                              'description' => '开始时间戳，精确到毫秒',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1659935002123',
                            ),
                            'EndTimestamp' => 
                            array (
                              'description' => '结束时间戳',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1685245261939',
                            ),
                            'Url' => 
                            array (
                              'description' => '分段语音文件临时地址',
                              'type' => 'string',
                              'example' => 'http://xxxx.abc.img',
                            ),
                            'Text' => 
                            array (
                              'description' => '分段语音转写文本',
                              'type' => 'string',
                              'example' => '今天天气真不错',
                            ),
                            'Labels' => 
                            array (
                              'description' => '命中违规标签',
                              'type' => 'string',
                              'example' => 'porn',
                            ),
                            'Score' => 
                            array (
                              'description' => '风险分数，默认范围 0-99',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '5',
                            ),
                            'Extend' => 
                            array (
                              'description' => '扩展字段',
                              'type' => 'string',
                              'example' => '{\\"consoleProduct\\":\\"slbnext\\"}',
                            ),
                            'RiskTips' => 
                            array (
                              'description' => '命中风险详情',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'RiskWords' => 
                            array (
                              'description' => '命中风险关键词',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                        ),
                      ),
                      'AudioSummarys' => 
                      array (
                        'description' => '语音标签汇总。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '对象',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Label' => 
                            array (
                              'description' => '视频语音标签。',
                              'type' => 'string',
                              'example' => 'profanity',
                            ),
                            'LabelSum' => 
                            array (
                              'description' => '标签出现次数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'FrameResult' => 
                  array (
                    'description' => '视频截帧结果列表',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FrameNum' => 
                      array (
                        'description' => '结果帧数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Frames' => 
                      array (
                        'description' => '包含命中标签的视频截帧的信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '对象',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TempUrl' => 
                            array (
                              'description' => '截帧图片临时访问地址',
                              'type' => 'string',
                              'example' => 'http://xxxx.abc.jpg',
                            ),
                            'Offset' => 
                            array (
                              'description' => '截帧偏移值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '338',
                            ),
                            'Results' => 
                            array (
                              'description' => '帧检测结果详情',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '对象',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Service' => 
                                  array (
                                    'description' => '图片审核服务类型',
                                    'type' => 'string',
                                    'example' => 'tonalityImprove',
                                  ),
                                  'Result' => 
                                  array (
                                    'description' => '命中结果详情',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '对象',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'Confidence' => 
                                        array (
                                          'description' => '置信分值，0到100分，保留到小数点后2位。',
                                          'type' => 'number',
                                          'format' => 'float',
                                          'example' => '50',
                                        ),
                                        'Label' => 
                                        array (
                                          'description' => '检测结果的分类',
                                          'type' => 'string',
                                          'example' => 'bloody',
                                        ),
                                      ),
                                    ),
                                  ),
                                  'TextInImage' => 
                                  array (
                                    'description' => '返回命中的图片中文字信息。',
                                    'type' => 'object',
                                  ),
                                  'CustomImage' => 
                                  array (
                                    'description' => '如果命中自定义图库，返回命中的自定义图库信息。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '对象',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'LibId' => 
                                        array (
                                          'description' => '命中的自定义图库ID。',
                                          'type' => 'string',
                                          'example' => '12345678',
                                        ),
                                        'ImageId' => 
                                        array (
                                          'description' => '命中的自定义图片ID。',
                                          'type' => 'string',
                                          'example' => '1234',
                                        ),
                                      ),
                                    ),
                                  ),
                                  'PublicFigure' => 
                                  array (
                                    'description' => '视频中包含特定人物时，返回识别出来的人物编码。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '对象',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'FigureId' => 
                                        array (
                                          'description' => '识别出的人物编码信息。',
                                          'type' => 'string',
                                          'example' => 'xxx001',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Timestamp' => 
                            array (
                              'description' => '绝对时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1684559739000',
                            ),
                          ),
                        ),
                      ),
                      'FrameSummarys' => 
                      array (
                        'description' => '视频截帧标签汇总。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Label' => 
                            array (
                              'description' => '视频截帧标签。',
                              'type' => 'string',
                              'example' => 'violent_armedForces',
                            ),
                            'LabelSum' => 
                            array (
                              'description' => '标签出现次数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'xxxxx-xxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-C8C7-4A01-B52E-FF6E24F53492\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success finished\\",\\n  \\"Data\\": {\\n    \\"LiveId\\": \\"liveId\\",\\n    \\"DataId\\": \\"product_content-2055763\\",\\n    \\"AudioResult\\": {\\n      \\"SliceDetails\\": [\\n        {\\n          \\"StartTime\\": 0,\\n          \\"EndTime\\": 30,\\n          \\"StartTimestamp\\": 1659935002123,\\n          \\"EndTimestamp\\": 1685245261939,\\n          \\"Url\\": \\"http://xxxx.abc.img\\",\\n          \\"Text\\": \\"今天天气真不错\\",\\n          \\"Labels\\": \\"porn\\",\\n          \\"Score\\": 5,\\n          \\"Extend\\": \\"{\\\\\\\\\\\\\\"consoleProduct\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"slbnext\\\\\\\\\\\\\\"}\\",\\n          \\"RiskTips\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"RiskWords\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"AudioSummarys\\": [\\n        {\\n          \\"Label\\": \\"profanity\\",\\n          \\"LabelSum\\": 8\\n        }\\n      ]\\n    },\\n    \\"FrameResult\\": {\\n      \\"FrameNum\\": 10,\\n      \\"Frames\\": [\\n        {\\n          \\"TempUrl\\": \\"http://xxxx.abc.jpg\\",\\n          \\"Offset\\": 338,\\n          \\"Results\\": [\\n            {\\n              \\"Service\\": \\"tonalityImprove\\",\\n              \\"Result\\": [\\n                {\\n                  \\"Confidence\\": 50,\\n                  \\"Label\\": \\"bloody\\"\\n                }\\n              ],\\n              \\"TextInImage\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"CustomImage\\": [\\n                {\\n                  \\"LibId\\": \\"12345678\\",\\n                  \\"ImageId\\": \\"1234\\"\\n                }\\n              ],\\n              \\"PublicFigure\\": [\\n                {\\n                  \\"FigureId\\": \\"xxx001\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"Timestamp\\": 1684559739000\\n        }\\n      ],\\n      \\"FrameSummarys\\": [\\n        {\\n          \\"Label\\": \\"violent_armedForces\\",\\n          \\"LabelSum\\": 8\\n        }\\n      ]\\n    },\\n    \\"TaskId\\": \\"xxxxx-xxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询视频审核任务结果',
      'description' => '该接口不计费，建议您将查询间隔设置为30秒（即在提交异步检测任务30秒后查询结果），最长不能超出24小时，否则结果将会自动删除。',
    ),
    'VideoModerationCancel' => 
    array (
      'summary' => '取消视频直播审核任务',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '201471',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang53TCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'liveStreamDetection' => '视频直播流检测',
              'videoDetection' => '视频文件检测',
              'liveStreamDetection_cb' => '视频直播流审核_海外版',
              'videoDetection_cb' => '视频文件审核_海外版',
            ),
            'example' => 'videoDetection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待取消任务TaskId',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"taskId\\":\\"vi_s_4O9gp7GfNQdx9GOqdekFmk-1z2RJT\\"}',
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
                'example' => '6CF2815C-****-****-B52E-FF6E2****492',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-****-****-B52E-FF6E2****492\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '取消视频直播审核任务',
    ),
    'FileModeration' => 
    array (
      'summary' => '文档检测',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '204033',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwangCXKRID',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件检测增强版支持的服务',
            'type' => 'string',
            'required' => false,
            'example' => 'document_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集，JSON字符串格式。
- url：必填，待检测对象的URL，请确保该URL能通过公网访问到。
- dataId：选填，检测对象对应的数据ID。',
            'type' => 'string',
            'required' => false,
            'example' => '{"url":"https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.pdf"}',
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
                'example' => 'AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'description' => '错误码，和HTTP状态码一致。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'xxxxx-xxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"xxxxx-xxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '文档检测任务提交',
    ),
    'DescribeFileModerationResult' => 
    array (
      'summary' => '文档审核结果',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '205895',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang6CEZ66',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件检测增强版支持的服务',
            'type' => 'string',
            'required' => false,
            'example' => 'document_detection',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '审核服务需要的参数集，JSON字符串格式。
- taskId：必填，待检测对象的URL，请确保该URL能通过公网访问到。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"taskId\\":\\"vi_f_hPgx9PFIQISdlfA888hOFG-1yJq8v\\"}',
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
                'example' => '6CF2815C-C8C7-4A01-B52E-FF6E24F53492',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DataId' => 
                  array (
                    'description' => '数据ID。',
                    'type' => 'string',
                    'example' => '26769ada6e264e7ba9aa048241e12be9',
                  ),
                  'Url' => 
                  array (
                    'description' => '文件下载URL路径。',
                    'type' => 'string',
                    'example' => 'https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.pdf',
                  ),
                  'DocType' => 
                  array (
                    'description' => '可选，文档类型',
                    'type' => 'string',
                    'example' => 'doc',
                  ),
                  'PageResult' => 
                  array (
                    'description' => '检测结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '结果内容',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PageNum' => 
                        array (
                          'description' => '页码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ImageUrl' => 
                        array (
                          'description' => '图片地址',
                          'type' => 'string',
                          'example' => 'https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.jpg',
                        ),
                        'TextUrl' => 
                        array (
                          'description' => '文本内容保存地址',
                          'type' => 'string',
                          'example' => 'https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.txt',
                        ),
                        'ImageResult' => 
                        array (
                          'description' => '图片检测结果',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '结果内容',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Description' => 
                              array (
                                'description' => '描述',
                                'type' => 'string',
                                'example' => '这个是标题',
                              ),
                              'Service' => 
                              array (
                                'description' => '调用的服务',
                                'type' => 'string',
                                'example' => 'baselineCheck',
                              ),
                              'Location' => 
                              array (
                                'description' => '位置信息',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'X' => 
                                  array (
                                    'description' => '坐标点的X值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '11',
                                  ),
                                  'Y' => 
                                  array (
                                    'description' => '坐标点的Y值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '22',
                                  ),
                                  'W' => 
                                  array (
                                    'description' => '坐标点的W值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '33',
                                  ),
                                  'H' => 
                                  array (
                                    'description' => '坐标点的H值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '44',
                                  ),
                                ),
                              ),
                              'LabelResult' => 
                              array (
                                'description' => '标签信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Label' => 
                                    array (
                                      'description' => '标签',
                                      'type' => 'string',
                                      'example' => 'nonlabel',
                                    ),
                                    'Confidence' => 
                                    array (
                                      'description' => '分险分',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '25.0',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'TextResult' => 
                        array (
                          'description' => '文本审核结果。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '结果内容',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Description' => 
                              array (
                                'description' => '描述',
                                'type' => 'string',
                                'example' => '这是一个标题',
                              ),
                              'Service' => 
                              array (
                                'description' => '服务',
                                'type' => 'string',
                                'example' => 'chat_detection',
                              ),
                              'Text' => 
                              array (
                                'description' => '文本内容',
                                'type' => 'string',
                                'example' => '吧啦吧啦',
                              ),
                              'TextSegment' => 
                              array (
                                'description' => '文本分段信息',
                                'type' => 'string',
                                'example' => '[0,999]',
                              ),
                              'Labels' => 
                              array (
                                'description' => '标签的值。',
                                'type' => 'string',
                                'example' => 'porn',
                              ),
                              'RiskWords' => 
                              array (
                                'description' => '命中风险关键词',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                              'RiskTips' => 
                              array (
                                'description' => '命中风险详情',
                                'type' => 'string',
                                'example' => 'xxx',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-C8C7-4A01-B52E-FF6E24F53492\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DataId\\": \\"26769ada6e264e7ba9aa048241e12be9\\",\\n    \\"Url\\": \\"https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.pdf\\",\\n    \\"DocType\\": \\"doc\\",\\n    \\"PageResult\\": [\\n      {\\n        \\"PageNum\\": 1,\\n        \\"ImageUrl\\": \\"https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.jpg\\",\\n        \\"TextUrl\\": \\"https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.txt\\",\\n        \\"ImageResult\\": [\\n          {\\n            \\"Description\\": \\"这个是标题\\",\\n            \\"Service\\": \\"baselineCheck\\",\\n            \\"Location\\": {\\n              \\"X\\": 11,\\n              \\"Y\\": 22,\\n              \\"W\\": 33,\\n              \\"H\\": 44\\n            },\\n            \\"LabelResult\\": [\\n              {\\n                \\"Label\\": \\"nonlabel\\",\\n                \\"Confidence\\": 25\\n              }\\n            ]\\n          }\\n        ],\\n        \\"TextResult\\": [\\n          {\\n            \\"Description\\": \\"这是一个标题\\",\\n            \\"Service\\": \\"chat_detection\\",\\n            \\"Text\\": \\"吧啦吧啦\\",\\n            \\"TextSegment\\": \\"[0,999]\\",\\n            \\"Labels\\": \\"porn\\",\\n            \\"RiskWords\\": \\"xxx\\",\\n            \\"RiskTips\\": \\"xxx\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询文档检测结果',
    ),
    'DescribeImageResultExt' => 
    array (
      'summary' => '图片审核增强版辅助信息API用于获取图片审核增强版API接口识别的更多辅助信息，包含图片文字识别结果、自定义图库命中信息等。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '178655',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwangLRLIH6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReqId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片审核增强版API返回的requestId字段',
            'type' => 'string',
            'required' => false,
            'example' => '638EDDC65C82AB39319A9F60',
          ),
        ),
        1 => 
        array (
          'name' => 'InfoType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要获取的信息内容，多个值使用英文逗号隔开，取值：
- customImage：自定义图库命中信息
- textInImage：图片中文字信息',
            'type' => 'string',
            'required' => false,
            'example' => 'customImage,textInImage',
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
                'example' => '6CF2815C-C8C7-4A01-B52E-FF6E24F53492',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '请求信息的响应信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CustomImage' => 
                  array (
                    'description' => '自定义图库命中信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自定义图库命中信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageId' => 
                        array (
                          'description' => '图片ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'LibName' => 
                        array (
                          'description' => '图库名。',
                          'type' => 'string',
                          'example' => '图库123',
                        ),
                        'LibId' => 
                        array (
                          'description' => '图库ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                      ),
                    ),
                  ),
                  'TextInImage' => 
                  array (
                    'description' => '返回命中的图片中文字信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OcrDatas' => 
                      array (
                        'description' => '返回识别到的图片中的文字信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '文字信息。',
                          'type' => 'string',
                          'example' => 'abcd',
                        ),
                      ),
                      'RiskWords' => 
                      array (
                        'description' => '命中风险关键词',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '文字信息。',
                          'type' => 'string',
                          'example' => 'abcd',
                        ),
                      ),
                      'CustomTexts' => 
                      array (
                        'description' => '当命中自定义文本库时，返回自定义库ID、自定义库名称和自定义词。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'LibId' => 
                            array (
                              'description' => '自定义库ID',
                              'type' => 'string',
                              'example' => '123456',
                            ),
                            'LibName' => 
                            array (
                              'description' => '自定义库名称。',
                              'type' => 'string',
                              'example' => '自定义库1',
                            ),
                            'KeyWords' => 
                            array (
                              'description' => '自定义词，多个词用逗号分隔。',
                              'type' => 'string',
                              'example' => '自定义词1,自定义词2',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'PublicFigure' => 
                  array (
                    'description' => '人物信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人物信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FigureId' => 
                        array (
                          'description' => '人物ID。',
                          'type' => 'string',
                          'example' => 'yzazhzou',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-C8C7-4A01-B52E-FF6E24F53492\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"CustomImage\\": [\\n      {\\n        \\"ImageId\\": \\"123456\\",\\n        \\"LibName\\": \\"图库123\\",\\n        \\"LibId\\": \\"123456\\"\\n      }\\n    ],\\n    \\"TextInImage\\": {\\n      \\"OcrDatas\\": [\\n        \\"abcd\\"\\n      ],\\n      \\"RiskWords\\": [\\n        \\"abcd\\"\\n      ],\\n      \\"CustomTexts\\": [\\n        {\\n          \\"LibId\\": \\"123456\\",\\n          \\"LibName\\": \\"自定义库1\\",\\n          \\"KeyWords\\": \\"自定义词1,自定义词2\\"\\n        }\\n      ]\\n    },\\n    \\"PublicFigure\\": [\\n      {\\n        \\"FigureId\\": \\"yzazhzou\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '图片辅助信息获取接口',
      'description' => '本接口需要配合图片审核增强版API使用，在调用图片审核增强版API接口之后，可以调用本接口，获取更多的接口检测信息。此接口免费。',
      'requestParamsDescription' => '建议调用图片审核增强版接口5秒钟之后查询，辅助信息存储最长时间为30天，建议您需要时及时获取辅助信息，并做好日志存储。',
    ),
    'UrlAsyncModeration' => 
    array (
      'summary' => 'URL异步检测服务，识别URL链接是否存在欺诈、色情、赌博等风险，守护平台内容生态。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '211718',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang7UL554',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Service',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称：URL风险链接检测',
            'type' => 'string',
            'required' => false,
            'example' => 'URL风险链接检测：url_detection_pro',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容检测对象的相关参数集，JSON字符串格式，请参见ServiceParameters说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{
        "url": "https://help.aliyun.com/",
        "dataId": "url123******"
}',
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
                'example' => '6CF2815C-****-****-B52E-FF6E2****492',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '本次请求的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ReqId' => 
                  array (
                    'description' => 'URL 异步审核增强版API返回的ReqId字段，可用此字段查询检测结果。',
                    'type' => 'string',
                    'example' => 'A07B3DB9-D762-5C56-95B1-8EC55CF176D2',
                  ),
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => '26769ada6e264e7ba9aa048241e12be9',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF2815C-****-****-B52E-FF6E2****492\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ReqId\\": \\"A07B3DB9-D762-5C56-95B1-8EC55CF176D2\\",\\n    \\"DataId\\": \\"26769ada6e264e7ba9aa048241e12be9\\"\\n  }\\n}","type":"json"}]',
      'title' => 'URL风险异步检测',
      'description' => 'URL 异步检测服务支持按量后付费和资源包抵扣两种付费方式。

- 当您开通文本审核增强版服务后，默认付费方式是按量后付费，且按照实际用量结算当日费用，不调用服务不收费，30元/万次。

- 如果您的审核量较大，或有相对固定的审核需求，建议预先购买资源包的方式。购买资源包规格越大，享受的折扣越大，支持叠加购买和使用。',
      'requestParamsDescription' => '### ServiceParameters 说明
| **名称** | **类型** | **是否必选** | **示例值** | **描述** |
| --- | --- | --- | --- | --- |
| url | String | 是 | [https://help.aliyun.com/](https://help.aliyun.com/) | 待检测的URL。说明 请确保该URL符合URL格式要求。且一次请求请确保仅传入1条URL。 |
| **dataId** | String | 否 | url123**** | 检测对象对应的数据ID。由大小写英文字母、数字、下划线（_）、短划线（-）、英文句号（.）组成，不超过64个字符，可以用于唯一标识您的业务数据。 |
| **callback** | String | 否 | http://www.aliyun.com | 检测结果回调通知您的URL，支持使用HTTP和HTTPS协议的地址。该字段为空时，您必须定时轮询检测结果。callback接口必须支持POST方法、UTF-8编码的传输数据，以及表单参数**ReqId**，**Checksum**和**Content**。内容安全按照以下规则和格式设置**ReqId**，**Checksum**和**Content**，调用您的callback接口返回检测结果。- **ReqId**：提交异步检测任务返回的请求ID。- **Checksum**：字符串格式，由用户uid + seed + content拼成字符串，通过SHA256算法生成。用户UID即阿里云账号ID，可以在[阿里云控制台](https://account.console.aliyun.com/#/secure)查询。为防篡改，您可以在获取到推送结果时，按上述算法生成字符串，与**Checksum**做一次校验。**说明**用户UID必须是阿里云账号的UID，而不是RAM用户的UID。- **Content**：JSON字符串格式，请自行解析反转成JSON对象。关于**Content**结果的示例，请参见查询检测结果的返回示例。**说明** 您的服务端callback接口收到内容安全推送的结果后，如果返回的HTTP状态码为200，则表示接收成功，其他的HTTP状态码均视为接收失败。接收失败时，内容安全将最多重复推送16次检测结果，直到接收成功。重复推送16次后仍未接收成功，则不再推送，建议您检查callback接口的状态。 |
| **seed** | String | 否 | abc**** | 随机字符串，该值用于回调通知请求中的签名。由英文字母、数字、下划线（_）组成，不超过64个字符。由您自定义，用于在接收到内容安全的回调通知时校验请求由阿里云内容安全服务发起。**说明** 当使用callback时，该字段必须提供。 |
| **cryptType** | String | 否 | SHA256 | 使用回调通知时（callback），设置对回调通知内容进行加密的算法。内容安全会将返回结果（由**用户uid + seed + content**拼接的字符串）按照您设置的加密算法加密后，再发送到您的回调通知地址。取值：●**SHA256**（默认）：使用SHA256加密算法。●**SM3**：使用国密HMAC-SM3加密算法，返回十六进制的字符串，且字符串由小写字母和数字组成。例如，abc经国密SM3加密后返回。 |',
    ),
    'DescribeUrlModerationResult' => 
    array (
      'summary' => '根据 URL 异步检测返回的 ReqId查询检测结果。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '211720',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElvwang7UL554',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReqId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'URL异步检测接口返回的ReqId字段',
            'type' => 'string',
            'required' => false,
            'example' => 'B0963D30-BAB4-562F-9ED0-7A23AEC51C7C',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '01F9144A-2088-5D87-935B-2DB865284B1A',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Msg' => 
              array (
                'description' => '本次请求的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DataId' => 
                  array (
                    'description' => 'API请求时传入的dataId 的值，如请求时未传入，则没有该字段。',
                    'type' => 'string',
                    'example' => '26769ada6e264e7ba9aa048241e12be9',
                  ),
                  'ReqId' => 
                  array (
                    'description' => 'URL异步检测接口返回的ReqId字段',
                    'type' => 'string',
                    'example' => 'B0963D30-BAB4-562F-9ED0-7A23AEC51C7C
',
                  ),
                  'Result' => 
                  array (
                    'description' => '返回集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Label' => 
                        array (
                          'description' => 'URL检测运算后返回的标签。',
                          'type' => 'string',
                          'example' => 'sexual_url',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '置信分值，0到100分，保留到小数点后2位。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '81.22',
                        ),
                      ),
                    ),
                  ),
                  'ExtraInfo' => 
                  array (
                    'description' => '补充信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'IcpType' => 
                      array (
                        'description' => 'ICP备案类型。',
                        'type' => 'string',
                        'example' => '企业',
                      ),
                      'IcpNo' => 
                      array (
                        'description' => 'ICP备案号。',
                        'type' => 'string',
                        'example' => 'ICP备123456789',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01F9144A-2088-5D87-935B-2DB865284B1A\\",\\n  \\"Code\\": 200,\\n  \\"Msg\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"DataId\\": \\"26769ada6e264e7ba9aa048241e12be9\\",\\n    \\"ReqId\\": \\"B0963D30-BAB4-562F-9ED0-7A23AEC51C7C\\\\n\\",\\n    \\"Result\\": [\\n      {\\n        \\"Label\\": \\"sexual_url\\",\\n        \\"Confidence\\": 81.22\\n      }\\n    ],\\n    \\"ExtraInfo\\": {\\n      \\"IcpType\\": \\"企业\\",\\n      \\"IcpNo\\": \\"ICP备123456789\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询URL异步检测结果',
      'description' => '- 计费信息：该接口不计费。
- 查询超时：建议您将查询间隔设置为480秒（即在提交异步检测任务480秒之后查询结果），最长不能超出3天，否则结果将会自动删除。
- 本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'green-cip.cn-shenzhen.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'green-cip.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'green-cip.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'green-cip.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
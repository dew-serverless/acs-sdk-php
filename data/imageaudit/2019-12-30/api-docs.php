<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imageaudit',
    'version' => '2019-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64301,
      'title' => '内容安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ScanImage',
        1 => 'ScanText',
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
    'ScanImage' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Task',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'ImageTimeMillisecond' => 
                array (
                  'description' => '图片创建或编辑时间，单位为毫秒。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1',
                ),
                'Interval' => 
                array (
                  'description' => '截帧频率，GIF图或者长图检测专用。GIF图可理解为图片数组，每**interval**张图片抽取一张进行检测。只有该值存在时，才会对GIF进行截帧。长图同时支持长竖图和长横图。

- 长竖图（高大于400像素，高宽比大于2.5），会按照`高/宽`取整来计算总图数，并进行切割。

- 长横图（宽大于400像素，宽高比大于2.5），会按照`宽/高`取整来计算总图数，并进行切割。

> 默认只会检测GIF图或长图的第一帧，interval参数用于指示后台在检测时可按照该间隔跳着检测，以节省检测成本。需要与maxFrames参数组合使用。例如，设置interval为2，maxFrames为100，检测长图或GIF图时，将每间隔1帧检测一次，最多检测100帧，计费则按照实际检测的数量计算。
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ImageURL' => 
                array (
                  'description' => '待检测图像的URL地址。支持HTTP和HTTPS协议。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 如果使用上海地域的OSS链接，系统会自动将OSS链接地址转成内网地址然后再下载文件，所以调用该接口并不会产生OSS流量计费。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'http://xxx.xxx.com/xxx.jpg',
                  'isFileTransferUrl' => true,
                ),
                'MaxFrames' => 
                array (
                  'description' => '最大截帧数量，GIF图或长图检测专用，默认值为1。
当interval*maxFrames小于该图片所包含的图片数量时，截帧间隔会自动修改为`该图片所包含的图片数/maxFrames`，以提高整体检测效果。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'DataId' => 
                array (
                  'description' => '数据ID。需要保证在一次请求中所有的ID不重复。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'uuid-xxxx-xxxx-1234',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'Scene',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定图片检测的应用场景，可选值包括：

- porn：图片智能鉴黄

- terrorism：图片敏感内容识别、图片风险人物识别

- ad：图片垃圾广告识别

- live：图片不良场景识别

- logo：图片Logo识别

> 支持多场景（scenes）一起检测。例如`scenes=[“porn”, “terrorism”]`，即对一张图片同时进行鉴黄和涉恐识别，此时也会按照两个场景计费。',
              'type' => 'string',
              'required' => false,
              'example' => 'porn',
            ),
            'required' => true,
            'example' => 'porn',
            'maxItems' => 6,
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69B41AE8-1234-1234-1234-12D395695D2D',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Results' => 
                  array (
                    'description' => '图片检测结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '图像URL地址。',
                          'type' => 'string',
                          'example' => 'http://xxx.xxx.xxx/xxx.jpg',
                        ),
                        'DataId' => 
                        array (
                          'description' => '数据ID。',
                          'type' => 'string',
                          'example' => 'uuid-xxxx-xxx-1234',
                        ),
                        'SubResults' => 
                        array (
                          'description' => '单张图片的检测结果。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '1',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SfaceDataList' => 
                              array (
                                'description' => '图片中包含暴恐敏感内容时，返回识别出来的暴恐敏感信息。

> 仅适用于terrorism和sface场景。关于该参数在sface场景中的具体内容，请参见敏感人脸检测。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Width' => 
                                    array (
                                      'description' => '人脸区域宽度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '97',
                                    ),
                                    'Faces' => 
                                    array (
                                      'description' => '识别出的人脸信息。',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '1',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Name' => 
                                          array (
                                            'description' => '相似人物的名称。',
                                            'type' => 'string',
                                            'example' => 'abc',
                                          ),
                                          'Id' => 
                                          array (
                                            'description' => '人脸ID。',
                                            'type' => 'string',
                                            'example' => 'AliFace_0001234',
                                          ),
                                          'Rate' => 
                                          array (
                                            'description' => '相似概率。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '91.54',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'Height' => 
                                    array (
                                      'description' => '人脸区域高度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '131',
                                    ),
                                    'Y' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，人脸区域左上角到x轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '39',
                                    ),
                                    'X' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，人脸区域左上角到y轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '49',
                                    ),
                                  ),
                                ),
                              ),
                              'HintWordsInfoList' => 
                              array (
                                'description' => '图片中含有广告时，返回图片中广告文字命中的风险关键词信息。格式为数组。

> 仅适用于ad场景。示例值：`”hintWordsInfo”:[{“context”:”敏感词”}]`。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Context' => 
                                    array (
                                      'description' => '图片中文字命中的风险关键词内容。',
                                      'type' => 'string',
                                      'example' => 'abc',
                                    ),
                                  ),
                                ),
                              ),
                              'Suggestion' => 
                              array (
                                'description' => '建议您执行的操作。

- pass：图片正常，无需进行其余操作；或者未识别出目标对象。

- review：检测结果不确定，需要进行人工审核；或者未识别出目标对象。

- block：图片违规，建议执行进一步操作（如直接删除或做限制处理）。',
                                'type' => 'string',
                                'example' => 'block',
                              ),
                              'ProgramCodeDataList' => 
                              array (
                                'description' => '图片中含有小程序码时，返回小程序码的位置信息。

> 仅适用于qrcode场景，且已通过钉钉群（23109592）联系我们开通了小程序码识别。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Width' => 
                                    array (
                                      'description' => '小程序码区域宽度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '402.0',
                                    ),
                                    'Height' => 
                                    array (
                                      'description' => '小程序码区域高度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '413.0',
                                    ),
                                    'Y' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，小程序码区域左上角到x轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '0.0',
                                    ),
                                    'X' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，小程序码区域左上角到y轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '11.0',
                                    ),
                                  ),
                                ),
                              ),
                              'OCRDataList' => 
                              array (
                                'description' => '1',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '识别到的图片中的完整文字信息。',
                                  'type' => 'string',
                                  'example' => 'abc',
                                ),
                              ),
                              'Frames' => 
                              array (
                                'description' => '如果待检测图片因为过长被截断，该参数返回截断后的每一帧图像的临时访问地址供您参考。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'URL' => 
                                    array (
                                      'description' => '被截断的图片的临时访问URL，地址有效期是5分钟。',
                                      'type' => 'string',
                                      'example' => 'http://xxx.xxx.com/xxx-0.jpg',
                                    ),
                                    'Rate' => 
                                    array (
                                      'description' => '结果为该分类的概率，取值范围为0~100。值越高，表示越有可能属于该分类。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '89.85',
                                    ),
                                  ),
                                ),
                              ),
                              'LogoDataList' => 
                              array (
                                'description' => '图片中含有Logo时，返回识别出来的Logo信息。

> 仅适用于Logo场景。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Type' => 
                                    array (
                                      'description' => '识别出的logo类型，取值为TV（台标）。',
                                      'type' => 'string',
                                      'example' => 'TV',
                                    ),
                                    'Width' => 
                                    array (
                                      'description' => 'Logo区域宽度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '106',
                                    ),
                                    'Height' => 
                                    array (
                                      'description' => 'Logo区域高度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '106',
                                    ),
                                    'Y' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，Logo区域左上角到x轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '68',
                                    ),
                                    'Name' => 
                                    array (
                                      'description' => '识别出的Logo名称。',
                                      'type' => 'string',
                                      'example' => 'abc',
                                    ),
                                    'X' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，Logo区域左上角到y轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '140',
                                    ),
                                  ),
                                ),
                              ),
                              'Label' => 
                              array (
                                'description' => '检测结果的分类，与具体的scene对应。取值范围参见scene和label对应关系说明。',
                                'type' => 'string',
                                'example' => 'normal',
                              ),
                              'Scene' => 
                              array (
                                'description' => '图片检测场景，和调用请求中的场景（scenes）对应。',
                                'type' => 'string',
                                'example' => 'ad',
                              ),
                              'Rate' => 
                              array (
                                'description' => '结果为该分类的概率，取值范围为0~100。值越高，表示越有可能属于该分类。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '99.91',
                              ),
                            ),
                          ),
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 'img4wlJcb7p4wH4lAP3111111-123456',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69B41AE8-1234-1234-1234-12D395695D2D\\",\\n  \\"Data\\": {\\n    \\"Results\\": [\\n      {\\n        \\"ImageURL\\": \\"http://xxx.xxx.xxx/xxx.jpg\\",\\n        \\"DataId\\": \\"uuid-xxxx-xxx-1234\\",\\n        \\"SubResults\\": [\\n          {\\n            \\"SfaceDataList\\": [\\n              {\\n                \\"Width\\": 97,\\n                \\"Faces\\": [\\n                  {\\n                    \\"Name\\": \\"abc\\",\\n                    \\"Id\\": \\"AliFace_0001234\\",\\n                    \\"Rate\\": 91.54\\n                  }\\n                ],\\n                \\"Height\\": 131,\\n                \\"Y\\": 39,\\n                \\"X\\": 49\\n              }\\n            ],\\n            \\"HintWordsInfoList\\": [\\n              {\\n                \\"Context\\": \\"abc\\"\\n              }\\n            ],\\n            \\"Suggestion\\": \\"block\\",\\n            \\"ProgramCodeDataList\\": [\\n              {\\n                \\"Width\\": 402,\\n                \\"Height\\": 413,\\n                \\"Y\\": 0,\\n                \\"X\\": 11\\n              }\\n            ],\\n            \\"OCRDataList\\": [\\n              \\"abc\\"\\n            ],\\n            \\"Frames\\": [\\n              {\\n                \\"URL\\": \\"http://xxx.xxx.com/xxx-0.jpg\\",\\n                \\"Rate\\": 89.85\\n              }\\n            ],\\n            \\"LogoDataList\\": [\\n              {\\n                \\"Type\\": \\"TV\\",\\n                \\"Width\\": 106,\\n                \\"Height\\": 106,\\n                \\"Y\\": 68,\\n                \\"Name\\": \\"abc\\",\\n                \\"X\\": 140\\n              }\\n            ],\\n            \\"Label\\": \\"normal\\",\\n            \\"Scene\\": \\"ad\\",\\n            \\"Rate\\": 99.91\\n          }\\n        ],\\n        \\"TaskId\\": \\"img4wlJcb7p4wH4lAP3111111-123456\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Data>\\n    <Results>\\n        <Code>200</Code>\\n        <Message>OK</Message>\\n        <DataId>uuid-xxxx-xxx-1234</DataId>\\n        <SubResults>\\n            <Rate>99.63</Rate>\\n            <Suggestion>block</Suggestion>\\n            <Label>sexy</Label>\\n            <Scene>porn</Scene>\\n        </SubResults>\\n        <SubResults>\\n            <Label>politics</Label>\\n            <Rate>91.54</Rate>\\n            <Scene>terrorism</Scene>\\n            <SfaceDataList>\\n                <Faces>\\n                    <Id>AliFace_0001234</Id>\\n                    <Name>命中人名</Name>\\n                    <Rate>91.54</Rate>\\n                </Faces>\\n                <Height>131</Height>\\n                <Width>97</Width>\\n                <X>49</X>\\n                <y>39</y>\\n            </SfaceDataList>\\n            <Suggestion>block</Suggestion>\\n        </SubResults>\\n        <SubResults>\\n            <ProgramCodeDataList>\\n                <Width>402</Width>\\n                <Height>413</Height>\\n                <X>11</X>\\n                <y>0</y>\\n            </ProgramCodeDataList>\\n            <Frames>\\n                <Rate>89.85</Rate>\\n                <URL>http://xxx.xxx.com/xxx-0.jpg</URL>\\n            </Frames>\\n            <Frames>\\n                <Rate>68.06</Rate>\\n                <URL>http://xxx.xxx.com/xxx-1.jpg</URL>\\n            </Frames>\\n            <Rate>99.91</Rate>\\n            <Suggestion>block</Suggestion>\\n            <Label>ad</Label>\\n            <Scene>ad</Scene>\\n        </SubResults>\\n        <SubResults>\\n            <Rate>99.91</Rate>\\n            <Suggestion>block</Suggestion>\\n            <Label>drug</Label>\\n            <Scene>live</Scene>\\n        </SubResults>\\n        <SubResults>\\n            <LogoDataList>\\n                <Name>xxx台</Name>\\n                <Type>TV</Type>\\n                <X>140</X>\\n                <y>68</y>\\n                <Width>106</Width>\\n                <Height>106</Height>\\n            </LogoDataList>\\n            <Rate>99.9</Rate>\\n            <Suggestion>block</Suggestion>\\n            <Label>TV</Label>\\n            <Scene>logo</Scene>\\n        </SubResults>\\n        <TaskId>img4wlJcb7p4wH4lAP3111111-123456</TaskId>\\n        <ImageURL>http://xxx.xxx.xxx/xxx.jpg</ImageURL>\\n    </Results>\\n</Data>\\n<RequestId>69B41AE8-1234-1234-1234-12D395695D2D</RequestId>","errorExample":""}]',
      'title' => '图片内容安全',
      'summary' => '本文介绍图片内容安全ScanImage的语法及示例。',
      'description' => '## 功能描述
图片内容安全结合行为、内容，采用多维度、多模型、多检测手段，识别图片中的敏感信息，规避图片中存在敏感人物照片、敏感事件等内容风险。
支持检测的场景包括：图片智能鉴黄、图片敏感内容识别、图片风险人物识别、图片垃圾广告识别、图片不良场景识别、图片Logo识别。
在提交检测任务时，您需要指定scenes参数，并且支持组合使用，即可对同一张图片的多种风险进行检测。

> - 在同时检测多个scene的情况下，将按照每个场景的检测图片数量×每个场景的单价进行累加计费。而在检测返回结果中，则包含了您指定的scenes对应的label。您可以根据参数的返回值判断风险的具体类型。然后对图片进行处理。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


在图片审核中，scene与label的对应关系如下： 
| scene     | 描述                                                                                               | label                                                                                                                                                                                                                                                                                      |
| --------- | ---------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| porn      | 图片智能鉴黄：适用于图片涉及色情、低俗内容检测。                             | normal（正常图片）、sexy（性感图片）、porn（色情图片）                                                                                                                                                                                                                 |
| terrorism | 图片敏感内容识别：适用于图片涉及敏感事件、暴力、武器、恐怖、血腥、爆炸等内容识别。<br>图片风险人物识别：适用于图片涉及敏感人物、明星的识别。 | normal（正常图片）、bloody（血腥）、explosion（爆炸烟光）、outfit（特殊装束）、logo（特殊标识）、weapon（武器）、politics（敏感内容）、violence（打斗）、crowd（聚众）、parade（游行）、carcrash（车祸现场）、flag（旗帜）、location（地标）、drug（涉毒）、gamble（赌博）、others（其他） |
| ad        | 图片垃圾广告识别：适用于图片中含有广告信息的识别，特別是针对于类似牛皮癣的文字广告有较好的识别效果。 | normal（正常图片）、politics（文字含敏感内容）、porn（文字含涉黄内容）、abuse（文字含辱骂内容）、terrorism（文字含涉恐内容）、contraband（文字含违禁内容）、spam（文字含其他垃圾内容）、npx（牛皮癣广告）、qrcode（包含二维码）、programCode（包含小程序码）、ad（其他广告） |
| live      | 图片不良场景识别：适用于图片中涉及毒品、赌博、画中画等内容的识别。  | normal（正常图片）、meaningless（无意义图片）、PIP（画中画）、smoking（吸烟）、drivelive（车内直播）、drug（涉毒）、gamble（赌博）                                                                                                               |
| logo      | 图片Logo识别：适用于图片中含有台标、水印、商标等内容的检测。             | normal（正常图片）、TV（带有管控logo的图片）、trademark（商标）                                                                                                                                                                                                       |

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[内容审核服务](https://vision.aliyun.com/imageaudit)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageaudit_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageaudit/2019-12-30/ScanImage?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为内容审核（imageaudit）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图片内容安全示例代码](~~478892~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
- 图像大小：不超过10 MB。如果您有大图需求，请通过钉钉群（23109592）联系我们。
- 图像分辨率：建议大于256×256像素，像素过低可能会影响识别效果。超长图的分辨率长或宽不能超过30000像素。GIF图总像素（长x宽）不超过4194304像素，超过该总像素值会报InvalidFile.Download（文件无法下载）错误。
- URL地址中不能包含中文字符。

## 检测说明

- 最长检测时间是6秒，如果在该时间范围内没有完成检测，系统会返回超时错误码。

- 图片下载时间限制为3秒，如果下载时间超过3秒，则会返回下载超时。

- 图片检测接口响应时间依赖图片的下载时间。请确保被检测图片所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存。

## 计费说明
关于图片内容安全的计费方式及报价，请参见[计费介绍](~~202478~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往体验中心，对应体验入口如下表所示。


| 能力             | 体验中心                                                     |
| ---------------- | ------------------------------------------------------------ |
| 图片智能鉴黄     | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifyPorn) |
| 图片敏感内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifyTerrorism) |
| 图片Logo识别     | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifyLogo) |
| 图片垃圾广告识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifyAdvertisement) |
| 图片不良场景识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifyUnhealthyScene) |
| 图片风险人物识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=IdentifySensitiveFace) |


',
      'requestParamsDescription' => '> 最多指定10个检测对象，即最多同时对10张图片进行检测。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI内容审核类目下的图片内容安全能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为内容审核（imageaudit）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图片内容安全示例代码](~~478892~~)。',
      'extraInfo' => '## 错误码
关于图片内容安全的错误码，详情请参见[常见错误码](~~146773~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[内容审核模型-鉴黄](https://modelscope.cn/models/damo/cv_resnet50_image-classification_cc/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScanText' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Tasks',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Content' => 
                array (
                  'description' => '指定检测的对象，JSON数组中的每个元素是一个文字检测任务结构体。

> - N个Task会折算为N次调用进行计费。
- 算法识别效果问题请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '维修管道，联系weixin',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'Labels',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Label' => 
                array (
                  'description' => '指定文本检测的应用场景，可选值包括：

- spam：文字垃圾内容识别

- politics：文字敏感内容识别

- abuse：文字辱骂内容识别

- terrorism：文字暴恐内容识别

- porn：文字鉴黄内容识别

- flood：文字灌水内容识别

- contraband：文字违禁内容识别

- ad：文字广告内容识别',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ad',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
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
                'example' => 'C7CD87E3-57A5-4E2F-8A44-809F3554692C',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测结果的各个子元素。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 'txt6Vh5Fv0DAFy5hgdVRt3pqf-1s82jj',
                        ),
                        'Results' => 
                        array (
                          'description' => '检测结果。如果返回为空，表示系统识别命中了其他Label，扩大Label重新发起请求。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Suggestion' => 
                              array (
                                'description' => '建议您执行的操作，取值包括：

- pass：文本正常。

- review：需要人工审核。

- block：文本违规，可以直接删除或者做限制处理。',
                                'type' => 'string',
                                'example' => 'block',
                              ),
                              'Label' => 
                              array (
                                'description' => '检测结果的分类。',
                                'type' => 'string',
                                'example' => 'ad',
                              ),
                              'Rate' => 
                              array (
                                'description' => '结果为该分类的概率，取值范围为`[0.00-100.00]`。值越高，表示越有可能属于该分类。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '99.91',
                              ),
                              'Details' => 
                              array (
                                'description' => '文本的检测结果。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Label' => 
                                    array (
                                      'description' => '命中风险文本的分类。',
                                      'type' => 'string',
                                      'example' => 'ad',
                                    ),
                                    'Contexts' => 
                                    array (
                                      'description' => '命中该风险的信息。',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Context' => 
                                          array (
                                            'description' => '检测文本命中的风险内容。',
                                            'type' => 'string',
                                            'example' => '联系weixin',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C7CD87E3-57A5-4E2F-8A44-809F3554692C\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"TaskId\\": \\"txt6Vh5Fv0DAFy5hgdVRt3pqf-1s82jj\\",\\n        \\"Results\\": [\\n          {\\n            \\"Suggestion\\": \\"block\\",\\n            \\"Label\\": \\"ad\\",\\n            \\"Rate\\": 99.91,\\n            \\"Details\\": [\\n              {\\n                \\"Label\\": \\"ad\\",\\n                \\"Contexts\\": [\\n                  {\\n                    \\"Context\\": \\"联系weixin\\"\\n                  }\\n                ]\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ScanTextResponse>\\n    <RequestId>4FCBCC61-6264-56DE-9CF3-44C014F63B75</RequestId>\\n    <Data>\\n        <Elements>\\n            <TaskId>txt4OFqbn2s4WQ6kVA$dQGn9X-1vvHuZ</TaskId>\\n            <Results>\\n                <Suggestion>block</Suggestion>\\n                <Details>\\n                    <Label>ad</Label>\\n                    <Contexts>\\n                        <Context>联系weixin </Context>\\n                    </Contexts>\\n                </Details>\\n                <Rate>99.91</Rate>\\n                <Label>ad</Label>\\n            </Results>\\n        </Elements>\\n    </Data>\\n</ScanTextResponse>","errorExample":""}]',
      'title' => '文本内容安全',
      'summary' => '本文为您介绍文本内容安全ScanText的语法及示例。',
      'description' => '## 功能描述
文本内容安全结合行为、内容，采用多维度、多模型、多检测手段，识别文本中的敏感信息，规避敏感人物姓名、敏感事件描述、敏感言论等内容风险。
支持检测的场景包括：文字垃圾内容识别、文字广告内容识别、文字敏感内容识别、文字暴恐内容识别、文字辱骂内容识别、文字鉴黄内容识别、文字灌水内容识别、文字违禁内容识别。
在提交检测任务时，您需要指定Labels参数，并且支持组合使用，即可对同一段文字进行多种风险检测。如果接口返回结果为空，表示未检测到Labels中的风险点。

> - 在同时检测多个Task的情况下，将按照Task的个数进行累计计费。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[内容审核服务](https://vision.aliyun.com/imageaudit)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageaudit_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageaudit/2019-12-30/ScanText?lang=JAVA&sdkStyle=dara&params=%7B%22Tasks%22%3A%5B%7B%22Content%22%3A%22%E6%9C%AC%E6%A0%A1%E5%B0%8F%E9%A2%9D%E8%B4%B7%E6%AC%BE%EF%BC%8C%E5%AE%89%E5%85%A8%E3%80%81%E5%BF%AB%E6%8D%B7%E3%80%81%E6%96%B9%E4%BE%BF%E3%80%81%E6%97%A0%E6%8A%B5%E6%8A%BC%EF%BC%8C%E9%9A%8F%E6%9C%BA%E9%9A%8F%E8%B4%B7%EF%BC%8C%E5%BD%93%E5%A4%A9%E6%94%BE%E6%AC%BE%EF%BC%8C%E4%B8%8A%E9%97%A8%E6%9C%8D%E5%8A%A1%E3%80%82%E8%81%94%E7%B3%BBweixin%20123456%22%7D%5D%2C%22Labels%22%3A%5B%7B%22Label%22%3A%22spam%22%7D%2C%7B%22Label%22%3A%22politics%22%7D%2C%7B%22Label%22%3A%22abuse%22%7D%2C%7B%22Label%22%3A%22terrorism%22%7D%2C%7B%22Label%22%3A%22porn%22%7D%2C%7B%22Label%22%3A%22flood%22%7D%2C%7B%22Label%22%3A%22contraband%22%7D%2C%7B%22Label%22%3A%22ad%22%7D%5D%7D&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为内容审核（imageaudit）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[文本内容安全示例代码](~~477836~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
该接口每次可以检测的文本字符数最大为10000。

## 计费说明
关于文本内容安全的计费方式及报价，请参见[计费介绍](~~202478~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往体验中心，对应体验入口如下表所示。

| 能力             | 体验中心                                                     |
| ---------------- | ------------------------------------------------------------ |
| 文字垃圾内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeSpamText) |
| 文字广告内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeAdvertisingText) |
| 文字敏感内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizePoliticsText) |
| 文字暴恐内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeTerrorismText) |
| 文字辱骂内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeAbuseText) |
| 文字鉴黄内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizePornText) |
| 文字灌水内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeFloodText) |
| 文字违禁内容识别 | [免费调试入口](https://vision.aliyun.com/experience/detail?&tagName=imageaudit&children=RecognizeContrabandText) |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI内容审核类目下的文本内容安全能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为内容审核（imageaudit）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[文本内容安全示例代码](~~477836~~)。',
      'extraInfo' => '## 错误码
关于文本内容安全的错误码，详情请参见[常见错误码](~~146773~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'imageaudit.cn-shanghai.aliyuncs.com',
    ),
  ),
);
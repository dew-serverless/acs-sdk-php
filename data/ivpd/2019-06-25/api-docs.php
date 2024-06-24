<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ivpd',
    'version' => '2019-06-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 65055,
      'title' => '视觉处理(已废弃)',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeImageSize',
        1 => 'DetectImageElements',
        2 => 'ExtendImageStyle',
        3 => 'MakeSuperResolutionImage',
        4 => 'RecognizeImageColor',
        5 => 'RecognizeImageStyle',
        6 => 'SegmentImage',
        7 => 'RecolorImage',
        8 => 'SegmentBody',
      ),
    ),
    1 => 
    array (
      'id' => 161635,
      'title' => '已下线',
      'type' => 'directory',
      'children' => 
      array (
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
    'ChangeImageSize' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Width',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标宽度，单位：像素，取值范围[10, 5000]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5000',
            'minimum' => '10',
            'example' => '1920',
          ),
        ),
        1 => 
        array (
          'name' => 'Height',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标高度，单位：像素，取值范围[10, 5000]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5000',
            'minimum' => '10',
            'example' => '1080',
          ),
        ),
        2 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://a.b.cn/1.jpg',
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
              'Message' => 
              array (
                'description' => '错误信息，code非“0”的情况下具体错误信息请查看本字段。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统自动生成',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '图片URL，尺寸变换后的输出图片地址，注意 <font color=red>有效期是72小时</font>。


',
                    'type' => 'string',
                    'example' => 'http://a.b.c/2.jpg',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://a.b.c/2.jpg\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '尺寸变换',
      'summary' => '智能调节图像尺寸，支持自动裁剪、补全等多种方案。',
      'description' => '示例图：


![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/change-image-size.jpg)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetectImageElements' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://a.b.c/1.jpg',
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
              'Message' => 
              array (
                'description' => '错误信息，code非“0”的情况下具体错误信息请查看本字段。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统自动生成',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '元素列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '元素类别',
                          'type' => 'string',
                          'example' => 'character',
                        ),
                        'Width' => 
                        array (
                          'description' => '元素宽度，单位：像素',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1080',
                        ),
                        'Height' => 
                        array (
                          'description' => '元素高度，单位：像素',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1920',
                        ),
                        'Y' => 
                        array (
                          'description' => '元素坐标y',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '65',
                        ),
                        'Score' => 
                        array (
                          'description' => '识别分值, 范围： \\[0.0, 1.0\\]',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9556',
                        ),
                        'X' => 
                        array (
                          'description' => '元素坐标x',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '211',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"character\\",\\n        \\"Width\\": 1080,\\n        \\"Height\\": 1920,\\n        \\"Y\\": 65,\\n        \\"Score\\": 0.9556,\\n        \\"X\\": 211\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '元素识别',
      'summary' => '识别输入图中所包含的元素，用矩形框标注出其位置，并区分其对应的基本类型（人/物、修饰、文案）。',
      'description' => '识别图像中包含的元素，用矩形框标注出其位置，并区分其对应的基本类型（人/物、修饰、文案）。输入单张图像，输出n个元素的坐标位置及对应的类型。

示意图：

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/detect-elements.png)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ExtendImageStyle' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StyleUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '风格图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg',
          ),
        ),
        1 => 
        array (
          'name' => 'MajorUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '主图图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg',
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。
',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '全图进行风格化的结果',
                    'type' => 'string',
                    'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D',
                  ),
                  'MajorUrl' => 
                  array (
                    'description' => '为保留人像不变的风格化结果,输入的majorUrl内容图中无人物, 则为空字符串',
                    'type' => 'string',
                    'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D\\",\\n    \\"MajorUrl\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '风格迁移',
      'summary' => '将输入图按照指定的风格图像进行风格的迁移，使得图像的色彩、笔触等视觉风格发生转化。',
      'description' => '示意图

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style.png) 



## 示例

入参示例：

```
{
  "majorUrl": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg",
  "styleUrl":"http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg"
}
```

主图 + 风格图 = 结果图

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg?x-oss-process=image/resize,w_200) + 
![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg?x-oss-process=image/resize,w_200) = 
![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-result.jpg?x-oss-process=image/resize,w_200)


---




',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MakeSuperResolutionImage' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png',
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统自动生成
',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。
',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '清晰化后图片URL地址',
                    'type' => 'string',
                    'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '图像超分辨/清晰化',
      'summary' => '将小图放大四倍，基于推断出的细节使得结果图像不显得模糊。',
      'description' => '

原图：

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png)

结果图：

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png)


请求示例：

```
{
  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png"
}
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
    ),
    'RecognizeImageColor' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recognizer-image-color-src.png',
          ),
        ),
        1 => 
        array (
          'name' => 'ColorCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望的色板输出数量，范围 \\[1, 7\\]',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '3',
            'pattern' => '^\\d+$',
            'default' => '3',
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。',
                'type' => 'object',
                'properties' => 
                array (
                  'ColorTemplateList' => 
                  array (
                    'description' => '色板列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Color' => 
                        array (
                          'description' => 'RGB颜色值(16进制)，如：291A18',
                          'type' => 'string',
                          'example' => '291A18',
                        ),
                        'Percentage' => 
                        array (
                          'description' => '所占比例, 取值范围 \\[0.0, 1.0\\]',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.3',
                        ),
                        'Label' => 
                        array (
                          'description' => '颜色标签，如：gray, red',
                          'type' => 'string',
                          'example' => 'gray',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"ColorTemplateList\\": [\\n      {\\n        \\"Percentage\\": 0.3,\\n        \\"Color\\": \\"291A18\\",\\n        \\"Label\\": \\"gray\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '色板识别',
      'summary' => '对输入图的颜色信息进行分析，给出颜色值（RGB形式和HEX格式）与对应的占比信息。',
      'description' => '
输入一张图像，对其颜色信息进行分析，给出颜色值（RGB形式和HEX格式）和对应的占比信息。



例如，输入以下的图像：


![image.png](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recognizer-image-color-src.png?x-oss-process=image/resize,w_300)




本服务可以提取出其色卡为：

| rgb | 58/150/224 | 207/160/43 | 185/197/212 | 146/115/24 | 63/66/54 | 24/53/87 |
| --- | --- | --- | --- | --- | --- | --- |
| hex | 3A96E0 | CFA02B | B9C5D4 | 927318 | 3F4236 | 183557 |
| 占比 | 0.374724 | 0.179412 | 0.15671 | 0.124081 | 0.0842831 | 0.0807904 |
| 颜色（可视化） | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134156423-7d235e46-b750-4f35-b3a5-1551b2985d0a.png#align=left&display=inline&height=110&name=image.png&originHeight=110&originWidth=111&size=2293&status=done&width=111) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134162844-9201f373-0774-4bd5-99fb-77c6fcd69b57.png#align=left&display=inline&height=116&name=image.png&originHeight=116&originWidth=115&size=2188&status=done&width=115) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134168879-2765619e-9f0f-4f8c-931d-a9e5ef5e2f75.png#align=left&display=inline&height=116&name=image.png&originHeight=116&originWidth=116&size=2337&status=done&width=116) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134174531-7ca5d5be-0c1f-43ca-9530-10ac44391b38.png#align=left&display=inline&height=113&name=image.png&originHeight=113&originWidth=115&size=2323&status=done&width=115) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134179735-55330228-0848-494c-b94f-32571211dd4d.png#align=left&display=inline&height=114&name=image.png&originHeight=114&originWidth=112&size=1943&status=done&width=112) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134185042-5d3024f8-653e-4fe1-b161-72239ab484dc.png#align=left&display=inline&height=112&name=image.png&originHeight=112&originWidth=113&size=1407&status=done&width=113) |



请求示例：

```json
{
   "colorCount": 5,
   "url": "https://invi-label.oss-cn-shanghai.aliyuncs.com/label/style/style_google/style_google_20181106_p10_247782.jpg"
}
```

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RecognizeImageStyle' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recoginzer-image-type-src.png',
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统自动生成',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。',
                'type' => 'object',
                'properties' => 
                array (
                  'Styles' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '风格列表',
                      'type' => 'string',
                      'example' => 'promotion',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Styles\\": [\\n      \\"promotion\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '风格识别',
      'summary' => '对输入图的风格类型进行分析，给出可能的风格标签。',
      'description' => '输入单张成图，预测成图的风格类型。


如下图的风格类型：
视觉风格：中国风     语义风格：典雅...

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recoginzer-image-type-src.png?x-oss-process=image/resize,w_500)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' 风格style定义：
```
中国风,chinese
水彩,watercolor
卡通,cartoon
实景,real
标准,standard
简洁,simple
活泼,lively
多彩,colourful
豪华,luxury
科技,technology
柔美,morbidezza
硬朗,strong
素雅,simpleelegant
高冷,coolcold
促销,promotion
突出,protrude
```',
      'extraInfo' => ' ',
    ),
    'SegmentImage' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/segment-image-src.jpg',
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统生成',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '结果数据，请展开查看',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '抠图结果URL',
                    'type' => 'string',
                    'example' => 'http://a.b.c/2.png',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://a.b.c/2.png\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '图像分割(抠图)',
      'summary' => '对输入图中主体进行通用分割，输出对应的png透明图，支持包括人体、动物、物品等。',
      'description' => '示例图片：

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/segment-image.png)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
    ),
    'RecolorImage' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png',
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓色模式,默认AUTO,取值范围[AUTO:自动拓色, TEMPLATE:色板拓色, REF_PIC:参考图拓色]',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AUTO',
          ),
        ),
        2 => 
        array (
          'name' => 'RefUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '参考图拓色，参考图URL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-refurl-src.png',
          ),
        ),
        3 => 
        array (
          'name' => 'ColorCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓展色系数量，取值范围[1, 8], 默认：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '8',
            'minimum' => '1',
            'example' => '3',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ColorTemplate',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Color' => 
                array (
                  'description' => '色板拓色,Top主色列表，颜色值定义ARGB,如：0A0B0C，数组大小[1, 7]',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0A0B0C',
                ),
              ),
            ),
            'required' => false,
            'maxItems' => 8,
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
              'Message' => 
              array (
                'description' => '',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云系统自动生成
',
                'type' => 'string',
                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
              ),
              'Data' => 
              array (
                'description' => '响应的数据，具体字段请查看结构定义。
',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '拓色生成图片URL列表',
                      'type' => 'string',
                      'example' => 'http://a.b.c/3.png',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"ImageList\\": [\\n      \\"http://a.b.c/3.png\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '色彩迁移(拓色)',
      'summary' => '将输入图自动或根据指定色板进行色彩转换，同时保证视觉热点区域避免不正常拓色。',
      'description' => '
示例结果：

![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor.png)



入参示例：
```
自动拓色：
{
  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",
  "mode": "AUTO",
  "colorCount": 3
}

参考图拓色：
{
  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",
  "refUrl": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-refurl-src.png",
  "mode": "REF_PIC"
}

色板拓色
{
  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",
  "colorTemplate": [ 
    { "color": "056A6B"}, 
    { "color": "FF0000"}, 
    { "color": "00FF00"}, 
    { "color": "0000FF"}
  ],
  "mode": "TEMPLATE"
}
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
    ),
    'SegmentBody' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ImageUrl' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ivpd.cn-huhehaote.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ivpd.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ivpd.cn-shanghai.aliyuncs.com',
    ),
  ),
);
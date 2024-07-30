<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ivpd',
        'version' => '2019-06-25',
    ],
    'directories' => [
        [
            'id' => 65055,
            'title' => '视觉处理(已废弃)',
            'type' => 'directory',
            'children' => [
                'ChangeImageSize',
                'DetectImageElements',
                'ExtendImageStyle',
                'MakeSuperResolutionImage',
                'RecognizeImageColor',
                'RecognizeImageStyle',
                'SegmentImage',
                'RecolorImage',
                'SegmentBody',
            ],
        ],
        [
            'id' => 161635,
            'title' => '已下线',
            'type' => 'directory',
            'children' => [],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ChangeImageSize' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Width',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标宽度，单位：像素，取值范围[10, 5000]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '5000',
                        'minimum' => '10',
                        'example' => '1920',
                    ],
                ],
                [
                    'name' => 'Height',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标高度，单位：像素，取值范围[10, 5000]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '5000',
                        'minimum' => '10',
                        'example' => '1080',
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://a.b.cn/1.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息，code非“0”的情况下具体错误信息请查看本字段。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统自动生成',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '图片URL，尺寸变换后的输出图片地址，注意 <font color=red>有效期是72小时</font>。'."\n"
                                            ."\n\n",
                                        'type' => 'string',
                                        'example' => 'http://a.b.c/2.jpg',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://a.b.c/2.jpg\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '尺寸变换',
            'summary' => '智能调节图像尺寸，支持自动裁剪、补全等多种方案。',
            'description' => '示例图：'."\n"
                ."\n\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/change-image-size.jpg)',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetectImageElements' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://a.b.c/1.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息，code非“0”的情况下具体错误信息请查看本字段。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统自动生成',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。',
                                'type' => 'object',
                                'properties' => [
                                    'Elements' => [
                                        'description' => '元素列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '元素类别',
                                                    'type' => 'string',
                                                    'example' => 'character',
                                                ],
                                                'Width' => [
                                                    'description' => '元素宽度，单位：像素',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1080',
                                                ],
                                                'Height' => [
                                                    'description' => '元素高度，单位：像素',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1920',
                                                ],
                                                'Y' => [
                                                    'description' => '元素坐标y',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '65',
                                                ],
                                                'Score' => [
                                                    'description' => '识别分值, 范围： \\[0.0, 1.0\\]',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.9556',
                                                ],
                                                'X' => [
                                                    'description' => '元素坐标x',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '211',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"character\\",\\n        \\"Width\\": 1080,\\n        \\"Height\\": 1920,\\n        \\"Y\\": 65,\\n        \\"Score\\": 0.9556,\\n        \\"X\\": 211\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '元素识别',
            'summary' => '识别输入图中所包含的元素，用矩形框标注出其位置，并区分其对应的基本类型（人/物、修饰、文案）。',
            'description' => '识别图像中包含的元素，用矩形框标注出其位置，并区分其对应的基本类型（人/物、修饰、文案）。输入单张图像，输出n个元素的坐标位置及对应的类型。'."\n"
                ."\n"
                .'示意图：'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/detect-elements.png)',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExtendImageStyle' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'StyleUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '风格图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg',
                    ],
                ],
                [
                    'name' => 'MajorUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '主图图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '全图进行风格化的结果',
                                        'type' => 'string',
                                        'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D',
                                    ],
                                    'MajorUrl' => [
                                        'description' => '为保留人像不变的风格化结果,输入的majorUrl内容图中无人物, 则为空字符串',
                                        'type' => 'string',
                                        'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D\\",\\n    \\"MajorUrl\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/filterwrapper-et3invipre-filterplan-1930545240-f79fb/2019-8-27/invi__015668930975431000123_vq9uY7.jpg?Expires=1566896697&OSSAccessKeyId=LTAIDTT5xL3nv1sI&Signature=uRh3gwFcUmJ2XcfHWQIWIMkvl3E%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '风格迁移',
            'summary' => '将输入图按照指定的风格图像进行风格的迁移，使得图像的色彩、笔触等视觉风格发生转化。',
            'description' => '示意图'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style.png) '."\n"
                ."\n\n"
                ."\n"
                .'## 示例'."\n"
                ."\n"
                .'入参示例：'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "majorUrl": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg",'."\n"
                .'  "styleUrl":"http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'主图 + 风格图 = 结果图'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-major-src.jpeg?x-oss-process=image/resize,w_200) + '."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/extend-style-style-src.jpeg?x-oss-process=image/resize,w_200) = '."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-result.jpg?x-oss-process=image/resize,w_200)'."\n"
                ."\n\n"
                .'---'."\n"
                ."\n\n"
                ."\n\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'MakeSuperResolutionImage' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统自动生成'."\n",
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '清晰化后图片URL地址',
                                        'type' => 'string',
                                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '图像超分辨/清晰化',
            'summary' => '将小图放大四倍，基于推断出的细节使得结果图像不显得模糊。',
            'description' => "\n"
                ."\n"
                .'原图：'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png)'."\n"
                ."\n"
                .'结果图：'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-result.png)'."\n"
                ."\n\n"
                .'请求示例：'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/super-resolution-src.png"'."\n"
                .'}'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
        ],
        'RecognizeImageColor' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recognizer-image-color-src.png',
                    ],
                ],
                [
                    'name' => 'ColorCount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '期望的色板输出数量，范围 \\[1, 7\\]',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '3',
                        'pattern' => '^\\d+$',
                        'default' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。',
                                'type' => 'object',
                                'properties' => [
                                    'ColorTemplateList' => [
                                        'description' => '色板列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Color' => [
                                                    'description' => 'RGB颜色值(16进制)，如：291A18',
                                                    'type' => 'string',
                                                    'example' => '291A18',
                                                ],
                                                'Percentage' => [
                                                    'description' => '所占比例, 取值范围 \\[0.0, 1.0\\]',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.3',
                                                ],
                                                'Label' => [
                                                    'description' => '颜色标签，如：gray, red',
                                                    'type' => 'string',
                                                    'example' => 'gray',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"ColorTemplateList\\": [\\n      {\\n        \\"Percentage\\": 0.3,\\n        \\"Color\\": \\"291A18\\",\\n        \\"Label\\": \\"gray\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '色板识别',
            'summary' => '对输入图的颜色信息进行分析，给出颜色值（RGB形式和HEX格式）与对应的占比信息。',
            'description' => "\n"
                .'输入一张图像，对其颜色信息进行分析，给出颜色值（RGB形式和HEX格式）和对应的占比信息。'."\n"
                ."\n\n"
                ."\n"
                .'例如，输入以下的图像：'."\n"
                ."\n\n"
                .'![image.png](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recognizer-image-color-src.png?x-oss-process=image/resize,w_300)'."\n"
                ."\n\n"
                ."\n\n"
                .'本服务可以提取出其色卡为：'."\n"
                ."\n"
                .'| rgb | 58/150/224 | 207/160/43 | 185/197/212 | 146/115/24 | 63/66/54 | 24/53/87 |'."\n"
                .'| --- | --- | --- | --- | --- | --- | --- |'."\n"
                .'| hex | 3A96E0 | CFA02B | B9C5D4 | 927318 | 3F4236 | 183557 |'."\n"
                .'| 占比 | 0.374724 | 0.179412 | 0.15671 | 0.124081 | 0.0842831 | 0.0807904 |'."\n"
                .'| 颜色（可视化） | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134156423-7d235e46-b750-4f35-b3a5-1551b2985d0a.png#align=left&display=inline&height=110&name=image.png&originHeight=110&originWidth=111&size=2293&status=done&width=111) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134162844-9201f373-0774-4bd5-99fb-77c6fcd69b57.png#align=left&display=inline&height=116&name=image.png&originHeight=116&originWidth=115&size=2188&status=done&width=115) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134168879-2765619e-9f0f-4f8c-931d-a9e5ef5e2f75.png#align=left&display=inline&height=116&name=image.png&originHeight=116&originWidth=116&size=2337&status=done&width=116) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134174531-7ca5d5be-0c1f-43ca-9530-10ac44391b38.png#align=left&display=inline&height=113&name=image.png&originHeight=113&originWidth=115&size=2323&status=done&width=115) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134179735-55330228-0848-494c-b94f-32571211dd4d.png#align=left&display=inline&height=114&name=image.png&originHeight=114&originWidth=112&size=1943&status=done&width=112) | ![image.png](https://intranetproxy.alipay.com/skylark/lark/0/2019/png/84267/1560134185042-5d3024f8-653e-4fe1-b161-72239ab484dc.png#align=left&display=inline&height=112&name=image.png&originHeight=112&originWidth=113&size=1407&status=done&width=113) |'."\n"
                ."\n\n"
                ."\n"
                .'请求示例：'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'   "colorCount": 5,'."\n"
                .'   "url": "https://invi-label.oss-cn-shanghai.aliyuncs.com/label/style/style_google/style_google_20181106_p10_247782.jpg"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RecognizeImageStyle' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recoginzer-image-type-src.png',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统自动生成',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。',
                                'type' => 'object',
                                'properties' => [
                                    'Styles' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '风格列表',
                                            'type' => 'string',
                                            'example' => 'promotion',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Styles\\": [\\n      \\"promotion\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '风格识别',
            'summary' => '对输入图的风格类型进行分析，给出可能的风格标签。',
            'description' => '输入单张成图，预测成图的风格类型。'."\n"
                ."\n\n"
                .'如下图的风格类型：'."\n"
                .'视觉风格：中国风     语义风格：典雅...'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recoginzer-image-type-src.png?x-oss-process=image/resize,w_500)',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' 风格style定义：'."\n"
                .'```'."\n"
                .'中国风,chinese'."\n"
                .'水彩,watercolor'."\n"
                .'卡通,cartoon'."\n"
                .'实景,real'."\n"
                .'标准,standard'."\n"
                .'简洁,simple'."\n"
                .'活泼,lively'."\n"
                .'多彩,colourful'."\n"
                .'豪华,luxury'."\n"
                .'科技,technology'."\n"
                .'柔美,morbidezza'."\n"
                .'硬朗,strong'."\n"
                .'素雅,simpleelegant'."\n"
                .'高冷,coolcold'."\n"
                .'促销,promotion'."\n"
                .'突出,protrude'."\n"
                .'```',
            'extraInfo' => ' ',
        ],
        'SegmentImage' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/segment-image-src.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统生成',
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '结果数据，请展开查看',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '抠图结果URL',
                                        'type' => 'string',
                                        'example' => 'http://a.b.c/2.png',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://a.b.c/2.png\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '图像分割(抠图)',
            'summary' => '对输入图中主体进行通用分割，输出对应的png透明图，支持包括人体、动物、物品等。',
            'description' => '示例图片：'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/segment-image.png)',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' 所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
        ],
        'RecolorImage' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始图片URL地址，必须是公网可以正常访问的地址，最长8K。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '拓色模式,默认AUTO,取值范围[AUTO:自动拓色, TEMPLATE:色板拓色, REF_PIC:参考图拓色]',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'AUTO',
                    ],
                ],
                [
                    'name' => 'RefUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '参考图拓色，参考图URL',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-refurl-src.png',
                    ],
                ],
                [
                    'name' => 'ColorCount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '拓展色系数量，取值范围[1, 8], 默认：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '8',
                        'minimum' => '1',
                        'example' => '3',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ColorTemplate',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Color' => [
                                    'description' => '色板拓色,Top主色列表，颜色值定义ARGB,如：0A0B0C，数组大小[1, 7]',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0A0B0C',
                                ],
                            ],
                        ],
                        'required' => false,
                        'maxItems' => 8,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云系统自动生成'."\n",
                                'type' => 'string',
                                'example' => '7308917D-9E1B-4F11-8A79-0F140270E672',
                            ],
                            'Data' => [
                                'description' => '响应的数据，具体字段请查看结构定义。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'ImageList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '拓色生成图片URL列表',
                                            'type' => 'string',
                                            'example' => 'http://a.b.c/3.png',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7308917D-9E1B-4F11-8A79-0F140270E672\\",\\n  \\"Data\\": {\\n    \\"ImageList\\": [\\n      \\"http://a.b.c/3.png\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '色彩迁移(拓色)',
            'summary' => '将输入图自动或根据指定色板进行色彩转换，同时保证视觉热点区域避免不正常拓色。',
            'description' => "\n"
                .'示例结果：'."\n"
                ."\n"
                .'![](http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor.png)'."\n"
                ."\n\n"
                ."\n"
                .'入参示例：'."\n"
                .'```'."\n"
                .'自动拓色：'."\n"
                .'{'."\n"
                .'  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",'."\n"
                .'  "mode": "AUTO",'."\n"
                .'  "colorCount": 3'."\n"
                .'}'."\n"
                ."\n"
                .'参考图拓色：'."\n"
                .'{'."\n"
                .'  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",'."\n"
                .'  "refUrl": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-refurl-src.png",'."\n"
                .'  "mode": "REF_PIC"'."\n"
                .'}'."\n"
                ."\n"
                .'色板拓色'."\n"
                .'{'."\n"
                .'  "url": "http://vigen-invi-cdn.alibaba.com/aliyun-doc/pop/images/recolor-1-src.png",'."\n"
                .'  "colorTemplate": [ '."\n"
                .'    { "color": "056A6B"}, '."\n"
                .'    { "color": "FF0000"}, '."\n"
                .'    { "color": "00FF00"}, '."\n"
                .'    { "color": "0000FF"}'."\n"
                .'  ],'."\n"
                .'  "mode": "TEMPLATE"'."\n"
                .'}'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' 所有结果图片URL地址，注意 <font color=red>有效期是72小时</font>。',
        ],
        'SegmentBody' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'ImageUrl' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ivpd.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ivpd.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ivpd.cn-shanghai.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'goodstech',
        'version' => '2019-12-30',
    ],
    'directories' => [
        [
            'id' => 63954,
            'title' => '分类',
            'type' => 'directory',
            'children' => [
                'ClassifyCommodity',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ClassifyCommodity' => [
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
                    'name' => 'ImageURL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/goodstech/ClassifyCommodity/ClassifyCommodity1.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '87C5AF93-F641-54C2-873D-0501E637489C',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Categories' => [
                                        'description' => '类目预测列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'Score' => [
                                                    'description' => '分类ID的匹配度，大于0小于等于1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.417248',
                                                ],
                                                'CategoryId' => [
                                                    'description' => '类目ID。'."\n"
                                                        .'> 您可以在 [category.txt](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt) 文件中查看该接口支持的类目ID和类目名称。',
                                                    'type' => 'string',
                                                    'example' => '584',
                                                ],
                                                'CategoryName' => [
                                                    'description' => '类目名称。'."\n"
                                                        .'> 您可以在 [category.txt](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt) 文件中查看该接口支持的类目ID和类目名称。',
                                                    'type' => 'string',
                                                    'example' => '旁轴相机',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87C5AF93-F641-54C2-873D-0501E637489C\\",\\n  \\"Data\\": {\\n    \\"Categories\\": [\\n      {\\n        \\"Score\\": 0.417248,\\n        \\"CategoryId\\": \\"584\\",\\n        \\"CategoryName\\": \\"旁轴相机\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ClassifyCommodityResponse>\\n    <RequestId>87C5AF93-F641-54C2-873D-0501E637489C</RequestId>\\n    <Data>\\n        <Categories>\\n            <CategoryId>584</CategoryId>\\n            <Score>0.417248</Score>\\n            <CategoryName>旁轴相机</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>4856</CategoryId>\\n            <Score>0.309264</Score>\\n            <CategoryName>数码单反</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>733</CategoryId>\\n            <Score>0.103179</Score>\\n            <CategoryName>单电微单</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>5978</CategoryId>\\n            <Score>0.0654835</Score>\\n            <CategoryName>单反镜头</CategoryName>\\n        </Categories>\\n    </Data>\\n</ClassifyCommodityResponse>","errorExample":""}]',
            'title' => '商品分类',
            'summary' => '本文介绍商品分类ClassifyCommodity的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'商品分类能力可以识别图像中的商品分类，返回商品类目、置信度等信息。目前已经支持服饰鞋包、3C数码、家居用品等超过六千种类目分类。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=goodstech&children=ClassifyCommodity)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 商品类目'."\n"
                .'请单击[枚举类目](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt)查看当前支持识别的商品类目。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：'."\n"
                .'- 请确保您已经开通了[商品理解服务](https://vision.aliyun.com/goodstech)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_goodstech_public_cn#/open)。'."\n"
                .'- 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/goodstech/ClassifyCommodity)，申请通过后方可使用。'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/goodstech/2019-12-30/ClassifyCommodity?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fgoodstech%2FClassifyCommodity%2FClassifyCommodity1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为商品理解（goodstech）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[商品分类示例代码](~~601099~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPG、JPEG、PNG、BMP。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图像分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于商品分类的计费方式及报价，请参见[计费介绍](~~202477~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=goodstech&children=ClassifyCommodity)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI商品理解类目下的商品分类能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为商品理解（goodstech）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[商品分类示例代码](~~601099~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于商品分类的错误码，详情请参见[常见错误码](~~146738~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'goodstech.cn-shanghai.aliyuncs.com',
        ],
    ],
];
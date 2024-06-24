<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'goodstech',
    'version' => '2019-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 63954,
      'title' => '分类',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ClassifyCommodity',
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
    'ClassifyCommodity' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/goodstech/ClassifyCommodity/ClassifyCommodity1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
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
                'example' => '87C5AF93-F641-54C2-873D-0501E637489C',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Categories' => 
                  array (
                    'description' => '类目预测列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Score' => 
                        array (
                          'description' => '分类ID的匹配度，大于0小于等于1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.417248',
                        ),
                        'CategoryId' => 
                        array (
                          'description' => '类目ID。
> 您可以在 [category.txt](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt) 文件中查看该接口支持的类目ID和类目名称。',
                          'type' => 'string',
                          'example' => '584',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => '类目名称。
> 您可以在 [category.txt](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt) 文件中查看该接口支持的类目ID和类目名称。',
                          'type' => 'string',
                          'example' => '旁轴相机',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87C5AF93-F641-54C2-873D-0501E637489C\\",\\n  \\"Data\\": {\\n    \\"Categories\\": [\\n      {\\n        \\"Score\\": 0.417248,\\n        \\"CategoryId\\": \\"584\\",\\n        \\"CategoryName\\": \\"旁轴相机\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ClassifyCommodityResponse>\\n    <RequestId>87C5AF93-F641-54C2-873D-0501E637489C</RequestId>\\n    <Data>\\n        <Categories>\\n            <CategoryId>584</CategoryId>\\n            <Score>0.417248</Score>\\n            <CategoryName>旁轴相机</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>4856</CategoryId>\\n            <Score>0.309264</Score>\\n            <CategoryName>数码单反</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>733</CategoryId>\\n            <Score>0.103179</Score>\\n            <CategoryName>单电微单</CategoryName>\\n        </Categories>\\n        <Categories>\\n            <CategoryId>5978</CategoryId>\\n            <Score>0.0654835</Score>\\n            <CategoryName>单反镜头</CategoryName>\\n        </Categories>\\n    </Data>\\n</ClassifyCommodityResponse>","errorExample":""}]',
      'title' => '商品分类',
      'summary' => '本文介绍商品分类ClassifyCommodity的语法及示例。',
      'description' => '## 功能描述
商品分类能力可以识别图像中的商品分类，返回商品类目、置信度等信息。目前已经支持服饰鞋包、3C数码、家居用品等超过六千种类目分类。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=goodstech&children=ClassifyCommodity)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 商品类目
请单击[枚举类目](https://viapi-demo.oss-cn-shanghai.aliyuncs.com/doc/category.txt?spm=a2c4g.11186623.2.16.2c1d687bEDtrmY&file=category.txt)查看当前支持识别的商品类目。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：
- 请确保您已经开通了[商品理解服务](https://vision.aliyun.com/goodstech)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_goodstech_public_cn#/open)。
- 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/goodstech/ClassifyCommodity)，申请通过后方可使用。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/goodstech/2019-12-30/ClassifyCommodity?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fgoodstech%2FClassifyCommodity%2FClassifyCommodity1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为商品理解（goodstech）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[商品分类示例代码](~~601099~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：不限制图像分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。
- URL地址中不能包含中文字符。

## 计费说明
关于商品分类的计费方式及报价，请参见[计费介绍](~~202477~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=goodstech&children=ClassifyCommodity)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI商品理解类目下的商品分类能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为商品理解（goodstech）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[商品分类示例代码](~~601099~~)。',
      'extraInfo' => '## 错误码
关于商品分类的错误码，详情请参见[常见错误码](~~146738~~)。

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
      'endpoint' => 'goodstech.cn-shanghai.aliyuncs.com',
    ),
  ),
);
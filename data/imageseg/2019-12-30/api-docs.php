<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imageseg',
    'version' => '2019-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64411,
      'title' => '分割',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeSky',
        1 => 'ParseFace',
        2 => 'RefineMask',
        3 => 'SegmentBody',
        4 => 'SegmentCloth',
        5 => 'SegmentCommodity',
        6 => 'SegmentCommonImage',
        7 => 'SegmentFood',
        8 => 'SegmentHair',
        9 => 'SegmentHDBody',
        10 => 'SegmentHDCommonImage',
        11 => 'SegmentHDSky',
        12 => 'SegmentHead',
        13 => 'SegmentScene',
        14 => 'SegmentSkin',
        15 => 'SegmentSky',
      ),
    ),
    1 => 
    array (
      'id' => 64433,
      'title' => '结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
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
    'ChangeSky' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要替换天空的目标图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky2.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReplaceImageURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参考图URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky6.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F9D60817-EC5A-4BAC-9092-4AD42220CFA8',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '替换后的图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955791588111000000_5pn2QM.jpg?Expires=1595580958&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Sq4po8h3WAj%2BBFrCgTP3ghlXn4****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F9D60817-EC5A-4BAC-9092-4AD42220CFA8\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955791588111000000_5pn2QM.jpg?Expires=1595580958&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Sq4po8h3WAj%2BBFrCgTP3ghlXn4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ChangeSkyResponse>\\n    <RequestId>F9D60817-EC5A-4BAC-9092-4AD42220CFA8</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955791588111000000_5pn2QM.jpg?Expires=1595580958&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=Sq4po8h3WAj%2BBFrCgTP3ghlXn4****</ImageURL>\\n    </Data>\\n</ChangeSkyResponse>","errorExample":""}]',
      'title' => '天空替换',
      'summary' => '本文档介绍天空替换ChangeSky的语法及示例。',
      'description' => '## 功能描述
输入两种图像，天空替换能力可以将参考图B的天空样式替换到目标图A中，从而改变目标图A的天空样式，实现换天功能。
关于该接口功能的示例图如下：

- 目标图A
![天空A](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/xhwb/ChangeSkymubiaoA.jpg" width="500)

- 参考图B
![天空B](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/cjjx/ChangeSkycankaoB.jpg" width="500)

- 替换后的目标图A
![天空C](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/sdja/ChangeSkyjieguoA.jpg" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=ChangeSky)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/ChangeSky?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FChangeSky%2FChangeSky1.jpg%22%2C%22ReplaceImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FChangeSky%2FChangeSky6.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPEG、JPG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于50×50像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
天空替换能力目前处于公测期，可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的天空替换能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于天空替换的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ParseFace' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ParseFace/ParseFace1.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6C24839-91A7-41DA-B31F-98F08EF80CC0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '各个子元素的分割结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '抠图结果。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'string',
                          'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/560FA2E7-FDC6-59A5-ABDD-D62A05146734/skin/_18dd_20211231-040658.png?Expires=1640925418&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2g0M88wZl%2Bn4t4gzQX%2BTIskpWB****',
                        ),
                        'Name' => 
                        array (
                          'description' => '抠图结果key值。具体请参见下方表格说明。',
                          'type' => 'string',
                          'example' => 'skin',
                        ),
                      ),
                    ),
                  ),
                  'OriginImageURL' => 
                  array (
                    'description' => '原始图像URL地址。',
                    'type' => 'string',
                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ParseFace/ParseFace1.jpg',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6C24839-91A7-41DA-B31F-98F08EF80CC0\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/560FA2E7-FDC6-59A5-ABDD-D62A05146734/skin/_18dd_20211231-040658.png?Expires=1640925418&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2g0M88wZl%2Bn4t4gzQX%2BTIskpWB****\\",\\n        \\"Name\\": \\"skin\\"\\n      }\\n    ],\\n    \\"OriginImageURL\\": \\"http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ParseFace/ParseFace1.jpg\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ParseFaceResponse>\\n    <RequestId>318E490D-6955-5720-B1B4-31093242D00A</RequestId>\\n    <Data>\\n        <OriginImageURL>http://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/viapi-3.0domepic/imageseg/ParseFace/ParseFace1.jpg</OriginImageURL>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/skin/_e3ab_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=68Z1rRQT47o0501Ai5aJWH50ml****</ImageURL>\\n            <Name>skin</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/l_brow/_7f24_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=a8MVO5zFhL%2BA93Yce4DucIPGB%2B****</ImageURL>\\n            <Name>l_brow</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/r_brow/_2d2a_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=LjwcSshnOV1dhPbx5OjhQkwLaZ****</ImageURL>\\n            <Name>r_brow</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/l_eye/_5ba8_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=Ak6hAp5%2BWUiexlyUJSAL7PpC9g****</ImageURL>\\n            <Name>l_eye</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/r_eye/_03f3_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=0IfJ%2BXtOLTofKuMyru7G3DYIlU****</ImageURL>\\n            <Name>r_eye</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/l_ear/_2722_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=OfvsQuZ4Xb7hgvG6snbSK6%2BoWL****</ImageURL>\\n            <Name>l_ear</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/r_ear/_4c72_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=wTvhMOjb7Yxu9TSuysoNqr0Jtx****</ImageURL>\\n            <Name>r_ear</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/nose/_f37f_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=kfQPM6LEiZQX7jq6UkDPNsCM3Z****</ImageURL>\\n            <Name>nose</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/mouth/_75d9_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=pYe9WwXzhy9008SGx1OiZwdVWl****</ImageURL>\\n            <Name>mouth</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/u_lip/_e7ae_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=4prsADyajiJvxud5syDNanBiOr****</ImageURL>\\n            <Name>u_lip</Name>\\n        </Elements>\\n        <Elements>\\n            <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/fivesensesegmenter/prod/318E490D-6955-5720-B1B4-31093242D00A/l_lip/_35e6_20211231-040959.png?Expires=1640925599&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=sFeMY%2B5u0TgyqhHplY4z3qvxVn****</ImageURL>\\n            <Name>l_lip</Name>\\n        </Elements>\\n    </Data>\\n</ParseFaceResponse>","errorExample":""}]',
      'title' => '五官分割',
      'summary' => '本文档为您介绍五官分割ParseFace的语法及示例。',
      'description' => '## 功能描述
五官分割能力可以检测输入的人脸正面图像，对眼睛、鼻子、嘴进行像素级语义分割。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=ParseFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/ParseFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FParseFace%2FParseFace1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG 、PNG。
- 图像大小：不超过4 MB。
- 图像分辨率：大于100×100像素，小于2048×2048像素，且宽高比在0.5~2.0之间。
- 图像中仅包含单个人脸，要求正面，无眼镜、帽子等遮挡物。人脸部分的面积大小至少在100×100像素，且人脸检测框至少是对应边长的1/10。
- URL地址中不能包含中文字符。

## 计费说明
关于五官分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=ParseFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '### 抠图结果key值说明

| name值 | 类型 | 是否必须 | 描述 |
|--------|---------|----------|-------------|
| skin | string| 是 | 脸部皮肤的分割结果。 |
| l_brow | string| 是 | 左眉毛的分割结果。 |
| r_brow | string| 是 |右眉毛的分割结果。 |
| l_eye | string| 是 | 左眼睛的分割结果。 |
| r_eye | string| 是 | 右眼睛的分割结果。 |
| nose| string| 是 | 鼻子的分割结果。 |
| l_ear| string| 否 | 左耳的分割结果。 |
| r_ear| string| 否 | 右耳的分割结果。 |
| mouth| string| 否 |上下嘴唇中间部分的分割结果。若人物为闭嘴状态，则不会输出。 |
| u_lip| string| 是 | 上嘴唇的分割结果。 |
| l_lip| string| 是 | 下嘴唇的分割结果。 |

## SDK参考
阿里云视觉AI分割抠图类目下的五官分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于五官分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RefineMask' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaskImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '与输入图像对应的粗糙Mask图像。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/RefineMask/RefineMask6.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/RefineMask/RefineMask1.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E948F80B-86D9-54E0-9FF9-ACF3B1DA83C4',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回结果的图像。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '输出的精细化Mask的图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'string',
                          'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=1583406122&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E948F80B-86D9-54E0-9FF9-ACF3B1DA83C4\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=1583406122&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RefineMaskResponse>\\n    <RequestId>E948F80B-86D9-54E0-9FF9-ACF3B1DA83C4</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&amp;Expires=1583406122&amp;Signature=Heet1ivG0xFP3YlO6usvd0pmrH****</ImageURL>\\n        </Elements>\\n    </Data>\\n</RefineMaskResponse>","errorExample":""}]',
      'title' => 'Mask精细化分割',
      'summary' => '本文介绍Mask精细化分割RefineMask的语法及示例。',
      'description' => '## 功能描述
Mask精细化分割能力用于对输入图像与粗糙Mask进行精细化处理，输出精细化Mask。
关于该接口功能的示例图如下：
输入示例截图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/ajmp/RefineMask1.png" width="300)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/aebc/RefineMask2.png" width="300)

输出示例截图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/hzhh/RefineMaskjieguo.png" width="300)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=RefineMask)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/RefineMask?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FRefineMask%2FRefineMask1.jpg%22%2C%22MaskImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FRefineMask%2FRefineMask6.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[Mask精细化分割示例代码](~~605126~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：小于3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于Mask精细化分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=RefineMask)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的Mask精细化分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[Mask精细化分割示例代码](~~605126~~)。',
      'extraInfo' => '## 错误码
关于Mask精细化分割的错误码，详情请参见[常见错误码](~~146751~~)。

## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见[SDK总览](~~145033~~)下载安装。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：小于2000×2000像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentBody/SegmentBody1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像形式。

- 如果设置为`mask`，则返回单通道黑白图。

- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。

- 如果设置为`whiteBK`，则返回白底图。

- 如果不设置或者设置为其他值，则返回四通道PNG图。',
            'type' => 'string',
            'required' => false,
            'example' => 'mask',
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
                'example' => '30EDCEEA-2806-44C6-AF0B-0988849106FE',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
请求参数指定返回的图像形式。
- 如果设置为`mask`，则返回单通道黑白图。
- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。
- 如果设置为`whiteBK`，则返回白底图。
- 如果不设置或者设置为其他值，则返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_humansegmenter/2021-3-31/invi_humansegmenter_016171823500001081370_Ej0WwO.jpg?Expires=1617184150&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZwaWXpAOMzHar%2B1wVO7zeSD83r****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30EDCEEA-2806-44C6-AF0B-0988849106FE\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_humansegmenter/2021-3-31/invi_humansegmenter_016171823500001081370_Ej0WwO.jpg?Expires=1617184150&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZwaWXpAOMzHar%2B1wVO7zeSD83r****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentBodyResponse>\\n    <RequestId>30EDCEEA-2806-44C6-AF0B-0988849106FE</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_humansegmenter/2021-3-31/invi_humansegmenter_016171823500001081370_Ej0WwO.jpg?Expires=1617184150&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=ZwaWXpAOMzHar%2B1wVO7zeSD83r****</ImageURL>\\n    </Data>\\n</SegmentBodyResponse>","errorExample":""}]',
      'title' => '人体分割',
      'summary' => '本文介绍人体分割SegmentBody的语法及示例。',
      'description' => '## 功能描述
人体分割能力用于识别输入图像中的人体轮廓，与背景进行分离，返回分割后的前景人像图（4通道）。本功能适用于真人图片，不适用于卡通图片。
关于该接口功能的示例图如下：

- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/uqbc/SegmentBody.png" width="500)
- 输出结果图（默认为4通道透明图，和原图分辨率保持一致）
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/vuji/SegmentBodyjieguo.png" width="500)

您可以传入ReturnForm参数指定返回结果形式：

- 指定为**crop**，对边缘空白区域进行裁剪
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/pfxs/SegmentBodycrop.png" width="500)
- 指定为**mask**，返回二值遮罩图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ltcq/SegmentBodymask.png" width="500)
- 指定为**whiteBK**，返回纯白背景的白底图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/qqrj/SegmentBodywhiteBK.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentBody)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 人像摄影：人体分割通过将摄影主体人物从背景中分割出来，将背景虚化，以达到大光圈浅景深效果，突出人物主体。

- 证件照制作：上传或拍摄一张生活照，可将人物精细地分割出来，再搭配其他背景处理能力，最终制作出标准的证件照。


## 特色优势

- 发丝级精细分割：在细碎部位提供更高的分割精度，细到发丝都能被精确分割，使结果图像没有违和感，难以被觉察出经过处理。

- 适应复杂背景：即使人物处于复杂背景环境，依然可以将人体准确地从背景中分割出来。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentBody?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentBody%2FSegmentBody1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码及常见结果后续处理示例，请参见[人体分割示例代码](~~467471~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于人体分割的计费方式及报价，请参见[计费介绍](~~190132~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的人体分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码及最佳实践
该能力常用语言的示例代码及常见结果后续处理示例，请参见[人体分割示例代码](~~467471~~)。',
      'extraInfo' => '## 错误码
关于人体分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentCloth' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentCloth/SegmentCloth1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ClothClass',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服饰类别，取值范围：
- tops：上衣
- coat：外套
- skirt：裙装
- pants：裤装
- bag：包类
- shoes：鞋子
- hat：帽子',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服饰类别。可一次传入多个值。取值范围：
- tops：上衣
- coat：外套
- skirt：裙装
- pants：裤装
- bag：包类
- shoes：鞋子
- hat：帽子',
              'type' => 'string',
              'required' => false,
              'example' => 'tops',
            ),
            'required' => false,
            'maxItems' => 15,
          ),
        ),
        2 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像格式，取值范围：

- whiteBK：返回白底图。
- mask：返回单通道mask。
- 如果不设置，则返回四通道PNG图。
',
            'type' => 'string',
            'required' => false,
            'example' => 'whiteBK',
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
                'example' => 'BCE049A3-FE69-41CF-A870-5970156388A7',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回元素的数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回元素的数组。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '返回抠图结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'string',
                          'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/clothingsegmentation-2020-06-17-16-54-40-688c84cbbd-hnqfq/2020-6-18/invi__015924459307821000041_IIVHoM.png?Expires=1592447730&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Hy8pn3IQj8nuKN0LEaC57cee9L****',
                        ),
                        'ClassUrl' => 
                        array (
                          'description' => '根据用户输入的`clothClass`返回一个服饰类别对应的URL。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => '{\'tops\':http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/..,\'hat\':http://viapi-cn-shanghai-dha-segmenter...,...}',
                            'description' => '根据用户输入的`clothClass`返回一个服饰类别对应的URL。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BCE049A3-FE69-41CF-A870-5970156388A7\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/clothingsegmentation-2020-06-17-16-54-40-688c84cbbd-hnqfq/2020-6-18/invi__015924459307821000041_IIVHoM.png?Expires=1592447730&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Hy8pn3IQj8nuKN0LEaC57cee9L****\\",\\n        \\"ClassUrl\\": {\\n          \\"key\\": \\"{\'tops\':http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/..,\'hat\':http://viapi-cn-shanghai-dha-segmenter...,...}\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentClothResponse>\\n    <RequestId>BCE049A3-FE69-41CF-A870-5970156388A7</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/clothingsegmentation-2020-06-17-16-54-40-688c84cbbd-hnqfq/2020-6-18/invi__015924459307821000041_IIVHoM.png?Expires=1592447730&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=Hy8pn3IQj8nuKN0LEaC57cee9L****</ImageURL>\\n            <ClassUrl>\\n                <key>{\'tops\':http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/..,\'hat\':http://viapi-cn-shanghai-dha-segmenter...,...}</key>\\n            </ClassUrl>\\n        </Elements>\\n    </Data>\\n</SegmentClothResponse>","errorExample":""}]',
      'title' => '服饰分割',
      'summary' => '本文介绍服饰分割SegmentCloth的语法及示例。',
      'description' => '## 功能描述
服饰分割能力可以对输入人台服饰、真人服饰、纯服饰、虚拟人服饰等场景图片中的主体服饰进行像素级抠图，并返回抠图结果。服饰分割主要是针对图片中的服装进行精细化分割，服饰分割标准支持外套、上装（含内衬）、裤装、裙装、帽子、鞋子、包包品类分割，其他皮带、领带等装饰品等内容建议使用[商品分割](~~151961~~)。
关于该接口功能的示例图如下：
输入原图（左）和输出结果图（右）
- 识别出服饰类别为：tops（上衣）、skirt（裙装）、shoes（鞋子）
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/xnvf/SegmentClothtops_skirt_shoes.png" width="400)
- 识别出服饰类别为：tops（上衣）、pants（裤装）、shoes（鞋子）、bag（包类）
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/hptw/SegmentClothtops_pants_shoes_bag.png" width="400)
- 识别出服饰类别为：hat（帽子）
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/guxr/SegmentClothhat.png" width="400)

您可以传入ReturnForm参数指定返回结果形式：
- 指定为**mask**，返回二值遮罩图。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/zadd/SegmentClothmask.png" width="400)
- 指定为**whiteBK**，返回纯白背景的白底图。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/nwyz/SegmentClothwhiteBK.png" width="400)
- 不指定参数，返回无背景的图。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231213/mkru/SegmentCloth.png" width="400)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentCloth)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 电商服饰分割：可对电商服饰图片进行前景分割处理，实现服饰的背景分离和替换，实现电商服饰主图批量处理和制作。
- 虚拟试衣制作：在婚纱摄影、民族服饰、汉服、仿妆等虚拟试衣场景，通过图片服饰前处理环节进行服饰分割，再通过AIGC生成技术进行换装试穿。
- 个性化智能识别：可针对图片中的外套、上装（含内衬）、裤装、裙装、帽子、鞋子、包包品类指定类别mask进行分割处理返回，实现指定个性化服饰类型抠图处理。

## 特点优势
- 多类型自动识别：自动识别出图像中的主体服饰，不需要额外指定服装位置，可返回指定类别mask。
- 适用多服饰场景：适用于人台服饰、真人服饰、纯服饰、虚拟人服饰等精细化抠图场景。
- 复杂全类目分割：适合多服饰商品以及复杂背景条件下的服饰主体分割，实现精细化全类目分割。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentCloth?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentCloth%2FSegmentCloth1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[服饰分割示例代码](~~605161~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPEG、JPG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于50×50像素，且小于3000×3000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于服饰分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentCloth)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的服饰分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[服饰分割示例代码](~~605161~~)。',
      'extraInfo' => '## 错误码
关于服饰分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentCommodity' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：小于2000×2000像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentCommodity/SegmentCommodity1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像形式。

- 如果不设置，则返回四通道PNG图。
- 如果设置为`mask`，则返回单通道mask。
- 如果设置为`whiteBK`，则返回白底图。
- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'mask',
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
                'example' => 'D6C24839-91A7-41DA-B31F-98F08EF80CC0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
请求参数指定返回的图像形式。

- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。
- 如果设置为`mask`，则返回单通道mask。
- 如果设置为`whiteBK`，则返回白底图。
- 如果不设置，则返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6C24839-91A7-41DA-B31F-98F08EF80CC0\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentCommodityResponse>\\n    <RequestId>D6C24839-91A7-41DA-B31F-98F08EF80CC0</RequestId>\\n    <Data>\\n        <ImageURL>http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&amp;OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&amp;Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****</ImageURL>\\n    </Data>\\n</SegmentCommodityResponse>","errorExample":""}]',
      'title' => '商品分割',
      'summary' => '本文介绍商品分割SegmentCommodity的语法及示例。',
      'description' => '## 功能描述
商品分割能力用于识别输入图像中的商品轮廓，与背景进行分离，返回分割后的前景商品图（4通道）。功能适用于实景图，不适用于卡通图片。商品分割主要针对拍到全貌的商品进行分割。
关于该接口功能的示例图如下：

- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/irrr/SegmentCommodity.jpg" width="500)
- 输出结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/mqvn/SegmentCommodityjieguo.png" width="500)

您可以传入ReturnForm参数指定返回结果形式：

- 指定为**crop**，对边缘空白区域进行裁剪
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/bzvy/SegmentCommoditycrop.png" width="500)
- 指定为**mask**，返回二值遮罩图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/fdjs/SegmentCommoditymask.png" width="500)
- 指定为**whiteBK**，返回纯白背景的白底图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/snyw/SegmentCommoditywhiteBK.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentCommodity)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
商品海报图制作：从拍摄的商品实物照片中分割出目标商品，再进行后续平面设计，制作出商品宣传图片。

## 优势特点

- 自动识别商品：能够自动识别图片中的主体商品，并进行商品主体与背景的精准分割。
- 适合多商品、复杂背景场景：适合多商品以及复杂背景条件下的商品分割。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentCommodity?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentCommodity%2FSegmentCommodity1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[商品分割示例代码](~~605160~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于商品分割的计费方式及报价，请参见[计费介绍](~~190132~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的——能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

##  示例代码
该能力常用语言的示例代码，请参见[商品分割示例代码](~~605160~~)。',
      'extraInfo' => '## 错误码
关于商品分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentCommonImage' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素，最长边小于等于1999像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentCommonImage/SegmentCommonImage1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像形式。

- 如果不设置，则返回四通道PNG图。
- 如果设置为`mask`，则返回单通道mask。
- 如果设置为`whiteBK`，则返回白底图。
- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。',
            'type' => 'string',
            'required' => false,
            'example' => 'mask',
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
                'example' => '1B8BEF02-0672-44CA-A974-4D6FAC392497',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
请求参数指定返回的图像形式。
- 如果不设置，则返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
- 如果设置为`mask`，则返回单通道mask。
- 如果设置为`whiteBK`，则返回白底图。
- 如果设置为`crop`，则返回裁剪之后的四通道PNG图（裁掉边缘空白区域）。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B8BEF02-0672-44CA-A974-4D6FAC392497\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentCommonImageResponse>\\n    <RequestId>1B8BEF02-0672-44CA-A974-4D6FAC392497</RequestId>\\n    <Data>\\n        <ImageURL>http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&amp;OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&amp;Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****</ImageURL>\\n    </Data>\\n</SegmentCommonImageResponse>","errorExample":""}]',
      'title' => '通用分割',
      'summary' => '本文为您介绍通用分割SegmentCommonImage的语法及示例。',
      'description' => '## 功能描述
通用分割能力可以识别输入图像中视觉中心的物体轮廓，将物体与背景进行分离，返回分割后的前景物体图（4通道）。
关于该接口功能的示例图如下：

- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/irrr/SegmentCommodity.jpg" width="500)
- 输出结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/mqvn/SegmentCommodityjieguo.png" width="500)

您可以传入ReturnForm参数指定返回结果形式：

- 指定为**crop**，对边缘空白区域进行裁剪
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/bzvy/SegmentCommoditycrop.png" width="500)
- 指定为**mask**，返回二值遮罩图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/fdjs/SegmentCommoditymask.png" width="500)
- 指定为**whiteBK**，返回纯白背景的白底图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/snyw/SegmentCommoditywhiteBK.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentCommonImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

图片编辑：可批量对图像前景和背景进行智能分离，实现图像后续的二次编辑。

## 特点优势

- 自动主体识别：自动识别出图像中的主体物体，不需要额外指定。
- 适用多个场景：适用于人、动物、食物、物品、家居等抠图场景，不适用于卡通图。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentCommonImage?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentCommonImage%2FSegmentCommonImage1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码及最佳实践：该能力常用语言的示例代码及常见结果后续处理示例，请参见[通用图像分割示例代码](~~467470~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG（不支持8位、16位、64位PNG）、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素，最长边小于等于1999像素。
- URL地址中不能包含中文字符。

## 计费说明
关于通用分割的计费方式及报价，请参见[计费介绍](~~190132~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的通用分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码及最佳实践
该能力常用语言的示例代码及常见结果后续处理示例，请参见[通用图像分割示例代码](~~467470~~)。',
      'extraInfo' => '## 错误码
关于通用分割的错误码， 详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentFood' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentFood/SegmentFood5.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像形式。

- 如果不设置，则返回四通道PNG图。
- 如果设置为`mask`，则返回单通道mask。
- 如果设置为`whiteBK`，则返回白底图。',
            'type' => 'string',
            'required' => false,
            'example' => 'mask',
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
                'example' => '38265D08-AD0F-4752-8E96-D1D9FB96C3D9',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '返回抠图结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/foodsegmenter-2020-06-17-15-24-00-8658fc85b8-8ds8k/2020-6-18/invi__015924442076191000002_WqJ99N.png?Expires=1592446007&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=5ITSd6ndSuP7pUfoDFpgLPUOGg****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"38265D08-AD0F-4752-8E96-D1D9FB96C3D9\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/foodsegmenter-2020-06-17-15-24-00-8658fc85b8-8ds8k/2020-6-18/invi__015924442076191000002_WqJ99N.png?Expires=1592446007&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=5ITSd6ndSuP7pUfoDFpgLPUOGg****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentFoodResponse>\\n    <RequestId>38265D08-AD0F-4752-8E96-D1D9FB96C3D9</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/foodsegmenter-2020-06-17-15-24-00-8658fc85b8-8ds8k/2020-6-18/invi__015924442076191000002_WqJ99N.png?Expires=1592446007&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=5ITSd6ndSuP7pUfoDFpgLPUOGg****</ImageURL>\\n    </Data>\\n</SegmentFoodResponse>","errorExample":""}]',
      'title' => '食品分割',
      'summary' => '本文介绍食品分割SegmentFood的语法及示例。',
      'description' => '## 功能描述
食品分割能力用于对图片中的食品进行像素级抠图，并返回抠图结果。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentFood)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 餐厅菜单：拍摄实物菜品后，通过食品分割，即可将菜品从杂乱背景中抠出，添加到菜单中。
- 美食广告：在餐饮业推广宣传中，将美食照片抠图后再加工处理成广告素材。

## 特色优势
适应范围广：适合大部分中西式菜品、面包、蛋糕点心等自动抠图。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentFood?spm=a2c4g.171485.0.i3)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPEG、JPG、BMP。
- 图像大小：不超过4 MB。
- 图像分辨率：大于40×40像素，小于1999×1999像素。
- URL地址中不能包含中文字符。

## 计费说明
关于食品分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentFood)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的食品分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于食品分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentHair' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHair/SegmentHair1.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6C24839-91A7-41DA-B31F-98F08EF80CC0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '各个子元素的抠图结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'string',
                          'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_HeadSegmenter/2021-12-31/invi_HeadSegmenter_016409228383064285967296_iPLUXA.png?Expires=1640924638&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=wpKOqSar1bYvGmlTMryfEH2Q9I****',
                        ),
                        'Width' => 
                        array (
                          'description' => '结果图的宽度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '113',
                        ),
                        'Height' => 
                        array (
                          'description' => '结果图的高度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '180',
                        ),
                        'Y' => 
                        array (
                          'description' => '结果图左上角在原图中的y轴坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '102',
                        ),
                        'X' => 
                        array (
                          'description' => '结果图左上角在原图中的x轴坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '446',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6C24839-91A7-41DA-B31F-98F08EF80CC0\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_HeadSegmenter/2021-12-31/invi_HeadSegmenter_016409228383064285967296_iPLUXA.png?Expires=1640924638&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=wpKOqSar1bYvGmlTMryfEH2Q9I****\\",\\n        \\"Width\\": 113,\\n        \\"Height\\": 180,\\n        \\"Y\\": 102,\\n        \\"X\\": 446\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentHairResponse>\\n    <RequestId>D6C24839-91A7-41DA-B31F-98F08EF80CC0</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_HeadSegmenter/2021-12-31/invi_HeadSegmenter_016409228383064285967296_iPLUXA.png?Expires=1640924638&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=wpKOqSar1bYvGmlTMryfEH2Q9I****</ImageURL>\\n            <Width>113</Width>\\n            <Height>180</Height>\\n            <Y>102</Y>\\n            <X>446</X>\\n        </Elements>\\n    </Data>\\n</SegmentHairResponse>","errorExample":""}]',
      'title' => '头发分割',
      'summary' => '本文档介绍头发分割SegmentHair的语法及示例。',
      'description' => '## 功能描述
头发分割能力用于识别图像中的人物头像，然后对人物头像区域进行抠图解析，最后输出PNG格式的人物头发矩形透明图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHair)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 假发网络试戴：通过头发分割，截取自拍照的头发后，换成假发图像，就可以直接看到假发试戴效果，省去了网购后佩戴不合适需要退换货的烦恼。
- 理发店发型尝试：发型师指导客户通过平板电脑或手机拍摄的自己头像，换成各种发型，有更直观的感觉。客户可以选择最喜欢的发型，让发型师为自己打理。

## 特色优势
发丝边缘的精确分割：对发丝边缘可以精确分割，分割后图像编辑结果无违和感。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentHair?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentHair%2FSegmentHair1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[头发分割示例代码](~~605130~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3M。
- 图像分辨率：大于32×32像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于头发分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHair)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的头发分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[头发分割示例代码](~~605130~~)。',
      'extraInfo' => '## 错误码
关于头发分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentHDBody' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：
- 图像格式：JPG、JPEG 、BMP、PNG（透明图）。
- 图像大小：不超过40 MB 。
- 图像分辨率：大于32×32像素，小于6000×6000像素，最长边小于等于6000像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHDBody/SegmentHDBody1.jpg',
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
                'example' => 'A8D3F5C3-E414-4981-8D84-E2CADF0B7CBC',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
输出图像在原始图像的3通道基础上增加alpha通道生成四通道PNG图像作为输出，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/segmenthdbody-2020-05-18-16-27-45-675d9884d7-kd9dz/2020-5-18/invi_humansegmenter_015897914589851000001_wQbLq9.png?Expires=1589793259&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Lx6xSS0t7lqEvy5Qd1keccIAjL****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8D3F5C3-E414-4981-8D84-E2CADF0B7CBC\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/segmenthdbody-2020-05-18-16-27-45-675d9884d7-kd9dz/2020-5-18/invi_humansegmenter_015897914589851000001_wQbLq9.png?Expires=1589793259&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Lx6xSS0t7lqEvy5Qd1keccIAjL****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentHDBodyResponse>\\n    <RequestId>A8D3F5C3-E414-4981-8D84-E2CADF0B7CBC</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/segmenthdbody-2020-05-18-16-27-45-675d9884d7-kd9dz/2020-5-18/invi_humansegmenter_015897914589851000001_wQbLq9.png?Expires=1589793259&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=Lx6xSS0t7lqEvy5Qd1keccIAjL****</ImageURL>\\n    </Data>\\n</SegmentHDBodyResponse>","errorExample":""}]',
      'title' => '高清人体分割',
      'summary' => '本文介绍高清人体分割SegmentHDBody的语法及示例。',
      'description' => '## 功能描述
高清人体分割能力可以自动识别图中人体轮廓，实现与背景进行分离，返回分割后的前景人像图。本功能适用于真人图片，不适用于卡通图片。
关于该接口功能的示例图如下：
- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/kgdi/SegmentHDBody.jpg" width="500)
- 输出结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/phjn/SegmentHDBodyjieguo.png" width="500)

> - 与人体分割（SegmentBody）接口相比，该接口支持更高像素图片的分割，最大可达40 MB。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHDBody)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 人像摄影：人体分割通过将摄影主体人物从背景中分割出来，将背景虚化，以达到大光圈浅景深效果，突出人物主体。
- 证件照制作：上传或拍摄一张人像照片，可将人物精细地分割出来，再搭配其他背景处理能力，最终制作出标准的证件照。

## 特色优势

- 发丝级精细分割：在边缘细节部位达到更高的分割精度，细到发丝都能被精确分割，使结果图像没有违和感，难以被觉察出经过处理。
- 适应复杂背景：即使人物处于复杂背景环境，依然可以将人体准确地从背景中分割出来。
- 适用多人图像：适用于单人、多人、复杂背景、各类人体姿态等。
- 支持高清图像：支持更高分辨率图片的分割，最大可达40 MB。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentHDBody?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentHDBody%2FSegmentHDBody1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[高清人体分割示例代码](~~605134~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG 、BMP、PNG（透明图）。
- 图像大小：不超过40 MB。
- 图像分辨率：大于32×32像素，小于6000×6000像素，最长边小于等于6000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于高清人体分割的计费方式及报价，请参见[计费介绍](~~190132~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的高清人体分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[高清人体分割示例代码](~~605134~~)。',
      'extraInfo' => '## 错误码
关于高清人体分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentHDCommonImage' => 
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
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHDCommonImage/SegmentHDCommonImage1.jpg',
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
                'example' => 'EC994171-7964-44B3-85AF-A715CB56747D',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageUrl' => 
                  array (
                    'description' => '结果图像的URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_commoditysegmenter/2020-10-27/invi_commoditysegmenter_016037842193171000000_5pn2QM.png?Expires=1603786019&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=HwUztguGBYXmXGEmuTh%2FL3ztoh****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '提交异步任务后的提示信息。',
                'type' => 'string',
                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC994171-7964-44B3-85AF-A715CB56747D\\",\\n  \\"Data\\": {\\n    \\"ImageUrl\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_commoditysegmenter/2020-10-27/invi_commoditysegmenter_016037842193171000000_5pn2QM.png?Expires=1603786019&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=HwUztguGBYXmXGEmuTh%2FL3ztoh****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<SegmentHDCommonImageResponse>\\n    <RequestId>EC994171-7964-44B3-85AF-A715CB56747D</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</SegmentHDCommonImageResponse>","errorExample":""}]',
      'title' => '通用高清分割',
      'summary' => '本文介绍通用高清分割SegmentHDCommonImage的语法及示例。',
      'description' => '## 功能描述
通用高清分割能力对图像中的主体进行分割，并输出对应的PNG格式透明图。

>- 通用高清分割相较于通用分割的优势为：通用高清分割最大可以识别分辨率10000×10000像素的图片，而通用分割最大仅可以识别的2000×2000像素的图像，对于分辨率较大的高清图像可以使用通用高清分割能力。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHDCommonImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentHDCommonImage?lang=JAVA&sdkStyle=dara&params=%7B%22ImageUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentHDCommonImage%2FSegmentHDCommonImage1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[通用高清分割示例代码](~~605128~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：PNG、JPEG、JPG、BMP。
- 图像大小：不超过40 MB。
- 图像分辨率：大于32×32像素，小于10000×10000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于通用高清分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHDCommonImage)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用SegmentHDCommonImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI分割抠图类目下的通用高清分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[通用高清分割示例代码](~~605128~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于通用高清分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentHDSky' => 
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要分割天空的目标图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHDSky/SegmentHDSky4.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1173F38F-B4F4-4A07-AB2E-D490C01347E5',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '分割后的图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sky-segmentation-hd/res/1173F38F-B4F4-4A07-AB2E-D490C01347E5_0d56_20201027-061858.jpg?Expires=1603781339&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2F8%2Bj%2FWruWOMqDezwpnJOkcNJD****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1173F38F-B4F4-4A07-AB2E-D490C01347E5\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sky-segmentation-hd/res/1173F38F-B4F4-4A07-AB2E-D490C01347E5_0d56_20201027-061858.jpg?Expires=1603781339&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2F8%2Bj%2FWruWOMqDezwpnJOkcNJD****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentHDSkyResponse>\\n    <RequestId>1173F38F-B4F4-4A07-AB2E-D490C01347E5</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sky-segmentation-hd/res/1173F38F-B4F4-4A07-AB2E-D490C01347E5_0d56_20201027-061858.jpg?Expires=1603781339&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=2F8%2Bj%2FWruWOMqDezwpnJOkcNJD****</ImageURL>\\n    </Data>\\n</SegmentHDSkyResponse>","errorExample":""}]',
      'title' => '天空高清分割',
      'summary' => '本文介绍天空高清分割SegmentHDSky的语法及示例。',
      'description' => '## 功能描述
天空高清分割能力可以对输入图像中的天空进行像素级抠图，实现分割功能。效果示例如下。
关于该接口功能的示例图如下：

- 原图
![原图](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/ztyf/SegmentHDSky.jpg" width="600)

- 天空高清分割结果
![天空高清分割结果](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/cpob/SegmentHDSkygaoqing.png" width="600)

- 天空分割结果
![天空分割结果](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/darb/SegmentHDSkyfenge.png" width="600)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHDSky)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
户外美照：当您在户外所拍摄的照片天空不够蔚蓝通透时，无论多复杂的场景，天空高清分割都可以将天空部分抠出，您可以换上美美的天空，让照片达到理想的视觉效果。

## 特色优势
- 支持更大分辨率：天空高清分割最大可以识别分辨率5000×5000像素的图片，更适合商业摄影的高水准后期处理。
- 支持更多细节：天空高清分割可以得到更精细的图片，展现更多的细节。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentHDSky?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentHDSky%2FSegmentHDSky1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[天空高清分割示例代码](~~605169~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPEG、JPG。
- 图像大小：不超过9.5M。
- 图像分辨率：大于50×50像素，小于5000×5000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于天空高清分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHDSky)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的天空高清分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[天空高清分割示例代码](~~605169~~)。',
      'extraInfo' => '## 错误码
关于天空高清分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentHead' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentHead/SegmentHead1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的图像形式。

- 如果设置为`mask`，则返回单通道mask。
- 如果不设置或者设置为任意非mask值，则返回四通道PNG图。',
            'type' => 'string',
            'required' => false,
            'example' => 'mask',
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
                'example' => '89BBDA42-E1CA-426E-9A46-C703D8DBB1E2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '各个子元素的抠图结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                          'type' => 'string',
                          'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809094981099086_TAamhR.png?Expires=1591082709&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=xuUE%2FbYeB9LpR18VXawOVeutQU****',
                        ),
                        'Width' => 
                        array (
                          'description' => '结果图的宽度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '116',
                        ),
                        'Height' => 
                        array (
                          'description' => '结果图的高度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '180',
                        ),
                        'Y' => 
                        array (
                          'description' => '左上角y坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '102',
                        ),
                        'X' => 
                        array (
                          'description' => '左上角x坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '445',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89BBDA42-E1CA-426E-9A46-C703D8DBB1E2\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809094981099086_TAamhR.png?Expires=1591082709&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=xuUE%2FbYeB9LpR18VXawOVeutQU****\\",\\n        \\"Width\\": 116,\\n        \\"Height\\": 180,\\n        \\"Y\\": 102,\\n        \\"X\\": 445\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89BBDA42-E1CA-426E-9A46-C703D8DBB1E2</RequestId>\\n<Data>\\n    <Elements>\\n        <X>445</X>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809094981099086_TAamhR.png?Expires=1591082709&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=xuUE%2FbYeB9LpR18VXawOVeutQU****</ImageURL>\\n        <Y>102</Y>\\n        <Height>180</Height>\\n        <Width>116</Width>\\n    </Elements>\\n    <Elements>\\n        <X>222</X>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809096071099089_e0oCCM.png?Expires=1591082709&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=phcOQyNR0px4gjlM2F9WfG54nX****</ImageURL>\\n        <Y>49</Y>\\n        <Height>192</Height>\\n        <Width>176</Width>\\n    </Elements>\\n    <Elements>\\n        <X>86</X>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809097101099092_BijNs3.png?Expires=1591082709&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=EQ43v12hqR%2FZOI9d9r753GZTyX****</ImageURL>\\n        <Y>44</Y>\\n        <Height>181</Height>\\n        <Width>123</Width>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '头像分割',
      'summary' => '本文介绍头像分割SegmentHead的语法及示例。',
      'description' => '## 功能描述
头像分割能力用于识别图像中的人物头像，并对人物头像进行抠图解析，最后输出PNG格式的人物头像透明图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHead)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentHead?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentHead%2FSegmentHead1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[头像分割示例代码](~~605157~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素。
- URL地址不能包含中文字符。
- 输入多张人脸的图片，可能导致服务超时报错，建议图片人脸不超过5张。

## 计费说明
关于头像分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentHead)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的头像分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[头像分割示例代码](~~605157~~)。',
      'extraInfo' => '## 错误码
关于头像分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentScene' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentScene/SegmentScene1.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '78EC13BB-74C5-4FBE-916E-C98BD721ED61',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955807385661000002_WqJ99N.jpg?Expires=1595582538&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=sBP5bQCErDolM4QQG5%2B0HozNoO****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"78EC13BB-74C5-4FBE-916E-C98BD721ED61\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955807385661000002_WqJ99N.jpg?Expires=1595582538&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=sBP5bQCErDolM4QQG5%2B0HozNoO****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentSceneResponse>\\n    <RequestId>78EC13BB-74C5-4FBE-916E-C98BD721ED61</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955807385661000002_WqJ99N.jpg?Expires=1595582538&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=sBP5bQCErDolM4QQG5%2B0HozNoO****</ImageURL>\\n    </Data>\\n</SegmentSceneResponse>","errorExample":""}]',
      'title' => '室外场景分割',
      'summary' => '本文档介绍室外场景分割SegmentScene的语法及示例。',
      'description' => '## 功能描述
室外场景分割能力可以对图像中的场景进行像素级抠图。当前共支持13种场景：天空、草地、地面、树木、花、山石、水、雪地、建筑物、人物、动物、交通工具、结构物、其他。
关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/xkzp/SegmentScene.png" width="600)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentScene)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentScene?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentScene%2FSegmentScene1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPEG、JPG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于50×50像素，小于3000×3000像素。
- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的室外场景分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于室外场景分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentSkin' => 
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
          'name' => 'URL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentSkin/SegmentSkin2.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA007354-6CF5-45BE-8333-E06318D848C0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'URL' => 
                  array (
                    'description' => '分割结果图像的URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skinsegmenter/2020-9-27/invi_skinsegmenter_016011971641871000001_wQbLq9.jpg?Expires=1601198964&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=xjKc%2BScprmB86cxtI%2B1T0R6TlE****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'The parameter is invalid. Please check again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthFailed',
            'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'The request has timed out.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA007354-6CF5-45BE-8333-E06318D848C0\\",\\n  \\"Data\\": {\\n    \\"URL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skinsegmenter/2020-9-27/invi_skinsegmenter_016011971641871000001_wQbLq9.jpg?Expires=1601198964&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=xjKc%2BScprmB86cxtI%2B1T0R6TlE****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentSkinResponse>\\n    <RequestId>DA007354-6CF5-45BE-8333-E06318D848C0</RequestId>\\n    <Data>\\n        <URL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skinsegmenter/2020-9-27/invi_skinsegmenter_016011971641871000001_wQbLq9.jpg?Expires=1601198964&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=xjKc%2BScprmB86cxtI%2B1T0R6TlE****</URL>\\n    </Data>\\n</SegmentSkinResponse>","errorExample":""}]',
      'title' => '皮肤分割',
      'summary' => '本文介绍皮肤分割SegmentSkin的语法及示例。',
      'description' => '## 功能描述
皮肤分割能力用于识别图片中的人物皮肤，并对图中人物的皮肤区域进行分割，输出对应的mask图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentSkin)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentSkin?lang=JAVA&sdkStyle=dara&params=%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentSkin%2FSegmentSkin1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG（不支持8位、16位、64位PNG）、JPEG、JPG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于皮肤分割的计费方式及报价，请参见[计费介绍](~~190132~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentSkin)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的皮肤分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于皮肤分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentSky' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentSky/SegmentSky5.jpg',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '80E9D0A0-0330-4210-9986-CAC50C922FF0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '结果图像URL地址。
抠图之后返回四通道PNG图，无压缩，图像尺寸保持不变，图像体积会变大。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/skysegmentation-2020-05-18-10-44-16-5bc8dc79f9-92b7z/2020-5-18/invi_skySegmentator_015897703560961000003_SqZLDv.png?Expires=1589772156&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=gXrzAUl%2BvIdYbQ9XKdho54MlkX****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"80E9D0A0-0330-4210-9986-CAC50C922FF0\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/skysegmentation-2020-05-18-10-44-16-5bc8dc79f9-92b7z/2020-5-18/invi_skySegmentator_015897703560961000003_SqZLDv.png?Expires=1589772156&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=gXrzAUl%2BvIdYbQ9XKdho54MlkX****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SegmentSkyResponse>\\n    <RequestId>80E9D0A0-0330-4210-9986-CAC50C922FF0</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/skysegmentation-2020-05-18-10-44-16-5bc8dc79f9-92b7z/2020-5-18/invi_skySegmentator_015897703560961000003_SqZLDv.png?Expires=1589772156&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=gXrzAUl%2BvIdYbQ9XKdho54MlkX****</ImageURL>\\n    </Data>\\n</SegmentSkyResponse>","errorExample":""}]',
      'title' => '天空分割',
      'summary' => '本文档介绍天空分割SegmentSky的语法及示例。',
      'description' => '## 功能描述
天空分割能力可以识别输入图像中的天空区域，与背景进行分离，返回分割后的前景区域图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageseg&children=SegmentSky)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageseg/2019-12-30/SegmentSky?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageseg%2FSegmentSky%2FSegmentSky1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为分割抠图（imageseg）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG 、BMP、PNG。
- 图像大小： 不超过3 MB。
- 图像分辨率：大于50×50像素，小于3000×3000像素。
- URL地址中不能包含中文字符。

## 计费说明
天空分割能力目前处于公测期，可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI分割抠图类目下的天空分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为分割抠图（imageseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于天空分割的错误码，详情请参见[常见错误码](~~146751~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GetAsyncJobResult' => 
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
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '异步接口返回的RequestId，输入后可以查询异步接口的真实请求结果。',
            'type' => 'string',
            'required' => true,
            'example' => 'E75FE679-0303-4DD1-8252-1143B4FA8A27',
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
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '43A0AEB6-45F4-4138-8E89-E1A5D63200E3',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '异步任务状态。包括：

- QUEUING：任务排队中

- PROCESSING：异步处理中

- PROCESS_SUCCESS：处理成功

- PROCESS_FAILED：处理失败

- TIMEOUT_FAILED：任务超时未处理完成

- LIMIT_RETRY_FAILED：超过最大重试次数',
                    'type' => 'string',
                    'example' => 'PROCESS_SUCCESS',
                  ),
                  'ErrorMessage' => 
                  array (
                    'description' => '异步任务错误码信息。',
                    'type' => 'string',
                    'example' => 'paramsIllegal',
                  ),
                  'Result' => 
                  array (
                    'description' => '异步任务返回的真实请求结果。需要自己进行反序列化。',
                    'type' => 'string',
                    'example' => '{"ImageUrl":"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_/2020-4-2/invi__015858226731531000018_UE7B9p.png?Expires=1585824473&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=etyeYQQ%2BWAyQTqQKd8Xq0GiOW****"}',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '异步任务错误码。',
                    'type' => 'string',
                    'example' => 'InvalidParameter',
                  ),
                  'JobId' => 
                  array (
                    'description' => '异步任务ID。',
                    'type' => 'string',
                    'example' => '49E2CC28-ED1D-4CC5-854D-7D0AE2B20976',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43A0AEB6-45F4-4138-8E89-E1A5D63200E3\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\"ImageUrl\\\\\\":\\\\\\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_/2020-4-2/invi__015858226731531000018_UE7B9p.png?Expires=1585824473&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=etyeYQQ%2BWAyQTqQKd8Xq0GiOW****\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAsyncJobResultResponse>\\n    <RequestId>43A0AEB6-45F4-4138-8E89-E1A5D63200E3</RequestId>\\n    <Data>\\n        <Status>PROCESS_SUCCESS</Status>\\n        <JobId>186AC396-0EEC-46F1-AAA1-BF3585227427</JobId>\\n        <Result>{\\"ImageUrl\\":\\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_/2020-4-2/invi__015858228333801000019_zs0HOi.png?Expires=1585824633&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR*****&amp;Signature=YHSg24oLm3yk*****%3D\\"}</Result>\\n        <status>PROCESS_SUCCESS</status>\\n    </Data>\\n</GetAsyncJobResultResponse>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'description' => '# 功能描述

异步接口调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前分割抠图类目中通用高清分割（SegmentHDCommonImage）为异步接口，需要调用GetAsyncJobResult来获取真实的请求结果。


',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## Result反序列化

将上面Result反序列化展示如下。

```
{
  "ImageUrl": "http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_/2020-4-2/invi__015858228333801000019_zs0HOi.png?Expires=1585824633&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR*****&Signature=YHSg24oLm3yk********%3D"
}
```

## 错误码

详情请参见[常见错误码](~~146751~~)。

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
      'endpoint' => 'imageseg.cn-shanghai.aliyuncs.com',
    ),
  ),
);
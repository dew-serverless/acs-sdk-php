<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imageenhan',
    'version' => '2019-09-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64304,
      'title' => '水印',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ImageBlindCharacterWatermark',
        1 => 'ImageBlindPicWatermark',
      ),
    ),
    1 => 
    array (
      'id' => 64307,
      'title' => '迁移',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExtendImageStyle',
        1 => 'RecolorHDImage',
        2 => 'RecolorImage',
      ),
    ),
    2 => 
    array (
      'id' => 64311,
      'title' => '擦除',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ErasePerson',
        1 => 'RemoveImageSubtitles',
        2 => 'RemoveImageWatermark',
      ),
    ),
    3 => 
    array (
      'id' => 64315,
      'title' => '评分',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AssessComposition',
        1 => 'AssessExposure',
        2 => 'AssessSharpness',
      ),
    ),
    4 => 
    array (
      'id' => 64319,
      'title' => '其他能力',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeImageSize',
        1 => 'ColorizeImage',
        2 => 'EnhanceImageColor',
        3 => 'GenerateDynamicImage',
        4 => 'ImitatePhotoStyle',
        5 => 'IntelligentComposition',
        6 => 'MakeSuperResolutionImage',
      ),
    ),
    5 => 
    array (
      'id' => 64327,
      'title' => '结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
      ),
    ),
    6 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GenerateCartoonizedImage',
        1 => 'GenerateImageWithText',
        2 => 'GenerateImageWithTextAndImage',
        3 => 'GenerateSuperResolutionImage',
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
    'ImageBlindCharacterWatermark' => 
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
          'name' => 'FunctionType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定调用功能。包括：
- encode_text：为采用老版本模型添加文字水印。

- encode_text_plus：为采用新版本模型1添加文字水印。

- encode_text_bold：为采用新版本模型2添加文字水印。

- decode_text：为采用老版本模型解码图像中的文字水印，对应加水印方法encode_text。

- decode_text_plus：为采用新版本模型1解码图像中的文字水印，对应加水印方法encode_text_plus。

- decode_text_bold：为采用新版本模型2解码图像中的文字水印，对应加水印方法encode_text_bold。',
            'type' => 'string',
            'required' => true,
            'example' => 'encode_text',
          ),
        ),
        1 => 
        array (
          'name' => 'Text',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待加入的水印文字，字数不超过16个，超过会影响加水印效果。
>- 当FunctionType为`encode_text`、`encode_text_plus`或`encode_text_bold`时，该参数必填。
- 当FunctionType为`decode_text`、`decode_text_plus`或`decode_text_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云版权所有一二三四五六七八九',
          ),
        ),
        2 => 
        array (
          'name' => 'WatermarkImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待解析图，即带有文字水印的合成图。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>- 当FunctionType为`decode_text`、`decode_text_plus`或`decode_text_bold`时，该参数必填。
- 当FunctionType为`encode_text`、`encode_text_plus`或`encode_text_bold`，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imageenhan/xxxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'OutputFileType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图格式。可以选择`png`、`jpg`、`bmp`三种格式，默认`png`。
>- 当FunctionType为`encode_text`、`encode_text_plus`或`encode_text_bold`时，该参数必填。
- 当FunctionType为`decode_text`、`decode_text_plus`或`decode_text_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'QualityFactor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的质量大小。图像越大质量越高，取值范围1~100，默认100。
>仅当OutputFileType为`jpg`时有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'OriginImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图像。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>- 当FunctionType为`encode_text`、`encode_text_plus`、`encode_text_bold`或`decode_text`时，该参数必填。
- 当FunctionType为`decode_text_plus`或`decode_text_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg',
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
                'example' => '2457E1ED-9C76-4386-B9A2-7E41B7D6E849',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'WatermarkImageURL' => 
                  array (
                    'description' => '当调用功能为`encode_text`或`encode_text_plus `时，返回带有添加水印的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****',
                  ),
                  'TextImageURL' => 
                  array (
                    'description' => '当调用功能为`decode_text`或`decode_text_plus`时，返回解析出的只含有文字的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2457E1ED-9C76-4386-B9A2-7E41B7D6E849\\",\\n  \\"Data\\": {\\n    \\"WatermarkImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****\\",\\n    \\"TextImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2457E1ED-9C76-4386-B9A2-7E41B7D6E849</RequestId>\\n<Data>\\n    <TextImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&amp;Expires=158340****&amp;Signature=Heet1ivG0xFP3YlO6usvd0pmrH****</TextImageURL>\\n    <WatermarkImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&amp;Expires=158340****&amp;Signature=Heet1ivG0xFP3YlO6usvd0pmrH****</WatermarkImageURL>\\n</Data>","errorExample":""}]',
      'title' => '图像隐形文字水印',
      'summary' => '本文介绍图像隐形文字水印ImageBlindCharacterWatermark语法及示例。',
      'description' => '## 功能描述
图像隐形文字水印能力可以为图片添加或者解析指定文字水印。
关于该接口功能的示例图如下：
![](https://img.alicdn.com/tfs/TB1jJ0SAkY2gK0jSZFgXXc5OFXa-746-395.png)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImageBlindCharacterWatermark)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 著作权保护：图片的作者依法享有著作权。在图像中增加隐形水印，可以为图片的作者或被授权人证明图片的著作权归属，避免图片在未获得作者授权的情况下被非法使用。
- 防止信息泄露：在涉密信息的图片中，对不同的访问者打上不同的隐形水印。如果图片一旦被泄露，可以通过解析隐形水印，排查出泄密源。

## 特色优势
隐形水印与传统图章水印相比，其无法被观看者察觉，不影响图片效果。水印无法被使用者察觉，也无法通过普通的去水印方法去除，但可以通过图像隐形文字水印解析出水印，证明图片的著作权归属。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ImageBlindCharacterWatermark?lang=JAVA&sdkStyle=dara&params=%7B%22OriginImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FImageBlindCharacterWatermark%2FImageBlindCharacterWatermark1.png%22%2C%22Text%22%3A%22%E9%98%BF%E9%87%8C%E4%BA%91%E7%89%88%E6%9D%83%E6%89%80%E6%9C%89%22%2C%22FunctionType%22%3A%22encode_text_plus%22%2C%22QualityFactor%22%3A100%2C%22OutputFileType%22%3A%22jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于5×5像素。
- URL地址中不能包含中文字符。

## 计费说明
关于图像隐形文字水印的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImageBlindCharacterWatermark)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像隐形文字水印能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像隐形文字水印的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ImageBlindPicWatermark' => 
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
          'name' => 'FunctionType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定调用功能。包括：

- encode_pic：为采用老版本模型添加图像水印。

- encode_pic_plus：为采用新版本模型1添加图像水印。

- encode_pic_bold：为采用新版本模型2添加图像水印。

- decode_pic：为采用老版本模型解码图像中的图像水印，对应加水印方法encode_pic。

- decode_pic_plus：为采用新版本模型1解码图像中的图像水印，对应加水印方法encode_pic_plus。

- decode_pic_bold：为采用新版本模型2解码图像中的图像水印，对应加水印方法encode_pic_bold。',
            'type' => 'string',
            'required' => true,
            'example' => 'encode_pic',
          ),
        ),
        1 => 
        array (
          'name' => 'LogoURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待添加的水印图片URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

>- 当FunctionType为`encode_pic`、`encode_pic_plus`或`encode_pic_bold`时，该参数必填。
- 当FunctionType为`decode_pic`、`decode_pic_plus`或`decode_pic_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'WatermarkImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待解析图，即带有图片水印的合成图。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>- 当FunctionType为`decode_pic`、`decode_pic_plus`或`decode_pic_bold`时，该参数必填。
- 当FunctionType为`encode_pic`、`encode_pic_plus`或`encode_pic_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imageenhan/xxxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'OutputFileType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图格式。可以选择`jpeg`、`png`、`jpg`、`bmp`四种格式，默认`png`。
>- 当FunctionType为`encode_pic`、`encode_pic_plus`或`encode_pic_bold`时，该参数必填。
- 当FunctionType为`decode_pic`、`decode_pic_plus`或`decode_pic_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'QualityFactor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的质量大小。图像越大质量越高，取值范围1~100，默认100。
>仅当OutputFileType为`jpg`时有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'OriginImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原始图像。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>- 当FunctionType为`encode_pic`、`encode_pic_plus`、`encode_pic_bold`或`decode_pic`时，该参数必填。
- 当FunctionType为`decode_pic_plus`或`decode_pic_bold`时，该参数不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg',
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
                'example' => 'DE7869E4-0ACE-4C02-8B98-540B49F49205',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'WatermarkImageURL' => 
                  array (
                    'description' => '当调用功能为`encode_pic`或`encode_pic_plus`时，返回带有添加水印的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****',
                  ),
                  'LogoURL' => 
                  array (
                    'description' => '当调用功能为`decode_pic`或`decode_pic_plus`时，返回解码后的水印图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE7869E4-0ACE-4C02-8B98-540B49F49205\\",\\n  \\"Data\\": {\\n    \\"WatermarkImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****\\",\\n    \\"LogoURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&Expires=158340****&Signature=Heet1ivG0xFP3YlO6usvd0pmrH****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DE7869E4-0ACE-4C02-8B98-540B49F49205</RequestId>\\n<Data>\\n    <WatermarkImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&amp;Expires=158340****&amp;Signature=Heet1ivG0xFP3YlO6usvd0pmrH****</WatermarkImageURL>\\n    <LogoURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty%2F2020_03_04%2F61f544a1a5004c88a2bf29452db494e9.jpeg?OSSAccessKeyId=LTAI4Fmdm1gQonFLrghJ****&amp;Expires=158340****&amp;Signature=Heet1ivG0xFP3YlO6usvd0pmrH****</LogoURL>\\n</Data>","errorExample":""}]',
      'title' => '图像隐形图片水印',
      'summary' => '本文介绍图像隐形图片水印ImageBlindPicWatermark的语法及示例。',
      'description' => '## 功能描述
图像隐形图片水印能力可以为图像添加或解析图片水印。
例如您有一张图A，调用encode_pic参数添加图片盲水印后得到图B。或者您也可以将图A作为OriginImageURL，将图B作为WatermarkImageURL输入，调用decode_pic参数就可以解析得到水印图片。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImageBlindPicWatermark)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 著作权保护：图片的作者依法享有著作权。在图像中增加隐形水印，可以为图片的作者或被授权人证明图片的著作权归属，避免图片在未获得作者授权的情况下被非法使用。

- 防止信息泄露：在涉密信息的图片中，对不同的访问者打上不同的隐形水印。如果图片一旦被泄露，可以通过解析隐形水印，排查出泄密源。

## 特色优势
隐形水印与传统图章水印相比，其无法被观看者察觉，不影响图片效果。水印无法被使用者察觉，也无法通过普通的去水印方法去除，但可以通过图像隐形图片水印接口解析出水印，证明图片的著作权归属。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ImageBlindPicWatermark?lang=JAVA&sdkStyle=dara&params=%7B%22OriginImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FImageBlindPicWatermark%2FImageBlindPicWatermark-tj1.jpg%22%2C%22LogoURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FImageBlindPicWatermark%2FImageBlindPicWatermark-tj6.jpg%22%2C%22FunctionType%22%3A%22encode_pic_plus%22%2C%22QualityFactor%22%3A100%2C%22OutputFileType%22%3A%22jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于5×5像素。
- URL地址中不能包含中文字符。

## 计费说明
关于图像隐形图片水印的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImageBlindPicWatermark)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像标志擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像隐形图片水印的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ExtendImageStyle' => 
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
          'name' => 'StyleUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '风格图片URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ExtendImageStyle/ExtendImageStyle6.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'MajorUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内容图片URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ExtendImageStyle/ExtendImageStyle1.jpg',
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
                'example' => 'F1ABC965-2612-4680-9DE3-B5C77434B9B7',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '进行风格化的结果图片URL地址，图片格式：PNG。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_/2019-9-26/invi__015694889247201016812_spCq4n.jpg?Expires=1569492524&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=uOEP8gKvdgPtDcrXxRz1v37dsT****',
                  ),
                  'MajorUrl' => 
                  array (
                    'description' => '由于版本升级，该字段废弃，不返回结果。',
                    'type' => 'string',
                    'example' => '-',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F1ABC965-2612-4680-9DE3-B5C77434B9B7\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_/2019-9-26/invi__015694889247201016812_spCq4n.jpg?Expires=1569492524&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=uOEP8gKvdgPtDcrXxRz1v37dsT****\\",\\n    \\"MajorUrl\\": \\"-\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExtendImageStyleResponse>\\n    <RequestId>F1ABC965-2612-4680-9DE3-B5C77434B9B7</RequestId>\\n    <Data>\\n        <Url>http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_/2019-9-26/invi__015694889247201016812_spCq4n.jpg?Expires=1569492524&amp;OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&amp;Signature=uOEP8gKvdgPtDcrXxRz1v37dsT****</Url>\\n        <MajorUrl>-</MajorUrl>\\n    </Data>\\n</ExtendImageStyleResponse>","errorExample":""}]',
      'title' => '风格迁移',
      'summary' => '本文介绍风格迁移ExtendImageStyle的语法及示例。',
      'description' => '## 功能描述
风格迁移能力可以对输入图像的风格进行转换，使得图像的色彩、笔触等视觉风格发生转化。
关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/fgoz/ExtendImageStyle.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ExtendImageStyle)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ExtendImageStyle?lang=JAVA&sdkStyle=dara&params=%7B%22MajorUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FExtendImageStyle%2FExtendImageStyle1.jpg%22%2C%22StyleUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FExtendImageStyle%2FExtendImageStyle6.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[风格迁移示例代码](~~608845~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：小于1200×1200像素。
- 图像都必须是RGB 3通道。
- URL地址中不能包含中文字符。

## 计费说明
关于风格迁移的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ExtendImageStyle)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的风格迁移能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[风格迁移示例代码](~~608845~~)。',
      'extraInfo' => '## 错误码
关于风格迁移的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecolorHDImage' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待拓色的图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RecolorHDImage/RecolorHDImage-auto1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓色模式。包括：

- AUTO：自动拓色。
- TEMPLATE：色板拓色。当**Mode**为TEMPLATE，入参**ColorTemplate.N.Color**传入的Top主色列表至少有2个，这样输出的人脸肤色才会变化。
- REF_PIC：参考图拓色。',
            'type' => 'string',
            'required' => false,
            'example' => 'REF_PIC',
            'default' => 'AUTO',
            'enum' => 
            array (
              0 => 'AUTO',
              1 => 'TEMPLATE',
              2 => 'REF_PIC',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RefUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓色时参考图像的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RecolorHDImage/RecolorHDImage-REF_PIC6.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'ColorCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓展色系数量，取值范围1~8。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '8',
            'minimum' => '1',
            'example' => '2',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Degree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓色程度。取值范围0~1。',
            'type' => 'string',
            'required' => true,
            'example' => '0.4',
          ),
        ),
        5 => 
        array (
          'name' => 'ColorTemplate',
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
                'Color' => 
                array (
                  'description' => 'Top主色列表，颜色值定义RGB。例如：0A0B0C。数组大小`[1,7]`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3F6A6B',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 7,
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
                'example' => '9364CEB1-1C39-489F-B6DB-6E65577429F1',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回拓色后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                      'type' => 'string',
                      'example' => 'http://viapi-cn-shanghai-dha-filter.oss-cn-shanghai.aliyuncs.com/upload/recoloring-hd-2020-06-22-19-39-25-798c9cb57f-v6pj4/2020-6-23/invi_filter_015928996015951000042_EBPBLN.jpg?Expires=1592901401&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ICWehJZ1tjpz6qDFVONv5%2Fyvbo****',
                    ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9364CEB1-1C39-489F-B6DB-6E65577429F1\\",\\n  \\"Data\\": {\\n    \\"ImageList\\": [\\n      \\"http://viapi-cn-shanghai-dha-filter.oss-cn-shanghai.aliyuncs.com/upload/recoloring-hd-2020-06-22-19-39-25-798c9cb57f-v6pj4/2020-6-23/invi_filter_015928996015951000042_EBPBLN.jpg?Expires=1592901401&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ICWehJZ1tjpz6qDFVONv5%2Fyvbo****\\"\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<RecolorHDImageResponse>\\n    <RequestId>9364CEB1-1C39-489F-B6DB-6E65577429F1</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</RecolorHDImageResponse>","errorExample":""}]',
      'title' => '高清色彩迁移',
      'summary' => '对高清图像进行颜色拓色，并能够保证人像部分颜色不发生变化。',
      'description' => '## 功能描述
高清色彩迁移能力用于对高清图像进行颜色拓色，并能够保证人像部分颜色不发生变化。该接口与[色彩迁移](~~151948~~)相比：
- 支持高清图。
- 支持自定义拓色程度。
- 支持人像色彩保持。

关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/xfis/RecolorHDImage.png" width="700)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RecolorHDImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/RecolorHDImage?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FRecolorHDImage%2FRecolorHDImage-auto1.jpg%22%2C%22Mode%22%3A%22AUTO%22%2C%22Degree%22%3A%221%22%2C%22ColorCount%22%3A8%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[高清色彩迁移示例代码](~~477848~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG。
- 图像大小：小于3 MB。
- 图像分辨率：大于64×64像素，小于10000×10000像素。
- 图像必须是RGB 3通道。

## 计费说明
关于高清色彩迁移的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RecolorHDImage)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用RecolorHDImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607974~~)。

## SDK参考
阿里云视觉AI图像生产类目下的高清色彩迁移能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[高清色彩迁移示例代码](~~477848~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607824~~)。',
      'extraInfo' => '## 错误码
关于高清色彩迁移的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecolorImage' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RecolorImage/RecolorImage-REF_PIC1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓色模式。默认为AUTO。

- AUTO：自动拓色

- TEMPLATE：色板拓色

- REF_PIC：参考图拓色',
            'type' => 'string',
            'required' => false,
            'example' => 'TEMPLATE',
            'default' => 'AUTO',
            'enum' => 
            array (
              0 => 'AUTO',
              1 => 'TEMPLATE',
              2 => 'REF_PIC',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RefUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '参考图拓色。参考图的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RecolorImage/RecolorImage-REF_PIC7.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'ColorCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拓展色系数量，取值范围1~8，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '1',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Color' => 
                array (
                  'description' => '色板拓色，Top主色列表，颜色值定义ARGB。如：0A0B0C，数组大小`[1, 7]`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '056A6B',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 7,
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
                'example' => '3A9BFC5E-3F7C-4D9A-9445-908C6D14AB5B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '拓色完成后的图像URL地址，图像格式为PNG。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                      'type' => 'string',
                      'example' => 'http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/RecolorImage/recolor-1-src.png?Expires=1574600624&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=y6MqVvFjrV9lnmhcCHZSulXOc2****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3A9BFC5E-3F7C-4D9A-9445-908C6D14AB5B\\",\\n  \\"Data\\": {\\n    \\"ImageList\\": [\\n      \\"http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/RecolorImage/recolor-1-src.png?Expires=1574600624&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=y6MqVvFjrV9lnmhcCHZSulXOc2****\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"自动拓色\\n<RecolorImageResponse>\\n    <Data>\\n        <ImageList>http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/RecolorImage/recolor-1-src.png?Expires=1574600624&amp;OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&amp;Signature=y6MqVvFjrV9lnmhcCHZSulXOc2****</ImageList>\\n    </Data>\\n    <RequestId>77D09611-9FBC-406E-8506-405C468F310B</RequestId>\\n</RecolorImageResponse>\\n参考图拓色\\n<RecolorImageResponse>\\n    <Data>\\n        <ImageList>http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/result_/2019-11-21/invi__015743415515071000118_nBp2Ej.png?Expires=1574600751&amp;OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&amp;Signature=rMwWX2dRlosApH3A3DSjxwVaFK****</ImageList>\\n    </Data>\\n    <RequestId>4299F194-6F92-4939-BCD8-02FDD9EF790C</RequestId>\\n</RecolorImageResponse>\\n色板拓色\\n<RecolorImageResponse>\\n    <Data>\\n        <ImageList>http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/result_/2019-11-21/invi__015743416356921000120_bnAO7l.png?Expires=1574600835&amp;OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&amp;Signature=XurCY8jIvhpT58INfe8eJ7psVS****</ImageList>\\n    </Data>\\n    <RequestId>3A9BFC5E-3F7C-4D9A-9445-908C6D14AB5B</RequestId>\\n</RecolorImageResponse>","errorExample":""}]',
      'title' => '色彩迁移',
      'summary' => '本文介绍色彩迁移RecolorImage的语法及示例。',
      'description' => '## 功能描述
色彩迁移能力将输入图自动或根据指定色板进行色彩转换，同时避免视觉热点区域不正常拓色。
关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/zlbh/RecolorImage.png)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RecolorImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 模式说明

- 自动拓色
输入要拓色的结果数量，即拓展色系数量，算法根据色彩空间计算均匀采样方式，给出符合数量要求的拓色结果。简单来讲，就是色系数量是几，就输出几张图片。
例如下面图1为原图，图2为色系数量设置为3的拓色结果，图3为色系数量设置为6的拓色结果。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/yrni/RecolorImagezidong.png" width="600)

- 色板拓色
输入一组颜色列表（色板），算法以色板为主色对原图进行拓色。该模式提供了更强的色彩控制能力。颜色列表的长度不得超过规定数值。
例如输入`[#0000FF, #00FF00, #FF0000]`，即`[纯红，纯绿，纯蓝]`，则拓色结果如下。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ksyc/RecolorImageseban.png" width="300)

- 参考图拓色
您提供一个参考图，算法会根据参考图对原图进行拓色。
例如给出的参考图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/zauu/RecolorImagecankaotu.png" width="300)
拓色结果为：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/qxgz/RecolorImagejieguo.png" width="300)

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/RecolorImage?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FRecolorImage%2FRecolorImage-auto1.jpg%22%2C%22Mode%22%3A%22AUTO%22%2C%22ColorCount%22%3A8%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[色彩迁移示例代码](~~477860~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于64×64像素，小于1200×1200像素。
- 图像都必须是RGB 3通道或者RGBA 4通道。
- 图像颜色应避免基本是黑白灰色。
- URL地址中不能包含中文字符。

## 计费说明
关于色彩迁移的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RecolorImage)。

',
      'requestParamsDescription' => '> colorTemplate、refUrl、colorCount根据mode三选一。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的色彩迁移能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[色彩迁移示例代码](~~477860~~)。',
      'extraInfo' => '## 错误码
关于色彩迁移的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ErasePerson' => 
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理（使用viapiutils显式的方案生成URL）](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserMask',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像对于Mask的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理（使用viapiutils显式的方案生成URL）](~~155645~~)。

>Mask图是RGB3通道图，而非Alpha通道透明图。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson6.jpg',
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
                'example' => '2FEDA495-9A5D-48B5-8922-98A4FE01D381',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageUrl' => 
                  array (
                    'description' => '输出图像的URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-isr-lab-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/remove-person/2020-10-29_10%3A59%3A21.421276_img19.png?Expires=1603970961&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=9lBakx0r6FOssTEYTcKs5pk8ta****',
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
          1 => 
          array (
            'errorCode' => 'NeedOpen',
            'errorMessage' => 'Please activate the service first.',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'A server error occurred while processing your request.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FEDA495-9A5D-48B5-8922-98A4FE01D381\\",\\n  \\"Data\\": {\\n    \\"ImageUrl\\": \\"http://algo-app-isr-lab-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/remove-person/2020-10-29_10%3A59%3A21.421276_img19.png?Expires=1603970961&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=9lBakx0r6FOssTEYTcKs5pk8ta****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ErasePersonResponse>\\n    <RequestId>2FEDA495-9A5D-48B5-8922-98A4FE01D381</RequestId>\\n    <Data>\\n        <ImageUrl>http://algo-app-isr-lab-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/remove-person/2020-10-29_10%3A59%3A21.421276_img19.png?Expires=1603970961&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=9lBakx0r6FOssTEYTcKs5pk8ta****</ImageUrl>\\n    </Data>\\n</ErasePersonResponse>","errorExample":""}]',
      'title' => '图像人体擦除',
      'summary' => '本文介绍图像人体擦除ErasePerson的语法及示例。',
      'description' => '## 功能描述
图像人体擦除能力可以擦除图像中指定区域的人像，并自动填充背景。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 旅行照片修复：图像人体擦除可以帮您去除背景中的路人，还您美美的旅行照片。
- 穿帮镜头后期修复：在影视拍摄过程中，如果在前期拍摄镜头中出现了本不应该出现的人物，可以通过图像人体擦除帮您批量处理修复这些穿帮镜头。

## 特点优势

- 尽量保留原照片内容：通过指定区域Mask，缩小自动填充背景范围，擦除背景人物，降低处理后照片的违和感。人像区域mask，建议使用阿里云视觉智能开放平台提供的人体分割算法来获得，可以得到更好的效果。
- 自动生成填充被人体遮挡的背景：基于深度学习算法，图像人体擦除可以推理还原出被人体遮挡的背景内容，真实而没有违和感。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ErasePerson?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FErasePerson%2FErasePerson1.jpg%22%2C%22UserMask%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FErasePerson%2FErasePerson6.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、BMP、PNG、WEBP、TIF。
- 图像大小：不超过3 MB。
- 图像分辨率：大于5×5像素，小于2048×2048像素。
- URL地址中不能包含中文字符。
- 图像中指定区域应尽量贴合人形，可以用矩形、多边形、不规则区域表示。需要擦除的区域面积不能超过整体图像的25%。

## 计费说明
关于图像人体擦除的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像人体擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像人体擦除的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RemoveImageSubtitles' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URL地址中不能包含中文字符。

',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RemoveImageSubtitles/RemoveImageSubtitles1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'BX',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字幕区域的左上角点x坐标相对图像宽度的占比值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'BY',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字幕区域的左上角点y坐标相对图像高度的占比值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.75',
          ),
        ),
        3 => 
        array (
          'name' => 'BW',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字幕区域的宽度相对图像宽度的占比值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'BH',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字幕区域的高度相对图像高度的占比值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.25',
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
                'example' => '939B2103-EE28-4F2D-9773-9A37AD00E5B7',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '输出擦除字幕后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-desubtitle/2020-03-23-08/02%3A50-e8af2ea3-bddc-4ec8-b21c-493ee687465e.jpg?Expires=1584952370&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=qVnfWZJ2QtI9NRWQ410FsEFioq****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"939B2103-EE28-4F2D-9773-9A37AD00E5B7\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-desubtitle/2020-03-23-08/02%3A50-e8af2ea3-bddc-4ec8-b21c-493ee687465e.jpg?Expires=1584952370&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=qVnfWZJ2QtI9NRWQ410FsEFioq****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>939B2103-EE28-4F2D-9773-9A37AD00E5B7</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-desubtitle/2020-03-23-08/02%3A50-e8af2ea3-bddc-4ec8-b21c-493ee687465e.jpg?Expires=1584952370&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=qVnfWZJ2QtI9NRWQ410FsEFioq****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '字幕擦除',
      'summary' => '本文介绍字幕擦除RemoveImageSubtitles的语法及示例。',
      'description' => '## 功能描述
字幕擦除能力可以擦除图片中的标准字幕。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RemoveImageSubtitles)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/RemoveImageSubtitles?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FRemoveImageSubtitles%2FRemoveImageSubtitles1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[字幕擦除示例代码](~~601539~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：不超过3 MB。
- URL地址中不能包含中文字符。

## 计费说明
关于字幕擦除的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RemoveImageSubtitles)。',
      'requestParamsDescription' => '> 如果不填写，则bx、by、bw、bh默认为视频下方区域，即：bx=0，by=0.75，bw=1，bh=0.25。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的字幕擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[字幕擦除示例代码](~~601539~~)。',
      'extraInfo' => '## 错误码
关于字幕擦除的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RemoveImageWatermark' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/RemoveImageWatermark/RemoveImageWatermark3.jpg',
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
                'example' => '885070A7-E721-4062-99A0-80C0EBBF9406',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '图像标志擦除后的结果图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-delogo/2020-03-27-03/00%3A06-5a6f0a0f-c940-4955-af75-79e8267f1699.jpg?Expires=1585279806&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=R4OC2R5%2Fkw08XYFXmCWjgk7Y9N****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"885070A7-E721-4062-99A0-80C0EBBF9406\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-delogo/2020-03-27-03/00%3A06-5a6f0a0f-c940-4955-af75-79e8267f1699.jpg?Expires=1585279806&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=R4OC2R5%2Fkw08XYFXmCWjgk7Y9N****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveImageWatermarkResponse>\\n    <RequestId>885070A7-E721-4062-99A0-80C0EBBF9406</RequestId>\\n    <Data>\\n        <ImageURL>http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-delogo/2020-03-27-03/00%3A06-5a6f0a0f-c940-4955-af75-79e8267f1699.jpg?Expires=1585279806&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=R4OC2R5%2Fkw08XYFXmCWjgk7Y9N****</ImageURL>\\n    </Data>\\n</RemoveImageWatermarkResponse>","errorExample":""}]',
      'title' => '台标标志擦除',
      'summary' => '本文介绍图像标志擦除RemoveImageWatermark的语法及示例。',
      'description' => '## 功能描述
图像标志擦除能力用于擦除图片中的常见标志，如台标、互联网平台Logo标志等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RemoveImageWatermark)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/RemoveImageWatermark?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FRemoveImageWatermark%2FRemoveImageWatermark1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像标志擦除示例代码](~~601564~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、BMP、PNG、WEBP。
- 图像大小：不超过3 MB。
- URL地址中不能包含中文字符。

## 计费说明
关于图像标志擦除的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=RemoveImageWatermark)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像标志擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像标志擦除示例代码](~~601564~~)。',
      'extraInfo' => '## 错误码
关于图像标志擦除的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'AssessComposition' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/AssessComposition/AssessComposition1.jpg',
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
                'example' => 'CCAD9435-AEDB-49E4-BCCC-99B65ECC6693',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Score' => 
                  array (
                    'description' => '图像构图美学评分，取值0~5。评分越高，构图效果越好，推荐评分3.8以上为较好构图得分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4.2551436',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CCAD9435-AEDB-49E4-BCCC-99B65ECC6693\\",\\n  \\"Data\\": {\\n    \\"Score\\": 4.2551436\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AssessCompositionResponse>\\n    <RequestId>CCAD9435-AEDB-49E4-BCCC-99B65ECC6693</RequestId>\\n    <Data>\\n        <Score>4.2551436</Score>\\n    </Data>\\n</AssessCompositionResponse>","errorExample":""}]',
      'title' => '图像构图美学评分',
      'summary' => '本文介绍图像构图美学评分AssessComposition的语法及示例。',
      'description' => '## 功能描述
图像构图美学评分能力可以对输入的图像进行构图美学评分，评分越高，构图效果越好。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessComposition)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/AssessComposition?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FAssessComposition%2FAssessComposition1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像构图美学评分示例代码](~~601518~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG、WEBP。
- 图像大小：小于3 MB。
- 图像分辨率：分辨率要求大于32×32像素，无上限要求，但是太大可能会下载超时。
- URL地址中不能包含中文字符。

## 计费说明
关于图像构图美学评分的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessComposition)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像构图美学评分能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像构图美学评分示例代码](~~601518~~)。',
      'extraInfo' => '## 错误码
关于图像构图美学评分的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'AssessExposure' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/AssessExposure/AssessExposure1.jpg',
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
                'example' => '4EF3C65B-C3CC-425B-AFB3-2FE6B98C578B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Exposure' => 
                  array (
                    'description' => '图像曝光度评分，取值范围0~1。评分越高表示曝光度越大。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EF3C65B-C3CC-425B-AFB3-2FE6B98C578B\\",\\n  \\"Data\\": {\\n    \\"Exposure\\": 0.1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AssessExposureResponse>\\n    <RequestId>4EF3C65B-C3CC-425B-AFB3-2FE6B98C578B</RequestId>\\n    <Data>\\n        <Exposure>0.1</Exposure>\\n    </Data>\\n</AssessExposureResponse>","errorExample":""}]',
      'title' => '图像曝光度评分',
      'summary' => '本文介绍图像曝光度评分AssessExposure的语法及示例。',
      'description' => '## 功能描述
图像曝光度评分能力可以对输入的图像进行曝光度评分，评分越高，曝光越大。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessExposure)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/AssessExposure?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FAssessExposure%2FAssessExposure1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像曝光度评分示例代码](~~601404~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：小于3 MB。
- 图像分辨率：分辨率要求大于32×32像素，无上限要求，但是太大可能会下载超时。
- URL地址中不能包含中文字符。

## 计费说明
关于图像曝光度评分的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessExposure)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像曝光度评分能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像曝光度评分示例代码](~~601404~~)。',
      'extraInfo' => '## 错误码
关于图像曝光度评分的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'AssessSharpness' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/AssessSharpness/AssessSharpness1.jpg',
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
                'example' => 'C0B594A1-383E-4F97-A740-0D51CF8E37D2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Sharpness' => 
                  array (
                    'description' => '输出图像清晰度评分，取值范围0~1。评分越高图像越清晰。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C0B594A1-383E-4F97-A740-0D51CF8E37D2\\",\\n  \\"Data\\": {\\n    \\"Sharpness\\": 0.1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AssessSharpnessResponse>\\n    <RequestId>C0B594A1-383E-4F97-A740-0D51CF8E37D2</RequestId>\\n    <Data>\\n        <Sharpness>0.1</Sharpness>\\n    </Data>\\n</AssessSharpnessResponse>","errorExample":""}]',
      'title' => '图像清晰度评分',
      'summary' => '本文介绍图像清晰度评分AssessSharpness的语法及示例。',
      'description' => '## 功能描述
图像清晰度评分能力可以对输入的图像进行清晰度评分，评分越高图像越清晰。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessSharpness)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/AssessSharpness?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FAssessSharpness%2FAssessSharpness1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像清晰度评分示例代码](~~601409~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：小于3 MB。
- 图像分辨率：分辨率要求大于32×32像素，无上限要求，但是太大可能会下载超时。
- URL地址中不能包含中文字符。

## 计费说明
关于图像清晰度评分的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=AssessSharpness)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像清晰度评分能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像清晰度评分示例代码](~~601409~~)。',
      'extraInfo' => '## 错误码
关于图像清晰度评分的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ChangeImageSize' => 
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
            'description' => '目标宽度，单位：像素。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2000',
            'minimum' => '10',
            'example' => '800',
          ),
        ),
        1 => 
        array (
          'name' => 'Height',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标高度，单位：像素。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2000',
            'minimum' => '10',
            'example' => '600',
          ),
        ),
        2 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ChangeImageSize/ChangeImageSize5.jpg',
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
                'example' => '2833446F-A431-40EB-A502-6EC9DFEEEEB0',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '尺寸变换后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/result_filter/2019-11-21/invi_filter_015743271470661000112_NVKmET.png?Expires=1574586347&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=QqRAiqvyXsVlZ77M8yFc5QKJDE****',
                  ),
                  'RetainLocation' => 
                  array (
                    'description' => '原图数据在生成图像中的坐标信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '输出根据指定宽度等比缩放后的原图宽度。单位：像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '298',
                      ),
                      'Height' => 
                      array (
                        'description' => '输出根据指定高度等比缩放后的原图高度。单位：像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '224',
                      ),
                      'Y' => 
                      array (
                        'description' => '原图左上角y坐标。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '原图左上角x坐标。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2833446F-A431-40EB-A502-6EC9DFEEEEB0\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/result_filter/2019-11-21/invi_filter_015743271470661000112_NVKmET.png?Expires=1574586347&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=QqRAiqvyXsVlZ77M8yFc5QKJDE****\\",\\n    \\"RetainLocation\\": {\\n      \\"Width\\": 298,\\n      \\"Height\\": 224,\\n      \\"Y\\": 0,\\n      \\"X\\": 0\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ChangeImageSizeResponse>\\n    <RequestId>2833446F-A431-40EB-A502-6EC9DFEEEEB0</RequestId>\\n    <Data>\\n        <Url>http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/result_filter/2019-11-21/invi_filter_015743271470661000112_NVKmET.png?Expires=1574586347&amp;OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&amp;Signature=QqRAiqvyXsVlZ77M8yFc5QKJDE****</Url>\\n        <RetainLocation>\\n            <Width>298</Width>\\n            <Height>224</Height>\\n            <Y>0</Y>\\n            <X>0</X>\\n        </RetainLocation>\\n    </Data>\\n</ChangeImageSizeResponse>","errorExample":""}]',
      'title' => '图像裁剪',
      'summary' => '本文为您介绍图像裁剪ChangeImageSize的语法及示例。',
      'description' => '## 功能描述
图像裁剪能力可以对输入的图像按照指定尺寸变换。支持自动判断主体区域位置，使用更好的裁剪方式对图像进行裁剪。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ChangeImageSize)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ChangeImageSize?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FChangeImageSize%2FChangeImageSize1.jpg%22%2C%22Width%22%3A612%2C%22Height%22%3A344%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像裁剪示例代码](~~601512~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP、WEBP。
- 图像大小：不超过3.5 MB。
- 图像分辨率：输入的内容图和风格图尺寸不得超过2000×2000像素。
- 图像都必须是RGB 3通道。
- URL地址中不能包含中文字符。

## 计费说明
关于图像裁剪的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ChangeImageSize)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像裁剪能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像裁剪示例代码](~~601512~~)。',
      'extraInfo' => '## 错误码
关于图像裁剪的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ColorizeImage' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ColorizeImage/ColorizeImage1.jpg',
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
                'example' => '124A4B09-68EF-4178-B98D-319089D4268B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '处理后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-vc-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/face-enhancement/2020_11_26/20201126_182812286268_079260.jpg?Expires=1606388292&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=f71Bx37g%2BGhM%2B6FOXM0EbNL8W4****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"124A4B09-68EF-4178-B98D-319089D4268B\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-aic-vc-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/face-enhancement/2020_11_26/20201126_182812286268_079260.jpg?Expires=1606388292&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=f71Bx37g%2BGhM%2B6FOXM0EbNL8W4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>124A4B09-68EF-4178-B98D-319089D4268B</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-aic-vc-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/face-enhancement/2020_11_26/20201126_182812286268_079260.jpg?Expires=1606388292&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=f71Bx37g%2BGhM%2B6FOXM0EbNL8W4****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '图片上色',
      'summary' => '本文介绍图片上色ColorizeImage的语法及示例。',
      'description' => '## 功能描述
图片上色能力可以对黑白照片、黑白图像自动上色。
关于该接口功能的示例图如下：

- 黑白图：
![黑白图](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/wxfw/ColorizeImage.jpg" width="500)
- 处理后：
![处理后](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/roff/ColorizeImagecaise.png" width="500)


> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ColorizeImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 黑白老照片还原：上个世纪拍摄的黑白照片，可以通过图片上色，自动变成彩色照片。
- 绘画自动上色：绘画作品、平面设计，通过图片上色，可以自动上色，加快生成效率。

## 特色优势

- 真实还原：真实还原照片中拍摄现场的色彩。
- 适合各种场景：适合人物、风景、街景等各种拍摄场景。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ColorizeImage?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FColorizeImage%2FColorizeImage1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图片上色示例代码](~~480089~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：不超过10 MB。
- 图像分辨率：小于3000×3000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于图片上色的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ColorizeImage)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图片上色能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图片上色示例代码](~~480089~~)。',
      'extraInfo' => '## 错误码
关于图片上色的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'EnhanceImageColor' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：

- 图像格式：JPG、PNG、BMP。
- 图像大小：小于3 MB。
- 图像分辨率：大于64×64像素，小于3840×2160像素，最短边小于2160像素，最长边小于3840像素。
- URL地址不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/EnhanceImageColor/EnhanceImageColor1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'OutputFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出的图片格式。可选png和jpg。',
            'type' => 'string',
            'required' => true,
            'example' => 'png',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '调色模式。包括LogC、Rec709和ln17_256。

- LogC：适用于灰片（低对比度raw图）输入，大幅度调整图像色彩观感，使其恢复SDR域的色彩质感。
- Rec709：适用于一般条件拍摄的图像，适当提升图像亮度、饱和度等，调整幅度较为保守。
- ln17_256：适用于一般条件拍摄的图像，大幅度调整图像亮度、饱和度、对比度，提升色彩质感。',
            'type' => 'string',
            'required' => true,
            'example' => 'LogC',
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
                'example' => '2F306ABD-5BC3-4FA0-89CF-0DED5B3654EB',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '返回处理后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-recolor/2020-06-23-10/24%3A14-3cf26e84-a5d2-49b0-8332-0e139e20c49e.png?Expires=1592909654&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=fHrYvitvm0qZJ9nrWYa%2Fjd4pQS****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F306ABD-5BC3-4FA0-89CF-0DED5B3654EB\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-recolor/2020-06-23-10/24%3A14-3cf26e84-a5d2-49b0-8332-0e139e20c49e.png?Expires=1592909654&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=fHrYvitvm0qZJ9nrWYa%2Fjd4pQS****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EnhanceImageColorResponse>\\n    <RequestId>2F306ABD-5BC3-4FA0-89CF-0DED5B3654EB</RequestId>\\n    <Data>\\n        <ImageURL>http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/image-recolor/2020-06-23-10/24%3A14-3cf26e84-a5d2-49b0-8332-0e139e20c49e.png?Expires=1592909654&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=fHrYvitvm0qZJ9nrWYa%2Fjd4pQS****</ImageURL>\\n    </Data>\\n</EnhanceImageColorResponse>","errorExample":""}]',
      'title' => '图像色彩增强',
      'summary' => '本文介绍图像色彩增强EnhanceImageColor的语法及示例。',
      'description' => '## 功能描述
图像色彩增强能力可以对输入图像进行智能内容分析，根据图像内容自动调整参数，对图像饱和度、亮度、对比度等多个维度进行优化，输出增强后的图像。
关于该接口功能的示例图如下：
- 输入原图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/zguq/EnhanceImageColor.png" width="300)
- 输出增强后示意图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/zqik/EnhanceImageColorzengqiang.png" width="300)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=EnhanceImageColor)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 设计素材美化：对设计图像进行智能分析提升，用于创意设计。
- 照片美化：对拍摄的照片进行智能美化，用于分享和传播。

## 特色优势
- 效果好：从饱和度、曝光、对比度等多维度提升图像色彩，使其主观效果更好。
- 自适应提升：通过场景识别和内容分析，自动选择合适的处理参数。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/EnhanceImageColor?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FEnhanceImageColor%2FEnhanceImageColor1.jpg%22%2C%22Mode%22%3A%22LogC%22%2C%22OutputFormat%22%3A%22png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像色彩增强示例代码](~~601517~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、PNG、BMP。
- 图像大小：小于3 MB。
- 图像分辨率：大于64×64像素，小于3840×2160像素，最短边小于2160像素，最长边小于3840像素。
- URL地址不能包含中文字符。

## 计费说明
关于图像色彩增强的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=EnhanceImageColor)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像色彩增强能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像色彩增强示例代码](~~601517~~)。',
      'extraInfo' => '## 错误码
关于图像色彩增强的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateDynamicImage' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://vigen-invi.oss-cn-shanghai.aliyuncs.com/temp/xl/dynamicPhoto/viapi_test_images/xxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Operation',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '天空和头发的微动状态。采用二进制字符串，某一位为1表示对应区域进行微动。<br>最低位为1，表示天空微动；第二位为1，表示头发微动。

- `1`和`01`均表示天空微动。
- `10`表示头发微动，天空不动。
- `11`表示头发和天空都微动。',
            'type' => 'string',
            'required' => true,
            'example' => '11',
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
                'example' => '3C047FB7-AE01-42CF-948F-D57F224620ED',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '微动变换后的视频URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/dynamicPhotoResult/dySkyHair_0d0465eb-b1c9-472a-a7dc-cdff1333f794.avi?Expires=1601196370&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=QejSaTZOR2MB2lVHOUH%2Fj8l3P4****',
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
          1 => 
          array (
            'errorCode' => 'NeedOpen',
            'errorMessage' => 'Please activate the service first.',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'A server error occurred while processing your request.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3C047FB7-AE01-42CF-948F-D57F224620ED\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/dynamicPhotoResult/dySkyHair_0d0465eb-b1c9-472a-a7dc-cdff1333f794.avi?Expires=1601196370&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=QejSaTZOR2MB2lVHOUH%2Fj8l3P4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GenerateDynamicImageResponse>\\n    <RequestId>3C047FB7-AE01-42CF-948F-D57F224620ED</RequestId>\\n    <Data>\\n        <Url>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/dynamicPhotoResult/dySkyHair_0d0465eb-b1c9-472a-a7dc-cdff1333f794.avi?Expires=1601196370&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=QejSaTZOR2MB2lVHOUH%2Fj8l3P4****</Url>\\n    </Data>\\n</GenerateDynamicImageResponse>","errorExample":""}]',
      'title' => '图像微动',
      'summary' => '本文介绍图像微动GenerateDynamicImage的语法及示例。',
      'description' => '## 功能描述
图像微动能力可以对输入图像中包括的天空区域及人物头发区域进行静转动处理，得到微动的AVI格式视频。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=GenerateDynamicImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/GenerateDynamicImage?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

## 计费说明
关于图像微动的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=GenerateDynamicImage)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像微动能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像微动的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ImitatePhotoStyle' => 
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
          'name' => 'StyleUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '参考图URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle7.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要进行风格变换的图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle1.jpg',
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
                'example' => 'A880432B-6D9A-4EF4-B7B7-863F38A930D9',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '进行风格变换后的结果图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/7c4c0809-5e15-4ca7-84b3-ba16711e3255__5cb220200622-075203.jpg?Expires=1592814125&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=DNhhRFPbMBwpHCEhrLdL%2BBF%2BXs****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A880432B-6D9A-4EF4-B7B7-863F38A930D9\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/7c4c0809-5e15-4ca7-84b3-ba16711e3255__5cb220200622-075203.jpg?Expires=1592814125&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=DNhhRFPbMBwpHCEhrLdL%2BBF%2BXs****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ImitatePhotoStyleResponse>\\n    <RequestId>A880432B-6D9A-4EF4-B7B7-863F38A930D9</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/photo-style-imitation/7c4c0809-5e15-4ca7-84b3-ba16711e3255__5cb220200622-075203.jpg?Expires=1592814125&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=DNhhRFPbMBwpHCEhrLdL%2BBF%2BXs****</ImageURL>\\n    </Data>\\n</ImitatePhotoStyleResponse>","errorExample":""}]',
      'title' => '照图修图',
      'summary' => '本文介绍照图修图ImitatePhotoStyle的语法及示例。',
      'description' => '## 功能描述
照图修图能力可以将输入的参考图的光照、色彩等不影响原图结构的风格迁移至目标图。
您可以在[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImitatePhotoStyle)进行体验与试用。关于该接口功能的示例图如下：

- 原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/lbaw/ImitatePhotoStyle.jpg" width="600)

- 参考图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/peau/ImitatePhotoStylecankao.jpg" width="600)

- 结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ajru/ImitatePhotoStylejieguo.jpg" width="600)

> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/ImitatePhotoStyle?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FImitatePhotoStyle%2FImitatePhotoStyle1.jpg%22%2C%22StyleUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FImitatePhotoStyle%2FImitatePhotoStyle6.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：小于3 MB。
- 图像分辨率：大于32×32像素，小于3000×3000像素。
- URL地址不能包含中文字符。

## 计费说明
关于照图修图的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=ImitatePhotoStyle)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的照图修图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于照图修图的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'IntelligentComposition' => 
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
          'name' => 'NumBoxes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出框的个数，默认值5，取值范围1~10，小于或超出范围会截断取值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'isFileTransferUrl' => false,
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/IntelligentComposition/IntelligentComposition3.jpg',
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
                'example' => 'C1D52018-D67A-46AD-9AAA-031750A6E770',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '智能构图结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MinX' => 
                        array (
                          'description' => '输出框的左上角横坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '43',
                        ),
                        'Score' => 
                        array (
                          'description' => '输出框的评分，取值范围0~5。分数越高说明构图效果越好，推荐3.8以上为较好构图得分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '3.6567564',
                        ),
                        'MaxY' => 
                        array (
                          'description' => '输出框的右下角纵坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '672',
                        ),
                        'MaxX' => 
                        array (
                          'description' => '输出框的右下角横坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '981',
                        ),
                        'MinY' => 
                        array (
                          'description' => '输出框的左上角纵坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '96',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C1D52018-D67A-46AD-9AAA-031750A6E770\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"MinX\\": 43,\\n        \\"Score\\": 3.6567564,\\n        \\"MaxY\\": 672,\\n        \\"MaxX\\": 981,\\n        \\"MinY\\": 96\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C1D52018-D67A-46AD-9AAA-031750A6E770</RequestId>\\n<Data>\\n    <Elements>\\n        <MaxX>981</MaxX>\\n        <MaxY>672</MaxY>\\n        <MinX>43</MinX>\\n        <Score>3.6567564</Score>\\n        <MinY>96</MinY>\\n    </Elements>\\n    <Elements>\\n        <MaxX>896</MaxX>\\n        <MaxY>736</MaxY>\\n        <MinX>43</MinX>\\n        <Score>3.594815</Score>\\n        <MinY>32</MinY>\\n    </Elements>\\n    <Elements>\\n        <MaxX>981</MaxX>\\n        <MaxY>736</MaxY>\\n        <MinX>43</MinX>\\n        <Score>3.5908668</Score>\\n        <MinY>32</MinY>\\n    </Elements>\\n    <Elements>\\n        <MaxX>981</MaxX>\\n        <MaxY>608</MaxY>\\n        <MinX>43</MinX>\\n        <Score>3.5745924</Score>\\n        <MinY>96</MinY>\\n    </Elements>\\n    <Elements>\\n        <MaxX>896</MaxX>\\n        <MaxY>672</MaxY>\\n        <MinX>43</MinX>\\n        <Score>3.5324287</Score>\\n        <MinY>96</MinY>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '智能构图',
      'summary' => '智能构图，对图像进行美学评估，智能输出bounding box，可以将原图裁剪成更好的图像。',
      'description' => '## 功能描述
智能构图能力通过对输入图像进行美学评估，智能输出bounding box，根据这些bounding box可以将原图裁剪成更好的图像。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=IntelligentComposition)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/IntelligentComposition?lang=JAVA&sdkStyle=dara&params={%22ImageURL%22:%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FIntelligentComposition%2FIntelligentComposition1.jpg%22,%22NumBoxes%22:5}&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP、WEBP。
- 图像大小：小于3 MB。
- 图像分辨率：大于32×32像素。
- URL中不能包含中文字符。

## 计费说明
关于智能构图的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=IntelligentComposition)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的智能构图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于智能构图的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'MakeSuperResolutionImage' => 
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
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：不小于32×32像素，长边不大于1920像素，短边不大于1080像素。
- URL地址中不能包含中文字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/MakeSuperResolutionImage/MakeSuperResolutionImage5.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像输出模式，默认为`base`。取值如下：

- base：普通模式，即稳定的超分辨率效果。
- enhancement：增强模式，相比普通模式更加突出的增强的效果，进一步提升输出图像的清晰度和锐利度。
',
            'type' => 'string',
            'required' => false,
            'example' => 'base',
            'default' => 'base',
          ),
        ),
        2 => 
        array (
          'name' => 'UpscaleFactor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '放大倍数。取值为1、2、3、4。缺省时默认为2。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
            'default' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'OutputFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的存储格式。可选范围：`png`、`jpg`、`bmp`，默认`png`。

> 当输入图像是RGBA格式时，为了保证输出图像仍为RGBA格式以及Alpha通道的准确性，输出格式将强制置为`png`。',
            'type' => 'string',
            'required' => false,
            'example' => 'png',
          ),
        ),
        4 => 
        array (
          'name' => 'OutputQuality',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的质量因子，值越大质量越高。取值范围\\[30,100]，默认95，仅当**OutputFormat**是`jpg`时有效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '95',
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
                'example' => '47DD87F1-D077-499A-8D96-C82F006A6839',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '分辨率放大后的图像URL地址，图像格式为PNG。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/ai-gateway_prod/ds%253D20191121/sisrx2_157433961551387538.jpg?Expires=1574598816&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=8phY6dOz4U889nHfHC1g51nwAi****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"47DD87F1-D077-499A-8D96-C82F006A6839\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/ai-gateway_prod/ds%253D20191121/sisrx2_157433961551387538.jpg?Expires=1574598816&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=8phY6dOz4U889nHfHC1g51nwAi****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<MakeSuperResolutionImageResponse>\\n    <RequestId>47DD87F1-D077-499A-8D96-C82F006A6839</RequestId>\\n    <Data>\\n        <Url>http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/ai-gateway_prod/ds%253D20191121/sisrx2_157433961551387538.jpg?Expires=1574598816&amp;OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&amp;Signature=8phY6dOz4U889nHfHC1g51nwAi****</Url>\\n    </Data>\\n</MakeSuperResolutionImageResponse>","errorExample":""}]',
      'title' => '图像超分',
      'summary' => '图像超分辨/清晰化。',
      'description' => '## 功能描述
图像超分在放大图像分辨率的同时，提升图像细节纹理，降低图像噪声，支持2-4倍分辨率放大，支持原分辨率增强，支持多种模式不同效果的输出。
关于该接口功能的示例图如下：

示意图如下所示。

- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/chfc/MakeSuperResolutionImage.png" width="200)
- 普通模式输出
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/alaz/MakeSuperResolutionImagebase.png" width="500)
- 增强模式输出
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/lxhd/MakeSuperResolutionImagezengqiang.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=MakeSuperResolutionImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 设计素材优化：对获取的设计素材图像进行优化处理，用于后续的设计生产。
- 照片清晰度提升：对历史拍摄的照片进行清晰度提升。

## 特色优势
- 效果突出：多种提升模式，对不同视频素材提供差异化的超分效果。
- 多输出倍数：支持2-4倍分辨率放大，支持原分辨率增强输出，可根据业务需要选择。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/MakeSuperResolutionImage?lang=JAVA&sdkStyle=dara&params={%22Url%22:%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageenhan%2FMakeSuperResolutionImage%2FMakeSuperResolutionImage1.png%22,%22Mode%22:%22base%22,%22UpscaleFactor%22:2}&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像超分示例代码](~~601502~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：不小于32×32像素，长边不大于1920像素，短边不大于1080像素。
- URL地址中不能包含中文字符。

## 计费说明
关于图像超分的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageenhan&children=MakeSuperResolutionImage)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像生产类目下的图像超分能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像超分示例代码](~~601502~~)。',
      'extraInfo' => '## 错误码
关于图像超分的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GetAsyncJobResult' => 
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
            'example' => '11A898F7-29D7-4AB3-B639-8BBDE671BBD5',
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
                'example' => '6B4B827E-1CAA-43CD-BBDF-BB572E035976',
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
                    'description' => '异步任务返回的真实请求结果。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-filter.oss-cn-shanghai.aliyuncs.com/upload/recoloring-hd-2020-06-22-19-39-25-798c9cb57f-v6pj4/2020-6-23/invi_filter_015928997797691000043_tIPX7W.jpg?Expires=1592901579&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=qelgcQJBnzRogPybEPDDrDIjHd****',
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
                    'example' => '7435839A-5B92-4AA1-B2DE-5B6C98C04DDE',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6B4B827E-1CAA-43CD-BBDF-BB572E035976\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"http://viapi-cn-shanghai-dha-filter.oss-cn-shanghai.aliyuncs.com/upload/recoloring-hd-2020-06-22-19-39-25-798c9cb57f-v6pj4/2020-6-23/invi_filter_015928997797691000043_tIPX7W.jpg?Expires=1592901579&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=qelgcQJBnzRogPybEPDDrDIjHd****\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"7435839A-5B92-4AA1-B2DE-5B6C98C04DDE\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6B4B827E-1CAA-43CD-BBDF-BB572E035976</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <JobId>7435839A-5B92-4AA1-B2DE-5B6C98C04DDE</JobId>\\n    <Result>{\\"ImageList\\":[\\"http://viapi-cn-shanghai-dha-filter.oss-cn-shanghai.aliyuncs.com/upload/recoloring-hd-2020-06-22-19-39-25-798c9cb57f-v6pj4/2020-6-23/invi_filter_015928997797691000043_tIPX7W.jpg?Expires=1592901579&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=qelgcQJBnzRogPybEPDDrDIjHd****\\"]}</Result>\\n</Data>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'summary' => '本文档介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'description' => '## 功能描述
针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前视频生产类目所有接口均为异步接口，均需要调用GetAsyncJobResult来获取真实的请求结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询异步任务结果的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateCartoonizedImage' => 
    array (
      'summary' => '本文介绍图像生产（imageenhan）类目下的生成式图像卡通化GenerateCartoonizedImage的语法及示例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入图像的URL链接。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该字段已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        2 => 
        array (
          'name' => 'Index',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '卡通效果。取值如下：
- 0：复古漫画（默认）
- 1：3D童话
- 2：二次元
- 3：小清新
- 4：未来科技
- 5：国画古风
- 6:  将军百战
- 7:  炫彩卡通
- 8：清雅国风',
            'type' => 'string',
            'required' => true,
            'example' => '0',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '48f38719-f0c2-4784-a9cc-30df95e393a9',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '输出图像的URL。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。
',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/generative-cartoon/2023-02-02/5a3e5760-ff27-4321-8976-d05656fb716a/20230202_154009511910_pclb0gomva.jpg?Expires=1675325422&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=UmAa7HxeumVkDfrdoL02dtztwS****',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"48f38719-f0c2-4784-a9cc-30df95e393a9\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/generative-cartoon/2023-02-02/5a3e5760-ff27-4321-8976-d05656fb716a/20230202_154009511910_pclb0gomva.jpg?Expires=1675325422&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=UmAa7HxeumVkDfrdoL02dtztwS****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateCartoonizedImageResponse>\\n    <RequestId>48f38719-f0c2-4784-a9cc-30df95e393a9</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateCartoonizedImageResponse>","errorExample":""}]',
      'title' => '生成式图像卡通化',
      'description' => '## 功能描述
基于生成式大模型实现多种特效风格的图像生成。输入一张图像，选择想要生成的卡通化风格，即可生成与输入图像相同分辨率、特定风格的卡通化图像。
关于该接口功能的示意图如下（左侧为原图，右侧为处理后图片）：
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/rfpk/GenerateCartoonizedImagezonglan.png" width="600)
具体风格详情如下（左侧为原图，右侧为处理后图片）：

- 复古漫画风
该风格模拟八九十年代复古漫画风格，可以将现实世界中的各类场景进行漫画风格化，包括人物、动物、风景、家具等，整体风格线条明晰、色彩艳丽。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/iyrz/GenerateCartoonizedImagefugu.png" width="600)

- 3D童话风格
该风格模拟3D童话的风格，可以将现实世界中的各类场景进行3D动画风格化，包括人物、动物、风景、家具等，整体风格偏淡雅，该风格会保留原始图片中的大部分特征，也会生成一些新的元素，提升可玩性。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/vmjn/GenerateCartoonizedImage3d.png" width="600)

- 二次元风格
该风格模拟二次元动漫风格，可以将现实世界中的各类场景进行二次元风格化，包括人物、动物、风景、家具等，该风格颜色比较鲜艳，可以将一些风景类图片变得类似动漫风。保留原始图片中的大部分特征，也会生成一些新的元素，提升可玩性。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/ffhd/GenerateCartoonizedImage2ciyuan.png" width="600)

- 小清新风格
该风格整体色彩比较淡雅，以人物为主，也可以用于其他类型的图片，该风格生成的图片比较类似GD插画师的风格，适合喜欢插画风格的用户使用。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/ubyx/GenerateCartoonizedImagexiaoqingxin.png" width="600)

- 未来科技风格
该风格为模拟未来世界的机甲科幻风格，该风格的变化非常大，可玩性极强，对于未来科技感兴趣的用户可以尝试。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/bxvf/GenerateCartoonizedImageweilaikeji.png" width="600)

- 国画古风
该风格模拟古代国画工笔画风格，将人物古装化，形成一副逼真的中国古典画作，适合喜欢国潮风的用户。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/jtkr/GenerateCartoonizedImageguohuagufeng.png" width="600)

- 将军百战
该风格模拟古代战场风格，使人物和盔甲元素相结合，充满古典气息。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/abqy/GenerateCartoonizedImagejiangjunbaizhan.png" width="600)

- 炫彩卡通
该风格模拟手绘水彩笔、蜡笔的画风，充满手工手绘气息。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/yrjf/GenerateCartoonizedImagexuancaikatong.png" width="600)

- 清雅国风
该风格模拟清雅的古典国风，将人物进行古装化，风格偏2.5D，非常适合喜欢国风的用户。
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/tztf/GenerateCartoonizedImageqingyaguofeng.png" width="600)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=imageenhan&children=GenerateCartoonizedImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
社交软件头像生成：用户可上传自拍照、萌宠、风景照，根据个人喜好指定卡通画风格，生成对应图片，可玩性较高。

## 特色优势
- 卡通化要素广：基于生成式大模型，能够对人像、宠物、场景等要素进行处理，生成细腻生动的卡通化效果。
- 风格多样：支持多种生成风格，满足不同用户的喜好和需求。
- 智能化：可根据输入图片的人物性别、场景类别等进行智能识别，使得输出的图片在满足趣味性和美感的情况下贴近原图。
- 高质量：生成图像质量高，瑕疵少。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/GenerateImageWithText?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[生成式图像卡通化示例代码](~~602271~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图片大小不超过10 MB。
- 支持的图片类型：JPEG、PNG、JPG、BMP、WEBP。
- 输入图像尺寸大于等于256x256像素，小于等于5760x3240像素。
- 输出图像短边长为1536。当输入图像长边与短边的比值小于等于1.5:1时，保持原图长宽比；当该比值大于1.5:1时，将执行自适应裁剪，使输出长宽比为1.5:1。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateCartoonizedImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
关于生成式图像卡通化的计费方式及报价，请参见[计费介绍](~~202482~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?tagName=imageenhan&children=GenerateCartoonizedImage)。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像生产类目下的文生图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[生成式图像卡通化示例代码](~~602271~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于生成式图像卡通化的错误码，详情请参见[常见错误码](~~145023~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateImageWithText' => 
    array (
      'summary' => '本文介绍文本到图像生成GenerateImageWithText的语法及示例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Text',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文本内容，支持中英文，中文不超过75个字，英文不超过75个字母，超过部分会自动截断。
建议文本内容尽可能详细准确，详细的文本描述内容有助于获得更佳的图片生成效果。',
            'type' => 'string',
            'required' => true,
            'example' => '一只戴着太阳镜的小松鼠在演奏吉他',
          ),
        ),
        1 => 
        array (
          'name' => 'Resolution',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的图像分辨率。支持512*512、1024*1024、1024*768、768*1024、720*1280和1280*720像素，默认1024*1024像素。',
            'type' => 'string',
            'required' => false,
            'example' => '1024*1024',
          ),
        ),
        2 => 
        array (
          'name' => 'Number',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片生成数量。支持1~4张，默认1张。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7574ee8f-38a3-4b1e-9280-11c33ab46e51',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageUrls' => 
                  array (
                    'description' => '输出图像的URL。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '输出图像的URL。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                      'type' => 'string',
                      'example' => 'http://vibktprfx-prod-prod-gen-model-cn-shanghai.oss-cn-shanghai.aliyuncs.com/text2image/cv_diffusion_text-to-image-synthesis_results/images/42d57dec8fe011ed9f3dde652e7536a6_1.jpg?Expires=1673244687&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=JxAFHGKJbyIq9EUxa6BZzWj1hw****',
                    ),
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7574ee8f-38a3-4b1e-9280-11c33ab46e51\\",\\n  \\"Data\\": {\\n    \\"ImageUrls\\": [\\n      \\"http://vibktprfx-prod-prod-gen-model-cn-shanghai.oss-cn-shanghai.aliyuncs.com/text2image/cv_diffusion_text-to-image-synthesis_results/images/42d57dec8fe011ed9f3dde652e7536a6_1.jpg?Expires=1673244687&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=JxAFHGKJbyIq9EUxa6BZzWj1hw****\\"\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateImageWithTextResponse>\\n    <RequestId>7574ee8f-38a3-4b1e-9280-11c33ab46e51</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateImageWithTextResponse>","errorExample":""}]',
      'title' => '文本到图像生成',
      'description' => '## 服务说明
由于产品业务和安全合规调整，文生图服务将于2023年06月19日起停止更新，后续不再支持新用户开通接入服务。同时，文生图API服务计划于2023年09月30日完成服务下线，请老用户提前做好服务迁移计划。2023年06月19日之后，会继续支持老用户，老用户如果对文生图API服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 功能描述
依托达摩院自研文生图大模型，通过知识重组与可变维度扩散模型加速收敛并提升最终生成图片, 输入描述文本，即可返回符合文本描述的2D图像，支持中英双语输入，您可以通过API实现服务调用。

> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 图片设计：根据特定prompt输入，为设计师提供素材和创作灵感，提升设计成图的效率。
- 内容创作：根据内容工作者的文字内容快速生成人物、背景、封面、动漫、游戏等创意内容。

## 特色优势
- 场景支持广：分辨率支持较为灵活，支持主流设计场景的分辨率设置。
- 适用范围广：能基于任意中英文文本描述进行推理，生成图像。
- 生成效果佳：在非现实、朋克机甲等类型的图片生成效果领先。

## 计费说明
关于文生图的计费方式及报价，请参见[计费介绍](~~202482~~)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateImageWithText接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像生产类目下的文生图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于文生图的错误码，详情请参见[常见错误码](~~145023~~)。

## 版权说明

- ⽣成图⽚归属于谁？
我们为您提供的是图⽚⽣成技术服务，在您购买产品并⽀付调⽤API技术服务费后，⽣成图⽚的著作
权将永久归您所有。您可⽤于商业⽤途，并⾃⾏负责⽣成图⽚的使⽤⻛险及合规问题，我们对此不承
担任何法律责任。

- 图⽚是如何⽣成的？
图⽚与您输⼊的内容有关，并通过深度合成算法⾃动⽣成，本服务算法是根据开源数据集及互联⽹的
公开信息积累训练⽽成。因此，我们对⽣成图⽚的准确性、完整性和功能性不做任何保证，亦不承担
任何法律责任。

- 图⽚引发不适该怎么办？
本服务⽣成的所有内容均由AI模型⾃动⽣成，我们在训练过程中已通过将训练数据持续过滤来提升
内容理解和⽣成的准确性，但仍不排除其中有部分信息存在⼀定的敏感性、不合理或导致理解歧义的
问题存在，可能会引发您的不适。
您可以通过钉钉群（23109592）联系我们，我们将及时联系您并采取合理有效的处理措施。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateImageWithTextAndImage' => 
    array (
      'summary' => '本文介绍文本和参考图到图像生成GenerateImageWithTextAndImage的语法及示例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Text',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文本内容。支持中英文，中文不超过75个字，英文不超过75个字母，超过部分会自动截断。
建议文本内容尽可能详细准确，详细的文本描述内容有助于获得更佳的图片生成效果。',
            'type' => 'string',
            'required' => true,
            'example' => '大雪中的雪人精灵，4K，摄影',
          ),
        ),
        1 => 
        array (
          'name' => 'Resolution',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的图像分辨率。支持512*512、1024*1024、1024*768、768*1024、720*1280、1280*720像素，默认1024*1024像素。',
            'type' => 'string',
            'required' => false,
            'example' => '1024*1024',
          ),
        ),
        2 => 
        array (
          'name' => 'Number',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片生成数量。支持1~4张，默认1张。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RefImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '参考图地址。参考图分辨率请尽量和需要生成的图像分辨率接近，生成过程会先按照参数`AspectRatioMode`设定的模式，将参考图缩放裁剪到`resolution`参数指定的分辨率，再参考缩放裁剪后的图片进行图像生成，供用户参考。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/GenerateImageWithTextAndImage/GenerateImageWithTextAndImage11.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'Similarity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '参考程度。值在0～1之间，默认值为0.2。
- 0：完全不参考参考图，只基于文本生成图像。
- 1：完全复制参考图。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.2',
          ),
        ),
        5 => 
        array (
          'name' => 'AspectRatioMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像缩放裁剪模式。包括center_crop和resize，默认为center_crop。
- center_crop：最大限度保留图像中心部分，将边缘进行裁剪。
- resize：将图像拉伸到最终分辨率。',
            'type' => 'string',
            'required' => false,
            'example' => 'center_crop',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '141fb6d1-28e8-4d93-8165-d966f7092e6a',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageUrls' => 
                  array (
                    'description' => '输出图像的URL。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '输出图像的URL。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                      'type' => 'string',
                      'example' => 'http://vibktprfx-prod-prod-gen-model-cn-shanghai.oss-cn-shanghai.aliyuncs.com/text2image/cv_diffusion_text-to-image-synthesis_results/images/8df0b0588fe011ed9f3dde652e7536a6_1.jpg?Expires=1673244813&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=6cjXWuOYMpBLD8V1%2BJOq8zvSBb****',
                    ),
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"141fb6d1-28e8-4d93-8165-d966f7092e6a\\",\\n  \\"Data\\": {\\n    \\"ImageUrls\\": [\\n      \\"http://vibktprfx-prod-prod-gen-model-cn-shanghai.oss-cn-shanghai.aliyuncs.com/text2image/cv_diffusion_text-to-image-synthesis_results/images/8df0b0588fe011ed9f3dde652e7536a6_1.jpg?Expires=1673244813&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=6cjXWuOYMpBLD8V1%2BJOq8zvSBb****\\"\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateImageWithTextAndImageResponse>\\n    <RequestId>141fb6d1-28e8-4d93-8165-d966f7092e6a</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateImageWithTextAndImageResponse>","errorExample":""}]',
      'title' => '文本和参考图到图像生成',
      'description' => '## 服务说明
由于产品业务和安全合规调整，图文生图服务将于2023年06月19日起停止更新，后续不再支持新用户开通接入服务。同时，图文生图API服务计划于2023年09月30日完成服务下线，请老用户提前做好服务迁移计划。2023年06月19日之后，会继续支持老用户，老用户如果对图文生图API服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


## 功能描述
依托达摩院自研文生图大模型，输入文本和参考图，可以基于文本描述和原图的相似度生成目标图，使得生成的图片更可控。

> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 图片设计：根据原图和参考图及其相似度参数，帮助设计师基于参考图快速可控的输出符合预期的图片。
- 内容创作：在较为广泛的电商主图、人物、背景、封面、动漫、游戏等创意内容的创作过程中，通过文字和相似度对参考图进行二次生成。

## 特色优势
- 效果可控：生成效果可以通过prompt和参考图、相似度进行调节，使得生成效果更符合预期。
- 生成效果佳：在非现实、朋克机甲等类型的图片生成效果佳。

## 输入限制
- 支持的图片类型：JPEG、PNG、JPG、BMP、WEBP、GIF。
- 图片大小不超过10 MB。
- 不限制图片分辨率。

## 计费说明
关于图文生图的计费方式及报价，请参见[计费介绍](~~202482~~)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateImageWithTextAndImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像生产类目下的图文生图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图文生图的错误码，详情请参见[常见错误码](~~145023~~)。

## 版权说明

- ⽣成图⽚归属于谁？
我们为您提供的是图⽚⽣成技术服务，在您购买产品并⽀付调⽤API技术服务费后，⽣成图⽚的著作
权将永久归您所有。您可⽤于商业⽤途，并⾃⾏负责⽣成图⽚的使⽤⻛险及合规问题，我们对此不承
担任何法律责任。

- 图⽚是如何⽣成的？
图⽚与您输⼊的内容有关，并通过深度合成算法⾃动⽣成，本服务算法是根据开源数据集及互联⽹的
公开信息积累训练⽽成。因此，我们对⽣成图⽚的准确性、完整性和功能性不做任何保证，亦不承担
任何法律责任。

- 图⽚引发不适该怎么办？
本服务⽣成的所有内容均由AI模型⾃动⽣成，我们在训练过程中已通过将训练数据持续过滤来提升
内容理解和⽣成的准确性，但仍不排除其中有部分信息存在⼀定的敏感性、不合理或导致理解歧义的
问题存在，可能会引发您的不适。
您可以通过钉钉群（23109592）联系我们，我们将及时联系您并采取合理有效的处理措施。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateSuperResolutionImage' => 
    array (
      'summary' => '本文介绍图像生产（imageenhan）类目下的生成式图像超分GenerateSuperResolutionImage的语法及示例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入图片地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/xxx/1025.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Scale',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像放大倍数。支持1，2，3，4，默认为2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该参数为接口保留字段，默认不需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        3 => 
        array (
          'name' => 'OutputFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的存储格式。取值范围：`png`、`jpg`、`bmp`，默认`png`。',
            'type' => 'string',
            'required' => false,
            'example' => 'jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'OutputQuality',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输出图像的质量因子，值越大质量越高。取值范围\\[30,100]，默认95，仅当`outputFormat`为`jpg`时有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '95',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4ad5c3ef-5ac4-4e1c-b14f-90d939aa73eb',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '输出图片的OSS地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/diffusion-sr/2023-02-07/d01cede5-28bf-4719-96d9-77198d51c2f2/20230207_150650515242_3dbctnjy5f.jpg?Expires=1675755681&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=4FeDXpp0DilXsHdt7qc%2Ffh3zoC****',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4ad5c3ef-5ac4-4e1c-b14f-90d939aa73eb\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/diffusion-sr/2023-02-07/d01cede5-28bf-4719-96d9-77198d51c2f2/20230207_150650515242_3dbctnjy5f.jpg?Expires=1675755681&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=4FeDXpp0DilXsHdt7qc%2Ffh3zoC****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateSuperResolutionImageResponse>\\n    <RequestId>4ad5c3ef-5ac4-4e1c-b14f-90d939aa73eb</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateSuperResolutionImageResponse>","errorExample":""}]',
      'title' => '生成式图像超分',
      'description' => '## 功能描述
基于生成式大模型，对图像分辨率进行细节增强、图像修复以及倍数放大，显著提升图像细节丰富度，使图像变得更加清晰。相比[标准版图像超分算法](~~151947~~)，具有更加真实、更自然的细节生成能力。
关于该接口功能的示例图如下（左侧为原图，右侧为处理后图片）：
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231227/gmzo/GenerateSuperResolutionImage.png" width="600)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 生成模型更多细节：采用生成大模型，能够对图像生成更多细节纹理，对各类图像带来显著的画质提升。
- 4倍放大：最高支持4倍放大，使低清图像变为高清图像。

## 特色优势

- 印刷画质提升：对待出版印刷的图像内容进行高清化处理，使图像素材达到交付印刷所需要的高DPI、高分辨率、高清晰度要求。
- 老旧素材提升：对重要的经典老旧图像进行高清化处理，使模糊的低清素材变得更加清晰。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像生产服务](https://vision.aliyun.com/imageenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageenhan_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageenhan/2019-09-30/GenerateImageWithText?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像生产（imageenhan）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[生成式图像超分示例代码](~~608846~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 支持的图片类型：JPEG、PNG、JPG、BMP。
- 输入图像分辨率：短边不超过1080P，长边不超过5000P（短边超过1080P不会报错，算法自动进行调整；长边超过5000P算法会报错）。
- 输入图像比例：长宽比不超过2:1。
- 图片大小不超过20 MB。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用GenerateImageWithText接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
关于生成式图像超分的计费方式及报价，请参见[计费介绍](~~202482~~)。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像生产类目下的文生图能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像生产（imageenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[生成式图像超分示例代码](~~608846~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于生成式图像超分的错误码，详情请参见[常见错误码](~~145023~~)。

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
      'endpoint' => 'imageenhan.cn-shanghai.aliyuncs.com',
    ),
  ),
);
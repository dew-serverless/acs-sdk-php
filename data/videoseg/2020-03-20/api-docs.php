<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'videoseg',
    'version' => '2020-03-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 69052,
      'title' => '结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
      ),
    ),
    1 => 
    array (
      'id' => 69054,
      'title' => '分割',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SegmentVideoBody',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6BD843FB-E7B9-45B6-ADE1-9AB1FF450148',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
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
                    'example' => '{\\"VideoUrl\\":\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/film-summary/49E2CC28-ED1D-4CC5-854D-7D0AE2B20976_rf8mv0.mp4?Expires=1585111875&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=7uE0ppt6uwkdwAFz73PPZN4KG7****\\"}',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6BD843FB-E7B9-45B6-ADE1-9AB1FF450148\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"VideoUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/film-summary/49E2CC28-ED1D-4CC5-854D-7D0AE2B20976_rf8mv0.mp4?Expires=1585111875&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=7uE0ppt6uwkdwAFz73PPZN4KG7****\\\\\\\\\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6BD843FB-E7B9-45B6-ADE1-9AB1FF450148</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <JobId>9CDE688A-8FC8-4B8D-8C34-1C3490703F23</JobId>\\n    <Result>{\\"VideoUrl\\":\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-human-segmentation/9CDE688A-8FC8-4B8D-8C34-1C3490703F23.mp4?Expires=1585193584&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=z6DQV%2F14CFvammxkgXLcYm0wsW****\\"}</Result>\\n</Data>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'description' => '## 功能描述
异步接口调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前视频分割类目所有接口均为异步接口，均需要调用GetAsyncJobResult来获取真实的请求结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## Result反序列化
将上面Result反序列化展示如下。
```
{
	"VideoUrl": "http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-human-segmentation/9CDE688A-8FC8-4B8D-8C34-1C3490703F23.mp4?Expires=1585193584&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=z6DQV%2F14CFvammxkgXLcYm0wsW****"
}
```


## 错误码
关于查询异步任务结果的错误码，详情请参见[常见错误码](~~159108~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentVideoBody' => 
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
          'name' => 'VideoUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoseg/SegmentVideoBody/SegmentVideoBody1.mp4',
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
                'example' => '49E2CC28-ED1D-4CC5-854D-7D0AE2B20976',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'VideoUrl' => 
                  array (
                    'description' => '输出结果图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-human-segmentation/D86DDFBC-B8ED-4780-9E6A-E5BA98D7CC9F.mp4?Expires=1584709406&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Fx5HVxvRjAMIjWL2OvhTlOO4cC****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-human-segmentation/D86DDFBC-B8ED-4780-9E6A-E5BA98D7CC9F.mp4?Expires=1584709406&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Fx5HVxvRjAMIjWL2OvhTlOO4cC****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<SegmentVideoBodyResponse>\\n    <RequestId>49E2CC28-ED1D-4CC5-854D-7D0AE2B20976</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</SegmentVideoBodyResponse>","errorExample":""}]',
      'title' => '视频人像分割',
      'summary' => '本文介绍视频人像分割SegmentVideoBody的语法及示例。',
      'description' => '## 功能描述
视频人像分割能力对输入的视频进行解析，将人像区域的mask作为视频序列返回。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoseg&children=SegmentVideoBody)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[视频分割服务](https://vision.aliyun.com/videoseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoseg/2020-03-20/SegmentVideoBody?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoseg%2FSegmentVideoBody%2FSegmentVideoBody1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤： 
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为视频分割（videoseg）类目的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[视频人像分割示例代码](~~610206~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

## 输入限制

- 视频格式：MP4、AVI、FLV、MOV。
- 视频大小：不超过1 GB。
- 视频要求总帧数不超过2000帧。
- URL地址中不能包含中文字符。

## 计费说明
关于视频人像分割的计费方式及报价，请参见[计费介绍](~~202488~~)。

> 下方调试接口为付费接口。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用SegmentVideoBody接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI视频分割类目下的视频人像分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频分割（videoseg）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[视频人像分割示例代码](~~610206~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于视频人像分割的错误码，详情请参见[常见错误码](~~159311~~)。

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
      'endpoint' => 'videoseg.cn-shanghai.aliyuncs.com',
    ),
  ),
);
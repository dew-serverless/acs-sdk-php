<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imagerecog',
    'version' => '2019-09-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64348,
      'title' => '结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
        1 => 'EvaluateCertificateQuality',
      ),
    ),
    1 => 
    array (
      'id' => 64351,
      'title' => '标注',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TaggingImage',
      ),
    ),
    2 => 
    array (
      'id' => 64353,
      'title' => '识别',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ClassifyingRubbish',
        1 => 'DetectImageElements',
        2 => 'RecognizeFood',
        3 => 'RecognizeImageColor',
        4 => 'RecognizeImageStyle',
        5 => 'RecognizeScene',
      ),
    ),
    3 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TaggingAdImage',
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
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步接口返回的RequestId，输入后可以查询异步接口的真实请求结果。',
            'type' => 'string',
            'required' => true,
            'example' => '72CFDC08-3FEF-56AA-91E5-B14DE31C09C2',
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
                'example' => '572974F0-1014-5C60-97EE-DBFFC0FF7616',
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
                    'example' => '{\\"tags\\":[{\\"confidence\\":-1,\\"value\\":\\"{\\\\\\"tagInfo\\\\\\": {\\\\\\"humanInfo\\\\\\": [[{\\\\\\"category\\\\\\": \\\\\\"human-real-normal\\\\\\", \\\\\\"score\\\\\\": 0.9690580798778683, \\\\\\"bbox\\\\\\": [77, 280, 431, 569], \\\\\\"cloth_category\\\\\\": \\\\\\"modern\\\\\\", \\\\\\"cloth_category_score\\\\\\": 0.7393399477005005}]], \\\\\\"sceneInfo\\\\\\": [[{\\\\\\"category\\\\\\": \\\\\\"gamescreen-gameeffect\\\\\\", \\\\\\"score\\\\\\": 0.44200169294841274}]], \\\\\\"objectInfo\\\\\\": [null]}}\\"}]}',
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
                    'example' => '72CFDC08-3FEF-56AA-91E5-B14DE31C09C2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"572974F0-1014-5C60-97EE-DBFFC0FF7616\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"confidence\\\\\\\\\\\\\\":-1,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"tagInfo\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"humanInfo\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": [[{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"category\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"human-real-normal\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\", \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"score\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": 0.9690580798778683, \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"bbox\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": [77, 280, 431, 569], \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"cloth_category\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"modern\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\", \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"cloth_category_score\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": 0.7393399477005005}]], \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"sceneInfo\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": [[{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"category\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"gamescreen-gameeffect\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\", \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"score\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": 0.44200169294841274}]], \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"objectInfo\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\": [null]}}\\\\\\\\\\\\\\"}]}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"72CFDC08-3FEF-56AA-91E5-B14DE31C09C2\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAsyncJobResultResponse>\\n    <RequestId>572974F0-1014-5C60-97EE-DBFFC0FF7616</RequestId>\\n    <Data>\\n        <Status>PROCESS_SUCCESS</Status>\\n        <ErrorMessage>paramsIllegal</ErrorMessage>\\n        <Result>{\\\\\\"tags\\\\\\":[{\\\\\\"confidence\\\\\\":-1,\\\\\\"value\\\\\\":\\\\\\"{\\\\\\\\\\\\\\"tagInfo\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"humanInfo\\\\\\\\\\\\\\": [[{\\\\\\\\\\\\\\"category\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"human-real-normal\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"score\\\\\\\\\\\\\\": 0.9690580798778683, \\\\\\\\\\\\\\"bbox\\\\\\\\\\\\\\": [77, 280, 431, 569], \\\\\\\\\\\\\\"cloth_category\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"modern\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"cloth_category_score\\\\\\\\\\\\\\": 0.7393399477005005}]], \\\\\\\\\\\\\\"sceneInfo\\\\\\\\\\\\\\": [[{\\\\\\\\\\\\\\"category\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"gamescreen-gameeffect\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"score\\\\\\\\\\\\\\": 0.44200169294841274}]], \\\\\\\\\\\\\\"objectInfo\\\\\\\\\\\\\\": [null]}}\\\\\\"}]}</Result>\\n        <ErrorCode>InvalidParameter</ErrorCode>\\n        <JobId>72CFDC08-3FEF-56AA-91E5-B14DE31C09C2</JobId>\\n    </Data>\\n</GetAsyncJobResultResponse>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'description' => '## 功能描述
针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前图像识别类目中广告素材分析（TaggingAdImage）为异步接口，需要调用GetAsyncJobResult来获取真实的请求结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询异步任务结果的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'EvaluateCertificateQuality' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imagerecog/xxxxx.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证照类型。

- IDCard：身份证。
- BusinessLicense：电子执照。',
            'type' => 'string',
            'required' => true,
            'example' => 'BusinessLicense',
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
                'example' => '656318DC-3856-43E3-9147-859532721AD6',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '输出识别出的质量问题列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '问题类型。

- lackoffront： 缺乏正面照。
- copy：复印件。
- imageincomplete：证件图像不完整。
- nationalemblemincomplete：营业执照国徽不完整。
- lackofseal：缺乏印章。
- electronic：来源于电子档。
- reflection：反光。

> - 如果请求参数**Type**为IDCard，无lackofseal（缺乏印章）。
- 如果请求参数**Type**为BusinessLicense，无lackoffront（缺乏正面照）。
',
                          'type' => 'string',
                          'example' => 'lackoffront',
                        ),
                        'Pass' => 
                        array (
                          'description' => '是否通过检查。

- true：通过检查。
- false：未通过检查。
- verify：无法检验证照质量，请人工确认。
- ERROR：该模块算法推理失败。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'Score' => 
                        array (
                          'description' => '质量问题分值，分值越高，问题越严重，取值为0~100之间的整数。

- 当系统无法给出分值时，输出结果为`score`。
- 当**Pass**字段为`ERROR`时，输出结果为`null`。',
                          'type' => 'string',
                          'example' => '0.06514739990234375',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"656318DC-3856-43E3-9147-859532721AD6\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Value\\": \\"lackoffront\\",\\n        \\"Pass\\": \\"false\\",\\n        \\"Score\\": \\"0.06514739990234375\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>656318DC-3856-43E3-9147-859532721AD6</RequestId>\\n<Data>\\n    <Elements>\\n        <Value>lackoffront</Value>\\n        <Score>0.06514739990234375</Score>\\n        <Pass>false</Pass>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '证件照质量审核',
      'summary' => '本文介绍证件照质量审核EvaluateCertificateQuality的语法及示例。',
      'description' => '## 功能描述
证件照质量审核能力可以识别拍摄的证件照片是否存在质量问题，且有哪些质量问题。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 网络认证：在网络认证时，需要提交身份证、营业执照、护照、支票等证件照片。而拍摄的照片质量不一，部分照片由于拍摄或水印的原因，难以达到认证的清晰程度要求。证件照质量审核可以自动识别出证件图像质量问题，减少人力审核投入。
- 登记注册：在线下登记注册操作时，需要拍摄证件电子档照片，但拍摄条件水平不一， 部分照片质量存在问题。通过证件照质量审核可以筛选出有质量问题的照片，以免使用和识别的过程中出现操作失败和报错的情况。

## 特色优势

- 全方面检查：对影响认证的照片质量因素做全方面检查。检查项包括：是否目标证件类型、是否缺乏正面照、是否为复印件、证件图像是否完整、是否缺乏印章、是否来源于电子档、有无反光、有无水印覆盖、文字清晰度。从以上方面考察照片是否影响认证效力。
- 实际业务积累：该算法经过阿里实际业务沉淀，实际总结了诸多影响注册审核的各种质量问题，可助力业务自动化。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/EvaluateCertificateQuality?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[证件照质量审核示例代码](~~601120~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像类型：JPEG、JPG、BMP、PNG。
- 图像大小：小于10 MB。
- 图像分辨率：大于100×100像素，小于5000×5000像素。
- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的证件照质量审核能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[证件照质量审核示例代码](~~601120~~)。',
      'extraInfo' => '## 错误码
关于证件照质量审核的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'TaggingImage' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/TaggingImage/TaggingImage1.jpg',
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
                'example' => '70ED13B0-BC22-576D-9CCF-1CC12FEAC477',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Tags' => 
                  array (
                    'description' => '输出打标结果，最多输出5个打标结果，如果某个类别标签未输出，则对应的置信度`confidence`为零。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '标签名称。具体取值请[下载Label文件](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/imagerecog/label.txt)查看。',
                          'type' => 'string',
                          'example' => '沙发',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '标签名称对应的置信度，取值范围0~100。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '65',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"70ED13B0-BC22-576D-9CCF-1CC12FEAC477\\",\\n  \\"Data\\": {\\n    \\"Tags\\": [\\n      {\\n        \\"Value\\": \\"沙发\\",\\n        \\"Confidence\\": 65\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TaggingImageResponse>\\n    <RequestId>70ED13B0-BC22-576D-9CCF-1CC12FEAC477</RequestId>\\n    <Data>\\n        <Tags>\\n            <Confidence>65</Confidence>\\n            <Value>沙发</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>41</Confidence>\\n            <Value>床</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>24</Confidence>\\n            <Value>家具</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>13</Confidence>\\n            <Value>长沙发</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>11</Confidence>\\n            <Value>卧室</Value>\\n        </Tags>\\n    </Data>\\n</TaggingImageResponse>","errorExample":""}]',
      'title' => '通用图像打标',
      'summary' => '本文介绍通用图像打标TaggingImage的语法及示例。',
      'description' => '## 功能描述
通用图像打标能力用于识别图像中的主体内容并打上类型标签，支持数千个内容标签，覆盖常见物体品类。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=TaggingImage)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/TaggingImage?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FTaggingImage%2FTaggingImage1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[通用图像打标示例代码](~~601100~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
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
关于通用图像打标的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=TaggingImage)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的通用图像打标能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[通用图像打标示例代码](~~601100~~)。',
      'extraInfo' => '## 错误码
关于通用图像打标的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ClassifyingRubbish' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/ClassifyingRubbish/ClassifyingRubbish6.jpg',
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
                'example' => '1619647E-92ED-5641-A1D9-F05C33FD294A',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Sensitive' => 
                  array (
                    'description' => '图片中是否存在敏感信息。

- true：存在敏感信息，不会返回具体垃圾分类信息。

- false：不存在敏感信息。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Elements' => 
                  array (
                    'description' => '输出垃圾识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CategoryScore' => 
                        array (
                          'description' => '识别出的垃圾类别的置信度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9406',
                        ),
                        'Rubbish' => 
                        array (
                          'description' => '具体的物品名称。',
                          'type' => 'string',
                          'example' => '纸板箱',
                        ),
                        'RubbishScore' => 
                        array (
                          'description' => '物品名称的置信度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9406',
                        ),
                        'Category' => 
                        array (
                          'description' => '垃圾类别。包括可回收垃圾、干垃圾、湿垃圾、有害垃圾。',
                          'type' => 'string',
                          'example' => '可回收垃圾',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1619647E-92ED-5641-A1D9-F05C33FD294A\\",\\n  \\"Data\\": {\\n    \\"Sensitive\\": false,\\n    \\"Elements\\": [\\n      {\\n        \\"CategoryScore\\": 0.9406,\\n        \\"Rubbish\\": \\"纸板箱\\",\\n        \\"RubbishScore\\": 0.9406,\\n        \\"Category\\": \\"可回收垃圾\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ClassifyingRubbishResponse>\\n    <RequestId>1619647E-92ED-5641-A1D9-F05C33FD294A</RequestId>\\n    <Data>\\n        <Sensitive>false</Sensitive>\\n        <Elements>\\n            <Rubbish>纸板箱</Rubbish>\\n            <Category>可回收垃圾</Category>\\n            <CategoryScore>0.9406</CategoryScore>\\n            <RubbishScore>0.9406</RubbishScore>\\n        </Elements>\\n    </Data>\\n</ClassifyingRubbishResponse>","errorExample":""}]',
      'title' => '垃圾分类识别',
      'summary' => '本文档介绍垃圾分类识别ClassifyingRubbish的语法及示例。',
      'description' => '## 功能描述
垃圾分类识别能力可以对图片中的物品垃圾进行分类，并给出具体的物品名称。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=ClassifyingRubbish)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/ClassifyingRubbish?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FClassifyingRubbish%2FClassifyingRubbish1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[垃圾分类识别示例代码](~~601145~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像类型：JPEG、JPG、PNG。
- 图像大小：不大于3 MB。
- 图像分辨率：不限制图像分辨率，但图像分辨率太高可能会导致API识别超时，超时时间为5秒。
- URL地址中不能包含中文字符。

## 计费说明
关于垃圾分类识别的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=ClassifyingRubbish)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 常见垃圾输出列举值
- 可回收物
废纸张：纸板箱、报纸、废弃书本、快递纸袋、打印纸、信封、广告单、纸塑铝复合包装（利乐包）。
废塑料：食品与日用品塑料瓶罐及瓶盖（饮料瓶、奶瓶、洗发水瓶、乳液罐）、食用油桶、塑料碗（盆）、塑料盒子（食品保鲜盒、收纳盒）、塑料玩具（塑料积木、塑料模型）、塑料衣架、施工安全帽、PE塑料、pvc、亚克力板、塑料卡片、密胺餐具、kt板、泡沫（泡沫塑料、水果网套）。
废玻璃制品：食品及日用品玻璃瓶罐（调料瓶、酒瓶、化妆品瓶）、玻璃杯、窗玻璃、玻璃制品（放大镜、玻璃摆件）、碎玻璃。
废金属：金属瓶罐（易拉罐、食品罐/桶）、金属厨具（菜刀、锅）、金属工具（刀片、指甲剪、螺丝刀）、金属制品（铁钉、铁皮、铝箔）。
废织物：旧衣服、床单、枕头、棉被、皮鞋、毛绒玩具（布偶）、棉袄、包、皮带、丝绸制品。
其它：电路板（主板、内存条）、充电宝、电线、插头、木制品（积木、砧板）。

- 有害垃圾
废镍镉电池和废氧化汞电池：充电电池、镉镍电池、铅酸电池、蓄电池、纽扣电池。
废荧光灯管：荧光（日光）灯管、卤素灯。
废药品及其包装物：过期药物、药物胶囊、药片、药品内包装。
废油漆和溶剂及其包装物：废油漆桶、染发剂壳、过期的指甲油、洗甲水。
废矿物油及其包装物。
废含汞温度计、废含汞血压计：水银血压计、水银体温计、水银温度计。
废杀虫剂及其包装：老鼠药（毒鼠强）、杀虫喷雾罐。
废胶片及废相纸：x光片等感光胶片、相片底片。

- 厨余垃圾（湿垃圾）
食材废料：谷物及其加工食品（米、米饭、面、面包、豆类）、肉蛋及其加工食品（鸡、鸭、猪、牛、羊肉、蛋、动物内脏、腊肉、午餐肉、蛋壳）、水产及其加工食品（鱼、鱼鳞、虾、虾壳、鱿鱼）、蔬菜（绿叶菜、根茎蔬菜、菌菇）、调料、酱料。
剩菜剩饭：火锅汤底（沥干后的固体废弃物）、鱼骨、碎骨、茶叶渣、咖啡渣。
过期食品：糕饼、糖果、风干食品（肉干、红枣、中药材）、粉末类食品（冲泡饮料、面粉）、宠物饲料。
瓜皮果核：水果果肉（椰子肉）、水果果皮（西瓜皮、桔子皮、苹果皮）、水果茎枝（葡萄枝）、果实（西瓜籽）。
花卉植物：家养绿植、花卉、花瓣、枝叶。
中药药渣。

- 其他垃圾（干垃圾）
餐巾纸、卫生间用纸、尿不湿、猫砂、狗尿垫、污损纸张、烟蒂、干燥剂、污损塑料、尼龙制品、编织袋、防碎气泡膜、大骨头、硬贝壳、硬果壳（椰子壳、榴莲壳、核桃壳、玉米衣、甘蔗皮）、硬果实（榴莲核、菠萝蜜核）、毛发、灰土、炉渣、橡皮泥、太空沙、带胶制品（胶水、胶带）、花盆、毛巾、一次性餐具、镜子、陶瓷制品、竹制品（竹篮、竹筷、牙签）、成分复杂的制品（伞、笔、眼镜、打火机）。

## SDK参考
阿里云视觉AI图像识别类目下的垃圾分类识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[垃圾分类识别示例代码](~~601145~~)。',
      'extraInfo' => '## 错误码
关于垃圾分类识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectImageElements' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/DetectImageElements/DetectImageElements5.jpg',
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
                'example' => '7EE82437-AEC4-5AAF-819F-AB28C23EE0FC',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '元素列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '元素类型。包括：
UnType（未定义类型）、AllType（所有类型）、RootType（根类型）、Synthesis（组合元素图）、Embedded（所有嵌套类型）、Format（元素格式）、MajorObject（主体）、Character（文案）、Identifier（标识）、Background（背景）、Decoration（修饰）、MajorHuman（人物模特）、MajorAuction（商品）、MajorThing（物体）、MajorOther（其他主体）、CharMain（主文案）、CharSub（副文案）、CharAction（行动点文案）、CharContent（内容文案）、CharNumber（数字文案）、CharOther（其他文案）、IdentLogo（logo标识）、IdentLight（高亮标识）、IdentCode（码标识）、IdentOther（其他标识）、BackBitmap（位图背景）、BackVector（矢量图背景）、BackOther（其他背景）、DecoTile（平铺修饰）、DecoRegion（区域修饰）、DecoPieces（碎片修饰）、DecoEdge（贴边修饰）、DecoLine（线性修饰）、DecoBox（框型修饰）、DecoChar（行动点文案修饰）、DecoOther（其他修饰）、SynthMajor（主体组团）、SynthChar（文案组团）、SynthIdent（标识组团）、SynthBack（背景组团）、SynthDeco（修饰组团）、SynthOther（其他组团）、EmbedSvg（svg嵌套格式）、EmbedJson（JSON嵌套格式）、EmbedHtml（html嵌套格式）。
',
                          'type' => 'string',
                          'example' => 'majorhuman',
                        ),
                        'Width' => 
                        array (
                          'description' => '元素宽度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '285',
                        ),
                        'Height' => 
                        array (
                          'description' => '元素高度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '354',
                        ),
                        'Y' => 
                        array (
                          'description' => '元素左上角Y轴坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '78',
                        ),
                        'Score' => 
                        array (
                          'description' => '置信度，取值范围`[0.0, 1.0]`。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.997097373008728',
                        ),
                        'X' => 
                        array (
                          'description' => '元素左上角X轴坐标。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '287',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7EE82437-AEC4-5AAF-819F-AB28C23EE0FC\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"majorhuman\\",\\n        \\"Width\\": 285,\\n        \\"Height\\": 354,\\n        \\"Y\\": 78,\\n        \\"Score\\": 0.997097373008728,\\n        \\"X\\": 287\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectImageElementsResponse>\\n    <RequestId>7EE82437-AEC4-5AAF-819F-AB28C23EE0FC</RequestId>\\n    <Data>\\n        <Elements>\\n            <Type>character</Type>\\n            <Score>0.999164342880249</Score>\\n            <X>490</X>\\n            <Y>215</Y>\\n            <Height>66</Height>\\n            <Width>380</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>character</Type>\\n            <Score>0.998594701290131</Score>\\n            <X>531</X>\\n            <Y>302</Y>\\n            <Height>38</Height>\\n            <Width>308</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>majorauction</Type>\\n            <Score>0.983854711055756</Score>\\n            <X>51</X>\\n            <Y>80</Y>\\n            <Height>392</Height>\\n            <Width>464</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>decoration</Type>\\n            <Score>0.915460407733917</Score>\\n            <X>596</X>\\n            <Y>148</Y>\\n            <Height>50</Height>\\n            <Width>170</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>decoration</Type>\\n            <Score>0.777607440948486</Score>\\n            <X>649</X>\\n            <Y>149</Y>\\n            <Height>45</Height>\\n            <Width>63</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>character</Type>\\n            <Score>0.712217330932617</Score>\\n            <X>533</X>\\n            <Y>349</Y>\\n            <Height>20</Height>\\n            <Width>297</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>character</Type>\\n            <Score>0.701746642589569</Score>\\n            <X>239</X>\\n            <Y>129</Y>\\n            <Height>36</Height>\\n            <Width>72</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>decoration</Type>\\n            <Score>0.598963797092438</Score>\\n            <X>594</X>\\n            <Y>166</Y>\\n            <Height>30</Height>\\n            <Width>67</Width>\\n        </Elements>\\n        <Elements>\\n            <Type>decoration</Type>\\n            <Score>0.502112746238708</Score>\\n            <X>703</X>\\n            <Y>167</Y>\\n            <Height>29</Height>\\n            <Width>67</Width>\\n        </Elements>\\n    </Data>\\n</DetectImageElementsResponse>","errorExample":""}]',
      'title' => '元素识别',
      'summary' => '本文介绍元素识别DetectImageElements的语法及示例。',
      'description' => '## 功能描述
元素识别能力用于识别输入图像中所包含的元素内容，用矩形框标注出其位置，并区分其对应的基本类型（人物、修饰、文案）。

- 输入原图 ：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/imxc/DetectImageElements.jpg" width="500)
- 输出结果图 ：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ospt/DetectImageElementsshuchu.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=DetectImageElements)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/DetectImageElements?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FDetectImageElements%2FDetectImageElements1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[元素识别示例代码](~~601121~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、BMP、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：不超过1280×1280像素。
- URL地址中不能包含中文字符。

## 计费说明
元素识别能力目前处于公测期，可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的元素识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[元素识别示例代码](~~601121~~)。',
      'extraInfo' => '## 错误码
关于元素识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeFood' => 
    array (
      'summary' => '本文介绍菜品识别RecognizeFood的语法及示例。',
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/RecognizeFood/RecognizeFood5.jpg',
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
                'example' => '4C2369C5-54E0-4B9F-8ACB-80C4F50AD2DB',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'TopFives' => 
                  array (
                    'description' => '识别出TOP5可能性高的类别，按照置信度从大到小排列。

> 可能不足5个，最多显示5个。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Category' => 
                        array (
                          'description' => '类别。',
                          'type' => 'string',
                          'example' => '清蒸鲈鱼',
                        ),
                        'Score' => 
                        array (
                          'description' => '识别菜品类别的置信度，取值范围为0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.2083740234375',
                        ),
                        'Calorie' => 
                        array (
                          'description' => '每百克卡路里数值。例如被识别为三菌汤的数值为208，则表示每100克三菌汤卡路里为208大卡。

> 由于有些菜品很少见，没有比较统一的卡路里数值，故标注`UNKNOWN`，表示未知。',
                          'type' => 'string',
                          'example' => '208',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4C2369C5-54E0-4B9F-8ACB-80C4F50AD2DB\\",\\n  \\"Data\\": {\\n    \\"TopFives\\": [\\n      {\\n        \\"Category\\": \\"清蒸鲈鱼\\",\\n        \\"Score\\": 0.2083740234375,\\n        \\"Calorie\\": \\"208\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeFoodResponse>\\n    <RequestId>B6F48953-92F4-5388-A000-0057D46B1658</RequestId>\\n    <Data>\\n        <TopFives>\\n            <Calorie>105</Calorie>\\n            <Score>0.56878662109375</Score>\\n            <Category>清蒸鲈鱼</Category>\\n        </TopFives>\\n        <TopFives>\\n            <Calorie>117</Calorie>\\n            <Score>0.0455322265625</Score>\\n            <Category>鳜鱼</Category>\\n        </TopFives>\\n        <TopFives>\\n            <Calorie>112</Calorie>\\n            <Score>0.039886474609375</Score>\\n            <Category>清蒸桂花鱼</Category>\\n        </TopFives>\\n        <TopFives>\\n            <Calorie>118</Calorie>\\n            <Score>0.0296173095703125</Score>\\n            <Category>沸腾鱼</Category>\\n        </TopFives>\\n        <TopFives>\\n            <Calorie>UNKNOWN</Calorie>\\n            <Score>0.0205230712890625</Score>\\n            <Category>其他类</Category>\\n        </TopFives>\\n    </Data>\\n</RecognizeFoodResponse>","errorExample":""}]',
      'title' => '菜品识别',
      'description' => '## 功能描述
菜品识别能力可以识别出图片中的菜品类别名称和热量。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeFood)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 减肥App：拍摄每天的饮食，计算菜品的热量，可协助您控制好热量摄入。
- 运动管理App：通过识别菜品类别，计算累计摄入热量，给出每天的运动计划量。
- 餐饮、菜场等自动收银结算：通过识别餐饮的类别，可提供自动结算服务。

## 特色优势

- 支持本地生活业务场景。已积累线上餐饮品类三万多种，图片上亿张，海量数据积累，模型沉淀较深厚。
- 支持线下食堂、连锁快餐、烘焙等垂直解决方案。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/RecognizeFood?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FRecognizeFood%2FRecognizeFood1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[菜品识别示例代码](~~601126~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像类型：JPEG、JPG、PNG、BMP。
- 图像大小：小于10 MB。
- 图像分辨率：大于等于100×100像素，小于等于4096×4096像素。
- URL地址中不能包含中文字符。

## 计费说明
关于菜品识别的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeFood)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的菜品识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[菜品识别示例代码](~~601126~~)。',
      'extraInfo' => '## 错误码
关于菜品识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeImageColor' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/RecognizeImageColor/RecognizeImageColor1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ColorCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望的色板输出数量。取值范围1~10，默认值为3。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '16',
            'minimum' => '1',
            'example' => '5',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CCC7C1D9-8C0F-58AD-ADE3-C331B83BD6F2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ColorTemplateList' => 
                  array (
                    'description' => '色板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Color' => 
                        array (
                          'description' => 'RGB颜色值（16进制），例如：291A18。',
                          'type' => 'string',
                          'example' => '270315',
                        ),
                        'Percentage' => 
                        array (
                          'description' => '当前颜色标签所占比例，取值范围`[0.0, 1.0]`。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.459527',
                        ),
                        'Label' => 
                        array (
                          'description' => '颜色标签，共11种：black（黑色）、white（白色）、gray（灰色）、red（红色）、orange（橙色）、yellow（黄色）、green（绿色）、cyan（青色）、blue（蓝色）、purple（紫色）、magenta（紫红色）。',
                          'type' => 'string',
                          'example' => 'red',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CCC7C1D9-8C0F-58AD-ADE3-C331B83BD6F2\\",\\n  \\"Data\\": {\\n    \\"ColorTemplateList\\": [\\n      {\\n        \\"Color\\": \\"270315\\",\\n        \\"Percentage\\": 0.459527,\\n        \\"Label\\": \\"red\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeImageColorResponse>\\n    <RequestId>CCC7C1D9-8C0F-58AD-ADE3-C331B83BD6F2</RequestId>\\n    <Data>\\n        <ColorTemplateList>\\n            <Percentage>0.459527</Percentage>\\n            <Color>270315</Color>\\n            <Label>red</Label>\\n        </ColorTemplateList>\\n        <ColorTemplateList>\\n            <Percentage>0.177192</Percentage>\\n            <Color>5A0014</Color>\\n            <Label>red</Label>\\n        </ColorTemplateList>\\n        <ColorTemplateList>\\n            <Percentage>0.169271</Percentage>\\n            <Color>F139CC</Color>\\n            <Label>magenta</Label>\\n        </ColorTemplateList>\\n        <ColorTemplateList>\\n            <Percentage>0.107205</Percentage>\\n            <Color>610492</Color>\\n            <Label>purple</Label>\\n        </ColorTemplateList>\\n        <ColorTemplateList>\\n            <Percentage>0.086806</Percentage>\\n            <Color>EC4886</Color>\\n            <Label>red</Label>\\n        </ColorTemplateList>\\n    </Data>\\n</RecognizeImageColorResponse>","errorExample":""}]',
      'title' => '颜色识别',
      'summary' => '本文档介绍颜色识别RecognizeImageColor的语法及示例。',
      'description' => '## 功能描述
颜色识别能力可以对输入图片的颜色信息进行分析，输出颜色值（RGB形式和HEX格式）与对应的占比信息。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeImageColor)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/RecognizeImageColor?lang=JAVA&sdkStyle=dara&params={%22Url%22:%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FRecognizeImageColor%2FRecognizeImageColor1.jpg%22,%22ColorCount%22:3}&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[颜色识别示例代码](~~478784~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG、BMP。
- 图像大小：不超过9.5 MB。
- 图像分辨率：小于2500×2500像素。
- 图像都必须是RGB 3通道。

- URL地址中不能包含中文字符。

## 计费说明
关于颜色识别的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeImageColor)。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的颜色识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[颜色识别示例代码](~~478784~~)。',
      'extraInfo' => '## 错误码
关于颜色识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeImageStyle' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/RecognizeImageStyle/RecognizeImageStyle1.jpg',
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
                'example' => '66FC3009-9A7A-4D29-8B70-D6EB256EF590',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Styles' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '识别出的风格列表。风格包括：chinese（中国风）、watercolor（水彩）、cartoon（卡通）、real（实景）、standard（标准）、simple（简洁）、lively（活泼）、colourful（多彩）、luxury（豪华）、technology（科技）、morbidezza（柔美）、strong（硬朗）、simpleelegant（素雅）、coolcold（高冷）、promotion（促销）、protrude（突出）。',
                      'type' => 'string',
                      'example' => 'technology',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"66FC3009-9A7A-4D29-8B70-D6EB256EF590\\",\\n  \\"Data\\": {\\n    \\"Styles\\": [\\n      \\"technology\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeImageStyleResponse>\\n    <RequestId>4F7BD051-ADBE-554C-893F-654FCA8535A1</RequestId>\\n    <Data>\\n        <Styles>promotion</Styles>\\n        <Styles>chinese</Styles>\\n    </Data>\\n</RecognizeImageStyleResponse>","errorExample":""}]',
      'title' => '风格识别',
      'summary' => '本文档介绍风格识别RecognizeImageStyle的语法及示例。',
      'description' => '## 功能描述
风格识别能力可以对输入图像的风格类型进行分析，识别可能的风格与语意标签。可以识别的风格包括：chinese（中国风）、watercolor（水彩）、cartoon（卡通）、real（实景）、standard（标准）、simple（简洁）、lively（活泼）、colourful（多彩）、luxury（豪华）、technology（科技）、morbidezza（柔美）、strong（硬朗）、simpleelegant（素雅）、coolcold（高冷）、promotion（促销）、protrude（突出）。
关于该接口功能的示例图如下： 
视觉风格为中国风，语义风格为促销
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/sqbq/RecognizeImageStyle.jpg" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeImageStyle)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/RecognizeImageStyle?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FRecognizeImageStyle%2FRecognizeImageStyle1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG、BMP、WEBP。
- 图像大小：不超过9.5 MB。
- 图像分辨率：小于3000×3000像素。
- 图像都必须是RGB 3通道。
- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别类目下的风格识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于风格识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeScene' => 
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imagerecog/RecognizeScene/RecognizeScene1.jpg',
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
                'example' => 'AC79F887-5CCB-42BE-8AC3-4D455EFEDB94',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Tags' => 
                  array (
                    'description' => '标签名称。最多输出5个标签名称，如果某个类别标签未输出，则对应的`confidence`为零。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '标签名称。',
                          'type' => 'string',
                          'example' => '船',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '标签名称的置信度。取值范围0~100。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '79',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC79F887-5CCB-42BE-8AC3-4D455EFEDB94\\",\\n  \\"Data\\": {\\n    \\"Tags\\": [\\n      {\\n        \\"Value\\": \\"船\\",\\n        \\"Confidence\\": 79\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeSceneResponse>\\n    <RequestId>EA5E12C8-FFEB-5710-B4F4-A9A477DED671</RequestId>\\n    <Data>\\n        <Tags>\\n            <Confidence>83</Confidence>\\n            <Value>夜景</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>31</Confidence>\\n            <Value>海滨</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>13</Confidence>\\n            <Value>街景</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>13</Confidence>\\n            <Value>广场</Value>\\n        </Tags>\\n        <Tags>\\n            <Confidence>12</Confidence>\\n            <Value>船</Value>\\n        </Tags>\\n    </Data>\\n</RecognizeSceneResponse>","errorExample":""}]',
      'title' => '场景识别',
      'summary' => '本文介绍场景识别RecognizeScene的语法及示例。',
      'description' => '## 功能描述
场景识别能力可以识别图像中的场景环境，支持数十种常见场景，包括：
- 人物、动物、狗、猫、鱼、鸟、花、草地、蔬菜、植物、水果、餐厅、美食、聚餐、烧烤
- 物品、手机、显示器
- 室外、广场、建筑、游乐场、户外、公路、小河、山峰、夜景、天空、旅行、日出、日落、树林、沙滩、沙漠、海滨、湖、露营、街景、街道、运动、运动场、婚礼、演出
- 地铁、汽车、火车、自行车、船、飞机
- 其他

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeScene)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/RecognizeScene?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimagerecog%2FRecognizeScene%2FRecognizeScene1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[场景识别示例代码](~~601110~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
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
关于场景识别的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imagerecog&children=RecognizeScene)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像识别（imagerecog）类目下的场景识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[场景识别示例代码](~~601110~~)。',
      'extraInfo' => '## 错误码
关于场景识别的错误码，详情请参见[常见错误码](~~145022~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'TaggingAdImage' => 
    array (
      'summary' => '本文介绍广告素材分析TaggingAdImage的语法及示例。',
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
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-demo.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/DetectImageElements/xxxx.png',
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
                'example' => '572974F0-1014-5C60-97EE-DBFFC0FF7616',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'TagInfo' => 
                  array (
                    'description' => '标签。目前仅输出scene（场景）和human（人）。具体取值请参见下表“TagInfo字段参数说明”。',
                    'type' => 'object',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"572974F0-1014-5C60-97EE-DBFFC0FF7616\\",\\n  \\"Data\\": {\\n    \\"TagInfo\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<TaggingAdImageResponse>\\n    <RequestId>572974F0-1014-5C60-97EE-DBFFC0FF7616</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</TaggingAdImageResponse>","errorExample":""}]',
      'title' => '广告素材分析',
      'description' => '## 功能描述
广告素材分析能力可以对素材图片中的人物（明星、素人、CG人物）、场景等打上标签信息，可支持数千个内容标签，覆盖范围广。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 广告分析：对互联网广告内容及投放效果的数据进行分析，为用户投放和分析广告提供参考。
- 精准投放：利用素材标签、用户画像实现广告内容的精准投放。
- 素材检索：能够快速检索定位指定类型的素材。

## 特色优势

- 分析能力强：分析处理后对包含明星、素人、CG人物等复杂场景进行准确打标。
- 精准打标：可将物体、人物相关标签同步返回，并精准标记标签位置。


## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像识别服务](https://vision.aliyun.com/imagerecog)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imagerecog_public_cn#/open)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imagerecog/2019-09-30/TaggingAdImage?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像识别（imagerecog）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[广告素材分析示例代码](~~601117~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
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
关于广告素材分析的计费方式及报价，请参见[计费介绍](~~202481~~)。

> 下方调试接口为付费接口。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用TaggingAdImage接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## TagInfo字段参数说明

| 字段                 | 类型   | 是否必须 | 示例值                      | 描述                                                         |
| -------------------- | ------ | -------- | --------------------------- | ------------------------------------------------------------ |
| Cloth_category       | string | 是       | modern                      | 如果为HumanInfo字段时，被识别的人物服饰标签。具体分类请参见下图“Category标签取值”。 如果为非HumanInfo字段时，可忽略此字段。 |
| Cloth_category_score | float  | 是       | 0.8                         | 如果为HumanInfo字段时，人物服饰标签置信度。取值范围  [0,1.0]。 如果为非HumanInfo字段时，可忽略此字段。 |
| Bbox                 | list   | 是       | [77,280,431,569]            | 表示视频中的元素出现的时间相对位置。                         |
| Score                | float  | 是       | 0.9                         | 标签置信度。取值范围  [0,1.0]。                              |
| Category             | string | 是       | human-real-celebrity-明星姓名 | 标签名称。具体分类请参见下图“Category标签取值”。             |

## Category标签取值
![Category标签取值](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/imagerecog/Image%201.png)

## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像识别类目下的广告素材分析能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像识别（imagerecog）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[广告素材分析示例代码](~~601117~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于广告素材分析的错误码，详情请参见[常见错误码](~~145022~~)。

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
      'endpoint' => 'imagerecog.cn-shanghai.aliyuncs.com',
    ),
  ),
);
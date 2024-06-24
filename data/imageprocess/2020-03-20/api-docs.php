<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imageprocess',
    'version' => '2020-03-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64329,
      'title' => '检测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CalcCACS',
        1 => 'DetectCovid19Cad',
        2 => 'DetectLungNodule',
        3 => 'DetectRibFracture',
        4 => 'DetectSkinDisease',
        5 => 'RunCTRegistration',
        6 => 'ScreenChestCT',
      ),
    ),
    1 => 
    array (
      'id' => 64344,
      'title' => '结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncJobResult',
      ),
    ),
    2 => 
    array (
      'id' => 64346,
      'title' => '问答',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RunMedQA',
      ),
    ),
    3 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AnalyzeChestVessel',
        1 => 'FeedbackSession',
        2 => 'DetectPanc',
        3 => 'DetectLymph',
        4 => 'SegmentOAR',
        5 => 'ScreenEC',
        6 => 'TargetVolumeSegment',
        7 => 'SegmentLymphNode',
        8 => 'CalcBMD',
        9 => 'DetectLiverSteatosis',
        10 => 'ScreenCRC',
        11 => 'ScreenGC',
        12 => 'ScreenLC',
        13 => 'PredictCVD',
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
    'CalcCACS' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像的格式。目前只支持`DICOM`和`NIFTI`。

> 当输入的数据类型为`HTTP_NII`时，**DataFormat**需输入NIFTI图像格式。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持`HTTP_FILES`和`HTTP_NII`。

- `HTTP_FILES`为序列文件。
- `HTTP_NII`为单个文件。

> 当输入的数据类型为`HTTP_NII`时，则URLList.N.URL需要传入一个nii.gz文件，例如，URLList.1.URL=https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.nii.gz。nii是和dicom文件不同的医学影像文件。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '6797D285-9290-4FBB-9742-AA1E286EF3B9',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultUrl' => 
                  array (
                    'description' => '分割结果下载地址，有效时间5分钟。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****',
                  ),
                  'Score' => 
                  array (
                    'description' => '冠脉钙化积分值。',
                    'type' => 'string',
                    'example' => '117.61',
                  ),
                  'VolumeScore' => 
                  array (
                    'description' => '体积积分，即钙化点总体积。',
                    'type' => 'string',
                    'example' => '111.96',
                  ),
                  'Detections' => 
                  array (
                    'description' => '钙化病灶详细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CalciumId' => 
                        array (
                          'description' => '钙化病灶的序号，从1开始。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CalciumScore' => 
                        array (
                          'description' => '病灶钙化积分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '19.22474',
                        ),
                        'CalciumVolume' => 
                        array (
                          'description' => '病灶体积积分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '28.837109',
                        ),
                        'CalciumCenter' => 
                        array (
                          'description' => '图像坐标系下病灶中心坐标\\[x, y, z]。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '图像坐标系下病灶中心坐标\\[x, y, z]。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[237,183,59]',
                          ),
                        ),
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6797D285-9290-4FBB-9742-AA1E286EF3B9\\",\\n  \\"Data\\": {\\n    \\"ResultUrl\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****\\",\\n    \\"Score\\": \\"117.61\\",\\n    \\"VolumeScore\\": \\"111.96\\",\\n    \\"Detections\\": [\\n      {\\n        \\"CalciumId\\": 1,\\n        \\"CalciumScore\\": 19.22474,\\n        \\"CalciumVolume\\": 28.837109,\\n        \\"CalciumCenter\\": [\\n          0\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<CalcCACSResponse>\\n    <RequestId>6797D285-9290-4FBB-9742-AA1E286EF3B9</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</CalcCACSResponse>","errorExample":""}]',
      'title' => '冠脉钙化积分测算',
      'summary' => '本文介绍冠脉钙化积分测算CalcCACS的语法及示例。',
      'description' => '## 功能描述 
冠脉钙化积分测算能力可以根据胸部平扫CT进行冠脉钙化积分测算。输入标准DICOM格式或NIFTI格式的图像，输出钙化积分值和分割结果HTTP下载路径。

>- 冠脉钙化积分测算当前仅支持1mm~3mm层厚数据的计算。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=CalcCACS)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/CalcCACS?lang=JAVA&sdkStyle=dara&params=%7B%22DataFormat%22%3A%22DICOM%22%2C%22DataSourceType%22%3A%22HTTP_FILES%22%2C%22OrgId%22%3A%227ff51bfe-e73d-11ea-827d-506b4b3f3cf6%22%2C%22OrgName%22%3A%22%E6%B5%8B%E8%AF%95%E7%BB%84%E7%BB%87%22%2C%22URLList%22%3A%5B%7B%22URL%22%3A%22https%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Ftest-team%2Fzhangchaorun%2Ftest-yiliao%2Fcacs%2F000000.zip%22%7D%5D%7D&tab=DEMO&useCommon=true)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：DICOM、NIFTI。
- 如果输入格式为DICOM，每次请求帧数最少20帧，最多600帧；如果输入格式为NIFTI，每次请求须有且仅有一例数据。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用CalcCACS接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的冠脉钙化积分测算能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于冠脉钙化积分测算的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectCovid19Cad' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式：DICOM。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'weiyi',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '0001',
          ),
        ),
        3 => 
        array (
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => 'DICOM序列的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/CT0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'NormalProbability' => 
                  array (
                    'description' => '普通肺炎的概率。',
                    'type' => 'string',
                    'example' => '0.7230905',
                  ),
                  'NewProbability' => 
                  array (
                    'description' => '新冠肺炎概率。',
                    'type' => 'string',
                    'example' => '4.062644e-06',
                  ),
                  'LesionRatio' => 
                  array (
                    'description' => '白化比例。',
                    'type' => 'string',
                    'example' => '0.9387283236994219',
                  ),
                  'OtherProbability' => 
                  array (
                    'description' => '其他概率。',
                    'type' => 'string',
                    'example' => '0.27690542',
                  ),
                  'Mask' => 
                  array (
                    'description' => 'NII格式的mask文件HTTP地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。',
                    'type' => 'string',
                    'example' => 'http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4\\",\\n  \\"Data\\": {\\n    \\"NormalProbability\\": \\"0.7230905\\",\\n    \\"NewProbability\\": \\"4.062644e-06\\",\\n    \\"LesionRatio\\": \\"0.9387283236994219\\",\\n    \\"OtherProbability\\": \\"0.27690542\\",\\n    \\"Mask\\": \\"http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectCovid19CadResponse>\\n    <RequestId>7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectCovid19CadResponse>","errorExample":""}]',
      'title' => '新冠病毒肺炎辅助诊断',
      'summary' => '本文介绍新冠病毒肺炎辅助诊断DetectCovid19Cad的语法及示例。',
      'description' => '## 功能描述 
新冠病毒肺炎辅助诊断能力可以对输入的DICOM影像（如5mm的单个序列），进行新冠肺炎的影像分析。可以输出：
- 新冠肺炎、普通肺炎与其他的概率。
- 白化比例测算值。
- 病灶位置的mask文件。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=DetectCovid19Cad)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectCovid19Cad?lang=JAVA&sdkStyle=dara&params=%7B%22DataFormat%22%3A%22DICOM%22%2C%22OrgId%22%3A%220001%22%2C%22OrgName%22%3A%22weiyi%22%2C%22URLList%22%3A%5B%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fdemo-center%2Fimageprocess%2FDetectCovid19Cad%2F1.2.112.92121.1.1689.19.2.20200402190727647871015858256476470406.zip%22%7D%5D%7D&tab=DEMO&useCommon=true)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 输入图像必须为横断面图像。
- 图像格式：DICOM。
- 图像帧数：至少20帧，至多2048帧，且必须为单人单次检查单次扫描的整套series序列。
- URL地址中不能包含中文字符。

## 计费说明
关于新冠病毒肺炎辅助诊断的计费方式及报价，请参见[计费介绍](~~202483~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=DetectCovid19Cad)。

## 调用步骤
该能力为异步能力，需分以下几步进行调用。
第一步调用DetectCovid19Cad接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的新冠病毒肺炎辅助诊断能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于新冠病毒肺炎辅助诊断的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectLungNodule' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像格式：DICOM。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'weiyi',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '0001',
          ),
        ),
        3 => 
        array (
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => 'DICOM影像的图像URL地址。长度小于600。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/000001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        4 => 
        array (
          'name' => 'Threshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结点阈值。默认取值0.60，取值范围`(0,1]`，取值越低，输出结节越多，仅取小数点后两位。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '0.60',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9889ef5b-b973-4dd0-9f26-3b9cc489c436',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。
该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Series' => 
                  array (
                    'description' => '本次影像分析的分序列的结果，只支持单序列，故该jsonArray的长度为1。数组元素为单个序列的检测结果，由analysisResult和seriesInstanceUid构成。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SeriesInstanceUid' => 
                        array (
                          'description' => '本次分析影像的序列ID。',
                          'type' => 'string',
                          'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.179049373636438705059720603192',
                        ),
                        'Elements' => 
                        array (
                          'description' => '结节描述。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Z' => 
                              array (
                                'description' => '结节在物理坐标系中的z轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '-46.81608170781766',
                              ),
                              'Lobe' => 
                              array (
                                'description' => '肺叶分段。取值包括：up（上叶）、middle（中叶）、down（下叶）及unknown（未知）。',
                                'type' => 'string',
                                'example' => 'up',
                              ),
                              'MeanValue' => 
                              array (
                                'description' => '平均CT值，单位为HU。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '261.37589112119247',
                              ),
                              'ImageZ' => 
                              array (
                                'description' => '结节在图像坐标系中的z轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '20.434030793471255',
                              ),
                              'Lung' => 
                              array (
                                'description' => '结节在肺叶的位置。取值包括：left（左肺）、right（右肺）及unknown（未知）。
',
                                'type' => 'string',
                                'example' => 'left',
                              ),
                              'Confidence' => 
                              array (
                                'description' => '结节分类的置信度。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '0.7012705768508907',
                              ),
                              'SOPInstanceUID' => 
                              array (
                                'description' => '结节中心位置所在帧的ID标识。',
                                'type' => 'string',
                                'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.261151233960269013402330853013',
                              ),
                              'ImageX' => 
                              array (
                                'description' => '结节在图像坐标系中的x轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '308.9676976455463',
                              ),
                              'Y' => 
                              array (
                                'description' => '结节在物理坐标系中的y轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '-32.23147700784307',
                              ),
                              'Category' => 
                              array (
                                'description' => '结节分类，取值包括：

- 0：ggo（磨玻璃影）
- 1：part-solid（部分实性）
- 2：solid（实性）
- 3：unknown（未知）
- 4：calc（钙化）',
                                'type' => 'string',
                                'example' => '1',
                              ),
                              'Volume' => 
                              array (
                                'description' => '结节体积，单位为mm³。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '10959.220491175074',
                              ),
                              'ImageY' => 
                              array (
                                'description' => '结节在图像坐标系中的y轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '198.3552282631497',
                              ),
                              'Diameter' => 
                              array (
                                'description' => '结节的直径。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '9.730626493692398',
                              ),
                              'X' => 
                              array (
                                'description' => '结节在物理坐标系中的x轴坐标值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '51.24291240631416',
                              ),
                              'RecistSOPInstanceUID' => 
                              array (
                                'description' => '结节最大径位置所在帧的ID标识。',
                                'type' => 'string',
                                'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.468208655866166788627471660948',
                              ),
                              'MajorAxis' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下长径的起止点，len为长径长度（mm）。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '[178,212,185,217,6.0]',
                                ),
                              ),
                              'MinorAxis' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下短径的起止点，len为长径长度（mm）。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '[184,213,181,218,4.0]',
                                ),
                              ),
                              'Risk' => 
                              array (
                                'description' => '结节为恶性的置信度。取值范围0~1。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '0.173',
                              ),
                            ),
                          ),
                        ),
                        'Origin' => 
                        array (
                          'description' => '1',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '图像坐标系原点在物理坐标系中的位置。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[-166.0,-171.6999969482422,-340.0]',
                          ),
                        ),
                        'Report' => 
                        array (
                          'description' => '该DICOM序列经过AI分析后AI服务给出的参考报告。',
                          'type' => 'string',
                          'example' => '肺部见1个实性结节，直径约为25.60mm，体积为11512.06mm³，平均CT值为-6.90HU。',
                        ),
                        'Spacing' => 
                        array (
                          'description' => '1',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '每个像素的实际距离间隔。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[0.703125,0.703125,14.34782600402832]',
                          ),
                        ),
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9889ef5b-b973-4dd0-9f26-3b9cc489c436\\",\\n  \\"Data\\": {\\n    \\"Series\\": [\\n      {\\n        \\"SeriesInstanceUid\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.179049373636438705059720603192\\",\\n        \\"Elements\\": [\\n          {\\n            \\"Z\\": -46.81608170781766,\\n            \\"Lobe\\": \\"up\\",\\n            \\"MeanValue\\": 261.37589112119247,\\n            \\"ImageZ\\": 20.434030793471255,\\n            \\"Lung\\": \\"left\\",\\n            \\"Confidence\\": 0.7012705768508907,\\n            \\"SOPInstanceUID\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.261151233960269013402330853013\\",\\n            \\"ImageX\\": 308.9676976455463,\\n            \\"Y\\": -32.23147700784307,\\n            \\"Category\\": \\"1\\",\\n            \\"Volume\\": 10959.220491175074,\\n            \\"ImageY\\": 198.3552282631497,\\n            \\"Diameter\\": 9.730626493692398,\\n            \\"X\\": 51.24291240631416,\\n            \\"RecistSOPInstanceUID\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.468208655866166788627471660948\\",\\n            \\"MajorAxis\\": [\\n              0\\n            ],\\n            \\"MinorAxis\\": [\\n              0\\n            ],\\n            \\"Risk\\": 0.173\\n          }\\n        ],\\n        \\"Origin\\": [\\n          0\\n        ],\\n        \\"Report\\": \\"肺部见1个实性结节，直径约为25.60mm，体积为11512.06mm³，平均CT值为-6.90HU。\\",\\n        \\"Spacing\\": [\\n          0\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectLungNoduleResponse>\\n    <RequestId>9889ef5b-b973-4dd0-9f26-3b9cc489c436</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectLungNoduleResponse>","errorExample":""}]',
      'title' => '胸部CT肺结节检测',
      'summary' => '本文介绍胸部CT肺结节检测DetectLungNodule的语法及示例。',
      'description' => '## 功能描述
胸部CT肺结节检测能力可以对输入的胸部常规CT形成的DICOM影像（如5mm的单个序列，API仅接受单序列），进行肺结节的辅助诊断。针对每一个结节，主要通过以下方式进行描述：

- 结节的坐标（coordX，coordY，coordZ）、直径（diameter_mm）。
- 结节在肺叶的位置，例如左肺或右肺，以及肺叶分段（左肺上下叶、右肺上中下叶），通过lung和lobe两个参数共同确定。
- 结节分类及概率。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=DetectLungNodule)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectLungNodule?lang=JAVA&sdkStyle=dara&params=%7B%22DataFormat%22%3A%22DICOM%22%2C%22DataSourceType%22%3A%22%22%2C%22OrgId%22%3A%220001%22%2C%22OrgName%22%3A%22weiyi%22%2C%22URLList%22%3A%5B%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fdemo-center%2Fimageprocess%2FDetectCovid19Cad%2F1.2.112.92121.1.1689.19.2.20200402190727647871015858256476470406.zip%22%7D%5D%7D&tab=DEMO&useCommon=true)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 影像格式：DICOM。
- 影像分辨率：小于等于512×512像素。
- 单张DICOM影像大小不超过1 MB。
- 输入最少20张，最多600张。
- URL中不能包含中文字符。

## 计费说明
关于胸部CT肺结节检测的计费方式及报价，请参见[计费介绍](~~202483~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=DetectLungNodule)。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectLungNodule接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的胸部CT肺结节检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于胸部CT肺结节检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectRibFracture' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像的格式。目前只支持以下两种：DICOM、NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持`HTTP_FILES`和`HTTP_NII`。

- `HTTP_FILES`为序列文件。
- `HTTP_NII`为单个文件。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '5C695B5D-41A6-4202-8BF7-E647698678DF',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Detections' => 
                  array (
                    'description' => '肋骨骨折检出结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Coordinates' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '物理坐标系下骨折检测框，以这个顺序排列：(minX, minY, minZ, maxX, maxY, maxZ)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[75,-98,-156,98,-80,-133]',
                          ),
                        ),
                        'FractureId' => 
                        array (
                          'description' => '骨折处序号，从1起始。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CoordinateImage' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '图像坐标系下骨折检测框，以这个顺序排列：(minX, minY, minZ, maxX, maxY, maxZ)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[338,137,220,366,159,239]',
                          ),
                        ),
                        'FractureConfidence' => 
                        array (
                          'description' => '骨折分类的置信度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.7916666666666667',
                        ),
                        'FractureCategory' => 
                        array (
                          'description' => '骨折分类结果。

- 1：移位骨折。
- 2：非移位骨折。
- 3：皮质弯曲。
- 4：陈旧骨折。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'FractureLocation' => 
                        array (
                          'description' => '骨折所在肋骨编号(L1~L12，R1~R12)。L表示左侧，R表示右侧。',
                          'type' => 'string',
                          'example' => 'L4',
                        ),
                        'FractureSegment' => 
                        array (
                          'description' => '骨折所在肋骨段。取值如下：

- 0：前段
- 1：腋段
- 2：后段',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'FracSOPInstanceUID' => 
                        array (
                          'description' => '骨折中间帧在整个DICOM序列中的唯一标识符，如果是NIFTI格式的输入，默认设置为None。',
                          'type' => 'string',
                          'example' => 'None',
                        ),
                      ),
                    ),
                  ),
                  'Origin' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '像素坐标系原点在物理坐标系中的位置。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[-431.9739990234375,-211.5,-204.01400756835938]',
                    ),
                  ),
                  'ResultURL' => 
                  array (
                    'description' => '分割结果下载地址，有效时间5分钟。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****',
                  ),
                  'Spacing' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个像素之间的物理距离间隔。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[1.25,0.8261719942092896,0.8261719942092896]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5C695B5D-41A6-4202-8BF7-E647698678DF\\",\\n  \\"Data\\": {\\n    \\"Detections\\": [\\n      {\\n        \\"Coordinates\\": [\\n          0\\n        ],\\n        \\"FractureId\\": 2,\\n        \\"CoordinateImage\\": [\\n          0\\n        ],\\n        \\"FractureConfidence\\": 0.7916666666666667,\\n        \\"FractureCategory\\": \\"1\\",\\n        \\"FractureLocation\\": \\"L4\\",\\n        \\"FractureSegment\\": 0,\\n        \\"FracSOPInstanceUID\\": \\"None\\"\\n      }\\n    ],\\n    \\"Origin\\": [\\n      0\\n    ],\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****\\",\\n    \\"Spacing\\": [\\n      0\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectRibFractureResponse>\\n    <RequestId>5C695B5D-41A6-4202-8BF7-E647698678DF</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectRibFractureResponse>","errorExample":""}]',
      'title' => '肋骨骨折检测',
      'summary' => '本文介绍肋骨骨折检测DetectRibFracture的语法及示例。',
      'description' => '## 功能描述 
肋骨骨折检测能力根据胸部CT成像进行肋骨骨折的辅助诊断，并输出骨折的位置及骨折的类型。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
肋骨骨折检测用于医院、医联体、医共体、体检机构以及第三方影像中心等机构，辅助临床医生、影像医生和体检医生基于常规胸部CT诊断肋骨骨折。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectRibFracture?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：DICOM、NIFTI。
- 图像帧数：如果输入格式为DICOM，每次请求帧数最少20帧最多600帧；如果输入格式为NIFTI，每次请求须有且仅有一例数据。且每条输入URL需可访问。推荐使用薄层CT进行算法调用。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectRibFracture接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的肋骨骨折检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于肋骨骨折检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectSkinDisease' => 
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
            'description' => '图像的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageprocess/DetectSkinDisease/DetectSkinDisease1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '0001',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'demo',
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
                'example' => 'DE9ABC80-4DD4-4F1B-B95C-D0E438B8FE56',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Results' => 
                  array (
                    'description' => '预测的结果。包含Key-Value对，Key为疾病名称，Value为概率。目前支持以下49类，具体分类如下表所示。',
                    'type' => 'object',
                    'example' => '"银屑病": 0.998,                     "皮肤型红斑狼疮": 0.0004,                     "皮炎湿疹": 0.0011',
                  ),
                  'ResultsEnglish' => 
                  array (
                    'description' => '预测结果对应的英文。',
                    'type' => 'object',
                    'example' => '"psoriasis": 0.998,                     "eczema_dermatitis": 0.0011,                     "lupus_erythematosus": 0.0004',
                  ),
                  'BodyPart' => 
                  array (
                    'description' => '皮损部位识别。取值如下：
- scalp：头皮
- face：脸
- neck：颈部
- arm：手臂
- chest：胸部
- abdomen：腹部
- oxter：腋窝
- back：背部
- waist：腰部
- hand：手
- genitals：生殖器
- cruris：腿部内侧
- leg：腿
- foot：脚
- unknown：未知',
                    'type' => 'string',
                    'example' => 'leg',
                  ),
                  'ImageQuality' => 
                  array (
                    'description' => '图像质量评分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '90.9812',
                  ),
                  'ImageType' => 
                  array (
                    'description' => '图像分类。取值如下：

- normal_skin：正常皮肤
- skin_lesion：皮损图片
- non_skin：非皮肤',
                    'type' => 'string',
                    'example' => 'skin_lesion',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE9ABC80-4DD4-4F1B-B95C-D0E438B8FE56\\",\\n  \\"Data\\": {\\n    \\"Results\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"ResultsEnglish\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"BodyPart\\": \\"leg\\",\\n    \\"ImageQuality\\": 90.9812,\\n    \\"ImageType\\": \\"skin_lesion\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectSkinDiseaseResponse>\\n    <RequestId>DE9ABC80-4DD4-4F1B-B95C-D0E438B8FE56</RequestId>\\n    <Data>\\n        <BodyPart>leg</BodyPart>\\n        <ImageQuality>90.9812</ImageQuality>\\n        <ImageType>normal_skin</ImageType>\\n    </Data>\\n</DetectSkinDiseaseResponse>","errorExample":""}]',
      'title' => '皮肤病检测',
      'summary' => '本文介绍皮肤病检测DetectSkinDisease的语法及示例。',
      'description' => '## 功能描述 
皮肤病检测能力可以对输入的皮肤自然图像进行皮肤病分类预测。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=imageprocess&children=DetectSkinDisease)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectSkinDisease?lang=JAVA&sdkStyle=dara&params=%7B%22Url%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fimageprocess%2FDetectSkinDisease%2FDetectSkinDisease1.png%22%2C%22OrgId%22%3A%220001%22%2C%22OrgName%22%3A%22demo%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、PNG。
- 图像大小：不超过20 MB。
- 图像分辨率：小于1280×1280像素。
- URL地址中不能包含中文字符。

## 计费说明
皮肤病检测能力目前处于公测期，可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 皮肤病分类
| 序号 | 皮肤病分类（中文）   | 皮肤病分类（英文）  | 序号 | 皮肤病分类（中文）   | 皮肤病分类（英文） |
| ---- | ------------ | ---- | ------------ | ---- | ---------- |
| 1    |痤疮        |acne    |26         |玫瑰糠疹    |pityriasis_rosea    |
| 2    |光化性角化病      |actinic_keratosis   |27        |结节性痒疹    |prurigo_nodularis      |
| 3    |脂溢性脱发        |alopecia_androgenetica   |28          |银屑病    |psoriasis        |
| 4    |斑秃      |alopecia_areata    |29       |玫瑰痤疮    |rosacea  |
| 5    |大疱性皮肤病    |bullous_dermatosis    |30      |皮脂腺囊肿    |sebaceous_cyst      |
| 6    |黄褐斑       |chloasma    |31   |皮脂腺痣    |sebaceousnevus  |
| 7    |鸡眼        |corn    |32      |脂溢性皮炎    |seborrheic_dermatitis      |
| 8    |皮肤纤维瘤      |dermatofibroma    |33  |脂溢性角化      |seborrheic_keratosis      |
| 9    |皮炎湿疹      |eczema_dermatitis    |34         |皮赘    |skin_tag        |
| 10   |丹毒         |erysipelas    |35          |淤积性皮炎    |stasis_dermatitis          |
| 11   |多形红斑          |erythema_multiforme    |36    |汗管瘤    |syringoma      |
| 12   |毛囊炎        |folliculitis    |37          |头癣    |tinea_capitis      |
| 13   |疖      |furuncle    |38      |体癣   |tinea_corporis    |
| 14   |血管瘤    |haemangioma    |39      |股癣  |tinea_cruris    |
| 15   |带状疱疹          |herpes    |40          |手癣    |tinea_manuum        |
| 16   |单纯疱疹  |herpes_simplex    |41    |脚癣    |tinea_pedis  |
| 17   |过敏性紫癜   |iga_vasculitis    |42    |甲癣    |tinea_unguium  |
| 18   |瘢痕疙瘩   |keloid    |43    |花斑癣    |tinea_versicolor  |
| 19   |毛周角化症   |keratosis_follicularism    |44    |荨麻疹    |urticaria  |
| 20   |扁平苔藓   |lichen_planus    |45    |丘疹性荨麻疹    |urticaria_papular  |
| 21   |皮肤型红斑狼疮   |lupus_erythematosus    |46    |水痘    |varicella  |
| 22   |传染性软疣   |molluscum_contagiosum    |47    |扁平疣    |verruca_plana  |
| 23   |色素痣   |nevus    |48    |寻常疣    |verruca_vulgaris  |
| 24   |甲沟炎   |paronychia    |49    |白癜风    |vitiligo  |
| 25   |白色糠疹   |pityriasis_alba    |    |    |  |

## SDK参考
阿里云视觉AI图像分析处理类目下的皮肤病检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于皮肤病检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RunCTRegistration' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'DICOM。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，仅支持`HTTP_FILES`。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'ReferenceList',
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
                'ReferenceURL' => 
                array (
                  'description' => '参考图像URL地址列表。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>至少8帧，至多600帧。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/registration/ref/33_P18.4.1.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        5 => 
        array (
          'name' => 'FloatingList',
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
                'FloatingURL' => 
                array (
                  'description' => '待配准图像URL地址列表。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
>至少8帧，至多600帧。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/registration/flt/34_P18.4.1.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 300,
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
                'example' => 'EB3ACFE6-EA75-49E1-83C0-953580F74D88',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。
',
                'type' => 'object',
                'properties' => 
                array (
                  'DUrl' => 
                  array (
                    'description' => '配准结果下载地址。

>- 数据存储格式为`DICOM`, 后缀为`.tar.gz`。
- 有效时间为5分钟， 5分钟后链接失效，需要重新生成。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.tar.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=cWTQtdb7geuEJ46cNO%2BGGimrN****',
                  ),
                  'NUrl' => 
                  array (
                    'description' => '配准结果下载地址。

>- 数据存储格式为`NIFTI`, 后缀为`.nii.gz`。
- 有效时间为5分钟， 5分钟后链接失效，需要重新生成。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.nii.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=Tgjk1WsZFvvyIUMunxizNtivhY****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EB3ACFE6-EA75-49E1-83C0-953580F74D88\\",\\n  \\"Data\\": {\\n    \\"DUrl\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.tar.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=cWTQtdb7geuEJ46cNO%2BGGimrN****\\",\\n    \\"NUrl\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.nii.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=Tgjk1WsZFvvyIUMunxizNtivhY****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<RunCTRegistrationResponse>\\n    <RequestId>EB3ACFE6-EA75-49E1-83C0-953580F74D88</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</RunCTRegistrationResponse>","errorExample":""}]',
      'title' => '胸部CT配准',
      'summary' => '本文介绍胸部CT配准RunCTRegistration的语法及示例。',
      'description' => '## 功能描述 
胸部CT配准能力可以根据同病人不同时期的胸部CT扫描，进行图像配准。输入两套标准DICOM数据，分别作为参考图像和待配准图像，输出配准结果HTTP下载路径。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/RunCTRegistration?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 输入图像必须为横断面图像。
- 图像格式：DICOM。
- 图像帧数：至少8帧，至多600帧。
- URL地址中不能包含中文字符。

## 计费说明
关于胸部CT配准的计费方式及报价，请参见[计费介绍](~~202483~~)。

> 下方调试接口为付费接口。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用RunCTRegistration接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的胸部CT配准能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于胸部CT配准的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScreenChestCT' => 
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。目前仅支持DICOM。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'weiyi',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DICOM序列的地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1600,
          ),
        ),
        4 => 
        array (
          'name' => 'Mask',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该值控制输出算法输出的种类。十进制数。

- bit位值为1，代表启用对应的算法。
- bit位值为0，代表禁用对应的算法。

例如Mask=3，二进制为00011，即调用**新冠病毒肺炎辅助诊断**和**冠脉钙化积分测算**两个算法；如果Mask=11，二进制为01011，即调用**新冠病毒肺炎辅助诊断**、**冠脉钙化积分测算**和**肋骨骨折检测**三个算法。系统仅识别二进制后五位的值，如果Mask=32，二进制为100000，后五位均为0，系统将无法识别对应算法，提示报错；如果Mask=33，二进制为100001，后五位为00001，即调用**新冠病毒肺炎辅助诊断**一个算法。具体对应关系请参见下表**算法启用与Mask值对应关系**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        5 => 
        array (
          'name' => 'Verbose',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否在返回参数中输出相关字段，取值0、1和2，默认为0。

- 0：表示在获取算法结果时不返回输入DICOM文件的URL列表，不输出**URLList**和**NestedUrlList**字段。如果没有输入该字段，默认为0。
- 1：表示在获取算法结果时返回输入的DICOM文件的URL列表，默认以单序列格式输出，输出**URLList**字段。格式为：
    ```
{
"URLList":["url","url",...]
}
    ```

- 2：表示在获取算法结果时返回输入的DICOM文件的URL列表，默认以多序列格式输出，输出**NestedUrlList**字段。格式为：

    ```
{
"NestedUrlList":
  {
  "序列Id1":["url","url",...] ,
  "序列Id2":["url","url",...]
   }
}
  ```

> 当输入的**Verbose**为**1**，但提交的DICOM数据为多序列时，默认以**Verbose**为**2**的形式输出。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
            'default' => '0',
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
                'example' => '528B54D4-3AAB-47CF-B6CE-0C2A2FB4C7C2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'CalcBMD' => 
                  array (
                    'description' => '骨密度估计算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Detections' => 
                      array (
                        'description' => '椎体检出结果。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '椎体检出结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VertId' => 
                            array (
                              'description' => '椎体编号。',
                              'type' => 'string',
                              'example' => 'L1',
                            ),
                            'VertBMD' => 
                            array (
                              'description' => '椎体骨密度估计值，单位为g/c㎡。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.78',
                            ),
                            'VertTScore' => 
                            array (
                              'description' => '椎体T评分。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '-2.5',
                            ),
                            'VertZScore' => 
                            array (
                              'description' => '椎体Z评分。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => 'NaN',
                            ),
                            'VertCategory' => 
                            array (
                              'description' => '椎体分类。

- 0：正常
- 1：骨质减少
- 2：骨质疏松',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => 'NaN',
                            ),
                          ),
                        ),
                      ),
                      'Spacing' => 
                      array (
                        'description' => '每个像素之间的物理距离间隔。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '每个像素之间的物理距离间隔。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[3.75, 0.576172, 0.576172]',
                        ),
                      ),
                      'Origin' => 
                      array (
                        'description' => '像素坐标系原点在物理坐标系中的位置。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '像素坐标系原点在物理坐标系中的位置。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[-325, -155.300003, -146.699997]',
                        ),
                      ),
                      'ResultURL' => 
                      array (
                        'description' => 'NIFTI格式的分割mask文件HTTP地址。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-bmd/local_test/2023-03-31/7772ECE3-22A7-193F-81B4-B0D6A02B5DAF-result.tgz?Expires=1680486509&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=GWi%2BhCCtamefKVYiS9oZJduswH****',
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.3.116.569382.6757.2.6.1.895664.343664213.6748794746.650139',
                      ),
                    ),
                  ),
                  'DetectLiverSteatosis' => 
                  array (
                    'description' => '脂肪肝检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Detections' => 
                      array (
                        'description' => '脂肪肝检出结果。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '脂肪肝检出结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ROI1Center' => 
                            array (
                              'description' => '肝脏ROI1中心坐标。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '肝脏ROI1中心坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[98,193]',
                              ),
                            ),
                            'ROI2Center' => 
                            array (
                              'description' => '肝脏ROI2中心坐标。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '肝脏ROI2中心坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[182,166]',
                              ),
                            ),
                            'ROI3Center' => 
                            array (
                              'description' => '肝脏ROI3中心坐标。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '肝脏ROI3中心坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[182,296]',
                              ),
                            ),
                            'SpleenCenter' => 
                            array (
                              'description' => '脾脏ROI中心坐标。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '脾脏ROI中心坐标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[433,346]',
                              ),
                            ),
                            'Radius' => 
                            array (
                              'description' => '圆形ROI半径。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1.0',
                            ),
                            'LiverSlice' => 
                            array (
                              'description' => '肝脏ROI对应的slice坐标。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '12.0',
                            ),
                            'SpleenSlice' => 
                            array (
                              'description' => '脾脏ROI对应的slice坐标。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '9.0',
                            ),
                            'LiverVolume' => 
                            array (
                              'description' => '肝脏体积测量。单位：cm³（立方厘米）。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '1059.4175610625439',
                            ),
                            'SpleenVolume' => 
                            array (
                              'description' => '脾脏体积测量。单位：cm³（立方厘米）。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '156.01873229470647',
                            ),
                            'LiverHU' => 
                            array (
                              'description' => '肝脏衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '62.07644147383561',
                            ),
                            'SpleenHU' => 
                            array (
                              'description' => '脾脏衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '53.86993919857013',
                            ),
                            'LiverROI1' => 
                            array (
                              'description' => '肝脏局部ROI1衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '63.50222396850586',
                            ),
                            'LiverROI2' => 
                            array (
                              'description' => '肝脏局部ROI2衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '62.23713684082031',
                            ),
                            'LiverROI3' => 
                            array (
                              'description' => '肝脏局部ROI3衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '59.78181838989258',
                            ),
                            'SpleenROI' => 
                            array (
                              'description' => '脾脏局部ROI衰减值。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '50.553409576416016',
                            ),
                            'LiverSpleenDifference' => 
                            array (
                              'description' => '肝脾衰减差。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '8.206502275265478',
                            ),
                            'LiverSpleenRatio' => 
                            array (
                              'description' => '肝脾衰减比。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '1.15233917834983',
                            ),
                            'Prediction' => 
                            array (
                              'description' => '检测结果等级，包括无，轻，中，重。',
                              'type' => 'string',
                              'example' => 'Mod',
                            ),
                            'Probability' => 
                            array (
                              'description' => '脂肪肝概率。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.9457855224609375',
                            ),
                          ),
                        ),
                      ),
                      'Spacing' => 
                      array (
                        'description' => '每个像素之间的物理距离间隔。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '每个像素之间的物理距离间隔。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[3.75,0.576172,0.576172]',
                        ),
                      ),
                      'Origin' => 
                      array (
                        'description' => '像素坐标系原点在物理坐标系中的位置。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '像素坐标系原点在物理坐标系中的位置。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[-325.0,-155.300003,-146.699997]',
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.230.569382.6757.2.6.1.895664.343664213.6748794746.650139',
                      ),
                    ),
                  ),
                  'LungNodule' => 
                  array (
                    'description' => '肺结节检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Series' => 
                      array (
                        'description' => '本次影像分析的分序列的结果，只支持单序列，故该jsonArray的长度为1。数组元素为单个序列的检测结果，由analysisResult和seriesInstanceUid构成。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '1',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SeriesInstanceUid' => 
                            array (
                              'description' => '当前结果对应的序列ID。',
                              'type' => 'string',
                              'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.179049373636438705059720603192',
                            ),
                            'Elements' => 
                            array (
                              'description' => '结节描述。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '1',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Lobe' => 
                                  array (
                                    'description' => '肺叶分段。取值包括：up（上叶）、middle（中叶）、down（下叶）及unknown（未知）。',
                                    'type' => 'string',
                                    'example' => 'up',
                                  ),
                                  'MeanValue' => 
                                  array (
                                    'description' => '平均CT值，单位为HU。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '261.37589112119247',
                                  ),
                                  'Lung' => 
                                  array (
                                    'description' => '结节在肺叶的位置。取值包括：left（左肺）、right（右肺）及unknown（未知）。',
                                    'type' => 'string',
                                    'example' => 'left',
                                  ),
                                  'Confidence' => 
                                  array (
                                    'description' => '结节分类的置信度。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.7012705768508907',
                                  ),
                                  'SOPInstanceUID' => 
                                  array (
                                    'description' => '结节中心位置所在帧的ID标识。',
                                    'type' => 'string',
                                    'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.261151233960269013402330853013',
                                  ),
                                  'Category' => 
                                  array (
                                    'description' => '结节分类。取值包括：

- 0：ggo（磨玻璃影）
- 1：part-solid（部分实性）
- 2：solid（实性）
- 3：unknown（未知）',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'Volume' => 
                                  array (
                                    'description' => '结节体积，单位为平方毫米。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '10959.220491175074',
                                  ),
                                  'Diameter' => 
                                  array (
                                    'description' => '结节的直径。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '9.730626493692398',
                                  ),
                                  'X' => 
                                  array (
                                    'description' => '结节在物理坐标系中的x轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '51.24291240631416',
                                  ),
                                  'Y' => 
                                  array (
                                    'description' => '结节在物理坐标系中的y轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '-32.23147700784307',
                                  ),
                                  'Z' => 
                                  array (
                                    'description' => '结节在物理坐标系中的z轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '-46.81608170781766',
                                  ),
                                  'ImageX' => 
                                  array (
                                    'description' => '结节在图像坐标系中的x轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '308.9676976455463',
                                  ),
                                  'ImageY' => 
                                  array (
                                    'description' => '结节在图像坐标系中的y轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '198.3552282631497',
                                  ),
                                  'ImageZ' => 
                                  array (
                                    'description' => '结节在图像坐标系中的z轴坐标值。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '198.3552282631497',
                                  ),
                                  'RecistSOPInstanceUID' => 
                                  array (
                                    'description' => '结节最大径位置所在帧的ID标识。',
                                    'type' => 'string',
                                    'example' => '1.3.6.1.4.1.14519.5.2.1.6279.6001.468208655866166788627471660948',
                                  ),
                                  'MajorAxis' => 
                                  array (
                                    'description' => '\\[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下长径的起止点，len为长径长度（mm）。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '\\[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下长径的起止点，len为长径长度（mm）。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '[178,212,185,217,6.0]',
                                    ),
                                  ),
                                  'MinorAxis' => 
                                  array (
                                    'description' => '\\[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下短径的起止点，len为长径长度（mm）。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '\\[start_x, start_y, end_x, end_y, len]五元组，其中start和end为图像坐标系下短径的起止点，len为长径长度（mm）。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '[184,213,181,218,4.0]',
                                    ),
                                  ),
                                  'Risk' => 
                                  array (
                                    'description' => '结节为恶性的置信度。取值范围0~1。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.173',
                                  ),
                                ),
                              ),
                            ),
                            'Origin' => 
                            array (
                              'description' => '图像坐标系原点在物理坐标系中的位置。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '图像坐标系原点在物理坐标系中的位置。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[-166.0,-171.6999969482422,-340.0]',
                              ),
                            ),
                            'Report' => 
                            array (
                              'description' => '该DICOM序列经过AI分析后AI服务给出的参考报告。',
                              'type' => 'string',
                              'example' => '肺部见1个实性结节，直径约为25.60mm，体积为11512.06mm³，平均CT值为-6.90HU。',
                            ),
                            'Spacing' => 
                            array (
                              'description' => '每个像素的实际距离间隔。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每个像素的实际距离间隔。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[0.703125,0.703125,14.34782600402832]',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CACS' => 
                  array (
                    'description' => '冠脉钙化积分测算算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultUrl' => 
                      array (
                        'description' => '分割结果下载地址，有效时间5分钟。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****',
                      ),
                      'Score' => 
                      array (
                        'description' => '冠脉钙化积分值。',
                        'type' => 'string',
                        'example' => '4.83',
                      ),
                      'VolumeScore' => 
                      array (
                        'description' => '体积积分，即钙化点总体积。',
                        'type' => 'string',
                        'example' => '111.96',
                      ),
                      'Detections' => 
                      array (
                        'description' => '钙化病灶详细列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '钙化病灶详细列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CalciumId' => 
                            array (
                              'description' => '钙化病灶的序号，从1开始。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'CalciumScore' => 
                            array (
                              'description' => '病灶钙化积分。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '19.22474',
                            ),
                            'CalciumVolume' => 
                            array (
                              'description' => '病灶体积积分。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '28.837109',
                            ),
                            'CalciumCenter' => 
                            array (
                              'description' => '图像坐标系下病灶中心坐标\\[x, y, z]。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '图像坐标系下病灶中心坐标\\[x, y, z]。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[237,183,59]',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'SeriesInstanceUID' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.392.489642.9116.2.6.1.44063.1986736248.1658817546.650139',
                      ),
                    ),
                  ),
                  'Covid' => 
                  array (
                    'description' => '新冠肺炎算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'NormalProbability' => 
                      array (
                        'description' => '普通肺炎的概率。',
                        'type' => 'string',
                        'example' => '0.7230905',
                      ),
                      'NewProbability' => 
                      array (
                        'description' => '新冠肺炎概率。',
                        'type' => 'string',
                        'example' => '4.062644e-06',
                      ),
                      'LesionRatio' => 
                      array (
                        'description' => '白化比例。',
                        'type' => 'string',
                        'example' => '0.9387283236994219',
                      ),
                      'OtherProbability' => 
                      array (
                        'description' => '其他概率。',
                        'type' => 'string',
                        'example' => '0.27690542',
                      ),
                      'Mask' => 
                      array (
                        'description' => 'NII格式的mask文件HTTP地址。',
                        'type' => 'string',
                        'example' => 'http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****',
                      ),
                      'SeriesInstanceUID' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.392.200036.9116.2.6.1.44063.1805049129.1658817546.650139',
                      ),
                    ),
                  ),
                  'DetectRibFracture' => 
                  array (
                    'description' => '肋骨骨折检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultURL' => 
                      array (
                        'description' => '分割结果下载地址，有效时间5分钟。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****',
                      ),
                      'Spacing' => 
                      array (
                        'description' => '每个像素之间的物理距离间隔。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '每个像素之间的物理距离间隔。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[1.25,0.8261719942092896,0.8261719942092896]',
                        ),
                      ),
                      'Origin' => 
                      array (
                        'description' => '像素坐标系原点在物理坐标系中的位置。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '像素坐标系原点在物理坐标系中的位置。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[-431.9739990234375,-211.5,-204.01400756835938]',
                        ),
                      ),
                      'Detections' => 
                      array (
                        'description' => '肋骨骨折检出结果。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '1',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FractureId' => 
                            array (
                              'description' => '骨折处序号，从1起始。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2',
                            ),
                            'FractureConfidence' => 
                            array (
                              'description' => '骨折分类的置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.7916666666666667',
                            ),
                            'FractureCategory' => 
                            array (
                              'description' => '骨折分类结果。

- 1：移位骨折。
- 2：非移位骨折。
- 3：皮质弯曲。
- 4：陈旧骨折。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'Coordinates' => 
                            array (
                              'description' => '物理坐标系下骨折检测框，以这个顺序排列：(minX, minY, minZ, maxX, maxY, maxZ)。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '物理坐标系下骨折检测框。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[75,-98,-156,98,-80,-133]',
                              ),
                            ),
                            'CoordinateImage' => 
                            array (
                              'description' => '图像坐标系下骨折检测框，以这个顺序排列：(minX, minY, minZ, maxX, maxY, maxZ)。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '图像坐标系下骨折检测框。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '[338,137,220,366,159,239]',
                              ),
                            ),
                            'FractureLocation' => 
                            array (
                              'description' => '骨折所在肋骨编号（L1~L12，R1~R12）。L表示左侧，R表示右侧。',
                              'type' => 'string',
                              'example' => 'L4',
                            ),
                            'FractureSegment' => 
                            array (
                              'description' => '骨折所在肋骨段。取值如下：

- 0：前段
- 1：腋段
- 2：后段',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'FracSOPInstanceUID' => 
                            array (
                              'description' => '骨折中间帧在整个DICOM序列中的唯一标识符，如果是NIFTI格式的输入，默认设置为None。',
                              'type' => 'string',
                              'example' => 'None',
                            ),
                          ),
                        ),
                      ),
                      'RibSegmentMaskURL' => 
                      array (
                        'description' => '肋骨分段关联图像URL地址，有效时间5分钟，格式为**.nii.gz**。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-ribmask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5Z%2FCS3B%2B%2Ff6nlBk7alY39LvH3****',
                      ),
                      'FractureMaskURL' => 
                      array (
                        'description' => '骨折病灶关联图像URL地址，有效时间5分钟，格式为**.nii.gz**。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-mask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=2lzFDLfGbhVXsHm%2BKhgpglWmA****',
                      ),
                      'SeriesInstanceUID' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.392.489642.9116.2.6.1.78361.1298784213.1658817546.650139',
                      ),
                    ),
                  ),
                  'ErrorMessage' => 
                  array (
                    'description' => '错误码描述。',
                    'type' => 'string',
                    'example' => 'Failed to execute [cacs,covid]',
                  ),
                  'AnalyzeChestVessel' => 
                  array (
                    'description' => '主动脉瘤肺动脉高压检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AortaInfo' => 
                      array (
                        'description' => '主动脉分析结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MaxAreaIndex' => 
                          array (
                            'description' => '主动脉血管最大截面积在**Area**中的索引。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '416',
                          ),
                          'MaxArea' => 
                          array (
                            'description' => '在**Area**中，主动脉血管截面积中的最大值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2722',
                          ),
                          'MaxDiameter' => 
                          array (
                            'description' => '最大截面积处的血管最大直径，单位为毫米。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '63',
                          ),
                          'LabelValue' => 
                          array (
                            'description' => '当前血管在血管分割Mask中的Label值。AortaInfo中取值为2。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2',
                          ),
                          'Coordinates' => 
                          array (
                            'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[19.0,-151.3,549.0]',
                              ),
                            ),
                          ),
                          'Area' => 
                          array (
                            'description' => '1',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '沿血管中心线每隔1毫米处垂直于血管的血管截面积，单位为平方毫米。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '[428]',
                            ),
                          ),
                        ),
                      ),
                      'PulmonaryInfo' => 
                      array (
                        'description' => '肺动脉分析结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MaxAreaIndex' => 
                          array (
                            'description' => '肺动脉血管最大截面积在**Area**中的索引。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '0',
                          ),
                          'MaxArea' => 
                          array (
                            'description' => '在**Area**中，肺动脉血管截面积中的最大值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '928',
                          ),
                          'MaxDiameter' => 
                          array (
                            'description' => '最大截面积处的血管最大直径，单位为毫米。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '42',
                          ),
                          'LabelValue' => 
                          array (
                            'description' => '当前血管在血管分割Mask中的Label值。PulmonaryInfo中取值为1。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'Coordinates' => 
                          array (
                            'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[32.6,-182.9,697.1]',
                              ),
                            ),
                          ),
                          'Area' => 
                          array (
                            'description' => '1',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '沿血管中心线每隔1毫米处垂直于血管的血管截面积，单位为平方毫米。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '[928]',
                            ),
                          ),
                          'NearestAortaArea' => 
                          array (
                            'description' => '主动脉中心线上最靠近肺动脉截面积最大处的点处的主动脉截面积。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2439',
                          ),
                        ),
                      ),
                      'ResultURL' => 
                      array (
                        'description' => 'CPR相关结果下载地址。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/ct_artery_aa_ph/local_test/2021-07-08/6C4713DF-F548-47DF-A456-5DA1C8334444_result_compressed.tgz?Expires=1625732732&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5UKVmLfM7GWllIcPr9a6dKz%2B5h****',
                      ),
                    ),
                  ),
                  'URLList' => 
                  array (
                    'description' => '当请求参数**Verbose**输入为1，且提交的DICOM数据为单序列时返回的DICOM文件地址。',
                    'type' => 'object',
                    'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/coronacases_org_001/1.2.112.92121.1.1689.19.2.2020040219072764787101585825****.dcm',
                  ),
                  'DetectLymph' => 
                  array (
                    'description' => '淋巴结检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesions' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '病灶描述。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度，取值范围0~1。

> 使用时建议选择置信度大于0.5的数据。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.6298',
                            ),
                            'KeySlice' => 
                            array (
                              'description' => '关键帧。

> 关键帧为病灶短径最大的横轴位切面。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '7',
                            ),
                            'Boxes' => 
                            array (
                              'description' => '病灶3D标识框坐标（X1,Y1,Z1,X2,Y2,Z2）。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '病灶3D标识框坐标（X1,Y1,Z1,X2,Y2,Z2）。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[248.045,264.0172,7.0,254.3053,270.1457,7.0]',
                              ),
                            ),
                            'Diametermm' => 
                            array (
                              'description' => '长径和短径长度，单位：毫米。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '长径和短径长度，单位：毫米。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[5.1225,4.0]',
                              ),
                            ),
                            'Recist' => 
                            array (
                              'description' => '实体肿瘤疗效评价标准，即利用长短径来评判疗效。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实体肿瘤疗效评价标准，即利用长短径来评判疗效。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '长短径起止点坐标（X1,Y1,X2,Y2,X3,Y3,X4,Y4）。（X1,Y1）和（X2,Y2）确定长径，（X3,Y3）和（X4,Y4）确定短径。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '[248.8687,264.2575],[253.0299,269.459],[248.8687,268.4187]',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'SeriesInstanceUID' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.568.200036.9116.2.6.1.44063.1805049129.1357480934.650139',
                      ),
                    ),
                  ),
                  'DetectPdac' => 
                  array (
                    'description' => '胰腺癌检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Possibilities' => 
                          array (
                            'description' => '三类分类预测的概率，依次对应正常胰腺、胰腺癌、非胰腺癌病变，取值范围0~1。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '三类分类预测的概率，依次对应正常胰腺、胰腺癌、非胰腺癌病变，取值范围0~1。',
                              'type' => 'string',
                              'example' => '["0.9481","0.0441","0.0078"]',
                            ),
                          ),
                          'PancVol' => 
                          array (
                            'description' => '胰腺体积，单位：cm<sup icmsditafragmentmagic=1>3</sup>。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'PdacVol' => 
                          array (
                            'description' => '胰腺癌病变体积，单位：cm<sup icmsditafragmentmagic=1>3</sup>。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'NonPdacVol' => 
                          array (
                            'description' => '非胰腺癌病变体积，单位：cm<sup icmsditafragmentmagic=1>3</sup>。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'Mask' => 
                          array (
                            'description' => '病灶Mask地址。

> 有效时间为5分钟，5分钟后链接失效，需要重新生成。',
                            'type' => 'string',
                            'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****',
                          ),
                        ),
                      ),
                      'SeriesInstanceUID' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.239.200036.9116.2.6.1.44063.1805049129.1357480934.650139',
                      ),
                    ),
                  ),
                  'NestedUrlList' => 
                  array (
                    'description' => '当请求参数**Verbose**输入为2，或当提交的DICOM数据为多序列且**Verbose**不为0时，返回的DICOM文件地址。',
                    'type' => 'object',
                    'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/coronacases_org_001/1.2.112.92121.1.1689.19.2.2020040219072764787101585825****.dcm',
                  ),
                  'ScreenEc' => 
                  array (
                    'description' => '食管癌检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Possibilities' => 
                          array (
                            'description' => '三类分类预测的概率，依次对应正常食管、食管癌、非食管癌病变，取值范围0~1。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '三类分类预测的概率，依次对应正常食管、食管癌、非食管癌病变，取值范围0~1。',
                              'type' => 'string',
                              'example' => '"0.9481","0.0441","0.0078"',
                            ),
                          ),
                          'EsoVolume' => 
                          array (
                            'description' => '食管体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '26814',
                          ),
                          'EcVolume' => 
                          array (
                            'description' => '食管癌病变体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'BenignVolume' => 
                          array (
                            'description' => '非食管癌病变体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'Mask' => 
                          array (
                            'description' => '病灶Mask地址。',
                            'type' => 'string',
                            'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****',
                          ),
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.112.92121.1.1689.19.1.2020040219072609340210',
                      ),
                    ),
                  ),
                  'ScreenGC' => 
                  array (
                    'description' => '胃癌检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Probabilities' => 
                          array (
                            'description' => '三类分类预测的概率，依次对应正常胃部、胃癌、非胃癌病变，取值范围0~1。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '三类分类预测的概率，依次对应正常胃部、胃癌、非胃癌病变，取值范围0~1。',
                              'type' => 'string',
                              'example' => '["0.1467", "0.8533", "0.0000"]',
                            ),
                          ),
                          'StomachVolume' => 
                          array (
                            'description' => '胃部体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '508.79',
                          ),
                          'GCVolume' => 
                          array (
                            'description' => '胃癌病变体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '5.86',
                          ),
                          'NonGCVolume' => 
                          array (
                            'description' => '非胃癌病变体积，单位：cm³。',
                            'type' => 'string',
                            'example' => '0.00',
                          ),
                          'Mask' => 
                          array (
                            'description' => '病灶Mask地址。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                            'type' => 'string',
                            'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****',
                          ),
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.365.465882.9567.2.6.1.78561.1298784213.1653654746.650139',
                      ),
                    ),
                  ),
                  'ScreenCRC' => 
                  array (
                    'description' => '结直肠癌检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Probabilities' => 
                          array (
                            'description' => '两类分类预测的概率，依次对应健康、结直肠癌。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '两类分类预测的概率，依次对应健康、结直肠癌。',
                              'type' => 'string',
                              'example' => '0.0779, 0.9221',
                            ),
                          ),
                          'ColorectumVolume' => 
                          array (
                            'description' => '结直肠体积，单位：立方厘米（cm³）。',
                            'type' => 'string',
                            'example' => '255.93',
                          ),
                          'Mask' => 
                          array (
                            'description' => '病灶Mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                            'type' => 'string',
                            'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_crc/crc_case2_pre.nii.gz?Expires=1680766116&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=9n9C%2B2MnyvLwAC%2FwFyxgY****',
                          ),
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.425.324582.4667.2.6.1.707564.5693464213.6748794746.650139',
                      ),
                    ),
                  ),
                  'ScreenLC' => 
                  array (
                    'description' => '肝癌检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Mask' => 
                          array (
                            'description' => '病灶mask。',
                            'type' => 'string',
                            'example' => '20-050_0000.nii.gz',
                          ),
                          'PatientLevelResult' => 
                          array (
                            'description' => '病人级别诊断。

> 病人诊断有肝癌的概、非肝癌的恶性肿瘤的概率、非囊肿的良性肿瘤的概率以及有囊肿的概率的和不为1，因为病人可能有多种肿瘤。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'HCCProb' => 
                              array (
                                'description' => '诊断为肝癌的概率。',
                                'type' => 'string',
                                'example' => '0.9941',
                              ),
                              'MalignantNonHCCProb' => 
                              array (
                                'description' => '诊断有非肝癌的恶性肿瘤的概率。',
                                'type' => 'string',
                                'example' => '0.0073',
                              ),
                              'BenignNonCystProb' => 
                              array (
                                'description' => '诊断有非囊肿的良性肿瘤的概率。',
                                'type' => 'string',
                                'example' => '0.0077',
                              ),
                              'CystProb' => 
                              array (
                                'description' => '诊断有囊肿的概率。',
                                'type' => 'string',
                                'example' => '0.9233',
                              ),
                            ),
                          ),
                          'LiverVolume' => 
                          array (
                            'description' => '肝脏（包括肿瘤）总体积，单位：立方厘米（cm³）。',
                            'type' => 'string',
                            'example' => '1364.9468',
                          ),
                          'LesionList' => 
                          array (
                            'description' => '病灶列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '病灶列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Type' => 
                                array (
                                  'description' => '病灶类别：HCC、other_malignant、other_benign、cyst。',
                                  'type' => 'string',
                                  'example' => 'HCC',
                                ),
                                'Volume' => 
                                array (
                                  'description' => '病灶体积，单位：立方厘米（cm³）。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '305.3661',
                                ),
                                'KeySlice' => 
                                array (
                                  'description' => 'RECIST长短径所在的关键帧（第一帧编号为0）。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '100',
                                ),
                                'RecistEndpoints' => 
                                array (
                                  'description' => 'RECIST长短径的端点，[[x11,y11],[x12,y12],[x21,y21],[x22,y22]]，其中[x11,y11],[x12,y12]代表长径，[x21,y21], [x22,y22]代表短径。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => 'RECIST长短径的端点，[[x11,y11],[x12,y12],[x21,y21],[x22,y22]]，其中[x11,y11],[x12,y12]代表长径，[x21,y21], [x22,y22]代表短径。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '[94, 195],[159, 315],[80, 295],[175, 243]',
                                  ),
                                ),
                                'Diameter' => 
                                array (
                                  'description' => '长短径的长度，单位：毫米（mm）。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '长短径的长度，单位：毫米（mm）。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '108.4857, 86.0904',
                                  ),
                                ),
                                'Malignancy' => 
                                array (
                                  'description' => '恶性概率。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '0.9375',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.809.344582.2357.2.6.1.654764.523664213.6748794746.650139',
                      ),
                    ),
                  ),
                  'PredictCVD' => 
                  array (
                    'description' => '心血管不良事件检测算法的输出结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Lesion' => 
                      array (
                        'description' => '病灶描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResultURL' => 
                          array (
                            'description' => '病灶mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '病灶mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                              'type' => 'string',
                              'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****',
                            ),
                          ),
                          'CVDProbability' => 
                          array (
                            'description' => '取值（0,1）之间，描述该特征在cvd风险预测中的权重。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.5',
                          ),
                          'FeatureScore' => 
                          array (
                            'description' => '特征值描述。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'AscAoMaxDiam' => 
                              array (
                                'description' => '升主动脉最大直径。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '升主动脉最大直径。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.5903897218571467, 0.02410123310983181',
                                ),
                              ),
                              'MyoEpiRatio' => 
                              array (
                                'description' => '心肌/心外膜比率。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '心肌/心外膜比率。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '72.34564319505104, 0.19550363719463348',
                                ),
                              ),
                              'CoronaryCalciumVol' => 
                              array (
                                'description' => '冠状动脉钙化体积，单位：立方厘米（cm³）。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '冠状动脉钙化体积，单位：立方厘米（cm³）。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '142.48924255371094, 0.013891000300645828',
                                ),
                              ),
                              'EatVolume' => 
                              array (
                                'description' => '心脏表面和心包之间的脂肪组织体积，单位：立方厘米（cm³）。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '心脏表面和心包之间的脂肪组织体积，单位：立方厘米（cm³）。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '172452.69470214844, 0.02982756681740284',
                                ),
                              ),
                              'AortaCalciumScore' => 
                              array (
                                'description' => '主动脉钙化评分。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '主动脉钙化评分。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '273.66981506347656, 0.0013405405916273594',
                                ),
                              ),
                              'CardioThoracicRatio' => 
                              array (
                                'description' => '心胸比。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '心胸比。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.5422740524781341, 0.0005164738977327943',
                                ),
                              ),
                              'EatHUMean' => 
                              array (
                                'description' => '心外脂肪组织的平均Hounsfield单位数值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '心外脂肪组织的平均Hounsfield单位数值。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '-85.05931303116148, 0.01098276674747467',
                                ),
                              ),
                              'EatHUSTD' => 
                              array (
                                'description' => '心外脂肪组织的Hounsfield单位数值的标准差。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '心外脂肪组织的Hounsfield单位数值的标准差。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '27.468474279178704, 0.09224013239145279',
                                ),
                              ),
                              'RightLungLowattRatio' => 
                              array (
                                'description' => '右肺低密度区域比值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '右肺低密度区域比值。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.0002497813107143641, 0.028977323323488235',
                                ),
                              ),
                              'AscendAortaLength' => 
                              array (
                                'description' => '升主动脉长度。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '升主动脉长度。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '90.40661132335663, 0.01413580309599638',
                                ),
                              ),
                              'LeftLungLowattRatio' => 
                              array (
                                'description' => '左肺低密度区域比值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '左肺低密度区域比值。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.0009580087202916068, 0.0066444058902561665',
                                ),
                              ),
                              'DeepFeature' => 
                              array (
                                'description' => '深度特征值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '深度特征值。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.5462655425071716',
                                ),
                              ),
                              'AortaCalciumVolume' => 
                              array (
                                'description' => '主动脉钙化体积，单位：立方厘米（cm³）。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '主动脉钙化体积，单位：立方厘米（cm³）。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '251.05247497558594, 0.014336814172565937',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'SeriesInstanceUid' => 
                      array (
                        'description' => '当前结果对应的序列ID。',
                        'type' => 'string',
                        'example' => '1.2.119.569382.6757.2.6.1.895664.343664213.6748794746.650139',
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"528B54D4-3AAB-47CF-B6CE-0C2A2FB4C7C2\\",\\n  \\"Data\\": {\\n    \\"CalcBMD\\": {\\n      \\"Detections\\": [\\n        {\\n          \\"VertId\\": \\"L1\\",\\n          \\"VertBMD\\": 0.78,\\n          \\"VertTScore\\": -2.5,\\n          \\"VertZScore\\": 0,\\n          \\"VertCategory\\": 0\\n        }\\n      ],\\n      \\"Spacing\\": [\\n        0\\n      ],\\n      \\"Origin\\": [\\n        0\\n      ],\\n      \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-bmd/local_test/2023-03-31/7772ECE3-22A7-193F-81B4-B0D6A02B5DAF-result.tgz?Expires=1680486509&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=GWi%2BhCCtamefKVYiS9oZJduswH****\\",\\n      \\"SeriesInstanceUid\\": \\"1.3.116.569382.6757.2.6.1.895664.343664213.6748794746.650139\\"\\n    },\\n    \\"DetectLiverSteatosis\\": {\\n      \\"Detections\\": [\\n        {\\n          \\"ROI1Center\\": [\\n            0\\n          ],\\n          \\"ROI2Center\\": [\\n            0\\n          ],\\n          \\"ROI3Center\\": [\\n            0\\n          ],\\n          \\"SpleenCenter\\": [\\n            0\\n          ],\\n          \\"Radius\\": 1,\\n          \\"LiverSlice\\": 12,\\n          \\"SpleenSlice\\": 9,\\n          \\"LiverVolume\\": 1059.4175610625439,\\n          \\"SpleenVolume\\": 156.01873229470647,\\n          \\"LiverHU\\": 62.07644147383561,\\n          \\"SpleenHU\\": 53.86993919857013,\\n          \\"LiverROI1\\": 63.50222396850586,\\n          \\"LiverROI2\\": 62.23713684082031,\\n          \\"LiverROI3\\": 59.78181838989258,\\n          \\"SpleenROI\\": 50.553409576416016,\\n          \\"LiverSpleenDifference\\": 8.206502275265478,\\n          \\"LiverSpleenRatio\\": 1.15233917834983,\\n          \\"Prediction\\": \\"Mod\\",\\n          \\"Probability\\": 0.9457855224609375\\n        }\\n      ],\\n      \\"Spacing\\": [\\n        0\\n      ],\\n      \\"Origin\\": [\\n        0\\n      ],\\n      \\"SeriesInstanceUid\\": \\"1.2.230.569382.6757.2.6.1.895664.343664213.6748794746.650139\\"\\n    },\\n    \\"LungNodule\\": {\\n      \\"Series\\": [\\n        {\\n          \\"SeriesInstanceUid\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.179049373636438705059720603192\\",\\n          \\"Elements\\": [\\n            {\\n              \\"Lobe\\": \\"up\\",\\n              \\"MeanValue\\": 261.37589112119247,\\n              \\"Lung\\": \\"left\\",\\n              \\"Confidence\\": 0.7012705768508907,\\n              \\"SOPInstanceUID\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.261151233960269013402330853013\\",\\n              \\"Category\\": \\"1\\",\\n              \\"Volume\\": 10959.220491175074,\\n              \\"Diameter\\": 9.730626493692398,\\n              \\"X\\": 51.24291240631416,\\n              \\"Y\\": -32.23147700784307,\\n              \\"Z\\": -46.81608170781766,\\n              \\"ImageX\\": 308.9676976455463,\\n              \\"ImageY\\": 198.3552282631497,\\n              \\"ImageZ\\": 198.3552282631497,\\n              \\"RecistSOPInstanceUID\\": \\"1.3.6.1.4.1.14519.5.2.1.6279.6001.468208655866166788627471660948\\",\\n              \\"MajorAxis\\": [\\n                0\\n              ],\\n              \\"MinorAxis\\": [\\n                0\\n              ],\\n              \\"Risk\\": 0.173\\n            }\\n          ],\\n          \\"Origin\\": [\\n            0\\n          ],\\n          \\"Report\\": \\"肺部见1个实性结节，直径约为25.60mm，体积为11512.06mm³，平均CT值为-6.90HU。\\",\\n          \\"Spacing\\": [\\n            0\\n          ]\\n        }\\n      ]\\n    },\\n    \\"CACS\\": {\\n      \\"ResultUrl\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****\\",\\n      \\"Score\\": \\"4.83\\",\\n      \\"VolumeScore\\": \\"111.96\\",\\n      \\"Detections\\": [\\n        {\\n          \\"CalciumId\\": 1,\\n          \\"CalciumScore\\": 19.22474,\\n          \\"CalciumVolume\\": 28.837109,\\n          \\"CalciumCenter\\": [\\n            0\\n          ]\\n        }\\n      ],\\n      \\"SeriesInstanceUID\\": \\"1.2.392.489642.9116.2.6.1.44063.1986736248.1658817546.650139\\"\\n    },\\n    \\"Covid\\": {\\n      \\"NormalProbability\\": \\"0.7230905\\",\\n      \\"NewProbability\\": \\"4.062644e-06\\",\\n      \\"LesionRatio\\": \\"0.9387283236994219\\",\\n      \\"OtherProbability\\": \\"0.27690542\\",\\n      \\"Mask\\": \\"http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****\\",\\n      \\"SeriesInstanceUID\\": \\"1.2.392.200036.9116.2.6.1.44063.1805049129.1658817546.650139\\"\\n    },\\n    \\"DetectRibFracture\\": {\\n      \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****\\",\\n      \\"Spacing\\": [\\n        0\\n      ],\\n      \\"Origin\\": [\\n        0\\n      ],\\n      \\"Detections\\": [\\n        {\\n          \\"FractureId\\": 2,\\n          \\"FractureConfidence\\": 0.7916666666666667,\\n          \\"FractureCategory\\": 1,\\n          \\"Coordinates\\": [\\n            0\\n          ],\\n          \\"CoordinateImage\\": [\\n            0\\n          ],\\n          \\"FractureLocation\\": \\"L4\\",\\n          \\"FractureSegment\\": 0,\\n          \\"FracSOPInstanceUID\\": \\"None\\"\\n        }\\n      ],\\n      \\"RibSegmentMaskURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-ribmask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5Z%2FCS3B%2B%2Ff6nlBk7alY39LvH3****\\",\\n      \\"FractureMaskURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-mask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=2lzFDLfGbhVXsHm%2BKhgpglWmA****\\",\\n      \\"SeriesInstanceUID\\": \\"1.2.392.489642.9116.2.6.1.78361.1298784213.1658817546.650139\\"\\n    },\\n    \\"ErrorMessage\\": \\"Failed to execute [cacs,covid]\\",\\n    \\"AnalyzeChestVessel\\": {\\n      \\"AortaInfo\\": {\\n        \\"MaxAreaIndex\\": 416,\\n        \\"MaxArea\\": 2722,\\n        \\"MaxDiameter\\": 63,\\n        \\"LabelValue\\": 2,\\n        \\"Coordinates\\": [\\n          [\\n            0\\n          ]\\n        ],\\n        \\"Area\\": [\\n          0\\n        ]\\n      },\\n      \\"PulmonaryInfo\\": {\\n        \\"MaxAreaIndex\\": 0,\\n        \\"MaxArea\\": 928,\\n        \\"MaxDiameter\\": 42,\\n        \\"LabelValue\\": 1,\\n        \\"Coordinates\\": [\\n          [\\n            0\\n          ]\\n        ],\\n        \\"Area\\": [\\n          0\\n        ],\\n        \\"NearestAortaArea\\": 2439\\n      },\\n      \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/ct_artery_aa_ph/local_test/2021-07-08/6C4713DF-F548-47DF-A456-5DA1C8334444_result_compressed.tgz?Expires=1625732732&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5UKVmLfM7GWllIcPr9a6dKz%2B5h****\\"\\n    },\\n    \\"URLList\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"DetectLymph\\": {\\n      \\"Lesions\\": [\\n        {\\n          \\"Score\\": 0.6298,\\n          \\"KeySlice\\": 7,\\n          \\"Boxes\\": [\\n            0\\n          ],\\n          \\"Diametermm\\": [\\n            0\\n          ],\\n          \\"Recist\\": [\\n            [\\n              0\\n            ]\\n          ]\\n        }\\n      ],\\n      \\"SeriesInstanceUID\\": \\"1.2.568.200036.9116.2.6.1.44063.1805049129.1357480934.650139\\"\\n    },\\n    \\"DetectPdac\\": {\\n      \\"Lesion\\": {\\n        \\"Possibilities\\": [\\n          \\"[\\\\\\"0.9481\\\\\\",\\\\\\"0.0441\\\\\\",\\\\\\"0.0078\\\\\\"]\\"\\n        ],\\n        \\"PancVol\\": \\"0\\",\\n        \\"PdacVol\\": \\"0\\",\\n        \\"NonPdacVol\\": \\"0\\",\\n        \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****\\"\\n      },\\n      \\"SeriesInstanceUID\\": \\"1.2.239.200036.9116.2.6.1.44063.1805049129.1357480934.650139\\"\\n    },\\n    \\"NestedUrlList\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"ScreenEc\\": {\\n      \\"Lesion\\": {\\n        \\"Possibilities\\": [\\n          \\"\\\\\\"0.9481\\\\\\",\\\\\\"0.0441\\\\\\",\\\\\\"0.0078\\\\\\"\\"\\n        ],\\n        \\"EsoVolume\\": \\"26814\\",\\n        \\"EcVolume\\": \\"0\\",\\n        \\"BenignVolume\\": \\"0\\",\\n        \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****\\"\\n      },\\n      \\"SeriesInstanceUid\\": \\"1.2.112.92121.1.1689.19.1.2020040219072609340210\\"\\n    },\\n    \\"ScreenGC\\": {\\n      \\"Lesion\\": {\\n        \\"Probabilities\\": [\\n          \\"[\\\\\\"0.1467\\\\\\", \\\\\\"0.8533\\\\\\", \\\\\\"0.0000\\\\\\"]\\"\\n        ],\\n        \\"StomachVolume\\": \\"508.79\\",\\n        \\"GCVolume\\": \\"5.86\\",\\n        \\"NonGCVolume\\": \\"0.00\\",\\n        \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****\\"\\n      },\\n      \\"SeriesInstanceUid\\": \\"1.2.365.465882.9567.2.6.1.78561.1298784213.1653654746.650139\\"\\n    },\\n    \\"ScreenCRC\\": {\\n      \\"Lesion\\": {\\n        \\"Probabilities\\": [\\n          \\"0.0779, 0.9221\\"\\n        ],\\n        \\"ColorectumVolume\\": \\"255.93\\",\\n        \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_crc/crc_case2_pre.nii.gz?Expires=1680766116&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=9n9C%2B2MnyvLwAC%2FwFyxgY****\\"\\n      },\\n      \\"SeriesInstanceUid\\": \\"1.2.425.324582.4667.2.6.1.707564.5693464213.6748794746.650139\\"\\n    },\\n    \\"ScreenLC\\": {\\n      \\"Lesion\\": {\\n        \\"Mask\\": \\"20-050_0000.nii.gz\\",\\n        \\"PatientLevelResult\\": {\\n          \\"HCCProb\\": \\"0.9941\\",\\n          \\"MalignantNonHCCProb\\": \\"0.0073\\",\\n          \\"BenignNonCystProb\\": \\"0.0077\\",\\n          \\"CystProb\\": \\"0.9233\\"\\n        },\\n        \\"LiverVolume\\": \\"1364.9468\\",\\n        \\"LesionList\\": [\\n          {\\n            \\"Type\\": \\"HCC\\",\\n            \\"Volume\\": 305.3661,\\n            \\"KeySlice\\": 100,\\n            \\"RecistEndpoints\\": [\\n              0\\n            ],\\n            \\"Diameter\\": [\\n              0\\n            ],\\n            \\"Malignancy\\": 0.9375\\n          }\\n        ]\\n      },\\n      \\"SeriesInstanceUid\\": \\"1.2.809.344582.2357.2.6.1.654764.523664213.6748794746.650139\\"\\n    },\\n    \\"PredictCVD\\": {\\n      \\"Lesion\\": {\\n        \\"ResultURL\\": [\\n          \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****\\"\\n        ],\\n        \\"CVDProbability\\": 0.5,\\n        \\"FeatureScore\\": {\\n          \\"AscAoMaxDiam\\": [\\n            0\\n          ],\\n          \\"MyoEpiRatio\\": [\\n            0\\n          ],\\n          \\"CoronaryCalciumVol\\": [\\n            0\\n          ],\\n          \\"EatVolume\\": [\\n            0\\n          ],\\n          \\"AortaCalciumScore\\": [\\n            0\\n          ],\\n          \\"CardioThoracicRatio\\": [\\n            0\\n          ],\\n          \\"EatHUMean\\": [\\n            0\\n          ],\\n          \\"EatHUSTD\\": [\\n            0\\n          ],\\n          \\"RightLungLowattRatio\\": [\\n            0\\n          ],\\n          \\"AscendAortaLength\\": [\\n            0\\n          ],\\n          \\"LeftLungLowattRatio\\": [\\n            0\\n          ],\\n          \\"DeepFeature\\": [\\n            0.5462655425071716\\n          ],\\n          \\"AortaCalciumVolume\\": [\\n            0\\n          ]\\n        }\\n      },\\n      \\"SeriesInstanceUid\\": \\"1.2.119.569382.6757.2.6.1.895664.343664213.6748794746.650139\\"\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ScreenChestCTResponse>\\n    <RequestId>528B54D4-3AAB-47CF-B6CE-0C2A2FB4C7C2</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ScreenChestCTResponse>","errorExample":""}]',
      'title' => '胸部CT平扫筛查',
      'summary' => '本文介绍胸部CT平扫筛查ScreenChestCT的语法及示例。',
      'description' => '## 功能描述 
胸部CT平扫筛查能力基于常规胸部CT影像，实现了人体胸部多器官及多病种的检测及量化分析，主要功能如下：
- 基于常规胸部CT自动测量冠状动脉的钙化积分值。
- 自动检出肺结节，输出结节体积、平均灰度和AI结构化报告。
- 自动分割肺叶区域肺炎病灶，输出病灶的大小和肺炎的类型等信息。
- 检出肋骨骨折，并给出骨折的类型。
- 可检测胸部平扫或增强CT中的肿大淋巴结，包含胸部的纵膈、肺门和锁骨上淋巴结。
- 根据输入的胸部平扫CT评估胰腺癌风险。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
胸部CT平扫筛查与医疗影像应用集成后，面向医院、区域医共体医联体、体检机构以及第三方影像中心等机构的影像医生、临床医生提供常规胸部CT影像检测及量化分析。

## 特色优势
功能丰富，首次实现通过一次CT扫描和一次上传即可完成多器官和多病种的检测和量化分析。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/ScreenChestCT?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入：能力支持SDK方式调用，您可以选择合适的开发语言进行接入，具体操作，请参见[SDK总览](~~145033~~)。
6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：DICOM。
- 图像大小：不超过3 MB。
- 图像分辨率：不小于512×512像素。
- 图像帧数：至少20帧，至多600帧。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用ScreenChestCT接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => '## 算法启用与Mask值对应关系

| Mask | 对应二进制数  | 二进制中对应位置（由低到高位） | 描述                              |
|------|---------|-----------------|---------------------------------|
| 1    | 1       | 1               | 二进制第一bit位为1，代表启用新冠病毒肺炎辅助诊断算法。   |
| 2    | 10      | 2               | 二进制第二bit位为1，代表启用冠脉钙化积分测算算法。     |
| 4    | 100     | 3               | 二进制第三bit位为1，代表启用胸部CT肺结节检测算法。    |
| 8    | 1000    | 4               | 二进制第四bit位为1，代表启用肋骨骨折检测算法。       |
| 16   | 10000   | 5               | 二进制第五bit位为1，代表启用主动脉瘤肺动脉高压检测算法。  |
| 32   | 100000  | 6               | 二进制第六bit位为1，代表启用淋巴结检测算法。        |
| 64   | 1000000 | 7               | 二进制第七bit位为1，代表启用胰腺癌检测算法。        |
| 128   | 10000000 | 8               | 二进制第八bit位为1，代表启用食管癌检测算法。        |
| 256   | 0000000100000000 | 9               | 二进制第九bit位为1，代表启用骨密度估计算法。        |
| 512   | 0000001000000000 | 10               | 二进制第十bit位为1，代表启用脂肪肝检测算法。        |
| 1024   | 0000010000000000 | 11               | 二进制第十一bit位为1，代表启用胃癌检测算法。        |
| 2048   | 0000100000000000 | 12               | 二进制第十二bit位为1，代表启用结直肠癌检测算法。        |
| 4096   | 0001000000000000 | 13               | 二进制第十三bit位为1，代表启用肝癌检测算法。        |
| 8192   | 0010000000000000 | 14               | 二进制第十四bit位为1，代表启用CVD心血管不良事件检测算法。        |

',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于胸部CT平扫筛查的错误码。详情请参见[常见错误码](~~159693~~)。

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
            'example' => '7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4',
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
                'example' => '7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4',
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
                    'example' => '{\\"NewProbability\\":\\"4.062644e-06\\",\\"NormalProbability\\":\\"0.7230905\\",\\"OtherProbability\\":\\"0.27690542\\",\\"LesionRatio\\":\\"0.9387283236994219\\",\\"Mask\\":\\"http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****\\"}',
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
                    'example' => 'CCCAAAFB-5628-40DD-A12C-6F52326C1B03',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"NewProbability\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"4.062644e-06\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"NormalProbability\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.7230905\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"OtherProbability\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.27690542\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"LesionRatio\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.9387283236994219\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Mask\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****\\\\\\\\\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"CCCAAAFB-5628-40DD-A12C-6F52326C1B03\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <ErrorMessage>paramsIllegal</ErrorMessage>\\n    <Result>{\\\\\\"NewProbability\\\\\\":\\\\\\"4.062644e-06\\\\\\",\\\\\\"NormalProbability\\\\\\":\\\\\\"0.7230905\\\\\\",\\\\\\"OtherProbability\\\\\\":\\\\\\"0.27690542\\\\\\",\\\\\\"LesionRatio\\\\\\":\\\\\\"0.9387283236994219\\\\\\",\\\\\\"Mask\\\\\\":\\\\\\"http://algo-app-aic-med-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/covid19-dcm/unspecified/2020032702/1b1e1018-6fcf-11ea-8fa1-d20b34387541.nii.gz?Expires=1585276394&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=%2F1LNGWJUqvY0VRYGgg8Ldtb3BF****\\\\\\"}</Result>\\n    <ErrorCode>InvalidParameter</ErrorCode>\\n    <JobId>CCCAAAFB-5628-40DD-A12C-6F52326C1B03</JobId>\\n</Data>","errorExample":""}]',
      'title' => '查询异步任务结果',
      'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
      'description' => '## 功能描述
针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。

> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。


当前图像分析处理类目中新冠病毒肺炎辅助诊断（DetectCovid19Cad）为异步接口，需要调用GetAsyncJobResult来获取真实的请求结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询异步任务结果的错误码，详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RunMedQA' => 
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
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '0001',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'weiyi',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会话ID。首次发送主诉信息时无需填写SessionId，当**QuestionType**为`chiefComplaint`时算首次问诊。首次调用后返回结果中显示对应SessionId，后续问诊时SessionId为必填项。即当**QuestionType**非`chiefComplaint`时，此项为必填项。

> 一次问诊对应一个SessionId，一次问诊会有多轮次对话，每个轮次都对应当前这个问诊的唯一SessionId。问诊有效期为24小时，24小时后SessionId失效。',
            'type' => 'string',
            'required' => false,
            'example' => 'd1f6a6c2444f4c01adfadd413938e5c7',
          ),
        ),
        3 => 
        array (
          'name' => 'Department',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '代表医院科室。

> 当前服务版本仅支持**皮肤科**。',
            'type' => 'string',
            'required' => true,
            'example' => '皮肤科',
          ),
        ),
        4 => 
        array (
          'name' => 'QuestionType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '问题类型。取值如下：

- chiefComplaint：主诉
- age：年龄
- bodyParts：部位
- symptoms：症状
- complications：并发症
- diseaseCourse：病程
- diseaseHistory：疾病史
- medications：用药史
- allegries：过敏史
- images：皮损图片
- reports：报告

> 首次问诊，**QuestionType**不能为空，且必须为`images`类型，**sessionId**可为空。',
            'type' => 'string',
            'required' => true,
            'example' => 'chiefComplaint',
          ),
        ),
        5 => 
        array (
          'name' => 'AnswerImageURLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待检测皮肤病图像的URL地址列表。最多支持添加50条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'AnswerImageURL' => 
                array (
                  'description' => '待检测皮肤病图像的URL地址。最多支持添加50条。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 当**QuestionType**为`images`时必填。**AnswerImageURL**和**AnswerImageData**建议二选一，当与Base64编码方式共存时，URL方式优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/imageprocess/roseola.jpeg',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        6 => 
        array (
          'name' => 'AnswerImageDataList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待检测皮肤病图像的Base64编码字符串列表。最多支持添加50条。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'AnswerImageData' => 
                array (
                  'description' => '待检测皮肤病图像的Base64编码字符串。最多支持添加50条。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。
> 当**QuestionType**为`images`时必填。**AnswerImageURL**和**AnswerImageData**建议二选一，当与URL方式共存时，URL方式优先。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9Wb****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        7 => 
        array (
          'name' => 'AnswerTextList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '患者的主诉或回答列表。最多支持添加50条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'AnswerText' => 
                array (
                  'description' => '患者的主诉或回答列表。最多支持添加50条。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '起了好多红疙瘩流脓，痒死了，晚上痒的最厉害，怎么办啊？',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
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
                'example' => 'BFF7EEC3-F6B5-4387-AC1D-BB095A1A02E4',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'SessionId' => 
                  array (
                    'description' => '会话ID。',
                    'type' => 'string',
                    'example' => 'd1f6a6c2444f4c01adfadd413938e5c7',
                  ),
                  'QuestionType' => 
                  array (
                    'description' => '问题类型。',
                    'type' => 'string',
                    'example' => 'age',
                  ),
                  'Question' => 
                  array (
                    'description' => '补充追问问题。当**QuestionType**为`images`时，无返回值。',
                    'type' => 'string',
                    'example' => '你好，还需要你补充些其他信息，年龄多大了？',
                  ),
                  'AnswerType' => 
                  array (
                    'description' => '选项类型。默认为text。

- text：文本
- single：单选
- multiple：多选',
                    'type' => 'string',
                    'example' => 'text',
                  ),
                  'Options' => 
                  array (
                    'description' => '单选和多选问题的选项。当**AnswerType**为`single`或`multiple`时有返回值，为`text`时无返回值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '问题选项。',
                      'type' => 'string',
                      'example' => '"发烧","呼吸困难","关节疼痛","腹泻","头痛","无"',
                    ),
                  ),
                  'Reports' => 
                  array (
                    'description' => '预问诊信息结构化报表。当**QuestionType**为`images`时（即问诊流程最后一步），才有返回值。',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'description' => '预问诊信息结构化报表。
Reports中对应的key-value值如下表所示。',
                      'example' => '"diagResults": [         "多形红斑",         "玫瑰糠疹",         "急性荨麻疹"       ],       "diagProb": {         "多形红斑": 0.992,         "急性荨麻疹": 0.0019,         "玫瑰糠疹": 0.0053       }',
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
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BFF7EEC3-F6B5-4387-AC1D-BB095A1A02E4\\",\\n  \\"Data\\": {\\n    \\"SessionId\\": \\"d1f6a6c2444f4c01adfadd413938e5c7\\",\\n    \\"QuestionType\\": \\"age\\",\\n    \\"Question\\": \\"你好，还需要你补充些其他信息，年龄多大了？\\",\\n    \\"AnswerType\\": \\"text\\",\\n    \\"Options\\": [\\n      \\"\\\\\\"发烧\\\\\\",\\\\\\"呼吸困难\\\\\\",\\\\\\"关节疼痛\\\\\\",\\\\\\"腹泻\\\\\\",\\\\\\"头痛\\\\\\",\\\\\\"无\\\\\\"\\"\\n    ],\\n    \\"Reports\\": {\\n      \\"key\\": \\"\\\\\\"diagResults\\\\\\": [         \\\\\\"多形红斑\\\\\\",         \\\\\\"玫瑰糠疹\\\\\\",         \\\\\\"急性荨麻疹\\\\\\"       ],       \\\\\\"diagProb\\\\\\": {         \\\\\\"多形红斑\\\\\\": 0.992,         \\\\\\"急性荨麻疹\\\\\\": 0.0019,         \\\\\\"玫瑰糠疹\\\\\\": 0.0053       }\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RunMedQAResponse>\\n    <RequestId>5AC38357-6B32-508E-A8AE-3BB891A6D2E8</RequestId>\\n    <Data>\\n        <QuestionType>chiefComplaint</QuestionType>\\n        <Reports>\\n            <bbox>\\n                <score>0.8148</score>\\n                <y1>1</y1>\\n                <x1>20</x1>\\n                <y2>355</y2>\\n                <x2>534</x2>\\n            </bbox>\\n            <diagResults>多形红斑</diagResults>\\n            <diagResults>玫瑰糠疹</diagResults>\\n            <diagResults>急性荨麻疹</diagResults>\\n            <diagProb>\\n                <多形红斑>0.992</多形红斑>\\n                <急性荨麻疹>0.0019</急性荨麻疹>\\n                <玫瑰糠疹>0.0053</玫瑰糠疹>\\n            </diagProb>\\n        </Reports>\\n        <Question>请描述一下您的病情？</Question>\\n        <AnswerType>text</AnswerType>\\n        <SessionId>7fa1fcaa9a5845d5906f5648d6de284f</SessionId>\\n    </Data>\\n    <Code/>\\n</RunMedQAResponse>","errorExample":""}]',
      'title' => '医学智能问答',
      'summary' => '本文介绍医学智能问答RunMedQA的语法及示例。',
      'description' => '## 功能描述 
医学智能问答能力面向皮肤病预问诊场景，通过多轮对话和图像收集的方式，完成皮肤病相关的预问诊信息收集，并输出结构化的预问诊报告，预测潜在皮肤病。采集的问诊信息主要包括以下内容：

- 基本信息，如主诉、年龄、部位等。
- 病情，如症状、并发症、病程等。
- 病史相关，如疾病史、用药史、过敏史等。
- 非结构化信息，如皮损图片等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
面向皮肤病预问诊场景，采用多轮对话的方式，完成问诊信息采集。

## 特色优势
- 会话流程简洁、智能，便于集成到用户应用中。
- 问诊信息抽取能力准确高效，结合多模态皮肤病预测技术，自动化生成病例报告和潜在疾病诊断，可有效降低问诊时间成本。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/RunMedQA?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于256×256像素，小于2048×2048像素。
- URL地址中不能包含中文字符。
- 问题内容字数不能超过500字。',
      'responseParamsDescription' => '## 参数补充说明
| key              | value类型   | 是否有返回值             | 中文描述 |
| ---------------- | ------------- | ------------------------------ | -------- |
| symptoms         | List<String>  | 是                            | 症状   |
| complications    | List<String>  | 是                            | 并发症 |
| diseaseHistory   | List<String>  | 是                            | 疾病史 |
| medications      | List<String>  | 是                            | 用药史 |
| allegries        | List<String>  | 是                            | 过敏史 |
| bodyParts        | List<String>  | 是                            | 部位   |
| diseaseCourse    | List<String>  | 是                            | 病程   |
| age              | List<String>  | 是                            | 年龄   |
| formDistribution | List<String>  | 否（非模板必须，算法抽取出的） | 形态分布 |
| images           | List<String>  | 是                            | 图片   |
| diagResults      | List<String>  | 是                            | 诊断结果 |
| diagProb         | Map           | 是                            | 诊断概率 |
| bbox             | List<Obeject> | 是                            | 病灶区域 |

## SDK参考
阿里云视觉AI图像分析处理类目下的医学智能问答能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于医学智能问答的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'AnalyzeChestVessel' => 
    array (
      'summary' => '本文介绍主动脉瘤肺动脉高压检测AnalyzeChestVessel的语法及示例。',
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
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        1 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像格式。目前只支持DICOM和NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持`HTTP_FILES`和`HTTP_NII`。

- `HTTP_FILES`为序列文件，对应DataFormat为DICOM。
- `HTTP_NII`为单个文件，对应DataFormat为NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
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
                'example' => 'B87D013B-F25F-47DC-ABE1-440F4837AFD2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'AortaInfo' => 
                  array (
                    'description' => '主动脉分析结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxAreaIndex' => 
                      array (
                        'description' => '主动脉血管最大截面积在**Area**中的索引。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '416',
                      ),
                      'MaxArea' => 
                      array (
                        'description' => '在**Area**中，主动脉血管截面积中的最大值。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '2722',
                      ),
                      'MaxDiameter' => 
                      array (
                        'description' => '最大截面积处的血管最大直径，单位为毫米。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '63',
                      ),
                      'LabelValue' => 
                      array (
                        'description' => '当前血管在血管分割Mask中的Label值。AortaInfo中取值为2。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                      ),
                      'Coordinates' => 
                      array (
                        'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[19.0,-151.3,549.0]',
                          ),
                        ),
                      ),
                      'Area' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '沿血管中心线每隔1毫米处垂直于血管的血管截面积，单位为平方毫米。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[428]',
                        ),
                      ),
                    ),
                  ),
                  'PulmonaryInfo' => 
                  array (
                    'description' => '肺动脉分析结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxAreaIndex' => 
                      array (
                        'description' => '肺动脉血管最大截面积在**Area**中的索引。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                      ),
                      'MaxArea' => 
                      array (
                        'description' => '在**Area**中，肺动脉血管截面积中的最大值。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '928',
                      ),
                      'MaxDiameter' => 
                      array (
                        'description' => '最大截面积处的血管最大直径，单位为毫米。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '42',
                      ),
                      'LabelValue' => 
                      array (
                        'description' => '当前血管在血管分割Mask中的Label值。PulmonaryInfo中取值为1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'Coordinates' => 
                      array (
                        'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '在病人坐标系下，血管中心线上从起始点到终点每隔1毫米的点对应的XYZ三维坐标序列。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[32.6,-182.9,697.1]',
                          ),
                        ),
                      ),
                      'Area' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '沿血管中心线每隔1毫米处垂直于血管的血管截面积，单位为平方毫米。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '[928]',
                        ),
                      ),
                      'NearestAortaArea' => 
                      array (
                        'description' => '主动脉中心线上最靠近肺动脉截面积最大处的点处的主动脉截面积。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '2439',
                      ),
                    ),
                  ),
                  'ResultURL' => 
                  array (
                    'description' => 'CPR相关结果下载地址。

> 有效时间为5分钟，5分钟后链接失效，需要重新生成。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/ct_artery_aa_ph/local_test/2021-07-08/6C4713DF-F548-47DF-A456-5DA1C8334444_result_compressed.tgz?Expires=1625732732&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5UKVmLfM7GWllIcPr9a6dKz%2B5h****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B87D013B-F25F-47DC-ABE1-440F4837AFD2\\",\\n  \\"Data\\": {\\n    \\"AortaInfo\\": {\\n      \\"MaxAreaIndex\\": 416,\\n      \\"MaxArea\\": 2722,\\n      \\"MaxDiameter\\": 63,\\n      \\"LabelValue\\": 2,\\n      \\"Coordinates\\": [\\n        [\\n          0\\n        ]\\n      ],\\n      \\"Area\\": [\\n        0\\n      ]\\n    },\\n    \\"PulmonaryInfo\\": {\\n      \\"MaxAreaIndex\\": 0,\\n      \\"MaxArea\\": 928,\\n      \\"MaxDiameter\\": 42,\\n      \\"LabelValue\\": 1,\\n      \\"Coordinates\\": [\\n        [\\n          0\\n        ]\\n      ],\\n      \\"Area\\": [\\n        0\\n      ],\\n      \\"NearestAortaArea\\": 2439\\n    },\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/ct_artery_aa_ph/local_test/2021-07-08/6C4713DF-F548-47DF-A456-5DA1C8334444_result_compressed.tgz?Expires=1625732732&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5UKVmLfM7GWllIcPr9a6dKz%2B5h****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<AnalyzeChestVesselResponse>\\n    <RequestId>B87D013B-F25F-47DC-ABE1-440F4837AFD2</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</AnalyzeChestVesselResponse>","errorExample":""}]',
      'title' => '主动脉瘤肺动脉高压检测',
      'description' => '## 功能描述 
主动脉瘤肺动脉高压检测能力可以对输入的胸部CT平扫DICOM影像数据中的主动脉及肺动脉进行分割，并分别提取其中心线，然后根据中心线生成最佳视角的Stretch CPR图像、Cross Section图像及环绕血管一周的Straightened CPR图像，同时返回每根血管的最大直径，沿中心线上每隔1毫米处垂直于血管的血管截面积及这些点在原始图像病人坐标系中的位置。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/AnalyzeChestVessel?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：DICOM、NIFTI。
- 如果输入格式为DICOM，每次请求帧数最少20帧最多600帧；如果输入格式为NIFTI，每次请求须有且仅有一例数据。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用AnalyzeChestVessel接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的主动脉瘤肺动脉高压检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于主动脉瘤肺动脉高压检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'FeedbackSession' => 
    array (
      'summary' => '本文介绍会话反馈FeedbackSession的语法及示例。',
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
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会话ID。

> 与**RunMedQA**接口返回参数中的`SessionId`一致。',
            'type' => 'string',
            'required' => true,
            'example' => '69675e9ddaea4b1ca8b9ddbafd02edc2',
          ),
        ),
        1 => 
        array (
          'name' => 'Feedback',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会话结束后的反馈信息。',
            'type' => 'string',
            'required' => true,
            'example' => '张三医生_皮肤过敏_remark',
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
                'example' => '01E1BC28-9155-59F0-BA7E-3706170DEF1B',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"01E1BC28-9155-59F0-BA7E-3706170DEF1B\\"\\n}","errorExample":""},{"type":"xml","example":"<FeedbackSessionResponse>\\n    <RequestId>01E1BC28-9155-59F0-BA7E-3706170DEF1B</RequestId>\\n</FeedbackSessionResponse>","errorExample":""}]',
      'title' => '会话反馈',
      'description' => '## 功能描述 
在皮肤病预问诊场景中，一次会话（Session）包含多轮的问答交互，在交互完成后，仍存在额外交互的需求。本接口提供基于Session的反馈收集，以实现附加数据的回传（如调用方针对本会话存在约定的数据传输和信息收集）。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/FeedbackSession?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI图像分析处理类目下的会话反馈能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于会话反馈的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectPanc' => 
    array (
      'summary' => '本文介绍胰腺癌检测DetectPanc的语法及示例。',
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
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图像URL列表。',
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/LIDC-IDRI-0001/000001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，仅支持`HTTP_FILES`。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
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
                'example' => 'CA1C672A-4F85-1CD9-893D-3434C924C4B2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Possibilities' => 
                      array (
                        'description' => '三类分类预测的概率，依次对应正常胰腺、胰腺癌、非胰腺癌病变，取值范围0~1。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '三类分类预测的概率，依次对应正常胰腺、胰腺癌、非胰腺癌病变，取值范围0~1。',
                          'type' => 'string',
                          'example' => '["0.9481","0.0441","0.0078"]',
                        ),
                      ),
                      'PancVol' => 
                      array (
                        'description' => '胰腺体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'PdacVol' => 
                      array (
                        'description' => '胰腺癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'NonPdacVol' => 
                      array (
                        'description' => '非胰腺癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'Mask' => 
                      array (
                        'description' => '病灶Mask地址。

> 有效时间为5分钟，5分钟后链接失效，需要重新生成。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****',
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA1C672A-4F85-1CD9-893D-3434C924C4B2\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"Possibilities\\": [\\n        \\"[\\\\\\"0.9481\\\\\\",\\\\\\"0.0441\\\\\\",\\\\\\"0.0078\\\\\\"]\\"\\n      ],\\n      \\"PancVol\\": \\"0\\",\\n      \\"PdacVol\\": \\"0\\",\\n      \\"NonPdacVol\\": \\"0\\",\\n      \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****\\"\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectPancResponse>\\n    <RequestId>CA1C672A-4F85-1CD9-893D-3434C924C4B2</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectPancResponse>","errorExample":""}]',
      'title' => '胰腺癌检测',
      'description' => '## 功能描述 
胰腺癌检测能力可以根据输入的胸部平扫CT评估胰腺癌风险。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查：支持输入胸部平扫CT评估胰腺癌风险，可输出分类结果和病灶分割结果。

## 特色优势

- 胰腺癌风险评估：对正常胰腺组织、胰腺癌、非胰腺癌病变进行三分类的概率，其中三者中最高的一项为分类结果。
- 病灶可视化：输出正常胰腺组织、胰腺癌、非胰腺癌病变的体积及对应的分割结果（以NIFTI文件标识）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectPanc?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：DICOM。
- 每次请求帧数最少20帧最多600帧。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectPanc接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的胰腺癌检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。
',
      'extraInfo' => '## 错误码
关于胰腺癌检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectLymph' => 
    array (
      'summary' => '本文介绍淋巴结检测DetectLymph的语法及示例。',
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
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，仅支持`HTTP_FILES`。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
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
                'example' => '59598577-13C6-12A2-8CBF-A4DA4C9280A1',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesions' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Score' => 
                        array (
                          'description' => '置信度，取值范围0~1。

> 使用时建议选择置信度大于0.5的数据。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.6298',
                        ),
                        'KeySlice' => 
                        array (
                          'description' => '关键帧。

> 关键帧为病灶短径最大的横轴位切面。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '7',
                        ),
                        'Boxes' => 
                        array (
                          'description' => '病灶3D标识框坐标（X1,Y1,Z1,X2,Y2,Z2）。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '病灶3D标识框坐标（X1,Y1,Z1,X2,Y2,Z2）。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[248.045,264.0172,7.0,254.3053,270.1457,7.0]',
                          ),
                        ),
                        'Diametermm' => 
                        array (
                          'description' => '长径和短径长度，单位：毫米。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '长径和短径长度，单位：毫米。

> 使用时建议设置一个短径阈值，例如7毫米，过滤掉短径过小的病灶。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[5.1225,4.0]',
                          ),
                        ),
                        'Recist' => 
                        array (
                          'description' => '实体肿瘤疗效评价标准，即利用长短径来评判疗效。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '实体肿瘤疗效评价标准，即利用长短径来评判疗效。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '长短径起止点坐标（X1,Y1,X2,Y2,X3,Y3,X4,Y4）。（X1,Y1）和（X2,Y2）确定长径，（X3,Y3）和（X4,Y4）确定短径。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '[248.8687,264.2575],[253.0299,269.459],[248.8687,268.4187]',
                            ),
                          ),
                        ),
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59598577-13C6-12A2-8CBF-A4DA4C9280A1\\",\\n  \\"Data\\": {\\n    \\"Lesions\\": [\\n      {\\n        \\"Score\\": 0.6298,\\n        \\"KeySlice\\": 7,\\n        \\"Boxes\\": [\\n          0\\n        ],\\n        \\"Diametermm\\": [\\n          0\\n        ],\\n        \\"Recist\\": [\\n          [\\n            0\\n          ]\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectLymphResponse>\\n    <RequestId>59598577-13C6-12A2-8CBF-A4DA4C9280A1</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectLymphResponse>","errorExample":""}]',
      'title' => '淋巴结检测',
      'description' => '## 功能描述 
淋巴结检测能力可以检测胸部平扫或增强CT中的肿大淋巴结，包含胸部的纵膈、肺门和锁骨上淋巴结。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查或医院诊疗：支持对胸部平扫或增强CT中肿大淋巴结的检测，提供位置描述可供可视化查看，提供置信度可供筛选，并输出关键帧RECIST长短径长度。

## 特色优势
- 支持病灶3D位置描述：病灶3D标识框（即图像坐标系下的X,Y,Z坐标）与病灶的置信度（0~1）。
- 支持病灶2D信息描述：病灶在2D关键帧上的长短径，包括关键帧位置、长径、短径。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectLymph?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：DICOM。
- 图像必须为横轴位重建的胸部CT，最好是软组织窗重建的CT。
- 每次请求帧数最少20帧，最多600帧。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectLymph接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607974~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的淋巴结检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607824~~)。',
      'extraInfo' => '## 错误码
关于淋巴结检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentOAR' => 
    array (
      'summary' => '本文介绍多器官分割SegmentOAR的语法及示例。',
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
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/xxx/c001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 600,
          ),
        ),
        1 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像的格式。目前只支持以下两种：DICOM、NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'NIFTI',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构代码。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据来源机构名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        4 => 
        array (
          'name' => 'Contrast',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否增强CT。

- true：增强CT
- false：平扫CT',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'MaskList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '长整形数组，对应的器官输出。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '长整形数组，对应的器官输出。建议为空。算法默认输出全部器官的结果。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1024,2048',
            ),
            'required' => false,
            'maxItems' => 600,
          ),
        ),
        6 => 
        array (
          'name' => 'BodyPart',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望输出的危及器官所在的身体部位。

- **CHEST**：胸部
- **HEAD&NECK**：头颈部。
- 空字段：算法自动检测。',
            'type' => 'string',
            'required' => false,
            'example' => 'CHEST',
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
                'example' => '57784EDF-7322-1559-89C2-26A08570B26B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultURL' => 
                  array (
                    'description' => '分割结果下载地址，有效时间5分钟。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"57784EDF-7322-1559-89C2-26A08570B26B\\",\\n  \\"Data\\": {\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-cacs/2020-09-29/2020-09-29-11%3A07%3A41-D74FE0DF-8F80-41EB-B08B-2E67053587EC.tar.gz?Expires=1601350661&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iB16ms28Y5mzB11ghYUd7upCi4****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<SegmentOARResponse>\\n    <RequestId>57784EDF-7322-1559-89C2-26A08570B26B</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</SegmentOARResponse>","errorExample":""}]',
      'title' => '多器官分割',
      'description' => '## 功能描述 
多器官分割能力针对放疗场景，基于输入的胸部CT图像，进行危及器官的识别与分割。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/SegmentOAR?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：DICOM、NIFTI。
- 图像分辨率：不小于512×512像素。
- 如果输入格式为DICOM，每次请求帧数最少20帧，最多600帧；如果输入格式为NIFTI，每次请求须有且仅有一例数据。
- URL地址中不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用SegmentOAR接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的多器官分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于多器官分割的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScreenEC' => 
    array (
      'summary' => '本文介绍食管癌检测ScreenEC的语法及示例。',
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
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxLength' => 600,
            'minLength' => 20,
            'maxItems' => 600,
            'minItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持`HTTP_FILES`和`HTTP_NII`。
',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
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
                'example' => '9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Possibilities' => 
                      array (
                        'description' => '三类分类预测的概率，依次对应正常食管、食管癌、非食管癌病变，取值范围0~1。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '三类分类预测的概率，依次对应正常食管、食管癌、非食管癌病变，取值范围0~1。',
                          'type' => 'string',
                          'example' => '"0.9481","0.0441","0.0078"',
                        ),
                      ),
                      'EsoVolume' => 
                      array (
                        'description' => '食管体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '26814',
                      ),
                      'EcVolume' => 
                      array (
                        'description' => '食管癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'BenignVolume' => 
                      array (
                        'description' => '非食管癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'Mask' => 
                      array (
                        'description' => '病灶Mask地址。

> 有效时间为3天，3天后链接失效，需要重新生成。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****',
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"Possibilities\\": [\\n        \\"\\\\\\"0.9481\\\\\\",\\\\\\"0.0441\\\\\\",\\\\\\"0.0078\\\\\\"\\"\\n      ],\\n      \\"EsoVolume\\": \\"26814\\",\\n      \\"EcVolume\\": \\"0\\",\\n      \\"BenignVolume\\": \\"0\\",\\n      \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****\\"\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ScreenECResponse>\\n    <RequestId>9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ScreenECResponse>","errorExample":""}]',
      'title' => '食管癌检测',
      'description' => '## 功能描述 
食管癌检测能力可以根据输入的胸部平扫CT评估食管癌风险。实际可用于扫描范围涵盖食管的平扫CT，如胸部平扫CT、腹部平扫CT等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查：支持输入食管平扫CT评估食管癌风险，可输出分类结果和病灶分割结果。

## 特色优势

- 食管癌风险评估：对正常食管组织、食管癌、非食管癌病变进行三分类的概率，其中三者中最高的一项为分类结果。
- 病灶可视化：输出正常食管组织、食管癌、非食管癌病变的体积及对应的分割结果（以NIFTI文件标识）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/ScreenEC?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：DICOM。
- 每次请求帧数最少20帧，最多600帧。
- URL地址长度为20~600，且不能包含中文字符。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用ScreenEC接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的食管癌检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于食管癌检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'TargetVolumeSegment' => 
    array (
      'summary' => '本文介绍放疗靶区勾画TargetVolumeSegment的语法及示例。',
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
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",...]。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 600,
            'minItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        2 => 
        array (
          'name' => 'CancerType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '癌症类型。包括Eso、Lung和Breast等，当前只支持Lung。
- Eso：食管癌
- Lung：肺癌
- Breast：乳腺癌',
            'type' => 'string',
            'required' => true,
            'example' => 'LUNG',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetVolumeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标体积类型。包括GTV、CTV和PTV，当前只支持GTV。
- GTV：肿瘤区（Gross Tumor Volume）
- CTV：临床靶区（Clinical Target Volume）
- PTV：计划靶区（Planning Target Volume）',
            'type' => 'string',
            'required' => true,
            'example' => 'GTV',
          ),
        ),
        4 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
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
                'example' => '6cc7232e-d38b-4dda-b86d-6e0e31704fa1',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultURL' => 
                  array (
                    'description' => 'NIFTI格式的分割mask文件HTTP地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-01-31/13%3A59%3A57/286304994262646784.nii.gz?Expires=1675146629&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=L7jGtdydjfaFxQQCwqe4q4hlHz****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => 'Id of the request',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6cc7232e-d38b-4dda-b86d-6e0e31704fa1\\",\\n  \\"Data\\": {\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-01-31/13%3A59%3A57/286304994262646784.nii.gz?Expires=1675146629&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=L7jGtdydjfaFxQQCwqe4q4hlHz****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<TargetVolumeSegmentResponse>\\n    <RequestId>6cc7232e-d38b-4dda-b86d-6e0e31704fa1</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</TargetVolumeSegmentResponse>","errorExample":""}]',
      'title' => '放疗靶区勾画',
      'description' => '## 功能描述
放疗靶区勾画能力可以根据输入的胸部平扫或增强CT，指定癌症类型和靶区类型，进行智能靶区勾画。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/TargetVolumeSegment?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用TargetVolumeSegment接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的放疗靶区勾画能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于放疗靶区勾画的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'SegmentLymphNode' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的放疗淋巴站分割SegmentLymphNode的语法及示例。',
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
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",...]。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 600,
            'minItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        2 => 
        array (
          'name' => 'BodyPart',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '期望输出的危及器官所在的身体部位。当前版本只支持CHEST。

- CHEST：胸部
- HEAD：头颅',
            'type' => 'string',
            'required' => true,
            'example' => 'CHEST',
          ),
        ),
        3 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
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
                'example' => 'B48DECE6-29FE-1967-92F1-2E072873851A',
              ),
              'Data' => 
              array (
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResultURL' => 
                  array (
                    'description' => 'NIFTI格式的分割mask文件HTTP地址。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-03-06/18%3A03%3A28/286574099408093190.nii.gz?Expires=1678098808&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=jsPwP7rg4orZQFC6USE3JUOJcS****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B48DECE6-29FE-1967-92F1-2E072873851A\\",\\n  \\"Data\\": {\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-03-06/18%3A03%3A28/286574099408093190.nii.gz?Expires=1678098808&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=jsPwP7rg4orZQFC6USE3JUOJcS****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<SegmentLymphNodeResponse>\\n    <RequestId>B48DECE6-29FE-1967-92F1-2E072873851A</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</SegmentLymphNodeResponse>","errorExample":""}]',
      'title' => '放疗淋巴站分割',
      'description' => '## 功能描述
放疗淋巴站分割能力可以根据输入的胸部平扫或增强CT，指定目标部位，进行淋巴站分割。其中，目标部位为胸部（CHEST），最终以NIFTI格式mask的形式给出淋巴站分割的结果。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查：支持输入胸部平扫CT评估肠癌风险，可输出分类结果和病灶分割结果。

## 特色优势
- 肠癌风险评估：输出正常肠、肠癌、非肠癌病变的三分类概率，其中三者中最高的一项为分类结果。
- 病灶可视化：输出正常肠、肠癌、非肠癌病变的体积及对应的分割结果（以NIFTI文件标识）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/SegmentLymphNode?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用SegmentLymphNode接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的放疗淋巴站分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于放疗淋巴站分割的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'CalcBMD' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的骨密度估计CalcBMD的语法及示例。',
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
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持HTTP_FILES和HTTP_NII。
- HTTP_FILES为序列文件。
- HTTP_NII为单个文件。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",......]。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => 'B48DECE6-29FE-1967-92F1-2E072873851A',
              ),
              'Data' => 
              array (
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Detections' => 
                  array (
                    'description' => '椎体检出结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '椎体检出结果。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VertId' => 
                        array (
                          'description' => '椎体编号。',
                          'type' => 'string',
                          'example' => 'L1',
                        ),
                        'VertBMD' => 
                        array (
                          'description' => '椎体骨密度估计值，单位为g/c㎡。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.78',
                        ),
                        'VertTScore' => 
                        array (
                          'description' => '椎体T评分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '-2.5',
                        ),
                        'VertZScore' => 
                        array (
                          'description' => '椎体Z评分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => 'NaN',
                        ),
                        'VertCategory' => 
                        array (
                          'description' => '椎体分类。

- 0：正常
- 1：骨质减少
- 2：骨质疏松',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => 'NaN',
                        ),
                      ),
                    ),
                  ),
                  'Spacing' => 
                  array (
                    'description' => '每个像素之间的物理距离间隔。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个像素之间的物理距离间隔。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[3.75, 0.576172, 0.576172]',
                    ),
                  ),
                  'Origin' => 
                  array (
                    'description' => '像素坐标系原点在物理坐标系中的位置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '像素坐标系原点在物理坐标系中的位置。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[-325, -155.300003, -146.699997]',
                    ),
                  ),
                  'ResultURL' => 
                  array (
                    'description' => 'NIFTI格式的分割mask文件HTTP地址。

> 有效时间为5分钟，5分钟后链接失效，需要重新生成。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-bmd/local_test/2023-03-31/7772ECE3-22A7-193F-81B4-B0D6A02B5DAF-result.tgz?Expires=1680486509&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=GWi%2BhCCtamefKVYiS9oZJduswH****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B48DECE6-29FE-1967-92F1-2E072873851A\\",\\n  \\"Data\\": {\\n    \\"Detections\\": [\\n      {\\n        \\"VertId\\": \\"L1\\",\\n        \\"VertBMD\\": 0.78,\\n        \\"VertTScore\\": -2.5,\\n        \\"VertZScore\\": 0,\\n        \\"VertCategory\\": 0\\n      }\\n    ],\\n    \\"Spacing\\": [\\n      0\\n    ],\\n    \\"Origin\\": [\\n      0\\n    ],\\n    \\"ResultURL\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/calc-bmd/local_test/2023-03-31/7772ECE3-22A7-193F-81B4-B0D6A02B5DAF-result.tgz?Expires=1680486509&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=GWi%2BhCCtamefKVYiS9oZJduswH****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<CalcBMDResponse>\\n    <RequestId>B48DECE6-29FE-1967-92F1-2E072873851A</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</CalcBMDResponse>","errorExample":""}]',
      'title' => '骨密度估计',
      'description' => '## 功能描述
骨密度估计能力可以根据输入的胸部或腹部CT成像进行椎体定位、命名以及骨密度估计。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
医疗体检：骨质疏松筛查。

## 特色优势
- 输入胸部CT检测腰椎。
- 根据腰椎计算骨密度值，以T评分、Z评分和分类方式进行骨密度描述。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/CalcBMD?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用SegmentLymphNode接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的骨密度估计能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于骨密度估计的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectLiverSteatosis' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的脂肪肝检测DetectLiverSteatosis的语法及示例。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持HTTP_FILES和HTTP_NII。
- HTTP_FILES为序列文件。
- HTTP_NII为单个文件。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",......]。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '39C848F7-D814-1A06-AE0D-AFC706B9700F',
              ),
              'Data' => 
              array (
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Detections' => 
                  array (
                    'description' => '脂肪肝检出结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '脂肪肝检出结果。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ROI1Center' => 
                        array (
                          'description' => '肝脏ROI1中心坐标。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '肝脏ROI1中心坐标。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[98,193]',
                          ),
                        ),
                        'ROI2Center' => 
                        array (
                          'description' => '肝脏ROI2中心坐标。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '肝脏ROI2中心坐标。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[182,166]',
                          ),
                        ),
                        'ROI3Center' => 
                        array (
                          'description' => '肝脏ROI3中心坐标。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '肝脏ROI3中心坐标。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[182,296]',
                          ),
                        ),
                        'SpleenCenter' => 
                        array (
                          'description' => '脾脏ROI中心坐标。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '脾脏ROI中心坐标。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '[433,346]',
                          ),
                        ),
                        'Radius' => 
                        array (
                          'description' => '圆形ROI半径。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1.0',
                        ),
                        'LiverSlice' => 
                        array (
                          'description' => '肝脏ROI对应的slice坐标。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '12.0',
                        ),
                        'SpleenSlice' => 
                        array (
                          'description' => '脾脏ROI对应的slice坐标。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '9.0',
                        ),
                        'LiverVolume' => 
                        array (
                          'description' => '肝脏体积测量。单位：cm³（立方厘米）。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1059.4175610625439',
                        ),
                        'SpleenVolume' => 
                        array (
                          'description' => '脾脏体积测量。单位：cm³（立方厘米）。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '156.01873229470647',
                        ),
                        'LiverHU' => 
                        array (
                          'description' => '肝脏衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '62.07644147383561',
                        ),
                        'SpleenHU' => 
                        array (
                          'description' => '脾脏衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '53.86993919857013',
                        ),
                        'LiverROI1' => 
                        array (
                          'description' => '肝脏局部ROI1衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '63.50222396850586',
                        ),
                        'LiverROI2' => 
                        array (
                          'description' => '肝脏局部ROI2衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '62.23713684082031',
                        ),
                        'LiverROI3' => 
                        array (
                          'description' => '肝脏局部ROI3衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '59.78181838989258',
                        ),
                        'SpleenROI' => 
                        array (
                          'description' => '脾脏局部ROI衰减值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '50.553409576416016',
                        ),
                        'LiverSpleenDifference' => 
                        array (
                          'description' => '肝脾衰减差。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '8.206502275265478',
                        ),
                        'LiverSpleenRatio' => 
                        array (
                          'description' => '肝脾衰减比。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1.15233917834983',
                        ),
                        'Prediction' => 
                        array (
                          'description' => '检测结果等级，包括无，轻，中，重。',
                          'type' => 'string',
                          'example' => 'Mod',
                        ),
                        'Probability' => 
                        array (
                          'description' => '脂肪肝概率。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9457855224609375',
                        ),
                      ),
                    ),
                  ),
                  'Spacing' => 
                  array (
                    'description' => '每个像素之间的物理距离间隔。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个像素之间的物理距离间隔。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[3.75,0.576172,0.576172]',
                    ),
                  ),
                  'Origin' => 
                  array (
                    'description' => '像素坐标系原点在物理坐标系中的位置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '像素坐标系原点在物理坐标系中的位置。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[-325.0,-155.300003,-146.699997]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"39C848F7-D814-1A06-AE0D-AFC706B9700F\\",\\n  \\"Data\\": {\\n    \\"Detections\\": [\\n      {\\n        \\"ROI1Center\\": [\\n          0\\n        ],\\n        \\"ROI2Center\\": [\\n          0\\n        ],\\n        \\"ROI3Center\\": [\\n          0\\n        ],\\n        \\"SpleenCenter\\": [\\n          0\\n        ],\\n        \\"Radius\\": 1,\\n        \\"LiverSlice\\": 12,\\n        \\"SpleenSlice\\": 9,\\n        \\"LiverVolume\\": 1059.4175610625439,\\n        \\"SpleenVolume\\": 156.01873229470647,\\n        \\"LiverHU\\": 62.07644147383561,\\n        \\"SpleenHU\\": 53.86993919857013,\\n        \\"LiverROI1\\": 63.50222396850586,\\n        \\"LiverROI2\\": 62.23713684082031,\\n        \\"LiverROI3\\": 59.78181838989258,\\n        \\"SpleenROI\\": 50.553409576416016,\\n        \\"LiverSpleenDifference\\": 8.206502275265478,\\n        \\"LiverSpleenRatio\\": 1.15233917834983,\\n        \\"Prediction\\": \\"Mod\\",\\n        \\"Probability\\": 0.9457855224609375\\n      }\\n    ],\\n    \\"Spacing\\": [\\n      0\\n    ],\\n    \\"Origin\\": [\\n      0\\n    ]\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectLiverSteatosisResponse>\\n    <RequestId>39C848F7-D814-1A06-AE0D-AFC706B9700F</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</DetectLiverSteatosisResponse>","errorExample":""}]',
      'title' => '脂肪肝检测',
      'description' => '## 功能描述
脂肪肝检测算法可以根据输入的胸部或腹部CT成像进行肝脾定位分割，以及肝脾全局或局部密度统计测量，最终根据测量结果和深度模型计算，判断有无脂肪肝以及脂肪肝的严重程度。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查：支持输入胸腹部平扫CT评估脂肪肝风险，可输出分类结果和病灶分割结果。

## 特色优势

- 脂肪肝风险评估：给出有无脂肪肝的概率，并评估脂肪肝的严重程度。
- 病灶可视化：并输出脂肪肝体积及对应的分割结果（以NIFTI文件标识）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/DetectLiverSteatosis?spm=a2c4g.51704.0.i0&lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 如果**SourceType**字段为`HTTP_FILES`且**DataFormat**字段为`DICOM`，URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。
- 如果**SourceType**字段为`HTTP_NII`且**DataFormat**字段为`NIFTI`，URLList长度须仅为1且可访问。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用DetectLiverSteatosis接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的脂肪肝检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于脂肪肝检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScreenCRC' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的结直肠癌检测ScreenCRC的语法及示例。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持HTTP_FILES，HTTP_FILES为序列文件。
',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DICOM序列文件url列表或NIFTI文件url列表\\["ur","url",...]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DICOM序列文件url列表或NIFTI文件url列表\\["ur","url",...]。',
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",...]。

推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '39C848F7-D814-1A06-AE0D-AFC706B9700F',
              ),
              'Data' => 
              array (
                'title' => 'job',
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Probabilities' => 
                      array (
                        'description' => '两类分类预测的概率，依次对应健康、结直肠癌。',
                        'type' => 'string',
                        'example' => '0.0779, 0.9221',
                      ),
                      'ColorectumVolume' => 
                      array (
                        'description' => '结直肠体积，单位：立方厘米（cm³）。',
                        'type' => 'string',
                        'example' => '255.93',
                      ),
                      'CRCVolume' => 
                      array (
                        'description' => '结直肠癌病变体积，单位：立方厘米（cm³）。',
                        'type' => 'string',
                        'example' => '7.83',
                      ),
                      'Mask' => 
                      array (
                        'description' => '病灶Mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_crc/crc_case2_pre.nii.gz?Expires=1680766116&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=9n9C%2B2MnyvLwAC%2FwFyxgY****',
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '任务状态标识。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"39C848F7-D814-1A06-AE0D-AFC706B9700F\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"Probabilities\\": \\"0.0779, 0.9221\\",\\n      \\"ColorectumVolume\\": \\"255.93\\",\\n      \\"CRCVolume\\": \\"7.83\\",\\n      \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_crc/crc_case2_pre.nii.gz?Expires=1680766116&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=9n9C%2B2MnyvLwAC%2FwFyxgY****\\"\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ScreenCRCResponse>\\n    <RequestId>39C848F7-D814-1A06-AE0D-AFC706B9700F</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ScreenCRCResponse>","errorExample":""}]',
      'title' => '结直肠癌检测',
      'description' => '## 功能描述 
输入扫描范围覆盖结直肠的平扫CT，如：胸部平扫CT、腹部平扫CT等，检测结直肠癌（colorectal cancer，CRC）。具体包括：

- 给出诊断结果：结直肠癌或健康。
- 分别给出上述类别的体积，并显示其区域（以nifti文件标识）。
- 分别给出上述类别的概率。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/ScreenCRC?spm=a2c4g.51704.0.i0)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。

## 调用步骤
该能力为异步能力，需分以下几步进行调用。
第一步调用ScreenCRC接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的结直肠癌筛查能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于结直肠癌检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScreenGC' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的胃癌检测ScreenGC的语法及示例。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '图片格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持HTTP_FILES。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",......]。
推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6',
              ),
              'Data' => 
              array (
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Probabilities' => 
                      array (
                        'description' => '三类分类预测的概率，依次对应正常胃部、胃癌、非胃癌病变，取值范围0~1。',
                        'type' => 'string',
                        'example' => '["0.1467", "0.8533", "0.0000"]',
                      ),
                      'StomachVolume' => 
                      array (
                        'description' => '胃部体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '508.79',
                      ),
                      'GCVolume' => 
                      array (
                        'description' => '胃癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '5.86',
                      ),
                      'NonGCVolume' => 
                      array (
                        'description' => '非胃癌病变体积，单位：cm³。',
                        'type' => 'string',
                        'example' => '0.00',
                      ),
                      'Mask' => 
                      array (
                        'description' => '病灶Mask地址。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                        'type' => 'string',
                        'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****',
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"Probabilities\\": \\"[\\\\\\"0.1467\\\\\\", \\\\\\"0.8533\\\\\\", \\\\\\"0.0000\\\\\\"]\\",\\n      \\"StomachVolume\\": \\"508.79\\",\\n      \\"GCVolume\\": \\"5.86\\",\\n      \\"NonGCVolume\\": \\"0.00\\",\\n      \\"Mask\\": \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****\\"\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ScreenGCResponse>\\n    <RequestId>9B65AC8E-311A-1ED1-BBE6-6AA6D35D31A6</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ScreenGCResponse>","errorExample":""}]',
      'title' => '胃癌检测',
      'description' => '## 功能描述
胃癌检测算法可以根据输入扫描范围覆盖胃的平扫CT（例如胸部或腹部平扫CT等），检测胃癌和非胃癌病变。具体包括：
- 输出诊断结果，包括健康、胃癌、非胃癌病变。
- 分别输出诊断结果的概率。
- 分别输出诊断结果的体积，并显示其区域（以NIFTI文件标识）。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
体检筛查：支持输入胸腹部平扫CT评估胃癌风险，可输出分类结果和病灶分割结果。

## 特色优势
- 胃癌风险评估：给出有无胃癌的概率，并评估胃癌的严重程度。
- 病灶可视化：输出胃癌体积及对应的分割结果（以NIFTI文件标识）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/ScreenGC?spm=a2c4g.51704.0.i19)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。

## 调用步骤
该能力为异步能力，需分两步进行调用。
第一步调用ScreenGC接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的胃癌检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于胃癌检测的错误码。详情请参见[常见错误码](~~159693~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ScreenLC' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的肝癌检测ScreenLC的语法及示例。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，公有云支持HTTP_FILES。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
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
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",......\\]。

推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '473dbfb0-9cb7-e18e-450b-e4d0e4ce6c1c',
              ),
              'Data' => 
              array (
                'title' => 'job',
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Mask' => 
                      array (
                        'description' => '病灶mask。',
                        'type' => 'string',
                        'example' => '20-050_0000.nii.gz',
                      ),
                      'PatientLevelResult' => 
                      array (
                        'description' => '病人级别诊断。

>病人诊断有肝癌的概、非肝癌的恶性肿瘤的概率、非囊肿的良性肿瘤的概率以及有囊肿的概率的和不为1，因为病人可能有多种肿瘤。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'HCCProb' => 
                          array (
                            'description' => '诊断为肝癌的概率。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.9941',
                          ),
                          'MalignantNonHCCProb' => 
                          array (
                            'description' => '诊断有非肝癌的恶性肿瘤的概率。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.0073',
                          ),
                          'BenignNonCystProb' => 
                          array (
                            'description' => '诊断有非囊肿的良性肿瘤的概率。',
                            'type' => 'string',
                            'example' => '0.0077',
                          ),
                          'CystProb' => 
                          array (
                            'description' => '诊断有囊肿的概率。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.9233',
                          ),
                        ),
                      ),
                      'LiverVolume' => 
                      array (
                        'description' => '肝脏（包括肿瘤）总体积，单位：立方厘米（cm³）。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1364.9468',
                      ),
                      'LesionList' => 
                      array (
                        'description' => '病灶列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '病灶列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '病灶类别：HCC、other_malignant、other_benign、cyst。',
                              'type' => 'string',
                              'example' => 'HCC',
                            ),
                            'Volume' => 
                            array (
                              'description' => '病灶体积，单位：立方厘米（cm³）。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '305.3661',
                            ),
                            'KeySlice' => 
                            array (
                              'description' => 'RECIST长短径所在的关键帧（第一帧编号为0）。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '100',
                            ),
                            'RecistEndpoints' => 
                            array (
                              'description' => 'RECIST长短径的端点。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RECIST长短径的端点，\\[\\[x11,y11\\],\\[x12,y12\\],\\[x21,y21\\],\\[x22,y22\\]\\]，其中\\[x11,y11\\],\\[x12,y12\\]代表长径，\\[x21,y21\\], \\[x22,y22\\]代表短径。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '[94, 195],[159, 315],[80, 295],[175, 243]',
                              ),
                            ),
                            'Diameter' => 
                            array (
                              'description' => '长短径的长度，单位：毫米（mm）。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '长短径的长度，单位：毫米（mm）。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '108.4857, 86.0904',
                              ),
                            ),
                            'Malignancy' => 
                            array (
                              'description' => '恶性概率。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.9375',
                            ),
                          ),
                        ),
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473dbfb0-9cb7-e18e-450b-e4d0e4ce6c1c\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"Mask\\": \\"20-050_0000.nii.gz\\",\\n      \\"PatientLevelResult\\": {\\n        \\"HCCProb\\": 0.9941,\\n        \\"MalignantNonHCCProb\\": 0.0073,\\n        \\"BenignNonCystProb\\": \\"0.0077\\",\\n        \\"CystProb\\": 0.9233\\n      },\\n      \\"LiverVolume\\": 1364.9468,\\n      \\"LesionList\\": [\\n        {\\n          \\"Type\\": \\"HCC\\",\\n          \\"Volume\\": 305.3661,\\n          \\"KeySlice\\": 100,\\n          \\"RecistEndpoints\\": [\\n            0\\n          ],\\n          \\"Diameter\\": [\\n            0\\n          ],\\n          \\"Malignancy\\": 0.9375\\n        }\\n      ]\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ScreenLCResponse>\\n    <RequestId>473dbfb0-9cb7-e18e-450b-e4d0e4ce6c1c</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ScreenLCResponse>","errorExample":""}]',
      'title' => '肝癌检测',
      'description' => '## 功能描述
输入扫描范围覆盖肝脏的平扫CT，如：胸部平扫CT、腹部平扫CT等，需要是纵膈窗重建，最好是厚层CT，薄层CT也可以运行但精度可能略低。检测多种肝脏肿瘤。具体包括： 

- 病灶诊断结果：肝癌（HCC）、非肝癌的恶性肿瘤、非囊肿的良性肿瘤、囊肿、健康。

- 上述病灶类别的概率。

- 病灶的类别、体积、关键帧、RECIST长短径位置和长度、恶性概率，并显示其区域（以nifti文件标识）。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。

2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open )。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/ScreenLC?spm=a2c4g.51704.0.i0)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：

- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
  
 **URLList**长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张）。

## 调用步骤

该能力为异步能力，需分两步进行调用。

第一步调用ScreenLC接口提交任务，请求成功后，得到一个任务ID。

第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。





',
      'responseParamsDescription' => '##  查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

##  SDK参考
阿里云视觉AI图像分析处理类目下的肝癌检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。


##  示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。


',
      'extraInfo' => '##  错误码
关于肝癌检测的错误码。详情请参见[常见错误码](~~159693~~)。

##  安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。

- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'PredictCVD' => 
    array (
      'summary' => '本文介绍图像分析处理（imageprocess）类目下的CVD心血管不良事件检测PredictCVD的语法及示例。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataFormat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的格式。支持DICOM或NIFTI。',
            'type' => 'string',
            'required' => true,
            'example' => 'DICOM',
          ),
        ),
        1 => 
        array (
          'name' => 'OrgName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试组织',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前渠道（即主账号）下的子渠道（即机构，如医院）标识。',
            'type' => 'string',
            'required' => true,
            'example' => '7ff51bfe-e73d-11ea-827d-506b4b3f3cf6',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入数据的类型，支持HTTP_FILES。HTTP_FILES为序列文件。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP_FILES',
          ),
        ),
        4 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像URL列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图像URL列表。',
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'DICOM序列文件URL列表或NIFTI文件URL列表\\["url","url",...]。

推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
> URLList.N.URL中的N为该图像URL在当前List中的顺序（从1开始）。当直接使用API请求时，输入URLList的填充会以URLList.1.URL=url1，URLList.2.URL=url2，......的方式指定参数和参数值，参数对以&连接，其中url1、url2、......等具体值请根据实际情况进行替换；当使用SDK填充URLList时，可直接使用SDK提供的相应的方法。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/xxx/0001.dcm',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 600,
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
                'example' => '7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4',
              ),
              'Data' => 
              array (
                'description' => '该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                'type' => 'object',
                'properties' => 
                array (
                  'Lesion' => 
                  array (
                    'description' => '病灶描述。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FeatureScore' => 
                      array (
                        'description' => '特征值描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MyoEpiRatio' => 
                          array (
                            'description' => '心肌/心外膜比率。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '心肌/心外膜比率。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '72.34564319505104, 0.19550363719463348',
                            ),
                          ),
                          'AscAoMaxDiam' => 
                          array (
                            'description' => '升主动脉最大直径。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '升主动脉最大直径。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '0.5903897218571467, 0.02410123310983181',
                            ),
                          ),
                          'CoronaryCalciumVol' => 
                          array (
                            'description' => '冠状动脉钙化体积（单位：cm³）。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '冠状动脉钙化体积（单位：cm³）。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '142.48924255371094, 0.013891000300645828',
                            ),
                          ),
                          'EatVolume' => 
                          array (
                            'description' => '心脏表面和心包之间的脂肪组织体积（单位：cm³）。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '心脏表面和心包之间的脂肪组织体积（单位：cm³）。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '172452.69470214844, 0.02982756681740284',
                            ),
                          ),
                          'AortaCalciumScore' => 
                          array (
                            'description' => '主动脉钙化评分。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '主动脉钙化评分。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '273.66981506347656, 0.0013405405916273594',
                            ),
                          ),
                          'CardioThoracicRatio' => 
                          array (
                            'description' => '心胸比。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '心胸比。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '0.5422740524781341, 0.0005164738977327943',
                            ),
                          ),
                          'EatHUMean' => 
                          array (
                            'description' => '心外脂肪组织的平均Hounsfield单位数值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '心外脂肪组织的平均Hounsfield单位数值。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '-85.05931303116148, 0.01098276674747467',
                            ),
                          ),
                          'EatHUSTD' => 
                          array (
                            'description' => '心外脂肪组织的Hounsfield单位数值的标准差。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '心外脂肪组织的Hounsfield单位数值的标准差。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '27.468474279178704, 0.09224013239145279',
                            ),
                          ),
                          'RightLungLowattRatio' => 
                          array (
                            'description' => '右肺低密度区域比值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '右肺低密度区域比值。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '0.0002497813107143641, 0.028977323323488235',
                            ),
                          ),
                          'AscendAortaLength' => 
                          array (
                            'description' => '升主动脉长度。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '升主动脉长度。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '90.40661132335663, 0.01413580309599638',
                            ),
                          ),
                          'LeftLungLowattRatio' => 
                          array (
                            'description' => '左肺低密度区域比值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '左肺低密度区域比值。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '0.0009580087202916068, 0.0066444058902561665',
                            ),
                          ),
                          'DeepFeature' => 
                          array (
                            'description' => '深度特征值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '深度特征值。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '0.5462655425071716',
                            ),
                          ),
                          'AortaCalciumVolume' => 
                          array (
                            'description' => '主动脉钙化体积（单位：cm³）。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '主动脉钙化体积（单位：cm³）。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '251.05247497558594, 0.014336814172565937',
                            ),
                          ),
                          'CoronaryCalciumScore' => 
                          array (
                            'description' => '冠状动脉钙化评分。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '冠状动脉钙化评分。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '144.7509765625, 0.021236803382635117',
                            ),
                          ),
                        ),
                      ),
                      'CVDProbability' => 
                      array (
                        'description' => '取值（0,1）之间，描述该特征在cvd风险预测中的权重。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0.5',
                      ),
                      'ResultURL' => 
                      array (
                        'description' => '病灶Mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '病灶Mask，以HTTP地址给出。

> 有效时间为30分钟，30分钟后链接失效，需要重新生成。',
                          'type' => 'string',
                          'example' => 'http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****',
                        ),
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4\\",\\n  \\"Data\\": {\\n    \\"Lesion\\": {\\n      \\"FeatureScore\\": {\\n        \\"MyoEpiRatio\\": [\\n          0\\n        ],\\n        \\"AscAoMaxDiam\\": [\\n          0\\n        ],\\n        \\"CoronaryCalciumVol\\": [\\n          0\\n        ],\\n        \\"EatVolume\\": [\\n          0\\n        ],\\n        \\"AortaCalciumScore\\": [\\n          0\\n        ],\\n        \\"CardioThoracicRatio\\": [\\n          0\\n        ],\\n        \\"EatHUMean\\": [\\n          0\\n        ],\\n        \\"EatHUSTD\\": [\\n          0\\n        ],\\n        \\"RightLungLowattRatio\\": [\\n          0\\n        ],\\n        \\"AscendAortaLength\\": [\\n          0\\n        ],\\n        \\"LeftLungLowattRatio\\": [\\n          0\\n        ],\\n        \\"DeepFeature\\": [\\n          0.5462655425071716\\n        ],\\n        \\"AortaCalciumVolume\\": [\\n          0\\n        ],\\n        \\"CoronaryCalciumScore\\": [\\n          0\\n        ]\\n      },\\n      \\"CVDProbability\\": 0.5,\\n      \\"ResultURL\\": [\\n        \\"http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****\\"\\n      ]\\n    }\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<PredictCVDResponse>\\n    <RequestId>7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</PredictCVDResponse>","errorExample":""}]',
      'title' => 'CVD心血管不良事件检测  ',
      'description' => '## 功能描述 
基于平扫胸部（胸腹部）CT（门控或非门控都可以），实现冠脉钙化积分、主动脉钙化积分、心外膜脂肪等13种指标的量化值，并给出该患者发生心血管不良事件的概率。
> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[图像分析处理](https://vision.aliyun.com/imageprocess)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageprocess_public_cn#/open)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/imageprocess/2020-03-20/PredictCVD?spm=a2c4g.51704.0.i0)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为图像分析处理（imageprocess）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
URLList长度大于20且小于600（即每个序列的slice张数最少20张，最大支持600张），每个URL需通过HTTP协议可访问。


## 调用步骤
该能力为异步能力，需分以下几步进行调用。
第一步调用PredictCVD接口提交任务，请求成功后，得到一个任务ID。
第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。

## 计费说明
CVD心血管不良事件检测能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## 查询结果
该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。

## SDK参考
阿里云视觉AI图像分析处理类目下的CVD心血管不良事件检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为图像分析处理（imageprocess）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
      'extraInfo' => '## 错误码
关于CVD心血管不良事件检测的错误码。详情请参见[常见错误码](~~159693~~)。

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
      'endpoint' => 'imageprocess.cn-shanghai.aliyuncs.com',
    ),
  ),
);